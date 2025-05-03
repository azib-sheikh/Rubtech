@extends('frontend.layouts.app')
@push('name')
Contact
@endpush
@section('content')
<!-- Page Header Start -->
<div class="page-header parallaxie contact-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>us</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Contact Us Start -->
<div class="page-contact-us">
    <div class="container">
        <div class="row align-items-center">


            <div class="col-lg-6">
                <!-- Page Contact Form Start -->
                <div class="contact-us-form">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Contact <span>Us</span></h2>
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

                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter your e-mail" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
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
            <div class="col-lg-6 google-map">
                <!-- Google Map Start -->
                <div class="google-map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d321772.163152393!2d77.031839!3d28.573633!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1744685409563!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map End -->
            </div>
        </div>
    </div>
</div>
<!--  Page Contact Us End -->
<div class="container pb-5">
    <div class="row">
        <div class="col-lg-12">
            <!-- Contact Information Start -->
            <div class="contact-information">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    {{-- <h3 class="wow fadeInUp">contact us</h3> --}}
                    <h2 class="text-anime-style-3 text-center" data-cursor="-opaque">Get in touch <span>with us</span>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Reach out for any inquiries, support, or to
                        discuss how we can meet your industrial needs.</p>
                </div>
                <!-- Section Title End -->
                <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="contact-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">General Enquiry</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">National
                            Business</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">International
                            Business</button>
                    </li>

                </ul>
                <br>
                <div class="tab-content " id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="contact-info-box">
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/smartphone.png')}}" alt="">

                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p><a href="tel:+919599002160">+91-9599002160</a></p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/toplax/images/icon-phone.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p><a href="tel:+919871706307">+91-9871706307</a></p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/toplax/images/icon-mail.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>
                                        <a href="mailto:enquiry@rubtechmech.in">enquiry@rubtechmech.in</a>
                                    </p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->


                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <div class="contact-info-box">
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item ">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/smartphone.png')}}" alt="">

                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p><a href="tel:+919717171813">+91-9717171813</a></p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item ">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/toplax/images/icon-phone.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p><a href="tel:+919871706307">+91-9871706307</a></p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item ">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/toplax/images/icon-mail.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>
                                        <a href="mailto:sales@rubtechmech.in">sales@rubtechmech.in</a>
                                    </p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->


                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">
                        <div class="contact-info-box">
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item ">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/smartphone.png')}}" alt="">

                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p><a href="tel:+919871706307">+91-9871706307</a></p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item ">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/toplax/images/icon-phone.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p><a href="tel:+919599002161">+91-9599002161</a></p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item ">
                                <div class="icon-box">
                                    <img src="https://html.awaikenthemes.com/toplax/images/icon-mail.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>
                                        <a href="mailto:exports@rubtechmech.in">exports@rubtechmech.in</a>
                                    </p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->


                        </div>
                    </div>

                </div>


                <!-- Contact Info Box Start -->

            </div>
            <!-- Contact Information End -->
        </div>
    </div>
</div>

<br>
<br>

@endsection