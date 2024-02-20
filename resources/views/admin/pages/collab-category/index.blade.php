@extends('admin.layouts.app')

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Kategori Mitra</h4>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        @include('admin.pages.collab-category.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="table-responsive user-datatable custom-scrollbar">
        <table class="display" id="basic-1">
            <thead>
                <tr class="bg-primary text-white">
                    <th class="text-white w-25">No</th>
                    <th class="text-white w-50">Nama Kategori</th>
                    <th class="text-white w-25">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem</td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            @include('admin.pages.collab-category.edit')
                            @include('admin.pages.collab-category.delete')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ipsum</td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            @include('admin.pages.collab-category.edit')
                            @include('admin.pages.collab-category.delete')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dolor</td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            @include('admin.pages.collab-category.edit')
                            @include('admin.pages.collab-category.delete')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Sit</td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            @include('admin.pages.collab-category.edit')
                            @include('admin.pages.collab-category.delete')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Amet</td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            @include('admin.pages.collab-category.edit')
                            @include('admin.pages.collab-category.delete')
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
