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
		'image' => 'page/usa/header.png',
		'animation' => 'zoom-in-up',
		'alt' => 'USA immigration and education'
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
									<h2 class="why-usa-title">Why Choose the USA?</h2>

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
												<img src="{{ asset('website-static/images') }}/page/usa/choose-usa-1.jpg" alt="San Francisco" loading="lazy">
											</div>
											<div class="polaroid-caption">San Francisco</div>
										</div>

										<!-- 2. NEW YORK POLAROID -->
										<div class="polaroid-card card-new-york">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/usa/choose-usa-2.jpg" alt="New York" loading="lazy">
											</div>
											<div class="polaroid-caption">New York</div>
										</div>

										<!-- 3. LAS VEGAS POLAROID -->
										<div class="polaroid-card card-las-vegas">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/usa/choose-usa-3.jpg" alt="Las Vegas" loading="lazy">
											</div>
											<div class="polaroid-caption">Las Vegas</div>
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
				<h2 class="section-title">Choose Your USA Visa</h2>
				<p class="section-subtitle">We provide end-to-end assistance for all major USA visa categories.</p>

				<div class="cards-grid">
					<!-- Card 1 -->
					<div class="card card-blue">
						<div class="icon-box">
							<i class="fa-solid fa-graduation-cap"></i>
						</div>
						<h3 class="card-title">USA Student Visa</h3>
						<p class="card-description">Study at top US universities, colleges and educational institutions.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 2 -->
					<div class="card card-red">
						<div class="icon-box">
							<i class="fa-solid fa-plane"></i>
						</div>
						<h3 class="card-title">USA Tourist Visa</h3>
						<p class="card-description">Explore the USA's iconic cities, national parks, and attractions.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 3 -->
					<div class="card card-green">
						<div class="icon-box">
							<i class="fa-solid fa-user-group"></i>
						</div>
						<h3 class="card-title">USA Visitor Visa</h3>
						<p class="card-description">Visit family, friends and relatives in the USA.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 4 -->
					<div class="card card-purple">
						<div class="icon-box">
							<i class="fa-solid fa-heart"></i>
						</div>
						<h3 class="card-title">USA Spouse Visa</h3>
						<p class="card-description">Join your spouse/partner in the United States.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 5 -->
					<div class="card card-orange">
						<div class="icon-box">
							<i class="fa-solid fa-briefcase"></i>
						</div>
						<h3 class="card-title">USA Business Visa</h3>
						<p class="card-description">Travel for business meetings, conferences and investment opportunities.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>
				</div>
			</div>
		</div>


		<div class="explore-city">
			<!-- Header Section -->
			<div class="container all-cities-title">
				<h2 class="section-title">Explore Iconic USA Cities</h2>
				<p class="section-subtitle">From bustling metropolises to natural wonders — experience the best of the USA.</p>
			</div>
			`
			<div class="container-fluid">
				<div class="cities-grid">

					<!-- Card 1: London -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/usa/city-usa-1.jpg" alt="New York" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">New York</h2>
							<p class="city-description">The city that never sleeps — skyscrapers, culture, shopping and endless energy.</p>
						</div>
					</article>

					<!-- Card 2: Edinburgh -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/usa/city-usa-2.jpg" alt="Los Angeles" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Los Angeles</h2>
							<p class="city-description">Sunshine, beaches, Hollywood and a vibrant lifestyle.</p>
						</div>
					</article>

					<!-- Card 3: Manchester -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/usa/city-usa-3.jpg" alt="San Francisco" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">San Francisco</h2>
							<p class="city-description">Stunning views, tech hubs and a laid-back vibe.</p>
						</div>
					</article>

					<!-- Card 4: Liverpool -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/usa/city-usa-4.jpg" alt="Chicago" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Chicago</h2>
							<p class="city-description">Architecture, museums, shopping and rich culture.</p>
						</div>
					</article>

					<!-- Card 5: Birmingham -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/usa/city-usa-5.jpg" alt="Miami" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Miami</h2>
							<p class="city-description">Beautiful beaches, vibrant nightlife and tropical vibes.</p>
						</div>
					</article>

				</div>
			</div>
		</div>

		<!----------------------------------------------->
		<div class="container-fluid">
			<div class="uk-visa-journey-card" id="visaJourneyComponent">

				<div class="uk-journey-visual-panel">
					<img src="{{ asset('website-static/images') }}/page/usa/why-travel-usa.png" />
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
							<svg viewBox="0 0 24 24" width="28" height="28"
								fill="none" stroke="currentColor" stroke-width="1.8"
								stroke-linecap="round" stroke-linejoin="round">
								<path d="M3 9l9-5 9 5-9 5-9-5z" />
								<path d="M7 11v5c3 2 7 2 10 0v-5" />
								<path d="M21 9v6" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">World-Class Education</h4>
							<p class="guidance-desc">Top-ranked universities and global career opportunities.</p>
						</div>
					</div>

					<!-- Item 2: Document Guidance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Document Guidance">
							<!-- Document Checklist File Icon -->
							<svg viewBox="0 0 24 24" width="28" height="28"
								fill="none" stroke="currentColor" stroke-width="1.8"
								stroke-linecap="round" stroke-linejoin="round">
								<rect x="3" y="7" width="18" height="13" rx="2" />
								<path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
								<path d="M3 12h18" />
								<path d="M10 12v2h4v-2" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Business & Career Growth</h4>
							<p class="guidance-desc">Access to innovation, technology and international markets.</p>
						</div>
					</div>

					<!-- Item 3: Application Assistance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Application Assistance">
							<!-- Clipboard with Checklist Icon -->
							<svg viewBox="0 0 24 24" width="28" height="28"
								fill="none" stroke="currentColor" stroke-width="1.8"
								stroke-linecap="round" stroke-linejoin="round">
								<path d="M3 20l6-9 4 5 3-4 5 8H3z" />
								<path d="M9 11l2-3 2 3" />
								<path d="M17 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Stunning Destinations</h4>
							<p class="guidance-desc">From coastlines to national parks, experience breathtaking beauty..</p>
						</div>
					</div>

					<!-- Item 4: Appointment & Biometrics Guidance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Appointment & Biometrics Guidance">
							<!-- Biometric Fingerprint Ridges Icon -->
							<svg viewBox="0 0 24 24" width="28" height="28"
								fill="none" stroke="currentColor" stroke-width="1.8"
								stroke-linecap="round" stroke-linejoin="round">

								<circle cx="12" cy="7" r="3" />
								<path d="M6 21v-2a6 6 0 0 1 12 0v2" />

								<circle cx="4.5" cy="10" r="2" />
								<path d="M1 20v-2a4 4 0 0 1 5-3.8" />

								<circle cx="19.5" cy="10" r="2" />
								<path d="M23 20v-2a4 4 0 0 0-5-3.8" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Family & Friends</h4>
							<p class="guidance-desc">Reunite with your loved ones and create lasting memories.</p>
						</div>
					</div>

					<!-- Item 5: Application Tracking & Updates -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Application Tracking & Updates">
							<!-- Notification Bell Alert Icon -->
							<svg viewBox="0 0 24 24" width="28" height="28"
								fill="currentColor">
								<path d="M12 2.5l2.9 5.9 6.5.9-4.7 4.6 1.1 6.5-5.8-3.1-5.8 3.1 1.1-6.5-4.7-4.6 6.5-.9L12 2.5z" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Diverse Culture</h4>
							<p class="guidance-desc">Experience a rich blend of cultures, food and traditions.</p>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!----------------------------------------------->
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">Our USA Visa Process</h2>
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

		<div class="container-fluid usa-journey">
			<section class="res-journey-img">
				<img src="{{ asset('website-static/images') }}/page/usa/footer-usa.png" />
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