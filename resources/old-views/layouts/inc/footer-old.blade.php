<!--Hero area end-->
<div class="hero_area">
	<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
		viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
		<defs>
			<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
		</defs>
		<g class="parallax">
			<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
			<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
			<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
			<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
		</g>
	</svg>
</div>
<!--Hero area end-->

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
	<!-- Section: Images -->
	<section class="ftco-section bg-white pb-3 pt-0">
		<div class="container marquee-container">
			<div class="marquee">
				<div class="marquee__group">
					<img src='images/about/1.png' alt='about' class="img-fluid">
					<img src='images/about/2.png' alt='about' class="img-fluid">
					<img src='images/about/3.png' alt='about' class="img-fluid">
					<img src='images/about/4.png' alt='about' class="img-fluid">
					<img src='images/about/5.png' alt='about' class="img-fluid">
					<img src='images/about/6.png' alt='about' class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<!-- Section: Images -->

	<!-- Section: Links  -->
	<section class="">
		<div class="container text-center text-md-start mt-5">
			<!-- Grid row -->
			<div class="row mt-3">
				<!-- Grid column -->
				<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
					<div class="text-left">
						<!-- Logo -->
						<a href="{{ url('/') }}">
							<img src="images/logo.png" class="img-fluid" alt="Logo">
						</a>
						<p class="mb-4">
							Here you can use rows and columns to organize your footer content. Lorem ipsum
							dolor sit amet, consectetur adipisicing elit.
						</p>

						<!-- Right -->
						<div class="d-flex justify-content-evenly">
							<a href="" class="theme-color-dark-blue">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="" class="theme-color-dark-blue">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="" class="theme-color-dark-blue">
								<i class="fab fa-instagram"></i>
							</a>
						</div>
						<!-- Right -->
					</div>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
					<div class="text-left">
						<!-- Links -->
						<h6 class="text-uppercase fw-bold mb-4 title">
							Quick Links
						</h6>
						<p>
							<a href="{{ url('/') }}" class="text-reset">Home</a>
						</p>
						<p>
							<a href="{{ url('/about') }}" class="text-reset">About</a>
						</p>
						<p>
							<a href="{{ url('/blogs') }}" class="text-reset">Blogs</a>
						</p>
						<p>
							<a href="{{ url('/portfolio') }}" class="text-reset">Portfolio</a>
						</p>
						<p>
							<a href="{{ url('/terms-conditions') }}" class="text-reset">Terms & Conditions</a>
						</p>
						<p>
							<a href="{{ url('/privacy-policy') }}" class="text-reset">Privacy Policy</a>
						</p>
					</div>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
					<div class="text-left">
						<!-- Links -->
						<h6 class="text-uppercase fw-bold mb-4 title">
							Services
						</h6>
						@foreach($services->take(6) as $service)
						<p>
							<a href="{{ url('/service-' . $service->id) }}" class="text-reset">{{ $service->title }}</a>
						</p>
						@endforeach
					</div>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
					<div class="text-left">
						<!-- Links -->
						<h6 class="text-uppercase fw-bold mb-4 title">Get a Quote</h6>
						<p><i class="fas fa-home me-3"></i> 65 Court St, White Plains, NY 10601, USA</p>
						<p>
							<i class="fas fa-envelope me-3"></i>
							info@example.com
						</p>
						<p><i class="fas fa-phone me-3"></i> (914) 200-0157</p>
					</div>
				</div>
				<!-- Grid column -->
			</div>
			<!-- Grid row -->
		</div>
	</section>
	<!-- Section: Links  -->

	<!-- Copyright -->
	<div class="text-center p-4 text-white" style="background-color: rgb(34 58 102)">
		© 2021 Copyright:
		<a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
	</div>
	<!-- Copyright -->
</footer>
<!-- Footer -->

<!-- Essential Scripts
    =====================================-->
<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/shuffle/shuffle.min.js') }}"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
<script src="{{ asset('plugins/google-map/gmap.js') }}"></script>

<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/mega-menu.js') }}"></script>
<script src="{{ asset('js/animation.js') }}"></script>

<!-- Linking SwiperJS slider-section -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Linking custom slider-section -->
<script src="{{ asset('js/slider-section.js') }}"></script>


<script>
	document.addEventListener("DOMContentLoaded", () => {
		const isDesktop = () => window.innerWidth > 767.9;

		let gap = 15;

		if (isDesktop()) gap = 0.0285 * window.innerWidth;

		const sliders = [];

		["#horizontal-ticker-rtl", "#horizontal-ticker-ltr"].forEach(
			(query, index) => {
				sliders.push(
					new Swiper(query, {
						loop: true,
						slidesPerView: "auto",
						spaceBetween: gap,
						speed: 8000,
						allowTouchMove: false,
						autoplay: {
							delay: 0,
							reverseDirection: index,
							disableOnInteraction: false
						}
					})
				);
			}
		);

		window.addEventListener("resize", () => {
			isDesktop() ? (gap = 0.0285 * window.innerWidth) : (gap = 15);

			sliders.forEach((slider) => {
				slider.params.spaceBetween = gap;
				slider.update();
			});
		});
	});
</script>

</body>

</html>