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
        .greeting-banner {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .card {
            margin: 20px 0;
        }

        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 1.5em;
        }

        .section-title {
            color: blue;
            font-size: 1.2em;
            margin-top: 20px;
        }

        .application-number {
            color: red;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            width: 25%;
        }

        td {
            width: 25%;
        }

        .outer {

            padding: 0 20px;
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
                include ('../includes/connection.php');
                $id = $_GET['id'];
                $sql = "SELECT * from `tblapplication` where id=$id limit 1";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $fullname = $row['FullName'];
                        $parts = explode(" ", $fullname);
                        $firstname = $parts[0];
                        $lastname = isset($parts[0]) ? $parts[1] : '';
                        echo "  <div class='outer'>
                    <div>
                        <h1 class='text-center'>View Detail of Application</h1>

                        <p class='section-title'>User Details</p>
                        <p class='application-number'>Application Number: 794994267</p>
                        <table>
                            <tr>
                          
                                <th>First Name</th>
                                <td>{$firstname}</td>
                                <th>Last Name</th>
                                <td>{$lastname}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <td>" . $row['MobileNumber'] . "</td>
                                <th>Address</th>
                                <td>" . $row['PermanentAdd'] . "</td>
                            </tr>
                        </table>
                    </div>

                    <div>
                        <p class='section-title'>Application Details</p>
                        <table>
                            <tr>
                                <th>Date of apply</th>
                                <td>" . $row['Dateofapply'] . "</td>
                                <th>Gender</th>
                                <td>" . $row['Gender'] . "</td>
                            </tr>
                            <tr>
                                <th>Full Name</th>
                                <td>" . $row['FullName'] . "</td>
                                <th>Place of Birth</th>
                                <td>" . $row['PlaceofBirth'] . "</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>" . $row['DateofBirth'] . "</td>
                                <th>Name of Father</th>
                                <td>" . $row['NameofFather'] . "</td>
                            </tr>
                            <tr>
                                <th>Name of Mother</th>
                                <td>" . $row['NameOfMother'] . "</td>
                                <th>Permanent Address</th>
                                <td>" . $row['PermanentAdd'] . "</td>
                            </tr>
                            <tr>
                                <th>Postal Address</th>
                                <td>" . $row['PostalAdd'] . "</td>
                                <th>Mobile Number</th>
                                <td>" . $row['MobileNumber'] . "</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>" . $row['Email'] . "</td>
                                <th>Status</th>
                                <td>" . $row['Status'] . "</td>
                            </tr>
                        </table>
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


    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>