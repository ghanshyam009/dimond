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
        .hello {
            border: none;
            background-color: transparent;
        }

        table>tbody>tr>td>input {
            width: 160px;
            /* 170 */
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
                            <i class="fa fa-user-circle fa-2x"
                                aria-hidden="true"></i><span>{{ Session::get('studname') }}</span>
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
                        <h4 class="headerborder1">Job Work / New</h4>
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
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>NEW</h4>
                                    </div>
                                </div>

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


                                <form id="jobwork" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row mt-5">
                                        <div class="col-lg-6">
                                            <div class="card-body card-block">

                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Party
                                                            : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <?php $data = App\Models\party::get(); ?>
                                                        <select class="custom-select d-block w-100" name="party"
                                                            required>
                                                            <option value="">Party name...</option>
                                                            @foreach ($data as $ans)
                                                                <option value="{{ $ans->name }}">
                                                                    {{ $ans->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Date
                                                            : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input class="datetimepicker" type="datetime-local"
                                                            name="date" value="{{ $date }}" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Expected Return Date : </label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input class="datetimepicker" type="datetime-local"
                                                            name="return_date" required value="{{ $length }}">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Note
                                                            : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="email-input" name="note"
                                                            required class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="card-body card-block">
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Pcs :
                                                        </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" class="pcsval hello" name="pcs"
                                                            placeholder="0">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label class=" form-control-label">Total
                                                            Weight : </label> </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" class="weightval hello" name="weight"
                                                            placeholder="0.00" value="">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Avg.Height : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" class="heightval hello" name="height"
                                                            placeholder="0.00" value="">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Avg.length : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" class="lengthval hello" name="length"
                                                            placeholder="0.00" value="">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Avg.Width : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" class="widthval hello" name="width"
                                                            placeholder="0.00" value="">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4"><label
                                                            class=" form-control-label">Avg.Weight : </label></div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" class="average hello"
                                                            placeholder="0.00" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" id="createjobwork"
                                            class="btn btn-outline-info mt-1 ms-4 w-auto"> Save </button>
                                    </div>
                                </form>

                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">Job Work
                                            Lines</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#otherinfo"
                                            role="tab" aria-controls="profile" aria-selected="false">Other
                                            Information </a>
                                    </li>
                                </ul>
                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <table id="dataTable" class="cover table table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#. Name</th>
                                                                <th scope="col">Pcs</th>
                                                                <th scope="col">Weight</th>
                                                                <th scope="col">Height</th>
                                                                <th scope="col">Length</th>
                                                                <th scope="col">Width</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="default_row">
                                                                <td>
                                                                    <input type="text" id="name_0"
                                                                        class="auto" />
                                                                </td>
                                                                <td><input type="text" id="pcs_0"
                                                                        class="pcs" /></td>
                                                                <td><input type="text" id="weight_0"
                                                                        class="weight" /></td>
                                                                <td><input type="text" id="height_0"
                                                                        class="height" /></td>
                                                                <td><input type="text" id="length_0"
                                                                        class="length" /></td>
                                                                <td><input type="text" id="width_0"
                                                                        class="width" /></td>
                                                                <td><button type='button'
                                                                        class='btnDelete btn-close mt-1'></button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show " id="otherinfo" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-body card-block">
                                                    <form action="#" method="post" enctype="multipart/form-data"
                                                        class="form-horizontal">
                                                        <div class="row form-group1">
                                                            <div class="col col-md-4"><label
                                                                    class=" form-control-label">User: </label>
                                                            </div>
                                                            <div class="col-12 col-md-8">
                                                                <select class="custom-select d-block w-100"
                                                                    name="party" required="">
                                                                    <option value="0">Administrator </option>
                                                                    <option value=""></option>
                                                                </select>
                                                            </div>
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

                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>

        <!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-md-2"></div>
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Send Message <span class="profilespan">Log Note</span><span
                                        class="profilespan"></span></h1>
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
    <script src="{{ URL::asset('admin/assets/cdn/js/chosen.jquery.min.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script>
        $('#createjobwork').click(function(e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById("jobwork"));
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                type: "POST",
                url: "{{ url('insertjobwork') }}",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(response) {
                    location.reload();
                },
            });
        });
    </script>

    <script>
        function ApplyFilter(search) {}
        var sum = 0;
        $('table').on('change', '.auto', function(e) {
            e.preventDefault();
            $(this).val('');
            $("tbody").append(
                '<tr class="default_row"><td><input type="text" id="name_0" class="auto" /></td><td><input type="text" id="pcs_0" class="pcs" /></td><td><input type="text" id="weight_0" class="weight" /></td><td><input type="text" id="height_0" class="height" /></td><td><input type="text" id="length_0" class="length"/></td><td><input type="text" id="width_0" class="width" /></td><td><button type="button" class="btnDelete btn-close mt-1"></button></td></tr>'
            );
        });

        var pcs = 0;
        $('table').on('change', '.pcs', function(e) {
            e.preventDefault();
            pcs += parseFloat($(this).val());
            $('.pcsval').val(pcs);

        });

        var weight = 0;
        var average = 1;
        var aver = 0
        $('table').on('change', '.weight', function(e) {
            e.preventDefault();
            var aver = average++;
            weight += parseFloat($(this).val());
            $('.weightval').val(weight);
            $('.average').val(weight / aver);
        });

        var height = 0;
        var heightavg = 1;
        var havg = 0;
        $('table').on('change', '.height', function(e) {
            e.preventDefault();
            var havg = heightavg++;
            height += parseFloat($(this).val());
            $('.heightval').val(height / havg);
        });

        var length = 0;
        var lengthavg = 1;
        var lavg = 0;
        $('table').on('change', '.length', function(e) {
            e.preventDefault();
            var lavg = lengthavg++;
            length += parseFloat($(this).val());
            $('.lengthval').val(length / lavg);
        });

        var width = 0;
        var widthavg = 1;
        var wavg = 0;
        $('table').on('change', '.width', function(e) {
            e.preventDefault();
            var wavg = widthavg++;
            width += parseFloat($(this).val());
            $('.widthval').val(width / wavg);
        });

        $(document).ready(function() {
            $("#dataTable").on('click', '.btnDelete', function() {
                var eco = $(this).closest('tr').remove();
                var pcsmain = $('.pcsval').val();
                var pcs = $(eco).children("td").children('.pcs').val();
                $('.pcsval').val(pcsmain - pcs);

            });
        });

        // $(document).ready(function() {
        //     $("#dataTable").on('click', '.btnDelete', function() {
        //         // var value = $('.pcs').val().replace();
        //         // console.log(value);
        //         $(this).closest('tr').remove();
        //     });
        // });
    </script>

</body>

</html>
