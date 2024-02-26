@extends('admin.layouts.app')

@section('header-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('subcontent')
    <div class="py-1"></div>
    <div class="px-3 rounded-3 my-4 shadow-sm">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-7 p-0">
                    <h3>Berita</h3>
                </div>
                <div class="col-sm-5">
                    <div class="d-flex align-items-center">
                        <label for="search">Cari:</label>
                        <input type="text" id="search" class="form-control mx-3">
                        <a href="news/create" class="btn btn-primary">Tambah</a>

                        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col">
                                            <label for="name">Kategori</label>
                                            <input class="form-control" type="text" name="name" id="name"
                                                placeholder="Buat Kategori">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mx-3 mb-3">
                                        <button type="button" class="btn btn-secondary me-2"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-primary">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="product-grid">
        <div class="product-wrapper-grid">
            <div class="row">
                @forelse ($news as $item)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card shadow-sm">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="{{ Storage::url($item->image) }}" alt=""
                                        style="object-fit:cover; width:242vw; height:20vh;">
                                </div>
                                <div class="product-details">
                                    <small style="font-size: 10px"><span
                                            class="text-primary pe-2 fw-bold">{{ $item->newsCategories }}</span>{{ $item->updated_at->format('l, j F Y') }}</small>
                                    <a href="/news">
                                        <h4 class="mb-1">{{ $item->title }}</h4>
                                    </a>
                                    <p class="mt-0 mb-2" style="font-size: 13px">{!! Str::words($item->description, 50, '...') !!}</p>
                                    <div class="d-flex gap-1 mb-3">
                                        <!-- @foreach (explode(',', $item->tags) as $tag)
                                            <small class="text-primary"
                                                style="background-color:#DEEBFF; padding: 3px 10px; border-radius:5px">{{ $tag }}</small>
                                        @endforeach -->
                                        {{$item->newsCategories}}
                                    </div>

                                    <form action="{{ route('news.destroy', $item->id) }}" id="form-{{ $item->id }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                    <ul class="d-flex justify-content-start gap-2">
                                        <li><a href="{{ route('news.show', $item->id) }}" class="btn btn-sm btn-primary"
                                                type="button">
                                                Detail</a></li>
                                        <li><a href="{{ route('news.edit', $item->id) }}"
                                                style="background-color: #FFAA05; padding:6px 15px; border-radius: 5px; color: white"
                                                type="button"><i class="fa-solid fa-pen"></i></a></li>
                                        <li><a href="#" onclick="deleteDataConfirm('{{ $item->id }}')"
                                                style="background-color: #DC3545; padding:6px 15px; border-radius: 5px; color: white"
                                                type="button" title="hapus"><i class="fa-solid fa-trash-can"></i></a></li>
                                    </ul>
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

    {{ $news->links() }}
@endsection

@section('script')
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>

    <script>
        function deleteDataConfirm($id) {
            swal({
                title: 'Apakah Anda Akan Menghapus Data Ini?',
                text: 'Data yang dihapus tidak dapat dikembalikan!',
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((e) => {
                if(e) {
                    $(`#form-${$id}`).submit();
                }
            });
        }
    </script>
@endsection
