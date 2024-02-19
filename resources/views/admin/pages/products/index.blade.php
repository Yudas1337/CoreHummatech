@extends('admin.layouts.app')

@section('subcontent')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6 p-0">
                <h3>Produk</h3>
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
                    <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div>
        </div>
    </div>
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
                                <input class="form-control-plaintext" type="text" placeholder="Cari sesuatu..." />
                            </div>
                        </form>
                        <div class="flex-grow-1 file-buttons">
                            @include('admin.pages.products.create')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach (range(0, 10) as $item)
        @endforeach
    </div>
@endsection
