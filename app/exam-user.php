<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Required Exams</h4>
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
        <h4 class="text-blue h4">AVAILABLE EXAMS</h4>
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
                $result = mysqli_query($con, "SELECT exam_id, exam_title, course.course_name, exam_desc FROM `exam` LEFT JOIN course ON exam.course_id = course.course_id;");
                $count = 1;
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['exam_id'];
                ?>
                        <tr>
                            <td><?php echo $row['exam_title']; ?></td>
                            <td><?php echo $row['course_name']; ?></td>
                            <td><?php echo $row['exam_desc']; ?></td>
                            <td style="width: 400px;">
                                <a data-toggle="modal" data-target="#verify" href="" class=" btn btn-sm btn-primary">
                                    <span class="icon-copy ti-pencil-alt"></span> Take exam
                                </a>

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
<!-- Simple Datatable End -->
<!-- Add Modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="action/admin/add-exam.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Exam</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- form -->
                    <div class="form-group row">
                        <label for="exam" class="col-sm-3 col-form-label">Exam Title <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exam" name="exam_title" placeholder="Exam Title" required>
                        </div>
                    </div>
                    <!-- form -->

                    <div class="form-group row">
                        <label for="position" class="col-sm-3 col-form-label">Course <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="position" name="course" required>
                                <option value="" selected>Choose Course...</option>
                                <?php
                                $result = mysqli_query($con, "SELECT * FROM course;");
                                $rowCount = mysqli_num_rows($result);
                                if ($rowCount > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?php echo $row['course_id']; ?>">
                                            <?php echo $row['course_name']; ?>
                                        </option>

                                <?php   }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Desc" class="col-sm-3 col-form-label">Exam Description <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="desc" name="desc" placeholder="Exam Description" required>
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-right">
                    <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
                    <button type="submit" name="add-exam" class="btn btn-primary "> Add </button>
                </div>

            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- VERIFY TO TAKE EXAMS....-->
<div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Are you ready?</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Proceed to the exam now</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="examcontent">Proceed</a>
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