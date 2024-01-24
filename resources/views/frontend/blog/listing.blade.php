@extends('frontend.layouts.app')
@section('content')

    <!--    Hero Start    -->
    <section class="section hero page-hero position-relative pt-5" id="hero">
        <div class="container page-container">
            <div class="row pt-5">
                <div class="col-lg-12">
                    <div class="title-content">
                        <h2 class="base-color">Latest blog</h2>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb -->
            <div class="row page-title pb-5">
                <div class="col-12">
                    <ul class="mb-0 breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">Blog</li>
                    </ul>  
                </div>
            </div>
        </div>
    </section>

    <!--  Blog Start  -->
    <section id="blog" class="section blog py-5">
        <div class="container">
            <div class="row">
                @if (count($blogs) > 0)
                    @foreach($blogs as $blog)
                        <!--  Item 01 -->
                        <div class="col-lg-4">
                            <div class="blog-item box-border">
                                <div class="blog-image">
                                    <div class="blog-intro">
                                        <img src="{{ uploaded_asset($blog->banner)}}" alt="{{ $blog->title }}">
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <h6 class="mb-3 mt-4"><a class="text-dark" href="{{ route('blog.details',['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h6>
                                    <p class="text-dark">{{ $blog->short_description }}</p>
                                    <div class="blog-link">
                                        <a class="base-color" href="{{ route('blog.details',['slug' => $blog->slug]) }}">Read More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--   Blog End   -->

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
            <!-- Recent Comments -->
            <div class="aside-contents">
                <div class="aside-title">
                    <span class="base-color">Recent Comments</span>
                </div>
                <div class="aside-item">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fa fa-circle-o base-color"></i><a href="#">A WordPress Commenter on Hello world!</a></li>
                        <li><i class="fa fa-circle-o base-color"></i><a href="#">There are 3 ways to know witch one is better? I say Vue</a></li>
                        <li><i class="fa fa-circle-o base-color"></i><a href="#">Thanks for your Html 5 and Css 3 learning. That was awesome.</a></li>
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
            <!-- Archives -->
            <div class="aside-contents">
                <div class="aside-title">
                    <span class="base-color">Archives</span>
                </div>
                <div class="aside-item">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fa fa-circle-o base-color"></i><a href="#">November 2020</a></li>
                        <li><i class="fa fa-circle-o base-color"></i><a href="#">October 2020</a></li>
                        <li><i class="fa fa-circle-o base-color"></i><a href="#">July 2020</a></li>
                        <li><i class="fa fa-circle-o base-color"></i><a href="#">April 2020</a></li>
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

@endsection
