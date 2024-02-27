@extends('admin.layouts.app')

@section('subcontent')
        <div class="card border-0 p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Hero Section</h4>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <a class="btn btn-primary m-0" href="{{ url('/hero-section/create') }}">Tambah</a>
                    </div>
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
    <div class="row">
        @forelse ($sections as $section)
        <div class="col-md-12 col-12 col-xl-6">
            <div class="card rounded-4" style="height: 280px">
                <div class="product-box rounded-4">
                    <div class="product-img">
                        <img class="img-fluid"
                            src="{{ asset('storage/' .$section->image) }}"
                            alt="" />

                        <div class="content-center">
                            <h3 class="title">{{ $section->title }}</h3>
                            <p class="subtitle fs-6">{{ $section->subtitle }}</p>
                            <div class="btn btn-lg btn-primary">Lihat Selengkapnya</div>
                        </div>

                        <div class="product-hover">
                            <ul>
                                <li>
                                    <a href="{{ route('hero.edit', $section->id) }}"><i class="fas fa-pencil"></i></a>
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
        @empty
        <div class="d-flex justify-content-center">
            <img src="{{ asset('nodata.jpg') }}" alt="" width="400px">
        </div>
        <h5 class="text-center">
            Data Masih Kosong
        </h5>
        @endforelse
    </div>

    @include('admin.components.delete-modal-component')
@endsection
<section></section>