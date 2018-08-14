@extends('layouts.layout')
@section('contents')

    @include ('layouts.productListPage')


    <div class="container">
        {{$products->links()}}
    </div>
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
    <link href="{{ asset('css/showproductDEtailStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/productPage.css') }}" rel="stylesheet">
@endsection