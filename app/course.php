<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Manage Courses</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Course
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">COURSE LIST</h4>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Course Name</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query($con,"SELECT * FROM `course`");
                $count=1;
                $rowCount = mysqli_num_rows($result);
                if($rowCount > 0){
                    while($row = mysqli_fetch_assoc($result)){
                            $id=$row['course_id'];
                                            ?>
                <tr>
                    <td><?php echo $row['course_name']; ?></td>
                    <td style="width: 400px;">
                        <a href="index.php?page=course-edit&& id=<?php echo $id; ?>" class=" btn btn-sm btn-primary">
                            <span class="icon-copy ti-pencil-alt"></span> Update
                        </a>

                        <a onclick="delete_course('<?php echo $id; ?>')" class=" btn btn-sm btn-danger text-white">
                            <span class="icon-copy ti-trash"></span>
                            Delete</a>
                    </td>

                </tr>
                <?php
                    $count++;
                }
                    
                }else{
                    //echo "No Records Found";
                }
                 echo "No Records Found";
            ?>

            </tbody>
        </table>
    </div>
</div>
<!-- Simple Datatable End -->

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