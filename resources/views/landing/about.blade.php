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
        style="background-image: url({{ asset('assets-home/img/banner/10.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Tentang Kami</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Tentang Kami</li>
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
                        <h4 class="subtitle">Profile Perusahaan</h4>
                        @forelse ($profiles as $profile)
                            <h2>{{ $profile->subtitle }}</h2>
                            <p>
                                {!! Str::limit($profile->description, 200) !!}
                            </p>

                            <a class="btn btn-gradient effect btn-md" href="{{ asset('storage/' .$profile->proposal) }}" download="{{ asset('storage/' .$profile->proposal) }}" >Unduh Portofolio</a>
                        </div>
                        <div class="col-lg-6">
                            <div class="thumb">
                                <img src="{{ asset('storage/'. $profile->image) }}" alt="Thumb">
                            </div>
                        </div>

                        @empty
                            <p>Belum ada profile perusahaan</p>
                        @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="work-process-area features-area default-padding-bottom py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Visi dan Misi</h4>
                        <h2>Mewujudkan Visi Kami Melalui Misi yang Berkelanjutan dan Tindakan Nyata</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="work-process-items features-content">
                <div class="row">
                    @forelse ($visionMisions as $key=>$visionMision)
                        <div class="single-item col-lg-4 col-md-6 mb-4 wow fadeInRight" data-wow-delay="300ms"
                            style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                            <div class="item">
                                <i class="flaticon-speech-bubble"></i>
                                <div class="top">
                                    <span>{{ sprintf("%02d", ++$key) }}</span>
                                    <h4>Visi</h4>
                                </div>
                                <p>
                                    {{ $visionMision->vision }}
                                </p>
                                <a href="about-us.html"><i class="arrow_right"></i></a>
                            </div>
                        </div>

                        @foreach ($missions as $mission)
                            <div class="single-item col-lg-4 col-md-6 mb-4 wow fadeInRight" data-wow-delay="500ms"
                                style="visibility: visible; animation-delay: 500ms; animation-name: fadeInRight;">
                                <div class="item">
                                    <i class="flaticon-label"></i>
                                    <div class="top">
                                        <span>{{ sprintf("%02d", ++$key) }}</span>
                                        <h4>Misi</h4>
                                    </div>
                                    <p>
                                        {{ $mission->mission }}
                                    </p>
                                    <a href="about-us.html"><i class="arrow_right"></i></a>
                                </div>
                            </div>
                        @endforeach

                    @empty
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('nodata-gif.gif') }}" alt="" width="800px">
                        </div>
                        <h4 class="text-center text-dark" style="font-weight:600">
                            Belum ada visi-misi
                        </h4>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="work-process-area features-area default-padding-bottom pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>STRUKTUR ORGANISASI</h4>
                        <h2>Fondasi Keberhasilan dan Kolaborasi di Tempat Kerja</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="work-process-items features-content">
                <div class="text-center">
                    <img src="{{ asset('assets_landing/stuktur.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="work-process-area features-area default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>STRUKTUR USAHA</h4>
                        <h2>Struktur Usaha yang Membawa Inovasi dan Keberlanjutan</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="work-process-items features-content">
                <div class="text-center">
                    <img src="{{ asset('assets_landing/struktur-usaha.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="team-area default-padding bottom-less">
        <div class="container">
            <div class="team-items text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>TIM KAMI</h4>
                            <h2>Bersatu Demi Kesuksesan: Introducing Tim Kami yang Berdedikasi dan Profesional</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets-home/img/team/1.jpg') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>M. Abdul Kader</h4>
                                    <span>Project Leader</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets-home/img/team/2.jpg') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Farah Amalia</h4>
                                    <span>Website Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets-home/img/team/3.jpg') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Ni'am</h4>
                                    <span>UI/UX Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets-home/img/team/4.jpg') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Nesa</h4>
                                    <span>Website Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets-home/img/team/5.jpg') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Rendy</h4>
                                    <span>Website Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets-home/img/team/6.jpg') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Amir Zuhdi Wibowo</h4>
                                    <span>Website Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets-home/img/team/6.jpg') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Dito</h4>
                                    <span>Website Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets-home/img/team/6.jpg') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Femas</h4>
                                    <span>App Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets-home/img/team/6.jpg') }}" alt="Thumb">
                                <div class="social">
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="share">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>Panji</h4>
                                    <span>Website Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var delay = 500;
            $('[class^="wow fadeInRight"]').each(function(index) {
                $(this).attr('data-wow-delay', delay + 'ms');
                delay += 300;
            });
        });
    </script>
@endsection
