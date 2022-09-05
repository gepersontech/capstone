<?php
  if (isset($_GET['submit'])) {
    if($_GET['register-as'] === "teacher"){
        header("Location: index.php?page=register" );
    }
    
  };
?>

<style>
  div.innerBox{
    background-color: white;
    border-radius: 15px;
    height: 200px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .innerBox span{
    position: absolute;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bold;
    font-size: 30px;
    color: #1acc8d;
    margin-top: -130px;
    margin-left: -240px;
  }
  .iconBox{
    position: relative;
    color: gray;
    opacity: 15%;
    transform: rotate(-10deg);
    margin-top: 48px;
    margin-left: 2.6in;
  }
  .iconBox1{
    position: relative;
    color: gray;
    opacity: 15%;
    transform: rotate(-10deg);
    margin-top: 48px;
    margin-left: 2.7in;
  }
</style>

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
            <p>You want to register as?</p><br>
            <div  class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="hidden" name="register-as" id="" value="teacher">
                  <div class="text-center"><a href="index.php?page=register" >
                    <div class="innerBox">
                      <div class="iconBox"><i class="fas fa-chalkboard-teacher fa-10x"></i></div>       
                      <span type="submit" name="submit" class="w-50">Teacher</span>
                    </div>      
                  </a></div>
                  
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <div class="text-center"> <a href="index.php?page=register"> 
                    <div class="innerBox">
                      <div class="iconBox1"><i class="fas fa-solid fa-user fa-10x"></i></div>
                      <span type="submit" class="w-50">Student</span>
                    </div>
                    
                  </a></div>
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
