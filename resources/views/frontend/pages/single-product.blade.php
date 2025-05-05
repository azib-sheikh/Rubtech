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
                <h2>{{$product->title}}</h2>
                <span class="product-tag">Category Name</span>
            </div>


            <hr>
            <div class="product-details">
                {!!$product->content!!}
            </div>
            <hr>
            <div class="product-enquiry">
                <a href="javascript:void(0)" class="btn-default"><span>Enquire Now</span></a>
            </div>
        </div>
    </div>
</div>
<div class="container pb-5 pt-3">
<ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Comparative Study</button>
  </li>
  
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">{!!$product->description!!}</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">{!!$product->compararison!!}</div>
 
</div>
</div>
<!--Product Page End-->

@endsection