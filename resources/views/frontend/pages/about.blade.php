@extends('frontend.layouts.app')
@push('title')
About
@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">About <span>Us</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

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
                        <h2 class="text-anime-style-2" data-cursor="-opaque">About <span>Rubtech Mech (INDIA) LLP</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Rubtech Mech (India) LLP, an ISO 9001:2015 and
                            GMP certified company proudly introduces itself as a majestic
                            manufacturer of Food Grade rubber articles compliant to US FDA 21 CFR 177.2600, EU EN
                            2002R0178 and JA9104 Japan
                            Regulations. Moreover, we have got tested our rubber compound for additional regulations
                            through SGS for EU 1935/2004,
                            1907/2006 & 10/2011 and found compliant. Rubtech Mech (India) LLP, a manufacturing unit
                            located in Udyog Vihar,
                            Gurugram, Haryana, INDIA is a venture for production of “HIGH PERFORMANCE RUBBER CLEANERS”
                            viz. Spherical balls, cubes,
                            barrel shape sieve cleaners and other accessories for milling industry.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.50s">
                            At the heart of this expertise lies Mr. Daljit Singh, a seasoned expert in Rubber Science
                            and process engineering. His
                            journey from a small unit manufacturing carbon seal rings to diversifying into rubber molded
                            parts speaks volumes. With
                            a background in rubber technology from IRI in 1976 and an extensive study of technological
                            literature, Mr. Singh has
                            honed his expertise in compound designing. His wealth of knowledge expanded through
                            workshops, seminars, and hands-on
                            experience in carbons and minerals, culminating in a deep understanding of rubber compound
                            designing principles. This
                            journey led to successful project execution for critical applications, paving the way for
                            supplying Tier 1 OEM suppliers
                            in the US and Europe.
                        </p>
                    </div>

                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->

<!-- Our Mission Vision Section Start -->
<div class="our-mission-vision">
    <div class="mission-vision-bg parallaxie">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">our approach</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Empowering sustainable <span>growth in
                                industry</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
                        <p>We drive sustainable solutions in factory and industrial settings, focusing on efficiency,
                            innovation, and environmental responsibility to support long-term growth.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Mission Vision Box Start -->
                <div class="mission-vision-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="missionvision">
                    <!-- Sidebar Mission Vision Nav start -->
                    <div class="mission-vision-nav">
                        <ul class="nav nav-tabs" id="mvTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="remodeling-tab" data-bs-toggle="tab"
                                    data-bs-target="#mission" type="button" role="tab" aria-selected="true"><img
                                        src="https://html.awaikenthemes.com/toplax/images/icon-mission-nav.svg" alt="">
                                    our mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="installation-tab" data-bs-toggle="tab"
                                    data-bs-target="#vision" type="button" role="tab" aria-selected="false"><img
                                        src="https://html.awaikenthemes.com/toplax/images/icon-vision-nav.svg" alt="">
                                    our vision</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value"
                                    type="button" role="tab" aria-selected="false"><img
                                        src="https://html.awaikenthemes.com/toplax/images/icon-value-nav.svg" alt="">
                                    our value</button>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar Mission Vision Nav End -->

                    <!-- Mission Vision Item Start -->
                    <div class="mission-vision-item tab-pane fade show active" id="mission" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Mission Vision Content Start -->
                                <div class="mission-vision-content">
                                    <div class="mission-vision-content-header">
                                        <p>Our mission is to deliver Rubber Food Contact Materials that are 100% food
                                            grade for all food processing industries globally. Viz-a-Viz
                                            High tear strength, wear resistant Superb resilience & rebound, phthalates &
                                            BPI free, prolonged life are the objectives
                                            of our new performance standards, which we guarantee will result in highly
                                            beneficial for all sieving process
                                            applications being much efficient & low priced than PU ball/Brush Cleaners.
                                        </p>
                                    </div>

                                    <div class="mission-vision-content-list">
                                        <ul>
                                            <li>Sustainable Manufacturing Practices</li>
                                            <li>Advanced Technology Integration</li>
                                            <li>Community Environmental Responsibility</li>
                                            <li>Innovation-Driven Growth</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mission Vision Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Mission Vision Image Start -->
                                <div class="mission-vision-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/mission-image.jpg"
                                            alt="">
                                    </figure>
                                </div>
                                <!-- Mission Vision Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Mission Vision Item End -->

                    <!-- Mission Vision Item Start -->
                    <div class="mission-vision-item tab-pane fade" id="vision" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Mission Vision Content Start -->
                                <div class="mission-vision-content">
                                    <div class="mission-vision-content-header">
                                        <p>RTM's vision is to become one of the world's leading polymer companies and to
                                            transform INDIA into a technological and economic superpower</p>
                                    </div>

                                    <div class="mission-vision-content-list">
                                        <ul>
                                            <li>Sustainable Manufacturing Practices</li>
                                            <li>Advanced Technology Integration</li>
                                            <li>Community Environmental Responsibility</li>
                                            <li>Innovation-Driven Growth</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mission Vision Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Mission Vision Image Start -->
                                <div class="mission-vision-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/vision-image.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Mission Vision Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Mission Vision Item End -->

                    <!-- Mission Vision Item Start -->
                    <div class="mission-vision-item tab-pane fade" id="value" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Mission Vision Content Start -->
                                <div class="mission-vision-content">
                                    <div class="mission-vision-content-header">
                                        <p>Our value is to transform the factory and industry sectors through
                                            sustainable practices, innovation, and advanced technology, fostering growth
                                            that benefits both business and the environment.</p>
                                    </div>

                                    <div class="mission-vision-content-list">
                                        <ul>
                                            <li>Sustainable Manufacturing Practices</li>
                                            <li>Advanced Technology Integration</li>
                                            <li>Community Environmental Responsibility</li>
                                            <li>Innovation-Driven Growth</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mission Vision Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Mission Vision Image Start -->
                                <div class="mission-vision-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/value-image.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Mission Vision Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Mission Vision Item End -->
                </div>
                <!-- Mission Vision Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Mission Vision Section End -->

<!-- Our History Section Start -->
<div class="our-history">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our history</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Foundation of excellences <span>in
                            industry</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>Built on a legacy of quality and innovation, we have established a strong foundation in the
                        industrial sector, consistently delivering reliable solutions that drive progress and set
                        industry standards.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Our History Box Start -->
                <div class="our-history-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="historybox">
                    <!-- Sidebar Our History Nav start -->
                    <div class="our-history-nav">
                        <ul class="nav nav-tabs" id="historyTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="1920-tab" data-bs-toggle="tab"
                                    data-bs-target="#1920" type="button" role="tab" aria-selected="true">In 1920 -
                                    Planning</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="1922-tab" data-bs-toggle="tab" data-bs-target="#1922"
                                    type="button" role="tab" aria-selected="false">In 1922 - Journey Started</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="1925-tab" data-bs-toggle="tab" data-bs-target="#1925"
                                    type="button" role="tab" aria-selected="false">In 1925 - Journey Progress</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="1930-tab" data-bs-toggle="tab" data-bs-target="#1930"
                                    type="button" role="tab" aria-selected="false">In 1930 - Global Reach</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="1940-tab" data-bs-toggle="tab" data-bs-target="#1940"
                                    type="button" role="tab" aria-selected="false">In 1940 - Industry
                                    Leadership</button>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar Our History Nav End -->

                    <!-- Our History Item Start -->
                    <div class="our-history-item tab-pane fade show active" id="1920" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Our History Content Start -->
                                <div class="our-history-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-2" data-cursor="-opaque">Company
                                            <span>started</span>
                                        </h2>
                                        <p>Welcome to Industry, a leading industry innovator with a rich history of
                                            excellence. With a passion for precision and a commitment to quality, we
                                            have been empowering industries and driving progress.</p>
                                    </div>
                                    <!-- Section Title End -->

                                    <div class="our-history-list">
                                        <ul>
                                            <li>Quality Control System</li>
                                            <li>Building Quality Industrial</li>
                                            <li>Environmental Responsibility</li>
                                            <li>Building Quality Industrial</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Our History Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Our History Image Start -->
                                <div class="our-history-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/history-image-1.jpg"
                                            alt="">
                                    </figure>
                                </div>
                                <!-- Our History Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Our History Item End -->

                    <!-- Our History Item Start -->
                    <div class="our-history-item tab-pane fade" id="1922" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Our History Content Start -->
                                <div class="our-history-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-2" data-cursor="-opaque">Journey
                                            <span>started</span>
                                        </h2>
                                        <p>Welcome to Industry, a leading industry innovator with a rich history of
                                            excellence. With a passion for precision and a commitment to quality, we
                                            have been empowering industries and driving progress.</p>
                                    </div>
                                    <!-- Section Title End -->

                                    <div class="our-history-list">
                                        <ul>
                                            <li>Quality Control System</li>
                                            <li>Building Quality Industrial</li>
                                            <li>Environmental Responsibility</li>
                                            <li>Building Quality Industrial</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Our History Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Our History Image Start -->
                                <div class="our-history-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/history-image-1.jpg"
                                            alt="">
                                    </figure>
                                </div>
                                <!-- Our History Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Our History Item End -->

                    <!-- Our History Item Start -->
                    <div class="our-history-item tab-pane fade" id="1925" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Our History Content Start -->
                                <div class="our-history-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-2" data-cursor="-opaque">Journey
                                            <span>progress</span>
                                        </h2>
                                        <p>Welcome to Industry, a leading industry innovator with a rich history of
                                            excellence. With a passion for precision and a commitment to quality, we
                                            have been empowering industries and driving progress.</p>
                                    </div>
                                    <!-- Section Title End -->

                                    <div class="our-history-list">
                                        <ul>
                                            <li>Quality Control System</li>
                                            <li>Building Quality Industrial</li>
                                            <li>Environmental Responsibility</li>
                                            <li>Building Quality Industrial</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Our History Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Our History Image Start -->
                                <div class="our-history-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/history-image-1.jpg"
                                            alt="">
                                    </figure>
                                </div>
                                <!-- Our History Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Our History Item End -->

                    <!-- Our History Item Start -->
                    <div class="our-history-item tab-pane fade" id="1930" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Our History Content Start -->
                                <div class="our-history-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-2" data-cursor="-opaque">Global <span>reach</span>
                                        </h2>
                                        <p>Welcome to Industry, a leading industry innovator with a rich history of
                                            excellence. With a passion for precision and a commitment to quality, we
                                            have been empowering industries and driving progress.</p>
                                    </div>
                                    <!-- Section Title End -->

                                    <div class="our-history-list">
                                        <ul>
                                            <li>Quality Control System</li>
                                            <li>Building Quality Industrial</li>
                                            <li>Environmental Responsibility</li>
                                            <li>Building Quality Industrial</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Our History Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Our History Image Start -->
                                <div class="our-history-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/history-image-1.jpg"
                                            alt="">
                                    </figure>
                                </div>
                                <!-- Our History Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Our History Item End -->

                    <!-- Our History Item Start -->
                    <div class="our-history-item tab-pane fade" id="1940" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Our History Content Start -->
                                <div class="our-history-content">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-2" data-cursor="-opaque">Industry
                                            <span>leader</span>
                                        </h2>
                                        <p>Welcome to Industry, a leading industry innovator with a rich history of
                                            excellence. With a passion for precision and a commitment to quality, we
                                            have been empowering industries and driving progress.</p>
                                    </div>
                                    <!-- Section Title End -->

                                    <div class="our-history-list">
                                        <ul>
                                            <li>Quality Control System</li>
                                            <li>Building Quality Industrial</li>
                                            <li>Environmental Responsibility</li>
                                            <li>Building Quality Industrial</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Our History Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Our History Image Start -->
                                <div class="our-history-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/history-image-1.jpg"
                                            alt="">
                                    </figure>
                                </div>
                                <!-- Our History Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Our History Item End -->
                </div>
                <!-- Our History Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our History Section End -->

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

<!-- Our Features Section Start -->
<div class="our-features">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our key feature</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Core strengths in <span>industrial
                            innovation</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>Our expertise in industrial innovation combines advanced technology, sustainable practices, and a
                        skilled workforce to deliver efficient, future-ready solutions that drive industry progress.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row no-gutters">
            <!-- Our Features Boxes Start -->
            <div class="our-features-boxes">
                <!-- Our Features Item Start -->
                <div class="our-features-item">
                    <div class="icon-box">
                        <img src="https://html.awaikenthemes.com/toplax/images/icon-features-1.svg" alt="">
                    </div>
                    <div class="features-item-content">
                        <h3>Advanced Technology Integration</h3>
                        <p>We integrate cutting-edge technologies into every aspect of our operations, enhancing
                            efficiency, precision, and innovation to deliver superior industrial solutions.</p>
                    </div>
                </div>
                <!-- Our Features Item End -->

                <!-- Our Features Item Start -->
                <div class="our-features-item">
                    <div class="icon-box">
                        <img src="https://html.awaikenthemes.com/toplax/images/icon-features-2.svg" alt="">
                    </div>
                    <div class="features-item-content">
                        <h3>Uncompromising Quality Standards</h3>
                        <p>We uphold the highest quality standards across all processes, ensuring consistency,
                            reliability, and excellence in every product and service we deliver.</p>
                    </div>
                </div>
                <!-- Our Features Item End -->

                <!-- Our Features Item Start -->
                <div class="our-features-item">
                    <div class="icon-box">
                        <img src="https://html.awaikenthemes.com/toplax/images/icon-features-3.svg" alt="">
                    </div>
                    <div class="features-item-content">
                        <h3>Continuous Innovation and R&D</h3>
                        <p>We prioritize ongoing research and development to drive continuous innovation, staying ahead
                            of industry trends and creating advanced solutions that meet evolving market demands.</p>
                    </div>
                </div>
                <!-- Our Features Item End -->

                <!-- Our Features Item Start -->
                <div class="our-features-item features-image-box">
                    <figure class="image-anime">
                        <img src="https://html.awaikenthemes.com/toplax/images/features-box-image.jpg" alt="">
                    </figure>
                </div>
                <!-- Our Features Item End -->
            </div>
            <!-- Our Features Boxes End -->
        </div>
    </div>
</div>
<!-- Our Features Section End -->

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
<!-- Our Process Section End -->

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
                    <a href="faqs.html" class="btn-default"><span>all FAQs</span></a>
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
                            <img src="https://html.awaikenthemes.com/toplax/images/our-faqs-image.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Our Faqs Image End -->

                    <!-- Faqs Image Cta Box Start -->
                    <div class="faqs-img-cta-box">
                        <ul>
                            <li><a href="#"><img
                                        src="https://html.awaikenthemes.com/toplax/images/icon-phone-accent.svg" alt="">
                                    +91 1236547890</a></li>
                            <li><a href="#"><img src="https://html.awaikenthemes.com/toplax/images/icon-mail-accent.svg"
                                        alt=""> info@domainname.com</a></li>
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