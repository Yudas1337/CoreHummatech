
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from validthemes.net/site-template/earna/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Feb 2024 03:10:25 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{{ config('app.name', 'Laravel') }}" />

    <!-- ========== Page Title ========== -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets-home/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets-home/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-home/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-home/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <!-- Start Preloader
    ============================================= -->
    <div id="preloader">
        <div id="earna-preloader" class="earna-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                        <li class="side-menu">
                            <a href="#">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header h-100">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand h-100" href="index.html">
                        <img src="{{ asset('assets/images/LOGO-HUMMATECH_Putih.png') }}" style="width: 200px;height: auto" class="logo logo-display" alt="Logo">
                        <img src="{{ asset('assets/images/LOGO-HUMMATECH_Hitam.png') }}" style="width: 200px;height: auto" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="about-us.html" class="dropdown-toggle" data-toggle="dropdown" >Multipage</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Business Consultancy</a></li>
                                        <li><a href="index-2.html">Marketing Consultancy</a></li>
                                        <li><a href="index-3.html">Human Resources</a></li>
                                        <li><a href="index-4.html">Financial Consultancy</a></li>
                                        <li><a href="index-5.html">Strategy Consultants</a></li>
                                        <li><a href="index-6.html">Corporate Business</a></li>
                                        <li><a href="index-7.html">Consulting Smart <span class="badge">new</span> </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="about-us.html" class="dropdown-toggle" data-toggle="dropdown" >Onepage</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-op.html">Business Consultancy</a></li>
                                        <li><a href="index-op-2.html">Marketing Consultancy</a></li>
                                        <li><a href="index-op-3.html">Human Resources</a></li>
                                        <li><a href="index-op-4.html">Financial Consultancy</a></li>
                                        <li><a href="index-op-5.html">Strategy Consultants</a></li>
                                        <li><a href="index-op-6.html">Corporate Business</a></li>
                                        <li><a href="index-op-7.html">Consulting Smart <span class="badge">new</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-lg-3">
                                            <h6 class="title">Gallery Grid</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="gallery-grid-2-colum.html">Grid Two Colum</a></li>
                                                    <li><a href="gallery-grid-3-colum.html">Grid Three Colum</a></li>
                                                    <li><a href="gallery-grid-4-colum.html">Grid Four Colum</a></li>
                                                    <li><a href="gallery-mixed-colum.html">Mixed Colum</a></li>
                                                    <li><a href="project-single.html">Project Single</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-lg-3">
                                            <h6 class="title">Gallery Masonary</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="gallery-masonary-2-colum.html">Masonary Two Colum</a></li>
                                                    <li><a href="gallery-masonary-3-colum.html">Masonary Three Colum</a></li>
                                                    <li><a href="gallery-masonary-4-colum.html">Masonary Four Colum</a></li>
                                                    <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-lg-3">
                                            <h6 class="title">Other Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="about-us.html">About us</a></li>
                                                    <li><a href="career.html">Career</a></li>
                                                    <li><a href="terms-conditions.html">Terms Conditions</a></li>
                                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-lg-3">
                                            <h6 class="title">Additional Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                    <li><a href="404.html">Error Page</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Team</a>
                            <ul class="dropdown-menu">
                                <li><a href="team.html">Team Members</a></li>
                                <li><a href="team-single.html">Team Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services.html">Services Version One</a></li>
                                <li><a href="services-2.html">Services Version Two</a></li>
                                <li><a href="services-3.html">Services Version Three</a></li>
                                <li><a href="services-single.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                                <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Contact Us</a>
                            <ul class="dropdown-menu">
                                <li><a href="contact.html">Version One</a></li>
                                <li><a href="contact-2.html">Version Two</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="icon_close"></i></a>
                <div class="widget">
                    <img src="assets/img/logo.png" alt="Logo">
                    <p>
                        Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                    </p>
                </div>
                <div class="widget address">
                    <div>
                        <ul>
                            <li>
                                <div class="content">
                                    <p>Address</p>
                                    <strong>California, TX 70240</strong>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <p>Email</p>
                                    <strong>support@validtheme.com</strong>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <p>Contact</p>
                                    <strong>+44-20-7328-4499</strong>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget newsletter">
                    <h4 class="title">Get Subscribed!</h4>
                    <form action="#">
                        <div class="input-group stylish-input-group">
                            <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <i class="arrow_right"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="widget social">
                    <ul class="link">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

   <!-- Start Banner
    ============================================= -->
    <div class="banner-area text-center text-big top-pad-50">
        <div id="bootcarousel" class="carousel text-light slide animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/banner/5.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated zoomInLeft">Business <span>Planning</span></h2>
                                            <p class="animated slideInRight">
                                                Coming merits and was talent enough far. Sir joy northward sportsmen education. Discovery incommode earnestly no he commanded.
                                            </p>
                                            <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md" href="about-us.html">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/banner/1.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Achiving <span>Success</span></h2>
                                            <p class="animated slideInRight">
                                                Coming merits and was talent enough far. Sir joy northward sportsmen education. Discovery incommode earnestly no he commanded.
                                            </p>
                                            <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md" href="about-us.html">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About Area
    ============================================= -->
    <div class="about-content-area default-padding">
        <div class="container">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-6 thumb wow fadeInUp">
                        <div class="thumb-box">
                            <img src="assets/img/about/2.jpg" alt="Thumb">
                            <img src="assets/img/about/3.jpg" alt="Thumb">
                            <div class="shape" style="background-image: url(assets/img/shape/1.png);"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 info wow fadeInDown">
                        <h2>We Combine Technology <br> with Business Ideas</h2>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="ti-bookmark-alt"></i>
                                </div>
                                <div class="info">
                                    <h4>Certified Company</h4>
                                    <p>
                                        Common so wicket appear to sudden worthy on. Shade of offer ye whole stood hoped.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="ti-id-badge"></i>
                                </div>
                                <div class="info">
                                    <h4>Experience Employee</h4>
                                    <p>
                                        Common so wicket appear to sudden worthy on. Shade of offer ye whole stood hoped.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="call">
                            <div class="icon">
                                <i class="flaticon-telephone"></i>
                            </div>
                            <div class="intro">
                                <h5>+123 456 7890</h5>
                                <span>Call to ask any question</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 center-info">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Star Partner Area
    ============================================= -->
    <div class="partner-area shape-less overflow-hidden text-light">
        <div class="container">
            <div class="item-box">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h2>We're Trusted by <span>2500+</span> <br> Professional Customer</h2>
                        <p>
                            Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                        </p>
                    </div>
                    <div class="col-lg-6 clients">
                        <div class="partner-carousel owl-carousel owl-theme text-center">
                            <div class="single-item">
                                <a href="#"><img src="assets/img/clients/05.png" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="assets/img/clients/03.png" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="assets/img/clients/02.png" alt="Clients"></a>
                            </div>
                            <div class="single-item">
                                <a href="#"><img src="assets/img/clients/04.png" alt="Clients"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Star Services Area
    ============================================= -->
    <div class="thumb-services-area inc-thumbnail default-padding bottom-less">
        <!-- Shape -->
        <div class="right-shape">
            <img src="assets/img/shape/9.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Our Services</h4>
                        <h2>What We Bring To You</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="services-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="300ms">
                        <div class="item" style="background-image: url(assets/img/services/1.jpg);">
                            <div class="info">
                                <i class="flaticon-investment"></i>
                                <h4>Financial Planning</h4>
                                <p>
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him everything.
                                </p>
                                <div class="bottom">
                                    <a href="services-single.html"><i class="fas fa-arrow-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="500ms">
                        <div class="item" style="background-image: url(assets/img/services/2.jpg);">
                            <div class="info">
                                <i class="flaticon-creativity"></i>
                                <h4>Investment Planning</h4>
                                <p>
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him everything.
                                </p>
                                <div class="bottom">
                                    <a href="services-single.html"><i class="fas fa-arrow-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="700ms">
                        <div class="item" style="background-image: url(assets/img/services/3.jpg);">
                            <div class="info">
                                <i class="flaticon-money-1"></i>
                                <h4>Saving & Investments</h4>
                                <p>
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him everything.
                                </p>
                                <div class="bottom">
                                    <a href="services-single.html"><i class="fas fa-arrow-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Business Growth
    ============================================= -->
    <div class="business-groth-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 info">
                    <h4>Company Analysis</h4>
                    <h2>Annual Report <br>from starting to now</h2>
                    <p>
                        Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask now are dispatched led appearance. Small meant in so doubt hopes. Me smallness is existence.
                    </p>
                    <a class="btn btn-gradient effect btn-md" href="contact-2.html">Get free quote</a>
                </div>
                <div class="col-lg-6">
                    <div class="lineChart">
                        <canvas id="lineChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Business Growth -->

    <!-- Start Gallery Area
    ============================================= -->
    <div class="gallery-area overflow-hidden default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Our Gallery</h4>
                        <h2>Latest projects showcase</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-3">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/11.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Startup Funding</a></h4>
                                        <span>Finance, Assets</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/img/portfolio/11.jpg" class="item popup-gallery">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/1.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Accounting Advisory</a></h4>
                                        <span>Creative, Minimal</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/img/portfolio/1.jpg" class="item popup-gallery">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/2.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Merger & Acquisition</a></h4>
                                        <span>Benifits, Business</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/img/portfolio/2.jpg" class="item popup-gallery">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/3.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Assets For Technology</a></h4>
                                        <span>Invest, Earning</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/img/portfolio/3.jpg" class="item popup-gallery">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/33.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Business Matching</a></h4>
                                        <span>Finance, Assets</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/img/portfolio/33.jpg" class="item popup-gallery">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/portfolio/44.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Startup Funding</a></h4>
                                        <span>Finance, Assets</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/img/portfolio/44.jpg" class="item popup-gallery">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects Area -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding bg-theme inc-shape">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 info">
                    <div class="content">
                        <h2>Let's talk?</h2>
                        <p>
                            It's all about the humans behind a brand and those experiencing it, we're right there. In the middle performance quick.
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>
                                    22 Baker Street, <br> London, United Kingdom, <br> W1U 3BW
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <p>
                                    +44-20-7328-4499 <br> +99-34-8878-9989
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 contact-form-box">
                    <div class="form-box">
                        <form action="https://validthemes.net/site-template/earna/assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>From the blog</h4>
                        <h2>Latest News & Articles</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/blog/1.jpg" alt="Thumb">
                                <div class="date">January 25, 2021</div>
                            </div>

                            <div class="info">
                                <div class="meta">
                                   <ul>
                                       <li>
                                           <img src="assets/img/team/1.jpg" alt="Author">
                                           <span>By </span>
                                           <a href="#">John Baus</a>
                                       </li>
                                       <li>
                                           <span>In </span>
                                           <a href="#">Agency</a>
                                       </li>
                                   </ul>
                                </div>
                                <h4>
                                    <a href="blog-single-with-sidebar.html">Discovery incommode earnestly commanded if.</a>
                                </h4>
                                <p>
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/blog/2.jpg" alt="Thumb">
                                <div class="date">February 12, 2021</div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                   <ul>
                                       <li>
                                           <img src="assets/img/team/2.jpg" alt="Author">
                                           <span>By </span>
                                           <a href="#">Mohon Mark</a>
                                       </li>
                                       <li>
                                           <span>In </span>
                                           <a href="#">Creative</a>
                                       </li>
                                   </ul>
                                </div>
                                <h4>
                                    <a href="blog-single-with-sidebar.html">Expression acceptance imprudence particular</a>
                                </h4>
                                <p>
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/blog/5.jpg" alt="Thumb">
                                <div class="date">March 18, 2021</div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                   <ul>
                                       <li>
                                           <img src="assets/img/team/3.jpg" alt="Author">
                                           <span>By </span>
                                           <a href="#">Paul Tun</a>
                                       </li>
                                       <li>
                                           <span>In </span>
                                           <a href="#">Agency</a>
                                       </li>
                                   </ul>
                                </div>
                                <h4>
                                    <a href="blog-single-with-sidebar.html">Provided so as doubtful on striking required point</a>
                                </h4>
                                <p>
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="index.html"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Compnay History</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Features</a>
                                </li>
                                <li>
                                    <a href="blog-with-sidebar.html"><i class="fas fa-angle-right"></i> Blog Page</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Address:</strong>
                                            5919 Trussville Crossings Pkwy, Birmingham
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:info@validtheme.com">info@validtheme.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="tel:2151234567">+123 34598768</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>&copy; Copyright 2021. All Rights Reserved by <a href="#">validthemes</a></p>
                        </div>
                        <div class="col-lg-6 text-right link">
                            <ul>
                                <li>
                                    <a href="about-us.html">Terms</a>
                                </li>
                                <li>
                                    <a href="about-us.html">Privacy</a>
                                </li>
                                <li>
                                    <a href="about-us.html">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets-home/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets-home/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets-home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets-home/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/count-to.js') }}"></script>
    <script src="{{ asset('assets-home/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets-home/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets-home/js/custom-chart.js') }}"></script>
    <script src="{{ asset('assets-home/js/main.js') }}"></script>

</body>

<!-- Mirrored from validthemes.net/site-template/earna/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Feb 2024 03:11:02 GMT -->
</html>
