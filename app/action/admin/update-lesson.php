<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $lesson=$_POST['lesson_name'];
        $module_desc=$_POST['lesson_desc'];
        $query=mysqli_query($con,"UPDATE `lesson` SET `lesson_name`='".$lesson."', `lesson_desc`='".$lesson_desc."' WHERE  `lesson_id`='".$id."'");
        $sql=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','update-lesson')" );
        header("Location: ../../module");

    }
?>