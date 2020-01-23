<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel - admin LTE 3') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{asset('adminLTE3/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('adminLTE3/dist/css/adminlte.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body>
    <div id="app">


        <main>
            @yield('content')
        </main>
    </div>
</body>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('adminLTE3/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminLTE3/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
{{-- <script src="{{asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js')}}"></script> --}}

<!-- Custom scripts for all pages-->
<script src="{{asset('adminLTE3/dist/js/adminlte.min.js')}}"></script>

</html>
