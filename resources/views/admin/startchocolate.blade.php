<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Confirmation</span></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
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

        <!-- Header-->
        <div class="content" style="background-color: rgba(0,0,0,.03);">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                          
                            <div class="card-body">
                                <div class="row">
                                    <div class="tab-content pl-3 p-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                    <div class="card-body card-block">
                                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                      
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Machine Number :
                                                                </label></div>
                                                                <div class="col-12 col-md-8">
                                                                <select class="form__input dropdown-item px-0" name="seedn" id="search"
                                                                onchange="form.submit();">
                                                                <option selected disabled>selectName</option>
                                                            <?php $users =App\Models\Bactch::select('name')->distinct()->get(); ?>
                                                                @foreach ($users as $ans)
                                                                    <option value="{{ $ans->name }}">{{ $ans->name }}</option>
                                                                @endforeach
                                                            </select>                                                         
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Employee
                                                                    : </label></div>
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
                                                                <div class="col col-md-4"><label class=" form-control-label">Loose Weight(ct) :
                                                                </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="email" id="email-input" name="email-input" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Image
                                                                    : </label></div>
                                                                <div class="col-12 col-md-8">
                                                                    <input type="file" id="email-input" name="email-input" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Start Date :
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
                                                                <div class="col col-md-4"><label class=" form-control-label">pcs :
                                                                </label></div>
                                                            
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Weight(Ct) :
                                                                </label></div>
                                                               
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-4"><label class=" form-control-label">Avg. Weight(Ct) :
                                                                </label></div>
                                                               
                                                            </div>
                                                            <div class="chocolate text-center">
                                                                <button type="submit" class="btn btn-outline-secondary"><a href="#"> Confirm </a></button>

                                                            </div>
                                                            
                                                           
                                                        </form>
                                                    </div>
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
        <!-- Scripts -->
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
