<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | Learning Geometry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<style>
  #main{
    background-color: ghostwhite;
  }
  .row-form{
    background-color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 15px;
    width: 400px;
    margin-left: 60%;
    margin-top: -20px;
    margin-bottom: 30px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2)
  }
  .text-center{
    font-size: small;
  }
  /* #email, #pass{
    border-radius: 2px;
    border: none;
    box-shadow: 0 0.5px 2px rgb(0 0 0 / 0.2) inset;
  } */
  /* #email:focus, #pass:focus{
    border: 1px solid lightslategray;
  } */
  .btn-section{
    text-align: center;
  }

  .btn-section button[type=submit]{
    margin-top: 5px;
    width: 100%;
  }
  .container .section-title{
    margin-left: 40px;
    margin-top: -30px;
  }
  .background{
    position: absolute;
    margin-left: -30px;  
    margin-top: 64px;
  }

</style>

<body id="main">

<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php"><span>Intelligent Tutor</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <!-- <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/capstone/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/capstone/#courses">Courses</a></li>
          <li><a class="nav-link scrollto" href="#resources">Resources</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>

          <li><a class="nav-link scrollto" href="#about">Lesson</a></li>

          <li><a class="nav-link scrollto" href="video/video.html">Lesson</a></li>

         <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->

          <!-- <li><a href=""><i class="bi bi-search "></i></a></li> -->
          <!-- <li><a href=""><i class="bi bi-person-fill"></i></a></li> -->
          <!-- <li><a class="nav-link scrollto" href="includes/auth/login.php">Register</a></li> -->
          <!-- <a href="admin/register.html"><button class="btn btn-primary scrollto">Register</button></a> -->
          
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav> -->
      <!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <br><br><br>
  <!-- ======= Register Section ======= -->
  <section id="register" class="contact">
    <div class="container">
    <div class="background" data-aos="fade-right">
        <img src="assets/img/about.png" alt="">
      </div>
      <div class="section-title" data-aos="fade-down">
        <h2>Register</h2>
        <p>Register Now</p>
      </div>
      <div class="row-form" data-aos="fade-left" data-aos-delay="200">
      
        <div class="col-lg-30 mt-5 mt-lg-0 " data-aos="fade-left" data-aos-delay="90">
          <b>You can now create your account.</b>
          <form action="functions/loginVerifier.php" method="POST" class="php-email-form"><br>
          <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="firstname" placeholder="First Name" required>
                </div> 
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="password" id="confirm-password" placeholder="Confirm Password" required>
                </div>
              </div>
            <div class="btn-section">
              <button class="btn btn-primary" type="submit" name="submit">Login</button>
            </div>
            <hr style="width: 3.4in;margin: auto;height: 0.5px;" class="my-3" />
            <div class="text-center">Already have account?<a href="login.php"> login now</a></div>   
          </form>
        </div>
      </div>
    </div>
    <br>
  </section><!-- End Contact Section -->

</body><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3>Intelligent Tutor</h3>
            <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Bootslander</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</html>