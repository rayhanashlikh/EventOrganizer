@extends('layouts.master')



@section('title')
<title>Welcome</title>
@endsection

@section('css') 
    <style>
        .header{
            background-image:url('https://www.newstatesman.com/sites/all/themes/creative-responsive-theme/images/new_statesman_events.jpg');
                height: 500px;
                width: 100%;
                background-repeat: no-repeat;
        }   
    </style>
@endsection 

@section('header') 
    <div class="header text-center text-light">
        <h1 class="Judul">Daily Events</h1>
        <p class="subJudul">"Tingkatkan Kemampuanmu"</p>
        <hr color="white" width="60%">
        <a href="event" class="btn btn-primary">Lihat semua Event</a>
        <!-- <button class="btn btn-primary">Lihat Semua Event</button>   -->
    </div>
@endsection 

@section('content') 
    <br>
        <div class="container text-center">
            <br>
            <h2>Daily Events</h2>
            <p>Event yang diadakan Santren Koding</p>
            <br>
                <div class="row">
                @foreach($event as $events)
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card" >
                            <img class="card-img-top"
                            src="http://techtrends.tech/wp-content/uploads/2017/02/tech.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$events->name_event}}</h5>
                            <p class="card-text">{{$events->description}}</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div><br>
@endsection 

@section('js')

@endsection
