@extends('layouts.master')

@section('title')
<title>Edit Profil</title>
@endsection

@section('css')
<style media="screen">
.bCard{
border: 1px solid white;
border-radius: 3px;
background: white;
}
.container{
background: white;
box-shadow: 5px 5px 10px grey;
}
body{
background: #efefef;
}
</style>
@endsection

@section('header')
@endsection

@section('content')
    <br>
    <div class="container p-5">
    <h1>Edit Profile</h1>
    <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center form-group">
                <center> <img src="//placehold.it/100" class="avatar img-circle img-responsive" width="180px" alt="avatar"></center>
                <h6>Upload a different photo...</h6>
                <input type="file" class="form-control btn btn-sm btn-primary">
                </div>
            </div>
        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a>
            <i class="fa fa-coffee"></i>
            This is an <strong>.alert</strong>. Use this to show important messages to the
            user.
            </div>
        <h3>Personal info</h3>
        <form class="form-horizontal" role="form">
        <div class="form-group">
        <label class="col-lg-3 control-label text-left">Nama:</label>
            <div class="col-lg-8">
            <input class="form-control" type="text" value="Nama">
            </div>
        </div>
        <div class="form-group">
        <label class="col-lg-3 control-label text-left">Email:</label>
            <div class="col-lg-8">
            <input class="form-control" type="text" value="Email">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label text-left">New Password:</label>
            <div class="col-md-8">
                <input class="form-control" type="password" placeholder="New Password" value="New Password">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label text-left">Confirm password:</label>
            <div class="col-md-8">
                <input class="form-control" type="password" placeholder="Confirm Password" value="Confirm Password">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label text-left"></label>
            <div class="col-md-8">
                <input type="button" class="btn btn-primary" value="Save Changes">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
            </div>
        </div>
        </form>
        </div>
        </div>
        </div>
    </div>
    <br>
@endsection
@section('js')
@endsection