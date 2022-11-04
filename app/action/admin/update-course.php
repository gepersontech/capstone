<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $course=$_POST['course'];
        $query=mysqli_query($con,"UPDATE `course` SET `course_name`='".$course."' WHERE  `course_id`='".$id."'");
        header("Location: ../../index.php?page=course-edit&& id=".$id);

    }
?>