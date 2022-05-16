@extends('visitor.layout.master')
@section('content')

<!-- Start Main content -->
<main  class="bg-grey pb-30">
    <div class="container pt-30">
        <div class="featured-slider-3 position-relative">
            <div class="slider-3-arrow-cover"></div>
            <div class="featured-slider-3-items">
                {{--slider 1 --}}
                @if(count($images)>=0)
                <div class="slider-single overflow-hidden border-radius-10">
                    <div class="post-thumb position-relative">
                        <div class="thumb-overlay position-relative" style="background-image: url('')">
                            <div class="post-content-overlay">
                                <div class="container">
                                    <div class="entry-meta meta-0 font-small mb-20">
                                        <a href="category.html" tabindex="0"><span class="post-cat text-info text-uppercase">Travel</span></a>
                                        <a href="category.html" tabindex="0"><span class="post-cat text-warning text-uppercase">Animal</span></a>
                                    </div>
                                    <h1 class="post-title mb-20 font-weight-900 text-white">
                                        <a class="text-white" href="#" tabindex="0">No Image</a>
                                    </h1>
                                    <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                        <span class="post-on"></span>
                                        {{-- <span class="hit-count has-dot">18k Views</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                @foreach($sliders as $sli)
                <div class="slider-single overflow-hidden border-radius-10">
                    <div class="post-thumb position-relative">
                        <div class="thumb-overlay position-relative" style="background-image: url('{{asset('sliderdoc')}}/{{$sli->document}}')">
                            <div class="post-content-overlay">
                                <div class="container">
                                    <div class="entry-meta meta-0 font-small mb-20">
                                        <a href="category.html" tabindex="0"><span class="post-cat text-info text-uppercase">Travel</span></a>
                                        <a href="category.html" tabindex="0"><span class="post-cat text-warning text-uppercase">Animal</span></a>
                                    </div>
                                    <h1 class="post-title mb-20 font-weight-900 text-white">
                                        <a class="text-white" href="#" tabindex="0">{{$sli->name}}</a>
                                    </h1>
                                    <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                        <span class="post-on">{{date('d-m-Y   H:m:s', strtotime($sli->updated_at))}}</span>
                                        {{-- <span class="hit-count has-dot">18k Views</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                {{-- slider 2 --}}
                {{-- @for ($i=1;$i<=1;$i++)
                <div class="slider-single overflow-hidden border-radius-10">
                    <div class="post-thumb position-relative">
                        <div class="thumb-overlay position-relative" style="background-image: url('{{asset('sliderdoc')}}/{{$sliders[$i]->document}}')">
                            <div class="post-content-overlay">
                                <div class="container">
                                    <div class="entry-meta meta-0 font-small mb-20">
                                        <a href="category.html" tabindex="0"><span class="post-cat text-info text-uppercase">Lifestyle</span></a>
                                        <a href="category.html" tabindex="0"><span class="post-cat text-warning text-uppercase">Destinations</span></a>
                                    </div>
                                    <h1 class="post-title mb-20 font-weight-900 text-white">
                                        <a class="text-white" href="#" tabindex="0">{{$sliders[$i]->name}}</a>
                                    </h1>
                                    <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                        <span class="post-on">{{date('d-m-Y   H:m:s', strtotime($sliders[$i]->updated_at))}}</span>
                                        {{-- <span class="hit-count has-dot">23k Views</span> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor --}} 
 
            </div>
        </div>
    </div>
    <!-- End feature -->
    <div class="container">
        <div class="hot-tags pt-30 pb-30 font-small align-self-center">
            <div class="widget-header-3">
                <div class="row align-self-center">
                    <div class="col-md-4 align-self-center">
                        <h5 class="widget-title">Featured posts</h5>
                    </div>
                    <div class="col-md-8 text-md-right font-small align-self-center">
                        <p class="d-inline-block mr-5 mb-0"><i class="elegant-icon  icon_tag_alt mr-5 text-muted"></i>Hot tags:</p>
                        <ul class="list-inline d-inline-block tags">
                            <li class="list-inline-item"><a href="#"># Covid-19</a></li>
                            <li class="list-inline-item"><a href="#"># Inspiration</a></li>
                            <li class="list-inline-item"><a href="#"># Work online</a></li>
                            <li class="list-inline-item"><a href="#"># Stay home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="loop-grid mb-30">
            <div class="row">
                @foreach($images as $img)
                <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                    <div class="post-card-1 border-radius-10 hover-up">

                                @php
                                $photo = DB::table('photos')->select('photos.photo')->where('photo_id','=',$img->id)->latest()->first();
                                // $StatusName = DB::table('ci_order_status')->where('status_id', $row->status_id)->first();
                                @endphp

                                    <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url('{{asset('photos')}}/{{$photo->photo}}')">
                                {{-- @endif --}}


                            <a class="img-link" href="#"></a>
                            <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html"><span class="post-cat text-info">Travel</span></a>
                                <a href="category.html"><span class="post-cat text-success">Food</span></a>
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a href="{{route('visitor.details',[$img->id])}}">{{$img->heading}}</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">{{date('d-m-Y   H:m:s', strtotime($img->updated_at))}}</span>
                                    {{-- <span class="time-reading has-dot">12 mins read</span>
                                    <span class="post-by has-dot">23k views</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </article>
                @endforeach

                {{-- <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-7.jpg)">
                            <a class="img-link" href="#"></a>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html"><span class="post-cat text-warning">Fashion</span></a>
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a href="#">Put Yourself in Your Customers Shoes</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">17 July</span>
                                    <span class="time-reading has-dot">8 mins read</span>
                                    <span class="post-by has-dot">12k views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article> --}}
                {{-- <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-9.jpg)">
                            <a class="img-link" href="#"></a>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a href="#">Life and Death in the Empire of the Tiger</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">7 August</span>
                                    <span class="time-reading has-dot">15 mins read</span>
                                    <span class="post-by has-dot">500 views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article> --}}
                {{-- <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                    <div class="post-card-1 border-radius-10 hover-up">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-11.jpg)">
                            <a class="img-link" href="#"></a>
                            <span class="top-right-icon bg-info"><i class="elegant-icon icon_headphones"></i></span>
                            <ul class="social-share">
                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-content p-30">
                            <div class="entry-meta meta-0 font-small mb-10">
                                <a href="category.html"><span class="post-cat text-success">Lifestyle</span></a>
                            </div>
                            <div class="d-flex post-card-content">
                                <h5 class="post-title mb-20 font-weight-900">
                                    <a href="#">When Two Wheels Are Better Than Four</a>
                                </h5>
                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                    <span class="post-on">15 Jun</span>
                                    <span class="time-reading has-dot">9 mins read</span>
                                    <span class="post-by has-dot">1.2k views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article> --}}
            </div>
            <div class="pagination-area mb-30 wow fadeInUp animated">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        {{-- <li class="page-item "><a class="page-link" href="#" style="background: #007bff; text-color:#fff;">More</a></li> --}}
                        <li class="page-item"><a class="page-link" href="#" style="background-color:#007bff;color:#fff;">More</a></li>
                        {{-- <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li> --}}
                        {{-- <li class="page-item active"><a class="page-link" href="#">More</a></li> --}}
                        <li class="page-item"><a class="page-link" href="{{route('postdetails')}}"><i class="elegant-icon arrow_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-grey pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-module-2">
                        <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                            <h5 class="mt-5 mb-30">Travel tips</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                @foreach($video as $v)

                                <article class="col-md-4 mb-40 wow fadeInUp  animated">
                                    <div class="post-card-1 border-radius-10 hover-up">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url('{{asset('titlephoto')}}/{{$v->title_photo}}')">
                                            <a class="img-link" href="#"></a>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_instagram"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content p-30">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="category.html"><span class="post-cat text-info">Artists</span></a>
                                                <a href="category.html"><span class="post-cat text-success">Film</span></a>
                                            </div>
                                            <div class="d-flex post-card-content">
                                                <h5 class="post-title mb-20 font-weight-900">
                                                    <a href="{{route('visitor.detailsvideos',[$v->id])}}">{{$v->heading}}</a>
                                                </h5>
                                                <div class="post-excerpt mb-25 font-small text
                                                -muted">
                                                    <p>{{Str::limit($v->description,180)}}</p>
                                                </div>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{date('d-m-Y   H:m:s', strtotime($v->updated_at))}}</span>
                                                    {{-- <span class="time-reading has-dot">12 mins read</span>
                                                    <span class="post-by has-dot">23k views</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    {{-- <div class="post-module-3">
                        <div class="widget-header-1 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Latest posts</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-13.jpg)">
                                                <a class="img-link" href="#"></a>
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
                                                <a href="#">Helpful Tips for Working from Home as a Freelancer</a>
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
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-4.jpg)">
                                                <a class="img-link" href="#"></a>
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
                                                <a href="#">10 Easy Ways to Be Environmentally Conscious At Home</a>
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
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-2.jpg)">
                                                <a class="img-link" href="#"></a>
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
                                                <a href="category.html"><span class="post-cat text-warning">Cooking</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="#">My Favorite Comfies to Lounge in At Home</a>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">7 August</span>
                                                <span class="time-reading has-dot">9 mins read</span>
                                                <span class="post-by has-dot">12k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-3.jpg)">
                                                <a class="img-link" href="#"></a>
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
                                                <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="#">How to Give Your Space a Parisian-Inspired Makeover</a>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">27 August</span>
                                                <span class="time-reading has-dot">12 mins read</span>
                                                <span class="post-by has-dot">23k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div> --}}
                    <div class="pagination-area mb-30 wow fadeInUp animated">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                {{-- <li class="page-item "><a class="page-link" href="#" style="background: #007bff; text-color:#fff;">More</a></li> --}}
                                <li class="page-item"><a class="page-link" href="#" style="background-color:#007bff;color:#fff;">More</a></li>
                                {{-- <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li> --}}
                                {{-- <li class="page-item active"><a class="page-link" href="#">More</a></li> --}}
                                <li class="page-item"><a class="page-link" href="{{route('allvideos')}}"><i class="elegant-icon arrow_right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                            <img class="about-author-img mb-25" src="assets/imgs/authors/author.jpg" alt="">
                            <h5 class="mb-20">Hello, I'm Steven</h5>
                            <p class="font-medium text-muted">Hi, I’m Stenven, a Florida native, who left my career in corporate wealth management six years ago to embark on a summer of soul searching that would change the course of my life forever.</p>
                            <strong>Follow me: </strong>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Most popular</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">Spending Some Quality Time with Kids? It’s Possible</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">05 August</span>
                                                    <span class="post-by has-dot">150 views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="#">
                                                    <img src="assets/imgs/news/thumb-6.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">Relationship Podcasts are Having “That” Talk</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">12 August</span>
                                                    <span class="post-by has-dot">6k views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="#">
                                                    <img src="assets/imgs/news/thumb-7.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">Here’s How to Get the Best Sleep at Night</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">15 August</span>
                                                    <span class="post-by has-dot">16k views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="#">
                                                    <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=" wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">America’s Governors Get Tested for a Virus That Is Testing Them</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">12 August</span>
                                                    <span class="post-by has-dot">3k views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="#">
                                                    <img src="assets/imgs/news/thumb-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Last comments</h5>
                            </div>
                            <div class="post-block-list post-module-2">
                                <ul class="list-post">
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="#">
                                                    <img src="assets/imgs/authors/author-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <p class="mb-10"><a href="author.html"><strong>David</strong></a>
                                                    <span class="ml-15 font-small text-muted has-dot">16 Jan 2020</span>
                                                </p>
                                                <p class="text-muted font-small">A writer is someone for whom writing is more difficult than...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="#">
                                                    <img src="assets/imgs/authors/author-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <p class="mb-10"><a href="author.html"><strong>Kokawa</strong></a>
                                                    <span class="ml-15 font-small text-muted has-dot">12 Feb 2020</span>
                                                </p>
                                                <p class="text-muted font-small">Striking pewter studded epaulettes silver zips</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="#">
                                                    <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <p class="mb-10"><a href="author.html"><strong>Tsukasi</strong></a>
                                                    <span class="ml-15 font-small text-muted has-dot">18 May 2020</span>
                                                </p>
                                                <p class="text-muted font-small">Workwear bow detailing a slingback buckle strap</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_instagram wow fadeInUp animated">
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
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->
<!--site-bottom-->
<div class="site-bottom pt-50 pb-50">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Destinations</h5>
                    </div>
                    <div class="post-block-list post-module-1">
                        <ul class="list-post">
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="#">
                                            <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">The Best Time to Travel to Cambodia</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">27 Jan</span>
                                            <span class="post-by has-dot">13k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="#">
                                            <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">20 Photos to Inspire You to Visit Cambodia</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">27 August</span>
                                            <span class="post-by has-dot">14k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="#">
                                            <img src="assets/imgs/news/thumb-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">Epic Arts Cambodia: Charity for the Disabled</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">29 August</span>
                                            <span class="post-by has-dot">23k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Lifestyle</h5>
                    </div>
                    <div class="post-block-list post-module-1">
                        <ul class="list-post">
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="#">
                                            <img src="assets/imgs/news/thumb-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">10 Ways to De-Stress Your Day Hour by Hour</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">12 August</span>
                                            <span class="post-by has-dot">3k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="#">
                                            <img src="assets/imgs/news/thumb-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">134 Free Weekly Meal Planner Printable</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">15 August</span>
                                            <span class="post-by has-dot">4.1k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="#">
                                            <img src="assets/imgs/news/thumb-6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">Free Printable Stickers for Your Bullet Journal</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">16 August</span>
                                            <span class="post-by has-dot">2.2k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Photography</h5>
                    </div>
                    <div class="post-block-list post-module-1">
                        <ul class="list-post">
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="#">
                                            <img src="assets/imgs/news/thumb-7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">Which TBA Preset Pack is Right For You?</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">06 May</span>
                                            <span class="post-by has-dot">23k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="#">
                                            <img src="assets/imgs/news/thumb-8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">How to Get Amazing Photos at the Pyramids of Giza</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">05 Jun</span>
                                            <span class="post-by has-dot">5k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="#">
                                            <img src="assets/imgs/news/thumb-9.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="#">Beginner’s Guide to Travel Drone Photography</a></h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on">08 August</span>
                                            <span class="post-by has-dot">2k views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="sidebar-widget widget-latest-posts mb-30 mt-20 wow fadeInUp animated">
            <div class="widget-header-2 position-relative mb-30">
                <h5 class="mt-5 mb-30">Categories</h5>
            </div>
            <div class="carausel-3-columns">
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="#">
                            <img src="assets/imgs/news/news-16.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6> <a href="category.html">Travel Tips</a> </h6>
                        <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="#">
                            <img src="assets/imgs/news/news-17.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6><a href="category.html">Lifestyle</a></h6>
                        <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="#">
                            <img src="assets/imgs/news/news-18.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6><a href="category.html">Foody</a></h6>
                        <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="#">
                            <img src="assets/imgs/news/news-19.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6><a href="category.html">Entertaiment</a></h6>
                        <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container-->
</div>
<!--end site-bottom-->

@endsection
