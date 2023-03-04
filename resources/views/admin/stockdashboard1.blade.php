<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:39 GMT -->
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
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/chosen/chosen.min.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Stock Dashboard</span></a>
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

        <div class="content">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Stock</strong>
                            </div>
                            <div class="card-body">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row formgroup">
                                        <div class="col col-md-4">
                                            <p class="form-control-static mt-2 text-center">Total</p>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <p class="form-control-static mt-2 text-center">Pcs : 00</p>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <p class="form-control-static mt-2 text-center">Weight(ct): 00</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 col-md-6">
                                    <a href="{{ url('clickstockdashboardseeds') }}">
                                    <div class="card card2">
                                        <div class="card-header cardheader2">
                                            <strong>Seed</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Pcs:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">{{ $a }}</label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label">Weight:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">{{ $a1 }}</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-6">
                                    <a href="{{ url('clickstockdashboardstock') }}">
                                    <div class="card card2">
                                        <div class="card-header cardheader2">
                                            <strong>Stock</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Pcs:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label"></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label">Weight:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label"></label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-6">
                                    <a href="{{ url('clickstockdashboardchocklate') }}">
                                    <div class="card card2">
                                        <div class="card-header cardheader2">
                                            <strong>Chocolate</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Pcs:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label"></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label">Weight:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label"></label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-6">
                                    <a href="{{ url('') }}">
                                    <div class="card card2">
                                        <div class="card-header cardheader2">
                                            <strong>Laser</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Pcs:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label"></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label">Weight:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label"></label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-6">
                                    <a href="{{ url('#') }}">
                                    <div class="card card2">
                                        <div class="card-header cardheader2">
                                            <strong>Boiling</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Pcs:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">0</label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label">Weight:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">0,00</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-6">
                                    <a href="{{ url('#') }}">
                                    <div class="card card2">
                                        <div class="card-header cardheader2">
                                            <strong>Polish</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Pcs:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">0</label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label">Weight:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">0,00</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-6">
                                    <a href="{{ url('clickstockdashboardstockloss') }}">
                                    <div class="card card1">
                                        <div class="card-header cardheader2">
                                            <strong>Stock Loss</strong>
                                        </div>
                                        <div class="card-body card-block ">
                                            <form action="# " method="post " class="form-horizontal ">
                                                <div class="row form-group ">
                                                    <div class="col col-md-6 "><label for="hf-email " class=" form-control-label ">Pcs:</label></div>
                                                    <div class="col col-md-6 "><label for="hf-email " class=" form-control-label ">{{ $d }}</label></div>
                                                </div>
                                                <div class="row form-group ">
                                                    <div class="col col-md-6 "><label for="hf-password " class=" form-control-label ">Weight:</label></div>
                                                    <div class="col col-md-6 "><label for="hf-email " class=" form-control-label ">{{ $d1 }}</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 "></div>


                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-xs-6 col-sm-6">
                       
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="{{ url('#') }}">
                                    <div class="card card2">
                                        <div class="card-header cardheader2">
                                            <strong>Stock Final</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Pcs: 00</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">pw(Ct): 00</label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label">Weight(Ct): 00</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Weight % : 00</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="{{ url('#') }}">
                                    <div class="card card2">
                                        <div class="card-header cardheader2">
                                            <strong>Total</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Pcs:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">00</label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label">Weight(Ct):</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">00</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-md-1 "></div>


                </div>

            </div>

        </div>
        <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/main.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/lib/chosen/chosen.jquery.min.js')}} "></script>

        <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect ").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found! ",
                    width: "100% "
                });
            });
        </script>

</body>
</html>
