<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $age=$_POST['age'];
        $course=$_POST['course'];
        $address=$_POST['address'];
        $email_add=$_POST['email_add'];
        $query=mysqli_query($con,"UPDATE `users` SET 
        `firstname`='".$firstname."',
        `lastname`='".$lastname."', 
        `username`='".$username."' 
        `age`='".$age."',
        `course`='".$course."', 
        `address`='".$address."' 
        `email_add  `='".$email_add."' 
        WHERE  `user_id`='".$id."'");
        $sql=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','update-module')" );
        header("Location: ../../student");

    }
?>