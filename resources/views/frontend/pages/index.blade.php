@extends('frontend.layouts.app')
@push('title')
Home Page
@endpush
@section('content')


<!-- Hero Section Start -->
<div class="hero hero-slider-layout">
    <div class="swiper">
        <div class="swiper-wrapper">
            <!-- Hero Slide Start -->
            <div class="swiper-slide">
                <div class="hero-slide">
                    <!-- Slider Image Start -->
                    <div class="hero-slider-image">
                        <img src="{{asset('images/slide1.jpeg')}}" alt="">
                    </div>
                    <!-- Slider Image End -->

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <!-- Hero Content Start -->
                                <div class="hero-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title dark-section">
                                        <h3 class="wow fadeInUp">welcome to Rubtech</h3>
                                        <h1 class="text-anime-style-2" data-cursor="-opaque">High-Performance for
                                            <span>Rubber
                                                Components</span>
                                        </h1>
                                        <p class="wow fadeInUp" data-wow-delay="0.25s">Engineered for durability and
                                            precision, our rubber components serve critical roles in automotive,
                                            aerospace,
                                            electronics, and industrial machinery worldwide.</p>
                                    </div>
                                    <!-- Section Title End -->

                                    <!-- Hero Button Start -->
                                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                        <a href="{{ url('/about') }}" class="btn-default btn-orange"><span>explore
                                                more</span></a>
                                    </div>
                                    <!-- Hero Button End -->
                                </div>
                                <!-- Hero Content End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Slide End -->

            <!-- Hero Slide Start -->
            <div class="swiper-slide">
                <div class="hero-slide">
                    <!-- Slider Image Start -->
                    <div class="hero-slider-image">
                        <img src="{{asset('images/slide2.jpg')}}" alt="">
                    </div>
                    <!-- Slider Image End -->

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <!-- Hero Content Start -->
                                <div class="hero-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title dark-section">
                                        <h3 class="wow fadeInUp">welcome to rubtech</h3>
                                        <h1 class="text-anime-style-2" data-cursor="-opaque">50+ years of
                                            <span>R&D and manufacturing experience</span>
                                        </h1>
                                        <p class="wow fadeInUp" data-wow-delay="0.25s">With over five decades of
                                            innovation, we blend research excellence and manufacturing expertise to
                                            deliver reliable,
                                            custom-engineered rubber solutions. </p>
                                    </div>
                                    <!-- Section Title End -->

                                    <!-- Hero Button Start -->
                                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                        <a href="{{ url('/about') }}" class="btn-default btn-orange"><span>explore
                                                more</span></a>
                                    </div>
                                    <!-- Hero Button End -->
                                </div>
                                <!-- Hero Content End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Slide End -->
            <!-- Hero Slide Start -->
            <div class="swiper-slide">
                <div class="hero-slide">
                    <!-- Slider Image Start -->
                    <div class="hero-slider-image">
                        <img src="{{asset('images/slide3.jpg')}}" alt="">
                    </div>
                    <!-- Slider Image End -->

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <!-- Hero Content Start -->
                                <div class="hero-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title dark-section">
                                        <h3 class="wow fadeInUp">welcome to rubtech</h3>
                                        <h1 class="text-anime-style-2" data-cursor="-opaque">USA-FDA, EU & Japan
                                            <span>Compliance and Certification</span>
                                        </h1>
                                        <p class="wow fadeInUp" data-wow-delay="0.25s">Our products meet stringent FDA,
                                            EU, and Japan regulatory standards, ensuring safety, performance, and trust
                                            across
                                            global industrial applications. </p>
                                    </div>
                                    <!-- Section Title End -->

                                    <!-- Hero Button Start -->
                                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                        <a href="{{ url('/about') }}" class="btn-default btn-orange"><span>explore
                                                more</span></a>
                                    </div>
                                    <!-- Hero Button End -->
                                </div>
                                <!-- Hero Content End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Slide End -->
            <!-- Hero Slide Start -->
            <div class="swiper-slide">
                <div class="hero-slide">
                    <!-- Slider Image Start -->
                    <div class="hero-slider-image">
                        <img src="{{asset('images/slide4.jpg')}}" alt="">
                    </div>
                    <!-- Slider Image End -->

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <!-- Hero Content Start -->
                                <div class="hero-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title dark-section">
                                        <h3 class="wow fadeInUp">welcome to rubtech</h3>
                                        <h1 class="text-anime-style-2" data-cursor="-opaque">Clientele across
                                            <span>Europe, USA, Latin America</span>
                                        </h1>
                                        <p class="wow fadeInUp" data-wow-delay="0.25s">We proudly serve a global client
                                            base, offering consistent quality, timely delivery, and tailored solutions
                                            across
                                            Europe, USA, and Latin America. </p>
                                    </div>
                                    <!-- Section Title End -->

                                    <!-- Hero Button Start -->
                                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                        <a href="{{ url('/about') }}" class="btn-default btn-orange"><span>explore
                                                more</span></a>
                                    </div>
                                    <!-- Hero Button End -->
                                </div>
                                <!-- Hero Content End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Slide End -->
        </div>
        <div class="hero-pagination"></div>
    </div>
</div>
<!-- Hero Section End -->

<!-- Our Products Section Start -->
<div class="our-work">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    {{-- <h3 class="wow fadeInUp">Our Products</h3> --}}
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Our <span>Products</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>We specialize in manufacturing a diverse range of food-grade & Industrial rubber components,
                        engineered for exceptional
                        durability, compliance, and operational efficiency.</p>
                    <p>
                        Our products are crafted to meet the highest industry standards, ensuring consistent
                        performance, efficiency and
                        extended service life across various global industries.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide product-image">
                    <a href="#">
                        <div class="product-detail">
                            Sieve Cleaning Rubber Balls, made from high-quality materials such as NR, SBR, PBR, EPDM,
                            Silicon, Viton, Neoprene, and
                            NBR, ensure efficient screening, sieving, sorting, and cleaning with outstanding durability.
                        </div>
                        <figure class="image-anime">
                            <img src="{{asset('images/products/seivecleaningball.jpg')}}" alt="">
                        </figure>

                        <div class="product-title">
                            Sieve Cleaning Rubber Balls
                        </div>
                    </a>
                </div>
                <div class="swiper-slide product-image">
                    <a href="#">
                        <div class="product-detail">
                            Rubber cube ensures efficient performance in various industries, including edible oil,
                            millet, and salt processing. Its
                            robust construction aids in vibration damping and equipment stability, enhancing operational
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
                <div class="swiper-slide product-image">
                    <a href="#">
                        <div class="product-detail">
                            These Mounts are ideal for use in machinery, compressors, and equipment requiring vibration
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
                <div class="swiper-slide product-image">
                    <a href="#">
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
                <div class="swiper-slide product-image">
                    <a href="#">
                        <div class="product-detail">
                            This versatile inspection cap is utilized across various industries, including edible oil,
                            millet, and salt processing,
                            providing access points for inspections, maintenance, or sampling in equipment and storage
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
                <div class="swiper-slide product-image">
                    <a href="#">
                        <div class="product-detail">
                            RTM Rubber Rings provide durable, versatile sealing for demanding industrial applications,
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


            </div>
        </div>
        <div class="industry-btn products-btn">
            <div class="industry-button-prev"></div>
            <div class="industry-button-next"></div>
        </div>
    </div>
</div>
<!-- Our Work Section End -->

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
                                    <h3>Certified Quality & Compliance</h3>
                                    <p>ISO 9001:2015 & GMP certified, compliant with US FDA 21 CFR 177.2600, EU EN
                                        2002R0178,
                                        and JA9104 Japan Regulations.</p>
                                </div>
                            </div>
                            <!-- What We Do Item End -->

                            <!-- What We Do Item Start -->
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/global_oem_partenership.png')}}" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>Global Supply Network </h3>
                                    <p>Exporting to the USA, Europe, and Latin America, with Expanding Reach Fueled by
                                        Positive Client
                                        Experiences.</p>
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
                                    <h3>Precision Engineering </h3>
                                    <p>Expertly crafted rubber components designed for durability, efficiency, and
                                        extra-long service
                                        life.</p>
                                </div>
                            </div>
                            <!-- What We Do Item End -->

                            <!-- What We Do Item Start -->
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/proven_industry_expense.png')}}" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>In-house R&D & Continous Improvement </h3>
                                    <p> Ensures meeting and exceeding expectation of industry and explore new horizons
                                    </p>
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
                        <a href="/research-and-development">
                            <img src="{{asset('images/icons/roundbox.png')}}" alt="">
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
                            <img src="{{asset('images/mining.jpg')}}" alt="">
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
                            <img src="{{asset('images/industry/pharma.png')}}" alt="">
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
                            <img src="{{asset('images/industry/malt.png')}}" alt="">
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
                                                <p>Manufacturer</p>
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
                                                <p>Machine manufacturer</p>
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
                            <h2><a href="/single">Importance of FDA-Compliant Rubber Components in Food Processing</a>
                            </h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Button Start -->
                        <div class="post-item-btn">
                            <a href="/single"><img src="https://html.awaikenthemes.com/toplax/images/arrow-white.svg"
                                    alt=""></a>
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
                            <a href="/single" class="image-anime" data-cursor-text="View">
                                <img src="{{asset('images/eco.png')}}" alt="">
                            </a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="/single">Sustainable Rubber Manufacturing: The Future of Eco-Friendly
                                    Industrial Solutions</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Button Start -->
                        <div class="post-item-btn">
                            <a href="/single"><img src="https://html.awaikenthemes.com/toplax/images/arrow-white.svg"
                                    alt=""></a>
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