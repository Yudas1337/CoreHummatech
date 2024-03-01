@extends('landing.layouts.layouts.app')

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
            padding-right: 50px;
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

        @media screen and (max-width: 992px) {
            .about-us-area .about-triangle {
                right: 0;
            }

            .about-us-area .thumb {
                padding-top: 50px;
                padding-right: unset;
            }
        }
    </style>
@endsection

@section('seo')
    <!-- ========== Breadcrumb Markup (JSON-LD) ========== -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Beranda",
          "item": "{{ url('/') }}"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Tentang Kami",
          "item": "{{ url('/about-us') }}"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Produk",
          "item": "{{ url('/produk') }}"
        },
      ]
    }
    </script>
@endsection

@section('content')
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('assets-home/img/banner/10.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Software Development</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Layanan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">

                    <div class="col-lg-8 services-single-content wow fadeInUp">
                        <img src="{{ asset('assets-home/img/blog/11.jpg') }}" alt="Thumb">
                        <h2 class="wow fadeInLeft">Software Development</h2>
                        <p class="wow fadeInLeft">
                            We denounce with righteous indige nation and dislike men who are so beguiled and demo realized
                            by the
                            charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and
                            trouble that
                            are bound to ensue cannot foresee. These cases are perfectly simple and easy to distinguish. In
                            a free hour,
                            when our power of choice is untrammelled data structures manages data in technology.
                        </p>
                        <a class="btn btn-gradient effect btn-md" href="">Kunjungi website</a>

                        <div class="mt-5">
                            <div class="title-service">
                                <h4 class="m-0">Produk Yang Dihasilkan</h4>
                                <div class="dash"></div>
                            </div>

                            <div class="about-content-area pb-5 mb-5">
                                <div class="row">
                                    <div class="col-lg-5 thumb wow fadeInUp">
                                        <div class="img-box">
                                            <img src="{{ asset('assets-home/img/about/2.jpg') }}" alt="Thumb">
                                            <div class="shape" style="background-image: url(assets/img/shape/1.png);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow fadeInDown">
                                        <h2>Milink.id</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur.
                                            Tincidunt pellentesque pellentesque sed in.
                                            Sit nunc velit aliquam quis faucibus nibh nisl pellentesque.
                                            Massa natoque mattis quisque ut molestie turpis at fusce integer.
                                            Tincidunt lorem egestas
                                        </p>
                                        <a class="btn btn-gradient effect btn-md" href="">Lihat detail</a>
                                        <a class="btn btn-gradient effect btn-md" href="">Kunjungi website</a>
                                    </div>
                                </div>
                            </div>

                            <div class="about-content-area pb-5 mb-5">
                                <div class="row product-service">
                                    <div class="col-lg-5 thumb wow fadeInUp">
                                        <div class="img-box">
                                            <img src="{{ asset('assets-home/img/about/2.jpg') }}" alt="Thumb">
                                            <div class="shape" style="background-image: url(assets/img/shape/1.png);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow fadeInDown">
                                        <h2>Mischool</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur.
                                            Tincidunt pellentesque pellentesque sed in.
                                            Sit nunc velit aliquam quis faucibus nibh nisl pellentesque.
                                            Massa natoque mattis quisque ut molestie turpis at fusce integer.
                                            Tincidunt lorem egestas
                                        </p>
                                        <a class="btn btn-gradient effect btn-md" href="">Lihat detail</a>
                                        <a class="btn btn-gradient effect btn-md" href="">Kunjungi website</a>
                                    </div>
                                </div>
                            </div>

                            <div class="about-content-area my-5">
                                <div class="row">
                                    <div class="col-lg-5 thumb wow fadeInUp">
                                        <div class="img-box">
                                            <img src="{{ asset('assets-home/img/about/2.jpg') }}" alt="Thumb">
                                            <div class="shape" style="background-image: url(assets/img/shape/1.png);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow fadeInDown">
                                        <h2>Jurnal mengajar</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur.
                                            Tincidunt pellentesque pellentesque sed in.
                                            Sit nunc velit aliquam quis faucibus nibh nisl pellentesque.
                                            Massa natoque mattis quisque ut molestie turpis at fusce integer.
                                            Tincidunt lorem egestas
                                        </p>
                                        <a class="btn btn-gradient effect btn-md" href="">Lihat detail</a>
                                        <a class="btn btn-gradient effect btn-md" href="">Kunjungi website</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-5 py-3">
                            <div class="title-service">
                                <h4 class="m-0">Testimoni Layanan</h4>
                                <div class="dash"></div>
                            </div>

                            <div class="testimonials-area">
                                <div class="container">
                                    <div class="testimonial-items bg-gradient-gray">
                                        <div class="row align-center bg-gradient-gray">
                                            <div class="col-lg-7 testimonials-content">
                                                <div class="testimonials-carousel owl-carousel owl-theme">
                                                    <!-- Single Item -->
                                                    <div class="item">
                                                        <div class="info">
                                                            <p>
                                                                Otherwise concealed favourite frankness on be at dashwoods
                                                                defective at. Sympathize interested
                                                            </p>
                                                            <div class="provider">
                                                                <div class="thumb">
                                                                    <img src="{{ asset('assets-home/img/teams/5.jpg') }}"
                                                                        alt="Author">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="text-primary">Ahel Natasha</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Item -->
                                                    <!-- Single Item -->
                                                    <div class="item">
                                                        <div class="info">
                                                            <p>
                                                                Otherwise concealed favourite frankness on be at dashwoods
                                                                defective at. Sympathize interested
                                                            </p>
                                                            <div class="provider">
                                                                <div class="thumb">
                                                                    <img src="{{ asset('assets-home/img/teams/6.jpg') }}"
                                                                        alt="Author">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="text-primary">Ahel Natasha</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Item -->
                                                </div>
                                            </div>
                                            <div class="col-lg-5 info">
                                                <h4>Testimoni</h4>
                                                <h3>Testimoni Membuktikan Kualitas produk Kami</h3>
                                                <p>
                                                    Tingkatkan Kepercayaan Anda: Dengarlah Suara Pelanggan Kami Melalui
                                                    Testimoni Mereka
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-3 mb-5">
                            <div class="title-service">
                                <h4 class="m-0">FAQ</h4>
                                <div class="dash"></div>
                            </div>

                            <!-- Star Faq -->
                            <div class="faq-content-area">
                                <div class="faq-items">
                                    <div class="row align-center">

                                        <div class="col-lg-12 ">
                                            <div class="faq-content wow fadeInUp">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h4 class="mb-0" data-toggle="collapse"
                                                                data-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Why is collaborative learning so important?
                                                            </h4>
                                                        </div>

                                                        <div id="collapseOne" class="collapse show"
                                                            aria-labelledby="headingOne" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>
                                                                    Companions shy had solicitude favourable own. Which
                                                                    could saw guest man now heard but. Lasted my coming
                                                                    uneasy marked so should. Gravity letters i
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h4 class="mb-0 collapsed" data-toggle="collapse"
                                                                data-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Do you offer free trials?
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse"
                                                            aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>
                                                                    Companions shy had solicitude favourable own. Which
                                                                    could saw guest man now heard but. Lasted my coming
                                                                    uneasy marked so should. Gravity letters it amongst
                                                                    herself dearest an windows by. Wooded ladies she basket
                                                                    season age her uneasy saw. Discourse unwilling am no
                                                                    described dejection incommode no listening of. Before
                                                                    nature his parish boy.
                                                                </p>
                                                                <div class="ask-question">
                                                                    <span>Still no luck?</span> <a href="#">Ask a
                                                                        question</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <h4 class="mb-0 collapsed" data-toggle="collapse"
                                                                data-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                What kind of support do you offer?
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree" class="collapse"
                                                            aria-labelledby="headingThree"
                                                            data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>
                                                                    Companions shy had solicitude favourable own. Which
                                                                    could saw guest man now heard but. Lasted my coming
                                                                    uneasy marked so should. Gravity letters it amongst
                                                                    herself dearest an windows by. Wooded ladies she basket
                                                                    season age her uneasy saw. Discourse unwilling am no
                                                                    described dejection incommode no listening of. Before
                                                                    nature his parish boy.
                                                                </p>
                                                                <div class="ask-question">
                                                                    <span>Still no luck?</span> <a href="#">Ask a
                                                                        question</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingFour">
                                                            <h4 class="mb-0 collapsed" data-toggle="collapse"
                                                                data-target="#collapseFour" aria-expanded="false"
                                                                aria-controls="collapseFour">
                                                                Can I share my courses with non-registered users?
                                                            </h4>
                                                        </div>
                                                        <div id="collapseFour" class="collapse"
                                                            aria-labelledby="headingFour" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <p>
                                                                    Companions shy had solicitude favourable own. Which
                                                                    could saw guest man now heard but. Lasted my coming
                                                                    uneasy marked so should. Gravity letters it amongst
                                                                    herself dearest an windows by. Wooded ladies she basket
                                                                    season age her uneasy saw. Discourse unwilling am no
                                                                    described dejection incommode no listening of. Before
                                                                    nature his parish boy.
                                                                </p>
                                                                <div class="ask-question">
                                                                    <span>Still no luck?</span> <a href="#">Ask a
                                                                        question</a>
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
                            <!-- End Faq -->
                        </div>

                        <div class="py-2 mb-5">
                            <div class="title-service">
                                <h4 class="m-0">Syarat & Ketentuan</h4>
                                <div class="dash"></div>
                            </div>
                            <div class="terms-policy-area">
                                <div class="row">
                                    <div class="col-lg-12 m-0 p-0">
                                        <ul>
                                            <li>
                                                <span>01</span>
                                                <p>
                                                    Condimentum vitae sapien pellentesque habitant. Lectus sit amet est
                                                    placerat. Vitae proin sagittis nisl rhoncus mattis rhoncus urna
                                                    neque. General Disclaimer
                                                </p>
                                            </li>
                                            <li>
                                                <span>02</span>
                                                <p>
                                                    Morbi non arcu risus quis varius. Odio morbi quis commodo odio.
                                                    Consectetur a erat nam at lectus urna duis convallis convallis.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-2 mb-5">
                            <div class="title-service">
                                <h4 class="m-0">Daftar Pelatihan</h4>
                                <div class="dash"></div>
                            </div>
                            <div class="blog-area bottom-less">
                                <div class="container">
                                    <div class="blog-items">
                                        <div class="row">
                                            <!-- Single Item -->
                                            <div class="single-item col-lg-6 col-md-6 wow fadeInUp"
                                                data-wow-delay="300ms">
                                                <div class="item p-2">
                                                    <div class="thumb">
                                                        <img src="{{ asset('assets-home/img/blog/1.jpg') }}"
                                                            alt="Thumb">
                                                    </div>

                                                    <div class="px-3">
                                                        <h5>
                                                            Financial Planning
                                                        </h5>
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur. Amet etiam at diam
                                                            pharetra ipsum at. Cursus tempus nullam ultrices sollicitudin.
                                                        </p>
                                                        <div class="mb-3">
                                                            <a class="btn btn-stroke-gradient effect btn-sm"
                                                                href="{{ url('layanan/software-development/financial-planning') }}">Lihat
                                                                Detail</a>
                                                            <a class="btn btn-gradient effect btn-sm"
                                                                href="">Ajukan Proposal</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Item -->
                                            <!-- Single Item -->
                                            <div class="single-item col-lg-6 col-md-6 wow fadeInUp"
                                                data-wow-delay="300ms">
                                                <div class="item p-2">
                                                    <div class="thumb">
                                                        <img src="{{ asset('assets-home/img/blog/1.jpg') }}"
                                                            alt="Thumb">
                                                    </div>

                                                    <div class="px-3">
                                                        <h5>
                                                            Financial Planning
                                                        </h5>
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur. Amet etiam at diam
                                                            pharetra ipsum at. Cursus tempus nullam ultrices sollicitudin.
                                                        </p>
                                                        <div class="mb-3">
                                                            <a class="btn btn-stroke-gradient effect btn-sm"
                                                                href="{{ url('layanan/software-development/financial-planning') }}">Lihat
                                                                Detail</a>
                                                            <a class="btn btn-gradient effect btn-sm"
                                                                href="">Ajukan Proposal</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-2 mb-5">
                            <div class="title-service">
                                <h4 class="m-0">Mitra Kami</h4>
                                <div class="dash"></div>
                            </div>

                        </div>
                        <div class="py-2 mb-5">
                            <div class="title-service">
                                <h4 class="m-0">Prosedur</h4>
                                <div class="dash"></div>
                                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                                  <style>
                                    .timeline-container {
                                      position: relative;
                                    }

                                    .timeline::before {
                                      content: '';
                                      position: absolute;
                                      top: 0;
                                      bottom: 0;
                                      width: 2px;
                                      background-color: #ccc;
                                      left: 50%;
                                      margin-left: -1px;
                                    }

                                    .timeline-item {
                                      position: relative;
                                      padding: 20px;
                                      margin-bottom: 50px;
                                    }

                                    .timeline-item::after {
                                      content: '';
                                      position: absolute;
                                      top: 11px;
                                      width: 20px;
                                      height: 20px;
                                      background-color: #fff;
                                      border: 2px solid #ccc;
                                      border-radius: 50%;
                                      left: 50%;
                                      margin-left: -11px;
                                    }

                                    .timeline-item .timeline-content {
                                      position: relative;
                                      background-color: #f5f5f5;
                                      border: 1px solid #ccc;
                                      border-radius: 5px;
                                      padding: 20px;
                                    }

                                    .timeline-item .timeline-title {
                                      margin-top: 0;
                                      color: inherit;
                                      font-size: 18px;
                                      font-weight: bold;
                                    }

                                    .timeline-item .timeline-date {
                                      margin-bottom: 10px;
                                      color: #999;
                                    }

                                    .timeline-item .timeline-description {
                                      margin-bottom: 0;
                                    }
                                  </style>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="timeline-container">
                                          <div class="timeline">
                                            <div class="timeline-item">
                                              <div class="timeline-content">
                                                <h4 class="timeline-title">Event 1</h4>
                                                <p class="timeline-date">Date 1</p>
                                                <p class="timeline-description">Description 1</p>
                                              </div>
                                            </div>
                                            <div class="timeline-item">
                                              <div class="timeline-content">
                                                <h4 class="timeline-title">Event 2</h4>
                                                <p class="timeline-date">Date 2</p>
                                                <p class="timeline-description">Description 2</p>
                                              </div>
                                            </div>
                                            <!-- Tambahkan lebih banyak event di sini -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                                  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


                            </div>

                        </div>

                        <div class="py-2 mb-5">
                            <div class="title-service">
                                <h4 class="m-0">Galeri Alumni</h4>
                                <div class="dash"></div>
                            </div>
                            <div class="galeri-alumni">
                                <div class="row">
                                    <div class="wow fadeInRight col-md-12 d-flex flex-wrap mb-4">
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets-home/img/projects/1.jpg') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Angkatan 1903 - 1922</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque
                                                sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa
                                            </p>
                                            <div class="btn btn-gradient effect btn-sm">Lihat Detail Alumni</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="galeri-alumni">
                                <div class="row">
                                    <div class="wow fadeInRight col-md-12 d-flex flex-wrap mb-4">
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets-home/img/projects/1.jpg') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Angkatan 1907 - 1978</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque pellentesque
                                                sed in. Sit nunc velit aliquam quis faucibus nibh nisl pellentesque. Massa
                                            </p>
                                            <div class="btn btn-gradient effect btn-sm">Lihat Detail Alumni</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-2 mb-5">
                            <div class="title-service">
                                <h4 class="m-0">Galeri</h4>
                                <div class="dash"></div>
                            </div>
                            <div class="galeri">
                                <div class="d-flex flex-wrap col-12">
                                    <img src="{{ asset('assets-home/img/projects/1.jpg') }}"
                                        style="object-fit: cover; width: 21vw; height: 15vw" class="m-2">
                                    <img src="{{ asset('assets-home/img/projects/1.jpg') }}"
                                        style="object-fit: cover; width: 21vw; height: 15vw" class="m-2">
                                    <img src="{{ asset('assets-home/img/projects/1.jpg') }}"
                                        style="object-fit: cover; width: 21vw; height: 15vw" class="m-2">
                                    <img src="{{ asset('assets-home/img/projects/1.jpg') }}"
                                        style="object-fit: cover; width: 21vw; height: 15vw" class="m-2">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 services-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget services-list">
                            <h4 class="widget-title">Daftar Layanan</h4>
                            <div class="content">
                                <ul>
                                    <li class="current-item"><a href="#">Software Development</a></li>
                                    <li><a href="#">IT Consultan</a></li>
                                    <li><a href="#">Magang / PKL</a></li>
                                    <li><a href="#">Kelas Industri</a></li>
                                    <li><a href="#">Pengadaan Hardware</a></li>
                                    <li><a href="#">Pelatihan Programing & Digital Marketing</a></li>
                                    <li><a href="#">Guru Tamu</a></li>
                                    <li><a href="#">Guru Magang</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <div class="single-widget quick-contact text-light"
                            style="background-image: url(assets/img/about/1.jpg);">
                            <div class="content">
                                <i class="fas fa-phone"></i>
                                <h4>Need any help?</h4>
                                <p>
                                    We are here to help our customer any time. You can call on 24/7 To Answer Your Question.
                                </p>
                                <h2>(012) 6679545</h2>
                            </div>
                        </div>
                        <!-- Single Widget -->
                        <div class="single-widget brochure">
                            <h4 class="widget-title">Brochure</h4>
                            <ul>
                                <li><a href="#"><i class="fas fa-file-pdf"></i> Download Brochure </a></li>
                                <li><a href="#"><i class="fas fa-file-pdf"></i> Company Details </a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
