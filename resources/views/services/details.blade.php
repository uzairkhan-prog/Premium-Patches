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
                    <h6>{{ $service['name'] }}</h6>
                    <h1>Service Details</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Section Start -->
<section class="service-details-section fix section-padding section-bg-2 pt-5 mb-5">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-4 order-2 order-md-1">
                    <div class="service-sidebar">
                        <div class="service-widget-categories">
                            <ul>
                                @foreach($allServices as $slug => $srv)
                                <li class="{{ $Type === $slug ? 'active' : '' }}">
                                    <a href="{{ route('types', ['type' => $slug]) }}">
                                        {{ $srv['name'] }}
                                    </a>
                                    <span><i class="fa-regular fa-arrow-right-long"></i></span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="contact-bg text-center bg-cover" style="background-image: url('frontend-assets/img/service/service-contact.jpg');">
                            <div class="icon">
                                <i class="fa-light fa-phone-volume"></i>
                            </div>
                            <h3>
                                Looking for <br>
                                Premium Patches service <br>
                                Provider?
                            </h3>
                            <p>Call anytime</p>
                            <a href="tel:+2871382023" class="theme-btn w-100">
                                +(2) 871 382 023
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-md-2">
                    <div class="service-details-image">
                        <img src="frontend-assets/img/service/main/{{ $service['image'] }}.jpg" alt="img">
                    </div>
                    <div class="service-details-content">
                        <h3 class="wow fadeInUp" data-wow-delay=".3s">{{ $service['name'] }}</h3>
                        <p class="mt-3">{{ $service['description'] }}</p>

                        <h3 class="mt-5 split-text right">Why Choose Our {{ $service['name'] }} Service?</h3>
                        <p class="mt-3">
                            {{ $service['overview'] }}
                        </p>

                        <div class="service-details-video">
                            <div class="row g-4 align-items-center">
                                <div class="col-lg-6">
                                    <div class="video-image">
                                        <img src="{{ asset('frontend-assets/img/hero/hero-2.jpg') }}" alt="img">
                                        <div class="video-box">
                                            <a href="https://custompatch.org/frontend-assets/banner-video/1.mp4" class="video-btn ripple video-popup">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="details-video-content">
                                        <h3 class="mb-3 split-text right">Why Our Service Matters</h3>
                                        <p>{{ $service['description'] }}</p>
                                        <ul>
                                            <li><i class="fa-solid fa-circle-check"></i> Expert professionals</li>
                                            <li><i class="fa-solid fa-circle-check"></i> High-quality results</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="highlight-text">
                            <h5>Get in touch for more information or to place your order.</h5>
                        </div>

                        <div class="faq-wrapper style-2">
                            <div class="faq-content">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion">
                                        @if(! empty($service['faq']))
                                        @foreach($service['faq'] as $question => $answer)
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".{{ $loop->index + 3 }}s">
                                            <h4 class="accordion-header">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#faq{{ $loop->index }}"
                                                    aria-expanded="false"
                                                    aria-controls="faq{{ $loop->index }}">
                                                    {{ $question }}
                                                </button>
                                            </h4>
                                            <div
                                                id="faq{{ $loop->index }}"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    {{ $answer }}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <p>No FAQs available for this service.</p>
                                        @endif
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

@endsection