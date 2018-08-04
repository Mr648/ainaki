@extends('layouts.layout')
@section('contents')

    @include ('layouts.showproductDetail')
    @include ('layouts.tabs')
    @include ('layouts.similarProduct')

@endsection

@section('styles')
    <link href="{{ asset('css/showproductDEtailStyle.css') }}" rel="stylesheet">
@endsection