<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class RegistrationController extends Controller
{
    public function index(int $eventId): View
    {
        /** @var Event|null $event */
        $event = Event::find($eventId);

        return view('events.registration', compact('event'));
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
        $currentUserRegistration = Registration::where('user_id', $request->user_id)->first();

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
}


