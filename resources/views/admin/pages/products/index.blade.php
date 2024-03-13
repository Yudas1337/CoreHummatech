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
        <form action="/product">
            <div class="col-12 col-lg-12 d-flex justify-content-end">
                <div class="d-flex gap-2 col-sm-12">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" name="name" value="{{ request()->name }}" class="form-control"
                            placeholder="Cari Produk" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <a href="{{ route('product.create') }}" class="btn btn-primary w-75">Tambah Produk</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row py-5">
        @forelse ($products as $product)
            <div class="col-lg-3">
                <div class="card border-0 shadow rounded">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        style="object-fit: cover; width: 100%; height: 200px" class="rounded-top card-img-thumbnail" />
                    <div class="card-header text-center h4 border-bottom"
                        style="margin-top: -1rem; border-radius: var(--bs-border-radius) var(--bs-border-radius) 0 0 !important;">
                        {{ $product->name }}</div>
                    <div class="card-body">
                        <p>{{ Str::limit($product->description, 80) }}</p>

                        <div class="gap-2 d-flex">
                            <div class="d-grid flex-grow-1">
                                <a href="{{ route('product.show', $product->id) }}"
                                    class="btn btn-light-primary btn-mini">Lihat
                                    Detail</a>
                            </div>
                            <div class="d-flex flex-shrink-0 gap-2">
                                <button class="btn btn-light-warning px-3 m-0 btn-edit" type="button"
                                    onclick="window.location.href='{{ $product->type == 'company' ? route('productCompany.edit', $product->id) : route('product.edit', $product->id) }}'">
                                    <i class="fas fa-pencil"></i>
                                </button>
                                <button class="btn btn-light-danger px-3 m-0 btn-delete" type="button"
                                    data-id="{{ $product->id }}"><i class="fas fa-trash"></i></button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK',
                timer: 2000, // Menutup SweetAlert setelah 3 detik
                timerProgressBar: true // Menampilkan progress bar
            });
        </script>
    @endif
    <script>
        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/product/' + id);
            $('#modal-delete').modal('show');
        });
    </script>

    <script>
        function previewImage(event) {
            var input = event.target;
            var previewImage = document.getElementById('image-edit');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
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

                reader.onload = function(e) {
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
