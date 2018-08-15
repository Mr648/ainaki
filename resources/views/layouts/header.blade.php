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
            </div>
    </div>
</nav>




<nav class="navbar navbar-expand-md rtl">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"><i class="fa fa-bars fa-2x" style="color: #595858"></i></span>
        </button>



    <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-large">
                <a href="#" class="nav-link navBar dropdown-toggle" data-toggle="dropdown">عینک طبی<b class="caret"></b></a>

                <ul class="dropdown-menu dropdown-menu-large">
                    <li class="dropdown-item d-flex flex-row">
                        <ul class="row">
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>دسته‎بندی</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">عینک طبی زنانه</a></li>
                                    <li><a class="dp-item" href="#">عینک طبی مردانه</a></li>
                                    <li><a class="dp-item" href="#">عینک طبی بچه‎گانه</a></li>


                                </ul>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>برند</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">Bali</a></li>
                                    <li><a class="dp-item" href="#">Birmanie</a></li>
                                    <li><a class="dp-item" href="#">Chine</a></li>
                                    <li><a class="dp-item" href="#">Corée du Nord</a></li>
                                    <li><a class="dp-item" href="#">Corée du Sud</a></li>
                                    <li><a class="dp-item" href="#">Inde</a></li>

                                </ul>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>پرفروش ترین ها</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">Emirats Arabes Unis</a></li>
                                    <li><a class="dp-item" href="#">Israel et territoire Palestiniens</a></li>
                                    <li><a class="dp-item" href="#">Jordanie</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                </ul>

            </li>

            <li class="nav-item dropdown dropdown-large">
                <a href="#" class="nav-link navBar dropdown-toggle" data-toggle="dropdown">عینک آفتابی<b class="caret"></b></a>

                <ul class="dropdown-menu dropdown-menu-large">
                    <li class="dropdown-item d-flex flex-row">
                        <ul class="row">
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>دسته‎بندی</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">عینک آفتابی زنانه</a></li>
                                    <li><a class="dp-item" href="#">عینک آفتابی مردانه</a></li>
                                    <li><a class="dp-item" href="#">عینک آفتابی بچه‎گانه</a></li>


                                </ul>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>برند</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">Bali</a></li>
                                    <li><a class="dp-item" href="#">Birmanie</a></li>
                                    <li><a class="dp-item" href="#">Chine</a></li>
                                    <li><a class="dp-item" href="#">Corée du Nord</a></li>
                                    <li><a class="dp-item" href="#">Corée du Sud</a></li>
                                    <li><a class="dp-item" href="#">Inde</a></li>

                                </ul>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>پرفروش ترین ها</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">Emirats Arabes Unis</a></li>
                                    <li><a class="dp-item" href="#">Israel et territoire Palestiniens</a></li>
                                    <li><a class="dp-item" href="#">Jordanie</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                </ul>

            </li>

            <li class="nav-item dropdown dropdown-large">
                <a href="#" class="nav-link navBar dropdown-toggle" data-toggle="dropdown">لنز<b class="caret"></b></a>

                <ul class="dropdown-menu dropdown-menu-large">
                    <li class="dropdown-item d-flex flex-row">
                        <ul class="row">
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>دسته‎بندی</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">لنز طبی</a></li>
                                    <li><a class="dp-item" href="#">لنز رنگی</a></li>
                                    <li><a class="dp-item" href="#">لنز طبی رنگی</a></li>


                                </ul>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>مدت زمان استفاده</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">لنز روزانه</a></li>
                                    <li><a class="dp-item" href="#">لنز ماهانه</a></li>
                                    <li><a class="dp-item" href="#">لنز فصلی</a></li>


                                </ul>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>برند</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">Bali</a></li>
                                    <li><a class="dp-item" href="#">Birmanie</a></li>
                                    <li><a class="dp-item" href="#">Chine</a></li>
                                    <li><a class="dp-item" href="#">Corée du Nord</a></li>
                                    <li><a class="dp-item" href="#">Corée du Sud</a></li>
                                    <li><a class="dp-item" href="#">Inde</a></li>

                                </ul>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>پرفروش ترین ها</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">Emirats Arabes Unis</a></li>
                                    <li><a class="dp-item" href="#">Israel et territoire Palestiniens</a></li>
                                    <li><a class="dp-item" href="#">Jordanie</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                </ul>

            </li>

            <li class="nav-item dropdown dropdown-large" >
                <a href="#" class="nav-link navBar dropdown-toggle" data-toggle="dropdown" >لوازم جانبی<b class="caret"></b></a>

                <ul class="dropdown-menu dropdown-menu-large">
                    <li class="dropdown-item d-flex flex-row" >
                        <ul class="row">
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>لوازم جانبی عینک</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">جعبه عینک</a></li>
                                    <li><a class="dp-item" href="#">بند عینک</a></li>
                                    <li><a class="dp-item" href="#">محلول شوینده</a></li>


                                </ul>
                            </li>

                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>برند</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">Bali</a></li>
                                    <li><a class="dp-item" href="#">Birmanie</a></li>
                                    <li><a class="dp-item" href="#">Chine</a></li>
                                    <li><a class="dp-item" href="#">Corée du Nord</a></li>
                                    <li><a class="dp-item" href="#">Corée du Sud</a></li>
                                    <li><a class="dp-item" href="#">Inde</a></li>

                                </ul>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12 text-left">
                                <ul>
                                    <li class="dropdown-header"><strong>پرفروش ترین ها</strong></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dp-item" href="#">Emirats Arabes Unis</a></li>
                                    <li><a class="dp-item" href="#">Israel et territoire Palestiniens</a></li>
                                    <li><a class="dp-item" href="#">Jordanie</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                </ul>

            </li>

            <li class="nav-item" >
                <a href="#" class="nav-link navBar" >راهنمای تست آنلاین<b class="caret"></b></a>

                </li>


        </ul>

    </div><!-- /.nav-collapse -->
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


