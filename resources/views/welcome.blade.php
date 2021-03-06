<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Home | Penjualan Motor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('homepage') }}/images/favicon.ico">

    <!-- Bootstrap css-->
    <link href="{{ asset('homepage') }}/css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <!-- Icon-->
    <link href="{{ asset('homepage') }}/css/materialdesignicons.min.css" type="text/css" rel="stylesheet">

    <link href="{{ asset('homepage') }}/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />

    <!-- tiny slider -->
    <link href="{{ asset('homepage') }}/css/tiny-slider.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="{{ asset('homepage') }}/css/style.css" rel="stylesheet" type="text/css">

    <!-- colors -->
    <link href="{{ asset('homepage') }}/css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />


</head>

<body>


    <!-- START  NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-light" id="navbar">
        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index-1.html">
                <img src="images/logo-light.png" class="logo-light" alt="" height="28">
                <img src="images/logo-dark.png" class="logo-dark" alt="" height="28">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#client">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- start section -->
    <section class="header ">
        <div class="position-relative bg-primary">
            <div class="bg-overlay"></div>
            <div class=" position-relative " id="home">
                <div class="home section active pb-0 slidero overflow-hidden">
                    <div class="container">
                        <div class="row  justify-content-center banner-text-box">

                            <div class="col-lg-10 text-center">
                                <div class="home-content text-white text-center">
                                    <h4 class="home-title">Web Penjualan Motor
                                    </h4>
                                    <p class="text-white-50 fs-18 mt-4"> Dapibus velit tortor quis mauris Nullam id
                                        consectetur
                                        Fusce dictum mauris <br> nenibh
                                        malesuada ullamcorper curabitur sed lobortis tortor </p>
                                    <div class="pt-4 mt-1">
                                        <a href="#" class="btn btn-white me-3 ">Get Started <i
                                                class="mdi mdi-arrow-right ml-2"></i></a>
                                        <a href="#" class="btn btn-outline-white mt-md-0 mt-4">Watch Demo <i
                                                class="mdi mdi-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="header-dashboard">
                                    <img src="images/header-img.jpg" alt="" class="dashboard img-fluid">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                        <div class="modal-content hero-modal-0 bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <video id="VisaChipCardVideo" class="w-100" controls="">
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                <!--Browser does not support <video> tag -->
                            </video>
                        </div>
                    </div>
                </div>
                <canvas class="particles-js-canvas-el" width="1903" height="1121"
                    style="width: 100%; height: 100%; position: absolute; top: 0px;"></canvas>
            </div>
            <!-- end hero -->
        </div>
        <!-- end container -->
    </section>
    <!-- end section -->


    <!-- start section -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-title text-center pb-5">
                <h3 class="text-dark d-inline-block mb-0 ">Our Service</h3>
                <div class="d-flex heading position-relative justify-content-center align-items-center">
                    <i class="mdi mdi-rhombus-outline text-primary "></i>
                    <i class="mdi mdi-rhombus-outline text-primary"></i>
                </div>
                <p class="mb-0 text-muted mt-2 fs-17">We care to deliver and craft services and solutions to our
                    <br>
                    customers to
                    achieve and satisfy their needs.
                </p>
            </div>

            <div class="service">
                <div class="row py-5">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-3 justify-content-center align-items-center border-center "
                            id="pills-tab" role="tablist">
                            <li class="nav-item mx-0 mx-md-3 align-items-center active text-center" role="presentation">
                                <a href="#" class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-digital" role="tab" aria-selected="true">
                                    <span class="service-icon">
                                        <i class="mdi mdi-cube-outline"></i>
                                    </span>
                                    <p class="pt-4 fs-18 d-lg-block d-none">Boost performance</p>
                                </a>

                            </li>
                            <li class="nav-item mx-0 mx-md-3 text-center" role="presentation">
                                <a href="#" class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-marketing" role="tab" aria-selected="false">
                                    <span class="service-icon">
                                        <i class="mdi mdi-content-paste"></i>
                                    </span>
                                    <p class="pt-4 fs-18 d-lg-block d-none">Higly customizable</p>
                                </a>

                            </li>
                            <li class="nav-item mx-0 mx-md-3 text-center" role="presentation">
                                <a href="#" class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Design" role="tab" aria-selected="false">
                                    <span class="service-icon">
                                        <i class="mdi mdi-border-color"></i>
                                    </span>
                                    <p class="pt-4 fs-18 d-lg-block d-none">Simplified workflow</p>
                                </a>

                            </li>
                            <li class="nav-item mx-0 mx-md-3 text-center" role="presentation">
                                <a href="#" class="nav-link" id="pills-cross-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-devlopment" role="tab" aria-selected="false">

                                    <span class="service-icon">
                                        <i class="mdi mdi-desktop-mac"></i>
                                    </span>
                                    <p class="pt-4 fs-18 d-lg-block d-none">Cross platform</p>
                                </a>

                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-digital" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="row mt-5 align-items-center">
                                    <div class="col-lg-5">
                                        <img src="images/service/img-1.jpg" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">Is safe use Lorem Ipsum?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">Lorem Ipsum is not simply random?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">Lorem Ipsum is not simply random?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-marketing" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row mt-5 align-items-center">
                                    <div class="col-lg-5">
                                        <img src="images/service/img-2.jpg" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">How many variations exist?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">Lorem Ipsum is not simply?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Design" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="row mt-5 align-items-center">
                                    <div class="col-lg-5">
                                        <img src="images/service/img-2.jpg" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">How many variations exist?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">Lorem Ipsum is not simply?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">Lorem Ipsum is not simply random?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-devlopment" role="tabpanel"
                                aria-labelledby="pills-cross-tab">
                                <div class="row mt-5 align-items-center">
                                    <div class="col-lg-5">
                                        <img src="images/service/img-4.jpg" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">How many variations exist?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                        <div class="mt-4 d-flex">
                                            <div class="faq-icon me-4">
                                                <i class="mdi mdi-help-box text-primary h3"></i>
                                            </div>
                                            <div class="ml-5">
                                                <h5 class="f-18">Lorem Ipsum is not simply?</h5>
                                                <p class="faq-answer text-muted">Lorem Ipsum which looks reasonable
                                                    generated always therefore characteristic words etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section>
        <div class="container" id="features">
            <div class="section-title text-center pb-5">
                <h3 class="text-dark d-inline-block mb-0 ">Our Features</h3>
                <div class="d-flex heading position-relative justify-content-center align-items-center">
                    <i class="mdi mdi-rhombus-outline text-primary"></i>
                    <i class="mdi mdi-rhombus-outline text-primary"></i>
                </div>
                <p class="mb-0 text-muted mt-2 fs-17">We care to deliver and craft services and solutions to our
                    <br>
                    customers to
                    achieve and satisfy their needs.
                </p>
            </div>

            <div class="row align-items-center" id="counter">

                <div class="col-lg-6 col-md-7 mt-4 pt-2">
                    <div class="section-title ms-lg-5">
                        <div class="avatar bg-primary rounded-circle">
                            <i class="mdi mdi-account-outline fs-24 text-white"></i>
                        </div>
                        <h4 class="title mt-4 mb-2">Make Unlimited Accounts &amp; <br> Track Comments</h4>
                        <p class="text-muted">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout.</p>
                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 mt-4 pt-2">
                            <div class="social-media-feature rounded-md text-center shadow p-4">
                                <img src="images/features/f-1.png" class="img-fluid" alt="">
                                <div class="content mt-3">
                                    <h6 class="mb-2">Digital Design</h6>
                                    <small class="text-muted fs-14">Passage you need sure there anything
                                        embarrassing.</small>
                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-sm btn btn-sm btn-light">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-6 col-md-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-3 pt-2">
                                    <div class="social-media-feature rounded-md text-center shadow p-4">
                                        <img src="images/features/f-2.png" class="img-fluid" alt="">
                                        <div class="content mt-3">
                                            <h6 class="mb-2">Strategy Solutions</h6>
                                            <small class="text-muted fs-14">Vestibullum pretium conggue Morrfrbi quam
                                                commodo.</small>
                                            <div class="mt-3">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-sm btn btn-sm btn-light">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 col-md-12 mt-3 pt-2">
                                    <div class="social-media-feature rounded-md text-center shadow p-4">
                                        <img src="images/features/f-3.png" class="img-fluid" alt="">
                                        <div class="content mt-3">
                                            <h6 class="mb-2">UI/UX Design</h6>
                                            <small class="text-muted fs-14">Vestibullum pretium conggue Morrfrbi quam
                                                commodo</small>
                                            <div class="mt-3">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-sm btn btn-sm btn-light">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

            </div>

        </div>
    </section>
    <!-- end section -->


    <!-- strat section -->
    <section class="section pb-0">
        <div class="video-section bg-primary" style="background-image: url(images/home/video-overlay.png);">
            <div class="container">
                <div class="row py-120 pb-0">
                    <div class="col-12 text-center">
                        <h2 class="section-heading text-white mb-4">Get Started With Rozic</h2>
                        <p class="section-subheading text-white-50">It is a long established fact that a reader will be
                            distracted by the readable content of a page when <br> looking at its layout. The point of
                            using Lorem Ipsum is that it has <br> a more-or-less normal distribution of letters.</p>

                        <div class="video-preview video-container mt-5">
                            <img src="images/video.jpg" class="video-image img-fluid" alt="">

                            <div class="watch-video">
                                <a href="#" class="video-play-icon watch text-white" data-bs-toggle="modal"
                                    data-bs-target="#watchvideomodal">
                                    <i
                                        class="mdi mdi-play text-center d-inline-block ms-md-4 rounded-pill text-light bg-primary fs-30 avatar-lg me-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-light">
        <div class="container pt-120">
            <div class="pt-5 text-center">
                <h6 class="pt-5 fw-semibold">Brought To You By A Team From</h6>
                <div class="cta-slider text-center pt-5">
                    <div class="client-single ">
                        <a href="javascript:void(0)"><img src="images/cta-logo/img-1.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="client-single">
                        <a href="javascript:void(0)"><img src="images/cta-logo/img-2.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="client-single">
                        <a href="javascript:void(0)"><img src="images/cta-logo/img-3.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="client-single">
                        <a href="javascript:void(0)"><img src="images/cta-logo/img-4.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="client-single">
                        <a href="javascript:void(0)"><img src="images/cta-logo/img-5.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="client-single">
                        <a href="javascript:void(0)"><img src="images/cta-logo/img-6.png" alt="" class="img-fluid"></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section class="section bg-light" id="portfolio">
        <!-- <div class="bg-overlay"></div> -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center my-5 pb-5">
                        <h2 class="text-dark mb-2">See everything about your website</h2>
                        <p class="text-muted">making this the first true generator on the Internet. It uses a dictionary
                            of
                            over 200 Latin words, combined with a handful of model</p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center" dir="ltr">
                        <input class="knob fs-30" data-width="200" data-height="200" data-linecap=round
                            data-fgColor="#555ec9" value="45" data-skin="tron" data-angleOffset="180" data-readOnly=true
                            data-thickness=".03" />
                        <div class="chart-content d-flex justify-content-center mt-4 text-muted">
                            <i class="mdi mdi-cart fs-30 text-primary"></i>
                            <h5 class="service-heading mt-2 ms-2">Ecommerce Marketing</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center mt-5 mt-lg-0" dir="ltr">
                        <input class="knob fs-30" data-width="200" data-height="200" data-linecap=round
                            data-fgColor="#555ec9" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true
                            data-thickness=".03" />
                        <div class="chart-content d-flex justify-content-center mt-4 text-muted">
                            <i class="mdi mdi-chart-donut fs-30 text-primary"></i>
                            <h5 class="service-heading mt-2 ms-2">Target information</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center mt-5 mt-lg-0" dir="ltr">
                        <input class="knob fs-30" data-width="200" data-height="200" data-linecap=round
                            data-fgColor="#555ec9" value="65" data-skin="tron" data-angleOffset="180" data-readOnly=true
                            data-thickness=".03" />
                        <div class="chart-content d-flex justify-content-center mt-4 text-muted">
                            <i class="mdi mdi-wallet-travel fs-30 text-primary"></i>
                            <h5 class="service-heading mt-2 ms-2">Enterprise solutions</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- end section -->

    <!-- START PRICING -->
    <section class="section pt-5 pb-0" id="pricing">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Choose the plan that???s right for your business</h3>
                        <p class="title-desc text-muted mt-2 f-18">Welcomed and every pain avoided But in certain
                            circumstances and owing <br> to the claims of duty or the obligations of business. </p>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4">
                    <div class="pricing-box mt-4 shadow-sm">
                        <div class="pricing-icon text-center">
                            <i class="mdi mdi-chart-areaspline bg-soft-success text-primary"></i>
                        </div>
                        <div class="text-center mt-4 pt-3">
                            <h5 class="text-uppercase">Freelancer</h5>
                            <div class="pricing-plan mt-4 pt-2">
                                <h1><sup class="fw-normal">$ </sup>29<small class=" text-muted h4">/ month</small></h1>
                            </div>
                        </div>

                        <div class="pricing-features py-4">
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>10 Domains</p>
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>2 GB File Upload</p>
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>40 GB Secure Storage</p>
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>Unlimated Bandwidth</p>
                            <p class="text-muted"><i class="mdi mdi-check me-2"></i>24/7 Customer Support</p>
                        </div>
                        <div class="pt-2 text-center">
                            <a href="#" class="btn btn-outline-primary w-100">Start with Bugzy</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="pricing-box active mt-4">
                        <div class="pricing-icon text-center">
                            <i class="mdi mdi-responsive bg-primary text-white"></i>
                        </div>
                        <div class="text-center mt-4 pt-3">
                            <h5 class="text-uppercase">Startup</h5>
                            <div class="pricing-plan mt-4 pt-2">
                                <h1><sup class="fw-normal">$ </sup>39<small class="f-16 text-muted h4">/ month</small>
                                </h1>
                            </div>
                        </div>

                        <div class="pricing-features py-4">
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>10 Domains</p>
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>2 GB File Upload</p>
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>40 GB Secure Storage</p>
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>Unlimated Bandwidth</p>
                            <p class="text-muted"><i class="mdi mdi-check me-2"></i>24/7 Customer Support</p>
                        </div>
                        <div class="pt-2 text-center">
                            <a href="#" class="btn btn-primary w-100">Start with Bugzy</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="pricing-box mt-4 shadow-sm">
                        <div class="pricing-icon text-center">
                            <i class="mdi mdi-webpack bg-soft-info text-primary"></i>
                        </div>
                        <div class="text-center mt-4 pt-3">
                            <h5 class="text-uppercase">Enterprice</h5>
                            <div class="pricing-plan mt-4 pt-2">
                                <h1><sup class="fw-normal">$ </sup>79<small class="f-16 text-muted h4">/ month</small>
                                </h1>
                            </div>
                        </div>

                        <div class="pricing-features py-4">
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>10 Domains</p>
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>2 GB File Upload</p>
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>40 GB Secure Storage</p>
                            <p class="text-muted mb-3"><i class="mdi mdi-check me-2"></i>Unlimated Bandwidth</p>
                            <p class="text-muted"><i class="mdi mdi-check me-2"></i>24/7 Customer Support</p>
                        </div>
                        <div class="pt-2 text-center">
                            <a href="#" class="btn btn-outline-primary w-100">Start with Bugzy</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END Pricing -->


    <!-- start section -->
    <section class="section" id="client">
        <div class="testimonal">

            <div class="container">
                <div class="section-title text-center pb-5">
                    <h3 class="text-dark d-inline-block mb-0 ">Our Testimonial</h3>
                    <div class="d-flex heading position-relative justify-content-center align-items-center">
                        <i class="mdi mdi-rhombus-outline text-primary"></i>
                        <i class="mdi mdi-rhombus-outline text-primary"></i>
                    </div>
                    <p class="mb-0 text-muted mt-2 fs-17 ">We care to deliver and craft services and solutions to
                        our
                        <br>
                        customers to
                        achieve and satisfy their needs.
                    </p>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 p-5 order-1 order-lg-2">
                        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2" aria-current="true"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3" class=""></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4" class=""></button>
                            </div>
                            <div class="img-stand"></div>
                            <div class="carousel-inner carousel-bg shadow-sm p-5 position-relative bg-light">

                                <div class="carousel-item text-center active">
                                    <div class="client-image mx-auto px-4">
                                        <img src="images/testi/client-1.jpg" alt="client" class="img-fluid mx-auto">
                                    </div>
                                    <div class="carousel-contant">
                                        <h6 class="text-dark mt-3">Herman p. Semina</h6>
                                        <span class="text-muted">Management</span>
                                        <p class="text-muted mt-4">There are many variations of passages of
                                            Lorem Ipsum available, but the majority.</p>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <div class="client-image mx-auto px-4">
                                        <img src="images/testi/client-2.jpg" alt="client" class="img-fluid mx-auto">
                                    </div>
                                    <div class="carousel-contant">
                                        <h6 class="text-dark mt-3">Herman p. Semina</h6>
                                        <span class="text-muted">Management</span>
                                        <p class="text-muted mt-4">There are many variations of passages of
                                            Lorem Ipsum available, but the majority.</p>
                                    </div>

                                </div>
                                <div class="carousel-item text-center">
                                    <div class="client-image mx-auto px-4">
                                        <img src="images/testi/client-3.jpg" alt="client" class="img-fluid mx-auto">
                                    </div>
                                    <div class="carousel-contant">
                                        <h6 class="text-dark mt-3">Herman p. Semina</h6>
                                        <span class="text-muted">Management</span>
                                        <p class="text-muted mt-4">There are many variations of passages of
                                            Lorem Ipsum available, but the majority.</p>
                                    </div>

                                </div>
                                <div class="carousel-item text-center">
                                    <div class="client-image mx-auto px-4">
                                        <img src="images/testi/client-4.jpg" alt="client" class="img-fluid mx-auto">
                                    </div>
                                    <div class="carousel-contant">
                                        <h6 class="text-dark mt-3">Herman p. Semina</h6>
                                        <span class="text-muted">Management</span>
                                        <p class="text-muted mt-4">There are many variations of passages of
                                            Lorem Ipsum available, but the majority.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div class="testi-title">
                            <h3>What that say about us honest review</h3>
                            <span class="text-muted">Meet our Awesome Customer</span>
                        </div>
                        <div class="d-flex fs-18 mt-2 text-warning">
                            <div class="mdi mdi-star"></div>
                            <div class="mdi mdi-star"></div>
                            <div class="mdi mdi-star"></div>
                            <div class="mdi mdi-star"></div>
                            <div class="mdi mdi-star"></div>
                        </div>
                        <p class="text-muted mt-4">It is a long established fact that a reader will be
                            distracted by the readable content of a page when looking at its layout. The point
                            of using Lorem Ipsum is that it has a more-or-less normal making it look like
                            readable English.</p>
                        <div class="testi-icon fs-20 text-primary">
                            <i class="mdi mdi-facebook"></i>
                            <i class="mdi mdi-instagram ms-2"></i>
                            <i class="mdi mdi-twitter ms-2"></i>
                            <i class="mdi mdi-pinterest ms-2"></i>
                            <i class="mdi mdi-linkedin ms-2"></i>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- end section -->



    <!-- start section -->
    <section>
        <div class="container" id="team">
            <div class="team">
                <div class="section-title text-center pb-5">
                    <h3 class="text-dark d-inline-block mb-0 ">Our Team</h3>
                    <div class="d-flex heading position-relative justify-content-center align-items-center">
                        <i class="mdi mdi-rhombus-outline text-primary"></i>
                        <i class="mdi mdi-rhombus-outline text-primary"></i>
                    </div>
                    <p class="mb-0 text-muted mt-2 fs-17 ">We care to deliver and craft services and solutions to
                        our
                        <br>
                        customers to
                        achieve and satisfy their needs.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="team-box text-center mt-4">
                            <div class="team-img">
                                <img src="images/team/img-1.jpg" alt=""
                                    class="img-fluid rounded-circle border border-4">
                            </div>

                            <div class="team-content mt-4">
                                <div class="team-name">
                                    <h5 class="text-custom text-uppercase mb-1 f-14">Justin k. Hankins</h5>
                                    <p class="text-muted mt-2 mb-0">Developper</p>
                                    <div class="mt-4">
                                        <ul class="list-inline team-social">
                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-instagram"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="team-box text-center mt-4">
                            <div class="team-img">
                                <img src="images/team/img-2.jpg" alt=""
                                    class="img-fluid rounded-circle border border-4">
                            </div>

                            <div class="team-content mt-4">
                                <div class="team-name">
                                    <h5 class="text-custom text-uppercase mb-1 f-14">Mark p. Campbell</h5>
                                    <p class="text-muted mt-2 mb-0">Designer</p>
                                    <div class="mt-4">
                                        <ul class="list-inline team-social">
                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-instagram"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="team-box text-center mt-4">
                            <div class="team-img">
                                <img src="images/team/img-3.jpg" alt=""
                                    class="img-fluid rounded-circle border border-4">
                            </div>
                            <div class="team-content mt-4">
                                <div class="team-name">
                                    <h5 class="text-custom text-uppercase mb-1 f-14">Albert L. Clark</h5>
                                    <p class="text-muted mt-2 mb-0">Meneger</p>
                                    <div class="mt-4">
                                        <ul class="list-inline team-social">
                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-instagram"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="team-box text-center mt-4">
                            <div class="team-img">
                                <img src="images/team/img-4.jpg" alt=""
                                    class="img-fluid rounded-circle border border-4">
                            </div>
                            <div class="team-content mt-4">
                                <div class="team-name">
                                    <h5 class="text-custom text-uppercase mb-1 f-14">Leonardo s. Bloch</h5>
                                    <p class="text-muted mt-2 mb-0">Ceo</p>
                                    <div class="mt-4">
                                        <ul class="list-inline team-social">
                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-instagram"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#" class="rounded-circle">
                                                    <i class="mdi mdi-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section class="section pb-0" id="contact">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="text-dark d-inline-block mb-0 ">Contact Us</h3>
                <div class="d-flex heading position-relative justify-content-center align-items-center">
                    <i class="mdi mdi-rhombus-outline text-primary"></i>
                    <i class="mdi mdi-rhombus-outline text-primary"></i>
                </div>
                <p class="mb-0 text-muted mt-2 fs-17">We care to deliver and craft services and solutions to
                    our
                    <br>
                    customers to
                    achieve and satisfy their needs.
                </p>
            </div>
            <div class="contact">
                <div class="row align-items-center">
                    <div class="col-lg-6 mt-5 pt-5">
                        <div class="agency-contact-content mt-4">

                            <div style="background-image: url('images/map.png'); background-repeat: no-repeat; "
                                class="map-img pb-3">
                                <h3 class="mb-3">Contact Information</h3>
                                <div class="mt-3">
                                    <div class="contact-icon float-start me-3">
                                        <i class="mdi mdi-map-marker fs-24 text-primary"></i>
                                    </div>
                                    <div class="contact-info ps-4">
                                        <p class="text-muted">2276 Lynn Ogden Lane Beaumont
                                            <br>Lodgeville Road TX 77701
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <div class="contact-icon float-start me-3">
                                        <i class="mdi mdi-phone fs-24 text-primary"></i>
                                    </div>
                                    <div class="contact-info ps-4">
                                        <p class="text-muted">Phone: +71 612-234-4023
                                            <br>Fax: +954-627-9727
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <div class="contact-icon float-start me-3">
                                        <i class="mdi mdi-calendar-clock fs-24 text-primary"></i>
                                    </div>
                                    <div class="contact-info ps-4">
                                        <p class="text-muted">Monday-friday: 9.00-19.00
                                            <br>Saturday-Sunday: Holiday
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <div class="contact-icon float-start me-3">
                                        <i class="mdi mdi-email fs-24 text-primary"></i>
                                    </div>
                                    <div class="contact-info ps-4 text-middle pt-2">
                                        <p class="text-muted mb-0">Email: FredVWeaver@rhyta.com</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-12 offset-lg-1 shadow form-section bg-white">
                        <div class="form p-4">
                            <div class="custom-form mt-4 ">
                                <form method="post" name="myForm" onsubmit="return validateForm()">
                                    <p id="error-msg" style="opacity: 1;">
                                        <!-- <div class="alert alert-warning">*Please enter a Name*</div> -->
                                    </p>
                                    <h4 class="mb-3 fw-semibold">Get In Touch</h4>
                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text"
                                                    class="form-control contact-form" placeholder="Your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email"
                                                    class="form-control contact-form" placeholder="Your email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input type="text" class="form-control contact-form" id="subject"
                                                    placeholder="Your Subject..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <textarea name="comments" id="comments" rows="4"
                                                    class="form-control contact-form h-auto"
                                                    placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-lg-12 d-grid">
                                            <input type="submit" id="submit" name="send"
                                                class="submitBnt btn btn-rounded btn-primary" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <footer class="footer bg-light" style="clip-path: polygon(0 24%, 100% 0, 100% 100%, 0% 100%);">
        <div class="container section pb-0">
            <div class="row py-5 my-3">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a class="logo-footer" href="index.html">
                        <img src="images/logo-dark.png" height="21" alt="">
                    </a>
                    <p class="mt-4 text-muted">Build responsive, mobile-first projects on the web with the world's most
                        popular front-end component library.</p>
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-4 col-12  mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-dark">Cusomer</h5>
                    <ul class="list-unstyled footer-list mt-4">
                        <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i
                                    class="mdi mdi-chevron-right me-1"></i>About us</a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i
                                    class="mdi mdi-chevron-right me-1"></i>Contact us</a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i
                                    class="mdi mdi-chevron-right me-1"></i>Terms &amp; Services</a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i
                                    class="mdi mdi-chevron-right me-1"></i>Privacy Policy</a></li>
                    </ul>

                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-4 col-12 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-dark">Resources</h5>
                    <ul class="list-unstyled footer-list mt-4">
                        <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i
                                    class="mdi mdi-chevron-right me-1"></i>Form validation</a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i
                                    class="mdi mdi-chevron-right me-1"></i>Pricing</a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i
                                    class="mdi mdi-chevron-right me-1"></i>Terms &amp; Conditions</a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="text-muted"><i
                                    class="mdi mdi-chevron-right me-1"></i>Marketplace</a></li>
                    </ul>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-4 col-12 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-dark">subscribe</h5>
                    <div class="input-group my-4">
                        <input type="text" class="form-control p-3" placeholder="subscribe" aria-label="subscribe"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text bg-primary text-white px-4" id="basic-addon2">Go</span>
                    </div>
                    <p class="text-muted">publishes will show up in your Subscriptions feed. You may also start.</p>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!-- end section -->


    <!-- start section -->
    <footer>
        <div class="footer-bar bg-primary">
            <div class="container py-4">
                <div class="row ">
                    <div class="col-12">
                        <div class="foot-icon d-flex justify-content-center">
                            <div class="avatar rounded-circle mx-1">
                                <i class="mdi mdi-facebook fs-22"></i>
                            </div>
                            <div class="avatar rounded-circle mx-1">
                                <i class="mdi mdi-instagram fs-22"></i>
                            </div>
                            <div class="avatar rounded-circle mx-1">
                                <i class="mdi mdi-twitter fs-22"></i>
                            </div>
                            <div class="avatar rounded-circle mx-1">
                                <i class="mdi mdi-linkedin fs-22"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-center text-white-50 mt-4">??
                            <script>
                                document.write(new Date().getFullYear())

                            </script> Rozic. Design with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end section -->




    <!-- Style switcher -->
    <div id="style-switcher" onclick="toggleSwitcher()" style="left: -189px;">
        <div>
            <h6>Select your color</h6>
            <ul class="pattern list-unstyled mb-0">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                </li>
                <li>
                    <a class="color4" href="javascript: void(0);" onclick="setColor('orange')"></a>
                </li>
                <li>
                    <a class="color5" href="javascript: void(0);" onclick="setColor('info')"></a>
                </li>
                <li>
                    <a class="color6" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" class="settings rounded-end"><i class="pe-7s-config mdi-spin"
                    style="display: inline; line-height: 46px;"></i></a>
        </div>
    </div>
    <!-- end switcher-->

    <a href="#home" data-scroll="" class="back-to-top" id="back-to-top" style="display: inline; line-height: 30px;"> <i
            class="mdi mdi-chevron-up fs-24 text-white"> </i> </a>




    <!-- javascript -->
    <script src="{{ asset('homepage') }}/js/jquery.js"></script>
    <script src="{{ asset('homepage') }}/js/jquery.easing.min.js"></script>

    <script src="{{ asset('homepage') }}/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('homepage') }}/js/smooth-scroll.polyfills.min.js"></script>
    <script src="{{ asset('homepage') }}/js/gumshoe.polyfills.min.js"></script>

    <script src="{{ asset('homepage') }}/js/jquery.knob.js"></script>
    <script src="{{ asset('homepage') }}/js/chart.init.js"></script>

    <script src="{{ asset('homepage') }}/js/particles.js"></script>
    <script src="{{ asset('homepage') }}/js/particles.app.js"></script>

    <!-- tiny slider -->
    <script src="{{ asset('homepage') }}/js/tiny-slider.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('homepage') }}/js/app.js"></script>

</body>


<!-- Mirrored from themesdesign.in/rozic/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jan 2022 01:28:52 GMT -->

</html>
