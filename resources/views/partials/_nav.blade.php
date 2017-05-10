<!-- empieza la barra de navegacion -->
<nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <span id="logo">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/session-1989711.svg') }}" alt="logo">
                </a>
            </span>
            
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
                <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{ url('/about') }}">About</a></li>
                <li  class="{{ Request::is('contact') ? "active" : "" }}"><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest()) 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                            <img src="/uploads/avatars/{{ Auth::user()->photo }}" alt="avatar" style="width: 32px; height: 32px; position: absolute; top: 15px; left: 10px; border-radius: 50%;">
                            {{ Auth::user()->first_name.' '.Auth::user()->last_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
                
            </ul>
        </div>
    </div>
</nav> 
<!-- finaliza la barra de navegacion -->


@section('scripts')
    {!! Html::script('js/navBarScrool.js') !!}
@endsection