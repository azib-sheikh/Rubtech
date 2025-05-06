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
                    @foreach($products as $product)
                    <div class="product-image col-md-3 project-item-box mb-4 ">
                        <a href="{{url('/products/')}}/{{ strtolower($product->title) }}">
                           
                            <figure class="image-anime">
                                <img src="{{asset('images/products/seivecleaningball.jpg')}}" alt="">
                            </figure>

                            <div class="product-title">
                                {{$product->title}}
                            </div>
                        </a>
                    </div>
                    @endforeach
                   






                </div>
                <!-- Project Item Boxes End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Work Section End -->
@endsection