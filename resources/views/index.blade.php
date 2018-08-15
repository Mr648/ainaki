@extends('layouts.layout')

@section('contents')
    @include ('layouts.slider')

    <div class="container-fluid">
        <div class="row  px-4">
            <div class="card-deck rtl">
                @foreach($cards as $card)
                    <div class="card">
                        <img class="card-img-top w-100 rounded" src="{{$card['img']}}" alt="{{$card['alt']}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include ('layouts.infocards')

    <div class="container ">
        <div class="row">
            <div class="col text-center">
                <h2 rtl>تست آنلاین عینک</h2>
                <p>توضیحاتی در مورد تست آنلاین عینک</p>
                <br>
            </div>
        </div>
    </div>


@endsection