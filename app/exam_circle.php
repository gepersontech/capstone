<?php require_once "../conf/config.php"; ?>
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h3>Circle Post-test</h3>
                <span>Analyze the question carefuly. Be inspired and Keep Learning 😁</span>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                </ol>
            </nav>
        </div>
    </div>
</div>

<?php

    $mistakes;
    if(isset($_GET['attempt'])){
        $mistakes = $_GET['attempt'];
    }else{
        $mistakes = 0;
    }

    $start=1;
    $query = "SELECT * FROM exam_items WHERE examitem_id = '". $start ."'";
    $queryResult = mysqli_query($con, $query);
    $rowCount = mysqli_num_rows($queryResult);

    if($rowCount > 0){
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
                <h4 class="text-blue h4">Question 1 of 5</h4>
            </div>
            <div class="col-6">
                <div class="float-right"><span class="heading">Rating</span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p>4.1 average based on 254 difficulties.</p>
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
                    <th class="table-plus datatable-nosort" style="vertical-align: middle;width:200px">
                        <a href="" class=" btn btn-sm btn-warning">
                            <span class="icon-copy ti-light-bulb"></span> Hint
                        </a>
                        <a href="" class=" btn btn-sm btn-primary">
                            <span class="icon-copy ti-file"></span> Read
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <form action="config/answerverify.php" method="POST">
                        <input type="text" id="questionID" name="question_id" value="<?php echo $question_id; ?>"
                            hidden>
                        <input type="text" id="anskey" name="answerkey" value="<?php echo $answerkey; ?>" hidden>
                        <!-- multiple choice a b c d....... -->
                        <td>
                            <button style="border: none; background-color: white;" type="submit" name="submit">
                                <input type="radio" id="ch1" name="answer" value="<?php 
                                    if($mistakes == 1){
                                        echo $record['exam_ch3'];
                                    }else if($mistakes == 2){
                                        echo $record['exam_ch2'];
                                    }else if($mistakes == 3){
                                        echo $record['exam_ch1'];
                                    }else{
                                        echo $record['exam_ch1'];
                                    }?>">
                                <label style="vertical-align: middle;" for="ch1">
                                    a.
                                    <?php 
                                    if($mistakes == 1){
                                        echo $record['exam_ch3'];
                                    }else if($mistakes == 2){
                                        echo $record['exam_ch2'];
                                    }else if($mistakes == 3){
                                        echo $record['exam_ch1'];
                                    }else{
                                        echo $record['exam_ch1'];
                                    }?>
                                </label>
                            </button>
                        </td>
                        <td>
                            <button style="border: none; background-color: white;" type="submit" name="submit">
                                <input type="radio" id="ch2" name="answer" value="<?php 
                                    if($mistakes == 1){
                                        echo $record['exam_ch1'];
                                    }else if($mistakes == 2){
                                        echo $record['exam_ch3'];
                                    }else if($mistakes == 3){
                                        echo $record['exam_ch2'];
                                    }else{
                                        echo $record['exam_ch2'];
                                    }?>">
                                <label style="vertical-align: middle;" for="ch2">
                                    b.
                                    <?php 
                                    if($mistakes == 1){
                                        echo $record['exam_ch1'];
                                    }else if($mistakes == 2){
                                        echo $record['exam_ch3'];
                                    }else if($mistakes == 3){
                                        echo $record['exam_ch2'];
                                    }else{
                                        echo $record['exam_ch2'];
                                    }?>
                                </label>
                            </button>
                        </td>
                        <td>
                            <button style="border: none; background-color: white;" type="submit" name="submit">
                                <input type="radio" id="ch3" name="answer" value="<?php 
                                    if($mistakes == 1){
                                        echo $record['exam_ch2'];
                                    }else if($mistakes == 2){
                                        echo $record['exam_ch1'];
                                    }else if($mistakes == 3){
                                        echo $record['exam_ch3'];
                                    }else{
                                        echo $record['exam_ch3'];
                                    }?>">
                                <label style="vertical-align: middle;" for="ch3">
                                    c.
                                    <?php 
                                    if($mistakes == 1){
                                        echo $record['exam_ch2'];
                                    }else if($mistakes == 2){
                                        echo $record['exam_ch1'];
                                    }else if($mistakes == 3){
                                        echo $record['exam_ch3'];
                                    }else{
                                        echo $record['exam_ch3'];
                                    }?>
                                </label>
                            </button>
                        </td>
                        <td>
                            <button style="border: none; background-color: white;" type="submit" name="submit">
                                <input type="radio" id="ch4" name="answer" value="<?php echo $record['exam_ch4']; ?>">
                                <label style="vertical-align: middle;" for="ch4">
                                    d. <?php echo $record['exam_ch4']; ?>
                                </label>
                            </button>
                        </td>
                        <!-- ..................... -->
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
    break;}
}else{

}
?>


<!-- IMPORTANT SCRIPT -->
<script src="vendors/sweetalert/sweetalert.min.js"></script>
<script src="src/plugins/sweetalert2/jquery-3.6.1.min.js"></script>
<!-- for sweet alert........... -->
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