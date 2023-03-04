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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Job Work / Jangad</span></a>
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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('jobwork1') }}">Job Work / Jangad</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2"><a href="{{ url('jobwork1') }}">Job Work</a></li>
                <li class="stockli mt-2"><a href="{{ url('jangad') }}">Jangad</a></li>
                <li class="stockli mt-2"><a href="{{ url('party') }}">Party</a></li>
            </ul>
        </div>
        <!-- Header-->
        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-2">
                        <h4 class="headerborder1">Party / New</h4>
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
                                    <div class="col-lg-7"></div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-lg-4 bordercol">
                                                <i class="fa fa-credit-card"></i> <span class="ml-3">0</span><br>
                                                <p class="mb-0">Purchase</p>
                                            </div>
                                            <div class="col-lg-4 bordercol">
                                                <i class="fa-solid fa-pen-to-square"></i> <span class="ml-3">0.00</span><br>
                                                <p class="mb-0">Invoiced</p>
                                            </div>
                                            <div class="col-lg-4 bordercol">
                                                <i class="fa-solid fa-pen-to-square"></i> <span class="ml-3">0</span><br>
                                                <p class="mb-0">Vendor Bills</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="inline-radios"
                                                    value="option1" class="form-check-input" checked=""> Individual
                                            </label>
                                            <label for="inline-radio2" class="form-check-label ">
                                                <input type="radio" id="inline-radio2" name="inline-radios"
                                                    value="option2" class="form-check-input"> Company
                                            </label>
                                        </div>
                                        @if(Session::has('message'))
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
                                        <form action="{{ url('insertparty') }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                        <div class="row form-group mt-2">
                                            <div class="col-10">
                                                <input type="text" placeholder="party" id="email-input" required name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-10">
                                                <?php $data=App\Models\stat::get(); ?>
                                                <select class="custom-select d-block w-100" name="stat" required="">
                                                    @foreach($data as $ans)
                                                    <option value="0">Country name..</option>
                                                    <option value="{{ $ans->state_title }}">{{ $ans->state_title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-info mt-1"> Save </button>

                                    </form>
                                    </div>
                                    <div class="col-lg-3">
                                        <i class="fa-solid fa-camera float-right cameraborder"></i>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Code :
                                                        </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="email" placeholder="e.g. Brandom Freeman" id="email-input" name="email-input" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><select class="custom-select d-block w-100" required="">
                                                            <option value="0">Contact</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="email" placeholder="Street.." id="email-input" name="email-input" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="email" placeholder="Street2.." id="email-input" name="email-input" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"></div>
                                                    <div class="col-12 col-md-8">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <select class="custom-select d-block w-100" required="">
                                                                    <option value="0">City</option>
                                                                    <option value="1">SQ</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <select class="custom-select d-block w-100" required="">
                                                                    <option value="0">State</option>
                                                                    <option value="1">SQ</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <select class="custom-select d-block w-100" required="">
                                                                    <option value="0">Zip</option>
                                                                    <option value="1">SQ</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"></div>
                                                    <div class="col-12 col-md-8">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">India</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">GST
                                                            Treatment : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Consumer</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">GSTIN :
                                                        </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="email" placeholder="e.g. BE0477472701" id="email-input" name="email-input" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Job
                                                            Position : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="email" placeholder="e.g. Sales Director" id="email-input" name="email-input" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Phone :
                                                        </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="email" id="email-input" name="email-input" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Mobile
                                                            : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="email" id="email-input" name="email-input" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Email :
                                                        </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="email" id="email-input" name="email-input" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Website
                                                            : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="email" placeholder="e.g. http://www.odoo.com" id="email-input" name="email-input" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Title :
                                                        </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">e.g. Mister</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Tags :
                                                        </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Tages..</option>
                                                            <option value="1"></option>
                                                            <option value="2"></option>
                                                            <option value="3"></option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contacts & Addresses</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#salespurchase" role="tab" aria-controls="profile" aria-selected="false">Sales & Purchase</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contracthistory" role="tab" aria-controls="contact" aria-selected="false">Contract History</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#internalnotes" role="tab" aria-controls="contact" aria-selected="false">Internal Notes</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content pl-3 p-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <button type="button" class="btn btn-light border-info btn-sm mt-3 ml-2"> Add </button>
                                        </div>
                                        <div class="tab-pane fade" id="salespurchase" role="tabpanel" aria-labelledby="profile-tab">
                                            <h3>Menu 1</h3>
                                            <p>Some content here.</p>
                                        </div>
                                        <div class="tab-pane fade" id="contracthistory" role="tabpanel" aria-labelledby="contact-tab">
                                            <h3>Menu 2</h3>
                                            <p>Some content here.</p>
                                        </div>
                                        <div class="tab-pane fade" id="internalnotes" role="tabpanel" aria-labelledby="contact-tab">
                                            <h3>Menu 3</h3>
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
