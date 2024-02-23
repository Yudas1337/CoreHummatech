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
                            <input class="form-control me-2" type="text" placeholder="Cari sesuatu&hellip;"
                                aria-label="Cari sesuatu&hellip;" />
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
        @forelse ($services as $service)
        <div class="col-xxl-3 col-md-4 col-sm-6">
            <div class="card border-0 shadow rounded">
                <img src="{{ asset('storage/' . $service->image) }}" alt="Milink" class="rounded-top card-img-thumbnail" />
                <div class="card-header text-center h4 border-bottom"
                    style="margin-top: -1rem; border-radius: var(--bs-border-radius) var(--bs-border-radius) 0 0 !important;">
                    {{ $service->name }}</div>
                <div class="card-body">
                    <p>{{ $service->description }}</p>

                    <div class="gap-2 d-flex">
                        <div class="d-grid flex-grow-1">
                            <a href="detail/service/{{ $service->id }}" class="btn btn-primary">Lihat Detail</a>
                        </div>
                        <div class="d-flex flex-shrink-0 gap-2">
                            @include('admin.pages.service.edit')
                            <button class="btn px-3 btn-danger" type="button"><i class="fas fa-trash"></i></button>
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
@endsection
