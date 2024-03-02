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
      ]
    }
    </script>
@endsection

@section('content')
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ asset('assets-home/img/banner/4.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Lowongan</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Lowongan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us-area default-padding">
        <div class="container">
            <img src="{{ asset('assets-home/img/about-polygon.svg') }}" class="about-triangle" alt="Polygon" />
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h4 class="subtitle">Lorem ipsum dolor</h4>
                        <h2>Lorem ipsum dolor sit amet consectetur. Consequat nulla massa amet at. Donec sed </h2>
                        <p>
                            Kini <a class="text-primary" href="{{ url('/') }}">Hummatech</a>
                            bertransformasi menjadi perusahaan yang mampu menjawab
                            tantangan di era revolusi industri 4.0 dengan menciptakan produk berbasis
                            integrated system berupa perangkat lunak berbasis web dan mobile, Internet of Things
                            (IoT), Artificial Intelligence (AI), Game, dan
                            Augmented Reality.
                        </p>

                        <a class="btn btn-gradient effect btn-md" href="{{ url('/') }}">Unduh Portofolio</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="{{ asset('assets-home/img/about/5.jpg') }}" alt="Thumb">
                            {{-- <h2><strong>28</strong> years of <br> working experience</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="work-process-area features-area default-padding-bottom py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Alur Kerja</h4>
                        <h3>"Kendalikan Alur Kerja Anda: Strategi Efektif untuk Produktivitas dan Efisiensi"</h3>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
