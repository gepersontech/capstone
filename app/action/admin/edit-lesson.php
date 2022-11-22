<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Manage Lesson</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Lesson
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
    <form action="action/admin/update-lesson.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 card-outline card-red">
                    <div class="card-header">
                        <h3>Edit Lesson</h3>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?php echo $view['lesson_id']; ?>">

                        <div class="form-group row">
                            <label for="lesson_name" class="col-sm-3 col-form-label">Lesson</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="lesson_name"
                                    value="<?php echo $view['lesson_name']; ?>" placeholder="Lesson No." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lesson_desc" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="lesson_desc"
                                    value="<?php echo $view['lesson_desc']; ?>" placeholder="Description" required>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" name="updateLesson" class="btn btn-primary float-right ml-3 ">
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


<?php include("topic.php") ?>