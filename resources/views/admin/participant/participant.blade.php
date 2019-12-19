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
User
@endsection
@section('content')
    <div class="container p-4">
        <h1 class="text-center">P E S E R T A</h1>
        <!-- <a class="btn btn-md btn-success" href="/admin/peserta/create">Tambah
        Peserta</a><br><br> -->
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Event</th>
                    <th>Opsi</th>
                </tr>
            @php
            $no = 1
            @endphp
            @foreach($participantx as $participants)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$participants->name}}</td>
                    <td>{{$participants->email}}</td>
                    <td>{{$participants->name}}</td>
                    <td>
                        <form action="/admin/participant/{{$participants->id}}" class="row" method="post">
                        {{csrf_field()}}
                        <!-- <button type="button" class="btn btn-sm btn-danger" name="button"
                        onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>
                        -->
                        <button type="submit" class="btn btn-sm btn-danger" name="button"
                        onclick="confirm('Yakin ingin menghapus ?')"><i class="fa fa-trash"></i> Hapus</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </table>
    </div>
@endsection
