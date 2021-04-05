<?php

// starting session
session_start();
ob_start();


$servername = "localhost";
$serverusername = "root";
$serverpassword = "";
$dbname = "network";


// create a connection statement
$conn = new mysqli($servername,$serverusername,$serverpassword,$dbname);

// check if the connection is intact
if($conn->connect_error){
    echo "<script> alert('cannot connect to the database')</script>";
}else{
    // echo "<script> alert('connected successfully')</script>";
}
?>