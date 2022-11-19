<?php
    include('../../../conf/config.php');
    
    $exam = trim($_POST['exam_title']);
    $course = $_POST['course'];
    $exam_desc = $_POST['desc'];
    $date =  date('Y-m-d H:i:s');
    $query=mysqli_query($con,"INSERT INTO `exam`(`exam_title`, course_id, exam_desc) 
                                            VALUES ('".$exam."', '".$course."','".$exam_desc."')" );
    
    header("location: ../../exam");
?>