<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from validthemes.net/site-template/earna/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Feb 2024 03:10:25 GMT -->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{{ config('app.name', 'Laravel') }}" />
    <meta name="title" content="Hummatech - Perusahaan Software Terbaik di Malang" />
    <meta name="description" content="Hummatech adalah perusahaan software development terbaik di Malang. Kami menyediakan solusi perangkat lunak yang inovatif dan berkualitas tinggi." />

    <!-- ========== Page Title ========== -->
    @hasSection('title')
        <title>{!! "{$__env->yieldContent('title')} &mdash; " . config('app.name', 'Laravel') !!}</title>
    @else
        <title>{{ config('app.name', 'Laravel') }}</title>
    @endif

    @yield('seo')

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('mobilelogo.png') }}" type="image/x-icon">

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
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <!-- ========== End Stylesheet ========== -->

    @yield('style')

    <style>
        footer::after {
            background: url({{ asset('assets-home/img/map.svg') }});
        }
    </style>

</head>
<body>

    <!-- Start Preloader
    ============================================= -->
    <div id="preloader">
        <div id="earna-preloader" class="earna-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
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
    @include('landing.layouts.header')
    <!-- End Header -->

    @yield('content')

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{ asset('assets/images/LOGO-HUMMATECH_Putih.png') }}"
                                style="height: 48px;width: auto;" alt="Logo">
                            <p>
                                bertransformasi menjadi perusahaan yang mampu menjawab tantangan di era revolusi industri 4.0
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Sosial Media</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Youtube</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Instagram</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Facebook</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i>  Linkedin</a>
                                </li>
                                <li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Layanan Kami</h4>
                            <ul>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Software Development</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i>  IT Consultan</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Magang/Pkl</a>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fas fa-angle-right"></i> Kelas Industri</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Pengadaan Hardware</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Pelatihan Programing & Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Guru Tamu</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Guru Magang</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Hubungi Kami</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Alamat:</strong>
                                            Perum. Permata Regency 1 Blok 10 No. 28 Kec. Karang Ploso, Kab. Malang, Jawa Timur, Indonesia
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:hummatech.id@gmail.com">hummatech.id@gmail.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="https://wa.me/6285176777785">085176777785</a>
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
                <div class="footer-bottom-box mt-0 p-4">
                    <div class="row">
                        <div class="col-lg-8">
                            <p>&copy; Copyright 2021. All Rights Reserved by <a
                                    href="{{ url('/') }}">PT. Humma Teknologi DIgital Indonesia</a></p>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from validthemes.net/site-template/earna/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Feb 2024 03:11:02 GMT -->

</html>
