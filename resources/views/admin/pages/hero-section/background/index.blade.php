@extends('admin.layouts.app')

@section('subcontent')
        <div class="card border-0 p-3 mt-3">
            <div class="row">
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
            </div>
        </div>
@endsection
<div class="py-3 my-3">
    <h4>Tambah produk</h4>
</div>
<div class="card">
    <div class="card-body p-4 m-5">
            <ul class="simple-wrapper nav nav-tabs modal-header justify-content-between" id="myTab" role="tablist">
                <div class="d-flex">
                    <li class="nav-item"><a class="nav-link active txt-primary" id="profile-tabs" data-bs-toggle="tab" href="#organisasi" role="tab" aria-controls="profile" aria-selected="false">Produk/Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link txt-primary" id="contact-tab" data-bs-toggle="tab" href="#usaha" role="tab" aria-controls="contact" aria-selected="false">Produk layanan</a></li>
                </div>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active py-5" id="organisasi" role="tabpanel">
                    <form class="form-bookmark needs-validation" action="{{ route('productCompany.store') }}" method="POST" id="bookmark-form"
                        novalidate="" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="company">
                        <div class="row g-2">
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="name">Nama Produk</label>
                                <input class="form-control" name="name" id="name" type="text" required
                                    placeholder="Contoh: Produk Hummatech" autocomplete="name" />
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="description">Deskripsi</label>
                                <textarea rows="5" class="form-control" name="description" id="description" name="description"
                                    placeholder="Jelaskan deskripsi produknya"></textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="feature">Fitur <small class="text-danger">* Masukan fitur produk</small></label>
                                <div class="d-flex align-items-center mt-3 gap-2">
                                    <input class="form-control m-0" type="text" name="feature[]" autocomplete="name"
                                        placeholder="Masukan Fitur" />
                                </div>
                                <div id="product-listing"></div>
                                @error('title.*')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <button type="button" class="btn add-fitur btn-primary mt-3">Tambah Fitur</button>
                            </div>
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="link">Link</label>
                                <input class="form-control" id="link" type="url" name="link" required
                                    placeholder="Contoh: https://hummatech.com/linknya" />
                                @error('link')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="photo">Foto / Logo Produk</label>
                                <input class="form-control" id="photo" type="file" name="image" />
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('product.index') }}" class="btn btn-light-danger mt-2" type="button">Kembali</a>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade py-5" id="usaha" role="tabpanel" aria-labelledby="contact-tab">
                    <form class="form-bookmark needs-validation" action="{{ route('product.store') }}" method="POST" id="bookmark-form"
                        novalidate="" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="service">
                        <div class="row g-2">
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="name">Nama Produk</label>
                                <input class="form-control" name="name" id="name" type="text" required
                                    placeholder="Contoh: Produk Hummatech" autocomplete="name" />
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="description">Deskripsi</label>
                                <textarea rows="5" class="form-control" name="description" id="description" name="description"
                                    placeholder="Jelaskan deskripsi produknya"></textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="feature">Fitur <small class="text-danger">* Masukan Judul Fitur Beserta
                                        Deskripsi</small></label>
                                <div class="d-flex align-items-center mt-3 gap-2">
                                    <input type="text" name="title[]" id="" class="form-control"
                                        placeholder="Masukan Judul Fitur">
                                    <input class="form-control m-0" type="text" name="feature[]" autocomplete="name"
                                        placeholder="Masukan Deskripsi Fitur" />
                                </div>
                                <div id="product-listing"></div>
                                @error('feature.*')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                @error('title.*')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <button type="button" class="btn add-button-trigger btn-primary mt-3">Tambah Fitur</button>
                            </div>
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="link">Link</label>
                                <input class="form-control" id="link" type="url" name="link" required
                                    placeholder="Contoh: https://hummatech.com/linknya" />
                                @error('link')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="">Tampilkan di</label>
                                <select name="service_id" class="js-example-basic-single form-select" id="#edit">
                                    <option value="" disabled selected>Pilih Layanan</option>
                                    @forelse ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @empty
                                        <option value="" disabled selected>Layanan Masih Kosong</option>
                                    @endforelse
                                </select>
                                @error('service_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3 mt-0 col-md-12">
                                <label for="photo">Foto / Logo Produk</label>
                                <input class="form-control" id="photo" type="file" name="image" />
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('product.index') }}" class="btn btn-light-danger mt-2" type="button">Kembali</a>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
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
