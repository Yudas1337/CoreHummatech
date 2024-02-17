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
<div class="row">
  <div class="col-xxl-4 col-xl-100 box-col-12 ps-4 pe-4">
    <div class="row bg-light h-100 p-3 pt-4 pb-4">
      <div class="col-12 col-xl-50 box-col-6">
        <div class="card welcome-card">
          <div class="card-body">
            <div class="d-flex"> 
              <div class="flex-grow-1"> 
                <h1>Hello, Ramirez</h1>
                <p>Welcome back! Let's start from where you left.</p><a class="btn" href="user-profile.html">View Profile</a>
              </div>
              <div class="flex-shrink-0"> <img src="../assets/images/dashboard/welcome.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection