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
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Research & <span>Development</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Research & Development</li>
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


            <div class="col-lg-8">
                <!-- Team Member Content Start -->
                <div class="team-member-content">
                    <!-- Team Member Info Start -->
                    <div class="team-member-info">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Research & <span>Development</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">We are persistently inspired to incorporate
                            innovations in every facet of our work, as we believe in doing our best to
                            exceed customer expectations. Our commitment to our customers is evident in every component
                            that we manufacture. We have
                            a complete set-up for chemical, physical, and ageing characterization and validation of all
                            types of elastomeric
                            materials, exceeding customer requirements. We have developed a distinctive capability to
                            meet customer standards and
                            targets through committed R&D.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">The facility is equipped with the latest design
                            and validation processes and is staffed by a skilled team of
                            professionals. We use the latest engineering standards developed and standardised over
                            decades of experience. Our target
                            is to achieve and maintain products that are designed and manufactured right the first time.
                            The R&D facility is fully
                            supported to ensure well-coordinated product development while expeditiously meeting
                            customer time lines and product
                            launches.</p>

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
            <div class="col-lg-4">
                <!-- Team Member Sidebar Start -->
                <div class="team-member-sidebar me-0 ms-3 ">
                    <!-- Team Member Box Start -->
                    <div class="team-member-box wow fadeInUp p-2">
                        <!-- Team Image Start -->
                        <div class="team-member-image mb-0">
                            <figure class="image-anime">
                                <img src="{{asset('images/rd.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Team Image End -->

                    </div>
                    <!-- Team Member Box End -->

                </div>
                <!-- Team Member Sidebar End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Team Single End -->



@endsection