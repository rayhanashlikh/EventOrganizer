<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::get();
        return view('admin.event.index')->with('event', $event);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name_event = $request->name_event;
        $detail = $request->detail;
        $description = $request->description;
        $start = $request->start;
        $finish = $request->finish;
        $location = $request->location;
        $quota = $request->quota;
        $photo = $request->photo;

        $event = new Event; 
        if ($request->hasFile('photo')){
            $image = $request->file('photo');
            $uuid4 = Uuid::uuid4();
            $name = $uuid4->toString(). '.' .$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/Event');
            $imagePath = $destinationPath. '/'. $name;
            $image->move($destinationPath, $name);
            $event->photo = $name;
        }

        $event->name_event = $request->name_event;
        $event->detail = $request->detail;
        $event->description = $request->description;
        $event->start = $request->start;
        $event->finish = $request->finish;
        $event->location = $request->location;
        $event->quota = $request->quota;
        $event->save();
        return redirect('admin/event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.event.edit')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name_event = $request->name_event;
        $detail = $request->detail;
        $description = $request->description;
        $start = $request->start;
        $finish = $request->finish;
        $location = $request->location;
        $quota = $request->quota;
        $photo = $request->photo;

        $event = Event::find($id);
        if ($request->hasFile('photo')){
            $image = $request->file('photo');
            $uuid4 = Uuid::uuid4();
            $name = $uuid4->toString(). '.' .$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/Event');
            $imagePath = $destinationPath. '/'. $name;
            $image->move($destinationPath, $name);
            $event->photo = $name;
        }

        $event->name_event = $request->name_event;
        $event->detail = $request->detail;
        $event->description = $request->description;
        $event->start = $request->start;
        $event->finish = $request->finish;
        $event->location = $request->location;
        $event->quota = $request->quota;
        $event->save();
        return redirect('admin/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('admin/event');
    }
}
