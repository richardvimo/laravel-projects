@extends('main')

@section('title',' | Welcome')

@section('content')

<hr>

<!-- inicia jumbotrom -->
<div class="jumbotron"> 
    <div class="flex-center position-ref full-height">
{{--         @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif
 --}}
        <div class="content">
            <div class="title m-b-md">examinaT</div>
            <p class="lead">Muchas gracias por visitarnos. Esta es una web creada con Laravel. donde encontraras muchos Test para examinarte. ¿ Estas preparado...!!! ?</p>
            <p>{{ $fullName }}</p>
        </div>
    </div>

    <p class="btn-learn-more-p"><a class="btn btn-primary btn-lg btn-learn-more">Popular Test</a></p>
</div>
<!-- finaliza jumbotrom -->
    
<hr>

<div class="row">
    <div class="col-md-8">
        <div class="post">
            <h3>Test Title</h3>    
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quis impedit ipsa rerum cumque voluptatem, officiis cupiditate velit sunt quas. Voluptate, sit earum non nihil nisi delectus explicabo quia voluptatibus.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Test Title</h3>    
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quis impedit ipsa rerum cumque voluptatem, officiis cupiditate velit sunt quas. Voluptate, sit earum non nihil nisi delectus explicabo quia voluptatibus.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <hr>

        <div class="post">
            <h3>Test Title</h3>    
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quis impedit ipsa rerum cumque voluptatem, officiis cupiditate velit sunt quas. Voluptate, sit earum non nihil nisi delectus explicabo quia voluptatibus.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <div class="post">
            <h3>Test Title</h3>    
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quis impedit ipsa rerum cumque voluptatem, officiis cupiditate velit sunt quas. Voluptate, sit earum non nihil nisi delectus explicabo quia voluptatibus.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <div class="post">
            <h3>Test Title</h3>    
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quis impedit ipsa rerum cumque voluptatem, officiis cupiditate velit sunt quas. Voluptate, sit earum non nihil nisi delectus explicabo quia voluptatibus.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <div class="post">
            <h3>Test Title</h3>    
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quis impedit ipsa rerum cumque voluptatem, officiis cupiditate velit sunt quas. Voluptate, sit earum non nihil nisi delectus explicabo quia voluptatibus.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <div class="post">
            <h3>Test Title</h3>    
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quis impedit ipsa rerum cumque voluptatem, officiis cupiditate velit sunt quas. Voluptate, sit earum non nihil nisi delectus explicabo quia voluptatibus.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>

        <div class="post">
            <h3>Test Title</h3>    
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quis impedit ipsa rerum cumque voluptatem, officiis cupiditate velit sunt quas. Voluptate, sit earum non nihil nisi delectus explicabo quia voluptatibus.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>

    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </div>
</div>

@endsection