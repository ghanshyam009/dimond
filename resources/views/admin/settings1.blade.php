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
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn//pe-icon-7-stroke.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/chosen/chosen.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-item-has-children ">
                        <a href="{{ url('generalsetting') }}" class="acolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-cogs menuicon"></i><span style="margin-left:15px;"> General Settings</span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('manufacturing') }}" class="acolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-print menuicon"></i><span style="margin-left:15px;"> Manufacturing </span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="" class="acolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-credit-card menuicon"></i><span style="margin-left:15px;"> Purchase </span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="" class="acolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-indian-rupee-sign menuicon"></i><span style="margin-left:15px;"> Invoicing </span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="" class="acolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-users menuicon"></i><span style="margin-left:15px;"> Employees</span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="" class="acolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-clock menuicon"></i><span style="margin-left:15px;"> Attendances</span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>



    <div id="right-panel" class="right-panel" style="">



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

        <div class="content" style="width: 85%; float:right;">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a><a href="{{ url('settings1') }}"> Setting</a> </h4>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="content" style="background-color: rgba(0,0,0,.03); width: 85%; float:right;" style="">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Save </button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Discard </button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content" style="width: 85%; float:right;">
            <div class="animated fadeIn">

                <div class="ui-typography">
                    <div class="row">
                        <div class="col-md-12">


                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Typography</strong>
                                </div>

                                <div class="card-body">

                                    <div class="typo-headers">
                                        <h1 class="pb-2 display-4">Very Important Information H1</h1>
                                        <h2 class="pb-2 display-5">Sections & Modal Names H2</h2>
                                        <h3 class="pb-2 display-5">Articles & Block Headings H3</h3>
                                        <h4 class="pb-2 display-5">Random Tiny Heading H4</h4>
                                        <h5 class="pb-2 display-5">Random Tiny Heading H5</h5>
                                        <h6 class="pb-4 display-5">Random Tiny Heading H6</h6>
                                    </div>
                                    <div class="typo-articles">
                                        <p>
                                            The unique stripes of zebras make them one of the animals most familiar to people. They occur in a variety of habitats, such as grasslands, savannas, <span class="bg-flat-color-1 text-light">woodlands</span>,
                                            thorny scrublands, <span class="clickable-text">mountains</span> , and coastal hills. However, various anthropogenic factors have had a severe impact on zebra populations, in particular hunting for skins and
                                            habitat destruction. Grévy's zebra and the mountain <mark>highlighted text</mark> zebra are endangered.</p>
                                        <blockquote class="blockquote mt-3 text-right">
                                            <p>
                                                Blockquotes. However, various anthropogenic factors have had a severe impact on zebra populations, in particular hunting for skins. </p>
                                            <footer class="blockquote-footer">Jefferey Lebowski</footer>
                                        </blockquote>
                                        <p>
                                            lthough zebra species may have overlapping ranges, they do not interbreed. In captivity, plains zebras have been crossed with mountain zebras. The hybrid foals <span class="bg-flat-color-1 text-light">selected text</span>                                            lacked a dewlap and resembled their
                                        </p>
                                    </div>
                                    <div class="vue-lists">
                                        <h2 class="mb-4">Lists</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Unordered</h3>
                                                <ul>
                                                    <li>
                                                        A wide variety of hypotheses have been proposed to account for the evolution of the striking stripes of zebras.
                                                    </li>
                                                    <li>The more traditional of these (1 and 2, below) relate to camouflage.</li>
                                                    <li>The vertical striping may help the zebra hide in the grass by disrupting its outline.</li>
                                                    <li>
                                                        In addition, even at moderate distances, the striking striping merges to an apparent grey.
                                                        <ul class="vue-list-inner">
                                                            <li>However, the camouflage has been contested with arguments that most of a zebra's predator.</li>
                                                            <li>Such as lions and hyenas cannot see well at a distance.</li>
                                                            <li>More likely to have smelled or heard a zebra.</li>
                                                        </ul>
                                                    </li>
                                                    <li>Before seeing it from a distance, especially at night.</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 text-left">
                                                <div>
                                                    <h3>Ordered</h3>
                                                    <ol class="vue-ordered">
                                                        <li>
                                                            A wide variety of hypotheses have been proposed to account for the evolution of the striking stripes of zebras.
                                                        </li>
                                                        <li>The more traditional of these (1 and 2, below) relate to camouflage.</li>
                                                        <li>The vertical striping may help the zebra hide in the grass by disrupting its outline.</li>
                                                        <li>
                                                            In addition, even at moderate distances, the striking striping merges to an apparent grey.
                                                            <ul class="vue-list-inner">
                                                                <li>However, the camouflage has been contested with arguments that most of a zebra's predator.
                                                                </li>
                                                                <li>Such as lions and hyenas cannot see well at a distance.</li>
                                                                <li>More likely to have smelled or heard a zebra.</li>
                                                            </ul>
                                                        </li>
                                                        <li>Before seeing it from a distance, especially at night.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vue-misc">
                                        <h2 class="display-5 my-3">Misc</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Address</h3>
                                                <address class="mt-3">
                          <strong>SJØNNA</strong><br>
                          Nezalezhnasti Ave, 13 - 28A<br>
                          Minsk, Belarus, 220141<br>
                          +375 29 319-53-98<br>
                          <br>
                          <b>Vasili Savitski</b><br>
                          <a href="{{ url('mailto') }}">hello@examplemail.com</a>

                      </address>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="mb-3">Well</h3>
                                                <div class="jumbotron">
                                                    Zebras have excellent eyesight. It is believed that they can see in color. Like most ungulates, the zebra's eyes are on the sides of its head, giving it a wide field of view.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
            <!-- .animated -->
        </div>
        <!-- .content -->

        <div class="clearfix"></div>



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
