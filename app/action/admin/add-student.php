<?php
    include('../../../conf/config.php');
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
              
        
        $role = isset($_POST['options']);
        $email = trim($_POST['email']);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        

        $firstname = ucwords(trim($_POST['firstname']));
        $lastname = ucwords(trim($_POST['lastname']));
        $gender = $_POST['gender'];
        $birthdate = $_POST['birtdate'];
        $address = $_POST['address'];
        
        $date = date('Y-m-d H:i:s');
        
        if($role != null){
            header("location: ../../../register.php?error=Click the button student/teacher.");
        }else{
            if($role == 1){
                $role = 3;
            }
        }
        if(isset($email)){
            header("location: ../../../register.php?error=Invalid input.");
        }
        if(isset($username)){
            header("location: ../../../register.php?error=Invalid input.");
        }
        if(isset($password) || isset($confirmpassword)){
            header("location: ../../../register.php?error=Invalid input.");
        }else{
            if($password != $confirmpassword){
                header("location: ../../../register.php?error=Password not match");
            }
        }
        if(isset($firstname)){
            header("location: ../../../register.php?error=Invalid input.");
        }
        if(isset($lastname)){
            header("location: ../../../register.php?error=Invalid input.");
        }
        if(isset($gender)){
            header("location: ../../../register.php?error=Please select you gender.");
        }
        if(isset($birthdate)){
            header("location: ../../../register.php?error=Invalid input.");
        }
        if(isset($address)){
            header("location: ../../../register.php?error=Invalid input.");
        }else{
            $password = password_hash($confirmpassword, PASSWORD_DEFAULT);
            $query=mysqli_query($con,"INSERT INTO `users`(`firstname`, `lastname`, `birthdate`, `age`,`gender`,`address`,`email_add`, `username`, `password`, `role_id`, `added_at`) 
                                  VALUES ('".$firstname."','".$lastname."','".$birthdate."',''".$age.",'".$gender."','".$address."','".$email."','".$username."','".$password."','".$role."','".$date."')" );
            header("location: ../../../login");    
        }
        
        header("location: ../../../register");
    }
    
?>