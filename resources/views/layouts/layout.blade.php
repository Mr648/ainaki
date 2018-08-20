<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--FONTAWESOME--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font_awesome.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/ainaki.js') }}"></script>
    <script src="{{ asset('js/ninja-slider.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ninja-slider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/devicon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/devicon-colors.css') }}">
    @yield('styles')
    {{--Bootstrap--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/rtl/bootstrap.min.css') }}">

</head>
<body>
@include ('layouts.header')
@yield('contents')
@include ('layouts.footer')

@yield('scripts')
</body>
</html>
