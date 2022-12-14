<?php
require_once "config.php";
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = $pending ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    // Check if username is empty
        if(isset($_POST["username"])){
            header("location: ../login.php?error=Please enter username.");
            
        } else{
            $username = trim($_POST["username"]);
        }
        
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            header("location: ../login.php?error=Please enter password.");
            
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            // Prepare a select statement
            $sql = "SELECT user_id, profile_pic, username, password, firstname, lastname, email_add, role_id FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($con,$sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = $username;
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $user_id,$profile_pic, $username, $hashed_password, $firstname, $lastname, $email, $role_id);
                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($password, $hashed_password)){
                                
                                // $_SESSION["status"] = $status;
                            
                                
                                    // Password is correct, so start a new session
                                    //session_start();
                                    //Store data in session variables
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["id"] = $user_id;
                                    $_SESSION["session_picture"] = $profile_pic;
                                    $_SESSION["username"] = $username; 
                                    $_SESSION["firstname"] = $firstname; 
                                    $_SESSION["lastname"] = $lastname; 
                                    $_SESSION["role_id"] = $role_id; 
                                    $_SESSION["email"] = $email; 

                                    $query=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','login')" );

                                    
                                    header("location: ../app/");
                            } else{
                                header("location: ../login.php?error=Invalid username or not password.");
                                // Password is not valid, display a generic error message
                            }
                        }
                    } else{
                        header("location: ../login.php?error=Username not exist.");
                        // Username doesn't exist, display a generic error message
                    }
                } else{
                    header("location: ../login.php?error=Connection Error.");
                    //echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
    
    
    // Close connection
    mysqli_close($con);
}
?>