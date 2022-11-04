<?php
    include('../../../conf/config.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $module=$_POST['module_name'];
        $module_desc=$_POST['module_desc'];
        $query=mysqli_query($con,"UPDATE `module` SET `module_name`='".$module."', `module_desc`='".$module_desc."' WHERE  `course_id`='".$id."'");
        header("Location: ../../index.php?page=module-edit&& id=".$id);

    }
?>