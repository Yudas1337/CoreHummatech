@extends('admin.layouts.app')

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Layanan</h4>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Cari sesuatu&hellip;" aria-label="Cari sesuatu&hellip;" />
                        </div>
                        @include('admin.pages.service.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        @foreach (range(0, 10) as $item)
            <div class="col-xl-3 col-sm-6">
                <div class="card border-0 shadow rounded">
                    <img src="https://fakeimg.pl/1920x1080" alt="Milink" class="rounded-top card-img-thumbnail" />
                    <div class="card-header text-center h4 border-bottom"
                        style="margin-top: -1rem; border-radius: var(--bs-border-radius) var(--bs-border-radius) 0 0 !important;">
                        Magang / PKL</div>
                    <div class="card-body">
                        <p>Melayani pembuatan software berdasarkan
                            kebutuhan klien/ customer. Produk yang
                            dihasilkan adlaah produk perangkat lunak
                            berbasis desktop, web, dan mobile (android
                            dan iOS......</p>

                        <div class="gap-2 d-flex">
                            <div class="d-grid" style="width: calc(75% - 1.5rem)">
                                <a href="{{ url('/service/detail') }}" class="btn btn-primary">Lihat Detail</a>
                            </div>
                            <div class="d-flex w-25 gap-2">
                                <div class="d-grid">
                                    @include('admin.pages.service.edit')
                                </div>
                                <div class="d-grid">
                                    <button class="btn px-3 btn-danger" type="button"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <nav class="m-b-30" aria-label="Page navigation example">
        <ul class="pagination justify-content-center pagin-border-primary pagination-primary">
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
        </ul>
    </nav>
@endsection
