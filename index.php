<?php require_once 'inc/header.php'; ?>


  <!-- Content Wrapper. Contains page content -->

  <?php 
        if (isset($_GET['page'])) {
          $page ='pages/' .$_GET['page'].'.php';

        }else{
          $page = 'pages/home.php';
        }
        if (file_exists($page)) {
          require_once $page; 
        }else{
          require_once 'pages/error_page.php';
        }
 ?>

 <?php require_once 'inc/footer.php'; ?>