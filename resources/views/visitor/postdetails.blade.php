@extends('visitor.layout.master')
@section('content')

  <!-- Start Main content -->
  <main>
    <!--archive header-->
    <div class="archive-header pt-50">
        <div class="container">
            <h2 class="font-weight-900">All Posts</h2>
            <div class="breadcrumb">
                <a href="{{'/'}}" rel="nofollow">Home</a>
                <span></span> All Posts
            </div>
            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
        </div>
    </div>
    <div class="pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-3">
                        <div class="loop-list loop-list-style-1">
                            @foreach($images as $img)
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            @php
                                            $photo = DB::table('photos')->select('photos.photo')->where('photo_id','=',$img->id)->latest()->first();
                                            // $StatusName = DB::table('ci_order_status')->where('status_id', $row->status_id)->first();
                                            @endphp
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url('{{asset('photos')}}/{{$photo->photo}}')">
                                                <a class="img-link" href="{{route('visitor.details',[$img->id])}}"></a>
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
                                                <a href="{{route('visitor.details',[$img->id])}}"><span class="post-cat text-primary">Food</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="{{route('visitor.details',[$img->id])}}">{{$img->heading}}</a>
                                                <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">{{date('d-m-Y   H:m:s', strtotime($img->updated_at))}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach

                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="widget-area">

                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Latest Videos</h5>
                            </div>
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
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->
@endsection
