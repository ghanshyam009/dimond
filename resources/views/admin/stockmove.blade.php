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

    <div id="right-panel" class="right-panel">

        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Stock</span></a>
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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('stock1') }}">Stock</a></strong>

            <ul class="stockul">
                <li class="stockli mt-2 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lots</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('stock1') }}">Lot</a></li>
                        <li><a class="dropdown-item" href="{{ url('packets') }}">Packets</a></li>
                    </ul>
                </li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#addpacketsModal">Add Packets</a></li>
                <li class="stockli"><a href="{{ url('cancelpackets') }}">Cancel Packets</a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#editpacketsModal">Edit Packets</a></li>
                <li class="stockli"><a href="{{ url('stockloss') }}">Stock Loss</a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#stockreportpacketsModal">Report</a></li>
                <li class="stockli"><a href="{{ url('weightloss') }}">Weight Loss</a></li>
                <li class="stockli"><a href="{{ url('chocolate') }}">Chocolate</a></li>
                <li class="stockli nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuration</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('location') }}">Location</a></li>
                        <li><a class="dropdown-item" href="{{ url('stockmove') }}">Stock Move</a></li>
                        <li><a class="dropdown-item" href="{{ url('stockquant') }}">Stock Quant</a></li>
                    </ul>
                </li>
            </ul>
            <div class="modal fade" id="addpacketsModal" tabindex="-1" aria-labelledby="addpacketsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addpacketsModalLabel">Add Packets</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('insertstockmove') }}" method="post" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            {{-- <form class="form-horizontal"> --}}

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" cclass=" form-control-label">Batch</label></div>
                                                    <div class="col-12 col-md-9">

                                                        <select class="custom-select d-block w-100" name="batch"  required="">
                                                            <option value="0">Please select</option>
                                                            @foreach($data as $ans)
                                                            <option value="{{ $ans->name }}">{{ $ans->name }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Pcs</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="email-input" name="pcs" placeholder="10" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Shape</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <?php $shape=App\Models\shap::get();?>
                                                        <select class="custom-select d-block w-100" name="shape" required="">
                                                            <option value="0">Please select</option>
                                                            @foreach($shape as $ans)
                                                            <option value="{{ $ans->name }}">{{ $ans->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Height(Micron)</label>
                                                        <input id="cc-payment" name="height" type="text" class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Length(MM)</label>
                                                        <input id="cc-payment" name="length" type="text" class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Width(MM)</label>
                                                        <input id="cc-payment" name="width" type="text" class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Weight(Ct)</label>
                                                        <input id="cc-payment" name="weight" type="text" class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer float-left">
                                    <button type="submit" class="btn btn-secondary ajaxSubmit"  >Create</button>
                                    <button type="button" class="btn btn-light">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="editpacketsModal" tabindex="-1" aria-labelledby="editpacketsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editpacketsModalLabel">Scan Packet</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-9"></div>
                                    <div class="col-lg-3">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col col-md-9"><label class=" form-control-label"><img src="{{URL:: asset('admin/assets/img/barcode.webp')}}" alt=""></label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label"></label></div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static"><input type="email" id="email-input" name="email-input" class="form-control"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Height(Micron)</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Length(MM)</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Shape</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select class="custom-select d-block w-100" required="">
                                                            <option value="0">Please select</option>
                                                            <option value="1">SQ</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Note</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Width(MM)</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Weight(Ct)</label></div>
                                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="10" class="form-control"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Confirm</button>
                            <button type="button" class="btn btn-light">Discard</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="stockreportpacketsModal" tabindex="-1" aria-labelledby="stockreportpacketsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="stockreportpacketsModalLabel">Stock Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Domain</label></div>
                                                    <div class="col-12 col-md-9"><label for="email-input" class=" form-control-label">Match All Records</label></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label"> </label></div>
                                                    <div class="col-12 col-md-9"><i class="fa-solid fa-arrow-right-long"></i> <button type="button" class="btn btn-light">12929 Record(S)</button>
                                                        <button type="button" class="btn btn-secondary">Edit Domain</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer float-left">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Print</button>
                            <button type="button" class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1"> Stock Moves</h4>
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
                    <div class="col-md-1 float-right">
                        <a href="{{ url('stockmove') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-list"></i></button></a>
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
                                            <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> Date</th>
                                            <th>Lot</th>
                                            <th>Source</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Pcs</th>
                                            <th>Weight(Ct)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $lotmove = App\Models\LotMove::get();?>
                                        @foreach ($moves as $move)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">{{ $move->date }}</label>
                                                </td>
                                                <td>{{ $move->moves_name }}</td>
                                                <td>{{ $move->name }}</td>
                                                <td>Stock</td>
                                                <td>{{ $move->locations_name }}</td>
                                                <td>{{ $move->pcs }}</td>
                                                <td>
                                                    <?php $total = 0 ?>
                                                    @foreach ($lotmove as $lot)
                                                        @if($move->date == $lot->created_at)
                                                            <?php $total += $lot->weight; ?>
                                                        @endif
                                                    @endforeach
                                                    {{ $total }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}} "></script>
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
