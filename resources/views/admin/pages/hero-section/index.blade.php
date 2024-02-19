@extends('admin.layouts.app')

@section('subcontent')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6 p-0">
                <h3>Hero Section</h3>
            </div>
            <div class="col-sm-6 p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Hero Section</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('header-style')
    <style>
        .product-box {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-box .img-fluid {
            position: relative;
            z-index: 1;
        }

        .product-box .content-center {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(var(--bs-dark-rgb), .5);
            z-index: 2;
            top: 0;
            left: 0;
            flex-direction: column;
            color: var(--bs-white);
        }

        .product-box .content-center .title {
            color: var(--bs-white);
            font-size: 2.5rem;
            font-weight: bold;
        }

        .product-box .content-center .subtitle {
            color: var(--bs-white);
            font-size: 1.5rem;
        }

        .product-hover {
            z-index: 5;
        }
    </style>
@endsection

@section('content')
    <div class="project-grid">
        <div class="project-list">
            <div class="card">
                <div class="file-content py-2 px-4">
                    <div class="d-flex align-items-center">
                        <form class="form-inline" action="#" method="get">
                            <div class="form-group mb-0">
                                <i class="fa fa-search"></i>
                                <input class="form-control-plaintext" type="text" placeholder="Search...">
                            </div>
                        </form>
                        <div class="flex-grow-1 file-buttons">
                            <div class="form-group mb-0 me-0"></div>
                            <a class="btn btn-primary" href="{{ url('/hero-section/create') }}">
                                <i class="fa fa-plus"></i> Tambah Hero
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach (range(0, 10) as $item)
        <div class="col-md-12">
            <div class="card rounded-4" style="height: 400px">
                <div class="product-box rounded-4">
                    <div class="product-img">
                        <img class="img-fluid"
                            src="https://images.unsplash.com/photo-1560493676-04071c5f467b?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" />

                        <div class="content-center">
                            <h1 class="title">PT Humma Teknologi Indonesia</h1>
                            <p class="subtitle">Perushaan Software terbaik se jawa timur</p>

                            <div class="btn btn-lg btn-primary">Lihat Selengkapnya</div>
                        </div>

                        <div class="product-hover">
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-pencil"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-trash"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
