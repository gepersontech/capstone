<!-- SWEET ALERT SCRIPT -->
<script src="vendors/sweetalert/sweetalert.min.js"></script>
<script src="src/plugins/sweetalert2/jquery-3.6.1.min.js"></script>

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
        <table class="data-table table table-responsive stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Title</th>
                    <th class="table-plus datatable-nosort">Description</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `exam`");
                $count = 1;
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['exam_id'];
                        $_SESSION['examAYDI'] = $id;
                        $stud_id = $_SESSION['id'];

                        $attemptquery = "SELECT SUM(status)AS totalattempt FROM exam_attempt WHERE student_id = $stud_id AND exam_id = $id";
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
                <tr>
                    <td style="width: 300px;"><?php echo $row['exam_title']; ?></td>
                    <td style="width: 300px;"><?php echo $row['exam_desc']; ?></td>
                    <td style="width: 300px;">
                        <?php
                                if (isset($exam_attempts)) {
                                    if ($exam_attempts > 0) {
                                ?>
                        <a href="#" class=" btn btn-md btn-primary" data-toggle="modal" data-target="#result-modal">
                            <span class="icon-copy ti-eye"></span> View Details
                        </a>
                        <?php
                                    }
                                } else {
                                    ?>
                        <button onclick="notifier()" class="btn btn-warning">
                            <span class="icon-copy ti-eye"></span> View Details
                        </button>
                        <?php
                                }
                                ?>
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
<!-- Simple Datatable End -->

<!-- SWEET ALERT FOR button  -->
<script>
function notifier() {
    swal({
        title: "Oopsss! 🫣",
        text: "Looks like you haven't take quiz yet",
        icon: 'warning',
    });
}
</script>

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
                <?php include "../app/excircle_result-modal.php" ?>
            </div>
        </div>
    </div>
</div>