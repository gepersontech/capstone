
    <!-- MATH JAX SCRIPT -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<?php require_once "../conf/config.php"; ?>
<div class="page-header">
    <div class="row">
        <div class="col-md-6">
            <div class="title">
                <h3>Circle Post-test</h3>
                <span>Analyze the question carefuly. Be inspired and Keep Learning 😁</span>
                <!-- <p>
                \(F_{1}\)
                </p> -->
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                </ol>
            </nav>
        </div>
        <div class="col-md-6">
            <a href="" class="btn btn-light float-right" title="Guide" data-toggle="modal" data-target="#examGuide" style="padding: 4px;margin: 4px;margin-right: 10px;">
                <i style="font-size: 26px;vertical-align: middle;" class="icon-copy dw dw-question-1"></i>
            </a>
        </div>
    </div>
</div>

<style>
    .swal-text {
        text-align: center;
    }
</style>

<?php
// GETTING THE TOTAL ATTEMPTS OR MISTAKES FROM BACK END............
$mistakes;
if (isset($_GET['attempt'])) {
    $mistakes = $_GET['attempt'];
} else {
    $mistakes = 0;
}
$_SESSION['over'] = $mistakes;
// GETTING THE NEXT Q ITEM .................
$item_num;
if (isset($_GET['question'])) {
    $item_num = $_GET['question'];
} else {
    $item_num = 1;
}
$_SESSION['itemNum'] = $item_num;
//........................................
$query = "SELECT * FROM exam_items WHERE examitem_id = '" . $item_num . "'";
$queryResult = mysqli_query($con, $query);
$rowCount = mysqli_num_rows($queryResult);

$questionEnd = $_SESSION['totalItems'];

if ($rowCount > 0) {
    $record = mysqli_fetch_assoc($queryResult);
    while ($record) {
        $question = $record['question'];
        $question_id = $record['examitem_id'];
        $answerkey = $record['answerkey'];
?>
        <!-- Question card -->
        <div class="card-box mb-30">
            <div class="pd-20">
                <div class="row">
                    <div class="col-6">
                        <h4 class="text-blue h4">Question <?php echo $item_num; ?> of <?php echo $questionEnd; ?></h4>
                    </div>
                    <div class="col-6">
                        <div class="float-right "><span class="heading" title="View Rating">Rating</span>

                            <i class="icon-copy fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="icon-copy fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="icon-copy fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="icon-copy fa fa-star-half-empty text-warning" aria-hidden="true"></i>
                            <i class="icon-copy fa fa-star-o" aria-hidden="true"></i>
                            <br>
                            <span class="text-muted">4.1 average based on 254 difficulties.</span>
                        </div>
                    </div>
                </div>


            </div>
            <div class="pb-20">
                <table class="data-table table">
                    <thead>
                        <tr>
                            <!-- question here....... -->
                            <th style="vertical-align: middle;width: 300px;" colspan="3" class="table-plus datatable-nosort">
                                <?php echo $question; ?>
                            </th>
                            <!-- .............. -->
                            <!-- HINT BUTTON AND READ -->
                            <th class="table-plus datatable-nosort" style="vertical-align: middle;width:200px">
                                <?php
                                if ($mistakes >= 3) {
                                ?>
                                    <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#hintConfirm">
                                        <span class="icon-copy ti-light-bulb"></span> Hint
                                    </a>
                                    <a style="color: white;" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#readDocument">
                                        <span class="icon-copy ti-file"></span> Read
                                    </a>
                                <?php
                                } else {
                                ?>
                                    <a onclick="hintValidation()" class="btn btn-sm btn-warning">
                                        <span class="icon-copy ti-light-bulb"></span> Hint
                                    </a>
                                    <a onclick="docValidation()" style="color: white;" class="btn btn-sm btn-primary">
                                        <span class="icon-copy ti-file"></span> Read
                                    </a>
                                <?php
                                }
                                ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <form action="config/answerverify.php" method="POST">
                                <input type="text" id="questionID" name="question_id" value="<?php echo $question_id; ?>" hidden>
                                <input type="text" id="anskey" name="answerkey" value="<?php echo $answerkey; ?>" hidden>
                                <!-- multiple choice a b c d....... -->
                                <td style="width: 150px;">
                                    <button style="border: none; background-color: white;" type="submit" name="submit">
                                        <input type="radio" id="ch1" name="answer" value="<?php
                                                                                            if ($mistakes == 1) {
                                                                                                echo $record['exam_ch3'];
                                                                                            } else if ($mistakes == 2) {
                                                                                                echo $record['exam_ch2'];
                                                                                            } else if ($mistakes == 3) {
                                                                                                echo $record['exam_ch1'];
                                                                                            } else {
                                                                                                echo $record['exam_ch1'];
                                                                                            } ?>">
                                        <label style="vertical-align: middle;font-size: 15px;" for="ch1">
                                            a.
                                            <?php
                                            if ($mistakes == 1) {
                                                echo $record['exam_ch3'];
                                            } else if ($mistakes == 2) {
                                                echo $record['exam_ch2'];
                                            } else if ($mistakes == 3) {
                                                echo $record['exam_ch1'];
                                            } else {
                                                echo $record['exam_ch1'];
                                            } ?>
                                        </label>
                                    </button>
                                </td>
                                <td style="width: 150px;">
                                    <button style="border: none; background-color: white;" type="submit" name="submit">
                                        <input type="radio" id="ch2" name="answer" value="<?php
                                                                                            if ($mistakes == 1) {
                                                                                                echo $record['exam_ch1'];
                                                                                            } else if ($mistakes == 2) {
                                                                                                echo $record['exam_ch3'];
                                                                                            } else if ($mistakes == 3) {
                                                                                                echo $record['exam_ch2'];
                                                                                            } else {
                                                                                                echo $record['exam_ch2'];
                                                                                            } ?>">
                                        <label style="vertical-align: middle;font-size: 15px;" for="ch2">
                                            b.
                                            <?php
                                            if ($mistakes == 1) {
                                                echo $record['exam_ch1'];
                                            } else if ($mistakes == 2) {
                                                echo $record['exam_ch3'];
                                            } else if ($mistakes == 3) {
                                                echo $record['exam_ch2'];
                                            } else {
                                                echo $record['exam_ch2'];
                                            } ?>
                                        </label>
                                    </button>
                                </td>
                                <td style="width: 150px;">
                                    <button style="border: none; background-color: white;" type="submit" name="submit">
                                        <input type="radio" id="ch3" name="answer" value="<?php
                                                                                            if ($mistakes == 1) {
                                                                                                echo $record['exam_ch2'];
                                                                                            } else if ($mistakes == 2) {
                                                                                                echo $record['exam_ch1'];
                                                                                            } else if ($mistakes == 3) {
                                                                                                echo $record['exam_ch3'];
                                                                                            } else {
                                                                                                echo $record['exam_ch3'];
                                                                                            } ?>">
                                        <label style="vertical-align: middle; font-size: 15px;" for="ch3">
                                            c.
                                            <?php
                                            if ($mistakes == 1) {
                                                echo $record['exam_ch2'];
                                            } else if ($mistakes == 2) {
                                                echo $record['exam_ch1'];
                                            } else if ($mistakes == 3) {
                                                echo $record['exam_ch3'];
                                            } else {
                                                echo $record['exam_ch3'];
                                            } ?>
                                        </label>
                                    </button>
                                </td>
                                <td style="width: 150px;">
                                    <button style="border: none; background-color: white;" type="submit" name="submit">
                                        <input type="radio" id="ch4" name="answer" value="<?php echo $record['exam_ch4']; ?>">
                                        <label style="vertical-align: middle;font-size: 15px;" for="ch4">
                                            d. <?php echo $record['exam_ch4']; ?>
                                        </label>
                                    </button>
                                </td>

                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
<?php
        break;
    }
} else {
}
?>

<!-- Notification HINT modal confirmation -->
<div class="modal fade" id="hintConfirm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">
                    Do you want to use the hint now?
                </h4>
                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                    <div class="col-6">
                        <button style="color: red;" type="button" class="btn btn-light border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                        </button>
                        NO
                    </div>
                    <div class="col-6">
                        <button style="color: #00FA9A;" type="button" class="btn btn-light border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                            <i class="fa fa-check"></i>
                        </button>
                        YES
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- READ DOCUMENT MODAL -->
<div class="modal fade" id="readDocument" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">
                    Do you want to read related documents?
                </h4>
                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                    <div class="col-6">
                        <button style="color: red;" type="button" class="btn btn-light border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                        </button>
                        NO
                    </div>
                    <div class="col-6">
                        <button style="color: #00FA9A;" type="button" class="btn btn-light border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                            <i class="fa fa-check"></i>
                        </button>
                        YES
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- GUIDE MODAL -->
<div class="modal fade" id="examGuide" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                <h4 style="margin-left: 30px;" class="padding-top-10 mb-10 weight-600">
                👋 Exam guide & Score criteria
                </h4>
                <p style="margin-left: 30px;margin-right: 30px;">
                1. Student must provide correct answers to proceed to the next question and 
                watch out for the <b>pop-up window</b> for some fun guide if having difficulty. 
                <br>
                2. Student cannot go back to the previous question anymore.
                <br><br>
                <b>Scoring Criteria:</b>
                <br>
                This is true to all question of this exam.
                <br>
                0 mistakes = 10 points <br>
                1 mistakes = 9 points <br>
                2 mistakes = 8 points <br>
                3 mistakes = 7 points <br>
                4 mistakes = 6 points <br>
                5 and higher mistakes = 5 points
                <h5 class="padding-top-0 mb-10 weight-600 text-center">
                Goodluck and have fun in Learning!💯
                </h5>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- IMPORTANT SCRIPT -->
<!-- SWEET ALERT SCRIPT -->
<script src="vendors/sweetalert/sweetalert.min.js"></script>
<!-- <script src="src/plugins/sweetalert2/sweetalert2.all.js"></script> -->
<script src="src/plugins/sweetalert2/jquery-3.6.1.min.js"></script>

<!-- for sweet alert........... -->
<?php
if (isset($_SESSION['headertext'])) {
    if (isset($_SESSION['bodytext'])) {
        if (isset($_SESSION['statusIcon'])) {
?>

            <script>
                swal({
                    title: "<?php echo $_SESSION['headertext'] ?>",
                    text: "<?php echo $_SESSION['bodytext'] ?>",
                    icon: '<?php echo $_SESSION['statusIcon'] ?>',
                });
            </script>
<?php
        }
    }
}
unset($_SESSION['headertext']);
?>

<!-- SWEET ALERT FOR HINT VALIDATION -->
<script>
    function hintValidation() {
        swal({
            title: "Hint Validation",
            text: "Sorry, You can't use hint now, please analyze the question more. You can do it ✍️",
            icon: 'warning',
        });
    }
</script>

<!-- DOCUMENT VALIDATION -->
<script>
    function docValidation() {
        swal({
            title: "Cannot Proceed",
            text: "Sorry, You can't read documents now, analyze the question more. You can do it ✍️",
            icon: 'warning',
        });
    }
</script>

<!-- SWEET ALERT FOR LAST QUESTION -->
<?php
if (isset($_SESSION['headertextlast'])) {
    if (isset($_SESSION['bodytextlast'])) {
        if (isset($_SESSION['statusIconlast'])) {
?>

            <script>
                swal({
                    title: "<?php echo $_SESSION['headertextlast'] ?>",
                    text: "<?php echo $_SESSION['bodytextlast'] ?>",
                    icon: '<?php echo $_SESSION['statusIconlast'] ?>',
                    button: 'See Result'
                }).then(function(){
                    window.location = "excircle_result";
                });
            </script>
<?php
        }
    }
}
unset($_SESSION['headertextlast']);
?>