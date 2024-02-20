@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive custom-scrollbar">
                <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="basic-1_length"><label>Show <select name="basic-1_length"
                                aria-controls="basic-1" class="">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                    <div id="basic-1_filter" class="dataTables_filter"><label>Search:<input type="search" class=""
                                placeholder="" aria-controls="basic-1"></label></div>
                    <table class="display dataTable no-footer " id="basic-1" role="grid"
                        aria-describedby="basic-1_info">
                        <thead>
                            <tr role="row" style="background-color: #36405E; color: white">
                                <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                                    aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                    style="width: 161.3px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                                    aria-label="Position: activate to sort column ascending" style="width: 259.225px;">
                                    Position</th>
                                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                                    aria-label="Office: activate to sort column ascending" style="width: 128.012px;">Office
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                                    aria-label="Age: activate to sort column ascending" style="width: 57.1125px;">Age</th>
                                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                                    aria-label="Start date: activate to sort column ascending" style="width: 116.1px;">Start
                                    date</th>
                                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending" style="width: 81.325px;">Salary
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1"
                                    aria-label="Action: activate to sort column ascending" style="width: 83.525px;">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                                <td>
                                    <div class="d-flex gap-2 align-items-center">
                                        <button class="btn btn-success " type="button">Terima</button>
                                        <button class="btn btn-danger" type="button">Tolak</button>
                                        <button style="width: 20px; border-radius:5px" type="button" data-bs-toggle="modal"
                                            data-bs-target="#edit" class=" btn-info"><i class="fa fa-eye"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form"
                        novalidate="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class=" max-w-7xl mx-auto">
                                <label for="" class="fs-5">Nama</label>
                                <h5>Airi Satou</h5>
                                <label for="" class="fs-5">Email</label>
                                <h5>hY4pW@example.com</h5>
                                <label for="" class="fs-5">Pesan</label>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolore nam temporibus rem
                                    voluptas laudantium quia facilis consequatur architecto tempora magnam ducimus non
                                    molestiae quod est repudiandae, assumenda maiores ullam.</h5>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
