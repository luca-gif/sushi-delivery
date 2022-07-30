<body>

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ route('admin.home') }}">Admin</a>
            @endauth
        </div>
    @endif


    <div id="app"></div> {{-- importo Vue dentro la home --}}

    <script src="{{ asset('js/front.js') }}"></script> {{-- Importo il JavaScript --}}
</body>

</html>
