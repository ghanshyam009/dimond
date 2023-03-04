<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from technext.github.io/elaadmin/ui-typgraphy.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:35 GMT -->
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

    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/normalize.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/pe-icon-7-stroke.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/style1.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/all.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <aside id="left-panel" class="left-panel leftpaneltop">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title"><button type="button" class="btn btn-primary btn-sm" style="align-items: center;">Start a Meeting</button></li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('discuss1') }}" class="acolor" aria-haspopup="true" aria-expanded="false"> <i class="fa  fa-inbox"></i><span style="margin-left:15px;"> Inbox</span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('starred') }}" class="acolor" aria-haspopup="true" aria-expanded="false"> <i class="fa  fa-star-o"></i><span style="margin-left:15px;"> Starred</span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('history') }}" class="acolor" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-clock-rotate-left"></i><span style="margin-left:15px;"> History</span></a>
                    </li>
                    <li class="menu-title">CHANNELS</li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('general') }}" class="acolor" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-hashtag menuicondiscuss"></i><span style="margin-left:15px;"> General </span></a>
                    </li>
                    <li class="menu-title">DIRECT MESSAGES</li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('administrator') }}" class="acolor" aria-haspopup="true" aria-expanded="false"><i class="fa fa-group menuicondiscuss"></i><span style="margin-left:15px;">  Administrator,Account  </span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('administrator1') }}" class="acolor" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-d menuicondiscuss"></i><span style="margin-left:15px;"> Dinesh B  </span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('administrator2') }}" class="acolor" aria-haspopup="true" aria-expanded="false"><i class="fa fa-group menuicondiscuss"></i><span style="margin-left:15px;"> Ipredict Administrator,Administrator  </span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('administrator3') }}" class="acolor" aria-haspopup="true" aria-expanded="false"><i class="fa fa-group menuicondiscuss1"></i><span style="margin-left:15px;">  Administrator  </span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel rightpaneltop">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span> <i class="fa-solid fa-table-columns"></i> Discuss</span></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                            <span>{{Session::get('studname')}}
                            </span>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="breadcrumbs breadcrumbs1">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-6">
                        <div class="page-header float-left">
                            <div class="page-title mt-2 ">
                                <h5 class="headerborder1"> # General | General announcements for all employees.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1">
                                    <i class="fa-solid fa-phone"></i></button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1">
                                    <i class="fa-solid fa-video"></i></button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1">
                                    <i class="fa-solid fa-user-plus"></i></button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1">
                                    <i class="fa-solid fa-users"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">

                <div class="ui-typography">
                    <div class="row">
                        <div class="col-md-12">


                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">September 3,2022</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="image">
                                                <i class="fa-solid fa-d"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <strong class="pb-2 display-5">Dinesh B - 2 days ago on CANCEL-PACKET/2022/00035</strong>
                                            <h6>Subject: Request for Packet Cancellation</h6>
                                            <p>Packets : MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474 ,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY
                                                A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474,MAYBY A-P-2474
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>



            </div>
            <!-- .animated -->
        </div>
        <!-- .content -->

        <div class="clearfix"></div>


    </div>
    <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>