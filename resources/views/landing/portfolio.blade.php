@extends('landing.layouts.layouts.app')
@section('title' , 'Portfolio')

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

        @media screen and (max-width: 992px) {
            .about-items .btn {
                padding: 1rem 1.5rem;
            }
        }
    </style>
    <style>
        .custom-tabs {
            display: flex;
            justify-content: space-between;
            align-items: center;
            overflow: hidden;
            overflow-x: auto;
            padding-top: 2rem;
            flex-wrap: nowrap;
        }

        .custom-tabs li a {
            margin-right: 1rem;
            text-transform: uppercase;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
            white-space: nowrap;
        }

        .custom-tabs li:last-child a {
            margin-right: 0;
        }

        .custom-tabs li.active a {
            border-bottom: 4px solid #1273eb;
            color: #1273eb;
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
            "name": "Produk",
            "item": "{{ url('/produk') }}"
        },
    ]
}
</script>
@endsection

@section('content')
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ $background == null ? asset('assets-home/img/default-bg.png') : asset('storage/'. $background->image) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Portofolio</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Portofolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="p-5 mx-5 row">
        @forelse ($portfolios as $portfolio)
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow-sm p-4" style="min-height: 100%; max-height: 100%; border-radius: 12px">
                    <div class="card-header border-0 bg-transparent" style="min-height: 100%; max-height: 100%;">
                        <h4 class="text-center" style="font-weight: 500" >{{ $portfolio->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('storage/'. $portfolio->image) }}" height="200px" style="border-radius: 14px; object-fit: cover;">
                        </div>
                        <h5 class="my-4 text-start text-muted">
                            "{{ $portfolio->description }}"
                        </h5>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <h6 class="text-muted pb-0 mb-0 px-0 mx-0" style="text-align: end">
                            {{ $portfolio->CategoryProduct->name }}
                        </h6>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('nodata-gif.gif') }}" class="img-fluid" alt="" width="300px">
                </div>
                <h4 class="text-center text-dark" style="font-weight:600">
                    Portofolio belum diupload
                </h4>
            </div>
        @endforelse
    </div>

    {{-- <div class="about-us-area">
        <div class="container">
            <ul class="nav custom-tabs">
                <li @if (!request()->category) class="active" @endif><a href="{{ url('/portfolio') }}">Semua</a></li>
                @foreach ($categories as $category)
                    <li class="{{ request()->is("data/product/kategori/{$category->slug}") ? 'active' : '' }}">
                        <a href="{{ url("data/product/kategori/{$category->slug}") }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div> --}}

@endsection
