<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $course=$_POST['course'];
        $query=mysqli_query($con,"UPDATE `course` SET `course_name`='".$course."' WHERE  `course_id`='".$id."'");
        $query=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','update-course'" );
        header("Location: ../../index.php?page=course-edit&& id=".$id);

    }
?>