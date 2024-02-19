@extends('admin.layouts.app')

@section('subcontent')
    {{-- <div class="page-title">
  <div class="row">
    <div class="col-sm-6 p-0">
      <h3>Daftar Mitra</h3>
    </div>
    <div class="col-sm-6 p-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">
            <svg class="stroke-icon">
              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#stroke-home"></use>
            </svg></a></li>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Default      </li>
      </ol>
    </div>
  </div>
</div> --}}
@endsection
@section('content')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Mitra</h4>
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
    <div class="col-lg-12">
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/avtar/11.jpg') }}"
                                class="rounded-circle w-50" alt="">
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="mt-2 mb-0">smkn 1 jepara</h3>
                        </div>
                        <div class="mt-3 d-flex justify-content-center gap-2">
                            <button class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#edit" type="button">Edit</button>
                            <button class="btn btn-danger btn-edit" type="button">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Mitra</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Mitra</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Kategori</label>
                                <select class="js-example-basic-single" aria-label=".form-select example">
                                    <option selected="">What's Your Hobbies </option>
                                    <option value="1">Kho-kho</option>
                                    <option value="2">Reading Books</option>
                                    <option value="3">Creativity</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" id="formFile" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-secondary" type="submit">Tambah</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Mitra</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Mitra</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Kategori</label>
                                <select class="js-example-basic-single" aria-label=".form-select example">
                                    <option selected="">What's Your Hobbies </option>
                                    <option value="1">Kho-kho</option>
                                    <option value="2">Reading Books</option>
                                    <option value="3">Creativity</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" id="formFile" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-secondary" type="submit">Perbarui</button>
                        </div>
                    </div>
                </form>
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
@section('script')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
