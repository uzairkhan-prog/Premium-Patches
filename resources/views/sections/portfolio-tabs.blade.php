<!-- Portfolio Section Start -->
<section class="project-section fix section-padding section-bg-2 py-5">
    <div class="container">
        <!-- Tabs -->
        <div class="product-header mt-4 mt-md-0">
            <ul class="nav nav-tabs pb-5" id="portfolioTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="digitizing-tab" data-bs-toggle="tab" data-bs-target="#Digitizing" type="button" role="tab" aria-controls="Digitizing" aria-selected="true">Digitizing</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="patches-tab" data-bs-toggle="tab" data-bs-target="#Patches" type="button" role="tab" aria-controls="Patches" aria-selected="false">Patches</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="vector-tab" data-bs-toggle="tab" data-bs-target="#RasterToVector" type="button" role="tab" aria-controls="RasterToVector" aria-selected="false">Raster To Vector</button>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="portfolioTabContent">

            <!-- Digitizing -->
            <div class="tab-pane fade show active" id="Digitizing" role="tabpanel" aria-labelledby="digitizing-tab">
                <div class="row">
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="product-box-items">
                            <div class="product-image">
                                <a href="frontend-assets/img/portfolio/tabs/Digitizing/{{ $i }}.jpg" class="glightbox" data-gallery="digitizing">
                                    <img src="frontend-assets/img/portfolio/tabs/Digitizing/{{ $i }}.jpg" alt="Digitizing {{ $i }}" class="img-fluid">
                                </a>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- Patches -->
        <div class="tab-pane fade" id="Patches" role="tabpanel" aria-labelledby="patches-tab">
            <div class="row">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="product-box-items">
                        <div class="product-image">
                            <a href="frontend-assets/img/portfolio/tabs/Patches/{{ $i }}.jpg" class="glightbox" data-gallery="patches">
                                <img src="frontend-assets/img/portfolio/tabs/Patches/{{ $i }}.jpg" alt="Patches {{ $i }}" class="img-fluid">
                            </a>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </div>

    <!-- Raster to Vector -->
    <div class="tab-pane fade" id="RasterToVector" role="tabpanel" aria-labelledby="vector-tab">
        <div class="row">
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="product-box-items">
                    <div class="product-image">
                        <a href="frontend-assets/img/portfolio/tabs/RasterToVector/{{ $i }}.jpg" class="glightbox" data-gallery="raster">
                            <img src="frontend-assets/img/portfolio/tabs/RasterToVector/{{ $i }}.jpg" alt="RasterToVector {{ $i }}" class="img-fluid">
                        </a>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    </div>

    </div>
    </div>
</section>

<!-- GLightbox CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet" />

<!-- GLightbox JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<!-- Initialize GLightbox -->
<script>
    const lightbox = GLightbox({
        selector: '.glightbox'
    });
</script>