<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('admin.head')
<body>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-recycle fa-lg"></i></a> &nbsp;
                    <a class="navbar-brand" href="{{ url('batch-module') }}"><b><span>Batch / New </b></span></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    </div>
                    @include('admin.logout')
                </div>
            </div>
        </header>
        <div class="card-header">
            <strong class="card-title"><a href="{{ url('batch-module') }}">
                <i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('batch-module') }}">Batch</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2 d-block d-md-inline-block"><a href="{{ url('createlots') }}">Create Lot</a></li>
                <li class="stockli nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Configuration
                    </a>
                    <ul class="dropdown-menu mt6 px-0" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('shape') }}">Shape</a></li>
                        <li><a class="dropdown-item" href="{{ url('lotprocess') }}">Lot Process</a></li>
                        <li><a class="dropdown-item" href="{{ url('process&reson') }}">Process & Reason</a></li>
                        <li><a class="dropdown-item" href="{{ url('finishtype') }}">Finish Type</a></li>
                        <li><a class="dropdown-item" href="{{ url('color') }}">Color</a></li>
                        <li><a class="dropdown-item" href="{{ url('purity') }}">Purity</a></li>
                    </ul>
                </li>
            </ul>
            <div class="modal fade" id="addpacketsModal" tabindex="-1" aria-labelledby="addpacketsModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addpacketsModalLabel">Create Lot</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('savelot') }}" method="post" id="myForm">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select"
                                                        class=" form-control-label">Batch</label></div>
                                                <div class="col-12 col-md-6">
                                                    <select class="custom-select d-block w-100" required=""
                                                        id="batch_id">
                                                        <option value="0">Please select</option>
                                                        <option value="mix">Mix</option>
                                                        @foreach ($data as $ans)
                                                            <option value="{{ $ans->id }}">
                                                                {{ $ans->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-3"><label
                                                        class=" form-control-label">Print</label></div>
                                                <div class="col-12 col-md-6 ps-0">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label d-flex">
                                                            <input type="radio" id="inline-radio1"
                                                                name="inline-radios" value="option1"
                                                                class="form-check-input" checked>Lot
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                            href="#home" role="tab" aria-controls="home"
                                                            aria-selected="true">Add Packets</a>
                                                    </li>
                                                </ul>
                                                <div class="table-responsive">
                                                    <table id="dataTable" class="cover table table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Height(Micro)</th>
                                                                <th>Length(MM)..</th>
                                                                <th>Width(MM)</th>
                                                                <th>Shape</th>
                                                                <th>Weight(Ct)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr id="default_row">
                                                                <td> <input type="text" id="name_0"
                                                                        class="auto1" name="name[]" /><input
                                                                        type="hidden" id="id_0"
                                                                        name="id[]" /></td>
                                                                <td><input type="text" id="height_0"
                                                                        name="height[]" /></td>
                                                                <td><input type="text" id="length_0"
                                                                        name="length[]" /></td>
                                                                <td><input type="text" id="width_0"
                                                                        name="width[]" /></td>
                                                                <td><input type="text" id="shape_0"
                                                                        name="shape[]" /></td>
                                                                <td><input type="text" id="weight_0"
                                                                        name="weight[]" /></td>
                                                                <td><input type="text" id="height_1" /></td>
                                                                <td><input type="text" id="length_1" /></td>
                                                                <td><input type="text" id="width_1" /></td>
                                                                <td><input type="text" id="shape_1" /></td>
                                                                <td><input type="text" id="pcs_1" /></td>
                                                                <td><input type="text" id="weight_1" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="text" id="weight_0"
                                                                        name="weight[]" /></td>
                                                                <td><input type="text" id="height_1" /></td>
                                                                <td><input type="text" id="length_1" /></td>
                                                                <td><input type="text" id="width_1" /></td>
                                                                <td><input type="text" id="shape_1" /></td>
                                                                <td><input type="text" id="pcs_1" /></td>
                                                                <td><input type="text" id="weight_1" /></td>
                                                            </tr>
                                                        </tbody>

                                                    </table>

                                                </div>
                                                <div class="modal-footer float-left">
                                                    <button type="button" id="submitBtn"
                                                        class="btn btn-secondary">Create</button>
                                                    <button type="reset" class="btn btn-light"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            <div class="content" style="background-color: rgba(0,0,0,.03);">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 mt-4">
                            <div class="card">
                                @if (Session::has('message'))
                                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                                @endif
                                <div class="card-header">
                                    <h4> <i class="fa-solid fa-pen-to-square"></i> Batch </h4>
                                </div>
                                <div class="card-body">
                                    <form action={{ url('insertbatch') }} method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="col col-md-12">
                                            <input id="cc-name" name="name" type="text"
                                                class="form-control cc-name valid" required data-val="true"
                                                data-val-required="Please enter the name on card"
                                                autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                                aria-describedby="cc-name" placeholder="New">

                                        </div>
                                        <div class="col-md-8">
                                            <a href=""><button type="submit"
                                                    class="btn btn-outline-secondary mt-1"> Save </button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
            <script src="{{ URL::asset('admin/assets/cdn/js/jquery.min.js') }} "></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/popper.min.js') }} "></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/matchHeight.min.js') }}"></script>
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
            <script src="{{ URL::asset('admin/assets/js/main.js') }}"></script>
            <script src="{{ URL::asset('admin/assets/cdn/js/chosen.jquery.min.js') }}"></script>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
            </script>
</body>
</html>
