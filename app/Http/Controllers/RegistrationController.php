<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use App\Models\loggedController;
use App\User\Facades\CheckerFacade;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

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
        } else {

            Registration::create(
                [
                    'nb_players' => $nbPlayersToAdd,
                    'user_id'    => $request->user_id,
                    'event_id'   => $eventId,
                ]
            );
        }

        return redirect()->route('event_show', ['event' => $eventId])->with('success', 'Votre inscription a bien été prise en compte');
    }

    public function delete(): RedirectResponse
    {
        $userId = Auth::user()->id;
        $currentUserRegistration = Registration::where('user_id',$userId)->first();

        if (CheckerFacade::canDeleteRegistration($currentUserRegistration->user_id)) {
            Registration::destroy($currentUserRegistration->id);
            return redirect()->route('event_list')->with('success', 'La réserveration a été supprimée');
        }
        return redirect()->route('events.registration')->with('error', 'Une erreur est survenue');

    }
}


