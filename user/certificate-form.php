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
        .container {
            max-width: 800px;
            margin-top: 20px;

        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 0.25rem;
        }

        .submit {
            width: 100%;
            padding: 10px;
        }

        .card {
            padding: 20px;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include ('sidebar.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include ('navbar.php');
                $insert = false;
                include ('../includes/connection.php');
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $dateofbirth = $_POST['date'];
                    $gender = $_POST['radio'];
                    $fullName = $_POST['fullName'];
                    $placeOfBirth = $_POST['placeOfBirth'];
                    $motherName = $_POST['motherName'];
                    $fatherName = $_POST['fatherName'];
                    $permanentAddress = $_POST['permanentAddress'];
                    $postalAddress = $_POST['postalAddress'];
                    $contactNumber = $_POST['contactNumber'];
                    $email = $_POST['email'];
                    $applicationID = uniqid();
                    $sql = "INSERT INTO tblapplication 
                      (UserID,ApplicationID, DateofBirth, Gender, FullName, PlaceofBirth,
                       NameofFather, NameOfMother, PermanentAdd, PostalAdd, MobileNumber, Email, Status) 
                      VALUES 
                      ('$ID','$applicationID', '$dateofbirth', '$gender', '$fullName', '$placeOfBirth',
                       '$fatherName', '$motherName', '$permanentAddress', '$postalAddress', '$contactNumber', '$email', 'Pending')";

                    $result = $conn->query($sql);
                    if (isset($result)) {
                        $insert = true;
                    }

                }
                ?>

                <!-- End of Topbar -->
                <?php
                if ($insert) {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sucess!</strong>  Your Application is Submitted Sucessfully
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                } ?>
                <div class="container  ">
                    <form action="certificate-form.php" method="post">
                        <h1 class=" mb-5 text-center">Certificate Apply Form</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Date of Birth</label>
                                    <input type="date" class="form-control" required name="date" id="date">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" required type="radio" name="radio" value="male"
                                            id="genderMale">
                                        <label class="form-check-label" for="genderMale">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" required type="radio" name="radio"
                                            value="female" id="genderFemale">
                                        <label class="form-check-label" for="genderFemale">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" required name="fullName" id="fullName"
                                        placeholder="Enter full name">
                                </div>
                                <div class="form-group">
                                    <label for="placeOfBirth">Place Of Birth</label>
                                    <input type="text" class="form-control" required name="placeOfBirth"
                                        id="placeOfBirth" placeholder="Enter place of birth">
                                </div>
                                <div class="form-group">
                                    <label for="motherName">Full Name of Mother</label>
                                    <input type="text" class="form-control" required name="motherName" id="motherName"
                                        placeholder="Enter mother's full name">
                                </div>
                                <div class="form-group">
                                    <label for="fatherName">Full Name of Father</label>
                                    <input type="text" class="form-control" required name="fatherName" id="fatherName"
                                        placeholder="Enter father's full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="permanentAddress">Permanent Address</label>
                                    <textarea class="form-control" required name="permanentAddress"
                                        id="permanentAddress" rows="3" placeholder="Enter permanent address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="postalAddress">Postal Address</label>
                                    <textarea class="form-control" required name="postalAddress" id="postalAddress"
                                        rows="3" placeholder="Enter postal address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="contactNumber">Contact Number</label>
                                    <input type="tel" class="form-control" required name="contactNumber"
                                        id="contactNumber" placeholder="Enter contact number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" required name="email" id="email"
                                        placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary submit">Submit</button>
                    </form>
                </div>



            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->


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