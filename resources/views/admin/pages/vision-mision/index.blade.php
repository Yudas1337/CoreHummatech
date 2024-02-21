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
        <h3 class="mb-3">Visi</h3>
        <div class="card pb-0 border-l-primary border-4 border-0 shadow">
            <div class="card-header">
                <div class="card-header-right">
                    <ul class="card-option">
                        <li>
                            <div><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="fa fa-pen"></i></li>
                        <li><i class="fa fa-trash"></i></li>
                    </ul>
                </div>
                <p class="" style="width:95%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam obcaecati nobis animi
                    atque nesciunt, iusto, praesentium commodi tempora quasi voluptatum veritatis quaerat. Voluptatem
                    numquam, corporis debitis unde quibusdam facere quam asperiores laboriosam nesciunt. Laboriosam soluta
                    repellat veniam aliquid quam eaque dicta!
                </p>
            </div>
        </div>
        <h3 class="mb-3">Misi</h3>
        @foreach (range(0,2) as $item)
        <div class="card pb-0 border-l-primary border-4 border-0 shadow">
            <div class="card-header">
                <div class="card-header-right">
                    <ul class="card-option">
                        <li>
                            <div><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="fa fa-pen"></i></li>
                        <li><i class="fa fa-trash"></i></li>
                    </ul>
                </div>
                <p class="" style="width:95%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam obcaecati nobis animi
                    atque nesciunt, iusto, praesentium commodi tempora quasi voluptatum veritatis quaerat. Voluptatem
                    numquam, corporis debitis unde quibusdam facere quam asperiores laboriosam nesciunt. Laboriosam soluta
                    repellat veniam aliquid quam eaque dicta!
                </p>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            <ul class="pagination pagination-primary pagin-border-primary">
                <li class="page-item disabled"><a class="page-link" href="javascript:void(0)" tabindex="-1">Previous</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                <li class="page-item active"><a class="page-link" href="javascript:void(0)">2 <span class="sr-only">(current)</span></a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
              </ul>
        </div>
    </div>
@endsection
