@extends('admin.layouts.app')

@section('content')
    <style>
        .btn-xs {
            padding: 1;
            font-size: 10px;
            width: 10px
        }
    </style>
    <div class="p-1">
        <div class="card mt-3">
            <div class="d-flex justify-content-end p-2 mb-0">
                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                    data-bs-target="#tambah">Tambah</button>
            </div>
            <div class="card-body">
                <div class="p-0">
                    <div class="d-flex gap-1">
                        <div>
                            <img src="https://fakeimg.pl/300x300" alt="Milink.id" class="rounded-4" width="300px" />
                        </div>
                        <div class="px-3">
                            <h1 class="mt-3">PKL / Magang</h1>
                            <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati
                                reiciendis in sed, libero iusto maxime amet voluptatibus qui vero consequuntur non
                                doloremque temporibus molestiae iure placeat enim perferendis. Tempore quasi nihil
                                distinctio consectetur. Error consequuntur possimus, est dolor corrupti praesentium? Nam,
                                ratione. Ipsam, enim rerum! Placeat fugit consectetur beatae nesciunt quae omnis accusamus?
                                Sapiente omnis accusamus ipsum debitis saepe numquam eligendi nostrum quo aspernatur ad
                                molestias fuga!
                            </p>
                            <a href="#" class="m-0">https://milink.id</a>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h3>Paket yang Tersedia</h3>
                    <div class="p-5">
                        <div class="row pricing-col">
                            @foreach (range(0, 5) as $item)
                                <div class="col-lg-4 col-sm-6 box-col-3 mt-4">
                                    <div class="pricingtable">
                                        <div class="pricingtable-header">
                                            <h3 class="title">Murah</h3>
                                        </div>
                                        <div class="price-value"><span class="amount">Rp.100k</span><span
                                                class="duration">/mo</span></div>
                                        <div class="text-start p-4 mx-2">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint animi veritatis
                                                sit
                                                nesciunt deserunt?.</p>
                                        </div>
                                        <div class="pricingtable-signup ">
                                            <div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
                                                <button class="btn " style="background-color: #CEDFFF" type="button"
                                                    data-bs-target="#edit" data-bs-toggle="modal"><i
                                                        class="fa fa-pen"></i></button>
                                                <button class="btn " style="background-color: #CEDFFF" type="button"><i
                                                        class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Paket</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Paket</label>
                                <input class="form-control" type="text" required="" autocomplete="name"
                                    placeholder="Masukan Nama Paket">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Deskripsi paket</label>
                                <textarea class="form-control" rows="3" required="" autocomplete="" placeholder="Masukan Deskripsi Paket"></textarea>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="" id=""
                                    placeholder="Masukan Harga">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Penjualan</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Paket</label>
                                <input class="form-control" type="text" required="" autocomplete="name" placeholder="Masukan Nama Paket">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Deskripsi paket</label>
                                <textarea class="form-control" rows="3" required="" autocomplete="" placeholder="Masukan Deskripsi Paket"></textarea>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="" id="" placeholder="Masukan Harga">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
