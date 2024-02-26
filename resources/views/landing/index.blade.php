@extends('landing.layouts.app')
@section('content')
    <!-- Start Banner
        ============================================= -->
    <div class="banner-area text-center text-big top-pad-50">
        <div id="bootcarousel" class="carousel text-light slide animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets-home/img/banner/5.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h1>INOVASI MENUJU <span>PERKEMBANGAN</span></h1>
                                            <p class="animated slideInRight">
                                                bertransformasi menjadi perusahaan yang mampu menjawab
                                                tantangan di era revolusi industri 4.0
                                            </p>
                                            <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md"
                                                href="javascript:void(0)">Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets-home/img/banner/1.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Achiving <span>Success</span></h2>
                                            <p class="animated slideInRight">
                                                Coming merits and was talent enough far. Sir joy northward sportsmen
                                                education. Discovery incommode earnestly no he commanded.
                                            </p>
                                            <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md"
                                                href="about-us.html">Discover More</a>
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
                            Seeing rather her you not esteem men settle genius excuse. Deal say over you age from.
                            Comparison new ham melancholy son themselves.
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
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
                                    everything.
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
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
                                    everything.
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
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
                                    everything.
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
                        Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of
                        narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude
                        ask now are dispatched led appearance. Small meant in so doubt hopes. Me smallness is existence.
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
                            It's all about the humans behind a brand and those experiencing it, we're right there. In the
                            middle performance quick.
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
                        <form action="https://validthemes.net/site-template/earna/assets/mail/contact.php" method="POST"
                            class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
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
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for
                                    former. Up as meant widow equal an share.
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
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for
                                    former. Up as meant widow equal an share.
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
                                    <a href="blog-single-with-sidebar.html">Provided so as doubtful on striking required
                                        point</a>
                                </h4>
                                <p>
                                    Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for
                                    former. Up as meant widow equal an share.
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
@endsection
