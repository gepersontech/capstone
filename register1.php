<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

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
    <link rel="stylesheet" type="text/css" href="app/src/plugins/jquery-steps/jquery.steps.css" />
    <link rel="stylesheet" type="text/css" href="app/vendors/styles/style.css" />

</head>


<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid align-items-center">
            <div class="brand-logo">
                <a href="index.php">
                    <img src="app/vendors/images/gits-logo.svg" alt="" class="light-logo" />
                </a>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-lg-7 align-items-center">
            <img src="app/vendors/images/register-page-img.png" alt="" />
        </div>
        <div class="col-lg-5 ">
            <div class=" container register-box bg-white box-shadow border-radius-10">
                <form class="tab-wizard2 wizard-circle wizard"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> <br>
                    <h5>Basic Account Credentials</h5> <br>


                    <?php
                                        $error="ss";
                                        if($error!=null){
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Holy guacamole!</strong> You should check in on some of those fields
                                        below.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';
                                        }

                                    ?>
                    <section>
                        <div class="form-wrap max-width-500 mx-auto">
                            <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="options" id="admin" value="4" disabled />
                                        <div class="icon">
                                            <img src="app/vendors/images/briefcase.svg" class="svg" alt="" />
                                        </div>
                                        <span>I'm</span>
                                        Teacher
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="options" id="user" value="3" />
                                        <div class="icon">
                                            <img src="app/vendors/images/person.svg" class="svg" alt="" />
                                        </div>
                                        <span>I'm</span>
                                        Student
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email Address*</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" placeholder="Enter your email address"
                                        name="email" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Username*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Enter your username"
                                        name="username" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Password*</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" placeholder="Create password"
                                        name="password" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Confirm Password*</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" placeholder="Confirm password"
                                        name="confirmpassword" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5>Personal Information</h5> <br>
                    <section>
                        <div class="form-wrap max-width-600 mx-auto">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">First Name*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="firstname"
                                        placeholder="Enter your firstname" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Last Name*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="lastname"
                                        placeholder="Enter your lastname" />
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-4 col-form-label">Gender*</label>
                                <div class="col-sm-8">
                                    <div class="custom-control custom-radio custom-control-inline pb-0">
                                        <input type="radio" id="male" name="gender" class="custom-control-input" />
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline pb-0">
                                        <input type="radio" id="female" name="gender" class="custom-control-input" />
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Birthdate*</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="birthdate" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Address*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Enter your address" />
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                <label class="custom-control-label" for="customCheck1">I have read and
                                    agreed to the terms of services and
                                    privacy policy</label>
                            </div>

                        </div>

                    </section>
                    <div class="container">
                        <button name=" register" type="submit" class=" btn btn-primary btn-lg btn-block text-white"
                            style="border-radius: 50px; ">SUBMIT</button>
                    </div> <br>
                </form>
            </div>
        </div>
    </div>



    <!-- js -->
    <script src="app/vendors/scripts/core.js"></script>
    <script src="app/vendors/scripts/script.min.js"></script>
    <script src="app/vendors/scripts/process.js"></script>
    <script src="app/vendors/scripts/layout-settings.js"></script>
    <script src="app/src/plugins/jquery-steps/jquery.steps.js"></script>
    <!-- <script src="app/vendors/scripts/steps-setting.js"></script> -->

</body>

</html>