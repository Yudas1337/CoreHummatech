@extends('landing.layouts.layouts.app')

@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

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

        @media screen and (max-width: 992px) {
            .about-us-area .about-triangle {
                right: 0;
            }

            .about-us-area .thumb {
                padding-top: 50px;
                padding-right: unset;
            }
        }

        .pagination {
            display: flex !important;
            gap: .5rem;
        }

        .pagination .page-item {
            margin: 0 !important;
        }

        .pagination .page-item .page-link {
            padding: .75rem 1rem !important;
            border-radius: 8px;
            margin: 0;
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
                    <h1>Mitra Kami</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Mitra Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @forelse ($mitras as $mitra)
        <div class="work-process-area features-area default-padding-bottom py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Mitra kami</h4>
                            <h2>{{ $mitra->name }}</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xxl-3 col-xl-2 mt-2">
                        @forelse ($mitra->collab as $collab)
                            <img src="{{ asset('storage/' . $collab->image) }}" alt="" width="200px">
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
