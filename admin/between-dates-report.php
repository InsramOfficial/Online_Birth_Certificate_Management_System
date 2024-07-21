<?php

include ('../includes/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fromdate']) && isset($_POST['fromto'])) {
    $fromdate = $_POST['fromdate'];
    $fromto = $_POST['fromto'];
    header("Location:bwdates-reports-details.php?fromdate=$fromdate&fromto=$fromto");
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
            text-align: right;
            margin: 10px;
        }

        h3 {
            padding-top: 10px;

        }

        input {
            margin: 8px;
        }

        .button {
            margin-left: 250px;
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

                ?>

                <!-- End of Topbar -->

                <div style=" background-color: #EBEBEB;" class="container ">
                    <h3>Between Dates Report</h3>
                    <hr>
                    <form action="between-dates-report.php" method="POST">
                        <div class="row pb-4">

                            <div class="col-md-3 flex">
                                <label for="">Form Date</label>
                                <label for="">To Date</label>
                            </div>
                            <div class="col-md-9  flex">
                                <input type="date" class="form-control" required name="fromdate" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <input type="date" class="form-control" required name="fromto" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>

                        </div>
                        <div class="button">
                            <button class="btn btn-success mb-5" type="submit">Submit</button>
                        </div>
                    </form>
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