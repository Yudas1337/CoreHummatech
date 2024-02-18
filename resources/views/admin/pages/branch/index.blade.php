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
            <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href=""><i class="fa fa-plus"></i> Tambah Cabang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection