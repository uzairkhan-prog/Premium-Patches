@extends('layouts.master')
@section('content')

<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-section section-bg-2">
    <div class="container-fluid">
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontend-assets/img/breadcrumb-bg.jpg');">
            <div class="flower-shape">
                <img src="frontend-assets/img/flower-shape.png" alt="img">
            </div>
            <div class="star-shape">
                <img src="frontend-assets/img/star-shape.png" alt="img">
            </div>
            <div class="container">
                <div class="page-heading center">
                    <h6>Blogs</h6>
                    <h1>Blog Page</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Section Start -->
<section class="blog-section-3 section-padding mb-5 pt-5">
    <div class="container">
        <div class="section-title text-center">
            <h6 class="bg-5 wow fadeInUp">Our Blogs</h6>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Get Updated News & Blogs<br>
                From Our Patch Collection
            </h2>
        </div>
        <div class="row">
            <!-- Space Patch Blog -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="blog-box-items">
                    <div class="blog-image">
                        <img src="frontend-assets/img/news/01.jpg" alt="Space Patch">
                        <img src="frontend-assets/img/news/01.jpg" alt="Space Patch">
                    </div>
                    <div class="blog-content">
                        <span>Space Patch</span>
                        <h3>
                            <a href="news-details.html">Launch Into Style: Explore Our Custom Space Patches</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- Falcon Patch Blog -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <div class="blog-box-items">
                    <div class="blog-image">
                        <img src="frontend-assets/img/news/02.jpg" alt="Falcon Patch">
                        <img src="frontend-assets/img/news/02.jpg" alt="Falcon Patch">
                    </div>
                    <div class="blog-content">
                        <span>Falcon Patch</span>
                        <h3>
                            <a href="news-details.html">Strength & Grace: The Falcon Patch Collection Unveiled</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- Flag Patch Blog -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <div class="blog-box-items">
                    <div class="blog-image">
                        <img src="frontend-assets/img/news/03.jpg" alt="Flag Patch">
                        <img src="frontend-assets/img/news/03.jpg" alt="Flag Patch">
                    </div>
                    <div class="blog-content">
                        <span>Flag Patch</span>
                        <h3>
                            <a href="news-details.html">Proudly Worn: New Arrivals in Our Flag Patch Lineup</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="news-button text-center mt-5 wow fadeInUp" data-wow-delay=".3s">
            <a href="news.html" class="theme-btn">All Blogs</a>
        </div> -->
    </div>
</section>

@endsection