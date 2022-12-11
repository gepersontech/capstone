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
        <table class="data-table table stripe hover nowrap">
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
                $result = mysqli_query($con, "SELECT exam_id, totalQuestion, totalPoints, exam_title, course.course_name, exam_desc FROM `exam` LEFT JOIN course ON exam.course_id = course.course_id;");
                $count = 1;
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['exam_id'];
                        $totalitem = $row['totalQuestion'];
                        $totalpoints = $row['totalPoints'];

                        // SESSION VARIABLE FOR GLOBAL USE...........
                        $_SESSION['exam_id'] = $id;
                        $_SESSION['totalItems'] = $totalitem;
                        $_SESSION['examtotalPoints'] = $totalpoints;
                ?>
                <tr>
                    <td><?php echo $row['exam_title']; ?></td>
                    <td><?php echo $row['course_name']; ?></td>
                    <td><?php echo $row['exam_desc']; ?></td>
                    <td style="width: 400px;">
                        <a data-toggle="modal" data-target="#verify" href="" class=" btn btn-md btn-primary">
                            <span class="icon-copy ti-check"></span> Take Quiz
                        </a>
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
                <a class="btn btn-primary" href="index.php?page=exam_circle">Proceed</a>
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