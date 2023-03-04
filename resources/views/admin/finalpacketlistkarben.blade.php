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
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>

<body>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Final Stock</span></a>
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
        <div class="card-header">
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('finalstock') }}">Final Stock</a></strong>

            <ul class="stockul">
                <li class="stockli mt-2"><a href="{{ url('finalstock') }}">Batch</a></li>
                <li class="stockli mt-2"><a href="{{ url('finalpacket') }}">Packets</a></li>
                <li class="stockli mt-2"><a href="{{ url('finalpackets') }}">Final Packets</a></li>
                <li class="stockli nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Configuration
                    </a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('batchsequence') }}">Batch Sequence</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Final Packet</h4>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4 float-left">
                    </div>
                    <div class="col-md-7">
                    </div>
                    <div class="col-md-1 float-right">
                        <a href="{{ url('finalpackets') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-list"></i></button></a>
                        <a href="{{ url('finalpacketlistkarben') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-arrows-to-dot"></i></button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12 col-xs-6 col-sm-6">
                        <div class="card">

                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{ url('clickfinalpacketkarbenlist') }}">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">KOHINNOR-LOT-42</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"><td><i class="fa-solid fa-clock-rotate-left"></i> History</td></label></div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Lot : 17/08/2022 10:38:02</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch : JUNE1SIDE</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Location : Stock Final</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Height(Micron) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Length(MM) : 9.50</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Width(MM) : 12.02</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-password" class=" form-control-label font_size">Pcs : 1</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 12.02</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/init/datatables-init.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/main.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/lib/chosen/chosen.jquery.min.js')}} "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect ").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found! ",
                    width: "100% "
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script>
</body>
</html>
