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
                    <input type="text" name="nama" placeholder="Nama" class="form-control"
                    value={{$event->nama}}><br>
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control"
                    value={{$event->deskripsi}}>
                </div>
                <div class="col-lg-6">
                    <label>Tanggal</label>
                    <input type="date" name="tgl" placeholder="Tanggal" class="form-control"
                    value={{$event->tgl}}><br>
                    <label>Kuota</label>
                    <input type="number" name="kuota" placeholder="Nama" class="form-control"
                    value={{$event->kuota}}>
                </div>
            </div><br>
            <input type="submit" value="Edit Event" class="btn btn-md btn-primary">
            <a href="/admin/event" class="btn btn-md btn-danger">Batalkan</a>
        </form><br><br>
    </div>
@endsection