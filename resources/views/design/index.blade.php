@extends ('layouts.designer')
@section('content')
    {{--@include ('layouts.slider')--}}
    {{--@include ('layouts.cards')--}}

    {{--@include ('layouts.infocards')--}}
    {{--@include ('layouts.text')--}}
    @include('design.FullmyProfile')
    {{--@include('layouts.productList')--}}
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