<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Monitoring Skripsi - SI UMK</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url()?>vendor/landing/assets/favicon.png" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?=base_url()?>vendor/landing/vendors/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>vendor/landing/vendors/swiper/swiper-bundle.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?=base_url()?>vendor/landing/dist/css/style.css" />
</head>

<body class="page__homepage">
    <div class="container">

    <nav class="navbar navbar-expand-xl bg-ghost-white">
        <div class="container-xxl justify-content-md-start">
            <a class="navbar-brand" href="#">
                <img src="<?=base_url()?>vendor/collections/icon.png" alt="" class="w-75" />
            </a>
            <!-- /.navbar-brand -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="<?=base_url()?>vendor/landing/assets/icons/bars.svg" class="svg-inject svg-icon" alt="" />
            </button>
            <!-- /.navbar-toggler-mobile -->

            <div class="d-none d-md-flex d-xl-none ms-auto">
                <a class="btn btn-alice-blue text-dark fw-semiBold py-12 px-34 me-12 rounded-pill"
                    href="/<?=base_url()?>login" role="button">Log In</a>
                <a class="btn btn-primary fw-semiBold py-12 px-43 rounded-pill" href="<?=base_url()?>register"
                    role="button">Sign Up</a>
            </div>
            <!-- /.btn-login and btn-signup mobile -->

            <div class="collapse navbar-collapse" id="navbarContent">
                <div class="d-grid d-xl-flex align-items-xl-center pb-15 pb-xl-0 w-100 gap-20 gap-xl-0">
                    <ul class="navbar-nav mx-xl-auto order-2 order-xl-1">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#pricing-section">Informasi Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/eventlist.html">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/joblist.html">Persyaratan</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <!-- 
						<form class="order-1 order-xl-2" role="search" action="#" method="get">
							<div class="form-search">
								<input class="form-control" type="search" placeholder="Search here..." aria-label="Search" />
							</div>
						</form> -->
                    <!-- /.form-search -->

                    <div class="d-grid d-md-none d-xl-flex gap-15 gap-xl-0 order-3">
                        <a class="btn btn-alice-blue text-dark fw-semiBold py-12 px-xl-34 ms-xl-12 rounded-pill"
                            href="<?=base_url()?>login" role="button">Log In</a>
                        <a class="btn btn-primary fw-semiBold py-12 px-xl-43 ms-xl-12 rounded-pill"
                            href="<?=base_url()?>register" role="button">Sign Up</a>
                    </div>
                    <!-- /.btn-login and btn-sign-up desktop -->
                </div>
            </div>
        </div>
    </nav>
    <!-- = /. Navbar Section = -->

    <main class="main">
        <div class="bg-ghost-white">
            <div class="container-xxl">
                <div class="row">
                    <div
                        class="col-12 col-lg-6 col-xl-5 d-flex align-items-center my-34 my-lg-60 my-xl-120 order-2 order-lg-1">
                        <div class="swiper header-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h1 class="heading-header-1 mb-0">Kejar <span class="text-primary">Mimpimu,</span>
                                        jangan pernah pantang menyerah</h1>
                                    <div class="heading-text-2">Maksimalkan yang kamu bisa, raih masa depanmu sekarang.
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <h1 class="heading-header-1">Flexible <span class="text-primary">job</span> with
                                        reasonable payment</h1>
                                    <div class="heading-text-2">Make your website more attractive and marketable to
                                        attract more audiences, freelancers, and employers</div>
                                </div>
                            </div>
                            <!-- /.header-slider-content -->

                            <div class="d-flex flex-wrap align-items-center mt-60 gap-20">
                                <a class="btn btn-primary fw-semiBold py-12 px-34 rounded-pill" href="/joblist.html"
                                    role="button">Discover Now</a>
                                <a class="d-flex align-items-center fw-medium text-dark text-decoration-none"
                                    data-fslightbox="gallery" href="https://www.youtube.com/embed/pj5LRL3nwBg">
                                    <div href="#" class="btn btn-rounded btn-white border border-alice-blue">
                                        <img src="<?=base_url()?>vendor/landing/assets/icons/play-stroke.svg"
                                            class="svg-inject svg-icon text-primary is-20" alt="" />
                                    </div>
                                    <span class="ms-20">Watch video</span>
                                </a>
                            </div>
                            <!-- /.btn-discover-now and watch-video -->

                            <div class="pagination-slider pagination-line header-slider-pagination mt-60"></div>
                            <!-- /.header-slider-pagination -->
                        </div>
                        <!-- /.header-slider -->
                    </div>
                    <!-- /.col -->

                    <div class="col-12 col-lg-6 col-xl-7 order-1 order-lg-2">
                        <div class="position-relative h-lg-100">
                            <img src="<?=base_url()?>vendor/collections/grow.png" class="hero-image-img" alt="" />
                            <!-- /. hero-image -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- = /. Header Section = -->

        <!-- <div class="container py-60 py-lg-100">
            <div class="swiper image-slider client-logo-slider mx-xl-34 mx-xxl-80">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?=base_url()?>vendor/landing/assets/client-logo-image.png" alt="" />
                    </div>

                    <div class="swiper-slide">
                        <img src="<?=base_url()?>vendor/landing/assets/client-logo-image.png" alt="" />
                    </div>

                    <div class="swiper-slide">
                        <img src="<?=base_url()?>vendor/landing/assets/client-logo-image.png" alt="" />
                    </div>

                    <div class="swiper-slide">
                        <img src="<?=base_url()?>vendor/landing/assets/client-logo-image.png" alt="" />
                    </div>

                    <div class="swiper-slide">
                        <img src="<?=base_url()?>vendor/landing/assets/client-logo-image.png" alt="" />
                    </div>
                </div>
            </div>
        </div> -->
        <!-- = /. Logo Client Section = -->

        <div class="mt-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60 overflow-hidden overflow-xxl-visible">
            <div class="row">
                <div class="col-12 col-lg-6 col-xxl-5 order-2 order-lg-1">
                    <div class="d-grid gap-12 w-md-75 w-lg-100">
                        <div class="heading-text-1 text-primary">Alur Pendaftran</div>
                        <h2 class="heading-section-1 text-dark mb-0">Yuk simak alur pendafatarannya dimulai dari mana
                        </h2>
                    </div>
                    <!-- /.heading-section -->

                    <div class="accordion accordion-number mt-43" id="accordion-how-it-works">
                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="position-relative d-flex w-100">
                                    <div class="accordion-number bg-blue-violet bg-opacity-10 text-blue-violet">1</div>
                                    <div class="accordion-content">
                                        <h2 class="accordion-header" id="headingOne">Membuat Akun</h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordion-how-it-works">
                                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-arrow">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/chevron-down.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                            </button>
                        </div>
                        <!-- /.accordion-item -->

                        <div class="accordion-item">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <div class="position-relative d-flex w-100">
                                    <div class="accordion-number bg-persian-blue bg-opacity-10 text-persian-blue">2
                                    </div>
                                    <div class="accordion-content">
                                        <h2 class="accordion-header" id="headingTwo">Search Vacancies</h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordion-how-it-works">
                                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-arrow">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/chevron-down.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                            </button>
                        </div>
                        <!-- /.accordion-item -->

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <div class="position-relative d-flex w-100">
                                    <div class="accordion-number bg-ufo-green bg-opacity-10 text-ufo-green">3</div>
                                    <div class="accordion-content">
                                        <h2 class="accordion-header" id="headingThree">Apply Jobs</h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordion-how-it-works">
                                            <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-arrow">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/chevron-down.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                            </button>
                        </div>
                        <!-- /.accordion-item -->
                    </div>
                    <!-- /.accordion-number-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-lg-6 offset-xxl-1 d-flex align-items-end mb-34 mb-lg-0 order-1 order-lg-2">
                    <div class="position-relative">
                        <img src="<?=base_url()?>vendor/collections/image-1.png"
                            class="how-it-work-image-img rounded-40" alt="" />
                        <img src="<?=base_url()?>vendor/landing/assets/pages/index/how-it-work/figure-1.svg"
                            class="svg-inject position-absolute how-it-work-figure-1" alt="" />
                        <img src="<?=base_url()?>vendor/landing/assets/pages/index/how-it-work/figure-2.svg"
                            class="svg-inject position-absolute how-it-work-figure-2" alt="" />
                        <img src="<?=base_url()?>vendor/landing/assets/pages/index/how-it-work/figure-3.svg"
                            class="svg-inject position-absolute how-it-work-figure-3" alt="" />
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- = /. How It Work Section = -->

        <div class="mt-xl-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60">
            <div class="d-grid w-md-50 w-xl-34 mb-60 mx-auto gap-12">
                <h2 class="heading-section-3 text-dark text-center mb-0">Why Choose Us</h2>
                <div class="heading-text-2 lh-base text-dark text-center">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
            </div>
            <!-- /.heading-section -->

            <div class="row w-xl-85 mx-auto">
                <div class="col-12 col-md-6 col-lg-4 my-12">
                    <div class="card card-icon">
                        <div class="card-box-icon bg-outrageous-orange text-white">
                            <img src="<?=base_url()?>vendor/landing/assets/icons/compas.svg" class="svg-inject svg-icon"
                                alt="" />
                        </div>
                        <h5 class="card-title">Trusted</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- /.card-icon-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-6 col-lg-4 my-12">
                    <div class="card card-icon">
                        <div class="card-box-icon bg-medium-orchid text-white">
                            <img src="<?=base_url()?>vendor/landing/assets/icons/compas.svg" class="svg-inject svg-icon"
                                alt="" />
                        </div>
                        <h5 class="card-title">Easy to Use</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- /.card-icon-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-0 my-12">
                    <div class="card card-icon">
                        <div class="card-box-icon bg-picton-blue text-white">
                            <img src="<?=base_url()?>vendor/landing/assets/icons/compas.svg" class="svg-inject svg-icon"
                                alt="" />
                        </div>
                        <h5 class="card-title">Faster</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- /.card-icon-component -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- = /. Why Us Section = -->

        <div class="mt-xl-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="heading-section-4 text-dark mb-0">Featured profile this week</h4>
                </div>
                <!-- /.col -->

                <div class="col-4 text-end">
                    <span class="ms-auto">
                        <a class="text-primary fw-semiBold text-decoration-none" href="/freelancerlist.html">View
                            More</a>
                    </span>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- /.heading-section -->

            <div class="position-relative profile-card-slider mt-lg-25">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="profile-card-slide">
                                <div class="d-flex">
                                    <div class="profile-image">
                                        <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-83x83.png"
                                            alt="" />
                                        <div class="profile-online-status online"></div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="profile-name">
                                            <a href="/freelancerlist.html">David Hutapea</a>
                                        </h6>
                                        <div class="profile-work">
                                            <a href="#">UI/UX Designer</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-action">
                                    <div class="profile-rating">
                                        <div class="profile-rating-icon">
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon" alt="" />
                                        </div>
                                        <div class="profile-rating-number">4.3</div>
                                    </div>
                                    <span class="profile-price-badge">$84/hr</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="profile-card-slide">
                                <div class="d-flex">
                                    <div class="profile-image">
                                        <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-83x83.png"
                                            alt="avatar-2" />
                                        <div class="profile-online-status online"></div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="profile-name">
                                            <a href="/freelancerlist.html">Henry Simatupang</a>
                                        </h6>
                                        <div class="profile-work">
                                            <a href="#">Photogapher</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-action">
                                    <div class="profile-rating">
                                        <div class="profile-rating-icon">
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon" alt="" />
                                        </div>
                                        <div class="profile-rating-number">4.8</div>
                                    </div>
                                    <span class="profile-price-badge">$95/hr</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="profile-card-slide">
                                <div class="d-flex">
                                    <div class="profile-image">
                                        <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-83x83.png"
                                            alt="avatar-3" />
                                        <div class="profile-online-status"></div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="profile-name">
                                            <a href="/freelancerlist.html">Jennie Smith</a>
                                        </h6>
                                        <div class="profile-work">
                                            <a href="#">Content Writer</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-action">
                                    <div class="profile-rating">
                                        <div class="profile-rating-icon">
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon" alt="" />
                                        </div>
                                        <div class="profile-rating-number">4.6</div>
                                    </div>
                                    <span class="profile-price-badge">$86/hr</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="profile-card-slide">
                                <div class="d-flex">
                                    <div class="profile-image">
                                        <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-83x83.png"
                                            alt="avatar-4" />
                                        <div class="profile-online-status online"></div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="profile-name">
                                            <a href="/freelancerlist.html">Louis Anderson</a>
                                        </h6>
                                        <div class="profile-work">
                                            <a href="#">Customer Service</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-action">
                                    <div class="profile-rating">
                                        <div class="profile-rating-icon">
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon" alt="" />
                                        </div>
                                        <div class="profile-rating-number">4.3</div>
                                    </div>
                                    <span class="profile-price-badge">$27/hr</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile-card-button-next">
                    <img src="<?=base_url()?>vendor/landing/assets/icons//long-arrow-right.svg"
                        class="svg-inject svg-icon" alt="" />
                </div>
                <!-- /.profile-slider-btn-next -->

                <div class="profile-card-button-prev">
                    <img src="<?=base_url()?>vendor/landing/assets/icons//long-arrow-left.svg"
                        class="svg-inject svg-icon" alt="" />
                </div>
                <!-- /.profile-slider-btn-previous -->
            </div>
        </div>
        <!-- /.container -->
        <!-- = /. Featured Profile Slider Section = -->

        <div class="mt-xl-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60">
            <div class="d-grid gap-12 w-md-50 w-xl-34 mb-60 mx-auto">
                <h2 class="heading-section-3 text-dark text-center mb-0">Featured Jobs</h2>
                <div class="heading-text-2 lh-base text-dark text-center">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
            </div>
            <!-- /.heading-section -->

            <div class="row">
                <div class="col-12 col-md-4 col-xxl-3 my-12">
                    <div class="job-card-grid mx-xxl-15">
                        <div class="job-dropdown">
                            <button class="job-dropdown-btn" type="button" id="job-featured-dropdown"
                                data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/ellipsis.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="job-featured-dropdown">
                                <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                            </ul>
                        </div>
                        <div class="job-info">
                            <div class="job-image">
                                <img src="<?=base_url()?>vendor/landing/assets/job-logo-image-115x115.png" alt="" />
                            </div>
                            <h5 class="job-title">
                                <a href="/jobdetail.html">Database Programmer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Maximoz Team</a>
                            </div>
                        </div>
                        <ul class="job-detail">
                            <li class="job-detail-item">
                                <div class="job-detail-start">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/sack-dollar.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="job-detail-center">
                                    <div class="job-detail-text">$14,000 - $25,000</div>
                                </div>
                                <div class="job-detail-end">
                                    <div class="job-detail-text" href="#">/monthly</div>
                                </div>
                            </li>
                            <li class="job-detail-item">
                                <div class="job-detail-start">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/mark.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="job-detail-center">
                                    <div class="job-detail-text">London, England</div>
                                </div>
                                <div class="job-detail-end">
                                    <a class="job-detail-text" href="#">View Maps</a>
                                </div>
                            </li>
                        </ul>
                        <div class="job-action">
                            <button class="btn btn-rounded btn-book">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/heart.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </button>
                            <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="/jobdetail.html">Apply
                                Now</a>
                        </div>
                    </div>
                    <!-- /.job-card-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-4 col-xxl-3 my-12">
                    <div class="job-card-grid mx-xxl-15">
                        <div class="job-dropdown">
                            <button class="job-dropdown-btn" type="button" id="job-featured-dropdown"
                                data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/ellipsis.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="job-featured-dropdown">
                                <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                            </ul>
                        </div>
                        <div class="job-info">
                            <div class="job-image">
                                <img src="<?=base_url()?>vendor/landing/assets/job-logo-image-115x115.png" alt="" />
                            </div>
                            <h5 class="job-title">
                                <a href="/jobdetail.html">UI/UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Colo Colo Studios</a>
                            </div>
                        </div>
                        <ul class="job-detail">
                            <li class="job-detail-item">
                                <div class="job-detail-start">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/sack-dollar.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="job-detail-center">
                                    <div class="job-detail-text">$14,000 - $25,000</div>
                                </div>
                                <div class="job-detail-end">
                                    <div class="job-detail-text" href="#">/monthly</div>
                                </div>
                            </li>
                            <li class="job-detail-item">
                                <div class="job-detail-start">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/mark.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="job-detail-center">
                                    <div class="job-detail-text">London, England</div>
                                </div>
                                <div class="job-detail-end">
                                    <a class="job-detail-text" href="#">View Maps</a>
                                </div>
                            </li>
                        </ul>
                        <div class="job-action">
                            <button class="btn btn-rounded btn-book">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/heart.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </button>
                            <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="/jobdetail.html">Apply
                                Now</a>
                        </div>
                    </div>
                    <!-- /.job-card-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-4 col-xxl-3 my-12">
                    <div class="job-card-grid mx-xxl-15">
                        <div class="job-dropdown">
                            <button class="job-dropdown-btn" type="button" id="job-featured-dropdown"
                                data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/ellipsis.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="job-featured-dropdown">
                                <li><a class="dropdown-item" href="#">Drodpown 1</a></li>
                                <li><a class="dropdown-item" href="#">Drodpown 2</a></li>
                            </ul>
                        </div>
                        <div class="job-info">
                            <div class="job-image">
                                <img src="<?=base_url()?>vendor/landing/assets/job-logo-image-115x115.png" alt="" />
                            </div>
                            <h5 class="job-title">
                                <a href="/jobdetail.html">Content Writer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Faster WOY Crew</a>
                            </div>
                        </div>
                        <ul class="job-detail">
                            <li class="job-detail-item">
                                <div class="job-detail-start">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/sack-dollar.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="job-detail-center">
                                    <div class="job-detail-text">$14,000 - $25,000</div>
                                </div>
                                <div class="job-detail-end">
                                    <div class="job-detail-text" href="#">/monthly</div>
                                </div>
                            </li>
                            <li class="job-detail-item">
                                <div class="job-detail-start">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/mark.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="job-detail-center">
                                    <div class="job-detail-text">London, England</div>
                                </div>
                                <div class="job-detail-end">
                                    <a class="job-detail-text" href="#">View Maps</a>
                                </div>
                            </li>
                        </ul>
                        <div class="job-action">
                            <button class="btn btn-rounded btn-book">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/heart.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </button>
                            <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="/jobdetail.html">Apply
                                Now</a>
                        </div>
                    </div>
                    <!-- /.job-card-component -->
                </div>
                <!-- /.col -->

                <div class="d-none d-xxl-block col-xxl-3 my-12">
                    <div class="job-card-grid mx-xxl-15">
                        <div class="job-dropdown">
                            <button class="job-dropdown-btn" type="button" id="job-featured-dropdown"
                                data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/ellipsis.svg" class="svg-inject"
                                    alt="" />
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="job-featured-dropdown">
                                <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                            </ul>
                        </div>
                        <div class="job-info">
                            <div class="job-image">
                                <img src="<?=base_url()?>vendor/landing/assets/job-logo-image-115x115.png" alt="" />
                            </div>
                            <h5 class="job-title">
                                <a href="/jobdetail.html">Database Programmer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Snailination Studios</a>
                            </div>
                        </div>
                        <ul class="job-detail">
                            <li class="job-detail-item">
                                <div class="job-detail-start">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/sack-dollar.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="job-detail-center">
                                    <div class="job-detail-text">$14,000 - $25,000</div>
                                </div>
                                <div class="job-detail-end">
                                    <div class="job-detail-text" href="#">/monthly</div>
                                </div>
                            </li>
                            <li class="job-detail-item">
                                <div class="job-detail-start">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/mark.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="job-detail-center">
                                    <div class="job-detail-text">London, England</div>
                                </div>
                                <div class="job-detail-end">
                                    <a class="job-detail-text" href="#">View Maps</a>
                                </div>
                            </li>
                        </ul>
                        <div class="job-action">
                            <button class="btn btn-rounded btn-book">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/heart.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </button>
                            <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="/jobdetail.html">Apply
                                Now</a>
                        </div>
                    </div>
                    <!-- /.job-card-component -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="d-flex">
                <a class="btn btn-primary fw-semiBold py-12 px-43 mt-60 mx-auto rounded-pill" href="/jobdetail.html"
                    role="button">View more</a>
            </div>
            <!-- /.btn-more -->
        </div>
        <!-- /.container -->
        <!-- = /. Featured Jobs Section = -->

        <div class="mt-xl-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60">
            <div class="d-grid gap-12 w-md-50 w-xl-34 mb-80 mx-auto">
                <h2 class="heading-section-3 text-dark text-center mb-0">What our Customer Says</h2>
                <div class="heading-text-2 lh-base text-dark text-center">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
            </div>
            <!-- /.heading-section -->

            <div class="testimonial-slider w-xl-85 mx-auto">
                <div class="testimonial-slider-image">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-300x300.png"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-300x300.png"
                                    alt="" />
                            </div>
                        </div>
                    </div>

                    <img src="<?=base_url()?>vendor/landing/assets/pages/index/testimonial/figure-1.svg"
                        class="svg-inject position-absolute testimonial-figure-1 text-dark z-index-1" alt="" />

                    <img src="<?=base_url()?>vendor/landing/assets/pages/index/testimonial/figure-2.svg"
                        class="svg-inject position-absolute testimonial-figure-2 text-primary z-index-1" alt="" />
                </div>

                <div class="swiper testimonial-slider-content">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-content-item">
                                <div class="testimonial-header">
                                    <div class="testimonial-info">
                                        <h5 class="testimonial-name">William Smith</h5>
                                        <div class="testimonial-desc">CEO of True Love Studios</div>
                                    </div>
                                    <div class="testimonial-rating">
                                        <div class="testimonial-rating-icon">
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon" alt="" />
                                        </div>
                                        <div class="testimonial-rating-number">4.8</div>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <p class="testimonial-says">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                        porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-content-item">
                                <div class="testimonial-header">
                                    <div class="testimonial-info">
                                        <h5 class="testimonial-name">William Smith</h5>
                                        <div class="testimonial-desc">CEO of True Love Studios</div>
                                    </div>
                                    <div class="testimonial-rating">
                                        <div class="testimonial-rating-icon">
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon checked" alt="" />
                                            <img src="<?=base_url()?>vendor/landing/assets/icons/star.svg"
                                                class="svg-inject svg-icon" alt="" />
                                        </div>
                                        <div class="testimonial-rating-number">4.8</div>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <p class="testimonial-says">Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem accusantium</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-footer">
                        <div class="testimonial-nav">
                            <div class="testimonial-btn-prev">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/long-arrow-left.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </div>
                            <!-- /.testimonial-btn-previous -->

                            <div class="testimonial-btn-next">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/long-arrow-right.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </div>
                            <!-- /.testimonial-btn-next -->
                        </div>

                        <div class="avatar-group">
                            <div class="avatar" href="#">
                                <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-51x51.png" alt="" />
                            </div>
                            <div class="avatar" href="#">
                                <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-51x51.png" alt="" />
                            </div>
                            <div class="avatar" href="#">
                                <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-51x51.png" alt="" />
                            </div>
                            <div class="avatar" href="#">
                                <img src="<?=base_url()?>vendor/landing/assets/profile-avatar-image-51x51.png" alt="" />
                            </div>
                            <div class="avatar avatar-text bg-primary text-white" href="#">21k+</div>
                        </div>
                        <!-- /.avatar-group-component -->
                    </div>
                </div>
            </div>
            <!-- /.testimonial-slider-component -->
        </div>
        <!-- /.container -->
        <!-- = /. Testimonial Section = -->

        <div class="mt-xl-60"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60">
            <div class="counter">
                <div class="count-item">
                    <div class="count-number" data-count="36789">0</div>
                    <div class="count-title">Talented Freelancer</div>
                </div>
                <div class="count-item">
                    <div class="count-number" data-count="458973">0</div>
                    <div class="count-title">VIsitors</div>
                </div>
                <div class="count-item">
                    <div class="count-number" data-count="56461">0</div>
                    <div class="count-title">Contract Made</div>
                </div>
                <div class="count-item">
                    <div class="count-number" data-count="852000">0</div>
                    <div class="count-title">Companies</div>
                </div>
                <figure>
                    <img src="<?=base_url()?>vendor/landing/assets/pages/index/counter/figure-1.svg"
                        class="svg-inject position-absolute figure-1 text-ocean-blue text-opacity-33" alt="" />

                    <img src="<?=base_url()?>vendor/landing/assets/pages/index/counter/figure-2.svg"
                        class="svg-inject position-absolute figure-2 text-majorelle-blue-200" alt="" />

                    <img src="<?=base_url()?>vendor/landing/assets/pages/index/counter/figure-3.svg"
                        class="svg-inject position-absolute figure-3 text-ocean-blue" alt="" />

                    <img src="<?=base_url()?>vendor/landing/assets/pages/index/counter/figure-4.svg"
                        class="svg-inject position-absolute figure-4 text-white" alt="" />

                    <img src="<?=base_url()?>vendor/landing/assets/pages/index/counter/figure-5.svg"
                        class="svg-inject position-absolute figure-5 text-majorelle-blue-200" alt="" />

                    <img src="<?=base_url()?>vendor/landing/assets/pages/index/counter/figure-6.svg"
                        class="svg-inject position-absolute figure-6 text-white text-opacity-17" alt="" />
                </figure>
            </div>
            <!-- /.counter-component -->
        </div>
        <!-- /.container -->
        <!-- = /. Counter Section = -->

        <div class="mt-xl-60"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60">
            <div class="d-grid gap-12 w-md-50 w-xl-34 mb-60 mx-auto">
                <h2 class="heading-section-3 text-dark text-center mb-0">Pricing Plan</h2>
                <div class="heading-text-2 lh-base text-dark text-center">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
            </div>
            <!-- /.heading-section -->

            <div class="row w-xl-90 w-xxl-75 mx-auto">
                <div class="col-12 col-md-6 col-xl-4 my-12">
                    <div class="pricing-card">
                        <h4 class="pricing-title">Free</h4>
                        <div class="pricing-price">
                            <div class="pricing-price-inner">
                                <span class="pricing-price-currency">$</span>
                                0
                            </div>
                            <div class="pricing-price-period">per month</div>
                        </div>
                        <ul class="pricing-detail">
                            <li class="pricing-detail-item">
                                <div class="pricing-detail-icon">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/check-circle.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="pricing-detail-text">Lorem ipsum dolor sit ame</div>
                            </li>
                            <li class="pricing-detail-item">
                                <div class="pricing-detail-icon">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/check-circle.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="pricing-detail-text">Consectetur adipiscing elit, sed Do</div>
                            </li>
                            <li class="pricing-detail-item">
                                <div class="pricing-detail-icon">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/check-circle.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="pricing-detail-text">eiusmod tempor incididunt</div>
                            </li>
                        </ul>
                        <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="/applicationform.html">Learn
                            More</a>
                    </div>
                    <!-- /.pricing-card-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-6 col-xl-4 my-12">
                    <div class="pricing-card">
                        <h4 class="pricing-title">Premium</h4>
                        <div class="pricing-price">
                            <div class="pricing-price-inner">
                                <span class="pricing-price-currency">$</span>
                                175
                            </div>
                            <div class="pricing-price-period">per month</div>
                        </div>
                        <ul class="pricing-detail">
                            <li class="pricing-detail-item">
                                <div class="pricing-detail-icon">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/check-circle.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="pricing-detail-text">Lorem ipsum dolor sit ame</div>
                            </li>
                            <li class="pricing-detail-item">
                                <div class="pricing-detail-icon">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/check-circle.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="pricing-detail-text">Consectetur adipiscing elit, sed Do</div>
                            </li>
                            <li class="pricing-detail-item">
                                <div class="pricing-detail-icon">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/check-circle.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="pricing-detail-text">eiusmod tempor incididunt</div>
                            </li>
                        </ul>
                        <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="/applicationform.html">Learn
                            More</a>
                    </div>
                    <!-- /.pricing-card-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-6 offset-md-3 col-xl-4 offset-xl-0 my-12">
                    <div class="pricing-card">
                        <h4 class="pricing-title">Platinum</h4>
                        <div class="pricing-price">
                            <div class="pricing-price-inner">
                                <span class="pricing-price-currency">$</span>
                                500
                            </div>
                            <div class="pricing-price-period">per month</div>
                        </div>
                        <ul class="pricing-detail">
                            <li class="pricing-detail-item">
                                <div class="pricing-detail-icon">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/check-circle.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="pricing-detail-text">Lorem ipsum dolor sit ame</div>
                            </li>
                            <li class="pricing-detail-item">
                                <div class="pricing-detail-icon">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/check-circle.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="pricing-detail-text">Consectetur adipiscing elit, sed Do</div>
                            </li>
                            <li class="pricing-detail-item">
                                <div class="pricing-detail-icon">
                                    <img src="<?=base_url()?>vendor/landing/assets/icons/check-circle.svg"
                                        class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="pricing-detail-text">eiusmod tempor incididunt</div>
                            </li>
                        </ul>
                        <a class="btn btn-apply fw-semiBold py-12 px-43 rounded-pill" href="/applicationform.html">Learn
                            More</a>
                    </div>
                    <!-- /.pricing-card-component -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- = /. Pricing Plan Section = -->

        <div class="mt-xl-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60">
            <div class="d-grid d-lg-flex gap-34 gap-lg-0 align-items-lg-end mb-60">
                <div class="d-grid gap-12 w-lg-50 w-xl-40">
                    <h2 class="heading-section-3 text-dark mb-0">Latest News</h2>
                    <div class="heading-text-2 lh-base text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                </div>
                <!-- /.heading-section -->

                <div class="d-flex justify-content-end ms-auto">
                    <div class="pagination-slider pagination-line blog-slider-pagination"></div>
                </div>
                <!-- /.blog-pagination-slider -->
            </div>

            <div class="swiper blog-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide blog-item">
                        <div class="blog-item-inner">
                            <a class="blog-btn-categories" href="#">Peoples</a>
                            <div class="blog-thumb">
                                <div class="overlay"></div>
                                <img src="<?=base_url()?>vendor/landing/assets/blog-image-535x540.png" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="blog-meta-link author" href="#">James</a>
                                    <a class="blog-meta-link last-read" href="#">24min read</a>
                                </div>
                                <h2 class="blog-title">
                                    <a href="/eventlist.html">A Media Critic Focuses on the Crisis in Local News</a>
                                </h2>
                                <div class="blog-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide blog-item">
                        <div class="blog-item-inner">
                            <a class="blog-btn-categories" href="#">Technology</a>
                            <div class="blog-thumb">
                                <div class="overlay"></div>
                                <img src="<?=base_url()?>vendor/landing/assets/blog-image-1020x450.png" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="blog-meta-link author" href="#">James</a>
                                    <a class="blog-meta-link last-read" href="#">24min read</a>
                                </div>
                                <h2 class="blog-title">
                                    <a href="/eventlist.html">Let's increase your skills in pandemic with Ziro Workshops
                                        2020</a>
                                </h2>
                                <div class="blog-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide blog-item">
                        <div class="blog-item-inner">
                            <a class="blog-btn-categories" href="#">Peoples</a>
                            <div class="blog-thumb">
                                <div class="overlay"></div>
                                <img src="<?=base_url()?>vendor/landing/assets/blog-image-535x540.png" alt="thumb-1" />
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="blog-meta-link author" href="#">James</a>
                                    <a class="blog-meta-link last-read" href="#">24min read</a>
                                </div>
                                <h2 class="blog-title">
                                    <a href="/eventlist.html">A Media Critic Focuses on the Crisis in Local News</a>
                                </h2>
                                <div class="blog-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.blog-slider-component -->
            </div>
        </div>
        <!-- = /. Blog Slider Section = -->

        <div class="mt-xl-43"></div>
        <!-- = /. Gap Section = -->
    </main>
    <!-- = /. Main Section = -->

    <footer class="footer bg-black">
        <div class="container-xxl">
            <div class="row py-25 py-lg-43 py-xl-80 align-items-md-center">
                <div class="col-12 col-md-6">
                    <h2 class="heading-section-2 text-white mb-0">Don't miss our weekly updates about freelancer career
                    </h2>
                    <!-- /.newsletter-heading -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-6 col-lg-5 offset-lg-1 mt-25 mt-md-0">
                    <form class="ms-auto" action="#">
                        <div class="form-btn-inner form-newsletter rounded-pill">
                            <input class="form-control" type="email" placeholder="Enter your email address..." />
                            <button
                                class="btn btn-accent text-white text-uppercase fw-semiBold py-12 px-20 px-lg-34 shadow-none"
                                type="submit">Subscribe</button>
                        </div>
                    </form>
                    <!-- /.newsletter-form -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row py-20 py-xl-80">
                <div class="col-12 col-xl-4 footer-widget about">
                    <div class="footer-brand">
                        <img src="<?=base_url()?>vendor/landing/assets/logo-footer.svg" alt="logo" />
                    </div>
                    <p class="footer-description mt-34">Ziro is a Freelance Landing Website lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud</p>
                    <ul class="social-btn-group mt-34">
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/facebook-f.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/twitter.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/youtube.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/linkedin.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="<?=base_url()?>vendor/landing/assets/icons/instagram.svg"
                                    class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                    </ul>
                    <!-- /.social-btn-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-lg-4 col-xl footer-widget link-list mt-34 mt-xl-0">
                    <h6 class="footer-title">Ziro</h6>
                    <ul class="footer-link-list">
                        <li class="link-item">
                            <a class="link" href="#">Why Ziro</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Enterprise</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Customer Story</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Security</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->

                <div class="col-12 col-lg-4 col-xl footer-widget link-list mt-34 mt-xl-0">
                    <h6 class="footer-title">Resources</h6>
                    <ul class="footer-link-list">
                        <li class="link-item">
                            <a class="link" href="#">Download</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Help Center</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Events</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Guides</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Partner</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Directories</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->

                <div class="col-12 col-lg-4 col-xl footer-widget link-list mt-34 mt-xl-0">
                    <h6 class="footer-title">Company</h6>
                    <ul class="footer-link-list">
                        <li class="link-item">
                            <a class="link" href="#">About us</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Contact us</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Products</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Login</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Sign Up</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->

                <div class="col-12 col-xl-3 footer-widget link-list _icon mt-34 mt-xl-0">
                    <h6 class="footer-title">Get in Touch with Us</h6>
                    <ul class="footer-link-list _icon">
                        <li class="link-item">
                            <img src="<?=base_url()?>vendor/landing/assets/icons/mark-stroke.svg"
                                class="svg-inject svg-icon" alt="" />
                            <a class="link" href="#">
                                <span>832 Thompson Drive, San Fransisco CA 94107, United States</span>
                            </a>
                        </li>
                        <li class="link-item">
                            <img src="<?=base_url()?>vendor/landing/assets/icons/phone-stroke.svg"
                                class="svg-inject svg-icon" alt="" />
                            <a class="link" href="#">
                                <span>+123 345123 556</span>
                            </a>
                        </li>
                        <li class="link-item">
                            <img src="<?=base_url()?>vendor/landing/assets/icons/envelope-stroke.svg"
                                class="svg-inject svg-icon" alt="" />
                            <a class="link" href="#">
                                <span>support@ziro.id</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <div class="border border-arsenic border-end-0 border-bottom-0 border-start-0">
            <div class="container-xxl d-grid d-lg-flex gap-12 gap-xl-0 justify-content-lg-between py-25">
                <div class="fs-14 text-white text-center">Ziro Freelancer Landing Website - © 2020 All Rights Reserved
                </div>

                <div class="fs-14 text-white text-center">Made with ♥ by Peterdraw</div>
            </div>
        </div>
    </footer>
    <!-- = /. Footer Section = -->
        
    </div>
    
    <!-- Bootstrap JS -->
    <script src="<?=base_url()?>vendor/landing/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="<?=base_url()?>vendor/landing/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?=base_url()?>vendor/landing/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?=base_url()?>vendor/landing/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="<?=base_url()?>vendor/landing/vendors/fslightbox/fslightbox.js"></script>
    <script src="<?=base_url()?>vendor/landing/vendors/svg-inject/dist/svg-inject.min.js"></script>

    <!-- Template Function -->
    <script src="<?=base_url()?>vendor/landing/dist/js/theme.js"></script>
</body>

</html>