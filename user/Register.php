<?php
include ('../includes/connection.php');
$success = false;
if (isset($_SERVER['REQUEST_METHOD']) == 'POST' & isset($_POST['FirstName']) & isset($_POST['Password'])) {
    $FirstName = trim($_POST['FirstName']);
    $LastName = trim($_POST['LastName']);
    $Address = $_POST['Address'];
    $MobileNumber = $_POST['MobileNumber'];
    $Password = trim($_POST['Password']);
    $sucess = true;
    $encpass = md5($Password);
    $sql = "INSERT INTO `tbluser`(`FirstName`, `LastName`, `MobileNumber`, `Address`, `Password` ) 
    VALUES ('  $FirstName','$LastName','   $MobileNumber',' $Address ',' $encpass')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $sucess = true;
    } else {
        echo "This is not working   ";
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

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image mt-5">
                        <img style="width:500px; height:80vh;"
                            src="https://i.pinimg.com/736x/7c/c6/37/7cc6371b12bdcae59e0cd65dd669ab5e.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="Register.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" required
                                            name="FirstName" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" required
                                            name="LastName" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user" required
                                            name="MobileNumber" placeholder="Enter You Mobile Number">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" required
                                            name="Address" placeholder="Enter your Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        requiredname="Password" placeholder="Enter Your Password">

                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">submit</button>

                            </form>

                            <?php
                            if ($success == true) {
                                echo "<hr><div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                        Your Registered Sucessfully Go to the Login Page Now
                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div><hr>  ";
                            } else {
                                echo "  <br>";
                            }
                            ?>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
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