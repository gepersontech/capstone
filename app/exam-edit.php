<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT exam_id, exam_title, course.course_name, exam_desc FROM `exam`  LEFT JOIN course ON exam.course_id = course.course_id WHERE exam_id='$idx'       ");
    include('action/admin/edit-exam.php');
?>