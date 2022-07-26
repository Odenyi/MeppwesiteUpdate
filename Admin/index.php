<?php
require"../dbconnect.php";
session_start();

if (!isset($_SESSION['user_id'])){
        header('location: ../AdminLogin/index.php');
    }
    $user_detail = fetchDB('users', 'user_id', $_SESSION['user_id']);
    $image = $user_detail->Photo;

?>
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Mepp Communications Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- material design cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark">
   <!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/mepplogo3.png" alt="logo-sm-dark" height="52">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/mepplogo3.png" alt="logo-dark" height="52">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/mepplogo3.png" alt="logo-sm-light" height="52">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/mepplogo3.png" alt="logo-light" height="52">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="input-group">
                    <button class="btn btn-rounded dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Projects <i class="mdi mdi-chevron-down ms-2"></i></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Jobs</a></li>
                        <li><a class="dropdown-item" href="#">Users</a></li>
                        <li><a class="dropdown-item" href="#">Projects</a></li>
                    </ul>
                    <input type="text" class="form-control bg-transparent" placeholder="Search.."
                        aria-label="Text input with dropdown button">
                    <span class="mdi mdi-magnify"></span>
                </div>

            </form>

            <div class="dropdown dropdown-mega d-none d-xl-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Charts</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end col -->
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0">Applications</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Ecommerce</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Email</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Projects</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tasks</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Contacts</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end col -->
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0">Extra Pages</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Light Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Compact Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Horizontal layout</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">FAQs</a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col -->

                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Charts</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end col -->
                                <div class="col-sm-5">
                                    <div>
                                        <img src="assets/images/megamenu-img.png" alt="megamenu-img"
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col -->
                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="top-icon">
                        <i class="ri-search-line"></i>
                    </div>

                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
                    <form class="p-3">
                        <div class="m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ...">
                                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end -->


            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="top-icon">
                        <i class="mdi mdi-apps"></i>
                    </div>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end -->

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <div class="top-icon">
                        <i class="mdi mdi-fullscreen"></i>
                    </div>
                </button>
            </div>
            <!-- end  -->

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="top-icon">
                        <i class="mdi mdi-bell"></i>
                    </div>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="ri-shopping-cart-line"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="ri-checkbox-circle-line"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <div class="d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end notification -->

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="../images/<?php  $image == null ?"dataanalytics.png": $image; echo $image ;?>"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">Malvika</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i
                            class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock
                        screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i
                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>
            <!-- end user -->

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <div class="top-icon">
                        <i class="mdi mdi-cog-outline mdi-spin"></i>
                    </div>
                </button>
            </div>
            <!-- end setting -->
        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.php" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
               
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Blogs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="blog.php">Blogs</a></li>
                        <li><a href="blog-edit.php">Add Blog</a></li>
                        <li><a href="blog-add.php">Add details form</a></li>
                    </ul>
                </li>
                <!-- end li -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Swiper Images</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="swiper.php">swiper Images</a></li>
                        <li><a href="swiper-edit.php">Add Swiper Image</a></li>
                        <li><a href="swiper-add.php">Add details Image form</a></li>
                    </ul>
                </li>
                <!-- end li -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Our services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="service.php">Services</a></li>
                        <li><a href="service-edit.php">Edit Services</a></li>
                        <li><a href="service-add.php">Add details form</a></li>
                    </ul>
                </li>
                <!-- end li -->

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Programs upload</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="program.php">Programs Advertised</a></li>
                        <li><a href="program-edit.php">Add Programs</a></li>
                        <li><a href="program-add.php">Add details form</a></li>
                    </ul>
                </li>
                <!-- end li -->
               

               
                
               
                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ri-eraser-fill"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-advanced.html">Form Advanced Plugins</a></li>
                        <li><a href="form-editors.html">Form Editors</a></li>
                        <li><a href="form-uploads.html">Form File Upload</a></li>
                        <li><a href="form-xeditable.html">Form X-editable</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-mask.html">Form Mask</a></li>
                    </ul>
                    <!-- end ul -->
                </li>
                <!-- end li -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-table-2"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                    <!-- end ul -->
                </li>
                <!-- end li -->
               
            </ul>
            <!-- end ul -->
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

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Droid</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                                <!-- end ol -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="p-4">
                                            <div class="d-flex">
                                                <div class="flex-1">

                                                    <h3 class="mb-3"><span class="counter_value" data-target="519545">0</span>
                                                    </h3>
                                                </div>
                                                <div class="">
                                                    <p class="badge bg-soft-primary text-primary fw-bold font-size-12 mb-0">
                                                        Daily</p>
                                                </div>
                                            </div>
                                            <h5 class="text-muted font-size-14 mb-0">New Visitors</h5>
                                        </div>
                                        <div>
                                            <div id="visitors_charts" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                    <!-- end cardbody -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="p-4">
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h3 class="mb-3">$<span class="counter_value" data-target="97450">0</span></h3>
                                                </div>
                                                <div class="">
                                                    <p class="badge bg-primary font-size-12 mb-0">Monthly</p>
                                                </div>
                                            </div>
                                            <h5 class="text-muted font-size-14">Revenue</h5>
                                            <div class="progress mt-2" style="height: 5px;">
                                                <div class="progress-bar bg-progress" role="progressbar" style="width: 70%"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>

                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <p class="mt-3 text-muted fw-bold font-size-14 mb-0">Since last month
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <p class="text-success font-size-13 mb-0 mt-3"><i
                                                            class="mdi mdi-debug-step-out "></i>87.4
                                                        %</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end cardbody -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="p-4">
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h3 class="mb-3">+<span class="counter_value" data-target="213545">0</span>
                                                    </h3>
                                                </div>
                                                <div class="">
                                                    <p class="badge bg-soft-primary text-primary fw-bold font-size-12">
                                                        Yearly</p>
                                                </div>
                                            </div>
                                            <h5 class="text-muted font-size-14 mb-0">Total Order</h5>
                                        </div>
                                        <div>
                                            <div id="order_charts" class="chart-spark" dir="ltr"></div>
                                        </div>
                                    </div>
                                    <!-- end cardbody -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="card">
                            <div class="card-body">
                                <div class="float-end d-none d-md-inline-block">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-sm btn-light active " id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                                aria-selected="true">Monthly</button>
                                        </li>
                                        <!-- end li -->
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-sm btn-light ms-2 py-1" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                                aria-selected="false">Yearly</button>
                                        </li>
                                        <!-- end li -->
                                    </ul>
                                    <!-- end ul -->
                                </div>
                                <div>
                                    <h4 class="card-title mb-4">Overview</h4>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div>
                                            <div id="spline_area_month" class="column-charts" dir="ltr">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab -->
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div>
                                            <div id="spline_area_year" class="column-charts" dir="ltr">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab -->
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end">
                                    <select class="form-select form-select-sm">
                                        <option selected>Apr</option>
                                        <option value="1">Mar</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Jan</option>
                                    </select>
                                </div>
                                <h4 class="card-title mb-4">Customer Trends by Month</h4>

                                <div id="line_chart" class="apex-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Yearly Report</a>
                                        <!-- item-->
                                    </div>
                                </div>
                                <!-- end dropdown -->
                                <h4 class="card-title mb-4">Earning Reports</h4>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <div class="mb-2">
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:68px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:45px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:55px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:70px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:48px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:35px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:54px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>

                                                </div>
                                                <!-- end -->
                                                <p class="text-muted text-truncate mb-2">Weekly Earnings</p>
                                                <h5 class="mb-0">$12,971</h5>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-sm-6">
                                            <div class="mt-5 mt-sm-0">
                                                <div class="mb-2">
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:28px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:45px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:31px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:70px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:48px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:35px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:54px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <p class="text-muted text-truncate mb-2">Monthly Earnings</p>
                                                <h5 class="mb-0">$21,235</h5>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                        <!-- item-->
                                    </div>
                                </div>
                                <!-- end dropdown -->
                                <h4 class="card-title font-size-16">Targets</h4>
                                <div class="">
                                    <div id="target_charts" class="apex-charts"></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="">
                                                <i class="mdi mdi-circle-double font-size-13 me-2 text-primary"></i>
                                            </div>
                                            <div>
                                                <h5 class="font-size-14">Weekly
                                                    Targets</h5>
                                                <h5 class="font-size-18 text-muted mb-0">$1845</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <div class="">
                                                <i class="mdi mdi-circle-double font-size-13 me-2 text-success"></i>
                                            </div>
                                            <div>
                                                <h5 class="font-size-14">Monthly
                                                    Targets</h5>
                                                <h5 class="font-size-18 text-muted mb-0">$29537</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                        <!-- item-->
                                    </div>
                                </div>
                                <!-- end dropdown -->
                                <h4 class="card-title mb-0">Yearly Revenue</h4>


                                <div class="text-center">
                                    <p class="text-muted font-size-14 fw-bold mt-4">Total Revenue</p>
                                    <h3 class="">$91,854</h3>
                                    <p class="text-muted font-size-15">
                                        <span class="text-success fw-bold">69%
                                            UP</span>
                                        From last
                                        year
                                    </p>
                                    <div>
                                        <div id="column_chart_datalabel" class="column-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body bg-transparent">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                    </div>
                                </div>
                                <!-- end dropdown -->
                                <h4 class="card-title mb-4">Recent Activity Feed</h4>

                                <div class="pe-lg-3" data-simplebar style="max-height: 350px;">
                                    <ul class="list-unstyled activity-wid">
                                        <!-- start li -->
                                        <li class="activity-list border-left">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="ri-edit-2-fill"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-13">28 Apr, 2021 </h5>
                                                    </div>
                                                    <div>
                                                        <small class="text-muted">12:07 am</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">Responded to need “Volunteer Activities”
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="ri-user-2-fill"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-13">21 Apr, 2021</h5>
                                                    </div>
                                                    <div>
                                                        <small class="text-muted">08:01 pm</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">Added an interest “Volunteer Activities”
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="ri-bar-chart-fill"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-13">17 Apr, 2021</h5>
                                                    </div>
                                                    <div>
                                                        <small class="text-muted">09:23 am</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">Joined the group “Boardsmanship
                                                        Forum”
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->

                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="ri-mail-fill"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-13">11 Apr, 2021 </h5>
                                                    </div>
                                                    <div>
                                                        <small class="text-muted">05:10 pm</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">Responded to need “In-Kind Opportunity”
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="ri-calendar-2-fill"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-13">07 Apr, 2021</h5>
                                                    </div>
                                                    <div>
                                                        <small class="text-muted">12:47 pm</small>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-0">Created need “Volunteer Activities”</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="ri-edit-2-fill"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-13">05 Apr, 2021 </h5>
                                                    </div>
                                                    <div>
                                                        <small class="text-muted">03:09 pm</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">Attending the event “Some New Event”</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    <i class="ri-user-2-fill"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-13">02 Apr, 2021 </h5>
                                                    </div>
                                                    <div>
                                                        <small class="text-muted">12:07 am</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-muted mb-0">Responded to need “In-Kind Opportunity”
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                    </ul>
                                    <!-- end ul -->
                                </div>
                            </div>
                            <!-- end body -->
                            <div>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Status</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>
                                <!-- end dropdown -->
                                <h4 class="card-title mb-4">Latest Transactions</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered border table-nowrap mb-0"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Customer ID</th>
                                                <th>Billing Name</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                            <!-- end tr -->
                                        </thead>
                                        <!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    #DD4951
                                                    <p class="text-muted mb-0 font-size-11">24-03-2021</p>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <img src="assets/images/users/avatar-1.jpg"
                                                                class="avatar-xs h-auto rounded-circle" alt="Error">
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                    class="text-dark">Julia Fox</a>
                                                            </h5>
                                                            <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                                Grenada</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <h6 class="mb-1 font-size-13">$32,960</h6>
                                                    <p class="text-success text-uppercase  mb-0 font-size-11"><i
                                                            class="mdi mdi-circle-medium"></i>paid</p>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1 font-size-13">Stock</h6>
                                                    <p class="text-primary mb-0 font-size-11">ORDS- 2546881</p>
                                                </td>
                                                <td>
                                                    <ul class="d-flex list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-heart-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                    </ul>
                                                </td>

                                                <td style="width: 134px">
                                                    <div class="btn btn-soft-primary btn-sm">View more<i
                                                            class="mdi mdi-arrow-right ms-1"></i></div>
                                                </td>
                                            </tr>
                                            <!-- end /tr -->
                                            <tr>
                                                <td>
                                                    #DD4952
                                                    <p class="text-muted mb-0 font-size-11">25-03-2021</p>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <img src="assets/images/users/avatar-2.jpg"
                                                                class="avatar-xs h-auto rounded-circle" alt="Error">
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                    class="text-dark">Max Jazz</a>
                                                            </h5>
                                                            <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                                Vatican City</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1 font-size-13">$30,785</h6>
                                                    <p class="text-success text-uppercase mb-0 font-size-11"><i
                                                            class="mdi mdi-circle-medium "></i>paid</p>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1 font-size-13">Out of Stock</h6>
                                                    <p class="text-primary mb-0 font-size-11">ORDS- 2546882</p>
                                                </td>
                                                <td>
                                                    <ul class="d-flex list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-heart-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                    </ul>
                                                </td>

                                                <td>
                                                    <div class="btn btn-soft-primary btn-sm">View more<i
                                                            class="mdi mdi-arrow-right ms-1"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end /tr -->
                                            <tr>
                                                <td>
                                                    #DD4953
                                                    <p class="text-muted mb-0 font-size-11">26-03-2021</p>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <img src="assets/images/users/avatar-3.jpg"
                                                                class="avatar-xs h-auto rounded-circle" alt="Error">
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                    class="text-dark">Jems Clarence</a>
                                                            </h5>
                                                            <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                                Grenada</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1 font-size-13">$19,191</h6>
                                                    <p class="text-warning text-uppercase  mb-0 font-size-11"><i
                                                            class="mdi mdi-circle-medium"></i>Pending</p>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1 font-size-13">Stock</h6>
                                                    <p class="text-primary mb-0 font-size-11">ORDS- 2546883</p>
                                                </td>
                                                <td>
                                                    <ul class="d-flex list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-heart-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn btn-soft-primary btn-sm">View more<i
                                                            class="mdi mdi-arrow-right ms-1"></i>
                                                    </div>
                                                </td>

                                            </tr>
                                            <!-- end /tr -->
                                            <tr>
                                                <td>
                                                    #DD4954
                                                    <p class="text-muted mb-0 font-size-11">27-03-2021</p>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                class="avatar-xs h-auto rounded-circle" alt="Error">
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                    class="text-dark">Prezy Summa</a>
                                                            </h5>
                                                            <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                                Maldivse</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1 font-size-13">$34,450</h6>
                                                    <p class="text-success text-uppercase mb-0 font-size-11"><i
                                                            class="mdi mdi-circle-medium "></i>paid</p>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1 font-size-13">Out of Stock</h6>
                                                    <p class="text-primary mb-0 font-size-11">ORDS- 2546884</p>
                                                </td>
                                                <td>
                                                    <ul class="d-flex list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-heart-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn btn-soft-primary btn-sm">View more<i
                                                            class="mdi mdi-arrow-right ms-1"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end /tr -->
                                            <tr>
                                                <td>
                                                    #DD4955
                                                    <p class="text-muted mb-0 font-size-11">29-03-2021</p>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                class="avatar-xs h-auto rounded-circle" alt="Error">
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                    class="text-dark">Julia Fox</a>
                                                            </h5>
                                                            <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                                Glory
                                                                Road</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1 font-size-13">$24,450</h6>
                                                    <p class="text-danger text-uppercase mb-0 font-size-11"><i
                                                            class="mdi mdi-circle-medium"></i>Canceled</p>
                                                </td>
                                                <td>
                                                    <h6 class="mb-1 font-size-13">Stock</h6>
                                                    <p class="text-primary mb-0 font-size-11">ORDS- 2546885</p>
                                                </td>
                                                <td>
                                                    <ul class="d-flex list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                        <li class="list-inline-item">
                                                            <a href="#" class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                                <span class="avatar-title bg-transparent text-body">
                                                                    <i class="mdi mdi-heart-outline"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <!-- end li -->
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="btn btn-soft-primary btn-sm">View more<i
                                                            class="mdi mdi-arrow-right ms-1"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end /tr -->
                                        </tbody>
                                        <!-- end tbody -->
                                    </table>
                                    <!-- end table -->
                                </div>
                                <!-- end tableresponsive -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-5 col-9">
                                        <h5 class="font-size-15 mb-3">Top Selling Product</h5>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-7 col-3">
                                        <ul class="list-inline user-chat-nav text-end mb-2">
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-magnify text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
                                                        <form class="p-2">
                                                            <div class="search-box">
                                                                <div class="position-relative">
                                                                    <input type="text" class="form-control rounded bg-light border-0"
                                                                        placeholder="Search...">
                                                                    <i class="mdi mdi-magnify search-icon"></i>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- end li -->
                                            <li class="list-inline-item d-none d-sm-inline-block">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="mdi mdi-cog text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">View Profile</a>
                                                        <a class="dropdown-item" href="#">Add Product</a>
                                                        <a class="dropdown-item" href="#">Remove Product</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- end li -->
                                        </ul>
                                        <!-- end ul -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title rounded bg-light">
                                                            <img src="assets/images/product/img-11.png" class="avatar-sm" alt="Error">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Nike (Black)</h6>
                                                        <a href="" class="text-primary fw-bold font-size-11">ID
                                                            :
                                                            #NC1097</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Total Sales</h6>
                                                        <p class="fw-bold mb-0">91</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Earning</h6>
                                                        <p class="fw-bold mb-0 text-success">
                                                            33%
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title rounded bg-light">
                                                            <img src="assets/images/product/img-9.png" class="avatar-sm" alt="Error">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Wool Runners (Pink)</h6>
                                                        <a href="" class="text-primary fw-bold font-size-11">ID
                                                            :
                                                            #NC1098</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Total Sales</h6>
                                                        <p class="fw-bold mb-0">90</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Earning</h6>
                                                        <p class="fw-bold mb-0 text-success">
                                                            35%
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title rounded bg-light">
                                                            <img src="assets/images/product/img-1.png" class="avatar-sm" alt="Error">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Air Jordan 1 TS</h6>
                                                        <a href="" class="text-primary fw-bold font-size-11">ID
                                                            :
                                                            #NC1099</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Total Sales</h6>
                                                        <p class="fw-bold mb-0">83</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Earning</h6>
                                                        <p class="fw-bold mb-0 text-success">
                                                            25%
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title rounded bg-light">
                                                            <img src="assets/images/product/img-4.png" class="avatar-sm" alt="Error">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Reebok</h6>
                                                        <a href="" class="text-primary fw-bold font-size-11">ID
                                                            :
                                                            #NC1100</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Total Sales</h6>
                                                        <p class="fw-bold mb-0">79</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Earning</h6>
                                                        <p class="fw-bold mb-0 text-success">
                                                            22%
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title rounded bg-light">
                                                            <img src="assets/images/product/img-3.png" class="avatar-sm" alt="Error">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Jordan Eclipse (Blue)</h6>
                                                        <a href="" class="text-primary fw-bold font-size-11">ID
                                                            :
                                                            #NC1101</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Total Sales</h6>
                                                        <p class="fw-bold mb-0">76</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <h6 class="mb-0">Earning</h6>
                                                        <p class="fw-bold mb-0 text-success">
                                                            30%
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                        </tbody>
                                        <!-- end t-body -->
                                    </table>
                                    <!-- end table -->
                                </div>
                                <!-- end table-responsive -->
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Upbond.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a>
                        </div>
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
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                    data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
            </div>
            <div class="form-check form-switch mb-5">
                <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch"
                    data-appStyle="assets/css/app-rtl.min.css">
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>


<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- jquery.vectormap map -->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>