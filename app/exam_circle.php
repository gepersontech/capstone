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

<style>
.swal-text {
    text-align: center;
}
</style>

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
                    <span class="fa fa-star"></span> <br>
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
                        <td style="width: 150px;">
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
                        <td style="width: 150px;">
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
                        <td style="width: 150px;">
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
                        <td style="width: 150px;">
                            <button style="border: none; background-color: white;" type="submit" name="submit">
                                <input type="radio" id="ch4" name="answer" value="<?php echo $record['exam_ch4']; ?>">
                                <label style="vertical-align: middle;font-size: 15px;" for="ch4">
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
<!-- Notification HINT modal -->
<div class="modal fade" id="hintNotif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color:#ED1C24 ;" class="modal-title" id="exampleModalLabel">The product
                    <?php echo "<b>".$_SESSION["titleText"]."</b>" ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="modal-body-title" id="modal-body-title">Product stock is low, restock now.</p>
                <form action="productlist.php" method="POST">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Later</button>
                <button type="submit" name="submit" class="btn btn-primary">Go to products</button>
            </div>
        </div>
    </div>
</div>
<!-- Notification HINT modal -->


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