@extends('admin.layouts.app')

@section('header-style')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_landing/dist/imageuploadify.min.css') }}" rel="stylesheet" />

    <style>
        .ql-toolbar button {
            padding: .5rem;
            bakcground: var(--bs-gray-200);
        }
    </style>
@endsection

@section('subcontent')
    <div class="page-title">
        <div class="d-flex justify-content-between">
            <h3>Berita baru</h3>
            <a href="/news" class="btn btn-light">Kembali</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body add-post">
                        <form enctype="multipart/form-data" action="{{ route('news.store') }}" class="form theme-form"
                            method="POST">
                            @csrf
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="thumbnail">Gambar Berita</label>
                                    <input id="thumbnail" type="file" name="image" class="form-control" accept="image/*" />
                                    @error('image')
                                        <div class="text-danger">{{ $message }}
                                        </div>
                                    @enderror
                                    @error('image.*')
                                        <div class="text-danger">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Judul Berita</label>
                                    <input class="form-control" value="{{ old('title') }}" type="text" name="title"
                                        placeholder="Mis: Peluncuran Humma Academy" />
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="col-form-label">Kategori Berita (atau <a href="/category-news">Tambah baru</a>)
                                        <select class="js-example-basic-multiple col-sm-12" multiple="multiple"
                                            name="category[]">
                                            @forelse ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @empty
                                                <option disabled>Belum ada kategori berita</option>
                                            @endforelse
                                        </select>
                                        @error('category')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Deskripsi Berita</label>
                                    <div id="editor" style="height: 200px">{!! old('description') !!}</div>
                                    <textarea name="description" class="d-none" id="description" cols="30" rows="10">{!! old('description') !!}</textarea>
                                    {{-- <input type="hidden" id="description" value="{!! old('description') !!}" name="description" /> --}}

                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-end">
                                    <a class="btn btn-light-danger me-3" href="/news">Tutup</a>
                                    <button type="submit" class="btn btn-send btn-primary me-3">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

    <script>
        var targetTags = new Tagify(document.getElementById('tags'));
    </script>

    <script>
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginImageExifOrientation,
            FilePondPluginFileValidateSize,
            FilePondPluginImageEdit
        );

        FilePond.create(
            document.querySelector('#thumbnail'), {
                labelIdle: 'Unggah foto, atau <span class="filepond--label-action">Cari</span>',
                maxFiles: '5',
                maxFileSize: '100MB',
                autoProcessQueue: false,
                uploadMultiple: true,
                labelMaxFileSizeExceeded: 'Too big bro.',
                labelMaxFileSize: 'max {filesize}',
            }
        );
    </script>

    <script>
        $('.js-example-basic-single').on('select2:select', (e) => {
            var $this = $(e.target);
            if ($this.val() === 'add-new') {
                window.location.href = `/category-news`
            }
        });
    </script>

    <script>
        var customToolbar = [
            ['bold', 'italic', 'underline', 'strike', 'blockquote', 'image'],

            [{
                'color': []
            }, {
                'background': []
            }],
            [{
                'font': []
            }],
            [{
                'align': [],
            }],

            ['clean'],
        ];

        const quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: "Silahkan masukkan deskripsi artikel.",
            modules: {
                toolbar: {
                    container: customToolbar,
                }
            },
        });

        quill.on('text-change', (eventName, ...args) => {
            $('#description').val(quill.root.innerHTML);
        });
    </script>

    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
@endsection
