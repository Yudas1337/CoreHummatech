@extends('admin.layouts.app')

@section('content')
    <div class=" p-1 pb-4 pt-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h4 class="m-2">Galeri</h4>
            </div>
            <div class="col-12 col-lg-6">
                <div class="d-flex justify-content-lg-end justify-content-start">
                    <div class="d-flex align-items-center gap-2">
                        <p class="m-0 me-2">Cari:</p>
                        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <button class="btn btn-primary m-0" type="button" data-bs-toggle="modal"
                        data-bs-target="#tambah">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 box-col-12">

            <div class="row">
                @forelse ($gallery as $galeri)
                    <div class="col-md-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img class="img-fluid" src="../assets/images/masonry/1.jpg" alt="">
                                        <div class="product-hover">
                                            <ul>
                                                <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                            class="fa fa-edit"></i></a></li>
                                                <li><a href=""><i class="fa fa-trash"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

            {{-- <div class="card">
                <div class="card-body photoswipe-pb-responsive">
                    <div class="my-gallery row grid gallery" id="aniimated-thumbnials" itemscope="" data-pswp-uid="1"
                        style="position: relative; height: 1785.27px;">
                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""
                            style="position: absolute; left: 0px; top: 0px;">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/masonry/1.jpg" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="fa fa-edit"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""
                            style="position: absolute; left: 342px; top: 0px;">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/masonry/2.jpg" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="fa fa-edit"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""
                            style="position: absolute; left: 685px; top: 0px;">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/masonry/3.jpg" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="fa fa-edit"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""
                            style="position: absolute; left: 1028px; top: 0px;">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/masonry/4.jpg" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="fa fa-edit"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""
                            style="position: absolute; left: 685px; top: 342px;">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/masonry/5.jpg" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="fa fa-edit"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""
                            style="position: absolute; left: 0px; top: 415px;">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/masonry/6.jpg" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="fa fa-edit"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""
                            style="position: absolute; left: 342px; top: 522px;">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/masonry/7.jpg" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="fa fa-edit"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""
                            style="position: absolute; left: 1028px; top: 522px;">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/masonry/8.jpg" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="fa fa-edit"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope=""
                            style="position: absolute; left: 0px; top: 688px;">
                            <div class="product-box">
                                <div class="product-img">
                                    <img class="img-fluid" src="../assets/images/masonry/9.jpg" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><a type="button" data-bs-toggle="modal" data-bs-target="#edit"><i
                                                        class="fa fa-edit"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                <!-- Root element of PhotoSwipe. Must have class pswp.-->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" style="">
                    <!--
                Background of PhotoSwipe.
                It's a separate element, as animating opacity is faster than rgba().
                -->
                    <div class="pswp__bg" style=""></div>
                    <!-- Slides wrapper with overflow:hidden.-->
                    <div class="pswp__scroll-wrap">
                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                        <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                        <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="pswp__item" style="display: block; transform: translate3d(-1888px, 0px, 0px);">
                                <div class="pswp__zoom-wrap" style="transform: translate3d(232px, 44px, 0px) scale(1);">
                                    <img class="pswp__img pswp__img--placeholder" src="../assets/images/masonry/13.jpg"
                                        style="width: 1223px; height: 726px;"><img class="pswp__img"
                                        src="../assets/images/big-masonry/13.jpg" style="width: 1223px; height: 726px;">
                                </div>
                            </div>
                            <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="pswp__zoom-wrap"
                                    style="transform: translate3d(977.227px, 66.7969px, 0px) scale(0.260845);"><img
                                        class="pswp__img pswp__img--placeholder" src="../assets/images/masonry/14.jpg"
                                        style="width: 1223px; height: 726px;"><img class="pswp__img"
                                        src="../assets/images/big-masonry/14.jpg"
                                        style="display: block; width: 1223px; height: 726px;"></div>
                            </div>
                            <div class="pswp__item" style="display: block; transform: translate3d(1888px, 0px, 0px);">
                                <div class="pswp__zoom-wrap" style="transform: translate3d(232px, 44px, 0px) scale(1);">
                                    <img class="pswp__img" src="../assets/images/big-masonry/15.jpg"
                                        style="opacity: 1; width: 1223px; height: 726px;">
                                </div>
                            </div>
                        </div>
                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                        <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">
                            <div class="pswp__top-bar">
                                <!-- Controls are self-explanatory. Order can be changed.-->
                                <div class="pswp__counter">14 / 16</div>
                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                <button class="pswp__button pswp__button--share" title="Share"></button>
                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                                <!-- element will get class pswp__preloader--active when preloader is running-->
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                        <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>
                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                            <div class="pswp__caption">
                                <div class="pswp__caption__center">Image caption 14</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="mb-3 mt-0 col-md-12">
                            <label for="bm-title">Judul Galeri</label>
                            <input class="form-control" id="formFile" name="name" type="text">
                        </div>
                    </div>
                    <form class="dropzone" id="singleFileUpload" action="https://admin.pixelstrap.net/upload.php">
                        <div class="dropzone-wrapper">
                            <div class="dz-message needsclick"><i data-feather="upload-cloud"></i>
                                <h4>Drop files here or click to upload.</h4><span class="note needsclick">Unggah data
                                    berformat gambar (jpg, jpeg, png)</span>
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

    <!-- Edit Modal -->
    <div class="modal fade modal-bookmark" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Galeri</h5>
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        feather.replace();
    </script>
@endsection
