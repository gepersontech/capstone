<!-- SWEET ALERT SCRIPT -->
<script src="vendors/sweetalert/sweetalert.min.js"></script>
<script src="src/plugins/sweetalert2/jquery-3.6.1.min.js"></script>

<div class="page-header">
    <div class="row">
        <div class="col-md-6">
            <div class="title">
                <h3>📜 Your Quiz Result</h3>
                <span>Here are the overall result of your quiz.</span>
            </div>
        </div>
    </div>
</div>

<?php
// Initialize
$stud_id = $_SESSION['id'];
$exa_id = $_SESSION['exam_id'];
?>

<!-- basic table  Start -->
<div class="pd-20 card-box mb-30">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <table class="table">
                <tbody>
                    <tr>
                        <th style="font-weight: bold;font-size: 15px;">Number of Exam attempt: </th>
                        <?php
                        $attemptquery = "SELECT MAX(status)AS totalattempt FROM exam_attempt WHERE student_id = $stud_id AND exam_id = $exa_id";
                        $queryResult = mysqli_query($con, $attemptquery);
                        $rowCount = mysqli_num_rows($queryResult);
                        if ($rowCount > 0) {
                            $record = mysqli_fetch_assoc($queryResult);
                            while ($record) {
                                $exam_attempts = $record['totalattempt'];
                                break;
                            }
                        }
                        ?>
                        <td><?php echo $exam_attempts; ?></td>
                    </tr>
                    <tr>
                        <th style="font-weight: bold;font-size: 15px;">Total Question</th>
                        <?php
                        $totalquestion = $_SESSION['totalItems'];
                        ?>
                        <td><?php echo $totalquestion; ?></td>
                    </tr>
                    <tr style="color: #8B0000;">
                        <th style="font-weight: bold;font-size: 15px;">Total incorrect of all question: </th>
                        <?php
                        $totalmis_query = "SELECT COUNT(mistakes)AS totalmistakes FROM `exam_mistakes` 
                        WHERE student_id=$stud_id AND exam_id=$exa_id AND exam_attempt=$exam_attempts";
                        $queryResult = mysqli_query($con, $totalmis_query);
                        $rowCount = mysqli_num_rows($queryResult);
                        if ($rowCount > 0) {
                            $record = mysqli_fetch_assoc($queryResult);
                            while ($record) {
                                $studtotalmistake = $record['totalmistakes'];
                                break;
                            }
                        }
                        ?>
                        <td><?php echo $studtotalmistake; ?></td>
                    </tr>
                    <tr style="color: #FF8C00;">
                        <th style="font-weight: bold;font-size: 15px;">Total Hint used: </th>
                        <?php
                        $totalhint_query = "SELECT COUNT(hint_attempt)AS totalhintused FROM exam_correct
                        WHERE student_id=$stud_id AND hint_attempt=1 AND exam_id=$exa_id";

                        $totalhint_query = "SELECT SUM(hint_attempt)AS totalhintused FROM exam_correct
                        WHERE student_id=$stud_id AND exam_id=$exa_id AND exam_attempt=$exam_attempts";
                        $queryResult = mysqli_query($con, $totalhint_query);
                        $rowCount = mysqli_num_rows($queryResult);
                        if ($rowCount > 0) {
                            $record = mysqli_fetch_assoc($queryResult);
                            while ($record) {
                                $studtotalhint = $record['totalhintused'];
                                break;
                            }
                        }
                        ?>
                        <td><?php echo $studtotalhint; ?></td>
                    </tr>
                    <tr>
                        <th style="font-weight: bold;font-size: 15px;">Passing Score: </th>
                        <?php $passingscore = $_SESSION['passing']; ?>
                        <td><?php echo $passingscore; ?></td>
                    </tr>
                    <tr>
                        <th style="font-weight: bold;font-size: 20px;">Your Score: </th>
                        <?php
                        $yourscorequery = "SELECT SUM(points)AS stud_totalpoints, status FROM exam_attempt JOIN exam_correct ON exam_attempt.student_id=exam_correct.student_id 
                        WHERE exam_correct.student_id=$stud_id AND status=$exam_attempts AND exam_correct.exam_id=$exa_id";
                        
                        $yourscorequery = "SELECT SUM(points)AS stud_totalpoints FROM exam_correct
                        WHERE student_id=$stud_id AND exam_attempt=$exam_attempts AND exam_id=$exa_id";
                        $queryResult = mysqli_query($con, $yourscorequery);
                        $rowCount = mysqli_num_rows($queryResult);
                        if ($rowCount > 0) {
                            $record = mysqli_fetch_assoc($queryResult);
                            while ($record) {
                                $studtotalScore = $record['stud_totalpoints'];
                                break;
                            }
                        }
                        if ($studtotalScore >= $passingscore) {
                        ?>
                            <td style="font-size: 20px;font-weight: bolder;color: #32CD32;"><?php echo $studtotalScore; ?></td>
                        <?php
                        } else {
                        ?>
                            <td style="font-size: 20px;font-weight: bolder;color: #FF0000;"><?php echo $studtotalScore; ?></td>
                        <?php
                        }
                        ?>

                    </tr>
                    <tr>
                        <th style="font-weight: bold;font-size: 15px;">Over total score: </th>
                        <?php $etotalpoints = $_SESSION['examtotalPoints']; ?>
                        <td><?php echo $etotalpoints; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="content" style="height: 370px;">
                <?php
                $student_status;
                if ($studtotalScore >= $passingscore) {
                    $student_status = 1
                ?>

                    <div class="row" style="justify-content: center;">
                        <img style="width: 150px;margin-top: 30px;" src="../app/images/check-gif.gif" alt="clipart">
                    </div>
                    <div class="row" style="justify-content: center;">
                        <h2>Congratulations</h2>
                    </div>
                    <div class="row" style="justify-content: center;margin-top: 10px;">
                        <h5>You have passed the quiz</h5>
                    </div>

                    <!-- buttons -->
                    <div class="row" style="justify-content: center;margin-top: 30px;">
                        <!-- <div class="col ">
                            <a href="student-result" class="btn btn-success float-right">Student Result</a>
                        </div> -->
                        <div class="button-link">
                            <a href="home" class="btn btn-success">Dashboard</a>
                        </div>
                    </div>
                <?php
                } else {
                    $student_status = 0;
                ?>
                    <div class="row" style="justify-content: center;">
                        <img style="width: 150px;margin-top: 30px;" src="../app/images/failed-gif.gif" alt="clipart">
                    </div>
                    <div class="row" style="justify-content: center;">
                        <h2>Quiz Failed</h2>
                    </div>
                    <div class="row" style="justify-content: center;margin-top: 10px;">
                        <h5 style="text-align: center;">I'm sorry, you have failed the quiz</h5>
                    </div>

                    <!-- buttons -->
                    <div class="row" style="justify-content: center;margin-top: 30px;">
                        <div class="col ">
                            <a href="exam-user" class="btn btn-warning float-right">Try Again</a>
                        </div>
                        <div class="col" style="margin-left: -20px;">
                            <a href="home" class="btn btn-warning">Dashboard</a>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!-- basic table  End -->

    <!-- INPUT RESULT RECORD TO DATABASE -->
    <?php
    if (isset($_GET['saveResult'])) {
        $insertResultquery = "INSERT INTO `exam_results`(`student_id`, `exam_id`, `total_mistakes`, `total_hintUsed`, `Student_Score`, `is_passed`,`exam_attempt`) 
            VALUES ($stud_id,$exa_id,$studtotalmistake,$studtotalhint,$studtotalScore,$student_status,$exam_attempts)";
        $insertResult = mysqli_query($con, $insertResultquery);
    }
    ?>
    <?php
    if (isset($_GET['saveResult'])) {
    ?>
        <script>
            swal({
                title: "Well Done!👏",
                text: "See your quiz results now",
                icon: 'success',
                button: 'OK'
            }).then(function() {
                window.location = "excircle_result";
            });
        </script>
    <?php
    }
    ?>