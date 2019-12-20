@extends('layouts.master')

@section('title')
<title>Pilih Sebagai Apa Anda Ingin Masuk </title>
@endsection
@section('content')
<h1>Choose Login As</h1>

<div class="container">
    <div class="card text-center">
        <div class="body">
                <a class="btn btn-primary" href="/admin" role="button">Admin</a>
                <a class="btn btn-secondary" href="/user" role="button">User</a>
        </div>
    </div>  
</div>

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script> 
@endsection