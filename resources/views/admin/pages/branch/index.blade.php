@extends('admin.layouts.app')

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #maps1 {
            height: 400px;
            /* Tentukan tinggi peta sesuai kebutuhan */
        }
    </style>

    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Cabang</h4>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <button class="btn btn-primary m-0" type="button" data-bs-toggle="modal"
                            data-bs-target="#tambah">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="row">
            @forelse ($branchs as $branch)
                <div class="col-xl-3">
                    <div class="card b-t-warning">
                        <div class="card-header pb-0 text-center">
                            <h4><span class="badge badge-light-warning mb-2">Cabang</span></h4>
                            <h3 class="mb-3">{{ $branch->name }}</h3>
                            <div class="row mb-3">
                                <div class="col">
                                    <button class="btn btn-warning w-100">Edit</button>
                                </div>
                                <div class="col">
                                    <button class="btn-delete btn btn-danger w-100" data-id="{{ $branch->id }}"
                                        id="{{ $branch->id }}">
                                        Hapus
                                    </button>
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
        @if ($branchs == null || count($branchs) == 0)
    <!-- Tidak ada branch yang tersedia -->
@else
    <h4 class="mb-2">
        Maps
    </h4>
    <div id="maps1"></div>
@endif
    </div>

    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Cabang</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="/branch/create" method="POST" id="bookmark-form" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama</label>
                                <input class="form-control" name="name" type="text" required=""
                                    placeholder="Nama Cabang" autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Jenis Cabang</label>
                                <select name="type" class="form-select form-select-sm"
                                    aria-label=".form-select-sm example">
                                    <option selected="">Pilih Jenis Cabang </option>
                                    <option value="center">Pusat</option>
                                    <option value="branch">Cabang</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-0 col-md-6">
                                <label for="bm-title">Latitude</label>
                                <input class="form-control" name="latitude" type="text" required=""
                                    placeholder="Masukan Latitude" autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-6">
                                <label for="bm-title">Longitude</label>
                                <input class="form-control" name="lotitude" type="text" required=""
                                    placeholder="Masukkan Longitude" autocomplete="name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Mitra</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama</label>
                                <input class="form-control" type="text" required="" placeholder="Nama Cabang"
                                    autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Jenis Cabang</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected="">Pilih Jenis Cabang </option>
                                    <option value="Pusat">Pusat</option>
                                    <option value="Cabang">Cabang</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-0 col-md-6">
                                <label for="bm-title">Latitude</label>
                                <input class="form-control" type="text" required="" placeholder="Masukan Latitude"
                                    autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-6">
                                <label for="bm-title">Longitude</label>
                                <input class="form-control" type="text" required=""
                                    placeholder="Masukkan Longitude" autocomplete="name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.components.delete-modal-component')
@endsection
@section('script')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/brach/delete/' + id);
            $('#modal-delete').modal('show');
        });
        var map = L.map('maps1');

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        var markers = [];
        var bounds = L.latLngBounds();

        @foreach ($branchs as $branch)
            var marker = L.marker([{{ $branch->latitude }}, {{ $branch->lotitude }}]).addTo(map);
            marker.bindPopup("<b>{{ $branch->name }}</b><br>{{ $branch->address }}");
            marker.on('click', function(e) {
                this.openPopup();
            });
            markers.push(marker);
            bounds.extend(marker.getLatLng());
        @endforeach

        map.fitBounds(bounds);
    </script>
@endsection


@section('script')
    <script>
        buildMap(-7.900067415010227, 112.60688277775499)
    </script>
@endsection
