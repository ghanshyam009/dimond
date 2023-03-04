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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Machine Management</span></a>
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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('machinemanagement1') }}">Machine Management</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2"><a href="{{ url('machinemanagement1') }}">Dashboard</a></li>
                <li class="stockli mt-2"><a href="{{ url('machine') }}">Machine</a></li>
                <li class="stockli mt-2"><a href="{{ url('machineequipments') }}">Machine Equipments</a></li>
            </ul>
        </div>

        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="headerborder1">Machine Equipments / New</h4>
                    </div>
                    <div class="col-md-9">
                        <a href=""><button type="button" class="btn btn-outline-info mt-1"> Save </button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Discard </button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Print Labels </button></a>
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
                            <div class="card-header1">
                                <div class="row">
                                    <div class="col-lg-10"></div>
                                    <div class="col-lg-2">
                                        <div class="row">
                                            <div class="col-lg-12 bordercol">
                                                <i class="fa fa-credit-card"></i> <span class="ml-3">0.00 Units</span><br>
                                                <p class="mb-0 ml-5">Purchased</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="row form-group mt-2">
                                            <div class="col col-md-12"><label class=" form-control-label">Product Name</label></div>
                                            <div class="col-lg-1"><i class="fa fa-star-o"></i></div>
                                            <div class="col-11">
                                                <input type="email" placeholder="e.g. Cheese Burger" id="email-input" name="email-input" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <i class="fa-solid fa-camera float-right cameraborder"></i>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#purchase" role="tab" aria-controls="profile" aria-selected="false">Purchase</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#accounting" role="tab" aria-controls="contact" aria-selected="false">Accounting</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content pl-3 p-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Product Type : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0">Consumable</option>
                                                                    <option value="1">SQ</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                </select></div>

                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"></div>
                                                                <div class="col col-md-8">
                                                                    <p>Consumables are physical products for which you don't manage the inventory level: they are always available. </p>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">
                                                                    Sales Price : </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="email" placeholder="e.g. Sales Director" id="email-input" name="email-input" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Customer Taxes :
                                                                </label></div>
                                                                <div class="col-12 col-md-8">

                                                                    <select class="custom-select d-block w-100" required="">
                                                                            <option value="0">Please Select...</option>
                                                                            <option value="1">SQ</option>
                                                                            <option value="2">Option #2</option>
                                                                            <option value="3">Option #3</option>
                                                                        </select>
                                                                </div>

                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Cost
                                                                    : </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="email" id="email-input" name="email-input" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Product Category :
                                                                </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0">All</option>
                                                                    <option value="1">SQ</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Internal Reference :
                                                                </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="email" id="email-input" name="email-input" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Barcode
                                                                    : </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="email" id="email-input" name="email-input" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">HSN/SAC Code :
                                                                </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="email" id="email-input" name="email-input" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">HSN/SAC Description  :
                                                                </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="email" id="email-input" name="email-input" class="form-control">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-4 mb-2">
                                                    <a href="">Internal Notes</a>
                                                </div>
                                                <div class="col-12">
                                                    <input type="email" placeholder="This note is only for internal purposes" id="email-input" name="email-input" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="purchase" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card-body">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"># Vendor</th>
                                                                    <th scope="col">Quantity</th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Delivery Lead Time</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row"></th>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
    
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Vendor Bills  </label></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Vendor Taxes : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0">Gsr 0.25 %</option>
                                                                    <option value="1">SQ</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                </select></div>

                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Control Policy : </label></div>
                                                                <div class="col col-md-8">
                                                                            <div class="form-check form-check">
                                                                                <label for="inline-radio1" class="form-check-label ">
                                                                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked="">on Ordered Quantities
                                                                                </label>
                                                                                <label for="inline-radio2" class="form-check-label ">
                                                                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">On Received Quantities
                                                                                </label>
                                                                            </div>
                                                                </div>

                                                            </div>
                                                           
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-12 mb-2">
                                                    <a href="">Purchase Description</a>
                                                </div>
                                                <div class="col-6">
                                                    <input type="email" placeholder="This note is added to purchase orders." id="email-input" name="email-input" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="accounting" role="tabpanel" aria-labelledby="contact-tab">
                                            <h3>Menu 2</h3>
                                            <p>Some content here.</p>
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
                                <h1>Send Message <span class="profilespan">Log Note</span><span class="profilespan"><i
                                            class="fa-solid fa-clock"></i> Schedule Activity</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#"><i class="fa-solid fa-paperclip"></i> 0</a></li>
                                    <li><a href="#">Follow</a></li>
                                    <li class="active"><i class="fa-solid fa-user"></i> 0</li>
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
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h6 class="headerborder">Today</h6>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 col-xs-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-12">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ URL::asset('admin/assets/images/admin.jpg') }}">
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
                        </div>
                    </div>
                    <div class="col-md-2"></div>


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
        <script src="{{URL:: asset('admin/assets/cdn/js/chosen.jquery.min.js')}} "></script>
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
