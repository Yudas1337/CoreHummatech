@extends('admin.layouts.app')

@section('subcontent')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6 p-0">
                <h3>Dashboard </h3>
            </div>
            <div class="col-sm-6 p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">
                            <svg class="stroke-icon">
                                <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-xxl-4 col-xl-100 box-col-12 ps-4 pe-4">
            <div class="row">
                <div class="">
                    <div class="row bg-light h-100 p-3 pt-4 pb-4">
                        <div class="col-12 col-xl-50 box-col-6">
                            <div class="card welcome-card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h1>Hello, {{ auth()->user()->name }}</h1>
                                            <p>Selamat datang Ayo menuju perubahan.</p>
                                            {{-- <a class="btn"
                                                href="user-profile.html">View Profile</a> --}}
                                        </div>
                                        <div class="flex-shrink-0"> <img src="../assets/images/dashboard/welcome.png"
                                                alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 col-xl-50 col-sm-6 proorder-xl-3">
            <div class="row">
                <div class="col-xxl-6 col-xl-50 col-sm-6 proorder-xl-3">
                    <div class="card since">
                        <div class="card-body money">
                            <div class="customer-card d-flex b-l-secondary border-2">
                                <div class="ms-3">
                                    <h3 class="mt-1">Total Layanan</h3>
                                    <h5 class="mt-1">{{ $services }} Layanan</h5>
                                </div>
                                <div class="dashboard-user bg-light-secondary"><span></span>
                                    <svg>
                                        <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#money">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="customer mt-2"><span class="me-1">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-50 col-sm-6 proorder-xl-3">
                    <div class="card since">
                        <div class="card-body invoice-profit">
                            <div class="customer-card d-flex b-l-success border-2">
                                <div class="ms-3">
                                    <h3 class="mt-1">Total Mitra</h3>
                                    <h5 class="mt-1">{{ $mitras }} Mitra</h5>
                                </div>
                                <div class="dashboard-user bg-light-success"><span></span>
                                    <svg>
                                        <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#invoice">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="customer mt-2"><span class="me-1">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-50 col-sm-6 proorder-xl-4">
                    <div class="card since">
                        <div class="card-body profit">
                            <div class="customer-card d-flex b-l-danger border-2">
                                <div class="ms-3">
                                    <h3 class="mt-1">Total Produk</h3>
                                    <h5 class="mt-1">{{ $products }} Produk</h5>
                                </div>
                                <div class="dashboard-user bg-light-danger"><span></span>
                                    <svg>
                                        <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#profile">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="customer mt-2"><span class="me-1">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-50 col-sm-6 proorder-xl-2">
                    <div class="card since">
                        <div class="card-body">
                            <div class="customer-card d-flex b-l-primary border-2">
                                <div class="ms-3">
                                    <h3 class="mt-1">Total Berita</h3>
                                    <h5 class="mt-1">{{ $newss }} Berita</h5>
                                </div>
                                <div class="dashboard-user bg-light-primary"><span></span>
                                    <svg>
                                        <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#male">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                            <div class="customer mt-2"><span class="me-1">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1>
        {{ $visitorDetections }}
    </h1>
    {{-- <div class="row">
        <div class="col-xxl-12 col-xl-100 box-col-12 proorder-xl-8">
            <div class="card sales overview">
                <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                        <h4>Sales Overview</h4>
                        <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown5" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a
                                    class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                    href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="sales-chart">
                        <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                        </div>
                        <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                        </div>
                        <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                        </div>
                        <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                        </div>
                        <div id="sales-overview"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
