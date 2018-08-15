<div class="container-fluid rtl">

    <div class="wrapper row">
        <div class="col-md-3 col-sm-12">
            <div class="card border" style="background-color: #f8f9fa!important">
                <h5 class="text-left" style="margin-right: -30px">فیلتر بر اساس</h5>


                <div class="panel-group " id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading border " role="tab" id="headingOne">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" class="panel-title" data-parent="#accordion"
                                   href="#collapse1">برند</a>

                            </h6>

                        </div>

                        <div id="collapse1" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item"><a class="list-item" href="#">Adidas</a></li>
                                <li class="list-group-item"><a class="list-item" href="#">RayBan</a></li>
                                <li class="list-group-item"><a class="list-item" href="#">Komono</a></li>
                            </ul>

                        </div>

                    </div>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading border">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" class="panel-title" data-parent="#accordion"
                                   href="#collapse2">نوع عدسی</a>

                            </h6>

                        </div>

                        <div id="collapse2" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item">One</li>
                                <li class="list-group-item">Two</li>
                                <li class="list-group-item">Three</li>
                            </ul>

                        </div>

                    </div>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading border">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" class="panel-title" data-parent="#accordion"
                                   href="#collapse3">شکل صورت</a>

                            </h6>

                        </div>

                        <div id="collapse3" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item">One</li>
                                <li class="list-group-item">Two</li>
                                <li class="list-group-item">Three</li>
                            </ul>

                        </div>

                    </div>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading border">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" class="panel-title" data-parent="#accordion"
                                   href="#collapse4">رنگ پوست</a>

                            </h6>

                        </div>

                        <div id="collapse4" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item">One</li>
                                <li class="list-group-item">Two</li>
                                <li class="list-group-item">Three</li>
                            </ul>

                        </div>

                    </div>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading border">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" class="panel-title" data-parent="#accordion"
                                   href="#collapse5">شکل فریم</a>

                            </h6>

                        </div>

                        <div id="collapse5" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item">One</li>
                                <li class="list-group-item">Two</li>
                                <li class="list-group-item">Three</li>
                            </ul>

                        </div>

                    </div>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading border">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" class="panel-title" data-parent="#accordion"
                                   href="#collapse6">اندازه فریم</a>

                            </h6>

                        </div>

                        <div id="collapse6" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item">One</li>
                                <li class="list-group-item">Two</li>
                                <li class="list-group-item">Three</li>
                            </ul>

                        </div>

                    </div>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading border">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" class="panel-title" data-parent="#accordion"
                                   href="#collapse7">جنس فریم</a>

                            </h6>

                        </div>

                        <div id="collapse7" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item">One</li>
                                <li class="list-group-item">Two</li>
                                <li class="list-group-item">Three</li>
                            </ul>

                        </div>

                    </div>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading border">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" class="panel-title" data-parent="#accordion"
                                   href="#collapse8">جنس عدسی</a>

                            </h6>

                        </div>

                        <div id="collapse8" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item">One</li>
                                <li class="list-group-item">Two</li>
                                <li class="list-group-item">Three</li>
                            </ul>

                        </div>

                    </div>

                    <br>
                    <div class="panel panel-default ">
                        <div class="panel-heading">
                               <h6 class="panel-title">
                                   قیمت
                               </h6>
                        </div>
                        <div class="panel-body">
                            <input id="ex2" type="text" class="ltr" value="" data-slider-min="50000" data-slider-max="1000000" data-slider-step="5000" data-slider-value="[50000,500000]"/>
                            <p>
                                <span>از </span>
                                <span class="text-info" id="priceFrom"></span>
                                <span>تا</span>
                                <span class="text-info" id="priceTo"></span>
                            </p>
                            <a href="#" class="btn btn-primary w-100"><i class="fa fa-filter"></i> اعمال محدوده قیمت</a>
                        </div>
                    </div>
                </div>


            </div>
            <br>
        </div>

        <div class="col-md-9 col-sm-12 text-center">
            @php
                $count = 0;
            @endphp
            <div class="row">
                <div class="card-deck col-12">
                    @foreach($products as $product)
                        {{--@if($count++ % 3 == 0)--}}
                        {{--@endif--}}
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card border text-center hovereffect mb-3 " style="height: 350px">
                                <img class="card-img-top" src="/{{$product->photos[0]->path}}" alt="Card image">
                                <div class="overlay">
                                    <a href="{{route('product.test', $product->id)}}" class="btn btn-primary info">تست
                                        انلاین</a>
                                    <a href="{{route('product.show', ['category'=>$product, 'id'=>$product->id])}}"
                                       class="btn btn-primary info">مشاهده محصول</a>
                                </div>
                                <div class="card-body list-page">
                                    <h6 class="card-title text-center">{{$product->name}}</h6>
                                    <p class="card-text text-center">{{$product->price}}</p>
                                </div>
                            </div>
                        </div>
                        {{--                            @if($count % 3 == 0)--}}
                        {{--@endif--}}
                    @endforeach
                </div>
            </div>
            <div class="w-100 d-flex justify-content-center my-5">
                <div class=" rtl align-self-center" style="position: absolute; bottom: 0">
                    {{$products->links()}}
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">

        </div>
    </div>
</div>

