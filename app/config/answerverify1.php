<!-- ////////////////////////////////////////////////////
////////////////// BACK END PART ///////////////////
//////////////////////////////////////////////////// -->
<?php
require_once "../../conf/config.php";

if (isset($_POST['submit'])) {
    $inputanswer = $_POST['answer'];
    $anskey = $_POST['answerkey'];
    $hintUseValue = $_POST['hintusage'];
    $questionId = $_POST['question_id'];
    $studentID = $_SESSION['id'];
    $examAttempt = $_SESSION['exam-attempt'];
    $examID = $_SESSION['exam_id'];
    $attemptMistake = 1;

    $currentItem = $_SESSION['itemNum'];

    // empty input.........
    if ($inputanswer == "") {
        $_SESSION['headertext_empty'] = "No answer recieved";
        $_SESSION['bodytext_empty']   = "Make sure to point the text to submit your answer.";
        $_SESSION['statusIcon_empty'] = "warning";
        header("location: ../exam_circle1.php?question=$currentItem");
    // all good........
    } else {
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
            $scorequery = "INSERT INTO `exam_correct`(`student_id`, `exam_id`, `examitem_id`, `points`,`hint_attempt`,`exam_attempt`) 
        VALUES ($studentID,$examID,$questionId,$totalScore,$hintUseValue,$examAttempt)";
            $result = mysqli_query($con, $scorequery);

            $itemIncrement = $_SESSION['itemNum'];
            $itemstay = $_SESSION['itemNum'];
            $_SESSION['stay'] = $itemstay;
            // reach the last question............
            if ($itemIncrement == $numberofItem) {
                $_SESSION['headertextlast'] = "Good job! Correct👏";
                $_SESSION['bodytextlast']   = "You've reach the last question. The answer of that question is " . $anskey . " and you've got " . $totalScore . " points";
                $_SESSION['statusIconlast'] = "success";
                header("location: ../exam_circle1.php?question=$numberofItem");
                // Correct answer result........................
            } else {
                ++$itemIncrement;
                $_SESSION['nextitem'] = $itemIncrement;
                $_SESSION['headertextitem'] = "Good job!👏";
                $_SESSION['bodytextitem']   = "You got the correct answer. The answer of that question is " . $anskey . " and you've got " . $totalScore . " points";
                $_SESSION['ItemStatus'] = 'success';
                header("location: ../exam_circle1.php?checkpoint=1&question=$itemstay");
            }

            // THE ANSWER IS WRONG..............
        } else {
            $sqlquery = "INSERT INTO `exam_mistakes`(`student_id`, `examitem_id`, `exam_id`,`answer_input`, `mistakes`,`exam_attempt`) 
        VALUES ($studentID,$questionId,$examID,'" . $inputanswer . "',$attemptMistake,$examAttempt)";
            $insertResult = mysqli_query($con, $sqlquery);

            // fetching mistakes from database........
            $sqlquery1 = "SELECT SUM(mistakes) AS totalmistakes FROM `exam_mistakes` 
        WHERE student_id='" . $studentID . "' AND examitem_id='" . $questionId . "' AND exam_attempt='" . $examAttempt . "'";
            $queryResult = mysqli_query($con, $sqlquery1);
            $rowCount = mysqli_num_rows($queryResult);

            if ($rowCount > 0) {
                $record = mysqli_fetch_assoc($queryResult);
                // item number transfer value to.......     
                while ($record) {
                    $attemptMistake = $record['totalmistakes'];
                    if ($attemptMistake == 1) {
                        $_SESSION['headertext'] = "Wrong Answer!😔";
                        $_SESSION['bodytext']   = "You got the wrong answer.";
                        $_SESSION['statusIcon'] = "error";
                        header("location: ../exam_circle1.php?attempt=1&question=$currentItem");
                    } else if ($attemptMistake == 2) {
                        $_SESSION['headertext'] = "Still Wrong Answer!😔";
                        $_SESSION['bodytext']   = "Keep analyzing the question,  You got this.";
                        $_SESSION['statusIcon'] = "error";
                        header("location: ../exam_circle1.php?attempt=2&question=$currentItem");
                    } else if ($attemptMistake == 3) {
                        $_SESSION['headertext'] = "Still Wrong Answer!😔";
                        $_SESSION['bodytext']   = "GITS suggest that you can use the hint now";
                        $_SESSION['statusIcon'] = "warning";
                        header("location: ../exam_circle1.php?attempt=3&question=$currentItem");
                    } else if ($attemptMistake == 4) {
                        $_SESSION['headertext'] = "Still Wrong Answer!😔";
                        $_SESSION['bodytext']   = "GITS suggest that you can use the hint now, or you can go to lesson and read again.";
                        $_SESSION['statusIcon'] = "warning";
                        header("location: ../exam_circle1.php?attempt=4&question=$currentItem&usehint=$hintUseValue");
                    } else {
                        $over = $_SESSION['over'];
                        ++$over;
                        $_SESSION['headertext'] = "Still Wrong Answer!😔";
                        $_SESSION['bodytext']   = "GITS suggest that you can use the hint now, or you can go to lesson and read again.";
                        $_SESSION['statusIcon'] = "error";
                        header("location: ../exam_circle1.php?attempt=$over&question=$currentItem&usehint=$hintUseValue");
                    }
                    break;
                }
            } else {
                echo "no record";
            }
        }
    }
}
?>