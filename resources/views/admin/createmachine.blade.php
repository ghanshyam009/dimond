<!doctype html>
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


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  /> --}}
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    </head>

    <body>

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Machine Management</span>
                        </a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="header-left">
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
                <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('machinemanagement1') }}">Machine Management</a></strong>
                <ul class="stockul">
                    <li class="stockli mt-2 d-block d-md-inline-block"><a href="{{ url('machine') }}">Machine</a></li>
                </ul>
            </div>
            <div class="content" style="background-color: rgba(0,0,0,.03);">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-5">

                                        <div class="col-lg-12">
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
                                                <form action="{{ url('insertmachine') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                    {{ csrf_field() }}
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label class=" form-control-label">Machine Name : </label></div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="email-input" name="name" placeholder="name" required class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label class=" form-control-label">Growth Rate : </label></div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="number" id="email-input" name="rate" placeholder="Rate.." required class="form-control">
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-secondary btn-sm float-left"> Save </button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                        <li class="nav-item active">
                                            <a class="nav-link active show" id="Equipments-tab" data-toggle="tab" href="#Equipments" role="tab" aria-controls="home" aria-selected="true" aria-expanded="true">Machine</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content pl-3 p-1" id="myTabContent">
                                        <div class="tab-pane fade active show in" id="Equipments" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card-body">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">No</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">GrowthRate</th>
                                                                    <th scope="col">Delete</th>
                                                                    <th scope="col">Active</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $data=App\Models\machine::get(); ?>
                                                                @foreach($data as $ans)
                                                                <tr>
                                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                                    <td>{{ $ans->name }}</td>
                                                                    <td>{{ $ans->growthrate }} %</td>
                                                                    <td> <button type="submit" class="btn btn-success btn-sm float-center">
                                                                        <a href="{{url('deletemachine')}}/{{$ans->id}}">Delete</a></button>
                                                                    </td>
                                                                        <td>
                                                                            <input type="checkbox" data-id="{{ $ans->id }}" name="status" class="toggle-class js-switch" {{ $ans->status == 1 ? 'checked' : '' }} >
                                                                        </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>

                                                        </table>
                                                        <script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
                                                        elems.forEach(function(html) {
                                                            let switchery = new Switchery(html,  { size: 'small' });
                                                        });</script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p>Add a line</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Machineimage" role="tabpanel" aria-labelledby="Machineimage-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p>Add a line</p>
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
        </div>



  <script>
            $(document).ready(function(){
                $('.js-switch').change(function () {
                    let status = $(this).prop('checked') === true ? 1 : 0;
                    let userId = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: '{{ route('users.update.status') }}',
                        data: {'status': status, 'user_id': userId},
                        success: function (data) {
                            console.log(data.message);
                        }
                    });
                });
            });
        </script>
        <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js ')}}"></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js ')}}"></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}} "></script>
        <script src="{{ URL::asset('admin/assets/js/main.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/chosen.jquery.min.js')}} "></script>

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
            $(function() {
                $('.toggle-class').change(function() {
                    var status = $(this).prop('checked') == true ? 1 : 0;
                    var machine_id = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: '/status/update',
                        data: {'status': status, 'machine_id': machine_id},
                        success: function(data){
                            console.log(data.success)
                        }
                    });
                })
            });
        </script>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    </body>
</html>
