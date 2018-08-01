<form class="text-center form-horizontal" method="post" action="{{route('signup')}}" id="signUpForm">

    {{csrf_field()}}
    <img src="images/user.png" alt="" width="80" height="80">
    <div class="form-group text-center">
        <h2 class="login rtl text-center">ثبت نام</h2>

        <input type="hidden" value="{{ url()->current()}}" name="_location">
        <div class="form-group">
            <label for="email"> ادرس ایمیل </label>
            <input type="text" autocomplete="off" value="" class="form-control ltr" id="signUpEmail"
                   placeholder="لطفا ادرس ایمیل خود را وارد کنید"
                   name="email">
            <div class="form-control-feedback" id="emailFeedback"></div>
        </div>
        <div class="form-group">
            <label for="phone"> شماره همراه </label>
            <input type="phone" autocomplete="off" value="" class="form-control" id="signUpPhone"
                   placeholder="لطفا شماره موبایل خود را وارد کنید"
                   name="phone">
            <div class="form-control-feedback" id="phoneFeedback"></div>
        </div>
        <div class="form-group">
            <label for="pwd">رمز عبور</label>
            <input type="password" autocomplete="off" value="" class="form-control" id="signUpPwd"
                   placeholder="لطفا رمز عبور خود را وارد کنید"
                   name="pswd">
            <div class="form-control-feedback" id="pswdFeedback"></div>
        </div>
        <div class="alert alert-danger mx-2 invisible"></div>
        <button type="submit" class="btn btn-primary p-1" style="width: 150px">ثبت نام</button>
        <div class="form-group">

            <a href="#" style="color: #921a48">قبلا ثبت نام کرده ام</a>
        </div>
    </div>
</form>
