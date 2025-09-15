@extends('layouts.master')
@section('content')

<!-- Hero Section Start -->
<section class="hero-section">
    <div class="hero-2 bg-cover" style="background-image: url('frontend-assets/img/hero/hero-2.jpg');">
        <!-- <div class="hero-image">
            <div class="flower-shape" data-animation="slideInDown" data-duration="2s" data-delay="1.5s">
                <img src="frontend-assets/img/hero/flower.png" alt="img">
            </div>
            <div class="rong-shape" data-animation="slideInLeft" data-duration="2s" data-delay="1.7s">
                <img src="frontend-assets/img/hero/rong-box.png" alt="img">
            </div>
            <div class="stickers-shape" data-animation="slideInRight" data-duration="2s" data-delay="1.9s">
                <img src="frontend-assets/img/hero/stickers.png" alt="img">
            </div>
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-content" data-animation="fadeInUp" data-delay="1.1s">
                        <h5 class="bg-white-theme">Premium Patch Service</h5>
                        <h1 data-animation="fadeInUp" data-delay="1.5s">
                            Custom Patches for Every Need <br>
                            Order Today and Save 25%
                        </h1>
                        <p data-animation="fadeInUp" data-delay="1.7s">
                            Get high-quality, customizable patches that are perfect for any occasion. From uniforms to personal collections, our premium patches are designed to last.
                        </p>
                        <div class="hero-button">
                            <a href="{{ url('/contact') }}" data-animation="fadeInUp" data-delay="1.9s" class="theme-btn hover-white bg-theme">GET STARTED</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form id="contact" action="" method="post">
                        <h2>Request a Quote</h2>
                        <fieldset>
                            <input placeholder="Your Name" type="text" tabindex="1" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Email Address" type="email" tabindex="2" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
                        </fieldset>
                        <fieldset>
                            <select id="hero-form" class="form-control" name="">
                                <option selected disabled>Select Order Type</option>
                                <option value="">Custom Patches</option>
                                <option value="">Digitizing</option>
                                <option value="">Raster to Vector</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
                        </fieldset>
                        <!-- reCAPTCHA -->
                        <fieldset>
                            <div class="g-recaptcha" data-sitekey="base64:v6i4lp1S+5Gbe0hxmioDpOUNxnnE3M0yRj+MuiHWPU8="></div>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section Start -->
<!-- <section class="hero-section hero-3 bg-cover" style="background-image: url('frontend-assets/img/hero/hero-bg-2.jpg');">
    <div class="line-shape">
        <img src="frontend-assets/img/hero/line.png" alt="img">
    </div>
    <div class="container">
        <div class="swiper hero-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="hero-content">
                                <h6>Digital printing Service</h6>
                                <h1>
                                    Custom T -shirt,
                                    <span>simplified..<img src="frontend-assets/img/hero/bar.png" alt="img"></span>
                                </h1>
                                <p>
                                    Beautiful, customizable template, with a ton of web blocks <br>
                                    to create an amazing website that looks
                                </p>
                            </div>
                            <div class="hero-button">
                                <a href="shop-details.html" class="theme-btn">Order Today</a>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-6 col-lg-6">
                            <div class="hero-image-items">
                                <div class="hero-image">
                                    <img src="frontend-assets/img/hero/t-shirt.png" alt="img">
                                </div>
                                <div class="color-box">
                                    <img src="frontend-assets/img/hero/bucket-front-color.png" alt="img">
                                </div>
                                <div class="mockup-shape">
                                    <img src="frontend-assets/img/hero/mockup-generator.png" alt="img">
                                </div>
                                <div class="stickers-shape">
                                    <img src="frontend-assets/img/hero/stiker.png" alt="img">
                                </div>
                                <div class="cap-shape">
                                    <img src="frontend-assets/img/hero/cap.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="hero-content">
                                <h6>Digital printing Service</h6>
                                <h1>
                                    Custom T -shirt,
                                    <span>simplified..<img src="frontend-assets/img/hero/bar.png" alt="img"></span>
                                </h1>
                                <p>
                                    Beautiful, customizable template, with a ton of web blocks <br>
                                    to create an amazing website that looks
                                </p>
                            </div>
                            <div class="hero-button">
                                <a href="shop-details.html" class="theme-btn">Order Today</a>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-6 col-lg-6">
                            <div class="hero-image-items">
                                <div class="hero-image">
                                    <img src="frontend-assets/img/hero/t-shirt-2.png" alt="img">
                                </div>
                                <div class="color-box">
                                    <img src="frontend-assets/img/hero/bucket-front-color.png" alt="img">
                                </div>
                                <div class="mockup-shape">
                                    <img src="frontend-assets/img/hero/mockup-generator.png" alt="img">
                                </div>
                                <div class="stickers-shape">
                                    <img src="frontend-assets/img/hero/stiker.png" alt="img">
                                </div>
                                <div class="cap-shape">
                                    <img src="frontend-assets/img/hero/cap.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="hero-content">
                                <h6>Digital printing Service</h6>
                                <h1>
                                    Custom T -shirt,
                                    <span>simplified..<img src="frontend-assets/img/hero/bar.png" alt="img"></span>
                                </h1>
                                <p>
                                    Beautiful, customizable template, with a ton of web blocks <br>
                                    to create an amazing website that looks
                                </p>
                            </div>
                            <div class="hero-button">
                                <a href="shop-details.html" class="theme-btn">Order Today</a>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-6 col-lg-6">
                            <div class="hero-image-items">
                                <div class="hero-image">
                                    <img src="frontend-assets/img/hero/t-shirt-3.png" alt="img">
                                </div>
                                <div class="color-box">
                                    <img src="frontend-assets/img/hero/bucket-front-color.png" alt="img">
                                </div>
                                <div class="mockup-shape">
                                    <img src="frontend-assets/img/hero/mockup-generator.png" alt="img">
                                </div>
                                <div class="stickers-shape">
                                    <img src="frontend-assets/img/hero/stiker.png" alt="img">
                                </div>
                                <div class="cap-shape">
                                    <img src="frontend-assets/img/hero/cap.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Brand Section Start -->
<div class="brand-section">
    <div class="brand-wrapper-3">
        <div class="swiper brand-slider-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-image">
                        <img src="frontend-assets/img/brand/brand-logo-11.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image">
                        <img src="frontend-assets/img/brand/brand-logo-12.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image">
                        <img src="frontend-assets/img/brand/brand-logo-13.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image">
                        <img src="frontend-assets/img/brand/brand-logo-14.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image">
                        <img src="frontend-assets/img/brand/brand-logo-15.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image">
                        <img src="frontend-assets/img/brand/brand-logo-16.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image">
                        <img src="frontend-assets/img/brand/brand-logo-17.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About-servcies Section Start -->
@include('sections.our-servcies')

<!-- Services Showcase Section Start -->
<section class="popular-product-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h6 class="bg-2 wow fadeInUp">Embroidery & Digitizing Experts</h6>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Our Most Popular <br>
                Custom Embroidery Services
            </h2>
        </div>

        <div class="array-button justify-content-center">
            <button class="array-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
            <button class="array-next"><i class="fa-regular fa-arrow-right-long"></i></button>
        </div>

        <div class="shop-wrapper shop-wrapper-2">
            <div class="swiper shop-slider">
                <div class="swiper-wrapper">

                    <!-- Digitizing Services -->
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/logo digitizing.png" alt="Logo Digitizing"></div>
                            <div class="shop-content">
                                <h3><a href="#">Logo Digitizing</a></h3>
                                <p>Clean, accurate logo embroidery conversions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/3D Puff Embroidery Digitizing.png" alt="3D Puff Embroidery Digitizing"></div>
                            <div class="shop-content">
                                <h3><a href="#">3D Puff Embroidery Digitizing</a></h3>
                                <p>Bold, raised designs for caps and apparel.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/Left Chest Digitizing.png" alt="Left Chest Digitizing"></div>
                            <div class="shop-content">
                                <h3><a href="#">Left Chest Digitizing</a></h3>
                                <p>Perfect placement for logos on shirts and polos.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/Centre Chest Digitizing.png" alt="Centre Chest Digitizing"></div>
                            <div class="shop-content">
                                <h3><a href="#">Centre Chest Digitizing</a></h3>
                                <p>Balanced, eye-level embroidery placement.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/Applique Digitizing.png" alt="Applique Digitizing"></div>
                            <div class="shop-content">
                                <h3><a href="#">Applique Digitizing</a></h3>
                                <p>Layered fabric-style designs with colorful stitching.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/Cap Digitizing.png" alt="Cap Digitizing"></div>
                            <div class="shop-content">
                                <h3><a href="#">Cap Digitizing</a></h3>
                                <p>Specialized hooping and stitching for hats.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/Jacket Back Digitizing.png" alt="Jacket Back Digitizing"></div>
                            <div class="shop-content">
                                <h3><a href="#">Jacket Back Digitizing</a></h3>
                                <p>Large-format digitizing for jackets & uniforms.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Patches Services -->
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/sew-on patch.png" alt="Sew-On Patches"></div>
                            <div class="shop-content">
                                <h3><a href="#">Sew-On Embroidered</a></h3>
                                <p>Classic sew-on patches for permanent placement.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/Iron-On Embroidered.png" alt="Iron-On Patches"></div>
                            <div class="shop-content">
                                <h3><a href="#">Iron-On Embroidered</a></h3>
                                <p>Easy-to-apply heat-activated patch options.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/Velcro Embroidered.png" alt="Velcro Patches"></div>
                            <div class="shop-content">
                                <h3><a href="#">Velcro Embroidered</a></h3>
                                <p>Removable, repositionable patches with hook & loop backing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/Adhesive Patches.png" alt="Adhesive Patches"></div>
                            <div class="shop-content">
                                <h3><a href="#">Adhesive Patches</a></h3>
                                <p>Stick-and-go patches for events & quick branding.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/PVC Patches.png" alt="PVC Patches"></div>
                            <div class="shop-content">
                                <h3><a href="#">PVC Patches</a></h3>
                                <p>Durable, rubber-like patches with vivid colors.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/Leather Patches.png" alt="Leather Patches"></div>
                            <div class="shop-content">
                                <h3><a href="#">Leather Patches</a></h3>
                                <p>Premium feel patches ideal for fashion & branding.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Raster to Vector -->
                    <!-- <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="shop-image-2"><img src="frontend-assets/img/popular-product/04.jpg" alt="Raster to Vector"></div>
                            <div class="shop-content">
                                <h3><a href="#">Raster To Vector</a></h3>
                                <p>Turn any low-res file into clean, scalable artwork.</p>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>

        <h5 class="shop-bottom-title style-2 wow fadeInUp" data-wow-delay=".3s">
            Free worldwide shipping on embroidery orders <span>$50+</span>
        </h5>
    </div>
</section>

<!-- Pricing Section Start -->
<section class="pricing-section section-padding">
    <!-- <div class="shape-image float-bob-y">
        <img src="frontend-assets/img/pricing-shape.png" alt="img">
    </div> -->
    <div class="shape-image-2">
        <img src="frontend-assets/img/pricing-line.png" alt="img">
    </div>
    <div class="circle-shape">
        <img src="frontend-assets/img/circle.png" alt="img">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Pricing
            </h2>
        </div>
        <div class="tab-content">
            <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-box-items">
                            <div class="pricing-header">
                                <div class="icon">
                                    <img src="frontend-assets/img/icon/03.svg" alt="img">
                                </div>
                                <h3>Digitizing</h3>
                                <span>$1 – $25</span>
                                <span>Flat rate for Left Chest, Cap & 3.5” logos</span>
                            </div>
                            <ul class="pricing-list">
                                <li><i class="fa-solid fa-circle-check"></i> Order Management System</li>
                                <li><i class="fa-solid fa-circle-check"></i> Turnaround Time 2–12 Hrs</li>
                                <li><i class="fa-solid fa-circle-check"></i> Free Minor Edits</li>
                                <li><i class="fa-solid fa-circle-check"></i> All Major File Formats</li>
                                <li><i class="fa-solid fa-circle-check"></i> Unlimited Downloads</li>
                                <li><i class="fa-solid fa-circle-check"></i> Free Rush Order</li>
                                <li><i class="fa-solid fa-circle-check"></i> 24/7 Customer Support</li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('/contact') }}" class="theme-btn">
                                    <span class="theme-effect">
                                        <span class="effect-1">Free Quotation</span>
                                        <span class="effect-1">Free Quotation</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="pricing-box-items active">
                            <div class="pricing-tag">
                                <img src="frontend-assets/img/pricing-tag.png" alt="img">
                            </div>
                            <div class="pricing-header">
                                <div class="icon">
                                    <img src="frontend-assets/img/icon/03.svg" alt="img">
                                </div>
                                <h3>Custom</h3>
                                <h3>Special Pricing</h3>
                                <span>Call us For Details</span>
                            </div>
                            <ul class="pricing-list">
                                <li><i class="fa-solid fa-circle-check"></i> Order Management System</li>
                                <li><i class="fa-solid fa-circle-check"></i> Turnaround Time 2–12 Hrs</li>
                                <li><i class="fa-solid fa-circle-check"></i> Free Minor Edits</li>
                                <li><i class="fa-solid fa-circle-check"></i> All Major File Formats</li>
                                <li><i class="fa-solid fa-circle-check"></i> Unlimited Downloads</li>
                                <li><i class="fa-solid fa-circle-check"></i> Free Rush Order</li>
                                <li><i class="fa-solid fa-circle-check"></i> 24/7 Customer Support</li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('/contact') }}" class="theme-btn">
                                    <span class="theme-effect">
                                        <span class="effect-1">Free Quotation</span>
                                        <span class="effect-1">Free Quotation</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="pricing-box-items">
                            <div class="pricing-header">
                                <div class="icon">
                                    <img src="frontend-assets/img/icon/03.svg" alt="img">
                                </div>
                                <h3>Vectorize</h3>
                                <span>$5 – $15</span>
                                <span>Depends on complexity & number of colors</span>
                            </div>
                            <ul class="pricing-list">
                                <li><i class="fa-solid fa-circle-check"></i> Order Management System</li>
                                <li><i class="fa-solid fa-circle-check"></i> Turnaround Time 2–12 Hrs</li>
                                <li><i class="fa-solid fa-circle-check"></i> Free Minor Edits</li>
                                <li><i class="fa-solid fa-circle-check"></i> All Major File Formats</li>
                                <li><i class="fa-solid fa-circle-check"></i> Unlimited Downloads</li>
                                <li><i class="fa-solid fa-circle-check"></i> Free Rush Order</li>
                                <li><i class="fa-solid fa-circle-check"></i> 24/7 Customer Support</li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('/contact') }}" class="theme-btn">
                                    <span class="theme-effect">
                                        <span class="effect-1">Free Quotation</span>
                                        <span class="effect-1">Free Quotation</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="yearly" class="tab-pane fade" role="tabpanel">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="pricing-box-items">
                            <div class="pricing-header">
                                <div class="icon">
                                    <img src="frontend-assets/img/icon/03.svg" alt="img">
                                </div>
                                <h3>Personal Plan</h3>
                                <span>Customized anything in anytime</span>
                            </div>
                            <ul class="pricing-list">
                                <li><i class="fa-solid fa-circle-check"></i> 3-5 days turnaround</li>
                                <li><i class="fa-solid fa-circle-check"></i> Native Development</li>
                                <li><i class="fa-solid fa-circle-check"></i> Task delivered one-by one</li>
                                <li><i class="fa-solid fa-circle-check"></i> Dedicated dashboard</li>
                                <li><i class="fa-solid fa-circle-check"></i> Updates via dashboard & slack</li>
                                <li><i class="fa-solid fa-circle-check"></i> 50k design & prints</li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('/contact') }}" class="theme-btn">
                                    <span class="theme-effect">
                                        <span class="effect-1">choose pricing plan</span>
                                        <span class="effect-1">$2500/ Month</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="pricing-box-items active">
                            <div class="pricing-tag">
                                <img src="frontend-assets/img/pricing-tag.png" alt="img">
                            </div>
                            <div class="pricing-header">
                                <div class="icon">
                                    <img src="frontend-assets/img/icon/03.svg" alt="img">
                                </div>
                                <h3>Personal Plan</h3>
                                <span>Customized anything in anytime</span>
                            </div>
                            <ul class="pricing-list">
                                <li><i class="fa-solid fa-circle-check"></i> 3-5 days turnaround</li>
                                <li><i class="fa-solid fa-circle-check"></i> Native Development</li>
                                <li><i class="fa-solid fa-circle-check"></i> Task delivered one-by one</li>
                                <li><i class="fa-solid fa-circle-check"></i> Dedicated dashboard</li>
                                <li><i class="fa-solid fa-circle-check"></i> Updates via dashboard & slack</li>
                                <li><i class="fa-solid fa-circle-check"></i> 50k design & prints</li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('/contact') }}" class="theme-btn">
                                    <span class="theme-effect">
                                        <span class="effect-1">choose pricing plan</span>
                                        <span class="effect-1">$2500/ Month</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="pricing-box-items">
                            <div class="pricing-header">
                                <div class="icon">
                                    <img src="frontend-assets/img/icon/03.svg" alt="img">
                                </div>
                                <h3>Personal Plan</h3>
                                <span>Customized anything in anytime</span>
                            </div>
                            <ul class="pricing-list">
                                <li><i class="fa-solid fa-circle-check"></i> 3-5 days turnaround</li>
                                <li><i class="fa-solid fa-circle-check"></i> Native Development</li>
                                <li><i class="fa-solid fa-circle-check"></i> Task delivered one-by one</li>
                                <li><i class="fa-solid fa-circle-check"></i> Dedicated dashboard</li>
                                <li><i class="fa-solid fa-circle-check"></i> Updates via dashboard & slack</li>
                                <li><i class="fa-solid fa-circle-check"></i> 50k design & prints</li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('/contact') }}" class="theme-btn">
                                    <span class="theme-effect">
                                        <span class="effect-1">choose pricing plan</span>
                                        <span class="effect-1">$2500/ Month</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cta Video Section Start -->
<div class="cta-video-section">
    <div class="mycustom-marque style-about">
        <div class="scrolling-wrap">
            <div class="comm">
                <div class="cmn-textslide">business </div>
                <div class="cmn-textslide">Consulting</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide">business </div>
                <div class="cmn-textslide">Consulting</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide">business </div>
                <div class="cmn-textslide">Consulting</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide">business </div>
                <div class="cmn-textslide">Consulting</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide">business </div>
                <div class="cmn-textslide">Consulting</div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="cta-video-wrapper bg-cover wow fadeInUp" data-wow-delay=".3s"
            style="background-image: url('frontend-assets/img/hero/hero-2.jpg');">
            <h2 class="video-heading">
                Watch Video
            </h2>
            <a href="https://custompatch.org/frontend-assets/banner-video/1.mp4" class="video-btn ripple video-popup">
                <i class="fas fa-play"></i>
            </a>
        </div>
    </div>
    <div class="brand-wrapper-4 custom-brand-wrapper-4 bg-cover" style="background-image: url('assets/img/brand/bg.jpg');">
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

<!-- Portfolio Section Start -->
@include('sections.portfolio')

<!-- Testimonial Section Start -->
<section class="testimonial-section-3 section-padding fix bg-cover" style="background-image: url('frontend-assets/img/testimonial/testimonial-bg-2.jpg');">
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

<!-- Blog Section Start -->
<section class="blog-section-3 section-padding mb-5">
    <div class="container">
        <div class="section-title text-center">
            <h6 class="bg-5 wow fadeInUp">Digital Printing Service</h6>
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
                        <ul class="blog-meta">
                            <li><i class="fa-regular fa-user"></i> CustomPatch Team</li>
                            <li><i class="fa-regular fa-comment"></i> Comments (3)</li>
                        </ul>
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
                        <ul class="blog-meta">
                            <li><i class="fa-regular fa-user"></i> CustomPatch Team</li>
                            <li><i class="fa-regular fa-comment"></i> Comments (4)</li>
                        </ul>
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
                        <ul class="blog-meta">
                            <li><i class="fa-regular fa-user"></i> CustomPatch Team</li>
                            <li><i class="fa-regular fa-comment"></i> Comments (6)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-button text-center mt-5 wow fadeInUp" data-wow-delay=".3s">
            <a href="news.html" class="theme-btn">See all News</a>
        </div>
    </div>
</section>

<!-- Marquee Section Start -->
<!-- <div class="marquee-section fix">
    <div class="mycustom-marque">
        <div class="scrolling-wrap bg-style">
            <div class="comm cmn-style-3">
                <div class="cmn-textslide">branding</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">product design</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">digital marketing</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">product design</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">art direction</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">development</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">UI/UX Design</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">motion graphics</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">strategy</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
            </div>
            <div class="comm cmn-style-3">
                <div class="cmn-textslide">branding</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">product design</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">digital marketing</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">product design</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">art direction</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">development</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">UI/UX Design</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">motion graphics</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
                <div class="cmn-textslide">strategy</div>
                <div><img src="frontend-assets/img/star.png" alt="img"></div>
            </div>
        </div>
    </div>
</div> -->

<!-- Service Section Start -->
<!-- <section class="service-section-2 bg-cover fix section-padding" style="background-image: url('frontend-assets/img/service/service-bg-2.jpg');">
    <div class="left-bg">
        <img src="frontend-assets/img/service/left-bg.png" alt="img">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <h6 class="bg-2 wow fadeInUp">Digital printing Service</h6>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Our Populer Print Service <br>
                Complete Solution
            </h2>
        </div>
        <div class="swiper service-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="service-box-items">
                        <h3><a href="service-details.html">Printing Service</a></h3>
                        <div class="service-image">
                            <img src="frontend-assets/img/service/09.png" alt="img">
                        </div>
                        <div class="service-content">
                            <p>
                                full administration printing background
                                or your online business Beautiful
                            </p>
                            <a href="service-details.html" class="service-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service-box-items">
                        <h3><a href="service-details.html">Designing Service</a></h3>
                        <div class="service-image">
                            <img src="frontend-assets/img/service/10.png" alt="img">
                        </div>
                        <div class="service-content">
                            <p>
                                full administration printing background
                                or your online business Beautiful
                            </p>
                            <a href="service-details.html" class="service-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service-box-items">
                        <h3><a href="service-details.html">Digital Scanning</a></h3>
                        <div class="service-image">
                            <img src="frontend-assets/img/service/09.png" alt="img">
                        </div>
                        <div class="service-content">
                            <p>
                                full administration printing background
                                or your online business Beautiful
                            </p>
                            <a href="service-details.html" class="service-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-dot pt-5">
                <div class="dot"></div>
            </div>
        </div>
    </div>
</section> -->

<!-- Shop Banner Section Start -->
<!-- <section class="shop-banner-section-2 fix">
    <div class="row g-4">
        <div class="col-xl-6 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <div class="shop-banner-items-2">
                <div class="content">
                    <p class="wow fadeInUp">Wear your brand with pride</p>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Hoddie custom print</h2>
                    <h3 class="wow fadeInUp" data-wow-delay=".5s"><span>Starting</span> 560.99</h3>
                    <a href="shop-details.html" class="theme-btn wow fadeInUp" data-wow-delay=".7s">Custom print now</a>
                </div>
                <div class="thumb wow fadeInUp" data-wow-delay=".3s">
                    <img src="frontend-assets/img/shop-banner/t-shirt.png" alt="img">
                    <div class="flower-shape">
                        <img src="frontend-assets/img/shop-banner/flower.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
            <div class="shop-banner-items-2 style-2">
                <div class="content">
                    <p class="wow fadeInUp">Wear your brand with pride</p>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Custom Packaging</h2>
                    <ul class="wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <span><img src="frontend-assets/img/icon/16.svg" alt="img"></span>
                            Premium Quality Custom boxes
                        </li>
                        <li>
                            <span><img src="frontend-assets/img/icon/16.svg" alt="img"></span>
                             Free Standard Shipping
                        </li>
                        <li>
                            <span><img src="frontend-assets/img/icon/16.svg" alt="img"></span>
                            Unnique Design & custom cloths
                        </li>
                    </ul>
                </div>
                <div class="thumb-2">
                    <a href="shop-details.html">
                        <img src="frontend-assets/img/shop-banner/gift-box.png" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Work Process Section Start -->
<!-- <section class="work-process-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <h6 class="bg-2 wow fadeInUp">Digital printing Service</h6>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                How We Works & Process <br>
                It For Customers
            </h2>
        </div>
        <div class="work-process-wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-ms-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="work-process-box-items">
                        <div class="thumb">
                            <img src="frontend-assets/img/work-process/01.jpg" alt="img">
                        </div>
                        <div class="content">
                            <h3>Pick a Product</h3>
                            <p>
                                full administration printing backgrou
                                or your online business Beautiful
                            </p>
                        </div>
                        <div class="number">
                            01
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-ms-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="work-process-box-items active">
                        <div class="thumb">
                            <img src="frontend-assets/img/work-process/02.jpg" alt="img">
                        </div>
                        <div class="content">
                            <h3>Custom artwork &review</h3>
                            <p>
                                full administration printing backgrou
                                or your online business Beautiful
                            </p>
                        </div>
                        <div class="number">
                            02
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-ms-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="work-process-box-items">
                        <div class="thumb">
                            <img src="frontend-assets/img/work-process/03.jpg" alt="img">
                        </div>
                        <div class="content">
                            <h3>Set up shipping</h3>
                            <p>
                                full administration printing backgrou
                                or your online business Beautiful
                            </p>
                        </div>
                        <div class="number">
                            03
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Project Section Start -->
<!-- <section class="project-section-2 fix pt-0">
    <div class="project-wrapper-3">
        <div class="array-button">
            <button class="array-prev"><i class="fa-regular fa-chevron-right"></i></button>
            <button class="array-next"><i class="fa-regular fa-chevron-left"></i></button>
        </div>
        <div class="swiper project-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="project-thumb reveal image-anime">
                        <img src="frontend-assets/img/project/09.jpg" alt="img">
                        <div class="content">
                            <h4><a href="project-details.html">Digital Marketing</a></h4>
                            <p>Art , Direction</p>
                        </div>
                        <div class="project-button">
                            <a href="project-details.html" class="btns">
                                View More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-thumb reveal image-anime">
                        <img src="frontend-assets/img/project/10.jpg" alt="img">
                        <div class="content">
                            <h4><a href="project-details.html">Digital Marketing</a></h4>
                            <p>Art , Direction</p>
                        </div>
                        <div class="project-button">
                            <a href="project-details.html" class="btns">
                                View More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-thumb reveal image-anime">
                        <img src="frontend-assets/img/project/11.jpg" alt="img">
                        <div class="content">
                            <h4><a href="project-details.html">Digital Marketing</a></h4>
                            <p>Art , Direction</p>
                        </div>
                        <div class="project-button">
                            <a href="project-details.html" class="btns">
                                View More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Product Section Start -->
<!-- <section class="feature-product-section-3 fix section-padding">
    <div class="right-shape">
        <img src="frontend-assets/img/feature-product/stickers.png" alt="img">
    </div>
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <h6 class="bg-4 wow fadeInUp">Digital printing Service</h6>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Featured Products</h2>
            </div>
            <div class="product-header style-2">
                <ul class="nav">
                    <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                        <a href="#Seller" data-bs-toggle="tab" class="nav-link">
                            Best Seller
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".4s">
                        <a href="#Top" data-bs-toggle="tab" class="nav-link">
                            Top
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                        <a href="#Arrivals" data-bs-toggle="tab" class="nav-link active">
                            New Arrivals
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".6s">
                        <a href="#rating" data-bs-toggle="tab" class="nav-link">
                            top rating
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="Seller" class="tab-pane fade">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/01.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/02.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/03.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/04.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Top" class="tab-pane fade">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/01.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/02.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/03.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/04.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Arrivals" class="tab-pane fade show active">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/01.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/02.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/03.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/04.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rating" class="tab-pane fade">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/01.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/02.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/03.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="feature-product-items-2">
                            <div class="product-image">
                                <img src="frontend-assets/img/feature-product/04.jpg" alt="img">
                                <ul class="product-icon d-grid align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="fa-sharp fa-regular fa-eye"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <i class="fa-regular fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="fa-regular fa-arrow-up-arrow-down"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ul class="price-list">
                                    <li>
                                        <span>-5%</span>
                                    </li>
                                    <li>$30.52</li>
                                    <li>$28.52</li>
                                </ul>
                                <h4><a href="shop-details.html">ruti with beef slice</a></h4>
                                <ul class="dot-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Feature Section Start -->
<!-- <section class="feature-section-3 fix section-padding pt-0">
    <div class="container">
        <div class="feature-wrapper-3">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <div class="feature-image">
                        <img src="frontend-assets/img/feature/01.png" alt="img">
                        <div class="line-shape">
                            <img src="frontend-assets/img/feature/line-shape-2.png" alt="">
                        </div>
                        <div class="customer-shape">
                            <img src="frontend-assets/img/feature/customer-shape.png" alt="img">
                        </div>
                        <div class="color-cycle">
                            <img src="frontend-assets/img/feature/color_cycle.png" alt="img">
                        </div>
                        <div class="box-shape">
                            <img src="frontend-assets/img/feature/box.png" alt="img">
                        </div>
                        <div class="stickers-shape">
                            <img src="frontend-assets/img/feature/StickersV30.png" alt="img">
                        </div>
                        <div class="shirt-shape">
                            <img src="frontend-assets/img/feature/t-shirt-shape.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-content">
                        <div class="section-title">
                            <h6 class="bg-2 wow fadeInUp">Digital printing Service</h6>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Creating The Perfect
                                <span>Custom Product <img src="frontend-assets/img/line-2.png" alt="img"></span>
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            A full administration printing background. Print shirts for
                            or your online business Beautiful, customizable template,
                        </p>
                        <ul class="list-items wow fadeInUp" data-wow-delay=".3s">
                            <li>
                                <i class="fa-regular fa-check"></i>
                                 Top quality prints using the latest technology
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                                 Mix and match colors, sizes, and designs
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                                custom branding tools & smooth automation
                            </li>
                        </ul>
                        <a href="shop-details.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

@endsection