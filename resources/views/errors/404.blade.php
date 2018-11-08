<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8"/>

    <title>Error</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link href="https://ajax.googleapis.com/css?family=Roboto" rel="stylesheet">
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
    <!--end::Global Theme Styles -->


    <link rel="shortcut icon" href="{{ asset('assets/demo/default/media/img/logo/favicon.ico') }}"/>
</head>
<!-- end::Head -->


<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"
      style="font-family: 'Roboto', sans-serif">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">


    <div class="m-grid__item m-grid__item--fluid m-grid  m-error-3"
         style="background-image: url({{ asset('assets/app/media/img/error/bg3.jpg') }});">
        <div class="m-error_container">
		<span class="m-error_number">
			<h1>404</h1>
		</span>
            <p class="m-error_title m--font-light">
                Có vẻ như bạn lạc đường?
            </p>
            <p class="m-error_subtitle">
                Xin lỗi chúng tôi không tìm thấy liên kết mà bạn đang tới
            </p>
            <p class="m-error_description">
                Có thể có lỗi trong địa chỉ trang bạn đã nhập,<br>
                hoặc trang bạn đang tìm kiếm không tồn tại.
            </p>
        </div>
    </div>


</div>


</body>
</html>