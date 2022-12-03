<?php
    include('../../../conf/config.php');
    
    $role = $_POST['options'];
    $email = trim($_POST['email']);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $password = password_hash($confirmpassword, PASSWORD_DEFAULT);

    $firstname = ucwords(trim($_POST['firstname']));
    $lastname = ucwords(trim($_POST['lastname']));
    $gender = $_POST['gender'];
    $birthdate = $_POST['birtdate'];
    $address = $_POST['address'];
    
    $date = date('Y-m-d H:i:s');
    
    $query=mysqli_query($con,"INSERT INTO `users`(`firstname`, `lastname`, `birthdate`, `age`,`gender`,`address`,`email_add`, `username`, `password`, `role_id`, `added_at`) 
                                          VALUES ('".$firstname."','".$middlename."','".$lastname."','".$contact."','".$email."','".$position."','".$office."','".$username."','".$password."','".$role."','".$date."')" );
    
    header("location: ../../../login");
?>