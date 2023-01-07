<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Update Student</h4>
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

<?php
$view = mysqli_fetch_array($query);
?>

<section>
    <div class=" container py-5">
        <form action="action/admin/update-student.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4 card-outline card-red">
                        <div class="card-header">
                            <h3>Update Student</h3>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?php echo $view['user_id']; ?>">

                            <div class="form-group row">
                                <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="firstname"
                                        value="<?php echo $view['firstname']; ?>" placeholder="Firstname" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="lastname"
                                        value="<?php echo $view['lastname']; ?>" placeholder="Lastname" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username"
                                        value="<?php echo $view['username']; ?>" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="age" class="col-sm-3 col-form-label">Age</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="age"
                                        value="<?php echo $view['age']; ?>" placeholder="Age" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Course</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" name="course">
                                        <option value="" selected>Choose Condition...</option>
                                        <?php
                                        $result = mysqli_query($con,"SELECT * FROM course;");
                                        $rowCount = mysqli_num_rows($result);
                                        if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?php echo $row['course_id'];?>"
                                            <?php if($row['course_id'] == $view['course_id']){echo 'selected';} ?>>
                                            <?php echo $row['course_name']; ?>
                                        </option>

                                        <?php   }
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address"
                                        value="<?php echo $view['address']; ?>" placeholder="Address" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email_add"
                                        value="<?php echo $view['email_add']; ?>" placeholder="Email Address" required>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" name="updateStudent" class="btn btn-primary float-right ml-3 ">
                                <i class="fa-regular fa-floppy-disk mr-1"></i> Update </button>
                            <a href="modules">
                                <button type="button" class="btn btn-warning float-right ml-3 "> <i
                                        class="fa-solid fa-arrows-rotate mr-1"></i>
                                    Back
                                </button>
                            </a>

                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>
</section>