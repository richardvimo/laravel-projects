@extends('layouts.app')

@section('title',' | Home ADMIN')


@section('teacherStylesheets')
    <link rel="stylesheet" href="{{ URL::asset('css/teacherStylesheets.css') }}">
@endsection


@include('layouts.partials._navAdminDefault')


@section('content')

<div class="container">
    
    <div class="row contenido">       
        <div class="panel panel-default">
            <div class="panel-heading">ADMIN DEFAULT Dashboard</div>

            <div class="panel-body"> 
                You are logged in <strong>ADMIN DEFAULT privilegios sin asignar por el administrador</strong>!
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur iste mollitia fugiat eligendi aperiam nobis reprehenderit eius dolorem dolor dolores doloribus amet quae enim animi et odit laborum voluptas, dolore.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae officiis temporibus impedit maxime aperiam, earum fugit voluptate, inventore id corrupti aut possimus labore. Voluptatibus minima veniam fuga, provident velit itaque.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur iste mollitia fugiat eligendi aperiam nobis reprehenderit eius dolorem dolor dolores doloribus amet quae enim animi et odit laborum voluptas, dolore.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae officiis temporibus impedit maxime aperiam, earum fugit voluptate, inventore id corrupti aut possimus labore. Voluptatibus minima veniam fuga, provident velit itaque.
                </p>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="container" style="width: 100%;">
    <div class="row">
        @include('.partials._footer')        
    </div>
</div>


@endsection

@section('scripts')
    {!! Html::script('js/teacherScript.js') !!}
@endsection
