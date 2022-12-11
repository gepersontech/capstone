<?php
    include('../../../conf/config.php');
    $count = 1;
    while($count <= 50){
        
        $role = 3;
        $email = "@gmail.com";
        $username = "";
        $password = "";
        $confirmpassword = "";
        $firstname = ucwords(trim(""));
        $lastname = ucwords(trim(""));
        $gender = "";
        $address = "";

        $password = password_hash($confirmpassword, PASSWORD_DEFAULT);

        $query=mysqli_query($con,"INSERT INTO `users`(`firstname`, `lastname`, `gender`,`address`,`email_add`, `username`, `password`, `role_id`, `added_at`) 
                                  VALUES ('".$firstname."','".$lastname."','".$gender."','".$address."','".$email."','".$username."','".$password."','".$role."','".$date."')" );
        
        $sql=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','add-user')" );

    }
    
?>