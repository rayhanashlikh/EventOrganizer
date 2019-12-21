<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Participant;
use App\User;
use Auth;
use DB;

class UserIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::get();
        return view('event', compact('event'));
    }

    public function show($id){
        $user = Auth::user();
        $event = Event::find($id);
        $participant = Participant::where('event_id', $id)->get();
        $ket = Participant::where('user_id', $user->id)->get();
        return view('detailevent', compact('event', 'participant', 'ket'));
    }
    public function daftar($id)
    {
        $user = Auth::user();
        $event = Event::find($id);
        $participant = Participant::where('event_id', $id)->get();
        $ket = Participant::where('user_id', $id)->get();
        $create = new Participant;
        $create->user_id = $user->id;
        $create->event_id = $event->id;
        $create->save();
        return redirect('/user')->with('status', 'Success join the event');
    }
    public function myevent(){
        $participant = DB::table('participants')
        ->join('events', 'participants.event_id', '=', 'events.id')
        ->join('users', 'participants.user_id', '=','users.id')
        ->where('user_id','=',Auth::user()->id)
        ->select('events.*', 'participants.id as idparticipants')
        ->get();
        return view('myevent', compact('participant'));
        }
        
    public function destroy($id){
        $participant = Participant::find($id);
        $participant->delete();
        return redirect('/user')->with('status', 'Successfully Cancel The Event');
    }

}
