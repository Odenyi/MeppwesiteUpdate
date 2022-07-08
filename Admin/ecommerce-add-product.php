<?php
include"../dbconnect.php";

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Add Product | Upbond - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">

    <!-- select2 css -->
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

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
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.html" class="waves-effect">
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
                        <li><a href="ecommerce-products.php">Blogs</a></li>
                        <li><a href="ecommerce-customers.php">Add Blog</a></li>
                        <li><a href="ecommerce-add-product.php">Add details form</a></li>
                    </ul>
                </li>
                <!-- end li -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Swiper Images</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.php">swiper Images</a></li>
                        <li><a href="ecommerce-customers.php">Add Swiper Image</a></li>
                        <li><a href="ecommerce-add-product.php">Add details Image form</a></li>
                    </ul>
                </li>
                <!-- end li -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Our services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.php">Services</a></li>
                        <li><a href="ecommerce-customers.ph">Edit Services</a></li>
                        <li><a href="ecommerce-add-product.php">Add details form</a></li>
                    </ul>
                </li>
                <!-- end li -->

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Programs upload</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products">Programs Advertised</a></li>
                        <li><a href="ecommerce-customers">Add Programs</a></li>
                        <li><a href="ecommerce-add-product">Add details form</a></li>
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
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Add Product</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Add Product</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav">
                                        <li class="nav-item">
                                            <a href="#basic-info" class="nav-link" data-toggle="tab">
                                                <span class="step-number"></span>
                                                <span class="step-title">Basic Info</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#product-img" class="nav-link" data-toggle="tab">
                                                <span class="step-number"></span>
                                                <span class="step-title">Product Img</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#metadata" class="nav-link" data-toggle="tab">
                                                <span class="step-number"></span>
                                                <span class="step-title">Meta Data</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="basic-info">
                                            <h4 class="card-title">Basic Information</h4>
                                            <p class="card-title-desc">Fill all information below</p>

                                            <form>
                                                <div class="mb-3">
                                                    <label class="form-label" for="productname">Product Name</label>
                                                    <input id="productname" name="productname" type="text"
                                                        class="form-control">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="manufacturername">Manufacturer Name</label>
                                                            <input id="manufacturername" name="manufacturername"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="manufacturerbrand">Manufacturer Brand</label>
                                                            <input id="manufacturerbrand" name="manufacturerbrand"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="price">Price</label>
                                                            <input id="price" name="price" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                class="control-label">Category</label>
                                                            <select class="form-control select2">
                                                                <option>Select</option>
                                                                <option value="EL">Electronic</option>
                                                                <option value="FA">Fashion</option>
                                                                <option value="FI">Fitness</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                class="control-label">Features</label>

                                                            <select class="select2 form-control select2-multiple"
                                                                multiple="multiple" data-placeholder="Choose ...">
                                                                <option value="TO">Touchscreen</option>
                                                                <option value="CF">Call Function</option>
                                                                <option value="NO" selected>Notifications</option>
                                                                <option value="FI" selected>Fitness</option>
                                                                <option value="OU">Outdoor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="productdesc">Product
                                                        Description</label>
                                                    <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="tab-pane" id="product-img">
                                            <h4 class="card-title">Product Images</h4>
                                            <p class="card-title-desc">Upload product image</p>
                                            <form action="/" method="post" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>

                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                                    </div>

                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="metadata">
                                            <h4 class="card-title">Meta Data</h4>
                                            <p class="card-title-desc">Fill all information below</p>

                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="metatitle">Meta title</label>
                                                            <input id="metatitle" name="metatitle" type="text"
                                                                class="form-control">
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="metakeywords">Meta
                                                                Keywords</label>
                                                            <input id="metakeywords" name="metakeywords" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="metadescription">Meta
                                                        Description</label>
                                                    <textarea class="form-control" id="metadescription"
                                                        rows="5"></textarea>
                                                </div>
                                            </form>

                                            <div class="text-center mt-4">
                                                <button type="submit"
                                                    class="btn btn-primary me-2 waves-effect waves-light">Save
                                                    Changes</button>
                                                <button type="submit" class="btn btn-light waves-effect">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous"><a href="#">Previous</a></li>
                                        <li class="next"><a href="#">Next</a></li>
                                    </ul>
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

<!-- twitter-bootstrap-wizard js -->
<script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

<!-- select 2 plugin -->
<script src="assets/libs/select2/js/select2.min.js"></script>

<!-- dropzone plugin -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/ecommerce-add-product.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>