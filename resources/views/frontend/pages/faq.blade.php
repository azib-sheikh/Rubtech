@extends('frontend.layouts.app')
@push('title')
Faqs

@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Frequently Asked <span>Questions</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Know us more</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->



<!-- Our Faqs Section Start -->
<div class="our-faqs">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-5">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">FAQs</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Frequently asked <span>questions</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-7">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="faqs.html" class="btn-default"><span>Contact us</span></a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Faqs Images Start -->
                <div class="our-faqs-images">
                    <!-- Our Faqs Image Start -->
                    <div class="our-faqs-img">
                        <figure class="image-anime">
                            <img src="{{asset('images/faq.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Our Faqs Image End -->

                    <!-- Faqs Image Cta Box Start -->
                    <div class="faqs-img-cta-box">
                        <ul>
                            <li><a href="#"><img src="images/icon-phone-accent.svg" alt=""> +91 1236547890</a></li>
                            <li><a href="#"><img src="images/icon-mail-accent.svg" alt=""> info@domainname.com</a></li>
                        </ul>
                    </div>
                    <!-- Faqs Image Cta Box End -->
                </div>
                <!-- Our Faqs Images End -->
            </div>

            <div class="col-lg-6">
                <div class="our-faq-section">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="faqaccordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What industries do you serve?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We implement rigorous quality control measures at every stage of production,
                                        ensuring consistency and high standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How do you ensure product quality?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We implement rigorous quality control measures at every stage of production,
                                        ensuring consistency and high standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    What sustainability practices do you follow?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We implement rigorous quality control measures at every stage of production,
                                        ensuring consistency and high standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Do you offer customized solutions?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We implement rigorous quality control measures at every stage of production,
                                        ensuring consistency and high standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    How do you handle safety in the workplace?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We implement rigorous quality control measures at every stage of production,
                                        ensuring consistency and high standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Faqs Section End -->




@endsection