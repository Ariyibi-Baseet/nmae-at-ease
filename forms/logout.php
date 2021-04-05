<?php
session_start();
ob_start();

session_destroy();
header("refresh:2;../index.php");

?>
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
        <h4>Have a wonderful day ahead! ...</h4>
    </div>
</div>
</body>