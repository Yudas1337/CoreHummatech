@extends('landing.layouts.layouts.app')
@section('content')
<div class="blog-area right-sidebar full-blog mt-5">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-8 col-md-12">
                    <div class="blog-item-box">
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href=""><img src="{{ asset('storage/' . $newss->newsImages[0]->photo ) }}" alt="Thumb"></a>
                                    <div class="date">{{ \Carbon\Carbon::parse($newss->created_at)->locale('id_ID')->isoFormat('D MMMM Y') }}</div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                       <ul>
                                           <li>
                                               <img src="{{ asset('mobilelogo.png') }}" alt="Author">
                                               <span>By </span>
                                               <a href="#">HUMMATECH</a>
                                           </li>
                                       </ul>
                                    </div>
                                    <h3>
                                        <a href="javascript:void(0)">{{ $newss->title }}</a>
                                    </h3>
                                    <p>
                                        {!! $newss->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" name="text" class="form-control">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Recent Post</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets-home/img/gallery/1.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 12 Feb, 2020</span>
                                        </div>
                                        <a href="#">Commanded household smallness delivered.</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets-home/img/gallery/2.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 05 Jul, 2021</span>
                                        </div>
                                        <a href="#">Future Plan & Strategy for Consutruction </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets-home/img/gallery/3.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 29 Aug, 2020</span>
                                        </div>
                                        <a href="#">Melancholy particular devonshire alteration</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
@endsection
