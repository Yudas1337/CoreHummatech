@extends('admin.layouts.app')

@section('subcontent')
    <h3>Edit Visi dan misi</h3>

    <div class="card mt-3">
        <div class="card-body">
            <label for="">Visi</label>
            <input type="text" class="form-control" placeholder="Masukkan Visi" name="" id="">
            <label for="">Misi</label>
            <input type="text" class="form-control" placeholder="Masukkan Misi" name="" id="">
            <div class="d-flex gap-2 mt-3">
                <input type="text" class="form-control" placeholder="Masukkan Misi" name="" id="">
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </div>
            <div class="d-flex justify-content-between">
                <button class="btn btn-primary btn-sm mt-3">Tambah Misi</button>
                <div>
                    <a href="{{ url('/setting/vision-mision') }}" class="btn btn-secondary btn-sm mt-3">Batal</a>
                    <a href="{{ url('/setting/vision-mision') }}" class="btn btn-primary btn-sm mt-3">Simpan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
