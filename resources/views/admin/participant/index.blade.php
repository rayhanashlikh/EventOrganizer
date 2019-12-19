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
    <div class="container p-4">
        <h1 class="text-center">P E S E R T A</h1>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Opsi</th>
                </tr>
            <?php
            $no= 1;
            ?>
                @foreach($event as $myevent)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$myevent->name_event}}</td>
                    <td>
                    <a class="btn btn-sm btn-danger" href="participant/{{$myevent->id}}/view"> <i
                    class="fa fa-eye"></i> Lihat</button>
                    </a>
                </tr>   
            @endforeach
            </table>
    </div>>
@endsection 
@endsection
