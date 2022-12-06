<!-- Answer verifierss... -->
<?php

require_once "../../conf/config.php";

    if(isset($_POST['submit'])){
        $inputanswer = $_POST['answer'];
        $anskey = $_POST['answerkey'];

        if($inputanswer == $anskey){
            $_SESSION['headertext'] = "Good job!👏";
            $_SESSION['bodytext'] = "You got the correct answer.";
            $_SESSION['statusIcon'] = "success";
            header("location: ../examcontent");
        }else{
            $_SESSION['headertext'] = "Wrong Answer!😔";
            $_SESSION['bodytext'] = "Analyse the question more, You got this.";
            $_SESSION['statusIcon'] = "error";
            header("location: ../examcontent");
        }
    }
?>