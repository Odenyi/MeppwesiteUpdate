<?php
include"../dbconnect.php";

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Customers | Upbond - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                            <h4 class="mb-sm-0">Customers</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Customers</li>
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
                                <div class="">
                                    <button type="button" class="btn btn-success waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#my_Modal"> <i
                                            class="mdi mdi-plus me-2"></i>Add Customer</button>
                                </div>
                                <!-- sample modal content -->
                                <div id="my_Modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Add Customer Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <!-- end model-header -->

                                            <div class="modal-body">
                                                <div class="text-center mb-4">
                                                    <div class="image-choose position-relative">
                                                        <img src="assets/images/users/avatar-7.jpg"
                                                            class="avatar-lg p-1 rounded-circle" alt="Error">
                                                        <div class="avatar-xs position-absolute bottom-0 end-0">
                                                            <span
                                                                class="avatar-title rounded-circle bg-light text-body">
                                                                <i class="mdi mdi-camera"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="example1" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="example1"
                                                                placeholder="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="example2" class="form-label">Phone
                                                                number</label>
                                                            <input type="text" class="form-control" id="example2"
                                                                placeholder="Phone number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                                <div class="mb-3">
                                                    <label for="example3" class="form-label"> E-mail Id</label>
                                                    <input type="email" class="form-control" id="example3"
                                                        placeholder="Email">
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="example4" class="form-label">Wallet
                                                                Balance</label>
                                                            <input type="text" class="form-control" id="example4"
                                                                placeholder="$3089" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="example5" class="form-label">Joining
                                                                Date</label>
                                                            <input type="text" class="form-control" id="example5"
                                                                placeholder="05/04/2021" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->

                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Location</option>
                                                    <option value="1">USA</option>
                                                    <option value="2">India</option>
                                                    <option value="3">Canada</option>
                                                    <option value="4">Germany</option>
                                                    <option value="5">Australia</option>
                                                </select>
                                            </div>
                                            <!-- end modal-body -->

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light">Save</button>
                                            </div>
                                        </div>
                                        <!-- end modal-content -->
                                    </div>
                                    <!-- end modal-dialog-->
                                </div>
                                <!-- end model -->

                                <div class="table-responsive mt-3">
                                    <table
                                        class="table table-centered table-check datatable dt-responsive nowrap table-striped border"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="table-topbar text-uppercase">
                                            <tr>
                                                <th style="width: 20px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                                        <label class="form-check-label mb-0"
                                                            for="checkAll">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Wallet Balance</th>
                                                <th>Joining Date</th>
                                                <th>Location</th>
                                                <th style="width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck1">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck1">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/users/avatar-1.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Laura Monroe</span>
                                                </td>
                                                <td>LauraMMonroe@armyspy.com</td>
                                                <td>727-366-1384</td>

                                                <td>
                                                    $ 3245
                                                </td>
                                                <td>
                                                    06 Apr, 2020
                                                </td>
                                                <td>Canada</td>
                                                <td id="tooltip-container1">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck2">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck2">&nbsp;</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Michael Rossman</span>
                                                </td>
                                                <td>MichaelJRossman@dayrep.com</td>
                                                <td>78 353 71 61</td>

                                                <td>
                                                    $ 2435
                                                </td>
                                                <td>
                                                    05 Apr, 2020
                                                </td>
                                                <td>Germany</td>
                                                <td id="tooltip-container2">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck3">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck3">&nbsp;</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <img src="assets/images/users/avatar-3.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Christie Valentine</span>
                                                </td>
                                                <td>ChristieJValentine@teleworm.us</td>
                                                <td>867-851-1424</td>

                                                <td>
                                                    $ 2653
                                                </td>
                                                <td>
                                                    04 Apr, 2020
                                                </td>
                                                <td>Poland</td>
                                                <td id="tooltip-container3">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container3" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container3" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck4">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck4">&nbsp;</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <img src="assets/images/users/avatar-4.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>James Menendez</span>
                                                </td>
                                                <td>JamesDMenendez@armyspy.com</td>
                                                <td>040 399 4444</td>

                                                <td>
                                                    $ 2135
                                                </td>
                                                <td>
                                                    03 Apr, 2020
                                                </td>
                                                <td>Brazil</td>
                                                <td id="tooltip-container4">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container4" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container4" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck5">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck5">&nbsp;</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <img src="assets/images/users/avatar-5.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Hugh Chavez</span>
                                                </td>
                                                <td>HughRChavez@dayrep.com</td>
                                                <td>046 395 9040</td>

                                                <td>
                                                    $ 2698
                                                </td>
                                                <td>
                                                    02 Apr, 2020
                                                </td>
                                                <td>Australia</td>

                                                <td id="tooltip-container5">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container5" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container5" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck6">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck6">&nbsp;</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <img src="assets/images/users/avatar-6.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Vernon Lambert</span>
                                                </td>
                                                <td>VernonCLambert@teleworm.us</td>
                                                <td>0688 291 10 37</td>

                                                <td>
                                                    $ 2758
                                                </td>
                                                <td>
                                                    02 Apr, 2020
                                                </td>
                                                <td>Spain</td>
                                                <td id="tooltip-container6">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container6" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container6" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck7">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck7">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/users/avatar-7.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Ethel Rhodes</span>
                                                </td>
                                                <td>EthelJRhodes@armyspy.com</td>
                                                <td>(21) 3253-6787</td>

                                                <td>
                                                    $ 2836
                                                </td>
                                                <td>
                                                    01 Apr, 2020
                                                </td>
                                                <td>Sweden</td>
                                                <td id="tooltip-container7">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container7" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container7" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck8">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck8">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/users/avatar-8.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Lacy Hinton</span>
                                                </td>
                                                <td>LacyDHinton@teleworm.us</td>
                                                <td>(12) 2539-6489</td>

                                                <td>
                                                    $ 3245
                                                </td>
                                                <td>
                                                    31 Mar, 2020
                                                </td>
                                                <td>Canada</td>
                                                <td id="tooltip-container8">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container8" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container8" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck9">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck9">&nbsp;</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <img src="assets/images/users/avatar-9.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Malcolm Evans</span>
                                                </td>
                                                <td>
                                                    MalcolmLEvans@rhyta.com</td>
                                                <td>0488 91 80 02</td>

                                                <td>
                                                    $ 3125
                                                </td>
                                                <td>
                                                    30 Mar, 2020
                                                </td>
                                                <td>Poland</td>
                                                <td id="tooltip-container9">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container9" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container9" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck10">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck10">&nbsp;</label>
                                                    </div>
                                                </td>

                                                <td>
                                                    <img src="assets/images/users/avatar-10.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Cheryl Cook</span>
                                                </td>
                                                <td>CherylRCook@dayrep.com</td>
                                                <td>0485 33 27 01</td>

                                                <td>
                                                    $ 2456
                                                </td>
                                                <td>
                                                    30 Mar, 2020
                                                </td>
                                                <td>Brazil</td>
                                                <td id="tooltip-container10">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container10"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container10"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck11">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck11">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/users/avatar-11.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Penny Sharp</span>
                                                </td>
                                                <td>PennyRSharp@armyspy.com</td>
                                                <td>0496 94 02 70</td>
                                                <td>
                                                    $ 3423
                                                </td>
                                                <td>
                                                    29 Mar, 2020
                                                </td>
                                                <td>Spain</td>
                                                <td id="tooltip-container11">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container11"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container11"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck12">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck12">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/users/avatar-12.jpg"
                                                        class="rounded-circle h-auto avatar-xs me-2">
                                                    <span>Bryan Smith</span>
                                                </td>
                                                <td>BryanSSmith@jourrapide.com</td>
                                                <td>09281 18 95 08</td>

                                                <td>
                                                    $ 3245
                                                </td>
                                                <td>
                                                    28 Apr, 2020
                                                </td>
                                                <td>Germany</td>
                                                <td id="tooltip-container13">
                                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container13"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-bs-container="#tooltip-container13"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Delete"><i
                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <!-- end tbody -->
                                    </table>
                                    <!-- end table -->
                                </div>
                                <!-- end table - responsive -->
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
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

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="assets/js/pages/ecommerce-datatables.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>