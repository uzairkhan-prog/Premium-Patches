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
               <h6>Premium Patches</h6>
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
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="contact-info-items active text-center">
               <div class="icon">
                  <img src="frontend-assets/img/icon/12.svg" alt="icon-img">
               </div>
               <div class="content">
                  <h3>Phone Number</h3>
                  <p>
                     +551 755 7167
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="contact-info-items text-center">
               <div class="icon">
                  <img src="frontend-assets/img/icon/location.png" alt="icon-img">
               </div>
               <div class="content">
                  <h3>address line</h3>
                  <p>
                     20311 Scarlett Saddle Ct, Cypress, Houston TX 77433.
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
                     info@premiumpatches.org
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
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.0438410184533!2d-95.72203592380194!3d29.920640024424838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640d617f620e0ad%3A0x689d058348d17268!2s20311%20Scarlett%20Saddle%20Ct%2C%20Cypress%2C%20TX%2077433%2C%20USA!5e0!3m2!1sen!2s!4v1748369350639!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
               <div class="contact-form-items">
                  <div class="contact-title">
                     <h3 class="wow fadeInUp" data-wow-delay=".3s">Request a Quote</h3>
                     <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published. Required fields are marked *</p>
                  </div>
                  <form id="contact" class="mt-0" method="POST" data-route="{{ route('client.store') }}">
                     @csrf
                     <div id="form-message" style="margin-bottom: 15px; display: none; padding: 10px; border-radius: 5px;"></div>

                     <fieldset>
                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                     </fieldset>
                     <fieldset>
                        <input type="email" name="email" id="email" placeholder="Your Email Address" required>
                     </fieldset>
                     <fieldset>
                        <input type="tel" name="phone" id="phone" placeholder="Your Phone Number" required>
                     </fieldset>
                     <fieldset>
                        <select name="service" id="hero-form" class="form-control" required>
                           <option selected disabled>Select Order Type</option>
                           <option value="Digitizing">Digitizing</option>
                           <option value="Custom Patches">Custom Patches</option>
                           <option value="Raster to Vector">Raster to Vector</option>
                        </select>
                     </fieldset>
                     <fieldset>
                        <textarea name="message" placeholder="Type your Message Here...." required></textarea>
                     </fieldset>
                     <fieldset>
                        <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY_HERE"></div>
                     </fieldset>

                     <div id="form-preloader" class="text-white text-center my-2" style="display: none;">
                        <div class="spinner-border text-light" role="status">
                           <span class="visually-hidden">Sending...</span>
                        </div>
                        <p class="mt-2">Sending your message...</p>
                     </div>

                     <div id="form-response" class="mt-3 text-white"></div>

                     <fieldset>
                        <button type="submit" id="contact-submit">Submit</button>
                     </fieldset>
                  </form>
                  <!-- Include Google reCAPTCHA -->
                  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                  <!-- AJAX Submission Script -->
                  <script>
                     document.getElementById('contact').addEventListener('submit', function(e) {
                        e.preventDefault();

                        let form = this;
                        let formData = new FormData(form);
                        let preloader = document.getElementById('form-preloader');
                        let responseBox = document.getElementById('form-response');
                        let submitBtn = form.querySelector('button[type="submit"]');

                        // Show preloader and disable button
                        preloader.style.display = 'block';
                        submitBtn.disabled = true;

                        fetch(form.dataset.route, {
                              method: "POST",
                              headers: {
                                 'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                 'Accept': 'application/json'
                              },
                              body: formData
                           })
                           .then(response => response.json())
                           .then(data => {
                              preloader.style.display = 'none';
                              submitBtn.disabled = false;

                              if (data.success) {
                                 responseBox.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                                 form.reset();
                                 grecaptcha.reset();
                              } else {
                                 responseBox.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                              }
                           })
                           .catch(error => {
                              preloader.style.display = 'none';
                              submitBtn.disabled = false;
                              console.error('Error:', error);
                              responseBox.innerHTML = '<div class="alert alert-danger">Something went wrong. Please try again.</div>';
                           });
                     });
                  </script>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection