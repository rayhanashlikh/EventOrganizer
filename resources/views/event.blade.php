@extends('layouts.master')

@section('css')

@endsection

@section('header')

@endsection

@section('content')
    <div class="container text-center">
    <br>
    <h2>Daily Events</h2>
    <p>Event yang diadakan Santren Koding</p>
        <div class="row">
        @foreach($event as $events)
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card" >
                    <img class="card-img-top" src="http://techtrends.tech/wp-content/uploads/2017/02/tech.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$events->name_event}}</h5>
                            <p class="card-text">{{$events->description}}</p>
                        <a href="/detail" class="btn btn-primary">Detail</a>
                    </div>  
                </div>
            </div>
        @endforeach
        </div>
    </div><br>
@endsection
@section('js')
@endsection
