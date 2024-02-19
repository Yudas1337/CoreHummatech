@extends('admin.layouts.app')

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
        <div class="form theme-form">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label>Judul Berita</label>
                <input class="form-control" type="text" placeholder="Project name *">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label>Kategori</label>
                <select class="js-example-basic-single" aria-label=".form-select example">
                  <option selected="">What's Your Hobbies </option>
                  <option value="1">Kho-kho</option>
                  <option value="2">Reading Books</option>
                  <option value="3">Creativity</option>
                </select>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label>Deskripsi</label>
                <div class="summernote"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label>Upload Foto</label>
                <form class="dropzone" id="singleFileUpload" action="https://admin.pixelstrap.net/upload.php">
                  <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                    <h4>Drop files here or click to upload.</h4><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label>Tag</label>
                <input class="form-control" name="basic" value="tag1, tag2, tag3, tag4 autofocus">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="text-end"><a class="btn btn-success me-3" href="">Tambahkan</a><a class="btn btn-danger" href="/news">Cancel</a></div>
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

        @section('script')
            <script>
                // In your Javascript (external .js resource or <script> tag)
                $(document).ready(function() {
                    $('.js-example-basic-single').select2();
                });
            </script>
        @endsection
