<!-- ======= Register Section ======= -->
<section id="register" class="contact">
    <div class="container">
        <div class="background" data-aos="fade-right">
            <img src="assets/img/about1.png" alt="">
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
                            <input type="text" name="name" class="form-control" id="firstname" placeholder="First Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="lastname" id="lastname"
                                placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address"
                            required>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 form-group">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="password" class="form-control" name="password" id="confirm-password"
                                placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="btn-section">
                        <button class="btn btn-primary" type="submit" name="submit">Register</button>
                    </div>
                    <hr style="width: 3.4in;margin: auto;height: 0.5px;" class="my-3" />
                    <div class="text-center">Already have account?<a href="index.php?page=login"> login now</a></div>
                </form>
            </div>
        </div>
    </div>
    <br>
</section><!-- End Contact Section -->
</body><!-- End #main -->