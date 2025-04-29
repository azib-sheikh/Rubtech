<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="{{asset('images/rubtech-logo.png')}}" alt=""></div>
    </div>
</div>
<!-- Preloader End -->

{{-- Search bar --}}
<div class="search-bar">
    <div class="search-holder">
        <span class="header-close" aria-hidden="true">&times;</span>
        <div class="container">

            <form>
                <div class="input-group form-group">
                    <input type="text" class="form-control p-2" placeholder="Search...."
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text py-2" type="submit" id="basic-addon2">Search</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Topbar Section Start -->
<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="site-logo">
                    <a href="./">
                        <img src="{{asset('images/rubtech-logo.png')}}" alt="Logo">
                    </a>
                </div>
                <!-- Logo End -->
            </div>

            <div class="col-lg-9 col-md-12">
                <!-- Topbar Contact Information Start -->
                <div class="topbar-contact-info">
                    <ul>
                        <li>
                            <a href="tel:+919717599905">
                                <div class="icon-box">
                                    <i class="fas fa-phone text-light"></i>
                                </div>
                                <p>+91-9717599905</p>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:enquiry@rubtechmech.in">
                                <div class="icon-box">
                                    <i class="fa fa-envelope text-light"></i>
                                </div>
                                <p>enquiry@rubtechmech.in</p>
                            </a>
                        </li>
                    </ul>
                    <!-- Topbar Qoute Button Start -->
                    <div class="topbar-qoute-btn">
                        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0)"
                            class="btn-default"><span>Request A Quote</span></a>
                        <div id="google_translate_element"></div>
                        <div class="search-icon">
                            <i class="fa fa-search text-light"></i>
                        </div>
                    </div>
                    <!-- Topbar Qoute Button End -->
                </div>
                <!-- Topbar Contact Information End -->
            </div>
        </div>
    </div>
</div>
<!-- Topbar Section End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="./">
                    <img src="images/footer-logo.svg" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="./">Home</a>

                            </li>
                            <li class="nav-item"><a class="nav-link" href="/about">About Us</a>
                                {{-- <ul>
                                    <li class="nav-item"><a class="nav-link" href="/ceo-message">CEO Message</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/certificate-awards">Certificates &
                                            Awards</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/research-and-development">R & D</a>
                                    </li>

                                </ul> --}}
                            </li>
                            <li class="nav-item submenu "><a class="nav-link" href="products">Our Products</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="#">Sieve Cleaning Rubber Balls</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Rubber Cube</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Anti Vibration Mounts</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Rubber Sleeves</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Inspection Cap</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Rubber Rings</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Custom Prototype</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="industries-we-serve">Industry We Serve</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/research-and-development">R & D
                                    Certificates</a>

                                {{--
                            <li class="nav-item submenu"><a class="nav-link" href="#">Gallery</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="/image-gallery">Image
                                            Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/video-gallery">Video Gallery</a>
                                    </li>

                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item"><a class="nav-link" href="/blog">Blogs</a></li> --}}
                            <li class="nav-item submenu"><a class="nav-link" href="javascript:void(0)">Know us more</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/image-gallery">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/faq">Faqs</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Header Social Box Start -->
                    <div class="header-social-box d-inline-flex">
                        <!-- Header Social Links Start -->
                        <div class="header-social-links">
                            <ul>
                                <li><a href="https://www.youtube.com/channel/UCKJXISzn9dYuLxDZb6Ssiag"><i
                                            class="fa-brands fa-youtube"></i></a></li>
                                <li><a
                                        href="https://www.facebook.com/people/Rubtech-Mech/pfbid026haTZ3D83Y2vYmEQjb2fTL8MgEPsti1BbTfmnHdVwsG6Qv7uSaSeiSGDocdJPR8Pl/"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/rubtechmech/"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a style="font-size: 20px" href="https://api.whatsapp.com/send/?phone=9599002161"><i
                                            class="fa-brands fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <!-- Header Social Links End -->
                    </div>
                    <!-- Header Social Box End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->