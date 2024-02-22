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

                        <button class="btn btn-primary m-0" type="button" data-bs-toggle="modal"
                            data-bs-target="#tambah">Tambah</button>

                        <!-- Add Modal -->
                        <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Produk</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form class="form-bookmark needs-validation" action="{{ url('/service/create') }}" method="POST"
                                        id="bookmark-form" novalidate="" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row g-2">
                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="name">Nama Produk</label>
                                                    <input class="form-control" id="name" type="text" required
                                                        placeholder="Contoh: Produk Hummatech" autocomplete="name" />
                                                </div>

                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="description">Deskripsi</label>
                                                    <textarea rows="5" class="form-control" id="description" name="description"
                                                        placeholder="Jelaskan deskripsi produknya"></textarea>
                                                </div>

                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="feature">Fitur</label>
                                                    <textarea rows="5" class="form-control" id="feature" name="feature" placeholder="Jelaskan fitur produknya"></textarea>
                                                </div>

                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="link">Link</label>
                                                    <input class="form-control" id="link" type="url" required
                                                        placeholder="Contoh: https://hummatech.com/linknya" />
                                                </div>

                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="photo">Foto / Logo Produk</label>
                                                    <input class="form-control" id="photo" type="file"
                                                        name="photo" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-secondary" type="button"
                                                    data-bs-dismiss="modal">Batalkan</button>
                                                <button class="btn btn-primary" type="submit">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

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
                    <img src="https://fakeimg.pl/1920x1080" alt="Milink" class="rounded-top card-img-thumbnail" />
                    <div class="card-header text-center h4 border-bottom"
                        style="margin-top: -1rem; border-radius: var(--bs-border-radius) var(--bs-border-radius) 0 0 !important;">
                        {{ $service->name }}</div>
                    <div class="card-body">
                        <p>{{ $service->description }}</p>

                        <div class="gap-2 d-flex">
                            <div class="d-grid flex-grow-1">
                                <a href="{{ url('/service/detail') }}" class="btn btn-primary">Lihat Detail</a>
                            </div>
                            <div class="d-flex flex-shrink-0 gap-2">
                                <button class="btn btn-warning px-3 m-0" type="button" data-bs-toggle="modal"
                                    data-bs-target="#edit"><i class="fas fa-pencil"></i></button>

                                <!-- Add Modal -->
                                <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fw-semibold" id="exampleModalLabel">Edit Produk
                                                </h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form class="form-bookmark needs-validation" action="#" method="POST"
                                                id="bookmark-form" novalidate="" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="row g-2">
                                                        <div class="form-group mb-3 mt-0 col-md-12">
                                                            <label for="name">Nama Produk</label>
                                                            <input class="form-control" id="name" type="text"
                                                                required placeholder="Contoh: Produk Hummatech"
                                                                autocomplete="name" />
                                                        </div>

                                                        <div class="form-group mb-3 mt-0 col-md-12">
                                                            <label for="description">Deskripsi</label>
                                                            <textarea rows="5" class="form-control" id="description" name="description"
                                                                placeholder="Jelaskan deskripsi produknya"></textarea>
                                                        </div>

                                                        <div class="form-group mb-3 mt-0 col-md-12">
                                                            <label for="feature">Fitur</label>
                                                            <textarea rows="5" class="form-control" id="feature" name="feature" placeholder="Jelaskan fitur produknya"></textarea>
                                                        </div>

                                                        <div class="form-group mb-3 mt-0 col-md-12">
                                                            <label for="link">Link</label>
                                                            <input class="form-control" id="link" type="url"
                                                                required
                                                                placeholder="Contoh: https://hummatech.com/linknya" />
                                                        </div>

                                                        <div class="form-group mb-3 mt-0 col-md-12">
                                                            <label for="photo">Foto / Logo Produk</label>
                                                            <input class="form-control" id="photo" type="file"
                                                                name="photo" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="d-flex justify-content-end">
                                                        <button class="btn btn-secondary" type="button"
                                                            data-bs-dismiss="modal">Batalkan</button>
                                                        <button class="btn btn-primary" type="submit">Perbaharui</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn px-3 btn-danger" type="button"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12 text-center">

            </div>
        @endforelse
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
