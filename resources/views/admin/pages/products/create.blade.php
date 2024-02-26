@extends('admin.layouts.app')

@section('subcontent')
<h4 class="pt-3">Tambah Produk</h4>
@endsection

@section('content')
    <form class="form-bookmark needs-validation" action="{{ route('product.store') }}" method="POST" id="bookmark-form" novalidate="" enctype="multipart/form-data">
        @csrf
        <div class="card border-1 my-3 p-4">
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
                    <select name="service_id" class="js-example-basic-single" id="tambah">
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
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('product.index') }}" class="btn btn-light-danger">Kembali</a>
                <button class="btn btn-primary" type="submit">Tambah</button>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".js-example-basic-single").select2({
                dropdownParent: $("#tambah")
            });
        });

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
