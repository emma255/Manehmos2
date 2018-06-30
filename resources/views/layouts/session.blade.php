@include('layouts.head')
<body>
    <div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/calculations.js') }}"></script>
</body>
</html>
