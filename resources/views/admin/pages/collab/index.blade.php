@extends('admin.layouts.app')

@section('subcontent')
<div class="page-title">
  <div class="row">
    <div class="col-sm-6 p-0">
      <h3>Default Dashboard </h3>
    </div>
    <div class="col-sm-6 p-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">
            <svg class="stroke-icon">
              <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#stroke-home"></use>
            </svg></a></li>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Default      </li>
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
            <div class="form-group mb-0 me-0"></div><a class="btn btn-primary"  type="button" data-bs-toggle="modal" data-bs-target="#tambah"> <i class="fa fa-plus"></i> Tambah Mitra</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="my-gallery card-body gallery-with-description mb-3" itemscope="">
  <div class="row">
    <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
      <a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950">
        <img src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description">
        <div class="caption">
          <h4 class="text-center">Portfolio Title</h4>
        </div>
      </a>
      <figcaption itemprop="caption description">
        <h4>Portfolio Title</h4>
      </figcaption>
    </figure>
    <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/02.jpg" itemprop="thumbnail" alt="Image description">
        <div class="caption">
          <h4>Portfolio Title</h4>
        </div></a>
      <figcaption itemprop="caption description">
        <h4>Portfolio Title</h4>
      </figcaption>
    </figure>
    <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/03.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/03.jpg" itemprop="thumbnail" alt="Image description">
        <div class="caption">
          <h4>Portfolio Title</h4>
        </div></a>
      <figcaption itemprop="caption description">
        <h4>Portfolio Title</h4>
      </figcaption>
    </figure>
  </div>
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
</div>

<!-- Add Modal -->
<div class="modal fade modal-bookmark" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Foto</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="form-bookmark needs-validation" action="#" method="POST" id="bookmark-form" novalidate="" enctype="multipart/form-data">
            <div class="modal-body">
                  <div class="row g-2">
                      <div class="mb-3 mt-0 col-md-12">
                          <label for="bm-title">Nama Mitra</label>
                          <input class="form-control" type="text" required="" autocomplete="name">
                      </div>
                      <div class="mb-3 mt-0 col-md-12">
                        <label>Kategori</label>
                        <select class="js-example-basic-single" aria-label=".form-select example">
                          <option selected="">What's Your Hobbies </option>
                          <option value="1">Kho-kho</option>
                          <option value="2">Reading Books</option>
                          <option value="3">Creativity</option>
                        </select>
                      </div>
                      <div class="mb-3 mt-0 col-md-12">
                          <label for="bm-title">Foto</label>
                          <input class="form-control" id="formFile" type="file">
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
@section('script')
<script>
  // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endsection