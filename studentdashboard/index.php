<?php 
require_once "studheader.php";
require_once "studMenu.php"; 
?>

<!-- Content Wrapper. Contains page content -->

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'] . '.php';
} else {
    $page = 'studDashboard.php';
}
if (file_exists($page)) {
    require_once $page;
} else {
    require_once 'resources/404.html';
}
?>

<?php 
require_once "studfooter.php"; 
require_once "message.php";
?>