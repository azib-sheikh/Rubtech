@extends('frontend.layouts.app')
@push('title')

Importance of FDA-Compliant Rubber Components in Food
Processing
@endpush
@section('content')
<!--pagecode start here-->
<div class="page-single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Post Featured Image Start -->
                <div class="post-image">
                    <figure class="image-anime reveal">
                        <img src="{{asset('storage/'.$blog->img)}}" alt="" >
                    </figure>
                </div>
                <!-- Post Featured Image Start -->

                <!-- Post Single Content Start -->
                <div class="post-content">

                    <!-- Post Entry Start -->

                    <div class="post-entry wow fadeInUp" data-wow-delay="0.8s">
                        {!!$blog->content!!}
                        
                    </div>
                    <!-- Post Entry End -->

                    <!-- Post Tag Links Start -->
                    <div class="post-tag-links">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <!-- Post Tags Start -->
                                <div class="post-tags wow fadeInUp" data-wow-delay="0.5s"
                                    style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                    <span class="tag-links">
                                        Tags:
                                        <a href="#">robotics</a>
                                        <a href="#">manufacturing</a>
                                        <a href="#">production</a>
                                    </span>
                                </div>
                                <!-- Post Tags End -->
                            </div>

                            <div class="col-lg-4">
                                <!-- Post Social Links Start -->
                                <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s"
                                    style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Post Social Links End -->
                            </div>
                        </div>
                    </div>
                    <!-- Post Tag Links End -->
                </div>
                <!-- Post Single Content End -->
            </div>
        </div>
    </div>
</div>

<!--  -pagecode end here -->

@endsection