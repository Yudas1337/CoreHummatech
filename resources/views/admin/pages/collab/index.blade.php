@extends('admin.layouts.app')

@section('content')
    <style>
        .btn-xs {
            padding: 7px 15px;
            font-size: 10px;
        }
    </style>
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
            @forelse ($collabMitras as $index=>$collabMitra)
            <div class="col-12 col-lg-3 col-md-4">
                <div class="card border-0 shadow rounded">
                    <div class="ribbon mt-2 ribbon-primary ribbon-space-bottom">Magang</div>
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <div class="d-flex gap-3 justify-content-start">
                                <img src="{{ asset('storage/' . $collabMitra->image) }}" class="rounded" width="110px"
                                    alt="">
                                <div class="">
                                    <span class="badge" style="background-color: #E8FFEE; color: #008000">{{ $collabMitra->collabCategory->name }}</span>
                                    <p class="my-3" style="font-size: 13px">{{ $collabMitra->name }}</p>
                                    <div class="mt-2">
                                        <button class="btn btn-warning btn-edit btn-xs mt-2" type="button" data-bs-toggle="modal"
                                        data-bs-target="#edit" data-id="{{ $collabMitra->id }}"
                                        data-name="{{ $collabMitra->name }}">Edit</button>
                                        <button class="btn-delete btn btn-danger btn-xs mt-2" data-id="{{ $collabMitra->id }}">
                                            Hapus
                                        </button>
                                    </div>
                                </div>
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
                    @csrf
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Mitra</label>
                                <input class="form-control" type="text" required="" autocomplete="name" name="name" placeholder="Masukkan nama mitra">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Kategori</label>
                                <select class="js-example-basic-single" aria-label=".form-select example" name="collab_category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->collab_category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" name="image" id="formFile" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Tambah</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Mitra</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" method="POST" id="form-update"
                    novalidate="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Mitra</label>
                                <input class="form-control" type="text" required="" autocomplete="name" name="name" id="name-edit">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Kategori</label>
                                <select class="js-example-basic-single" aria-label=".form-select example" name="collab_category_id" id="category-edit">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->collab_category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <img id="preview_image" class="mt-2" style="max-width: 150px; display: none;" alt="Preview Gambar"> <br>
                                {{-- <input class="form-control" id="formFile" type="file"> --}}
                                <input class="form-control" id="formFile" type="file" onchange="previewImage(event)">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    @include('admin.components.delete-modal-component')
@endsection
@section('script')
<script>
    $('.btn-delete').on('click', function() {
        var id = $(this).data('id');
        $('#form-delete').attr('action', 'delete/collab/mitra/' + id);
        $('#modal-delete').modal('show');
    });
    $('.btn-edit').click(function() {
        var id = $(this).data('id'); // Mengambil nilai id dari tombol yang diklik
        var name = $(this).data('name'); // Mengambil nilai name dari tombol yang diklik
        $('#form-update').attr('action', 'update/collab/mitra/' + id); // Mengubah nilai atribut action form
        $('#name-edit').val(name);
        $('#image-edit').val(image);
        $('#modal-edit').modal('show');
    });
</script>
<script>
    $('#datatable table').DataTable({
        searching: false,
        columnDefs: [{
            targets: 2,
            sortable: false
        }]
    });
</script>
    <script>
        $(document).ready(function() {
            $(".js-example-basic-single").select2({
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
            var previewImage = document.getElementById('preview_image');

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
