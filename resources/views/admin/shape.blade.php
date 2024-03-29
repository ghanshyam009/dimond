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
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/paginate.css')}}">


    <style type="text/css">
        .sub-filter .subfilter-drop {
            left: 100% !important;
        }

        .sub-group .subgroup-drop {
            left: 100% !important;
        }

        .sub-favorite .subfavorite-drop {
            left: 100% !important;
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
                    <a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-recycle fa-lg"></i></a> &nbsp;
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><b><span>Batch </span></b></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <div class="dropdown for-message">
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/1.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/2.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/3.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/4.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active gap-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <strong class="card-title"><a href="{{ url('centerdepartment') }}">
                <i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('batch-module') }}">Batch</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2 d-block d-md-inline-block"><a href="{{ url('createlots') }}">Create Lot</a></li>
                <li class="stockli nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Configuration
                    </a>
                    <ul class="dropdown-menu mt6 px-0" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('shape') }}">Shape</a></li>
                        <li><a class="dropdown-item" href="{{ url('lotprocess') }}">Lot Process</a></li>
                        <li><a class="dropdown-item" href="{{ url('processreson') }}">Process & Reason</a></li>
                        <li><a class="dropdown-item" href="{{ url('finishtype') }}">Finish Type</a></li>
                        <li><a class="dropdown-item" href="{{ url('color') }}">Color</a></li>
                        <li><a class="dropdown-item" href="{{ url('purity') }}">Purity</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Shape </h4>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row ms-2 ms-md-0">
                        <div class="col-6 col-md-5 float-left">
                        <button type="button" class="btn btn-outline-secondary mt-1" data-bs-toggle="modal" data-bs-target="#addpacketsModal1">Create</button>
                        <div class="modal fade" id="addpacketsModal1" tabindex="-1" aria-labelledby="addpacketsModal1Label" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addpacketsModal1Label">Add Shape</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="{{ url('insertshape') }}" method="post" enctype="multipart/form-data" >
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-body card-block">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="email-input" name="name" required placeholder="Name.." class="form-control"></div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="modal-footer float-left">
                                                <button type="submit" class="btn btn-secondary ajaxSubmit"  >Create</button>
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>

                    <div class="col-6 col-md-7 ps-2 ps-md-0">
                        <div class="dropdown float-right float-md-left mr-3 mt-1">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa-solid fa-filter"></i>
                                Filter
                            </button>
                            <div class="dropdown-menu mt-5 py-0" aria-labelledby="dropdownMenuButton">
                                <form action="{{ url('search_shape') }}" name="search" method="get">
                                    <div class="search_multiple">
                                        <select class="form__input dropdown-item px-0" id="search" name="datesearch"
                                            onchange="form.submit();">
                                            <option selected disabled>Search Date..</option>
                                            <option value="today">Today</option>
                                            <option value="yesterday">Yesterday</option>
                                            <option value="last7days">Last 7 Days</option>
                                            <option value="last15days">Last 15 Days</option>
                                            <option value="lastmonth">Lastmonth</option>
                                            <option value="lastyear">Lastyear</option>
                                            <option value="thismonth">ThisMonth</option>
                                        </select><hr class="m-0">
                                        <select class="form__input dropdown-item px-0" name="shapn" id="search"
                                            onchange="form.submit();">
                                            <option selected disabled>Search Name..</option>
                                            @foreach ($data as $ans)
                                                <option value="{{ $ans->name }}">{{ $ans->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                                            <th>Name</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $ans)
                                        <tr>
                                           <td>{{ $loop->iteration}}</td>
                                             <td>
                                                <label class="form-check-label toggle_status" > {{ $ans->name }} </label>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-outline-secondary mt-1"><a href="shaperemove/{{ $ans->id}}"> Remove </a></button>
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

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect ").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found! ",
                    width: "100% "
                });
            });
        </script>

        <script>
            jQuery(document).ready(function() {
                jQuery('.filter .filter-btn').on("click", function(e) {
                    jQuery('.filter-sub').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('.group .group-btn').on("click", function(e) {
                    jQuery('.group-sub').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                jQuery('.favorite .favorite-btn').on("click", function(e) {
                    jQuery('.favorite-sub').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('search').selectpicker();
            });
        </script>
    <script>
        function ApplyFilter(search) {
            var batch_id = $('#batch_id').val();
            if (batch_id != null && batch_id != "") {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var formData = new FormData();
                formData.append("batch_id", batch_id);
                formData.append("batch_code", search);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    type: "POST",
                    url: "{{ url('getlot') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                    // console.log(res);
                        if (res.length > 0) {
                            $("#default_row").remove();
                            res.forEach(function(e) {
                                var arr = [];
                                var found = 0;
                                $('.uid').each(function() {
                                    var myVal = $(this).val();
                                    if (e.id == myVal)
                                        found++;
                                });

                                if (!found) {
                                    var table = document.getElementById('dataTable');
                                    var rowCount = table.rows.length - 1;
                                    if(rowCount == 0){
                                        var row = table.insertRow(-1);
                                        row.className = "hide";

                                        var cell1 = row.insertCell(-1);
                                        var element = document.createElement("input");
                                        element.type = "text";
                                        element.value = e.name;
                                        element.id = "name_" + rowCount;
                                        element.className = "name auto";
                                        element.name = "name[]";

                                        var elementuid = document.createElement("input");
                                        elementuid.type = "hidden";
                                        elementuid.value = e.id;
                                        elementuid.id = "uid_" + rowCount;
                                        elementuid.className = "uid";
                                        elementuid.name = "uid[]";
                                        cell1.appendChild(elementuid);


                                        var elementid = document.createElement("input");
                                        elementid.type = "hidden";
                                        elementid.value = e.batch_id;
                                        elementid.id = "id_" + rowCount;
                                        elementid.className = "id";
                                        elementid.name = "id[]";
                                        cell1.appendChild(element);
                                        cell1.appendChild(elementid);
                                        //cellid.appendChild(elementid);

                                        var cell2 = row.insertCell(-1);
                                        var element2 = document.createElement("input");
                                        element2.type = "text";
                                        element2.value = e.height;
                                        element2.id = "height_" + rowCount;
                                        element2.className = "height";
                                        element2.name = "height[]";
                                        cell2.appendChild(element2);

                                        var cell3 = row.insertCell(-1);
                                        var element3 = document.createElement("input");
                                        element3.type = "text";
                                        element3.value = e.length;
                                        element3.id = "length_" + rowCount;
                                        element3.className = "length";
                                        element3.name = "length[]";
                                        cell3.appendChild(element3);

                                        var cell4 = row.insertCell(-1);
                                        var element4 = document.createElement("input");
                                        element4.type = "text";
                                        element4.value = e.width;
                                        element4.id = "width_" + rowCount;
                                        element4.className = "width";
                                        element4.name = "width[]";
                                        cell4.appendChild(element4);

                                        var cell5 = row.insertCell(-1);
                                        var element5 = document.createElement("input");
                                        element5.type = "text";
                                        element5.value = e.shape;
                                        element5.id = "shape_" + rowCount;
                                        element5.className = "shape";
                                        element5.name = "shape[]";
                                        cell5.appendChild(element5);

                                        var cell7 = row.insertCell(-1);
                                        var element7 = document.createElement("input");
                                        element7.type = "text";
                                        element7.value = e.weight;
                                        element7.id = "weight_" + rowCount;
                                        element7.className = "weight";
                                        element7.name = "weight[]";
                                        cell7.appendChild(element7);
                                    }else{
                                        rowCount=rowCount-1;
                                        $("#name_"+rowCount).val(e.name);
                                        $("#uid_"+rowCount).val(e.id);
                                        $("#id_"+rowCount).val(e.id);

                                        $("#height_"+rowCount).val(e.height);
                                        $("#length_"+rowCount).val(e.length);
                                        $("#width_"+rowCount).val(e.width);
                                        $("#shape_"+rowCount).val(e.shape);
                                        $("#weight_"+rowCount).val(e.weight);
                                    }
                                    //***********************************************
                                    //add new row blanck
                                    var table = document.getElementById('dataTable');
                                    var rowCount = table.rows.length - 1;
                                    //console.log("second rowCount = ",rowCount);
                                    var row = table.insertRow(-1);
                                    row.className = "hide";
                                    //console.log(e);

                                    var cell1 = row.insertCell(-1);
                                    var element = document.createElement("input");
                                    element.type = "text";
                                    //element.value = e.name;
                                    element.id = "name_" + rowCount;
                                    element.className = "name auto";
                                    element.name = "name[]";
                                    //cell1.appendChild(element);

                                    //var cellid = row.insertCell(0);
                                    var elementuid = document.createElement("input");
                                    elementuid.type = "hidden";
                                    //elementuid.value = e.id;
                                    elementuid.id = "uid_" + rowCount;
                                    elementuid.className = "uid";
                                    elementuid.name = "uid[]";
                                    cell1.appendChild(elementuid);


                                    var elementid = document.createElement("input");
                                    elementid.type = "hidden";
                                    //elementid.value = e.batch_id;
                                    elementid.id = "id_" + rowCount;
                                    elementid.className = "id";
                                    elementid.name = "id[]";
                                    cell1.appendChild(element);
                                    cell1.appendChild(elementid);
                                    //cellid.appendChild(elementid);

                                    var cell2 = row.insertCell(-1);
                                    var element2 = document.createElement("input");
                                    element2.type = "text";
                                    //element2.value = e.height;
                                    element2.id = "height_" + rowCount;
                                    element2.className = "height";
                                    element2.name = "height[]";
                                    cell2.appendChild(element2);

                                    var cell3 = row.insertCell(-1);
                                    var element3 = document.createElement("input");
                                    element3.type = "text";
                                    //element3.value = e.length;
                                    element3.id = "length_" + rowCount;
                                    element3.className = "length";
                                    element3.name = "length[]";
                                    cell3.appendChild(element3);

                                    var cell4 = row.insertCell(-1);
                                    var element4 = document.createElement("input");
                                    element4.type = "text";
                                    //element4.value = e.width;
                                    element4.id = "width_" + rowCount;
                                    element4.className = "width";
                                    element4.name = "width[]";
                                    cell4.appendChild(element4);

                                    var cell5 = row.insertCell(-1);
                                    var element5 = document.createElement("input");
                                    element5.type = "text";
                                    //element5.value = e.shape;
                                    element5.id = "shape_" + rowCount;
                                    element5.className = "shape";
                                    element5.name = "shape[]";
                                    cell5.appendChild(element5);

                                    var cell7 = row.insertCell(-1);
                                    var element7 = document.createElement("input");
                                    element7.type = "text";
                                    //element7.value = e.weight;
                                    element7.id = "weight_" + rowCount;
                                    element7.className = "weight";
                                    element7.name = "weight[]";
                                    cell7.appendChild(element7);

                                    $("#name_"+rowCount).focus();
                                } else {
                                    alert('not valid');
                                }
                            });
                        }else{
                            alert('please select valid batch');
                        }
                    }
                });
            }
        }

        $('body').on('change', '.auto', function(e) {
            e.preventDefault();
            ApplyFilter(this.value);
            var text= $(this).val('');
            // console.log(text);
        });
  
        $(document).ready(function() {
            $("#submitBtn").click(function() {
               var from= $("#myForm").submit(); // Submit the form
            //    console.log(from);
            });
        });
        $(window).on('shown.bs.modal', function() {
            $('#addpacketsModal').modal('show');
            var table = document.getElementById('dataTable');
            var rowCount = table.rows.length - 1;
            if(rowCount > 1){
                $("#dataTable .hide").remove();
                addDefaultRow();
            }
                $("#name_0").val('');
                $("#id_0").val('');
                $("#height_0").val('');
                $("#length_0").val('');
                $("#width_0").val('');
                $("#shape_0").val('');
                $("#weight_0").val('');
                $("#batch_id").val(0);
        });
        $("#batch_id").change(function() {
            var table = document.getElementById('dataTable');
            var rowCount = table.rows.length - 1;
            if(rowCount > 1){
                $("#dataTable .hide").remove();
                addDefaultRow();
            }
            if (this.value != null && this.value != 0) {
                //$("#search").focus();
                $("#name_0").focus();
            }
        });
        function addDefaultRow(){
            var table = document.getElementById('dataTable');
            var rowCount = table.rows.length - 1;
            var row = table.insertRow(-1);
            row.className = "hide";

            var cell1 = row.insertCell(-1);
            var element = document.createElement("input");
            element.type = "text";
            element.id = "name_" + rowCount;
            element.className = "name auto";
            element.name = "name[]";

            var elementuid = document.createElement("input");
            elementuid.type = "hidden";
            elementuid.id = "uid_" + rowCount;
            elementuid.className = "uid";
            elementuid.name = "uid[]";
            cell1.appendChild(elementuid);


            var elementid = document.createElement("input");
            elementid.type = "hidden";
            elementid.id = "id_" + rowCount;
            elementid.className = "id";
            elementid.name = "id[]";
            cell1.appendChild(element);
            cell1.appendChild(elementid);

            var cell2 = row.insertCell(-1);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.id = "height_" + rowCount;
            element2.className = "height";
            element2.name = "height[]";
            cell2.appendChild(element2);

            var cell3 = row.insertCell(-1);
            var element3 = document.createElement("input");
            element3.type = "text";
            element3.id = "length_" + rowCount;
            element3.className = "length";
            element3.name = "length[]";
            cell3.appendChild(element3);

            var cell4 = row.insertCell(-1);
            var element4 = document.createElement("input");
            element4.type = "text";
            element4.id = "width_" + rowCount;
            element4.className = "width";
            element4.name = "width[]";
            cell4.appendChild(element4);

            var cell5 = row.insertCell(-1);
            var element5 = document.createElement("input");
            element5.type = "text";
            element5.id = "shape_" + rowCount;
            element5.className = "shape";
            element5.name = "shape[]";
            cell5.appendChild(element5);

            var cell7 = row.insertCell(-1);
            var element7 = document.createElement("input");
            element7.type = "text";
            element7.id = "weight_" + rowCount;
            element7.className = "weight";
            element7.name = "weight[]";
            cell7.appendChild(element7);
        }
        @if(isset($id))
            var url_p = '{{ route("createlotprint", ":id") }}';
            var id_p="{{ $id }}";
            url_p = url_p.replace(':id', id_p);
            window.open(url_p, "_blank");
            var url_r = '{{ route("batch-module") }}';
            window.location.href=url_r;
        @endif
    </script>
</body>

</html>
