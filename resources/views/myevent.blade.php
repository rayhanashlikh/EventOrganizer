@extends('layouts.master')
@section('title')
<title>Event Saya</title>
@endsection
@section('css')
    <style media="screen">
    .bCard{
    border: 1px solid white;;
    border-radius: 3px;
    background: white;
    }
    </style>
@endsection
@section('header')
@endsection
@section('content')
    <br>
    <div class="container bg-light p-5">
        <h2 class="text-center">Event Yang Diikuti</h2><br>
        <div class="row">
            @foreach($event as $events)
                <div class="col-lg-12 bCard p-3">
                    <div class="row">
                        <div class="col-lg-2">
                        <img src="../uploads/{{$events->photo}}" width="100%" alt="">
                        </div>
                    <div class="col-lg-7 text-justify">
                        <h4>{{$events->name_event}}</h4>
                        <p>{{$events->detail}}</p>
                    </div>
                    <div class="col-lg-3 text-right">
                        <form class="" action="/users/{{$events->idparticipants }}" method="post">
                        {{csrf_field()}}
                        <a href="/users/{{$events->id}}/detailevent" class="btn btn-primary btn-sm"
                        name="button">Detail</a>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="confirm('Yakin ingin membatalkan ?')" name="button">Batalkan</button>
                        </form>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>

@endsection
@section('js')
@endsection