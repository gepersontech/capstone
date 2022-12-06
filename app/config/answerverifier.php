<!-- Answer verifierss... -->
<?php

require_once "../../conf/config.php";

    if(isset($_POST['submit'])){
            $student_id;
            $course_id;
            $exam_id;
            $q = 1;
            $inputanswer    = $_POST['answer'];
            $anskey         = $_POST['answerkey'];
            
        if($inputanswer == $anskey){
            $_SESSION['headertext'] = "Good job!👏";
            $_SESSION['bodytext']   = "You got the correct answer.";
            $_SESSION['statusIcon'] = "success";

            $sql = "INSERT INTO `exam_answers`(`student_id`, `course_id`, `exam_id`, `question_id`, `num_wrong`) 
            VALUES (1,1,1,1,1)";

            $result = mysqli_query($con, $sql);
            $q++;
            header("location: ../index.php?page=examcontent&q=$q");
        }else{
            $_SESSION['headertext'] = "Wrong Answer!😔";
            $_SESSION['bodytext']   = "Analyse the question more, You got this.";
            $_SESSION['statusIcon'] = "error";


            header("location: ../examcontent");
        }
    }
?>