<?php
include("dbconnect.php");

if(isset($_POST['login'])){
	$idCode = $_POST['idCode'];
 
	$select= "SELECT * FROM nmae WHERE idCode = '$idCode'";
	$result = $conn->query($select);

    if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			$_SESSION['idCode']=$row['idCode'];
            $_SESSION['surname']=$row['surname'];
            $_SESSION['otherName']=$row['otherName'];
            $_SESSION['emailAddress']=$row['emailAddress'];
            $_SESSION['contactAddress']=$row['contactAddress'];
            $_SESSION['referral']=$row['referral'];
            $_SESSION['dateOfBirth']=$row['dateOfBirth'];
            $_SESSION['gender']=$row['gender'];
            $_SESSION['nationality']=$row['nationality'];
            $_SESSION['state']=$row['state'];
            $_SESSION['maritalStatus']=$row['maritalStatus'];
            $_SESSION['phoneNumber']=$row['phoneNumber'];
            $_SESSION['whatsappNumber']=$row['whatsappNumber'];
            $_SESSION['NOKName']=$row['NOKName'];
            $_SESSION['relationship']=$row['relationship'];
            $_SESSION['NOKphoneNumber']=$row['NOKphoneNumber'];
            $_SESSION['bankName']=$row['bankName'];
            $_SESSION['accountName']=$row['accountName'];
            $_SESSION['accountNumber']=$row['accountNumber'];
            $_SESSION['accountType']=$row['accountType'];
		}
		echo "<script> alert('logged in')</script>";
        header("refresh:3;../content/dashboard.php");   

        // close php
        ?>

        <!-- include loader -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/loader.css">
<title></title>
</head>
<body>
<div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loader-text">
        <h4>Validating your id code... please wait...</h4>
    </div>
</div>
</body>

        <!-- open php -->
        <?php
}else{
    echo "<script> alert('Invalid')</script>";
    header("refresh:5;../index.php");
}
}
?>

<!-- if ($searchResult !== false && $searchResult->num_rows > 0) -->