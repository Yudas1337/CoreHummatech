@extends('landing.layouts.layouts.app')
@section('title', $news->title . ' - Berita')
@section('description')
    <meta name="description" content="{{ Str::limit(strip_tags($news->description), 200) }}" />
@endsection
{{-- @section('title', $slugs->name) --}}
@section('seo')
    <meta name="title" content="{{ $news->title }} - Hummatech" />
    <meta name="og:image" content="{{ asset('storage/' . $news->image) }}"/>
    <meta name="twitter:image" content="{{ asset('storage/' . $news->image) }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="{{ url('/') }}" />
@endsection
@section('content')
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover"
        style="background-image: url({{ $background == null ? asset('assets-home/img/default-bg.png') : asset('storage/' . $background->image) }});">
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
    <div class="blog-area right-sidebar full-blog mt-5">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-8 col-md-12">
                        <div class="blog-item-box">
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href=""><img src="{{ asset('storage/' . $news->thumbnail) }}"
                                                alt="{{ $news->title }}"></a>
                                        <time class="date">
                                            {{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}
                                        </time>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('mobilelogo.png') }}" alt="Author">
                                                    <span>By </span>
                                                    <a href="#">HUMMATECH</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3>
                                            <a href="{{ url("/news/{$news->slug}") }}">{{ $news->title }}</a>
                                        </h3>
                                        <p>
                                        <div style="white-space: pre-wrap;">{!! $news->description !!}</div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Berita Lainnya</h4>
                                </div>
                                @if ($otherNews->count() > 0)
                                    <ul>
                                        @foreach ($otherNews as $news)
                                            <li>
                                                <div class="thumb">
                                                    <a href="{{ url("news/{$news->slug}") }}">
                                                        <img alt="{{ $news->title }}"
                                                            src="{{ asset("storage/{$news->thumbnail}") }}" />
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="meta-title">
                                                        <time class="post-date"><i class="fas fa-clock"></i>
                                                            {{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</time>
                                                    </div>
                                                    <a class="d-block mb-2"
                                                        href="{{ url("news/{$news->slug}") }}">{{ Str::limit($news->title, 45, '...') }}</a>
                                                    <p class="mb-0">{{ Str::limit(strip_tags($news->description), 20) }}
                                                    </p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <div class="mx-auto d-flex flex-column justify-content-center text-center">
                                        <img src="{{ asset('nodata-gif-post.gif') }}" alt="No Data" height="200"
                                            class="mx-auto" width="200" />
                                        <p class="text-muted">Belum ada berita</p>
                                    </div>
                                @endif
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
@endsection
