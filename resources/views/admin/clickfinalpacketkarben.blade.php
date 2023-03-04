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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Final Stock</span></a>
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

        <div class="card-header">
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('finalstock') }}">Final Stock</a></strong>

            <ul class="stockul">
                <li class="stockli mt-2"><a href="{{ url('finalstock') }}">Batch</a></li>
                <li class="stockli mt-2"><a href="{{ url('finalpacket') }}">Packets</a></li>
                <li class="stockli mt-2"><a href="{{ url('finalpackets') }}">Final Packets</a></li>
                <li class="stockli nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Configuration
                    </a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('batchsequence') }}">Batch Sequence</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Packet / fINAL-P-501</h4>
                    </div>
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
                        <button type="button" class="btn btn-outline-secondary mt-1"> Print Labels </button>
                    </div>
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
                                <form action={{ url('insertbatch') }} method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="col col-md-12">
                                    <h1>FINAL-P-501</h1>
                                </div>
                            </form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Lot : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">0.00</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Batch : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">FINAL</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Location : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">Stock Final</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Process : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">FIRST GROWING</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">PCS : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">1</p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label" >Height(Micron) : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class=" form-control-static">5.52</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Length(MM) : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">14.00</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Width(MM) : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">14.00</p>
                                                    </div>
                                                </div>
                                               
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Weight(Ct) : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">30.00</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">GRD : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">30.00</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Shape : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">RD</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Color : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">1</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Purity : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">Vs2</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Approx Polished Weight(Ct) : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">1.06</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Weight % : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">14.00</p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Galaxy Info</a>
                                    </li>

                                </ul>
                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row mt-3">
                                            <div class="card-body">
                                        <div class="row form-group1">
                                            <div class="col col-md-4"><label class=" form-control-label">File Number : </label></div>
                                            <div class="col-12 col-md-8">
                                                <p class="form-control-static">A6CH6329-5</p>
                                            </div>
                                        </div>
                                            </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"># </th>
                                                                <th scope="col">Shape</th>
                                                                <th scope="col">Color</th>
                                                                <th scope="col">Purity</th>
                                                                <th scope="col">Polished Weight</th>
                                                                <th scope="col">Weight %</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>RD</td>
                                                                <td>l</td>
                                                                <td>VS2</td>
                                                                <td>1.20</td>
                                                                <td>13.25</td>
                                                                <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
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
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-md-2"></div>
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Send Message <span class="profilespan">Log Note</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#"><i class="fa-solid fa-paperclip"></i> 0</a></li>
                                    <li><a href="#">Follow</a></li>
                                    <li class="active"><i class="fa-solid fa-user"></i> 1</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <h6 class="headerborder">Today</h6>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 col-xs-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{URL:: asset('admin/assets/images/admin.jpg')}}">
                                                </a>
                                                <div class="media-body">
                                                    <h2 class="text-dark display-6">Administrator</h2>
                                                    <p>Creating a new Record....</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </aside>
                            </div>

                            <div class="col-md-12">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{URL:: asset('admin/assets/images/admin.jpg')}}">
                                                </a>
                                                <div class="media-body">
                                                    <h2 class="text-dark display-6">DineshB</h2>
                                                    <p>9 Hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item listgroupitem">
                                                <a href="#">Stock Lot Created <i class="fa-solid fa-arrow-right"></i> Received</a>
                                            </li>
                                        </ul>
                                    </section>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>


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
