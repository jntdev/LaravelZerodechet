<?php

namespace App\Http\Controllers;


use App\Mail\EventModified;
use App\Mail\RegisterToAnim;
use App\Mail\RegisterToUser;
use App\Mail\RegistrationDelete;
use App\Mail\RegistrationModified;
use App\Models\Event;
use App\Models\Registration;
use App\Models\loggedController;
use App\User\Facades\CheckerFacade;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index(int $eventId): View
    {
        /** @var Event|null $event */
        $event = Event::find($eventId);
        $userId = Auth::user()->id;
        $currentUserRegistration = Registration::where([['user_id', "=","$userId"],['event_id', "=","$eventId"]])->first();



        return view('events.registration', compact('event','currentUserRegistration'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function submit(Request $request): RedirectResponse
    {
        /** @var string $eventId */
        $eventId = $request->event_id;
        /** @var Event|null $event */
        $event = Event::find($eventId);

        if ($event === null) {
            return redirect()->route('event_index')->with('error', 'L\'animation n\'existe pas ou a été supprimée');
        }

        /** @var Registration|null $registrations */
        $registrations = Registration::where('event_id', $eventId)->get();


        /** @var int $nbPlayers */
        $nbPlayers = 0;

        /** @var Registration|null $userRegistration */
        $currentUserRegistration = Registration::where([['user_id', "=","$request->user_id"],['event_id', "=","$request->event_id"]])->first();


        /** @var int $userRegistrationNbPlayers */
        $userRegistrationNbPlayers = 0;
        if ($currentUserRegistration) {
            $userRegistrationNbPlayers = $currentUserRegistration->nb_players;
        }

        if ($registrations) {
            foreach ($registrations as $registration) {
                $nbPlayers += $registration->nb_players;
            }
        }
        /** @var int $nbPlayersToAdd */
        $nbPlayersToAdd = (int)$request->nb_participant;

        if (($nbPlayers - $userRegistrationNbPlayers + $nbPlayersToAdd) > $event->nb_max_user) {
            return redirect()->route('event_registration_view', ['id' => $eventId])->with('error', 'nombre de participant max dépassé');
        }

        if ($currentUserRegistration) {

            $currentUserRegistration->nb_players = $nbPlayersToAdd;
            $currentUserRegistration->save();
            $user= Auth::user();
            $Registrations = Registration::where('event_id', $eventId)->get();

            $nbRegistrations = $Registrations->sum('nb_players');

            Mail::to($event->user->email)->send(new RegistrationModified($user, $event, $nbRegistrations, $nbPlayersToAdd ));
        } else {

            Registration::create(
                [
                    'nb_players' => $nbPlayersToAdd,
                    'user_id'    => $request->user_id,
                    'event_id'   => $eventId,
                ]
            );
            $user= Auth::user();


            Mail::to($user->email)->send(new RegisterToUser($event));

            $Registrations = Registration::where('event_id', $eventId)->get();
            $totalNbPlayers = $Registrations->sum('nb_players');

            Mail::to($event->user->email)->send(new RegisterToAnim($user, $event, $totalNbPlayers, $nbPlayersToAdd ));
        }

        //pour le User, on a besoin de passer toutes les infos de l'event

        //pour l'anim, on a besoin de passer les infos utiles du user
        //option : ajouter le compte restant des registrations: x/y




        return redirect()->route('event_show', ['event_id' => $eventId])->with('success', 'Votre inscription a bien été prise en compte');
    }

    public function delete(Request $request): RedirectResponse
    {

        $eventId = $request->event_id;
        $userId = Auth::user()->id;
        $user=Auth::user();
        $currentUserRegistration = Registration::where([['user_id', "=","$userId"],['event_id', "=","$eventId"]])->first();
        $event = Event::find($eventId);
        $slots= $request->nb_participant;



        if (CheckerFacade::canDeleteRegistration($currentUserRegistration->user_id)) {
            Registration::destroy($currentUserRegistration->id);

            //option : ajouter le compte restant des registrations: x/y

            Mail::to('anim@mail.test')->send(new RegistrationDelete($user, $event,$slots));
            return redirect()->route('event_list')->with('success', 'La réserveration a été supprimée');
        }
        return redirect()->route('events.registration')->with('error', 'Une erreur est survenue');

    }
}


