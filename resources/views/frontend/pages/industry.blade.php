@extends('frontend.layouts.app')
@push('title')
Industry we serve
@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header industries parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Industries <span>we serve</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">industries we serve</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="col-lg-12 d-none">
                <!-- Choose Our Project Nav start -->
                <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
                    <ul class="justify-content-start">
                        <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                        <li><a href="#" data-filter=".flour">Flour</a></li>
                        <li><a href="#" data-filter=".mineral">Mineral</a></li>
                        <li><a href="#" data-filter=".oil">Edible Oil</a></li>
                        <li><a href="#" data-filter=".cement">Cement & Mortar</a></li>
                        <li><a href="#" data-filter=".pharma">Pharmaceuticals</a></li>
                        <li><a href="#" data-filter=".salt">Salt</a></li>

                        <li><a href="#" data-filter=".sugar">Sugar</a></li>
                        <li><a href="#" data-filter=".rice">Rice Milling</a></li>
                        <li><a href="#" data-filter=".cereal">Cereal</a></li>
                        <li><a href="#" data-filter=".coffee">Coffee</a></li>
                        <li><a href="#" data-filter=".guargum">Guar Gum</a></li>
                        <li><a href="#" data-filter=".malt">Malt</a></li>
                        <li><a href="#" data-filter=".millet">Millet</a></li>
                        <li><a href="#" data-filter=".powder">Powder</a></li>
                        <li><a href="#" data-filter=".spices">Spices</a></li>
                    </ul>
                </div>
                <!-- Choose Our Project Nav End -->
            </div>

            <div class="col-lg-12">
                <!-- Project Item Boxes start -->
                <div class="row project-item-boxes align-items-center">


                    <div class="col-md-6 project-item-box flour">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/flour.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Flour</a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box mineral">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/mining.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Mineral</a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box oil">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/oil.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Edible Oil</a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box cement">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/CEMENT.png')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Cement & Mortar </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box pharma">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/malt.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Pharmaceuticals </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box salt">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/salt.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Salt </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box sugar">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/sugar.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Sugar</a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box rice">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/rice-milling.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Rice Milling </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box cereal">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/cereal.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Cereal </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box coffee">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/coffe.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Coffee</a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box guargum">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/guar-gum.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Guar Gum </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box malt">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/malt.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Malt </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>
                    <div class="col-md-6 project-item-box millet">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/flour-2.png')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Millet </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box powder">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/powder.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Powder </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>
                    <div class="col-md-6 project-item-box spices">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{asset('images/industry/spices.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="/single-industry">Spices </a>
                            </div>


                        </div>
                        <!-- Project Item End -->
                    </div>
                </div>
                <!-- Project Item Boxes End -->
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Service Sidebar Start -->
            <div class="service-sidebar me-0 ms-4">
                <!-- Service Category List Start -->
                <div class="service-catagery-list wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <h3>Our Most Demanding Product</h3>
                    <div class="p-3">
                        <div class="row mb-2">
                            <div class="col-4">
                                <img class="img-fluid w-100"
                                    src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product/638288177_96 Anti Vibration Mount 2.jpg"
                                    alt="">
                            </div>
                            <div class="col-8">96x96mm Anti Vibration Mount</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <img class="img-fluid w-100"
                                    src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product/638288177_96 Anti Vibration Mount 2.jpg"
                                    alt="">
                            </div>
                            <div class="col-8">96x96mm Anti Vibration Mount</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <img class="img-fluid w-100"
                                    src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product/638288177_96 Anti Vibration Mount 2.jpg"
                                    alt="">
                            </div>
                            <div class="col-8">96x96mm Anti Vibration Mount</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <img class="img-fluid w-100"
                                    src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product/638288177_96 Anti Vibration Mount 2.jpg"
                                    alt="">
                            </div>
                            <div class="col-8">96x96mm Anti Vibration Mount</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <img class="img-fluid w-100"
                                    src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product/638288177_96 Anti Vibration Mount 2.jpg"
                                    alt="">
                            </div>
                            <div class="col-8">96x96mm Anti Vibration Mount</div>
                        </div>

                    </div>
                </div>
                <!-- Service Category List End -->

                <!-- Sidebar CTA Box Start -->
                <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s"
                    style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                    <!-- Sidebar Image Start -->
                    <div class="sidebar-cta-logo">
                        <img src="images/footer-logo.svg" alt="">
                    </div>
                    <!-- Sidebar Image End -->

                    <!-- Sidebar CTA Body Start -->
                    <div class="sidebar-cta-Body">
                        <!-- Sidebar CTA Content Start -->
                        <div class="sidebar-cta-content">
                            <h3>Contact <span>us!</span></h3>
                            <p>Got questions or need assistance with your Industry needs?</p>
                        </div>
                        <!-- Sidebar CTA Content End -->

                        <!-- Sidebar CTA Contact List Start -->
                        <div class="sidebar-cta-contact-list">
                            <!-- Sidebar CTA Contact Item Start -->
                            <div class="sidebar-cta-contact-item">
                                <div class="icon-box">
                                    <i class="fa fa-phone text-white"></i>
                                </div>

                                <div class="cta-contact-item-title">
                                    <h3>+91-9717599905</h3>
                                </div>
                            </div>
                            <!-- Sidebar CTA Contact Item End -->

                            <!-- Sidebar CTA Contact Item Start -->
                            <div class="sidebar-cta-contact-item">
                                <div class="icon-box">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>

                                <div class="cta-contact-item-title">
                                    <h3>enquiry@rubtechmech.in</h3>
                                </div>
                            </div>
                            <!-- Sidebar CTA Contact Item End -->
                        </div>
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




@endsection