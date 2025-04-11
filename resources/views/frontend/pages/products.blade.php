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
						<h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>products</span></h1>
						<nav class="wow fadeInUp">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="./">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">products</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Our Work Section Start -->
    <div class="page-projects">
        <div class="container">
            <div class="row">
               

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        <div class="col-md-3 project-item-box manufacturing automation">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/project-1.jpg" alt="">
                                    </figure>
                                </div>                                
                                
                                <div class="project-tag d-none">
                                    <a href="project-single.html">manufacturing</a>
                                </div>
                                
                                <div class="project-content">
                                    <h3><a href="project-single.html">Total Quality Management Implementation</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-3 project-item-box automation sustainability development">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/project-2.jpg" alt="">
                                    </figure>
                                </div>                                
                                
                                <div class="project-tag d-none">
                                    <a href="project-single.html">automation</a>
                                </div>
                                
                                <div class="project-content">
                                    <h3><a href="project-single.html">Advanced Research in Material Science</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-3 project-item-box sustainability infrastructure">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/project-3.jpg" alt="">
                                    </figure>
                                </div>                                
                                
                                <div class="project-tag d-none">
                                    <a href="project-single.html">automation</a>
                                </div>
                                
                                <div class="project-content">
                                    <h3><a href="project-single.html">Workplace Safety Enhancement Initiative</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-3 project-item-box manufacturing development">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/project-4.jpg" alt="">
                                    </figure>
                                </div>                                
                                
                                <div class="project-tag d-none">
                                    <a href="project-single.html">development</a>
                                </div>
                                
                                <div class="project-content">
                                    <h3><a href="project-single.html">Robotic Process Automation Deployment</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-3 project-item-box automation manufacturing">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/project-5.jpg" alt="">
                                    </figure>
                                </div>                                
                                
                                <div class="project-tag d-none">
                                    <a href="project-single.html">sustainability</a>
                                </div>
                                
                                <div class="project-content">
                                    <h3><a href="project-single.html">Energy-Efficient Manufacturing Systems</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-3 project-item-box sustainability infrastructure">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="1s">
                                <div class="project-image">
                                    <figure class="image-anime">
                                        <img src="https://html.awaikenthemes.com/toplax/images/project-6.jpg" alt="">
                                    </figure>
                                </div>                                
                                
                                <div class="project-tag d-none">
                                    <a href="project-single.html">infrastructure</a>
                                </div>
                                
                                <div class="project-content">
                                    <h3><a href="project-single.html">Redesigning Factory Layouts for Efficiency</a></h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Work Section End -->
@endsection