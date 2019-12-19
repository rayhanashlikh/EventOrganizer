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
            <div class="col-lg-12 bCard p-3">
                <div class="row">
                <div class="col-lg-2">
                <img
                src="https://apkcrate.com/wp-content/uploads/2018/03/4839/5a9d4ee44dd42.png" width="100%" alt="">
                </div>
                <div class="col-lg-7 text-justify">
                <h4>Nama event yang sudah diikuti</h4>
                <p>Ini adalah tempat deskripsi event yang bisa kita tampilkan nantinya di
                halaman eventku. Halaman eventku adalah halaman yang fungsinya untuk menampilkan macam -
                macam event yang sudah kita ikuti.</p>
                </div>
                <div class="col-lg-3 text-right">
                <button type="button" class="btn btn-primary btn-sm"
                name="button">Detail</button>
                <button type="button" class="btn btn-danger btn-sm" onclick="confirm('Yakin ingin membatalkan ?')" name="button">Batalkan</button>
                </div>
                </div>
                </div>
                <div class="col-lg-12 bCard p-3 mt-3">
                <div class="row">
                <div class="col-lg-2">
                <img
                src="https://apkcrate.com/wp-content/uploads/2018/03/4839/5a9d4ee44dd42.png" width="100%" alt="">
                </div>
                <div class="col-lg-7 text-justify">
                <h4>Nama event yang sudah diikuti</h4>
                <p>Ini adalah tempat deskripsi event yang bisa kita tampilkan nantinya di
                halaman eventku. Halaman eventku adalah halaman yang fungsinya untuk menampilkan macam -
                macam event yang sudah kita ikuti.</p>
                </div>
                <div class="col-lg-3 text-right">
                <button type="button" class="btn btn-primary btn-sm"
                name="button">Detail</button>
                <button type="button" class="btn btn-danger btn-sm"
                name="button">Batalkan</button>
                </div>
                </div>
                </div>
                <div class="col-lg-12 bCard p-3 mt-3">
                <div class="row">
                <div class="col-lg-2">
                <img
                src="https://apkcrate.com/wp-content/uploads/2018/03/4839/5a9d4ee44dd42.png" width="100%" alt="">
                </div>
                <div class="col-lg-7 text-justify">
                <h4>Nama event yang sudah diikuti</h4>
                <p>Ini adalah tempat deskripsi event yang bisa kita tampilkan nantinya di
                halaman eventku. Halaman eventku adalah halaman yang fungsinya untuk menampilkan macam -
                macam event yang sudah kita ikuti.</p>
                </div>
                <div class="col-lg-3 text-right">
                <button type="button" class="btn btn-primary btn-sm"
                name="button">Detail</button>
                <button type="button" class="btn btn-danger btn-sm"
                name="button">Batalkan</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
@section('js')
@endsection