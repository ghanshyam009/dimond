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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Stock Dashboard</span></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
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
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Stock Dashboard / Packets</h4>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4 float-left">
                        <button type="button" class="btn btn-outline-secondary mt-1"> <i class="fa-solid fa-download"></i> </button>
                    </div>
                    <div class="col-md-7">
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                                            <th>Seq</th>
                                            <th>Final Name</th>
                                            <th>Name</th>
                                            <th>Height(Micron)</th>
                                            <th>length(MM)</th>
                                            <th>Width(MM)</th>
                                            <th>Shape</th>
                                            <th>Color</th>
                                            <th>Purity</th>
                                            <th>Weight(Ct)</th>
                                            <th>Approx Polished Weight(Ct)</th>
                                            <th>Weight %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $data=App\Models\chocolate::get(); ?>
                                        @foreach($data as $ans)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                
                                            </td>
                                            <td><label class="form-check-label" for="flexCheckDefault">
                                                0
                                               </label></td>
                                            <td></td>
                                            <td>{{ $ans->batch }}</td>
                                            <td>{{ $ans->height }}</td>
                                            <td>{{ $ans->length }}</td>
                                            <td>{{ $ans->width }}</td>
                                            <td>{{ $ans->shape }}</td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $ans->weight }}</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                    <thead class="bg-dark text-white">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{  round($divided,3) }}</td>
                                        <td>{{  round($lenthdivided,3) }}</td>
                                        <td>{{  round($widthdivided ,3)}}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ round( $sum,3) }}</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/main.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/lib/chosen/chosen.jquery.min.js')}} "></script>

        <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect ").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found! ",
                    width: "100% "
                });
            });
        </script>

</body>
</html>
