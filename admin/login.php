<?php
include ('../includes/connection.php');
$notmatched = false;
if (isset($_SERVER['REQUEST_METHOD']) == 'POST' && isset($_POST['username']) & isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $sql = "SELECT * FROM `tbladmin` where `UserName`='$username'";
    $check = mysqli_query($conn, $sql);

    if ($check && mysqli_num_rows($check) > 0) {
        $result = mysqli_fetch_assoc($check);

        $encpas = $result['Password'];
        if (md5($password) == $encpas) {
            session_start();
            echo $_SESSION["AdminName"] = $result['AdminName'];
            echo $_SESSION["IDadmin"] = $result['ID'];
            header("Location: index.php");
        } else {

            $notmatched = true;
        }
    } else {
        "NO rows Found";
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

    <title>SB Admin 2 - Login</title>

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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img style="margin-left:50px;width:400px;height:70vh;"
                                    src="https://i.pinimg.com/564x/36/f0/e7/36f0e76abd4a79445d4914b5d9c72bf3.jpg"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back to Admin Panel!</h1>
                                    </div>
                                    <form class="user" action="Login.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                aria-describedby="emailHelp" name="username"
                                                placeholder="Enter User Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>

                                    </form>

                                    <?php
                                    if ($notmatched == true) {
                                        echo "<hr><div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                       Re-Enter the Credictionals
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
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>

                                </div>
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