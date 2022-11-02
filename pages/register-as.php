<?php
  if (isset($_GET['submit'])) {
    if($_GET['register-as'] === "teacher"){
        header("Location: index.php?page=register" );
    }
    
  };
?>

<style>
div.innerBox {
    background-color: white;
    border-radius: 15px;
    height: 200px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.innerBox span {
    position: absolute;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    font-size: 30px;
    color: #1acc8d;
    margin-top: -138px;
    margin-left: -240px;
}

.iconBox {
    position: relative;
    color: black;
    opacity: 7%;
    transform: rotate(-10deg);
    margin-top: 48px;
    margin-left: 2.5in;
}

.iconBox1 {
    position: relative;
    color: black;
    opacity: 7%;
    transform: rotate(-10deg);
    margin-top: 48px;
    margin-left: 2.7in;
}
</style>

<br> <br> <br> <br>
<!-- ======= Contact Section ======= -->
<section id="" class="contact">
    <div class="container">

        <div class="row">

            <div class="col-lg-8 mt-5 mt-lg-0 text-center " style=" margin: auto;" data-aos="fade-left"
                data-aos-delay="200">
                <h2 style=" margin: auto; ">Choose</h2>
                <p>You want to register as?</p><br>
                <div class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="hidden" name="register-as" id="" value="teacher">
                            <div class="text-center"><a href="register.php">
                                    <div class="innerBox">
                                        <div class="iconBox"><i class="fas fa-chalkboard-teacher fa-10x"></i></div>
                                        <span type="submit" name="submit" class="w-50">Teacher</span>
                                    </div>
                                </a></div>

                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <div class="text-center"> <a href="student">
                                    <div class="innerBox">
                                        <div class="iconBox1"><i class="fas fa-solid fa-user fa-10x"></i></div>
                                        <span type="submit" class="w-50">Student</span>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
                </div>
                <br><br><br>
                <h2 style=" margin: auto; ">Already have an account?</h2>
                <a href="login">
                    <button class="btn btn-success mt-2"
                        style="border-radius: 50px; min-width: 140px; height: 50px;">Login</button>
                </a>


                <br> <br> <br> <br>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->