@extends('layouts.layout')

@section('contents')
    {{--@php--}}
    {{--dd($product);--}}
    {{--exit;--}}
    {{--@endphp--}}
    <div class="container rtl ">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-5 col-sm-12">

                        <div class="preview-pic tab-content border" data-toggle="modal" data-target="#myModal">
                            <div class="tab-pane active" id="pic-1" style="height: 250px !important;">
                                <img
                                        src="/images/g1.png"/></div>
                            <div class="tab-pane" style="height: 250px !important;" id="pic-2"><img
                                        src="/images/g2.png"/>
                            </div>
                            <div class="tab-pane" style="height: 250px !important;" id="pic-3"><img
                                        src="/images/g3.png"/>
                            </div>
                            <div class="tab-pane" style="height: 250px !important;" id="pic-4"><img
                                        src="/images/g4.png"/>
                            </div>

                        </div>
                        <ul class="preview-thumbnail nav nav-tabs text-center modal" id="myModal">
                            <li class="active border "><a class=" border" data-target="#pic-1" data-toggle="tab"><img
                                            src="/images/g1.png"/></a>
                            </li>
                            <li class=" border"><a data-target="#pic-2" data-toggle="tab"><img src="/images/g2.png"
                                                                                               style="margin-top: 20px"/></a>
                            </li>
                            <li class=" border"><a data-target="#pic-3" data-toggle="tab"><img src="/images/g3.png"
                                                                                               style="margin-top: 20px"/></a>
                            </li>
                            <li class=" border"><a data-target="#pic-4" data-toggle="tab"><img src="/images/g4.png"
                                                                                               style="margin-top: 20px"/></a>
                            </li>

                        </ul>


                    </div>

                    <div class="online-test col-md-3 col-sm-12">
                        <br>
                        <br>
                        <a href="{{$product->online_test_url}}">
                            <div class="d-flex justify-content-center w-100">
                                <div class="rounded-circle d-flex border-ainaki feature">
                                    <h6 class="align-self-center m-1">تست آنلاین</h6></div>
                            </div>
                        </a>
                        <br>
                        <br>
                    </div>

                    <div class="details col-md-4  col-sm-12">
                        <h4 class="product-title">{{$product->name}}</h4>
                        <h6 class="product-title text-center">قیمت {{$product->price}}</h6>


                        {{--<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia--}}
                        {{--sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>--}}
                        <ul class="text-secondary product-description">
                            @foreach($product->properties as $property)
                                <li>{{$property}}</li>
                            @endforeach
                        </ul>


                        <div class="action text-center">
                            <a href="{{$product->buy_url}}" class="add-to-cart btn btn-default">افزودن به سبد خرید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container border rtl tabs my-5 p-2">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item ">
                <a class="nav-link active show" data-toggle="tab" href="#desc">توضیحات</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="tab" href="#information">مشخصات</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="tab" href="#comment">نظرات کاربران</a>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="desc" class="container tab-pane active"><br>
                <div class="row  ">
                    <div class="col-12 text-left">
                        <h3>توضیحات تکمیلی</h3>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-12 text-left">
                        <p>{{$product->description}}</p>
                    </div>
                </div>
            </div>
            <div id="information" class="container tab-pane fade"><br>
                <div class="row  ">
                    <div class="col-12 text-left">
                        <h3>مشخصات فنی</h3>
                        <p>{{$product->name}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <table class="table table-borderless">
                            <tbody>
                            @foreach($product->specs as $spec=>$attribs)
                                <tr>
                                    <th>{{__('messages.' . $spec .'_key')}}</th>
                                    <td>
                                        <table class="table w-75">

                                            <tbody>
                                            @foreach($attribs as $key =>$value)
                                                <tr class="text-left">
                                                    <td>
                                                        {{__('messages.'.$spec. '.' . $key)}}
                                                    </td>
                                                    @if($key=='name')
                                                        <td>{{$value}}</td>
                                                    @elseif($key=='category')
                                                        <td>{{$value->name}}</td>
                                                    @elseif($key=='brand')
                                                        <td>{{$value->name}}</td>
                                                    @elseif($key=='warranty')
                                                        <td>{{$value->company}}</td>
                                                    @else
                                                        <td>{{$value}}</td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="comment" class="container tab-pane fade"><br>
                <h3>نظرات کاربران</h3>
            </div>
        </div>
    </div>

    {{--@include ('layouts.similarProduct')--}}

@endsection
@section('styles')
    <link href="{{ asset('css/showproductDEtailStyle.css') }}" rel="stylesheet">
@endsection