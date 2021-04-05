<?php

// include db connection
include('dbconnect.php');

if(isset($_POST['registerBtn'])){
    $idCode = $_POST['idCode'];
    $surname = $_POST['surname'];
    $otherName = $_POST['otherName'];
    $emailAddress = $_POST['emailAddress'];
    $contactAddress = $_POST['contactAddress'];
    $referral = $_POST['referral'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $state = $_POST['state'];
    $maritalStatus = $_POST['maritalStatus'];
    $phoneNumber = $_POST['phoneNumber'];
    $whatsappNumber = $_POST['whatsappNumber'];
    $NOKName = $_POST['NOKName'];
    $relationship = $_POST['relationship'];
    $NOKphoneNumber = $_POST['NOKphoneNumber'];
    $bankName = $_POST['bankName'];
    $accountName = $_POST['accountName'];
    $accountNumber = $_POST['accountNumber'];
    $accountType = $_POST['accountType'];

    // insert into database
    $insert = "INSERT INTO nmae VALUES(null,'$idCode','$surname','$otherName','$emailAddress','$contactAddress','$referral','$dateOfBirth','$gender','$nationality','$state','$maritalStatus','$phoneNumber','$whatsappNumber','$NOKName','$relationship','$NOKphoneNumber','$bankName','$accountName','$accountNumber','$accountType',null)";
    $result = $conn->query($insert);

    // check if the insert statement is submitting into the database
    if($result == true){
        echo "<script> alert('record inserted successfully') </script>";
        header("refresh:2;../content/login.php");
    }else{
        echo "<script> alert('record not found') </script>";
    }
}
?>