<nav class="container-fluid rtl bg-color-primary py-4 navbar-sticky-top">
    <div class="row align-content-center">
        <a class="col-md-2 col-xs-12" href="#"><img src="images/logo.jpg" class="rounded-circle" width="96px"
                                                    alt="Logo"></a>
        <div class="input-group col-md-4 col-xs-12 h-25 align-self-center">
            <input type="text" class="form-control">
            <div class="input-group-append">
                <span class="btn btn-secondary" id="btn-search"><i class="fa fa-search"></i></span>
            </div>
        </div>
        @if(\Illuminate\Support\Facades\Session::get('user'))
            <div class="col-md-6 col-xs-12  h-100 align-self-center">
                <div class="d-flex justify-content-end align-contents-center w-100 text-dark">
                     <span class="align-self-center" id="sign-out">
                    <form action="{{route('logout')}}" method="post">
                        {{csrf_field()}}
                        <input type="submit" value="خروج" class="btn btn-outline-light border-0"/>
                    </form>
                    </span>
                    @else
                        <div class="col-md-6 col-xs-12  h-100 align-self-center">
                            <div class="d-flex justify-content-end align-contents-center w-100 text-dark">
                <span class="align-self-center" id="sign-in">
                <a href="#" class="px-1 " data-toggle=modal data-target="#myModalLogin" id="login">ورود</a>/
                </span>
                                <div class="modal col-12 col-lg-12" id="myModalLogin">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            @include ('layouts.login')
                                        </div>
                                    </div>
                                </div>
                                <span class="align-self-center" id="sign-in">
                <a class="px-2" data-toggle="modal" data-target="#myModalRegister"
                   href="#" id="sign-up">ثبت‌نام</a></span>
                                <div class="modal  col-12 col-lg-12" id="myModalRegister">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            @include ('layouts.signup')
                                        </div>
                                    </div>
                                </div>
                                @endif


                                <i class="border-left border-light"></i><a href="#"
                                                                           class="align-self-center btn btn-link"><i
                                            class="fa fa-shopping-cart fa-lg" id="shopping-cart"></i>
                                </a>
                                <div class="modal" id="messageModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="messageModalTitle"></h4>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <p id="messageModalMessage"></p>
                                                <button type="button" class="pull-left btn btn-danger"
                                                        data-dismiss="modal">بستن
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
</nav>

<nav class="navbar navbar-expand-sm rtl bg-light navbar-light sticky-top">
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav navbar-expand-sm  ">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">عینک طبی</a>
                <div class="dropdown-menu dropdown-large">

                    <div class="row">
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/woman.png" class="align-self-center rounded img-dropdown2 m-2"
                                     alt="Woman Glass">
                                <h5 class="align-self-center"><a class=" dropdown-item" href="#">زنانه</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row">
                                <img src="images/men.png" class="align-self-center rounded m-2 img-dropdown"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item" href="#">مردانه</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/Kid.png" class="align-self-center rounded img-dropdown m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item  " href="#">بچه‎گانه</a></h5>
                            </div>
                        </div>

                    </div>
                </div>

            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">عینک آفتابی</a>
                <div class="dropdown-menu dropdown-large" style="margin-right: -75px">

                    <div class="row">
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/womanSun.png" class="align-self-center rounded img-dropdowng2 m-2"
                                     alt="Woman Glass">
                                <h5 class="align-self-center"><a class=" dropdown-item" href="#">زنانه</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row">
                                <img src="images/menSun.png" class="align-self-center rounded img-dropdown m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item" href="#">مردانه</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/Kid.png" class="align-self-center rounded  img-dropdown m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item  " href="#">بچه‎گانه</a></h5>
                            </div>
                        </div>

                    </div>
                </div>


            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">لنز</a>
                <div class="dropdown-menu dropdown-large " style="margin-right: -150px">

                    <div class="row">
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <h5 class="align-self-center" data-background-image="images/lens.png" data-size="156"><a
                                            class=" dropdown-item" href="#">طبی</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row">
                                <h5 class="align-self-center" data-background-image="images/lens.png" data-size="156"><a
                                            class=" dropdown-item" href="#">طبی</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <h5 class="align-self-center" data-background-image="images/lens.png" data-size="156"><a
                                            class=" dropdown-item" href="#">طبی</a></h5>
                            </div>
                        </div>

                    </div>
                </div>


            </li>


            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">لوازم جانبی</a>
                <div class="dropdown-menu dropdown-large" style="margin-right: -200px">

                    <div class="row">
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/womanSun.png" class="align-self-center rounded img-dropdowng2 m-2"
                                     alt="Woman Glass">
                                <h5 class="align-self-center"><a class=" dropdown-item" href="#">جعبه ی عینک</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row">
                                <img src="images/menSun.png" class="align-self-center rounded img-dropdown m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item" href="#">شوینده</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/Kid.png" class="align-self-center rounded img-dropdown m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item  " href="#">لوازم تعمیر</a></h5>
                            </div>
                        </div>
                    </div>
                </div>


            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">برند</a>
                <div class="dropdown-menu dropdown-large" style="margin-right: -355px">

                    <div class="row">
                        <div class="col" href="#">
                            <div class="list-group">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/ReyBanLogo.png"
                                     class="align-self-center rounded  img-dropdownbrand  m-2"
                                     alt="Woman Glass">
                                <h5 class="align-self-center"><a class=" dropdown-item" href="#">Rey.Ban</a></h5>
                            </div>
                                <div class="d-flex d-flex-row">
                            <img src="images/ArmanyLogo.png"
                                 class="align-self-center rounded m-2" style="width:84px "
                                 alt="Woman Glass">
                                <h5 class="align-self-center"><a class=" dropdown-item" href="#">Armany</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row">

                                <h5 class="align-self-center "><a class=" dropdown-item" href="#">شوینده</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <h5 class="align-self-center "><a class=" dropdown-item  " href="#">لوازم تعمیر</a></h5>
                            </div>
                        </div>

                    </div>
                </div>


            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">راهنمای تست آنلاین <i  aria-hidden="true"></i></a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link col-12 ">تست آنلاین</a>
            </li>

        </ul>
    </div>
</nav>

<script>
    $(document).ready(function () {
//        $('.dropdown').dropdown();
        $('.nav-item h5').each(function () {
            var bg = '/' + $(this).data('background-image');
            var size = $(this).data('size');
            if (bg !== null && size !== null) {
                $(this).css(
                    {
                        'background-image': 'url(' + bg + ')',
                        'background-size': size + 'px' + " " + size + 'px',
                        'width': size + "px !important",
                        'height': size + "px !important"
                    }
                )
                ;
                console.info("bg is " + bg);
            }
        })
        ;
    })
    ;
</script>

