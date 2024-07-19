<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OBSC</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .notification-badge {
            position: absolute;
            top: -10px;
            left: 15px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 2px 8px;
            font-size: 0.8rem;
            font-weight: bold;
        }


        .card-position-relative {
            position: relative;
        }
    </style>

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include ('sidebar.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include ('navbar.php');
                include ('connection.php');
                $NewApplication = "SELECT COUNT(*) FROM tblapplication where status = 'Pending'";
                $RegisteredApplication = "SELECT COUNT(*) FROM tbluser ";
                $VerifiedApplication = "SELECT COUNT(*) FROM tblapplication where status = 'Verified'";
                $RejectedApplication = "SELECT COUNT(*) FROM tblapplication where status = 'Rejected'";
                $AllApplication = "SELECT COUNT(*) FROM tblapplication ";

                $NewApplicationResult = $conn->query($NewApplication);
                $RegisteredApplicationResult = $conn->query($RegisteredApplication);
                $VerifiedApplicationResult = $conn->query($VerifiedApplication);
                $RejectedApplicationResult = $conn->query($RejectedApplication);
                $AllApplicationResult = $conn->query($AllApplication);

                $newApplicationCount = mysqli_fetch_assoc($NewApplicationResult)['COUNT(*)'];
                $registeredApplicationCount = mysqli_fetch_assoc($RegisteredApplicationResult)['COUNT(*)'];
                $verifiedApplicationCount = mysqli_fetch_assoc($VerifiedApplicationResult)['COUNT(*)'];
                $rejectedApplicationCount = mysqli_fetch_assoc($RejectedApplicationResult)['COUNT(*)'];
                $allApplicationCount = mysqli_fetch_assoc($AllApplicationResult)['COUNT(*)'];

                ?>

                <!-- End of Topbar -->

                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="notification-badge bg-warning">New Application</div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo ($newApplicationCount) ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="new-applications.php" class="btn btn-warning btn-sm mt-3">View
                                                details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 card-position-relative">
                                <div class="notification-badge">Registered Users</div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo ($registeredApplicationCount) ?>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <a href="registered-users.php" class="btn btn-primary btn-sm mt-3">View
                                                details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="notification-badge bg-success ">Verified Application</div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo ($verifiedApplicationCount) ?>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <a href="verified-application.php"
                                                class="btn btn-success btn-sm mt-3">Viewdetails</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="notification-badge bg-danger">Rejected Application</div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo ($rejectedApplicationCount) ?>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <a href="rejected-applications.php"
                                                class="btn btn-danger btn-sm mt-3">Viewdetails</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="notification-badge bg-secondary">All Application</div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Total</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo ($allApplicationCount) ?>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <a  href="all-applications.php" class="btn btn-secondary btn-sm mt-3">Viewdetails</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>