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
                <li class="stockli mt-2"><a class=" mt-1" data-bs-toggle="modal"
                        data-bs-target="#receiveModal">Receive</a></li>
                <li class="stockli"><a href="{{ url('lotsdashboard') }}">Lots</a></li>
                <li class="stockli"><a href="{{ url('packetlaserdashboard') }}">Packets</a></li>
                <li class="stockli"><a class="mt-1" data-bs-toggle="modal" data-bs-target="#assignModal">Assign</a>
                </li>
                <li class="stockli"><a class="mt-1" data-bs-toggle="modal" data-bs-target="#returnModal">Return</a>
                </li>
               
            </ul>
            <div class="modal fade" id="receiveModal" aria-labelledby="receiveModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Receive</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ url('receivelaser') }}" method="post" enctype="multipart/form-data"
                            id="recivelaserall">
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
                                                                    <input type="hidden" class="recivealllaser"
                                                                        name="recivealllaser">
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
                                                        <div style="display:none"; id="receiveemployee"
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

                                                                    <label for="inline-radio1"
                                                                        class="form-check-label ">
                                                                        <input required type="radio"
                                                                            id="inline-radio1" name="returntype"
                                                                            value="0"
                                                                            class="form-check-input">Stock
                                                                    </label>
                                                                    <label for="inline-radio2"
                                                                        class="form-check-label ">
                                                                        <input required type="radio"
                                                                            id="inline-radio2" name="returntype"
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
                                                                        name="print" value="0"
                                                                        class="form-check-input">
                                                                    <input type="radio" id="inline-radio1"
                                                                        name="print" value="1"
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
                                <button type="button" id="closerecivelaser"
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


                            <form action="{{ url('assignlaser') }}" id="assignchocolateall" 
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
                                                        <input type="hidden" class="detailallassign" name="detailallassign">
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
                                                        <label for="select" class=" form-control-label">process :
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-md-6" id="locations">
                                                            <label for="inline-radio1" class="form-check-label" >
                                                                    <input type="radio"  name="process" value="shape" class="form-check-input" >Shape
                                                                </label>
                                                                <label for="inline-radio2" class="form-check-label" >
                                                                    <input type="radio"  name="process" value="dlc" class="form-check-input">DLC
                                                                </label>
                                                                <label for="inline-radio3" class="form-check-label" >
                                                                    <input type="radio"  name="process" value="final" class="form-check-input">Final
                                                                </label>
                                                    
                                                    </div>
                                                </div>
                                                <div style="display:none"; id="employee" class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="select" class=" form-control-label" >Location :
                                                        </label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <select  class="custom-select d-block w-100"
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
                                                                    
                                    
                                                <div style="display:none"; id="process" class="row form-group">
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
                                                <div  style="display:none"; id="machine" class="row form-group">
                                                    <div class="col col-md-3"><label for="select"
                                                            class=" form-control-label">Machine : </label></div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="custom-select d-block w-100" value=""
                                                            name="machine">
                                                            <option value="0">Please select Machine</option>
                                                            <?php $machine = App\Models\machine::get(); ?>
                                                            @foreach ($machine as $process)
                                                                <option value="{{ $process->mname }}">{{ $process->mname }}
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
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="returnModal" aria-labelledby="returnModalLabel" aria-hidden="true"
                        role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Scan For Return</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="{{ url('laserreturn') }}" method="post" enctype="multipart/form-data"
                                    id="returnall">
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
                                                                    id="email-input" class="form-control recl"></p>
                                                            <input type="hidden" class="returnalllaser" name="returnalllaser">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                            </div>
                                            
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">

                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label
                                                                    class=" form-control-label">Process</label></div>
                                                            <div class="col col-md-6">
                                                                <div class="form-check-inline form-check">
                                                                    <label for="inline-radio1" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio1"
                                                                            name="process" value="shape"
                                                                            class="form-check-input" checked="">Shape
                                                                    </label>
                                                                    <label for="inline-radio2" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio2"
                                                                            name="process" value="dlc"
                                                                            class="form-check-input">DLC
                                                                    </label>
                                                                    <label for="inline-radio3" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio3"
                                                                            name="process" value="final"
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
                                                                            name="netprocess" value="shape"
                                                                            class="form-check-input" checked="">Shape
                                                                    </label>
                                                                    <label for="inline-radio2" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio2"
                                                                            name="netprocess" value="dlc"
                                                                            class="form-check-input">DLC
                                                                    </label>
                                                                    <label for="inline-radio3" class="form-check-label ">
                                                                        <input type="radio" id="inline-radio3"
                                                                            name="netprocess" value="final"
                                                                            class="form-check-input">Final
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="select"
                                                                    class=" form-control-label">Employee : </label></div>
                                                            <div class="col-12 col-md-6">

                                                                <select class="custom-select d-block w-100" name="user_id">
                                                                    <?php $employee = App\Models\userlogin::get(); ?>
                                                                    @foreach ($employee as $eans)
                                                                        <option value="0">Please select</option>
                                                                        <option value="{{ $eans->id }}">
                                                                            {{ $eans->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="select"
                                                                    class=" form-control-label">DLC Weight(Ct) : </label></div>
                                                            <div class="col-12 col-md-6">
                                                                <p class="form-control-static"><input type="text"
                                                                        id="email-input" name="dlcweight"
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
                                                                                    <tbody id="returnsection">
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
                                            <button type="button" id="closereturn" class="btn btn-secondary">Create</button>
                                        <button type="reset" class="btn btn-light"
                                                >Cancel</button>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
            </div>
          
        </div>

    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
    <script src="{{ URL::asset('admin/assets/js/lib/chosen/chosen.jquery.min.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script>
           

            $('body').on('change', '.auto', function(e) {
                e.preventDefault();
                ApplyFilter(this.value);
                $('.detailallassign').val(this.value)
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
            $('#returnModal').on('hidden.bs.modal', function(e) {
                $('#experienceSection').html('');
                var section = $(`<tr>
                                    <td style="vertical-align: middle;text-align:left">Name</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>`);
                $('#experienceSection').append(section);
            });


            $(document).ready(function(){
                $("#locations").change(function () {

                var dropdownval = $("#locations").val();
                switch (dropdownval) {
                    case '1':
                    $("#employee").show();
                    $("#process").show();
                    $("#machine").show();
                    $("#choco").hide();
                    break;
                    case '2':
                    $("#employee").show();
                    $("#choco").show();
                    $("#process").show();
                    $("#machine").show();
                    break;
                    case '3':
                    $("#employee").show();
                    $("#choco").hide();
                    $("#process").show();
                    $("#machine").show();
                    break;
                    case '4':
                    $("#employee").show();
                    $("#choco").hide();
                    $("#process").show();
                    $("#machine").show();
                    break;
                    case '5':
                    $("#employee").show();
                    $("#choco").hide();
                    $("#process").show();
                    $("#machine").show();
                    break;
                    case '6':
                    $("#employee").show();
                    $("#choco").hide();
                    $("#process").show();
                    $("#machine").show();
                    break;
                    default:
                    $("#location").show();
                    $("#choco").hide();
                    $("#process").show();
                    $("#employee").show();
                    $("#machine").show();
                    break;
                    }
                }
                );
            });
            $(document).ready(function(){
                $("#recevie").change(function () {
                var test = $("#recevie").val();
                switch (test) {
                    case '1':
                    $("#chocolate").show();
                    $("#loste").show();
                    $("#notes").hide();
                    $("#notese").hide();
                    $("#return").show();
                    $("#print").hide();
                    $("#weightloss").hide();
                    $("#process").hide();
                    $("#receiveemployee").show();

                    break;
                    case '2':
                    $("#notes").show();
                    $("#notese").show();
                    $("#recevie").show();
                    $("#return").show();
                    $("#print").show();
                    $("#weightloss").show();
                    $("#chocolate").hide();
                    $("#process").hide();
                    $("#receiveemployee").show();
                    $("#loste").hide();
                    break;
                    case '3':
                    $("#recevie").show();
                    $("#return").show();
                    $("#print").hide();
                    $("#weightloss").hide();
                    $("#chocolate").hide();
                    $("#process").hide();
                    $("#receiveemployee").hide();
                    $("#loste").show();
                    $("#notes").hide();
                    $("#notese").hide();

                    break;
                    case '4':
                    $("#recevie").show();
                    $("#return").show();
                    $("#print").hide();
                    $("#weightloss").hide();
                    $("#chocolate").hide();
                    $("#process").hide();
                    $("#receiveemployee").show();
                    $("#chocolate").hide();
                    $("#notes").hide();
                    $("#notese").hide();

                    break;
                    case '5':
                    $("#recevie").show();
                    $("#return").show();
                    $("#print").hide();
                    $("#weightloss").hide();
                    $("#chocolate").hide();
                    $("#process").hide();
                    $("#receiveemployee").show();
                    $("#chocolate").hide();
                    $("#notes").hide();
                    $("#notese").hide();

                    break;
                    case '6':
                    $("#recevie").show();
                    $("#return").show();
                    $("#print").hide();
                    $("#weightloss").hide();
                    $("#chocolate").hide();
                    $("#process").hide();
                    $("#receiveemployee").hide();
                    $("#chocolate").hide();

                    break;
                    default:
                    $("#recevie").show();
                    $("#return").show();
                    $("#print").show();
                    $("#weightloss").show();
                    $("#chocolate").hide();
                    $("#process").hide();
                    $("#receiveemployee").hide();
                    $("#chocolate").hide();
                    break;
                    }
                }
                );
            });


            $('body').on('change', '.rec', function(e) {
                e.preventDefault();
                ApplyFilterRecevie(this.value);
                $('.recivealllaser').val(this.value);
                $(this).val('');
            });

            function ApplyFilterRecevie(search) {
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
                        url: "{{ route('recevieLot') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(res) {
                            $('#smartSection').html('');
                            $.each(res.lot_detail, function(i, val) {
                                var section = $(`<tr>
                                    <td style="vertical-align: middle;text-align:left">${res.name}</td>
                                    <td>${val.height}</td>
                                    <td>${val.length}</td>
                                    <td>${val.width}</td>
                                    <td>${val.pcs}</td>
                                    <td>${val.weight}</td>
                                </tr>`);
                                $('#smartSection').append(section);
                            });
                        }
                    });
                }
            }
            $('#receiveModal').on('hidden.bs.modal', function(e) {
                $('#smartSection').html('');
                var section = $(`<tr>
                                    <td style="vertical-align: middle;text-align:left">Name</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>`);
                $('#smartSection').append(section);
            });

            $('#AssignLot').click(function(e){
                e.preventDefault();
                var url = $(this).attr('data-url');
                var id = $(this).attr('id');
                $.ajax({
                        type: "POST",
                        url: "{{ route('recevieLot') }}",
                        data: {id:id},
                        cache: false,
                        success: function(data){
                        }
                        });
                return false;
            });
            $('#close').click(function(e){
                e.preventDefault();
                var formData = new FormData(document.getElementById("assignchocolateall"));
                $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        type: "POST",
                        url: "{{ url('assignlaser') }}",
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(response){

                            $('#assignModal').modal('hide');
                            location.reload();
                        },
                        error:function (response){
                            $.each(response.responseJSON.errors,function(){
                                swal('Record does not exist or is not accessible.');
                            })

                        }
                    });
            });
            $('#closerecivelaser').click(function(e) {
                e.preventDefault();
                var formData = new FormData(document.getElementById("recivelaserall"));

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    type: "POST",
                    url: "{{ url('receivelaser') }}",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#receiveModal').modal('hide');
                        location.reload();
                    },
                        error:function (response){
                            $.each(response.responseJSON.errors,function(){
                                swal('Record does not exist or is not accessible.');
                            })

                        }
                });
            });
    // *********return**********
     $('body').on('change', '.recl', function(e) {
        e.preventDefault();
        ApplyFilterreturn(this.value);
        var text= $('.returnalllaser').val(this.value)
        $(this).val('');
        // console.log(text);
    });
    function ApplyFilterreturn(search) {
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
                url: "{{ route('returnlot') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    console.log(res);
                    $('#returnsection').html('');
                    $.each(res.lot_detail, function(i, val) {
                        var section = $(`<tr>
                                    <td style="vertical-align: middle;text-align:left">${res.name}</td>
                                    <td>${val.height}</td>
                                    <td>${val.length}</td>
                                    <td>${val.width}</td>
                                    <td>${val.pcs}</td>
                                    <td>${val.weight}</td>
                                </tr>`);
                        $('#returnsection').append(section);
                    });
                }
            });
        }
    }
    $('#closereturn').click(function(e) {
        e.preventDefault();
        var formData = new FormData(document.getElementById("returnall"));
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            type: "POST",
            url: "{{ url('laserreturn') }}",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#returnModal').modal('hide');
                location.reload();
            },
            error: function(response) {
                $.each(response.responseJSON.errors, function() {
                    swal('Record does not exist or is not accessible.');
                })
            }
        });
    }); 

        </script>
         {{-- // *********return**********
     $('body').on('change', '.recl', function(e) {
        e.preventDefault();
        ApplyFilter(this.value);
        var text= $('.returnalllaser').val(this.value)
        $(this).val('');
        // console.log(text);
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
                url: "{{ route('returnlot') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    // console.log(res);
                    $('#returnsection').html('');
                    $.each(res.lot_detail, function(i, val) {
                        var section = $(`<tr>
                                    <td style="vertical-align: middle;text-align:left">${res.name}</td>
                                    <td>${val.height}</td>
                                    <td>${val.length}</td>
                                    <td>${val.width}</td>
                                    <td>${val.pcs}</td>
                                    <td>${val.weight}</td>
                                </tr>`);
                        $('#returnsection').append(section);
                    });
                }
            });
        }
    }
    $('#closereturn').click(function(e) {
        e.preventDefault();
        var formData = new FormData(document.getElementById("returnall"));
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            type: "POST",
            url: "{{ url('laserreturn') }}",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {

                $('#returnModal').modal('hide');
                location.reload();
            },
            error: function(response) {
                $.each(response.responseJSON.errors, function() {
                    swal('Record does not exist or is not accessible.');
                })
            }
        });
    }); --}}


</body>


</html>
