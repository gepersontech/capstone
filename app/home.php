<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Personal Dashboard</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Dashboard
                    </li>
                </ol>
            </nav>
        </div>

    </div>
</div>
<div class="row pb-10">
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-24 text-dark">1</div>
                    <div class="font-14 text-secondary weight-500">
                        Courses
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#00eccf">
                        <!-- <i class="icon-copy dw dw-calendar1"></i> -->
                        <span class="micon icon-copy ti-blackboard"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-24 text-dark">1</div>
                    <div class="font-14 text-secondary weight-500">
                        Modules
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#ff5b5b">
                        <span class="micon icon-copy ti-files"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-24 text-dark">
                        <?php
                            // $sql = "SELECT * from exam";
                            //                 if ($result = mysqli_query($con, $sql)) {
                            //                     // Return the number of rows in result set
                            //                     $rowcount = mysqli_num_rows( $result );
                            //                     echo $rowcount;
                            //                 }
                            echo 4;
                        ?>
                    </div>
                    <div class="font-14 text-secondary weight-500">
                        Lessons
                    </div>
                </div>
                <div class="widget-icon">
                    <div class="icon">
                        <span class="micon icon-copy ti-view-list-alt"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <div class="weight-700 font-24 text-dark">
                        <?php
                            $sql = "SELECT * from users WHERE role_id = 3";
                                            if ($result = mysqli_query($con, $sql)) {
                                                // Return the number of rows in result set
                                                $rowcount = mysqli_num_rows( $result );
                                                echo $rowcount;
                                            }
                        ?>
                    </div>
                    <div class="font-14 text-secondary weight-500">Exams</div>
                </div>
                <div class="widget-icon">
                    <div class="icon" data-color="#09cc06">
                        <span class="micon icon-copy ti-user"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>