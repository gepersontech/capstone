<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
    $query=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','delete-course" );
        $query=mysqli_query($con,"DELETE FROM course WHERE course_id='".$id."'");
        header("location: ../../course");
    }

?>