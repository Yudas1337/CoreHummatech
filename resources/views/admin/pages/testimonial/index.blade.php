@extends('admin.layouts.app')

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-2">
                    <div class="d-flex align-items-center">
                      <label for="">Filter:</label>
                      <select name="" id="" class="form-control mx-2">
                        <option value="" selected>Semua</option>
                        <option value="" selected>Magang</option>
                      </select>
                    </div>
                </div>
                <div class="col-10">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Cari&hellip;"
                                aria-label="Cari &hellip;" />
                        </div>
                        <button class="btn btn-primary m-0" type="button" data-bs-toggle="modal" data-bs-target="#tambah">
                          Tambah
                      </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header" style="width: 100%; background: none; margin-bottom: -20px">
          <div class="col-sm-3 position-absolute top-0 start-0">
            <p class="bg-primary px-3 py-1 text-light" style="border-radius: 5px 0 0 0; font-size: 12px">Magang</p>
          </div>
          <div class="card-header-right">
            <ul class="list-unstyled card-option" style="text-align:center">
              <li>
                <div><i class="icon-settings fa-solid fa-gear"></i></div>
              </li>
              <li><i class="fa fa-edit text-primary"type="button" data-bs-toggle="modal" data-bs-target="#edit"></i></li>
              <li><i class="fa fa-trash text-primary"></i></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex" style="z-index: 1"><img class="align-self-center img-fluid img-80 rounded-3" src="../assets/images/ecommerce/product-table-6.png" alt="#">
            <div class="flex-grow-1 ms-3">
              <div class="product-name mb-1">
                <h4><a href="#">lorem ipsum</a>
                </h4>
            </div>
              <p class="text-muted m-0" style="width: 80%">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header" style="width: 100%; background: none; margin-bottom: -20px">
          <div class="col-sm-3 position-absolute top-0 start-0">
            <p class="bg-primary px-3 py-1 text-light" style="border-radius: 5px 0 0 0; font-size: 12px">Magang</p>
          </div>
          <div class="card-header-right">
            <ul class="list-unstyled card-option" style="text-align:center">
              <li>
                <div><i class="icon-settings fa-solid fa-gear"></i></div>
              </li>
              <li><i class="fa fa-edit text-primary"type="button" data-bs-toggle="modal" data-bs-target="#edit"></i></li>
              <li><i class="fa fa-trash text-primary"></i></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex" style="z-index: 1"><img class="align-self-center img-fluid img-80 rounded-3" src="../assets/images/ecommerce/product-table-6.png" alt="#">
            <div class="flex-grow-1 ms-3">
              <div class="product-name mb-1">
                <h4><a href="#">lorem ipsum</a>
                </h4>
            </div>
              <p class="text-muted m-0" style="width: 80%">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="card">
        <div class="card-header" style="width: 100%; background: none; margin-bottom: -20px">
          <div class="col-sm-3 position-absolute top-0 start-0">
            <p class="bg-primary px-3 py-1 text-light" style="border-radius: 5px 0 0 0; font-size: 12px">Magang</p>
          </div>
          <div class="card-header-right">
            <ul class="list-unstyled card-option" style="text-align:center">
              <li>
                <div><i class="icon-settings fa-solid fa-gear"></i></div>
              </li>
              <li><i class="fa fa-edit text-primary"type="button" data-bs-toggle="modal" data-bs-target="#edit"></i></li>
              <li><i class="fa fa-trash text-primary"></i></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex" style="z-index: 1"><img class="align-self-center img-fluid img-80 rounded-3" src="../assets/images/ecommerce/product-table-6.png" alt="#">
            <div class="flex-grow-1 ms-3">
              <div class="product-name mb-1">
                <h4><a href="#">lorem ipsum</a>
                </h4>
            </div>
              <p class="text-muted m-0" style="width: 80%">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Testimoni</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Lengkap</label>
                                <input class="form-control" type="text" required="" autocomplete="name" placeholder="Masukkan nama">
                            </div>
                        </div>
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Deskripsi</label>
                            <textarea name="" id=""  rows="4" class="form-control" placeholder="Masukkan deskripsi"></textarea>
                        </div>

                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Tampilkan di</label>
                            <select class="select2 form-select" name="tags-select-mode" style="width: 100%;">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Foto Testimoni</label>
                            <input class="form-control" id="formFile" type="file">
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <button class="btn btn-secondary " type="button" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-primary " type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <!-- Edit Modal -->
        <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Testimoni</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Lengkap</label>
                                <input class="form-control" type="text" required="" autocomplete="name" value="Lorem Ipsum">
                            </div>
                        </div>
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Deskripsi</label>
                            <textarea name="" id=""  rows="4" class="form-control">Lorem ipsum dolor sit amet consectetur. Est aliquet etiam sit dignissim sit id id in risus lorem ornare sed pellentesque.</textarea>
                        </div>

                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Tampilkan di</label>
                            <select class="select2 form-select" name="tags-select-mode" style="width: 100%;">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>


                        <div class="mb-3 mt-0 col-md-12">
                            <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description"></a>
                          </figure>
                            <label for="bm-title">Foto Testimoni</label>
                            <input class="form-control" id="formFile" type="file">
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <button class="btn btn-secondary " type="button" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-primary " type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>

    <nav class="m-b-30" aria-label="Page navigation example">
        <ul class="pagination justify-content-center pagin-border-primary pagination-primary">
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
        </ul>
    </nav>
@endsection
