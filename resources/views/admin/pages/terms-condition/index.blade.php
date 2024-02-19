@extends('admin.layouts.app')

@section('subcontent')
<div class=" p-1">
    <div class="card border-0 shadow-bar p-3 mt-3">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h4 class="m-2">Sarat & Ketentuan</h4>
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
<div class="p-1">
    <div class="card border-0 shadow-bar p-3 mt-3">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="button">Simpan</button>
                </div>
                <div class="m-2">
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label for="" class="fw-semibold">Syarat</label>
                            <div class="gap-2 col-12 d-flex">
                                <input type="text" class="form-control" name="" value="" placeholder="Masukkan syarat" id="">
                                <button style="background-color: #ffac053c; color: #FFAA05" class="btn btn-sm m-0" type="button" onclick="window.location.href ='/terms-condition/edit'"> <i class="fa fa-pencil fw-bold"></i></button>
                                <button style="background-color: #dc354629; color: #DC3545" class="btn btn-sm m-0" type="button"><i class="fa fa-trash-o fw-bold"></i></button>
                            </div>

                            <button class="btn btn-primary btn-sm mt-2" type="button">Tambah Baris</button>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="" class="fw-semibold">Ketentuan</label>
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control" name="" value="" style="width: 88%" placeholder="Masukkan ketentuan" id="">
                                <button style="background-color: #ffac053c; color: #FFAA05" class="btn btn-sm m-0" type="button"><i class="fa fa-pencil fw-bold"></i></button>
                                <button style="background-color: #dc354629; color: #DC3545" class="btn btn-sm m-0"  type="button"><i class="fa fa-trash-o fw-bold"></i></button>
                            </div>
                            <button class="btn btn-primary btn-sm mt-2" type="button">Tambah Baris</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
