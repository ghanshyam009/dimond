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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Settings</span></a>
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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('mainsetting') }}">Settings</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2"><a href="mainsetting{{ url('') }}">General Setting</a></li>

                <li class="stockli mt-2 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Users & Companies</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('settingusers') }}">Users</a></li>
                        <li><a class="dropdown-item" href="{{ url('settingcompanies') }}">Companies</a></li>
                        <li><a class="dropdown-item" href="{{ url('settingbackgroundimage') }}">Background Image</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="row form-group mt-2">
                                            
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
                                            <form action="{{ url('insertcreatesettinguser') }}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                            <div class="col col-md-12"><label class=" form-control-label">Name</label></div>
                                            <div class="col-11">
                                                <input type="text" placeholder="name" id="email-input" name="name" required class="form-control">
                                            </div>
                                            <div class="col col-md-12 mt-2"><label class=" form-control-label">Email Address</label></div>
                                            <div class="col-11">
                                                <input type="text" placeholder="email" id="email-input" name="login" required class="form-control">
                                            </div><br>
                                            <div class="col col-md-12 mt-2"><label class=" form-control-label">Password</label></div>
                                            <div class="col-11">
                                                <input type="text" placeholder="password" id="email-input" name="password" required class="form-control">
                                            </div><br>
                                            <div class="row form-group">
                                                <div class="col col-md-12 mt-2"><label class=" form-control-label">Language</label></div>
                                                <div class="col-11">
                                                    <?php $data=App\Models\createlanguage::get();?>
                                                  
                                                    <select class="custom-select d-block w-100" name="language" required="">
                                                        @foreach($data as $ans)
                                                    <option value="{{ $ans->language }}">{{ $ans->language }}</option>
                                                    @endforeach
                                                </select>
                                          </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-secondary mt-1"> Save </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <i class="fa-solid fa-camera float-right cameraborder"></i>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Account Rights</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#purchase" role="tab" aria-controls="profile" aria-selected="false">Allowed Ip</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#accounting" role="tab" aria-controls="contact" aria-selected="false">Preferences</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content pl-3 p-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <h6 class="mt-2">Manufacturing</h6>
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Stock : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Chocolate : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Laser : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Boiling : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Polish : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Final Stock : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Stock loss : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Notification : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Chatter : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Action Menu : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Seeds : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <h6 class="mt-2">Equipment Management</h6>
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Equipment : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <h6 class="mt-2">Accounting</h6>
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Invoicing : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <h6 class="mt-2">Inventory</h6>
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Purchase : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <h6 class="mt-2">Human Resources</h6>
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Employees : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Attendances : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <h6 class="mt-2">Technical</h6>
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Force Delete : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <h6 class="mt-2">Administration</h6>
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Administration : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <h6 class="mt-2">Other</h6>
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Partner Contract : </label></div>
                                                                <div class="col col-md-8">
                                                                    <select class="custom-select d-block w-100" required="">
                                                                    <option value="0"></option>
                                                                    <option value="1">SQ</option>
                                                                </select></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <div class="row">
                                                            <h6 class="mt-2">Final Stock Editor</h6>
                                                        </div>
                                                        <strong>Allow <label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label></strong>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <div class="row">
                                                            <h6 class="mt-2">.</h6>
                                                        </div>
                                                        <strong>Deny <label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label></strong>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <div class="row">
                                                            <h6 class="mt-2">Other</h6>
                                                        </div>
                                                        <div class="row">
                                                            <strong>Galaxy Detail <label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label></strong>
                                                        </div>
                                                        <div class="row">
                                                            <strong>Machine Management <label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label></strong>
                                                        </div>
                                                        <div class="row">
                                                            <strong>Stock Dashboard <label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                        <div class="row">.</div>
                                                        <div class="row">
                                                            <strong>Job Work <label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label></strong>
                                                        </div>
                                                        <div class="row">
                                                            <strong>Machine Supervisor <label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input"> <span class="switch-label"></span> <span class="switch-handle"></span></label></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="purchase" role="tabpanel" aria-labelledby="profile-tab">
                                            <h3>Menu 1</h3>
                                            <p>Some content here.</p>
                                        </div>
                                        <div class="tab-pane fade" id="accounting" role="tabpanel" aria-labelledby="contact-tab">
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
