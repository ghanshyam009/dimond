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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-item-has-children ">
                        <a href="{{ url('generalsetting') }}" class="acolor" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-cogs menuicon"></i><span style="margin-left:15px;"> General Settings</span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('manufacturing') }}" class="acolor" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-print menuicon"></i><span style="margin-left:15px;">  Manufacturing  </span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('purchase') }}" class="acolor" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-credit-card menuicon"></i><span style="margin-left:15px;"> Purchase </span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('index1') }}"><span>Settings</span></a>
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
            <div class="card-header">
                <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('purchase1') }}">Purchase</a></strong>
                <ul class="stockul">
                    <li class="stockli mt-2 nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Orders</a>
                        <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('purchase1orders') }}">Purchase Orders</a></li>
                            <li><a class="dropdown-item" href="{{ url('purchase1vendors') }}">Vendors</a></li>
                        </ul>
                    </li>
                    <li class="stockli mt-2 nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                        <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('purchase1products') }}">Products</a></li>
                        </ul>
                    </li>
                    <li class="stockli mt-2 nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reporting</a>
                        <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('purchase1purchaseanalysis') }}">Purchase</a></li>
                        </ul>
                    </li>
                    <li class="stockli nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuration</a>
                        <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('purchase') }}">Setting</a></li>
                            <li><a class="dropdown-item" href="{{ url('vendorpricelists') }}">Vendor Pricelists</a></li>
                            <li class="group-result">Invoicing</li>
                            <li><a class="dropdown-item" href="{{ url('productcategories') }}">Product Categories</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title mt-2 ">
                                <h4 class="headerborder1"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a><a href="{{ url('purchase') }}"> Setting</a> </h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Save </button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Discard </button></a>
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
                                    <strong class="card-title" v-if="headerText">Orders</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Purchase Order Approval</strong>
                                            <p>Request managers to approve orders above a minimum amount </p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Warnings</strong>
                                            <p>Get warnings in orders for products or vendors</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Receipt Reminder</strong>
                                            <p>Automatically remind the Receipt date to your vendors </p>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="border-left: 1px solid lightgray;">
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Look Confirmed Orders</strong>
                                            <p>Automatically lock Confirmed orders to prevent editing</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Purchase Agreements <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Manage your purchase Agreements (call for tenders,blanket orders) </p>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>



                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Products</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" > <span class="switch-label"></span> <span class="switch-handle"></span></label>Variants <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Purchase variants of a product using attributes (size,color,etc.)</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" > <span class="switch-label"></span> <span class="switch-handle"></span></label>Product Packagings</strong>
                                            <p>Purchase products by multiple of unit # per package</p>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="border-left: 1px solid lightgray;">
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"    > <span class="switch-label"></span> <span class="switch-handle"></span></label>Variant Grid Entry <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Add Several variants to the purchase order from a grid</p>

                                        </div>
                                        <div class="col-md-3">
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