<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Ranking</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Ranking
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Student Ranking</h4>

    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Student Name</th>
                    <th class="table-plus datatable-nosort">Exam/Quiz Title</th>
                    <th class="datatable-nosort">Attempts</th>
                    <th class="datatable-nosort">Hints used</th>
                    <th class="datatable-nosort">Score</th>
                    <th class="datatable-nosort">Remarks</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query($con,"SELECT * FROM `module`");
                $count=1;
                $rowCount = mysqli_num_rows($result);
                if($rowCount > 0){
                    while($row = mysqli_fetch_assoc($result)){
                            $id=$row['module_id'];
                                            ?>
                <tr>
                    <td><?php// echo $row['module_name']; ?></td>
                    <td><?php //echo $row['module_desc']; ?></td>
                    <td><?php// echo $row['module_name']; ?></td>
                    <td><?php //echo $row['module_desc']; ?></td>
                    <td><?php// echo $row['module_name']; ?></td>
                    <td><?php //echo $row['module_desc']; ?></td>


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

<!-- Add Modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="action/admin/add-module.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Course</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- form -->
                    <div class="form-group row">
                        <label for="course" class="col-sm-3 col-form-label">Course <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="module_name" name="module_name"
                                placeholder="Module" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="module_desc" class="col-sm-3 col-form-label">Description <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="module_desc" name="module_desc"
                                placeholder="Description" required>
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-right">
                    <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
                    <button type="submit" name="add-module" class="btn btn-primary "> Add </button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Add Modal -->
<div class="modal fade" id="addLesson">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="action/admin/add-lesson.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Lesson</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- form -->
                    <div class="form-group row">
                        <label for="lesson_name" class="col-sm-3 col-form-label">Lesson <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lesson_name" name="lesson_name"
                                placeholder="Lesson No." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lesson_desc" class="col-sm-3 col-form-label">Description <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lesson_desc" name="lesson_desc"
                                placeholder="Description" required>
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-right">
                    <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
                    <button type="submit" name="add-module" class="btn btn-primary "> Add </button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
function delete_module(data_id) {
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
            window.location = ("action/admin/delete-module.php?id=" + data_id);
        }
    })
}
</script>