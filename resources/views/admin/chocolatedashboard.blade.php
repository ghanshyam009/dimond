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

    <style>
        p {
            font-size: 16px;
            font-family: "Open Sans", sans-serif;
            font-weight: 400;
            line-height: 24px;
            color: #c92a2a;
        }
    </style>
</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Chocolate</span></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active gap-2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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
                        class="fa-solid fa-table-columns"></i></a> <a
                    href="{{ url('chocolatedashboard') }}">Chocolate</a></strong>

            <ul class="stockul">
                @if (Auth::check())
                    @if (Auth::user()->role == 'admin' ||
                            Auth::user()->role == 'manager' ||
                            Auth::user()->role == 'laser user' ||
                            Auth::user()->role == 'growing user')
                        <li class="stockli mt-2 d-block d-md-inline-block"><a
                                href="{{ url('createchocolatedashboard') }}">CreateChocolate</a></li>
                    @endif
                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager' || Auth::user()->role == 'growing user')
                        <li class="stockli mt-2 d-block d-md-inline-block"><a href="{{ url('lots') }}">EndGrowing</a>
                        </li>
                    @endif
                    {{-- @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager') --}}
                    {{-- <li class="stockli"><a class="ms-1 mt-1" data-bs-toggle="modal"
                            data-bs-target="#returnModal">AssignLot</a></li> --}}
                    {{-- @endif --}}
                    {{-- @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager') --}}
                    {{-- <li class="stockli"><a class="ms-1 mt-1" data-bs-toggle="modal"
                            data-bs-target="#receiveModal">ReciveLot</a></li> --}}
                    {{-- @endif --}}
                    @if (Auth::user()->role == 'admin' ||
                            Auth::user()->role == 'manager' ||
                            Auth::user()->role == 'cliving user' ||
                            Auth::user()->role == 'growing user')
                        <li class="stockli mt-2 d-block d-md-inline-block"><a
                                href="{{ url('chocolateimage') }}">Images</a></li>
                    @endif
                @endif
            </ul>
            {{-- <div class="modal fade" id="receiveModal" tabindex="-1" aria-labelledby="receiveModalLabel"
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

                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-lg-11">
                                        <input type="tel" class="form-control cc-number identified visa"
                                            value="" data-val="true"
                                            data-val-required="Please enter the card number"
                                            data-val-cc-number="Please enter a valid card number">
                                    </div>
                                    <div class="col-lg-1">
                                        {{-- <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#largeModal">Recive</button> 
                                        <button type="button" id="closerecive"
                                            class="btn btn-secondary ">Recive</button>
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
                                                                        name="lot_id">
                                                                </p>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="select"
                                                                    class=" form-control-label">Location : </label>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <select required id="recevie"
                                                                    class="custom-select d-block w-100"
                                                                    name="location_id">
                                                                    <option value="0">Please select Location
                                                                    </option>
                                                                    <?php $recevies = App\Models\location::get(); ?>
                                                                    @foreach ($recevies as $rec)
                                                                        <option value="{{ $rec->id }}">
                                                                            {{ $rec->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                        {{-- <div style="display:none"; id="receiveemployee"
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


                                                        <div id="return" class="row form-group">
                                                            <div class="col-12 col-md-3"><label
                                                                    class=" form-control-label">Return Type :</label>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-check-inline form-check">
                                                                    {{-- <label for="inline-radio1" class="form-check-label ">
                                                                                <input type="radio" id="inline-radio1"
                                                                                    name="0" value="0"
                                                                                    class="form-check-input" checked>Stock
                                                                            </label> 
                                                                    <label for="inline-radio1"
                                                                        class="form-check-label ">
                                                                        <input required type="radio"
                                                                            id="inline-radio1" name="return_type"
                                                                            value="0"
                                                                            class="form-check-input">Stock
                                                                    </label>
                                                                    <label for="inline-radio2"
                                                                        class="form-check-label ">
                                                                        <input required type="radio"
                                                                            id="inline-radio2" name="return_type"
                                                                            value="1"
                                                                            class="form-check-input">Seeds
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="display:none"; id="print"
                                                            class="row form-group">
                                                            <div class="col-12 col-md-3"><label
                                                                    class=" form-control-label">Print Packet:</label>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-check-inline form-check">
                                                                    <input type="hidden" id="inline-radio1"
                                                                        name="print_packet" value="0"
                                                                        class="form-check-input">
                                                                    <input type="radio" id="inline-radio1"
                                                                        name="print_packet" value="1"
                                                                        class="form-check-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="display:none"; id="weightloss"
                                                            class="row form-group">
                                                            <div class="col-12 col-md-3"><label
                                                                    class=" form-control-label">Weight
                                                                    Loss(Ct):</label></div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-check-inline form-check">
                                                                    0.00
                                                                </div>
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
                                <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="modal fade" id="returnModal" aria-labelledby="returnModalLabel" aria-hidden="true"
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
                                        <button type="button" id="close"
                                            class="btn btn-secondary">Assign</button>
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
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Location :
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <select id="locations" class="custom-select d-block w-100"
                                                        name="location_id" required>
                                                        <option value="">Please select Location</option>
                                                        <?php $location = App\Models\location::get(); ?>
                                                        @foreach ($location as $loc)
                                                            <option value="{{ $loc->id }}">{{ $loc->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- 
                                            <div style="display:none"; id="employee" class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Employee : </label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <select class="custom-select d-block w-100" name="user_id">
                                                        <option value="">Please select Employee</option>
                                                        <?php $users = App\Models\userlogin::get(); ?>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> 
                                            <div style="display:none"; id="employee" class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Employee : </label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <select class="custom-select d-block w-100" name="user_id">
                                                        <?php $users = App\Models\userlogin::get(); ?>
                                                        @foreach ($users as $user)
                                                            @if ($user->name !== Auth::user()->name)
                                                                <option value="{{ $user->id }}">
                                                                    {{ $user->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div style="display:none"; id="process" class="row form-group">
                                                <div class="col col-md-3"><label for="select"
                                                        class=" form-control-label">Processes : </label></div>
                                                <div class="col-12 col-md-6">
                                                    <select class="custom-select d-block w-100" value=""
                                                        name="process">
                                                        <option value="0">Please select Porcess</option>
                                                        <?php $processes = App\Models\Processes::get(); ?>
                                                        @foreach ($processes as $process)
                                                            <option value="{{ $process->id }}">{{ $process->name }}
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
                                    <button type="reset" class="btn btn-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Chocolate </h4>
                    </div>
                    <div class="col-md-4">
                        <div class="dropdown float-right float-md-left mr-3 mt-1">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa-solid fa-filter"></i>
                                Filter
                            </button>
                            <div class="dropdown-menu mt-5 py-0" aria-labelledby="dropdownMenuButton">
                                <form action="{{ url('searchchocolate') }}" name="search" method="get">
                                    <div class="search_multiple">
                                        {{-- <select class="form__input dropdown-item px-0" name="name" id="search"
                                            onchange="form.submit();">
                                            <option selected>selectName.</option>
                                            @foreach ($lots as $lot)
                                                <option value="{{ $lot->name }}"> {{ $lot->name }}</option>
                                            @endforeach
                                        </select> --}}
                                        {{-- <select class="form__input dropdown-item px-0" name="id" id="search"
                                            onchange="form.submit();">
                                            <option selected disabled>Search Lot..</option>
                                            <?php $lots = App\Models\LotDetail::select('id')->get(); ?>
                                            @foreach ($lots as $lo)
                                                <option value="{{ $lo->id }}">L:{{ $lo->id }}</option>
                                            @endforeach
                                        </select> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>

        @if (Auth::check())
            @if (Auth::user()->role == 'admin' ||
                    Auth::user()->role == 'manager' ||
                    Auth::user()->role == 'growing user' ||
                    Auth::user()->role == 'cliving user')
                <div class="content">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="row">
                                        @foreach ($lotmoves as $lotmove)
                                            <?php $machine = App\Models\machine::where('lotno', $lotmove->lot_id)->first(); ?>
                                            <div class="col-lg-4 col-md-6 col-xl-3">
                                                <div class="card">
                                                    <div class="card-body card-block">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="fw-bold">New</div>
                                                            @if ($machine == '')
                                                                <div>00:00:00</div>
                                                            @elseif (isset($machine->stop_timer) && !empty($machine->stop_timer))
                                                                <?php
                                                                $start_time = date_create($machine->timer);
                                                                $end_time = date_create($machine->stop_timer);
                                                                $diff = date_diff($start_time, $end_time);
                                                                $diff_time = $diff->format('%a');
                                                                $start_time = date('H:i:s', strtotime($machine->timer));
                                                                $end_time = date('H:i:s', strtotime($machine->stop_timer));
                                                                $arr1 = explode(':', $start_time);
                                                                $arr2 = explode(':', $end_time);
                                                                $h = 0;
                                                                $h = isset($arr1, $arr2) ? $arr1[0] - $arr2[0] : 00;
                                                                $m = isset($arr1, $arr2) ? $arr1[1] - $arr2[1] : 00;
                                                                $s = isset($arr1, $arr2) ? $arr1[2] - $arr2[2] : 00;
                                                                if ($diff_time != 0) {
                                                                    $h = $diff_time * 24;
                                                                }
                                                                ?>
                                                                <div class="fw-bold">
                                                                    <span
                                                                        class="hours">{{ abs($h) < 10 ? '0' . abs($h) : abs($h) }}</span>:<span
                                                                        class="minutes">{{ abs($m) < 10 ? '0' . abs($m) : abs($m) }}</span>:<span
                                                                        class="seconds ms-0">{{ abs($s) < 10 ? '0' . abs($s) : abs($s) }}</span>
                                                                </div>
                                                            @elseif(isset($machine->timer) && !empty($machine->timer))
                                                                <div class="timer stoptime text-success fw-bold"
                                                                    data-date="{{ $machine->timer }}"
                                                                    stop-date="{{ $machine->stop_timer }}">
                                                                    <input type="hidden" id="stoptime"
                                                                        value="{{ $machine->stop_timer }}">
                                                                    <span class="hours"></span>:<span
                                                                        class="minutes"></span>:<span
                                                                        class="seconds"></span>
                                                                </div>
                                                            @endif

                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col-12 col-md-4">
                                                                <label for="hf-email"
                                                                    class=" form-control-label font_size">Batch:
                                                                    {{ $lotmove->batch_name }}
                                                                </label>
                                                            </div>
                                                            <div class="col-12 col-md-8">
                                                                <label for="hf-email"
                                                                    class=" form-control-label font_size">Total
                                                                    Weight(Ct):
                                                                    {{ round($lotmove->weight1, 2) }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col-12 col-md-4"><label for="hf-email"
                                                                    class=" form-control-label font_size">Pcs:
                                                                    {{ $lotmove->pcs }}</label>
                                                            </div>
                                                            <div class="col-12 col-md-8"><label for="hf-email"
                                                                    class=" form-control-label font_size">Avg
                                                                    Weight(Ct):
                                                                    {{ round($lotmove->weight1 / $lotmove->pcs, 2) }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col-12 col-md-4"><label for="hf-email"
                                                                    class=" form-control-label font_size">Lots:</label>
                                                            </div>
                                                            <div class="col-12 col-md-8"><label for="hf-email"
                                                                    class=" form-control-label font_size">Avg
                                                                    Height(Micron):
                                                                    {{ round($lotmove->height1 / $lotmove->pcs, 2) }}
                                                                </label></div>
                                                        </div>
                                                        <div class="row form-group1">
                                                            <div class="col-12 col-md-4">
                                                                <label for="hf-email"
                                                                    class=" form-control-label font_size">

                                                                    {{ $lotmove->lot_name }}
                                                                    LOT-{{ $lotmove->lot_id }}
                                                                </label>
                                                            </div>
                                                            <div class="col-12 col-md-8"><label for="hf-email"
                                                                    class=" form-control-label font_size">Avg. L x W:
                                                                    {{ round($lotmove->length1 / $lotmove->pcs, 2) }} x
                                                                    {{ round($lotmove->width / $lotmove->pcs, 2) }}
                                                                </label></div>
                                                        </div>
                                                        @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager' || Auth::user()->role == 'growing user')
                                                            <div class="row form-group1">
                                                                <div class="col-11">
                                                                    <div class="row">
                                                                        @if ($machine == '')
                                                                            <div class="col-12 text-right mt-2">
                                                                                <small>Draft</small>
                                                                            </div>
                                                                        @elseif ($machine->timer != null && $machine->stop_timer != null)
                                                                            <div class="col-6">
                                                                                <button
                                                                                    id="stop_{{ $lotmove->lot_id }}"
                                                                                    class="stop_button btn btn-secondary btn-sm float-left w-auto mt-2"
                                                                                    onclick="endProcess({{ $lotmove->lot_id }}); stop({{ $lotmove->lot_id }})"
                                                                                    style="font-size: 12px; padding: 3px;"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#addpacketsModal1">End
                                                                                </button>
                                                                                {{-- <input type="text" name="lotid"
                                                                                    id="lotid"
                                                                                    value="{{ $lotmove->lot_id }}"> --}}
                                                                            </div>
                                                                            <div class="col-6 text-right mt-2">
                                                                                <small>Growing Done</small>
                                                                            </div>
                                                                        @elseif ($machine->timer != null && $machine->stop_timer == null)
                                                                            <div class="col-6">
                                                                                <div>
                                                                                    <button
                                                                                        id="stop_{{ $lotmove->lot_id }}"
                                                                                        class="stop_button btn btn-secondary btn-sm float-left mt-2"
                                                                                        onclick="stop({{ $lotmove->lot_id }})"
                                                                                        style="font-size: 12px; padding: 3px;"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#addpacketsModal">Growing
                                                                                        Done</button>
                                                                                    <input type="hidden"
                                                                                        value="{{ $lotmove->lot_id }}"
                                                                                        id="stopgrowing">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6 text-right mt-2">
                                                                                <small
                                                                                    class="bg-info py-1 px-2 rounded-pill text-white w-auto">In
                                                                                    Progress</small>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-1">
                                                                    <button type="button"
                                                                        class="btn btn-danger btn-sm float-right mt-2"
                                                                        style="font-size: 12px; padding: 3px 6px;">B</button>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="addpacketsModal" tabindex="-1"
                        aria-labelledby="addpacketsModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addpacketsModalLabel">Growing Done</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form enctype="multipart/form-data" target="_blank">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body card-block">
                                                    <div class="row form-group">
                                                        <div class="col-12 col-md-2"><label for="select"
                                                                class=" form-control-label">Process & Reason
                                                            </label></div>
                                                        <div class="col-12 col-md-10">
                                                            <?php $batch = App\Models\processreson::get(); ?>
                                                            <select class="custom-select d-block w-100"
                                                                name="processresons_id" id="processresons_id"
                                                                required>
                                                                <option value="0">Please select</option>
                                                                @foreach ($batch as $ans)
                                                                    <option value="{{ $ans->id }}">
                                                                        {{ $ans->name }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                            <p id="processresons_id_error"></p>
                                                        </div>

                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="select"
                                                                class=" form-control-label">Employee</label></div>
                                                        <div class="col-12 col-md-10">
                                                            <?php $users = App\Models\User::get(); ?>
                                                            <select class="custom-select d-block w-100" name="user_id"
                                                                id="user_id" required>
                                                                <option value="0">Please select</option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">
                                                                        {{ $user->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <p id="user_id_error"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="select"
                                                                class=" form-control-label">Growing Time</label></div>
                                                        <div class="col-12 col-md-10">
                                                            <input type="datetime-local" value="{{ $now }}"
                                                                id="growing_time" name="growing_time"
                                                                class="datetimepicker d-block w-100">
                                                            <p id="growing_time_error"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="select"
                                                                class="form-control-label">Image</label></div>
                                                        <div class="col-12 col-md-10">
                                                            <input type="file" id="image" name="image"
                                                                accept="image/*" webcam class="d-block w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="hidden_packet_id" id="hidden_packet_id" />
                                        <div class="modal-footer float-left col-12">
                                            <button type="button" onclick="growing_done();"
                                                class="btn btn-secondary">Done</button>
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Discard</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="addpacketsModal1" tabindex="-1"
                        aria-labelledby="addpacketsModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addpacketsModalLabel">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form enctype="multipart/form-data" target="_blank">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body card-block">
                                                    <div class="row form-group">
                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class="form-control-label">Final
                                                                Weight (Ct)</label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="text" name="final_weight_ct"
                                                                id="final_weight_ct" />
                                                        </div>

                                                        <div class="col-6 col-md-2">
                                                            <label for="select"
                                                                class=" form-control-label">Chocolate Start</label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="file" name="chocolate_start"
                                                                id="chocolate_start" />
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class="form-control-label">Finish
                                                                Type </label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="text" name="finish_type"
                                                                id="finish_type" />
                                                        </div>

                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class="form-control-label">Growing
                                                                Done</label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="file" name="growing_done"
                                                                id="growing_done" />
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class=" form-control-label">End
                                                                Images </label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="file" name="finish_type_1"
                                                                id="finish_type_1" /><br><br>
                                                            <input type="file" name="finish_type_2"
                                                                id="finish_type_2" />
                                                        </div>

                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class=" form-control-label">Growing
                                                                Time</label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="text" name="growing_time"
                                                                id="growing_time" />
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="lotid" id="lotid"
                                                        value="<?= isset($lotmove->lot_id) ? $lotmove->lot_id : '' ?>">

                                                    <div class="row form-group">
                                                        <div class="col col-md-2"><label for="select"
                                                                class=" form-control-label">Note</label></div>
                                                        <div class="col-12 col-md-10">
                                                            <textarea id="note" name="note"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <ul class="nav nav-tabs mt-4" id="myTab"
                                                                        role="tablist">
                                                                        <li class="nav-item">
                                                                            <h6><b>Select Broken Pieces </b></h6>
                                                                            <a class="nav-link active" id="home-tab"
                                                                                data-toggle="tab" href="#home"
                                                                                role="tab" aria-controls="home"
                                                                                aria-selected="true">Chocolate
                                                                                Lines</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="table-responsive">
                                                                        <table id="dataTable"
                                                                            class="cover table table-responsive">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Name</th>
                                                                                    <th>Length(MM)..</th>
                                                                                    <th>Width(MM)</th>
                                                                                    <th>Weight(Ct)</th>
                                                                                    <th>Height(Micro)</th>
                                                                                    <th>Grow Height</th>
                                                                                    <th>GRD</th>
                                                                                    <th>Shape</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="add_rows">
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
                                        <div class="modal-footer float-left col-12">
                                            <button type="button" onclick="chocolateConfirm();"
                                                class="btn btn-secondary">Confirm</button>
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Discard</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal fade" id="addpacketsModal2" tabindex="-1"
                        aria-labelledby="addpacketsModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addpacketsModalLabel">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('insertseeds') }}" method="post"
                                        enctype="multipart/form-data" target="_blank">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body card-block">
                                                    <div class="row form-group">
                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class="form-control-label">Machine
                                                                Number</label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <div class="col-6 col-md-10">
                                                                <?php $machine = App\Models\machine::get(); ?>
                                                                <select class="custom-select d-block w-100"
                                                                    name="user_id" id="user_id" required>
                                                                    <option value="0">Please select</option>
                                                                    @foreach ($machine as $machin_name)
                                                                        <option value="{{ $machin_name->id }}">
                                                                            {{ $machin_name->mname }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <p id="user_id_error"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class="form-control-label">Start
                                                                Date</label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="datetime" disabled name="growing_time"
                                                                id="growing_time"
                                                                value="{{ date('Y/m/d H:i:m') }}" />
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class="form-control-label">Employee
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <div class="col-12 col-md-10">
                                                                <?php $users = App\Models\User::get(); ?>
                                                                <select class="custom-select d-block w-100"
                                                                    name="user_id" id="user_id" required>
                                                                    <option value="0">Please select</option>
                                                                    @foreach ($users as $user)
                                                                        <option value="{{ $user->id }}">
                                                                            {{ $user->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <p id="user_id_error"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-2">
                                                            <label for="select"
                                                                class="form-control-label">Pcs</label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="text" name="growing_time"
                                                                id="growing_time" />
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class="form-control-label">Loose
                                                                Weight(Ct) </label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="text" name="growing_time"
                                                                id="growing_time" />
                                                        </div>

                                                        <div class="col-6 col-md-2">
                                                            <label for="select"
                                                                class="form-control-label">Weight(Ct)</label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="text" name="growing_time"
                                                                id="growing_time" />
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class="form-control-label">Images
                                                            </label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="file" name="finish_type"
                                                                id="finish_type" /><br><br>
                                                            <input type="file" name="finish_type"
                                                                id="finish_type" />
                                                        </div>

                                                        <div class="col-6 col-md-2">
                                                            <label for="select" class=" form-control-label">Avg.
                                                                Weight(Ct) </label>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                            <input type="text" name="growing_time"
                                                                id="growing_time" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer float-left col-12">
                                            <button type="button" onclick="chocolateConfirm();"
                                                class="btn btn-secondary">Confirm</button>
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Discard</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="countChocolateline">
                </div>
            @endif
        @endif
        <script>
            function secToTimer(sec) {
                const o = new Date(0),
                    p = new Date(sec * 1000)
                return new Date(p.getTime() - o.getTime()).toString().split(" ")[4] + "." + p.getMilliseconds()
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
        <script src="{{ URL::asset('backend/assets/js/scripts.js?AS') }}"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            document.addEventListener('readystatechange', event => {
                if (event.target.readyState === "complete") {
                    var clockdiv = document.getElementsByClassName("timer");
                    var countDownDate = new Array();
                    for (var i = 0; i < clockdiv.length; i++) {
                        countDownDate[i] = new Array();
                        countDownDate[i]['el'] = clockdiv[i];
                        countDownDate[i]['time'] = new Date(clockdiv[i].getAttribute('data-date')).getTime();
                        countDownDate[i]['hours'] = 0;
                        countDownDate[i]['seconds'] = 0;
                        countDownDate[i]['minutes'] = 0;
                    }
                    var countdownfunction = setInterval(function() {
                            for (var i = 0; i < countDownDate.length; i++) {
                                var now = new Date().getTime();
                                var distance = now - countDownDate[i]['time'];

                                countDownDate[i]['hours'] = Math.floor((distance / (1000 * 60 * 60 * 24)) * 24);

                                countDownDate[i]['minutes'] = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                                    60));
                                countDownDate[i]['seconds'] = Math.floor((distance % (1000 * 60)) / 1000);

                                if (distance < 0) {
                                    countDownDate[i]['el'].querySelector('.hours').innerHTML = 00;
                                    countDownDate[i]['el'].querySelector('.minutes').innerHTML = 00;
                                    countDownDate[i]['el'].querySelector('.seconds').innerHTML = 00;
                                } else {
                                    var hour = countDownDate[i]['el'].querySelector('.hours').innerHTML =
                                        countDownDate[i]['hours'] < 10 ? "0" + countDownDate[i]['hours'] :
                                        countDownDate[i]['hours'];
                                    var minute = countDownDate[i]['el'].querySelector('.minutes').innerHTML =
                                        countDownDate[i]['minutes'] < 10 ? "0" + countDownDate[i]['minutes'] :
                                        countDownDate[i]['minutes'];
                                    var second = countDownDate[i]['el'].querySelector('.seconds').innerHTML =
                                        countDownDate[i]['seconds'] < 10 ? "0" + countDownDate[i]['seconds'] :
                                        countDownDate[i]['seconds'];
                                }
                            }
                        },
                        1000);
                }
            });
        </script>


        <script>
            var timeArray = [];
            var countChocolateline = 0;

            function timer(id) {
                timeArray[id]['sec'] = timeArray[id]['sec'] + 1;
                if (timeArray[id]['sec'] / 60 == 1) {
                    timeArray[id]['min'] = timeArray[id]['min'] + 1;
                    timeArray[id]['sec'] = 0;
                    if (timeArray[id]['min'] / 60 == 1) {
                        timeArray[id]['hour'] = timeArray[id]['hour'] + 1;
                        timeArray[id]['min'] = 0;
                    }
                }
                if (timeArray[id]['sec'] < 10) {
                    timeArray[id]['dispSec'] = "0" + timeArray[id]['sec'].toString();
                } else {
                    timeArray[id]['dispSec'] = timeArray[id]['sec'].toString();
                }
                if (timeArray[id]['min'] < 10) {
                    timeArray[id]['dispMin'] = "0" + timeArray[id]['min'].toString();
                } else {
                    timeArray[id]['dispMin'] = timeArray[id]['min'].toString();
                }
                if (timeArray[id]['hour'] < 10) {
                    timeArray[id]['dispHour'] = "0" + timeArray[id]['hour'].toString();
                } else {
                    timeArray[id]['dispHour'] = timeArray[id]['hour'].toString();
                }
                $("#timer_" + id).html(timeArray[id]['dispHour'] + ":" + timeArray[id]['dispMin'] + ":" + timeArray[id][
                    'dispSec'
                ]);
            }

            function endProcess(lot_id) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var formData = new FormData();
                formData.append("lot_id", lot_id);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    type: "POST",
                    url: "{{ route('getLotDetails') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(lot_deatils) {
                        htmlData = "";
                        i = 1;
                        lot_deatils.forEach(myFunction);

                        function myFunction(item) {
                            if (item.grow_height) {
                                grow_height = item.grow_height;
                            } else {
                                grow_height = " ";

                            }
                            htmlData = htmlData + '<tr><td>-name-</td><td>' + item.length + '</td><td>' + item
                                .width + '</td><td>' + item.weight + '</td><td>' + item.height +
                                '</td><td><input type="text" id="' + i + '" value=' + grow_height +
                                '></td><td>GRD</td><td>' + item.shape + '</td></tr><input type="hidden" value="' +
                                item.id + '" id="hidden_lot_id_' + i + '"/>';
                            i++;
                            countChocolateline++;
                            $('#countChocolateline').val(countChocolateline);
                        }
                        document.getElementById('add_rows').innerHTML = htmlData;
                    }
                });
            }

            function stop(id) {

                // window.clearInterval(timeArray[id]['timeoutId']);
                // timeArray[id]['check'] = "stop";

                // var packet_id = $('#packet_id_' + id).val();
                var packet_id = $('#stopgrowing').val();
                // console.log(packet_id);

                $('#hidden_packet_id').val(packet_id);
                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });
                // var formData = new FormData();
                // formData.append("id", packet_id);
                // $.ajax({
                //     headers: {
                //         'X-CSRF-TOKEN': "{{ csrf_token() }}",
                //     },
                //     type: "POST",
                //     url: "{{ route('stopTimer') }}",
                //     data: formData,
                //     processData: false,
                //     contentType: false,
                //     success: function() {
                //         $("#stop_" + id).attr("disabled", true);
                //     }
                // });
            }

            function start(id, notreset = 0) {

                // if (notreset == 0) {
                //     timeArray[id] = [];
                //     timeArray[id]['hour'] = 0;
                //     timeArray[id]['min'] = 0;
                //     timeArray[id]['sec'] = 0;
                //     timeArray[id]['dispHour'] = 0;
                //     timeArray[id]['dispMin'] = 0;
                //     timeArray[id]['dispSec'] = 0;
                //     timeArray[id]['timeoutId'] = null;
                //     timeArray[id]['check'] = "stop";
                // }

                // if (timeArray[id]['check'] === "stop") {
                //     timeArray[id]['timeoutId'] = window.setInterval(function() {
                //         timer(id);
                //     }, 1000);

                //     $("#start_" + id).hide();
                //     $("#stop_" + id).show();
                //     timeArray[id]['check'] = "start";

                // }
            }

            function clearAll() {
                for (var a = 1; a <= 999; a++) {
                    window.clearInterval(a);
                }
            }
            clearAll();
            $(".current_timer").each(function() {
                if ($(this).val()) {
                    if (isNaN((new Date($('#stop_timer_' + this.id.replace('old_timer_', '')).val())).getTime())) {
                        var date1 = new Date($(this).val());
                        var date2 = new Date();

                        var diff = date2.getTime() - date1.getTime();

                        var msec = diff;
                        var hh = Math.floor(msec / 1000 / 60 / 60);
                        msec -= hh * 1000 * 60 * 60;
                        var mm = Math.floor(msec / 1000 / 60);
                        msec -= mm * 1000 * 60;
                        var ss = Math.floor(msec / 1000);
                        msec -= ss * 1000;

                        var id = $('#packet_id_' + this.id.replace('old_timer_', '')).val();
                        timeArray[id] = [];
                        timeArray[id]['hour'] = hh;
                        timeArray[id]['min'] = mm;
                        timeArray[id]['sec'] = ss;
                        timeArray[id]['check'] = "stop";
                        timeArray[id]['timeoutId'] = null;
                        start(id, 1);
                    } else {
                        var date1 = new Date($(this).val());
                        var date2 = new Date($('#stop_timer_' + this.id.replace('old_timer_', '')).val());

                        var diff = date2.getTime() - date1.getTime();

                        var msec = diff;
                        var hh = Math.floor(msec / 1000 / 60 / 60);
                        msec -= hh * 1000 * 60 * 60;
                        var mm = Math.floor(msec / 1000 / 60);
                        msec -= mm * 1000 * 60;
                        var ss = Math.floor(msec / 1000);
                        msec -= ss * 1000;

                        var id = $('#packet_id_' + this.id.replace('old_timer_', '')).val();
                        if (ss < 10) {
                            ss = "0" + ss.toString();
                        } else {
                            ss = ss.toString();
                        }
                        if (mm < 10) {
                            mm = "0" + mm.toString();
                        } else {
                            mm = mm.toString();
                        }
                        if (hh < 10) {
                            hh = "0" + hh.toString();
                        } else {
                            hh = hh.toString();
                        }
                        $('#timer_' + id).html(hh + ":" + mm + ":" + ss);
                    }
                }
            });
            $(document).on('click', '.start_button', function() {
                // var id = this.id.replace('start_', '');
                // var packet_id = $('#packet_id_' + id).val();
                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });
                // var formData = new FormData();
                // formData.append("id", packet_id);
                // $.ajax({
                //     headers: {
                //         'X-CSRF-TOKEN': "{{ csrf_token() }}",
                //     },
                //     type: "POST",
                //     url: "{{ route('startTimer') }}",
                //     data: formData,
                //     processData: false,
                //     contentType: false,
                //     success: function() {
                //         window.location.reload();
                //     }
                // });
            });
            $('body').on('change', '.auto', function(e) {
                e.preventDefault();
                ApplyFilter(this.value);
                $('.detailall').val(this.value)
                $(this).val('');
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
                        url: "{{ route('searchLot') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(res) {
                            $('#experienceSection').html('');
                            $.each(res.lot_detail, function(i, val) {
                                var section = $(`<tr>
                                    <td style="vertical-align: middle;text-align:left">${res.name}</td>
                                    <td>${val.height}</td>
                                    <td>${val.length}</td>
                                    <td>${val.width}</td>
                                    <td>${val.pcs}</td>
                                    <td>${val.weight}</td>
                                </tr>`);
                                $('#experienceSection').append(section);
                            });
                        }
                    });
                }
            }
            // $('#returnModal').on('hidden.bs.modal', function(e) {
            //     $('#experienceSection').html('');
            //     var section = $(`<tr>
    //                         <td style="vertical-align: middle;text-align:left">Name</td>
    //                         <td>0</td>
    //                         <td>0</td>
    //                         <td>0</td>
    //                         <td>0</td>
    //                         <td>0</td>
    //                     </tr>`);
            //     $('#experienceSection').append(section);
            // });
            // $(document).ready(function() {
            //     $("#locations").change(function() {

            //         var dropdownval = $("#locations").val();
            //         switch (dropdownval) {
            //             case '1':
            //                 $("#employee").show();
            //                 $("#process").show();
            //                 $("#choco").hide();
            //                 break;
            //             case '2':
            //                 $("#employee").show();
            //                 $("#choco").show();
            //                 $("#process").hide();
            //                 break;
            //             case '3':
            //                 $("#employee").hide();
            //                 $("#choco").hide();
            //                 $("#process").hide();
            //                 break;
            //             case '4':
            //                 $("#employee").show();
            //                 $("#choco").hide();
            //                 $("#process").hide();
            //                 break;
            //             case '5':
            //                 $("#employee").show();
            //                 $("#choco").hide();
            //                 $("#process").hide();
            //                 break;
            //             case '6':
            //                 $("#employee").hide();
            //                 $("#choco").hide();
            //                 $("#process").hide();
            //                 break;
            //             default:
            //                 $("#location").show();
            //                 $("#choco").hide();
            //                 $("#process").hide();
            //                 $("#employee").hide();
            //                 break;
            //         }
            //     });
            // });
            // $(document).ready(function() {
            //     $("#recevie").change(function() {
            //         var test = $("#recevie").val();
            //         switch (test) {
            //             case '1':
            //                 $("#chocolate").show();
            //                 $("#loste").show();
            //                 $("#notes").hide();
            //                 $("#notese").hide();
            //                 $("#return").show();
            //                 $("#print").hide();
            //                 $("#weightloss").hide();
            //                 $("#process").hide();
            //                 $("#receiveemployee").show();

            //                 break;
            //             case '2':
            //                 $("#notes").show();
            //                 $("#notese").show();
            //                 $("#recevie").show();
            //                 $("#return").show();
            //                 $("#print").show();
            //                 $("#weightloss").show();
            //                 $("#chocolate").hide();
            //                 $("#process").hide();
            //                 $("#receiveemployee").show();
            //                 $("#loste").hide();
            //                 break;
            //             case '3':
            //                 $("#recevie").show();
            //                 $("#return").show();
            //                 $("#print").hide();
            //                 $("#weightloss").hide();
            //                 $("#chocolate").hide();
            //                 $("#process").hide();
            //                 $("#receiveemployee").hide();
            //                 $("#loste").show();
            //                 $("#notes").hide();
            //                 $("#notese").hide();

            //                 break;
            //             case '4':
            //                 $("#recevie").show();
            //                 $("#return").show();
            //                 $("#print").hide();
            //                 $("#weightloss").hide();
            //                 $("#chocolate").hide();
            //                 $("#process").hide();
            //                 $("#receiveemployee").show();
            //                 $("#chocolate").hide();
            //                 $("#notes").hide();
            //                 $("#notese").hide();

            //                 break;
            //             case '5':
            //                 $("#recevie").show();
            //                 $("#return").show();
            //                 $("#print").hide();
            //                 $("#weightloss").hide();
            //                 $("#chocolate").hide();
            //                 $("#process").hide();
            //                 $("#receiveemployee").show();
            //                 $("#chocolate").hide();
            //                 $("#notes").hide();
            //                 $("#notese").hide();

            //                 break;
            //             case '6':
            //                 $("#recevie").show();
            //                 $("#return").show();
            //                 $("#print").hide();
            //                 $("#weightloss").hide();
            //                 $("#chocolate").hide();
            //                 $("#process").hide();
            //                 $("#receiveemployee").hide();
            //                 $("#chocolate").hide();

            //                 break;
            //             default:
            //                 $("#recevie").show();
            //                 $("#return").show();
            //                 $("#print").show();
            //                 $("#weightloss").show();
            //                 $("#chocolate").hide();
            //                 $("#process").hide();
            //                 $("#receiveemployee").hide();
            //                 $("#chocolate").hide();
            //                 break;
            //         }
            //     });
            // });
            // $('body').on('change', '.rec', function(e) {
            //     e.preventDefault();
            //     ApplyFilterRecevie(this.value);
            //     $('.reciveall').val(this.value);
            //     $(this).val('');
            // });

            // function ApplyFilterRecevie(search) {
            //     if (search != null && search != "") {
            //         $.ajaxSetup({
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             }
            //         });
            //         var formData = new FormData();
            //         formData.append("search", search);
            //         $.ajax({
            //             headers: {
            //                 'X-CSRF-TOKEN': "{{ csrf_token() }}",
            //             },
            //             type: "POST",
            //             url: "{{ route('recevieLot') }}",
            //             data: formData,
            //             processData: false,
            //             contentType: false,
            //             success: function(res) {
            //                 $('#smartSection').html('');
            //                 $.each(res.lot_detail, function(i, val) {
            //                     var section = $(`<tr>
    //                         <td style="vertical-align: middle;text-align:left">${res.name}</td>
    //                         <td>${val.height}</td>
    //                         <td>${val.length}</td>
    //                         <td>${val.width}</td>
    //                         <td>${val.pcs}</td>
    //                         <td>${val.weight}</td>
    //                     </tr>`);
            //                     $('#smartSection').append(section);
            //                 });
            //             }
            //         });
            //     }
            // }
            // $('#receiveModal').on('hidden.bs.modal', function(e) {
            //     $('#smartSection').html('');
            //     var section = $(`<tr>
    //                         <td style="vertical-align: middle;text-align:left">Name</td>
    //                         <td>0</td>
    //                         <td>0</td>
    //                         <td>0</td>
    //                         <td>0</td>
    //                         <td>0</td>
    //                     </tr>`);
            //     $('#smartSection').append(section);
            // });
            // $('#AssignLot').click(function(e) {
            //     e.preventDefault();
            //     var url = $(this).attr('data-url');
            //     var id = $(this).attr('id');
            //     $.ajax({
            //         type: "POST",
            //         url: "{{ route('recevieLot') }}",
            //         data: {
            //             id: id
            //         },
            //         cache: false,
            //         success: function(data) {}
            //     });
            //     return false;
            // });
            // $('#close').click(function(e) {
            //     e.preventDefault();
            //     var formData = new FormData(document.getElementById("assignchocolateall"));
            //     $.ajax({
            //         headers: {
            //             'X-CSRF-TOKEN': "{{ csrf_token() }}",
            //         },
            //         type: "POST",
            //         url: "{{ url('assignchocolate') }}",
            //         data: formData,
            //         cache: false,
            //         processData: false,
            //         contentType: false,
            //         success: function(response) {
            //             $('#returnModal').modal('hide');
            //             location.reload();
            //         },
            //         error: function(response) {
            //             console.log(response);
            //             $.each(response.responseJSON.errors, function() {
            //                 swal('Record does not exist or is not accessible.');
            //             })
            //         }
            //     });
            // });
            // $('#closerecive').click(function(e) {
            //     e.preventDefault();
            //     var formData = new FormData(document.getElementById("recivechocolateall"));
            //     $.ajax({
            //         headers: {
            //             'X-CSRF-TOKEN': "{{ csrf_token() }}",
            //         },
            //         type: "POST",
            //         url: "{{ url('chocolaterecive') }}",
            //         data: formData,
            //         cache: false,
            //         processData: false,
            //         contentType: false,
            //         success: function(response) {
            //             $('#receiveModal').modal('hide');
            //             location.reload();
            //         },
            //         error: function(response) {
            //             $.each(response.responseJSON.errors, function() {
            //                 swal('Record does not exist or is not accessible.');
            //             })
            //         }
            //     });
            // });
        </script>
        <script>
            function growing_done() {
                var hidden_packet_id = $('#hidden_packet_id').val();
                var processresons_id = $('#processresons_id').val();
                var user_id = $('#user_id').val();
                var fileData = $('#image').prop('files')[0];
                var growing_time = $('#growing_time').val();
                // var file = $('#image').val();
                if (processresons_id == "0" && user_id == "0" && growing_time == "") {
                    document.getElementById("processresons_id_error").innerHTML = "Please Select Process & Reason";
                    document.getElementById("growing_time_error").innerHTML = "Growing Time is Required";
                    document.getElementById("user_id_error").innerHTML = "Please Select Employee";
                    return false;
                } else {
                    document.getElementById("processresons_id_error").innerHTML = "";
                    document.getElementById("user_id_error").innerHTML = "";
                    document.getElementById("growing_time_error").innerHTML = "";
                }
                if (processresons_id == "0") {
                    document.getElementById("processresons_id_error").innerHTML = "Please Select Process & Reason";
                    return false;
                } else {
                    document.getElementById("processresons_id_error").innerHTML = "";
                }

                if (user_id == "0") {
                    document.getElementById("user_id_error").innerHTML = "Please Select Employee";
                    return false;
                } else {
                    document.getElementById("user_id_error").innerHTML = "";
                }

                if (growing_time == "") {
                    document.getElementById("growing_time_error").innerHTML = "Growing Time is Required";
                    return false;
                } else {
                    document.getElementById("growing_time_error").innerHTML = "";
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var formData = new FormData();
                formData.append("id", hidden_packet_id);
                formData.append("processresons_id", processresons_id);
                formData.append("user_id", user_id);
                formData.append("growing_time", growing_time);
                formData.append("fileData", fileData);
                // formData.append("image", file);
                // $('#image').val($(this).data('image'));
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    type: "POST",
                    url: "{{ route('stopTimer') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    // contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
                    success: function() {
                        location.reload();
                    }
                });
            }

            function chocolateConfirm() {
                const heightArray = [];
                const lot_ids = [];
                var chocolate_start = $('#chocolate_start').prop('files')[0];
                var growing_done = $('#growing_done').prop('files')[0];
                var finish_type_1 = $('#finish_type_1').prop('files')[0];
                var finish_type_2 = $('#finish_type_2').prop('files')[0];

                var final_weight_ct = $('#final_weight_ct').val();
                var finish_type = $('#finish_type').val();
                var growing_time = $('#growing_time').val();
                var lotid = $('#lotid').val();
                var note = $('#note').val();

                countChocolateline = $('#countChocolateline').val();
                while (countChocolateline != 0) {
                    let ids = "#" + countChocolateline;
                    let lotids = "#hidden_lot_id_" + countChocolateline;

                    grow_height = $(ids).val();
                    lot_ids_val = $(lotids).val();
                    heightArray.push(grow_height);
                    lot_ids.push(lot_ids_val);
                    countChocolateline--;
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var formData = new FormData();
                // console.log(heightArray);
                formData.append("heightArray", heightArray);
                formData.append("lotid", lotid);
                formData.append("final_weight_ct", final_weight_ct);
                formData.append("finish_type", finish_type);
                formData.append("growing_time", growing_time);
                formData.append("note", note);
                formData.append("chocolate_start", chocolate_start);
                formData.append("growing_done", growing_done);
                formData.append("finish_type_1", finish_type_1);
                formData.append("finish_type_2", finish_type_2);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    type: "POST",
                    url: "{{ route('confirmChocolate') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function() {
                        location.reload();
                    }
                });
            }
        </script>
</body>

</html>
