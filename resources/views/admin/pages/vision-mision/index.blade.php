@extends('admin.layouts.app')

@section('content')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h5 class="m-2 fw-bold">Visi dan Misi</h5>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <a class="btn btn-primary m-0" href="{{ url('/setting/vision-mision/create') }}">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-1">
        <h3>Visi</h3>
        <div class="card">
            <div class="card-body pb-0 border-l-primary border-4">
                <div class="card-header">
                    <div class="card-header-right">
                        <ul class="card-option">
                            <li>
                                <div><i class="icon-settings"></i></div>
                            </li>
                            <li><a href="{{ url('/setting/vision-mision/edit') }}"><i class="fa fa-edit"></i></a></li>
                            <li><i class="fa fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text mb-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eligendi esse deleniti corrupti
                    impedit veniam numquam voluptas sint ab, laboriosam itaque, laborum tenetur dignissimos quibusdam
                    voluptatum, dicta suscipit! Facilis corrupti iusto ex deleniti, lorem
                </p>
            </div>
        </div>
        <h3>Misi</h3>
        <div class="card">
            <div class="card-body pb-0 border-l-primary border-4">
                <div class="card-header">
                    <div class="card-header-right">
                        <ul class="card-option">
                            <li>
                                <div><i class="icon-settings"></i></div>
                            </li>
                            <li><a href="{{ url('/setting/vision-mision/edit') }}"><i class="fa fa-edit"></i></a></li>
                            <li><i class="fa fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text mb-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eligendi esse deleniti corrupti
                    impedit veniam numquam voluptas sint ab, laboriosam itaque, laborum tenetur dignissimos quibusdam
                    voluptatum, dicta suscipit! Facilis corrupti iusto ex deleniti, lorem
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body pb-0 border-l-primary border-4">
                <div class="card-header">
                    <div class="card-header-right">
                        <ul class="card-option">
                            <li>
                                <div><i class="icon-settings"></i></div>
                            </li>
                            <li><a href="{{ url('/setting/vision-mision/edit') }}"><i class="fa fa-edit"></i></a></li>
                            <li><i class="fa fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text mb-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eligendi esse deleniti corrupti
                    impedit veniam numquam voluptas sint ab, laboriosam itaque, laborum tenetur dignissimos quibusdam
                    voluptatum, dicta suscipit! Facilis corrupti iusto ex deleniti, lorem
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body pb-0 border-l-primary border-4">
                <div class="card-header">
                    <div class="card-header-right">
                        <ul class="card-option">
                            <li>
                                <div><i class="icon-settings"></i></div>
                            </li>
                            <li><a href="{{ url('/setting/vision-mision/edit') }}"><i class="fa fa-edit"></i></a></li>
                            <li><i class="fa fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text mb-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eligendi esse deleniti corrupti
                    impedit veniam numquam voluptas sint ab, laboriosam itaque, laborum tenetur dignissimos quibusdam
                    voluptatum, dicta suscipit! Facilis corrupti iusto ex deleniti, lorem
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body pb-0 border-l-primary border-4">
                <div class="card-header">
                    <div class="card-header-right">
                        <ul class="card-option">
                            <li>
                                <div><i class="icon-settings"></i></div>
                            </li>
                            <li><a href="{{ url('/setting/vision-mision/edit') }}"><i class="fa fa-edit"></i></a></li>
                            <li><i class="fa fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text mb-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eligendi esse deleniti corrupti
                    impedit veniam numquam voluptas sint ab, laboriosam itaque, laborum tenetur dignissimos quibusdam
                    voluptatum, dicta suscipit! Facilis corrupti iusto ex deleniti, lorem
                </p>
            </div>
        </div>
    </div>
@endsection
