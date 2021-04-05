<?php

include("../forms/userLogin.php");

$_SESSION["idCode"];
$_SESSION["surname"];
$_SESSION["otherName"];
$_SESSION["emailAddress"];
$_SESSION["contactAddress"];
$_SESSION["referral"];
$_SESSION["dateOfBirth"];
$_SESSION["gender"];
$_SESSION["nationality"];
$_SESSION["state"];
$_SESSION["maritalStatus"];
$_SESSION["phoneNumber"];
$_SESSION["whatsappNumber"];
$_SESSION["NOKName"];
$_SESSION["relationship"];
$_SESSION["NOKphoneNumber"];
$_SESSION["bankName"];
$_SESSION["accountName"];
$_SESSION["accountNumber"];
$_SESSION["accountType"];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="../assets/css/profile.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/utilities.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
  body{
    font-family: 'Poppins', sans-serif;
  }
</style>
    <title>vvv</title>
  </head>
  <body>
    <!-- header -->
    <div class="container-fluid w-100">
    <nav id="navbar" class="navbar">
      <h1 class="logo">NMAE</h1>
      <ul>
        <li><button type="button" class="btn btn-danger float-right"><a href="../forms/logout.php" style="text-decoration:none !important;">Logout</a></button></li>
      </ul>
    </nav>
  
      <section id="main">
          <div class="row mt-5">
            <div class="col-md-3">
              <!--  -->
              <div class="list-group transparent-bg">
                <a href="dashboard.php" class="list-group-item --grd list-group-item-action active" aria-current="true">
                  Dashboard
                </a>
                <a href="profile.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-person-lines-fill --c-d-blue"></i> My profile <span class="badge --bg-light-pink float-sm-end">2</span></a>
                <a href="./network-kits.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-file-earmark-zip-fill --c-d-blue"></i> My network kits <span class="badge --bg-light-pink float-sm-end">2</span></a>
                <a href="videos.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-file-earmark-play-fill --c-d-blue"></i> My videos <span class="badge --bg-light-pink float-sm-end">4</span></a>
                <a href="compesation.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-briefcase-fill --c-d-blue"></i> My Tasks/Compesations <span class="badge --bg-light-pink float-sm-end">2</span></a>
              </div>
            </div>

          <div class="col-md-9 mt-5 mt-lg-0">
            <!-- to include transparent background for it -->
            <div class="card">
              <div class="card-header --bg-one">
                <h5 class="card-title text-white"> My Profile</h5>
              </div>
          <div class="card-body">
            <form>
              <fieldset class="p-2">
                <legend class="--c-d-blue">Personal details<span style="color:red;">*</span></legend>
              <div class="row">
                <div class="form-group col-md-4 mt-3 mt-lg-0">
                  <label for="inputEmail4">ID Code</label>
                  <input type="email" class="form-control" id="" value="<?php echo $_SESSION["idCode"]; ?>" readonly>
                </div>
                <div class="form-group col-md-4 mt-3 mt-lg-0">
                  <label for="inputEmail4">Surname</label>
                  <input type="email" class="form-control" id="" value="<?php echo $_SESSION["surname"]; ?>" readonly>
                </div>
                <div class="form-group col-md-4 mt-3 mt-lg-0">
                  <label for="inputPassword4">Other Names</label>
                  <input type="text" class="form-control" id="" value="<?php echo $_SESSION["otherName"]; ?>" readonly>
                </div><p></p>
              </div>

              <div class="form-group">
                <label for="inputAddress">Contact Address</label>
                <input type="text" class="form-control" id="" value="<?php echo $_SESSION["contactAddress"]; ?>" readonly>
              </div><p></p>

              <div class="row">
                <div class="form-group col-md-6 mt-3 mt-lg-0">
                  <label for="inputEmail4">Who Invited You / Upline</label>
                  <input type="text" class="form-control" id="" value="<?php echo $_SESSION["referral"]; ?>" readonly>
                </div>
                <div class="form-group col-md-6 mt-3 mt-lg-0">
                  <label for="inputPassword4">Date of Birth</label>
                  <input type="text" class="form-control" id="" value="<?php echo $_SESSION["dateOfBirth"]; ?>" readonly>
                </div><p></p>
              </div>

              <div class="row">
                <div class="col-md-4 mt-3 mt-lg-0">
                  <label for="inputPassword4">Nationality/Country</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["nationality"]; ?>">
                </div>
                <div class="col-md-4 mt-3 mt-lg-0">
                  <label for="inputPassword4">State</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["state"]; ?>">
                </div>
                <div class="col-md-4 mt-3 mt-lg-0">
                  <label for="inputPassword4">Gender</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["gender"]; ?>">
                </div><p></p>
              </div>

              <div class="row">
                <div class="col-md-6 mt-3 mt-lg-0">
                  <label for="inputPassword4">Phone Number</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["phoneNumber"]; ?>">
                </div>
                <div class="col-md-6 mt-3 mt-lg-0">
                  <label for="inputPassword4">whatsapp Number</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["whatsappNumber"]; ?>">
                </div><p></p>
              </div>

              <div class="row">
                <div class="col-md-6 mt-3 mt-lg-0">
                  <label for="inputPassword4">Email Address</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["emailAddress"]; ?>">
                </div>
                <div class="col-md-6 mt-3 mt-lg-0">
                  <label for="inputPassword4">Marital Status</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["maritalStatus"]; ?>">
                </div><p></p>
              </div>
              </fieldset>

              <legend class="--c-d-blue">Next Of Kin Details<span style="color:red;">*</span></legend>

              <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" id="" value="<?php echo $_SESSION["NOKName"]; ?>" readonly>
              </div><p></p>

              <div class="row">
                <div class="col-md-6 mt-3 mt-lg-0">
                  <label for="inputPassword4">Relationship</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["relationship"]; ?>">
                </div>
                <div class="col-md-6 mt-3 mt-lg-0">
                  <label for="inputPassword4">Phone Number</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["NOKphoneNumber"]; ?>">
                </div>
              </div>

              <legend class="--c-d-blue">Bank Details<span style="color:red;">*</span></legend>

              <div class="form-group">
                <label for="inputAddress">Account Name</label>
                <input type="text" class="form-control" id="" value="<?php echo $_SESSION["accountName"]; ?>" readonly>
              </div><p></p>


              <div class="row">
                <div class="col-md-4 mt-3 mt-lg-0">
                  <label for="inputPassword4">Bank Name</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["bankName"]; ?>">
                </div>
                <div class="col-md-4 mt-3 mt-lg-0">
                  <label for="inputPassword4">Account Number</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["accountNumber"]; ?>">
                </div>
                <div class="col-md-4 mt-3 mt-lg-0">
                  <label for="inputPassword4">Account Type</label>
                  <input type="text" class="form-control" placeholder="" readonly value="<?php echo $_SESSION["accountType"]; ?>">
                </div><p></p>
            </form>
          </div>
      </div>
      </div>
    </section> 
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>