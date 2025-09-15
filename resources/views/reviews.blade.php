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
                    <h6>Client Reviews</h6>
                    <h1>Reviews page</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reviews-section service-details-section fix section-padding section-bg-2 pt-5 mb-5">
    <div class="container rev-section">
        <h2 class="title">What Our Customers Say</h2>
        <p class="note">Real feedback from people who trusted Custom Patches to bring their ideas to life.</p>

        <div class="reviews">
            <div class="review">
                <div class="head-review">
                    <img src="frontend-assets/img/review/2.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Jason Lee</div>
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">Absolutely love how my logo turned out as a patch! The stitching is clean and durable—exactly what I needed for my brand.</div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img src="frontend-assets/img/review/1.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Karen Mitchell</div>
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">Ordered 200 patches for our fire department uniforms. Not only did they arrive early, but the quality was above our expectations.</div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img src="frontend-assets/img/review/8.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Melina Torres</div>
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">I'm blown away by the detail and texture! Custom Patches brought my design to life perfectly. Will definitely order again.</div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img src="frontend-assets/img/review/4.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Dylan Grant</div>
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                    </div>
                    <div class="desc-review">Super fast customer service, and they helped fine-tune my design for free. Great people to work with!</div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img src="frontend-assets/img/review/7.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Nate Pearson</div>
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                    </div>
                    <div class="desc-review">We needed morale patches for our Airsoft team—Custom Patches nailed it! The Velcro backings are strong, and the colors are bold.</div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img src="frontend-assets/img/review/3.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Lisa Andrews</div>
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">The pricing was transparent, no hidden costs, and the result? Beautiful, high-end patches that made our nonprofit fundraiser look professional.</div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img src="frontend-assets/img/review/5.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Michael Rhodes</div>
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">This is our third bulk order, and the quality has stayed consistently top-notch. Highly recommended!</div>
                </div>
            </div>

            <div class="review">
                <div class="head-review">
                    <img src="frontend-assets/img/review/6.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Sara Kim</div>
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                    </div>
                    <div class="desc-review">I was nervous ordering custom patches online, but the team was super responsive and sent digital previews before production. Stress-free!</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection