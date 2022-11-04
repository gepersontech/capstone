<?php
    include('../../../conf/config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $query=mysqli_query($con,"DELETE FROM module WHERE module_id='".$id."'");
        header("location: ../../module");
    }

?>