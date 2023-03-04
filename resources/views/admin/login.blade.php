<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from technext.github.io/elaadmin/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:56 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jusco Lab Grown Diamond</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{URL:: asset('admin/assets/i.imgur.com/QRAUqs9.png')}}">
    <link rel="shortcut icon" href="{{URL:: asset('admin/assets/i.imgur.com/QRAUqs9.png')}}">

    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn.jsdelivr.net/npm/normalize.css%408.0.0/normalize.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn.jsdelivr.net/npm/bootstrap%404.1.3/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn.jsdelivr.net/npm/font-awesome%404.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn.jsdelivr.net/gh/lykmapipo/themify-icons%400.1.2/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn.jsdelivr.net/npm/pixeden-stroke-7-icon%401.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-image">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{ url('index') }}">
                    </a>
                </div>
                <div class="login-form">
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        <i class="fa-lg fa fa-warning"></i>
                        {!! session('message') !!}
                    </div>
                    @elseif(Session::has('error'))
                    <div class="alert alert-danger">
                        <i class="fa-lg fa fa-warning"></i>
                        {!! session('error') !!}
                    </div>
                    @endif
                    <form action={{ url('userlogin') }} method="post" enctype="multipart/form-data">
{{ csrf_field() }}
                        <h2 class="loginh2">Jusco Lab Grown Diamond</h2>
                        <div class="form-group">
                            <input type="email" name="useremail" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="userpassword" class="form-control" placeholder="Password">
                        </div>
                  <button type="submit" class="btn btn-dark btn-flat m-b-30 m-t-30">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/js/main.js')}}"></script>
</body>
</html>