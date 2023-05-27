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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/paginate.css') }}">
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

            @if (Auth::check())
                <ul class="stockul">
                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager' || Auth::user()->role == 'laser user')
                        <li class="stockli mt-2 d-block d-md-inline-block"><a
                                href="{{ url('createchocolatedashboard') }}">CreateChocolate</a></li>
                    @endif
                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                        <li class="stockli mt-2 d-block d-md-inline-block"><a href="{{ url('lots') }}">EndGrowing</a>
                        </li>
                    @endif

                    {{-- @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                            <li class="stockli"><a class="ms-1 mt-1" data-bs-toggle="modal" data-bs-target="#returnModal">AssignLot</a></li>
                        @endif

                        @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                            <li class="stockli"><a class="ms-1 mt-1" data-bs-toggle="modal" data-bs-target="#receiveModal">ReciveLot</a></li>
                        @endif --}}

                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                        <li class="stockli mt-2 d-block d-md-inline-block"><a
                                href="{{ url('chocolateimage') }}">Images</a></li>
                    @endif

                </ul>
            @endif

            {{-- <div class="modal fade" id="receiveModal" tabindex="-1" aria-labelledby="receiveModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Receive</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-11">
                                        <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#largeModal">Receive</button>
                                    </div>
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return a lot?
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
                                    <div class="col-lg-12">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row">
                                                    <div class="col-lg-3 float-left">
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
                                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Location : </label></div>
                                                                    <div class="col-12 col-md-6">
                                                                        <select class="custom-select d-block w-100" required="">
                                                                            <option value="0">Please select</option>
                                                                            <?php $data = App\Models\location::get(); ?>
                                                                            @foreach ($data as $ans)
                                                                                <option value="{{ $ans->id }}">
                                                                                    {{ $ans->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-12 col-md-2"><label class=" form-control-label">Return Type</label></div>
                                                    <div class="col-12 col-md-10">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked>Stock
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Seeds
                                                            </label>
                                                        </div>
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
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Lot</a>
                                                    </li>
                                                </ul>
                                                <div class="area" >
                                                    <input type="text-area" style="width: 100%; height:100px; !important" >
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
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                                                    <div class="table-responsive">
                                                                    <table id="dataTable" class="table">
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
                                                                            <tr id="default_row">
                                                                                <td>
                                                                                    <input type="text" id="name_0"
                                                                                        class="auto" name="name[]" />
                                                                                    <input type="hidden" id="id_0">
                                                                                </td>
                                                                                <td><input type="text" id="height_0"
                                                                                        name="height[]" /></td>
                                                                                <td><input type="text" id="length_0"
                                                                                        name="length[]" /></td>
                                                                                <td><input type="text" id="width_0"
                                                                                        name="width[]" /></td>
                                                                                <td><input type="text" id="shape_0"
                                                                                        name="shape[]" /></td>
                                                                                <td><input type="text" id="weight_0"
                                                                                        name="weight[]" /></td>
                                                                                <td><input type="text" id="height_1" /></td>
                                                                                <td><input type="text" id="length_1" /></td>
                                                                                <td><input type="text" id="width_1" /></td>
                                                                                <td><input type="text" id="shape_1" /></td>
                                                                                <td><input type="text" id="pcs_1" /></td>
                                                                                <td><input type="text" id="weight_1" /></td>
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

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" id="submitBtn"
                                class="btn btn-secondary">Create</button>
                            <button type="reset" class="btn btn-light"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="modal fade" id="returnModal" tabindex="-1" aria-labelledby="returnModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Scan For Assign</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-11">
                                        <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                    </div>
                                    <div class="col-lg-1">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#largeModal">Assign</button>
                                    </div>
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document" style="width: 53%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="largeModalLabel">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure you want to Return a lot?
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
                                    <div class="col-lg-3 float-left">
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
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Location : </label></div>
                                                    <div class="col-12 col-md-6">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Please select</option>
                                                            <?php $data = App\Models\Location::get(); ?>
                                                            @foreach ($data as $ans)
                                                                <option value="{{ $ans->id }}">
                                                                    {{ $ans->name }}</option>
                                                            @endforeach
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
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Lot</a>
                                                    </li>

                                                </ul>
                                                <div class="area" >
                                                    <input type="text-area" style="width: 100%; height:100px; !important" >
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
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                                                    <div class="table-responsive">
                                                                    <table id="dataTable" class="table">
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
                                                                            <tr id="default_row">
                                                                                <td>
                                                                                    <input type="text" id="name_0"
                                                                                        class="auto" name="name[]" />
                                                                                    <input type="hidden" id="id_0">
                                                                                </td>
                                                                                <td><input type="text" id="height_0"
                                                                                        name="height[]" /></td>
                                                                                <td><input type="text" id="length_0"
                                                                                        name="length[]" /></td>
                                                                                <td><input type="text" id="width_0"
                                                                                        name="width[]" /></td>
                                                                                <td><input type="text" id="shape_0"
                                                                                        name="shape[]" /></td>
                                                                                <td><input type="text" id="weight_0"
                                                                                        name="weight[]" /></td>
                                                                                <td><input type="text" id="height_1" /></td>
                                                                                <td><input type="text" id="length_1" /></td>
                                                                                <td><input type="text" id="width_1" /></td>
                                                                                <td><input type="text" id="shape_1" /></td>
                                                                                <td><input type="text" id="pcs_1" /></td>
                                                                                <td><input type="text" id="weight_1" /></td>
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

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" id="submitBtn"
                                class="btn btn-secondary">Create</button>
                            <button type="reset" class="btn btn-light"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    {{-- <div class="col-md-4">
                        <h4 class="headerborder1">Chocolate / New</h4>
                    </div> --}}
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-9">

                    </div>
                    {{-- <div class="col-md-3">
                        <a href=""><button type="button" class="btn btn-dark text-white mt-1">Draft</button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1">Requested</button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1">Approved</button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1">Cancelled</button></a>
                    </div> --}}
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
                                {{-- <div class="col col-md-12">
                                    <a href="#">
                                        <h2>New</h2>
                                    </a>
                                </div> --}}
                                @if (Auth::check())
                                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body card-block">
                                                    @if (Session::has('message'))
                                                        <div class="alert alert-success">
                                                            <i class="fa-lg fa fa-warning"></i>
                                                            {!! session('message') !!}
                                                        </div>
                                                    @elseif(Session::has('error'))
                                                        <div class="alert alert-danger">
                                                            <i class="fa-lg fa fa-warning"></i>
                                                            {!! session('error') !!}
                                                        </div>
                                                    @endif
                                                    <form action="{{ url('insertchocolatedashboard') }}"
                                                        method="post" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        {{ csrf_field() }}
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label
                                                                    class=" form-control-label">Lot No : </label></div>
                                                            <div class="col-12 col-md-9">

                                                                <input type="no" id="email-input" name="mno"
                                                                    placeholder="lot No.." required
                                                                    class="form-control">
                                                                {{-- <?php $lot = App\Models\LotMaster::get(); ?>
                                                        <select class="custom-select d-block w-100" name="mno" required>
                                                            <option value="0">Please select Lotno</option>
                                                            @foreach ($lot as $lotans)
                                                            <option value="{{ $lotans->name }}">{{ $lotans->name }}</option>
                                                            @endforeach
                                                        </select> --}}


                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="select"
                                                                    class=" form-control-label">Machine No :</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <?php $machine = App\Models\machine::get(); ?>
                                                                <select class="custom-select d-block w-100"
                                                                    name="machinename" required>
                                                                    <option value="">Please select Machine
                                                                    </option>
                                                                    @foreach ($machine as $ans)
                                                                        <option value="{{ $ans->mname }}">
                                                                            {{ $ans->mname }}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label
                                                                    class=" form-control-label">Start Date : </label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input class="datetimepicker" type="datetime-local"
                                                                    required name="stime"
                                                                    value="{{ $now }}">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label
                                                                    class=" form-control-label">Chocolate Image1 :
                                                                </label></div>
                                                            <div class="col-12 col-md-9" style="display:flex;">
                                                                <input type="file" name="img" required
                                                                    accept="image/*" webcam>
                                                                <label class=" form-control-label pe-2">Chocolate
                                                                    Image2 : </label>
                                                                <input type="file" required name="image"
                                                                    accept="image/*" webcam>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-secondary btn-sm float-left"> Save </button>
                                                        <template>
                                                            <input type="date" v-model="dateString" />
                                                            <input type="time" v-model="timeString" />
                                                        </template>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                @endif
                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">Chocolate
                                            Lines</a>
                                    </li>

                                </ul>
                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <table id="bootstrap-data-table"
                                                        class="table table-responsive-lg">
                                                        <thead>
                                                            <tr>

                                                                <th scope="col">No</th>
                                                                <th scope="col">Lot No</th>
                                                                <th scope="col">Machineno</th>
                                                                <th scope="col">Startdate</th>
                                                                <th scope="col">Starttime</th>
                                                                <th scope="col">Image</th>
                                                                <th scope="col">Image</th>
                                                                {{-- <th scope="col">Image</th> --}}

                                                            </tr>
                                                        </thead>
                                                        {{-- <?php $data = App\Models\chocolate::get(); ?> --}}
                                                        <tbody>
                                                            @foreach ($lot as $ans)
                                                                <tr>
                                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                                    <td>{{ $ans->name }}</td>
                                                                    <td>{{ $ans->machineno }}</td>
                                                                    <td>{{ $ans->startdate }}</td>
                                                                    <td>{{ $ans->starttime }}</td>
                                                                    <td><img src="{{ url('item_img') }}/{{ $ans->img1 }}"
                                                                            style="width: 70px; height: 70px;"></td>
                                                                    <td><img src="{{ url('item_images') }}/{{ $ans->img2 }}"
                                                                            style="width: 70px; height: 70px;"></td>
                                                                    {{-- <td><img src="{{url('images3')}}/{{$ans->img3}}" style="width: 70px; height: 70px;"></td> --}}
                                                                </tr>
                                                            @endforeach
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
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
        <script setup>
            import {
                computed,
                ref
            } from "vue";

            function completeZero(value) {
                return (value < 10 ? "0" : "") + value;
            }

            const now = new Date();

            const dateString = ref(
                `${now.getFullYear()}-${completeZero(now.getMonth() + 1)}-${completeZero(
                now.getDate()
              )}`
            );
            const timeString = ref(
                `${completeZero(now.getHours())}:${completeZero(now.getMinutes())}`
            );

            const date = computed(
                () => new Date(`${dateString.value} ${timeString.value}`)
            );
        </script>


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
        {{-- <script>
            function ApplyFilter(search) {
                var batch_id = $('#batch_id').val();
                if (batch_id != null && batch_id != "") {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var formData = new FormData();
                    formData.append("batch_id", batch_id);
                    formData.append("batch_code", search);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        type: "POST",
                        url: "{{ route('getlot') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(res) {

                            if (res.length > 0) {
                                $("#default_row").remove();
                                res.forEach(function(e) {
                                    var arr = [];
                                    var found = 0;
                                    $('.uid').each(function() {
                                        var myVal = $(this).val();
                                        if (e.id == myVal)
                                            found++;
                                    });

                                    if (!found) {
                                        var table = document.getElementById('dataTable');
                                        var rowCount = table.rows.length - 1;
                                        if (rowCount == 0) {
                                            var row = table.insertRow(-1);
                                            row.className = "hide";

                                            var cell1 = row.insertCell(-1);
                                            var element = document.createElement("input");
                                            element.type = "text";
                                            element.value = e.name;
                                            element.id = "name_" + rowCount;
                                            element.className = "name auto";
                                            element.name = "name[]";

                                            var elementuid = document.createElement("input");
                                            elementuid.type = "hidden";
                                            elementuid.value = e.id;
                                            elementuid.id = "uid_" + rowCount;
                                            elementuid.className = "uid";
                                            elementuid.name = "uid[]";
                                            cell1.appendChild(elementuid);


                                            var elementid = document.createElement("input");
                                            elementid.type = "hidden";
                                            elementid.value = e.batch_id;
                                            elementid.id = "id_" + rowCount;
                                            elementid.className = "id";
                                            elementid.name = "id[]";
                                            cell1.appendChild(element);
                                            cell1.appendChild(elementid);
                                            //cellid.appendChild(elementid);

                                            var cell2 = row.insertCell(-1);
                                            var element2 = document.createElement("input");
                                            element2.type = "text";
                                            element2.value = e.height;
                                            element2.id = "height_" + rowCount;
                                            element2.className = "height";
                                            element2.name = "height[]";
                                            cell2.appendChild(element2);

                                            var cell3 = row.insertCell(-1);
                                            var element3 = document.createElement("input");
                                            element3.type = "text";
                                            element3.value = e.length;
                                            element3.id = "length_" + rowCount;
                                            element3.className = "length";
                                            element3.name = "length[]";
                                            cell3.appendChild(element3);

                                            var cell4 = row.insertCell(-1);
                                            var element4 = document.createElement("input");
                                            element4.type = "text";
                                            element4.value = e.width;
                                            element4.id = "width_" + rowCount;
                                            element4.className = "width";
                                            element4.name = "width[]";
                                            cell4.appendChild(element4);

                                            var cell5 = row.insertCell(-1);
                                            var element5 = document.createElement("input");
                                            element5.type = "text";
                                            element5.value = e.shape;
                                            element5.id = "shape_" + rowCount;
                                            element5.className = "shape";
                                            element5.name = "shape[]";
                                            cell5.appendChild(element5);

                                            var cell7 = row.insertCell(-1);
                                            var element7 = document.createElement("input");
                                            element7.type = "text";
                                            element7.value = e.weight;
                                            element7.id = "weight_" + rowCount;
                                            element7.className = "weight";
                                            element7.name = "weight[]";
                                            cell7.appendChild(element7);
                                        } else {
                                            rowCount = rowCount - 1;
                                            $("#name_" + rowCount).val(e.name);
                                            $("#uid_" + rowCount).val(e.id);
                                            $("#id_" + rowCount).val(e.id);

                                            $("#height_" + rowCount).val(e.height);
                                            $("#length_" + rowCount).val(e.length);
                                            $("#width_" + rowCount).val(e.width);
                                            $("#shape_" + rowCount).val(e.shape);
                                            $("#weight_" + rowCount).val(e.weight);
                                        }
                                        //***********************************************
                                        //add new row blanck
                                        var table = document.getElementById('dataTable');
                                        var rowCount = table.rows.length - 1;
                                        //console.log("second rowCount = ",rowCount);
                                        var row = table.insertRow(-1);
                                        row.className = "hide";
                                        //console.log(e);

                                        var cell1 = row.insertCell(-1);
                                        var element = document.createElement("input");
                                        element.type = "text";
                                        //element.value = e.name;
                                        element.id = "name_" + rowCount;
                                        element.className = "name auto";
                                        element.name = "name[]";
                                        //cell1.appendChild(element);

                                        //var cellid = row.insertCell(0);
                                        var elementuid = document.createElement("input");
                                        elementuid.type = "hidden";
                                        //elementuid.value = e.id;
                                        elementuid.id = "uid_" + rowCount;
                                        elementuid.className = "uid";
                                        elementuid.name = "uid[]";
                                        cell1.appendChild(elementuid);


                                        var elementid = document.createElement("input");
                                        elementid.type = "hidden";
                                        //elementid.value = e.batch_id;
                                        elementid.id = "id_" + rowCount;
                                        elementid.className = "id";
                                        elementid.name = "id[]";
                                        cell1.appendChild(element);
                                        cell1.appendChild(elementid);
                                        //cellid.appendChild(elementid);

                                        var cell2 = row.insertCell(-1);
                                        var element2 = document.createElement("input");
                                        element2.type = "text";
                                        //element2.value = e.height;
                                        element2.id = "height_" + rowCount;
                                        element2.className = "height";
                                        element2.name = "height[]";
                                        cell2.appendChild(element2);

                                        var cell3 = row.insertCell(-1);
                                        var element3 = document.createElement("input");
                                        element3.type = "text";
                                        //element3.value = e.length;
                                        element3.id = "length_" + rowCount;
                                        element3.className = "length";
                                        element3.name = "length[]";
                                        cell3.appendChild(element3);

                                        var cell4 = row.insertCell(-1);
                                        var element4 = document.createElement("input");
                                        element4.type = "text";
                                        //element4.value = e.width;
                                        element4.id = "width_" + rowCount;
                                        element4.className = "width";
                                        element4.name = "width[]";
                                        cell4.appendChild(element4);

                                        var cell5 = row.insertCell(-1);
                                        var element5 = document.createElement("input");
                                        element5.type = "text";
                                        //element5.value = e.shape;
                                        element5.id = "shape_" + rowCount;
                                        element5.className = "shape";
                                        element5.name = "shape[]";
                                        cell5.appendChild(element5);

                                        var cell7 = row.insertCell(-1);
                                        var element7 = document.createElement("input");
                                        element7.type = "text";
                                        //element7.value = e.weight;
                                        element7.id = "weight_" + rowCount;
                                        element7.className = "weight";
                                        element7.name = "weight[]";
                                        cell7.appendChild(element7);

                                        $("#name_" + rowCount).focus();
                                    } else {
                                        alert('not valid');
                                    }
                                });
                            } else {
                                alert('please select valid batch');
                            }
                        }
                    });
                }
            }

            $('body').on('change', '.auto', function(e) {
                e.preventDefault();
                ApplyFilter(this.value);
                $(this).val('');
            });
            $(document).ready(function() {
                $("#submitBtn").click(function() {
                    $("#myForm").submit(); // Submit the form
                });
            });
            $(window).on('shown.bs.modal', function() {
                $('#addpacketsModal').modal('show');
                var table = document.getElementById('dataTable');
                var rowCount = table.rows.length - 1;
                if (rowCount > 1) {
                    $("#dataTable .hide").remove();
                    addDefaultRow();
                }
                $("#name_0").val('');
                $("#id_0").val('');
                $("#height_0").val('');
                $("#length_0").val('');
                $("#width_0").val('');
                $("#shape_0").val('');
                $("#weight_0").val('');
                $("#batch_id").val(0);
            });
            $("#batch_id").change(function() {
                var table = document.getElementById('dataTable');
                var rowCount = table.rows.length - 1;
                if (rowCount > 1) {
                    $("#dataTable .hide").remove();
                    addDefaultRow();
                }
                if (this.value != null && this.value != 0) {
                    //$("#search").focus();
                    $("#name_0").focus();
                }
            });

            function addDefaultRow() {
                var table = document.getElementById('dataTable');
                var rowCount = table.rows.length - 1;
                var row = table.insertRow(-1);
                row.className = "hide";

                var cell1 = row.insertCell(-1);
                var element = document.createElement("input");
                element.type = "text";
                element.id = "name_" + rowCount;
                element.className = "name auto";
                element.name = "name[]";

                var elementuid = document.createElement("input");
                elementuid.type = "hidden";
                elementuid.id = "uid_" + rowCount;
                elementuid.className = "uid";
                elementuid.name = "uid[]";
                cell1.appendChild(elementuid);


                var elementid = document.createElement("input");
                elementid.type = "hidden";
                elementid.id = "id_" + rowCount;
                elementid.className = "id";
                elementid.name = "id[]";
                cell1.appendChild(element);
                cell1.appendChild(elementid);

                var cell2 = row.insertCell(-1);
                var element2 = document.createElement("input");
                element2.type = "text";
                element2.id = "height_" + rowCount;
                element2.className = "height";
                element2.name = "height[]";
                cell2.appendChild(element2);

                var cell3 = row.insertCell(-1);
                var element3 = document.createElement("input");
                element3.type = "text";
                element3.id = "length_" + rowCount;
                element3.className = "length";
                element3.name = "length[]";
                cell3.appendChild(element3);

                var cell4 = row.insertCell(-1);
                var element4 = document.createElement("input");
                element4.type = "text";
                element4.id = "width_" + rowCount;
                element4.className = "width";
                element4.name = "width[]";
                cell4.appendChild(element4);

                var cell5 = row.insertCell(-1);
                var element5 = document.createElement("input");
                element5.type = "text";
                element5.id = "shape_" + rowCount;
                element5.className = "shape";
                element5.name = "shape[]";
                cell5.appendChild(element5);

                var cell7 = row.insertCell(-1);
                var element7 = document.createElement("input");
                element7.type = "text";
                element7.id = "weight_" + rowCount;
                element7.className = "weight";
                element7.name = "weight[]";
                cell7.appendChild(element7);
            }
            @if (isset($id))
                var url_p = '{{ route('createlotprint', ':id') }}';
                var id_p = "{{ $id }}";
                url_p = url_p.replace(':id', id_p);
                window.open(url_p, "_blank");

                var url_r = '{{ route('batch-module') }}';
                window.location.href = url_r;
            @endif
        </script> --}}
</body>

</html>
