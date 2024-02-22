@extends('admin.layouts.app')

@section('subcontent')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Profil perusahaan</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <span></span>
                        <li class="breadcrumb-item">Setting</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="py-3">
        <div class="row">
            <div class="col-sm-4">
                <div class="card card-body">
                    <div class="rounded-3 p-4 on">
                        <img src="{{ asset('assets/images/Logo-Hummatech-Kotak.png') }}" style="object-fit: cover; width: 100%;">
                    </div>
                    <div class="my-1">
                        <label for="call">No. Telp</label>
                        <input type="text" class="form-control" placeholder="No telp">
                    </div>
                    <div class="my-1">
                        <label for="call">Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card card-body">

                    <div class="mt-1">
                        <label for="headline">Judul <span style="font-size: 11px" class="text-danger">*Wajib
                                diisi</span></label>
                        <input type="text" class="form-control" id="headline" value="PT. Humma Technology Indonesia">
                    </div>
                    <div class="my-1">
                        <label for="subheadline">Subjudul <span style="font-size: 11px" class="text-danger">*Wajib
                                diisi</span></label>
                        <input type="text" class="form-control" id="subheadline"
                            value="Perusahaan software terbaik se-jawatimur">
                    </div>
                    <div class="my-1">
                        <label for="deskripsi">Deskripsi <span style="font-size: 11px"
                                class="text-danger">*Wajib diisi</span></label>
                        <textarea name="" id="deskripsi" class="form-control" rows="5" placeholder="Mis: Hummatech adalah perusahaan IT solution terbaik se jawa timur "></textarea>
                    </div>
                    <div class="my-1">
                        <label for="address">Alamat <span style="font-size: 11px"
                                class="text-danger">*Wajib diisi</span></label>
                        <textarea name="" id="address" class="form-control" rows="5" placeholder="Mis: Perum GPA, Kel. Ngijo, Karangploso, Kab. Malang, Jawa Timur"></textarea>
                    </div>
                    <div class="mt-5">
                        <a href="" class="btn btn-primary float-end ">Simpan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
