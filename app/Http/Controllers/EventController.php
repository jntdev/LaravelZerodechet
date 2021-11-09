<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;

use App\Models\user;
use App\Models\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function tableaudebord()
    {
        $events = event::orderBy('date')->get();


        return view('tableaudebord',[
            'events' => $events
        ]);
    }

    public function event_create() {
        return view('event_create');
    }

    public function event_store(request $request)
    {

        event::create([
            'title' => $request->title,
            'city' => $request->city,
            'adress' => $request->adress,
            'date' => $request->date,
            'duration' => $request->duration,
            'description' => $request->description,
            'has_toilets' => $request->has_toilets, 
            'child_authorized' => $request->child_authorized,
            'has_equipment' => $request->has_equipment,
            'list_equipment' => $request->list_equipment,    
            'user_id'=>$request->user_id,
        ]);
        return view('success_create_event');     
    }

    public function event_vue($id)
    {
        $event = event::findOrFail($id);

        return view('event_vue',[
            'event' => $event
        ]);

    }
}
