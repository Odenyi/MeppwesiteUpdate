<?php
include"../dbconnect.php";
$nameErr=$categoryErr=$descriptionErr="";
$category=$name=$description="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( isset( $_POST['blogname'] ) ||isset( $_POST['category'] )||isset( $_POST['description'] ))
    { 
    if (empty($_POST["blogname"])) {
        $nameErr = "Name is required";
      } 
      if (empty($_POST["category"])) 
      {
        $categoryErr = "Category is required";
      } 
      
      if (empty($_POST["description"])) {
        $descriptionErr = "Description is required";
      } 
      
        // Get file info 
        $filename = $_FILES["file"];
        print_r($filename);
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "assests/image/blogimages" . $filename;
         
        
    
      $datetime = date('d-m-y h:i:s');
      $sql = "INSERT INTO `blogs` (name, services, description, imagepath, date)  VALUES (:name, :services, :description, :image_path,:date)";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':services', $category);
      $stmt->bindParam(':description', $description);
      $stmt->bindParam(':image_path', $image_path);
      $stmt->bindParam(':date', $date);

      $name = test_input($_POST["blogname"]);
      $category = test_input($_POST["category"]);
      $description = test_input($_POST["description"]);
      $image_path = $filename;
      $date = $datetime;
      $stmt->execute();
   
      }
    }
  
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Add Blogs |MEPP- Admin & Dashboard </title>
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
                            <h4 class="mb-sm-0">Add Blog</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Mepp</a></li>
                                    <li class="breadcrumb-item active">Add Blog</li>
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
                                                <span class="step-title">Blog Image</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        
                                        <div class="tab-pane" id="basic-info">
                                            <h4 class="card-title">Basic Information</h4>
                                            <p class="card-title-desc">Fill all information below</p>

                                            <form method="POST" id="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                                <div class="mb-3">
                                                    <label class="form-label" for="blogname">Blog Name</label>
                                                    <input id="blogname" name="blogname" type="text"
                                                        class="form-control" value=<?php echo $name?>>
                                                    <span class="error"> *<?php echo $nameErr;?></span>
                                                </div>
                                               
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                class="control-label">Category</label>
                                                            <select class="form-control select2" name="category">
                                                                <option><?php echo $category?></option>
                                                                <option value="Bulk SMS">Bulk SMS</option>
                                                                <option value="SS">Subscription Shortcodes</option>
                                                                <option value="IVR">IVR</option>
                                                                <option value="USSD">USSD</option>
                                                                <option value="MPI">Mobile Payments Integrations</option>
                                                                <option value="SD">Software Development</option>
                                                                <option value="DA">Data Analytics</option>
                                                            </select>
                                                            <span class="error"> *<?php echo $categoryErr;?></span>
                                                        </div>
                                                    </div>
                                            
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="productdesc">Blog
                                                        Description</label>
                                                    <textarea class="form-control" id="productdesc" rows="5" name="description" value=<?php echo $description?>></textarea>
                                                    <span class="error"> *<?php echo $descriptionErr;?></span>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="tab-pane" id="product-img">
                                            <h4 class="card-title">Blog Images</h4>
                                            <p class="card-title-desc">Upload Blog images</p>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="dropzone" id="form2" enctype="multipart/form-data">
                                                <div class="fallback">
                                                    <input name="file" type="file"/>
                                                </div>

                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                                    </div>

                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </form>
                                            <div class="text-center mt-4">
                                                <button type="submit"
                                                    class="btn btn-primary me-2 waves-effect waves-light" onclick="submitForms()">Save
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
                        <script>document.write(new Date().getFullYear())</script> © Mepp.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank">Mepp Communications Limited</a>
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
<script>
    submitForms = function(){
    document.getElementById("form2").submit();
    document.getElementById("form1").submit();
   
}
</script>
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