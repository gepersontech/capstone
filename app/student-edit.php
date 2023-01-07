<?php
    if(isset($_GET['id'])){
        $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM users WHERE user_id='$idx'");
    include('action/admin/edit-student.php');
    }
    
    if(isset($_GET['lesson_id'])){
        $idz = $_GET['lesson_id'];
    $query = mysqli_query($con,"SELECT * FROM lesson WHERE lesson_id='$idz'");
    include('action/admin/edit-lesson.php');
    }
    
?>