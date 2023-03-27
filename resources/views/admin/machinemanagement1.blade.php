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
                                                    <div class="stat-text"><span class="count">10000</span></div>
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
                                                    <div class="stat-text"><span class="count">0</span></div>
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
                                                    <div class="stat-text"><span class="count">0</span></div>
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
                            <?php $lots = App\Models\LotMove::get(); ?>
                            <?php $chocos = App\Models\chocolate::get(); ?>
                            @foreach ($machines as $machine)
                                <div class="col-lg-4 col-md-6 col-xl-3">
                                    <div class="card card2">
                                        <div class="card-header cardheader1">
                                            <strong><i class="fa-solid fa-keyboard"></i>
                                                {{ $machine->mname }}</strong>
                                            <p class="float-right" style="margin: 0px;">

                                                <?php $total = 0;
                                                $i = 0;
                                                $id = 1; ?>
                                                @foreach ($lots as $lot)
                                                    @foreach ($chocos as $choco)
                                                        @if ($choco->lotno == $machine->lotno)
                                                            @if ($machine->lotno == $lot->lot_id && $lot->status == 1)
                                                                <?php $id = ++$i; ?>
                                                                <?php $total += $lot->height; ?>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                                H: {{ number_format($total / $id, 2) }}
                                                {{-- @if ($total > 0)
                                                @endif --}}
                                            </p>
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group1">
                                                <div class="col-12">
                                                    <label for="hf-email" class="form-control-label">
                                                        <?php $masters = App\Models\LotMaster::get(); ?>
                                                        @foreach ($masters as $master)
                                                            @if ($machine->lotno == $master->id)
                                                                LOT: {{ $master->name }}
                                                            @endif
                                                        @endforeach
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row form-group mt-2 mt-md-2 mt-lg-0">
                                                <div class="col-6">
                                                    <label for="hf-password" class="form-control-label">
                                                        <?php $total1 = 0;
                                                        $i1 = 0;
                                                        $id1 = 1; ?>
                                                        @foreach ($lots as $lot)
                                                            @foreach ($chocos as $choco)
                                                                @if ($choco->lotno == $machine->lotno)
                                                                    @if ($machine->lotno == $lot->lot_id && $lot->status == 1)
                                                                        <?php $id1 = ++$i1; ?>
                                                                        <?php $total1 += $lot->height; ?>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @endforeach
                                                        @if ($total1 > 0)
                                                            TH: {{ number_format($total1 + $total1 / $id1, 2) }}
                                                        @endif
                                                    </label>
                                                </div>
                                                <div class="col-6">
                                                    <label for="hf-password" class="form-control-label">
                                                        @if ($machine->timer != 0)
                                                            <div class="d-flex timer"
                                                                data-date="{{ $machine->timer }}"
                                                                data="{{ $machine->growthrate }}">
                                                                GH:<span class="growthhour ms-2"></span>
                                                                <input type="hidden" class="hours">
                                                                <input type="hidden" class="minutes ms-2">
                                                                <input type="hidden" class="seconds ms-2">
                                                            </div>
                                                        @endif
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row form-group mt-2 mt-md-2 mt-lg-0">
                                                <div class="col-12">
                                                    <label for="hf-password" class="form-control-label">
                                                        @if ($machine->timer != 0)
                                                            <div class="d-flex timer"
                                                                data-date="{{ $machine->timer }}">
                                                                <input type="hidden" class="growthhour">
                                                                <span class="hours"></span>h
                                                                <span class="minutes ms-2"></span>m
                                                                <span class="seconds ms-2"></span>s
                                                            </div>
                                                        @endif
                                                    </label>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.1.0/jquery.countdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
                    countDownDate[i]['growth'] = clockdiv[i].getAttribute('data');
                    countDownDate[i]['seconds'] = 0;
                    countDownDate[i]['minutes'] = 0;
                }

                var countdownfunction = setInterval(function() {
                    for (var i = 0; i < countDownDate.length; i++) {
                        var now = new Date().getTime();
                        var distance = now - countDownDate[i]['time'];

                        countDownDate[i]['hours'] = Math.floor((distance / (1000 * 60 * 60 * 24)) * 24);
                        countDownDate[i]['growthhour'] = Math.floor((distance / (1000 * 60 * 60 * 24)) *
                            24);
                        countDownDate[i]['minutes'] = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                            60));
                        countDownDate[i]['seconds'] = Math.floor((distance % (1000 * 60)) / 1000);

                        if (distance < 0) {
                            countDownDate[i]['el'].querySelector('.growthhour').innerHTML = 0
                            countDownDate[i]['el'].querySelector('.hours').innerHTML = 0;
                            countDownDate[i]['el'].querySelector('.minutes').innerHTML = 0;
                            countDownDate[i]['el'].querySelector('.seconds').innerHTML = 0;
                        } else {
                            var hour = countDownDate[i]['el'].querySelector('.hours').innerHTML =
                                countDownDate[i]['hours'];

                            countDownDate[i]['el'].querySelector('.growthhour').innerHTML =
                                countDownDate[i]['growthhour'] * countDownDate[i]['growth'] / 100000;

                            countDownDate[i]['el'].querySelector('.minutes').innerHTML = countDownDate[
                                i]['minutes'];
                            countDownDate[i]['el'].querySelector('.seconds').innerHTML = countDownDate[
                                i]['seconds'];
                        }
                    }
                }, 1000);
            }
        });
    </script>
</body>

</html>
