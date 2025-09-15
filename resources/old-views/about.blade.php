@extends('layouts.master')
@section('content')

<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-section section-bg-2">
   <div class="container-fluid">
      <div class="breadcrumb-wrapper bg-cover"
         style="background-image: url('frontend-assets/img/breadcrumb-bg.jpg');">
         <div class="flower-shape">
            <img src="frontend-assets/img/flower-shape.png" alt="img">
         </div>
         <div class="star-shape">
            <img src="frontend-assets/img/star-shape.png" alt="img">
         </div>
         <div class="container">
            <div class="page-heading center">
               <h6>Digital printing Service</h6>
               <h1>About Company</h1>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- About Feature Section Start -->
<section class="about-feature-section fix section-padding bg-cover pb-0" style="background-image: url('frontend-assets/img/feature/bg.png');">
   <div class="product-shape float-bob-x">
      <img src="frontend-assets/img/about/product-shape.png" alt="img">
   </div>
   <div class="container">
      <div class="about-feature-wrapper">
         <div class="row g-4">
            <div class="col-lg-6">
               <div class="about-image-items">
                  <div class="about-feature-image">
                     <img src="frontend-assets/img/about/04.jpg" alt="img" class="wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">
                     <div class="about-feature-image reveal image-anime">
                        <img src="frontend-assets/img/about/05.jpg" alt="img">
                     </div>
                     <div class="stickers-shape">
                        <img src="frontend-assets/img/feature/StickersV30.png" alt="img">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="about-feature-content">
                  <div class="section-title">
                     <h6 class="wow fadeInUp">More About Us</h6>
                     <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Your Trusted Partner
                        <span><img src="frontend-assets/img/line.png" alt="img">High-Quality Patches</span>
                     </h2>
                  </div>
                  <div class="box-items-area mt-3 mt-md-0">
                     <div class="box-item active wow fadeInUp" data-wow-delay=".3s">
                        <h5>Expert Digitizing Services</h5>
                        <p>
                           Our skilled digitizers convert your designs into flawless embroidery-ready files with precision and fast turnaround times. We focus on clean stitching, smooth textures, and sharp detailing every time.
                        </p>
                     </div>
                     <div class="box-item active wow fadeInUp" data-wow-delay=".5s">
                        <h5>Custom Embroidered Patches</h5>
                        <p>
                           Whether you're looking for branding, uniforms, or promotional items, we craft custom patches tailored to your needs. Choose from a variety of styles including embroidered, woven, PVC, and more.
                        </p>
                     </div>
                     <div class="box-item active wow fadeInUp" data-wow-delay=".7s">
                        <h5>Raster to Vector Conversion</h5>
                        <p>
                           We transform low-resolution artwork into crisp, scalable vector files perfect for printing, engraving, or embroidery. Say goodbye to blurry images—hello to professional-grade quality.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- About Feature Section End -->

<!-- Counter Section Start -->
<section class="counter-section fix section-padding">
   <div class="container">
      <div class="counter-text text-center">
         <h6 class="wow fadeInUp">Manufacturing software that goes beyondthe benchmark</h6>
      </div>
      <div class="row">
         <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
            <div class="counter-items">
               <div class="counter-title">
                  <h2><span class="count">250</span>+</h2>
               </div>
               <p class="text-center">Years Of Experience</p>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
            <div class="counter-items">
               <div class="counter-title bg-2">
                  <h2><span class="count">36</span>k+</h2>
               </div>
               <p class="text-center">Project Completed</p>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
            <div class="counter-items">
               <div class="counter-title bg-3">
                  <h2><span class="count">900</span>+</h2>
               </div>
               <p class="text-center">Years Of Experience</p>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
            <div class="counter-items">
               <div class="counter-title bg-4">
                  <h2><span class="count">250</span>%</h2>
               </div>
               <p class="text-center">Satisfaction Rate</p>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- About-servcies Section Start -->
@include('sections.our-servcies')

<!-- Portfolio Section Start -->
@include('sections.portfolio')

<!-- Testimonial Section Start -->
<section class="testimonial-section-3 section-padding fix bg-cover mb-5" style="background-image: url('frontend-assets/img/testimonial/testimonial-bg-2.jpg');">
   <div class="container">
      <div class="section-title text-center">
         <h6 class="bg-3 wow fadeInUp">Premium Patch Service</h6>
         <h2 class="wow fadeInUp" data-wow-delay=".3s">
            Why People Say About Our <br>
            Premium Patches Collection
         </h2>
      </div>
   </div>
   <div class="swiper testimonial-slider-3">
      <div class="swiper-wrapper">
         <!-- Testimonial 1 -->
         <div class="swiper-slide">
            <div class="testimonial-box-items-2">
               <div class="clinet-info-items">
                  <div class="content">
                     <h4>John Doe</h4>
                     <span>Creative Director at PatchWorks</span>
                  </div>
                  <div class="star">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star color-2"></i>
                  </div>
               </div>
               <h3>
                  Amazing Quality & Design <br>
                  for Our Premium Patches!
               </h3>
               <p>
                  The premium patches we received exceeded all expectations. The quality and attention to detail are incredible, and our team is thrilled with the final product!
               </p>
            </div>
         </div>
         <!-- Testimonial 2 -->
         <div class="swiper-slide">
            <div class="testimonial-box-items-2">
               <div class="clinet-info-items">
                  <div class="content">
                     <h4>Emily Watson</h4>
                     <span>Product Manager at Elite Patches</span>
                  </div>
                  <div class="star">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star color-2"></i>
                  </div>
               </div>
               <h3>
                  High-Quality Patches <br>
                  for Every Occasion
               </h3>
               <p>
                  We’ve been using these premium patches for various events, and they never fail to impress. The durability and design quality are simply outstanding.
               </p>
            </div>
         </div>
         <!-- Testimonial 3 -->
         <div class="swiper-slide">
            <div class="testimonial-box-items-2">
               <div class="clinet-info-items">
                  <div class="content">
                     <h4>Michael Smith</h4>
                     <span>Founder of PatchWorks</span>
                  </div>
                  <div class="star">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star color-2"></i>
                  </div>
               </div>
               <h3>
                  Unmatched Craftsmanship <br>
                  and Customer Service!
               </h3>
               <p>
                  The team at CustomPatch is amazing! Not only did they deliver beautiful patches, but their customer service was top-notch. Highly recommended for anyone seeking premium patches.
               </p>
            </div>
         </div>
         <!-- Testimonial 4 -->
         <div class="swiper-slide">
            <div class="testimonial-box-items-2">
               <div class="clinet-info-items">
                  <div class="content">
                     <h4>Jessica Brown</h4>
                     <span>Marketing Manager at Global Apparel</span>
                  </div>
                  <div class="star">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star color-2"></i>
                  </div>
               </div>
               <h3>
                  Premium Quality, Quick Turnaround <br>
                  and Excellent Design!
               </h3>
               <p>
                  We’ve ordered several batches of patches, and the results are always fantastic. The level of detail and quality is remarkable, and they always deliver on time.
               </p>
            </div>
         </div>
         <!-- Testimonial 5 -->
         <div class="swiper-slide">
            <div class="testimonial-box-items-2">
               <div class="clinet-info-items">
                  <div class="content">
                     <h4>David Lee</h4>
                     <span>Senior Designer at StylePatches</span>
                  </div>
                  <div class="star">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star color-2"></i>
                  </div>
               </div>
               <h3>
                  Perfect for Our Branding <br>
                  and Promotional Materials
               </h3>
               <p>
                  The premium patches from CustomPatch have been perfect for our branding and marketing campaigns. They add a professional touch to everything we do.
               </p>
            </div>
         </div>
      </div>
      <div class="swiper-dot-2 text-center pt-5">
         <div class="dot"></div>
      </div>
   </div>
</section>

@endsection