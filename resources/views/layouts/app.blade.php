@include('layouts.partials._head')

<body>
    
    <div id="app">
        @yield('content')
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	
	
    @yield('scripts');

</body>
</html>
