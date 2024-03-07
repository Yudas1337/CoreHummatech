@extends('landing.layouts.layouts.app')
@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<style>
    #maps1 {
        height: 400px;
        /* Tentukan tinggi peta sesuai kebutuhan */
    }
</style>
<div class="breadcrumb-area text-center shadow dark text-light bg-cover" style="background-image: url(assets-home/img/banner/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Hubungi Kami</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                    <li class="active">Hubungi Kami</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-us-area default-padding mb-5">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 info">
                    <div class="content">
                        <h2>Hubungi Kami</h2>
                        <p>
                            Kami di Sini untuk Anda! Hubungi Kami untuk Bantuan Langsung
                        </p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <h5>Address</h5>
                                    <p>
                                        Perum. Permata Regency 1 Blok 10 No. 28 Kec. Karang Ploso,
                                        Kab. Malang, Jawa Timur, Indonesia
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h5>Contact</h5>
                                    <p>
                                        +123456789
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h5>Email</h5>
                                    <p>
                                        example@gmaio.com
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 contact-form-box">
                    <div class="form-box">
                        <form action="" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <div id="maps1"></div>
        </div>
    </div>
    <!-- End Google Maps -->

@endsection
@section('script')
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    var map = L.map('maps1');

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
    }).addTo(map);

    var markers = [];
    var bounds = L.latLngBounds();

    @foreach ($branchs as $branch)
        var marker = L.marker([{{ $branch->latitude }}, {{ $branch->lotitude }}]).addTo(map);
        marker.bindPopup("<div class='popup-content'><b>{{ $branch->name }}</b><br>{{ $branch->address }}</div>");
        markers.push(marker);
        bounds.extend(marker.getLatLng());

        @if ($branch->type === 'center')
            map.setView(marker.getLatLng(), 12);
            marker.openPopup();
        @endif
    @endforeach

    map.fitBounds(bounds);
</script>

<style>
    .popup-content {
        margin-top: 10px; /* Atur jarak antara marker dan pop-up */
    }
</style>
@endsection
