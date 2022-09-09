<style>
    #drop{
        line-height: 2px;
        font-size: 13px;
    }
</style>
<body>
    <main id="main">
        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
            <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
                <nav class="mb-0" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lessons</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
                    <!-- upload dropdown button -->
                    <div class="upload">
                        <a id="drop" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-add-circle-line align-bottom"></i> 
                            Upload now
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">New module</a></li>
                            <li><a class="dropdown-item" href="#">New Lesson</a></li>
                            <li><a class="dropdown-item" href="#">New video</a></li>
                        </ul>
                    </div>
                    <!-- upload dropdown button end....... -->
                    <!-- <a class="btn btn-sm btn-primary-faded ms-2" href="#"><i class="ri-settings-3-line align-bottom"></i> Settings</a> -->
                    <a class="btn btn-sm btn-secondary-faded ms-2 text-body" href="#"><i class="ri-question-line align-bottom"></i> Help</a>
                </div>
            </div>
        </div>
        <!-- / Breadcrumbs-->
        <h2>Lessons here</h2>
