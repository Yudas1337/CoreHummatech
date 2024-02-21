@extends('admin.layouts.app')

@section('subcontent')
    <div class="py-1"></div>
    <div class="px-3 rounded-3 my-4 shadow-sm">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-7 p-0">
                    <h3>Kategori Berita</h3>
                </div>
                <div class="col-sm-5">
                    <div class="d-flex align-items-center">
                        <label for="search">Cari:</label>
                        <input type="text" id="search" class="form-control mx-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#add">Tambah</button>

                        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col">
                                            <label for="name">Kategori</label>
                                            <input class="form-control" type="text" name="name" id="name"
                                                placeholder="Buat Kategori">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mx-3 mb-3">
                                        <button type="button" class="btn btn-secondary me-2"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-primary">Tambah</button>
                                    </div>
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
    <div class="product-grid">
        <div class="product-wrapper-grid">
            <div class="row">
                <div class="col-xl-3 col-lg-5 col-sm-6">
                    <div class="card shadow rounded-3">
                        <div class="product-box">
                            <div class="product-details">
                                <h3 class="text-center">Pengumuman</h3>
                                <div class="mt-4">
                                    <ul class="d-flex justify-content-center px-2">
                                        <li><a href="#" class="btn btn-sm btn-primary btn-edit me-2" type="button"
                                                data-bs-toggle="modal" data-bs-target="#edit">Edit</a></li>
                                        <div class="modal fade" id="edit" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col">
                                                            <label for="name">Kategori</label>
                                                            <input class="form-control" type="text" name="name"
                                                                id="name" placeholder="Buat Kategori"
                                                                value="Pengumuman">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end mx-3 mb-3">
                                                        <button type="button" class="btn btn-secondary mx-2"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="button" class="btn btn-primary">Ubah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <li><a href="#" class="btn btn-danger btn-sm btn-delete"
                                                type="button">Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-sm-6">
                    <div class="card shadow rounded-3">
                        <div class="product-box">
                            <div class="product-details">
                                <h3 class="text-center">Magang</h3>
                                <div class="mt-4">
                                    <ul class="d-flex justify-content-center px-2">
                                        <li><a href="#" class="btn btn-sm btn-primary btn-edit me-2" type="button"
                                                data-bs-toggle="modal" data-bs-target="#edit">Edit</a></li>
                                        <div class="modal fade" id="edit" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col">
                                                            <label for="name">Kategori</label>
                                                            <input class="form-control" type="text" name="name"
                                                                id="name" placeholder="Buat Kategori"
                                                                value="Pengumuman">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end mx-3 mb-3">
                                                        <button type="button" class="btn btn-secondary mx-2"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="button" class="btn btn-primary">Ubah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <li><a href="#" class="btn btn-danger btn-sm btn-delete"
                                                type="button">Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
