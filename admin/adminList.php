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
                        <li class="breadcrumb-item active" aria-current="page">Admininstration List</li>
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
        <!-- Content-->
    <section class="container-fluid">

<div class="card mb-4">
    <div class="card-header justify-content-between align-items-center d-flex">
        <h6 class="card-title m-0">Administration Management</h6>
        <div class="dropdown">
            <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ri-more-2-line"></i>
            </button>
            <ul class="dropdown-menu dropdown" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
    <div class="card-body">

        <!-- User listing Actions-->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <form class="bg-light rounded px-3 py-1 flex-shrink-0 d-flex align-items-center">
                <input class="form-control border-0 bg-transparent px-0 py-2 me-5 fw-bolder" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-link p-0 text-muted" type="submit"><i class="ri-search-2-line"></i></button>
            </form>
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-outline-secondary btn-sm text-body me-2"><i class="ri-download-fill align-bottom"></i> Export Users</a>
                <a class="btn btn-sm btn-primary" href="#"><i class="ri-add-circle-line align-bottom"></i> New User</a>
            </div>
        </div>
        <!-- /user listing Actions-->

        <!-- User Listing Table-->
        <div class="table-responsive">
            <table class="table m-0 table-striped">
                <thead>
                    <tr>
                        <th>
                            <div class="form-group form-check-custom mb-0 flex-shrink-0">
                                <input type="checkbox" class="form-check-input" id="filter-">
                            </div>
                        </th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Location</th>
                        <th>Joined</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group form-check-custom mb-0">
                                <input type="checkbox" class="form-check-input" id="filter-0">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-start">
                                <div class="avatar avatar-xs me-3 flex-shrink-0">
                                    <picture>
                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg" alt="">
                                    </picture>
                                </div>
                                <div>
                                    <p class="fw-bolder mb-1 d-flex align-items-center lh-1">Jon Smith
                                        <span class="d-block f-w-4 ms-1 lh-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </p>
                                    <span class="d-block text-muted">jon@apollo.co.uk</span>
                                </div>
                            </div>
                        </td>
                        <td>Administrator</td>
                        <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> London, UK</td>
                        <td class="text-muted">24th Jan, 2021</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="f-w-2 f-h-2 bg-success d-block rounded-circle me-1 fs-xs fw-bolder"></span> <span class="small text-muted">Online</span>
                            </div>
                        </td>
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
                            <div class="form-group form-check-custom mb-0">
                                <input type="checkbox" class="form-check-input" id="filter-1">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-start">
                                <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">A</button>
                                <div>
                                    <p class="fw-bolder mb-1 d-flex align-items-center lh-1">Anne Kimber
                                    </p>
                                    <span class="d-block text-muted">anne.kimber@apollo.co.uk</span>
                                </div>
                            </div>
                        </td>
                        <td>Sales Leader</td>
                        <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> Manchester, UK</td>
                        <td class="text-muted">3rd Apr, 2021</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="f-w-2 f-h-2 bg-danger d-block rounded-circle me-1 fs-xs fw-bolder"></span> <span class="small text-muted">Offline</span>
                            </div>
                        </td>
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
                            <div class="form-group form-check-custom mb-0">
                                <input type="checkbox" class="form-check-input" id="filter-2">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-start">
                                <div class="avatar avatar-xs me-3 flex-shrink-0">
                                    <picture>
                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg" alt="">
                                    </picture>
                                </div>
                                <div>
                                    <p class="fw-bolder mb-1 d-flex align-items-center lh-1">Patrick Patel
                                        <span class="d-block f-w-4 ms-1 lh-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </p>
                                    <span class="d-block text-muted">patrick@apollo.co.uk</span>
                                </div>
                            </div>
                        </td>
                        <td>IT Support</td>
                        <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> New York, US</td>
                        <td class="text-muted">17th Feb, 2021</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="f-w-2 f-h-2 bg-success d-block rounded-circle me-1 fs-xs fw-bolder"></span> <span class="small text-muted">Online</span>
                            </div>
                        </td>
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
                            <div class="form-group form-check-custom mb-0">
                                <input type="checkbox" class="form-check-input" id="filter-3">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-start">
                                <div class="avatar avatar-xs me-3 flex-shrink-0">
                                    <picture>
                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg" alt="">
                                    </picture>
                                </div>
                                <div>
                                    <p class="fw-bolder mb-1 d-flex align-items-center lh-1">Robert Smith
                                        <span class="d-block f-w-4 ms-1 lh-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </p>
                                    <span class="d-block text-muted">rob@apollo.co.uk</span>
                                </div>
                            </div>
                        </td>
                        <td>Team Leader</td>
                        <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> Canberra, AU</td>
                        <td class="text-muted">24th March, 2021</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="f-w-2 f-h-2 bg-success d-block rounded-circle me-1 fs-xs fw-bolder"></span> <span class="small text-muted">Online</span>
                            </div>
                        </td>
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
                            <div class="form-group form-check-custom mb-0">
                                <input type="checkbox" class="form-check-input" id="filter-4">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-start">
                                <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">B</button>
                                <div>
                                    <p class="fw-bolder mb-1 d-flex align-items-center lh-1">Barry Rogan
                                    </p>
                                    <span class="d-block text-muted">barry.rogan@apollo.co.uk</span>
                                </div>
                            </div>
                        </td>
                        <td>Sales Support</td>
                        <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> London, UK</td>
                        <td class="text-muted">3rd May, 2021</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="f-w-2 f-h-2 bg-danger d-block rounded-circle me-1 fs-xs fw-bolder"></span> <span class="small text-muted">Offline</span>
                            </div>
                        </td>
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
                            <div class="form-group form-check-custom mb-0">
                                <input type="checkbox" class="form-check-input" id="filter-5">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-start">
                                <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">K</button>
                                <div>
                                    <p class="fw-bolder mb-1 d-flex align-items-center lh-1">Karin Frum
                                    </p>
                                    <span class="d-block text-muted">karin.frum@apollo.co.uk</span>
                                </div>
                            </div>
                        </td>
                        <td>Customer Support</td>
                        <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> Manchester, UK</td>
                        <td class="text-muted">11th Apr, 2021</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="f-w-2 f-h-2 bg-danger d-block rounded-circle me-1 fs-xs fw-bolder"></span> <span class="small text-muted">Offline</span>
                            </div>
                        </td>
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
                    <tr>
                        <td>
                            <div class="form-group form-check-custom mb-0">
                                <input type="checkbox" class="form-check-input" id="filter-6">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-start">
                                <div class="avatar avatar-xs me-3 flex-shrink-0">
                                    <picture>
                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-5.jpeg" alt="">
                                    </picture>
                                </div>
                                <div>
                                    <p class="fw-bolder mb-1 d-flex align-items-center lh-1">Onome Sanomi
                                        <span class="d-block f-w-4 ms-1 lh-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </p>
                                    <span class="d-block text-muted">onome@apollo.co.uk</span>
                                </div>
                            </div>
                        </td>
                        <td>Administrator</td>
                        <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> London, UK</td>
                        <td class="text-muted">24th Jan, 2021</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="f-w-2 f-h-2 bg-success d-block rounded-circle me-1 fs-xs fw-bolder"></span> <span class="small text-muted">Online</span>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownOrder-6" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-6">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group form-check-custom mb-0">
                                <input type="checkbox" class="form-check-input" id="filter-7">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-start">
                                <div class="avatar avatar-xs me-3 flex-shrink-0">
                                    <picture>
                                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-6.jpeg" alt="">
                                    </picture>
                                </div>
                                <div>
                                    <p class="fw-bolder mb-1 d-flex align-items-center lh-1">Kevin Smith
                                        <span class="d-block f-w-4 ms-1 lh-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </p>
                                    <span class="d-block text-muted">kevin@apollo.co.uk</span>
                                </div>
                            </div>
                        </td>
                        <td>Administrator</td>
                        <td class="text-muted"><i class="ri-map-pin-line align-bottom"></i> London, UK</td>
                        <td class="text-muted">19th Mar, 2021</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="f-w-2 f-h-2 bg-success d-block rounded-circle me-1 fs-xs fw-bolder"></span> <span class="small text-muted">Online</span>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownOrder-7" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-7">
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
        <!-- /User Listing Table-->
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

<!-- Sidebar Menu Overlay-->
<div class="menu-overlay-bg"></div>
<!-- / Sidebar Menu Overlay-->

<!-- Modal Imports-->
<!-- Place your modal imports here-->

<!-- Default Example Modal Import-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Here goes modal body content
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Offcanvas Imports-->
<!-- Place your offcanvas imports here-->

<!-- Default Example Offcanvas Import-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
        </div>
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Activity Offcanvas Import-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
    <div class="offcanvas-header d-flex align-items-center justify-content-between">
        <h5 class="offcanvas-title" id="offcanvasActivityLabel">Activity</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group list-group-flush">

            <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                <div class="avatar avatar-xs me-3 flex-shrink-0">
                    <picture>
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-7.jpeg" alt="">
                    </picture>
                    <span class="avatar-dot bg-success"></span>
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <p class="fw-semibold mb-0 me-3">John Doe</p>
                        <span class="small d-block text-muted fw-bolder">5m ago</span>
                    </div>
                    <span class="small d-block text-muted">Submitted quarterly marketing report for review.</span>
                    <div class="bg-light border rounded-md p-2 mt-2 d-flex justify-content-start align-items-start">
                        <div class="d-flex align-items-start me-3">
                            <i class="ri-file-word-line ri-2x lh-1 me-2 text-primary"></i>
                            <div>
                                <span class="d-block fw-bolder small">Year End Report</span>
                                <span class="text-muted d-block fs-xs">24KB</span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                <div class="avatar avatar-xs me-3 flex-shrink-0">
                    <picture>
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg" alt="">
                    </picture>
                    <span class="avatar-dot bg-success"></span>
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <p class="fw-semibold mb-0 me-3">Sally Field</p>
                        <span class="small d-block text-muted fw-bolder">1h ago</span>
                    </div>
                    <span class="small d-block text-muted">Marked project status as completed.</span>
                </div>
            </li>
            <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                <div class="avatar avatar-xs me-3 flex-shrink-0">
                    <picture>
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg" alt="">
                    </picture>
                    <span class="avatar-dot bg-success"></span>
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <p class="fw-semibold mb-0 me-3">Mark Robinson</p>
                        <span class="small d-block text-muted fw-bolder">2h ago</span>
                    </div>
                    <span class="small d-block text-muted">Created 2 new products in Mens Shoes</span>
                    <div class="bg-light border rounded-md p-2 mt-2 d-flex justify-content-start align-items-start">
                        <picture class="me-2">
                            <img class="f-w-12 rounded" src="./assets/images/1.png" alt="">
                        </picture>
                        <picture>
                            <img class="f-w-12 rounded" src="./assets/images/3.png" alt="">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                <div class="avatar avatar-xs me-3 flex-shrink-0">
                    <picture>
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg" alt="">
                    </picture>
                    <span class="avatar-dot bg-success"></span>
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <p class="fw-semibold mb-0 me-3">Jeffrey Way</p>
                        <span class="small d-block text-muted fw-bolder">6h ago</span>
                    </div>
                    <span class="small d-block text-muted">Set user status as &#x27;offline&#x27;</span>
                </div>
            </li>

        </ul>
        <a href="#" class="btn btn-outline-secondary btn-sm text-body d-flex align-items-center justify-content-center py-3 mb-4">
            <span class="f-w-4 text-muted d-block me-2">
                <svg class="w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                </svg>
            </span>
            View All Activity
        </a>
    </div>
</div>
<!-- Message Offcanvas Import-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMessage" aria-labelledby="offcanvasMessageLabel">
    <div class="offcanvas-header position-relative">
        <div class="d-flex flex-column w-100">
            <h5 class="offcanvas-title mb-3" id="offcanvasMessageLabel">Company Meetup</h5>
            <div class="d-flex justify-content-between align-items-center">
                <div class="avatar-group me-4">
                    <picture class="avatar-group-img">
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small.jpeg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <picture class="avatar-group-img">
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <picture class="avatar-group-img">
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <picture class="avatar-group-img">
                        <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                    </picture>
                    <span class="small fw-bolder ms-2 text-muted opacity-90">+ 12 others</span>
                </div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon p-0" type="button" id="dropdownTop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-settings-3-line text-muted ri-lg"></i>
                    </button>
                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownTop">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <button type="button" class="btn-close text-reset position-absolute top-20 end-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body h-100 d-flex justify-content-between flex-column pb-0">
        <div class="overflow-auto py-4">
            <div class="overflow-hidden">
                <!-- Messages-->
                <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                    <div class="avatar avatar-xs me-3 flex-shrink-0">
                        <picture>
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <span class="avatar-dot bg-success"></span>
                    </div>
                    <div class="d-flex justify-content-start flex-column align-items-start col">
                        <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">Patrick Johnson</span> &middot; 2 mins ago</small>
                        <div class="bg-light p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-e-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                    <div class="d-flex justify-content-end flex-column align-items-end col">
                        <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">You</span> &middot; 5 mins ago</small>
                        <div class="bg-primary text-white p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-s-4">
                            Maecenas aliquet eu felis vel.
                        </div>
                    </div>
                    <div class="avatar avatar-xs ms-3 flex-shrink-0">
                        <picture>
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <span class="avatar-dot bg-success"></span>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                    <div class="avatar avatar-xs me-3 flex-shrink-0">
                        <picture>
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <span class="avatar-dot bg-success"></span>
                    </div>
                    <div class="d-flex justify-content-start flex-column align-items-start col">
                        <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">Patrick Johnson</span> &middot; 25 mins ago</small>
                        <div class="bg-light p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-e-4">
                            Cras sit amet gravida augue.
                        </div>
                    </div>
                </div> <!-- / Messages-->
            </div>
        </div>
    </div>
</div> <!-- / Footer-->

</section>
<!-- / Content-->