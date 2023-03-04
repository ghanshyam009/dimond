<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from technext.github.io/elaadmin/ui-typgraphy.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:35 GMT -->
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
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/style1.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/all.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-item-has-children ">
                        <a href="{{ url('generalsetting') }}" class="acolor" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-cogs menuicon"></i><span style="margin-left:15px;"> General Settings</span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('manufacturing') }}" class="acolor" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-print menuicon"></i><span style="margin-left:15px;">  Manufacturing  </span></a>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{ url('purchase') }}" class="acolor" aria-haspopup="true" aria-expanded="false"> <i class="fa-solid fa-credit-card menuicon"></i><span style="margin-left:15px;"> Purchase </span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('index1') }}"><span>Settings</span></a>
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
              <div class="card-header">
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('purchase1') }}">Purchase</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Orders</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('purchase1orders') }}">Purchase Orders</a></li>
                        <li><a class="dropdown-item" href="{{ url('purchase1vendors') }}">Vendors</a></li>
                    </ul>
                </li>
                <li class="stockli mt-2 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('purchase1products') }}">Products</a></li>
                    </ul>
                </li>
                <li class="stockli mt-2 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reporting</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('purchase1purchaseanalysis') }}">Purchase</a></li>
                    </ul>
                </li>
                <li class="stockli nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuration</a>
                    <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('purchase') }}">Setting</a></li>
                        <li><a class="dropdown-item" href="{{ url('vendorpricelists') }}">Vendor Pricelists</a></li>
                        <li class="group-result">Invoicing</li>
                        <li><a class="dropdown-item" href="{{ url('productcategories') }}">Product Categories</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </header>

        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title mt-2 ">
                                <h4 class="headerborder1"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a><a href="{{ url('settings1') }}"> Setting</a> </h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Save </button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Discard </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">

                <div class="ui-typography">
                    <div class="row">
                        <div class="col-md-12">


                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Users</strong>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong class="pb-2 display-5">Invite New Users</strong>
                                            <div class="input-group mt-1">
                                                <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc mb-3" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Enter E-mail Address">
                                                <div class="">
                                                    <span><button type="button" class="btn btn-info">Invite</button></span>
                                                </div>
                                            </div>
                                            <strong class="pb-2 display-5">Pending Invitations:</strong>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p>minalb123@gmail.com</p>
                                                    <p>shraddha15784@gmail.com</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>reena5148@gmail.com</p>
                                                    <p>hinahirpara548@gmail.com</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="    border-left: 1px solid lightgray;">
                                            <a href="#"> <i class="fa fa-group"></i> <strong>15 Active Users</strong> <i class="fa fa-question-circle pr-1"></i></a>
                                            <br>
                                            <a href="#"> <i class="fa  fa-long-arrow-right mt-3" style="color: #41757a;"></i><span class="mt-2" style="color: #41757a;"> Manage Users</span> </a>

                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Languages</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong>1 Language</strong>
                                            <br>
                                            <a href="#"> <i class="fa  fa-long-arrow-right mt-3" style="color: #41757a;"></i><span style="color: #41757a;"> Add Language</span> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Companies</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <address class="mt-3">
                                                <strong>ASIANLAB GROWN DIAMONDS LLP</strong><br>
                                               PLOT-2/A-1,OPP,PRANNATH HOSPITAL<br>
                                               VED ROAD<br>
                                                395004-SURAT<br>
                                                GUJARAT (IN)<br>
                                                INDIA<br>
                                               VAT:24ABWFA3275E1ZB<br>
                                            <a href="#"> <i class="fa  fa-long-arrow-right mt-4" style="color: #41757a;"></i><span style="color: #41757a;"> Update Info</span> </a>
                                            </address>

                                            <strong>Document Layout</strong>
                                            <p>Choose the layout of your Documents</p>

                                            <a href="#"> <i class="fa  fa-long-arrow-right" style="color: #41757a;"></i><span style="color: #41757a;"> Configure Document Layout</span> </a>

                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="    border-left: 1px solid lightgray;">
                                            <strong>1 Company</strong>
                                            <br>
                                            <a href="#"> <i class="fa  fa-long-arrow-right mt-3" style="color: #41757a;"></i><span style="color: #41757a;"> Manage Company</span> </a>
                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                    </div>
                                </div>


                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Progressive Web App (PWA)</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong><label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Enable Progressive Web Apps</strong>
                                            <p>Allow Users to install your website as an application on mobile and desktop.</p>

                                            <strong>Name <i class="fa fa-globe"></i></strong>
                                            <p>Used in the app install prompt.</p>
                                            <input type="text" id="city" placeholder="ASIANLAB GROWN DIAMONDS LLP" class="form-control">

                                            <strong>Background Color <i class="fa fa-globe mt-4"></i></strong>
                                            <p>Used on the splash screen when the applicstion is first launched. </p>
                                            <div class="stat-icon dib mb-4"></div><br>

                                            <strong> Icon (192*192) <i class="fa fa-globe"></i></strong>
                                            <p>These icons are used in places like the home screen,app launcher,task switcher,splash screen etc.</p>
                                            <i class="fa-solid fa-gem menuicons1"></i><br>

                                            <strong>Start URL <i class="fa fa-globe mt-4"></i></strong>
                                            <p>Your application will start from this URL when it is launched.</p>
                                            <input type="text" id="city" placeholder=" / " class="form-control">

                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Enable Offline Page</strong>
                                            <p>Show Offline page when there is no internet.</p>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="    border-left: 1px solid lightgray;">
                                            <strong>Short Name <i class="fa fa-globe"></i></strong>
                                            <p>Used on the user's home screen,launcher ,or other places.</p>
                                            <input type="text" id="city" placeholder="ALGD SURAT" class="form-control">

                                            <strong>Theme Color <i class="fa fa-globe mt-4"></i></strong>
                                            <p>Used on ttolbar,and may be in the app's preview in task switches. </p>
                                            <div class="stat-icon dib mb-4"></div><br>

                                            <strong> Icon (512*512) <i class="fa fa-globe"></i></strong>
                                            <p>These icons are used in places like the home screen,app launcher,task switcher,splash screen etc.</p>
                                            <i class="fa-solid fa-gem menuicons1"></i><br>

                                            <strong>App Shortcuts <i class="fa fa-globe mt-4"></i></strong>
                                            <p>Your application will start from this URL when it is launched.</p>
                                            <a href=""><i class="fa-solid fa-cogs" style="color: #41757a; font-size: 22px;"></i> <span style="color: #41757a;">Configure Shortcuts</span></a>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>


                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Backend Theme</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong>Default Preferences</strong>
                                            <p>Set the default theme preferences.</p>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Sidebar</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="custom-select d-block w-100">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Invisible</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Chatter</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="custom-select d-block w-100">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Normal</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <strong>Theme Colors</strong>
                                            <p>Set the main theme colors.</p>
                                            <div class="row">
                                                <div class="col-md-3">Brand</div>
                                                <div class="col-md-9">
                                                    <div class="color1"></div><br>
                                                </div>
                                                <div class="col-md-3">Primary</div>
                                                <div class="col-md-9">
                                                    <div class="color2"></div><br>
                                                </div>
                                                <div class="col-md-3">Required</div>
                                                <div class="col-md-9">
                                                    <div class="color3"></div>
                                                </div>
                                            </div><br>

                                            <strong>Background Image</strong>
                                            <p>Set the background image for the apps menu.</p>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Blend Mode</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="custom-select d-block w-100">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Normal</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-camera ml-5 mt-3" type="file" id="file-input" name="file-input" style="font-size: 7rem; color:lightgray;"></i><span>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="    border-left: 1px solid lightgray;">
                                            <strong>favicon</strong>
                                            <p>Set the favicon for the system.</p>
                                            <i class="fa-solid fa-gem menuicons1"></i><br>

                                            <strong>Menu Colors</strong>
                                            <p>Set the main menu colors.</p>
                                            <div class="row">
                                                <div class="col-md-3">Brand</div>
                                                <div class="col-md-9">
                                                    <div class="color4"></div><br>
                                                </div>
                                                <div class="col-md-3">Primary</div>
                                                <div class="col-md-9">
                                                    <div class="color5"></div><br>
                                                </div>
                                                <div class="col-md-3">Required</div>
                                                <div class="col-md-9">
                                                    <div class="color6"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Login Background</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Style</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="custom-select d-block w-100">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Right</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Background</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="custom-select d-block w-100">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Image</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Image</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="custom-select d-block w-100">
                                                        <option value="0">Please select</option>
                                                        <option value="1">abc.jpg</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Units of Measure</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong>Weight</strong>
                                            <p>Define your weight unit of Measure.</p>
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked=""> Kilograms
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input"> Pounds
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="    border-left: 1px solid lightgray;">
                                            <strong>Volume</strong>
                                            <p>Define your Volume unit of Measure.</p>
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked=""> Cubic Maters
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input"> Cubic Feet
                                                </label>
                                            </div>


                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Discuss</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong>Activities</strong>
                                            <p>Configure your activity types.</p>
                                            <a href="#"> <i class="fa  fa-long-arrow-right mt-2" style="color: #41757a;"></i><span class="mt-2" style="color: #41757a;"> Activity Types</span> </a>
                                            <br>
                                            <strong><label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Use Twilio ICE Servers</strong>
                                            <p>Add Your Twilio credentials for ICE sercers.</p>

                                            <strong><label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Restrict Template Rendering</strong>
                                            <p>Restrict mail Templates and jinja Rendering.</p>

                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="border-left: 1px solid lightgray;">
                                            <strong><label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Custom Email Servers</strong>
                                            <p>Configure your own email servers.</p>

                                            <br>
                                            <strong>Custo, ICE server list</strong>
                                            <p>Configure your ICE srever list for WebRTC</p>
                                            <a href="#"> <i class="fa  fa-long-arrow-right mt-2" style="color: #41757a;"></i><span class="mt-2" style="color: #41757a;"> ICE Servers</span> </a>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Statistics</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong><label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Digest Email</strong>
                                            <p>Add new usres as recipient of a periodic email with key maetrics.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Contacts</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong>Send SMS <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Send Texts to your contacts.</p>

                                            <strong>Odoo IAP <i class="fa fa-question-circle pr-1"></i><i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>View your IAP services and recharge your creadits.</p>
                                            <a href="#"> <i class="fa  fa-long-arrow-right mt-2" style="color: #41757a;"></i><span class="mt-2" style="color: #41757a;"> View My services</span> </a>

                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="border-left: 1px solid lightgray;">
                                            <strong><label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Partner Autocomplete</strong>
                                            <p>Automatically enrich your contact base with company data.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Pemissions</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong>Customer Accounts</strong>
                                            <p>Let your customers log in to see their documents.</p>
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label ">
                                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" checked=""> On invitation
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input"> free sign up
                                                </label>
                                            </div>
                                            <br>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Default Access Rights</strong>
                                            <p>Set custom access rights for new users</p>

                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="    border-left: 1px solid lightgray;">
                                            <strong><label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Password Reset</strong>
                                            <p>Enable password reset from login page</p>
                                            <a href="#"> <i class="fa  fa-long-arrow-right mt-2" style="color: #41757a;"></i><span class="mt-2" style="color: #41757a;"> Manage API Keys</span> </a>

                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Integrations</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Mail Plugin <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Integrate with mail client plugins</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Collaborate Pads </strong>
                                            <p>Use external pads in Odoo Notes</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Google Drive </strong>
                                            <p>Create and attach google drive documents to any record</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Google Spreadsheet </strong>
                                            <p>Extract and analyze Odoo data from google Spreadsheet</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>LDAP Authentication <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Use LDAP credentials to log in</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Geo Localization </strong>
                                            <p>GeoLocalize your partners</p>

                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4" style="border-left: 1px solid lightgray;">
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Outlook Calender <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Synchronize your Calender with outlook</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Google Calender <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Synchronize your Calender with Google calander</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Google Images <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Get product pictures using Barcode</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>OAuth Authentication </strong>
                                            <p>Use external accounts to log in (Google,Facebook,etc.)</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>Unsplash Image Library <i class="fa fa-question-circle pr-1"></i></strong>
                                            <p>Find free high-resolution images from Unsplash</p>
                                            <strong><label class="switch switch-3d switch-primary mr-3 mt-3"><input type="checkbox" class="switch-input" checked="true"> <span class="switch-label"></span> <span class="switch-handle"></span></label>reCAPTCHA </strong>
                                            <p>Protect your forms from spam and abuse.</p>

                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Developer Tools</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p>Activate the Developer Mode</p>
                                            <p>Activate the Developer Mode (With Assets)</p>
                                            <p>Activate the Developer Mode (With Tests Assets)</p>
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

    <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}}"></script>
    <script src="{{URL:: asset('admin/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>