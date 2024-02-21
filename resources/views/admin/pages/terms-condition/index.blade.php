@extends('admin.layouts.app')

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6 align-items-center d-flex gap-2">
                    <h4 class="mb-0 me-3 ms-2 h6 fw-normal">Filter:</h4>
                    <div class="w-25">
                        <select name="" id="" class="form-control">
                            <option value="" disabled="disabled" selected="selected">Pilih Opsi Filter</option>
                            <option value="it">IT Consultant</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>

                        <!-- Button Add Modal -->
                        <button class="btn btn-primary m-0" type="button" data-bs-toggle="modal"
                            data-bs-target="#tambah">Tambah</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        @foreach (range(1, 20) as $item)
            <div class="col-md-12">

                <div class="card pb-0 border-l-primary border-4 border-0 shadow">
                    <div class="card-header">
                        <div class="card-header-right">
                            <ul class="card-option">
                                <li>
                                    <div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit-data">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                    <circle cx="12" cy="12" r="3" />
                                                    <path
                                                        d="M13.765 2.152C13.398 2 12.932 2 12 2c-.932 0-1.398 0-1.765.152a2 2 0 0 0-1.083 1.083c-.092.223-.129.484-.143.863a1.617 1.617 0 0 1-.79 1.353a1.617 1.617 0 0 1-1.567.008c-.336-.178-.579-.276-.82-.308a2 2 0 0 0-1.478.396C4.04 5.79 3.806 6.193 3.34 7c-.466.807-.7 1.21-.751 1.605a2 2 0 0 0 .396 1.479c.148.192.355.353.676.555c.473.297.777.803.777 1.361c0 .558-.304 1.064-.777 1.36c-.321.203-.529.364-.676.556a2 2 0 0 0-.396 1.479c.052.394.285.798.75 1.605c.467.807.7 1.21 1.015 1.453a2 2 0 0 0 1.479.396c.24-.032.483-.13.819-.308a1.617 1.617 0 0 1 1.567.008c.483.28.77.795.79 1.353c.014.38.05.64.143.863a2 2 0 0 0 1.083 1.083C10.602 22 11.068 22 12 22c.932 0 1.398 0 1.765-.152a2 2 0 0 0 1.083-1.083c.092-.223.129-.483.143-.863c.02-.558.307-1.074.79-1.353a1.617 1.617 0 0 1 1.567-.008c.336.178.579.276.819.308a2 2 0 0 0 1.479-.396c.315-.242.548-.646 1.014-1.453c.466-.807.7-1.21.751-1.605a2 2 0 0 0-.396-1.479c-.148-.192-.355-.353-.676-.555A1.617 1.617 0 0 1 19.562 12c0-.558.304-1.064.777-1.36c.321-.203.529-.364.676-.556a2 2 0 0 0 .396-1.479c-.052-.394-.285-.798-.75-1.605c-.467-.807-.7-1.21-1.015-1.453a2 2 0 0 0-1.479-.396c-.24.032-.483.13-.82.308a1.617 1.617 0 0 1-1.566-.008a1.617 1.617 0 0 1-.79-1.353c-.014-.38-.05-.64-.143-.863a2 2 0 0 0-1.083-1.083Z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </li>
                                <li><i class="fa fa-pen"></i></li>
                                <li><i class="fa fa-trash"></i></li>
                            </ul>
                        </div>
                        <div class="ribbon mt-3 ribbon-primary ribbon-space-bottom">Magang</div>

                        <div class="pt-5">
                            <h3 class="mb-2">Lorem ipsum dolor sit amet consectetur. Aliquam facilisis?</h3>
                            <p class="mb-0" style="width:95%;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Veniam
                                obcaecati nobis animi
                                atque nesciunt, iusto, praesentium commodi tempora quasi voluptatum veritatis quaerat.
                                Voluptatem
                                numquam, corporis debitis unde quibusdam facere quam asperiores laboriosam nesciunt.
                                Laboriosam
                                soluta
                                repellat veniam aliquid quam eaque dicta!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="pt-3 pb-5 align-items-center d-flex gap-2 justify-content-between">
        <div>Showing 1 to 10 from 35 entries</div>
        <div class="pagination">
            <li class="page-item"><a href="#" class="page-link disabled"><i class="fas fa-arrow-left"></i></a></li>
            @foreach (range(0, 3) as $item)
                <li class="page-item {{ $item !== 0 ?: 'active' }}" aria-current="page"><a href="#"
                        class="page-link">{{ $item + 1 }}</a></li>
            @endforeach
            <li class="page-item"><a href="#" class="page-link"><i class="fas fa-arrow-right"></i></a></li>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah "Syarat dan Ketentuan"
                    </h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Pilih Halaman</label>
                                <select name="target" id="target" class="form-control">
                                    <option disabled="disabled" selected="selected">Pilih halaman</option>
                                    <option value="it">IT Consultant</option>
                                </select>
                            </div>

                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Syarat dan Ketentuan</label>
                                <input class="form-control" type="text" name="products[]" required=""
                                    autocomplete="name" placeholder="Mis: Website Development" />

                                <div id="product-listing"></div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footerd-flex justify-content-between w-full">
                        <button type="button" class="btn me-auto add-button-trigger btn-primary m-0">Tambah</button>
                        <div>
                            <button class="btn btn-secondary m-0" type="button"
                                data-bs-dismiss="modal">Batalkan</button>
                            <button class="btn btn-primary m-0" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="edit-data" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Edit FAQ
                    </h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Pertanyaan</label>
                                <input class="form-control" type="text" required="" autocomplete="name"
                                    placeholder="Mis: Bagaimana cara&hellip;">
                            </div>

                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Jawaban</label>
                                <textarea name="answer" id="answer" cols="10" rows="5" class="form-control"
                                    placeholder="Mis: Caranya adalah sebagai berikut"></textarea>
                            </div>

                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Ditampilkan Di</label>
                                <select name="" id="select" class="form-control">
                                    <option disabled selected>Pilih Salah Satu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start w-full">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batalkan</button>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const deleteElement = (id) => $('#' + id).remove();

        (() => {
            $('.add-button-trigger').click((e) => {
                let idInput = 'input_' + Math.random().toString(36).substr(2, 9); // Generate random id
                let target = $(e.target).parent('.modal').find('#product-listing');
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
