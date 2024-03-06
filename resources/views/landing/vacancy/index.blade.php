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

    <div class="about-us-area default-padding">
        <div class="container">
            <img src="{{ asset('assets-home/img/about-polygon.svg') }}" class="about-triangle" alt="Polygon" />
            <div class="about-items">
                @if($profileData->count() > 0)
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h4 class="subtitle">{{ $profileData[0]->title }}</h4>
                        <h2>{{ $profileData[0]->subtitle }}</h2>
                        <p>{!! Str::limit($profileData[0]->description, 200) !!}</p>

                        @if($profileData[0]->proposal)
                        <a class="btn btn-gradient effect btn-md" href="{{ Storage::url($profileData[0]->proposal) }}">Unduh Portofolio</a>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="{{ Storage::url($profileData[0]->image) }}" alt="Thumb">
                        </div>
                    </div>
                </div>
                @endif
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

        <div class="py-2 mb-5">
            <div class="title-service">
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

    </div>


@endsection
