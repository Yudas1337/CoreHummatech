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
                    <h1>Produk</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Produk</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="thumb-services-area inc-thumbnail default-padding bottom-less">
        <div class="right-shape">
            <img src="assets-home/img/shape/9.png" alt="Shape">
        </div>
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

                        <a class="btn btn-stroke-gradient effect btn-md" href="{{ url('produk/milink') }}">Lihat Detail</a>
                        <a class="btn btn-gradient effect btn-md" href="">Kunjungi website</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-shape">
            <img src="assets-home/img/shape/9.png" alt="Shape">
        </div>
        <div class="container my-5 py-5">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h1>Mischool</h1>
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

                        <a class="btn btn-stroke-gradient effect btn-md" href="">Lihat Detail</a>
                        <a class="btn btn-gradient effect btn-md" href="">Kunjungi website</a>
                    </div>
                    <div class="col-lg-5">
                        <div class="thumb">
                            <img src="{{ asset('assets_landing/produk/milink.png') }}" alt="Thumb" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-shape">
            <img src="assets-home/img/shape/9.png" alt="Shape">
        </div>
        <div class="container">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-5">
                        <div class="thumb">
                            <img src="{{ asset('assets_landing/produk/milink.png') }}" alt="Thumb" >
                        </div>
                    </div>
                    <div class="col-lg-6 info">
                        <h1>Jurnal Mengajar</h1>
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

                        <a class="btn btn-stroke-gradient effect btn-md" href="">Lihat Detail</a>
                        <a class="btn btn-gradient effect btn-md" href="">Kunjungi website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
