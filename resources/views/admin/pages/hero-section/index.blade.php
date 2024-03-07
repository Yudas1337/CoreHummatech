@extends('admin.layouts.app')

@section('subcontent')
<div class="py-4">
    <div class="p-4 m-5">
            <ul class="simple-wrapper nav nav-tabs justify-content-between" id="myTab" role="tablist">
                <div class="d-flex">
                    <li class="nav-item"><a class="nav-link active txt-primary" id="profile-tabs" data-bs-toggle="tab" href="#section" role="tab" aria-controls="profile" aria-selected="false">Produk/Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link txt-primary" id="contact-tab" data-bs-toggle="tab" href="#background" role="tab" aria-controls="contact" aria-selected="false">Produk layanan</a></li>
                </div>
                <div class="col-12 col-lg-6 me-5">
                    <div class="d-flex justify-content-lg-end justify-content-start me-5">
                        <div class="d-flex align-items-center gap-2 me-5">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </div>
                </div>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active py-5" id="section" role="tabpanel">
                    <a class="btn btn-primary m-0" href="{{ url('/hero-section/create') }}" style="position: absolute; left: 72vw; top: 54px">Tambah</a>
                    <div class="row">
                        @forelse ($sections as $section)
                        <div class="col-md-12 col-12 col-xl-6">
                            <div class="card rounded-4" style="height: 350px">
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
                <div class="tab-pane fade py-5" id="background" role="tabpanel" aria-labelledby="contact-tab">
                    <button class="btn btn-primary m-0" type="button" data-bs-toggle="modal" data-bs-target="#tambah" style="position: absolute; left: 72vw; top: 54px">Tambah</button>
                    <div class="row">
                        @forelse ($backgrounds as $background)
                        <div class="col-md-12 col-12 col-xl-6">
                            <div class="card rounded-4" style="height: 150px">
                                <div class="product-box rounded-4">
                                    <div class="product-img">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/' .$background->image) }}"
                                            alt="" />
                
                                        <div class="content-center">
                                            <h3 class="title">{{ $background->title }}</h3>
                                        </div>
                
                                        <div class="product-hover">
                                            <ul>
                                                <li>
                                                    <button class="btn-edit" type="button" data-id="{{ $background->id }}" data-showIn="{{ $background->show_in }}" data-image="{{ $bcakground->image }}" data-service="{{ $background->service_id }}"><i class="fas fa-pencil"></i></button>
                                                </li>
                                                <li>
                                                    <a class="btn-delete-background" data-id="{{ $background->id }}"><i class="fas fa-trash"></i></a>
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

     <!-- Add Modal -->
     <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Background</h5>
                 <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form class="form-bookmark needs-validation" action="{{ route('category-product.store') }}" method="POST" id="bookmark-form" novalidate=""
                 enctype="multipart/form-data">
                 @csrf
                 @method('POST')
                 <div class="modal-body">
                     <div class="row g-2">
                        <div class="form-group mb-3 mt-0 col-md-12 show_in">
                            @php
                                use App\Enums\PageEnum;
                            @endphp
                            <label for="category">Tampilkan di Halaman</label>
                            <select name="show_in" class="showIn js-example-basic-single form-select" id="#edit">
                                <option value="" disabled selected>Pilih Halaman</option>
                                <option value="{{ PageEnum::TENTANG->value }}">{{ PageEnum::TENTANG->value }}</option>
                                <option value="{{ PageEnum::LAYANAN->value }}">{{ PageEnum::LAYANAN->value }}</option>
                                <option value="{{ PageEnum::PORTOFOLIO->value }}">{{ PageEnum::PORTOFOLIO->value }}</option>
                                <option value="{{ PageEnum::BERITA->value }}">{{ PageEnum::BERITA->value }}</option>
                                <option value="{{ PageEnum::HUBUNGI->value }}">{{ PageEnum::HUBUNGI->value }}</option>
                                <option value="{{ PageEnum::LOWONGAN->value }}">{{ PageEnum::LOWONGAN->value }}</option>
                            </select>
                            @error('show_in')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3 mt-0 col-md-12" id="service" style="display: none;">
                            <label for="service_id">Tampilkan Pada Layanan</label>
                            <select name="service_id" class="js-example-basic-single form-select">
                                <option value="" disabled selected>Pilih Layanan</option>
                                @forelse ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @empty
                                    <option value="" disabled selected>Belum ada layanan</option>
                                @endforelse
                            </select>
                            @error('service_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                         <div class="mb-3 mt-0 col-md-12">
                             <label for="image">Foto Background</label>
                             <input class="form-control" type="file" required="" name="image" >
                                 @error('image')
                                     <p class="text-danger">
                                         {{ $message }}
                                     </p>
                                 @enderror
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <div class="d-flex justify-content-end">
                         <button class="btn btn-light-danger" type="button" data-bs-dismiss="modal">Tutup</button>
                         <button class="btn btn-light-primary" type="submit">Tambah</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>

     <!-- Edit Modal -->
     <div class="modal fade modal-bookmark" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title fw-semibold" id="exampleModalLabel">Edit Background</h5>
                 <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form class="form-bookmark needs-validation" method="POST" id="form-update" novalidate=""
                 enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                 <div class="modal-body">
                     <div class="row g-2">
                        <div class="form-group mb-3 mt-0 col-md-12 show_in">
                            <label for="category">Tampilkan di Halaman</label>
                            <select name="show_in" class="showIn js-example-basic-single form-select" id="showIn-edit">
                                <option value="" disabled selected>Pilih Halaman</option>
                                <option value="{{ PageEnum::TENTANG->value }}">{{ PageEnum::TENTANG->value }}</option>
                                <option value="{{ PageEnum::LAYANAN->value }}">{{ PageEnum::LAYANAN->value }}</option>
                                <option value="{{ PageEnum::PORTOFOLIO->value }}">{{ PageEnum::PORTOFOLIO->value }}</option>
                                <option value="{{ PageEnum::BERITA->value }}">{{ PageEnum::BERITA->value }}</option>
                                <option value="{{ PageEnum::HUBUNGI->value }}">{{ PageEnum::HUBUNGI->value }}</option>
                                <option value="{{ PageEnum::LOWONGAN->value }}">{{ PageEnum::LOWONGAN->value }}</option>
                            </select>
                            @error('show_in')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3 mt-0 col-md-12" id="service" style="display: none;">
                            <label for="service_id">Tampilkan Pada Layanan</label>
                            <select name="service_id" class="js-example-basic-single form-select" id="service-edit">
                                <option value="" disabled selected>Pilih Layanan</option>
                                @forelse ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @empty
                                    <option value="" disabled selected>Belum ada layanan</option>
                                @endforelse
                            </select>
                            @error('service_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                         <div class="mb-3 mt-0 col-md-12">
                             <label for="image">Foto Background</label>
                             <img id="image-edit" style="width: 200px; height: auto; border: 1px solid #ccc;">
                            <input class="form-control" type="file" name="image" required onchange="previewImage()"> 
                                 @error('image')
                                     <p class="text-danger">
                                         {{ $message }}
                                     </p>
                                 @enderror
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <div class="d-flex justify-content-end">
                         <button class="btn btn-light-danger" type="button" data-bs-dismiss="modal">Tutup</button>
                         <button class="btn btn-light-primary" type="submit">Tambah</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>

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
        
         $('.btn-delete-background').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/delete/section/' + id);
            $('#modal-delete').modal('show');
        }); 
        
        $('.btn-edit').click(function() {
            var id = $(this).data('id'); 
            var serviceId = $(this).data('service');
            var showIn = $(this).data('showIn');
            var image = $(this).data('image');
            $('#form-update').attr('action', 'background/update/' + id); 
            $('#service-edit').val(serviceId);
            $('.showIn-edit').val(showIn);
            $('#image-edit').attr('src', 'storage/'+image);
            $('#modal-edit').modal('show');
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".js-example-basic-single").select2({
                dropdownParent: $("#background")
            });
        });

        $('.showIn').change(function(){
            var selectedOption = $(this).val();
            
            if(selectedOption == "{{ PageEnum::LAYANAN->value }}") {
                $('.service').show();
            } else {
                $('.service').hide();
            }
        });
    </script>
    <script>
        function previewImage() {
            var input = document.querySelector('input[type="file"]');
            var image = document.getElementById('image-edit');
    
            if (input.files && input.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function (e) {
                    image.setAttribute('src', e.target.result);
                }
    
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
