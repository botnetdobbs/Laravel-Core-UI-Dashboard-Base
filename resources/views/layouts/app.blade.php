<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/coreui.css') }}" rel="stylesheet">
</head>
<body class="c-app" id="app">
    {{-- Sidebar --}}
    @include('layouts.sidebar')

    <div class="c-wrapper c-fixed-components">
      {{-- Navbar Header --}}
      @include('layouts.header')
      {{-- Body --}}
      <div class="c-body">
        <main class="c-main">

          @yield('content') 

        </main>
        {{-- Footer --}}
        @include('layouts.footer')
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    {{-- Load JavaScript --}}
    @yield('javascript')
</body>
</html>
