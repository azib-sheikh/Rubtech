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
                   
                    <div class="product-image col-md-3 project-item-box mb-4 ">
                        <a href="{{url('/category/seive cleaning ball')}}">
                            <div class="product-detail">
                                Sieve Cleaning Rubber Balls, made from high-quality materials such as NR, SBR, PBR,
                                EPDM,
                                Silicon, Viton, Neoprene, and
                                NBR, ensure efficient screening, sieving, sorting, and cleaning with outstanding
                                durability.
                            </div>
                            <figure class="image-anime">
                                <img src="{{asset('images/products/seivecleaningball.jpg')}}" alt="">
                            </figure>

                            <div class="product-title">
                                Sieve Cleaning Rubber Balls
                            </div>
                        </a>
                    </div>
                    <div class="product-image col-md-3 project-item-box mb-4">
                        <a href="{{url('/category/rubber cube')}}">
                            <div class="product-detail">
                                Rubber cube ensures efficient performance in various industries, including edible oil,
                                millet, and salt processing. Its
                                robust construction aids in vibration damping and equipment stability, enhancing
                                operational
                                efficiency.
                            </div>
                            <figure class="image-anime">
                                <img src="{{asset('images/products/rubbbercube.jpg')}}" alt="">
                            </figure>

                            <div class="product-title">
                                Rubber Cube
                            </div>
                        </a>
                    </div>
                    <div class="product-image col-md-3 project-item-box mb-4">
                        <a href="{{url('/category/anti vibration mounts')}}">
                            <div class="product-detail">
                                These Mounts are ideal for use in machinery, compressors, and equipment requiring
                                vibration
                                absorption to enhance
                                operational efficiency and longevity.
                            </div>

                            <figure class="image-anime">
                                <img src="{{asset('images/products/antivibrationmount.jpg')}}" alt="">
                            </figure>

                            <div class="product-title">
                                Anti Vibration Mounts
                            </div>
                        </a>
                    </div>
                    <div class="product-image col-md-3 project-item-box mb-4">
                        <a href="{{url('/category/rubber sleeves')}}">
                            <div class="product-detail">
                                Hollow cylindrical sleeves ideal for lift pipes, viewing glass support, and air-lock
                                systems, ensuring durability and
                                compliance with global safety standards in milling/processing industries.
                            </div>

                            <figure class="image-anime">
                                <img src="{{asset('images/products/rubbersleve.jpg')}}" alt="">
                            </figure>

                            <div class="product-title">
                                Rubber Sleeves
                            </div>
                        </a>
                    </div>
                    <div class="product-image col-md-3 project-item-box mb-4">
                        <a href="{{url('/category/inspection cap')}}">
                            <div class="product-detail">
                                This versatile inspection cap is utilized across various industries, including edible
                                oil,
                                millet, and salt processing,
                                providing access points for inspections, maintenance, or sampling in equipment and
                                storage
                                tanks. ​
                            </div>

                            <figure class="image-anime">
                                <img src="{{asset('images/products/inspectioncap.jpg')}}" alt="">
                            </figure>

                            <div class="product-title">
                                Inspection Cap
                            </div>
                        </a>
                    </div>
                    <div class="product-image col-md-3 project-item-box mb-4">
                        <a href="{{url('/category/rubber rings')}}">
                            <div class="product-detail">
                                RTM Rubber Rings provide durable, versatile sealing for demanding industrial
                                applications,
                                ensuring reliable
                                performance, adaptability, and longevity across a wide range of uses.
                            </div>

                            <figure class="image-anime">
                                <img src="{{asset('images/products/rubberring.jpg')}}" alt="">
                            </figure>

                            <div class="product-title">
                                Rubber Rings
                            </div>
                        </a>
                    </div>
                    <div class="product-image col-md-3 project-item-box mb-4">
                        <a href="{{url('/category/custom prototype')}}">
                            <div class="product-detail">
                                Rubtech Mech delivers precision-engineered custom rubber prototypes, ensuring high
                                performance, durability, and tailored
                                solutions for your unique production needs.
                            </div>

                            <figure class="image-anime">
                                <img src="{{asset('images/products/custom_prototype.jpg')}}" alt="">
                            </figure>

                            <div class="product-title">
                                Custom Prototype
                            </div>
                        </a>
                    </div>






                </div>
                <!-- Project Item Boxes End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Work Section End -->
@endsection