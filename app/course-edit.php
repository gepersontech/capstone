<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM course WHERE course_id='$idx'");
    include('action/admin/edit-course.php');
?>