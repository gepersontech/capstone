
<style>
    #drop{
        line-height: 2px;
        font-size: 13px;
    }
    .allcontent{
        margin-top: -30px;
    }
</style>

<body class="body">
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
                            start now
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">in Lesson</a></li>
                            <li><a class="dropdown-item" href="#">in Activities</a></li>
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
            <div class="allcontent">
            <!-- Page Title-->
            <div style="height: 95px ;" class="alert alert-light alert-dismissible fade show" role="alert">
                <h2 class="fs-3 fw-bold mb-2">Welcome back, James Gwapo 👋 </h2>
                <p class="text-muted mb-5">It's a great day to make wonderful things today. Enjoy Learning! 😁</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!-- / Page Title-->
            
            <!-- Top Row Widgets-->
            <div class="row g-4">

                <!-- Number Orders Widget-->
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Module Section</h6>
                        </div>
                        <div class="card-body">
                            <div class="row gx-4 mb-3 mb-md-1">
                                <div class="col-12 col-md-6">
                                    <p class="fs-3 fw-bold d-flex align-items-center"><span class="fs-9 me-1">$</span> 567,99</p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="chart chart-sm">
                                        <canvas id="chartMonthlyIncome"></canvas>
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
                                <span class="fw-bold text-success fs-9 ms-2">+ 10.2%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Number Orders Widget-->

                <!-- Average Orders Widget-->
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Student Section</h6>
                        </div>
                        <div class="card-body">
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
                        </div>
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


                <!-- Latest Events-->
                <div class="col-12 col-md-6">
                    <div class="card h-100 bg-primary border-primary">
                        <div class="card-header bg-transparent justify-content-between align-items-center d-flex border-0 pb-0">
                            <div class="d-flex align-items-center flex-shrink-0">
                                <i class="ri-calendar-line me-2 text-white opacity-75 ri-lg"></i>
                                <h6 class="card-title m-0 text-light fs-xs text-uppercase fw-bolder tracking-wide">Upcoming Events</h6>
                            </div>
                            <div class="swiper-announcement-pagination text-end text-white opacity-75 fw-bold fs-9"></div>
                        </div>
                        <div class="card-body mt-3">
                            <div class="d-flex flex-grow-1 overflow-hidden text-white">
                                <!-- Swiper Latest -->
                                <div class="swiper-container overflow-hidden w-auto" data-swiper data-options='{
                                "spaceBetween": 10,
                                "loop": true,
                                "slidesPerView": 1,
                                "observeParents": true,
                                "observer": true,
                                "autoplay": {
                                "delay": 6000,
                                "disableOnInteraction": false
                                },
                                "pagination": {
                                    "el": ".swiper-announcement-pagination",
                                    "clickable": true,
                                    "type": "fraction"
                                }
                            }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-white">

                                            <!-- Event Date & Title-->
                                            <div class="d-flex mb-4 align-items-start">
                                                <div class="me-3 text-center pe-3 border-end-white-opacity">
                                                    <span class="d-block text-uppercase small fw-bolder tracking-wide lh-1">Wed</span>
                                                    <span class="d-block fs-3 text-uppercase fw-bold tracking-wide lh-1 mt-1">12</span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fs-5 fw-bolder lh-1">Quarterly Staff Review</p>
                                                    <small class="d-block lh-1 opacity-75 mt-2">Review sales staff with Mike, John, Sally</small>
                                                </div>
                                            </div>
                                            <!-- / Event Date & Title-->

                                            <!-- Event Location-->
                                            <div class="d-flex align-items-start mb-5">
                                                <button class="btn-icon bg-white opacity-25 me-3"><i class="ri-map-pin-line"></i></button>
                                                <div>
                                                    <span class="d-block fw-bolder fs-6">Piccadily Circus</span>
                                                    <small class="d-block opacity-75">London, SW12 3RT</small>
                                                </div>
                                            </div>
                                            <!-- / Event Location-->

                                            <!-- Attendees & CTA-->
                                            <div class="d-flex justify-content-start align-items-start flex-column flex-lg-row justify-content-lg-between">
                                                <div class="avatar-group me-4">
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small.jpeg" alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-2.jpeg" alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-3.jpeg" alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-4.jpeg" alt="">
                                                    </picture>
                                                    <span class="small fw-bolder ms-2 text-white opacity-90">+ 12 more</span>
                                                </div>

                                                <div class="mt-3 mt-lg-0">
                                                    <button class="btn btn-sm btn-white">Attending</button>
                                                    <button class="btn btn-sm btn-link text-white fw-bolder opacity-75">Cancel</button>
                                                </div>
                                            </div>
                                            <!-- Attendees & CTA-->
                                        </div>
                                        <div class="swiper-slide text-white">

                                            <!-- Event Date & Title-->
                                            <div class="d-flex mb-4 align-items-start">
                                                <div class="me-3 text-center pe-3 border-end-white-opacity">
                                                    <span class="d-block text-uppercase small fw-bolder tracking-wide lh-1">Thu</span>
                                                    <span class="d-block fs-3 text-uppercase fw-bold tracking-wide lh-1 mt-1">22</span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fs-5 fw-bolder lh-1">Yearly Budget Review</p>
                                                    <small class="d-block lh-1 opacity-75 mt-2">Budget meeting with Patrick and Debbie</small>
                                                </div>
                                            </div>
                                            <!-- / Event Date & Title-->

                                            <!-- Event Location-->
                                            <div class="d-flex align-items-start mb-5">
                                                <button class="btn-icon bg-white opacity-25 me-3"><i class="ri-map-pin-line"></i></button>
                                                <div>
                                                    <span class="d-block fw-bolder fs-6">South Bank Events Hall</span>
                                                    <small class="d-block opacity-75">London, SE4 7EH</small>
                                                </div>
                                            </div>
                                            <!-- / Event Location-->

                                            <!-- Attendees & CTA-->
                                            <div class="d-flex justify-content-start align-items-start flex-column flex-lg-row justify-content-lg-between">
                                                <div class="avatar-group me-4">
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small.jpeg" alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-2.jpeg" alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-3.jpeg" alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-4.jpeg" alt="">
                                                    </picture>
                                                    <span class="small fw-bolder ms-2 text-white opacity-90">+ 8 more</span>
                                                </div>

                                                <div class="mt-3 mt-lg-0">
                                                    <button class="btn btn-sm btn-white">Attending</button>
                                                    <button class="btn btn-sm btn-link text-white fw-bolder opacity-75">Cancel</button>
                                                </div>
                                            </div>
                                            <!-- Attendees & CTA-->
                                        </div>
                                        <div class="swiper-slide text-white">

                                            <!-- Event Date & Title-->
                                            <div class="d-flex mb-4 align-items-start">
                                                <div class="me-3 text-center pe-3 border-end-white-opacity">
                                                    <span class="d-block text-uppercase small fw-bolder tracking-wide lh-1">Mon</span>
                                                    <span class="d-block fs-3 text-uppercase fw-bold tracking-wide lh-1 mt-1">28</span>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fs-5 fw-bolder lh-1">Summer Staff Party</p>
                                                    <small class="d-block lh-1 opacity-75 mt-2">Yearly company summer party</small>
                                                </div>
                                            </div>
                                            <!-- / Event Date & Title-->

                                            <!-- Event Location-->
                                            <div class="d-flex align-items-start mb-5">
                                                <button class="btn-icon bg-white opacity-25 me-3"><i class="ri-map-pin-line"></i></button>
                                                <div>
                                                    <span class="d-block fw-bolder fs-6">8 Northumberland Avenue</span>
                                                    <small class="d-block opacity-75">London, SW12 3RT</small>
                                                </div>
                                            </div>
                                            <!-- / Event Location-->

                                            <!-- Attendees & CTA-->
                                            <div class="d-flex justify-content-start align-items-start flex-column flex-lg-row justify-content-lg-between">
                                                <div class="avatar-group me-4">
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small.jpeg" alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-2.jpeg" alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-3.jpeg" alt="">
                                                    </picture>
                                                    <picture class="avatar-group-img">
                                                        <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-4.jpeg" alt="">
                                                    </picture>
                                                    <span class="small fw-bolder ms-2 text-white opacity-90">+ 32 more</span>
                                                </div>

                                                <div class="mt-3 mt-lg-0">
                                                    <button class="btn btn-sm btn-white">Attending</button>
                                                    <button class="btn btn-sm btn-link text-white fw-bolder opacity-75">Cancel</button>
                                                </div>
                                            </div>
                                            <!-- Attendees & CTA-->
                                        </div>
                                    </div>

                                </div>
                                <!-- / Swiper Latest-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Latest Events-->

                <!-- Refer A Friend-->
                <div class="col-12 col-md-6">
                    <div class="card h-100">
                        <div class="card-body overflow-hidden">
                            <div class="row gx-2 h-100">
                                <div class="col-3 d-none d-xl-flex h-100 align-items-center">
                                    <picture>
                                        <img class="w-100" src="./assets/images/refer.svg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                                    </picture>
                                </div>
                                <div class="col-12 col-xl-6 d-flex flex-column justify-content-center align-items-center text-center h-100">
                                    <p class="fw-bold fs-5">Refer a friend and get one month's pro subscription free</p>
                                    <p class="text-muted">We'll give you a month's pro subscription for every friend that signs up to Apollo.</p>
                                    <a href="#" class="btn btn-outline-secondary btn-sm text-body"><i class="ri-file-copy-line align-middle"></i> Copy invite code</a>
                                </div>
                                <div class="col-3 d-none d-xl-flex h-100 align-items-center">
                                    <picture>
                                        <img class="w-100" src="./assets/images/refer-2.svg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Refer A Friend-->
            </div>
            <!-- / Top Row Widgets-->

            <!-- Middle Row Widgets-->
            <div class="row g-4 mb-4 mt-0">

                <!-- Current Sales-->
                <!-- <div class="col-12 col-xxl-4">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Current Sales</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownExpenses" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownExpenses">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-4 mt-2">
                                <div class="d-flex align-items-center">
                                    <h4 class="fs-3 fw-bold mb-0 me-3">$123,668</h4>
                                    <span class="badge bg-success-faded text-success d-flex align-items-center ">
                                        <span class="f-w-4 d-block me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                <polyline points="17 6 23 6 23 12"></polyline>
                                            </svg>
                                        </span>
                                        + 13%
                                    </span>
                                </div>
                                <div class="d-flex align-items-center ms-2 d-xxl-none">
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-2 f-h-2 bg-primary d-block rounded-circle me-2"></span>
                                        <span class="small text-muted">2021</span>
                                    </div>
                                    <div class="d-flex align-items-center ms-4">
                                        <span class="f-w-2 f-h-2 bg-secondary-faded d-block rounded-circle me-2"></span>
                                        <span class="small text-muted">2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart chart-md pt-2">
                                <canvas id="chartBar"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- / Current Sales-->

                <!-- Users By Country-->
                <!-- <div class="col-12 col-lg-6 col-xxl-4">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Visitors By Country</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownExpenses" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownExpenses">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled m-0">
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="flag-icon flag-icon-gb me-2"></span>
                                        <span class="fw-medium">United Kingdom</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small me-1 d-lg-none d-xxl-block">31.2%</span>
                                        <span class="badge bg-transparent text-success d-flex align-items-center ">
                                            <span class="f-w-4 d-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="flag-icon flag-icon-us me-2"></span>
                                        <span class="fw-medium">United States</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small me-1 d-lg-none d-xxl-block">15.8%</span>
                                        <span class="badge bg-transparent text-danger d-flex align-items-center ">
                                            <span class="f-w-4 d-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                    <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                    <polyline points="17 18 23 18 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="flag-icon flag-icon-in me-2"></span>
                                        <span class="fw-medium">India</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small me-1 d-lg-none d-xxl-block">21.5%</span>
                                        <span class="badge bg-transparent text-success d-flex align-items-center ">
                                            <span class="f-w-4 d-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="flag-icon flag-icon-br me-2"></span>
                                        <span class="fw-medium">Brazil</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small me-1 d-lg-none d-xxl-block">27.2%</span>
                                        <span class="badge bg-transparent text-danger d-flex align-items-center ">
                                            <span class="f-w-4 d-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                    <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                    <polyline points="17 18 23 18 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="flag-icon flag-icon-au me-2"></span>
                                        <span class="fw-medium">Australia</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small me-1 d-lg-none d-xxl-block">44.8%</span>
                                        <span class="badge bg-transparent text-success d-flex align-items-center ">
                                            <span class="f-w-4 d-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="flag-icon flag-icon-ch me-2"></span>
                                        <span class="fw-medium">China</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small me-1 d-lg-none d-xxl-block">23.2%</span>
                                        <span class="badge bg-transparent text-success d-flex align-items-center ">
                                            <span class="f-w-4 d-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- / Users By Country-->

                <!-- Users By Operating System-->
                <!-- <div class="col-12 col-lg-6 col-xxl-4">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Users by OS</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownExpenses" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownExpenses">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled m-0">
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-4 me-3 lh-1">
                                            <picture>
                                                <img class="img-fluid" src="./assets/images/logos/logo-17.svg" alt="">
                                            </picture>
                                        </span>
                                        <span class="fw-medium">MacOS 11 Big Sur</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small d-lg-none d-xxl-block">144,678</span>
                                        <div class="progress f-w-12 m-0 ms-2 f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-4 me-3 lh-1">
                                            <picture>
                                                <img class="img-fluid" src="./assets/images/logos/logo-18.svg" alt="">
                                            </picture>
                                        </span>
                                        <span class="fw-medium">Ubuntu</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small d-lg-none d-xxl-block">132,568</span>
                                        <div class="progress f-w-12 m-0 ms-2 f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-4 me-3 lh-1">
                                            <picture>
                                                <img class="img-fluid" src="./assets/images/logos/logo-19.svg" alt="">
                                            </picture>
                                        </span>
                                        <span class="fw-medium">Windows 11</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small d-lg-none d-xxl-block">114,345</span>
                                        <div class="progress f-w-12 m-0 ms-2 f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 23%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-4 me-3 lh-1">
                                            <picture>
                                                <img class="img-fluid" src="./assets/images/logos/logo-17.svg" alt="">
                                            </picture>
                                        </span>
                                        <span class="fw-medium">MacOS 10.14 Mojave</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small d-lg-none d-xxl-block">98,445</span>
                                        <div class="progress f-w-12 m-0 ms-2 f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-4 me-3 lh-1">
                                            <picture>
                                                <img class="img-fluid" src="./assets/images/logos/logo-17.svg" alt="">
                                            </picture>
                                        </span>
                                        <span class="fw-medium">MacOS 10.15 Catalina</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small d-lg-none d-xxl-block">95,987</span>
                                        <div class="progress f-w-12 m-0 ms-2 f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-4 me-3 lh-1">
                                            <picture>
                                                <img class="img-fluid" src="./assets/images/logos/logo-19.svg" alt="">
                                            </picture>
                                        </span>
                                        <span class="fw-medium">Windows 10</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <span class="text-muted text-end small d-lg-none d-xxl-block">77,562</span>
                                        <div class="progress f-w-12 m-0 ms-2 f-h-1">
                                            <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- / Users By Operating System-->

                <!-- Monthly Expenses-->
                <!-- <div class="col-12 col-lg-4">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Monthly expenses</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownExpenses" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownExpenses">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart chart-lg">
                                <canvas id="chartDoughnut"></canvas>
                            </div>

                            <div class="row g-1 mt-4">

                                <div class="col-12 col-sm-4 d-flex flex-column align-items-center">
                                    <p class="fw-bolder mb-1">$1,456</p>
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-2 f-h-2 bg-secondary-faded d-block rounded-circle me-2"></span>
                                        <span class="small text-muted">Rent</span>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4 d-flex flex-column align-items-center">
                                    <p class="fw-bolder mb-1">$12,325</p>
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-2 f-h-2 bg-primary d-block rounded-circle me-2"></span>
                                        <span class="small text-muted">Salaries</span>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4 d-flex flex-column align-items-center">
                                    <p class="fw-bolder mb-1">$14,899</p>
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-2 f-h-2 bg-warning d-block rounded-circle me-2"></span>
                                        <span class="small text-muted">Marketing</span>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="btn btn-light d-table mx-auto mt-4">View full expenses</a>
                        </div>
                    </div>
                </div> -->
                <!-- /Monthly Expenses-->

                <!-- Yearly Income-->
                <!-- <div class="col-12 col-lg-8">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Yearly income</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownYearly" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownYearly">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center">
                                    <h4 class="fs-3 fw-bold mb-0 me-3">$145,778</h4>
                                    <span class="badge bg-success-faded text-success d-flex align-items-center ">
                                        <span class="f-w-4 d-block me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                <polyline points="17 6 23 6 23 12"></polyline>
                                            </svg>
                                        </span>
                                        + 35%
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span class="f-w-4 rounded f-h-1 bg-primary d-block me-2"></span>
                                        <span class="small text-muted">2021</span>
                                    </div>
                                    <div class="d-flex align-items-center ms-4">
                                        <span class="f-w-4 rounded f-h-1 bg-secondary-faded d-block me-2"></span>
                                        <span class="small text-muted">2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart">
                                <div class="chart chart-lg">
                                    <canvas id="chartLine"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Yearly Income-->

                <!-- Latest Orders-->
                <!-- <div class="col-12">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Latest orders</h6>
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
                </div> -->
                <!-- Latest Orders-->

            <!-- </div> -->
            <!-- / Middle Row Widgets-->

            <!-- Bottom Row Widgets-->
            <!-- <div class="row g-4 mb-5"> -->

                <!-- Top Products-->
                <!-- <div class="col-12 col-lg-6">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Top categories</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownTop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownTop">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <picture>
                                                <img class="f-w-12 rounded" src="./assets/images/logos/logo-13.svg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                                            </picture>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <span class="text-muted">Nike Mens Running Shoes</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <span class="fw-bolder me-3">£834.98</span>
                                                <span class="badge bg-transparent text-success d-flex align-items-center ">
                                                    <span class="f-w-4 d-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                            <polyline points="17 6 23 6 23 12"></polyline>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div class="progress f-w-20 m-0 me-0 ms-auto f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <picture>
                                                <img class="f-w-12 rounded" src="./assets/images/logos/logo-15.svg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                                            </picture>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <span class="text-muted">Adidas Womens Jackets</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <span class="fw-bolder me-3">£695.54</span>
                                                <span class="badge bg-transparent text-success d-flex align-items-center ">
                                                    <span class="f-w-4 d-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                            <polyline points="17 6 23 6 23 12"></polyline>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div class="progress f-w-20 m-0 me-0 ms-auto f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <picture>
                                                <img class="f-w-12 rounded" src="./assets/images/logos/logo-14.svg" alt="HTML Bootstrap Admin Template by Pixel Rocket">
                                            </picture>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <span class="text-muted">Under Armour Golf Shorts</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <span class="fw-bolder me-3">£313.18</span>
                                                <span class="badge bg-transparent text-danger d-flex align-items-center ">
                                                    <span class="f-w-4 d-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                            <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                            <polyline points="17 18 23 18 23 12"></polyline>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div class="progress f-w-20 m-0 me-0 ms-auto f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-outline-secondary btn-sm text-body me-0 ms-auto d-table mt-3 pb-2" role="button">See all &rarr;</a>
                        </div>
                    </div>
                </div> -->
                <!-- Top Products-->

                <!-- Newsletter Stats-->
                <!-- <div class="col-12 col-lg-6">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Newsletter revenue</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button" id="dropdownNewsletter" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownNewsletter">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="fs-3 fw-bold mb-3">$123,778</h4>
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Gross sales"></div>
                                <div class="progress-bar opacity-75" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Net sales"></div>
                                <div class="progress-bar opacity-50" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Total profit"></div>
                            </div>

                            <table class="table mb-0 mt-4">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="f-w-2 f-h-2 rounded-circle bg-primary d-block"></span>
                                                <span class="text-muted ms-2">Gross sales</span>
                                            </div>
                                        </td>
                                        <td><span class="fw-bolder">$3,289.99 <span class="text-muted">(54.3%)</span></span></td>
                                        <td class="text-end">
                                            <span class="badge bg-transparent text-success d-flex align-items-center justify-content-end">
                                                <span class="f-w-4 d-block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                        <polyline points="17 6 23 6 23 12"></polyline>
                                                    </svg>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="f-w-2 f-h-2 rounded-circle bg-primary d-block opacity-75"></span>
                                                <span class="text-muted ms-2">Net sales</span>
                                            </div>
                                        </td>
                                        <td><span class="fw-bolder">$1,758.99 <span class="text-muted">(32.3%)</span></span></td>
                                        <td class="text-end">
                                            <span class="badge bg-transparent text-danger d-flex align-items-center justify-content-end">
                                                <span class="f-w-4 d-block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                        <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                        <polyline points="17 18 23 18 23 12"></polyline>
                                                    </svg>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="f-w-2 f-h-2 rounded-circle bg-primary d-block opacity-50"></span>
                                                <span class="text-muted ms-2">Total profit</span>
                                            </div>
                                        </td>
                                        <td><span class="fw-bolder">$699.54 <span class="text-muted">(12.3%)</span></span></td>
                                        <td class="text-end">
                                            <span class="badge bg-transparent text-success d-flex align-items-center justify-content-end">
                                                <span class="f-w-4 d-block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100">
                                                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                        <polyline points="17 6 23 6 23 12"></polyline>
                                                    </svg>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
                <!-- Newsletter Stats-->

            </div>
            <!-- / Bottom Row Widgets-->
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
            <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
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
            </div> -->
            <!-- Activity Offcanvas Import-->
            <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
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

                </div>
            </div>  -->
            <!-- / Footer-->
            </div>
        </section>
        <!-- / Content-->
    <!-- /Page Content -->

