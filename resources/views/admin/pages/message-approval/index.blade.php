@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12 pt-3">
        <div class="pb-0 d-flex justify-content-between">
            <h3>Pengajuan</h3>
            <div class="d-flex align-items-center gap-2">
                <p class="m-0 me-2">Cari:</p>
                <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </div>
    </div>
    <div class="col-sm-12 mt-3">
        <div class="table">
            <table class="table table-striped">
                <thead style="background-color:#36405E;">
                    <tr>
                        <th scope="col" style="color: white">No</th>
                        <th scope="col" style="color: white">Name</th>
                        <th scope="col" style="color: white">Email</th>
                        <th scope="col" style="color: white">Pesan</th>
                        <th scope="col" style="color: white">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>AGDTS</td>
                            <td>agdts@gmail.com</td>
                            <td>{{ Str::limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat velit tenetur veritatis',50)}}</td>
                            <td class="gap-2 align-items-center" >
                                <a href="#" class="btn btn-outline-success">Terima</a>
                                <a href="#" class="btn btn-danger">Tolak</a>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#edit" class="btn btn-primary px-3"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>SGMAN</td>
                        <td>sgman@gmail.com</td>
                        <td>{{ Str::limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat velit tenetur veritatis',50)}}</td>
                        <td class="gap-2 align-items-center">
                            <a href="#" class="btn btn-outline-success">Terima</a>
                            <a href="#" class="btn btn-danger">Tolak</a>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit" class="btn btn-primary px-3"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>SPMP</td>
                        <td>spmp@gmail.com</td>
                        <td>{{ Str::limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat velit tenetur veritatis',50)}}</td>
                        <td class="gap-2 align-items-center" >
                            <a href="#" class="btn btn-outline-success">Terima</a>
                            <a href="#" class="btn btn-danger">Tolak</a>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit" class="btn btn-primary px-3"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Approval</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama</label>
                                <p class="ms-2 text-muted" >AGDTS</p>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Email</label>
                                <p class="ms-2 text-muted">agdts@gmail.com</p>
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Pesan</label>
                                <p class="ms-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque odio repellat velit cupiditate excepturi ipsam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 mt-3 ms-2">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <nav class="m-b-30 mt-3" aria-label="Page navigation example">
        <ul class="pagination justify-content-center pagin-border-primary pagination-primary">
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
        </ul>
    </nav>
@endsection
@section('script')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
