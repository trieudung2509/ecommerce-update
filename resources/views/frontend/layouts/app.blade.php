
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dung Beta - Fully Responsive Personal Template</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Retrina Group" />

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

    <!-- Blog Single Modal Start -->
    <div class="blog-single modal fade" id="blog-single" tabindex="-1" role="dialog" aria-labelledby="blogModalScrollable" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogModalScrollable">Blog Single Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--   Blog-single   Start -->
                    <div class="pt-4 pb-5 text-muted">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 mx-auto blog">
                                    <div class="rounded">
                                        <div class="text-md-left">
                                            <h1 class="mb-4 h4">The best way to become a good web designer</h1>
                                            <div class="entry-meta mb-4">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="base-color" href="blog.html"><i class="fa fa-calendar"></i>21 Jul 2020</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="base-color" href="blog.html" title="Posts by admin" rel="author"><i class="fa fa-user"></i>admin</a>                                    
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="base-color" href="blog.html" rel="category tag"><i class="fa fa-folder-open"></i>Logo Design</a>                                    
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="base-color" href="blog.html"><i class="fa fa-comments"></i>No Comments.</a>                                 
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry-image image-border mb-4">
                                                <img src="{{ static_asset('assets/frontend/img/blog-01.jpg') }}" alt="">
                                            </div>
                                            <div class="entry-content box-border p-3">
                                                <p>These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                                <div class="px-md-5 px-3 py-4 quotation">
                                                    <i class="base-color lni-quotation size-md"></i>
                                                    <h6 class="base-color font-italic mb-0">We Love Buna, lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper.</h6>
                                                </div>
                                                <p class="my-3">This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                                <ul class="mt-4 checkmark-list mb-0">
                                                    <!-- Item-01 -->
                                                    <li class="mb-2">
                                                        <span>The purpose of lorem ipsum is to create</span>
                                                    </li>
                                                    <!-- Item-02 -->
                                                    <li class="mb-2">
                                                        <span>In particular, the garbled words of lorem ipsum</span>
                                                    </li>
                                                    <!-- Item-03 -->
                                                    <li class="">
                                                        <span>occasionally circumstances occur in which toil</span>
                                                    </li>
                                                </ul>
                                                <p class="mt-3 mb-0">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                            </div>
                                            <!-- Comments -->
                                            <h2 class="text-left my-4">Comments</h2>
                                            <div id="user-comments" class="comments mt-4 box-border">
                                                <ul class="comment even thread-even depth-1 list-unstyled comments-list m-0" id="comment-1">
                                                    <li id="div-comment-1" class="p-3">
                                                        <div class="comment-wrap">
                                                            <div class="comment-image float-left">
                                                                <div class="commnet-image-border">
                                                                    <img alt="/" src="{{ static_asset('assets/frontend/img/client-02.png') }}" class="avatar avatar-65 photo" height="65" width="65">
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-author">
                                                                    <span>Jessy Doe</span>
                                                                    <p class="text-muted comment-date">July 23, 2020 at 9:32 am</p>
                                                                    <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <span>Hi, this is a comment. To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard. Commenter avatars come from Gravatar.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li id="div-comment-1-2" class="reply-comment p-3">
                                                        <div class="comment-wrap">
                                                            <div class="comment-image float-left">
                                                                <div class="commnet-image-border">
                                                                    <img alt="/" src="{{ static_asset('assets/frontend/img/client-03.png') }}" class="avatar avatar-65 photo" height="65" width="65">
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-author">
                                                                    <span>Marry Doe</span>
                                                                    <p class="text-muted comment-date">July 23, 2020 at 9:32 am</p>
                                                                    <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <span>Hi, this is a comment. To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard. Commenter avatars come from Gravatar.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="comments-devider"></div>
                                                <ul class="comment even thread-even depth-1 list-unstyled comments-list m-0" id="comment-2">
                                                    <li id="div-comment-2" class="p-3">
                                                        <div class="comment-wrap">
                                                            <div class="comment-image float-left">
                                                                <div class="commnet-image-border">
                                                                    <img alt="/" src="{{ static_asset('assets/frontend/img/client-01.png') }}" class="avatar avatar-65 photo" height="65" width="65">
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-author">
                                                                    <span>Michael Anderson</span>
                                                                    <p class="text-muted comment-date">July 23, 2020 at 9:32 am</p>
                                                                    <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <span>Hi, this is a comment. To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard. Commenter avatars come from Gravatar.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="comments-devider"></div>
                                                <ul class="comment even thread-even depth-1 list-unstyled comments-list m-0" id="comment-3">
                                                    <li id="div-comment-3" class="p-3">
                                                        <div class="comment-wrap">
                                                            <div class="comment-image float-left">
                                                                <div class="commnet-image-border">
                                                                    <img alt="/" src="{{ static_asset('assets/frontend/img/client-03.png') }}" class="avatar avatar-65 photo" height="65" width="65">
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-author">
                                                                    <span>Olivia Anderson</span>
                                                                    <p class="text-muted comment-date">July 23, 2020 at 9:32 am</p>
                                                                    <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <span>Hi, this is a comment. To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard. Commenter avatars come from Gravatar.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--Blog Reply-->
                                            <div class="contact mt-4">
                                                <div class="contact-form">
                                                    <h2 class="text-left mb-4">Leave a reply</h2>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 form-item">
                                                                <div class="form-group">
                                                                    <input name="name" id="blog-name" type="text" class="form-control" placeholder="Your Name*" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 form-item">
                                                                <div class="form-group">
                                                                    <input name="email" id="blog-email" type="email" class="form-control" placeholder="Your Email*" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 form-item">
                                                                <div class="form-group">
                                                                    <textarea name="comments" id="blog-comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mt-4 text-left">
                                                                <div class="button-border">
                                                                    <button type="submit" class="pill-button" id="blog-submit-btn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Blog Single Modal End  -->

    <!--    Header Start    -->
    <header id="header" class="header fixed-top">
        <nav id="scrollspy" class="navbar navbar-expand-lg header-nav">
            <div class="container-fluid">
                <a class="navbar-brand font-weight-bold special-section" href="#hero">Dung<span class="base-color">Beta</span></a>
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

    <!-- Start Options -->
    <div id="color-switcher" class="color-switcher" >
        <div class="text-center color-pallet hide">
            <h6 class="theme-skin-title">Theme Skin</h6>
            <ul class="theme-skin list-inline">
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="flat-skin active">Flat</a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="neo-skin">Neo</a>
                </li>
            </ul>
            <h6 class="text-center mt-3">Select your color</h6>
            <ul class="pattern">
                <li>
                    <a class="color1" href="#"></a>
                </li>
                <li>
                    <a class="color2" href="#"></a>
                </li>
                <li>
                    <a class="color3" href="#"></a>
                </li>
                <li>
                    <a class="color4" href="#"></a>
                </li>
                <li>
                    <a class="color5" href="#"></a>
                </li>
                <li>
                    <a class="color6" href="#"></a>
                </li>
                <li>
                    <a class="color7" href="#"></a>
                </li>
                <li>
                    <a class="color8" href="#"></a>
                </li>
                <li>
                    <a class="color9" href="#"></a>
                </li>
            </ul>
            <h6 class="my-2 color-scheme-title">Light & Dark Version</h6>
            <ul class="color-scheme list-inline">
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="light-scheme active"><i class="lni-sun"></i> Light</a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="dark-scheme"><i class="lni-night"></i> Dark</a>
                </li>
            </ul>
        </div>
        <div class="pallet-button hide">
            <a href="#" class="cp-toggle"><i class="fa fa-cog fa-spin"></i></a>
        </div>
    </div>
    <!-- End Options -->

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

    </body>
</html>