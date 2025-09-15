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
               <h6>Digital printing Service</h6>
               <h1>Project Details</h1>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Portfolio Section Start -->
<section class="project-section fix section-padding section-bg-2 mb-5">
    <div class="portfolio-wrapper">
        <div class="cap-shape float-bob-x">
            <img src="frontend-assets/img/portfolio/cap.png" alt="img">
        </div>
        <div class="shape-2 float-bob-y">
            <img src="frontend-assets/img/portfolio/shape-2.png" alt="img">
        </div>
        <div class="shape-3">
            <img src="frontend-assets/img/portfolio/shape-3.png" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="portfolio-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp">Premium Patches Portfolio</h6>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Explore Our Unique
                                Custom Patch Projects
                            </h2>
                        </div>
                        <ul class="list-items mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <i class="fa-regular fa-check"></i>
                                Extensive selection of materials and premium embroidery options
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                                Custom patch solutions tailored to your brand’s identity
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                                Expert craftsmanship and attention to detail in every design
                            </li>
                        </ul>
                        <a href="{{ url('/contact') }}" class="theme-btn wow fadeInUp" data-wow-delay=".3s">Start Your Custom Order</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="portfolio-image-items">
                        <div class="row g-0">
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="portfolio-image">
                                    <img src="frontend-assets/img/portfolio/01.jpg" alt="img">
                                    <a href="{{ url('/portfolio') }}" class="icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <div class="portfolio-content">
                                        <h3><a href="{{ url('/portfolio') }}">Flag Patch</a></h3>
                                        <h4>Patriotic Series</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="portfolio-image">
                                    <img src="frontend-assets/img/portfolio/02.jpg" alt="img">
                                    <a href="{{ url('/portfolio') }}" class="icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <div class="portfolio-content">
                                        <h3><a href="{{ url('/portfolio') }}">Jeans Patch</a></h3>
                                        <h4>Denim Collection</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="portfolio-image">
                                    <img src="frontend-assets/img/portfolio/03.jpg" alt="img">
                                    <a href="{{ url('/portfolio') }}" class="icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <div class="portfolio-content">
                                        <h3><a href="{{ url('/portfolio') }}">Logo Patch</a></h3>
                                        <h4>Brand Identity Series</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="portfolio-image">
                                    <img src="frontend-assets/img/portfolio/04.jpg" alt="img">
                                    <a href="{{ url('/portfolio') }}" class="icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <div class="portfolio-content">
                                        <h3><a href="{{ url('/portfolio') }}">Cap Patch</a></h3>
                                        <h4>Headwear Collection</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Section Start -->
<!-- <section class="project-section fix section-padding section-bg-2">
   <div class="container">
      <div class="row g-4">
         <div class="col-lg-7">
            <div class="project-box-image-2">
               <img src="frontend-assets/img/project/12.jpg" alt="img">
               <div class="content">
                  <div class="bar-img">
                     <img src="frontend-assets/img/project/bar.png" alt="img">
                  </div>
                  <div class="project-title">
                     <h4><a href="project-details.html">Custom Print Design</a></h4>
                     <p>Electricity</p>
                  </div>
                  <a href="project-details.html" class="icon">
                     <i class="fa-solid fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="project-box-image-2">
               <img src="frontend-assets/img/project/13.jpg" alt="img">
               <div class="content">
                  <div class="bar-img">
                     <img src="frontend-assets/img/project/bar.png" alt="img">
                  </div>
                  <div class="project-title">
                     <h4><a href="project-details.html">Custom Print Design</a></h4>
                     <p>Electricity</p>
                  </div>
                  <a href="project-details.html" class="icon">
                     <i class="fa-solid fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="project-box-image-2">
               <img src="frontend-assets/img/project/14.jpg" alt="img">
               <div class="content">
                  <div class="bar-img">
                     <img src="frontend-assets/img/project/bar.png" alt="img">
                  </div>
                  <div class="project-title">
                     <h4><a href="project-details.html">Custom Print Design</a></h4>
                     <p>Electricity</p>
                  </div>
                  <a href="project-details.html" class="icon">
                     <i class="fa-solid fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="project-box-image-2">
               <img src="frontend-assets/img/project/15.jpg" alt="img">
               <div class="content">
                  <div class="bar-img">
                     <img src="frontend-assets/img/project/bar.png" alt="img">
                  </div>
                  <div class="project-title">
                     <h4><a href="project-details.html">Custom Print Design</a></h4>
                     <p>Electricity</p>
                  </div>
                  <a href="project-details.html" class="icon">
                     <i class="fa-solid fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="project-box-image-2">
               <img src="frontend-assets/img/project/16.jpg" alt="img">
               <div class="content">
                  <div class="bar-img">
                     <img src="frontend-assets/img/project/bar.png" alt="img">
                  </div>
                  <div class="project-title">
                     <h4><a href="project-details.html">Custom Print Design</a></h4>
                     <p>Electricity</p>
                  </div>
                  <a href="project-details.html" class="icon">
                     <i class="fa-solid fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="project-box-image-2 style-2">
               <img src="frontend-assets/img/project/17.jpg" alt="img">
               <div class="content">
                  <div class="bar-img">
                     <img src="frontend-assets/img/project/bar.png" alt="img">
                  </div>
                  <div class="project-title">
                     <h4><a href="project-details.html">Custom Print Design</a></h4>
                     <p>Electricity</p>
                  </div>
                  <a href="project-details.html" class="icon">
                     <i class="fa-solid fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->

@endsection