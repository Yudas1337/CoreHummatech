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
    <div class="thumb-services-area inc-thumbnail default-padding bottom-less">
        <div class="container">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-5">
                        <div class="thumb">
                            <img src="{{ asset('assets_landing/produk/milink.png') }}" alt="Thumb" >
                        </div>
                    </div>
                    <div class="col-lg-6 info">
                        <h1>Milink.id</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Tincidunt pellentesque 
                            pellentesque sed in. Sit nunc velit aliquam quis faucibus nibh 
                            nisl pellentesque. Massa natoque mattis quisque ut molestie turpis 
                            at fusce integer. Tincidunt lorem egestas sed ipsum proin. Ac 
                            vestibulum euismod amet dignissim et lobortis blandit bibendum. 
                            Nulla venenatis vitae dui sapien duis dolor sed ut dictum. Neque 
                            diam senectus suspendisse id. Pretium congue erat pharetra aliquet. 
                            Platea aliquet aliquam ac vitae senectus quis.
                        </p>
                        <a class="btn btn-gradient effect btn-md" href="">Kunjungi website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services-area bg-gray default-padding bottom-less">
        <div class="right-shape">
            <img src="{{ asset('assets-home/img/shape/9.png') }}" alt="Shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>FITUR-FITUR</h4>
                        <h2>Fitur - Fitur Milink.id yang mungkin dapat membantu anda</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full w-75">
            <div class="services-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="info">
                                <h4>Kustom Tautan</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Enim mi amet morbi quam varius varius faucibus suspendisse amet iaculis pulvinar.
                                </p>
                                <div class="bottom">
                                    <span>01</span>
                                    <a href="">Fitur</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="info">
                                <h4>Kustom Tautan</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Enim mi amet morbi quam varius varius faucibus suspendisse amet iaculis pulvinar.
                                </p>
                                <div class="bottom">
                                    <span>02</span>
                                    <a href="">Fitur</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="info">
                                <h4>Kustom Tautan</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Enim mi amet morbi quam varius varius faucibus suspendisse amet iaculis pulvinar.
                                </p>
                                <div class="bottom">
                                    <span>03</span>
                                    <a href="">Fitur</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="info">
                                <h4>Kustom Tautan</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Enim mi amet morbi quam varius varius faucibus suspendisse amet iaculis pulvinar.
                                </p>
                                <div class="bottom">
                                    <span>04</span>
                                    <a href="">Fitur</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="info">
                                <h4>Kustom Tautan</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Enim mi amet morbi quam varius varius faucibus suspendisse amet iaculis pulvinar.
                                </p>
                                <div class="bottom">
                                    <span>05</span>
                                    <a href="">Fitur</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials-area default-padding">
        <!-- Fixed Shape -->
        <div class="fixed-shape" style="background-image: url(../assets-home/img/shape/circle.png);"></div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="testimonial-items bg-gradient-gray">
                <div class="row align-center bg-gradient-gray">
                    <div class="col-lg-7 testimonials-content">
                        <div class="testimonials-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods defective at.
                                        Sympathize interested simplicity at do projecting increasing terminated. As
                                        edward settle limits at in. Chamber reached do he nothing be.
                                    </p>
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="{{ asset('assets-home/img/teams/5.jpg') }}" alt="Author">
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
                                        Otherwise concealed favourite frankness on be at dashwoods defective at.
                                        Sympathize interested simplicity at do projecting increasing terminated. As
                                        edward settle limits at in. Chamber reached do he nothing be.
                                    </p>
                                    <div class="provider">
                                        <div class="thumb">
                                            <img src="{{ asset('assets-home/img/teams/6.jpg') }}" alt="Author">
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
                        <h2>Testimoni Membuktikan Kualitas produk Kami</h2>
                        <p>
                            Tingkatkan Kepercayaan Anda: Dengarlah Suara Pelanggan Kami Melalui Testimoni Mereka
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End testimonials Area -->

    <!-- start faq -->
    <div class="faq-content-area mb-5 pb-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>FAQ</h4>
                        <h2>Temukan Jawaban Anda: FAQ Kami Memudahkan Anda Memahami Layanan Kami"</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="faq-items">
                <div class="row align-center">

                    <div class="col-lg-10 offset-lg-1">
                        <div class="faq-content wow fadeInUp">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                               Why is collaborative learning so important? 
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. 
                                            </p>
                                            <div class="ask-question">
                                                <span>Still no luck?</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              Do you offer free trials?
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. 
                                            </p>
                                            <div class="ask-question">
                                                <span>Still no luck?</span> <a href="#">Ask a question</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          What kind of support do you offer?
                                      </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. 
                                            </p>
                                            <div class="ask-question">
                                                <span>Still no luck?</span> <a href="#">Ask a question</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                          Can I share my courses with non-registered users?
                                      </h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. 
                                            </p>
                                            <div class="ask-question">
                                                <span>Still no luck?</span> <a href="#">Ask a question</a>
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
    <!-- End Faq -->
@endsection
@section('script')
    <script>
        $('.testimonials-carousel').owlCarousel({
            loop: false,
            nav: true,
            margin:30,
            dots: false,
            autoplay: false,
            items: 1,
            navText: [
                "<i class='arrow_left'></i>",
                "<i class='arrow_right'></i>"
            ]
        });
    </script>
@endsection