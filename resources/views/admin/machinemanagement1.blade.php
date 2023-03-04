@inject('Carbon', 'Carbon\Carbon')
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

<body>


    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Machine Management</span></a>
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
                        class="fa-solid fa-table-columns"></i></a> <a href="{{ url('machinemanagement1') }}">Machine
                    Management</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2 d-block d-md-inline-block"><a href="{{ url('machine') }}">Machine</a></li>
            </ul>
        </div>
        <!-- Header-->

        <div class="content mt-4">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 col-md-12 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-1">
                                                <i class="pe-7s-users"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text"><span
                                                            class="count">{{ count($a) }}</span></div>
                                                    <div class="stat-heading">Active</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-2">
                                                <i class="pe-7s-users"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text"><span class="count">0</span></div>
                                                    <div class="stat-heading">Stop</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-3">
                                                <i class="pe-7s-users"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text"><span
                                                            class="count">{{ count($b) }}</span></div>
                                                    <div class="stat-heading">Inactive</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-4">
                                                <i class="pe-7s-users"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text"><span class="count">1</span></div>
                                                    <div class="stat-heading">Old Inactive</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 col-md-12 col-12">

                        <div class="row">
                            <?php $machine = App\Models\LotDetail::get(); ?>
                            <?php $ghrate = App\Models\machine::get(); ?>
                            <?php $cho = App\Models\chocolate::get(); ?>
                            @foreach ($lot as $k => $data)
                                <div class="col-lg-4 col-md-6 col-xl-3">
                                    <div class="card card2">
                                        <div class="card-header cardheader1">
                                            <strong><i class="fa-solid fa-keyboard"></i>{{ $data->mname }}</strong>
                                            <p class="float-right" style="margin: 0px;">H:0.62</p>
                                        </div>
                                        <div class="card-body card-block">
                                            <input type="hidden" value="{{ $data->id }}"
                                                id="machine_id_{{ $data->id }}" />
                                            <input type="hidden" value="{{ $data->timer }}" class="current_timer"
                                                id="old_timer_{{ $data->id }}" />
                                            <input type="hidden" value="{{ $data->stop_timer }}"
                                                class="current_stop_timer" id="stop_timer_{{ $data->id }}" />
                                            <div style="color: green;font-weight: bold;text-align: right;"
                                                id="timer_{{ $data->id }}">00:00:00</div>
                                            <div class="row form-group1">
                                                <div class="col-12 col-md-4"><label for="hf-email"
                                                        class=" form-control-label">Lot:{{ $data->name }}</label>
                                                </div>
                                            </div>
                                            <div class="row form-group mt-2 mt-md-2 mt-lg-0">
                                                <?php $finalgh = 0; ?>
                                                <?php $mtime = 0; ?>
                                                <?php $time = 0; ?>
                                                <?php $gh = 0; ?>
                                                <?php $totalgh = 0; ?>
                                                <?php $sumgh = 0; ?>
                                                @foreach ($cho as $tans)
                                                    @if ($data->lotno == $tans->lotno)
                                                        <?php $time = $tans->starttime; ?>
                                                    @endif
                                                @endforeach
                                                @foreach ($ghrate as $mgh)
                                                    @if ($data->lotno == $mgh->lotno)
                                                        <?php $mtime = $mgh->created_at->format('h:i:s'); ?>
                                                    @endif
                                                    @if ($data->lotno == $mgh->lotno)
                                                        <?php $gh = $mgh->growthrate; ?>
                                                    @endif
                                                    @if ($data->lotno == $mgh->lotno)
                                                        {{-- <?php $sumgh = \Carbon\Carbon::parse($time)->diffInMinutes($mtime); ?> --}}
                                                          <?php $sumgh = \Carbon\Carbon::parse($time)->diffInSeconds($mtime); ?>
                                                    @endif
                                                    @if ($data->lotno == $mgh->lotno)
                                                        <?php $totalgh = ($sumgh * $gh) / 100000; ?>
                                                        <?php $finalgh = round($totalgh, 3); ?>
                                                    @endif
                                                @endforeach

                                                <div class="col-12 col-md-4"><label for="hf-password"
                                                        class=" form-control-label">GH:{{ $finalgh }}</label>
                                                </div>
                                            </div>
                                            <div class="row form-group mt-2 mt-md-2 mt-lg-0">
                                                <?php $total = 0; ?>
                                                <?php $mpcs = 0; ?>
                                                <?php $sumth = 0; ?>
                                                <?php $totalth = 0; ?>
                                                @foreach ($machine as $mth)
                                                    @if ($data->lotno == $mth->lot_id)
                                                        <?php $total += $mth->height; ?>
                                                    @endif
                                                    @if ($data->lotno == $mth->lot_id)
                                                        <?php $mpcs = $mth->pcs; ?>
                                                    @endif
                                                    @if ($data->lotno == $mth->lot_id)
                                                        <?php $sumth = $total / $mpcs; ?>
                                                    @endif
                                                    @if ($data->lotno == $mth->lot_id)
                                                        <?php $totalth = $total + $sumth; ?>
                                                    @endif
                                                @endforeach
                                                <div class="col-12 col-md-4"><label for="hf-password"
                                                        class=" form-control-label">TH:{{ $totalth }}</label>
                                                </div>
                                            </div>

                                            <div class="row form-group1 mt-2">
                                                <div class="col-10">
                                                    <div class="row">
                                                        @if ($data->timer == null && $data->stop_timer == null)
                                                            <div class="col-6">
                                                                <button id="start_{{ $data->id }}"
                                                                    class="start_button btn btn-secondary btn-sm float-left mt-2"
                                                                    onclick="start({{ $k + 1 }})"
                                                                    style="font-size: 12px; padding: 3px;">Start</button>
                                                            </div>
                                                        @elseif($data->timer != null && $data->stop_timer != null)
                                                            <button disabled id="stop_{{ $data->id }}"
                                                                class="stop_button btn btn-secondary btn-sm float-left w-auto ms-2 mt-2"
                                                                onclick="stop({{ $data->id }})"
                                                                style="font-size: 12px; padding: 3px;">Growing
                                                                Done</button>
                                                        @else
                                                            <div class="col-6">
                                                                <button id="stop_{{ $data->id }}"
                                                                    class="stop_button btn btn-secondary btn-sm float-left mt-2"
                                                                    onclick="stop({{ $data->id }})"
                                                                    style="font-size: 12px; padding: 3px;">Growing
                                                                    Done</button>
                                                            </div>
                                                            <div class="col-6 ps-3">
                                                                <button type="button"
                                                                    class="btn btn-success btn-sm mt-2"
                                                                    style="font-size: 12px; padding: 3px;">In
                                                                    Progress</button>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-2">
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm float-right mt-2"
                                                        style="font-size: 12px; padding: 3px 6px;">B</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function secToTimer(sec) {
            const o = new Date(0),
                p = new Date(sec * 1000)
            return new Date(p.getTime() - o.getTime()).toString().split(" ")[4] + "." + p.getMilliseconds()
        }
    </script>

    <script src="{{ URL::asset('admin/assets/cdn/js/jquery.min.js ') }}"></script>
    <script src="{{ URL::asset('admin/assets/cdn/js/popper.min.js') }} "></script>
    <script src="{{ URL::asset('admin/assets/cdn/js/bootstrap.min.js ') }}"></script>
    <script src="{{ URL::asset('admin/assets/cdn/js/matchHeight.min.js ') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/main.js') }} "></script>
    <script src="{{ URL::asset('admin/assets/cdn/js/chosen.jquery.min.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script src="{{ URL::asset('admin/assets/cdn/js/jquery.min.js ') }}"></script>

    <script src="{{ URL::asset('admin/assets/cdn/js/popper.min.js') }} "></script>

    <script>
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

            var packet_id = $('#machine_id_' + id).val();
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
                url: "{{ route('stopTimermachine') }}",
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

                    var id = $('#machine_id_' + this.id.replace('old_timer_', '')).val();
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

                    var id = $('#machine_id_' + this.id.replace('old_timer_', '')).val();
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

            var packet_id = $('#machine_id_' + id).val();
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
                url: "{{ route('startTimermachine') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function() {
                    window.location.reload();
                }
            });
        });
    </script>
</body>

</html>
