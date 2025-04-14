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
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Product <span>Detail</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Name</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!--Product Page Start-->
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-3 p-0">
                    <img class="mb-2"
                        src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product_images/502470085_16mm Rubber Balls 1.jpg"
                        alt="">
                    <img class="mb-2"
                        src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product_images/502470085_16mm Rubber Balls 1.jpg"
                        alt="">
                    <img class="mb-2"
                        src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product_images/502470085_16mm Rubber Balls 1.jpg"
                        alt="">
                </div>
                <div class="col-9">
                    <img style="height: 100%;object-fit:cover"
                        src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/product_images/502470085_16mm Rubber Balls 1.jpg"
                        alt="">
                </div>

            </div>



        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-between">
                <h2>16mm Sieve Cleaning</h2>
                <span class="product-tag">Category Name</span>
            </div>


            <hr>
            <div class="product-details">
                <div class="row">
                    <div class="col-6">
                        <h5>MATERIAL</h5>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li> Natural Rubber (NR)</li>
                            <li> Styrene Butadiene Rubber (SBR)</li>
                            <li>Polybutadiene Rubber (SBR)</li>
                            <li>Ethylene Propylene (EPDM)</li>
                            <li>Silicon</li>
                            <li>Viton</li>
                            <li>Neoprene</li>
                            <li>Nitrile Rubber (NBR)</li>
                        </ul>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <h5>WORKING TEMPRATURE RANGE</h5>
                    </div>
                    <div class="col-6">
                        <p>-13°F UPTO 392°F</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <h5>SHAPE</h5>
                    </div>
                    <div class="col-6">
                        <p>SPHERICAL</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <h5>APPLICATION</h5>
                    </div>
                    <div class="col-6">
                        <p>SCREENING,SIEVING,SORTING,CLEANING</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <h5>WEIGHT IN GRM.</h5>
                    </div>
                    <div class="col-6">
                        <p>2.3g</p>
                    </div>

                </div>
            </div>
            <hr>
            <div class="product-enquiry">
                <a href="javascript:void(0)" class="btn-default"><span>Enquire Now</span></a>
            </div>
        </div>
    </div>
</div>

<!--Product Page End-->

@endsection