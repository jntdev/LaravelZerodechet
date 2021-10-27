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
       // dd($request);
        // request()->validate([  
        //     'WC' => 'boolean',
        //     'child' => 'boolean',
        //     'materiel' => 'boolean',
        // ]);
        events::create([
            'title' => $request->title,
            'city' => $request->city,
            'location' => $request->location,
            'date' => $request->date,
            'duration' => $request->duration,
            'description' => $request->description,
            'WC' => $request->WC,
            'child' => $request->child,
            'materiel' => $request->materiel,
            'listmateriel' => $request->listmateriel
            
        ]);
        return view('success_create_event');
  
        
        
        
    }

    public function event_vue($id)
    {
        $event = events::findOrFail($id);



        return view('event_vue',[
            'event' => $event
        ]);

    }
}
