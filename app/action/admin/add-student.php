<?php
    include('../../../conf/config.php');
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
              
        
        //$role = $_POST['options'];
        $role = 3;
        $email = trim($_POST['email']);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        

        $firstname = ucwords(trim($_POST['firstname']));
        $lastname = ucwords(trim($_POST['lastname']));
        $gender = $_POST['gender'];
        //$birthdate = $_POST['birtdate'];
        $address = $_POST['address'];
        
        $date = date('Y-m-d H:i:s');
        
        if(!isset($role)){
            header("location: ../../../register.php?error=Click the button student/teacher.");
        }
        if(!isset($email)){
            header("location: ../../../register.php?error=Invalid input email.");
        }
        if(!isset($username)){
            header("location: ../../../register.php?error=Invalid input username.");
        }
        if(!isset($password)){
            header("location: ../../../register.php?error=Password is empty.");
        }
        if(!isset($confirmpassword)){
            header("location: ../../../register.php?error=Confirm Password is empty.");
        }
        if($password != $confirmpassword){
                header("location: ../../../register.php?error=Password not match");
        }
        if(!isset($firstname)){
            header("location: ../../../register.php?error=First Name is empty.");
        }
        if(!isset($lastname)){
            header("location: ../../../register.php?error=Last Name is empty.");
        }
        if(!isset($gender)){
            header("location: ../../../register.php?error=Please select you gender.");
        }
        // if(empty($birthdate)){
        //     header("location: ../../../register.php?error=Invalid age.");
        // }
        if(!isset($address)){
            header("location: ../../../register.php?error=Invalid Address.");
        }
        $password = password_hash($confirmpassword, PASSWORD_DEFAULT);
            $query=mysqli_query($con,"INSERT INTO `users`(`firstname`, `lastname`, `gender`,`address`,`email_add`, `username`, `password`, `role_id`, `added_at`) 
                                  VALUES ('".$firstname."','".$lastname."','".$gender."','".$address."','".$email."','".$username."','".$password."','".$role."','".$date."')" );
        
        $query=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','add-user'" );

        header("location: ../../../login");
    }
    
?>