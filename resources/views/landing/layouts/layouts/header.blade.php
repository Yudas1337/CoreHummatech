<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <span class="bar-1"></span>
                            <span class="bar-2"></span>
                            <span class="bar-3"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header h-100">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand h-100" href="/">
                    <img src="{{ asset('assets/images/LOGO-HUMMATECH_Hitam.png') }}" style="width: 200px;height: auto !important" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="{{ request()->is('/about-us') ? 'active' : '' }}">
                        <a href="{{ url('/about-us') }}">Tentang</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Layanan</a>
                        <ul class="dropdown-menu">
                            @forelse ($services as $service)
                            <li class="{{ request()->is('/layanan/' . $service->slug) ? 'active' : '' }}">
                                <a href="/layanan/{{ $service->slug }}">{{ $service->name }}</a>
                            </li>
                            @empty
                                <li><a href="javascript:void(0)">Layanan Masih Kosong</a></li>
                            @endforelse
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/data/product') }}">Portofolio</a>
                    </li>
                    <li class="{{ request()->is('berita*', 'detail/news') ? 'active' : '' }}">
                        <a href="/berita">Berita</a>
                    </li>
                    <li class="{{ request()->is('contact') ? 'active' : '' }}">
                        <a href="/contact">Hubungi</a>
                    </li>
                    <li class="{{ request()->is('data/lowongan') ? 'active' : '' }}">
                        <a href="/data/lowongan">Lowongan</a>

                    </li>
                </ul>
            </div>
        </div>

        <!-- Start Side Menu -->
        <div class="side" >
            <a href="#" class="close-side"><i class="icon_close"></i></a>
            <div class="widget">
                <img src="{{ asset('assets/images/LOGO-HUMMATECH_Hitam.png') }}"
                    style="width: 200px;height: auto !important" alt="Logo">
                <p>
                    Melayani jasa pengembanganperangkat lunak, baik berbasis desktop, web, dan mobile apps. Mitra kami
                    meliputi perorangan, swasta, bahkan juga lembaga pemerintahan.
                </p>
            </div>
            <div class="widget address">
                <div class="gallery-area overflow-hidden">
                    <h4 class="title">Portofolio Terbaru</h4>
                    <div class="container">
                        <div class="case-items-area">
                            <div class="masonary">
                                <div id="portfolio-grid" class="gallery-items colums-2">
                                    <div class="container">
                                        <div class="row">
                                            @forelse ($products as $product)
                                                <div class="col-md-4 mb-4">
                                                    <div class="pf-item" style="width: 150%;">
                                                        <div class="item">
                                                            <div class="">
                                                                <img src="{{ asset('storage/' . $product->image) }}" width="300%" class="object-fit-cover" alt="Thumb">
                                                            </div>
                                                            <div class="content">
                                                                <div class="info">
                                                                    <h4><a href="{{ route('detail.product', $product->slug) }}">{{ $product->name }}</a></h4>
                                                                    <span class="text-break">{{ Str::limit($product->description, 10, '...') }}</span>
                                                                </div>
                                                                <div class="button">
                                                                    <a href="{{ asset('storage/' . $product->image) }}" class="item popup-gallery">
                                                                        <i class="fas fa-plus"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty

                                            <div class="mx-auto d-flex flex-column justify-content-center text-center">
                                                <img src="{{ asset('nodata-gif-post.gif') }}" alt="No Data" height="200" class="mx-auto" width="200" />
                                            <p class="text-muted">Belum ada berita</p>
                                            </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center pt-3">
                                    @if(count($products) > 0)
                                        <a class="text-primary" href="/data/product">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M16.15 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                                            </svg> Lihat Selengkapnya
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget newsletter">
                <div class="sidebar-item recent-post">
                    <div class="title">
                        <h4>Berita Lainnya</h4>
                    </div>
                    <ul>
                        @forelse ($news as $news)
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
                        @empty

                        <div class="mx-auto d-flex flex-column justify-content-center text-center">
                            <img src="{{ asset('nodata-gif-post.gif') }}" alt="No Data" height="200" class="mx-auto" width="200" />
                        <p class="text-muted">Belum ada berita</p>
                        </div>

                        @endforelse
                    </ul>
                </div>
                <div class="d-flex justify-content-center pt-4">
                    @if(count($news) > 0)
                    <a class="text-primary" href="/data/product">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16.15 13H5q-.425 0-.712-.288T4 12q0-.425.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375q0 .2-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                        </svg> Lihat Selengkapnya
                    </a>
                    @endif
                </div>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
