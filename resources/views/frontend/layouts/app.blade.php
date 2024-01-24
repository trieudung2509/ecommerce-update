
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ get_setting('site_motto') }}</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Retrina Group" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!--  FavIcon  -->
        <link rel="shortcut icon" href="{{ static_asset('assets/frontend/img/favicon.ico') }}">

        <!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

        <!-- FontAwesome Css -->
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/css/font-awesome.min.css') }}">
        <!-- Line icon Css -->
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/css/LineIcons.css') }}">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/css/bootstrap.css') }}">
        <!-- Owl Carousel Css -->
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/css/owl.carousel.min.css') }}">
        <!-- Magnific Popup Css -->
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/css/magnific-popup.css') }}">
        <!-- Colors Css -->
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/css/golden-color.css') }}" id="option-color">
        <!--  Custom Style CSS  -->
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/css/main.css') }}">
    </head>
    <body data-spy="scroll" data-target="#scrollspy" data-offset="70" class="flat-demo">

    <!--  Pre Loader  -->
    <div id="overlayer"></div>
    <span class="loader"></span>

     <!-- Portfolio Single Modal Start -->
     <div class="portfolio-single modal fade" id="portfolio-single" tabindex="-1" role="dialog" aria-labelledby="portfolioModalScrollable" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content text-muted">
                <div class="modal-header">
                    <h5 class="modal-title" id="portfolioModalScrollable">My Work</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="pt-4 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-10 mx-auto">
                                    <div class="text-center">
                                        <h2 class="mb-3">Single <span class="base-color"> Portfolio</span></h2>
                                        <p class="max-width-450">In a professional context it often happens that private clients corder a publication to be made.</p>
                                    </div>
                                    <div class="row contact-info mt-5">
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <div>
                                                    <h6>Created by:</h6>
                                                    <p class="mb-0">John Doe</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 p-title-border mt-3 mt-md-0">
                                            <div class="text-center">
                                                <div>
                                                    <h6 class="contact_detail-title">Completed on:</h6>
                                                    <p class="mb-0">September 30, 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-3 mt-md-0">
                                            <div class="text-center">
                                                <div>
                                                    <h6>Skills:</h6>
                                                    <p class="mb-0">HTML5 / PHP / CSS3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <div class="portfolio-single-item image-border">
                                            <img src="{{ static_asset('assets/frontend/img/portfolio-15.jpg') }}" class="d-block" alt="...">
                                        </div>
                                    </div>
                                    <div class="text-md-left mt-5">
                                        <p class="my-3">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                        <p class="mt-3 mb-0">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Portfolio Single Modal End  -->

    <!--    Header Start    -->
    <header id="header" class="header fixed-top">
        <nav id="scrollspy" class="navbar navbar-expand-lg header-nav">
            <div class="container-fluid">
                <a class="navbar-brand font-weight-bold special-section" href="/">Dung<span class="base-color">Beta</span></a>
                <!--  Navbar Toggler Button Start -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#toggle-menu" aria-controls="toggle-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="lni-menu size-md"></span>
                </button>
                <!--  Navbar Toggler Button End -->
                <div class="collapse navbar-collapse" id="toggle-menu">
                    <ul class="navbar-nav nav-pills ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active special-section" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link special-section" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link special-section" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link special-section" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link special-section" href="#testimonial">Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link special-section" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link special-section" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <ul class="list-inline socails mt-4  d-lg-none">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-github"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Social -->
    <div class="social-box">
        <div class="follow-label special-section">
            <span>Follow Me</span>
        </div>
        <div class="social">
            <a href="javascript:void(0);" class="special-section"><i class="fa fa-facebook"></i></a>
            <a href="javascript:void(0);" class="special-section"><i class="fa fa-twitter"></i></a>
            <a href="javascript:void(0);" class="special-section"><i class="fa fa-github"></i></a>
            <a href="javascript:void(0);" class="special-section"><i class="fa fa-linkedin"></i></a>
        </div>
    </div> 
	@yield('content')
    <!--   Return To Top  -->
    <a class="return-to-top text-white bg-base-color d-inline-block" href="javascript:void(0)"><i class="lni-arrow-up"></i></a>
    <!--  JavaScripts  -->
    <script data-cfasync="false" src="{{ static_asset('assets/frontend/js/email-decode.min.js') }}">
        
    </script><script src="{{ static_asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
    <!--  Bootstrap Js  -->
    <script src="{{ static_asset('assets/frontend/js/bootstrap.js') }}"></script>
    <!--  Easing Js  -->
    <script src="{{ static_asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
    <!--  Typed Js  -->
    <script src="{{ static_asset('assets/frontend/js/typed.js') }}"></script>
    <!--  Magnific Popup Js  -->
    <script src="{{ static_asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!--  Isotope Js  -->
    <script src="{{ static_asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <!--  Owl Carousel Js  -->
    <script src="{{ static_asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <!--  Particle Js  -->
    <script src="{{ static_asset('assets/frontend/js/particles.min.js') }}"></script>
    <!--  Particle App Js  -->
    <script src="{{ static_asset('assets/frontend/js/particles.app.js') }}"></script>
    <!-- Map Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRemITiP7JRWpZwLhVt-T2x5MeUFE2KWs"></script>
    <!--  Custom JS  -->
    <script src="{{ static_asset('assets/frontend/js/arshia.js') }}"></script>
    @yield('script')

    </body>
</html>