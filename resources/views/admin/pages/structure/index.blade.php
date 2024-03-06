@extends('admin.layouts.app')

@section('header-style')
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1rem;
        }

        @media screen and (min-width: 992px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media screen and (min-width: 1200px) {
            .grid-container {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>
@endsection

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h5 class="m-2 fw-bold">Struktur Organisasi dan Usaha</h5>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-teams-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <a class="btn btn-primary m-0" href="#tambah" data-bs-toggle="modal">Tambah</a>
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
                    <ul class="simple-wrapper nav nav-tabs modal-header" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active txt-primary" id="profile-tabs" data-bs-toggle="tab" href="#organisasi" role="tab" aria-controls="profile" aria-selected="false">Struktur organisasi</a></li>
                        <li class="nav-item"><a class="nav-link txt-primary" id="contact-tab" data-bs-toggle="tab" href="#usaha" role="tab" aria-controls="contact" aria-selected="false">Struktur usaha</a></li>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </ul>

                <div class="modal-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="organisasi" role="tabpanel">
                            <form class="form-bookmark needs-validation" action="{{ route('structure.create') }}" method="POST" id="bookmark-form" novalidate="" enctype="multipart/form-data">
                                @csrf
                                <div class="pt-3 mb-0">
                                    <div class="mb-3 mt-0 col-md-12">
                                        <input type="hidden" name="type" value="structure_organize">
                                        <label for="formFile">Foto struktur organisasi</label>
                                        <input class="form-control" name="image" id="formFile" type="file" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-light-danger" type="button" data-bs-dismiss="modal">Tutup</button>
                                    <button class="btn btn-primary" type="submit">Tambah</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="pt-3">
                            <form class="form-bookmark needs-validation" action="{{ route('structure.create') }}" method="POST" id="bookmark-form" novalidate="" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-0 col-md-12">
                                    <input type="hidden" name="type" value="structure_business">
                                    <label for="formFile">Foto struktur usaha</label>
                                    <input class="form-control" name="image" id="formFile" type="file" />
                                </div>
                                <div class="d-flex justify-content-end gap-2">
                                    <button class="btn btn-light-danger" type="button" data-bs-dismiss="modal">Tutup</button>
                                    <button class="btn btn-primary" type="submit">Tambah</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="grid-container mb-3">
        @forelse ($structures as $structure)
            <div class="card social-profile m-0">
                <div class="card-header" style="background: rgba(48, 126, 243, 0.05)">
                    <div class="card-header-right">
                        <ul class="list-unstyled" style="text-align:center">
                            <li><i class="fa fa-edit text-primary mb-2 p-1 btn-edit" data-id="{{ $structure->id }}" data-name="{{ $structure->name }}" data-position_id="{{ $structure->position_id }}" data-image="{{ $structure->image }}" data-type="{{ $structure->type }}" type="button"></i></li>
                            <li><i class="fa-solid fa-trash text-primary p-1 btn-delete" type="button"
                                    data-id="{{ $structure->id }}"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="social-img-wrap">
                        <div class="social-img"><img src="{{ asset('storage/' . $structure->image) }}" width="100px"
                                height="200px" style="object-fit: cover ; height:100px" alt="profile">
                        </div>
                        <div class="edit-icon">
                            <svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            
        @endforelse
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="modal-edit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Ubah Data</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" id="form-update" action="" method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="type" id="type">

                    <div class="modal-body">
                        <div class="social-img d-flex justify-content-center"><img src="" id="image-edit" width="100px"
                            height="100px" style="object-fit: cover ; height:100px" alt="profile">
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" name="image" id="formFile" type="file" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- @if($structures->hasPages())
    <div class="mb-3">
        {{ $structures->links() }}
    </div>
    @endif --}}

    @include('admin.components.delete-modal-component')
@endsection
@section('script')
    <script>
        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/setting/structure/delete/' + id);
            $('#modal-delete').modal('show');
        });

        $('.btn-edit').click(function() {
            var id = $(this).data('id');
            var image = $(this).data('image');
            var type = $(this).data('type');

            $('#image-edit').attr('src','{{ asset('storage') }}/'+ image);
            $('#form-update').attr('action', '/setting/structure/update/' + id); // Mengubah nilai atribut action form
            $('#name-edit').val(name);
            $('#type').val(type);
            $('#modal-edit').modal('show');
        });
    </script>
@endsection
