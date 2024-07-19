<?php
include ('connection.php');
require_once ('../admin/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$id = $_GET['id'];
$id = intval($id);
$sql = "SELECT * FROM `Tblapplication` where id=$id limit 1";
$result = $conn->query($sql);
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: "Georgia", serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 10px;
        }
        .certificate-container {
            max-width: 100%;
            background: #fff;
            padding: 20px;
            border: 5px solid #d4af37;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .certificate-header {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }
        .certificate-header h2 {
            margin: 0;
            font-size: 1.5em;
            color: #333;
            text-transform: uppercase;
        }
        .certificate-header::before {
            content: "";
            display: block;
            margin: 0 auto;
            width: 100px;
            height: 100px;
            background: url("https://via.placeholder.com/100") no-repeat center center;
            background-size: contain;
        }
        .certificate-body {
            margin-bottom: 20px;
        }
        .certificate-table {
            width: 100%;
            border-collapse: collapse;
        }
        .certificate-table th, .certificate-table td {
            padding: 10px;
            border: 1px solid #d4af37;
            font-size: 1em;
            text-align: left;
        }
        .certificate-table th {
            background-color: #f9f9f9;
            font-weight: bold;
        }
        .certificate-footer {
            text-align: center;
            margin-top: 10px;
            font-size: 0.8em;
            color: #666;
        }
        .stamp {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 150px;
            height: 150px;
            background: url("https://via.placeholder.com/150") no-repeat center center;
            background-size: contain;
            opacity: 0.5;
        }
    </style>
    <title>Birth Certificate</title>
</head>
<body>
    <div class="certificate-container">
        <div class="certificate-header">
            <h2>Certificate of Birth</h2>
            <p>This is to certify that the following information has been taken from the original record of Birth.</p>
        </div>
        <div class="certificate-body">
            <table class="certificate-table">
                <tr>
                    <th>Application / Certificate Number:</th>
                    <td colspan="3">794994267</td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>' . $row['FullName'] . '</td>
                    <th>Gender</th>
                    <td>' . $row['Gender'] . '</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>' . $row['DateofBirth'] . '</td>
                    <th>Place of Birth</th>
                    <td>' . $row['PlaceofBirth'] . '</td>
                </tr>
                <tr>
                    <th>Name of Mother</th>
                    <td>' . $row['NameOfMother'] . '</td>
                    <th>Name of Father</th>
                    <td>' . $row['NameofFather'] . '</td>
                </tr>
                <tr>
                    <th>Permanent Address of Parents</th>
                    <td colspan="3">' . $row['PermanentAdd'] . '</td>
                </tr>
                <tr>
                    <th>Postal Address</th>
                    <td colspan="3">' . $row['PostalAdd'] . '</td>
                </tr>
                <tr>
                    <th>Parents Mobile Number</th>
                    <td>' . $row['MobileNumber'] . '</td>
                    <th>Parents Email</th>
                    <td>' . $row['Email'] . '</td>
                </tr>
                <tr>
                    <th>Certificate Number</th>
                    <td>' . $row['ApplicationID'] . '</td>
                    <th>Apply Date</th>
                    <td>' . $row['Dateofapply'] . '</td>
                </tr>
                <tr>
                    <th>Issued Date</th>
                    <td colspan="3">' . $row['UpdationDate'] . '</td>
                </tr>
            </table>
        </div>
        <div class="certificate-footer">
            <p>THIS IS A COMPUTER GENERATED CERTIFICATE.</p>
        </div>
        <div class="stamp"></div>
    </div>
</body>
</html>';
}

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("Birth_Certificate.pdf", array("Attachment" => 0));

?>