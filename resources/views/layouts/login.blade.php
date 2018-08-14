<form class="text-center" method="post" action="{{route('signin')}}" id="loginFrom">

    {{csrf_field()}}

    {{--@if(\Illuminate\Support\Facades\Cookie::has('remember'))--}}
    {{--@php--}}
    {{--// php code--}}
    {{--$emailValue=\Illuminate\Support\Facades\Cookie::get('email');--}}
    {{--$passwordValue=\Illuminate\Support\Facades\Cookie::get('password');--}}
    {{--@endphp--}}

    {{--@endif--}}
    <input type="hidden" value="{{url()->current()}}" name="_location">

    <img src="images/user.png" alt="" width="80" height="80">
    <div class="form-group text-center">
        <h2 class="login rtl text-center">ورود به حساب کاربری</h2>
        <label for="email"> نام کاربری: </label>
        <input type="email" class="form-control ltr" id="loginEmail" placeholder="نام کاربری/ادرس ایمیل/شماره همراه"
               name="email" value="{{
            \Illuminate\Support\Facades\Cookie::has('remember')?\Illuminate\Support\Facades\Cookie::get('username'):""
        }}">
    </div>

    <div class="form-group text-center">
        <label for="pwd">رمز عبور:</label>
        <input type="password" class="form-control" id="loginPwd" placeholder="لطفا رمز عبور خود را وارد کنید"
               name="pswd" value="{{
            \Illuminate\Support\Facades\Cookie::has('remember')?\Illuminate\Support\Facades\Cookie::get('password'):""
        }}">
    </div>
    <div class="form-group form-check text-center">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" id="loginRemember" {{\Illuminate\Support\Facades\Cookie::has('remember')?"checked":''}} > مرا به خاطر بسپار
        </label>
    </div>

    <button type="submit" class="btn btn-primary" style="padding: 10px; width: 150px">ورود</button>
    <div class="form-group text-center">
        <a href="#">رمز عبور خود را فراموش کرده اید؟</a>
    </div>
    <div class="form-group text-center">

        <a href="#" style="color: #921a48">میخواهم حساب کاربری ایجاد کنم</a>
    </div>

</form>
