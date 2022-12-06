<?php require_once "../conf/config.php"; ?>

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h3>Circle Post-test</h3>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="exam-user">Exams</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Post test
                    </li> -->
                </ol>
            </nav>
        </div>
    </div>
</div>

<?php
$result = mysqli_query($con, "SELECT examitem_id, question,exam_ch1,exam_ch2,exam_ch3,exam_ch4,answerkey
    FROM `exam_items`;");
$count = 1;
$correctanswers = 0;
$wronganswers = 0;
$rowCount = mysqli_num_rows($result);
if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['examitem_id'];
?>

        <!-- QUESTION CARD-->
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Question <?php echo $count; ?></h4>
            </div>
            <div class="pb-20">
                <table class="data-table table  ">
                    <thead>
                        <tr>
                            <th style="vertical-align: middle;" colspan="3" class="table-plus datatable-nosort">
                                <?php echo $row['question']; ?>
                            </th>
                            <th class="table-plus datatable-nosort">
                                <a href="" class=" btn btn-sm btn-warning">
                                    <span class="icon-copy ti-light-bulb"></span> Hint
                                </a>
                                <a href="" class=" btn btn-sm btn-light">
                                    <span class="icon-copy ti-file"></span> Read
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <form action="config/answerverifier.php" method="POST">
                                <input type="text" id="anskey" name="answerkey" value="<?php echo $row['answerkey']; ?>" hidden>
                                <td>
                                    <button style="border: none; background-color: white;" type="submit" name="submit">
                                        <input type="radio" id="ch1" name="answer" value="<?php echo $row['exam_ch1']; ?>">
                                        <label style="vertical-align: middle;" for="ch1"><?php echo $row['exam_ch1']; ?></label>
                                    </button>
                                </td>
                                <td>
                                    <button style="border: none; background-color: white;" type="submit" name="submit"> 
                                        <input type="radio" id="ch2" name="answer" value="<?php echo $row['exam_ch2']; ?>">
                                        <label style="vertical-align: middle;" for="ch2"><?php echo $row['exam_ch2']; ?></label>
                                    </button>
                                </td>
                                <td>
                                    <button style="border: none; background-color: white;" type="submit" name="submit"> 
                                        <input type="radio" id="ch3" name="answer" value="<?php echo $row['exam_ch3']; ?>">
                                        <label style="vertical-align: middle;" for="ch3"><?php echo $row['exam_ch3']; ?></label>
                                    </button>
                                </td>
                                <td>
                                    <button style="border: none; background-color: white;" type="submit" name="submit"> 
                                        <input type="radio" id="ch4" name="answer" value="<?php echo $row['exam_ch4']; ?>">
                                        <label style="vertical-align: middle;" for="ch4"><?php echo $row['exam_ch4']; ?></label>
                                    </button>
                                </td>
                        </tr>
                        </form>
                    </tbody>

                </table>
            </div>
        </div>
<?php
        $count++;
    }
} else {
}
?>

<script src="vendors/sweetalert/sweetalert.min.js"></script>
<script src="src/plugins/sweetalert2/jquery-3.6.1.min.js"></script>

<?php
    if(isset($_SESSION['headertext'])){
        if(isset($_SESSION['bodytext'])){
            if(isset($_SESSION['statusIcon'])){
?>

<script>
    swal({
  title: "<?php echo $_SESSION['headertext']?>",
  text: "<?php echo $_SESSION['bodytext']?>",
  icon: "<?php echo $_SESSION['statusIcon']?>",
  button: "OK",
});
</script>
<?php
            }
        }
    }
    unset($_SESSION['headertext']);
?>

<!-- for sweet alert........... -->