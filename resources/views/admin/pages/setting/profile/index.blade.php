@extends('admin.layouts.app')

@section('subcontent')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>profile perusahaan</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="py-3">
        <div class="row">
            @forelse ($profile as $profil)
            <div class="col-sm-12">
                <div class="card card-body">
                    <form action="{{ route('update.profile', $profil->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="rounded-3 p-4 position-relative">
                                    <img src="{{ asset('storage/' . $profil->image) }}" style="object-fit: cover; width: 100%;" class="img-fluid" alt="Logo">
                                </div>
                                <div class="my-1 mb-2">
                                    <label for="image">Foto Profil</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="my-1 mb-2">
                                    <label for="proposal">Proposal Perusahaan</label>
                                    <input type="file" class="form-control" name="proposal">
                                </div>
                                <div class="my-1">
                                    <label for="call">No. Telp</label>
                                    <input type="text" class="form-control" name="phone" placeholder="No telp" value="{{ $profil->phone }}">
                                </div>
                                <div class="my-1">
                                    <label for="call">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $profil->email }}">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="mt-1">
                                    <label for="headline">Judul <span style="font-size: 11px" class="text-danger">*Wajib diisi</span></label>
                                    <input type="text" class="form-control" id="headline" name="title" value="{{ $profil->title }}">
                                </div>
                                <div class="my-1">
                                    <label for="subheadline">Subjudul <span style="font-size: 11px" class="text-danger">*Wajib diisi</span></label>
                                    <input type="text" class="form-control" id="subheadline" name="subtitle" value="{{ $profil->subtitle }}">
                                </div>
                                <div class="my-1">
                                    <label for="deskripsi">Deskripsi <span style="font-size: 11px" class="text-danger">*Wajib diisi</span></label>
                                    <div id="editor" style="height: 200px">{!! $profil->description !!}</div>
                                    <textarea name="description" class="d-none"  id=" deskripsi" cols="30" rows="10">{!! old('description') !!}</textarea>
                                </div>
                                <div class="my-1">
                                    <label for="address">Alamat <span style="font-size: 11px" class="text-danger">*Wajib diisi</span></label>
                                    <textarea name="address" id="address" class="form-control" rows="5">{{ $profil->address }}</textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary float-end">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @empty

            <div class="col-sm-12">
                <div class="card card-body">
                    <form action="{{ route('store.profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="rounded-3 p-4 position-relative">
                                    {{-- <img src="../assets/images/Figure.png" style="object-fit: cover; width: 100%;" class="img-fluid" alt="Logo"> --}}
                                    {{-- <input type="file" id="inputImage" accept="image/*" onchange="displayImage(event)"> --}}

                                    <!-- Kontainer untuk menampilkan gambar -->
                                    <div id="imageContainer">
                                        <img src="../assets/images/Figure.png" id="selectedImage" style="object-fit: cover; width: 100%;" class="img-fluid" alt="Logo">
                                    </div>
                                </div>
                                <div class="my-1 mb-2">
                                    <label for="image">Foto Profil</label>
                                    <input type="file" id="inputImage" class="form-control" name="image" accept="image/*" onchange="displayImage(event)">
                                </div>
                                <div class="my-1 mb-2">
                                    <label for="proposal">Proposal Perusahaan</label>
                                    <input type="file" class="form-control" name="proposal">
                                </div>
                                <div class="my-1">
                                    <label for="call">No. Telp</label>
                                    <input type="text" class="form-control" name="phone" placeholder="No telp" value="">
                                </div>
                                <div class="my-1">
                                    <label for="call">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="mt-1">
                                    <label for="headline">Judul <span style="font-size: 11px" class="text-danger">*Wajib diisi</span></label>
                                    <input type="text" class="form-control" id="headline" name="title" value="" placeholder="Masukkan Judul">
                                </div>
                                <div class="my-1">
                                    <label for="subheadline">Subjudul <span style="font-size: 11px" class="text-danger">*Wajib diisi</span></label>
                                    <input type="text" class="form-control" id="subheadline" name="subtitle" value="" placeholder="Masukkan Subjudul">
                                </div>
                                <div class="my-1">
                                    <label for="deskripsi">Deskripsi <span style="font-size: 11px" class="text-danger">*Wajib diisi</span></label>
                                    <div id="editor" style="height: 200px">{!! old('description') !!}</div>
                                    <textarea name="description" class="d-none" id="description" cols="30" rows="10">{!! old('description') !!}</textarea>
                                </div>
                                <div class="my-1">
                                    <label for="address">Alamat <span style="font-size: 11px" class="text-danger">*Wajib diisi</span></label>
                                    <textarea name="address" id="address" class="form-control" rows="5" placeholder="Alamat Perusahaan" ></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary float-end">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endforelse
        </div>

    </div>

    <div class="modal fade" id="uploadImageModal" tabindex="-1" aria-labelledby="uploadImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="uploadImageModalLabel">Unggah Gambar Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="image-uploader-form" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label">Unggah Gambar</label>
                            <input class="form-control" type="file" name="image" id="image" />
                        </div>

                        <div class="mb-3">
                            <label for="alt" class="form-label">Deskripsi Gambar</label>
                            <input class="form-control" type="text" name="alt" id="alt" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" id="save-button-uploader" class="btn btn-primary">Unggah Gambar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    // Fungsi untuk menampilkan gambar yang dipilih
    function displayImage(event) {
        const input = event.target;
        const imageContainer = document.getElementById('imageContainer');
        const selectedImage = document.getElementById('selectedImage');

        // Memastikan ada file yang dipilih
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            // Membaca file gambar yang dipilih
            reader.onload = function (e) {
                selectedImage.src = e.target.result;
            };

            // Membaca file sebagai URL data
            reader.readAsDataURL(input.files[0]);

            // Menampilkan kontainer gambar
            imageContainer.style.display = 'block';
        } else {
            // Jika tidak ada file yang dipilih, sembunyikan kontainer gambar
            imageContainer.style.display = 'none';
        }
    }
</script>

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
    var customToolbar = [
        ['bold', 'italic', 'underline', 'strike', 'blockquote', 'image'],

        ['link'],

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
        placeholder: "Silahkan masukkan deskripsi perusahaan.",
        modules: {
            toolbar: {
                container: customToolbar,
                handlers: {
                    image: () => {
                        $('#uploadImageModal').modal('show');

                        let $image = $('#image-uploader-form #image'),
                            formData = new FormData();

                        $image.change((e) => {
                            let filename = e.target.files[0].name;
                            $('#image-uploader-form #alt').val(filename);
                        });

                        $('#save-button-uploader').click((e) => {
                            e.preventDefault();

                            formData.append('image', $image[0].files[0]);
                            formData.append('_token', '{{ csrf_token() }}');

                            $.ajax({
                                url: '{{ route('image-uploader') }}',
                                type: 'POST',
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: ({
                                    data
                                }) => {
                                    let index = quill.getSelection() ? quill
                                        .getSelection().index : 0;

                                    quill.insertEmbed(index, 'image', `{{ url('/storage') }}/${data.image}`);

                                    $('#image-uploader-form').trigger('reset');
                                    $('#uploadImageModal').modal('hide');
                                }
                            });
                        });
                    }
                }
            }
        },
    });

    quill.on('text-change', (eventName, ...args) => {
        $('#description').val(quill.root.innerHTML);
    });

    quill.on('text-change', (eventName, ...args) => {
        $('#deskripsi').val(quill.root.innerHTML);
    });
</script>
@endsection

