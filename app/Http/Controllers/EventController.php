<?php

namespace App\Http\Controllers;

use App\models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::all();
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',

        ]);
        //
        $input=$request->all();
        if($file = $request->file('image'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/events', $name);

            $input['image'] = $name;
        }
        $events=new Event();
        $events->create($input);
        return redirect('/admin/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',

        ]);
        $input=$request->all();
        if($file = $request->file('image'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/events', $name);
            //  $photo = Photo::create(['file'=>$name]);
            $input['image'] = $name;
        }
        Event::whereId($id)->first()->update($input);
        return redirect('/admin/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

//        unlink( "public/backend/images/events". $event->image);

        $event->delete();

        return redirect('/admin/events');
    }
}
