<?php

include("../forms/userLogin.php");

$_SESSION["otherName"];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../assets/css/profile.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Gabriela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/utilities.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>vvv</title>
  </head>
  <body>
    <!-- header -->
    <div class="container-fluid w-100">
   <!-- <header class="header">
    </header> -->

    <nav id="navbar" class="navbar">
      <h1 class="logo">NMAE</h1>
      <ul>
        <li><button type="button" class="btn btn-danger float-right"><a href="../forms/logout.php" style="text-decoration:none !important;">Logout</a></button></li>
      </ul>
    </nav>

    <section id="main">
    <!-- will write a javascript to cancel this card -->
    <div class="card-header bg-primary mt-2">
    <span class="text-white" style="font-weight:500;">You are welcome&nbsp;<span style="font-family: 'Gabriela', serif;font-size:18px;"><?php echo $_SESSION["otherName"]; ?></span> click <a href="./profile.php" class="text-white">here</a> to go your profile</span>
    </div>
        <div class="row mt-5">
          <div class="col-md-3">
            <!--  -->
            <div class="list-group transparent-bg">
              <a href="#" class="list-group-item --grd list-group-item-action active" aria-current="true">
                Dashboard
              </a>
              <a href="profile.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-person-lines-fill --c-d-blue"></i> My profile <span class="badge --bg-light-pink float-sm-end">0</span></a>
              <a href="network-kits.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-file-earmark-zip-fill --c-d-blue"></i> My network kits <span class="badge --bg-light-pink float-sm-end">2</span></a>
              <a href="videos.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-file-earmark-play-fill --c-d-blue"></i> My videos <span class="badge --bg-light-pink float-sm-end">4</span></a>
              <a href="compesation.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-briefcase-fill --c-d-blue"></i> My Tasks/Compesations <span class="badge --bg-light-pink float-sm-end">2</span></a>
            </div>

            <div class="card mt-5 mb-3 mb-lg-0">
            <div class="card-header --bg-one"><span class="text-white">Food for thoughts</span></div>
            <div class="card-body">
              <span class="text-justify"><q>Marketing’s job is never done. It’s about perpetual motion. We must continue to innovate every day.</q></span>
            </div>
            </div>
            </div>

          <div class="col-md-9">
            <div class="card transparent-bg">
              <div class="card-header --bg-one">
                <h5 class="card-title text-white"> My stats <i class="bi bi-clipboard-data"></i></h5>
              </div>
              <div class="card-body">
                <div class="row gx-sm-4">
                <div class="col-md-3">
                  <div class="p-3 text-center text-white --grd-pinky mb-3 mb-lg-0">
                    <h3><i class="bi bi-people"></i> <br>569</h3>
                    <h5>Users</h5>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="p-3 text-center text-white --grd-pinky mb-3 mb-lg-0">
                    <h3><i class="bi bi-diagram-3-fill"></i> <br> 0</h3>
                    <h5>Downlines </h5>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="p-3 text-center text-white --grd-pinky mb-3 mb-lg-0">
                    <h3><i class="bi bi-graph-up"></i> <br> 203</h3>
                    <h5>Visitors</h5>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="p-3 text-center text-white --grd-pinky mb-3 mb-lg-0">
                    <h3><i class="bi bi-award-fill"></i> <br> Stage 1</h3>
                    <h5>silver</h5>
                  </div>
                </div>
              </div>
              </div>
          </div>
        

        <!--  -->
          <div class="card mt-sm-5 transparent-bg">
            <div class="card-header --bg-one">
              <h5 class="card-title text-white">My Downlines <i class="bi bi-diagram-3"></i></h5>
            </div>
            <div class="card-body">
              <table class="table">
                <thead class="transparent-bg text-white">
                  <tr class="text-white">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email address</th>
                    <th scope="col">Phone Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-white">
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr class="text-white">
                    <th scope="row">2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr class="text-white">
                    <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      </div>

      </div>
    </section> 
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>