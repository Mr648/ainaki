<div class="container-fluid mt-2 rtl h-min-768 py-5">
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">

            <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--right nav-def" role="navigation">
                <li class="nav-item ">
                <a href="#myprofile" class="nav-link active" data-toggle="tab" role="tab" aria-controls="myprofile"><i
                            class="fa fa-user  fa-2x  icons"></i> پروفایل من </a>
                </li>
                <li class="nav-item">
                    <a href="#edit" class="nav-link" data-toggle="tab" role="tab" aria-controls="edit"><i
                                class="fa fa-edit   fa-2x icons "></i> ویرایش اطلاعات تکمیلی </a>
                </li>

                <li class="nav-item">
                    <a href="#mycart" class="nav-link" data-toggle="tab" role="tab" aria-controls="mycart"><i
                                class="fa fa-cart-arrow-down fa-2x icons"></i> سفارش های من </a>
                </li>
                <li class="nav-item">
                    <a href="#changePassword" class="nav-link" data-toggle="tab" role="tab"
                       aria-controls="changePassword"><i class="fa fa-unlock-alt  fa-2x icons"></i> تغییر رمز عبور </a>

                </li>
                <li class="nav-item">
                    <a href="#favorites" class="nav-link" data-toggle="tab" role="tab" aria-controls="favorites"><i
                                class="fa fa-heart  fa-2x icons"></i> لیست علاقه مندی ها</a>
                </li>
                <li class="nav-item">
                    <a href="#messages" class="nav-link" data-toggle="tab" role="tab" aria-controls="messages"><i
                                class="fa fa-envelope fa-2x icons"></i> پیام های من </a>
                </li>
            </ul>

        </div>
        <div class="tab-content col-md-9 col-sm-12 w-100">
            <div class="tab-pane  fade show active " id="myprofile" role="tabpanel">
                <h3 class="titr">پروفایل من</h3>
                {{--<p>Aenean sed lacus id mi scelerisque tristique. Nunc sed ex sed turpis fringilla aliquet in in neque. Praesent posuere, neque rhoncus sollicitudin fermentum, erat ligula volutpat dui, nec dapibus ligula lorem ac mauris. Etiam et leo venenatis purus pharetra dictum.</p>--}}
                <div class="row wrapper">
                    <div class="col-md-4 ">
                        <div class="form-group ">
                            <label for="name" class="name">نام<i class="fa fa-star"></i> </label>
                            <input type="name" class="form-control rtl" id="name"
                                   placeholder="لطفا نام خود را وارد کنید"
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


                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group  ">
                            <label for="phone">شماره همراه<i class="fa fa-star"></i></label>
                            <input type="text" autocomplete="off" value="" class="form-control rtl" id="phone"
                                   placeholder="لطفا شماره تلفن خود را وارد کنید"
                                   name="phone">
                        </div>

                    </div>
                    <div class="col-md-12"><a href="" class="btn btn-primary sabt" style="background-color: #0076ad; ">ثبت
                            اطلاعات</a>
                    </div>
                </div>

                <br>

            </div>
            <div class="tab-pane   fade" id="edit" role="tabpanel">
                <h3 class="titr">ویرایش اطلاعات تکمیلی</h3>

                <div class="row wrapper">
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="name" class="name">نام<i class="fa fa-star"></i> </label>
                            <input type="name" class="form-control rtl" id="name"
                                   placeholder="لطفا نام خود را وارد کنید"
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
                            <input type="name" class="form-control rtl" id="name"
                                   placeholder="نام کاربری خود را وارد کنید"
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

                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="name" class="name">ایمیل<i class="fa fa-star"></i> </label>
                            <input type="name" class="form-control rtl" id="name" placeholder="example@gmail.com"
                                   name="name">
                        </div>
                        <div class="form-group">
                            <label for="name" class="name">کد ملی<i class="fa fa-star"></i> </label>
                            <input type="name" class="form-control rtl" id="name"
                                   placeholder="لطفا کد ملی خود را وارد کنید"
                                   name="name">
                        </div>
                        <div class="form-group ">
                            <label for="name" class="name">شماره همراه<i class="fa fa-star"></i> </label>
                            <input type="name" class="form-control rtl" id="name"
                                   placeholder="لطفا نام خود را وارد کنید"
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
                    <div class="col-md-12"><a href="" class="btn btn-primary sabt" style="background-color: #0076ad; ">ثبت
                            اطلاعات</a>
                    </div>

                </div>
            </div>
            <div class="tab-pane  fade" id="mycart" role="tabpanel">
                <h3 class="titr">سفارش های من</h3>
                <div class="col-md-9 ">
                    <table class="table table-responsive mycartTable">
                        <thead class="head" style="background-color: #921a48">
                        <tr>
                            <th ></th>
                            <th style="width: 400px">شماره سفارش</th>
                            <th style="width: 400px">تاریخ ثبت سفارش</th>
                            <th style="width: 400px">مبلغ کل دریافتی</th>
                            <th style="width: 400px">عملیات پرداخت</th>
                            <th style="width: 400px">جزییات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>ainaki#1</td>
                            <td>ainaki#1</td>
                            <td>290000</td>
                            <td>موفق</td>
                            <td data-toggle="collapse" data-target="#accordion" class="clickable">descript
                                <div id="accordion" class="collapse">Hidden by default</div></td>
                        </tr>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ainaki#2</td>
                            <td>ainaki#2</td>
                            <td>290000</td>
                            <td>موفق</td>
                            <td>descript</td>
                        </tr>
                        <tr>
                            <td>3</td>
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
            <div class="tab-pane fade" id="changePassword" role="tabpanel">
                <h3 class="titr">تغییر رمز عبور</h3>

                <div class="row wrapper">
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="name" class="name">رمز عبور فعلی<i class="fa fa-star"></i> </label>
                            <input type="name" class="form-control rtl" id="name" placeholder=""
                                   name="name">
                        </div>
                        <div class="form-group">
                            <label for="name" class="name">رمز عبور جدید<i class="fa fa-star"></i> </label>
                            <input type="name" class="form-control rtl" id="name"
                                   placeholder=""
                                   name="name">
                        </div>
                        <div class="form-group">
                            <label for="name" class="name">تکرار رمز عبور جدید<i class="fa fa-star"></i> </label>
                            <input type="name" class="form-control rtl" id="name" placeholder=""
                                   name="name">
                        </div>
                        <div class="col-md-12"><a href="" class="btn btn-primary sabt" style="background-color: #0076ad; ">ثبت
                                اطلاعات</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="favorites" role="tabpanel">

                <h3 class="titr">علاقمندی های من</h3>
                <div class="col-md-9 ">
                    <table class="table table-responsive">
                        <thead class="head" style="background-color: #921a48">
                        <tr>
                            <th ></th>
                            <th style="width: 1000px;">نام محصول</th>
                            <th style="width: 300px;">دسته بندی</th>
                            <th style="width: 300px;"></th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>ainaki#1</td>
                            <td>عینک افتابی</td>
                            <td><a href="">مشاهده محصول</a></td>


                        </tr>

                        <tr>
                            <td>2</td>
                            <td>ainaki#2</td>
                            <td>عینک طبی</td>

                            <td><a href="">مشاهده محصول</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>ainaki#3</td>

                            <td>لنز</td>
                            <td><a href="">مشاهده محصول</a></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="tab-pane fade" id="messages" role="tabpanel">

                <h3 class="titr">پیغام های من</h3>
                <div class="col-md-9 ">
                    <table class="table table-responsive">
                        <thead class="head" style="background-color: #921a48">
                        <tr>
                            <th ></th>
                            <th style="width: 1000px">عنوان</th>
                            <th style="width: 300px;">تاریخ پیغام</th>
                            <th style="width: 300px;">جزییات</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>اقای قلی عزیز، پیام جدیدی دارین</td>
                            <td>21/5/97</td>
                            <td>جزییات</td>


                        </tr>

                        <tr>
                            <td>2</td>
                            <td>اقای قلی عزیز، پیام جدیدی دارین</td>
                            <td>21/5/97</td>

                            <td>جزییات</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>اقای قلی عزیز، پیام جدیدی دارین</td>

                            <td>21/5/97</td>
                            <td>جزییات</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
