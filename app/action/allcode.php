<?php
    session_start();
if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['loggedin']);

    $_SESSION['message'] = "Logout Successfully";
    // $query=mysqli_query($conn,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','logout'" );
    header('Location: ../../index.php?session=logout');
    exit(0); 
}
    

?>