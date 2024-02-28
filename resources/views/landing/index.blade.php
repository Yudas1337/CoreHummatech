@extends('landing.layouts.app')
@section('seo')
<meta name="description" content="{{ config('app.name', 'Laravel') }}" />
<meta name="title" content="Hummatech - Perusahaan Software Terbaik di Malang" />
<meta name="description" content="Hummatech adalah perusahaan software development terbaik di Malang. Kami menyediakan solusi perangkat lunak yang inovatif dan berkualitas tinggi." />
@endsection
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
                <div class="row align-center mx-3">
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
                                            <img src="{{ asset('assets_landing/milink.png') }}" alt=""
                                                srcset="">
                                        </div>
                                        <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                            Milink
                                        </h4>
                                        <p class="text-dark">
                                            Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio
                                            augue ut vel turpis sapien facilisi suscipit.
                                        </p>
                                        <div class="bottom">
                                            <a href="" class="text-primary"><i class="fas fa-arrow-right"></i>
                                                Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('assets_landing/milink.png') }}" alt=""
                                                srcset="">
                                        </div>
                                        <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                            Milink
                                        </h4>
                                        <p class="text-dark">
                                            Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio
                                            augue ut vel turpis sapien facilisi suscipit.
                                        </p>
                                        <div class="bottom">
                                            <a href="" class="text-primary"><i class="fas fa-arrow-right"></i>
                                                Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('assets_landing/milink.png') }}" alt=""
                                                srcset="">
                                        </div>
                                        <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                            Milink
                                        </h4>
                                        <p class="text-dark">
                                            Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio
                                            augue ut vel turpis sapien facilisi suscipit.
                                        </p>
                                        <div class="bottom">
                                            <a href="" class="text-primary"><i class="fas fa-arrow-right"></i>
                                                Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('assets_landing/milink.png') }}" alt=""
                                                srcset="">
                                        </div>
                                        <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                            Milink
                                        </h4>
                                        <p class="text-dark">
                                            Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio
                                            augue ut vel turpis sapien facilisi suscipit.
                                        </p>
                                        <div class="bottom">
                                            <a href="" class="text-primary"><i class="fas fa-arrow-right"></i>
                                                Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('assets_landing/milink.png') }}" alt=""
                                                srcset="">
                                        </div>
                                        <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                            Milink
                                        </h4>
                                        <p class="text-dark">
                                            Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio
                                            augue ut vel turpis sapien facilisi suscipit.
                                        </p>
                                        <div class="bottom">
                                            <a href="" class="text-primary"><i class="fas fa-arrow-right"></i>
                                                Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('assets_landing/milink.png') }}" alt=""
                                                srcset="">
                                        </div>
                                        <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                            Milink
                                        </h4>
                                        <p class="text-dark">
                                            Lorem ipsum dolor sit amet consectetur. Neque commodo id massa turpis. Odio
                                            augue ut vel turpis sapien facilisi suscipit.
                                        </p>
                                        <div class="bottom">
                                            <a href="" class="text-primary"><i class="fas fa-arrow-right"></i>
                                                Lihat Selengkapnya</a>
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
    <!-- End Product Area -->
    <div class=" team-area mt-5 bottom-less mx-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center mt-3">
                        <h4>MITRA KAMI</h4>
                        <h3>Tumbuh bersama : Kolaborasi menuju kesuksesan</h3>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- End collab  Area -->

    <div class=" bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center mt-3">
                        <h4>BERITA TENTANG PERUSAHAAN KAMI</h4>
                        <h3>Melangkah Ke Depan: Kabar Terbaru Mengenai Perkembangan Perusahaan Kami</h3>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-area full-blog blog-standard full-blog grid-colum">
            <div class="container">
                <div class="blog-items content-less">
                    <div class="blog-content">
                        <div class="blog-item-box">
                            <div class="row">
                                @foreach (range(1, 3) as $item)
                                    <div class="col-lg-4 col-md-6 single-item">
                                        <div class="item">
                                            <div class="thumb">
                                                <a href="blog-single-with-sidebar.html"><img
                                                        src="{{ asset('assets-home/img/blog/2.jpg') }}"
                                                        alt="Thumb"></a>
                                                <div class="date">Auguest 25, 2021</div>
                                            </div>
                                            <div class="info">
                                                <div class="meta">
                                                    <ul>
                                                        <li>
                                                            <a href="#">MAGANG</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h4>
                                                    <a href="blog-single-with-sidebar.html">7 (Tujuh) Fakta Yang Bikin Kamu
                                                        Kaget, Nomor 3 Bikin Merinding.</a>
                                                </h4>
                                                <p class="line-clamp">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est debitis
                                                    placeat, quaerat omnis earum repudiandae at mollitia alias facere, iusto
                                                    eum! Soluta, odit. Consequuntur dolorem fugit nostrum repellendus
                                                    dolores
                                                    vero necessitatibus. Enim beatae quos aperiam numquam porro autem
                                                    recusandae
                                                    error molestiae sequi.
                                                </p>
                                                <a href="" class="btn btn-outline-primary">Baca Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Pagination -->
                            <div class="row">
                                <div class="col-md-12 pagi-area text-center mb-3">
                                    <a class="text-primary" href=""><svg xmlns="http://www.w3.org/2000/svg"
                                            width="32" height="32" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M16.15 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                                        </svg> LIhat Berita Lainnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area mt-5 bottom-less mx-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>JAM OPRASIONAL</h4>
                        <h3>Jam Oprasional Kantor</h3>
                        <H3>PT.HUMMA TEKNOLOGI INDONESIA</H3>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        @php
            \carbon\Carbon::setLocale('id');
            $now = \Carbon\Carbon::now();
        @endphp
        <div class="container mb-3">
            <div class="row">
                <div class="  {{ $now->format('l') == 'Monday' ? 'card-time-active' : 'card-time' }} mb-4">
                    <div class="row">
                        <div class="col-5">
                            <p class="m-0 fw-800 {{ $now->format('l') == 'Monday' ? 'text-active' : 'text-black' }}">Senin
                            </p>
                        </div>
                        <div class="col-7">
                            <div class="justify-content-between d-flex">
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Monday' ? 'text-active' : 'text-black' }}">
                                        08:00</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Monday' ? 'text-active' : 'text-inactive' }}">
                                        Sampai</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Monday' ? 'text-active' : 'text-black' }}">
                                        16:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" {{ $now->format('l') == 'Tuesday' ? 'card-time-active' : 'card-time' }} mb-4">
                    <div class="row">
                        <div class="col-5">
                            <p class="m-0 fw-800 {{ $now->format('l') == 'Tuesday' ? 'text-active' : 'text-black' }}">
                                Selasa</p>
                        </div>
                        <div class="col-7">
                            <div class="justify-content-between d-flex">
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Tuesday' ? 'text-active' : 'text-black' }}">
                                        08:00</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Tuesday' ? 'text-active' : 'text-inactive' }}">
                                        Sampai</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Tuesday' ? 'text-active' : 'text-black' }}">
                                        16:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" {{ $now->format('l') == 'Wednesday' ? 'card-time-active' : 'card-time' }} mb-4">
                    <div class="row">
                        <div class="col-5">
                            <p class="m-0 fw-800 {{ $now->format('l') == 'Wednesday' ? 'text-active' : 'text-black' }}">
                                Rabu</p>
                        </div>
                        <div class="col-7">
                            <div class="justify-content-between d-flex">
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Wednesday' ? 'text-active' : 'text-black' }}">
                                        08:00</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Wednesday' ? 'text-active' : 'text-inactive' }}">
                                        Sampai</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Wednesday' ? 'text-active' : 'text-black' }}">
                                        16:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" {{ $now->format('l') == 'Thursday' ? 'card-time-active' : 'card-time' }} mb-4">
                    <div class="row">
                        <div class="col-5">
                            <p class="m-0 fw-800 {{ $now->format('l') == 'Thursday' ? 'text-active' : 'text-black' }}">
                                Kamis</p>
                        </div>
                        <div class="col-7">
                            <div class="justify-content-between d-flex">
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Thursday' ? 'text-active' : 'text-black' }}">
                                        08:00</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Thursday' ? 'text-active' : 'text-inactive' }}">
                                        Sampai</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Thursday' ? 'text-active' : 'text-black' }}">
                                        16:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" {{ $now->format('l') == 'Friday' ? 'card-time-active' : 'card-time' }} mb-4">
                    <div class="row">
                        <div class="col-5">
                            <p class="m-0 fw-800 {{ $now->format('l') == 'Friday' ? 'text-active' : 'text-black' }}">
                                Jum'at</p>
                        </div>
                        <div class="col-7">
                            <div class="justify-content-between d-flex">
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Friday' ? 'text-active' : 'text-black' }}">
                                        08:00</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Friday' ? 'text-active' : 'text-inactive' }}">
                                        Sampai</p>
                                </div>
                                <div>
                                    <p
                                        class="m-0 fw-800 {{ $now->format('l') == 'Friday' ? 'text-active' : 'text-black' }}">
                                        16:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-disabel mb-4">
                    <div class="row">
                        <div class="col-5">
                            <p class="m-0 fw-800 ">Sabtu</p>
                        </div>
                        <div class="col-7">
                            <div class="justify-content-end d-flex">
                                <div>
                                    <p class="m-0 fw-800 text-danger">Libur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-disabel mb-4">
                    <div class="row">
                        <div class="col-5">
                            <p class="m-0 fw-800 ">Minggu</p>
                        </div>
                        <div class="col-7">
                            <div class="justify-content-end d-flex">
                                <div>
                                    <p class="m-0 fw-800 text-danger">Libur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
