@extends('admin.layouts.app')

@section('subcontent')
    <div class=" p-1">
        <div class="card border-0 shadow p-3 mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="m-2">Testimoni</h4>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start">
                        <div class="d-flex align-items-center gap-2">
                            <p class="m-0 me-2">Cari:</p>
                            <input class="form-control me-2" type="text" placeholder="Cari sesuatu&hellip;"
                                aria-label="Cari sesuatu&hellip;" />
                        </div>
                        @include('admin.pages.testimonial.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    {{-- <div class="project-grid">
        <div class="project-list">
            <div class="card">
                <div class="file-content py-2 px-4">
                    <div class="d-flex align-items-center">
                        <form class="form-inline" action="#" method="get">
                            <div class="form-group mb-0">
                                <i class="fa fa-search"></i>
                                <input class="form-control-plaintext" type="text" placeholder="Search...">
                            </div>
                        </form>
                        <div class="flex-grow-1 file-buttons">
                            <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" type="button"
                                data-bs-toggle="modal" data-bs-target="#tambah"> <i class="fa fa-plus"></i> Buat
                                Testimoni</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-xl-3 col-sm-6 box-col-3">
            <div class="card features-faq product-box">
                <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/1.jpg" alt="">
                </div>
                <div class="card-body">
                    <small>20 Februari 2024</small>
                    <h6>Web Design</h6>
                    <p>A Web Designing course belongs to the field of Computer It enables students to learn various
                        techniques.</p>
                </div>
                <div class="d-flex justify-content-end gap-2 py-3 px-3">
                    <button type="button" class="btn btn-primary btn-edit">
                        Edit
                    </button>
                    <button class="btn-delete btn btn-danger">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 box-col-3">
            <div class="card features-faq product-box">
                <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/2.jpg" alt="">
                </div>
                <div class="card-body">
                    <small>20 Februari 2024</small>
                    <h6>Web Development</h6>
                    <p>A Web Development course belongs to the field of Computer It enables students to learn various
                        techniques.</p>
                </div>
                <div class="d-flex justify-content-end gap-2 py-3 px-3">
                    <button type="button" class="btn btn-primary btn-edit">
                        Edit
                    </button>
                    <button class="btn-delete btn btn-danger">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 box-col-3">
            <div class="card features-faq product-box">
                <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/3.jpg" alt="">
                </div>
                <div class="card-body">
                    <small>20 Februari 2024</small>
                    <h6>UI Design</h6>
                    <p>User interface design (UI) is the design for machines and software, such as mobile devices,
                        computers.</p>
                </div>
                <div class="d-flex justify-content-end gap-2 py-3 px-3">
                    <button type="button" class="btn btn-primary btn-edit">
                        Edit
                    </button>
                    <button class="btn-delete btn btn-danger">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 box-col-3">
            <div class="card features-faq product-box">
                <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/4.jpg" alt="">
                </div>
                <div class="card-body">
                    <small>20 Februari 2024</small>
                    <h6>UX Design</h6>
                    <p>User Experience design (UX) is the design for machines and software, such as mobile devices,
                        computers.</p>
                </div>
                <div class="d-flex justify-content-end gap-2 py-3 px-3">
                    <button type="button" class="btn btn-primary btn-edit">
                        Edit
                    </button>
                    <button class="btn-delete btn btn-danger">
                        Hapus
                    </button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Buat Testimoni</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate=""
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" id="formFile" type="file">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Lengkap</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                        </div>
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Nama Lengkap</label>
                            <input class="form-control" type="text" required="" autocomplete="name">
                        </div>
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Deskripsi</label>
                            <input class="form-control" type="text" required="" autocomplete="name">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-secondary" type="submit">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Testimoni</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form"
                    novalidate="" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Foto</label>
                                <input class="form-control" id="formFile" type="file">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Nama Lengkap</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Sekolah</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                            <div class="mb-3 mt-0 col-md-12">
                                <label for="bm-title">Deskripsi</label>
                                <input class="form-control" type="text" required="" autocomplete="name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-secondary" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <nav class="m-b-30" aria-label="Page navigation example">
        <ul class="pagination justify-content-center pagin-border-primary pagination-primary">
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
        </ul>
    </nav>
@endsection
