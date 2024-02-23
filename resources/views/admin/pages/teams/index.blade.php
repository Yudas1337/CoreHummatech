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
                    <h5 class="m-2 fw-bold">Struktur Organisasi</h5>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
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
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Tambah Data</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="{{ route('create.team') }}" method="POST"
                    id="bookmark-form" novalidate="" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Lengkap</label>
                                <input class="form-control" name="name" type="text" required="" autocomplete="name"
                                    placeholder="Mis: Agus Prasetya">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Pilih Jabatan</label>
                                <select id="departement" name="position_id" class="form-select">
                                    <option value="null" disabled="disabled" selected="selected">Pilih Jabatan</option>
                                    @forelse ($positions as  $position)
                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                    @empty
                                        <option value="null" disabled="disabled" selected="selected">Jabatan Masih Kosong
                                        </option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto / Logo Sosmed</label>
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
@endsection

@section('content')
    <div class="grid-container">
        @forelse ($teams as $team)
            <div class="card social-profile m-0">
                <div class="card-header" style="background: rgba(48, 126, 243, 0.05)">
                    <div class="card-header-right">
                        <ul class="card-option">
                            <li>
                                <div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit-data">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path
                                                    d="M13.765 2.152C13.398 2 12.932 2 12 2c-.932 0-1.398 0-1.765.152a2 2 0 0 0-1.083 1.083c-.092.223-.129.484-.143.863a1.617 1.617 0 0 1-.79 1.353a1.617 1.617 0 0 1-1.567.008c-.336-.178-.579-.276-.82-.308a2 2 0 0 0-1.478.396C4.04 5.79 3.806 6.193 3.34 7c-.466.807-.7 1.21-.751 1.605a2 2 0 0 0 .396 1.479c.148.192.355.353.676.555c.473.297.777.803.777 1.361c0 .558-.304 1.064-.777 1.36c-.321.203-.529.364-.676.556a2 2 0 0 0-.396 1.479c.052.394.285.798.75 1.605c.467.807.7 1.21 1.015 1.453a2 2 0 0 0 1.479.396c.24-.032.483-.13.819-.308a1.617 1.617 0 0 1 1.567.008c.483.28.77.795.79 1.353c.014.38.05.64.143.863a2 2 0 0 0 1.083 1.083C10.602 22 11.068 22 12 22c.932 0 1.398 0 1.765-.152a2 2 0 0 0 1.083-1.083c.092-.223.129-.483.143-.863c.02-.558.307-1.074.79-1.353a1.617 1.617 0 0 1 1.567-.008c.336.178.579.276.819.308a2 2 0 0 0 1.479-.396c.315-.242.548-.646 1.014-1.453c.466-.807.7-1.21.751-1.605a2 2 0 0 0-.396-1.479c-.148-.192-.355-.353-.676-.555A1.617 1.617 0 0 1 19.562 12c0-.558.304-1.064.777-1.36c.321-.203.529-.364.676-.556a2 2 0 0 0 .396-1.479c-.052-.394-.285-.798-.75-1.605c-.467-.807-.7-1.21-1.015-1.453a2 2 0 0 0-1.479-.396c-.24.032-.483.13-.82.308a1.617 1.617 0 0 1-1.566-.008a1.617 1.617 0 0 1-.79-1.353c-.014-.38-.05-.64-.143-.863a2 2 0 0 0-1.083-1.083Z">
                                                </path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <li><i class="fa fa-pen" aria-hidden="true"></i></li>
                            <li><i class="fa fa-trash" aria-hidden="true"></i></li>
                        </ul>
                        <ul class="card-option mt-2">
                            <li><i class="fa fa-trash" aria-hidden="true" class="btn-delete" id="{{ $team->id }}"
                                    data-id="{{ $team->id }}"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="social-img-wrap">
                        <div class="social-img"><img src="{{ asset('storage/' . $team->image) }}" width="100px"
                                height="200px" style="object-fit: cover ; height:100px" alt="profile">
                        </div>
                        <div class="edit-icon">
                            <svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="social-details">
                        <h5 class="mb-1"><a href="social-app.html">{{ $team->name }}</a></h5><span
                            class="f-light">{{ $team->position->name }}</span>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-danger btn-delete w-100" data-id="{{ $team->id }}" id="{{ $team->id }}">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        @empty

        @endforelse
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="edit-data" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-semibold" id="exampleModalLabel">Ubah Data</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/images/dashboard-8/profile.png') }}" height="96px" width="96px"
                                class="mb-4" alt="profile">
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Lengkap</label>
                                <input class="form-control" type="text" required="" autocomplete="name"
                                    placeholder="Mis: Agus Prasetya">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Pilih Jabatan</label>
                                <select name="departement" id="departement" class="form-select">
                                    <option value="null" disabled="disabled" selected="selected">Pilih Jabatan</option>
                                    <option value="website">Website Developer</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto / Logo Sosmed</label>
                                <input class="form-control" id="formFile" type="file" />
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

    <ul class="pagination justify-content-center my-5">
        <li class="page-item"><a href="#" class="page-link"><i class="fas fa-arrow-left"></i></a></li>
        @foreach (range(0, 5) as $item)
            <li class="page-item {{ $item !== 0 ?: 'active' }}">
                <a href="#" class="page-link">{{ $item + 1 }}</a>
            </li>
        @endforeach
        <li class="page-item"><a href="#" class="page-link"><i class="fas fa-arrow-right"></i></a></li>
    </ul>
    @include('admin.components.delete-modal-component')
@endsection
@section('script')
    <script>
        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/delete/team/' + id);
            $('#modal-delete').modal('show');
        });
    </script>
@endsection
