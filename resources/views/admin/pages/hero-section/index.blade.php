@extends('admin.layouts.app')

@section('subcontent')
<div class="card">
    <div class="card-body p-4 m-5">
            <ul class="simple-wrapper nav nav-tabs justify-content-between" id="myTab" role="tablist">
                <div class="d-flex">
                    <li class="nav-item"><a class="nav-link active txt-primary" id="profile-tabs" data-bs-toggle="tab" href="#organisasi" role="tab" aria-controls="profile" aria-selected="false">Produk/Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link txt-primary" id="contact-tab" data-bs-toggle="tab" href="#usaha" role="tab" aria-controls="contact" aria-selected="false">Produk layanan</a></li>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <a class="btn btn-primary m-0" href="{{ url('/hero-section/create') }}">Tambah</a>
                    </div>
                </div>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active py-5" id="organisasi" role="tabpanel">
                    <div class="row">
                        @forelse ($sections as $section)
                        <div class="col-md-12 col-12 col-xl-6">
                            <div class="card rounded-4" style="height: 280px">
                                <div class="product-box rounded-4">
                                    <div class="product-img">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/' .$section->image) }}"
                                            alt="" />
                
                                        <div class="content-center">
                                            <h3 class="title">{{ $section->title }}</h3>
                                            <p class="subtitle fs-6">{{ $section->subtitle }}</p>
                                            <div class="btn btn-lg btn-primary">Lihat Selengkapnya</div>
                                        </div>
                
                                        <div class="product-hover">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('hero.edit', $section->id) }}"><i class="fas fa-pencil"></i></a>
                                                </li>
                                                <li>
                                                    <a class="btn-delete" data-id="{{ $section->id }}"><i class="fas fa-trash"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('nodata.jpg') }}" alt="" width="400px">
                        </div>
                        <h5 class="text-center">
                            Data Masih Kosong
                        </h5>
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade py-5" id="usaha" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        @forelse ($sections as $section)
                        <div class="col-md-12 col-12 col-xl-6">
                            <div class="card rounded-4" style="height: 280px">
                                <div class="product-box rounded-4">
                                    <div class="product-img">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/' .$section->image) }}"
                                            alt="" />
                
                                        <div class="content-center">
                                            <h3 class="title">{{ $section->title }}</h3>
                                            <p class="subtitle fs-6">{{ $section->subtitle }}</p>
                                            <div class="btn btn-lg btn-primary">Lihat Selengkapnya</div>
                                        </div>
                
                                        <div class="product-hover">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('hero.edit', $section->id) }}"><i class="fas fa-pencil"></i></a>
                                                </li>
                                                <li>
                                                    <a class="btn-delete" data-id="{{ $section->id }}"><i class="fas fa-trash"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('nodata.jpg') }}" alt="" width="400px">
                        </div>
                        <h5 class="text-center">
                            Data Masih Kosong
                        </h5>
                        @endforelse
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection 
@section('header-style')
    <style>
        .product-box {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-box .img-fluid {
            position: relative;
            z-index: 1;
        }

        .product-box .content-center {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(var(--bs-dark-rgb), .5);
            z-index: 2;
            top: 0;
            left: 0;
            flex-direction: column;
            color: var(--bs-white);
        }

        .product-box .content-center .title {
            color: var(--bs-white);
            font-size: 2.5rem;
            font-weight: bold;
        }

        .product-box .content-center .subtitle {
            color: var(--bs-white);
            font-size: 1.5rem;
        }

        .product-hover {
            z-index: 5;
        }
    </style>
@endsection

@section('content')

    

    @include('admin.components.delete-modal-component')
@endsection
@section('script')
<!-- Masukkan kode ini di dalam tag <head> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Masukkan kode ini sebelum akhir tag </body> -->
    @if(session('success'))
    <script>
        Swal.fire({
            title: 'Success',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK',
            timer: 3000, // Menutup SweetAlert setelah 3 detik
            timerProgressBar: true // Menampilkan progress bar
        });
    </script>
    @endif
    <script>
         $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/delete/section/' + id);
            $('#modal-delete').modal('show');
        });
    </script>
@endsection
