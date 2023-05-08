<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TP S6 P14 Web design Mai 2023</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css " rel="stylesheet" type="text/css">
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css " rel="stylesheet" />
    </head>
<body data-sidebar="dark">
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
          
                <div class="vertical-menu left-0">

                    <div data-simplebar class="h-100">

                        <div id="sidebar-menu">
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

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="page-content">
                        <div class="container-fluid">

                        <h1> L'IA-MAZING</h1>
                        

            <div class="row" style="clear: right;">
                <?php
                    foreach($articles as $art)
                    {  
                        $id=$art->idarticle;
                        $phrase=str_replace(' ', '-', $art->titre);
                ?>
                <div class="col-lg-4">
                    <div class="card">
                            <a href="{{  url('/detail/'.$phrase.'/'.$id)  }}">   
                                <button  class="btn btn-primary waves-effect waves-light me-1">
                                    LIRE
                                </button>  
                            </a> 
                        <div class="card-body">
                            <h3 class="card-title"> </h3>
                            <h1 class="card-title"><?php echo $art->titre; ?></h1>
                            <?php
                                $lienimage=$art->image;
                                $lienimage=str_replace('public', 'storage', $lienimage);
                            ?>
                            <p> <img width="250" height="200" src="data:image/png;base64,{{ $art->image }}" alt="image base64"/></p>
                            <p> <?php echo $art->resume; ?> </p>
                            <p> <?php echo $art->daty; ?> </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            </div>
            <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            ©  ETU001450 <span class="d-none d-sm-inline-block"> -Web et design <i class="mdi mdi-heart text-danger"></i> </span>
                        </div>
                    </div>
                </div>
            </footer>
            </div>

            </div>
            <div class="right-bar">
                <div data-simplebar class="h-100">

                    <div class="rightbar-title d-flex align-items-center px-3 py-4">

                        <h5 class="m-0 me-2">Settings</h5>

                        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                            <i class="mdi mdi-close noti-icon"></i>
                        </a>
                    </div>

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

                </div>
            </div>
            <div class="rightbar-overlay"></div>
</body>
</html>