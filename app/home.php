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
                    <div class="weight-700 font-24 text-dark">
                        1
                    </div>
                    <div class="font-16 text-secondary weight-500">
                        <a href="course-user">Courses</a>
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
                    <div class="font-16 text-secondary weight-500">
                        <a href="module-user">Modules</a>

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
                        $sql = "SELECT * from lesson";
                        if ($result = mysqli_query($con, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        //echo 4;
                        ?>
                    </div>
                    <div class="font-16 text-secondary weight-500">
                        <a href="module-user#lessonbox">Lessons</a>
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
                        $sql = "SELECT * from exam";
                        if ($result = mysqli_query($con, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        }
                        ?>
                    </div>
                    <div class="font-16 text-secondary weight-500">
                       <a href="exam-user">Quiz</a> 
                    </div>
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
<!-- <div class="row clearfix progress-box">
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
                <input type="text" class="knob dial1" value="80" data-width="120" data-height="120" data-linecap="round"
                    data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff" data-angleOffset="180" readonly />
                <h5 class="text-blue padding-top-10 h5">Course Progress</h5>
                <span class="d-block">100% Average <i class="fa fa-line-chart text-blue"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
                <input type="text" class="knob dial2" value="75" data-width="120" data-height="120" data-linecap="round"
                    data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091" data-angleOffset="180" readonly />
                <h5 class="text-light-green padding-top-10 h5">
                    Mastery
                </h5>
                <span class="d-block">75% Average <i class="fa text-light-green fa-line-chart"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
                <input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-linecap="round"
                    data-thickness="0.12" data-bgColor="#fff" data-fgColor="#f56767" data-angleOffset="180" readonly />
                <h5 class="text-light-orange padding-top-10 h5">
                    Difficulties
                </h5>
                <span class="d-block">90% Average <i class="fa text-light-orange fa-line-chart"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
                <input type="text" class="knob dial4" value="65" data-width="120" data-height="120" data-linecap="round"
                    data-thickness="0.12" data-bgColor="#fff" data-fgColor="#a683eb" data-angleOffset="180" readonly />
                <h5 class="text-light-purple padding-top-10 h5">
                    Points
                </h5>
                <span class="d-block">65% Average <i class="fa text-light-purple fa-line-chart"></i></span>
            </div>
        </div>
    </div>
</div> -->