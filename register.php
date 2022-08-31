<?php
  require_once "libraries/dbconfig.php";
  include "header.php";
?>
  <br>
  <br>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Register</h2>
          <p>Register Now</p>
        </div>

        <div class="row ">

          <!-- <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Cor Jesu College, Davao del Sur, PH 8002</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@thesis.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+63 931 756 2740</p>
              </div>

            </div>

          </div> -->

          <div class="col-lg-8 mt-5 mt-lg-0 " style="margin: auto;" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="firstname" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="lastname" id="email" placeholder="Last Name" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="subject" placeholder="Email Address" required>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="firstname" placeholder="Password" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="lastname" id="email" placeholder="Confirm Password" required>
                </div>
              </div>
              <br>
              <div class="text-center"><button type="submit">Register</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
  include "footer.php";
  ?>