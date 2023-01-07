<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Take Quiz</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Exam
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">CURRENT QUIZ</h4>
        <!-- <button type="button" class="btn btn-primary float-right mb-10" data-toggle="modal" data-target="#addModal">
            <span class="icon-copy ti-plus"></span>
            Add Exam
        </button> -->
    </div>
    <div class="pb-20">
        <table class="data-table table table-responsive stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Exam Title</th>
                    <th class="table-plus datatable-nosort">Course</th>
                    <th class="table-plus datatable-nosort">Description</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($con, "SELECT exam_id, totalQuestion, passing_score , totalPoints, exam_title, course.course_name, exam_desc FROM `exam` LEFT JOIN course ON exam.course_id = course.course_id;");
                $count = 1;
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['exam_id'];
                        $totalitem = $row['totalQuestion'];
                        $totalpoints = $row['totalPoints'];
                        $passingscore = $row['passing_score'];

                        // SESSION VARIABLE FOR GLOBAL USE...........
                        $_SESSION['exam_id'] = $id;
                        $_SESSION['totalItems'] = $totalitem;
                        $_SESSION['examtotalPoints'] = $totalpoints;
                        $_SESSION['passing'] = $passingscore;
                ?>
                <tr>
                    <td><?php echo $row['exam_title']; ?></td>
                    <td><?php echo $row['course_name']; ?></td>
                    <td><?php echo $row['exam_desc']; ?></td>
                    <td style="width: 400px;">
                        <?php
                                $userid = $_SESSION['id'];
                                $lessonview;
                                $isViewquery = "SELECT isView FROM lesson_view WHERE user_id=$userid and lesson_id=1;";
                                $queryResult = mysqli_query($con, $isViewquery);
                                $rowCount = mysqli_num_rows($queryResult);
                                if ($rowCount > 0) {
                                    $record = mysqli_fetch_assoc($queryResult);
                                    while ($record) {
                                        $lessonview = $record['isView'];
                                        break;
                                    }
                                }
                                ?>
                        <?php
                                if (isset($lessonview)) {
                                    if ($lessonview != 0) {
                                ?>
                        <a data-toggle="modal" data-target="#verify" href="" class=" btn btn-md btn-primary">
                            <span class="icon-copy ti-check"></span> Take Quiz
                        </a>
                        <?php
                                    }
                                } else {
                                    ?>
                        <a onclick="notValid()" style="color: white;" class=" btn btn-md btn-warning">
                            <i class="icon-copy fa fa-lock" aria-hidden="true"></i> Take Quiz
                        </a>
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

<?php
$StudentExamAttempt;
if (isset($_SESSION['totalexamAttempt'])) {
    $StudentExamAttempt = $_SESSION['totalexamAttempt'];
} else {
    $stu_id = $_SESSION['id'];
    $getAttempt = "SELECT MAX(status)AS getAttempt FROM exam_attempt
        WHERE student_id=$stu_id AND exam_id=$id";
    $queryResult = mysqli_query($con, $getAttempt);
    $rowCount = mysqli_num_rows($queryResult);
    if ($rowCount > 0) {
        $record = mysqli_fetch_assoc($queryResult);
        while ($record) {
            if ($record['getAttempt'] == 0) {
                $StudentExamAttempt = 1;
            } else {
                $StudentExamAttempt = ++$record['getAttempt'];
            }
            break;
        }
    }
}
?>

<!-- VERIFY TO TAKE EXAMS....-->
<div style="margin-top: 150px;" class="modal fade" id="verify" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Are you ready?</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Proceed to the Quiz Now</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="exam_circle1.php?status=<?php echo $StudentExamAttempt; ?>">Proceed</a>
            </div>
        </div>
    </div>
</div>
<script>
function delete_course(data_id) {
    // alert('ok');
    //window.location = ("action/admin/delete-employee.php?id=" + data_id);
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = ("action/admin/delete-course.php?id=" + data_id);
        }

    })
}
</script>

<!-- SWEET ALERT SCRIPT -->
<script src="vendors/sweetalert/sweetalert.min.js"></script>
<script src="src/plugins/sweetalert2/jquery-3.6.1.min.js"></script>

<script>
function notValid() {
    swal({
        title: "Oopsss! 🫣",
        text: "Looks like you haven't Read the Lessons yet",
        icon: 'warning',
    });
}
</script>