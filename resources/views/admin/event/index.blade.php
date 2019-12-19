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
Event
@endsection
@section('content')
    <div class="container p-4">
        <h1 class="text-center">E V E N T</h1>
        <a class="btn btn-md btn-success" href="event/create" >Tambah Event</a><br><br>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Kuota</th>
                <th>Lokasi</th>
                <th>Opsi</th>
            </tr>
            <?php 
            $no = 1;
            ?>
            @foreach($event as $myevent)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$myevent->name}}</td>
                <td>{{$myevent->description}}</td>
                <td>{{$myevent->start}}</td>
                <td>{{$myevent->finish}}</td>
                <td>{{$myevent->location}}</td>
                <td>{{$myevent->quota}}</td>
                <td>
                <form action="event/{{$myevent->id}}" class="row" method="post">
                {{csrf_field()}}

                    <button type="button" class="btn btn-sm btn-primary" name="button" 
                        onclick="location.href='event/{{$myevent->id}}/edit'">> <i class="fa fa-pencil"></i>Edit</button>
                    <button type="button" class="btn btn-sm btn-danger" name="button" 
                        onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>
                </form>
                </td>
            </tr>   
            @endforeach
        </table>
    </div>
@endsection
