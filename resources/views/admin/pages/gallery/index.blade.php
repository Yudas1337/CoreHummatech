@extends('admin.layouts.app')

@section('content')
    <div class=" p-1 pb-4 pt-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h4 class="m-2">Galeri</h4>
            </div>
            <div class="col-12 col-lg-6">
                <div class="d-flex justify-content-lg-end justify-content-start">
                    <div class="d-flex align-items-center gap-2">
                        <p class="m-0 me-2">Cari:</p>
                        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <button class="btn btn-primary m-0" type="button" data-bs-toggle="modal"
                        data-bs-target="#tambah">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 box-col-12">

            <div class="row">
                @forelse ($gallery as $galeri)
                    <div class="col-md-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img class="img-fluid" src="../assets/images/masonry/1.jpg" alt="">
                                        <div class="product-hover">
                                            <ul>
                                                <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                            class="fa fa-edit"></i></a></li>
                                                <li><a href=""><i class="fa fa-trash"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form method="POST" enctype="multipart/form-data" id="formAddData" action="{{ route('gallery.store') }}"
                class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Judul Galeri</label>
                            <input class="form-control" id="formFile" name="name" type="text">
                        </div>
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Tampilkan Pada</label>
                            <select name="service_id" id="showdata" class="form-select">
                                <option selected disabled>Pilih Salah Satu Layanan</option>
                                @foreach ($services as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="dropzone" id="createUploadDropzone">
                        <div class="dropzone-wrapper">
                            <div class="dz-message needsclick"><i data-feather="upload-cloud"></i>
                                <h4>Drop files here or click to upload.</h4><span class="note needsclick">Unggah data
                                    berformat gambar (jpg, jpeg, png)</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Galeri</h5>
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" id="buttonSubmitAdd" type="submit">Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        feather.replace();
    </script>

    <script>
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#createUploadDropzone", {
            uploadMultiple: false,
            maxFilesize: 10,
            url: "{{ route('gallery.store') }}",
            maxFile: 1,
            acceptedFiles: ".jpg,.png,.gif",
            addRemoveLinks: true,
            dictDefaultMessage: "Drop files here or click to upload",
            autoProcessQueue: false,
            init: function() {
                this.on("removedfile", function(file) {
                    console.log("File " + file.name + " removed");
                });
            },
            maxfilesexceeded: function(file) {
                this.removeAllFiles();
                this.addFile(file);
            }
        });

        $('#formAddData').submit(function() {
            myDropzone.processQueue();
        })
    </script>
@endsection
