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

    <style>
        /* Custom styles for the timeline */
        .timeline {
            position: relative;
            padding: 40px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            width: 4px;
            height: 100%;
            background: #ced4da;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }

        .timeline-item {
            margin-bottom: 50px;
            position: relative;
        }

        .timeline-item::after {
            content: '';
            display: table;
            clear: both;
        }

        .timeline-item-content {
            position: relative;
            width: 45%;
            border-radius: 5px;
            float: left;
            padding-right: 3rem;
        }

        .timeline-item-content h2 {
            margin-top: 0;
        }

        @media screen and (max-width: 992px) {
            .timeline-item-content {
                padding-right: .75rem;
            }

            .timeline-item-content h2 {
                font-size: 1rem;
                font-weight: bold;
                margin-bottom: .25rem;
            }

            .timeline-item-content p,
            .timeline-item-content .timeline-item-date {
                font-size: .75rem;
                line-height: 1.25;
                margin-bottom: 0;
            }
        }

        .timeline-item-date {
            font-size: 14px;
            color: #6c757d;
        }

        .timeline-number {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 5rem;
            height: 5rem;
            background-color: #007bff;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.5rem;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
        }

        @media screen and (max-width: 992px) {
            .timeline-number {
                width: 2rem;
                height: 2rem;
                font-size: .875rem;
            }
        }

        /* Alternate the position of the timeline items */
        .timeline .timeline-item:nth-child(even) .timeline-item-content {
            float: right;
            text-align: right;
            padding-left: 3rem;
            padding-right: 0;
        }

        @media screen and (max-width: 992px) {
            .timeline .timeline-item:nth-child(even) .timeline-item-content {
                padding-left: .75rem;
                padding-right: 0;
            }
        }

        .timeline .timeline-item:nth-child(even) .timeline-item-content::before {
            right: 100%;
            border-right: 8px solid #f8f9fa;
            border-left: none;
        }

        .timeline .timeline-item:nth-child(odd) .timeline-item-content::before {
            left: 100%;
            border-left: 8px solid #f8f9fa;
            border-right: none;
        }

        .timeline .timeline-item:nth-child(even) .timeline-item-content::after,
        .timeline .timeline-item:nth-child(odd) .timeline-item-content::after {
            display: none;
        }

        @media screen and (min-width: 992px) {
            .text-lg-start {
                text-align: left !important;
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
          "name": "Lowongan",
          "item": "{{ url('/data/lowongan') }}"
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

    @if ($vacancyData->count() > 0)
        <div class="about-us-area default-padding">
            <div class="container">
                <img src="{{ asset('assets-home/img/about-polygon.svg') }}" class="about-triangle" alt="Polygon" />
                <div class="about-items">
                    <div class="row align-center">
                        <div class="col-lg-6 info text-center text-lg-start">
                            <h4 class="subtitle text-break">{{ $vacancyData[0]->subtitle }}</h4>
                            <h2>{{ $vacancyData[0]->title }}</h2>
                            <img src="{{ Storage::url($vacancyData[0]->image) }}"
                                class="w-75 mx-auto d-block d-lg-none mb-3" alt="Thumb" />
                            <p>{!! Str::limit($vacancyData[0]->description, 200) !!}</p>

                            <a class="btn btn-gradient effect btn-md" target="_blank"
                                href="{{ $vacancyData[0]->link }}">Lihat Selengkapnya</a>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block d-md-none">
                            <div class="thumb">
                                <img src="{{ Storage::url($vacancyData[0]->image) }}" class="w-100" alt="Thumb" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

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

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-number">01</div>
                                    <div class="timeline-item-content">
                                        <h2>Event Title</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <span class="timeline-item-date">March 1, 2024</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-number">02</div>
                                    <div class="timeline-item-content">
                                        <h2>Another Event Title</h2>
                                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="timeline-item-date">March 5, 2024</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-number">03</div>
                                    <div class="timeline-item-content">
                                        <h2>Another Event Title</h2>
                                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="timeline-item-date">March 5, 2024</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-number">04</div>
                                    <div class="timeline-item-content">
                                        <h2>Another Event Title</h2>
                                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="timeline-item-date">March 5, 2024</span>
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
