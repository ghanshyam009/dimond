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
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/paginate.css') }}">

    <style>
        .navbar-nav li:hover>ul.dropdown-menu {
            display: block;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
        }

        /* rotate caret on hover */

        .dropdown-menu>li>a:hover:after {
            text-decoration: underline;
            transform: rotate(-90deg);
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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Seeds</span></a>
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
                        class="fa-solid fa-table-columns"></i></a> <a href="{{ url('seeds1') }}">Seeds</a></strong>
            <ul class="stockul">
                <li class="stockli"><a class="ms-1 mt-1" data-bs-toggle="modal" data-bs-target="#addpacketsModal">Add
                        Packets</a></li>
            </ul>
            <div class="modal fade" id="addpacketsModal" tabindex="-1" aria-labelledby="addpacketsModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addpacketsModalLabel">Add Packets</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('insertseeds') }}" method="post" enctype="multipart/form-data"
                                target="_blank">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col-12 col-md-2"><label for="select"
                                                        cclass=" form-control-label">Batch</label></div>
                                                <div class="col-12 col-md-10">

                                                    <?php $batch = App\Models\Bactch::get(); ?>
                                                    <select class="custom-select d-block w-100" name="batch_id"
                                                        required>
                                                        <option value="0">Please select</option>
                                                        @foreach ($batch as $ans)
                                                            <option value="{{ $ans->id }}">{{ $ans->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>

                                                </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="select"
                                                        cclass=" form-control-label">Pcs</label></div>
                                                <div class="col-12 col-md-10">

                                                    <select class="custom-select d-block w-100" id="experienceNo"
                                                        name="pcs" required>
                                                        <option value="0">Please select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-2"><label for="select"
                                                        class=" form-control-label">Shape</label></div>
                                                <div class="col-12 col-md-10">
                                                    <?php $shape = App\Models\shap::get(); ?>


                                                    <select class="custom-select d-block w-100" name="shape"
                                                        required>
                                                        <option value="0">Please select</option>
                                                        @foreach ($shape as $ans)
                                                            <option value="{{ $ans->name }}">{{ $ans->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            {{-- </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body"> --}}
                                            <table class="table" style="line-height: 5px;">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No</th>
                                                        <th>Height(Micron)</th>
                                                        <th>Length(MM)</th>
                                                        <th>Width(MM)</th>
                                                        <th>Weight(Ct)</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="experienceSection">
                                                    <tr>
                                                        <td style="vertical-align: middle;text-align:left">1</td>
                                                        <td><input id="cc-payment" name="height[]" type="number"
                                                                required="" class="form-control form-control-sm"
                                                                aria-required="true" aria-invalid="false"
                                                                value="00.00" step="0.01"></td>
                                                        <td><input id="cc-payment" name="length[]" type="number"
                                                                required="" class="form-control form-control-sm"
                                                                aria-required="true" aria-invalid="false"
                                                                value="00.00" step="0.01"></td>
                                                        <td><input id="cc-payment" name="width[]" type="number"
                                                                required="" class="form-control form-control-sm"
                                                                aria-required="true" aria-invalid="false"
                                                                value="00.00" step="0.01"></td>
                                                        <td><input id="cc-payment" name="weight[]" type="number"
                                                                required="" class="form-control form-control-sm"
                                                                aria-required="true" aria-invalid="false"
                                                                value="00.00" step="0.01"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                                                        <div class="form-group1">
                                                            <label for="cc-payment" class="control-label mb-1">(1) Height(Micron)</label>
                                                            <input id="cc-payment" name="height[]" type="number" required="" class="form-control" aria-required="true" aria-invalid="false" value="00.00" step="0.01">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                                                        <div class="form-group1">
                                                            <label for="cc-payment" class="control-label mb-1">(1) Length(MM)</label>
                                                            <input id="cc-payment" name="length[]" type="number" required="" class="form-control" aria-required="true" aria-invalid="false" value="00.00" step="0.01">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                                                        <div class="form-group1">
                                                            <label for="cc-payment" class="control-label mb-1">(1) Width(MM)</label>
                                                            <input id="cc-payment" name="width[]" type="number" required="" class="form-control" aria-required="true" aria-invalid="false" value="00.00" step="0.01">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                                                        <div class="form-group1">
                                                            <label for="cc-payment" class="control-label mb-1">(1) Weight(Ct)</label>
                                                            <input id="cc-payment" name="weight[]" type="number" required="" class="form-control" aria-required="true" aria-invalid="false" value="00.00" step="0.01">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-lg-12">
                                        <div class="card-body" id='outputArea'>
                                            <div class="row" style="display: none">
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment"
                                                            class="control-label mb-1">Height(Micron)</label>
                                                        <input id="cc-payment" name="height[]" type="number"
                                                       min="0" max="10" step="0.01" required class="form-control" aria-required="true"
                                                            aria-invalid="false"  value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1" >
                                                        <label for="cc-payment"
                                                            class="control-label mb-1">Length(MM)</label>
                                                        <input id="cc-payment" name="length[]"   type="number" min="0" max="10" step="0.01"
                                                            required class="form-control" aria-required="true"
                                                            aria-invalid="false"  value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment"
                                                            class="control-label mb-1">Width(MM)</label>
                                                        <input id="cc-payment" name="width[]" type="number" required
                                                            class="form-control" aria-required="true"
                                                            aria-invalid="false" min="0" max="10" step="0.01" value="00.00" >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment"
                                                            class="control-label mb-1">Weight(Ct)</label>
                                                        <input id="cc-payment" name="weight[]" type="number"
                                                            required class="form-control" aria-required="true"
                                                            aria-invalid="false" min="0" max="10" step="0.01" value="00.00">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="modal-footer float-left col-12">
                                    <button type="submit"
                                        onclick="return confirm('Are you sure enter data correct?')"
                                        class="btn btn-secondary ajaxSubmit">Create</button>
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1"> Packets </h4>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row ms-2 ms-md-0">
                    <div class="col-6 col-md-5 float-left">
                    </div>
                    <div class="col-6 col-md-7 ps-2 ps-md-0 mt-1">
                        <div class="dropdown float-right float-md-left mr-3">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa-solid fa-filter"></i>
                                Filter
                            </button>
                            <div class="dropdown-menu mt-5 py-0" aria-labelledby="dropdownMenuButton">
                                <form action="{{ url('search_seed') }}" method="get">
                                    <div class="search_multiple">

                                        <select class="form__input dropdown-item px-0" name="seedn" id="search"
                                            onchange="form.submit();">
                                            <option selected disabled>Search Name..</option>
                                            <?php $users = App\Models\Bactch::select('name')
                                                ->distinct()
                                                ->get(); ?>
                                            @foreach ($users as $ans)
                                                <option value="{{ $ans->name }}">{{ $ans->name }}</option>
                                            @endforeach
                                        </select>
                                        <select class="form__input dropdown-item px-0" name="heightsearch"
                                            id="search" onchange="form.submit();">
                                            <option selected disabled>Search Height..</option>
                                            <?php $height = App\Models\packet::select('height')
                                                ->distinct()
                                                ->get(); ?>
                                            @foreach ($height as $ans)
                                                <option value="{{ $ans->height }}">{{ $ans->height }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body groupContainer">
                                <table id="bootstrap-data-table"
                                    class="table table-striped table-bordered table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>
                                                <div class="show" style="padding-left: 20px;">
                                                    <input type="checkbox" onclick='selects()' value="Select All" />
                                                    Select All
                                                    <input type="checkbox" onclick='deSelect()'
                                                        value="Deselect All" /> Deselect All
                                                </div>
                                            </th>
                                            <th>Height(Micron)</th>
                                            <th>Length(MM)</th>
                                            <th>Width(MM)</th>
                                            <th>Weight(Ct)</th>
                                            <th>Print</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($samedata as $ans)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="question">

                                                        <div
                                                            class="custom-control custom-checkbox  custom-control-right">

                                                            <input class="coupon_question" type="checkbox"
                                                                name="chk"> {{ $ans->name }}<br>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $ans->height }} </td>
                                                <td>{{ $ans->length }}</td>
                                                <td> {{ $ans->width }}</td>
                                                <td>{{ $ans->weight }}
                                                </td>
                                                <td> <a target="_blank"
                                                        href="{{ route('seedPrint', ['id' => $ans->id]) }}"><i
                                                            class="fa fa-fw fa-print"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tr class="bg-dark text-white">
                                        <td><b>Total</b></td>
                                        <td> </td>
                                        <td><b>{{ round($divided, 3) }}</b></td>
                                        <td><b>{{ round($lenthdivided, 3) }}</b></td>
                                        <td><b>{{ round($widthdivided, 3) }}</b></td>
                                        <td><b>{{ round($sum, 3) }}</b></td>
                                        <td><b></b></td>
                                    </tr>
                                    <div class="menu" style="display: none;">
                                        <label for="coupon_field">Print:</label>
                                        <a target="_blank" href="{{ route('multiPrint') }}"><i
                                                class="fa fa-fw o_button_icon fa-print"></i></a>
                                    </div>

                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <!-- Right Panel -->
        <script>
            $(".answer").hide();
            $(".coupon_question").click(function() {
                if ($(this).is(":checked")) {
                    $(".answer").show(300);
                } else {
                    $(".answer").hide(200);
                }
            });
        </script>

        <!-- Scripts -->
        <script type="text/javascript">
            function selects() {
                var ele = document.getElementsByName('chk');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = true;
                }
            }

            function deSelect() {
                var ele = document.getElementsByName('chk');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = false;

                }
            }
        </script>
        <script>
            $(".answer").hide();
            $(".coupon_question").click(function() {
                if ($(this).is(":checked")) {
                    $(".answer").show(300);
                } else {
                    $(".answer").hide(200);
                }
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.show').click(function() {
                    $('.menu').show("slide");
                });
            });
        </script>

        <script type="text/javascript">
            function selects() {
                var ele = document.getElementsByName('chk');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = true;
                }
            }

            function deSelect() {
                var ele = document.getElementsByName('chk');
                for (var i = 0; i < ele.length; i++) {
                    if (ele[i].type == 'checkbox')
                        ele[i].checked = false;

                }
            }
        </script>
        <script>
            $(document).on('click', '.start_button', function() {
                //console.log(this.id);
                var id = this.id.replace('start_', '');

                var packet_id = $('#packet_id_' + id).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var formData = new FormData();
                formData.append("id", packet_id);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    type: "POST",
                    url: "{{ route('startTimer') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function() {
                        //console.log("A");
                    }
                });
            });
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.btnprn').printPage();
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#experienceNo").on("change", function() {
                    var numInputs = $(this).val();
                    $('#experienceSection').html('');

                    for (var i = 0; i < numInputs; i++) {
                        var j = i * 1 + 1;
                        var section = $(`<tr>
                                            <td style="vertical-align: middle;text-align:left">${j}</td>
                                            <td><input id="cc-payment" name="height[]" type="number" required="" class="form-control form-control-sm" aria-required="true" aria-invalid="false" value="00.00" step="0.01"></td>
                                            <td><input id="cc-payment" name="length[]" type="number" required="" class="form-control form-control-sm" aria-required="true" aria-invalid="false" value="00.00" step="0.01"></td>
                                            <td><input id="cc-payment" name="width[]" type="number" required="" class="form-control form-control-sm" aria-required="true" aria-invalid="false" value="00.00" step="0.01"></td>
                                            <td><input id="cc-payment" name="weight[]" type="number" required="" class="form-control form-control-sm" aria-required="true" aria-invalid="false" value="00.00" step="0.01"></td>
                                          </tr>`);
                        /*var $section = $(
                            '<div class="form-group row"><div class="col-lg-12"><div class="card-body"><div class="row"><div class="col-lg-3 col-md-6 mt-3 mt-lg-0"><div class="form-group1"><label for="cc-payment" class="control-label mb-1">(' +
                            j +
                            ') Height(Micron)</label><input id="cc-payment" name="height[]" type="number" required class="form-control" aria-required="true" aria-invalid="false" value="00.00" step=0.01></div></div><div class="col-lg-3 col-md-6 mt-3 mt-lg-0"><div class="form-group1"><label for="cc-payment" class="control-label mb-1">(' +
                            j +
                            ') Length(MM)</label><input id="cc-payment" name="length[]" type="number" required class="form-control" aria-required="true" aria-invalid="false" value="00.00" step=0.01></div></div><div class="col-lg-3 col-md-6 mt-3 mt-lg-0"><div class="form-group1"><label for="cc-payment" class="control-label mb-1">(' +
                            j +
                            ') Width(MM)</label><input id="cc-payment" name="width[]" type="number" required class="form-control" aria-required="true" aria-invalid="false" value="00.00" step=0.01></div></div><div class="col-lg-3 col-md-6 mt-3 mt-lg-0"><div class="form-group1"><label for="cc-payment" class="control-label mb-1">(' +
                            j +
                            ') Weight(Ct)</label><input id="cc-payment" name="weight[]" type="number" required class="form-control" aria-required="true" aria-invalid="false" value="00.00" step=0.01></div></div></div></div></div></div>'
                            );*/
                        $('#experienceSection').append(section);
                    }
                });
            });
        </script>
        <script src="{{ URL::asset('admin/assets/cdn/js/jquery.min.js') }} "></script>
        <script src="{{ URL::asset('admin/assets/js/jquery.printPage.js') }}"></script>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
