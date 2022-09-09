<?php 
require_once "adminHeader.php";
require_once "adminMenu.php"; 
?>

<!-- Content Wrapper. Contains page content -->

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'] . '.php';
} else {
    $page = 'adminDashboard.php';
}
if (file_exists($page)) {
    require_once $page;
} else {
    require_once 'resources/404.html';
}
?>

<?php 
require_once "adminFooter.php"; 
require_once "message.php";
?>