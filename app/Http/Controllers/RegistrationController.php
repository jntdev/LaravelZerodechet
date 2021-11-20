<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(request $request)
    {
        /** @var int $eventId */
        $eventId = $request->event;
        /** @var Event|null $event */
        $event = Event::find($eventId);
//        if ($event) {
            return view('event_registration.registration', compact('event'));
//        }else{
//            return redirect()->route('event_list')->with('error', 'L\'animation n\'existe pas ou a été supprimée');
//        }
    }
}


