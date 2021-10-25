<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function tableaudebord()
    {
        $events = events::orderBy('date')->get();


        return view('tableaudebord',[
            'events' => $events
        ]);
    }


    public function event_create() {
        return view('event_create');
    }

    public function event_store(request $request)
    {
        events::create([
            'title' => $request->title,
            'location' => $request->location,
            'date' => $request->date,
            'duration' => $request->duration,
            'description' => $request->description,
            'materiel' => $request->materiel,
            'child' => $request->child,
            'WC' => $request->WC,
            'listmateriel' => $request->listmateriel
            
        ]);
        
        
    }

    public function event_vue($id)
    {
        $event = events::findOrFail($id);



        return view('event_vue',[
            'event' => $event
        ]);

    }
}
