    <!-- SWEET ALERT SCRIPT -->
    <script src="vendors/sweetalert/sweetalert.min.js"></script>
    <!-- <script src="src/plugins/sweetalert2/sweetalert2.all.js"></script> -->
    <script src="src/plugins/sweetalert2/jquery-3.6.1.min.js"></script>
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Current Modules</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Module
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">CURRENT MODULES</h4>
        <!-- <button type="button" class="btn btn-primary float-right mb-10" data-toggle="modal" data-target="#addModal">
            <span class="icon-copy ti-plus"></span>
            Add Module
        </button> -->
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Module Name</th>
                    <th class="table-plus datatable-nosort">Description</th>
                    <!-- <th class="datatable-nosort">Action</th> -->
                </tr>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `module`");
                $count = 1;
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['module_id'];
                ?>
                        <tr>
                            <td style="width: 300px;"><?php echo $row['module_name']; ?></td>
                            <td style="width: 300px;"><?php echo $row['module_desc']; ?></td>
                            <!-- <td style="width: 300px;">
                        
                        <a href="index.php?page=module-edit&& id=<?php //echo $id; 
                                                                    ?>" class=" btn btn-sm btn-primary">
                            <span class="icon-copy ti-pencil-alt"></span> View
                        </a>
                    </td> -->

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

<!-- Simple Datatable start -->
<div id="lessonbox" class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">CURRENT LESSONS</h4>
        <!-- <button type="button" class="btn btn-primary float-right mb-10" data-toggle="modal" data-target="#addLesson">
            <span class="icon-copy ti-plus"></span>
            Add Lesson
        </button> -->
    </div>
    <div class="pb-20">
        <table class="data-table table table-responsive stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Lesson No.</th>
                    <th class="table-plus datatable-nosort">Description</th>
                    <th class="table-plus datatable-nosort">Status</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `lesson`");
                $count = 1;
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['lesson_id'];
                ?>
                        <tr>
                            <td style="width: 300px;"><?php echo $row['lesson_name']; ?></td>
                            <td style="width: 300px;"><?php echo $row['lesson_desc']; ?></td>
                            <td style="width: 300px;"><?php //echo $row['lesson_desc'];

                                                        $results = mysqli_query($con, "SELECT * FROM `lesson_view` WHERE `user_id` = '" . $_SESSION['id'] . "' AND `lesson_id`= '" . $id . "'");
                                                        $rows = mysqli_num_rows($results);
                                                        if ($rows > 0) {
                                                            echo '<span class="badge badge-success badge-pill">Done: View</span>';
                                                        } else {
                                                            echo '<span class="badge badge-danger badge-pill">Todo: View</span>';
                                                        }

                                                        ?></td>
                            <td style="width: 300px;">
                                <?php
                                if ($count >= 2) {
                                ?>
                                    <a onclick="checkpoint()">
                                        <button class=" btn btn-md btn-primary">
                                            <span class="icon-copy fa fa-lock"></span>
                                              Read</button>
                                    </a>
                                <?php
                                } else {
                                ?>
                                    <a href="index.php?page=module-viewer&l=<?php echo $count; ?>">
                                        <button class=" btn btn-md btn-primary">
                                            <span class="icon-copy ti-eye"></span>
                                            Read</button>
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


<!-- <div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">VIDEO MATERIAL
            <tr>

                <td style="width: 400px;">
                    <a href="index.php?page=video-player" class=" btn btn-sm btn-primary">
                        <span class="fa fa-play"></span> Watch
                    </a>

                </td>

            </tr>
        </h4>
    </div>
</div> -->

<!-- Simple Datatable End -->


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
<script>
    function checkpoint() {
        swal({
            title: "Not Available",
            icon: 'warning',
        });
    }
    </script>