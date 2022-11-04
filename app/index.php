<?php
session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header('Location: ../index.php?session=expired');
    }
    include('../conf/config.php');
	include('header.php');
	include('pre-loader.php');
	include('navbar.php');
?>


<div class="left-side-bar">
    <?php include('sidebar.php') ?>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">

        <?php 
                if(isset($_GET['page'])){
                   
					$page =''.$_GET['page'].'.php';
				   
                    
                }else{
                    $page = 'dashboard.php';
                }

                if (file_exists($page)) {
					if(isset($_GET['page']) == '400' || isset($_GET['page']) == '403' || isset($_GET['page']) == '500' || isset($_GET['page']) == '503' ){
					$page =''.$_GET['page'].'.php';
					require_once $page; 
				   }else{
						require_once $page; 
						//include('footer.php');
				   }
                    
                }else{
                    require_once '404.php';
                }
                
            ?>


    </div>
</div>


<!-- js -->
<?php include('script.php') ?>

</html>