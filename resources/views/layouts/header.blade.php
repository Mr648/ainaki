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

        <div class="col-md-6 col-xs-12  h-100 align-self-center">
            <div class="d-flex justify-content-end align-contents-center w-100 text-dark">
                <span class="align-self-center" id="sign-in">
                <a href="#" class="px-1 " data-toggle=modal data-target="#myModalLogin" id="login">ورود</a>/
                </span>
                <div class="modal" id="myModalLogin">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            @include ('layouts.login')
                        </div>
                    </div>
                </div>
                <span class="align-self-center" id="sign-in">
                <a class="px-2" data-toggle="modal" data-target="#myModalRegister"
                   href="#" id="sign-up">ثبت‌نام</a></span>
                <div class="modal" id="myModalRegister">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            @include ('layouts.signup')
                        </div>
                    </div>
                </div>
                <i class="border-left border-light"></i><a href="#" class="align-self-center btn btn-link"><i
                            class="fa fa-shopping-cart fa-lg" id="shopping-cart"></i>
                </a>
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
                                <img src="images/WomanGlass.png" class="align-self-center rounded w-75 m-2"
                                     alt="Woman Glass">
                                <h5 class="align-self-center"><a class=" dropdown-item" href="#">زنانه</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row">
                                <img src="images/ManGlass.png" class="align-self-center rounded w-75 m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item" href="#">مردانه</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/KidGlass.png" class="align-self-center rounded w-75 m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item  " href="#">بچه‎گانه</a></h5>
                            </div>
                        </div>

                    </div>
                </div>


            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">عینک آفتابی</a>
                <div class="dropdown-menu dropdown-large">

                    <div class="row">
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/WomanGlass.png" class="align-self-center rounded w-75 m-2"
                                     alt="Woman Glass">
                                <h5 class="align-self-center"><a class=" dropdown-item" href="#">زنانه</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row">
                                <img src="images/ManGlass.png" class="align-self-center rounded w-75 m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item" href="#">مردانه</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/KidGlass.png" class="align-self-center rounded w-75 m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item  " href="#">بچه‎گانه</a></h5>
                            </div>
                        </div>

                    </div>
                </div>


            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">لنز</a>
                <div class="dropdown-menu dropdown-large " style="margin-right: -150px" >

                    <div class="row">
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/lens.png" class="align-self-center rounded w-75 m-2"
                                     alt="Woman Glass">
                                <h5 class="align-self-center"><a class=" dropdown-item" href="#">طبی</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row">
                                <img src="images/lens.png" class="align-self-center rounded w-75 m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item" href="#">رنگی</a></h5>
                            </div>
                        </div>
                        <div class="col" href="#">
                            <div class="d-flex flex-lg-row ">
                                <img src="images/lens.png" class="align-self-center rounded w-75 m-2"
                                     alt="Man Glass">
                                <h5 class="align-self-center "><a class=" dropdown-item  " href="#">طبی </a></h5>
                            </div>
                        </div>

                    </div>
                </div>


            </li>


            <li class="nav-item">
                <a class="nav-link" href="#"> لوازم جانبی <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> برند<i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">راهنمای تست آنلاین <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link col-12 ">تست آنلاین</a>
            </li>

        </ul>
    </div>
</nav>

