<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/dunzo/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2024 06:54:36 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dunzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Dunzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset("assets/images/favicon.png")}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.png")}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/font-awesome.css")}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/icofont.css")}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/themify.css")}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/flag-icon.css")}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/feather-icon.css")}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/slick.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/slick-theme.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/scrollbar.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/animate.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/datatables.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/owlcarousel.css")}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/bootstrap.css")}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
    <link id="color" rel="stylesheet" href="{{asset("assets/css/color-1.css")}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/responsive.css")}}">
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo-1.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle"> 
                <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#stroke-animation"></use>
              </svg>
            </div>
          </div>
          <div class="nav-right col-xxl-7 col-xl-6 col-auto box-col-6 pull-right right-header p-0 ms-auto">
            @include('admin.layouts.navbar')
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">name</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="fill-svg">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a>
              <div class="toggle-sidebar">
                <svg class="sidebar-toggle"> 
                  <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
              </div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                @include('admin.layouts.sidebar')
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">        
            @yield('subcontent')
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            @yield('content')
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 p-0 footer-copyright">
                <p class="mb-0">Copyright 2023 © Dunzo theme by pixelstrap.</p>
              </div>
              <div class="col-md-6 p-0">
                <p class="heart mb-0">Hand crafted &amp; made with
                  <svg class="footer-icon">
                    <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#heart"></use>
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset("assets/js/bootstrap/bootstrap.bundle.min.js")}}"></script>
    <!-- feather icon js-->
    <script src="{{asset("assets/js/icons/feather-icon/feather.min.js")}}"></script>
    <script src="{{asset("assets/js/icons/feather-icon/feather-icon.js")}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset("assets/js/scrollbar/simplebar.js")}}"></script>
    <script src="{{asset("assets/js/scrollbar/custom.js")}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset("assets/js/config.js")}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset("assets/js/sidebar-menu.js")}}"></script>
    <script src="{{asset("assets/js/sidebar-pin.js")}}"></script>
    <script src="{{asset("assets/js/slick/slick.min.js")}}"></script>
    <script src="{{asset("assets/js/slick/slick.js")}}"></script>
    <script src="{{asset("assets/js/header-slick.js")}}"></script>
    <script src="{{asset("assets/js/chart/morris-chart/raphael.js")}}"></script>
    <script src="{{asset("assets/js/chart/morris-chart/morris.js")}}"> </script>
    <script src="{{asset("assets/js/chart/morris-chart/prettify.min.js")}}"></script>
    <script src="{{asset("assets/js/chart/apex-chart/apex-chart.js")}}"></script>
    <script src="{{asset("assets/js/chart/apex-chart/stock-prices.js")}}"></script>
    <script src="{{asset("assets/js/chart/apex-chart/moment.min.js")}}"></script>
    <script src="{{asset("assets/js/notify/bootstrap-notify.min.js")}}"></script>
    <script src="{{asset("assets/js/dashboard/default.js")}}"></script>
    <script src="{{asset("assets/js/notify/index.js")}}"></script>
    <script src="{{asset("assets/js/datatable/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/js/datatable/datatables/datatable.custom.js")}}"></script>
    <script src="{{asset("assets/js/datatable/datatables/datatable.custom1.js")}}"></script>
    <script src="{{asset("assets/js/owlcarousel/owl.carousel.js")}}"></script>
    <script src="{{asset("assets/js/owlcarousel/owl-custom.js")}}"></script>
    <script src="{{asset("assets/js/typeahead/handlebars.js")}}"></script>
    <script src="{{asset("assets/js/typeahead/typeahead.bundle.js")}}"></script>
    <script src="{{asset("assets/js/typeahead/typeahead.custom.js")}}"></script>
    <script src="{{asset("assets/js/typeahead-search/handlebars.js")}}"></script>
    <script src="{{asset("assets/js/typeahead-search/typeahead-custom.js")}}"></script>
    <script src="{{asset("assets/js/height-equal.js")}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset("assets/js/script.js")}}"></script>
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.net/dunzo/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2024 06:55:44 GMT -->
</html>