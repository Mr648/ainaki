<div class="container-fluid rtl">

    <div class="wrapper row">
        <div class="col-md-3 col-sm-12">
            <div class="card border">
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
                </div>


            </div>
            <br>
        </div>

        <div class="col-md-9 col-sm-12">
            @php
                $count = 0;
            @endphp
            <div class="row">
                @foreach($products as $product)
                    @if($count++ % 3 == 0)
                        <div class="card-deck col-12">
                            @endif
                            <div class="card border text-center hovereffect " style=" height: 350px">
                                <img class="card-img img-fluid" src="/{{$product->photos[0]->path}}" alt="Card image">
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
                            @if($count % 3 == 0)
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
<div class="container-fluid">
    <div class="card-columns">
        @foreach($products as $product )
            <div class="card">
                <img alt="Card image cap" class="card-img-top img-fluid" src="https://www.fillmurray.com/420/200">
                <div class="card-block">
                    <h4 class="card-title">Boating is the new canoeing</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        @endforeach
    </div>
</div>




