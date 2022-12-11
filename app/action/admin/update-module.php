<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $module=$_POST['module_name'];
        $module_desc=$_POST['module_desc'];
        $query=mysqli_query($con,"UPDATE `module` SET `module_name`='".$module."', `module_desc`='".$module_desc."' WHERE  `module_id`='".$id."'");
        $sql=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','update-module')" );
        header("Location: ../../module");

    }
?>