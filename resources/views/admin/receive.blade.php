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
                    <a class="navbar-brand" href="{{ url('assignreceive') }}"><b><span>Receive</b></span></a>
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
        </div>
        <div class="content mt-5">
            <div class="animated fadeIn">
                <div class="row mt-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Scan For Receive</h5>
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button> --}}
                                </div>


                                <form action="{{ url('receivechocolate') }}" method="post" name="recive"
                                        enctype="multipart/form-data" id="recivechocolateall">
                                        @csrf

                                        <div class="modal-body">
                                            {{-- <div class="row">
                                                <div class="col-lg-11">
                                                    <input type="tel" class="form-control cc-number identified visa"
                                                        value="" data-val="true"
                                                        data-val-required="Please enter the card number"
                                                        data-val-cc-number="Please enter a valid card number">
                                                </div>
                                            </div> --}}
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
                                                                                <input type="hidden" class="reciveallchocolate"
                                                                                    name="reciveallchocolate">
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
                                                                                    <option value="{{ $rec->id }}"
                                                                                        >
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
                                                                                {{-- <label for="inline-radio1" class="form-check-label ">
                                                                                        <input type="radio" id="inline-radio1"
                                                                                            name="0" value="0"
                                                                                            class="form-check-input" checked>Stock
                                                                                    </label> --}}
                                                                                <label for="inline-radio1"
                                                                                    class="form-check-label ">
                                                                                    <input required type="radio" id="inline-radio1"
                                                                                        name="returntype"
                                                                                        value="0"
                                                                                        class="form-check-input">Stock
                                                                                </label>
                                                                                <label for="inline-radio2"
                                                                                    class="form-check-label ">
                                                                                    <input required type="radio" id="inline-radio2"
                                                                                        name="returntype"
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
                                            {{-- <div class="row">
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
                                            </div> --}}
                                            {{-- <div style="display:none"; id="chocolate" class="row">
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
                                            </div> --}}

                                            {{-- <div id="loste" class="row">
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
                                            </div> --}}
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
                                                class="btn btn-info">Receive</button>
                                        </div>
                                </form>

                      </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
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
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>

        <script>
             $(document).ready(function() {
            $(window).keydown(function(event){
                if(event.keyCode == 13) {
                event.preventDefault();
                return false;
                }
            });
            });
            var timeArray = [];

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

            function stop(id) {
                window.clearInterval(timeArray[id]['timeoutId']);
                timeArray[id]['check'] = "stop";

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
                    url: "{{ route('stopTimer') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function() {
                        $("#stop_" + id).attr("disabled", true);
                    }
                });
            }

            function start(id, notreset = 0) {

                if (notreset == 0) {
                    timeArray[id] = [];
                    timeArray[id]['hour'] = 0;
                    timeArray[id]['min'] = 0;
                    timeArray[id]['sec'] = 0;
                    timeArray[id]['dispHour'] = 0;
                    timeArray[id]['dispMin'] = 0;
                    timeArray[id]['dispSec'] = 0;
                    timeArray[id]['timeoutId'] = null;
                    timeArray[id]['check'] = "stop";
                }

                if (timeArray[id]['check'] === "stop") {
                    timeArray[id]['timeoutId'] = window.setInterval(function() {
                        timer(id);
                    }, 1000);

                    $("#start_" + id).hide();
                    $("#stop_" + id).show();
                    timeArray[id]['check'] = "start";

                }
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
                        window.location.reload();
                    }
                });
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
                $('.reciveallchocolate').val(this.value);
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
            $('#closerecive').click(function(e) {
                e.preventDefault();
                var formData = new FormData(document.getElementById("recivechocolateall"));
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    type: "POST",
                    url: "{{ url('receivechocolate') }}",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if(response == 0){
                            swal('Already Lot Receive For Chocolate');
                        }else if(response == 1){
                            swal('Already Lot Receive For Laser');
                        }else if(response == 2){
                            swal('Already Lot Receive For Stock Loss');
                        }else if(response == 3){
                            swal('Already Lot Receive For Boiling');
                        }else if(response == 4){
                            swal('Already Lot Receive For Polish');
                        }else if(response == 5){
                            swal('Already Lot Receive For Stock Final');
                        }else if(response == "chocolate"){
                            swal('Lot does not assign to chocolate !');
                        }else if(response == "laser"){
                            swal('Lot does not assign to laser !');
                        }else if(response == "stock"){
                            swal('Lot does not assign to stock !');
                        }else if(response == "boiling"){
                            swal('Lot does not assign to boiling !');
                        }else if(response == "polish"){
                            swal('Lot does not assign to polish !');
                        }else if(response == "stockfinal"){
                            swal('Lot does not assign to stock final !');
                        }else if(response == "success"){
                            swal('Lot Receive Sucessfully..');
                        }
                        // $('#receiveModal').modal('hide');
                        // location.reload();
                    },
                        error:function (response){
                            $.each(response.responseJSON.errors,function(){
                                swal('Record does not exist or is not accessible.');
                            })
                        }
                });
            });
        </script>
</html>
