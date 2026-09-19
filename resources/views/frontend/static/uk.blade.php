@extends('layouts.front')
@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper country-title-bar">
</div>
<!-- Title Bar End-->

<!-- Contact Us Content -->
<div class="page-content contact-us-page">


	<!-- Portfolio Details -->
	<section class="site-content countries-pagess pbmit-portfolio-single">

		<!----------------------------------------------->

		@include('includes.country-banner', [
		'image' => 'page/uk/uk-header-img.png',
		'animation' => 'zoom-out-down',
		'alt' => 'UK immigration and education'
		])

		<!----------------------------------------------->

		<div class="container">
			<div class="row">

				<div class="col-md-12 col-xl-12 full-width-1200">
					<!-- UK -->
					<div class="show active" data-aos="fade-left" data-aos-delay="100">
						<span id="target-detail-uk"></span>
						<!-- <div class="pbmit-portfolio-feature-image">
								<img src="{{ asset('website-static/images') }}/homepage-3/portfolio/uk-1.jpg" class="img-fluid w-100" alt="United Kingdom(UK)" />
							</div> -->
						<div class="pbmit-entry-content">

							<div class="why-usa-section-card text-left" id="whyChooseUSACard">

								<!-- LEFT COLUMN: Content Details -->
								<div class="why-usa-text-col">
									<!-- Decorative Red Accent Bar -->
									<div class="red-accent-bar"></div>

									<!-- Heading -->
									<h2 class="why-usa-title">Why Choose the UK ?</h2>

									<!-- Subheading -->
									<h3 class="why-usa-subtitle">Endless Opportunities. A Brighter Future.</h3>

									<!-- Body Paragraph (Exact Copy from Image) -->
									<p class="why-usa-desc">
										The United States is home to top universities, leading industries and breathtaking destinations. Whether you are a student, a traveler, a visitor, a spouse or an entrepreneur, we help you choose the right visa category and make your application process simple and stress-free.
									</p>
								</div>

								<!-- RIGHT COLUMN: Visual Elements (Polaroids + Flag + Flight Route) -->
								<div class="why-usa-visual-col">



									<!-- Polaroid Photo Cards -->
									<div class="polaroid-gallery-wrapper">

										<!-- 1. SAN FRANCISCO POLAROID -->
										<div class="polaroid-card card-san-francisco">

											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/uk/choose-uk-2.webp" alt="London, Tower Bridge" loading="lazy">
											</div>
											<div class="polaroid-caption">London</div>
										</div>

										<!-- 2. NEW YORK POLAROID -->
										<div class="polaroid-card card-new-york">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/uk/choose-uk-3.webp" alt="London Eye" loading="lazy">
											</div>
											<div class="polaroid-caption">London Eye</div>
										</div>

										<!-- 3. LAS VEGAS POLAROID -->
										<div class="polaroid-card card-las-vegas">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/uk/choose-uk-1.jpg" alt="Edinburgh Castle" loading="lazy">
											</div>
											<div class="polaroid-caption">Edinburgh Castle</div>
										</div>

									</div>

								</div>

							</div>


						</div>
					</div>
					<!-- UK -->
				</div>

			</div>
		</div>


		<div class="choose-visa-page">
			<div class="container">
				<h2 class="section-title">Choose Your UK Visa</h2>
				<p class="section-subtitle">We provide end-to-end assistance for all major UK visa categories.</p>

				<div class="cards-grid">
					<!-- Card 1 -->
					<div class="card card-blue">
						<div class="icon-box">
							<i class="fa-solid fa-graduation-cap"></i>
						</div>
						<h3 class="card-title">UK Student Visa</h3>
						<p class="card-description">Study at top UK universities, colleges and educational institutions.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 2 -->
					<div class="card card-red">
						<div class="icon-box">
							<i class="fa-solid fa-plane"></i>
						</div>
						<h3 class="card-title">UK Tourist Visa</h3>
						<p class="card-description">Explore London's landmarks, Scotland, Wales and England.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 3 -->
					<div class="card card-green">
						<div class="icon-box">
							<i class="fa-solid fa-user-group"></i>
						</div>
						<h3 class="card-title">UK Visitor Visa</h3>
						<p class="card-description">Visit family, friends and relatives in the UK.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 4 -->
					<div class="card card-purple">
						<div class="icon-box">
							<i class="fa-solid fa-heart"></i>
						</div>
						<h3 class="card-title">UK Spouse Visa</h3>
						<p class="card-description">Join your eligible spouse/ partner in the United Kingdom.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 5 -->
					<div class="card card-orange">
						<div class="icon-box">
							<i class="fa-solid fa-briefcase"></i>
						</div>
						<h3 class="card-title">UK Business Visa</h3>
						<p class="card-description">Travel to the UK for eligible business activities.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>
				</div>
			</div>
		</div>



		<div class="explore-city">
			<!-- Header Section -->
			<div class="container all-cities-title">
				<h2 class="section-title">Explore Famous UK Cities</h2>
				<p class="section-subtitle">From historic landmarks to vibrant cultures — discover the best of the UK.</p>
			</div>
			`
			<div class="container-fluid">
				<div class="cities-grid">

					<!-- Card 1: London -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/uk/london.jpg" alt="London skyline with Big Ben" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">London</h2>
							<p class="city-description">Iconic capital with Big Ben, Buckingham Palace, Tower Bridge and world-class universities.</p>
						</div>
					</article>

					<!-- Card 2: Edinburgh -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/uk/edinburgh.jpg" alt="Edinburgh Castle on hill" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Edinburgh</h2>
							<p class="city-description">Scotland's historic capital, home to Edinburgh Castle, beautiful architecture and cultural attractions.</p>
						</div>
					</article>

					<!-- Card 3: Manchester -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/uk/manchester.jpg" alt="Manchester cityscape skyline" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Manchester</h2>
							<p class="city-description">A vibrant city known for football, business, universities, music and cultural experiences.</p>
						</div>
					</article>

					<!-- Card 4: Liverpool -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/uk/liver-pool.jpg" alt="Liverpool waterfront architecture" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Liverpool</h2>
							<p class="city-description">Explore the famous waterfront, rich musical heritage, museums and historic attractions.</p>
						</div>
					</article>

					<!-- Card 5: Birmingham -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/uk/birmingham.jpg" alt="Birmingham city center view" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Birmingham</h2>
							<p class="city-description">A major city offering shopping, business, education, entertainment and culture.</p>
						</div>
					</article>

				</div>
			</div>
		</div>

		<!----------------------------------------------->
		<div class="container-fluid">
			<div class="uk-visa-journey-card" id="visaJourneyComponent">

				<div class="uk-journey-visual-panel">
					<img src="{{ asset('website-static/images') }}/page/uk/guid-professionally.png" />
					<!-- <div class="sky-gradient-overlay"></div>
						<div class="warmth-overlay"></div> -->

				</div>

				<!-- ========================================================== -->
				<!-- RIGHT HALF: 6 Guidance Steps (Exact Copy & Icons)          -->
				<!-- ========================================================== -->
				<div class="uk-journey-content-panel">

					<!-- Item 1: Profile Assessment -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Profile Assessment">
							<!-- User Profile Head & Shoulders Avatar Icon -->
							<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
								<circle cx="12" cy="7" r="4"></circle>
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Profile Assessment</h4>
							<p class="guidance-desc">Understand your profile and identify the right visa category.</p>
						</div>
					</div>

					<!-- Item 2: Document Guidance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Document Guidance">
							<!-- Document Checklist File Icon -->
							<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
								<polyline points="14 2 14 8 20 8"></polyline>
								<path d="m9 15 2 2 4-4"></path>
								<line x1="9" y1="9" x2="11" y2="9"></line>
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Document Guidance</h4>
							<p class="guidance-desc">Get a clear checklist of the documents required.</p>
						</div>
					</div>

					<!-- Item 3: Application Assistance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Application Assistance">
							<!-- Clipboard with Checklist Icon -->
							<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<rect x="5" y="4" width="14" height="17" rx="2" stroke-width="2"></rect>
								<path d="M9 4V3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1"></path>
								<path d="m8.5 12 1.5 1.5 3-3"></path>
								<line x1="14" y1="12" x2="16" y2="12"></line>
								<line x1="8.5" y1="17" x2="16" y2="17"></line>
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Application Assistance</h4>
							<p class="guidance-desc">Support throughout the application preparation and submission.</p>
						</div>
					</div>

					<!-- Item 4: Appointment & Biometrics Guidance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Appointment & Biometrics Guidance">
							<!-- Biometric Fingerprint Ridges Icon -->
							<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 2a10 10 0 0 0-10 10c0 2.2.8 4.3 2.1 6"></path>
								<path d="M12 6a6 6 0 0 0-6 6c0 1.5.5 2.9 1.4 4"></path>
								<path d="M12 10a2 2 0 0 0-2 2c0 2 1 3.5 2 5"></path>
								<path d="M15 12c0 3-1 5-2 7"></path>
								<path d="M18 12c0 4-1.5 6-3 8"></path>
								<path d="M21 12c0 2.5-.7 4.8-1.9 6.8"></path>
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Appointment &amp; Biometrics Guidance</h4>
							<p class="guidance-desc">Help with relevant appointment and biometric requirements.</p>
						</div>
					</div>

					<!-- Item 5: Application Tracking & Updates -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Application Tracking & Updates">
							<!-- Notification Bell Alert Icon -->
							<svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
								<path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"></path>
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Application Tracking &amp; Updates</h4>
							<p class="guidance-desc">Stay informed about important updates.</p>
						</div>
					</div>

					<!-- Item 6: Pre-Travel Guidance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Pre-Travel Guidance">
							<!-- Airplane Takeoff Icon -->
							<svg class="w-5 h-5 transform -rotate-45" viewBox="0 0 24 24" fill="currentColor">
								<path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"></path>
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Pre-Travel Guidance</h4>
							<p class="guidance-desc">Get guidance on the next steps after your visa decision.</p>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!----------------------------------------------->
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">Our UK Visa Process</h2>
				<p class="section-subtitle">A simple, step-by-step process to make your journey easier.</p>
			</div>
		</div>
		<div class="container-fluid">
			<section class="process-card">

				<div class="process-steps-wrapper">
					<!-- Background Horizontal Line -->
					<div class="horizontal-connecting-line"></div>

					<!-- 7 Horizontal Process Steps -->
					<div class="process-steps-container">

						<!-- Step 01 -->
						<div class="step-item">
							<div class="icon-circle">
								<i class="fa-solid fa-comments"></i>
							</div>
							<span class="step-number">01</span>
							<h2 class="step-title">Initial Consultation</h2>
							<div class="step-arrow-container">
								<i class="fa-solid fa-arrow-right"></i>
							</div>
						</div>

						<!-- Step 02 -->
						<div class="step-item">
							<div class="icon-circle">
								<i class="fa-solid fa-user"></i>
							</div>
							<span class="step-number">02</span>
							<h2 class="step-title">Profile Assessment</h2>
							<div class="step-arrow-container">
								<i class="fa-solid fa-arrow-right"></i>
							</div>
						</div>

						<!-- Step 03 -->
						<div class="step-item">
							<div class="icon-circle">
								<i class="fa-solid fa-file-lines"></i>
							</div>
							<span class="step-number">03</span>
							<h2 class="step-title">Document Checklist</h2>
							<div class="step-arrow-container">
								<i class="fa-solid fa-arrow-right"></i>
							</div>
						</div>

						<!-- Step 04 -->
						<div class="step-item">
							<div class="icon-circle">
								<i class="fa-solid fa-circle-check"></i>
							</div>
							<span class="step-number">04</span>
							<h2 class="step-title">Document Verification</h2>
							<div class="step-arrow-container">
								<i class="fa-solid fa-arrow-right"></i>
							</div>
						</div>

						<!-- Step 05 -->
						<div class="step-item">
							<div class="icon-circle">
								<i class="fa-solid fa-square-pen"></i>
							</div>
							<span class="step-number">05</span>
							<h2 class="step-title">Application Preparation</h2>
							<div class="step-arrow-container">
								<i class="fa-solid fa-arrow-right"></i>
							</div>
						</div>

						<!-- Step 06 -->
						<div class="step-item">
							<div class="icon-circle">
								<i class="fa-solid fa-fingerprint"></i>
							</div>
							<span class="step-number">06</span>
							<h2 class="step-title">Biometrics / Appointment</h2>
							<div class="step-arrow-container">
								<i class="fa-solid fa-arrow-right"></i>
							</div>
						</div>

						<!-- Step 07 -->
						<div class="step-item">
							<div class="icon-circle">
								<i class="fa-solid fa-plane"></i>
							</div>
							<span class="step-number">07</span>
							<h2 class="step-title">Visa Decision</h2>
						</div>

					</div>
				</div>


			</section>
		</div>


		<!----------------------------------------------->

		<div class="container-fluid">
			<div class="destination-section where-to-go">

				<section class="map-banner">
					<div class="map-container">

						<!-- SVG Stylized UK Map Vector -->
						<img src="{{ asset('website-static/images') }}/page/uk/uk-map.png" />
						<svg class="uk-map-svg" viewBox="0 0 350 480" fill="none" xmlns="http://www.w3.org/2000/svg">
							<!-- Outlying Islands -->
							<circle cx="210" cy="15" r="5" fill="#154284" />
							<circle cx="225" cy="22" r="4" fill="#154284" />
							<circle cx="115" cy="90" r="6" fill="#154284" />
						</svg>

						<!-- Red Pin Marker -->
						<div class="map-pin">
							<div class="pin-outer">
								<div class="pin-inner"></div>
							</div>
						</div>

						<!-- Cursive Title -->
						<h2 class="cursive-title">Where Would You<br>Like to Go?</h2>

						<!-- Dashed Flight Arc SVG -->
						<svg class="flight-path-svg" viewBox="0 0 200 100">
							<path d="M 20 80 Q 70 10, 180 30" fill="none" stroke="#1e3a8a" stroke-width="2" stroke-dasharray="4,5" />
							<circle cx="50" cy="62" r="8" fill="none" stroke="#1e3a8a" stroke-width="1.5" stroke-dasharray="2,3" />
							<circle cx="95" cy="38" r="10" fill="none" stroke="#1e3a8a" stroke-width="1.5" stroke-dasharray="2,3" />
						</svg>

						<!-- Airplane Icon -->
						<i class="fa-solid fa-plane plane-icon"></i>

					</div>
				</section>

				<section class="cards-grid">

					<!-- Card 1: England -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/uk/england.jpg" alt="England - Big Ben London">
						</div>
						<div class="card-label label-england">England</div>
						<div class="card-body">
							<ul class="city-list">
								<li>London</li>
								<li>Manchester</li>
								<li>Birmingham</li>
								<li>Liverpool</li>
								<li>Oxford</li>
							</ul>
						</div>
					</article>

					<!-- Card 2: Scotland -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/uk/scotland-blue.jpg" alt="Scotland - Edinburgh Castle">
						</div>
						<div class="card-label label-scotland">Scotland</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Edinburgh</li>
								<li>Glasgow</li>
								<li>Highlands</li>
							</ul>
						</div>
					</article>

					<!-- Card 3: Wales -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/uk/wales-green.jpg" alt="Wales - Coastal Mountain Landscape">
						</div>
						<div class="card-label label-wales">Wales</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Cardiff</li>
								<li>Snowdonia</li>
								<li>Swansea</li>
							</ul>
						</div>
					</article>

					<!-- Card 4: Northern Ireland -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/uk/northen-ireland-purple.jpg" alt="Northern Ireland - Giant's Causeway Landscape">
						</div>
						<div class="card-label label-ni">Northern Ireland</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Belfast</li>
								<li>Giant's Causeway</li>
							</ul>
						</div>
					</article>

				</section>

			</div>
		</div>

		<!----------------------------------------------->

		<div class="container-fluid">
			<section class="res-journey-img">
				<img src="{{ asset('website-static/images') }}/page/uk/uk-footer-img.png" />
			</section>
			<section class="cta-banner">
				<div class="cta-content-grid">

					<!-- Left Text Content -->
					<div class="cta-left-content">
					</div>

					<!-- Right Call to Action Buttons -->
					<div class="cta-right-buttons">
						<!-- Primary Action Button -->
						<a href="/appointments" class="btn-primary-red">
							<span class="btn-icon-left"><i class="fa-regular fa-clock"></i></span>
							<span class="btn-text">Get an Appointment</span>
							<span class="btn-arrow"><i class="fa-solid fa-arrow-right"></i></span>
						</a>

						<!-- Secondary Action Button -->
						<a href="https://api.whatsapp.com/send?phone=919879476666&text=Welcome to seven countries immigration and education pvt. ltd." class="btn-secondary-outline" target="_blank">
							<i class="fa-solid fa-phone-volume"></i>
							<span>Contact Us</span>
						</a>
					</div>

				</div>

				<!-- Corner Union Jack Flag Overlay -->
				<div class="uk-flag-corner">
					<svg class="uk-flag-svg" viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
						<clipPath id="flag-clip">
							<rect width="60" height="40" rx="4" />
						</clipPath>
						<g clip-path="url(#flag-clip)">
							<!-- Blue background -->
							<rect width="60" height="40" fill="#012169" />
							<!-- White diagonal saltire -->
							<path d="M0 0 L60 40 M60 0 L0 40" stroke="#ffffff" stroke-width="8" />
							<!-- Red diagonal saltire -->
							<path d="M0 0 L60 40 M60 0 L0 40" stroke="#C8102E" stroke-width="4" />
							<!-- White central cross -->
							<path d="M30 0 V40 M0 20 H60" stroke="#ffffff" stroke-width="12" />
							<!-- Red central cross -->
							<path d="M30 0 V40 M0 20 H60" stroke="#C8102E" stroke-width="7" />
						</g>
					</svg>
				</div>
			</section>
		</div>




	</section>
	<!-- Portfolio Details End -->

	<!------------------------------------------------------------------------------->





</div>
<!-- Contact Us Content End -->










@include('includes.migration-cta')

@endsection

@section('script')
@endsection