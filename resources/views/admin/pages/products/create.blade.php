@extends('admin.layouts.app')

@section('content')
    <div class="py-3 my-3">
        <h4>Tambah produk</h4>
    </div>
    <div class="card">
        <div class="card-body p-4 m-5">
            <form class="form-bookmark needs-validation" action="{{ route('product.store') }}" method="POST" id="bookmark-form"
                novalidate="" enctype="multipart/form-data">
                @csrf
                <div class="row g-2">
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="name">Nama Produk</label>
                        <input class="form-control" name="name" id="name" type="text" required
                            placeholder="Contoh: Produk Hummatech" autocomplete="name" />
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="description">Deskripsi</label>
                        <textarea rows="5" class="form-control" name="description" id="description" name="description"
                            placeholder="Jelaskan deskripsi produknya"></textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="feature">Fitur <small class="text-danger">* Masukan Judul Fitur Beserta
                                Deskripsi</small></label>
                        <div class="d-flex align-items-center mt-3 gap-2">
                            <input type="text" name="title[]" id="" class="form-control"
                                placeholder="Masukan Judul">
                            <input class="form-control m-0" type="text" name="feature[]" autocomplete="name"
                                placeholder="Masukan Fitur" />
                        </div>
                        <div id="product-listing"></div>
                        @error('feature.*')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        @error('title.*')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <button type="button" class="btn add-button-trigger btn-primary mt-3">Tambah Fitur</button>
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="link">Link</label>
                        <input class="form-control" id="link" type="url" name="link" required
                            placeholder="Contoh: https://hummatech.com/linknya" />
                        @error('link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="name">Tampilkan di</label>
                        <select name="service_id" class="js-example-basic-single form-select" id="">
                            <option value="" disabled selected>Pilih Layanan</option>
                            @forelse ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @empty
                                <option value="" disabled selected>Layanan Masih Kosong</option>
                            @endforelse
                        </select>
                        @error('service_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-0 col-md-12">
                        <label for="photo">Foto / Logo Produk</label>
                        <input class="form-control" id="photo" type="file" name="image" />
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-light-danger" type="button" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const deleteElement = (id) => $('#' + id).remove();

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

            $('.btn-close').click((e) => {
                let target = $(e.target).parent('.modal').find('.delete-trigger');
                target.each((i, el) => $(el).click());
            });
        })();
    </script>
@endsection
>>>>>>> b18b55dcbcf4959cbff3aa30cd038de21f290834
