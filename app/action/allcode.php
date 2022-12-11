<?php
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../../conf/config.php');
if(isset($_POST['logout'])){
    $sql=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','logout')" );
    session_destroy();
    unset($_SESSION['loggedin']);
    header('Location: ../../index.php?session=logout');
    exit(0); 
}
    

?>