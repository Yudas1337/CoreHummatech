@extends('landing.layouts.layouts.app')

@section('style')
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

@section('content')
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ $background == null ? asset('assets-home/img/default-bg.png') : asset('storage/'. $background->image) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Berita</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us-area">
        <div class="container">
            <ul class="nav custom-tabs">
                <li @if (!request()->category) class="active" @endif><a href="{{ url('/berita') }}">Terbaru</a></li>
                @foreach ($newsCategories as $category)
                    <li class="{{ request()->is("berita/kategori/{$category->slug}") ? 'active' : '' }}">
                        <a href="{{ url("berita/kategori/{$category->slug}") }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="blog-area full-blog blog-standard full-blog grid-colum mt-5 mb-5">
        <div class="container">
            <div class="blog-items content-less">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            @forelse ($newses as $news)
                                @if ($news->news)
                                    <div class="col-lg-4 col-md-6 single-item">
                                        <div class="item">
                                            <div class="thumb">
                                                <a href="/berita/{{ $news->news->slug }}">
                                                    <img
                                                        src="{{ asset('storage/' . $news->news->thumbnail) }}"
                                                        alt="{{ $news->news->title }}">
                                                </a>

                                                <time class="date"
                                                    datetime="">{{ \Carbon\Carbon::parse($news->news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</time>
                                            </div>
                                            <div class="info">
                                                <div class="meta">
                                                    <ul>
                                                        <li>
                                                            <img src="{{ asset('mobilelogo.png') }}"
                                                                alt="Hummatech Logo" />
                                                            <span>By </span>
                                                            <a href="javascript:void(0)">Hummatech</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <h4>
                                                    <a href="/berita/{{ $news->news->slug }}">{{ $news->news->title }}</a>
                                                </h4>

                                                <p class="text-justify">{!! Str::limit(strip_tags($news->news->description), 200) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                <div class="col-lg-4 col-md-6 single-item">
                                        <div class="item">
                                            <div class="thumb">
                                                <a href="/berita/{{ $news->slug }}"><img
                                                        src="{{ asset('storage/' . $news->thumbnail) }}"
                                                        alt="{{ $news->title }}"></a>

                                                <time class="date"
                                                    datetime="">{{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</time>
                                            </div>
                                            <div class="info">
                                                <div class="meta">
                                                    <ul>
                                                        <li>
                                                            <img src="{{ asset('mobilelogo.png') }}"
                                                                alt="Hummatech Logo" />
                                                            <span>By </span>
                                                            <a href="javascript:void(0)">Hummatech</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <h4>
                                                    <a href="/berita/{{ $news->slug }}">{{ $news->title }}</a>
                                                </h4>
                                                <p class="text-break text-justify">{!! Str::limit(strip_tags($news->description), 200) !!}</p>
                                                {{-- <p class="text-break justify-content-center">{!! Str::limit(strip_tags($news->description), 200) !!}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                <div class="d-flex justify-content-center col-12 ">
                                    <img src="{{ asset('nodata-gif.gif') }}" width="600px" alt="" srcset="">
                                </div>
                                <h4 class="fs-1 text-center text-dark col-12 " style="font-weight: 600">
                                    Data Masih Kosong
                                </h4>
                            @endforelse
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
