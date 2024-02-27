@extends('admin.layouts.app')

@section('subcontent')
<div class="d-flex justify-content-between align-items-end pt-4">
    <div class="col-12 col-lg-3">
        <label for="kategori">Pilih kategori</label>
        <select class="form-select" aria-label="Default select example">
            <option>Semua</option>
            @forelse ($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @empty
                <option value="">Belum ada kategori produk</option>
            @endforelse
        </select>
    </div>
    <div class="col-12 col-lg-9 d-flex justify-content-end">
        <div class="d-flex gap-2 col-sm-7">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <a href="{{ route('product.create') }}" class="btn btn-primary w-75">Tambah Produk</a>
        </div>
    </div>
</div>
@endsection

@section('content')
    {{-- <!-- Add Modal -->
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
                            <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope="">
                                <img class="img-thumbnail" id="image-preview" itemprop="thumbnail">
                            </figure>
                            <input class="form-control" id="photo" type="file"
                                name="image" onchange="preview(event)"/>
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

                        <div class="form-group mt-0 col-md-12">
                            <label for="feature">Fitur</label>
                            <input class="form-control" type="text" name="fiturs[]" autocomplete="name" placeholder="Jelaskan fitur produknya" />
                        </div>
                        <div id="product-listing"></div>
                        <div class="mt-0 mb-2" style="width: 20px;">
                            <button type="button" class="btn me-auto add-button-trigger btn-primary">Tambah</button>
                        </div>

                        <div class="form-group mb-3 mt-0 col-md-12">
                            <label for="link">Link</label>
                            <input class="form-control" id="link" type="url" name="link"
                                required placeholder="Contoh: https://hummatech.com/linknya"/>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-light-danger" type="button"
                            data-bs-dismiss="modal">Tutup</button>
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <!-- Edit Modal -->
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
                                <label for="photo">Foto / Logo Produk</label>
                                <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope="">
                                    <img class="img-thumbnail" id="image-edit" itemprop="thumbnail">
                                </figure>
                                <input class="form-control image mb-2" name="image" id="photo" type="file" onchange="previewImage(event)"/>
                            </div>
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="name">Nama Produk</label>
                                <input class="form-control name" name="name" id="name" type="text" required
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
    </div> --}}

    <div class="row py-5">
        <div class="col-12">
            @forelse ($products as $product)
                <div class="col-lg-3">
                    <div class="card border-0 shadow rounded">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="object-fit: cover; width: 100%; height: 200px"
                            class="rounded-top card-img-thumbnail" />
                        <div class="card-header text-center h4 border-bottom"
                            style="margin-top: -1rem; border-radius: var(--bs-border-radius) var(--bs-border-radius) 0 0 !important;">
                            {{ $product->name }}</div>
                        <div class="card-body">
                            <p>{{ Str::limit($product->description, 80) }}</p>
    
                            <div class="gap-2 d-flex">
                                <div class="d-grid flex-grow-1">
                                    <a href="{{ url('/product/detail/' . $product->id) }}" class="btn btn-light-primary btn-mini">Lihat
                                        Detail</a>
                                </div>
                                <div class="d-flex flex-shrink-0 gap-2">
                                    <button class="btn btn-light-warning px-3 m-0 btn-edit" type="button"
                                        data-image="{{ asset('storage/' . $product->image) }}" data-id="{{ $product->id }}"
                                        data-link="{{ $product->link }}" data-feature="{{ $product->feature }}"
                                        id="{{ $product->id }}" data-description="{{ $product->description }}"
                                        data-name="{{ $product->name }}"><i class="fas fa-pencil"></i></button>
                                    <button class="btn px-3 btn-light-danger btn-delete" data-id="{{ $product->id }}"
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
            $('#image-edit').attr('src', image);
            $('.link').val(link);
            $('#modal-edit').modal('show');
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

    <script>
        const deleteElement = (id) => $('#' + id).remove();

        $('.add-button-trigger').click((e) => {
            let idInput = 'input_' + Math.random().toString(36).substr(2, 9); // Generate random id
            let target = $(e.target).parents('.modal').find('#product-listing');
            target.append(`<div class="d-flex align-items-center mt-3 gap-2" id="${idInput}">
                <input class="form-control" type="text" name="fiturs[]" autocomplete="name" placeholder="Jelaskan fitur produknya" />
                <button onclick="deleteElement('${idInput}')" type="button" class="btn delete-trigger px-3 mt-0 btn-danger"><i
                        class="fas fa-trash"></i></button>
            </div>`);
        });

        $('.btn-close').click((e) => {
            let target = $(e.target).parent('.modal').find('.delete-trigger');
            target.each((i, el) => $(el).click());
        });
    </script>
@endsection
