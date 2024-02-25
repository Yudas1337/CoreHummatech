@extends('admin.layouts.app')

@section('content')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Sosial Media</h4>
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
    </div>

    <div class="row row-cols-1 row-cols-md-3">
        @forelse ($socialMedia as $socialmedia)
            <div class="col">
                <div class="card border-0 shadow rounded overflow-hidden my-3 mx-3" style="background-color: #f8f9fa; width: 100%; height: 100;"> <!-- Sesuaikan tinggi maksimum sesuai kebutuhan -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/' . $socialmedia->image) }}" class="rounded img-fluid" style="width: 85px; height: 85px; object-fit: cover;" alt="Image Alt Text">
                            <div class="ms-3 text-wrap">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="mt-2 mb-0">{{$socialmedia->platform}}</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{$socialmedia->link}}" style="width: 80%">{{ Str::limit($socialmedia->link, 25) }}</a>
                                        {{-- <p class="text-primary" style="width: 85%; white-space: pre-line; overflow: hidden; text-overflow: ellipsis;">{{$socialmedia->link}}</p> --}}
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="d-flex flex-column flex-md-row gap-2">
                                            <button class="btn btn-primary btn-edit" type="button" data-bs-toggle="modal"
                                            data-bs-target="#edit" data-id="{{ $socialmedia->id }}"
                                            data-name="{{ $socialmedia->platform }}">Edit</button>
                                            <button class="btn btn-danger btn-delete" data-id="{{$socialmedia->id}}" type="button">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>



    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Sosial Media</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="{{ route('create.social.media') }}" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Platform</label>
                                <input class="form-control" type="text" required="" autocomplete="name"
                                    placeholder="Masukkan Nama Platform" name="platform">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Tautan Media Sosial</label>
                                <input class="form-control" type="text" required="" id="link-edit" autocomplete="name"
                                    placeholder="Masukkan Tautan Media Sosial" name="link">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto / Logo Sosmed</label>
                                <input class="form-control" id="formFile" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Sosial Media</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation"  method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Platform</label>
                                <input class="form-control" type="text" required="" id="platform-edit" autocomplete="name" name="platform"
                                    placeholder="Masukkan Nama Platform">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Tautan Media Sosial</label>
                                <input class="form-control" type="text" required="" autocomplete="name" value="{{ old('link') }}" name="link"
                                    placeholder="Masukkan Tautan Media Sosial">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto / Logo Sosmed</label>
                                <input class="form-control" id="formFile" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.components.delete-modal-component')
@endsection

@section('script')
<script>
    $('.btn-delete').on('click', function() {
        var id = $(this).data('id');
        $('#form-delete').attr('action', '/delete/social/media/' + id);
        $('#modal-delete').modal('show');
    });
    $('.btn-edit').click(function() {
        var id = $(this).data('id'); // Mengambil nilai id dari tombol yang diklik
        var name = $(this).data('name'); // Mengambil nilai name dari tombol yang diklik
        $('#form-update').attr('action', 'update/category/mitra/' + id); // Mengubah nilai atribut action form
        $('#platform-edit').val(name);
        $('#link-edit').val(link);
        $('#modal-edit').modal('show');
    });
</script>
@endsection
