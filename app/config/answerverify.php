<!-- ////////////////////////////////////////////////////
////////////////// BACK END PART ///////////////////
//////////////////////////////////////////////////// -->
<?php
require_once "../../conf/config.php";

// student id;
$student_id;
// exam id;
$exam_id;
// exam question id;
$question_id;
// records ;


if(isset($_POST['submit'])){
        $inputanswer = $_POST['answer'];
        $anskey = $_POST['answerkey'];
        $questionId = $_POST['question_id'];
        
        $attempCorrect = 0;
        $question_num = 1;
        $attemptMistake = 1;
    if($inputanswer == $anskey){

        $question_num++;
        $attempCorrect++;

        $_SESSION['headertext'] = "Good job!👏";
        $_SESSION['bodytext']   = "You got the correct answer.";
        $_SESSION['statusIcon'] = "success";
        
        header("location: ../index.php?page=exam_circle");

    }else{
        
        $sqlquery = "INSERT INTO `exam_mistakes`(`student_id`, `examitem_id`, `exam_id`, `mistakes`) 
        VALUES (1,$questionId,1,$attemptMistake)";
        $result = mysqli_query($con, $sqlquery);

        // fetching mistakes from database........
        $sqlquery1 = "SELECT SUM(mistakes) AS totalmistakes FROM `exam_mistakes` WHERE student_id=1 AND examitem_id='".$questionId."'";
        $queryResult = mysqli_query($con, $sqlquery1);
        $rowCount = mysqli_num_rows($queryResult);

        if($rowCount > 0){
            $record = mysqli_fetch_assoc($queryResult);
            while ($record) {
                $attemptMistake = $record['totalmistakes'];
                if($attemptMistake == 1){
                    $_SESSION['headertext'] = "Wrong Answer!😔";
                    $_SESSION['bodytext']   = "Analyse the question more";
                    $_SESSION['statusIcon'] = "error";
                    header("location: ../index.php?page=exam_circle&attempt=1");
                }else if($attemptMistake == 2){
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "Keep analyzing the question,  You got this.";
                    $_SESSION['statusIcon'] = "error";
                    header("location: ../index.php?page=exam_circle&attempt=2");
                }else if($attemptMistake == 3){
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "GITS suggest that you can use the hint now";
                    $_SESSION['statusIcon'] = "warning";
                    header("location: ../index.php?page=exam_circle&attempt=3");
                }else if($attemptMistake == 4){
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "GITS suggest that you can use the hint now, or you can go to lesson and read again.";
                    $_SESSION['statusIcon'] = "warning";
                    header("location: ../index.php?page=exam_circle&attempt=4");
                }else{
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "GITS suggest that you can use the hint now, or you can go to lesson and read again.";
                    $_SESSION['statusIcon'] = "error";
                    header("location: ../index.php?page=exam_circle");
                }
            break;}
        }else{
            echo "no record";
        }
        
        
    }
}
?>