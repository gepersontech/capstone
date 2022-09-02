<?php
  if (isset($_GET['submit'])) {
    if($_GET['register-as'] === "teacher"){
        header("Location: index.php?page=register" );
    }
    
  };
  
?>
 <br> <br> <br> <br>
    <!-- ======= Contact Section ======= -->
    <section id="" class="contact">
      <div class="container">
        <!-- <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div> -->

        <div class="row">

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

          <div class="col-lg-8 mt-5 mt-lg-0 text-center " style=" margin: auto;" data-aos="fade-left" data-aos-delay="200">
            <h2 style=" margin: auto; ">Choose</h2>
            <p>Please choose what you want.</p><br> <br>

            
            <div  class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="hidden" name="register-as" id="" value="teacher">
                  <div class="text-center"><a href="index.php?page=register" ><button type="submit" name="submit" class="w-50">As Teacher</button></a></div>
                  
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <div class="text-center"><button type="submit" class="w-50">As Student</button></div>
                </div>
              </div>
              <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
          </div>
            <br> <br> <br> <br>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
