@extends('layouts.layout')

@section('contents')
    <div class="container rtl ">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-5 col-sm-12">

                        <div class="preview-pic tab-content border" style="margin-bottom: 6px !important;">
                            <div class="tab-pane active" id="pic-1" style="height: 250px !important; ">
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
                        <ul class="preview-thumbnail nav nav-tabs text-center">
                            <li class="active border "><a class=" border" data-toggle="modal"
                                                          data-target="#myModal"><img
                                            src="/images/g1.png"/></a>
                            </li>
                            <li class=" border"><a data-toggle="modal" data-target="#myModal"><img src="/images/g2.png"
                                                                                                   style="margin-top: 20px"/></a>
                            </li>
                            <li class=" border"><a data-toggle="modal" data-target="#myModal"><img src="/images/g3.png"
                                                                                                   style="margin-top: 20px"/></a>
                            </li>
                            <li class=" border"><a data-toggle="modal" data-target="#myModal"><img src="/images/g4.png"
                                                                                                   style="margin-top: 20px"/></a>
                            </li>

                        </ul>


                        <div class=" container-fluid">


                            <!-- The Modal -->
                            <div class="modal fade " id="myModal">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content modal-test">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body ">
                                            <div id="demo" class="carousel slide" data-ride="carousel">
                                                <ul class="carousel-indicators">
                                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel" data-slide-to="1"></li>
                                                    <li data-target="#carousel" data-slide-to="2"></li>
                                                </ul>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="/images/g2.png" alt="Los Angeles"
                                                             style="height: 250px !important;">

                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="/images/g3.png" alt="Chicago"
                                                             style="height: 250px !important;">

                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="/images/g4.png" alt="New York"
                                                             style="height: 250px !important;">

                                                    </div>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                    <i class="fa  fa-chevron-right text-black-50"></i>
                                                </a>
                                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                                    <i class="fa  fa-chevron-left text-black-50 "></i>
                                                </a>

                                                {{--<a class="carousel-control-prev" href="#demo" data-slide="prev">--}}
                                                {{--<span class="carousel-control-prev-icon"></span>--}}
                                                {{--</a>--}}
                                                {{--<a class="carousel-control-next" href="#demo" data-slide="next">--}}
                                                {{--<span class="carousel-control-next-icon"></span>--}}
                                                {{--</a>--}}
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        {{--<div class="modal-footer">--}}
                                        {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                        {{--</div>--}}

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                    @if(isset($product->online_test_url))
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
                    @else
                        <div class="col-md-3 col-sm-12">
                        </div>
                    @endif
                    <div class="details col-md-4  col-sm-12">
                        <h4 class="product-title">{{$product->specs->full->name}}</h4>
                        <h6 class="product-title text-center">قیمت {{$product->price}}</h6>


                        {{--<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia--}}
                        {{--sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>--}}
                        <ul class="text-secondary product-description">
                            @foreach($product->properties as $property)
                                <li>{{$property}}</li>
                            @endforeach
                        </ul>


                        <div class="action text-center">
                            <a href="{{$product->add_to_basket_url}}" class="add-to-cart btn btn-default">افزودن به سبد
                                خرید</a>
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
                                                        <td class="w-50">
                                                            {{__('messages.'.$spec. '.' . $key)}}
                                                        </td>
                                                        @if($key=='name')
                                                            <td class="w-50">{{$value}}</td>
                                                        @elseif($key=='category')
                                                            <td class="w-50">{{$value->name}}</td>
                                                        @elseif($key=='brand')
                                                            <td class="w-50">{{$value->name}}</td>
                                                        @elseif($key=='warranty')
                                                            <td class="w-50">@foreach($value as $warranty)
                                                                    {{$warranty->company  }}<br>
                                                                @endforeach</td>
                                                        @else
                                                            <td class="w-50">{{$value}}</td>
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
                    <div class="card border shadow-lg">
                        <div class="row  ">

                            <div class="col-md-1">
                                <img src="/images/boy.png" alt="" class="rounded-circle" style="width:60px;">
                            </div>
                            <div class="col-md-2">

                                <h4>John Doe</h4>


                                <span class="fa fa-star rate"></span>
                                <span class="fa fa-star rate "></span>
                                <span class="fa fa-star rate"></span>
                                <span class="fa fa-star rate"></span>
                                <span class="fa fa-star rate"></span>
                                <small>2018/8/19</small>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3 rtl ">

                                {{--<a href=""><i id="like" class="fa fa-thumbs-up fa-2x"></i></a> <span>1256</span>--}}
                                {{--<a href=""><i id="dislike" class="fa fa-thumbs-down fa-2x"></i> </a><span>1256</span>--}}
                                <a href="#" class="btn btn-outline-primary like"
                                   style="color: #921a48;  border-color: #921a48;"><i class="fa fa-heart"></i> 1234</a>
                                <a href="#" class="btn btn-outline-primary like"
                                   style="color: #921a48 ;  border-color: #921a48;"><i class="fa fa-thumbs-down"></i>
                                    1234</a>
                            </div>

                        </div>


                        <br>
                        <div class="row">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt
                                ut labore et dolore magna aliqua.
                                ut labore et dolore magna aliqua.</p>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row">

                            <div class="stars text-left">
                                <h4 class="rate-pro">امتیاز دادن به محصول</h4>
                                <form>

                                    <input class="star star-5" id="star-5" type="radio" name="star"/>

                                    <label class="star star-5" for="star-5"></label>

                                    <input class="star star-4" id="star-4" type="radio" name="star"/>

                                    <label class="star star-4" for="star-4"></label>

                                    <input class="star star-3" id="star-3" type="radio" name="star"/>

                                    <label class="star star-3" for="star-3"></label>

                                    <input class="star star-2" id="star-2" type="radio" name="star"/>

                                    <label class="star star-2" for="star-2"></label>

                                    <input class="star star-1" id="star-1" type="radio" name="star"/>

                                    <label class="star star-1" for="star-1"></label>

                                </form>
                            </div>
                        </div>

                            <div class="form-group">

                                <label for="comment">اضافه کردن دیدگاه</label>
                                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                            </div>
                            <button type="submit" class=" send btn btn-default ">ارسال</button>

                    </div>

                </div>
                <br>
            </div>

        </div>
        <h3 class="similar-product">محصولات مشابه</h3>

        <div class="card-deck rtl">

            <div class="card my-5 border">
                <div id="demo1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active" style="height: 350px !important;">
                            <img src="images/aftabi.png" alt="Card image" class="w-75"/>
                        </div>
                        <div class="carousel-item" style="height: 350px !important;">
                            <img src="images/lense.png" alt="glass1" class="w-75">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                        <i class="fa  fa-chevron-right text-black-50"></i>
                    </a>
                    <a class="carousel-control-next" href="#demo1" data-slide="next">
                        <i class="fa  fa-chevron-left text-black-50"></i>
                    </a>
                    <br>
                    {{--<img class="card-img-top" src="images/8.jpg" alt="Card image" style="width:400px;">--}}
                </div>
                <div class="card-body text-center ">
                    <h5 class="card-title">عینک افتابی کومونو 879 589</h5>
                    <p class="card-text text-center">قیمت 290000 تومان</p>
                    <a href="#" class="btn btn-primary" id="see-product">مشاهده محصول</a>
                </div>
            </div>

            <div class="card my-5 border">
                <div id="demo2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active" style="height: 350px !important;">
                            <img src="images/aftabi.png" alt="Card image" class="w-75"/>
                        </div>
                        <div class="carousel-item" style="height: 350px !important;">
                            <img src="images/lense.png" alt="glass1" class="w-75">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                        <i class="fa  fa-chevron-right text-black-50"></i>
                    </a>
                    <a class="carousel-control-next" href="#demo2" data-slide="next">
                        <i class="fa  fa-chevron-left text-black-50"></i>
                    </a>
                    <br>

                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">عینک افتابی کومونو 879 589</h5>
                    <p class="card-text">قیمت 290000 تومان</p>
                    <a href="#" class="btn btn-primary" id="see-product">مشاهده محصول</a>
                </div>
            </div>

            <div class="card my-5 border">
                <div id="demo3" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active" style="height: 350px !important;">
                            <img src="images/aftabi.png" alt="Card image" class="w-75"/>
                        </div>
                        <div class="carousel-item" style="height: 350px !important;">
                            <img src="images/lense.png" alt="glass1" class="w-75">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo3" data-slide="prev">
                        <i class="fa  fa-chevron-right text-black-50"></i>
                    </a>
                    <a class="carousel-control-next" href="#demo3" data-slide="next">
                        <i class="fa  fa-chevron-left text-black-50"></i>
                    </a>
                    <br>

                </div>
                <div class="card-body text-center">
                    <h5 class="card-title ">عینک افتابی کومونو 879 589</h5>
                    <p class="card-text">قیمت 290000 تومان</p>
                    <a href="#" class="btn btn-primary" id="see-product">مشاهده محصول</a>
                </div>
            </div>
            <br>

        </div>
        <br>
    </div>
    <br>


    {{--@include ('layouts.similarProduct')--}}

@endsection
@section('styles')
    <link href="{{ asset('css/showproductDEtailStyle.css') }}" rel="stylesheet">
@endsection