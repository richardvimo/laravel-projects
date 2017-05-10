@extends('layouts.app')
@section('title',' | ProfileDefault')

@section('teacherStylesheets')
    <link rel="stylesheet" href="{{ URL::asset('css/teacherStylesheets.css') }}">
@endsection

@include('layouts.partials._navAdminDefault')

@section('content')
<div class="container container-profile">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->photo }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->first_name.' '.$user->last_name}}'s Profile</h2>
            
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection