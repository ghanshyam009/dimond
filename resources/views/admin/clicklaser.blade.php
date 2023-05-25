<!doctype html>
<?php
    $laser_data = DB::table('lasers')->where('lot_id', $data->lot_id)->first();
?>
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

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Laser</span></a>
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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i
                        class="fa-solid fa-table-columns"></i></a> <a href="{{ url('laser1') }}">Laser</a></strong>
            <ul class="stockul">
                <li class="stockli"><a href="{{ url('laser1') }}">Laser</a></li>
                {{-- <li class="stockli mt-2"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#receiveModal">Receive</a></li> --}}
                {{-- <li class="stockli"><a href="{{ url('lotsdashboard') }}">Lots</a></li>
                <li class="stockli"><a href="{{ url('packetlaserdashboard') }}">Packets</a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#assignModal">Assign</a></li>
                <li class="stockli mt-2"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#returnModal">Return</a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#returnstockModal">Return to stock</a></li>
                <li class="stockli"><a href="{{ url('machinelaser') }}">Machine</a></li> --}}

            </ul>
            <div class="modal fade" id="receiveModal" tabindex="-1" aria-labelledby="receiveModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Receive</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-11">
                                        <input id="cc-number" name="cc-number" type="tel"
                                            class="form-control cc-number identified visa" value=""
                                            data-val="true" data-val-required="Please enter the card number"
                                            data-val-cc-number="Please enter a valid card number">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#largeModal">Receive</button>
                                    </div>
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog"
                                        aria-labelledby="largeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return a lot ?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal"
                                                        onclick="checkPacket();">Ok</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 float-left">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-9"><label class=" form-control-label"><img
                                                                src="{{ URL::asset('admin/assets/img/barcode.webp') }}"
                                                                alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email"
                                                                id="email-input" name="email-input"
                                                                class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Records</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Lot</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Packets</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home"
                                                        role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card-body">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#. Name</th>
                                                                                <th scope="col">Height(Micro)</th>
                                                                                <th scope="col">Length(MM)..</th>
                                                                                <th scope="col">Width(MM)</th>
                                                                                <th scope="col">Pcs</th>
                                                                                <th scope="col">Weight(Ct)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row"></th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="assignModal" tabindex="-1" aria-labelledby="assignModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Assign</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="modal fade" id="largeModal1" tabindex="-1" role="dialog"
                                        aria-labelledby="largeModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel1">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to assign?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info"
                                                        data-dismiss="modal">Ok</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 float-left">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-9"><label class=" form-control-label"><img
                                                                src="{{ URL::asset('admin/assets/img/barcode.webp') }}"
                                                                alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email"
                                                                id="email-input" name="email-input"
                                                                class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label
                                                            class=" form-control-label">Process</label></div>
                                                    <div class="col col-md-6">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1"
                                                                    name="inline-radios" value="option1"
                                                                    class="form-check-input" checked="">Shape
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2"
                                                                    name="inline-radios" value="option2"
                                                                    class="form-check-input">DLC
                                                            </label>
                                                            <label for="inline-radio3" class="form-check-label ">
                                                                <input type="radio" id="inline-radio3"
                                                                    name="inline-radios" value="option3"
                                                                    class="form-check-input">Final
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select"
                                                            class=" form-control-label">Employee : </label></div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="custom-select d-block w-100">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select"
                                                            class=" form-control-label">Machine Number : </label></div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="custom-select d-block w-100">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Records</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Lot</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Packets</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home"
                                                        role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card-body">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#.</th>
                                                                                <th scope="col">Seq Final</th>
                                                                                <th scope="col">Name</th>
                                                                                <th scope="col">Height(Micro)</th>
                                                                                <th scope="col">Length(MM)..</th>
                                                                                <th scope="col">Width(MM)</th>
                                                                                <th scope="col">Shape</th>
                                                                                <th scope="col">Color</th>
                                                                                <th scope="col">Purity</th>
                                                                                <th scope="col">Weight(Ct)</th>
                                                                                <th scope="col">Approx polls</th>
                                                                                <th scope="col">Weight%</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row"></th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-info" data-toggle="modal"
                                data-target="#largeModal1">Assign</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="returnModal" tabindex="-1" aria-labelledby="returnModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Return</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="modal fade" id="largeModal2" tabindex="-1" role="dialog"
                                        aria-labelledby="largeModalLabel2" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel2">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info"
                                                        data-dismiss="modal">Ok</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 float-right">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-9"><label class=" form-control-label"><img
                                                                src="{{ URL::asset('admin/assets/img/barcode.webp') }}"
                                                                alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email"
                                                                id="email-input" name="email-input"
                                                                class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label
                                                            class=" form-control-label">Process</label></div>
                                                    <div class="col col-md-6">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1"
                                                                    name="inline-radios" value="option1"
                                                                    class="form-check-input" checked="">Shape
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2"
                                                                    name="inline-radios" value="option2"
                                                                    class="form-check-input">DLC
                                                            </label>
                                                            <label for="inline-radio3" class="form-check-label ">
                                                                <input type="radio" id="inline-radio3"
                                                                    name="inline-radios" value="option3"
                                                                    class="form-check-input">Final
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Net
                                                            Process</label></div>
                                                    <div class="col col-md-6">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1"
                                                                    name="inline-radios" value="option1"
                                                                    class="form-check-input" checked="">Shape
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2"
                                                                    name="inline-radios" value="option2"
                                                                    class="form-check-input">DLC
                                                            </label>
                                                            <label for="inline-radio3" class="form-check-label ">
                                                                <input type="radio" id="inline-radio3"
                                                                    name="inline-radios" value="option3"
                                                                    class="form-check-input">Final
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select"
                                                            class=" form-control-label">Employee : </label></div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="custom-select d-block w-100">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select"
                                                            class=" form-control-label">DLC Weight(Ct) : </label></div>
                                                    <div class="col-12 col-md-6">
                                                        <p class="form-control-static"><input type="email"
                                                                id="email-input" name="email-input"
                                                                class="form-control"></p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select"
                                                            class=" form-control-label">Loss Weight : </label></div>
                                                    <div class="col-12 col-md-6">
                                                        <label for="select" class=" form-control-label">0.00</label>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Records</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Packets</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home"
                                                        role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card-body">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#. Name</th>
                                                                                <th scope="col">Height(Ct)</th>
                                                                                <th scope="col">Length(Ct)..</th>
                                                                                <th scope="col">Width(Ct)</th>
                                                                                <th scope="col">Shape</th>
                                                                                <th scope="col">Process</th>
                                                                                <th scope="col">Weight(Ct)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row"></th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-info" data-toggle="modal"
                                data-target="#largeModal2">Return</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="returnstockModal" tabindex="-1" aria-labelledby="returnstockModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Return</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-11">
                                        <input id="cc-number" name="cc-number" type="tel"
                                            class="form-control cc-number identified visa" value=""
                                            data-val="true" data-val-required="Please enter the card number"
                                            data-val-cc-number="Please enter a valid card number">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#largeModal3">Return</button>

                                    </div>
                                    <div class="modal fade" id="largeModal3" tabindex="-1" role="dialog"
                                        aria-labelledby="largeModalLabel3" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel3">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info"
                                                        data-dismiss="modal">Ok</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                    </div>
                                    <div class="col-lg-3 float-right">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-9"><label class=" form-control-label"><img
                                                                src="{{ URL::asset('admin/assets/img/barcode.webp') }}"
                                                                alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email"
                                                                id="email-input" name="email-input"
                                                                class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Packets</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home"
                                                        role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card-body">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#. Name</th>
                                                                                <th scope="col">Height(Micron)</th>
                                                                                <th scope="col">Length(MM)..</th>
                                                                                <th scope="col">Width(MM)</th>
                                                                                <th scope="col">Pcs</th>
                                                                                <th scope="col">Weight(Ct)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row"></th>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-9">
                        @if ($laser_data == '')
                            <button type="button" class="btn btn-outline-secondary mt-1" data-bs-toggle="modal"
                                data-bs-target="#addpacketsModal"> Start </button>
                        @else
                            <button type="button" class="btn btn-outline-secondary mt-1" data-bs-toggle="modal"
                                data-bs-target="#sacnforcutting"> Cut </button>
                        @endif
                    </div>

                    <div class="col-md-3">
                        @if ($laser_data == '')
                            <a href=""><button type="button"
                                    class="btn btn-dark text-white mt-1">Draft</button></a>
                            <a href=""><button type="button" class="btn btn-outline-secondary mt-1">In
                                    Progress</button></a>
                        @else
                            <a href=""><button type="button"
                                    class="btn btn-outline-secondary  mt-1">Draft</button></a>
                            <a href=""><button type="button" class="btn btn-dark text-white mt-1">In
                                    Progress</button></a>
                        @endif
                        <a href=""><button type="button"
                                class="btn btn-outline-secondary mt-1">Done</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="sacnforcutting" tabindex="-1" aria-labelledby="receiveModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Scan For Cutting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('saveCutLasser') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-3 float-left">
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-9"><label class=" form-control-label"><img
                                                        src="{{ URL::asset('admin/assets/img/barcode.webp') }}"alt=""></label>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static"><input type="text" id="email-input"
                                                        class="form-control auto" required></p>
                                                <input type="hidden" class="assigngrowingall"
                                                    name="assigngrowingall">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Next Process :
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" name="next_process" value="1"
                                                        class="form-check-input" checked="">Shape
                                                </label>&nbsp;&nbsp;
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" name="next_process" value="2"
                                                        class="form-check-input">DLC
                                                </label>&nbsp;&nbsp;
                                                <label for="inline-radio3" class="form-check-label ">
                                                    <input type="radio" name="next_process" value="3"
                                                        class="form-check-input">Final
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Lot Type :
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="inline-radio1" name="lot_type"
                                                        value="1" class="form-check-input">New
                                                </label>&nbsp;&nbsp;
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="inline-radio2" name="lot_type"
                                                        value="2" class="form-check-input"
                                                        checked="">Existing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">DLC Weight(Ct) :
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="text" name="dlsweight" id="dlsweight"
                                                    onchange="dlsWeight();" required />
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Loss Weight :
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="text" name="loss_weight" id="loss_weight"
                                                    disabled></input>
                                                <input type="hidden" name="lweight" id="loss_weight1" />
                                                <input type="hidden" name="lot_ids" value="{{ $data->lot_id }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Records</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home"
                                                        role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <ul class="nav nav-tabs mt-4" id="myTab"
                                                                role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" id="home-tab"
                                                                        data-toggle="tab" href="#home"
                                                                        role="tab" aria-controls="home"
                                                                        aria-selected="true">Packets</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content pl-3 p-1" id="myTabContent">
                                                                <div class="tab-pane fade show active" id="home"
                                                                    role="tabpanel" aria-labelledby="home-tab">

                                                                    <table class="table" style="line-height: 5px;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Name</th>
                                                                                <th>Height(ct)</th>
                                                                                <th>Length(ct)</th>
                                                                                <th>Width(ct)</th>
                                                                                <th>Process</th>
                                                                                <th>Weight(Ct)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="experienceSection">
                                                                            <tr>
                                                                                <td
                                                                                    style="vertical-align: middle;text-align:left">
                                                                                    <input type="hidden"
                                                                                        class="name" name="name1">
                                                                                    Name
                                                                                </td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>-</td>
                                                                                <td>0</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="submit" class="btn btn-secondary">Confirm</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="addpacketsModal" tabindex="-1" aria-labelledby="addpacketsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addpacketsModalLabel">Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('startlaser') }}/{{ $data->lot_id }}" method="post">
                            @csrf
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Machine Number :</label></div>
                                    <div class="col-6 col-md-3">
                                        <select class="custom-select d-block w-100" name="machine_id"
                                            id="machine_id" style="margin-left: -162px;" required>
                                            <option value="">Please select</option>
                                            <?php $machine = DB::table('machine')->select('id', 'mname')->get(); ?>
                                            @foreach ($machine as $value)
                                                <option value="{{ $value->id }}">
                                                    {{ $value->mname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Pcs :</label></div>
                                    <div class="col-6 col-md-3">
                                        <input type="text" name="pcs" value="{{ $data->pc }}" disabled
                                            style="margin-left: -180px;" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6 col-md-6">
                                        <label class=" form-control-label">Employee : </label>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label class=" form-control-label">Weights(ct) : </label>
                                        <input type="text" name="pcs" disabled style="margin-left: 30px;"
                                            value="{{ $data->weights }}" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6 col-md-6">
                                        <label class=" form-control-label">Loose Weight(ct) : </label>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label class=" form-control-label">Avg Weights(ct) :</label>
                                        <input type="text" name="pcs" disabled
                                            value="<?= $data->weights / $data->pc ?>" />
                                    </div>
                                </div>
                                <div class="modal-footer float-left">
                                    <button type="submit" class="btn btn-secondary">Confirm</button>
                                    <button type="reset" class="btn btn-light"
                                        data-bs-dismiss="modal">Discard</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>

        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#">
                                            <h2>B3-CH925-36</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Pcs
                                                            :
                                                        </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">{{ $data->pc }}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Total
                                                            Weight(Ct): </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">{{ $data->weights }}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Avg.Weight(Ct) : </label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">
                                                            {{ $data->weights / $data->pc }}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Chocolate.Weight(Ct) :
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">56.50</p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Start
                                                            Date & Time : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        @if($laser_data == '')
                                                            <p class="form-control-static"> - </p>
                                                        @else
                                                        <p class="form-control-static"> {{ $data->startdate }} {{ $data->starttime }} </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Batch
                                                            : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">{{ $data->batch_name }}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Chocolate Image : </label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <img src="<?= '/item_img/' . $data->img1 ?>"
                                                            height="100px" />
                                                    </div>
                                                </div><br>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Chocolate Image : </label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <img src="<?= '/item_img/' . $data->img2 ?>"
                                                            height="100px" />

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                            href="#home" role="tab" aria-controls="home"
                                            aria-selected="true">Laser Lines</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="otherinfo-tab" data-toggle="tab"
                                            href="#otherinfo" role="tab" aria-controls="profile"
                                            aria-selected="false">Other Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="image-tab" data-toggle="tab" href="#image"
                                            role="tab" aria-controls="profile" aria-selected="false">Image
                                            Comparison</a>
                                    </li>
                                </ul>
                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"># </th>
                                                                <th scope="col"> Lot</th>
                                                                <th scope="col">Pcs</th>
                                                                <th scope="col">Weight(Ct)</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>{{ $data->lot_name }} Lot-{{ $data->lot_id }}</td>
                                                                <td>{{ $data->pc }}</td>
                                                                <td>{{ $data->weights }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="otherinfo" role="tabpanel"
                                        aria-labelledby="otherinfo-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-body card-block">
                                                    <form action="#" method="post"
                                                        enctype="multipart/form-data" class="form-horizontal">
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">Machine Number :
                                                                </label></div>
                                                            <div class="col-12 col-md-8">
                                                                <p class="form-control-static">LASER-1</p>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">Employee: </label>
                                                            </div>
                                                            <div class="col-12 col-md-8">
                                                                <p class="form-control-static">BHUMIT</p>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">Loose Weight(Ct) :
                                                                </label></div>
                                                            <div class="col-12 col-md-8">
                                                                <p class="form-control-static">33.00</p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body card-block">
                                                    <form action="#" method="post"
                                                        enctype="multipart/form-data" class="form-horizontal">
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">DLC Weight(Ct) :
                                                                </label></div>
                                                            <div class="col-12 col-md-8">
                                                                <p class="form-control-static">0.00</p>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">DM.Weight(Ct):
                                                                </label>
                                                            </div>
                                                            <div class="col-12 col-md-8">
                                                                <p class="form-control-static">0.00</p>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">Final Weight(Ct) :
                                                                </label></div>
                                                            <div class="col-12 col-md-8">
                                                                <p class="form-control-static">0.00</p>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">Note : </label></div>
                                                            <div class="col-12 col-md-8">
                                                                <p class="form-control-static"></p>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">Image End : </label>
                                                            </div>
                                                            <div class="col-12 col-md-8">
                                                                <img src="" alt="">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="image" role="tabpanel"
                                        aria-labelledby="image-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-body card-block">
                                                    <form action="#" method="post"
                                                        enctype="multipart/form-data" class="form-horizontal">
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">Image End : </label>
                                                            </div>
                                                            <div class="col-12 col-md-8">
                                                                <img src="" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">Other Image End :
                                                                </label></div>
                                                            <div class="col-12 col-md-8">
                                                                <img src="" alt="">
                                                            </div>
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
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
        <!-- /header -->
        <!-- Header-->
        {{-- <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-md-2"></div>
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Send Message <span class="profilespan">Log Note</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#"><i class="fa-solid fa-paperclip"></i> 0</a></li>
                                    <li><a href="#">Follow</a></li>
                                    <li class="active"><i class="fa-solid fa-user"></i> 1</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h6 class="headerborder">Today</h6>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 col-xs-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{URL:: asset('admin/assets/images/admin.jpg')}}">
                                                </a>
                                                <div class="media-body">
                                                    <h2 class="text-dark display-6">Administrator</h2>
                                                    <p>Creating a new Record....</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>


                </div>

            </div>

        </div> --}}

        <script src="{{ URL::asset('admin/assets/cdn/js/jquery.min.js') }} "></script>
        <script src="{{ URL::asset('admin/assets/cdn/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/cdn/js/bootstrap.min.js') }} "></script>
        <script src="{{ URL::asset('admin/assets/cdn/js/matchHeight.min.js') }} "></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/datatables.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
        <script src="{{ URL::asset('admin/assets/js/init/datatables-init.js') }}"></script>

        <script src="{{ URL::asset('admin/assets/js/main.js') }} "></script>
        <script src="{{ URL::asset('admin/assets/cdn/js/chosen.jquery.min.js') }} "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

        <script>
            $('body').on('change', '.auto', function(e) {
                e.preventDefault();
                ApplyFilter(this.value);
                var text = $('.assigngrowingall').val(this.value)
            });

            function ApplyFilter(search) {
                if (search != null && search != "") {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var formData = new FormData();
                    formData.append("search", search);

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        type: "POST",
                        url: "{{ route('searchLotmoves') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(res) {
                            $('#experienceSection').html('');
                            var height = 0;
                            var length = 0;
                            var width = 0;
                            var weight = 0;
                            $.each(res, function(i, val) {
                                height = +height + +val.height;
                                length = +length + +val.length;
                                width = +width + +val.width;
                                weight = +weight + +val.weight;
                                var section = $(`<tr>
                                    <td style="vertical-align: middle;text-align:left">${val.name}</td> 
                                    <td><input type="text" name="height[]" value="${val.height}" onchange="additionHeight()"/></td>
                                    <td><input type="text" name="length[]" value="${val.length}" onchange="additionLength()"/></td>
                                    <td><input type="text" name="width[]" value="${val.width}"  onchange="additionWidth()"/></td>
                                    <td><input type="text" name="process[]" value="-"</td>
                                    <td><input type="text" name="weight[]" value="${val.weight}" onchange="additionWeight()"/></td>
                                </tr>`);
                                $('#experienceSection').append(section);
                            });
                            var total = $(`<tr>
                                    <td></td>
                                    <td><b><input type="text" id="height_label" value="${height}" disabled/></b></td>
                                    <td><b><input type="text" id="length_label" value="${length}" disabled/></b></td>
                                    <td><b><input type="text" id="width_label" value="${width}" disabled/></b></td>
                                    <td><label><b></b></label></td>
                                    <td><b><input type="text" id="weight_label" value="${weight}" disabled/></b></td>
                                </tr>`);
                            $('#experienceSection').append(total);
                        }
                    });
                }
            }

            function additionHeight() {
                count = 0;
                var values = $("input[name='height[]']")
                    .map(function() {
                        return $(this).val();
                    }).get()
                var str = values.toString();
                var output = str.split(',');
                for (var i = output.length; i--;) {
                    count = +count + +output[i];
                }
                $('#height_label').val(count);
            }

            function additionLength() {
                count = 0;
                var values = $("input[name='length[]']")
                    .map(function() {
                        return $(this).val();
                    }).get()
                var str = values.toString();
                var output = str.split(',');
                for (var i = output.length; i--;) {
                    count = +count + +output[i];
                }
                $('#length_label').val(count);
            }

            function additionWidth() {
                count = 0;
                var values = $("input[name='width[]']")
                    .map(function() {
                        return $(this).val();
                    }).get()
                var str = values.toString();
                var output = str.split(',');
                for (var i = output.length; i--;) {
                    count = +count + +output[i];
                }
                $('#width_label').val(count);

            }

            function additionWeight() {
                count = 0;
                var values = $("input[name='weight[]']")
                    .map(function() {
                        return $(this).val();
                    }).get()
                var str = values.toString();
                var output = str.split(',');
                for (var i = output.length; i--;) {
                    count = +count + +output[i];
                }
                $('#weight_label').val(count);
                dlsWeight();
            }

            function dlsWeight() {
                var dlsWeight1 = $('#dlsweight').val();
                if (dlsWeight1 != "") {
                    var weight_label = $('#weight_label').val();
                    dlsWeightFinal = weight_label - dlsWeight1;
                    $('#loss_weight').val(dlsWeightFinal);
                    $('#loss_weight1').val(dlsWeightFinal);
                }
            }
        </script>

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

            function checkPacket() {
                alert("Please add packets for receive.");
            }
        </script>
</body>

</html>
