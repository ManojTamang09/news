@extends('visitor.layout.master')
@section('content')

    <!-- Start Main content -->
    <main class="bg-grey pt-50 pb-50">
        <div class="pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content2">
                            <div class="entry-header entry-header-style-1 mb-50">
                                <h1 class="entry-title mb-30 font-weight-900">
                                    {{$img->heading}}
                                </h1>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                                            <p class="mb-5">
                                                {{-- <a class="author-avatar" href="#"><img class="img-circle" src="assets/imgs/authors/author-3.jpg" alt=""></a> --}}
                                                By <a href="author.html"><span class="author-name font-weight-bold">Admin</span></a>
                                            </p>
                                            <span class="mr-10">{{date('d-m-Y   H:m:s', strtotime($img->updated_at))}}</span>
                                            <span class="has-dot"> 8 mins read</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right d-none d-md-inline">
                                        <ul class="header-social-network d-inline-block list-inline mr-15">
                                            <li class="list-inline-item text-muted"><span>Share this: </span></li>
                                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                                            <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end single header-->
                            {{-- <figure class="image mb-30 m-auto text-center border-radius-10">

                                <div class="loop-grid mb-30">
                                    <div class="row">
                                        <div class="col-lg-12 mb-30">
                                            <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                                                <div class="arrow-cover"></div>
                                                <div class="slide-fade">


                                                    <div class="position-relative post-thumb">
                                                        <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url('{{asset('videodoc')}}/{{$img->document}}')">
                                                            <a class="img-link" href="javascript:void(0)"></a>
                                                            <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                                            <div class="post-content-overlay text-white ml-30 mr-30 pb-30">


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>


                            </figure> --}}
                            <figure class="image mb-30 m-auto text-center border-radius-10">
                                <video class="border-radius-10" controls  alt="post-title">
                                    <source src="{{asset('videodoc')}}/{{$img->document}}" type="video/mp4">

                                  </video>
                            </figure>
                            <!--figure-->
                            <article class="entry-wraper mb-50">
                                <div class="excerpt mb-30">
                                    <p>
                                        {{$img->description}}</p>
                                </div>

                                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                                    <div class="tags">
                                        <span>Tags: </span>
                                        <a href="category.html" rel="tag">deer</a>
                                        <a href="category.html" rel="tag">nature</a>
                                        <a href="category.html" rel="tag">conserve</a>
                                    </div>
                                </div>
                                {{-- <div class="single-social-share clearfix wow fadeIn animated">
                                    <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                                        <span class="hit-count mr-15"><i class="elegant-icon icon_comment_alt mr-5"></i>182 comments</span>
                                        <span class="hit-count mr-15"><i class="elegant-icon icon_like mr-5"></i>268 likes</span>
                                        <span class="hit-count"><i class="elegant-icon icon_star-half_alt mr-5"></i>Rate: 9/10</span>
                                    </div>
                                    <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                                    </ul>
                                </div> --}}
                                <!--author box-->
                                {{-- <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn animated">
                                    <div class="author-image mb-30">
                                        <a href="author.html"><img src="assets/imgs/authors/author-3.jpg" alt="" class="avatar"></a>
                                    </div>
                                    <div class="author-info">
                                        <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a href="author.html" title="Posted by Barbara Cartland" rel="author">Barbara Cartland</a></span></span>
                                        </h4>
                                        <h5 class="text-muted">About author</h5>
                                        <div class="author-description text-muted">You should write because you love the shape of stories and sentences and the creation of different words on a page. </div>
                                        <a href="author.html" class="author-bio-link mb-md-0 mb-3">View all posts (125)</a>
                                        <div class="author-social">
                                            <ul class="author-social-icons">
                                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                                <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="ti-pinterest"></i></a></li>
                                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--related posts-->
                                {{-- <div class="related-posts">
                                    <div class="post-module-3">
                                        <div class="widget-header-2 position-relative mb-30">
                                            <h5 class="mt-5 mb-30">Related posts</h5>
                                        </div>
                                        <div class="loop-list loop-list-style-1">
                                            <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                                <div class="row mb-40 list-style-2">
                                                    <div class="col-md-4">
                                                        <div class="post-thumb position-relative border-radius-5">
                                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-13.jpg)">
                                                                <a class="img-link" href="single.html"></a>
                                                            </div>
                                                            <ul class="social-share">
                                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 align-self-center">
                                                        <div class="post-content">
                                                            <div class="entry-meta meta-0 font-small mb-10">
                                                                <a href="category.html"><span class="post-cat text-primary">Food</span></a>
                                                            </div>
                                                            <h5 class="post-title font-weight-900 mb-20">
                                                                <a href="single.html">Helpful Tips for Working from Home as a Freelancer</a>
                                                                <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                                            </h5>
                                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                                <span class="post-on">7 August</span>
                                                                <span class="time-reading has-dot">11 mins read</span>
                                                                <span class="post-by has-dot">3k views</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                                <div class="row mb-40 list-style-2">
                                                    <div class="col-md-4">
                                                        <div class="post-thumb position-relative border-radius-5">
                                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-4.jpg)">
                                                                <a class="img-link" href="single.html"></a>
                                                            </div>
                                                            <ul class="social-share">
                                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 align-self-center">
                                                        <div class="post-content">
                                                            <div class="entry-meta meta-0 font-small mb-10">
                                                                <a href="category.html"><span class="post-cat text-success">Cooking</span></a>
                                                            </div>
                                                            <h5 class="post-title font-weight-900 mb-20">
                                                                <a href="single.html">10 Easy Ways to Be Environmentally Conscious At Home</a>
                                                            </h5>
                                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                                <span class="post-on">27 Sep</span>
                                                                <span class="time-reading has-dot">10 mins read</span>
                                                                <span class="post-by has-dot">22k views</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--More posts-->
                                <div class="single-more-articles border-radius-5">
                                    <div class="widget-header-2 position-relative mb-30">
                                        <h5 class="mt-5 mb-30">You might be interested in</h5>
                                        <button class="single-more-articles-close"><i class="elegant-icon icon_close"></i></button>
                                    </div>
                                    <div class="post-block-list post-module-1 post-module-5">
                                        <ul class="list-post">
                                            @foreach($images as $img3)
                                            <li class="mb-30">
                                                <div class="d-flex hover-up-2 transition-normal">
                                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                        <a class="color-white" href="{{route('visitor.details',[$img3->id])}}">
                                                            @php
                                                            $photo = DB::table('photos')->select('photos.photo')->where('photo_id','=',$img3->id)->latest()->first();
                                                            // $StatusName = DB::table('ci_order_status')->where('status_id', $row->status_id)->first();
                                                            @endphp
                                                            <img src="{{asset('photos')}}/{{$photo->photo}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-15 text-limit-2-row font-medium">  <a href="{{route('visitor.details',[$img3->id])}}">{{$img3->heading}}</a></h6>
                                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                            <span class="post-on">{{date('d-m-Y  H:m:s', strtotime($img3->updated_at))}}</span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                <!--Comments-->
                                {{-- <div class="comments-area">
                                    <div class="widget-header-2 position-relative mb-30">
                                        <h5 class="mt-5 mb-30">Comments</h5>
                                    </div>
                                    <div class="comment-list wow fadeIn animated">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="assets/imgs/authors/author-4.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <p class="comment">
                                                        Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim ante quis metus. Duis porta ornare nulla ut bibendum
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <h5>
                                                                <a href="#">Rosie</a>
                                                            </h5>
                                                            <p class="date">6 minutes ago </p>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <a href="#" class="btn-reply">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list wow fadeIn animated">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="assets/imgs/authors/author-2.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <p class="comment">
                                                        Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <h5>
                                                                <a href="#">Agatha Christie</a>
                                                            </h5>
                                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <a href="#" class="btn-reply">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-comment depth-2 justify-content-between d-flex mt-50">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="assets/imgs/authors/author.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <p class="comment">
                                                        Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <h5>
                                                                <a href="#">Steven</a>
                                                            </h5>
                                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <a href="#" class="btn-reply">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list wow fadeIn animated">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="assets/imgs/authors/author-3.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <p class="comment">
                                                        Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <h5>
                                                                <a href="#">Danielle Steel</a>
                                                            </h5>
                                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <a href="#" class="btn-reply">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--comment form-->
                                {{-- <div class="comment-form wow fadeIn animated">
                                    <div class="widget-header-2 position-relative mb-30">
                                        <h5 class="mt-5 mb-30">Leave a Reply</h5>
                                    </div>
                                    <form class="form-contact comment_form" action="#" id="commentForm">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn button button-contactForm">Post Comment</button>
                                        </div>
                                    </form>
                                </div> --}}
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            {{-- <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                                <img class="about-author-img mb-25" src="assets/imgs/authors/author.jpg" alt="">
                                <h5 class="mb-20">Hello, I'm Steven</h5>
                                <p class="font-medium text-muted">Hi, I’m Stenven, a Florida native, who left my career in corporate wealth management six years ago to embark on a summer of soul searching that would change the course of my life forever.</p>
                                <strong>Follow me: </strong>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div> --}}
                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">latest posts</h5>
                                </div>
                                <div class="post-block-list post-module-1">
                                    <ul class="list-post">

                                        @foreach($images as $img2)
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                        <a href="{{route('visitor.details',[$img2->id])}}">{{$img2->heading}}</a>
                                                    </h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">{{date('d-m-Y   H:m:s', strtotime($img2->updated_at))}}</span>

                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    @php
                                                    $photo = DB::table('photos')->select('photos.photo')->where('photo_id','=',$img2->id)->latest()->first();
                                                    // $StatusName = DB::table('ci_order_status')->where('status_id', $row->status_id)->first();
                                                    @endphp
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{asset('photos')}}/{{$photo->photo}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Latest videos</h5>
                                </div>
                                <div class="post-block-list post-module-2">
                                    <ul class="list-post">

                                        @foreach($video as $vid)
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                                        <a href="{{route('visitor.detailsvideos',[$vid->id])}}">{{$vid->heading}}</a>
                                                    </h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">{{date('d-m-Y   H:m:s', strtotime($vid->updated_at))}}</span>

                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">

                                                    <a class="color-white" href="{{route('visitor.detailsvideos',[$vid->id])}}">
                                                        <img src="{{asset('titlephoto')}}/{{$vid->title_photo}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Instagram</h5>
                                </div>
                                <div class="instagram-gellay">
                                    <ul class="insta-feed">
                                        <li>
                                            <a href="assets/imgs/thumbnail-3.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="assets/imgs/thumbnail-4.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="assets/imgs/thumbnail-5.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="assets/imgs/thumbnail-3.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-4.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="assets/imgs/thumbnail-4.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-5.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="assets/imgs/thumbnail-5.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-6.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
@endsection
