<?php

// Include config file
require_once "conf/config.php";
// Define variables and initialize with empty values
    $role = 
    $email = 
    $username = 
    $password = 
    $confirmpassword = 
    $password =
    $firstname = 
    $lastname = 
    $gender =
    $address =  
    $birthdate = "";
    $date = date('Y-m-d H:i:s');

$created_at = date('Y-m-d H:i:s');
$email_err = $firstname_err = $lastname_err = $username_err = $password_err = $confirm_password_err = $usertype_error= $register_err  = $created_at_err = $update_at_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // role
    if(empty(trim($_POST["options"]))){
        $usertype_err = "Please choose usertype.";
    }else{
        $usertype = trim($_POST["usertype"]);
    }


    // Email
    if(empty(trim($_POST["email"]))){
    $email_err = "Please enter your Email Address.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["email"]))){
    $email_err = "Email can only contain letters, numbers, and underscores.";
    } else{
        $email = trim($_POST["email"]);
    }

    // Validate username
    if(empty(trim($_POST["username"]))){
    $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
    $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
    // Prepare a select statement
    $sql = "SELECT id FROM users WHERE username = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);

                    // Default Email Address
                    $email = trim($username);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
        if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
        } elseif(strlen(trim($_POST["password"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST["password"]);
        }
    
    // Validate confirm password
    if(empty(trim($_POST["confirmpassword"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirmpassword"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Firstname
    if(empty(trim($_POST["firstname"]))){
    $firstname_err = "Please enter a firstname.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["firstname"]))){
    $ufirstname_err = "Firstname can only contain letters, numbers, and underscores.";
    } else{
        $firstname = ucwords(trim($_POST["firstname"]));
    }

        // Lastname
        if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please enter a lastname.";
        } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["lastname"]))){
        $ulastname_err = "Lastname can only contain letters, numbers, and underscores.";
        } else{
            $lastname = ucwords(trim($_POST["lastname"]));
        }

        // Gender
        if(empty(trim($_POST["gender"]))){
        $gender_err = "Please choose your gender";
        } else{
            $gender = ucwords(trim($_POST["gender"]));
        }
        
        // Address
        if(empty(trim($_POST["address"]))){
        $address_err = "Enter your address";
        } else{
            $address = ucwords(trim($_POST["address"]));
        }
  
  // Check input errors before inserting in database
  if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($firstname_err) && empty($lastname_err) && empty($usertype_err) ){
      
      // Prepare an insert statement
      $sql = "INSERT INTO users (username, password, firstname, lastname, usertype, status,  created_at, updated_at, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
       

      $stmt=mysqli_prepare($link, $sql);
      if(false===$stmt){
      die('Error with prepare: ') . htmlspecialchars($mysqli->error);
      }

      $bp =  mysqli_stmt_bind_param($stmt, "sssssssss", $param_username, $param_password, $firstname, $lastname, $usertype, $status, $created_at, $updated_at, $email );
          // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
      if(false===$bp){
              die('Error with bind_param: ') . htmlspecialchars($stmt->error);
          }

      $bp = $stmt->execute();
          if ( false===$bp ) {
              die('Error with execute: ' . htmlspecialchars($stmt->error));
          }else{
            header("location: login.php?success=registered");
          }

      $stmt->close();

  }
  
  // Close connection
  mysqli_close($link);
}

?>

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
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-top">
                <div class="col-md-6">
                    <img src="app/vendors/images/register-page-img.png" alt="" />
                </div>
                <div class="col-md-6">
                    <div class=" register-box bg-white box-shadow border-radius-10">
                        <div class="container">
                            <div class="wizard-content">
                                <form class="tab-wizard2 wizard-circle wizard" action="app/action/admin/add-student.php"
                                    method="POST"> <br>
                                    <h5>Basic Account Credentials</h5> <br>
                                    <section>
                                        <div class="form-wrap max-width-500 mx-auto">
                                            <div class="select-role">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn active">
                                                        <input type="radio" name="options" id="admin" value="4"
                                                            disabled />
                                                        <div class="icon">
                                                            <img src="app/vendors/images/briefcase.svg" class="svg"
                                                                alt="" />
                                                        </div>
                                                        <span>I'm</span>
                                                        Teacher
                                                    </label>
                                                    <label class="btn">
                                                        <input type="radio" name="options" id="user" value="3" />
                                                        <div class="icon">
                                                            <img src="app/vendors/images/person.svg" class="svg"
                                                                alt="" />
                                                        </div>
                                                        <span>I'm</span>
                                                        Student
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Email Address*</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control"
                                                        placeholder="Enter your email address" name="email" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Username*</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your username" name="username" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Password*</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control"
                                                        placeholder="Create password" name="password" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Confirm Password*</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirm password" name="confirmpassword" />
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
                                                        <input type="radio" id="male" name="gender"
                                                            class="custom-control-input" />
                                                        <label class="custom-control-label" for="male">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline pb-0">
                                                        <input type="radio" id="female" name="gender"
                                                            class="custom-control-input" />
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

                                    </section> <br>
                                    <div class="container">
                                        <button name=" register" type="submit"
                                            class=" btn btn-primary btn-lg btn-block text-white"
                                            style="border-radius: 50px; ">SUBMIT</button>
                                    </div> <br>
                                </form>
                            </div>
                        </div> <br>
                        <div class="text-center pb-3">
                            <P>Already have an account?
                                <a href="login.php">Login</a>
                            </P>
                        </div>
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
    <script src="app/src/plugins/jquery-steps/jquery.steps.js"></script>
    <!-- <script src="app/vendors/scripts/steps-setting.js"></script> -->

</body>

</html>