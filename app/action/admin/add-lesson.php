<?php
    include('../../../conf/config.php');
    
    $lesson_name = ucwords(trim($_POST['lesson_name']));
    $lesson_desc = ucwords(trim($_POST['lesson_desc']));
    $date =  date('Y-m-d H:i:s');
    $query=mysqli_query($con,"INSERT INTO `lesson`(`lesson_name`, `lesson_desc`, `lesson_added`) 
                                            VALUES ('".$lesson_name."','".$lesson_desc."','".$date."')" );
    
    header("location: ../../modules");
?>