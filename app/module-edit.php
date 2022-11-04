<?php
    $idx = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM module WHERE module_id='$idx'");
    include('action/admin/edit-module.php');
?>