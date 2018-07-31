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
                <div class="modal  col-12 col-lg-12"  id="myModalRegister">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            @include ('layouts.signup')
                        </div>
                    </div>
                </div>
                <i class="border-left border-light"></i><a href="#" class="align-self-center btn btn-link"><i
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
                                <button type="button" class="pull-left btn btn-danger" data-dismiss="modal">بستن</button>
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
            <li class="nav-item" >
                <a class="nav-link" href="#"> عینک طبی<i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> عینک آفتابی <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> لنز <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> لوازم جانبی <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> برند<i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">راهنمای تست انلاین <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link col-12 ">تست انلاین</a>
            </li>

        </ul>
    </div>
</nav>

