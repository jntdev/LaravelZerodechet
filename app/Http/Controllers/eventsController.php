<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function event_create()
    {
        $events = events::all();
       

        return view('event_create',[
            'events' => $events
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
