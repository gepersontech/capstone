<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Manage Student</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Student
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">MANAGE STUDENTS</h4>
        <button type="button" class="btn btn-primary float-right mb-10" data-toggle="modal" data-target="#addModal">
            <span class="icon-copy ti-plus"></span>
            Add Student
        </button>
    </div>
    <div class="pb-20">
        <table class="data-table table table-responsive stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Student Name</th>
                    <th class="table-plus datatable-nosort">Gender</th>
                    <th class="table-plus datatable-nosort">Age</th>
                    <th class="table-plus datatable-nosort">Email</th>
                    <th class="table-plus datatable-nosort">Course</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($con,"SELECT user_id, firstname, lastname, gender, age, email_add, course.course_name AS 'course' FROM `users`  LEFT JOIN course ON users.course_id = course.course_id WHERE role_id = 3;");
                $count=1;
                $rowCount = mysqli_num_rows($result);
                if($rowCount > 0){
                    while($row = mysqli_fetch_assoc($result)){
                            $id=$row['user_id'];
                                            ?>
                <tr>
                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['email_add']; ?></td>
                    <td><?php echo $row['course']; ?></td>
                    <td style="width: 400px;">
                        <a href="index.php?page=student-edit&& id=<?php echo $id; ?>" class=" btn btn-sm btn-primary">
                            <span class="icon-copy ti-pencil-alt"></span> Update
                        </a>

                        <a onclick="delete_student('<?php echo $id; ?>')" class=" btn btn-sm btn-danger text-white">
                            <span class="icon-copy ti-trash"></span>
                            Delete</a>
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

<!-- <div class="row">
    <div class="col-12">
        <div class="card">
            <input type="button" value="">
        </div>
    </div>
</div> -->

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
                            <input type="text" class="form-control" id="exam" name="exam_title" placeholder="Exam Title"
                                required>
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
                                    $result = mysqli_query($con,"SELECT * FROM course;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
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
                            <input type="text" class="form-control" id="desc" name="desc" placeholder="Exam Description"
                                required>
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
<script>
function delete_student(data_id) {
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
            window.location = ("action/admin/delete-student.php?id=" + data_id);
        }

    })


}
</script>