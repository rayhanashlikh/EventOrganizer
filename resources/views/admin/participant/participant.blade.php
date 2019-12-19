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
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Event</th>
            <th>Opsi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Nama User</td>
            <td>Email User</td>
            <td>Event Diikuti</td>
            <td>
            <button type="button" class="btn btn-sm btn-danger" name="button"
            onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>
            </td>
        </tr>
    </table>
</div>
@endsection
