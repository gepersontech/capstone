<div class="page-header">
    <div  class="row">
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

<!-- QUESTION CARD-->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Question <?php echo $no=1; ?></h4>
    </div>
    <div class="pb-20">
        <table class="data-table table  ">
            <?php
                $result = mysqli_query($con, "SELECT examitem_id, question,exam_ch1,exam_ch2,exam_ch3,exam_ch4
                FROM `exam_items`;");
                $count = 1;
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['examitem_id'];
                ?>
            <thead >
                 <tr >
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
                            <td><a class="btn"><?php echo $row['exam_ch1']; ?></a></td>
                            <td><a class="btn"><?php echo $row['exam_ch2']; ?></a></td>
                            <td><a class="btn"><?php echo $row['exam_ch3']; ?></a></td>
                            <td><a class="btn"><?php echo $row['exam_ch4']; ?></a></td>
                            <!-- <td style="width: 400px;">
                                <a data-toggle="modal" data-target="#verify" href="" class=" btn btn-sm btn-primary">
                                    <span class="icon-copy ti-pencil-alt"></span> Take exam
                                </a> -->

                                <!-- <a href="index.php?page=exam-edit&& id=<?php echo $id; ?>" class=" btn btn-sm btn-primary">
                            <span class="icon-copy ti-pencil-alt"></span> Take exam
                        </a> -->

                                <!-- <a onclick="delete_course('<?php echo $id; ?>')" class=" btn btn-sm btn-danger text-white">
                            <span class="icon-copy ti-trash"></span>
                            Delete</a> -->
                            </td>

                        </tr>
                <?php
                        $count++;
                    }
                } else {
                }
                ?>

            </tbody>

        </table>
    </div>
</div>