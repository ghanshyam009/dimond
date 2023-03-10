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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Laser</span></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('laser1') }}">Laser</a></strong>
            <ul class="stockul">
                <li class="stockli"><a href="{{ url('laser1') }}">Laser</a></li>
                <li class="stockli mt-2"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#receiveModal">Receive</a></li>
                <li class="stockli"><a href="{{ url('lotsdashboard') }}">Lots</a></li>
                <li class="stockli"><a href="{{ url('packetlaserdashboard') }}">Packets</a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#assignModal">Assign</a></li>
                <li class="stockli mt-2"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#returnModal">Return</a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#returnstockModal">Return to stock</a></li>
                <li class="stockli"><a href="{{ url('machinelaser') }}">Machine</a></li>

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
                            <form action="{{ url('chocolaterecive') }}" method="post" name="recive"
                                enctype="multipart/form-data" id="recivechocolateall">
                                @csrf

                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-lg-11">
                                            <input type="tel" class="form-control cc-number identified visa"
                                                value="" data-val="true"
                                                data-val-required="Please enter the card number"
                                                data-val-cc-number="Please enter a valid card number">
                                        </div>
                                        <div class="col-lg-1">
                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#largeModal">Recive</button>
                                        </div>
                                        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog"
                                            aria-labelledby="largeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="largeModalLabel">Confirmation</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Are you sure you want to Return a lot?
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
                                        <div class="col-lg-12">
                                            <div class="card-body card-block">

                                                <div class="row">
                                                    <div class="col-lg-3 float-left">
                                                        <div class="card-body card-block">

                                                            <div class="row form-group">
                                                                <div class="col col-md-9"><label
                                                                        class=" form-control-label"><img
                                                                            src="{{ URL::asset('admin/assets/img/barcode.webp') }}"
                                                                            alt=""></label></div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col-12 col-md-9">
                                                                    <p class="form-control-static"><input type="email"
                                                                            id="email-input" class="form-control rec">
                                                                        <input type="hidden" class="reciveall"
                                                                            name="reciveall">
                                                                    </p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3"></div>
                                                    <div class="col-lg-6">
                                                        <div class="card-body card-block">
                                                            <div class="row form-group">
                                                            <div class="col col-md-3"><label class=" form-control-label">Process</label></div>
                                                            <div class="col col-md-6">
                                                                <div class="form-check-inline form-check">
                                                                    <label for="inline-radio1" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked="">Shape
                                                                    </label>
                                                                    <label for="inline-radio2" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">DLC
                                                                    </label>
                                                                    <label for="inline-radio3" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Final
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div  id="receiveemployee"
                                                                    class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label class=" form-control-label">Employee : </label>
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <select class="custom-select d-block w-100"
                                                                            name="user_id">
                                                                            <option value="">Please select Employee
                                                                            </option>
                                                                            <?php $users = App\Models\userlogin::get(); ?>
                                                                            @foreach ($users as $user)
                                                                                <option value="{{ $user->id }}">
                                                                                    {{ $user->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                         </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="select"
                                                                        class=" form-control-label">Machine : </label>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <select required id="recevie"
                                                                        class="custom-select d-block w-100"
                                                                        name="location_id">
                                                                        <option value="0">Please select Machine
                                                                        </option>
                                                                        <?php $machine = App\Models\machine::get(); ?>
                                                                        @foreach ($machine as $rec)
                                                                            <option value="{{ $rec->id }}"
                                                                                >
                                                                                {{ $rec->mname }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>

                                                                </div>
                                                            </div>
                                                 
                                                        </div>
                                                    </div>
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
                                    <div style="display:none"; id="chocolate" class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                                href="#home" role="tab" aria-controls="home"
                                                                aria-selected="true">Chocolate</a>
                                                        </li>
                                                    </ul>
                                                    <div class="area">
                                                        <input type="text-area"
                                                            style="width: 100%; height:100px; !important">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="loste" class="row">
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
                                                    <div class="area">
                                                        <input type="text-area"
                                                            style="width: 100%; height:100px; !important">
                                                    </div>
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
                                                                                    <th>Height(Micron)</th>
                                                                                    <th>Length(MM)</th>
                                                                                    <th>Width(MM)</th>
                                                                                    <th>Pcs</th>
                                                                                    <th>Weight(Ct)</th>
                                                                                    <th id="notes"
                                                                                        style="display:none;">Notes</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="smartSection">
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
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td id="notese"
                                                                                        style="display:none;">0</td>
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
                                <div class="modal-footer float-left1">
                                    <button type="button" id="closerecive"

                                        class="btn btn-secondary ">Create</button>

                                    <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
               <div class="modal fade" id="assignModal" aria-labelledby="assignModalLabel" aria-hidden="true"
                role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Assign</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>


                        <form action="{{ url('assignchocolate') }}" id="assignchocolateall" name="assign"
                            method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <input id="cc-number" name="cc-number" type="tel"
                                            class="form-control cc-number identified visa" value=""
                                            data-val="true" data-val-required="Please enter the card number"
                                            data-val-cc-number="Please enter a valid card number">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#largeModal">Assign</button>
                                    </div>
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog"
                                        aria-labelledby="largeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return a lot?
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
                                            <div class="row form-group">
                                                <div class="col col-md-9"><label class=" form-control-label"><img
                                                            src="{{ URL::asset('admin/assets/img/barcode.webp') }}"alt=""></label>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-9">

                                                    <p class="form-control-static"><input type="email"
                                                            id="email-input" class="form-control auto"></p>
                                                    <input type="hidden" class="detailall" name="detailall">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                    </div>
                                   <div class="col-lg-6">
                                                        <div class="card-body card-block">
                                                            <div class="row form-group">
                                                            <div class="col col-md-3"><label class=" form-control-label">Process</label></div>
                                                            <div class="col col-md-6">
                                                                <div class="form-check-inline form-check">
                                                                    <label for="inline-radio1" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked="">Shape
                                                                    </label>
                                                                    <label for="inline-radio2" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">DLC
                                                                    </label>
                                                                    <label for="inline-radio3" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Final
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div  id="receiveemployee"
                                                                    class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label class=" form-control-label">Employee : </label>
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <select class="custom-select d-block w-100"
                                                                            name="user_id">
                                                                            <option value="">Please select Employee
                                                                            </option>
                                                                            <?php $users = App\Models\userlogin::get(); ?>
                                                                            @foreach ($users as $user)
                                                                                <option value="{{ $user->id }}">
                                                                                    {{ $user->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                         </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="select"
                                                                        class=" form-control-label">Machine : </label>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <select required id="recevie"
                                                                        class="custom-select d-block w-100"
                                                                        name="location_id">
                                                                        <option value="0">Please select Machine
                                                                        </option>
                                                                        <?php $machine = App\Models\machine::get(); ?>
                                                                        @foreach ($machine as $rec)
                                                                            <option value="{{ $rec->id }}"
                                                                                >
                                                                                {{ $rec->mname }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>

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
                                                            <a class="nav-link active" id="home-tab"
                                                                data-toggle="tab" href="#home" role="tab"
                                                                aria-controls="home" aria-selected="true">Records</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="choco" style="display: none"; class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home-tab"
                                                                data-toggle="tab" href="#home" role="tab"
                                                                aria-controls="home"
                                                                aria-selected="true">Chocolate</a>
                                                        </li>

                                                    </ul>
                                                    <div class="area">
                                                        <input type="text-area"
                                                            style="width: 100%; height:100px; !important">
                                                    </div>
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
                                                            <a class="nav-link active" id="home-tab"
                                                                data-toggle="tab" href="#home" role="tab"
                                                                aria-controls="home" aria-selected="true">Lots</a>
                                                        </li>

                                                    </ul>
                                                    <div class="area">
                                                        <input type="text-area"
                                                            style="width: 100%; height:100px; !important">
                                                    </div>

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
                                                                    <div class="tab-pane fade show active"
                                                                        id="home" role="tabpanel"
                                                                        aria-labelledby="home-tab">

                                                                        <table class="table"
                                                                            style="line-height: 5px;">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Name</th>
                                                                                    <th>Height(Micron)</th>
                                                                                    <th>Length(MM)</th>
                                                                                    <th>Width(MM)</th>
                                                                                    <th>Pcs</th>
                                                                                    <th>Weight(Ct)</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="experienceSection">
                                                                                <tr>
                                                                                    <td
                                                                                        style="vertical-align: middle;text-align:left">
                                                                                        <input type="hidden"
                                                                                            class="name"
                                                                                            name="name1">
                                                                                        Name
                                                                                    </td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
                                                                                    <td>0</td>
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

                                <div class="modal-footer float-left1">
                                    <button type="button" id="close" class="btn btn-secondary">Create</button>
                                    <button type="reset" class="btn btn-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="returnModal" tabindex="-1" aria-labelledby="returnModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Return</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel2" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel2">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 float-right">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-9"><label class=" form-control-label"><img src="{{URL:: asset('admin/assets/img/barcode.webp')}}" alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email" id="email-input" name="email-input" class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Process</label></div>
                                                    <div class="col col-md-6">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked="">Shape
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">DLC
                                                            </label>
                                                            <label for="inline-radio3" class="form-check-label ">
                                                                <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Final
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Net Process</label></div>
                                                    <div class="col col-md-6">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked="">Shape
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">DLC
                                                            </label>
                                                            <label for="inline-radio3" class="form-check-label ">
                                                                <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Final
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Employee : </label></div>
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
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">DLC Weight(Ct) : </label></div>
                                                    <div class="col-12 col-md-6">
                                                        <p class="form-control-static"><input type="email" id="email-input" name="email-input" class="form-control"></p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Loss Weight : </label></div>
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
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Records</a>
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
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Packets</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#largeModal2">Return</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="returnstockModal" tabindex="-1" aria-labelledby="returnstockModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Return</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-11">
                                        <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#largeModal3">Return</button>

                                    </div>
                                    <div class="modal fade" id="largeModal3" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel3" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel3">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
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
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-9"><label class=" form-control-label"><img src="{{URL:: asset('admin/assets/img/barcode.webp')}}" alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email" id="email-input" name="email-input" class="form-control"></p>
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
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Packets</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4 float-left">
                        <a href="">
                            <h4 class="headerborder1">Lot</h4>
                        </a>
                    </div>
                    <div class="col-md-7">
                    </div>
                    <div class="col-md-1 float-right">
                        <a href="{{ url('lotsdashboardlist') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-list"></i></button></a>
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
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>

                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Dashboard</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329
                                            <button type="button" class="btn btn-danger btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location: 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct): 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct): 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron): 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W: 9.69*8.10</label></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>MRG6-LOT329 <button type="button" class="btn btn-success btn-sm float-right mt-1" style="border-radius: 50%;padding: 0.4rem;"></button></strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-email" class=" form-control-label font_size">Location : 0</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Weight(Ct) : 81.59</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"><i class="fa-solid fa-circle"></i>Stock</label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Weight(Ct) : 5.10</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.Height(Micron) : 4.38</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-5"><label for="hf-password" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-7"><label for="hf-email" class=" form-control-label font_size">Avg.L*W : 9.69*8.10</label></div>
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
