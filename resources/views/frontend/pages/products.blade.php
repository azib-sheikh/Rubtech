@extends('frontend.layouts.app')
@push('title')
Our Products

@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header products parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>products</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">products</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Our Work Section Start -->
<div class="page-projects">
    <div class="container">
        <div class="row">


            <div class="col-lg-12">
                <!-- Project Item Boxes start -->
                <div class="row project-item-boxes align-items-center">
                    <div class="col-md-3 project-item-box manufacturing automation">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/products/BarrelshapeRubberBall.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag d-none">
                                <a href="/single-product">manufacturing</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="/single-product">BARREL SHAPE RUBBER CLEANER</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-3 project-item-box automation sustainability development">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/products/16mmRubberBalls.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag d-none">
                                <a href="/single-product">automation</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="/single-product">16MM SIEVE CLEANING</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-3 project-item-box sustainability infrastructure">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/products/28mmRubberBalls.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag d-none">
                                <a href="/single-product">automation</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="/single-product">24MM SIEVE CLEANING RUBBER BALLS</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-3 project-item-box manufacturing development">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/products/65mmRubberBalls.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag d-none">
                                <a href="/single-product">development</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="/single-product">25MM SIEVE CLEANING RUBBER BALLS</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                </div>
                <!-- Project Item Boxes End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Work Section End -->
@endsection