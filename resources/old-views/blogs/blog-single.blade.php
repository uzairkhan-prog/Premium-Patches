@extends('layouts.master')

@section('content')

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
          <h3 class="breadcrumb__title">blog details</h3>
          <div class="breadcrumb__list breadcrumb__list-translate">
            <span><a href="home">Home</a></span>
            <span class="dvdr"><i class="fa-sharp fa-regular fa-minus"></i></span>
            <span>blog</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about breadcrumb area end -->

<!-- blog details area start -->
<section class="tp-blog-breadcrumb-area pt-120">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="tp-blog-details-items">
          <div class="tp-blog-details-thumb">
            @if($blog->image)
            <img src="{{ asset('assets/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" data-aos="zoom-in" data-aos-delay="100">
            @else
            <img src="{{ asset('images/services/default.jpg') }}" alt="Default image">
            @endif
          </div>
          <div class="tp-blog-details-info d-flex">
            <div class="tp-blog-details-name">
              <i class="fa-regular fa-circle-user"></i>
              <span>Blog Details</span>
            </div>
            <div class="tp-blog-details-date">
              <i class="fa-regular fa-clock"></i>
              <span>Dec 28, 2022</span>
            </div>
          </div>
          <div class="tp-blog-details-content">
            <h3 class="tp-blog-details-title">{{ $blog->title }}</h3>
            <p>{!! $blog->description !!}</p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="tp-blog-details-no-secret mt-30">
                <h3 class="title">There are no secrets </h3>
                <p>Must explain to you how all praising uts pain was born and I will gives you a itself
                  completed account of the system, and sed expounds the ut actual teachings of that
                  greater
                </p>
                <ul>
                  <li><span><i class="fas fa-check"></i></span>Extramural Funding</li>
                  <li><span><i class="fas fa-check"></i></span>Bacteria Markers</li>
                  <li><span><i class="fas fa-check"></i></span>Nam nec mi euismod euismod</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="no-secret-thumb mt-30">
                <img src="assets/img/blog/home-2/img-3.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="tp-blog-details-content">
            <h3 class="details-title">Assistance in the Student Program</h3>
            <p>Unlike detailed blueprints that lay out all tasks, deadlines, bug reports, and more along the
              way, technology roadmaps are high-level visual summaries highlighting a company’s vision or
              plans.
            </p>
            <p>In an Agile approach, a technology roadmap feeds the sprint and grooming processes, providing
              insight into how the product will travel from start to finish. It makes it easier for
              development teams to:</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="tp-blog-left-box">
          <div class="service-sidebar__widget mb-60">
            <h3 class="service-sidebar__widget-title">Our Services</h3>
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
          <div class="tp-blog-sidebar__widget mb-60">
            <h3 class="tp-blog-sidebar__widget-title">Recent Blogs</h3>
            <div class="tp-blog-sidebar__widget-content">
              @foreach($blogs as $latest)
              <div class="tp-blog-sidebar__post">
                <div class="rc__post ">
                  <div class="rc__post d-flex align-items-center">
                    <div class="rc__post-thumb">
                      <a href="{{ url('/blog-' . $latest->id) }}"><img src="{{ asset('assets/blogs/' . $latest->image) }}"></a>
                    </div>
                    <div class="rc__post-content">
                      <h3 class="rc__post-title">
                        <a href="{{ url('/blog-' . $latest->id) }}">{{ $latest->title }}</a>
                      </h3>
                      <span><i class="fa-light fa-calendar-days"></i> +123456789</span>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- blog details area end -->

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

@endsection