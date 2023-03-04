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
                <li class="stockli mt-2"><a href="{{ url('mainsetting') }}">General Setting</a></li>

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
                    <div class="col-md-2">
                        <h4 class="headerborder1">Companies / New</h4>
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
                      
                                <div class="row mt-5">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General Information</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content pl-3 p-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row mt-5">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
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
                                                        <form action="{{ url('insertcompany') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            {{ csrf_field() }}
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Company Name</label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" placeholder="company name" id="email-input" name="name" class="form-control">
                                                                </div>
                                                            </div>
                                                         <div class="row form-group">
                                                
                                                                    <div class="col col-md-4"><label class=" form-control-label">Stat :</label></div>
                                                                    <div class="col-12 col-md-8">
                                                                        <?php $data=App\Models\stat::get();?>
                                                                        <select class="custom-select d-block w-100" id="state" name="stat" required="">
                                                                            @foreach($data as $key =>$ans)
                                                                            <option value="{{ $ans->state_id }}">{{ $ans->state_title }}</option>
                                                                       
                                                                            @endforeach
                                                                        </select>
                                                                    </div><br>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-4"><label class=" form-control-label">Dist :</label></div>
                                                                    <div class="col-12 col-md-8">
                                                                        <select class="form__input js-example-basic-single custom-select d-block w-100" name="dist" id="district" required="">
                                                                            <option selected="">Dist..</option>
                                                                         
                                                                        </select>
                                                                    </div>
                                           
                                                              
                                                         
                                                        </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Address :
                                                                </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" placeholder="Street.." id="email-input" name="address" class="form-control">
                                                                </div>
                                                            </div>
                                                      
                                                            
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">GSTNO :
                                                                    </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" id="email-input" name="gstno" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Company Registry :
                                                                    </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" id="email-input" name="comregister" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Currency : </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <select class="custom-select d-block w-100" name="currency" required="">
                                                                        <option value="0">INR</option>
                                                                        <option value="rs">Rs</option>
                                                                        <option value="doller">Doller</option>
                                                                        <option value="pound">Pound</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                    
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Phone :
                                                                    </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" id="email-input" name="phone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Mobile
                                                                        : </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" id="email-input" name="mobile" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Email :
                                                                    </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" id="email-input" name="email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Website
                                                                        : </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="text" placeholder="e.g. http://www.odoo.com" id="email-input" name="website" class="form-control">
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                              <button type="submit" class="btn btn-outline-secondary mt-1"> Save </button>
                                            </form>
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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script>
            $('#state').change(function() {
                var sid = $(this).val();
                // alert(sid);
                if (sid) {
                    $.ajax({
                        type: "get",
                        url: "{{url('/getdis')}}/" + sid,
                        success: function(res) {
                            if (res) {
                                $("#district").empty();
                                $("#district").append('<option>Select district</option>');
                                $.each(res, function(key, value) {
                                    $("#district").append('<option value="' + key + '">' + value + '</option>');
                                });
                            }
                        }
                    });
                } else {
                    alert('hello');
                }
            });
    
        </script>

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





