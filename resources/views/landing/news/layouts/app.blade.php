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
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="G" class="letters-loading">
                        G
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
    @include('landing.news.layouts.header')
    <!-- End Header -->
    <style>
        .custom-tabs {
          padding-top: 25px;
          padding-bottom: 2px;
      }

      .custom-tabs li {
          margin-right: 80px;
      }

      .custom-tabs li a {
          position: relative;
      }

      .custom-tabs li a:after {
          content: "";
          position: absolute;
          bottom: 0;
          left: 0;
          width: 100%;
          height: 5px;
          background-color: transparent;
          transition: background-color 0.3s;
      }

      .custom-tabs li.active a:after {
          background-color: #337ab7;
      }
      </style>
      <div class="about-us-area default-padding">
          <div class="container">
              <ul class="nav navbar-nav custom-tabs">
                  <li class="active"><a href="#">Terbaru</a></li>
                  <li><a href="#">It technology</a></li>
                  <li><a href="#">Berita perusahaan</a></li>
                  <li><a href="#">Teknologi</a></li>
                  <li><a href="#">tutorial</a></li>
                  <li><a href="#">Businnes</a></li>
              </ul>
          </div>
      </div>
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
                                Melayani jasa pengembanganperangkat lunak, baik berbasis desktop, web, dan mobile apps.
                                Mitra kami meliputi perorangan, swasta, bahkan juga lembaga pemerintahan.
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
                                    <a href="{{ url('/') }}"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('about-us') }}"><i class="fas fa-angle-right"></i> About us</a>
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
                                            Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang Ploso,
                                            Kabupaten Malang, Jawa Timur 65152.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:info@hummatech.com">info@hummatech.com</a>
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
                <div class="footer-bottom-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>&copy; Copyright 2021. All Rights Reserved by <a
                                    href="{{ url('/') }}">Hummatech</a></p>
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
