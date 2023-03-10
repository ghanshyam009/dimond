<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

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
         <style>
            input[type='file'] { font-size: 0; }
                ::file-selector-button { font-size: hidden;
                    border: 1px solid #ced4da;
                    width: 90px;
                    height  : 90px;
                    background-size: contain;
                    background-image: url('admin/assets/img/camara.png');
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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Job Work / Jangad</span></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left"></div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                            <span>{{ Session::get('studname') }}</span>
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
                        class="fa-solid fa-table-columns"></i></a> <a href="{{ url('jobwork1') }}">Job Work /
                    Jangad</a></strong>
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
                                                <p class="mb-0 fs-6"><small>Purchase</small></p>
                                            </div>
                                            <div class="col-lg-4 bordercol">
                                                <i class="fa-solid fa-pen-to-square"></i> <span
                                                    class="ml-3">0.00</span><br>
                                                <p class="mb-0"><small>Invoiced</small></p>
                                            </div>
                                            <div class="col-lg-4 bordercol">
                                                <i class="fa-solid fa-pen-to-square"></i> <span
                                                    class="ml-3">0</span><br>
                                                <p class="mb-0"><small>Vendor Bills</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="card-body">
                                @if (Session::has('message'))
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

                                <form action="{{ url('insertparty') }}" method="POST"
                                    enctype="multipart/form-data"> {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" name="info" value="individual"
                                                        class="form-check-input" checked=""> Individual
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" name="info" value="company"
                                                        class="form-check-input"> Company
                                                </label>
                                            </div>
                                            <div class="row form-group mt-2">
                                                <div class="col-10">
                                                    <input type="text" placeholder="Party Name..." required
                                                        name="name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-10">
                                                    <select class="custom-select d-block w-100" name="company"
                                                        required>
                                                        <option value="">Select Company...</option>
                                                        <option value="1">ASIANLAB GROWN DIAMONDS LLP -
                                                            24ABWFA3275E1ZB</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="file" name="image" class="fa-solid fa-camera float-right">
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-lg-6">
                                            <div class="card-body card-block">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Code
                                                            : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" placeholder="e.g. Brandom Freeman"
                                                            required name="code" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        {{-- <select class="custom-select d-block w-100" required="">
                                                            <option value="">Contact</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select> --}}
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" placeholder="Street..." required
                                                            name="street" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" placeholder="Street2..." name="street2"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <input type="text" placeholder="City..." required
                                                                    name="city" class="form-control">
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <select class="custom-select d-block w-100"
                                                                    name="state" required>
                                                                    <option value="">State...</option>
                                                                    <option value="Gujarat">Gujarat</option>
                                                                    <option value="Uttar Pradesh">Uttar Pradesh
                                                                    </option>
                                                                    <option value="Punjab">Punjab</option>
                                                                    <option value="Maharashtra">Maharashtra</option>
                                                                    <option value="Bihar">Bihar</option>
                                                                    <option value="Kerala">Kerala</option>
                                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <input type="number" placeholder="Zip" required
                                                                    name="zip" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col-12 col-md-9">
                                                        <select class="custom-select d-block w-100" name="country"
                                                            required>
                                                            <option value="India">India</option>
                                                            <option value="USA">USA</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="London">London</option>
                                                            <option value="Africa">Africa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">GST
                                                            Treatment : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select class="custom-select d-block w-100" name="gst"
                                                            required>
                                                            <option value="Consumer">Consumer</option>
                                                            <option value="Registered Business - Regular">Registered
                                                                Business - Regular</option>
                                                            <option value="Registered Business - Composition">
                                                                Registered Business - Composition</option>
                                                            <option value="Unregistered Business">Unregistered Business
                                                            </option>
                                                            <option value="Overseas">Overseas</option>
                                                            <option value="Special Economic Zone">Special Economic Zone
                                                            </option>
                                                            <option value="Deemed Export">Deemed Export</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">GSTIN
                                                            : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" placeholder="e.g. BE0477472701" required
                                                            name="gstin" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body card-block">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Job
                                                            Position : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" placeholder="e.g. Sales Director"
                                                            required name="position" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class="form-control-label">Phone
                                                            : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" name="phone" required
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label
                                                            class=" form-control-label">Mobile :
                                                        </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" name="mobile" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Email
                                                            : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="email" name="email" required
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label
                                                            class=" form-control-label">Website :
                                                        </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="type" placeholder="e.g. http://www.odoo.com"
                                                            name="website" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Title
                                                            : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select class="custom-select d-block w-100" name="title"
                                                            required>
                                                            <option value="">Select...</option>
                                                            <option value="Mister">Mister</option>
                                                            <option value="Miss">Miss</option>
                                                            <option value="Madam">Madam</option>
                                                            <option value="Doctor">Doctor</option>
                                                            <option value="Professor">Professor</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label
                                                            class=" form-control-label">Language
                                                            : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select class="custom-select d-block w-100" name="language"
                                                            required>
                                                            <option value="English (US)">English (US)</option>
                                                            <option value="Gujarati / ગુજરાતી">Gujarati / ગુજરાતી
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Tags
                                                            : </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select class="custom-select d-block w-100" name="tag"
                                                            required>
                                                            <option value="Tags">Tags</option>
                                                            <option value="2"></option>
                                                        </select>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-info mt-1 w-auto ms-4"> Save
                                        </button>
                                    </div>
                                </form>
                            </div>


                            <ul class="nav nav-tabs mx-4" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Contacts &
                                        Addresses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#salespurchase"
                                        role="tab" aria-controls="profile" aria-selected="false">Sales &
                                        Purchase</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contracthistory"
                                        role="tab" aria-controls="contact" aria-selected="false">Contract
                                        History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#internalnotes"
                                        role="tab" aria-controls="contact" aria-selected="false">Internal
                                        Notes</a>
                                </li>
                            </ul>
                            <div class="tab-content pl-3 p-1 mx-5 mb-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <button type="button" class="btn btn-light border-info btn-sm mt-3">
                                        Add </button>
                                </div>
                                <div class="tab-pane fade" id="salespurchase" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <h3>Menu 1</h3>
                                    <p>Some content here.</p>
                                </div>
                                <div class="tab-pane fade" id="contracthistory" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    <h3>Menu 2</h3>
                                    <p>Some content here.</p>
                                </div>
                                <div class="tab-pane fade" id="internalnotes" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    <h3>Menu 3</h3>
                                    <p>Some content here.</p>
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
                                                    <img class="align-self-center rounded-circle mr-3"
                                                        style="width:85px; height:85px;" alt=""
                                                        src="{{ URL::asset('admin/assets/images/admin.jpg') }}">
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
    <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/init/datatables-init.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/main.js') }} "></script>
    <script src="{{ URL::asset('admin/assets/js/lib/chosen/chosen.jquery.min.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
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
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script> --}}
</body>

</html>
