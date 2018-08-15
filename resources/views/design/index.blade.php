@extends ('layouts.designer')
@section('content')
    {{--@include ('layouts.slider')--}}
    {{--@include ('layouts.cards')--}}

    {{--@include ('layouts.infocards')--}}
    {{--@include ('layouts.text')--}}
{{--    @include('design.FullmyProfile')--}}

    @php
        $products = \App\EyeGlass::paginate(10);
    @endphp
    @include('layouts.productListPage')


@endsection
@section('scripts')


    <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>

    <script>

        $(document).ready(function(){
var $slider = $("#ex2");
            $("#priceFrom").text($slider.data('slider-min'));
            $("#priceTo").text($slider.data('slider-max'));

            $slider.slider({
                tooltip: 'hide',
            }).on("slide", function(slideEvt) {
                var values = (slideEvt.value+"").split(',');
                $("#priceFrom").text(values[0]);
                $("#priceTo").text(values[1]);
            });

            $('[data-toggle="tooltip"]').tooltip();

            $('.panel-collapse').on('show.bs.collapse', function () {
                $(this).siblings('.panel-heading').addClass('active');
            }).on('hide.bs.collapse', function () {
                $(this).siblings('.panel-heading').removeClass('active');
            });
        });

    </script>
@endsection


@section('styles')
    <link href="{{ asset('css/bootstrap-slider.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/UserProfile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myProfileStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/showproductDEtailStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/productPage.css') }}" rel="stylesheet">
@endsection