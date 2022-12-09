<!-- ////////////////////////////////////////////////////
////////////////// BACK END PART ///////////////////
//////////////////////////////////////////////////// -->
<?php
require_once "../../conf/config.php";

if (isset($_POST['submit'])) {
    $inputanswer = $_POST['answer'];
    $anskey = $_POST['answerkey'];
    $questionId = $_POST['question_id'];

    $attempCorrect = 0;
    $question_num = 1;
    $attemptMistake = 1;

    // VALIDATION OF ANSWER IF CORRECT.............................
    // THE ANSWER IS CORRECT....................
    if ($inputanswer == $anskey) {

        $question_num++;
        $attempCorrect++;

        $_SESSION['headertext'] = "Good job!👏";
        $_SESSION['bodytext']   = "You got the correct answer. The answer of that question is '" . $attemptMistake . "'";
        $_SESSION['statusIcon'] = "success";

        header("location: ../index.php?page=exam_circle");
    
    // THE ANSWER IS WRONG..............
    } else {
        $studentID = $_SESSION['id'];
        $examID = $_SESSION['exam_id'];

        $sqlquery = "INSERT INTO `exam_mistakes`(`student_id`, `examitem_id`, `exam_id`, `mistakes`) 
        VALUES ($studentID,$questionId,$examID,$attemptMistake)";
        $result = mysqli_query($con, $sqlquery);

        // fetching mistakes from database........
        $sqlquery1 = "SELECT SUM(mistakes) AS totalmistakes FROM `exam_mistakes` WHERE student_id='" . $studentID . "' AND examitem_id='" . $questionId . "'";
        $queryResult = mysqli_query($con, $sqlquery1);
        $rowCount = mysqli_num_rows($queryResult);

        if ($rowCount > 0) {
            $record = mysqli_fetch_assoc($queryResult);
            while ($record) {
                $attemptMistake = $record['totalmistakes'];
                if ($attemptMistake == 1) {
                    $_SESSION['headertext'] = "Wrong Answer!😔";
                    $_SESSION['bodytext']   = "Analyse the question more";
                    $_SESSION['statusIcon'] = "error";
                    header("location: ../index.php?page=exam_circle&attempt=1");
                } else if ($attemptMistake == 2) {
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "Keep analyzing the question,  You got this.";
                    $_SESSION['statusIcon'] = "error";
                    header("location: ../index.php?page=exam_circle&attempt=2");
                } else if ($attemptMistake == 3) {
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "GITS suggest that you can use the hint now";
                    $_SESSION['statusIcon'] = "warning";
                    header("location: ../index.php?page=exam_circle&attempt=3");
                } else if ($attemptMistake == 4) {
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "GITS suggest that you can use the hint now, or you can go to lesson and read again.";
                    $_SESSION['statusIcon'] = "warning";
                    header("location: ../index.php?page=exam_circle&attempt=4");
                } else {
                    $over = $_SESSION['over'];
                    ++$over;
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "GITS suggest that you can use the hint now, or you can go to lesson and read again.";
                    $_SESSION['statusIcon'] = "error";
                    header("location: ../index.php?page=exam_circle&attempt=$over");
                }
                break;
            }
        } else {
            echo "no record";
        }
    }
}
?>