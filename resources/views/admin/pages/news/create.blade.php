@extends('admin.layouts.app')

@section('header-style')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ route('news.store') }}" class="form theme-form"
                        method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Judul Berita</label>
                                    <input class="form-control" value="{{ old('title') }}" type="text" name="title"
                                        placeholder="Mis: Peluncuran Humma Academy" />

                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Kategori</label>
                                    <select name="category_news_id" class="js-example-basic-single form-control">
                                        <option disabled selected>Pilih Kategori</option>
                                        @forelse ($categories as $category)
                                            <option {{ old('category_news_id') === $category->id ?: 'selected' }}
                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                        @empty
                                            <option value="add-new">Tambahkan Kategori Baru</option>
                                        @endforelse
                                    </select>

                                    @error('category_news_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Deskripsi Berita</label>
                                        <div id="editor" style="height: 250px">{!! old('description') !!}</div>
                                        <input type="hidden" id="description" value="{!! old('description') !!}"
                                            name="description" />

                                        @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Upload Foto</label>
                                        <input type="file" name="image" id="image" accept="image/*" class="form-control" />

                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Tag</label>
                                        <input class="basic form-control" name="tags"
                                            placeholder="Mis: Teknologi, Jelajah, Hummatech" id="tags"
                                            value="{{ old('tags') }}" />
                                        <div class="form-text">Masukkan tag dengan koma</div>

                                        @error('tags')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <a class="btn btn-danger" href="/news">Cancel</a>
                                        <button type="submit" class="btn btn-success me-3">Tambahkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Load FilePond library -->
    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

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
                maxFiles: '1',
                maxFileSize: '5MB',
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
            ['bold', 'italic', 'underline', 'strike', 'blockquote'],

            [{
                'color': []
            }, {
                'background': []
            }],
            [{
                'font': []
            }],
            [{
                'align': []
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

        quill.on('editor-change', (eventName, ...args) => {
            $('#description').val(quill.root.innerHTML);
        });
    </script>
@endsection
