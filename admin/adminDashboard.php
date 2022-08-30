<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <!-- Need to create single header & footer file -->
    <!-- Need to Change the extension files -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Apollo | Bootstrap 5 HTML Admin Dashboard</title>
    
</head>
<body class="">

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom py-0 fixed-top bg-white">
      <div class="container-fluid">
        <a class="navbar-brand d-flex justify-content-start align-items-center border-end"
          href="./index.html">
          <div class="d-flex align-items-center">
              <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg>
              <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Apollo</span>
          </div>    </a>
        <div class="d-flex justify-content-between align-items-center flex-grow-1 navbar-actions">
    
          <!-- Search Bar and Menu Toggle-->
          <div class="d-flex align-items-center">
    
            <!-- Menu Toggle-->
            <div class="menu-toggle cursor-pointer me-4 text-primary-hover transition-color disable-child-pointer">
              <i class="ri-skip-back-mini-line ri-lg fold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
                title="Close menu"></i>
              <i class="ri-skip-forward-mini-line ri-lg unfold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
                title="Open Menu"></i>
            </div>
            <!-- / Menu Toggle-->
    
            <!-- Search Bar-->
            <form class="d-none d-md-flex bg-light rounded px-3 py-1">
                <input class="form-control border-0 bg-transparent px-0 py-2 me-5 fw-bolder" type="search"
                  placeholder="Search" aria-label="Search">
                <button class="btn btn-link p-0 text-muted" type="submit"><i class="ri-search-2-line"></i></button>
            </form>        <!-- / Search Bar-->
    
          </div>
          <!-- / Search Bar and Menu Toggle-->
    
          <!-- Right Side Widgets-->
          <div class="d-flex align-items-center">
    
            <!-- Notifications-->
            <div class="d-none d-sm-flex dropdown mx-1">
              <button class="btn-action text-muted" type="button" id="notificationsDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span class="f-w-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="w-100">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                  </svg>
                </span>
                <span
                class="position-absolute top-0 start-50 p-1 bg-success border border-3 border-white rounded-circle mt-n1">
                <span class="visually-hidden">New alerts</span>
              </span>
              </button>
              <div class="dropdown-menu dropdown-menu-end dropdown-lg" aria-labelledby="notificationsDropdown">
                <div class="dropdown-header d-flex justify-content-between align-items-center">
                  <p class="fw-bolder m-0 text-body">Notifications</p>
                  <span class="badge bg-success-faded text-success rounded-pill">4 new</span>
                </div>
                <div class="simplebar-wrapper">
                  <div data-pixr-simplebar>
                    <ul class="list-unstyled m-0 pb-4">
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">O</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Order #123-5567</p>
                              <p class="text-muted lh-1 mb-2 small">Placed by John Doe at 11:23 AM</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">2min</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">M</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Mike Johnston</p>
                              <p class="text-muted lh-1 mb-2 small">Hi Jack, can we setup a meeting...</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">1 hr</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">D</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Daily Backup</p>
                              <p class="text-muted lh-1 mb-2 small">Backup completed at 11:59 PM</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">3hr</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">E</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Event: Staff Review</p>
                              <p class="text-muted lh-1 mb-2 small">Monthly staff review starts in...</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">4hr</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">O</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Order #123-3322</p>
                              <p class="text-muted lh-1 mb-2 small">Placed by Sally Smith at 10:07 AM</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">1d</small>
                          </div>
                        </li>
                    </ul>
                  </div>
                </div>
                <div><a class="dropdown-item text-primary fw-bolder text-center border-top pt-3" href="#">See more &rarr;</a></div>
              </div>
            </div>        <!-- / Notifications-->
    
            <!-- Activity-->
            <button class="btn-action mx-1" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasActivity" aria-controls="offcanvasActivity">
                <span class="f-w-4 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                </span>
            </button>        <!-- / Activity-->
    
            <!-- Messages-->
            <button class="btn-action mx-1" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasMessage" aria-controls="offcanvasMessage">
                <span class="f-w-4 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                </span>
            </button>        <!-- / Messages-->
    
            <!-- Apps-->
            <div class="d-none d-sm-flex dropdown mx-1">
              <button class="btn-action mx-1" type="button" id="appsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="f-w-4 text-muted">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                  </svg>
                </span>
              </button>
              <div class="dropdown-menu dropdown-menu-end dropdown-lg" aria-labelledby="appsDropdown">
                <div class="dropdown-header d-flex justify-content-between align-items-center">
                  <p class="fw-bolder m-0 text-body">My Applications</p>
                </div>
                <div class="simplebar-wrapper">
                  <div data-pixr-simplebar>
                    <div class="row g-2 pb-3">
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-1.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Figma</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-2.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Sketch</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-3.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Adobe XD</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-4.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Netlify</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-5.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Dropbox</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-6.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Gitlab</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-7.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Click Up</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-8.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Atlassian</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-9.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Bitbucket</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-10.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Photoshop</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-11.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Illustrator</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-12.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Adobe CC</span>
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
                <div><a class="dropdown-item text-primary fw-bolder text-center border-top pt-3" href="#">See more &rarr;</a></div>
              </div>
            </div>        <!-- / Apps-->
    
            <!-- Profile Menu-->
            <div class="dropdown ms-1">
                <button class="btn btn-link p-0 position-relative" type="button" id="profileDropdown"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <picture>
                    <img class="f-w-10 rounded-circle" src="./assets/images/profile-small.jpeg"
                      alt="HTML Bootstrap Admin Template by Pixel Rocket">
                  </picture>
                  <span
                    class="position-absolute bottom-0 start-75 p-1 bg-success border border-3 border-white rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </button>
                <ul class="dropdown-menu dropdown-md dropdown-menu-end" aria-labelledby="profileDropdown">
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Set Visibility</a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Edit Settings</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li class="d-flex py-2 align-items-start">
                    <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">J</button>
                    <div class="d-flex align-items-start justify-content-between flex-grow-1">
                      <div>
                        <p class="lh-1 mb-2 fw-semibold text-body">John Daniels</p>
                        <p class="text-muted lh-1 mb-2 small">john@email.com</p>
                      </div>
                      <small class="badge bg-success-faded text-success rounded-pill">Pro</small>
                    </div>
                  </li>     
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Account Settings</a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Logout</a></li>
                </ul>
              </div>        <!-- / Profile Menu-->
    
          </div>
          <!-- / Notifications & Profile-->
        </div>
      </div>
    </nav>    <!-- / Navbar-->

    <!-- Page Content -->
    <main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <a class="btn btn-sm btn-primary" href="#"><i class="ri-add-circle-line align-bottom"></i> New Project</a>
            <a class="btn btn-sm btn-primary-faded ms-2" href="#"><i class="ri-settings-3-line align-bottom"></i> Settings</a>
            <a class="btn btn-sm btn-secondary-faded ms-2 text-body" href="#"><i class="ri-question-line align-bottom"></i> Help</a>
          </div>
          </div>
        </div>        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">

            <!-- Page Title-->
            <h2 class="fs-3 fw-bold mb-2">Welcome back, Patricia Smith 👋</h2>
            <p class="text-muted mb-5">Get a quick overview of your company's current status below, or click into one of the sections for a more detailed breakdown.</p>
            <!-- / Page Title-->

            <!-- Top Row Widgets-->
            <div class="row g-4">       
                
                <!-- Number Orders Widget-->
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Monthly Income</h6>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                </span>
                                <span class="fw-bold text-success fs-9 ms-2">+ 10.2%</span>
                            </div>
                        </div>
                    </div>                </div>
                <!-- / Number Orders Widget-->

                <!-- Average Orders Widget-->
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Average Order</h6>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                </span>
                                <span class="fw-bold text-danger fs-9 ms-2">- 23.5%</span>
                            </div>
                        </div>
                    </div>                </div>
                <!-- / Average Orders Widget-->

                <!-- Pageviews Widget-->
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Daily Pageviews</h6>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                </span>
                                <span class="fw-bold text-success fs-9 ms-2">+ 1.1%</span>
                            </div>
                        </div>
                    </div>                </div>
                <!-- / Pageviews Widget-->

                <!-- Number Refunds Widget-->
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
                            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Refund Issued</h6>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                </span>
                                <span class="fw-bold text-success fs-9 ms-2">+ 7.5%</span>
                            </div>
                        </div>
                    </div>                </div>
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
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small.jpeg"
                                                            alt="">
                                                        </picture>
                                                        <picture class="avatar-group-img">
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-2.jpeg"
                                                            alt="">
                                                        </picture>
                                                        <picture class="avatar-group-img">
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-3.jpeg"
                                                            alt="">
                                                        </picture>
                                                        <picture class="avatar-group-img">
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-4.jpeg"
                                                            alt="">
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
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small.jpeg"
                                                            alt="">
                                                        </picture>
                                                        <picture class="avatar-group-img">
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-2.jpeg"
                                                            alt="">
                                                        </picture>
                                                        <picture class="avatar-group-img">
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-3.jpeg"
                                                            alt="">
                                                        </picture>
                                                        <picture class="avatar-group-img">
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-4.jpeg"
                                                            alt="">
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
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small.jpeg"
                                                            alt="">
                                                        </picture>
                                                        <picture class="avatar-group-img">
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-2.jpeg"
                                                            alt="">
                                                        </picture>
                                                        <picture class="avatar-group-img">
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-3.jpeg"
                                                            alt="">
                                                        </picture>
                                                        <picture class="avatar-group-img">
                                                            <img class="f-w-10 rounded-circle border-primary" src="./assets/images/profile-small-4.jpeg"
                                                            alt="">
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
                </div>                </div>
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
                <div class="col-12 col-xxl-4">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Current Sales</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownExpenses" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                        </span>
                                        + 13%
                                    </span>            </div>
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
                    </div>                </div>
                <!-- / Current Sales-->                 

                <!-- Users By Country-->
                <div class="col-12 col-lg-6 col-xxl-4">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Visitors By Country</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownExpenses" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                        </span>
                                                    </span>                        </div>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                        </span>
                                                    </span>                        </div>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                        </span>
                                                    </span>                        </div>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                        </span>
                                                    </span>                        </div>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                        </span>
                                                    </span>                        </div>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                        </span>
                                                    </span>                        </div>
                                        </li>
                            </ul>
                        </div>
                    </div>                </div>
                <!-- / Users By Country-->

                <!-- Users By Operating System-->
                <div class="col-12 col-lg-6 col-xxl-4">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Users by OS</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownExpenses" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                    <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                    <div class="progress-bar" role="progressbar" style="width: 32%" aria-valuenow="32"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                    <div class="progress-bar" role="progressbar" style="width: 23%" aria-valuenow="23"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
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
                                                    <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                            </ul>
                        </div>
                    </div>                </div>
                <!-- / Users By Operating System-->               

                <!-- Monthly Expenses-->
                <div class="col-12 col-lg-4">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Monthly expenses</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownExpenses" data-bs-toggle="dropdown" aria-expanded="false">
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
                    </div>                </div>
                <!-- /Monthly Expenses-->

                <!-- Yearly Income-->
                <div class="col-12 col-lg-8">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Yearly income</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownYearly" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                        </span>
                                        + 35%
                                    </span>            </div>
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
                    </div>                </div>
                <!-- Yearly Income-->

                <!-- Latest Orders-->
                <div class="col-12">
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
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-0" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-1" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-2" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-3" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-4" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-5" data-bs-toggle="dropdown" aria-expanded="false">
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
            <!-- / Middle Row Widgets-->

            <!-- Bottom Row Widgets-->
            <div class="row g-4 mb-5">

                <!-- Top Products-->
                <div class="col-12 col-lg-6">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Top categories</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownTop" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                <img class="f-w-12 rounded" src="./assets/images/logos/logo-13.svg"
                                                    alt="HTML Bootstrap Admin Template by Pixel Rocket">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </span>
                                                </span>                        </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div class="progress f-w-20 m-0 me-0 ms-auto f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <picture>
                                                <img class="f-w-12 rounded" src="./assets/images/logos/logo-15.svg"
                                                    alt="HTML Bootstrap Admin Template by Pixel Rocket">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </span>
                                                </span>                        </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div class="progress f-w-20 m-0 me-0 ms-auto f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <picture>
                                                <img class="f-w-12 rounded" src="./assets/images/logos/logo-14.svg"
                                                    alt="HTML Bootstrap Admin Template by Pixel Rocket">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                    </span>
                                                </span>                        </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div class="progress f-w-20 m-0 me-0 ms-auto f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-outline-secondary btn-sm text-body me-0 ms-auto d-table mt-3 pb-2" role="button">See all &rarr;</a>
                        </div>
                    </div>                </div>
                <!-- Top Products-->

                <!-- Newsletter Stats-->
                <div class="col-12 col-lg-6">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Newsletter revenue</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownNewsletter" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                    aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Gross sales"></div>
                                <div class="progress-bar opacity-75" role="progressbar" style="width: 25%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Net sales"></div>
                                <div class="progress-bar opacity-50" role="progressbar" style="width: 35%" aria-valuenow="35"
                                    aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Total profit"></div>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                </span>
                                            </span>                    </td>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                </span>
                                            </span>                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="f-w-2 f-h-2 rounded-circle bg-primary d-block opacity-50"></span>
                                                <span class="text-muted ms-2">Total profit</span>
                                            </div>
                                        </td>
                                        <td><span class="fw-bolder">$699.54  <span class="text-muted">(12.3%)</span></span></td>
                                        <td class="text-end">
                                            <span class="badge bg-transparent text-success d-flex align-items-center justify-content-end">
                                                <span class="f-w-4 d-block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                </span>
                                            </span>                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Newsletter Stats-->

            </div>
            <!-- / Bottom Row Widgets-->

            <!-- Footer -->
            <footer class="  footer">
                <p class="small text-muted m-0">All rights reserved | © 2021</p>
                <p class="small text-muted m-0">Template created by <a href="https://www.pixelrocket.store/">PixelRocket</a></p>
            </footer>
            
            
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
                              <img class="f-w-12 rounded" src="./assets/images/1.png"
                                alt="">
                            </picture>
                            <picture>
                              <img class="f-w-12 rounded" src="./assets/images/3.png"
                                alt="">
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
                    <svg class="w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
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
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small.jpeg"
                            alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <picture class="avatar-group-img">
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg"
                            alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <picture class="avatar-group-img">
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg"
                            alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <picture class="avatar-group-img">
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                            alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <span class="small fw-bolder ms-2 text-muted opacity-90">+ 12 others</span>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon p-0" type="button"
                            id="dropdownTop" data-bs-toggle="dropdown" aria-expanded="false">
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
                                  <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                                  alt="HTML Bootstrap Admin Template by Pixel Rocket">
                              </picture>
                              <span class="avatar-dot bg-success"></span>
                          </div>
                          <div class="d-flex justify-content-start flex-column align-items-start col">
                              <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">Patrick Johnson</span> &middot; 2 mins ago</small>
                              <div class="bg-light p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-e-4">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              </div>
                          </div>
                      </div>          <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                          <div class="d-flex justify-content-end flex-column align-items-end col">
                              <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">You</span> &middot; 5 mins ago</small>
                              <div class="bg-primary text-white p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-s-4">
                                  Maecenas aliquet eu felis vel.
                              </div>
                          </div>
                          <div class="avatar avatar-xs ms-3 flex-shrink-0">
                              <picture>
                                  <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg"
                                  alt="HTML Bootstrap Admin Template by Pixel Rocket">
                              </picture>
                              <span class="avatar-dot bg-success"></span>
                          </div>
                      </div>          <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                          <div class="avatar avatar-xs me-3 flex-shrink-0">
                              <picture>
                                  <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                                  alt="HTML Bootstrap Admin Template by Pixel Rocket">
                              </picture>
                              <span class="avatar-dot bg-success"></span>
                          </div>
                          <div class="d-flex justify-content-start flex-column align-items-start col">
                              <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">Patrick Johnson</span> &middot; 25 mins ago</small>
                              <div class="bg-light p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-e-4">
                                  Cras sit amet gravida augue.
                              </div>
                          </div>
                      </div>          <!-- / Messages-->
                    </div>
                  </div>
                  <div class="border-top p-4 mx-n3">
                    <div class="d-flex flex-column align-items-end">
                      <input type="text" class="form-control d-flex w-100 bg-light border-0 text-muted mb-3" placeholder="Add new message...">
                      <div class="d-flex justify-content-between w-100 align-items-center">
                        <i class="ri-attachment-line text-muted ri-lg"></i>
                        <button class="btn btn-sm btn-primary">Send</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>            <!-- / Footer-->

        </section>
        <!-- / Content-->

    </main>
    <!-- /Page Content -->

    <!-- Page Aside-->
    <aside class="aside bg-white">
    
        <div class="simplebar-wrapper">
            <div data-pixr-simplebar>
                <div class="pb-6">
                    <!-- Mobile Logo-->
                    <div class="d-flex d-xl-none justify-content-between align-items-center border-bottom aside-header">
                        <a class="navbar-brand lh-1 border-0 m-0 d-flex align-items-center" href="./index.html">
                            <div class="d-flex align-items-center">
                                <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg>
                                <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Apollo</span>
                            </div>                    </a>
                        <i
                            class="ri-close-circle-line ri-lg close-menu text-muted transition-all text-primary-hover me-4 cursor-pointer"></i>
                    </div>
                    <!-- / Mobile Logo-->
    
                    <ul class="list-unstyled mb-6">
    
                        <!-- Dashboard Menu Section-->
                        <li class="menu-section mt-2">Menu</li>
                        <li class="menu-item"><a class="d-flex align-items-center" href="./index.html">
                                <span class="menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="w-100">
                                        <rect fill-opacity=".5" fill="currentColor" x="3" y="3" width="7" height="7"></rect>
                                        <rect fill="currentColor" x="14" y="3" width="7" height="7"></rect>
                                        <rect fill-opacity=".5" fill="currentColor" x="14" y="14" width="7" height="7">
                                        </rect>
                                        <rect fill="currentColor" x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                </span>
                                <span class="menu-link">
                                    Dashboard
                                    <span class="badge bg-success-faded text-success pb-1 ms-2 align-middle rounded-pill">beta</span>
                                </span></a></li>
                        <!-- / Dashboard Menu Section-->
    
                        <!-- Dashboard Menu Section-->
                        <li class="menu-section mt-4">Data</li>
                        <li class="menu-item"><a class="d-flex align-items-center" href="./charts.html">
                                <span class="menu-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 489.902 489.902" style="enable-background:new 0 0 489.902 489.902;">
                                       <path fill="currentColor" opacity="0.5" d="M349.2,178.251l113.6-45.9c-37.7-72.7-110.1-124-195.6-131.8v122.5C301.8,129.651,330.9,149.851,349.2,178.251z"/>
                                       <path fill="currentColor" opacity="0.75" d="M121.3,244.751c0-60.7,43.6-110.8,101.1-121.3V0.551C98,11.851,0,116.851,0,244.751c0,54.8,17.9,105.4,48.2,146.2
                                           l91.4-81.7C128.3,290.251,121.3,268.051,121.3,244.751z"/>
                                       <path fill="currentColor" d="M479.5,173.551l-113.6,45.9c1.6,8.2,2.7,16.3,2.7,24.9c0,68.1-55.2,123.7-123.7,123.7c-28.4,0-54.8-9.7-75.4-26.1
                                           l-91.4,81.7c43.9,40.8,102.3,65.7,166.8,65.7c135.3,0,245-109.7,245-245C490,219.851,486.1,196.151,479.5,173.551z"/>
                               
                               </svg>
                                </span>
                                <span class="menu-link">
                                    Charts
                                    <span class="badge bg-danger-faded text-danger pb-1 ms-2 align-middle rounded-pill">new</span>
                                </span></a></li>
                        <!-- / Dashboard Menu Section-->
    
                        <!-- Pages Menu Section-->
                        <li class="menu-section mt-4">Pages</li>
                        <li class="menu-item"><a class="d-flex align-items-center collapsed" href="#"
                                data-bs-toggle="collapse" data-bs-target="#collapseMenuItemPages" aria-expanded="false"
                                aria-controls="collapseMenuItemPages">
                                <span class="menu-icon">
                                    <svg enable-background="new 0 0 520 520" viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg"><g><path fill="currentColor" d="m481.734 100.063h-158.331l-43.111-70.397c-2.727-4.452-7.571-7.166-12.792-7.166h-119.235c-21.099 0-38.265 17.166-38.265 38.266v65.51 229.184c0 21.1 17.166 38.266 38.265 38.266h261.735 71.734c21.1 0 38.266-17.166 38.266-38.266v-217.13c0-21.101-17.166-38.267-38.266-38.267z"/><path fill="currentColor" opacity=".5" d="m80 355.459v-229.184h-41.734c-21.1 0-38.266 17.166-38.266 38.266v294.693c0 21.1 17.166 38.266 38.266 38.266h333.469c21.1 0 38.266-17.166 38.266-38.266v-35.51h-261.736c-37.641.001-68.265-30.623-68.265-68.265z"/></g></svg>
                                </span>
                                <span
                                    class="menu-link">Pages</span></a>
                            <div class="collapse" id="collapseMenuItemPages">
                                <ul class="submenu">
                                    <li><a href="./charts.html">Charts</a></li>
                                    <li><a href="./user-listing.html">User Listing</a></li>
                                    <li><a href="./login.html">Login</a></li>
                                    <li><a href="./register.html">Register</a></li>
                                    <li><a href="./forgot-password.html">Forgot Password</a></li>
                                    <li><a href="./404.html">404 Page</a></li>
                                    <li><a href="./blank.html">Blank Page</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- / Pages Menu Section-->
    
                        <!-- Pages Menu Section-->
                        <li class="menu-section mt-4">User Management</li>
                        <li class="menu-item"><a class="d-flex align-items-center collapsed" href="#"
                                data-bs-toggle="collapse" data-bs-target="#collapseMenuItemUsers" aria-expanded="false"
                                aria-controls="collapseMenuItemUsers">
                                <span class="menu-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                       <path fill="currentColor" opacity=".5" d="M155.327,57.142c-51.531,0-93.454,44.45-93.454,99.086c0,54.636,41.923,99.086,93.454,99.086s93.455-44.45,93.455-99.086
                                           C248.782,101.592,206.859,57.142,155.327,57.142z"/>
                               
                                       <path fill="currentColor" d="M367.798,71.321c-0.211,0-0.425,0.001-0.636,0.002c-21.626,0.179-41.826,9.31-56.878,25.713
                                           c-14.788,16.113-22.829,37.37-22.644,59.854c0.186,22.484,8.577,43.605,23.628,59.473c15.17,15.991,35.265,24.773,56.651,24.773
                                           c0.215,0,0.43-0.001,0.646-0.002c21.626-0.179,41.826-9.311,56.878-25.713c14.788-16.113,22.829-37.37,22.644-59.855
                                           C447.702,108.972,411.747,71.321,367.798,71.321z"/>
                               
                                       <path fill="currentColor" d="M371.74,257.358h-7.76c-36.14,0-69.12,13.74-94.02,36.26c6.23,4.78,12.16,9.99,17.78,15.61
                                           c16.58,16.58,29.6,35.9,38.7,57.42c8.2,19.38,12.88,39.8,13.97,60.83H512v-29.87C512,320.278,449.08,257.358,371.74,257.358z"/>
                               
                                       <path fill="currentColor" opacity=".5" d="M310.35,427.478c-2.83-45.59-25.94-85.69-60.43-111.39c-25.09-18.7-56.21-29.77-89.92-29.77h-9.34
                                           C67.45,286.319,0,353.768,0,436.978v17.88h310.65v-17.88C310.65,433.788,310.55,430.618,310.35,427.478z"/>
                               
                               </svg>
                                </span>
                                <span
                                    class="menu-link">Users</span></a>
                            <div class="collapse" id="collapseMenuItemUsers">
                                <ul class="submenu">
                                    <li><a href="./user-listing.html">User Listing</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- / Pages Menu Section-->
    
                        <!-- UI Kit Menu Section-->
                        <li class="menu-section mt-4">UI Kit</li>
                        <li class="menu-item"><a class="d-flex align-items-center collapsed" href="#"
                                data-bs-toggle="collapse" data-bs-target="#collapseMenuItemUI" aria-expanded="false"
                                aria-controls="collapseMenuItemUI">
                                <span class="menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                                        <path opacity="0.5" d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                                      <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                                      </svg>
                                </span>
                                <span class="menu-link">Components</span></a>
                            <div class="collapse" id="collapseMenuItemUI">
                                <ul class="submenu">
                                    <li><a href="./accordion.html">Accordion</a></li>
                                    <li><a href="./alert.html">Alert</a></li>
                                    <li><a href="./badge.html">Badge</a></li>
                                    <li><a href="./button.html">Button</a></li>
                                    <li><a href="./card.html">Card</a></li>
                                    <li><a href="./collapse.html">Collapse</a></li>
                                    <li><a href="./dropdown.html">Dropdown</a></li>
                                    <li><a href="./forms.html">Forms</a></li>
                                    <li><a href="./modal.html">Modal</a></li>
                                    <li><a href="./offcanvas.html">Offcanvas</a></li>
                                    <li><a href="./pagination.html">Pagination</a></li>
                                    <li><a href="./popover.html">Popovers</a></li>
                                    <li><a href="./progress.html">Progress</a></li>
                                    <li><a href="./tooltip.html">Tooltips</a></li>
                                    <li><a href="./tables.html">Tables</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- / UI Kit Menu Section-->
    
                    </ul>
                </div>
            </div>
        </div>
    
    </aside>    <!-- / Page Aside-->

    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>