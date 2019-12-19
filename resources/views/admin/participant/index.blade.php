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
@endsection
@section('content')
@section('content')
    <?php
    $no = 1;
    ?>
    <div class="container p-4">
        <h1 class="text-center">P E S E R T A</h1>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kouta</th>
                <th>Opsi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Nama Event</td>
                <td>1000</td>
                <td>
                    <a class="btn btn-sm btn-danger" href="peserta/view"> <i class="fa fa-eye"></i>Lihat</button></a>
                </td>
            </tr>
        </table>
    </div>
@endsection 
@endsection
