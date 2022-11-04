<?php
    include('../../../conf/config.php');
    
    $module = ucwords(trim($_POST['module_name']));
    $module_desc = ucwords(trim($_POST['module_desc']));
$date =  date('Y-m-d H:i:s');
    $query=mysqli_query($con,"INSERT INTO `module`(`module_name`, `module_desc`,`module_added`) 
                                            VALUES ('".$module."','".$module_desc."','".$date."')" );
    
    header("location: ../../module");
?>