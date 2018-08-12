<div class="container-fluid">
    <div class="row">
        @foreach($homeProducts as $product)
            <div class="col-md-3 col-sm-6 col-xs-12 rtl">
                <div class="card my-5 border">
                    <div id="demo{{$product->id}}" class="carousel" data-ride="carousel">
                        <div class="carousel-inner text-center">
                            @php
                                $counter = 0;
                            @endphp
                            @foreach($product->photos as $image)

                                <div class="carousel-item {{$counter==0?'active':''}}" style="height:280px;">
                                    <div class="d-flex h-100 w-100  justify-content-center ">
                                        <img src="{{$image->path}}" alt="{{$product->name . '_image'. $counter}}"
                                             class="align-self-center w-75 ">
                                    </div>

                                </div>
                                @php
                                    $counter++;
                                @endphp
                            @endforeach
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo{{$product->id}}" data-slide="prev">
                            <i class="fa  fa-chevron-right text-black-50"></i>
                        </a>
                        <a class="carousel-control-next" href="#demo{{$product->id}}" data-slide="next">
                            <i class="fa  fa-chevron-left text-black-50"></i>
                        </a>
                        <br>
                        {{--<img class="card-img-top" src="images/8.jpg" alt="Card image" style="width:400px;">--}}
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title">{{json_decode($product->name)->fa}}</h4>
                        <p class="card-text text-center"> قیمت {{$product->price}} تومان</p>
                        <a href="{{route('product.show', $product->id)}}" class="btn btn-primary" id="see-product">مشاهده
                            محصول</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>