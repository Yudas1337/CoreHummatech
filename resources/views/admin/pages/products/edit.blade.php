@extends('admin.layouts.app')

@section('content')
    <div class="py-3 my-3">
        <h4>Edit produk</h4>
    </div>
    <div class="card">
        <div class="card-body p-4 m-5">
            <form class="form-bookmark needs-validation" action="{{ route('product.update', $product->id) }}" id="form-edit"
                method="POST" id="bookmark-form" novalidate="" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row g-2">
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="name">Nama Produk</label>
                        <input class="form-control" name="name" id="name" value="{{ $product->name }}"
                            type="text" required placeholder="Contoh: Produk Hummatech" autocomplete="name" />
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="description">Deskripsi</label>
                        <textarea rows="5" class="form-control" name="description" id="description" name="description"
                            placeholder="Jelaskan deskripsi produknya">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="feature">Fitur <small class="text-danger">* Masukan Judul Fitur Beserta
                                Deskripsi</small></label>
                        <input type="hidden" name="id_feature[]" value="{{ $product->features->first()->id }}"
                            id="">
                        <div class="d-flex align-items-center mt-3 gap-2">
                            <input type="text" name="title[]" value="{{ $product->features->first()->title }}"
                                id="" class="form-control" placeholder="Masukan Judul">
                            <input class="form-control m-0" type="text" name="feature[]"
                                value="{{ $product->features->first()->name }}" autocomplete="name"
                                placeholder="Masukan Fitur" />
                        </div>

                        <div id="product-listing">
                            @foreach ($product->features->skip(1) as $feature)
                                <div class="d-flex align-items-center mt-3 gap-2" id="input_{{ $feature->id }}">
                                    <input type="hidden" name="id_feature[]" value="{{ $feature->id }}" id="">
                                    <input type="text" name="title[]" value="{{ $feature->title }}" id=""
                                        class="form-control" placeholder="Masukan Judul">
                                    <input class="form-control m-0" type="text" name="feature[]"
                                        value="{{ $feature->name }}" autocomplete="name" placeholder="Masukan Fitur" />
                                    <button onclick="deleteElement('input_{{ $feature->id }}')"
                                        data-id="{{ $feature->id }}" type="button"
                                        class="btn btn-delete px-3 mt-0 btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            @endforeach
                        </div>

                        <button type="button" class="btn add-button-trigger btn-primary mt-3">Tambah Fitur</button>
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="link">Link</label>
                        <input class="form-control" id="link" value="{{ $product->link }}" type="url"
                            name="link" required placeholder="Contoh: https://hummatech.com/linknya" />
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="name">Tampilkan di</label>
                        <select name="service_id" class="js-example-basic-single form-select" id="">
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}"
                                    {{ $service->id == $product->service_id ? 'selected' : '' }}>
                                    {{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="photo">Foto / Logo Produk</label>
                        <div class="mb-3 border rounded p-2 w-25">
                            <img class="img-fluid " src="{{ asset('storage/' . $product->image) }}" />
                        </div>
                        <input class="form-control" id="photo" type="file" name="image" />
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-light-danger" type="button" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    @include('admin.components.delete-modal-component')
@endsection

@section('script')
    <script>
        const deleteElement = (id) => $('#' + id).remove();
        $('.btn-delete').click(function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/product/feature/' + id);
            $('#modal-delete').modal('show');
        });
        (() => {
            $('.add-button-trigger').click((e) => {
                let idInput = 'input_' + Math.random().toString(36).substr(2, 9); // Generate random id
                let target = $(e.target).parent().find('#product-listing');
                target.append(`<div class="d-flex align-items-center mt-3 gap-2" id="${idInput}">
    <input class="form-control mb-0" type="text" name="title[]"
        required="" autocomplete="name"
        placeholder="Masukan Judul" />
    <input class="form-control mb-0" type="text" name="feature[]"
        required="" autocomplete="name"
        placeholder="Masukan Fitur" />
    <button onclick="deleteElement('${idInput}')" type="button" class="btn delete-trigger px-3 mt-0 btn-danger"><i
            class="fas fa-trash"></i></button>
</div>`);
            });
        })();
    </script>
@endsection
