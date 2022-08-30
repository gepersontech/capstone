<?php
    require_once "libraries/dbconfig.php";
    
    if(isset($_POST["submit"])){
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if(empty($email) || empty($password)){
            // notifier here....
        }else{
            // not empty....
            // checking to database....
            $sql = "SELECT * FROM 'account' WHERE 'username'=?";
            $statement = mysqli_stmt_init($dbCon);
            //Checking the statement syntax...
            if(!mysqli_stmt_prepare($statement,$sql)){
                // notifier here....
            }else{
                // Verifying the user.....
                mysqli_stmt_bind_param($statement, "s", $username);
                mysqli_stmt_execute($statement);
                mysqli_stmt_store_result($statement);
                $recordCount = mysqli_stmt_num_rows($statement);
                //checking the record whether its empty or not....
                if($recordCount > 0){
                    // follow up...
                }
            }
            

        }
    }
?>