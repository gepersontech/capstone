<?php
    include('../../../conf/config.php');
    
    $course = ucwords(trim($_POST['course']));
    $date =  date('Y-m-d H:i:s');
    $query=mysqli_query($con,"INSERT INTO `course`(`course_name`) 
                                            VALUES ('".$course."')" );
    
    header("location: ../../course");
?>