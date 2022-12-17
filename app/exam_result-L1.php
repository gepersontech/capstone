<!-- SWEET ALERT SCRIPT -->
<script src="vendors/sweetalert/sweetalert.min.js"></script>
<script src="src/plugins/sweetalert2/jquery-3.6.1.min.js"></script>
<div class="page-header">
    <div class="row">
        <div class="col-md-6">
            <div class="title">
                <h3>📝 Your Lesson 1 Quiz Results</h3>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="student_result">Student result</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Quiz attempts
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- table  Start -->
<div class="pd-20 card-box mb-30">
    <!-- <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Basic Table</h4>
        </div>
    </div> -->
    <h6>List of how many attempts you made.</h6><br>
    <table class="table">
        <thead>
            <tr style="font-weight: bolder;">
                <th scope="col">No.</th>
                <th scope="col">Exam Attempt</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $studentID;
            $exam_aydi;
            if(isset($_SESSION['id'])){
                if(isset($_SESSION['exam_id'])){
                    $studentID = $_SESSION['id'];
                    $exam_aydi = $_SESSION['exam_id'];
                }
            }
            $number = 0;

            $viewAttempt = "SELECT * FROM exam_attempt WHERE student_id=$studentID AND exam_id=$exam_aydi;";
            $queryResult = mysqli_query($con, $viewAttempt);
            $rowCount1 = mysqli_num_rows($queryResult);
            if ($rowCount1 > 0) {
                $record1 = mysqli_fetch_assoc($queryResult);
                while ($record1) {
                    $number++;
                    $attempt = $record1['status'];
                    $_SESSION['quizAttempt'] = $attempt;
                    $dateAttempt = $record1['exattempt_date'];
            ?>
                    <form action="config/quiz-results.php" method="POST">
                        <input type="text" name="quizAttempt" id="num_attempt" value="<?php echo $attempt; ?>" aria-hidden hidden>
                        <tr>
                            <th scope="row"><?php echo $number; ?></th>
                            <td><?php echo $attempt; ?></td>
                            <td><?php echo $dateAttempt; ?></td>
                            <td>
                                <button class="btn btn-primary" type="submit" id="viewresult" name="submit">
                                    <span class="icon-copy ti-eye"></span> View Details
                                </button>
                                <!-- <a href="" class="btn btn-md btn-primary" data-whatever="" data-toggle="modal" data-target="#result-modal" style="padding: 8px;">
                                <span class="icon-copy ti-eye"></span> View Details
                            </a> -->
                            </td>
                    </form>
                    </tr>

            <?php
                    $record1 = mysqli_fetch_assoc($queryResult);
                }
            }
            ?>
        </tbody>
    </table>
</div>
<!--table  End -->

<!-- SHOW EXAM RESULT ..... -->
<?php
if (isset($_GET['result'])) {
?>
    <script>
        setTimeout(function() {
            $("#result-modal").modal('show');
        }, 1);
    </script>
<?php
}
?>

<!-- MODULE READ MODAL -->
<div class="modal fade bs-example-modal-lg" id="result-modal" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Detailed Result
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body" style="overflow: auto;height: 450px;">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="font-weight: bold;font-size: 15px;">Attempt: </th>
                                    <?php
                                    $attempt1;
                                    if (isset($_SESSION['qattempt'])) {
                                        $attempt1 = $_SESSION['qattempt'];
                                    } ?>
                                    <td><?php echo $attempt1; ?></td>
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
                                    $studtotalmistake;
                                    if (isset($_SESSION['totalMistakes'])) {
                                        $studtotalmistake = $_SESSION['totalMistakes'];
                                    } ?>
                                    <td><?php echo $studtotalmistake; ?></td>
                                </tr>
                                <tr style="color: #FF8C00;">
                                    <th style="font-weight: bold;font-size: 15px;">Total Hint used: </th>
                                    <?php
                                    $studtotalhint;
                                    if (isset($_SESSION['totalhint'])) {
                                        $studtotalhint = $_SESSION['totalhint'];
                                    } ?>
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
                                    $studtotalScore;
                                    if (isset($_SESSION['totalScore'])) {
                                        $studtotalScore = $_SESSION['totalScore'];
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
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>