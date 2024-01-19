@extends('frontend.layouts.app')
@section('content')
    <!--    Hero Start    -->
    <section class="section hero hero-07 full-screen p-0" id="hero">
        <div class="container-fluid">
            <div class="text-center hero-content">
                <div class="col-lg-12">
                    <div class="hero-content text-center">
                        <h3 class="text-white mb-0 mt-3">I'M Dung Beta</h3>
                        <h1 class="text-white text-capitalize mb-3"><span class="base-color">A  </span> <span class="element" data-elements="UI Designer.,Web Designer.,Web Developer."></span></h1>
                        <p class=" mx-auto mt-4 text-white">
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="scroll-down">
                <a href="#about">
                    <span></span>
                </a>
            </div>
        </div>
    </section>
    <!--    Hero End    -->

    <!--   About Start   -->
    <section id="about" class="section about pb-5 pt-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-border">
                        <img src="{{ static_asset('assets/frontend/img/about-03.jpg') }}" alt="/">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="personal-item ">
                        <h2 class="mb-0 base-color">About Me</h2>
                        <h5 class="text-dark my-3"><span class="base-color">UI/UX</span> Designer & Web Developer</h5>
                        <div class="row">
                            <div class="col-6 personal-info">
                                <ul class="list-unstyled">
                                    <li>
                                        <p>Birthday : <span> 1 April 1990</span></p>
                                    </li>
                                    <li>
                                        <p>Website : <span> www.retrina.com</span></p>
                                    </li>
                                    <li>
                                        <p>Phone : <span> +123 456 7890</span></p>
                                    </li>
                                    <li>
                                        <p>City : <span> New York, USA</span></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 personal-info">
                                <ul class="list-unstyled">
                                    <li>
                                        <p>Age : <span> 30</span></p>
                                    </li>
                                    <li>
                                        <p>Degree : <span> Master</span></p>
                                    </li>
                                    <li>
                                        <p>Mail : <span> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4033212d302c250032253432292e216e232f2d">[email&#160;protected]</a></span></p>
                                    </li>
                                    <li>
                                        <p>Freelance : <span> Available</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="button-border mt-3 mb-lg-0 mr-4">
                        <a href="javascript:void(0);" class="pill-button">Download Cv</a>
                    </div>
                    <div class="button-border mt-3 mb-lg-0">
                        <a href="#contact" class="pill-button to-contact">Hire Me</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    About End    -->

    <!--  Skill Start  -->
    <section id="skills" class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-content mb-4">
                        <p class="mb-2">level of knowledge</p>
                        <h2 class="base-color"> My skills</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="skill-boxes">
                        <div class="row">
                            <!-- Skill -->
                            <div class="col-lg-6">
                                <div class="skill-box">
                                    <div class="skillbar clearfix" data-percent="95%">
                                        <div class="skillbar-title"><span>HTML</span></div>
                                        <div class="skillbar-bar fill-skillbar"></div>
                                        <div class="skill-bar-percent">95%</div>
                                    </div>
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>CSS</span></div>
                                        <div class="skillbar-bar fill-skillbar"></div>
                                        <div class="skill-bar-percent">85%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>PHP</span></div>
                                        <div class="skillbar-bar fill-skillbar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="skill-box">
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>angular js</span></div>
                                        <div class="skillbar-bar fill-skillbar"></div>
                                        <div class="skill-bar-percent">90%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="95%">
                                        <div class="skillbar-title"><span>javascript</span></div>
                                        <div class="skillbar-bar fill-skillbar"></div>
                                        <div class="skill-bar-percent">95%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>wordpress</span></div>
                                        <div class="skillbar-bar fill-skillbar"></div>
                                        <div class="skill-bar-percent">70%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   Skill End   -->

     <!--  Service Start  -->
    <section id="services" class="section services py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-content mb-4">
                        <p class="mb-2">get support for the services</p>
                        <h2 class="base-color">My services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Item 01 -->
                <div class="col-lg-4 text-left">
                    <div class="services-item box-hover-border">
                        <div class="float-left mt-lg-1 d-inline-block services-icon">
                            <i class="lni-brush-alt size-md base-color"></i>
                        </div>
                        <div class="services-content">
                            <h5 class="mb-3">Graphic Design</h5>
                            <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 02 -->
                <div class="col-lg-4 text-left">
                    <div class="services-item box-hover-border">
                        <div class="float-left mt-lg-1 d-inline-block services-icon">
                            <i class="lni-check-mark-circle size-md base-color"></i>
                        </div>
                        <div class="services-content">
                            <h5 class="mb-3">Bootstrap support</h5>
                            <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 03 -->
                <div class="col-lg-4 text-left">
                    <div class="services-item box-hover-border">
                        <div class="float-left mt-lg-1 d-inline-block services-icon">
                            <i class="lni-heart size-md base-color"></i>
                        </div>
                        <div class="services-content">
                            <h5 class="mb-3">Portfolio of works</h5>
                            <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 04 -->
                <div class="col-lg-4 text-left">
                    <div class="services-item box-hover-border">
                        <div class="float-left mt-lg-1  d-inline-block services-icon">
                            <i class="lni-mobile size-md base-color"></i>
                        </div>
                        <div class="services-content">
                            <h5 class="mb-3">Responsive Theme</h5>
                            <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 05 -->
                <div class="col-lg-4 text-left">
                    <div class="services-item box-hover-border">
                        <div class="float-left mt-lg-1 d-inline-block services-icon">
                            <i class="lni-world size-md base-color mb-0"></i>
                        </div>
                        <div class="services-content">
                            <h5 class="mb-3">Go Beyond Limits</h5>
                            <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 06 -->
                <div class="col-lg-4 text-left">
                    <div class="services-item box-hover-border">
                        <div class="float-left mt-lg-1 d-inline-block services-icon">
                            <i class="lni-cup size-md base-color"></i>
                        </div>
                        <div class="services-content">
                            <h5 class="mb-3">Premium Slider</h5>
                            <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   Service End   -->

    <!-- Portfolio Start -->
    <section id="portfolio" class="section portfolio py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-content mb-4">
                        <p class="mb-0">Awesome works and enjoy</p>
                        <h2 class="base-color">My portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--   Portfolio Filters   -->
                <ul id="portfolio-filter" class="list-unstyled list-inline mb-0 col-lg-12 portfolio-filter">
                    <li class="button-border list-inline-item">
                        <a href="#" data-filter="*" class="pill-button active">All</a>
                    </li>
                    <li class="button-border list-inline-item">
                        <a href="#" data-filter=".webdesign" class="pill-button">Web Design</a>
                    </li>
                    <li class="button-border list-inline-item">
                        <a href="#" data-filter=".mobiledesign" class="pill-button">Mobile Design</a>
                    </li>
                    <li class="button-border list-inline-item">
                        <a href="#" data-filter=".seo" class="pill-button">Seo</a>
                    </li>
                    <li class="button-border list-inline-item">
                        <a href="#" data-filter=".graphic" class="pill-button">Graphic</a>
                    </li>
                </ul>
            </div>
            <div class="portfolio-items row">
                <!-- Item 01 -->
                <div class="col-lg-4 portfolio-item seo">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-10.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-10.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 02 -->
                <div class="col-lg-4 portfolio-item graphic webdesign">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-11.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-11.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 03 -->
                <div class="col-lg-4 portfolio-item webdesign graphic">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-12.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-12.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 04 -->
                <div class="col-lg-4 portfolio-item mobiledesign webdesign">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-13.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-13.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 05 -->
                <div class="col-lg-4 portfolio-item mobiledesign seo">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-14.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-14.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 06 -->
                <div class="col-lg-4 portfolio-item mobiledesign">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-15.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-15.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 01 -->
                <div class="col-lg-4 portfolio-item seo">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-12.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-10.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 02 -->
                <div class="col-lg-4 portfolio-item graphic webdesign">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-11.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-11.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 03 -->
                <div class="col-lg-4 portfolio-item webdesign graphic">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-14.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-12.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 04 -->
                <div class="col-lg-4 portfolio-item mobiledesign webdesign">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-10.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-13.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 05 -->
                <div class="col-lg-4 portfolio-item mobiledesign seo">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-15.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-14.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 06 -->
                <div class="col-lg-4 portfolio-item mobiledesign">
                    <div class="image-border">
                        <div class="portfolio-item-content">
                            <img src="{{ static_asset('assets/frontend/img/portfolio-13.jpg') }}" alt="/" class="img-fluid">
                            <div class="img-overlay text-center">
                                <div class="img-overlay-content">
                                    <div class="portfolio-icon">
                                        <a href="javascript:void();" type="button" data-toggle="modal" data-target="#portfolio-single"><i class="lni-link"></i></a>
                                        <a href="{{ static_asset('assets/frontend/img/portfolio-15.jpg') }}" class="js-zoom-gallery">
                                            <i class="lni-search"></i>
                                        </a>
                                    </div>
                                    <h5 class="mt-3 mb-0">My Work</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center pt-2">
                    <div class="button-border d-inline-block mr-2 mr-sm-4">
                        <button class="pill-button showMore" id="showMore">Show More</button>
                        <span id="showMore-initials" class="d-none" class="d-none" data-initial="6" data-next="3"></span>
                    </div>
                    <div class="button-border d-inline-block">
                        <a href="portfolio.html" class="pill-button">Portfolio Page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Portfolio End  -->

    <!-- Testimonial Start -->
    <section id="testimonial" class="section testimonial py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-content mb-4">
                        <p class="mb-0">What clients think about me</p>
                        <h2 class="base-color">Clients say</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel">
                <!-- Testimonial Item-01 -->
                <div class="testimonial-item box-border">
                    <div class="testimonial-header">
                        <div class="image-border">
                            <img src="{{ static_asset('assets/frontend/img/client-01.png') }}" alt="/">
                        </div>
                        <div class="testimonial-detail">
                            <span class="d-block font-weight-bold">John Doe,</span>
                            <small class="text-muted"> CEO Management</small>
                        </div>
                    </div>
                    <p class="mb-0 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                </div>
                <!-- Testimonial Item-02 -->
                <div class="testimonial-item box-border">
                    <div class="testimonial-header">
                        <div class="image-border">
                            <img src="{{ static_asset('assets/frontend/img/client-02.png') }}" alt="/">
                        </div>
                        <div class="testimonial-detail">
                            <span class="d-block font-weight-bold">Mary Jane,</span>
                            <small class="text-muted"> Marketing Head</small>
                        </div>
                    </div>
                    <p class="mb-0 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                </div>
                <!-- Testimonial Item-03 -->
                <div class="testimonial-item box-border">
                    <div class="testimonial-header">
                        <div class="image-border">
                            <img src="{{ static_asset('assets/frontend/img/client-03.png') }}" alt="/">
                        </div>
                        <div class="testimonial-detail">
                            <span class="d-block font-weight-bold">Jully Doe,,</span>
                            <small class="text-muted"> Design Strategist</small>
                        </div>
                    </div>
                    <p class="mb-0 text-muted">" In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made. "</p>
                </div>
            </div>
        </div>
    </section>
    <!--  Testimonial End  -->

    <!--  Blog Start  -->
    <section id="blog" class="section blog py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-content mb-4">
                        <p class="mb-0">Check out my blog Posts</p>
                        <h2 class="base-color">Latest blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--  Item 01 -->
                <div class="col-lg-4">
                    <div class="blog-item box-border">
                        <div class="blog-image">
                            <div class="blog-intro">
                                <img src="{{ static_asset('assets/frontend/img/blog-01.jpg') }}" alt="/">
                            </div>
                        </div>
                        <div class="blog-content">
                            <ul class="list-inline mt-4">
                                <li class="list-inline-item">
                                    <i class="lni-calendar base-color"></i>
                                    <span class="text-muted">June 02, 2020 </span>
                                </li>
                                <li class="list-inline-item">
                                    <i class="lni-comment base-color"></i>
                                    <span class="text-muted">5</span>
                                </li>
                            </ul>
                            <h6 class="mb-3"><a class="text-dark" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single"> Be Your Best Version</a></h6>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                            <div class="blog-link">
                                <a class="base-color" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Item 02 -->
                <div class="col-lg-4">
                    <div class="blog-item box-border">
                        <div class="blog-image">
                            <div class="blog-intro">
                                <img src="{{ static_asset('assets/frontend/img/blog-02.jpg') }}" alt="/">
                            </div>
                        </div>
                        <div class="blog-content">
                            <ul class="list-inline mt-4">
                                <li class="list-inline-item">
                                    <i class="lni-calendar base-color"></i>
                                    <span class="text-muted">June 08, 2020 </span>
                                </li>
                                <li class="list-inline-item">
                                    <i class="lni-comment base-color"></i>
                                    <span class="text-muted">3</span>
                                </li>
                            </ul>
                            <h6 class="mb-3"><a class="text-dark" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single"> 5 Tips In UI/UX Web Design</a></h6>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                            <div class="blog-link">
                                <a class="base-color" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Item 03 -->
                <div class="col-lg-4">
                    <div class="blog-item box-border">
                        <div class="blog-image">
                            <div class="blog-intro">
                                <img src="{{ static_asset('assets/frontend/img/blog-03.jpg') }}" alt="/">
                            </div>
                        </div>
                        <div class="blog-content">
                            <ul class="list-inline mt-4">
                                <li class="list-inline-item">
                                    <i class="lni-calendar base-color"></i>
                                    <span class="text-muted">June 12, 2020 </span>
                                </li>
                                <li class="list-inline-item">
                                    <i class="lni-comment base-color"></i>
                                    <span class="text-muted">8</span>
                                </li>
                            </ul>
                            <h6 class="mb-3"><a class="text-dark" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single"> Write Your Dreams</a></h6>
                            <p class="text-dark">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                            <div class="blog-link">
                                <a class="base-color" href="javascript:void(0)" target="_blank" data-toggle="modal" data-target="#blog-single">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="button-border">
                        <a href="blog.html" class="pill-button">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   Blog End   -->

    <!-- Contact Start -->
    <section id="contact" class="section contact py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-content">
                        <p class="mb-0">Feel free to contact me any time</p>
                        <h2 class="base-color mb-0">Get in touch</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="image-border">
                        <div id="my-map" data-location-lat="43.053454"  data-location-lng="-76.144508" data-location-icon="{{ static_asset('assets/frontend/img/location-map.png') }}"></div>
                    </div>
                </div>
            </div>
            <div class="row contact-info mt-5">
                <div class="col-lg-4">
                    <div class="text-left">
                        <div class="base-color">
                            <i class="lni-phone-handset size-sm float-left pt-1"></i>
                        </div>
                        <div class="mt-3 info">
                            <h5 class="mb-0">Call Us On</h5>
                            <p class="text-muted">+123 456 7890</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-left">
                        <div class="base-color">
                            <i class="lni-map-marker size-sm float-left pt-1"></i>
                        </div>
                        <div class="mt-3 info">
                            <h5 class="mb-0 contact_detail-title">Visit Office</h5>
                            <p class="text-muted">24 Street, New York, United State.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-left">
                        <div class="base-color">
                            <i class="lni-pointer size-sm float-left pt-1"></i>
                        </div>
                        <div class="mt-3 info">
                            <h5 class="mb-0">Email Us At</h5>
                            <p class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ae9fbf7eaf6ffdaeff5f4ffb4f9f5f7">[email&#160;protected]</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5 contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 form-item">
                                <div class="form-group">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required >
                                </div>
                            </div>
                            <div class="col-lg-6 form-item">
                                <div class="form-group">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required >
                                </div>
                            </div>
                            <div class="col-12 form-item">
                                <div class="form-group">
                                    <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Subject*" required >
                                </div>
                            </div>
                            <div class="col-12 form-item">
                                <div class="form-group">
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4 text-left">
                                <div class="button-border">
                                    <a href="javascript:void(0)" class="pill-button" id="submit-btn" onclick="sendEmail()">Send Message</a>
                                </div>
                                <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                    <div class="toast-body d-inline-block"></div>
                                    <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true" class="lni-close size-xs "></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row copy-right">
                <div class="col-12 text-center text-dark">
                    <p>Copyright © 2019. Template has been designed by <span class="base-color">Retrina</span></p>
                </div>
            </div>
        </div>
    </section>
    <!--  Contact End  -->
    @endsection