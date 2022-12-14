<?php require_once "../conf/config.php"; ?>
 <!-- BOOTSTRAP MODAL SCRIPTS -->
 <script src="vendors/jquery/jquery.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendors/jquery-easing/jquery.easing.min.js"></script>
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
                <th scope="col">Status</th>
                </th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $studentID;
            $exam_aydi;
            if (isset($_SESSION['stud_id'])) {
                if (isset($_SESSION['examAYDI'])) {
                    $studentID = $_SESSION['stud_id'];
                    $exam_aydi = $_SESSION['examAYDI'];
                }
            }
            $number = 0;

            $viewAttempt = "SELECT * FROM `exam_results` WHERE student_id = $studentID AND exam_id = $exam_aydi";
            $queryResult = mysqli_query($con, $viewAttempt);
            $rowCount1 = mysqli_num_rows($queryResult);
            if ($rowCount1 > 0) {
                $record1 = mysqli_fetch_assoc($queryResult);
                while ($record1) {
                    // storing data to the variables......
                    $number++;
                    $attempt = $record1['exam_attempt'];
                    $dateAttempt = $record1['result_date'];
                    $ispassed;
                    if ($record1['is_passed']) {
                        $ispassed = "Passed";
                    } else {
                        $ispassed = "Failed";
                    }
            ?>
            <!-- <form action="config/quiz-results.php" method="POST"> -->
            <input type="text" name="quizAttempt" id="num_attempt" value="<?php echo $attempt; ?>" aria-hidden hidden>
            <tr>
                <th scope="row"><?php echo $number; ?></th>
                <td><?php echo $attempt; ?></td>
                <td><?php echo date('F d Y, h:i:s A', strtotime($dateAttempt)); ?></td>
                <?php
                        if ($ispassed == "Passed") {
                        ?>
                <td style="color: #32CD32;"><i class="icon-copy bi bi-check-circle-fill"></i> <?php echo $ispassed; ?>
                </td>
                <?php
                        } else {
                        ?>
                <td style="color: #8B0000;"><i class="icon-copy bi bi-exclamation-circle-fill"></i>
                    <?php echo $ispassed; ?></td>
                <?php
                        }

                        echo "<td>";
                           echo  '<a type="button" class="btn btn-primary" data-attempt="'.$attempt.'" data-mistake="'.$record1['total_mistakes'].'" data-hint="'.$record1['total_hintUsed'].'" data-score="'.$record1['Student_Score'].'" data-toggle="modal" data-target="#resultmodal" style="padding: 8px;color: white;">
                                <span class="icon-copy ti-eye"></span> View Details
                            </a>';
                        echo "</td>";
                    echo "</tr>";
                    ?>

                <?php
                    $record1 = mysqli_fetch_assoc($queryResult);
                }
            }else{
                echo "no data";
            }
            ?>
        </tbody>
    </table>
</div>
<!--table  End -->

<!-- MODULE READ MODAL -->
<div class="modal fade" id="resultmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
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
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="font-weight: bold;font-size: 15px;">Attempt: </th>
                            <td><span id="attemptholder"></span></td>
                        </tr>
                        <tr>
                            <th style="font-weight: bold;font-size: 15px;">Total Question</th>
                            <?php
                            $totalquestion = $_SESSION['totalquestion'];
                            ?>
                            <td><?php echo $totalquestion; ?></td>
                        </tr>
                        <tr>
                            <th style="font-weight: bold;font-size: 15px;">Total incorrect of all question: </th>
                            <td><span id="mistakesholder"></span></td>
                        </tr>
                        <tr>
                            <th style="font-weight: bold;font-size: 15px;">Total Hint used: </th>
                            <td><span id="hintholder"></span></td>
                        </tr>
                        <tr>
                            <th style="font-weight: bold;font-size: 15px;">Passing Score: </th>
                            <?php $passingscore = $_SESSION['passing']; ?>
                            <td><?php echo $passingscore; ?></td>
                        </tr>
                        <tr>
                            <th style="font-weight: bold;font-size: 20px;">Your Score: </th>
                            <td style="font-size: 20px;font-weight: bolder;"><span id="scoreholder"></span></td>

                        </tr>
                        <tr>
                            <th style="font-weight: bold;font-size: 15px;">Over total score: </th>
                            <?php $etotalpoints = $_SESSION['totalpoint']; ?>
                            <td><?php echo $etotalpoints; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
$('#resultmodal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var attmpt = button.data('attempt')
    var mstake = button.data('mistake')
    var hnt = button.data('hint')
    var scre = button.data('score')

    var modal = $(this)
    modal.find('#attemptholder').html(attmpt)
    modal.find('#mistakesholder').html(mstake)
    modal.find('#hintholder').html(hnt)
    modal.find('#scoreholder').html(scre)
});
</script>


