<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">

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
                    <img src="{{ asset('assets/images/LOGO-HUMMATECH_Putih.png') }}" style="width: 200px;height: auto" class="logo logo-display" alt="Logo">
                    <img src="{{ asset('assets/images/LOGO-HUMMATECH_Hitam.png') }}" style="width: 200px;height: auto" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                    <li>
                        <a href="">Beranda</a>
                    </li>
                    <li>
                        <a href="">Tentang</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Layanan</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Software Devlopment</a></li>
                            <li><a href="#">IT Consultan</a></li>
                            <li><a href="#">Magang / PKL</a></li>
                            <li><a href="#">Kelas Industri</a></li>
                            <li><a href="#">Pengadaan Hardware</a></li>
                            <li><a href="#">Pelatihan Programing & Digital Marketing</a></li>
                            <li><a href="#">Guru tamu</a></li>
                            <li><a href="#">Guru Magang</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Produk</a>
                    </li>
                    <li>
                        <a href="">Berita</a>
                    </li>
                    <li>
                        <a href="">Hubungi</a>
                    </li>
                    <li>
                        <a href="">Lowongan</a>
                    </li>
                    {{-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="about-us.html" class="dropdown-toggle" data-toggle="dropdown" >Multipage</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Business Consultancy</a></li>
                                    <li><a href="index-2.html">Marketing Consultancy</a></li>
                                    <li><a href="index-3.html">Human Resources</a></li>
                                    <li><a href="index-4.html">Financial Consultancy</a></li>
                                    <li><a href="index-5.html">Strategy Consultants</a></li>
                                    <li><a href="index-6.html">Corporate Business</a></li>
                                    <li><a href="index-7.html">Consulting Smart <span class="badge">new</span> </a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="about-us.html" class="dropdown-toggle" data-toggle="dropdown" >Onepage</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-op.html">Business Consultancy</a></li>
                                    <li><a href="index-op-2.html">Marketing Consultancy</a></li>
                                    <li><a href="index-op-3.html">Human Resources</a></li>
                                    <li><a href="index-op-4.html">Financial Consultancy</a></li>
                                    <li><a href="index-op-5.html">Strategy Consultants</a></li>
                                    <li><a href="index-op-6.html">Corporate Business</a></li>
                                    <li><a href="index-op-7.html">Consulting Smart <span class="badge">new</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-lg-3">
                                        <h6 class="title">Gallery Grid</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="gallery-grid-2-colum.html">Grid Two Colum</a></li>
                                                <li><a href="gallery-grid-3-colum.html">Grid Three Colum</a></li>
                                                <li><a href="gallery-grid-4-colum.html">Grid Four Colum</a></li>
                                                <li><a href="gallery-mixed-colum.html">Mixed Colum</a></li>
                                                <li><a href="project-single.html">Project Single</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-lg-3">
                                        <h6 class="title">Gallery Masonary</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="gallery-masonary-2-colum.html">Masonary Two Colum</a></li>
                                                <li><a href="gallery-masonary-3-colum.html">Masonary Three Colum</a></li>
                                                <li><a href="gallery-masonary-4-colum.html">Masonary Four Colum</a></li>
                                                <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-lg-3">
                                        <h6 class="title">Other Pages</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="career.html">Career</a></li>
                                                <li><a href="terms-conditions.html">Terms Conditions</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-lg-3">
                                        <h6 class="title">Additional Pages</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="404.html">Error Page</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Team</a>
                        <ul class="dropdown-menu">
                            <li><a href="team.html">Team Members</a></li>
                            <li><a href="team-single.html">Team Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html">Services Version One</a></li>
                            <li><a href="services-2.html">Services Version Two</a></li>
                            <li><a href="services-3.html">Services Version Three</a></li>
                            <li><a href="services-single.html">Services Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                            <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                            <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Contact Us</a>
                        <ul class="dropdown-menu">
                            <li><a href="contact.html">Version One</a></li>
                            <li><a href="contact-2.html">Version Two</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="icon_close"></i></a>
            <div class="widget">
                <img src="assets/img/logo.png" alt="Logo">
                <p>
                    Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                </p>
            </div>
            <div class="widget address">
                <div>
                    <ul>
                        <li>
                            <div class="content">
                                <p>Address</p>
                                <strong>California, TX 70240</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Email</p>
                                <strong>support@validtheme.com</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Contact</p>
                                <strong>+44-20-7328-4499</strong>
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
