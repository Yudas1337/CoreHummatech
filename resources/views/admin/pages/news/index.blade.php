@extends('admin.layouts.app')

@section('subcontent')
<div class="py-1"></div>
<div class="px-3 rounded-3 my-4 shadow-sm">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-7 p-0">
                <h3>Berita</h3>
            </div>
            <div class="col-sm-5">
                <div class="d-flex align-items-center">
                    <label for="search">Cari:</label>
                    <input type="text" id="search" class="form-control mx-3">
                    <a href="news/create" class="btn btn-primary" >Tambah</a>

                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <label for="name">Kategori</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Buat Kategori">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mx-3 mb-3">
                                <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Batal</button>
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
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card shadow-sm">
                        <div class="product-box">
                            <div class="product-img">
                                <img class="img-fluid" src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="" style="object-fit:cover; width:242vw; height:20vh;">
                            </div>
                            <div class="product-details">
                                <small style="font-size: 10px"><span class="text-primary pe-2 fw-bold">Magang</span>Kamis, 20 Februari 2024</small>
                                <a href="/news">
                                    <h4>Judul berita</h4>
                                </a>
                                <p class="mt-3" style="font-size: 13px">Melayani pembuatan software berdasarkan
                                    kebutuhan klien/ customer. Produk ...</p>
                                <div class="d-flex gap-1 mb-3">
                                    <small class="text-primary" style="background-color:#DEEBFF; padding: 3px 10px; border-radius:5px">Keseruan</small>
                                    <small class="text-primary" style="background-color:#DEEBFF; padding: 3px 10px; border-radius:5px">Camping</small>
                                </div>
                                <ul class="d-flex justify-content-start gap-2">
                                    <li><a href="/news/show" class="btn btn-sm btn-primary" type="button">
                                        Detail</a></li>
                                    <li><a href="/news/edit" style="background-color: #FFAA05; padding:6px 15px; border-radius: 5px; color: white" type="button"><i class="fa-solid fa-pen"></i></a></li>
                                    <li><a href="#" style="background-color: #DC3545; padding:6px 15px; border-radius: 5px; color: white"
                                            type="button" title="hapus"><i class="fa-solid fa-trash-can"></i></a></li>
                                </ul>
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
