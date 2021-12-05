<?php

namespace App\Http\Controllers;

use App\Mail\EventModified;
use App\Mail\MailToAll;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Event;
use App\Models\User;
use App\Mail\event_modified;

use App\User\Facades\CheckerFacade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View
    {
        /** @var Event[] $events */
        $events = Event::all();

        return view('events.index', compact('events'),['title'=>'Tableau de bord']);
    }


    public function manage(): View
    {
        /** @var Event[] $events */
        $user = Auth::user();
        $events = Event::where('user_id', $user->id)->orderBy('date')->get();


        return view('events.manage', compact('user', 'events'), ['title' => 'Gérez vos animations']);
    }

    /**
     * @param int $eventId
     * @return View
     */
    public function view_registrations(int $eventId): View
    {
        $event = Event::find($eventId);
        $myRegistrationRows= Registration::where('event_id',$event->id)->get();
        $userIds = [];
        foreach ($myRegistrationRows as $myRegistrationRow) {
            $userIds[]=$myRegistrationRow->user_id;
        }
        $users=User::wherein('id',$userIds)->get();

        return view('events.registration_list',compact('users','event'), ['title' => 'Liste des participants']);
    }

    /**
     * @return View
     */
    public function registered(): View
    {
        $user = Auth::user();
        $events = Registration::where('user_id', $user->id)->get();
        $eventIds = [];
        foreach ($events as $event) {
            $eventIds[] = $event->event_id;
        }
        $events = Event::whereIn('id', $eventIds)->get();

        return view('events.registered', compact('user', 'events'), ['title' => 'Vos inscriptions']);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(event $event): View
    {
        return view('events.form', ['title' => 'Créez votre animation'], compact('event'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->event_id) {

            return $this->update($request);
        } else {
            $data = [];
            foreach ($request->all() as $key => $value) {
                /**
                 * traitement image
                 */
                if ($key == 'event_picture') {
                    $imageName = $request->$key->getClientOriginalName();
                    $request->$key->move(public_path('images/event'), $imageName);
                    $data[$key] = $imageName;
                } else {
                    $data[$key] = $value;
                }
            }
            /** @var Event $event */
            $event = Event::create($data);

            return redirect()->route('event_show',['event_id'=> $event->id]);
        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        try {
            /** @var Event $event */
            $event = Event::find($request->event_id);
            /**
             * @var string $key
             * @var string $value
             */
            foreach ($request->all() as $key => $value) {
                if ($key == '_token' || $key == 'event_id') {
                    continue;
                }
//                adaptation du traitement image pour la fonction update
                if ($key == 'event_picture') {
                    $imageName = $request->$key->getClientOriginalName();
                    $request->$key->move(public_path('images/event'), $imageName);
                    $event[$key] = $imageName;
                } else {
                    $event[$key] = $value;
                }
            }
            $event->save();

            $registrations = Registration::where('event_id', $event->id)->get();

            foreach ($registrations as $registration) {

                Mail::to($registration->user->email)->send(new EventModified($event));
            }

            return redirect()->route('event_show', ['event_id' => $request->event_id])
                ->with('success', 'L\'animation a bien été mis à jour');
        } catch (Exception $e) {
            return redirect()->route('event_show', ['event' => $request->event_id])->with('error', 'Une erreur est survenue');
        }
    }

    /**
     * Display the specified resource.
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function show(Request $request)
    {
        /** @var int $eventId */
        $eventId = $request->event_id;
        /** @var Event|null $event */
        $event = Event::find($eventId);

        if ($event === null) {

            return redirect()->route('event_list')->with('error', 'L\'animation n\'existe pas ou a été supprimée');
        }

        /** @var Registration|null $registrations */
        $registrations = Registration::where('event_id', $eventId)->get();
        /** @var int $nbPlayers */
        $nbPlayers = 0;

        if ($registrations) {
            foreach ($registrations as $registration) {
                $nbPlayers += $registration->nb_players;
            }
        }

        /** @var string $stats */
        $stats = $this->getStats($event, $nbPlayers);
        $userId = Auth::user()->id;

        $registration = Registration::where([['user_id', "=","$userId"],['event_id', "=","$event->id"]])->first();





        return view('events.view', compact('event', 'nbPlayers', 'stats','registration'), ['title' => $event->title]);
    }

    /**
     * @param Event|null $event
     * @param int $number
     * @return string
     */
    private function getStats(?Event $event, int $number): string
    {
        /** @var string $stats */
        $stats = 'stats-green';
        if ($number == $event->nb_max_user) {
            $stats = 'full';
        } elseif ($number > round($event->nb_max_user * 0.7)) {
            $stats = 'orange_span';
        } elseif ($number > round($event->nb_max_user * 0.5)) {
            $stats = 'yellow_span';
        }

        return $stats;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $eventId
     * @return View
     */
    public function edit(int $eventId): View
    {

        /** @var Event $event */
        $event = Event::find($eventId);
        /** @var bool $edit */
        $edit = true;

        return view('events.form', compact('event', 'edit'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $eventId
     * @return RedirectResponse
     */
    public function delete(int $eventId): RedirectResponse
    {
        /** @var Event|null $event */
        $event = Event::find($eventId);
        if (CheckerFacade::canDeleteEvent($event->user_id)) {
            Event::destroy($eventId);

            return redirect()->route('event_list')->with('success', 'L\'animation a été supprimée');
        }

        return redirect()->route('event_list')->with('error', 'Une erreur est survenue');
    }

    public function mailAll(Request $request): View
    {
        $event = Event::find($request->id);

        return view('events.mailAll', ['title' => 'Ecrivez à tout les participants'], compact('event'));
    }


    public function mailToAllSent(Request $request): RedirectResponse
    {
        $event = Event::find($request->event_id);
        $mailTitle = $request->title_mailtoAll;
        $mailContent = $request->content_of_mail;
        $registrations = Registration::where('event_id', $event->id)->get();
        foreach ($registrations as $registration) {
            Mail::to($registration->user->email)->send(new MailToAll($event,  $mailTitle, $mailContent));
        }

        return redirect()->route('event_show', ['event_id' => $event->id])->with('success', 'Votre mail a bien été envoyé');

    }
}

