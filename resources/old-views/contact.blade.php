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
               <h1>Contact Us</h1>
            </div>
         </div>
      </div>
   </div>
</div>

<!--<< Contact Info Section Start >>-->
<section class="contact-info-section fix section-padding section-bg-2">
   <div class="container">
      <div class="row g-4">
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="contact-info-items text-center">
               <div class="icon">
                  <img src="frontend-assets/img/icon/location.png" alt="icon-img">
               </div>
               <div class="content">
                  <h3>address line</h3>
                  <p>
                     Bowery St, New York, 37 USA <br>
                     NY 10013,USA
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="contact-info-items active text-center">
               <div class="icon">
                  <img src="frontend-assets/img/icon/12.svg" alt="icon-img">
               </div>
               <div class="content">
                  <h3>Phone Number</h3>
                  <p>
                     +1255 - 568 - 6523 4374-221 <br>
                     +1255 - 568 - 6523
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
            <div class="contact-info-items text-center">
               <div class="icon">
                  <img src="frontend-assets/img/icon/13.svg" alt="icon-img">
               </div>
               <div class="content">
                  <h3>Mail Adress</h3>
                  <p>
                     email@example.com <br>
                     info@yourdomain.com
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!--<< Contact Section Start >>-->
<section class="contact-section section-padding pt-0 section-bg-2 mb-5">
   <div class="container">
      <div class="contact-area">
         <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6">
               <div class="map-content-area">
                  <h3 class="wow fadeInUp" data-wow-delay=".3s"> Get In Touch</h3>
                  <p class="wow fadeInUp" data-wow-delay=".5s">
                     Lorem ipsum dolor sit amet consectetur adipiscing elit mattis <br>
                     faucibus odio feugiat arc dolor.
                  </p>
                  <div class="google-map wow fadeInUp" data-wow-delay=".7s">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
               </div>
            </div>
            <div class="col-xl-5 col-lg-5 mt-5 mt-lg-0">
               <div class="contact-form-items">
                  <div class="contact-title">
                     <h3 class="wow fadeInUp" data-wow-delay=".3s">Fill Up The Form</h3>
                     <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published. Required fields are marked *</p>
                  </div>
                  <form action="contact.php" id="contact-form" method="POST">
                     <div class="row g-4">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                           <div class="form-clt">
                              <input type="text" name="name" id="name" placeholder="Your Name*">
                              <div class="icon">
                                 <i class="fal fa-user"></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                           <div class="form-clt">
                              <input type="text" name="email" id="email" placeholder="Email Address*">
                              <div class="icon">
                                 <i class="fal fa-envelope"></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                           <div class="form-clt-big form-clt">
                              <textarea name="message" id="message" placeholder="Enter Your Messege here"></textarea>
                              <div class="icon">
                                 <i class="fal fa-edit"></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                           <button type="submit" class="theme-btn">
                              <i class="fal fa-paper-plane"></i> Get In Touch
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection