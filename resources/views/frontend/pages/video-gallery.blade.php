@extends('frontend.layouts.app')
@push('title')
Video gallery

@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Video <span>Gallery</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">video gallery</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Photo Gallery Section Start -->
<div class="page-gallery">
    <div class="container">
        <!-- gallery section start -->
        <div class="page-video-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- image gallery start -->
                        <div class="video-gallery-image wow fadeInUp" data-cursor-text="Play"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                                <figure>
                                    <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/BURK0943.png"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- image gallery end -->
                    </div>



                </div>
            </div>
        </div>
        <!-- gallery section end -->
    </div>
</div>
<!-- Photo Gallery Section End -->


@endsection