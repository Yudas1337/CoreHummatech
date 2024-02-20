@extends('admin.layouts.app')

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Penjualan</h4>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        @foreach (range(0, 3) as $item)
            <div class="col-xxl-3 col-md-4 col-sm-6">
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
                            <div class="d-grid flex-grow-1">
                                <a href="/sale/detail" class="btn btn-primary">Lihat Detail</a>
                            </div>
                            <div class="d-flex flex-shrink-0 gap-2">
                                <button class="btn px-3 btn-warning" data-bs-toggle="modal" data-bs-target="#edit" type="button"><i class="fas fa-edit"></i></button>
                                <button class="btn px-3 btn-danger" type="button"><i class="fas fa-trash"></i></button>
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

    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Penjualan</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Penjualan</label>
                                <input class="form-control" type="text" required="" autocomplete="name" placeholder="Masukan Nama Penjualan">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" required="" autocomplete="" placeholder="Masukan Deskripsi Penjualan" ></textarea>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Tautan Proposal Penjualan</label>
                                <input type="text" class="form-control" name="" id="" placeholder="Masukan Tautan Proposal">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" id="formFile" type="file">
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
    <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Penjualan</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Penjualan</label>
                                <input class="form-control" type="text" required="" autocomplete="name" placeholder="Masukan Nama Penjualan">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" required="" autocomplete="" placeholder="Masukan Deskripsi Penjualan" ></textarea>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Tautan Proposal Penjualan</label>
                                <input type="text" class="form-control" name="" id="" placeholder="Masukan Tautan Proposal">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" id="formFile" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
