@extends('layouts.layout')

@section('contents')

    {{-- --}}
    <div class="container rtl ">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-5 col-sm-12">


                        <div class="preview-pic tab-content border" style="margin-bottom: 6px !important;">
                            <div class="tab-pane active" style="height: 250px !important;" id="pic-main">
                                <img src="{{asset("{$product->images[0]->path}")}}"/>
                            </div>
                            <div class="tab-pane" style="height: 250px !important;" id="pic-3"><img
                                        src="/images/g3.png"/>
                            </div>
                            <div class="tab-pane" style="height: 250px !important;" id="pic-4"><img
                                        src="/images/g4.png"/>
                            </div>

                        </div>
                        <ul class="preview-thumbnail nav nav-tabs text-center" id="image_thumbnails">
                            @php
                                $imageCounter = 0;
                            @endphp
                            @foreach($product->images as $image)
                                <li class="border" >
                                    <a class="mouse">
                                        <img src="{{asset("{$image->path}")}}" data-image-id="{{$imageCounter}}"
                                             style="margin-top: 20px"/>
                                    </a>
                                </li>
                                @php
                                    $imageCounter++;
                                @endphp
                            @endforeach

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
                                                <ul class="carousel-indicators" id="productImagesIndicators">
                                                    @php
                                                        $imageCounter = 0;
                                                    @endphp
                                                    @foreach($product->images as $image)
                                                        <li data-target="#carousel" data-slide-to="{{$imageCounter}}"
                                                            class="{{$imageCounter==0?'active':''}}"></li>
                                                        @php
                                                            $imageCounter++;
                                                        @endphp
                                                    @endforeach
                                                </ul>
                                                <div class="carousel-inner" id="productImagesLarge">
                                                    @php
                                                        $imageCounter = 0;
                                                    @endphp
                                                    @foreach($product->images as $image)
                                                        <div class="carousel-item"
                                                             data-selected-image="{{$imageCounter}}">
                                                            <img src="{{asset("{$image->path}")}}"
                                                                 alt="product-image-{{$imageCounter}}"
                                                                 style="height: 250px !important;">
                                                        </div>
                                                        @php
                                                            $imageCounter++;
                                                        @endphp
                                                    @endforeach

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
                                                <script>
                                                    $(document).ready(function () {
                                                        var selectedImage = -1;
                                                        $("#image_thumbnails a").on('click', function (evt) {
                                                            evt.preventDefault();
                                                            selectedImage = $(this).find('img').data('image-id');
                                                            $("#myModal").modal("show");
                                                        })
                                                        ;
                                                        $("#myModal").on('show.bs.modal', function () {
                                                            $('.carousel-item').each(function () {
                                                                alert('jamal');
                                                            });
                                                        })
                                                        ;
                                                    })
                                                    ;
                                                </script>
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


        {{-- Similar Products --}}
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


    {{-- Tabs --}}
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
                @foreach($product->comments as $comment)
                    <div class="card border">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset("{$comment->user_avatar}")}}" alt="" class="border rounded-circle p-1"
                                     style="width:72px;">
                            </div>
                            <div class="col-md-2">

                                <h4>{{$comment->user_name}}</h4>
                                @php
                                    $rating_on = $comment->rating;
                                    $rating_off = 5 - $rating_on;

                                @endphp
                                @while( $rating_on-- > 0 )
                                    <span class="fa fa-star rate"></span>
                                @endwhile
                                @while( $rating_off-- > 0 )
                                    <span class="fa fa-star text-light"></span>
                                @endwhile
                                <span><strong>{{$comment->rating}}</strong> از  <strong>5</strong></span>
                                <br>
                                <small>{{\Carbon\Carbon::createFromTimestamp($comment->date)}}</small>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3 rtl ">
                                <a href="#" class="btn btn-outline-light like"
                                   style="color: #921a48;  border-color: #921a48;"><i class="fa fa-thumbs-up"></i> 1234</a>
                                <a href="#" class="btn btn-outline-light like"
                                   style="color: #921a48 ;  border-color: #921a48;"><i class="fa fa-thumbs-down"></i>
                                    1234</a>
                            </div>
                        </div>


                        <br>
                        <div class="row">
                            <p class="w-100">{{$comment->comment}}</p>
                        </div>
                    </div>
                @endforeach

                <div class="form-group">
                    <label for="comment">اضافه کردن دیدگاه</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ارسال</button>

            </div>
        </div>
    </div>

@endsection
@section('styles')
    <link href="{{ asset('css/showproductDEtailStyle.css') }}" rel="stylesheet">
@endsection

