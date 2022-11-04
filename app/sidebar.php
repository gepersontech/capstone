<?php include('brand-logo.php'); ?>

<div class="menu-block customscroll">

    <?php 
        if($_SESSION['role_id'] == '1'){
            include('menu/superadmin.php');
        }elseif($_SESSION['role_id'] == '4'){
            include('menu/admin.php');
        }elseif($_SESSION['role_id'] == '3'){
            include('menu/user.php');
        } 
    ?>
</div>