<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Student Result</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Student Result
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Student Result</h4>
        <!-- <button type="button" class="btn btn-primary float-right mb-10" data-toggle="modal" data-target="#addModal">
            <span class="icon-copy ti-plus"></span>
            Add Module
        </button> -->
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Title</th>
                    <th class="table-plus datatable-nosort">Description</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query($con,"SELECT * FROM `exam`");
                $count=1;
                $rowCount = mysqli_num_rows($result);
                if($rowCount > 0){
                    while($row = mysqli_fetch_assoc($result)){
                            $id=$row['exam_id'];
                                            ?>
                <tr>
                    <td style="width: 300px;"><?php echo $row['exam_title']; ?></td>
                    <td style="width: 300px;"><?php echo $row['exam_desc']; ?></td>
                    <td style="width: 300px;">
                        <a href="#" class=" btn btn-sm btn-primary" data-toggle="modal" data-target="#result-modal">
                            <span class="icon-copy ti-pencil-alt"></span> View Details
                        </a>


                    </td>

                </tr>
                <?php
                    $count++;
                }
                    
                }else{
                }
            ?>

            </tbody>

        </table>
    </div>
</div>
<!-- Simple Datatable End -->

<!-- Result modal -->

<div class="modal fade" id="result-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h3 class="mb-20">Details Results!</h3>
                <!-- <div class="mb-30 text-center">
                    <img src="vendors/images/success.png" />
                </div> -->

                <table class="table table-stripped" ">
                    <tbody>
                        <tr class=" text-left">
                    <td scope="row">Total Question</td>
                    <td scope="row">12</td>
                    </tr>
                    <tr class="text-left">
                        <td scope="row">Attempt</td>
                        <td scope="row">2</td>
                    </tr>
                    <tr class="text-left">
                        <td scope="row">Correct</td>
                        <td scope="row">12</td>
                    </tr>
                    <tr class="text-left">
                        <td scope="row">Wrong</td>
                        <td scope="row">12</td>
                    </tr>
                    <tr class="text-left">
                        <td scope="row">Percentage</td>
                        <td scope="row">1%</td>
                    </tr>
                    <tr class="text-left">
                        <td scope="row">Your Total Score</td>
                        <td scope="row">13</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    Done
                </button>
            </div>
        </div>
    </div>
</div>