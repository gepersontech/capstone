<?php
if (isset($_GET['l'])) {
    if ($_GET['l'] == 1) {
       
        $sql=mysqli_query($con,"INSERT INTO `lesson_view`(`user_id`, `lesson_id`, `isView`) VALUES ('".$_SESSION["id"]."',1,1)" );
        $query=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','View lesson 1')" );
        include('lesson_1.php');

    }
    if ($_GET['l'] == 2) {
        $sql=mysqli_query($con,"INSERT INTO `lesson_view`(`user_id`, `lesson_id`, `isView`) VALUES ('".$_SESSION["id"]."',2,1)" );
        $query=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','View lesson 2')" );
        include('lesson_2.php');
    }
    if ($_GET['l'] == 3) {
        $sql=mysqli_query($con,"INSERT INTO `lesson_view`(`user_id`, `lesson_id`, `isView`) VALUES ('".$_SESSION["id"]."',3,1)" );
        $query=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','View lesson 3')" );
        include('lesson_3.php');
    }
    if ($_GET['l'] == 4) {
        $query=mysqli_query($con,"INSERT INTO `logs`(`user_id`, `log_name`) VALUES ('".$_SESSION["id"]."','View lesson 4')" );
        $sql=mysqli_query($con,"INSERT INTO `lesson_view`(`user_id`, `lesson_id`, `isView`) VALUES ('".$_SESSION["id"]."',4,1)" );

        include('lesson_4.php');
    }
}
?>