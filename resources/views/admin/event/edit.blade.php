@extends('layouts.lte')
@section('css')
    <style>
    .container{
        background: white;
        border-radius: 4px;
    }
    </style>
@endsection
@section('header')
Edit Event
@endsection
@section('content')
    <div class="container p-4">
        <h1 class="text-center">Edit Event</h1>
        <form class="" action="/admin/event/update/{{$event->id}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-6 form-group">
                    <label>Nama</label>
                    <input type="text" name="name_event" placeholder="Nama" class="form-control" value="{{$event->name_event}}"><br>
                    <label>Detail</label>
                    <input type="text" name="detail" placeholder="Detail" class="form-control" value="{{$event->detail}}">
                </div>
                <div class="col-lg-6">
                    <label>Deskripsi</label>
                    <input type="text" name="description" placeholder="Deskripsi" class="form-control" value="{{$event->description}}"><br>
                    <label>Dimulai</label>
                    <input type ="time" name="start" placeholder="Dimulai Pada" class="form-control" value="{{$event->start}}">
                </div>
                <div class="col-lg-6">
                    <label>Berakhir</label>
                    <input type="time" name="finish" placeholder="Berakhir Pada" class="form-control" value="{{$event->finish}}">
                    <label>Lokasi</label>
                    <input type="text" name="location" placeholder="Lokasi" class="form-control" value="{{$event->finish}}">
                </div>
                <div class="col-lg-6">
                    <label>Kuota</label>
                    <input type="number" name="quota" placeholder="Kuota Peserta" class="form-control" value="{{$event->quota}}">
                    <label>Photo</label>
                    <input type="file" name="photo" placeholder="Pilih Foto" class="form-control">
                </div>
            </div><br>
            <input type="submit" value="Edit Event" class="btn btn-md btn-primary">
            <a href="/admin/event" class="btn btn-md btn-danger">Batalkan</a>
        </form><br><br>
    </div>
@endsection