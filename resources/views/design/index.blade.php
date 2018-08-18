@extends ('layouts.designer')
@section('content')
    {{--@include ('layouts.slider')--}}
    {{--@include ('layouts.cards')--}}

    {{--@include ('layouts.infocards')--}}
    {{--@include ('layouts.text')--}}
    @include('design.FullmyProfile')

    {{--@php--}}
        {{--$products = \App\EyeGlass::paginate(10);--}}
    {{--@endphp--}}
    {{--@include('layouts.productListPage')--}}


@endsection
@section('scripts')

    <script>
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });

        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });
    </script>
@endsection


@section('styles')
    <link href="{{ asset('css/UserProfile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myProfileStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/showproductDEtailStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/productPage.css') }}" rel="stylesheet">
@endsection