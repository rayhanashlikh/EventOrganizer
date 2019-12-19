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
        $name = $request->name;
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

        $event->name = $request->name;
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
    public function edit(Event $event)
    {
        //
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
        $message = [
            'name.required' => 'Pastikan nama sudah terisi',
            'detail.required' => 'Pastikan detail sudah diisi',
            'description.required' => 'Pastikan deskripsi sudah diisi',
        ];

        $validate = validator::make($request->all(),[
            'name' => 'required|string',
            'detail' => 'required|string',
            'description' => 'required|string',
            'start' => 'required|H-i',
            'finish' => 'required',
            'quota' => 'required|numeric',
            'quota' => 'image|mimes:jpg,jpeg,png,svg,nmp,gif'
        ], $message);

        if($validate->fails()){
            $this->data['message'] = 'Error';
            $this->data['error'] = $validate->errors();
            return $this->data;
        }

        try{
            $file = $request->file('file');
            $getImageName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/Event'), $getImageName);
            $event = Event::where('id', $id)->update([
                'name' => $request->name,
                'detail' => $request->detail,
                'description' => $request->description,
                'start' => $request->start,
                'finish' => $request->finish,
                'quota' => $request->quota,
                'photo' => $file->getClientOriginalName()
            ]);

            return response()->json([
                'message' => 'Data has been updated',
                'data' => $event
            ], 200);
        } catch(\Throwable $th){
            return response()->json([
                'message' => $th,
                'data' => null
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Event::where('id', $id)
            ->delete();

            return response()->json([
                'message' => 'Success',
                'data' => $data
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Failed',
                'data' => $th
            ], 400);
        }
    }
}
