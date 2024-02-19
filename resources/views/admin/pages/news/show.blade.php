@extends('admin.layouts.app')

@section('subcontent')
<div class="page-title">
  <p class="text-secondary"><span class="text-primary fs-5 pe-3">Magang</span> Selasa, 12 Februari 2024</p>
  <h2>Judul Berita</h2>
</div>
@endsection
@section('content')
<div class="col">
  <div class="img-news">
    <img src="{{ asset('assets/images/ecommerce/02.jpg') }}" alt="">
  </div>
  <div class="news-description">
    <p>
      Melayani pembuatan software berdasarkan
      kebutuhan klien/ customer. Produk yang
      dihasilkan adlaah produk perangkat lunak
      berbasis desktop, web, dan mobile (android
      dan iOS...... Melayani pembuatan software berdasarkan
      kebutuhan klien/ customer. Produk yang
      dihasilkan adlaah produk perangkat lunak
      berbasis desktop, web, dan mobile (android
      dan iOS...... Melayani pembuatan software berdasarkan
      kebutuhan klien/ customer. Produk yang
      dihasilkan adlaah produk perangkat lunak
      berbasis desktop, web, dan mobile (android
      dan iOS......
    </p>
  </div>
  <div class="tags d-flex flex-wrap gap-2">
    <p class="fw-bold pe-2">Tags:</p>
    <div class="d-flex">
      <span class="p-1 bg-primary" style="height: 33px; border-radius: 10px; margin-top: -2px"></span>
      <p style="background-color:#DEEBFF; padding: 3px 10px; border-radius:5px">Keseruan</p>
    </div>
    <div class="d-flex">
      <span class="p-1 bg-warning" style="height: 33px; border-radius: 10px; margin-top: -2px"></span>
      <p style="background-color:#f5d9a1; padding: 3px 10px; border-radius:5px">Keseruan</p>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endsection