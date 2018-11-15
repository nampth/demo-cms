<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>

    <title>Demo Cms | Đăng nhập</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->


    <link rel="shortcut icon" href="{{ asset('assets/demo/default/media/img/logo/favicon.ico') }}"/>
</head>
<!-- end::Head -->


<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">


<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">


    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1"
         id="m_login" style="background-image: url(assets/app/media/img/bg/bg-1.jpg);">
        <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="#">
                        <img src="{{ asset('assets/app/media/img/logos/logo-1.png') }}">
                    </a>
                </div>
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">Đăng nhập vào hệ thống</h3>
                    </div>
                    <form class="m-login__form m-form" action="{{ url('/') }}/login" method="POST">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Tên đăng nhập" name="username"
                                   autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password"
                                   placeholder="Xác nhận mật khẩu" name="password">
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--light">
                                    <input type="checkbox" name="remember"> Nhớ mật khẩu
                                    <span></span>
                                </label>
                            </div>
                            {{--<div class="col m--align-right m-login__form-right">--}}
                            {{--<a href="javascript:;" id="m_login_forget_password" class="m-link">Quên mật khẩu?</a>--}}
                            {{--</div>--}}
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_signin_submit" type="submit"
                                    class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
                                Đăng nhập
                            </button>
                        </div>
                    </form>
                </div>
                {{--<div class="m-login__signup">--}}
                {{--<div class="m-login__head">--}}
                {{--<h3 class="m-login__title">Đăng ký</h3>--}}
                {{--<div class="m-login__desc">Vui lòng điền thông tin đăng ký:</div>--}}
                {{--</div>--}}
                {{--<form class="m-login__form m-form" action="#" method="POST">--}}
                {{--<div class="form-group m-form__group">--}}
                {{--<input class="form-control m-input" type="text" placeholder="Tên đầy đủ" name="fullname">--}}
                {{--</div>--}}
                {{--<div class="form-group m-form__group">--}}
                {{--<input class="form-control m-input" type="text" placeholder="Email" name="email"--}}
                {{--autocomplete="off">--}}
                {{--</div>--}}
                {{--<div class="form-group m-form__group">--}}
                {{--<input class="form-control m-input" type="password" placeholder="Mật khẩu" name="password">--}}
                {{--</div>--}}
                {{--<div class="form-group m-form__group">--}}
                {{--<input class="form-control m-input m-login__form-input--last" type="password"--}}
                {{--placeholder="Xác nhận mật khẩu" name="rpassword">--}}
                {{--</div>--}}
                {{--<div class="row form-group m-form__group m-login__form-sub">--}}
                {{--<div class="col m--align-left">--}}
                {{--<label class="m-checkbox m-checkbox--light">--}}
                {{--<input type="checkbox" name="agree">Tôi đồng ý với <a href="#"--}}
                {{--class="m-link m-link--focus">điều khoản và chính sách</a>.--}}
                {{--<span></span>--}}
                {{--</label>--}}
                {{--<span class="m-form__help"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="m-login__form-action">--}}
                {{--<button id="m_login_signup_submit"--}}
                {{--class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">--}}
                {{--Đăng ký--}}
                {{--</button>&nbsp;&nbsp;--}}
                {{--<button id="m_login_signup_cancel"--}}
                {{--class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">Hủy bỏ--}}
                {{--</button>--}}
                {{--</div>--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--<div class="m-login__forget-password">--}}
                {{--<div class="m-login__head">--}}
                {{--<h3 class="m-login__title">Quên mật khẩu ?</h3>--}}
                {{--<div class="m-login__desc">Vui lòng điền email để chúng tôi giúp bạn khôi phục mật khẩu:</div>--}}
                {{--</div>--}}
                {{--<form class="m-login__form m-form" action="#">--}}
                {{--<div class="form-group m-form__group">--}}
                {{--<input class="form-control m-input" type="text" placeholder="Email" name="email"--}}
                {{--id="m_email" autocomplete="off">--}}
                {{--</div>--}}
                {{--<div class="m-login__form-action">--}}
                {{--<button id="m_login_forget_password_submit"--}}
                {{--class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">--}}
                {{--Yêu cầu--}}
                {{--</button>&nbsp;&nbsp;--}}
                {{--<button id="m_login_forget_password_cancel"--}}
                {{--class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">Hủy bỏ--}}
                {{--</button>--}}
                {{--</div>--}}
                {{--</form>--}}
                {{--</div>--}}
                <div class="m-login__account">
				<span class="m-login__account-msg">
				Bạn chưa có tài khoản ?
				</span>&nbsp;&nbsp;
                    <a href="{{ route('register')}}" class="m-link m-link--light m-login__account-link">Đăng
                        ký ngay</a>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- end:: Page -->

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<!--begin::Global Theme Bundle -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Global Theme Bundle -->


<!--begin::Page Scripts -->
<script src="{{ asset('assets/snippets/custom/pages/user/login.js') }}" type="text/javascript"></script>
<!--end::Page Scripts -->

</body>
<!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/?page=snippets/pages/user/login-2&demo=default by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 07:10:03 GMT -->
</html>