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

  <link rel="apple-touch-icon" href="{{ URL::asset('admin/assets/i.imgur.com/QRAUqs9.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('admin/assets/i.imgur.com/QRAUqs9.png') }}">

    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/pe-icon-7-stroke.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/cdn/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/lib/chosen/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <!-- Left Panel -->


    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-box-tissue "></i></a> &nbsp;
                    <a class="navbar-brand" href="{{ url('assignreceive') }}"><b><span>Assign/Receive</b></span></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                            <span>{{ Session::get('studname') }}
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
            <div class="content mt-5">
                <div class="animated fadeIn">
                    <div class="row mt-5">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div class="feed-box text-center">
                                <section class="card mt-5">
                                    <div class="card-body">
                                        <div class="corner-ribon blue-ribon">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                        <h2>Lot Process</h2>
                                        <a href="#">
                                            <img class="align-self-center mr-3 mt-3" style="width:200px; height:150px;"
                                                alt=""
                                                src="{{ URL::asset('admin/assets/img/barcode.webp') }}">
                                        </a>

                                        <p style="text-align: justify; padding-left: 1rem;">1. Scan the
                                            lot/packet/chocolate for assign with specific location.</p>
                                        <p style="text-align: justify; padding-left: 1rem;">2. Scan the
                                            lot/packet/chocolate for Receive From location.</p>
                                        <a href="{{url('assign')}}"><button type="button" class="btn btn-info" disabled="">Assign</button></a>
                                        {{-- <li class="stockli"><a class="ms-1 mt-1" data-bs-toggle="modal"
                                                data-bs-target="#receiveModal">ReciveLot</a></li> --}}
                                        <a href="{{ url('receive') }}"><button type="button" class="btn btn-info"
                                                disabled="">Receive</button></a>
                                    </div>

                                </section>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <!-- .row -->

                </div>
                <!-- .animated -->
            </div>
     
            <!-- /#right-panel -->

            <!-- Right Panel -->

            <!-- Scripts -->
            <script src="{{ URL::asset('admin/assets/cdn/js/jquery.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/popper.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/matchHeight.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/js/lib/data-table/datatables.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/js/lib/data-table/jszip.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/jquery.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/popper.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/matchHeight.min.js') }}"></script>

            <script src="{{ URL::asset('admin/assets/js/lib/data-table/datatables.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>


            <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/js/lib/data-table/jszip.min.js') }}"></script>
</body>

</html>

