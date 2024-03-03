@extends('admin.layouts.app')

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-2">
                    <div class="d-flex align-items-center">
                        <label for="">Filter:</label>
                        <select name="" id="" class="form-control mx-2">
                            <option value="" selected>Semua</option>
                            <option value="" selected>Magang</option>
                        </select>
                    </div>
                </div>
                <div class="col-10">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Cari&hellip;"
                                aria-label="Cari &hellip;" />
                        </div>
                        <button class="btn btn-primary m-0" type="button" data-bs-toggle="modal" data-bs-target="#tambah">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @forelse ($testimonials as $testimoni)

                <div class="col-sm-12 col-xl-6">
                    <div class="card">
                        <div class="card-header" style="width: 100%; background: none; margin-bottom: -20px">
                            <div class="position-absolute top-0 start-0">
                                <p class="bg-primary px-3 py-1 text-light" style="border-radius: 5px 0 0 0; font-size: 12px">{{ $testimoni->service->name }}</p>
                            </div>
                            <div class="card-header-right">
                                <ul class="list-unstyled" style="text-align:center">
                                    <li><i class="fa fa-edit text-primary mb-2 p-1 btn-edit" type="button" data-bs-toggle="modal"
                                            data-bs-target="#edit" data-id="{{ $testimoni->id }}" data-name="{{ $testimoni->name }}" data-description="{{ $testimoni->description }}" data-service_id="{{ $testimoni->service_id }}" data-image="{{ $testimoni->image }}"></i></li>
                                    <li><i class="fa-solid fa-trash text-primary p-1 btn-delete" data-id="{{ $testimoni->id }}" type="button"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex" style="z-index: 1"><img class="align-self-center img-fluid img-80 rounded-3"
                                    src="../assets/images/ecommerce/product-table-6.png" alt="#">
                                <div class="flex-grow-1 ms-3">
                                    <div class="product-name mb-1">
                                        <h4><a href="#">{{ $testimoni->name }}</a></h4>
                                    </div>
                                    <p class="text-muted m-0" style="width: 80%">{{ $testimoni->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('nodata.jpg') }}" alt="" width="400px">
                </div>
                <h5 class="text-center">
                    Data Masih Kosong
                </h5>
            @endforelse
        </div>
    </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Testimoni</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="{{ route('testimonial.store') }}" method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="image">Foto Testimoni</label>
                                <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope="">
                                    <img class="img-thumbnail" id="image-preview" itemprop="thumbnail">
                                </figure>
                                <input class="form-control" id="image" name="image" type="file" onchange="preview(event)">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="name">Nama Lengkap</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" autocomplete="name" name="name"  placeholder="Masukkan nama">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="description">Deskripsi</label>
                            <textarea name="description @error('description') is-invalid @enderror" id="description" rows="4" class="form-control" placeholder="Masukkan deskripsi"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 mt-0 col-md-12">
                            <label for="service_id">Tampilkan di</label>
                            <select class="tambah" aria-label=".form-select example" name="service_id">
                                @foreach ($services as $service)
                                <option value="{{ $service->id }}"
                                    {{ $service->service_id == $service->id ? 'selected' : '' }}>
                                    {{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button class="btn btn-secondary " type="button" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-primary " type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Testimoni</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" method="POST" id="form-update"
                    novalidate="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="name">Nama Lengkap</label>
                                <input class="form-control" type="text" id="name-edit" autocomplete="name" name="name">
                            </div>
                        </div>
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description-edit" rows="4" class="form-control"></textarea>
                        </div>

                        <div class="mb-3 mt-0 col-md-12">
                            <label for="service_id">Tampilkan di</label>
                            <select class="tambah" aria-label=".form-select example" id="service-edit" name="service_id">
                                @foreach ($services as $service)
                                <option value="{{ $service->id }}"
                                    {{ $service->service_id == $service->id ? 'selected' : '' }}>
                                    {{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Foto Testimoni</label><br>
                            <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope="">
                                <img class="img-thumbnail" id="image-edit" itemprop="thumbnail">
                            </figure>
                            <input class="form-control" id="formFile" type="file" name="image" onchange="previewImage(event)">
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <button class="btn btn-secondary " type="button" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-primary " type="submit">Simpan</button>
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
    @include('admin.components.delete-modal-component')
@endsection
@section('script')
    <script>
        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/testimonial/' + id);
            $('#modal-delete').modal('show');
        });

        $('.btn-edit').on('click', function() {
            var id = $(this).data('id');
            var image = $(this).data('image');
            var name = $(this).data('name');
            var description = $(this).data('description');
            var service_id = $(this).data('service_id');
            $('#form-update').attr('action', '/testimonial/' + id);
            $('#name-edit').val(name);
            $('#description-edit').val(description);
            $('#service-edit').val(service_id);
            $('#image-edit').attr('src', 'storage/' + image);
            $('#edit').modal('show');
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".tambah").select2({
                dropdownParent: $("#tambah")
            });
        });
        $(document).ready(function() {
            $(".js-example-basic-single").select2({
                dropdownParent: $("#edit")
            });
        });
    </script>

    <script>
        function previewImage(event) {
            var input = event.target;
            var previewImage = document.getElementById('image-edit');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        function preview(event) {
            var input = event.target;
            var previewImage = document.getElementById('image-preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
