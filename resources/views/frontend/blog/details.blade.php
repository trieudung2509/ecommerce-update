@extends('frontend.layouts.app')
@section('content')
<section class="section hero page-hero position-relative pt-5" id="hero">
        <div class="container page-container">
            <div class="row pt-5">
                <div class="col-lg-12">
                    <div class="title-content">
                        <!-- <h1 class="base-color h3">The best way to become a good web designer</h1> -->
                    </div>
                </div>
            </div>
            <!-- Breadcrumb -->
            <div class="row page-title pb-5">
                <div class="col-12">
                    <ul class="mb-0 breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="colorfull.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="blog.html">Web design</a>
                        </li>
                        <li class="breadcrumb-item">{{ $blog->title }}</li>
                    </ul>  
                </div>
            </div>
        </div>
    <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="2880" height="336"></canvas>
</section>

<section id="blog-single" class="section py-5 blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 blog">
                    <div class="rounded">
                        <div class="text-md-left">
                            <h1 class="mb-4 h4">{{ $blog->title }}</h1>
                            <div class="entry-meta mb-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="base-color" href="javascript::void(0)"><i class="fa fa-calendar"></i>{{ date('d M Y', strtotime($blog->updated_at)); }}</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="base-color" href="javascript::void(0)" title="Posts by admin" rel="author"><i class="fa fa-user"></i>admin</a>                                    
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="base-color" href="javascript::void(0)" rel="category tag"><i class="fa fa-folder-open"></i>Logo Design</a>                                    
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="base-color" href="javascript::void(0)"><i class="fa fa-comments"></i>No Comments.</a>                                 
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-image image-border mb-4">
                                <img src="{{ uploaded_asset($blog->banner)}}" alt="{{ $blog->title }}">
                            </div>
                            <div class="entry-content box-border p-3">
                               {!! $blog->description !!}
                            </div>
                            <nav id="nav-single" class="mt-4">
                                <span class="nav-previous button-border">
                                    <a class="pill-button" href="blog-single.html" rel="prev">Previous Post</a>
                                </span>
                                <span class="nav-next button-border float-right">
                                    <a class="pill-button" href="blog-single.html" rel="next">Next Post</a>
                                </span> 
                            </nav>
                        </div>
                    </div>
                </div>
                <!--   Aside Start   -->
                <aside class="post-sidebar">
                    <!-- Toggler Button -->
                    <div class="post-sidebar-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="post-sidebar-content">
                        <!-- Search -->
                        <div class="search">
                            <form action="#" role="search" method="get">
                                <div class="position-relative  form-group">
                                    <input type="text" placeholder="Enter your keywords..." id="search" name="s">
                                    <button type="submit" id="searchsubmit" class="btn"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Recent Posts -->
                        <div class="aside-contents">
                            <div class="aside-title">
                                <span class="base-color">Recent Posts</span>
                            </div>
                            <div class="aside-item">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fa fa-circle-o base-color"></i><a href="#">Be Your Best Version</a></li>
                                    <li><i class="fa fa-circle-o base-color"></i><a href="#">5 Tips In UI/UX Web Design</a></li>
                                    <li><i class="fa fa-circle-o base-color"></i><a href="#">Write Your Dreams</a></li>
                                    <li><i class="fa fa-circle-o base-color"></i><a href="#">Learn HTML5 and CSS3 in 5 days</a></li>
                                    <li><i class="fa fa-circle-o base-color"></i><a href="#">Witch one is better? React or Vue?</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Categories -->
                        <div class="aside-contents">
                            <div class="aside-title">
                                <span class="base-color">Categories</span>
                            </div>
                            <div class="aside-item">
                                <ul class="list-unstyled mb-0">
                                    <li class="cat-item"><i class="fa fa-circle-o base-color"></i><a href="#">Develop</a></li>
                                    <li class="cat-item"><i class="fa fa-circle-o base-color"></i><a href="#">Logo Design</a></li>
                                    <li class="cat-item"><i class="fa fa-circle-o base-color"></i><a href="#">UI and UX</a></li>
                                    <li class="cat-item"><i class="fa fa-circle-o base-color"></i><a href="#">Web Design</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Tags -->
                        <div class="aside-contents">
                            <div class="aside-title">
                                <span class="base-color">Tags</span>
                            </div>
                            <div class="aside-item blog-single-tag mb-0">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fa fa-circle-o base-color"></i><a href="#">CSS3</a></li>
                                    <li><i class="fa fa-circle-o base-color"></i><a href="#">HTML5</a></li>
                                    <li><i class="fa fa-circle-o base-color"></i><a href="#">Web Design</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!--   Aside End   --> 
            </div>
        </div>
    </section>



@endsection