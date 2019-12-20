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
        return view('welcome')->with('event', $event);
    }

    public function event(){
        $event = Event::get();
        return view('event')->with('event', $event);
    }
    public function detail($id)
    {
        $data['user'] = Auth::user();
        $data['detail'] = Event::find($id);
        $data['participant'] = Participant::where('event_id', $id)->get();
        $data['ket'] = Participant::where('user_id', $data['user']->id)->get();
        return view('detailevent')->with($data);
    }
    public function myevent(){
        $peserta = DB::table('participants')
        ->join('events', 'participants.event_id', '=', 'events.id')
        ->join('users', 'participants.user_id', '=','users.id')
        ->where('user_id','=',Auth::user()->id)
        ->select('events.*', 'participants.id as idparticipants')
        ->get();
        return view('myevent')->with('event', $peserta);
        }
        

}
