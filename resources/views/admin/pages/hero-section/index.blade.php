@extends('admin.layouts.app')

@section('subcontent')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6 p-0">
                <h3>Hero Section</h3>
            </div>
            <div class="col-sm-6 p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Hero Section</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="project-grid">
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
                        <div class="form-group mb-0 me-0"></div>
                        <a class="btn btn-primary" href="{{ url('/hero-section/create') }}">
                            <i class="fa fa-plus"></i> Tambah Hero
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row my-gallery gallery" id="aniimated-thumbnials" itemscope="">
    <figure class="col-md-12 img-hover hover-1 rounded-4 overflow-hidden" itemprop="associatedMedia" itemscope="">
        <a href="../assets/images/big-lightgallry/09.jpg" itemprop="contentUrl" data-size="1600x250">
            <div>
                <img src="../assets/images/lightgallry/09.jpg" itemprop="thumbnail" alt="Image description">
            </div>
        </a>
        <figcaption itemprop="caption description">Image caption 1</figcaption>
    </figure>
    <figure class="col-md-12 img-hover hover-1 rounded-4 overflow-hidden" itemprop="associatedMedia" itemscope="">
        <a href="../assets/images/big-lightgallry/09.jpg" itemprop="contentUrl" data-size="1600x250">
            <div>
                <img src="../assets/images/lightgallry/09.jpg" itemprop="thumbnail" alt="Image description">
            </div>
        </a>
        <figcaption itemprop="caption description">Image caption 2</figcaption>
    </figure>
    <figure class="col-md-12 img-hover hover-1 rounded-4 overflow-hidden" itemprop="associatedMedia" itemscope="">
        <a href="../assets/images/big-lightgallry/010.jpg" itemprop="contentUrl" data-size="1600x250">
            <div>
                <img src="../assets/images/lightgallry/010.jpg" itemprop="thumbnail" alt="Image description">
            </div>
        </a>
        <figcaption itemprop="caption description">Image caption 3</figcaption>
    </figure>
    <figure class="col-md-12 img-hover hover-1 rounded-4 overflow-hidden" itemprop="associatedMedia" itemscope="">
        <a href="../assets/images/big-lightgallry/011.jpg" itemprop="contentUrl" data-size="1600x250">
            <div>
                <img src="../assets/images/lightgallry/011.jpg" itemprop="thumbnail" alt="Image description">
            </div>
        </a>
        <figcaption itemprop="caption description">Image caption 4</figcaption>
    </figure>
</div>
<!-- Root element of PhotoSwipe. Must have class pswp.-->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <!--
      Background of PhotoSwipe.
      It's a separate element, as animating opacity is faster than rgba().
      -->
    <div class="pswp__bg"></div>
    <!-- Slides wrapper with overflow:hidden.-->
    <div class="pswp__scroll-wrap">
        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
        <!-- don't modify these 3 pswp__item elements, data is added later on.-->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <!-- Controls are self-explanatory. Order can be changed.-->
                <div class="pswp__counter"></div>
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
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
@endsection
