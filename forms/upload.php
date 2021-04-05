<?php

// get users uploaded file

$file = $_FILES["file"];

// saving file in pdf folder

move_uploaded_file($file["tmp_name"], "../assets/pdfs/" . $file["name"]);

// redirecting back to network-kits.php 
header("Location: ../content/network-kits.php");
?>