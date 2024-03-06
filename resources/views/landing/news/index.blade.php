@extends('landing.layouts.layouts.app')
@section('content')
<div class="breadcrumb-area text-center shadow dark text-light bg-cover"
style="background-image: url({{ asset('assets-home/img/banner/10.jpg') }});">
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h1>Berita</h1>
            <ul class="breadcrumb">
                <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                <li class="active">Berita</li>
            </ul>
        </div>
    </div>
</div>
</div>

<style>
    .custom-tabs {
      padding-top: 25px;
      padding-bottom: 2px;
  }

  .custom-tabs li {
      margin-right: 80px;
      margin-bottom: 30px
  }

  .custom-tabs li a {
      position: relative;
  }

  .custom-tabs li a:after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background-color: transparent;
      transition: background-color 0.3s;
  }

  .custom-tabs li.active a:after {
      background-color: #337ab7;
  }
  </style>
  <div class="about-us-area ">
      <div class="container">
          <ul class="nav navbar-nav custom-tabs">
              <li class="active"><a href="#">Terbaru</a></li>
              <li><a href="#">It technology</a></li>
              <li><a href="#">Berita perusahaan</a></li>
              <li><a href="#">Teknologi</a></li>
              <li><a href="#">tutorial</a></li>
              <li><a href="#">Businnes</a></li>
          </ul>
      </div>
  </div>

<div class="blog-area full-blog blog-standard full-blog grid-colum  mb-5" >
    <div class="container">
        <div class="blog-items content-less">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row">
                        @forelse ($newss as $news)
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="/berita/{{ $news->slug }}"><img src="{{ asset('storage/' . $news->newsImages[0]->photo) }}" alt="Thumb"></a>
                                    <div class="date">{{ \Carbon\Carbon::parse($news->created_at)->locale('id_ID')->isoFormat('D MMMM Y') }}</div>                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                           <li>
                                               <img src="assets-home/img/team/1.jpg" alt="Author">
                                               <span>By </span>
                                               <a href="#">Hummatech</a>
                                           </li>
                                       </ul>
                                    </div>
                                    <h4>
                                        <a href="/berita/{{ $news->slug }}">{{ $news->title }}</a>
                                    </h4>
                                    <p>
                                        {!! Str::limit($news->description, 200) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
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
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
