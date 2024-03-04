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
                <a class="navbar-brand h-100" href="index.html">
                    <img src="{{ asset('assets/images/LOGO-HUMMATECH_Hitam.png') }}" style="width: 200px;height: auto !important" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                    <li>
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ url('/about-us') }}">Tentang</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Layanan</a>
                        <ul class="dropdown-menu">
                            @forelse ($services as $service)
                                <li><a href="{{ route('slug', ['slug' => $service->slug]) }}">{{ $service->name }}</a></li>
                            @empty
                                <li><a href="javascript:void(0)">Layanan Masih Kosong</a></li>
                            @endforelse
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/data/product') }}">Produk</a>
                    </li>
                    <li>
                        <a href="/berita">Berita</a>
                    </li>
                    <li>
                        <a href="/contact">Hubungi</a>
                    </li>
                    <li>
                        <a href="/vacancy">Lowongan</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="icon_close"></i></a>
            <div class="widget">
                <img src="{{ asset('assets/images/LOGO-HUMMATECH_Hitam.png') }}" style="width: 200px;height: auto !important" alt="Logo">
                <p>
                    Melayani jasa pengembanganperangkat lunak, baik berbasis desktop, web, dan mobile apps. Mitra kami meliputi perorangan, swasta, bahkan juga lembaga pemerintahan.
                </p>
            </div>
            <div class="widget address">
                <div>
                    <ul>
                        <li>
                            <div class="content">
                                <p>Address</p>
                                <strong>Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang Ploso, Kabupaten Malang, Jawa Timur 65152.</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Email</p>
                                <strong>info@hummatech.com</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Contact</p>
                                <strong>085176777785</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget newsletter">
                <h4 class="title">Get Subscribed!</h4>
                <form action="#">
                    <div class="input-group stylish-input-group">
                        <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                        <span class="input-group-addon">
                            <button type="submit">
                                <i class="arrow_right"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="widget social">
                <ul class="link">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
