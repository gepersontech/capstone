
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
  }
  #email:focus, #pass:focus{
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

          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li>
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
      </nav>
      <!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <br><br><br>
  <!-- ======= Login Section ======= -->
  <section id="login" class="contact">
    <div class="container">
    <div class="background" data-aos="fade-right">
        <img src="assets/img/about.png" alt="">
      </div>
      <div class="section-title" data-aos="fade-down">
        <h2>Login</h2>
        <p>Intelligent Tutor</p>
      </div>
      <div class="row-form" data-aos="fade-left" data-aos-delay="200">
        <div class="col-lg-30 mt-5 mt-lg-0 " data-aos="fade-left" data-aos-delay="90">
          <b>You can now login.</b>
          <form action="functions/loginVerifier.php" method="POST" class="php-email-form">
            <div class="row-1">
              <div class="form-group mt-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
            </div>
            <div class="btn-section">
              <button class="btn btn-primary" type="submit" name="submit">Login</button>
            </div>
            <hr style="width: 3.4in;margin: auto;height: 0.5px;" class="my-3" />
            <div class="text-center"><a href="">Forgot password?</a></div>
            <div class="text-center">Don't have account yet?<a href="./register.php"> click here</a></div>   
          </form>
        </div>
      </div>
    </div>
    <br>
  </section>
  <!-- End Contact Section -->
</body>
<!-- End #main -->

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
