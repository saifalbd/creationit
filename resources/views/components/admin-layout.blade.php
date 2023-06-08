<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>eTCMS</title>
        <link href="/assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Edtor -->
        <link rel='stylesheet' href='/assets/css/summernote.min.css'>
        <link rel="stylesheet" href="/assets/plugin/editor/style.css">
        <!-- Edtor -->
        <link rel='stylesheet' href='/assets/plugin/select2.min.css'>
        <link href="/assets/plugin/style.css" rel="stylesheet" />
        <link href="/assets/css/theme.css" rel="stylesheet" />
        <link href="/assets/css/typography.css" rel="stylesheet" />

    </head>

    <body class="sb-nav-fixed">


        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">

            <a class="navbar-brand" href="index.php"> <img src="../assets/img/logo.png" alt="" class="thumb-sm rounded-circle mr-2 "> e-TCMS</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 " id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            <div class="form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            </div>

            <!-- Navbar Search-->

            <!-- Navbar-->

            <ul class="navbar-nav ">

                <li class="nav-item dropdown nav-item d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-1 my-2 my-md-0">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ‍<div class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-q my-2 my-md-0"> </div> <i class="fas fa-info-circle"></i>
                        <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> Info</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <a class="nav-link" href="#"> Change Logo </a>
                        <a class="nav-link" href="#"> SMS Balance </a>
                        <a class="nav-link" href="#"> Expiretion </a>
                        <a class="nav-link" href="#"> Tutorials </a>

                    </div>
                </li>


                <li class="nav-item dropdown nav-item d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-1 my-2 my-md-0">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ‍<div class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-q my-2 my-md-0"> </div> <i class="fas fa-sliders-h"></i>
                        <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> Settings </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">


                        <a class="nav-link" href="site_information.php"> System Info</a>
                        <a class="nav-link" href="#option.php"> Option</a>

                    </div>
                </li>

                <ul class="navbar-nav ">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="../uploads/photo2023-03-13-23-16-45_640f5a7d98ecf.png" alt="" class="thumb-sm rounded-circle mr-2"> ‍<div class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> CIT </div> </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="user_profile.php"> User Profile</a>
                            <a class="dropdown-item" href="user_reset-password.php">Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>


        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"> </div>
                            <a class="nav-link dahboard-btn" style="padding: 9px;color: #fff!important;" href="index.php">
                                <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productinfo" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="far fa-list-alt"></i></div>
                                Course Info
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="productinfo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-white" href="add_course.php">Course Entry</a>
                                    <a class="nav-link text-white" href="list_course.php">List of Course</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#batch" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                                Batch Info
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="batch" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-white" href="add_batch.php">Batch Entry</a>
                                    <a class="nav-link text-white" href="list_batch.php">List of Batch</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#admission" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Admission
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="admission" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-white" href="add_applicaion.php"> Admission </a>
                                    <a class="nav-link text-white" href="list_new_applicaion.php"> Pending Admission </a>
                                    <a class="nav-link text-white" href="list_admission.php"> Current Student</a>
                                    <a class="nav-link text-white" href="list_course_completed.php"> Course Completed</a>

                                </nav>
                            </div>






                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fees" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
                                Fees Collection
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="fees" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_payment.php"> Fees Receive</a>
                                    <a class="nav-link" href="list_fee_collection.php"> Received List</a>

                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#attednace" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"> <i class="far fa-check-circle"></i> </div>
                                Attednace
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="attednace" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-white" href="add_attendance.php"> Attednace Entry </a>
                                    <a class="nav-link text-white" href="list_attendance.php"> Attednace Record </a>

                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#accounts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                                General Account
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="accounts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_transaction.php"> Transaction Entry</a>
                                    <a class="nav-link" href="list_transaction.php"> Transaction List</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shop" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                                Shop
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="shop" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_shop.php"> Shop Entry</a>
                                    <a class="nav-link" href="list_shop.php"> Shop List</a>
                                    <a class="nav-link" href="add_shop_category.php"> Shop Category</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="reports.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
                                Reports
                            </a>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#settings" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-sms"></i></div>
                                Send SMS
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="settings" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-white" href="sms_attedance.php">Attednace SMS</a>
                                    <a class="nav-link text-white" href="sms_due.php">Dues Alert</a>
                                    <a class="nav-link text-white" href="sms_bulk.php">Bulk SMS</a>

                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#stock" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                                Instructor
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="stock" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_instructor.php"> Create Instructor </a>
                                    <a class="nav-link" href="list_instructor.php"> Instructor List</a>
                                </nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#invoice" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-invoice"></i></div>
                                Invoice
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="invoice" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_invoice.php"> New Invoice </a>
                                    <a class="nav-link" href="list_invoice.php"> List Invoice</a>
                                </nav>
                            </div>




                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div> Front End
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="page_create.php">Add Page</a>
                                    <a class="nav-link" href="page_archive.php">Page Archive</a>
                                    <a class="nav-link" href="slider.php">Slider</a>
                                    <a class="nav-link" target="_blank" href="../web"> Preview</a>
                                </nav>
                            </div>



                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">V 1.0.1 Last Update: 15-05-2021</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="card mt-4">

                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-9 my-auto">
                                        <i class="fas fa-layer-group"></i> Batch Information <i class="fas fa-angle-right"></i> Batch Entry
                                    </div>
                                    <div class="col-md-3 text-right">

                                        <a href="list_batch.php" class="btn btn-outline-primary float-right"> <i class="fas fa-folder-open"></i> Batch List</a>
                                    </div>
                                </div>
                            </div>


                            <div class="card-body">
                                <form name="frmUser" method="post" action="" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Batch Title</label>
                                            <input type="text" class="form-control" required name="name" Placeholder="Ex: 2nd Batch (Microsoft Office)">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail4"> Saturday</label>
                                            <input type="text" class="form-control" name="saturday" Placeholder="Ex: 10:30-11:30">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="inputEmail4"> Sunday</label>
                                            <input type="text" class="form-control" name="sunday">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="inputEmail4"> Monday</label>
                                            <input type="text" class="form-control" name="monday">
                                        </div>



                                        <div class="form-group col-md-2">
                                            <label for="inputEmail4"> Tuesday</label>
                                            <input type="text" class="form-control" name="tuesday">
                                        </div>


                                        <div class="form-group col-md-2">
                                            <label for="inputEmail4"> Wednesday</label>
                                            <input type="text" class="form-control" name="wednesday">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="inputEmail4"> Thursday</label>
                                            <input type="text" class="form-control" name="thursday">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="inputEmail4"> Friday</label>
                                            <input type="text" class="form-control" name="friday">
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" value="Save" class="btn btn-primary ">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                </form>
                            </div>
                        </div>
                </main>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

        <script src="../assets/plugin/chart/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="/assets/plugin/chart/datatables-demo.js"></script>


        <script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js'></script>
        <script src="/assets/plugin/select2/dist/script.js"></script>

        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.js'></script>
        <script src="assets/plugin/editor/script.js"></script>



        <!-- Edtor -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#code_preview0').summernote({
                    height: 300
                });
            });
        </script>

    </body>