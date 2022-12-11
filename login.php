<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>GITS - ACCESS</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="app/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="app/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="app/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="app/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="app/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="app/vendors/styles/style.css" />

</head>
<!-- <div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo">
            <img src="vendors/images/deskapp-logo.svg" alt="" />
        </div>
        <div class="loader-progress" id="progress_div">
            <div class="bar" id="bar1"></div>
        </div>
        <div class="percent" id="percent1">0%</div>
        <div class="loading-text">Loading...</div>
    </div>
</div> -->

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid align-items-center">
            <div class="brand-logo">
                <a href="index">
                    <img src="app/vendors/images/gits-logo.svg" alt="" class="light-logo" />
                </a>
            </div>
        </div>

    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="app/vendors/images/login-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary" style="font-family: 'Poppins', sans-serif;">Welcome
                                Back! 👋 </h2>
                            <p class="text-center m-2 " style="font-family: 'Poppins', sans-serif;">Login to begin your
                                session</p>
                        </div>
                        <?php
                            if(isset($_GET['error']) != null){
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        '.$_GET['error'].'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>';
                            }
                            

                                    ?>
                        <form action="conf/auth_login.php" method="post" autocomplete="off">
                            <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="options" id="admin" disabled />
                                        <div class="icon">
                                            <img src="app/vendors/images/briefcase.svg" class="svg" alt="" />
                                        </div>
                                        <span>I'm</span>
                                        Teacher
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="options" id="user" />
                                        <div class="icon">
                                            <img src="app/vendors/images/person.svg" class="svg" alt="" />
                                        </div>
                                        <span>I'm</span>
                                        Student
                                    </label>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <div class="input-group-prepend custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control form-control-lg 
                                <?php
                                    if(isset($_GET['error']) && $_GET['error'] ===  "Username not Exist."){
                                        echo 'form-control-danger';
                                    }elseif (isset($_GET['error']) && $_GET['error'] ===  "Username is required") {
                                         echo 'form-control-danger';
                                    }elseif (isset($_GET['error']) && $_GET['error'] ===  "Username and Password is required") {
                                         echo 'form-control-danger';
                                    }elseif (isset($_GET['error']) && $_GET['error'] ===  "Incorrect username") {
                                         echo 'form-control-danger';
                                    }
                                ?>
                                
                                " placeholder="Enter username" />

                            </div>
                            <div class="input-group custom">
                                <div class="input-group-prepend custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg
                                <?php
                                    if(isset($_GET['error']) && $_GET['error'] ===  "Password not matched"){
                                        echo 'form-control-danger';
                                    }elseif (isset($_GET['error']) && $_GET['error'] ===  "Password is required") {
                                         echo 'form-control-danger';
                                    }elseif (isset($_GET['error']) && $_GET['error'] ===  "Username and Password is required") {
                                         echo 'form-control-danger';
                                    }elseif (isset($_GET['error']) && $_GET['error'] ===  "Incorect password") {
                                         echo 'form-control-danger';
                                    }
                                ?>
                                
                                " placeholder="Enter password" />

                            </div>
                            <!-- <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="forgot-password.html">Forgot Password</a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button name="login" type="submit"
                                            class="btn btn-primary btn-lg btn-block text-white"
                                            style="border-radius: 50px; height: 50px; font-family: 'Poppins', sans-serif;">SIGN
                                            IN</button>
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                        <!-- OR
                                    </div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="register.php"
                                            style="border-radius: 50px;">CREATE
                                            ACCOUNT</a>
                                    </div> -->
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="text-center mt-3" style="font-family: 'Poppins', sans-serif;">
                        <P>Don't have an account?
                            <a href="register"><b>Register here</b></a>
                        </P>
                    </div>
                </div>

            </div>

        </div>


    </div>



    <!-- js -->
    <script src="app/vendors/scripts/core.js"></script>
    <script src="app/vendors/scripts/script.min.js"></script>
    <script src="app/vendors/scripts/process.js"></script>
    <script src="app/vendors/scripts/layout-settings.js"></script>

</body>

</html>