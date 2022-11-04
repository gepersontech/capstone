<?php
    include('../../../conf/config.php');
    
    $course = ucwords(trim($_POST['course']));

    $query=mysqli_query($con,"INSERT INTO `course`(`course_name`) 
                                            VALUES ('".$course."')" );
    
    header("location: ../../course");
?>