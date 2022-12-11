<!-- ////////////////////////////////////////////////////
////////////////// BACK END PART ///////////////////
//////////////////////////////////////////////////// -->
<?php
require_once "../../conf/config.php";

if (isset($_POST['submit'])) {
    $inputanswer = $_POST['answer'];
    $anskey = $_POST['answerkey'];
    $questionId = $_POST['question_id'];
    $studentID = $_SESSION['id'];
    $examID = $_SESSION['exam_id'];
    $attemptMistake = 1;

    // VALIDATION OF ANSWER IF CORRECT.............................
    // THE ANSWER IS CORRECT....................
    if ($inputanswer == $anskey) {
        $totalMistakes = $_SESSION['over'];
        $numberofItem = $_SESSION['totalItems'];
        //......SCORING CRITERIA............
        if ($totalMistakes == 0) {
            $score = 10;
        } else if ($totalMistakes == 1) {
            $score = 9;
        } else if ($totalMistakes == 2) {
            $score = 8;
        } else if ($totalMistakes == 3) {
            $score = 7;
        } else if ($totalMistakes == 4) {
            $score = 6;
        } else {
            $score = 5;
        }
        $totalScore = $score;
        // query for inserting score to exam_correct table database.............
        $scorequery = "INSERT INTO `exam_correct`(`student_id`, `exam_id`, `examitem_id`, `points`) 
        VALUES ($studentID,$examID,$questionId,$totalScore)";
        $result = mysqli_query($con, $scorequery);

        $itemIncrement = $_SESSION['itemNum'];

        // reach the last question............
        if ($itemIncrement == $numberofItem) {
            $_SESSION['headertextlast'] = "Good job! Correct👏";
            $_SESSION['bodytextlast']   = "You've reach the last question. The answer of that question is " . $anskey . " and you've got " . $totalScore . " points";
            $_SESSION['statusIconlast'] = "success";
            header("location: ../index.php?page=exam_circle&question=$numberofItem");
            // Correct answer result........................
        } else {
            ++$itemIncrement;
            $_SESSION['nextitem'] = $itemIncrement;
            $_SESSION['headertextitem'] = "Good job!👏";
            $_SESSION['bodytext']   = "You got the correct answer. The answer of that question is " . $anskey . " and you've got " . $totalScore . " points";
            header("location: ../index.php?page=exam_circle");
        }

        // THE ANSWER IS WRONG..............
    } else {
        $sqlquery = "INSERT INTO `exam_mistakes`(`student_id`, `examitem_id`, `exam_id`, `mistakes`) 
        VALUES ($studentID,$questionId,$examID,$attemptMistake)";
        $result = mysqli_query($con, $sqlquery);

        // fetching mistakes from database........
        $sqlquery1 = "SELECT SUM(mistakes) AS totalmistakes FROM `exam_mistakes` WHERE student_id='" . $studentID . "' AND examitem_id='" . $questionId . "'";
        $queryResult = mysqli_query($con, $sqlquery1);
        $rowCount = mysqli_num_rows($queryResult);

        if ($rowCount > 0) {
            $record = mysqli_fetch_assoc($queryResult);
            // item number transfer value to.......
            $currentItem = $_SESSION['itemNum'];
            while ($record) {
                $attemptMistake = $record['totalmistakes'];
                if ($attemptMistake == 1) {
                    $_SESSION['headertext'] = "Wrong Answer!😔";
                    $_SESSION['bodytext']   = "You got the wrong answer.";
                    $_SESSION['statusIcon'] = "error";
                    header("location: ../index.php?page=exam_circle&attempt=1&question=$currentItem");
                } else if ($attemptMistake == 2) {
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "Keep analyzing the question,  You got this.";
                    $_SESSION['statusIcon'] = "error";
                    header("location: ../index.php?page=exam_circle&attempt=2&question=$currentItem");
                } else if ($attemptMistake == 3) {
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "GITS suggest that you can use the hint now";
                    $_SESSION['statusIcon'] = "warning";
                    header("location: ../index.php?page=exam_circle&attempt=3&question=$currentItem");
                } else if ($attemptMistake == 4) {
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "GITS suggest that you can use the hint now, or you can go to lesson and read again.";
                    $_SESSION['statusIcon'] = "warning";
                    header("location: ../index.php?page=exam_circle&attempt=4&question=$currentItem");
                } else {
                    $over = $_SESSION['over'];
                    ++$over;
                    $_SESSION['headertext'] = "Still Wrong Answer!😔";
                    $_SESSION['bodytext']   = "GITS suggest that you can use the hint now, or you can go to lesson and read again.";
                    $_SESSION['statusIcon'] = "error";
                    header("location: ../index.php?page=exam_circle&attempt=$over&question=$currentItem");
                }
                break;
            }
        } else {
            echo "no record";
        }
    }
}
?>
