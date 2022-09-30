<style>
    #drop {
        line-height: 2px;
        font-size: 13px;
    }

    .allcontent {
        margin-top: -30px;
    }

    .card-header {
        padding: 0 0 0 0;
        margin: 0;
    }

    .card-header img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<body class="">
    <!-- Page Content -->
    <main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
            <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
                <nav class="mb-0" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                </div>
            </div>
        </div>
        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">
            <div class="allcontent">
                <!-- Page Title-->
                <div style="height: 95px ;" class="alert alert-light alert-dismissible fade show" role="alert">
                    <h2 class="fs-3 fw-bold mb-2">Welcome back, James Gwapo 👋 </h2>
                    <p class="text-muted mb-5">It's a nice day to share knowledge to other people 😁</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <!-- / Page Title-->

                <!-- Top Row Widgets-->
                <div class="row g-4">

                    <!-- Number Orders Widget-->
                    <div class="col-12 col-sm-6 col-xxl-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <img src="assets/images/circle.png" alt="background">
                            </div>
                            <div class="card-body">
                                <div class="col-12 col-md-10">
                                    <h6 class="card-title m-0 text-muted fs-m text-uppercase fw-bold tracking-wide">Circle Topics</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Number Orders Widget-->

                    <!-- Average Orders Widget-->
                    <div class="col-12 col-sm-6 col-xxl-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <img src="assets/images/reserve.png" alt="background">
                            </div>
                            <div class="card-body">
                                <div class="col-12 col-md-10">
                                    <h6 class="card-title m-0 text-muted fs-m text-uppercase fw-bold tracking-wide">Ellipse Topics</h6>
                                </div>
                            </div>
                            <!-- <div class="card-body">
                                <div class="row gx-4 mb-3 mb-md-1">
                                    <div class="col-12 col-md-6">
                                        <p class="fs-3 fw-bold d-flex align-items-center"><span class="fs-9 me-1">$</span> 193,99</p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="chart chart-sm">
                                            <canvas id="chartAvgOrders"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="f-w-7 f-h-7 p-2 bg-danger-faded text-danger rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                            <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                            <polyline points="17 18 23 18 23 12"></polyline>
                                        </svg>
                                    </span>
                                    <span class="fw-bold text-danger fs-9 ms-2">- 23.5%</span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- / Average Orders Widget-->

                    <!-- Pageviews Widget-->
                    <div class="col-12 col-sm-6 col-xxl-3">
                        <div class="card h-100">
                            <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                                <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Lessons section</h6>
                            </div>
                            <div class="card-body">
                                <div class="row gx-4 mb-3 mb-md-1">
                                    <div class="col-12 col-md-6">
                                        <p class="fs-3 fw-bold">95,456</p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="chart chart-sm">
                                            <canvas id="chartPageviews"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="f-w-7 f-h-7 p-2 bg-success-faded text-success rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                    </span>
                                    <span class="fw-bold text-success fs-9 ms-2">+ 1.1%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Pageviews Widget-->

                    <!-- Number Refunds Widget-->
                    <div class="col-12 col-sm-6 col-xxl-3">
                        <div class="card h-100">
                            <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                                <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Activities section</h6>
                            </div>
                            <div class="card-body">
                                <div class="row gx-4 mb-3 mb-md-1">
                                    <div class="col-12 col-md-6">
                                        <p class="fs-3 fw-bold d-flex align-items-center"><span class="fs-9 me-1">$</span> 12,340</p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="chart chart-sm">
                                            <canvas id="chartNumRefunds"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="f-w-7 f-h-7 p-2 bg-success-faded text-success rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                    </span>
                                    <span class="fw-bold text-success fs-9 ms-2">+ 7.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Number Refunds Widget-->
                    <!-- Middle Row Widgets-->
                    <div class="row g-4 mb-4 mt-0">


                        <!-- Students list-->
                        <div class="col-12">
                            <div class="card mb-4 h-100">
                                <div class="card-header justify-content-between align-items-center d-flex">
                                    <h6 class="card-title m-0">Enrolled Students</h6>
                                    <a href="#" class="btn btn-outline-secondary btn-sm text-body"><i class="ri-download-2-line align-middle"></i> Export</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table m-0 table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Billing Name</th>
                                                    <th>Date</th>
                                                    <th>Payment Method</th>
                                                    <th>Items</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bolder">#1234-5679</span>
                                                    </td>
                                                    <td>Patria Nelson</td>
                                                    <td class="text-muted">24th June, 2021</td>
                                                    <td class="text-muted">
                                                        <div class="d-flex align-items-center">
                                                            <i class="ri-visa-line ri-lg me-2"></i> **** 6789
                                                        </div>
                                                    </td>
                                                    <td class="text-muted">5</td>
                                                    <th class="text-muted">$123.99</th>
                                                    <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownOrder-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-line"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-0">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bolder">#1235-7755</span>
                                                    </td>
                                                    <td>Dominic Patterson</td>
                                                    <td class="text-muted">22nd June, 2021</td>
                                                    <td class="text-muted">
                                                        <div class="d-flex align-items-center">
                                                            <i class="ri-mastercard-fill ri-lg me-2"></i> **** 1233
                                                        </div>
                                                    </td>
                                                    <td class="text-muted">5</td>
                                                    <th class="text-muted">$123.99</th>
                                                    <td><span class="badge rounded-pill bg-info-faded text-info">processing</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownOrder-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-line"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-1">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bolder">#1236-6579</span>
                                                    </td>
                                                    <td>Steven Smith</td>
                                                    <td class="text-muted">21st June, 2021</td>
                                                    <td class="text-muted">
                                                        <div class="d-flex align-items-center">
                                                            <i class="ri-paypal-line ri-lg me-2"></i> **** 7766
                                                        </div>
                                                    </td>
                                                    <td class="text-muted">5</td>
                                                    <th class="text-muted">$123.99</th>
                                                    <td><span class="badge rounded-pill bg-danger-faded text-danger">cancelled</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownOrder-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-line"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-2">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bolder">#1237-1122</span>
                                                    </td>
                                                    <td>Courtney Lawes</td>
                                                    <td class="text-muted">19th June, 2021</td>
                                                    <td class="text-muted">
                                                        <div class="d-flex align-items-center">
                                                            <i class="ri-mastercard-fill ri-lg me-2"></i> **** 9087
                                                        </div>
                                                    </td>
                                                    <td class="text-muted">5</td>
                                                    <th class="text-muted">$123.99</th>
                                                    <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownOrder-3" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-line"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-3">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bolder">#1238-4433</span>
                                                    </td>
                                                    <td>Haley Jackson</td>
                                                    <td class="text-muted">19th June, 2021</td>
                                                    <td class="text-muted">
                                                        <div class="d-flex align-items-center">
                                                            <i class="ri-visa-line ri-lg me-2"></i> **** 6789
                                                        </div>
                                                    </td>
                                                    <td class="text-muted">5</td>
                                                    <th class="text-muted">$123.99</th>
                                                    <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownOrder-4" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-line"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-4">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bolder">#1239-8865</span>
                                                    </td>
                                                    <td>Sairaj Tackoo</td>
                                                    <td class="text-muted">18th June, 2021</td>
                                                    <td class="text-muted">
                                                        <div class="d-flex align-items-center">
                                                            <i class="ri-mastercard-fill ri-lg me-2"></i> **** 1233
                                                        </div>
                                                    </td>
                                                    <td class="text-muted">5</td>
                                                    <th class="text-muted">$123.99</th>
                                                    <td><span class="badge rounded-pill bg-info-faded text-info">processing</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownOrder-5" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-line"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-5">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav>
                                        <ul class="pagination justify-content-end mt-3 mb-0">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Latest Orders-->

                    </div>

                </div>
            </div>
        </section>
        <!-- / Content-->
        <!-- /Page Content -->