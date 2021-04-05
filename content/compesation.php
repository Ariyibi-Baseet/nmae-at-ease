<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="../assets/css/profile.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/utilities.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>vvv</title>
  </head>
  <body>
    <!-- header -->
    <div class="container-fluid">
    <nav id="navbar" class="navbar">
      <h1 class="logo">NMAE</h1>
      <ul>
        <li><button type="button" class="btn btn-danger float-right"><a href="../forms/logout.php" style="text-decoration:none !important;">Logout</a></button></li>
      </ul>
    </nav>

      <section id="main">
          <div class="row mt-5">
            <div class="col-md-3 mb-3 mb-lg-0">
              <!--  -->
              <div class="list-group transparent-bg">
                <a href="dashboard.php" class="list-group-item --grd list-group-item-action active" aria-current="true">
                  Dashboard
                </a>
                <a href="profile.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-person-lines-fill --c-d-blue"></i> My profile <span class="badge --bg-light-pink float-sm-end">0</span></a>
                <a href="network-kits.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-file-earmark-zip-fill --c-d-blue"></i> My network kits <span class="badge --bg-light-pink float-sm-end">0</span></a>
                <a href="videos.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-file-earmark-play-fill --c-d-blue"></i> My videos <span class="badge --bg-light-pink float-sm-end">5</span></a>
                <a href="compesation.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-briefcase-fill --c-d-blue"></i> My Tasks/Compesations <span class="badge --bg-light-pink float-sm-end">2</span></a>
              </div>
            </div>

          <div class="col-md-9 mt-lg-0">
            <!-- to include transparent background for it -->
            <div class="card">
              <div class="card-header --bg-one">
                <h5 class="card-title text-white">My Compesation</h5>
              </div>
          <div class="card-body">
            <div class="row gx-sm-4">
                <div class="col-md-4">
                  <div class="p-3 text-center text-white --grd-pinky mb-3 mb-lg-0">
                    <h4>Current Stage:</h4>
                    <h5>Stage 1 - silver</h5>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="p-3 text-center text-white --grd-pinky mb-3 mb-lg-0">
                    <h3>Current Balance:</h3>
                    <h5>&#8358; 0</h5>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="p-3 text-center text-white --grd-pinky mb-3 mb-lg-0">
                    <h3>Total withdraw:</h3>
                    <h5>&#8358; 0</h5>
                  </div>
                </div>
            </div>
      </div>
      </div>
      </div>
      </div>

      <div class="col-md-12 mt-5">
        <div class="card">
          <div class="card-header bg-danger">
            <h5 class="text-white">Transaction / Reward history</h5>
          </div>
          <div class="card-body">

          </div>
        </div>
      </div>
    </div>
          </div>
        </div>
      </div>
    </section> 
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>