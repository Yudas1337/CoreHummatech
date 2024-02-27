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
    <div class="about-us-area default-padding-bottom mt-5">
        <div class="container">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="thumb wow fadeInUp">
                            <img src="assets-home/img/about/5.jpg" alt="Thumb">

                        </div>
                    </div>
                    <div class="col-lg-6 info wow fadeInRight">
                        <h2>Menghadirkan Solusi Terintegrasi untuk Masa Depan Digital</h2>
                        <p>
                            Kini Hummatech bertransformasi menjadi
                            perusahaan yang mampu menjawab
                            tantangan di era revolusi industri 4.0
                            dengan menciptakan produk berbasis
                            integrated system berupa perangkat lunak
                            berbasis web dan mobile, Internet of Things
                            (IoT), Artificial Intelligence (AI), Game, dan
                            Augmented Reality. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Star Services Area
                ============================================= -->
    <div class="thumb-services-area inc-thumbnail default-padding bottom-less">
        <!-- Shape -->
        <div class="right-shape">
            <img src="assets-home/img/shape/9.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Layanan kami</h4>
                        <h2>Kami menyediakan layanan software untuk mendukung perusahhan dan bisnis anda</h2>
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
                        <div class="item" style="background-image: url(assets-home/img/services/1.jpg);">
                            <div class="info">
                                <h4>Software Development</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel
                                    turpis sapien facilisi suscipit.
                                </p>
                                <div class="bottom">
                                    <a href="services-single.html"><i class="fas fa-arrow-right"></i> Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="500ms">
                        <div class="item" style="background-image: url(assets-home/img/services/2.jpg);">
                            <div class="info">
                                <h4>Software Development</h4>
                                <p>
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
                                    everything.
                                </p>
                                <div class="bottom">
                                    <a href="services-single.html"><i class="fas fa-arrow-right"></i> Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="700ms">
                        <div class="item" style="background-image: url(assets-home/img/services/3.jpg);">
                            <div class="info">
                                <h4>Software Development</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel
                                    turpis sapien facilisi suscipit..
                                </p>
                                <div class="bottom">
                                    <a href="services-single.html"><i class="fas fa-arrow-right"></i> Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="300ms">
                        <div class="item" style="background-image: url(assets-home/img/services/1.jpg);">
                            <div class="info">
                                <h4>Software Development</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel
                                    turpis sapien facilisi suscipit.
                                </p>
                                <div class="bottom">
                                    <a href="services-single.html"><i class="fas fa-arrow-right"></i> Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="500ms">
                        <div class="item" style="background-image: url(assets-home/img/services/2.jpg);">
                            <div class="info">
                                <h4>Software Development</h4>
                                <p>
                                    Prevailed always tolerably discourse and assurance more applauded more uncommonly. Him
                                    everything.
                                </p>
                                <div class="bottom">
                                    <a href="services-single.html"><i class="fas fa-arrow-right"></i> Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="700ms">
                        <div class="item" style="background-image: url(assets-home/img/services/3.jpg);">
                            <div class="info">
                                <h4>Software Development</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel
                                    turpis sapien facilisi suscipit..
                                </p>
                                <div class="bottom">
                                    <a href="services-single.html"><i class="fas fa-arrow-right"></i> Lihat
                                        Selengkapnya</a>
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
    <div class="partner-area bg-gray shadow-less overflow-hidden text-light">
        <div class="container-fluid">
            <div class="item-box">
                <div class="container">
                    <div class="row align-center">
                        <div class="col-lg-4 info">
                            <h2>Menghadirkan produk dengan kualitas dan inovasi terbaik</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur. Blandit donec pulvinar eget senectus posuere amet
                                ultricies justo enim tempus pellentesque. </p>
                        </div>
                        <div class="col-lg-8 clients">
                            <div class="partner-carousel owl-carousel owl-theme text-center">
                                <div class="single-item">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('assets_landing/milink.png') }}" alt="" srcset="">
                                            </div>
                                            <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                                Milink
                                            </h4>
                                            <p class="text-dark">
                                                Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel turpis sapien facilisi suscipit.
                                            </p>
                                            <div class="bottom">
                                                <a href="" class="text-primary"><i class="fas fa-arrow-right" ></i> Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-item">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('assets_landing/milink.png') }}" alt="" srcset="">
                                            </div>
                                            <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                                Milink
                                            </h4>
                                            <p class="text-dark">
                                                Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel turpis sapien facilisi suscipit.
                                            </p>
                                            <div class="bottom">
                                                <a href="" class="text-primary"><i class="fas fa-arrow-right" ></i> Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-item">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('assets_landing/milink.png') }}" alt="" srcset="">
                                            </div>
                                            <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                                Milink
                                            </h4>
                                            <p class="text-dark">
                                                Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel turpis sapien facilisi suscipit.
                                            </p>
                                            <div class="bottom">
                                                <a href="" class="text-primary"><i class="fas fa-arrow-right" ></i> Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-item">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('assets_landing/milink.png') }}" alt="" srcset="">
                                            </div>
                                            <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                                Milink
                                            </h4>
                                            <p class="text-dark">
                                                Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel turpis sapien facilisi suscipit.
                                            </p>
                                            <div class="bottom">
                                                <a href="" class="text-primary"><i class="fas fa-arrow-right" ></i> Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-item">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('assets_landing/milink.png') }}" alt="" srcset="">
                                            </div>
                                            <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                                Milink
                                            </h4>
                                            <p class="text-dark">
                                                Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel turpis sapien facilisi suscipit.
                                            </p>
                                            <div class="bottom">
                                                <a href="" class="text-primary"><i class="fas fa-arrow-right" ></i> Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-item">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('assets_landing/milink.png') }}" alt="" srcset="">
                                            </div>
                                            <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                                Milink
                                            </h4>
                                            <p class="text-dark">
                                                Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio augue ut vel turpis sapien facilisi suscipit.
                                            </p>
                                            <div class="bottom">
                                                <a href="" class="text-primary"><i class="fas fa-arrow-right" ></i> Lihat Selengkapnya</a>
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
    </div>
@endsection
