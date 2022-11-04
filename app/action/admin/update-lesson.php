<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $lesson=$_POST['lesson_name'];
        $module_desc=$_POST['lesson_desc'];
        $query=mysqli_query($con,"UPDATE `lesson` SET `lesson_name`='".$lesson."', `lesson_desc`='".$lesson_desc."' WHERE  `lesson_id`='".$id."'");
        header("Location: ../../module");

    }
?>