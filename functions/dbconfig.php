<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "geometry";
    session_start();

    $dbCon = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   if($dbCon){
       $GLOBALS["dbaseStatusValue"] = 1;
    }else{
        $GLOBALS["dbaseStatusValue"] = 0;
    }
?>