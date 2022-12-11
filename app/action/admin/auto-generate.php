<?php
    include('../../../conf/config.php');
    $count = 1;

    

    while($count <= 50){
        
        $role = 3;
        $email = "student".$count."@gmail.com";
        $username = "student".$count."@gmail.com";
        echo "Username: ".$username."<br>";
        $password = rand(100000, 999999);
        $confirmpassword = "";
        $firstname = ucwords(trim("student".$count));
        $lastname = ucwords(trim("student".$count));
        $gender = "";
        $address = "";

        
        echo "Password: ".$password."<br>";
        echo "_______________________________________ <br> <br>";
        $password = password_hash($password, PASSWORD_DEFAULT);
        //$query=mysqli_query($con,"INSERT INTO `users`(`firstname`, `lastname`,`address`,`email_add`, `username`, `password`, `role_id`) 
        //                          VALUES ('".$firstname."','".$lastname."','".$address."','".$email."','".$username."','".$password."','".$role."')" );
        
        //$sql=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','add-user')" );
        $count++;
        
    }
    exit();
    
?>