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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>purchase</span></a>
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
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Requests for Quotation</h4>
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
                        <a href="{{ url('createpurchase1orders') }}">
                            <button type="button" class="btn btn-outline-secondary mt-1">Create</button>
                        </a>
                        <button type="button" class="btn btn-outline-secondary mt-1"> <i class="fa-solid fa-download"></i> </button>
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-2 float-right">
                        <a href="{{ url('purchase1orderslist') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-arrows-to-dot"></i></button></a>
                        <a href="{{ url('purchase1orders') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-list"></i></button></a>
                        <a href="{{ url('purchase1table') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-table-cells"></i></button></a>
                        <a href="{{ url('purchase1chart') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-chart-column"></i></button></a>
                        <a href="{{ url('purchase1calendar') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-calendar-days"></i></button></a>
                        <a href="{{ url('purchase1activity') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-clock"></i></button></a>

                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <h5 class="float-right mr-3">All RFQs</h5><br>
                                <h5 class="strongrfqs mt-5">My RFQs</h5>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-info">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-center">
                                            <span class="count">0</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">To Send</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-info">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-center">
                                            <span class="count">0</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">Waiting</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-info">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-center">
                                            <span class="count">0</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">Late</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-2">
                                            <span class="count">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <p>Avg Order Value(Rs.)</p><br>
                                <p class="mt-2">Lead Time to Purchase</p>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-secondary">
                                    <div class="card-body">
                                        <div class="h6 mb-3 text-center">
                                            <span class="count">Rs.6,687.35</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-4">
                                            <span class="count">0 Days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <p>Purchased Last 7 Days(Rs.)</p><br>
                                <p>RFQs sent last 7 Days</p>
                            </div>
                            <div class="col-lg-3">
                                <div class="card col-md-12 no-padding bg-secondary">
                                    <div class="card-body">
                                        <div class="h6 mb-3 text-center">
                                            <span class="count">Rs.0.00</span>
                                        </div>
                                        <div class="h6 mb-0 text-center mt-4">
                                            <span class="count">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-star-o"></i> ELEMENTS DIAMOND</strong>
                                <label type="" class=" float-right">Rs.20,050.00</label>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col col-md-8"><label for="hf-email" class=" form-control-label font_size">P00003 10/03/2022 <i class="fa-solid fa-clock"></i></label></div>
                                        <div class="col col-md-4"> <button type="button" class="btn btn-success btn-sm float-right"> Locked </button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-star-o"></i> XYZ</strong>
                                <label type="" class=" float-right">Rs.12.00</label>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col col-md-8"><label for="hf-email" class=" form-control-label font_size">P00003 10/03/2022 <i class="fa-solid fa-clock"></i></label></div>
                                        <div class="col col-md-4"> <button type="button" class="btn btn-success btn-sm float-right"> Locked </button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-star-o"></i> ELEMENTS DIAMOND</strong>
                                <label type="" class=" float-right">Rs.20,050.00</label>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col col-md-8"><label for="hf-email" class=" form-control-label font_size">P00003 10/03/2022 <i class="fa-solid fa-clock"></i></label></div>
                                        <div class="col col-md-4"> <button type="button" class="btn btn-success btn-sm float-right"> Locked </button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-star-o"></i> ELEMENTS DIAMOND</strong>
                                <label type="" class=" float-right">Rs.20,050.00</label>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col col-md-8"><label for="hf-email" class=" form-control-label font_size">P00003 10/03/2022 <i class="fa-solid fa-clock"></i></label></div>
                                        <div class="col col-md-4"> <button type="button" class="btn btn-success btn-sm float-right"> Locked </button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-star-o"></i> ELEMENTS DIAMOND</strong>
                                <label type="" class=" float-right">Rs.20,050.00</label>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="row form-group1 mt-2">
                                        <div class="col col-md-8"><label for="hf-email" class=" form-control-label font_size">P00003 10/03/2022 <i class="fa-solid fa-clock"></i></label></div>
                                        <div class="col col-md-4"> <button type="button" class="btn btn-success btn-sm float-right"> Locked </button></div>
                                    </div>
                                </form>
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
        <script src="{{URL:: asset('admin/assets/cdn/js/chosen.jquery.min.js')}} "></script>
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
