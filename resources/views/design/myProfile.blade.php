<div class="d-flex flex-row mt-2 rtl">
    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--right" role="navigation">
        <li class="nav-item">
            <h6><a href="#myprofile" class="nav-link active" data-toggle="tab" role="tab" aria-controls="myprofile"><i
                            class="fa fa-user  fa-2x  icons"></i> پروفایل من </a></h6>
        </li>
        <li class="nav-item">
            <h6><a href="#edit" class="nav-link" data-toggle="tab" role="tab" aria-controls="edit"><i
                            class="fa fa-edit   fa-2x icons"></i> ویرایش اطلاعات تکمیلی </a></h6>
        </li>

        <li class="nav-item">
            <h6><a href="#mycart" class="nav-link" data-toggle="tab" role="tab" aria-controls="mycart"><i
                            class="fa fa-cart-arrow-down fa-2x icons"></i> سفارش های من </a></h6>
        </li>
        <li class="nav-item">
            <h6><a href="#changePassword" class="nav-link" role="tab"
                   aria-controls="changePassword"><i class="fa fa-unlock-alt  fa-2x icons"></i> تغییر رمز عبور </a>
            </h6>
        </li>
        <li class="nav-item">
            <h6><a href="#favorites" class="nav-link" role="tab" aria-controls="favorites"><i
                            class="fa fa-heart  fa-2x icons"></i> لیست علاقه مندی ها</a></h6>
        </li>
        <li class="nav-item">
            <h6><a href="#messages" class="nav-link" role="tab" aria-controls="messages"><i
                            class="fa fa-envelope fa-2x icons"></i> پیام های من </a></h6>
        </li>
    </ul>


    <div class="tab-content col-md-12 " width="100%">
        <div class="tab-pane fade show active " id="myprofile" role="tabpanel">
            <h3>پروفایل من</h3>
            {{--<p>Aenean sed lacus id mi scelerisque tristique. Nunc sed ex sed turpis fringilla aliquet in in neque. Praesent posuere, neque rhoncus sollicitudin fermentum, erat ligula volutpat dui, nec dapibus ligula lorem ac mauris. Etiam et leo venenatis purus pharetra dictum.</p>--}}
            <div class="row wrapper">
                <div class="col-md-4 ">
                    <div class="form-group ">
                        <label for="name" class="name">نام<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="لطفا نام خود را وارد کنید"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">نام خانوادگی<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name"
                               placeholder="لطفا نام خانوادگی خود را وارد کنید"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">ایمیل<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="example@gmail.com"
                               name="name">
                    </div>
                    <a href="" class="btn btn-primary sabt" style="background-color: #0076ad; ">ثبت اطلاعات</a>

                </div>
                <div class="col-md-4 ">
                    <div class="form-group  ">
                        <label for="phone">شماره همراه<i class="fa fa-star"></i></label>
                        <input type="text" autocomplete="off" value="" class="form-control rtl" id="phone"
                               placeholder="لطفا شماره تلفن خود را وارد کنید"
                               name="phone">
                    </div>

                </div>

            </div>

            <br>

        </div>
        <div class="tab-pane fade" id="edit" role="tabpanel">
            <h3>ویرایش اطلاعات تکمیلی</h3>

            <div class="row wrapper">
                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="name" class="name">نام<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="لطفا نام خود را وارد کنید"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">نام خانوادگی<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name"
                               placeholder="لطفا نام خانوادگی خود را وارد کنید"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">نام کاربری<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="نام کاربری خود را وارد کنید"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">ایمیل<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="example@gmail.com"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">استان<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="استان خود را انتخاب کنید"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">کدپستی<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="کدپستی خود را وارد کنید"
                               name="name">
                    </div>
                    <a href="" class="btn btn-primary sabt" style="background-color: #0076ad; ">ثبت اطلاعات</a>

                </div>

                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="name" class="name">ایمیل<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="example@gmail.com"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">کد ملی<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="لطفا کد ملی خود را وارد کنید"
                               name="name">
                    </div>
                    <div class="form-group ">
                        <label for="name" class="name">شماره همراه<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name" placeholder="لطفا نام خود را وارد کنید"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">شهر<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name"
                               placeholder="انتخاب کنید"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="name">تلفن ثابت<i class="fa fa-star"></i> </label>
                        <input type="name" class="form-control rtl" id="name"
                               placeholder="لطفا تلفن ثابت  خود را وارد کنید"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="Address">ادرس<i class="fa fa-star"></i> </label>
                        <textarea class="form-control" rows="3" id="Address" name="Address"></textarea>
                    </div>


                </div>


            </div>


        </div>
        <div class="tab-pane fade" id="mycart" role="tabpanel">
            <h3>سفارش های من</h3>
            <div class="col-md-9 ">
            <table class="table">
                <thead class="head" style="background-color: #921a48">
                <tr>
                    <th>شماره سفارش</th>
                    <th>تاریخ ثبت سفارش</th>
                    <th>مبلغ کل دریافتی</th>
                    <th>عملیات پرداخت</th>
                    <th>جزییات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ainaki#1</td>
                    <td>ainaki#1</td>
                    <td>290000</td>
                    <td>موفق</td>
                    <td>descript</td>
                </tr>
                <tr>
                    <td>ainaki#2</td>
                    <td>ainaki#2</td>
                    <td>290000</td>
                    <td>موفق</td>
                    <td>descript</td>
                </tr>
                <tr>
                    <td>ainaki#3</td>
                    <td>ainaki#3</td>
                    <td>290000</td>
                    <td>موفق</td>
                    <td>descript</td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>