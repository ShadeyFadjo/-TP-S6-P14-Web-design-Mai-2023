<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ETU001450</title>

        <!-- Fonts -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css " rel="stylesheet" type="text/css">
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css " rel="stylesheet" />

        <!-- Styles -->
        <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> -->
    </head>

<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="colored"> -->

<!-- Begin page -->
            <div id="layout-wrapper">

                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="d-flex">
                            
                            <div class="navbar-brand-box">
                                <a href="/index" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="/resources/assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="/resources/assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="/" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="/resources/assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="/resources/assets/images/logo-light.png" alt="" height="18">
                                    </span>
                                </a>
                            </div>

                        </div>

                        <div class="d-flex">

                            
                            <!-- <form class="app-search d-none d-lg-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="fa fa-search"></span>
                                </div>
                            </form> -->

                            <div class="dropdown d-inline-block d-lg-none ms-2">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                    aria-labelledby="page-header-search-dropdown">

                                    <form class="p-3" style="margin-right: 500px;">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                            <!-- <div class="dropdown d-none d-md-block ms-2">
                                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="me-2" src="/resources/assets/images/flags/us_flag.jpg" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="/resources/assets/images/flags/italy_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                                    </a>

                                    
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="/resources/assets/images/flags/french_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                                    </a>
                                </div>
                            </div> -->

                            <div class="dropdown d-none d-lg-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen font-size-24"></i>
                                </button>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                    <i class="mdi mdi-spin mdi-cog"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- ========== Left Sidebar Start ========== -->
                <div class="vertical-menu left-0">

                    <div data-simplebar class="h-100">

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
                            <!-- Left Menu Start -->
                            <ul class="metismenu list-unstyled" id="side-menu">
                                <li class="menu-title">Menu</li>

                                <li>
                                    <a href="{{ url('/') }}" class="waves-effect">
                                        <i class="ion ion-ios-albums"></i>
                                        <span class="badge rounded-pill bg-primary float-end"></span>
                                        <span>Pour l'IA-bonné</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/backoffice') }}" class="waves-effect">
                                        <i class="ion ion-md-add-circle-outline"></i>
                                        <span class="badge rounded-pill bg-primary float-end"></span>
                                        <span>Pour l'IA-dmin</span>
                                    </a>
                                </li>

                                <!-- <li>
                                    <a href="/Front" class="waves-effect">
                                        <i class="ion ion-ios-film"></i>
                                        <span class="badge rounded-pill bg-primary float-end"></span>
                                        <span>Liste Film</span>
                                    </a>
                                </li> -->

                                
                                
                                <!-- <li>
                                    <a href="/toFormAction" class="waves-effect">
                                        <i class="ion ion-md-videocam"></i>
                                        <span class="badge rounded-pill bg-primary float-end"></span>
                                        <span>Ajout Action</span>
                                    </a>
                                </li> -->
                                <!-- <li>
                                    <a href="/MapPlateau" class="waves-effect">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="badge rounded-pill bg-primary float-end"></span>
                                        <span>Plateau</span>
                                    </a>
                                </li> -->




                            </ul>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
                <!-- Left Sidebar End -->

                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="main-content">
                    <div class="page-content">
                        <div class="container-fluid">

                        <h1> L'IA-MAZING</h1>

                        <!-- <h2>LOGIN IA-dmin</h2> -->

                         <!-- <form action="{{ url('/office') }}" method="post" > -->
                                <div class="card" style="width: 300px;float: left;">
                                    <div class="card-body">
                                        <div class="row">

                                                <div class="mb-3">
                                                    <label class="form-label">Login</label>
                                                        <input data-parsley-type="alphanum" name="debut" type="text"
                                                            class="form-control" value="kaloina"
                                                            />
                                                    <br/>
                                                    <br/>
                                                    <label class="form-label">Mot de passe</label>
                                                        <input data-parsley-type="alphanum" name="fin" type="text"
                                                            class="form-control" value="1450"
                                                            />
                                                    <br/>
                                                    <br/>
                                                    <a href="{{ url('/office') }}">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Log In
                                                    </button>
                                                    </a>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        <!-- </form> -->
            </div>
            <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            © <script>document.write(new Date().getFullYear())</script> ETU001450 <span class="d-none d-sm-inline-block"> -Web et design <i class="mdi mdi-heart text-danger"></i> </span>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
            <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->

            <!-- Right Sidebar -->
            <div class="right-bar">
                <div data-simplebar class="h-100">

                    <div class="rightbar-title d-flex align-items-center px-3 py-4">

                        <h5 class="m-0 me-2">Settings</h5>

                        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                            <i class="mdi mdi-close noti-icon"></i>
                        </a>
                    </div>

                    <!-- Settings -->
                    <hr class="mt-0" />


                    <div class="px-4 py-2">
                        <h6 class="mb-3">Select Custome Colors</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input theme-color" type="radio" name="theme-mode"
                                id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                            <label class="form-check-label" for="theme-default">Default</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input theme-color" type="radio" name="theme-mode"
                                id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                            <label class="form-check-label" for="theme-red">Red</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input theme-color" type="radio" name="theme-mode"
                                id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                            <label class="form-check-label" for="theme-teal">Teal</label>
                        </div>
                    </div>


                    <h6 class="text-center mb-0 mt-3">Choose Layouts</h6>

                    <div class="p-4">
                        <div class="mb-2">
                            <img src="<%= request.getContextPath()%>/resources/assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                            <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                        </div>

                        <div class="mb-2">
                            <img alt="" class="img-thumbnail" src="<%= request.getContextPath()%>/resources/assets/images/layouts/layout-2.jpg">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="<%= request.getContextPath()%>/resources/assets/css/bootstrap-dark.min.css" data-appStyle="<%= request.getContextPath()%>/resources/assets/css/app-dark.min.css" />
                            <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                        </div>

                        <div class="mb-2">
                            <img alt="" class="img-thumbnail" src="<%= request.getContextPath()%>/resources/assets/images/layouts/layout-3.jpg">
                        </div>
                        <div class="form-check form-switch mb-5">
                            <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="<%= request.getContextPath()%>/resources/assets/css/app-rtl.min.css" />
                            <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                        </div>


                    </div>

                </div> <!-- end slimscroll-menu-->
            </div>
            <!-- /Right-bar -->

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
</body>


<!-- Mirrored from themesbrand.com/lexa/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jan 2023 07:48:46 GMT -->
</html>
