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

    <link rel="apple-touch-icon" href="{{URL:: asset('admin/i.imgur.com/QRAUqs9.png')}}">
    <link rel="shortcut icon" href="{{URL:: asset('admin/i.imgur.com/QRAUqs9.png')}}">

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

                    <div class="col-md-9">
                        <button type="button" class="btn btn-outline-secondary mt-1" data-bs-toggle="modal" data-bs-target="#printlabels"> Print Labels </button>
                       
                        <div class="modal fade" id="printlabels" tabindex="-1" aria-labelledby="printlabelsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="printlabelsLabel">Label Configuration</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Print :</label></div>
                                                                <div class="col col-md-6">
                                                                    <div class="form-check-inline form-check">
                                                                        <label for="inline-radio1" class="form-check-label ">
                                                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked="">Lot
                                                                        </label>
                                                                        <label for="inline-radio2" class="form-check-label ">
                                                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Packet
                                                                        </label>
                                                                        <label for="inline-radio3" class="form-check-label ">
                                                                            <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Both
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer float-left">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Confirm</button>
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
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
                                    <h1>FLOT00005</h1>
                                </div>
                            </form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Pcs : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">9</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Weight(Ct) : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">30.00</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Avg.Weight(Ct) : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">14.00</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-4"><label class=" form-control-label">Avg.Length(MM) : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <p class="form-control-static">14.00</p>
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
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label" >Location : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <label class=" form-control-label" style="border: 1px solid black;
                                                        border-radius: 30px;
                                                        padding: 2px 20px;">stock Final</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"># </th>
                                                                <th scope="col">Seq</th>
                                                                <th scope="col">Final Name</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Height(Micron)</th>
                                                                <th scope="col">Length(MM)</th>
                                                                <th scope="col">Width(MM)</th>
                                                                <th scope="col">Shape</th>
                                                                <th scope="col">Weight(Ct)</th>
                                                                <th scope="col">Approx Polish Weigth(Ct)</th>
                                                                <th scope="col">Weight %</th>
                                                                <th scope="col">Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>913</td>
                                                                <td>shbdhsdjs</td>
                                                                <td>njnajss</td>
                                                                <td>1.20</td>
                                                                <td>13.25</td>
                                                                <td>11.50</td>
                                                                <td>sq</td>
                                                                <td>2.89</td>
                                                                <td>5.51</td>
                                                                <td>15.5</td>
                                                                <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                                                            </tr>

                                                        </tbody>
                                                        <tbody class="bg-dark text-white"><tr>
                                                            <td><b>Total</b></td>
                                                            <td> </td>
                                                            <td></td>
                                                            <td></td>

                                                            <td><b>0.0015</b></td>
                                                            <td><b>0.001775</b></td>
                                                            <td><b>0.001775</b></td>
                                                            <td></td>
                                                            <td><b>0.0241</b></td>
                                                            <td><b>0.0241</b></td>
                                                            <td><b>51.54</b></td>
                                                            <td></td>
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
        <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}}"></script>
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

        <script src="{{URL:: asset('admin/assets/js/main.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/chosen.jquery.min.js')}}"></script>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
