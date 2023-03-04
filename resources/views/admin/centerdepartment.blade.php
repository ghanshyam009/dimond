<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from technext.github.io/elaadmin/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:10 GMT -->
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

<body class="bg-dark">
    <!-- Left Panel -->

    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->

                <div class="container">
                    <div class="row">
                        @if(Auth::check())
                            {{-- @if(Auth::user()->role != 'user') --}}
                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_green">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('createlot') }}"><i class="fa-solid fa-recycle text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Batch</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_maroon">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('stockdashboard1') }}"><i class="fa-solid fa-gauge-high text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Stock Dashboard</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif


                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_green">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('seeds1') }}"><i class="fa-solid fa-person-chalkboard text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Seeds</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_maroon">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('stock1') }}"><i class="fa-solid fa-box-open text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Stock</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_green">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('finalstock') }}"><i class="fa-solid fa-cart-plus text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Final Stock</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_maroon">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('assignreceive') }}"><i class="fa-solid fa-box-tissue text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Assign/Receive</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role != '')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_green">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('chocolatedashboard') }}"><i class="fa-solid fa-keyboard text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Growing</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_maroon">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('laser1') }}"><i class="fa-solid fa-pencil text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Laser</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_green">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('boiling1') }}"><i class="fa-solid fa-calculator text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Boiling</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_maroon">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('polishing1') }}"><i class="fa-solid fa-gem text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Polishing</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_green">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('mainsetting') }}"><i class="fa-solid fa-gear text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Settings</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_maroon">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('purchase1') }}"><i class="fa-solid fa-credit-card text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Purchase</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_green">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('discuss1') }}"><i class="fa-solid fa-comment-dots text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Discuss</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_maroon">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('machinemanagement1') }}"><i class="fa-solid fa-book text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Machine Management</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                                <div class="col-12 col-md-3 col-lg-2">
                                    <div class="card">
                                        <div class="card-body color_green">
                                            <div class="mx-auto d-block">
                                                <a href="{{ url('jobwork1') }}"><i class="fa-solid fa-handshake text-white"></i></a>
                                                <h5 class="text-sm-center mt-2 mb-1 text-white h5class">Job work/Jangad</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>

            </div>
            <!-- /#right-panel -->
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/js/main.js')}}"></script>

    <!--  Chart js -->
    <script src="{{URL:: asset('admin/assets/cdn/js/Chart.bundle.min.js')}}"></script>

    <!--Chartist Chart-->
    <script src="{{URL:: asset('admin/assets/cdn/js/chartist.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/chartist-plugin-legend.min.js')}}"></script>

    <script src="{{URL:: asset('admin/assets/cdn/js/jquery.flot.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/jquery.flot.pie.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/jquery.flot.spline.min.js')}}"></script>

    <script src="{{URL:: asset('admin/assets/cdn/js/simpleWeather.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/weather-ini.js')}}"></script>

    <script src="{{URL:: asset('admin/assets/cdn/js/moment.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/fullcalendar.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/js/init/fullcalendar-init.js')}}"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [{
                label: "Desktop visits",
                data: [
                    [1, 32]
                ],
                color: '#5c6bc0'
            }, {
                label: "Tab visits",
                data: [
                    [1, 33]
                ],
                color: '#ef5350'
            }, {
                label: "Mobile visits",
                data: [
                    [1, 35]
                ],
                color: '#66bb6a'
            }];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [{
                label: "Direct Sell",
                data: [
                    [1, 65]
                ],
                color: '#5b83de'
            }, {
                label: "Channel Sell",
                data: [
                    [1, 35]
                ],
                color: '#00bfa5'
            }];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [
                [0, 3],
                [1, 5],
                [2, 4],
                [3, 7],
                [4, 9],
                [5, 3],
                [6, 6],
                [7, 4],
                [8, 10]
            ];

            var plot = $.plot($('#flotLine5'), [{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }], {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    series: [
                        [0, 18000, 35000, 25000, 22000, 0],
                        [0, 33000, 15000, 20000, 15000, 300],
                        [0, 15000, 28000, 15000, 30000, 5000]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    showLine: false,
                    showPoint: false,
                    fullWidth: true,
                    axisX: {
                        showGrid: true
                    }
                });

                chart.on('draw', function(data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById("TrafficChart");
                ctx.height = 150;
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                        }, {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                        }, {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                        }]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [
                    [0, 18],
                    [2, 8],
                    [4, 5],
                    [6, 13],
                    [8, 5],
                    [10, 7],
                    [12, 4],
                    [14, 6],
                    [16, 15],
                    [18, 9],
                    [20, 17],
                    [22, 7],
                    [24, 4],
                    [26, 9],
                    [28, 11]
                ],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
</body>
</html>
