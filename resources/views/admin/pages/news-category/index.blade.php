@extends('admin.layouts.app')

@section('header-style')
    <style>
        #datatable .table th {
            background: #36405E;
            color: white;
        }

        #datatable .table tr:nth-of-type(odd) td {
            background: #F0F0F0 !important;
        }

        #datatable .table tr:nth-of-type(even) td {
            background: #FFF !important;
        }

        #datatable .table tr:nth-of-type(even) .sorting_1 {
            background: #FAFAFA !important;
        }

        #datatable .table tr:nth-of-type(odd) .sorting_1 {
            background: #F0F0F0 !important;
        }

        .dark-only #datatable .table tr:nth-of-type(odd) .sorting_1,
        .dark-only #datatable .table tr:nth-of-type(odd) td {
            background: none !important;
            color: white !important;
        }

        .dark-only #datatable tr td {
            border-color: rgba(var(--bs-white-rgb), .25) !important;
        }

        .dark-only #datatable .table tr:nth-of-type(even) td {
            color: white !important;
            background: rgba(var(--bs-white-rgb), .125) !important;
        }

        .dark-only #datatable .table tr:nth-of-type(odd) .sorting_1,
        .dark-only #datatable .table tr:nth-of-type(even) .sorting_1 {
            background: rgba(var(--bs-white-rgb), .15) !important;
        }

        .dark-only #datatable .dataTables_paginate {
            border-color: rgba(var(--bs-white-rgb), .15);
        }
        .dark-only #datatable .paginate_button,
        .dark-only #datatable .dataTables_info {
            color:rgba(var(--bs-white-rgb), 1) !important;
        }
    </style>
@endsection

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Kategori Berita</h4>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        @include('admin.pages.news-category.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="table-responsive custom-scrollbar" id="datatable">
        <table class="table table-striped display">
            <thead>
                <tr>
                    <th class="w-25">No</th>
                    <th class="w-75">Nama</th>
                    <th class="text-end w-25">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem</td>
                    <td>
                        <div class="d-flex gap-2">
                            @include('admin.pages.news-category.edit')
                            @include('admin.pages.news-category.delete')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ipsum</td>
                    <td>
                        <div class="d-flex gap-2">
                            @include('admin.pages.news-category.edit')
                            @include('admin.pages.news-category.delete')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dolor</td>
                    <td>
                        <div class="d-flex gap-2">
                            @include('admin.pages.news-category.edit')
                            @include('admin.pages.news-category.delete')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Sit</td>
                    <td>
                        <div class="d-flex gap-2">
                            @include('admin.pages.news-category.edit')
                            @include('admin.pages.news-category.delete')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Amet</td>
                    <td>
                        <div class="d-flex gap-2">
                            @include('admin.pages.news-category.edit')
                            @include('admin.pages.news-category.delete')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Constecteur</td>
                    <td>
                        <div class="d-flex gap-2">
                            @include('admin.pages.news-category.edit')
                            @include('admin.pages.news-category.delete')
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $('#datatable table').DataTable({
            searching: false,
            columnDefs: [{
                targets: 2,
                sortable: false
            }]
        });
    </script>
@endsection
