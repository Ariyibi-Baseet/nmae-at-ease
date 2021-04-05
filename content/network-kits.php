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
                <a href="profile.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-person-lines-fill --c-d-blue"></i> My profile <span class="badge --bg-light-pink float-sm-end">0</span></a>
                <a href="network-kits.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-file-earmark-zip-fill --c-d-blue"></i> My network kits <span class="badge --bg-light-pink float-sm-end">0</span></a>
                <a href="videos.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-file-earmark-play-fill --c-d-blue"></i> My videos <span class="badge --bg-light-pink float-sm-end">4</span></a>
                <a href="compesation.php" class="list-group-item list-group-item-action --c-d-blue"><i class="bi bi-briefcase-fill --c-d-blue"></i> My Tasks/Compesations <span class="badge --bg-light-pink float-sm-end">2</span></a>
              </div>
            </div>

          <div class="col-md-9 mt-5 mt-lg-0">
            <!-- to include transparent background for it -->
            <div class="card mb-3">
              <div class="card-header --bg-one">
                <h5 class="card-title text-white">Network kits</h5>
              </div>
          <div class="card-body">
          <h3>Available Network Kits</h3>
          <span>Note:</span> <span>Please read carefully and put in into practise so as to get the result</span>
          <p></p>

          <?php
// creating a file to upload

// displaying all the uploaded files

$files = scandir("../assets/pdfs/");

for($a = 2; $a < count($files); $a++)
{
  // displaying links to the uploaded pdf
  // making it downloadable
  // i will later add file size for the uploaded file
  ?>
   <img src="../assets/img/pdflogo.png" style="width:50px;height:50px;cursor:pointer;" alt=""> <span><!--display pdf name--><?php echo $files[$a] ?></span> <br><span><button class="btn btn-primary"><a style="text-decoration:none;" href="../assets/pdfs/<?php echo $files[$a] ?>" target="_blank" class="text-white" title="View this document in a new tab for reading">View kit</a></button></span> &nbsp; <span><button class="btn btn-primary"><a class="text-white" href="../assets/pdfs/<?php echo $files[$a] ?>" download="<?php echo $files[$a] ?>" style="text-decoration:none;" title="save it locally on your devices">Download kit</a></button></span><p></p>
  <?php
}
?>
        <span>Did you think it is difficult to get those three people as mention in the network kit? <i class="bi bi-emoji-frown"></i> click on the button below <i class="bi bi-arrow-down"></i></span><p></p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Get your three downlines
</button>

       <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog py-4">
    <div class="modal-content">
      <div class="modal-header bg-primary  text-white">
        <h5 class="modal-title text-white" id="staticBackdropLabel">How to get your three downlines</h5>
        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6>Now follow these technique below:</h6>
        <span>Note: fill the boxes below, they are the people you need.</span><br>
      
<!-- QUESTION ONE STARTS -->
        <center><span style="font-weight:bold;">1</span></center>
        <span>List Names of primary or secondary school mates(friends) that you are still together.</span>
        <form action="">
        <table class="table py-4">
  <thead>
    <tr>
      <th scope="col" class="--c-d-blue">S/N</th>
      <th scope="col" class="--c-d-blue">Name</th>
      <th scope="col" class="--c-d-blue">Phone Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="--c-d-blue">1</th>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>

    </tr>
    <tr>
      <th scope="row" class="--c-d-blue">2</th>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
      <td><div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>

    </tr>
    <tr>
      <th scope="row" class="--c-d-blue">3</th>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
    </tr>
  </tbody>
</table><!-- ENDS HERE -->

<center><span style="font-weight:bold;">2</span></center>
        <span>List Names of your coursemates,room mates,vocation mates that still remain your friends</span>
        <form action="">
        <table class="table">
  <thead>
    <tr>
      <th scope="col" class="--c-d-blue">S/N</th>
      <th scope="col" class="--c-d-blue">Name</th>
      <th scope="col" class="--c-d-blue">Phone Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="--c-d-blue">1</th>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>

    </tr>
    <tr>
      <th scope="row" class="--c-d-blue">2</th>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
      <td><div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>

    </tr>
    <tr>
      <th scope="row" class="--c-d-blue">3</th>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
    </tr>
  </tbody>
</table>

<center><span style="font-weight:bold;">3</span></center>
        <span>List Names of other friends in your area, your social media friends(facebook,twitter,whatsapp and others)</span>
        <form action="">
        <table class="table">
  <thead>
    <tr>
      <th scope="col" class="--c-d-blue">S/N</th>
      <th scope="col" class="--c-d-blue">Name</th>
      <th scope="col" class="--c-d-blue">Phone Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="--c-d-blue">1</th>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>

    </tr>
    <tr>
      <th scope="row" class="--c-d-blue">2</th>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
      <td><div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>

    </tr>
    <tr>
      <th scope="row" class="--c-d-blue">3</th>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
      <td>
      <div class="form-group">
      <input type="text" class="form-control">
      </div>
      </td>
    </tr>
  </tbody>
</table>

<span>After you might have listed those Names, start consulting or contacting them for the business i.e telling them about the learning benefits in this site, about the monetary rewards, and about the future promise of the site and get them convinced that they don't have anything to regret after joining the successful train of "N-MAE"! <br> Links of some useful Articles or E-books on Network Marketing. please, click on them to further your learning. The more you learn, The more you Earn!</span><br>
<a href="#">google.com</a><br>
<a href="#">google.com</a><br>
<a href="#">google.com</a><br>
<a href="#">google.com</a><br>
<a href="#">google.com</a><p></p>
<button class="btn btn-primary form-control">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
      </div>
      </div>
    </section> 
  </div>

  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <div class="card" style="display:none;">
        <div class="card-header bg-primary">
          <h5 class="card-title text-white">Upload Form</h5>
        </div>
        <div class="card-body">
          <form method="post" action="../forms/upload.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Pdf uploads</label>
              <input type="file" class="form-control" name="file">
            </div><p></p>
            <button type="submit" class="btn btn-primary w-100" name="registerBtn">Upload pdf</button>
          </form>
        </div>
      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>