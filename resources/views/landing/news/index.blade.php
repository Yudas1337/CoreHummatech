@extends('landing.layouts.layouts.app')
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
    <style>

        .custom-tabs li {
            margin-right: 80px;
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
                <li class=""><a href="/" target="_blank">Tentang Hummatech</a></li>
                <li class="active"><a href="#">Terbaru</a></li>
                <li><a href="#">It technology</a></li>
                <li><a href="#">Berita perusahaan</a></li>
                <li><a href="#">Teknologi</a></li>
                <li><a href="#">tutorial</a></li>
                <li><a href="#">Businnes</a></li>
            </ul>
        </div>
    </div>

    <div class="blog-area full-blog blog-standard full-blog grid-colum  mb-5">
        <div class="container">
            <div class="blog-items content-less">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('news.detail') }}"><img src="assets-home/img/blog/1.jpg"
                                                alt="Thumb"></a>
                                        <div class="date">January 25, 2021</div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <img src="assets-home/img/team/1.jpg" alt="Author">
                                                    <span>By </span>
                                                    <a href="#">John Baus</a>
                                                </li>
                                                <li>
                                                    <span>In </span>
                                                    <a href="#">Agency</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="{{ route('news.detail') }}">Suppose cottage between and way. Minuter
                                                own.</a>
                                        </h4>
                                        <p>
                                            One order all scale sense her gay style wrote. Incommode our not one ourselves
                                            residence. Shall there whose those.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('news.detail') }}"><img src="assets-home/img/blog/2.jpg"
                                                alt="Thumb"></a>
                                        <div class="date">February 18, 2021</div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <img src="assets-home/img/team/2.jpg" alt="Author">
                                                    <span>By </span>
                                                    <a href="#">Paul Anu</a>
                                                </li>
                                                <li>
                                                    <span>In </span>
                                                    <a href="#">Creative</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="{{ route('news.detail') }}">Agreement far boy otherwise rapturous. </a>
                                        </h4>
                                        <p>
                                            One order all scale sense her gay style wrote. Incommode our not one ourselves
                                            residence. Shall there whose those.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('news.detail') }}"><img src="assets-home/img/blog/3.jpg"
                                                alt="Thumb"></a>
                                        <div class="date">March 24, 2021</div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <img src="assets-home/img/team/3.jpg" alt="Author">
                                                    <span>By </span>
                                                    <a href="#">Mark Henri</a>
                                                </li>
                                                <li>
                                                    <span>In </span>
                                                    <a href="#">Business</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="{{ route('news.detail') }}">Attachment resolution sentiments shoot in
                                                the point</a>
                                        </h4>
                                        <p>
                                            One order all scale sense her gay style wrote. Incommode our not one ourselves
                                            residence. Shall there whose those.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('news.detail') }}"><img src="assets-home/img/blog/4.jpg"
                                                alt="Thumb"></a>
                                        <div class="date">April 18, 2021</div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <img src="assets-home/img/team/4.jpg" alt="Author">
                                                    <span>By </span>
                                                    <a href="#">John Baus</a>
                                                </li>
                                                <li>
                                                    <span>In </span>
                                                    <a href="#">Agency</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="{{ route('news.detail') }}">Add matter family active mutual put happen.
                                            </a>
                                        </h4>
                                        <p>
                                            One order all scale sense her gay style wrote. Incommode our not one ourselves
                                            residence. Shall there whose those.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('news.detail') }}"><img src="assets-home/img/blog/5.jpg"
                                                alt="Thumb"></a>
                                        <div class="date">June 25, 2021</div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <img src="assets-home/img/team/5.jpg" alt="Author">
                                                    <span>By </span>
                                                    <a href="#">Dia Jack</a>
                                                </li>
                                                <li>
                                                    <span>In </span>
                                                    <a href="#">Creative</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="{{ route('news.detail') }}">Unsatiable entreaties sympathize nay</a>
                                        </h4>
                                        <p>
                                            One order all scale sense her gay style wrote. Incommode our not one ourselves
                                            residence. Shall there whose those.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('news.detail') }}"><img src="assets-home/img/blog/6.jpg"
                                                alt="Thumb"></a>
                                        <div class="date">Auguest 25, 2021</div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <img src="assets-home/img/team/6.jpg" alt="Author">
                                                    <span>By </span>
                                                    <a href="#">John Baus</a>
                                                </li>
                                                <li>
                                                    <span>In </span>
                                                    <a href="#">Agency</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="{{ route('news.detail') }}">Cottage between and way. Minuter own.</a>
                                        </h4>
                                        <p>
                                            One order all scale sense her gay style wrote. Incommode our not one ourselves
                                            residence. Shall there whose those.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-double-right"></i></a></li>
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
