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
<div class="card-body mb-5">
    <div class="row g-sm-4 g-3">
      <div class="col-xxl-4 col-md-6">
        <div class="prooduct-details-box">  
            <div class="position-absolute start-3 mt-2" style="z-index: 2">
                <p class="bg-primary px-4 py-1" style="font-size: 10px">Magang</p>    
            </div>                               
            <div class="onhover-dropdown bg-light text-primary py-1 px-2 rounded-3 position-absolute end-0 me-4 mt-2" style=" z-index: 3;">
                <i class="fa-solid fa-gear"></i>
              <ul class="onhover-show-div left-dropdown">
                <li><a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-edit"></i></a></li>
                <li><a class="dropdown-item text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></li>
              </ul>
            </div>
          <div class="d-flex" style="z-index: 1"><img class="align-self-center img-fluid img-80 rounded-3" src="../assets/images/ecommerce/product-table-6.png" alt="#">
            <div class="flex-grow-1 ms-3">
              <div class="product-name mb-1">
                <h4><a href="#">lorem ipsum</a>
                </h4>
            </div> 
              <p class="text-muted m-0" style="width: 80%">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-md-6">
        <div class="prooduct-details-box">  
            <div class="position-absolute start-3 mt-2" style="z-index: 2">
                <p class="bg-primary px-4 py-1" style="font-size: 10px">Magang</p>    
            </div>                               
            <div class="onhover-dropdown bg-light text-primary py-1 px-2 rounded-3 position-absolute end-0 me-4 mt-2" style=" z-index: 3;">
                <i class="fa-solid fa-gear"></i>
              <ul class="onhover-show-div left-dropdown">
                <li><a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-edit"></i></a></li>
                <li><a class="dropdown-item text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></li>
              </ul>
            </div>
          <div class="d-flex" style="z-index: 1"><img class="align-self-center img-fluid img-80 rounded-3" src="../assets/images/ecommerce/product-table-6.png" alt="#">
            <div class="flex-grow-1 ms-3">
              <div class="product-name mb-1">
                <h4><a href="#">lorem ipsum</a>
                </h4>
            </div> 
              <p class="text-muted m-0" style="width: 80%">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-md-6">
        <div class="prooduct-details-box">  
            <div class="position-absolute start-3 mt-2" style="z-index: 2">
                <p class="bg-primary px-4 py-1" style="font-size: 10px">Magang</p>    
            </div>                               
            <div class="onhover-dropdown bg-light text-primary py-1 px-2 rounded-3 position-absolute end-0 me-4 mt-2" style=" z-index: 3;">
                <i class="fa-solid fa-gear"></i>
              <ul class="onhover-show-div left-dropdown">
                <li><a class="dropdown-item text-primary" href="#" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-edit"></i></a></li>
                <li><a class="dropdown-item text-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></li>
              </ul>
            </div>
          <div class="d-flex" style="z-index: 1"><img class="align-self-center img-fluid img-80 rounded-3" src="../assets/images/ecommerce/product-table-6.png" alt="#">
            <div class="flex-grow-1 ms-3">
              <div class="product-name mb-1">
                <h4><a href="#">lorem ipsum</a>
                </h4>
            </div> 
              <p class="text-muted m-0" style="width: 80%">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
              <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Testimoni</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" id="formFile" type="file">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Lengkap</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                        </div>
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Nama Lengkap</label>
                            <input class="form-control" type="text" required="" autocomplete="name">
                        </div>
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Deskripsi</label>
                            <input class="form-control" type="text" required="" autocomplete="name">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-secondary" type="submit">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Testimoni</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" id="formFile" type="file">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Lengkap</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Sekolah</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Deskripsi</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-secondary" type="submit">Tambah</button>
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
