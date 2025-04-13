@extends('frontend.layouts.app')
@push('title')
Home Page
@endpush
@section('content')
<!-- Hero Section Start -->
<div class="hero hero-video">
    <!-- Video Start -->
    <div class="hero-bg-video">
        <!-- Selfhosted Video Start -->
        <!-- <video autoplay muted loop id="myVideo"><source src="https://html.awaikenthemes.com/toplax/images/hero-bg-video.mp4" type="video/mp4"></video> -->
        <video autoplay muted loop id="myVideo">
            <source src="{{asset('/videos/bannervideo.mp4')}}" type="video/mp4">
        </video>

        <!-- Selfhosted Video End -->

        <!-- Youtube Video Start -->
        <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
        <!-- Youtube Video End -->
    </div>
    <!-- Video End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Welcome to Rubtech Mech (INDIA) LLP</h3>
                        <h1 class="text-anime-style-2" data-cursor="-opaque">High-Performance Food Grade <span>Rubber
                                Products Manufacturers in India </span></h1>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in manufacturing FDA-compliant,
                            high-performance rubber components for food applications, ensuring durability, safety, and
                            compliance with global standards.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="/about" class="btn-default"><span>explore more</span></a>
                    </div>
                    <!-- Hero Button End -->
                </div>
                <!-- Hero Content End -->
            </div>

            <div class="col-lg-12">
                <!-- Excellence Innovating List Start -->
                <div class="excellence-innovating-list wow fadeInUp" data-wow-delay="0.6s">
                    <ul>
                        <li>Advanced Manufacturing Solutions</li>
                        <li>Quality Assurance Systems</li>
                        <li>State-of-the-Art Technology</li>
                    </ul>
                </div>
                <!-- Excellence Innovating List End -->
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<!-- About Us Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="about-image">
                    <!-- About Image Start -->
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{asset('/images/h-image-about.jpeg')}}" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- About Image Start -->
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{asset('images/v-image-about.jpeg')}}" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- Company Experience Start -->
                    <div class="company-experience">
                        <div class="company-experience-counter">
                            <h2><span class="counter">25</span>+</h2>
                        </div>
                        <div class="company-experience-content">
                            <p>years of experience</p>
                        </div>
                    </div>
                    <!-- Company Experience End -->
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Engineering Excellence in <span>Food-Grade
                                Rubber Solutions</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">At the core of Rubtech Mech (INDIA) LLP is a
                            dedication to manufacturing high-performance rubber components that meet global food safety
                            regulations and industry standards.</p>
                    </div>
                    <!-- Section Title End -->

                    <div class="about-content-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <!-- About List Btn Box Start -->
                                <div class="about-list-btn">
                                    <!-- About Content List Start -->
                                    <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li><b>Certified Quality & Compliance - </b>ISO 9001:2015 & GMP certified,
                                                compliant with US FDA 21 CFR 177.2600, EU EN 2002R0178, and JA9104 Japan
                                                Regulations. </li>
                                            <li><b>Precision Engineering - </b>Expertly crafted rubber components
                                                designed for durability, efficiency, and extra-long service life.</li>
                                            <li><b>Innovative Material Science - </b>Advanced rubber compound
                                                development ensuring superior performance and regulatory adherence.</li>
                                            <li><b>Global Manufacturing Standards - </b>Supplying Tier 1 OEMs in the US
                                                and Europe with high-quality, food-safe rubber solutions.</li>
                                        </ul>
                                    </div>
                                    <!-- About Content List End -->

                                    <!-- About Content Btn Start -->
                                    <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                        <a href="/about" class="btn-default"><span>learn more</span></a>
                                    </div>
                                    <!-- About Content Btn End -->
                                </div>
                                <!-- About List Btn Box End -->
                            </div>

                            {{-- <div class="col-md-6">
                                <!-- About Content Counter Start -->
                                <div class="genuine-rating-counter">
                                    <!-- About Counter Item Start -->
                                    <div class="about-counter-item">
                                        <div class="about-counter">
                                            <h2><span class="counter">4.9</span></h2>
                                        </div>
                                        <div class="genuine-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="genuine-rating-counter-content">
                                            <p>15.5K genuine rating</p>
                                        </div>
                                    </div>
                                    <!-- About Counter Item End -->
                                </div>
                                <!-- About Content Counter End -->
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->

<!-- Our Service Start -->
<div class="our-services parallaxie">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title dark-section">
                    <h3 class="wow fadeInUp">Our Products</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">High-Performance Rubber Items Manufacturer in
                        india <span>for Food & Milling Industries</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
                    <p>We manufacture a wide range of food-grade rubber components designed for superior durability,
                        compliance, and efficiency. Our products cater to the stringent requirements of global
                        industries, ensuring high performance and long service life.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Service End -->

<!-- Our Service List Start -->
<div class="our-services-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Services List Box Start -->
                <div class="services-list-box">
                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{asset('/images/icons/sieve_cleaning_rubber_ball.png')}}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Sieve Cleaning Rubber Ball</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="https://html.awaikenthemes.com/toplax/images/arrow-dark.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{asset('/images/icons/rubber_cube.png')}}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Rubber Cube</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="https://html.awaikenthemes.com/toplax/images/arrow-dark.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{asset('/images/icons/anti_vibration_mount.png')}}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Anti Vibration Mounts</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="https://html.awaikenthemes.com/toplax/images/arrow-dark.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{asset('/images/icons/rubber_sleve.png')}}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Rubber Sleeve</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="https://html.awaikenthemes.com/toplax/images/arrow-dark.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{asset('/images/icons/rubber_inspection_cap.png')}}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Rubber Inspection Cap</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="https://html.awaikenthemes.com/toplax/images/arrow-dark.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{asset('/images/icons/rubber_ring.png')}}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Rubber Ring</h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="https://html.awaikenthemes.com/toplax/images/arrow-dark.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <!-- Services List Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Service List End -->

<!-- Our Story Start -->
<div class="our-story">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our story</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">From Innovation to Excellence in <span>Rubber
                            Manufacturing</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Story Header Image Start -->
                <div class="our-story-header-img">
                    <figure class="reveal image-anime">
                        <img src="{{asset('images/story-1.jpeg')}}" alt="">
                    </figure>

                    <figure class="reveal image-anime">
                        <img src="{{asset('images/story-2.jpeg')}}" alt="">
                    </figure>
                </div>
                <!-- Our Story Header Image End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Story Image Start -->
                <div class="our-story-img">
                    <figure class="reveal image-anime">
                        <img src="{{asset('images/story-main.jpeg')}}" alt="">
                    </figure>
                </div>
                <!-- Our Story Image End -->
            </div>

            <div class="col-lg-6">
                <div class="our-story-content">
                    <div class="our-story-content-body">
                        <p>From a small unit manufacturing carbon seal rings to becoming a leading name in
                            high-performance rubber components, Rubtech Mech (INDIA) LLP has grown through innovation
                            and expertise. Guided by Mr. Daljit Singh’s mastery in rubber science, we now serve global
                            industries with precision-engineered, compliant solutions.</p>
                    </div>

                    <div class="our-story-counters">
                        <!-- Our Story Counter Start -->
                        <div class="our-story-counter">
                            <h3><span class="counter">10</span>k+</h3>
                            <p>completed project</p>
                        </div>
                        <!-- Our Story Counter End -->

                        <!-- Our Story Counter Start -->
                        <div class="our-story-counter">
                            <h3><span class="counter">15</span>+</h3>
                            <p>satisfied customer</p>
                        </div>
                        <!-- Our Story Counter End -->

                        <!-- Our Story Counter Start -->
                        <div class="our-story-counter">
                            <h3><span class="counter">10</span>k+</h3>
                            <p>years of mastery</p>
                        </div>
                        <!-- Our Story Counter End -->
                    </div>

                    <!-- Our Story Intro Video Start -->
                    <div class="our-story-intro-video">
                        <!-- Our Story Client Image Start -->
                        {{-- <div class="our-story-client-img">
                            <!-- Client Image Start -->
                            <div class="client-image">
                                <figure class="image-anime reveal">
                                    <img src="https://html.awaikenthemes.com/toplax/images/story-client-img-1.jpg"
                                        alt="">
                                </figure>
                            </div>
                            <!-- Client Image End -->

                            <!-- Client Image Start -->
                            <div class="client-image">
                                <figure class="image-anime reveal">
                                    <img src="https://html.awaikenthemes.com/toplax/images/story-client-img-2.jpg"
                                        alt="">
                                </figure>
                            </div>
                            <!-- Client Image End -->

                            <!-- Client Image Start -->
                            <div class="client-image">
                                <figure class="image-anime reveal">
                                    <img src="https://html.awaikenthemes.com/toplax/images/story-client-img-3.jpg"
                                        alt="">
                                </figure>
                            </div>
                            <!-- Client Image End -->
                        </div> --}}
                        <!-- Our Story Client Image End -->

                        <!-- Intro Video Box Start -->
                        <div class="intro-video-box">
                            <!-- Video Play Button Start -->
                            <div class="video-play-button">
                                <a href="https://www.youtube.com/watch?v=RVE8MO_RNqQ" class="popup-video"
                                    data-cursor-text="Play">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                                <p>watch intro</p>
                            </div>
                            <!-- Video Play Button End -->
                        </div>
                        <!-- Intro Video Box End -->
                    </div>
                    <!-- Our Story Intro Video End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Story End -->

<!-- What We Do Start -->
<div class="what-we-do">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <!-- What We Do Content Start -->
                <div class="what-we-do-content">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Why Choose us?</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Precision Engineering &
                                Compliance-Driven Manufacturing</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- What We Do List Start -->
                    <div class="what-we-do-list">
                        <div class="what-we-do-list-box-1">
                            <!-- What We Do Item Start -->
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/regulatory_complaince.png')}}" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>Regulatory Compliance</h3>
                                    <p>Meeting global standards with FDA, EU, and Japan-compliant food-grade rubber
                                        components.</p>
                                </div>
                            </div>
                            <!-- What We Do Item End -->

                            <!-- What We Do Item Start -->
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/global_oem_partenership.png')}}" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>Global OEM Partnerships</h3>
                                    <p> Supplying Tier 1 OEMs in the US and Europe with high-quality,
                                        precision-engineered rubber solutions.</p>
                                </div>
                            </div>
                            <!-- What We Do Item End -->
                        </div>

                        <div class="what-we-do-list-box-2">
                            <!-- What We Do Item Start -->
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/advance_material_science.png')}}" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>Advanced Material Science</h3>
                                    <p>Expertise in rubber compound design ensures high performance and extra-long
                                        service life.</p>
                                </div>
                            </div>
                            <!-- What We Do Item End -->

                            <!-- What We Do Item Start -->
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/proven_industry_expense.png')}}" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>Proven Industry Expertise</h3>
                                    <p> Led by a seasoned rubber science expert with decades of experience in process
                                        engineering.</p>
                                </div>
                            </div>
                            <!-- What We Do Item End -->
                        </div>
                    </div>
                    <!-- What We Do List Start -->

                    <!-- What We Do Footer Start -->
                    {{-- <div class="what-we-do-footer">
                        <p>Lorem ipsum is a placeholder text commonly used <span>to demonstrate</span></p>
                    </div> --}}
                    <!-- What We Do Footer End -->
                </div>
                <!-- What We Do Content End -->
            </div>

            <div class="col-lg-6">
                <!-- What We Do Image Start -->
                <div class="what-we-do-image">
                    <figure class="image-anime">
                        <img src="{{asset('images/why-us.jpeg')}}" alt="">
                    </figure>

                    <!-- Contact Now Circle Start -->
                    <div class="contact-now-circle">
                        <a href="/contact">
                            <img src="{{asset('images/icons/roundbox.svg')}}" alt="">
                        </a>
                    </div>
                    <!-- Contact Now Circle End -->
                </div>
                <!-- What We Do Image End -->
            </div>
        </div>
    </div>
</div>
<!-- What We Do End -->

<!-- Our Work Section Start -->
<div class="our-work">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our work</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Industries <span>we Serve</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>Our successful project initiatives showcase our commitment to excellence and innovation across
                        various industries.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/flour.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Flour
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/mineral.jpeg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Mineral
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/oil.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Edible Oil
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/CEMENT.png')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Cement & Mortar
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/malt.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Pharmaceuticals
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/salt.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Salt
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/sugar.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Sugar
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/rice-milling.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Rice Milling
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/cereal.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Cereal
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/coffe.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Coffee
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/guar-gum.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Guar Gum
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/malt.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Malt
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/flour-2.png')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Millet
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/powder.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Powder
                        </div>
                    </a>
                </div>
                <div class="swiper-slide industry-image">
                    <a href="#">
                        <figure class="image-anime">
                            <img src="{{asset('images/industry/Spices.jpg')}}" alt="">
                        </figure>
                        <div class="project-tag">
                            Spices
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div class="industry-btn">
            <div class="industry-button-prev"></div>
            <div class="industry-button-next"></div>
        </div>
    </div>
</div>
<!-- Our Work Section End -->

{{--
<!-- Our Process Section Start -->
<div class="our-process">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our process</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Streamlined processes <span>for optimal
                            efficiency</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>Our process is designed to maximize efficiency and quality at every stage of production. By
                        integrating advanced technologies and best practices, we ensure seamless workflows.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Process Image Start -->
                <div class="our-process-image">
                    <figure class="image-anime reveal">
                        <img src="https://html.awaikenthemes.com/toplax/images/our-process-image.jpg" alt="">
                    </figure>
                </div>
                <!-- Our Process Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Process Step Box Start -->
                <div class="process-steps-box">
                    <!-- Process Step Item Start -->
                    <div class="process-step-item wow fadeInUp">
                        <div class="process-step-no">
                            <h2>01</h2>
                        </div>
                        <div class="process-step-content">
                            <h3>understanding your needs</h3>
                            <p>We begin by thoroughly assessing your requirements and objectives to develop a tailored
                                approach.</p>
                        </div>
                    </div>
                    <!-- Process Step Item End -->

                    <!-- Process Step Item Start -->
                    <div class="process-step-item active wow fadeInUp" data-wow-delay="0.25s">
                        <div class="process-step-no">
                            <h2>02</h2>
                        </div>
                        <div class="process-step-content">
                            <h3>design and planning</h3>
                            <p>Our team collaborates to create detailed project plans, ensuring all aspects of the
                                process.</p>
                        </div>
                    </div>
                    <!-- Process Step Item End -->

                    <!-- Process Step Item Start -->
                    <div class="process-step-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="process-step-no">
                            <h2>03</h2>
                        </div>
                        <div class="process-step-content">
                            <h3>implementation</h3>
                            <p>Utilizing advanced technologies and skilled personnel, we execute the project</p>
                        </div>
                    </div>
                    <!-- Process Step Item End -->
                </div>
                <!-- Process Step Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Process Section End --> --}}

{{--
<!-- Our Pricing Section Start -->
<div class="our-pricing">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">pricing plan</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Transparent pricing for <span>every
                            solution</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>We believe in providing clear and upfront pricing to ensure that you understand the value of our
                        services.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Pricing Box Start -->
                <div class="pricing-box box-1 wow fadeInUp">
                    <!-- Pricing Title Start -->
                    <div class="pricing-title">
                        <h2><sup>$</sup>29<sub>/month</sub></h2>
                        <h3>basic plan</h3>
                    </div>
                    <!-- Pricing Title End -->

                    <!-- Pricing List Start -->
                    <div class="pricing-list">
                        <ul>
                            <li>Standard Manufacturing Services</li>
                            <li>Quality Control Checks</li>
                            <li>Technical Support</li>
                            <li>Monthly Progress Reports</li>
                        </ul>
                    </div>
                    <!-- Pricing List End -->

                    <!-- Pricing Button Start -->
                    <div class="pricing-btn">
                        <a href="#" class="btn-default"><span>purchase now</span></a>
                    </div>
                    <!-- Pricing Button End -->
                </div>
                <!-- Pricing Box End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Pricing Box Start -->
                <div class="pricing-box highlighted-box box-2 wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Pricing Title Start -->
                    <div class="pricing-title">
                        <h2><sup>$</sup>39<sub>/month</sub></h2>
                        <h3>advanced plan</h3>
                    </div>
                    <!-- Pricing Title End -->

                    <!-- Pricing List Start -->
                    <div class="pricing-list">
                        <ul>
                            <li>Standard Manufacturing Services</li>
                            <li>Quality Control Checks</li>
                            <li>Technical Support</li>
                            <li>Monthly Progress Reports</li>
                        </ul>
                    </div>
                    <!-- Pricing List End -->

                    <!-- Pricing Button Start -->
                    <div class="pricing-btn">
                        <a href="#" class="btn-default btn-highlighted"><span>purchase now</span></a>
                    </div>
                    <!-- Pricing Button End -->
                </div>
                <!-- Pricing Box End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Pricing Box Start -->
                <div class="pricing-box box-3 wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Pricing Title Start -->
                    <div class="pricing-title">
                        <h2><sup>$</sup>49<sub>/month</sub></h2>
                        <h3>premium plan</h3>
                    </div>
                    <!-- Pricing Title End -->

                    <!-- Pricing List Start -->
                    <div class="pricing-list">
                        <ul>
                            <li>Standard Manufacturing Services</li>
                            <li>Quality Control Checks</li>
                            <li>Technical Support</li>
                            <li>Monthly Progress Reports</li>
                        </ul>
                    </div>
                    <!-- Pricing List End -->

                    <!-- Pricing Button Start -->
                    <div class="pricing-btn">
                        <a href="#" class="btn-default"><span>purchase now</span></a>
                    </div>
                    <!-- Pricing Button End -->
                </div>
                <!-- Pricing Box End -->
            </div>

            <div class="col-lg-12">
                <!-- Pricing Benifit List Start -->
                <div class="pricing-benefit-list wow fadeInUp" data-wow-delay="0.6s">
                    <ul>
                        <li><img src="https://html.awaikenthemes.com/toplax/images/icon-pricing-benefit-1.svg"
                                alt="">Get 30 day free trial</li>
                        <li><img src="https://html.awaikenthemes.com/toplax/images/icon-pricing-benefit-2.svg" alt="">No
                            any hidden fees pay</li>
                        <li><img src="https://html.awaikenthemes.com/toplax/images/icon-pricing-benefit-3.svg"
                                alt="">You can cancel anytime </li>
                    </ul>
                </div>
                <!-- Pricing Benifit List End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Pricing Section End --> --}}

<!-- Our Testimonial Section Start -->
<div class="our-testimonial">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Testimonial Image Start -->
                <div class="our-testimonial-image">
                    <figure class="image-anime reveal">
                        <img src="{{asset('images/testimonial.jpg')}}" alt="">
                    </figure>
                </div>
                <!-- Our Testimonial Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Testimonial Content Start -->
                <div class="our-testimonial-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our client say</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">What our satisfied clients <span>are
                                saying</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>"The product provided by rubtech is so good in the sense of finishing and
                                                performance.i am using it since last 1 year
                                                .not even a single complaint from customer side
                                                Product is too well and good"</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{'images/icons/usericon.png'}}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>M SALIM Junakiya</h3>
                                                <p>Contractor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>"I am a machine manufacturer Name of ( Roy Agro industry) U.P. Recently
                                                we have bought rubber products form RubTech Mech
                                                (India) LLP. as we seen the product quality is superb extra ordinary
                                                product like as resilience and Bouncing power is
                                                pretty good."</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{asset('images/icons/usericon.png')}}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Vipin Kumar</h3>
                                                <p>senior engineer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
                <!-- Our Testimonial Content End -->
            </div>

            <div class="col-lg-12">
                <!-- Agency Support Slider Start -->
                <div class="testimonial-company-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Agency Support Logo Start -->
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="https://html.awaikenthemes.com/toplax/images/company-logo-1.svg" alt="">
                                </div>
                            </div>
                            <!-- Agency Support Logo End -->

                            <!-- Agency Support Logo Start -->
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="https://html.awaikenthemes.com/toplax/images/company-logo-2.svg" alt="">
                                </div>
                            </div>
                            <!-- Agency Support Logo End -->

                            <!-- Agency Support Logo Start -->
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="https://html.awaikenthemes.com/toplax/images/company-logo-3.svg" alt="">
                                </div>
                            </div>
                            <!-- Agency Support Logo End -->

                            <!-- Agency Support Logo Start -->
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="https://html.awaikenthemes.com/toplax/images/company-logo-4.svg" alt="">
                                </div>
                            </div>
                            <!-- Agency Support Logo End -->

                            <!-- Agency Support Logo Start -->
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="https://html.awaikenthemes.com/toplax/images/company-logo-5.svg" alt="">
                                </div>
                            </div>
                            <!-- Agency Support Logo End -->

                            <!-- Agency Support Logo Start -->
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="https://html.awaikenthemes.com/toplax/images/company-logo-1.svg" alt="">
                                </div>
                            </div>
                            <!-- Agency Support Logo End -->
                        </div>
                    </div>
                </div>
                <!-- Agency Support Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Testimonial Section End -->

<!-- Our Blog Section Start -->
<div class="our-blog">
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
            <div class="col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure>
                            <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                <img src="https://html.awaikenthemes.com/toplax/images/blog-1.jpg" alt="">
                            </a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="blog-single.html">Sustainable Practices Reducing Waste in Industrial
                                    Production</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Button Start -->
                        <div class="post-item-btn">
                            <a href="blog-single.html"><img
                                    src="https://html.awaikenthemes.com/toplax/images/arrow-white.svg" alt=""></a>
                        </div>
                        <!-- Post Item Button End -->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure>
                            <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                <img src="https://html.awaikenthemes.com/toplax/images/blog-2.jpg" alt="">
                            </a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="blog-single.html">Advance Robotics Revolutionizing Industrial Workflow</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Button Start -->
                        <div class="post-item-btn">
                            <a href="blog-single.html"><img
                                    src="https://html.awaikenthemes.com/toplax/images/arrow-white.svg" alt=""></a>
                        </div>
                        <!-- Post Item Button End -->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>
        </div>
    </div>
</div>
@endsection