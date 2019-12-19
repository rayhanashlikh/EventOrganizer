<?php

namespace App\Http\Controllers;

use App\Participant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = DB::table('events')->get();
        return view('admin.participant.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.participant.participant');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */


    public function view($id)
    {
        $participant = Participant::find($id);
        $participantx = DB::table('participants')
            ->join('users','participants.user_id','=','users.id')
            ->where('event_id', $id)
            ->join('events','participants.event_id','=','events.id')
            ->get();
        return view('admin.participant.participant',compact('participantx'));
    }

    public function destroy($id)
    {
        $participants = Participant::find($id);
        $participants = DB::table('participants')
            ->join('users', 'participants.user_id', '=', 'users.id')
            ->where('user_id', $id)
            ->delete();
        return redirect('admin/participant')->with('status', 'Data Berhasil Dihapus');
    }
}
