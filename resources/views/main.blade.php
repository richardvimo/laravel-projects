@include('partials._head')


<body>
	
    @include('partials._nav')


    {{-- inicia el container --}}
    <div class="container">
        @yield('content')
    </div> 
    {{-- finaliza el contenedor --}}


	@include('.partials._footer') 



    @include('partials._javascript')
    @yield('scripts')
</body>


</html>
