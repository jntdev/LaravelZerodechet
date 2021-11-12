<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;

use App\Models\user;
use App\Models\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event_list()
    {
        $events = event::orderBy('date')->get();


        return view('tableaudebord',[
            'events' => $events
        ]);
    }
/**CREATE**/
    public function event_create() {
        return view('event_create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function event_store(Request $request)
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

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

/**READ**/
    public function event_vue(int $id)
    {
        $event = event::findOrFail($id);

        return view('event_vue',[
            'event' => $event
        ]);

    }
/**UPDATE**/
    public function event_modify(Request $request, $event_id)
    {
        //event::DB([
        //    'title' => $request->title,
        //    'city' => $request->city,
        //    'adress' => $request->adress,
        //    'date' => $request->date,
        //    'duration' => $request->duration,
        //    'description' => $request->description,
        //    'has_toilets' => $request->has_toilets,
        //    'child_authorized' => $request->child_authorized,
        //    'has_equipment' => $request->has_equipment,
        //    'list_equipment' => $request->list_equipment,
        //    'user_id'=>$request->user_id,
        //]);

        $event =event::find($event_id);
        $event->title = 'updated';
        $event->save();
        return redirect('success_modify_event');
    }
/**DELETE**/
}
