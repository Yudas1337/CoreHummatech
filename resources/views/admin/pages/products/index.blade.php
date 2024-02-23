@extends('admin.layouts.app')

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Produk</h4>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <button class="btn btn-primary m-0" type="button" data-bs-toggle="modal"
                            data-bs-target="#tambah">Tambah</button>

                        <!-- Add Modal -->
                        <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Produk</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form class="form-bookmark needs-validation" action="{{ route('create.product') }}"
                                        method="POST" id="bookmark-form" novalidate="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row g-2">
                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="photo">Foto / Logo Produk</label>
                                                    <input class="form-control" id="photo" type="file"
                                                        name="image" />
                                                </div>
                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="name">Nama Produk</label>
                                                    <input class="form-control" name="name" id="name" type="text"
                                                        required placeholder="Contoh: Produk Hummatech"
                                                        autocomplete="name" />
                                                </div>
                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="name">Layanan</label>
                                                    <select name="service_id" class="js-example-basic-single"
                                                        id="">
                                                        <option value="" disabled selected>Pilih Layanan</option>
                                                        @forelse ($services as $service)
                                                            <option value="{{ $service->id }}">{{ $service->name }}
                                                            </option>
                                                        @empty
                                                            <option value="" disabled selected>Layanan Masih Kosong
                                                            </option>
                                                        @endforelse
                                                    </select>
                                                </div>

                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="description">Deskripsi</label>
                                                    <textarea rows="5" class="form-control" name="description" id="description" name="description"
                                                        placeholder="Jelaskan deskripsi produknya"></textarea>
                                                </div>

                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="feature">Fitur</label>
                                                    <textarea rows="5" class="form-control" id="feature" name="feature" placeholder="Jelaskan fitur produknya"></textarea>
                                                </div>

                                                <div class="form-group mb-3 mt-0 col-md-12">
                                                    <label for="link">Link</label>
                                                    <input class="form-control" id="link" type="url" name="link"
                                                        required placeholder="Contoh: https://hummatech.com/linknya" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-secondary" type="button"
                                                    data-bs-dismiss="modal">Batalkan</button>
                                                <button class="btn btn-primary" type="submit">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
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
    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Edit Produk</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" id="form-update" method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="name">Nama Produk</label>
                                <input class="form-control name" id="name" type="text" required
                                    placeholder="Contoh: Produk Hummatech" autocomplete="name" />
                            </div>

                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="description">Deskripsi</label>
                                <textarea rows="5" class="form-control description" id="description" name="description"
                                    placeholder="Jelaskan deskripsi produknya"></textarea>
                            </div>

                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="feature">Fitur</label>
                                <textarea rows="5" class="form-control feature" id="feature" name="feature"
                                    placeholder="Jelaskan fitur produknya"></textarea>
                            </div>

                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="link">Link</label>
                                <input class="form-control link" name="link" id="link" type="url" required
                                    placeholder="Contoh: https://hummatech.com/linknya" />
                            </div>

                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="photo">Foto / Logo Produk</label>
                                <input class="form-control image mb-2" name="image" id="photo" type="file" />
                                <img src="" alt="" class="img-fluid image" width="100%"
                                    srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batalkan</button>
                            <button class="btn btn-primary" type="submit">Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse ($products as $product)
            <div class="col-xxl-3 col-md-7 col-sm-6 col-12">
                <div class="card border-0 shadow rounded">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Milink"
                        class="rounded-top card-img-thumbnail" />
                    <div class="card-header text-center h4 border-bottom"
                        style="margin-top: -1rem; border-radius: var(--bs-border-radius) var(--bs-border-radius) 0 0 !important;">
                        {{ $product->name }}</div>
                    <div class="card-body">
                        <p>{{ $product->description }}</p>

                        <div class="gap-2 d-flex">
                            <div class="d-grid flex-grow-1">
                                <a href="{{ url('/product/detail/' . $product->id) }}" class="btn btn-primary">Lihat
                                    Detail</a>
                            </div>
                            <div class="d-flex flex-shrink-0 gap-2">
                                <button class="btn btn-warning px-3 m-0 btn-edit" type="button"
                                    data-image="{{ asset('storage/' . $product->image) }}" data-id="{{ $product->id }}"
                                    data-link="{{ $product->link }}" data-feature="{{ $product->feature }}"
                                    id="{{ $product->id }}" data-description="{{ $product->description }}"
                                    data-name="{{ $product->name }}"><i class="fas fa-pencil"></i></button>
                                <button class="btn px-3 btn-danger btn-delete" data-id="{{ $product->id }}"
                                    id="{{ $product->id }}" type="button"><i class="fas fa-trash"></i></button>
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
    @include('admin.components.delete-modal-component')
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".js-example-basic-single").select2({
                dropdownParent: $("#tambah")
            });
        });

        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/delete/product/' + id);
            $('#modal-delete').modal('show');
        });
        $('.btn-edit').click(function() {
            var id = $(this).data('id'); // Mengambil nilai id dari tombol yang diklik
            var name = $(this).data('name'); // Mengambil nilai name dari tombol yang diklik
            var description = $(this).data('description'); // Mengambil nilai name dari tombol yang diklik
            var image = $(this).data('image'); // Mengambil nilai name dari tombol yang diklik
            var feature = $(this).data('feature'); // Mengambil nilai name dari tombol yang diklik
            var link = $(this).data('link'); // Mengambil nilai name dari tombol yang diklik
            $('#form-update').attr('action', '/update/product/' + id); // Mengubah nilai atribut action form
            $('.name').val(name);
            $('.description').val(description);
            $('.feature').val(feature);
            $('.image').attr('src', image);
            $('.link').val(link);
            $('#modal-edit').modal('show');
        });
    </script>
@endsection
