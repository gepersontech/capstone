<?php
    include('../../../conf/config.php');
    
    $module = ucwords(trim($_POST['module_name']));
    $module_desc = ucwords(trim($_POST['module_desc']));

    $query=mysqli_query($con,"INSERT INTO `module`(`module_name`, `module_desc`) 
                                            VALUES ('".$module."','".$module_desc."')" );
    
    header("location: ../../module");
?>