<?php

include ('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $Remarks = $_POST['Remarks'];
    $Status = $_POST['Status'];
    echo $Remarks, $id, $Status;
    $sql = "UPDATE tblapplication SET Remark = '$Remarks', Status = '$Status' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: view-application.php?id=$id&update=success");
        exit();
    } else {
        echo "this query is not executed becz of " . mysqli_error($conn);
    }
}


?>