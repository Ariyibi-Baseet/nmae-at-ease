<?php
include("./forms/userLogin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tempo Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./assets/vendor/JqueryPreloader/dist/css/style.min.css"> -->

  <!-- <style>
  .preloader {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
  background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0,1)), url("../img/network-bg.jpg");
  background-size: cover;
  z-index:998;
} -->
</style>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.0.1
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ================= Preloader ================= -->
  <!-- <div class="preloader js-preloader flex-center">
    <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div> -->
 <!-- =========== Preloader ends ===============-->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">NMAE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Sign Up</button></li>
          <!-- i will use bootstrap modal box for the sighn In-->
          <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Sign In</button></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Signup Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfK5d5erp8gfhLWns8HBO-ZI4AJDgzOKNTtOD1-W-VKYCKPLg/viewform?embedded=true" width="480" height="520" style="overflow:initial;" frameborder="0" marginheight="0" marginwidth="0" style="overflow-y:scroll;box-sizing: content-box;">Loading…</iframe>
        <span style="color:red;">Note: </span> After filling the form, you will have to pay a sum of <span style="font-weight:bold;">N1,750</span> to <span style="font-weight:bold;">Blossom Nigeria limited.</span> Account number : <span style="font-weight:bold;">00298752</span>, Bank name : <span style="font-weight:bold;">Sterling</span> and send proof of payment to <i class='bx bxs-hand-right'></i> <a href="https://chat.whatsapp.com/B8dgvlBrk9kExHYc5AUzJl">NMAE PROOF OF PAYMENT </a>our whatsapp handle for confirmation, afterwhich an id code will be sent to you via email for login passcode.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLongTitle">LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./forms/userLogin.php" method="post">
          <label for="idCode" style="font-weight:bold;">ID CODE</label>
          <input class="form-control form-control-md" type="text" name="idCode" placeholder="input your id code...">
          <p></p>
          <input class="form-control form-control-md bg-primary text-white" type="submit" name="login" placeholder="input your id code...">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary" name="login">Login</button> -->
      </div>
    </div>
  </div>
</div>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>Network Marketing At Ease</strong></h3>
      <h1>A practical teaching forum</h1>
      <h2>We are at your service when it comes to network marketing Learning.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <h3>Learn More <span>About Us</span></h3>
        </div>

        <div class="row content lg-py-0 py-4">
          <div class="col-lg-6-offset">
            <p style="padding:15px;text-align:justify;">
              Network marketing at ease comprises of a body of professional network marketers that discharge the responsibility of building the jobless youths and adults on how they can promote product and services of certain companies to attain their financial freedom hence, become affluent through the remuneration beign collected from such companies.
            </p>
            <p style="padding:15px;text-align:justify;"> we produce and empower self reliant network marketersby so doing the learners will have gained practical experience from instructions and orders given by our teaching aids</p>
            <ul style="padding:15px;">
              <li><i class="ri-check-double-line"></i> Reward your recruiting efforts.</li>
              <li><i class="ri-check-double-line"></i> Always provide the latest information on corporate changes and goals.</li>
              <li><i class="ri-check-double-line"></i>Consistent communication and support</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome <span>Services</span></h3>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-group'></i></div>
              <h4 class="title"><a href="">One-on-one tutorials</a></h4>
              <p class="description">We teach people directly to become a successful network marketer within a short period of time at affordable charges</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-book-content'></i></div>
              <h4 class="title"><a href="">Network Kits</a></h4>
              <p class="description">We sell out some articles/kits to a would-be network marketer for learning because, the more they learn, the more they earn. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-user-voice'></i></div>
              <h4 class="title"><a href="">Counselling</a></h4>
              <p class="description">We give viable counsellings to such network marketerd that encounter problem in their careers. if these people narrates their challenges to us we help them solve those challenges at affordable charges.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> "if somebody offers you an amazing opportunity but you are not sure you can do it, say yes-then learn how to do it later"
            <br><span style="font-weight:bold;">- Richard branson</span></p>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <h3>Our Competing <span>Prices</span></h3>
          <p>to prove our sincerity of purpose, we make our pricing very affordable to all and sundry.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>For Youths</h3>
              <h4><sup>N</sup>5,000<span> / 3months</span></h4>
              <ul>
                <li>Duration: three months</li>
                <li>Nature : Once a week tutorial</li>
                <!-- <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
              </ul>
              <div class="btn-wrap">
                <!-- will create modal box that will link to whatsapp -->
                <a href="#" class="btn-buy">Join Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <span class="recommended-badge">Recommended</span>
              <h3>For working class</h3>
              <h4><sup>N</sup>8,000<span> / 4months</span></h4>
              <ul>
                <li>Duration: four months</li>
                <li>Nature : a two-hour once a week tutorial</li>
                <!-- <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Join Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Regular class</h3>
              <h4><sup>N</sup>3,500<span> / 6weeks</span></h4>
              <ul>
                <li>Duration: Six weeks</li>
                <li>Nature : a two-hour twice a week tutorial</li>
                <li>1:5 Tutorial i.e One tutor to teach five students</li>
                <!-- <li>Pharetra massa</li>
                <li>Massa ultricies mi</li> -->
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Join Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!---------------------------------------------------- FAQ is not working ----------------------------------------->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What is Network Marketing? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Network marketing is a business model that depends on person-to-person sales by independent representatives (individuals), often working from home or particular places.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How can i register for this program? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                  You can become one of the beneficiary of this program by clicking on 'Sign up' at the top navbar and fill out the form correctly.Then you will pay an amount of 1,500 and after the confirmation, an id code will be sent to you between 12/24hrs.<br> <span class="warning">Note:</span> you have to be careful not to loose the id code because its the passcode for you to login on our platform.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">What are my Tasks? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Very simple! you have two tasks ahead: <br>
                1. Invitation <br>
                2. Monitoring <br>
                By invitation you are required to invite three positive-minded people that will equally register as you did, with 1,500 each. <br>
                By monitoring task, you have to gear-up the three people you registered to get their three people registered as well until then, your task of monitoring is not completed.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">What is my reward at the completion of my task? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Its quite easy!. At the completion of your task, you will be rewarded with huge amount ten thousand naira (N1000).
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">How can i collect my Monetary Rewards? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Your monetary reward of ten thousand naira will be transfered to your bank account, as filled in your form. <br> <span class="warning">Note:</span> a deduction of N200 will be used for transfer and office maintenance charges
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- End F.A.Q Section -->


    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>For further enquiries about this program, that have not reflexed in the aboe FAQ, you are hereby urge to forward your question to us, via our contact</p>
        </div>

        <!--============================== i will later embed google map of Lipede here =====================================-->
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16235400.731722621!2d3.3488895999999997!3d6.5568767999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103a4b91ac1e965d%3A0xcd224c8dca686899!2sOba%20Lipede%20Ultra%20Modern%20Market!5e0!3m2!1sen!2sng!4v1615672385918!5m2!1sen!2sng" width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!--=================================================================================================================-->
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Shop 415 Oba lipede Ultra modern market, kuto, Abeokuta, Ogun State, Nigeria</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+234 8184097948,</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>BastoTech</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
          Designed by <a href="mailto:bastohenna@gmail.com">Ariyibi Baseet</a>
        </div>
      </div>
      <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="./assets/vendor/JqueryPreloader/jquery.js"></script> -->

<!-- <script src="./assets/vendor/JqueryPreloader/dist/js/jquery.preloadinator.min.js"></script>
<script>
	$('.js-preloader').preloadinator({
		minTime: 5000 // 3s seconds delay
	});
</script> -->
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>