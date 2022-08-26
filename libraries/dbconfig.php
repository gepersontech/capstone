<?php
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "geometry";
    session_start();

    $dbCon = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   if($dbCon){
       $GLOBALS["dbaseStatusValue"] = 1;
    }else{
        $GLOBALS["dbaseStatusValue"] = 0;
    }
?>