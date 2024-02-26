<button class="btn btn-primary m-0" type="button" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Layanan</button>

<!-- Add Modal -->
<div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Layanan</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-bookmark needs-validation" action="{{ route('create.service') }}" method="POST" id="bookmark-form" novalidate=""
                enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <div class="row g-2">
                        <div class="form-group mb-3 mt-0 col-md-12">
                            <label for="image">Foto Layanan</label>
                            <input class="form-control" id="image" type="file" name="image" required  />
                        </div>
                        <div class="form-group mb-3 mt-0 col-md-12">
                            <label for="name">Nama Layanan</label>
                            <input class="form-control" id="name" name="name" type="text" required placeholder="Masukkan nama layanan" />
                        </div>
                        <div class="form-group mb-3 mt-0 col-md-12">
                            <label for="description">Deskripsi Layanan</label>
                            <textarea rows="5" class="form-control" id="description" name="description" placeholder="Masukkan deskripsi layanan"></textarea>
                        </div>
                        <div class="form-group mb-3 mt-0 col-md-12">
                            <label for="link">Tautan Layanan <small class="text-danger">*Isi jika ada</small></label>
                            <input class="form-control" id="link" name="link" type="text" required placeholder="Masukkan tautan layanan" />
                        </div>
                        <div class="form-group mb-3 mt-0 col-md-12">
                            <label for="proposal">File Proposal <small>(opsional)</small></label>
                            <input class="form-control" id="proposal" name="proposal" type="file" required placeholder="Contoh: https://hummatech.com/linknya" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-light-danger" type="button" data-bs-dismiss="modal">Batalkan</button>
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
