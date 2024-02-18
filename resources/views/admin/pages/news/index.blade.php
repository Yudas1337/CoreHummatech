@extends('admin.layouts.app')

@section('subcontent')
<div class="page-title">
  <div class="row">
    <div class="col-sm-6 p-0">
      <h3>Default Dashboard </h3>
    </div>
    <div class="col-sm-6 p-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">
            <svg class="stroke-icon">
              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#stroke-home"></use>
            </svg></a></li>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Default      </li>
      </ol>
    </div>
  </div>
</div>
@endsection
@section('content')
<div class="project-grid">
  <div class="project-list">
    <div class="card">
      <div class="file-content py-2 px-4">
        <div class="d-flex align-items-center">
          <form class="form-inline" action="#" method="get">
            <div class="form-group mb-0">
              <i class="fa fa-search"></i>
              <input class="form-control-plaintext" type="text" placeholder="Search...">
            </div>
          </form>
          <div class="flex-grow-1 file-buttons">
            <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="/news/create"><i class="fa fa-plus"></i> Buat Berita</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="product-grid">
  <div class="product-wrapper-grid">
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="card">
          <div class="product-box">
            <div class="product-img">
              <div class="ribbon ribbon-danger">Kategori</div><img class="img-fluid" src="{{asset("assets/images/ecommerce/02.jpg")}}" alt="">
              <div class="product-hover">
                <ul>
                  <li><a data-bs-toggle="modal" data-bs-target="#Detail"><i class="icon-eye"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="modal fade" id="Detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="product-box row">
                      <div class="product-img col-lg-6"><img class="img-fluid" src="{{asset("assets/images/ecommerce/02.jpg")}}" alt=""></div>
                      <div class="product-details col-lg-6 text-start">
                        <h3>Men's Jacket</h3>
                        <small>Kamis, 20 Februari 2024</small>
                        <div class="product-view">
                          <h3>Product Details</h3>
                          <p class="mb-0">Lorate Solid Men's Fashion Full Sleeves Latest Jacket for Men With Button Closure Long Sleeve Casual Torn Lycra Denim Jacket.</p>
                        </div>
                      </div>
                    </div>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-details">
              <small>Kamis, 20 Februari 2024</small>
              <a href="/news">
                <h3>Men's Jacket</h3>
              </a>
              <p>Cotton Blend Men's Blue Jacket</p>
              <div class="mt-4">
                <ul class="d-flex justify-content-evenly pb-3 px-2">
                    <li><a href="#" class="btn btn-sm btn-primary btn-edit" type="button">Edit</a></li>
                    <li><a href="#" class="btn btn-danger btn-sm btn-delete" type="button">Hapus</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
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