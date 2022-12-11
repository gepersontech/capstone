<?php
    session_start();
if(isset($_POST['logout'])){
    $sql=mysqli_query($conn,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','logout')" );
    session_destroy();
    unset($_SESSION['loggedin']);
    header('Location: ../../index.php?session=logout');
    exit(0); 
}
    

?>