<button class="btn btn-primary m-0" type="button" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</button>

<!-- Add Modal -->
<div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Produk</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-bookmark needs-validation" action="{{ route('create.product') }}" method="POST"
                id="bookmark-form" novalidate="" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="form-group mb-3 mt-0 col-md-12">
                            <label for="photo">Foto / Logo Produk</label>
                            <input class="form-control" id="photo" type="file" name="image" />
                        </div>
                        <div class="form-group mb-3 mt-0 col-md-12">
                            <label for="name">Nama Produk</label>
                            <input class="form-control" name="name" id="name" type="text" required
                                placeholder="Contoh: Produk Hummatech" autocomplete="name" />
                        </div>
                        <div class="form-group mb-3 mt-0 col-md-12">
                            <label for="name">Layanan</label>
                            <select name="service_id" class="js-example-basic-single" id="">
                                <option value="" disabled selected>Pilih Layanan</option>
                                @forelse ($services as $service)
                                    <option value="{{ $service->id }}">{{ $services->name }}</option>
                                @empty
                                    <option value="" disabled selected>Layanan Masih Kosong</option>
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
                            <input class="form-control" id="link" type="url" name="link" required
                                placeholder="Contoh: https://hummatech.com/linknya" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-light-danger" type="button" data-bs-dismiss="modal">Tutup</button>
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".js-example-basic-single").select2({
            dropdownParent: $("#tambah")
        });
    });

    
</script>
