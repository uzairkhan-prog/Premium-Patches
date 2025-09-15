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
                        <h3 class="breadcrumb__title">{{ $serviceName }}</h3>
                        <div class="breadcrumb__list breadcrumb__list-translate">
                            <span><a href="home">Home</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-regular fa-minus"></i></span>
                            <span>SERVICES</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about breadcrumb area end -->

    <!-- Service Details Area Start -->
    <section class="tp-service-details-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12">
                    <div class="tp-service-details-left-box mb-50">
                        <div class="service-sidebar__widget sidebar-pages">
                            <h3 class="tp-blog-sidebar__widget-title">Our Services</h3>
                            <div class="service-sidebar__widget-content">
                                <ul>
                                    @foreach(['embroidered', 'woven', 'pvc', 'leather', 'dtf', 'sublimated', 'chenille'] as $type)
                                    <li>
                                        <a href="{{ route('patches', ['patchType' => $type]) }}">
                                            <i class="fa-regular fa-arrow-right"></i> {{ ucfirst($type) }} Patches
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-8 col-md-12">
                    <div class="tp-service-details-right-box pl-20">
                        <!-- Service Image -->
                        <div class="tp-service-details-thumb">
                            <img class="img-fluid rounded shadow" src="{{ asset('frontend-assets/img/services/home-3/' . $patchType . '.png') }}" alt="{{ $serviceName }}">
                        </div>

                        <!-- Service Title -->
                        <div class="tp-service-details-text-title">
                            <h3 class="tp-service-details-title">{{ $serviceName }}</h3>
                            <p>{{ $serviceDescription }}</p>
                        </div>

                        <!-- Service Overview -->
                        <div class="tp-service-details-text-title">
                            <h3 class="tp-service-details-title">This Service Overview</h3>
                            <p>{{ $serviceOverview }}</p>
                        </div>

                        <!-- How to Get the Service -->
                        <div class="tp-service-details-text-title">
                            <h3 class="tp-service-details-title">How to Get This Service?</h3>
                            <p>{{ $serviceHowToGet }}</p>
                        </div>

                        <!-- Contact Us Button -->
                        <div class="tp-header-btn p-relative gap-5 d-flex justify-content-center">
                            <a class="tp-btn" href="{{ route('contact') }}"><i class="fa fa-phone"></i>
                                Contact Us
                                <i class="fa-regular fa-arrow-right-long ml-10"></i>
                            </a>
                            <a class="tp-btn" href="tel:+123456789"><i class="fa fa-phone"></i>
                                +123456789
                                <i class="fa-regular fa-arrow-right-long ml-10"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Details Area End -->

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

    <!-- fun fact area start -->
    <section class="tp-counter-2-area p-relative">
        <div class="container">
            <div class="tp-counter-2-wrapper p-relative">
                <div class="tp-counter-2-shape">
                    <div class="shape-1 d-none d-lg-block">
                        <img src="assets/img/counter/bubble-1.png" alt="">
                    </div>
                    <div class="shape-2 d-none d-lg-block">
                        <img src="assets/img/counter/bubble-2.png" alt="">
                    </div>
                    <div class="shape-3 d-none d-lg-block">
                        <img src="assets/img/counter/bubble-3.png" alt="">
                    </div>
                </div>
                <div class="row wow fadeInDown" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="tp-counter-2-inner p-relative mb-30">
                            <div class="tp-counter-thumb">
                                <i class="flaticon-clean"></i>
                            </div>
                            <div class="tp-counter-content">
                                <h4 data-purecounter-duration="1" data-purecounter-end="876" class="purecounter tp-counter-title">0</h4>
                                <p>Happy Customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="tp-counter-2-inner-1 p-relative mb-30">
                            <div class="tp-counter-thumb">
                                <i class="flaticon-cleaning-lady"></i>
                            </div>
                            <div class="tp-counter-content">
                                <h4 data-purecounter-duration="1" data-purecounter-end="223" class="purecounter tp-counter-title">0</h4>
                                <p>Team Mamber</p>
                            </div>
                            <div class="tp-counter-2-shape-2">
                                <img src="assets/img/counter/shape-3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="tp-counter-2-inner-2 p-relative mb-30">
                            <div class="tp-counter-thumb">
                                <i class="flaticon-medal"></i>
                            </div>
                            <div class="tp-counter-content">
                                <h4 data-purecounter-duration="1" data-purecounter-end="96" class="purecounter tp-counter-title">0</h4>
                                <p>Award Winning</p>
                            </div>
                            <div class="tp-counter-2-shape-3 d-none d-lg-block">
                                <img src="assets/img/counter/shape-3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="tp-counter-2-inner-3 p-relative mb-30">
                            <div class="tp-counter-thumb">
                                <i class="flaticon-thumbs-up"></i>
                            </div>
                            <div class="tp-counter-content">
                                <h4 data-purecounter-duration="1.5" data-purecounter-end="7862" class="purecounter tp-counter-title">0</h4>
                                <p>Project Complete</p>
                            </div>
                            <div class="tp-counter-2-shape-4">
                                <img src="assets/img/counter/shape-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun fact area end -->

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
                            <span class="date">28 <br> <i>AUGUSTss</i></span>
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