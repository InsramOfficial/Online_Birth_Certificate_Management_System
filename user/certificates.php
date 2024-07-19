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

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .certificate-container {
            max-width: 10000px;

            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .certificate-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .certificate-header h2 {
            margin: 0;
        }

        .certificate-body {
            margin-bottom: 20px;
        }

        .certificate-table {
            width: 100%;
            border-collapse: collapse;
        }

        .certificate-table th,
        .certificate-table td {
            padding: 8px 12px;
            border: 1px solid #ddd;
        }

        .certificate-table th {
            background-color: #f9f9f9;
            text-align: left;
        }

        .certificate-footer {
            text-align: center;
            margin-top: 20px;
        }

        .download-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e57373;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .download-button:hover {
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
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
                $id = $_GET['id'];
                $sql = "SELECT * from `tblapplication` where id=$id limit 1";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sno += 1;

                        echo "  <div class='certificate-container'>
                    <div class='certificate-header'>
                        <h2>Certificate of Birth</h2>
                        <hr>
                        <p>This is to certify that the following information has been taken from the original record of
                            Birth.</p>
                    </div>
                    <div class='certificate-body'>
                        <table class='certificate-table'>
                            <tr>
                                <th>Application Number:</th>
                                <td>" . $row['ApplicationID'] . "</td>
                            </tr>
                            <tr>
                                <th>Full Name</th>
                                <td>" . $row['FullName'] . "</td>
                                <th>Gender</th>
                                <td>" . $row['Gender'] . "</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>" . $row['DateofBirth'] . "</td>
                                <th>Place of Birth</th>
                                <td>" . $row['PlaceofBirth'] . "</td>
                            </tr>
                            <tr>
                                <th>Name of Mother</th>
                                <td>" . $row['NameOfMother'] . "</td>
                                <th>Name of Father</th>
                                <td>" . $row['NameofFather'] . "</td>
                            </tr>
                            <tr>
                                <th>Permanent Address</th>
                                <td>" . $row['PermanentAdd'] . "</td>
                                <th>Postal Address</th>
                                <td>" . $row['PostalAdd'] . "</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <td>" . $row['MobileNumber'] . "</td>
                                <th>Email</th>
                                <td>" . $row['Email'] . "</td>
                            </tr>
                            <tr>
                                <th>Date of apply</th>
                                <td>" . $row['Dateofapply'] . "</td>
                            </tr>
                        </table>
                    </div>
                    <div class='certificate-footer'>
                        <p>Certificate Generation Date: 2023-01-06 01:11:07</p>
                      <a href='download-certificate.php?id=$id' class='download-button'>
    <i class='fas fa-download'></i> Download Certificate
</a>
                    </div>
                </div>";
                    }
                }

                ?>

                <!-- End of Topbar -->


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