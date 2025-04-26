@extends('frontend.layouts.app')
@push('title')
gallery

@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Know us <span>More</span></h1>
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

<!-- Page Blog Start -->

<div class="page-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-5">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">latest blog</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Insights from our <span>latest blogs</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-7">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>Explore innovations, compliance, and performance in rubber manufacturing for food and industrial
                        applications.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure>
                            <a href="/single" class="image-anime" data-cursor-text="View">
                                <img src="{{asset('images/fda.jpeg')}}" alt="">
                            </a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="blog-single.html">Importance of FDA-Compliant Rubber Components in Food
                                    Processing</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Readmore Button Start -->
                        <div class="post-readmore-btn">
                            <a href="/single">Read more</a>
                        </div>
                        <!-- Post Readmore Button End -->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>



            <div class="col-lg-12 d-none">
                <!-- Page Pagination Start -->
                <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- Page Pagination End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Blog End -->


<!-- Photo Gallery Section Start -->
<div class="page-gallery">
    <div class="container">
        <!-- gallery section start -->
        <div class="row gallery-items page-gallery-box">
            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                    <a
                        href="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/Rubtech-front-view.png">
                        <figure class="image-anime">
                            <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/Rubtech-front-view.png"
                                alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.2s" data-cursor-text="View">
                    <a href="images/gallery-2.jpg">
                        <figure class="image-anime">
                            <img src="https://html.awaikenthemes.com/toplax/images/gallery-2.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.4s" data-cursor-text="View">
                    <a href="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/Acilis007.png">
                        <figure class="image-anime">
                            <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/Acilis007.png"
                                alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.6s" data-cursor-text="View">
                    <a href="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/Acilis099.png">
                        <figure class="image-anime">
                            <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/Acilis099.png"
                                alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.8s" data-cursor-text="View">
                    <a href="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/BURK0937.png">
                        <figure class="image-anime">
                            <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/BURK0937.png"
                                alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1s" data-cursor-text="View">
                    <a href="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/BURK0943.png">
                        <figure class="image-anime">
                            <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/BURK0943.png"
                                alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.2s" data-cursor-text="View">
                    <a href="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/IMG_1047.png">
                        <figure class="image-anime">
                            <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/IMG_1047.png"
                                alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.4s" data-cursor-text="View">
                    <a
                        href="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/Rubtech-image1.png">
                        <figure class="image-anime">
                            <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/Rubtech-image1.png"
                                alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.6s" data-cursor-text="View">
                    <a href="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/BURK0943.png">
                        <figure class="image-anime">
                            <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/imagegallery/BURK0943.png"
                                alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>
        </div>
        <!-- gallery section end -->
    </div>
</div>
<!-- Photo Gallery Section End -->

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
                            <img src="images/our-faqs-image.jpg" alt="">
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