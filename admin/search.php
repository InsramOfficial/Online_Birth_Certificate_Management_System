<?php

include ('../includes/connection.php');

$delete = false;
if (isset($_GET['action']) && $_GET['action'] == "delete" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `tblapplication` WHERE  id=$id ";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $delete = true;
    } else {
        echo "The Query not executed Sucessfully because of " . mysqli_error($conn);
    }
}
?>

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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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


        .container {
            width: 96%;
            padding: 0 20px;
            border-radius: 5px;
        }

        .content {
            display: flex;
            flex-direction: column;
            background-color: rebeccapurple;
        }

        .flex {
            display: flex;
            flex-direction: column;
        }

        label {
            text-align: center;
            margin: 10px;
        }

        h3 {
            padding-top: 10px;

        }

        input {
            margin: 8px;
        }

        .button {
            margin-left: 430px;
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
                if ($delete) {
                    echo "<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
                            <strong>Application has been deleted successfully.</strong> 
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                }
                ?>

                <!-- End of Topbar -->

                <div style=" background-color: #EBEBEB;" class="container ">
                    <h3>Search All Application</h3>
                    <hr>
                    <form action="search.php" method="POST">
                        <div class="row pb-4">

                            <div class="col-md-5 flex">
                                <label for="">Search by Application Number /Name/Father Name / Mother Name</label>

                            </div>
                            <div class="col-md-7  flex">
                                <input type="text" class="form-control" required placeholder="Application Number"
                                    name="forminput" aria-label="Username" aria-describedby="basic-addon1">

                            </div>

                        </div>
                        <div class="button">
                            <button class="btn btn-success mb-5" type="submit">Submit</button>
                        </div>
                    </form>



                </div>
            </div>
            <div class="container">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Application Number</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Father's Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $show = false;

                        if (isset($_POST['forminput']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

                            $forminput = $_POST['forminput'];
                            $sql = "SELECT * FROM `tblapplication` WHERE `ApplicationID` = '$forminput' OR `FullName` = '$forminput' OR `NameofFather` = '$forminput' OR `NameOfMother` = '$forminput' LIMIT 25;";
                            $result = mysqli_query($conn, $sql);
                            $sno = 0;

                            if ($result) {
                                if (mysqli_num_rows($result) > 0) {
                                    $show = true;
                                    if ($show) {
                                        echo "<div class='alert alert-success alert-dismissible fade  mt-3 show text-center' role='alert'>
                                        <strong>Your Results  For '$forminput'</strong> 
                                      
                                    </div>";
                                    }
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $sno += 1;

                                        echo "<tr>
                                                <td>{$sno}</td>
                                                <td>" . $row['ApplicationID'] . "</td>
                                                <td>" . $row['FullName'] . "</td>
                                                <td>" . $row['MobileNumber'] . "</td>
                                                <td>" . $row['NameofFather'] . "</td>
                                                <td>" . $row['Status'] . "</td>
                                              <td><a href='view-application.php?id=" . $row['ID'] . "' class='btn btn-primary btn-sm'>View Appli </a> 
                                               <a  href='?action=delete&id=" . $row['ID'] . "' class='btn btn-danger btn-sm ms-2'>Delete</a></td>
                                            </tr>";
                                    }
                                }

                            }
                        }
                        ?>


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S.no</th>
                            <th>Application Number</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Father's Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
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

    
    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>