<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{--FONTAWESOME--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font_awesome.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>



    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/showproductDEtailStyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/devicon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/devicon-colors.css') }}">

    {{--Bootstrap--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/rtl/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/ainaki.js') }}"></script>

</head>
<body>
{{--@include ('layouts.header')--}}

@include ('layouts.showproductDetail')
@include ('layouts.tabs')
@include ('layouts.similarProduct')







{{--@include ('layouts.footer')--}}
<script>
//    $(document).ready(function () {
//        $('.dropdown').dropdown();
//    });
</script>



</body>
</html>
