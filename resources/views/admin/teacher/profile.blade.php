@extends('layouts.app')
@section('title',' | Profile ADMIN-TEACHER')

@section('teacherStylesheets')
    <link rel="stylesheet" href="{{ URL::asset('css/teacherStylesheets.css') }}">
@endsection

@include('layouts.partials._navAdminTeacher')

@section('content')
<div class="container container-profile">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <img src="/uploads/avatars/{{ $user->photo }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->first_name.' '.$user->last_name}}</h2>
                <h4>{{ $user->email}}</h4>    
                <h4>{{ $user->roles()->first()->name }}</h4>
            </div>

            <form enctype="multipart/form-data" action="{{ url('admin/teacher/profile') }}" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection