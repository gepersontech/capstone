<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','delete-module'" );
        $query=mysqli_query($con,"DELETE FROM module WHERE module_id='".$id."'");
        header("location: ../../module");
    }

?>