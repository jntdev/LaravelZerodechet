<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\User\Checker;
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

        return view('events.index', compact('events'));
    }


    public function manage(): View
    {
        /** @var Event[] $events */
        $user = Auth::user();
        $events = Event::where('user_id', $user->id)->orderBy('date')->get();

        return view('events.manage', compact('user', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        return view('events.form');
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

            return redirect()->route('event_show', compact('event'));
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
                $event->$key = $value;
            }
            $event->save();
            return redirect()->route('event_show', ['event' => $request->event_id])
                ->with('success', 'L\'animation a bien été mis à jour');;
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
        $eventId = $request->event;
        /** @var Event|null $event */
        $event = Event::find($eventId);
        if ($event) {
            return view('events.view', compact('event'));
        }

        return redirect()->route('event_index')->with('error', 'L\'animation n\'existe pas ou a été supprimée');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $eventId
     * @return View
     */
    public function edit(int $eventId)
    {
        /** @var Event $event */
        $event = Event::find($eventId);
        /** @var bool $edit */
        $edit = true;
        return view('events.form', compact(['event', 'edit']));
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
            return redirect()->route('event_index')->with('success', 'L\'animation a été supprimée');
        }

        return redirect()->route('event_index')->with('error', 'Une erreur est survenue');
    }
}
