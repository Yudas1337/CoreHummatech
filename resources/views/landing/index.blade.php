@extends('landing.layouts.app')
@section('seo')
<meta name="description" content="{{ config('app.name', 'Laravel') }}" />
<meta name="title" content="Hummatech - Perusahaan Software Terbaik di Malang" />
<meta name="description" content="Hummatech adalah perusahaan software development terbaik di Malang. Kami menyediakan solusi perangkat lunak yang inovatif dan berkualitas tinggi." />
@endsection

@section('style')
    <style>
         .subtitle {
            text-transform: uppercase;
            font-weight: 600;
            color: #1273eb;
            margin-top: -5px;
            display: inline-block;
            background: linear-gradient(90deg, rgba(18, 115, 235, 1) 30%, rgba(4, 215, 242, 1) 100%);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-us-area .thumb {
            padding-left: unset;
            /* padding-right: 50px; */
        }

        .about-us-area .thumb::after {
            right: 0;
            top: 5rem !important;
            left: unset !important;
        }

        .about-us-area .container {
            position: relative;
        }

        .about-us-area .about-triangle {
            position: absolute;
            z-index: -1;
            top: -7.5rem;
            right: -7.5rem;
        }
        #owl-carousel-mitra::before,
        #owl-carousel-mitra::after {
            position: absolute;
            height: 100%;
            z-index: 2;
            content: '';
            width: 150px;
        }

        #owl-carousel-mitra::before {
            left: 0;
            top: 0;
            bottom: 0;
            background: linear-gradient(to right, rgba(var(--bs-white-rgb), 1), 65%, transparent);
        }

        #owl-carousel-mitra::after {
            right: 0;
            top: 0;
            bottom: 0;
            background: linear-gradient(to left, rgba(var(--bs-white-rgb), 1), 65%, transparent);
        }

        .team-area {
            overflow: hidden;
            width: 100%;
        }

        .team-slider {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .team-item img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

        @media (max-width: 767px) {
            .owl-carousel {
                display: block;
            }
        }
    </style>
    <style>
        @media (max-width: 767px) {
            .about-triangle {
                display: none;
            }
        }
    </style>
    <style>
        @media (max-width: 767px) {
            .team-item img {
                max-width: 60%;
            }
        }
    </style>
    <style>
        .team-item {
            margin-right: 15px;
        }

        .team-item:last-child {
            margin-right: 0;
        }

        @media (max-width: 767px) {
            .team-item {
                margin-right: 0;
            }
        }
    </style>
    <style>
    .team-item {
        margin-right: 15px;
    }

    .team-item:last-child {
        margin-right: 15px;
    }

    @media (max-width: 767px) {
        .team-item {
            margin-right: 0;
        }
    }
    </style>

    <style>
        @media (max-width: 767px) {
            .thumb img {
                max-width: 60% !important;
            }
        }
    </style>
    


@endsection
@section('content')
    <!-- Start Banner-->
    <div class="banner-area text-center text-big top-pad-50">
        <div id="bootcarousel" class="carousel text-light slide animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                @forelse ($section as $key => $sectionItem)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <div class="slider-thumb bg-fixed" style="background-image: url({{ asset('storage/' . $sectionItem->image) }});"></div>
                        <div class="box-table">
                            <div class="box-cell shadow dark">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-10 offset-lg-1">
                                            <div class="content">
                                                <h2>{{ $sectionItem->title }}</h2>
                                                <p class="animated slideInRight">
                                                    {{ $sectionItem->subtitle }}
                                                </p>
                                                @if (!empty($sectionItem->link))
                                                    <a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md" href="{{ $sectionItem->link }}">
                                                        Lihat Selengkapnya
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
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

    <!-- Start About Area -->
       <div class="about-us-area default-padding">
        <div class="container">
            <img src="{{ asset('assets-home/img/about-polygon.svg') }}" class="about-triangle" alt="Polygon" />
            <div class="about-items">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 info">
                        @forelse ($profile as $profile)
                            <h2 class="text-break">{{ $profile->subtitle }}</h2>
                            <p class="text-break">
                                {!! Str::limit($profile->description, 200) !!}
                            </p>
                            <a class="btn btn-gradient effect btn-md" href="/about-us">Selengkapnya</a>
                        @empty
                            <p>Belum ada profile perusahaan</p>
                        @endforelse
                    </div>
                    <div class="col-md-6 order-first order-md-last text-center">
                        <div class="thumb">
                            <img src="{{ asset('storage/' . $profile->image) }}" alt="Thumb" style="max-width: 100%; max-height: 450px; display: inline-block;">

                            <!-- Tambahkan gaya untuk perangkat mobile -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End About -->

    <!-- Star Services Area
                                    ============================================= -->
    <div class="thumb-services-area inc-thumbnail default-padding bottom-less">
        <div class="right-shape">
            <img src="assets-home/img/shape/9.png" alt="Shape">
        </div>
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
                    @forelse ($service as $service)

                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item wow fadeInRight" data-wow-delay="700ms">
                        <div class="item" style="background-image: url({{ asset('storage/' . $service->image) }});">
                            <div class="info">
                                <h4>{{$service->name}}</h4>
                                <p>
                                    {{ Str::limit($service['description'], 100) }}

                                   {{-- {{$service->description}} --}}
                                </p>
                                <div class="bottom">
                                    @if (!empty($service->link))

                                    <a href="{{$service->link}}"><i class="fas fa-arrow-right"></i> Lihat
                                        Selengkapnya</a>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    @empty

                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('nodata-gif.gif') }}" alt="" width="800px">
                        </div>
                        <h4 class="text-center text-dark" style="font-weight:600">
                            Belum ada Layanan
                        </h4>
                    </div>

                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
    <div class="partner-area bg-gray shadow-less overflow-hidden text-light">
        <div class="container-fluid">
            <div class="item-box">
                <div class="row align-items-center">

                    <div class="col-lg-4 col-md-12 info">
                        <h2> Menghadirkan produk dengan kualitas dan inovasi terbaik</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Blandit donec pulvinar eget senectus posuere amet
                            ultricies justo enim tempus pellentesque.
                        </p>
                    </div>

                    <div class="col-lg-8 col-md-12 clients">
                        <div class="partner-carousel owl-carousel owl-theme text-center">
                            @forelse ($product as $produk)

                            <!-- Ulangi blok ini untuk setiap item partner -->
                            <div class="single-item">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class="img-fluid" src="{{ asset('storage/' . $produk->image) }}" alt="" srcset="">
                                        </div>
                                        <h4 class="text-center text-dark mt-3" style="font-weight:600">
                                            {{$produk->name}}
                                        </h4>

                                        <p class="text-dark">
                                            {{ Str::limit($produk['description'], 30) }}
                                        </p>
                                        <div class="bottom">
                                            <a href="/product/{{ $produk->slug }}" class="text-primary">
                                                <i class="fas fa-arrow-right"></i> Lihat Selengkapnya
                                            </a>

                                            {{-- <a href="{{ url('produk/' . $slug) }}" target="_blank" class="text-primary">
                                                <i class="fas fa-arrow-right"></i> Lihat Selengkapnya
                                            </a> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('nodata-gif.gif') }}" alt="" width="800px">
                                </div>
                                <h4 class="text-center text-dark" style="font-weight:600">
                                    Belum ada produk
                                </h4>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <div class="team-area mt-5 bottom-less mx-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center mt-3">
                        <h4>MITRA KAMI</h4>
                        <h3>Tumbuh bersama: Kolaborasi menuju kesuksesan</h3>
                        <div class="devider"></div>

                        <div class="team-slider owl-carousel">
                            @forelse ($mitras as $mitra)
                                <div class="team-item">
                                    <img src="{{ asset('storage/' . $mitra->image) }}" alt="Mitra Image" class="img-fluid">
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('nodata-gif.gif') }}" alt="" width="800px">
                                    </div>
                                    <h4 class="text-center text-dark" style="font-weight:600">
                                        Belum ada Mitra
                                    </h4>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End collab  Area -->

    <div class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center mt-4">
                        <h4>BERITA</h4>
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
                            @php
                                $newsChunks = array_chunk($news->toArray(), 3);
                            @endphp

                            @if(count($news) > 0)
                                <div id="newsCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                            <div class="">
                                                <div class="row">
                                                    @foreach ($news as $index => $newsItem)
                                                        @if ($index < 3)
                                                            <div class="col-lg-4 col-md-6 single-item">
                                                                <div class="item">
                                                                    <div class="thumb">
                                                                        <div id="carouselImages" class="carousel slide" data-ride="carousel">
                                                                            <div class="carousel-inner">

                                                                                @php
                                                                                    $newsImages = \App\Models\NewsImage::where('news_id', $newsItem['id'])->get();
                                                                                @endphp
                                                                                @foreach ($newsImages as $imageIndex => $image)
                                                                                    <div class="carousel-item @if($imageIndex == 0) active @endif">
                                                                                        <img src="{{ asset('storage/' . $image->photo) }}" alt="Thumb">
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                            <a class="carousel-control-prev" href="#carouselImages" role="button" data-slide="prev">
                                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                <span class="sr-only">Previous</span>
                                                                            </a>
                                                                            <a class="carousel-control-next" href="#carouselImages" role="button" data-slide="next">
                                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                <span class="sr-only">Next</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="date text-uppercase">
                                                                            {{ \Carbon\Carbon::parse($newsItem['created_at'])->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}
                                                                        </div>
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
                                                                            <a href="blog-single-with-sidebar.html">{{ $newsItem['title'] }}</a>
                                                                        </h4>
                                                                        <p class="line-clamp">{!! Str::limit($newsItem['description'], 80) !!}
                                                                        </p>
                                                                        <a href="/berita/{{ $newsItem->slug }}" class="btn btn-outline-primary rounded-pill py-2 px-4 text-dark">Baca Selengkapnya</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                                <div class="col-md-12 pagi-area text-center mb-5 mt-3">
                                                                    <a class="text-primary" href="">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                                            <path fill="currentColor"
                                                                                d="M16.15 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                                                                        </svg> Lihat Berita Lainnya
                                                                    </a>
                                                                </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            @else
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('nodata-gif.gif') }}" alt="" width="800px">
                                </div>
                                <h4 class="text-center text-dark" style="font-weight:600">
                                    Belum ada Berita
                                </h4><br>
                            </div>
                            @endif

                            <!-- Pagination -->

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    {{-- <div class="gallery-area overflow-hidden default-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center mt-4">
                        <h4>portofolio</h4>
                        <h3>Inspirasi dari Karya: Portfolio Hummatech Menggambarkan Keunggulan Produk</h3>
                        <div class="devider"></div>
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
                                    <img src="assets/images/banner/3.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Startup Funding</a></h4>
                                        <span>Finance, Assets</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/images/banner/3.jpg" class="item popup-gallery">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item wide">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/images/banner/3.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Accounting Advisory</a></h4>
                                        <span>Creative, Minimal</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/images/banner/3.jpg" class="item popup-gallery">
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
                                    <img src="assets/images/big-lightgallry/01.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Merger & Acquisition</a></h4>
                                        <span>Benifits, Business</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/images/big-lightgallry/01.jpg" class="item popup-gallery">
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
                                    <img src="assets/images/big-lightgallry/02.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Assets For Technology</a></h4>
                                        <span>Invest, Earning</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/images/big-lightgallry/02.jpg" class="item popup-gallery">
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
                                    <img src="assets/images/big-lightgallry/03.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Business Matching</a></h4>
                                        <span>Finance, Assets</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/images/big-lightgallry/03.jpg" class="item popup-gallery">
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
                                    <img src="assets/images/banner/2.jpg" alt="Thumb">
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <h4><a href="project-single.html">Startup Funding</a></h4>
                                        <span>Finance, Assets</span>
                                    </div>
                                    <div class="button">
                                        <a href="assets/images/banner/2.jpg" class="item popup-gallery">
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
    </div> --}}

    <div class="services-details-area default-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center mt-4">
                        <h4>portofolio</h4>
                        <h3>Inspirasi dari Karya: Portfolio Hummatech Menggambarkan Keunggulan Produk</h3>
                        <div class="devider"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="services-details-items">
                <div class="row">
                    <div class="col-lg-4 services-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget services-list">
                            <div class="content">
                                <ul>
                                    <li class="current-item"><a href="#">Social Media marketing</a></li>
                                    <li><a href="#">Content Marketing</a></li>
                                    <li><a href="#">Competitor Research</a></li>
                                    <li><a href="#">Keyward Research</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-8 services-single-content">

                        <div class="gallery-area overflow-hidden pt-3">
                            <div class="container">
                                <div class="case-items-area">
                                    <div class="masonary">
                                        <div id="portfolio-grid" class="gallery-items colums-3">
                                            <!-- Single Item -->
                                            <div class="pf-item">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img src="assets/images/banner/3.jpg" alt="Thumb">
                                                    </div>
                                                    <div class="content">
                                                        <div class="info">
                                                            <h4><a href="project-single.html">Startup Funding</a></h4>
                                                            <span>Finance, Assets</span>
                                                        </div>
                                                        <div class="button">
                                                            <a href="assets/images/banner/3.jpg" class="item popup-gallery">
                                                                <i class="fas fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Item -->

                                            <!-- Single Item -->
                                            <div class="pf-item wide">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img src="assets/images/banner/3.jpg" alt="Thumb">
                                                    </div>
                                                    <div class="content">
                                                        <div class="info">
                                                            <h4><a href="project-single.html">Accounting Advisory</a></h4>
                                                            <span>Creative, Minimal</span>
                                                        </div>
                                                        <div class="button">
                                                            <a href="assets/images/banner/3.jpg" class="item popup-gallery">
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
                                                        <img src="assets/images/big-lightgallry/01.jpg" alt="Thumb">
                                                    </div>
                                                    <div class="content">
                                                        <div class="info">
                                                            <h4><a href="project-single.html">Merger & Acquisition</a></h4>
                                                            <span>Benifits, Business</span>
                                                        </div>
                                                        <div class="button">
                                                            <a href="assets/images/big-lightgallry/01.jpg" class="item popup-gallery">
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
                                                        <img src="assets/images/big-lightgallry/02.jpg" alt="Thumb">
                                                    </div>
                                                    <div class="content">
                                                        <div class="info">
                                                            <h4><a href="project-single.html">Assets For Technology</a></h4>
                                                            <span>Invest, Earning</span>
                                                        </div>
                                                        <div class="button">
                                                            <a href="assets/images/big-lightgallry/02.jpg" class="item popup-gallery">
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
                                                        <img src="assets/images/big-lightgallry/03.jpg" alt="Thumb">
                                                    </div>
                                                    <div class="content">
                                                        <div class="info">
                                                            <h4><a href="project-single.html">Business Matching</a></h4>
                                                            <span>Finance, Assets</span>
                                                        </div>
                                                        <div class="button">
                                                            <a href="assets/images/big-lightgallry/03.jpg" class="item popup-gallery">
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
                                                        <img src="assets/images/banner/2.jpg" alt="Thumb">
                                                    </div>
                                                    <div class="content">
                                                        <div class="info">
                                                            <h4><a href="project-single.html">Startup Funding</a></h4>
                                                            <span>Finance, Assets</span>
                                                        </div>
                                                        <div class="button">
                                                            <a href="assets/images/banner/2.jpg" class="item popup-gallery">
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

                    </div>



                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".team-slider").owlCarousel({
            items: 5,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                },
                992: {
                    items: 5
                }
            }
        });
    });
</script>
@endsection
