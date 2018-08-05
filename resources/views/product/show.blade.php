@extends('layouts.layout')
@section('contents')

    @include ('layouts.showproductDetail')
    @include ('layouts.tabs')
    @include ('layouts.similarProduct')

@endsection
@section('styles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="{{ asset('css/showproductDEtailStyle.css') }}" rel="stylesheet">
@endsection