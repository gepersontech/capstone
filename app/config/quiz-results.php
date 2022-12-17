
<?php
require_once "../../conf/config.php";

$student = $_SESSION['id'];
$exam = $_SESSION['exam_id'];

if (isset($_POST['submit'])) {
    $attempt = $_POST['quizAttempt'];

    //Sessionss.......
    $_SESSION['qattempt'] = $number_attempt;

    // Total mistakes of all questions..........
    $totalmis_query = "SELECT COUNT(mistakes)AS totalmistakes FROM `exam_mistakes` 
    WHERE student_id=$student AND exam_id=$exam AND exam_attempt=$attempt";
    $queryResult = mysqli_query($con, $totalmis_query);
    $rowCount = mysqli_num_rows($queryResult);
    if ($rowCount > 0) {
        $record = mysqli_fetch_assoc($queryResult);
        while ($record) {
            $studtotalmistake = $record['totalmistakes'];
            //Session.......
            $_SESSION['totalMistakes'] = $studtotalmistake;

            $record = mysqli_fetch_assoc($queryResult);
        }
    }

    // Total hint Used...........
    $totalhint_query = "SELECT SUM(hint_attempt)AS totalhintused FROM exam_correct
    WHERE student_id=$student AND exam_id=$exam AND exam_attempt=$attempt";
    $queryResult = mysqli_query($con, $totalhint_query);
    $rowCount = mysqli_num_rows($queryResult);
    if ($rowCount > 0) {
        $record = mysqli_fetch_assoc($queryResult);
        while ($record) {
            $studtotalhint = $record['totalhintused'];
            // Session.......
            $_SESSION['totalhint'] = $studtotalhint;

            $record = mysqli_fetch_assoc($queryResult);
        }
    }
    // Total score of student...........
    $yourscorequery = "SELECT SUM(points)AS stud_totalpoints FROM exam_correct
    WHERE student_id=$student AND exam_attempt=$attempt AND exam_id=$exam";
    $queryResult = mysqli_query($con, $yourscorequery);
    $rowCount = mysqli_num_rows($queryResult);
    if ($rowCount > 0) {
        $record = mysqli_fetch_assoc($queryResult);
        while ($record) {
            $studtotalScore = $record['stud_totalpoints'];
            // Session....
            $_SESSION['totalScore'] = $studtotalScore;
            $record = mysqli_fetch_assoc($queryResult);
        }
    }

    header("location: ../exam_result-L1.php?result=$attempt");
}
?>