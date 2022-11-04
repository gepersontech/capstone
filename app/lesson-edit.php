<?php
    $idx = $_GET['lesson_id'];
    $query = mysqli_query($con,"SELECT * FROM lesson WHERE lesson_id='$idx'");
    include('action/admin/edit-lesson.php');
?>