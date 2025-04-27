@extends('frontend.layouts.app')
@push('title')
About
@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header about-us parallaxie">
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
                            <img src="{{asset('images/v-image-about.png')}}" alt="">
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
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Rubtech Mech (India) LLP is an ISO 9001:2015 and
                            GMP certified
                            manufacturer specializing in Industrial rubber components, fully compliant with
                            US FDA 21 CFR 177.2600, EU EN 2002R0178, and JA9104 (Japan
                            regulations). Additional compliance with EU regulations 1935/2004,
                            1907/2006, and 10/2011 has been verified through SGS testing.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.50s">
                            <b> Based in Udyog Vihar, Gurugram (Haryana, India),</b> the company is
                            dedicated to the production of high-performance Industrial rubber components
                            for various industries and wide-range of applications.
                        </p>
                        <h5 class="wow fadeInUp mt-3" data-wow-delay="0.70s">Technical Leadership</h5>
                        <p class="wow fadeInUp" data-wow-delay="0.90s">
                            At the helm is Mr. Daljit Singh, a veteran in rubber science and rubber
                            compound design engineering. Starting with Carbon face seal rings for
                            mechanical seals production in 1972, he diversified into rubber-moulded parts
                            in 1975 onwards. An alumni in Rubber Technology from IRI (1976), his deep
                            expertise is rooted in:
                        </p>
                        <ul class="wow fadeInUp" data-wow-delay="0.90s">
                            <li>Advanced compound designing</li>
                            <li>Continuous learning via technical literature, seminars, workshops,
                                numerous books, and endless imagination.</li>
                            <li>Applied skills in elastomers compound recipe designs</li>
                        </ul>
                        <p class="wow fadeInUp" data-wow-delay="0.90s">His extensive R&amp;D journey has led to
                            successful execution of critical projects
                            of challenging specifications and collaborations with Tier 1 OEMs in the
                            U.S.A., Europe &amp; Latin America</p>
                    </div>

                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->

{{-- Promoter messsage --}}
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
                        <p class="wow fadeInUp" data-wow-delay="0.6s">At <b>Rubtech Mech</b>, innovation &amp; quality
                            is at the heart of everything we
                            produce. My personal mission is to help create a world where food remains free
                            from hazardous substances, contributing meaningfully to the fight against
                            cancer. This mission is deeply personal, and our first step toward realizing it is
                            the development of <b>non-toxic, non-hazardous rubber compounds for food-
                                contact applications.</b></p>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">
                            With a deep understanding of the values held by the industries we serve, we are
                            proud to introduce an important innovation that empowers these sectors to offer
                            top notch-quality, high-efficiency and safer products. Our commitment to
                            quality ensures that the products we deliver not only meet—but generally
                            exceed—the expectations of our clients.
                        </p>
                        <p>
                            Our <b> food-grade rubber components</b> have received exceptional feedback, with
                            customers consistently recognizing their<b> superior quality and performance.</b>
                        </p>
                        <p>
                            Building on the expertise I have gained over <b>five decades</b>, and the success
                            we’ve achieved in the <b>food-grade sieve cleaning product segment</b>, we have
                            expanded into developing various other products that are now equipped to meet
                            the challenges of the<b> mineral industry</b> as well.
                        </p>

                        <p>
                            As we continue to strive toward delivering the best and most innovative
                            industrial rubber products globally, our focus remains firmly on understanding
                            and addressing the unique needs of each client. Your support, insights, and
                            collaboration are invaluable in helping us craft customized solutions that drive
                            real impact. Together, we can create meaningful and lasting change.
                        </p>
                    </div>
                    <!-- Team Member Info End -->




                </div>
                <!-- Team Member Content End -->
            </div>
        </div>
    </div>
</div>

{{-- Promoter messsage End --}}



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
                                    data-bs-target="#1920" type="button" role="tab" aria-selected="true">1972:</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="1922-tab" data-bs-toggle="tab" data-bs-target="#1922"
                                    type="button" role="tab" aria-selected="false">1985 - 1989</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="1925-tab" data-bs-toggle="tab" data-bs-target="#1925"
                                    type="button" role="tab" aria-selected="false">1955 - 2005</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="1930-tab" data-bs-toggle="tab" data-bs-target="#1930"
                                    type="button" role="tab" aria-selected="false">2005 - 2017</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="1940-tab" data-bs-toggle="tab" data-bs-target="#1940"
                                    type="button" role="tab" aria-selected="false">2017 - Present</button>
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
                                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Allied Auto & General
                                                Industries</span>
                                        </h2>
                                        <p>Graphite Monomers & Face Seal Rings</p>
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
                                        <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/banner/mission-vission.png"
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
                                        <p>Manufacturer of Automotive filters</p>
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
                                        <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/banner/mission-vission.png"
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
                                        <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/banner/mission-vission.png"
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
                                        <p>Manufactures and exports rubber components like seals, gaskets, bushings, and
                                            mounts for OEMs and Tier-1 suppliers
                                            across Europe and the U.S.</p>
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
                                        <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/banner/mission-vission.png"
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
                                        <p>Manufacturing & exporting high –performance food-grade, wear-resistant
                                            industrial rubber components</p>
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
                                        <img src="https://techoozesolutions.co.in/live_dynamic/rubtech/media/banner/mission-vission.png"
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
                                        <p>To design and manufacture high-performance, industrial rubber components
                                            through advanced research, precision process engineering, and customer-
                                            focused innovation. We are committed to serving the food, cement, and mining
                                            industries with safe, reliable, and customized solutions—while fostering
                                            ethical
                                            practices, skill development, and meaningful contributions to industrial and
                                            national growth.
                                        </p>
                                    </div>

                                    <div class="mission-vision-content-list d-none">
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
                                        <p>At Rubtech Mech, our vision is to be a leading force in the rubber component
                                            manufacturing industry, setting new standards for excellence and quality.
                                            Our
                                            mission goes beyond production—we strive to leverage our success to serve
                                            the
                                            nation and support meaningful philanthropic efforts, making a lasting impact
                                            on
                                            both industry and society.</p>
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
                                    {{-- <div class="mission-vision-content-header">

                                    </div> --}}

                                    <div class="mission-vision-content-list">
                                        <ul>
                                            <li><b>Innovation Excellence:</b> Continuously advancing to deliver the best
                                                products that meet evolving industrial needs.</li>
                                            <li><b>Purpose-Driven Growth:</b> Creating meaningful employment and
                                                contributing to the well-being of the nation and humanity.</li>
                                            <li><b>Research &amp; Mastery:</b> Rooted in lifelong learning and rubber
                                                science, we
                                                lead with technical expertise to advance industry standards.</li>
                                            <li><b>Integrity</b> We uphold quality and earn trust by consistently
                                                following
                                                processes and meeting committed standards.</li>
                                            <li><b>Customer Focus:</b> Prioritizing customer needs and and building
                                                lasting
                                                relationships through responsiveness and support.</li>
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



@endsection