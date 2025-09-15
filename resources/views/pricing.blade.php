@extends('layouts.master')
@section('content')

<main>
   <!-- about breadcrumb area start -->
   <section class="breadcrumb__area breadcrumb-style pt-130 pb-115 p-relative z-index-1" data-background="{{ asset('frontend-assets/img/breadcrumb/breadcrumb-bg-1.jpg') }}">
      <div class="breadcrumb__bg-overlay m-img"></div>
      <div class="breadcrumb-shape  d-none d-lg-block">
         <div class="shape-1">
            <img src="{{ asset('frontend-assets/img/breadcrumb/breadcrumb-shape.png') }}" alt="">
         </div>
         <div class="shape-2">
            <img src="{{ asset('frontend-assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
         </div>
      </div>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-10">
               <div class="breadcrumb__content text-center">
                  <h3 class="breadcrumb__title">Our Patches Pricing</h3>
                  <div class="breadcrumb__list breadcrumb__list-translate">
                     <span><a href="home">Home</a></span>
                     <span class="dvdr"><i class="fa-sharp fa-regular fa-minus"></i></span>
                     <span>Patches Pricing</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- about breadcrumb area end -->

   @include('sections.pricing')

   <!-- team area start -->
   <section id="teamBubble" class="tp-team-3-area tp-team-2-bg pt-50 pb-50 p-relative">
      <div class="tp-team-2-shape">
         <img class="shape-1 d-none d-lg-block" src="{{ asset('frontend-assets/img/team/home-2/shape-1.png') }}" alt="">
         <img class="shape-2" src="{{ asset('frontend-assets/img/team/home-2/shape-2.png') }}" alt="">
         <img class="shape-3" src="{{ asset('frontend-assets/img/team/home-2/shape-3.png') }}" alt="">
         <img class="mousemove__image shape-4 d-none d-lg-block" src="{{ asset('frontend-assets/img/team/home-2/bubble-1.png') }}"
            alt="">
         <img class="mousemove__image shape-5 d-none d-lg-block" src="{{ asset('frontend-assets/img/team/home-2/bubble-2.png') }}"
            alt="">
         <img class="mousemove__image shape-6 d-none d-lg-block" src="{{ asset('frontend-assets/img/team/home-2/bubble-3.png') }}"
            alt="">
      </div>
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-7">
               <div class="tp-team-3-wrapper p-relative pb-60 wow fadeInLeft" data-wow-duration="1s"
                  data-wow-delay=".3s">
                  <div class="tp-inner-pre">
                     <span><i class="fa-solid fa-vest-patches"></i></span>
                  </div>
                  <h3 class="tp-section__title">Our Portfolio</h3>
                  <h5>Experience top-tier quality with our expert digitizing and vector services!</h5>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="tp-team-2-btn team-3 text-lg-end wow fadeInRight" data-wow-duration="1s"
                  data-wow-delay=".3s">
                  <a class="tp-btn" href="{{ url('/contact') }}">Contact Now <i
                        class="fa-regular fa-arrow-right-long"></i></a>
               </div>
            </div>
         </div>
         <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            <!-- <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
        <div class="tp-team-2-thumb mb-30 shadow">
           <a href="{{ url('/portfolio') }}"><img src="{{ asset('frontend-assets/img/portfolio/home-3/patches-address/img-1.jpg') }}" alt=""></a>
           <div class="tp-team-2-social d-flex justify-content-center tp-btn-effect">
           </div>
           <div class="tp-team-2-inner text-center">
              <h4 class="tp-team-title"><a href="{{ url('/portfolio') }}">VECTOR ART</a></h4>
              <span>CUSTOM PATCHES</span>
           </div>
           <img class="pricing-logo" src="{{ asset('frontend-assets/img/logo/favicon.png') }}">
           <h1 class="text-center">$10</h1>
        </div>
     </div> -->
            @for ($i = 1; $i <= 20; $i++)
               <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
               <div class="tp-team-2-thumb mb-30 shadow">
                  <a href="{{ url('/portfolio') }}">
                     <img src="{{ asset('frontend-assets/img/portfolio/home-3/patches-address/' . $i . '.jpg') }}" alt="">
                  </a>
                  <div class="tp-team-2-social d-flex justify-content-center tp-btn-effect">
                  </div>
                  <div class="tp-team-2-inner text-center">
                     <h4 class="tp-team-title"><a href="{{ url('/portfolio') }}">VECTOR ART</a></h4>
                     <span>CUSTOM PATCHES</span>
                  </div>
                  <img class="pricing-logo" src="{{ asset('frontend-assets/img/logo/favicon.png') }}">
               </div>
         </div>
         @endfor
      </div>
      </div>
   </section>
   <!-- team area end -->

   <!-- portfolio area start -->
   <section class="tp-portfolio-3-area pt-120 pb-90">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tp-portfolio-3-wrapper text-center">
                  <div class="tp-inner-pre">
                     <span><i class="fa-solid fa-vest-patches"></i></span>
                  </div>
                  <h3 class="tp-section__title">Recent Work Showcase</h3>

                  <div class="tp-portfolio-tab-button d-flex align-items-center justify-content-center">
                     <ul class="nav" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class=" active" id="OFFICE-tab" data-bs-toggle="pill"
                              data-bs-target="#OFFICE" type="button" role="tab" aria-controls="OFFICE"
                              aria-selected="false">PATCHES</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="" id="kitchen-tab" data-bs-toggle="pill"
                              data-bs-target="#kitchen" type="button" role="tab" aria-controls="kitchen"
                              aria-selected="true">CAPS</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="" id="HOME-tab" data-bs-toggle="pill" data-bs-target="#HOME"
                              type="button" role="tab" aria-controls="HOME"
                              aria-selected="false">HOODIES</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="" id="WINDOW-tab" data-bs-toggle="pill" data-bs-target="#WINDOW"
                              type="button" role="tab" aria-controls="WINDOW"
                              aria-selected="false">BAGS</button>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-content p-relative wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
                  id="pills-tabContent">
                  <!-- PATCHES -->
                  <div class="tab-pane fade show active" id="OFFICE" role="tabpanel"
                     aria-labelledby="OFFICE-tab" tabindex="0">
                     <div class="tp-portfolio-active-3">
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/patch/img-1.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">PATCH</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-2 item-1">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/patch/img-2.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">PATCH</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-3 item-2">
                              <div class="tp-portfolio-3-thumb ">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/patch/img-3.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">PATCH</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/patch/img-4.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">PATCH</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/patch/img-5.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">PATCH</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/patch/img-6.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">PATCH</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- CAP -->
                  <div class="tab-pane fade show" id="kitchen" role="tabpanel" aria-labelledby="kitchen-tab"
                     tabindex="0">
                     <div class="tp-portfolio-active-3">
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-2 item-1">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/cap/img-3.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">CAP</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-3 item-2">
                              <div class="tp-portfolio-3-thumb ">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/cap/img-1.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">CAP</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/cap/img-2.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">CAP</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/cap/img-3.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">CAP</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- HOODIES -->
                  <div class="tab-pane fade show" id="HOME" role="tabpanel" aria-labelledby="HOME-tab"
                     tabindex="0">
                     <div class="tp-portfolio-active-3">
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-3 item-2">
                              <div class="tp-portfolio-3-thumb ">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/hoodies/img-1.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">HOODIE</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-2 item-1">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/hoodies/img-3.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">HOODIE</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/hoodies/img-2.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">HOODIE</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/hoodies/img-3.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">HOODIE</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- BAGS -->
                  <div class="tab-pane fade show" id="WINDOW" role="tabpanel" aria-labelledby="WINDOW-tab"
                     tabindex="0">
                     <div class="tp-portfolio-active-3">
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-2 item-1">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/bag/img-3.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">BAG</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-3 item-2">
                              <div class="tp-portfolio-3-thumb ">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/bag/img-1.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">BAG</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/bag/img-2.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">BAG</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-portfolio-slider-3">
                           <div class="tp-portfolio-3-inner grid-item item-1 item-3">
                              <div class="tp-portfolio-3-thumb">
                                 <img src="{{ asset('frontend-assets/img/portfolio/home-3/bag/img-1.png') }}" alt="">
                              </div>
                              <div class="tp-portfolio-3-content d-flex align-items-center">
                                 <div class="tp-portfolio-3-text">
                                    <h4 class="tp-portfolio-title"><a href="{{ url('/portfolio') }}">BAG</a></h4>
                                    <p>CUSTOM PATCHES</p>
                                 </div>
                                 <div class="tp-portfolio-3-content-btn">
                                    <a href="{{ url('/portfolio') }}"><i
                                          class="fa-light fa-arrow-up-right"></i></a>
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
   </section>
   <!-- portfolio area end -->

   <!-- blog area start -->
   <section id="blogBubble" class="tp-blog-3-area p-relative pt-120">
      <div class="tp-blog-3-shape d-none d-md-block">
         <img class="mousemove__image shape-1" src="{{ asset('frontend-assets/img/blog/bubble-1.png') }}" alt="">
         <img class="shape-2" src="{{ asset('frontend-assets/img/blog/bubble-2.png') }}" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tp-blog-2-section-title-wrapper text-center mb-70">
                  <div class="tp-inner-pre">
                     <span><i class="fa-solid fa-vest-patches"></i></span>
                  </div>
                  <h3 class="tp-section__title">latest blog and article</h3>
               </div>
            </div>
         </div>
         <div class="row">
            @if($blogs)
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
               <div class="tp-blog-3-wrapper mb-70 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="tp-blog-2-thumb home-3 p-relative">
                     <a href="{{ url('/blogs') }}">
                        @if($blog->image)
                        <img src="{{ asset('assets/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" data-aos="zoom-in" data-aos-delay="100">
                        @else
                        <img src="{{ asset('images/services/default.jpg') }}" alt="Default image">
                        @endif
                     </a>
                  </div>
                  <div class="tp-blog-2-content home-3 p-relative">
                     <span class="date">28 <br> <i>AUGUST</i></span>
                     <h3 class="tp-blog-title">
                        <a href="{{ url('/blogs') }}">
                           {{ $blog->title }}
                        </a>
                     </h3>
                     <div class="tp-blog-btn">
                        <a class="tp-btn" href="{{ url('/blog-' . $blog->id) }}">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            @endif
         </div>
      </div>
      <div class="container">
         <div class="tp-footer-3-logo-content p-relative">
            <div class="tp-footer-logo-content-shape d-none d-xl-block">
               <img class="shape-3" src="{{ asset('frontend-assets/img/footer/shape-3.png') }}" alt="">
               <img class="shape-4" src="{{ asset('frontend-assets/img/footer/shape-4.png') }}" alt="">
            </div>
            <div class="row align-items-center">
               <div class="col-md-4 col-lg-6">
                  <div class="tp-footer-logo">
                     <a href="{{ url('/') }}">
                        <img src="{{ asset('frontend-assets/img/footer/footer-logo.png') }}" alt=""
                           style="background: #eef1fd;border-radius: 10px;padding: 0 10px;">
                     </a>
                  </div>
               </div>
               <div class="col-md-8 col-lg-6">
                  <div class="tp-btn-effect">
                     <div
                        class="tp-footer-social d-flex justify-content-start justify-content-md-end align-items-center">
                        <span>Follow Us:</span>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-skype"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- blog area end -->

</main>

@endsection