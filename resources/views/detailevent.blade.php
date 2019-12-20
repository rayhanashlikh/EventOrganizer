@extends('layouts.master')
@section('title')
<title>Detail Event</title>
@endsection
@section('css')
    <!-- Start CSS -->
    <style>
    .Judul{
        font-family: roboto;
        padding-top: 6%;
        opacity: 0.6;
        margin-top: 1%;
        width: 100%;
        padding-top: 3%;
        padding-bottom: 3%;
        background: grey;
    }
    .hEvent{
        background-image:url('https://www.newstatesman.com/sites/all/themes/creative-responsive-theme/images/new_statesman_events.jpg');
        height: 400px;
        width: 100%;
        background-repeat: no-repeat;
    }
</style>
<!-- End CSS -->
@endsection
@section('header')
<!-- Start Header -->
    <div class="hEvent text-center row">
        <div class="Judul col align-self-end">
            <h1 class="subJudul">{{$detail->name_event}}</h1>
        </div>
    </div>
    <br>
<!-- End Header -->
@endsection
@section('content')
    <div class="container">
        <!-- StartNavTabs -->
        <ul class="nav nav-tabs " id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="deskripsi-tab" data-toggle="tab" href="#deskripsi"
                role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab"
                aria-controls="daftar" aria-selected="false">Pendaftaran</a>
            </li>
        </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                    <br>
                    <h2>Jadwal Pelaksanaan</h2>
                        <p>{{date('d M Y', strtotime($detail->start))}} <b>s/d</b> {{date('d M Y',
                        strtotime($detail->finish))}}</p><br>
                        <h2>Keterangan</h2>
                        <p>
                        {{$detail->description}}
                        </p><br>
                        <h2>Deskripsi</h2>
                    <img width="100%" src="{{URL::asset('../uploads/'.$detail->foto)}}" alt=""><br><br>
                </div>
                <div class="tab-pane fade" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                    <br>
                        <h2>PESERTA</h2>
                            <p><b>Kuota : </b> {{$total = $detail->quota}} <br>
                            <b>Pendaftar : </b> {{$jml = count($participant)}} <br>
                            <b>Sisa Kuota : </b> {{$total - $jml}}</p>
                        <h2>KEIKUTSERTAAN</h2>
                    <br>
                    @if(count($ket)>0)
                    <h3>{{$user->name}}, Sudah Terdaftar</h3>
                    @else
                        <form class="" action="/users/{{$detail->id}}/daftar" method="post">
                        @method('post')
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-lg btn-primary col-lg-3" name="button"
                        onclick="confirm('Yakin ingin mendaftar event ini ?')">Daftar Event</button>
                        </form>
                    @endif
                    <br><br>
                </div>
            </div>
        <!-- EndNavTabs -->
    </div>


@endsection
@section('js')
@endsection