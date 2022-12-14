<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Manage Exams</h4>
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

<?php
$view = mysqli_fetch_array($query);
?>

<section ">
    <div class=" container py-5">
    <form action="action/admin/update-course.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 card-outline card-red">
                    <div class="card-header">
                        <h3>Update Exam</h3>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?php echo $view['exam_id']; ?>">

                        <div class="form-group row">
                            <label for="exam" class="col-sm-3 col-form-label">Exam Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="exam_title"
                                    value="<?php echo $view['exam_title']; ?>" placeholder="Exam Title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">Course</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="course"
                                    value="<?php echo $view['course_name']; ?>" placeholder="Course" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desc" class="col-sm-3 col-form-label">Exam Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="desc"
                                    value="<?php echo $view['exam_desc']; ?>" placeholder="Description" required>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" name="updateCourse" class="btn btn-primary float-right ml-3 ">
                            <i class="fa-regular fa-floppy-disk mr-1"></i> Update </button>
                        <a href="exam">
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

<section ">
    <div class=" container py-5">
    <form action="action/admin/update-course.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 card-outline card-red">
                    <div class="card-header">
                        <h3>Questions</h3>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?php echo $view['exam_id']; ?>">

                        <div class="form-group row">
                            <label for="exam" class="col-sm-3 col-form-label">Question</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="exam_title"
                                    value="<?php //echo $view['exam_title']; ?>" placeholder="Add Question" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">Choose A</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="course"
                                    value="<?php //echo $view['course_name']; ?>" placeholder="Choose A" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">Choose B</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="course"
                                    value="<?php //echo $view['course_name']; ?>" placeholder="Choose B" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">Choose C</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="course"
                                    value="<?php //echo $view['course_name']; ?>" placeholder="Choose C" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">Choose D</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="course"
                                    value="<?php //echo $view['course_name']; ?>" placeholder="Choose D" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">Correct Answer</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="course"
                                    value="<?php //echo $view['course_name']; ?>" placeholder="Course" required>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer">
                        <button type="submit" name="saveQuestion" class="btn btn-primary float-right ml-3 ">
                            <i class="fa-regular fa-floppy-disk mr-1"></i> Save </button>
                        <a href="exam">
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

<section>
    <table class="table">
        <thead>
            <th class="col-span-4">Question 1</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>Choose A</td>
                <td>Choose B</td>
                <td>Choose C</td>
                <td>Choose D</td>
                <td>
                    <a href="#" type="button" class="btn btn-sm btn-primary">
                        manage
                    </a>
                    <a href="#" type="button" class="btn btn-sm btn-danger">
                        delete
                    </a>
                </td>
            </tr>

        </tbody>
    </table>
</section>

<br> <br> <br>