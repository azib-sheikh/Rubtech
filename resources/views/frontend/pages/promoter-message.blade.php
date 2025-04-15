@extends('frontend.layouts.app')
@push('name')
Contact
@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">CEO <span>Message</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ceo message</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="page-team-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- Team Member Sidebar Start -->
                <div class="team-member-sidebar">
                    <!-- Team Member Box Start -->
                    <div class="team-member-box wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-member-image">
                            <figure class="image-anime">
                                <img src="{{asset('images/Daljit-Singh-Sood.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-member-name">
                            <h3>Daljit Singh Sood</h3>
                            <p>Chief Executive Officer</p>
                        </div>
                        <!-- Team Content End -->

                        <!-- Team Social Icon Start -->
                        <div class="team-member-social-list">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icon End -->
                    </div>
                    <!-- Team Member Box End -->

                </div>
                <!-- Team Member Sidebar End -->
            </div>

            <div class="col-lg-8">
                <!-- Team Member Content Start -->
                <div class="team-member-content">
                    <!-- Team Member Info Start -->
                    <div class="team-member-info">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">CEO <span>Message</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">By keeping food sans hazardous substances, I hope
                            to fulfil a dream of mine and contribute in
                            eradication of Cancer.
                            This is my first move towards this direction. Since we are aware of the values held by the
                            industries that we serve, we
                            are working to introduce a significant innovation that will enable these Industries to
                            provide humans with non-toxic &
                            non hazardous substances in food. Our products quality exceed their expectations of the
                            spectrum we serve. we
                            consistently deliver on our commitments, our food grade rubber components are considered
                            exceptional by our customers.To
                            provide you with the most outstanding & exceptional features,rubber products available
                            anywhere in the world, we need
                            your ongoing support. I appreciate all of your advice, comments, and encouragement.</p>

                    </div>
                    <!-- Team Member Info End -->



                    <!-- Page Contact Form Start -->
                    <div class="contact-us-form">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Contact <span>me</span></h2>
                        </div>

                        <div class="contact-form">
                            <!-- Contact Form Start -->
                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                                data-wow-delay="0.5s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname"
                                            placeholder="Enter first name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            placeholder="Enter last name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter your e-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
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
                            <!-- Contact Form End -->
                        </div>
                    </div>
                    <!-- Page Contact Form End -->
                </div>
                <!-- Team Member Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Team Single End -->



@endsection