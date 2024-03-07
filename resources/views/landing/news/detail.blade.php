@extends('landing.layouts.layouts.app')

@section('content')
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
                                        <a href=""><img src="{{ asset('storage/' . $news->image) }}"
                                                alt="{{ $news->title }}"></a>
                                        <time datetime="{{ $news->created_at->format('Y-m-d') }}" class="date">
                                            {{ \Carbon\Carbon::parse($news->created_at)->locale('id_ID')->isoFormat('D MMMM Y') }}
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
                                            <a href="{{ url("berita/{$news->slug}") }}">{{ $news->title }}</a>
                                        </h3>
                                        <p>
                                            {!! $news->description !!}
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
                                @if($otherNews->count() > 0)
                                <ul>
                                    @foreach ($otherNews as $news)
                                    <li>
                                        <div class="thumb">
                                            <a href="{{ url("berita/{$news->slug}") }}">
                                                <img alt="{{ $news->title }}" src="{{ asset("storage/{$news->image}") }}" />
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <time datetime="{{ $news->created_at->format('Y-m-d') }}" class="post-date"><i class="fas fa-clock"></i> {{ \Carbon\Carbon::parse($news->created_at)->locale('id_ID')->isoFormat('D MMMM Y') }}</time>
                                            </div>
                                            <a class="d-block mb-2" href="{{ url("berita/{$news->slug}") }}">{{ $news->title }}</a>
                                            <p class="mb-0">{{ Str::limit(strip_tags($news->description), 20) }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <p class="text-muted">Belum ada berita</p>
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
