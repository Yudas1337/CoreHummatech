@extends('admin.layouts.app')

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Struktur Usaha</h4>
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
                                        <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Struktur Usaha
                                        </h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form class="form-bookmark needs-validation" action="#" method="POST"
                                        id="bookmark-form" novalidate="" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row g-2">
                                                <div class="mb-3 mt-0 col-md-12">
                                                    <label for="bm-title">Nama</label>
                                                    <input class="form-control" type="text" required=""
                                                        autocomplete="name" placeholder="PT Hummatech Digital Indonesia" />
                                                </div>
                                                <div class="mb-3 mt-0 col-md-12">
                                                    <label for="bm-title">Deskripsi <span
                                                            class="opacity-75">(Opsional)</span></label>
                                                    <textarea name="" id="deskripsi" cols="30" rows="5" class="form-control"
                                                        placeholder="Mis: Bergerak dibidang&hellip;"></textarea>
                                                </div>
                                                <div class="mb-3 mt-0 col-md-12">
                                                    <label for="bm-title">Produk <span
                                                            class="opacity-75">(Opsional)</span></label>
                                                    <input class="form-control" type="text" name="products[]"
                                                        required="" autocomplete="name"
                                                        placeholder="Mis: Website Development" />

                                                    <div id="product-listing"></div>

                                                    <button type="button"
                                                        class="btn add-button-trigger btn-primary mt-3">Tambah
                                                        Produk</button>
                                                </div>
                                                <div class="mb-3 mt-0 col-md-12">
                                                    <label for="bm-title">Foto Testimoni</label>
                                                    <input class="form-control" type="file" required=""
                                                        autocomplete="name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-secondary" type="button"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button class="btn btn-primary" type="submit">Simpan</button>
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
                                        <h5 class="modal-title fw-semibold" id="exampleModalLabel">Edit Struktur Usaha
                                        </h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form class="form-bookmark needs-validation" action="#" method="POST"
                                        id="bookmark-form" novalidate="" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row g-2">
                                                <div class="mb-3 mt-0 col-md-12">
                                                    <label for="bm-title">Nama</label>
                                                    <input class="form-control" type="text" required=""
                                                        autocomplete="name"
                                                        placeholder="PT Hummatech Digital Indonesia" />
                                                </div>
                                                <div class="mb-3 mt-0 col-md-12">
                                                    <label for="bm-title">Deskripsi <span
                                                            class="opacity-75">(Opsional)</span></label>
                                                    <textarea name="" id="deskripsi" cols="30" rows="5" class="form-control"
                                                        placeholder="Mis: Bergerak dibidang&hellip;"></textarea>
                                                </div>
                                                <div class="mb-3 mt-0 col-md-12">
                                                    <label for="bm-title">Produk <span
                                                            class="opacity-75">(Opsional)</span></label>
                                                    <input class="form-control" type="text" name="products[]"
                                                        required="" autocomplete="name"
                                                        placeholder="Mis: Website Development" />

                                                    <div id="product-listing"></div>

                                                    <button type="button"
                                                        class="btn add-button-trigger btn-primary mt-3">Tambah
                                                        Produk</button>
                                                </div>
                                                <div class="mb-3 mt-0 col-md-12">
                                                    <img src="https://fakeimg.pl/1920x1080" alt="Image 1"
                                                        class="w-100 rounded-3 mb-3" />

                                                    <label for="bm-title">Foto Testimoni</label>
                                                    <input class="form-control" type="file" required=""
                                                        autocomplete="name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-secondary" type="button"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button class="btn btn-primary" type="submit">Simpan</button>
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
    <div class="row">
        @foreach (range(1, 20) as $item)
            <div class="col-md-4 col-lg-3">
                <div class="card card-body shadow rounded-4">
                    <img src="https://fakeimg.pl/1920x1080" alt="Image 1" class="w-100 rounded-3" />

                    <div class="pt-4">
                        <h1 class="h4 border-bottom pb-3 mb-3 text-primary">PT Get Aplikasi Indonesia</h1>

                        <div class="row mb-3">
                            @foreach (range(0, 3) as $item)
                                <div class="col-6 mb-2">&mdash; Lorem Ipsum</div>
                            @endforeach
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button data-bs-toggle="modal" data-bs-target="#edit" class="btn btn-warning px-3"><i
                                    class="fas fa-pencil"></i></button>
                            <button data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger px-3"><i
                                    class="fas fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <ul class="pagination justify-content-center pt-3 pb-5">
        <li class="page-item">
            <a href="#" class="page-link"><i class="fas fa-arrow-left"></i></a>
        </li>
        @foreach (range(0, 4) as $i)
            <li class="page-item">
                <a href="#" class="page-link {{ $i + 1 !== 1 ?: 'active' }}">{{ $i + 1 }}</a>
            </li>
        @endforeach
        <li class="page-item">
            <a href="#" class="page-link"><i class="fas fa-arrow-right"></i></a>
        </li>
    </ul>
@endsection

@section('script')
    <script>
        const deleteElement = (id) => $('#' + id).remove();

        (() => {
            $('.add-button-trigger').click((e) => {
                let idInput = 'input_' + Math.random().toString(36).substr(2, 9); // Generate random id
                let target = $(e.target).parent().find('#product-listing');
                target.append(`<div class="d-flex align-items-center mt-3 gap-2" id="${idInput}">
                <input class="form-control mb-0" type="text" name="products[]"
                    required="" autocomplete="name"
                    placeholder="Mis: Website Development" />
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
