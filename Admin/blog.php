<?php
include"../dbconnect.php";

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Products | Upbond - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- ION Slider -->
    <link href="assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark">
    
    <?php
        echo $header;
    ?>
    

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Products</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <h5>Footwear</h5>
                                                <ol class="breadcrumb p-0 bg-transparent mb-2">
                                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Men
                                                            Shoes</a></li>
                                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Running
                                                            Shoes</a></li>

                                                </ol>
                                                <!-- end ol -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <select class="form-select my-3 w-50" aria-label="Default select example">
                                                <option selected>Sort by</option>
                                                <option value="1">Popularity</option>
                                                <option value="2">Newest</option>
                                                <option value="3">Summer-Collection</option>
                                            </select>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-md-6">
                                            <div class="float-md-end">
                                                <i class="mdi mdi-account-outline text-muted me-2 mdi-24px"></i>
                                                <i class="mdi mdi-cart-outline text-muted me-2 mdi-24px"></i>
                                                <i class="mdi mdi-menu text-muted mdi-24px"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row g-0">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <div class="position-relative">
                                                        <div class="">
                                                            <span
                                                                class="product-ribbon badge bg-warning">Trending</span>
                                                        </div>
                                                        <div class="product-like">
                                                            <a href="#">
                                                                <i class="mdi mdi-heart-outline mdi-24px"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/product/img-4.png" alt="img-1"
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                                <!-- end product-img -->
                                                <div class="d-flex">
                                                    <div class="flex-1 ">
                                                        <h5 class="font-size-15 mt-2"><a href="#"
                                                                class="text-dark">Jordan
                                                                Eclipse</a></h5>
                                                        <div class="">
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mt-3 mb-0">$299<del
                                                                class="text-muted ms-1 font-size-13">$399</del>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <!-- end d-flex -->
                                                <button class="btn btn-soft-primary w-100 mt-3"><i
                                                        class="mdi mdi-cart me-2 text-soft-primary"></i> Add to
                                                    Cart</button>
                                            </div>
                                            <!-- end product-box -->
                                        </div>
                                        <!-- end col -->
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <div class="product-like">
                                                        <a href="#">
                                                            <i class="mdi mdi-heart-outline mdi-24px"></i>
                                                        </a>
                                                    </div>
                                                    <img src="assets/images/product/pro-2.png" alt="img-2"
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                                <!-- end product-box -->
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-15 mt-2"><a href="#" class="text-dark">Wool
                                                                Runners</a></h5>
                                                        <div class="">
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star-half-full text-warning"></span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mt-3 mb-0">$579<del
                                                                class="text-muted ms-1 font-size-13">$889</del>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <!-- end d-flex -->
                                                <button class="btn btn-soft-primary w-100 mt-3"><i
                                                        class="mdi mdi-cart me-2 text-soft-primary"></i> Add to
                                                    Cart</button>
                                            </div>
                                            <!-- end product-box -->
                                        </div>
                                        <!-- end col -->
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <div class="position-relative">
                                                        <div>
                                                            <span class="product-ribbon badge bg-success">20% OFF</span>
                                                        </div>
                                                        <div class="product-like">
                                                            <a href="#">
                                                                <i class="mdi mdi-heart-outline mdi-24px"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/product/pro-3.png" alt="img-3"
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                                <!-- end product-img -->
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-15 mt-2"><a href="#"
                                                                class="text-dark">Adidas
                                                                (Blue)</a></h5>
                                                        <div class="">
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mt-3 mb-0">$600<del
                                                                class="text-muted ms-1 font-size-13">$850</del>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <!-- end d-flex -->
                                                <button class="btn btn-soft-primary w-100 mt-3"><i
                                                        class="mdi mdi-cart me-2 text-soft-primary"></i> Add to
                                                    Cart</button>
                                            </div>
                                            <!-- end product-box -->
                                        </div>
                                        <!-- end col -->
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <div class="product-like">
                                                        <a href="#">
                                                            <i class="mdi mdi-heart-outline mdi-24px"></i>
                                                        </a>
                                                    </div>
                                                    <img src="assets/images/product/pro-4.png" alt="img-4"
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                                <!-- end product-img -->
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-15 mt-2"><a href="#"
                                                                class="text-dark">Reebok
                                                                (Gray)</a></h5>
                                                        <div class="">
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star-half-full text-warning"></span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mt-3 mb-0">$315<del
                                                                class="text-muted ms-1 font-size-13">$550</del>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <!-- end d-flex -->
                                                <button class="btn btn-soft-primary w-100 mt-3"><i
                                                        class="mdi mdi-cart me-2 text-soft-primary"></i> Add to
                                                    Cart</button>
                                            </div>
                                            <!-- end product-box -->
                                        </div>
                                        <!-- end col -->
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <div class="position-relative">
                                                        <div>
                                                            <span class="product-ribbon badge bg-danger">Sale</span>
                                                        </div>
                                                        <div class="product-like">
                                                            <a href="#">
                                                                <i class="mdi mdi-heart-outline mdi-24px"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <img src="assets/images/product/pro-5.png" alt="img-5"
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                                <!-- end product-img -->
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-15 mt-2"><a href="#" class="text-dark">Nike
                                                            </a></h5>
                                                        <div class="">
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star-outline text-warning"></span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mt-3 mb-0">$449<del
                                                                class="text-muted ms-1 font-size-13">$900</del>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <!-- end d-flex -->
                                                <button class="btn btn-soft-primary w-100 mt-3"><i
                                                        class="mdi mdi-cart me-2 text-soft-primary"></i> Add to
                                                    Cart</button>
                                            </div>
                                            <!-- end product-box -->
                                        </div>
                                        <!-- end col -->
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <div class="product-like">
                                                        <a href="#">
                                                            <i class="mdi mdi-heart-outline mdi-24px"></i>
                                                        </a>
                                                    </div>
                                                    <img src="assets/images/product/img-8.png" alt="img-6"
                                                        class="img-fluid mx-auto d-block">

                                                </div>
                                                <!-- end product-img -->
                                                <div class="d-flex">
                                                    <div class="flex-1">
                                                        <h5 class="font-size-15 mt-2"><a href="#" class="text-dark">Air
                                                                Jordan 1
                                                                TS
                                                            </a></h5>
                                                        <div class="">
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star text-warning"></span>
                                                            <span class="mdi mdi-star-outline text-warning"></span>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="mt-3 mb-0">$210<del
                                                                class="text-muted ms-1 font-size-13">$350</del>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <!-- end d-flex -->
                                                <button class="btn btn-soft-primary w-100 mt-3"><i
                                                        class="mdi mdi-cart me-2 text-soft-primary"></i> Add to
                                                    Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-sm-0 mt-2">Page <span class="fw-bold">2</span> Of <span
                                                        class="fw-bold">113</span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="float-sm-end">
                                                <ul class="pagination pagination-rounded mb-sm-0">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link"><i
                                                                class="mdi mdi-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">5</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link"><i
                                                                class="mdi mdi-chevron-end"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Mepp Communications Limited.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank">Mepp communications Limited</a>
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

<!-- Ion Range Slider-->
<script src="assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/product-filter-range.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>