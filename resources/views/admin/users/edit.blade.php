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
Edit User
@endsection
@section('content')
    <div class="container p-4">
    <h1 class="text-center">Edit User</h1>
        <form class="" action="/admin/users/update/{{$users->id}}" method="post">
            {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-6 form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control"
                    value="{{$users->name}}"><br>
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Deskripsi" class="form-control"
                    value="{{$users->email}}"><br>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control"
                    >
                    </div>
                </div><br>
            <input type="submit" name="submit" value="Edit User" class="btn btn-md btn-primary">
            <a href="/admin/users" class="btn btn-md btn-danger">Batalkan</a>
        </form><br><br> 
    </div>


@endsection
