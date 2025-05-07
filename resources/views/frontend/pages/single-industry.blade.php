@extends('frontend.layouts.app')
@push('title')
Product
@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Industry<span>We serve</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Industry detail</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="page-project-single">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <!-- Project Single Content Start -->
                <div class="project-single-content">
                    <!-- Project Single Image Start -->
                  @if($industry && $industry->image !== null)
    <div class="project-single-image">
        <figure class="image-anime reveal">
            <img src="{{ asset('storage/' . $industry->image) }}" alt="">
        </figure>
    </div>
@endif

                    <!-- Project Single Image End -->

                    <!-- Project Entry Start -->
                    <div class="project-entry">
                        <!-- Project Info Start -->
                        <div class="project-info">
                            <h2 class="text-anime-style-2">{{$industry->title}}</h2>
                          {!! $industry->content !!}
                        </div>
                        <!-- Project Info End -->

                      



                    </div>
                    <!-- Project Entry End -->


                </div>
            </div>
            <div class="col-lg-4">
                <!-- Service Sidebar Start -->
                <div class="service-sidebar me-0 ms-4">
                    <!-- Service Category List Start -->
                    <div class="service-catagery-list wow fadeInUp"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <h3>Our Most Demanding Product</h3>
                        <div class="p-3">
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img class="img-fluid w-100"
                                        src="{{asset('images/products/antivibrationmount.jpg')}}" alt="">
                                </div>
                                <div class="col-8">Anti Vibration Mount</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img class="img-fluid w-100"
                                        src="{{asset('images/products/seivecleaningball.jpg')}}" alt="">
                                </div>
                                <div class="col-8">Sieve Cleaning Rubber Balls</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img class="img-fluid w-100" src="{{asset('images/products/rubbbercube.jpg')}}"
                                        alt="">
                                </div>
                                <div class="col-8">Rubber Cube</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img class="img-fluid w-100"
                                        src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product/638288177_96 Anti Vibration Mount 2.jpg"
                                        alt="">
                                </div>
                                <div class="col-8">De-Stoner</div>
                            </div>


                        </div>
                    </div>
                    <!-- Service Category List End -->

                    <!-- Sidebar CTA Box Start -->
                    <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                        <!-- Sidebar Image Start -->
                      
                        <!-- Sidebar Image End -->

                        <!-- Sidebar CTA Body Start -->
                        <div class="sidebar-cta-Body">
                            <!-- Sidebar CTA Content Start -->
                            <div class="sidebar-cta-content">
                                <h3>Get a <span>Quote</span></h3>
                                
                            </div>
                            <!-- Sidebar CTA Content End -->

                            <!-- Sidebar CTA Contact List Start -->
                            <form id="sidebarform" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                                data-wow-delay="0.5s">
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname"
                                            placeholder="Your name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>


                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Your e-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Enter your phone no." required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4"
                                            placeholder="Write Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>submit message</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- Sidebar CTA Contact List End -->
                        </div>
                        <!-- Sidebar CTA Body End -->
                    </div>
                    <!-- Sidebar CTA Box End -->
                </div>
                <!-- Service Sidebar End -->
            </div>
        </div>
    </div>
</div>
@endsection