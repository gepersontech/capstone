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
            <form action="config/quiz-results.php" method="POST">
            <?php
            $studentID = $_SESSION['id'];
            $exam_aydi = $_SESSION['exam_id'];

            $number=0;

            $viewAttempt = "SELECT * FROM exam_attempt WHERE student_id=$studentID AND exam_id=$exam_aydi;";
            $queryResult = mysqli_query($con, $viewAttempt);
            $rowCount = mysqli_num_rows($queryResult);
            if ($rowCount > 0) {
                $record = mysqli_fetch_assoc($queryResult);
                while ($record) {
                    $number++;
                    $attempt = $record['status'];
                    $dateAttempt = $record['exattempt_date'];
            ?>
                    <tr>
                        <th scope="row"><?php echo $number; ?></th>
                        <td><?php echo $attempt; ?></td>
                        <td><?php echo $dateAttempt; ?></td>
                        <td>
                            <button class="btn btn-primary" type="submit" id="viewresult" name="viewResult">
                            <span class="icon-copy ti-eye"></span> View Details
                            </button>
                            <!-- <a href="" class="btn btn-md btn-primary" data-whatever=""
                             data-toggle="modal" data-target="#result-modal" style="padding: 8px;">
                                <span class="icon-copy ti-eye"></span> View Details
                            </a> -->
                </form>
                        </td>
                    </tr>

            <?php
                    break;
                }
            }
            ?>
        </tbody>
    </table>
</div>
<!--table  End -->
<!-- Result modal -->

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
                <input type="text" id="attempt-num" name="id">
            </div>
        </div>
    </div>
</div>

