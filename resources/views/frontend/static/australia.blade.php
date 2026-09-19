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
		'image' => 'page/australia/header-austrelia.png',
		'alt' => 'Australia immigration and education'
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
									<h2 class="why-usa-title">Why Choose Australia?</h2>

									<!-- Subheading -->
									<h3 class="why-usa-subtitle">Endless Opportunities. A Brighter Future.</h3>

									<!-- Body Paragraph (Exact Copy from Image) -->
									<p class="why-usa-desc">
										World-class education, multicultural cities, strong economy, beautiful landscapes and global opportunities. We help you select the right visa category based on your goals and circumstances, ensuring a smooth application process.
									</p>
								</div>

								<!-- RIGHT COLUMN: Visual Elements (Polaroids + Flag + Flight Route) -->
								<div class="why-usa-visual-col">



									<!-- Polaroid Photo Cards -->
									<div class="polaroid-gallery-wrapper">

										<!-- 1. SAN FRANCISCO POLAROID -->
										<div class="polaroid-card card-san-francisco">

											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/australia/choose-austrelia-1.jpg" alt="Dream" loading="lazy">
											</div>
											<!-- <div class="polaroid-caption">Dream</div> -->
										</div>

										<!-- 2. NEW YORK POLAROID -->
										<div class="polaroid-card card-new-york">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/australia/choose-austrelia-2.jpg" alt="Explore" loading="lazy">
											</div>
											<!-- <div class="polaroid-caption">Explore</div> -->
										</div>

										<!-- 3. LAS VEGAS POLAROID -->
										<div class="polaroid-card card-las-vegas">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/australia/choose-austrelia-3.jpg" alt="Archive" loading="lazy">
											</div>
											<!-- <div class="polaroid-caption">Archive</div> -->
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
				<h2 class="section-title">Choose Your Australia Visa</h2>
				<p class="section-subtitle">We offer guidance for different visa categories based on your purpose of travel.</p>

				<div class="cards-grid">
					<!-- Card 1 -->
					<div class="card card-blue">
						<div class="icon-box">
							<i class="fa-solid fa-graduation-cap"></i>
						</div>
						<h3 class="card-title">Australia Student Visa</h3>
						<p class="card-description">Study at Australian universities, colleges and education institutions.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 2 -->
					<div class="card card-red">
						<div class="icon-box">
							<i class="fa-solid fa-plane"></i>
						</div>
						<h3 class="card-title">Australia Tourist Visa</h3>
						<p class="card-description">Explore Australia and experience its iconic destinations.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 3 -->
					<div class="card card-green">
						<div class="icon-box">
							<i class="fa-solid fa-user-group"></i>
						</div>
						<h3 class="card-title">Australia Visitor Visa</h3>
						<p class="card-description">Visit family, friends and relatives in Australia.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 4 -->
					<div class="card card-purple">
						<div class="icon-box">
							<i class="fa-solid fa-heart"></i>
						</div>
						<h3 class="card-title">Australia Spouse / Partner Visa</h3>
						<p class="card-description">Join your eligible partner in Australia.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 5 -->
					<div class="card card-orange">
						<div class="icon-box">
							<i class="fa-solid fa-briefcase"></i>
						</div>
						<h3 class="card-title">Australia Business Visa</h3>
						<p class="card-description">Travel for eligible business activities.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>
				</div>
			</div>
		</div>


		<div class="explore-city">
			<!-- Header Section -->
			<div class="container all-cities-title">
				<h2 class="section-title">Explore Popular Australian Cities</h2>
				<p class="section-subtitle">Discover vibrant cities, stunning landscapes and unique experiences across Australia.</p>
			</div>
			`
			<div class="container-fluid">
				<div class="cities-grid">

					<!-- Card 1: London -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/australia/city-austrelia-1.jpg" alt="Sydney" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Sydney</h2>
							<p class="city-description">Opera House, Harbour Bridge and vibrant city life.</p>
						</div>
					</article>

					<!-- Card 2: Edinburgh -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/australia/city-austrelia-2.jpg" alt="Melbourne" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Melbourne</h2>
							<p class="city-description">Culture, cafés, arts and world-class events.</p>
						</div>
					</article>

					<!-- Card 3: Manchester -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/australia/city-austrelia-3.jpg" alt="Brisbane" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Brisbane</h2>
							<p class="city-description">River city, sunshine and relaxed lifestyle.</p>
						</div>
					</article>

					<!-- Card 4: Liverpool -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/australia/city-austrelia-4.jpg" alt="Gold Coast" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Gold Coast</h2>
							<p class="city-description">Beaches, theme parks and coastal experiences.</p>
						</div>
					</article>

					<!-- Card 5: Birmingham -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/australia/city-austrelia-5.jpg" alt="Perth" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Perth</h2>
							<p class="city-description">Beautiful beaches, modern city and Western Australia.</p>
						</div>
					</article>

				</div>
			</div>
		</div>

		<!----------------------------------------------->
		<div class="container-fluid">
			<div class="uk-visa-journey-card" id="visaJourneyComponent">

				<div class="uk-journey-visual-panel">
					<img src="{{ asset('website-static/images') }}/page/australia/why-austrelia.png" />
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
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<circle cx="12" cy="8" r="3.2" />
								<path d="M5.5 20c.5-3.8 3-6 6.5-6s6 2.2 6.5 6H5.5z" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Profile Assessment</h4>
							<p class="guidance-desc">Understand your profile and goals.</p>
						</div>
					</div>

					<!-- Item 2: Document Guidance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Document Guidance">
							<!-- Document Checklist File Icon -->
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<path d="M7 3h7l4 4v14H7z" />
								<path d="M14 3v5h4" />
								<path d="M10 12h5M10 15h5M10 18h3" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Document Guidance</h4>
							<p class="guidance-desc">Get a clear list and expert support.</p>
						</div>
					</div>

					<!-- Item 3: Application Assistance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Application Assistance">
							<!-- Clipboard with Checklist Icon -->
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<path d="M6 3h9l4 4v14H6z" />
								<path d="M15 3v5h4" />
								<path d="M9 12h6M9 15h3" />
								<path d="M14 17l1.5 1.5L19 15" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Application Assistance</h4>
							<p class="guidance-desc">Accurate and complete application filing.</p>
						</div>
					</div>

					<!-- Item 4: Appointment & Biometrics Guidance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Appointment & Biometrics Guidance">
							<!-- Biometric Fingerprint Ridges Icon -->
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<rect x="4" y="5" width="16" height="16" rx="2" />
								<path d="M8 3v4M16 3v4M4 10h16" />
								<path d="M9 14h6M9 17h4" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Appointment & Biometrics Guidance</h4>
							<p class="guidance-desc">Book appointments and prepare for biometrics.</p>
						</div>
					</div>

					<!-- Item 5: Application Tracking & Updates -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Application Tracking & Updates">
							<!-- Notification Bell Alert Icon -->
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<path d="M12 21s7-6.2 7-11.2A7 7 0 0 0 5 9.8C5 14.8 12 21 12 21z" />
								<circle cx="12" cy="9" r="2" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Application Tracking & Updates</h4>
							<p class="guidance-desc">Stay informed at every step.</p>
						</div>
					</div>

					<!-- Item 5: Application Tracking & Updates -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Application Tracking & Updates">
							<!-- Notification Bell Alert Icon -->
							<svg viewBox="0 0 24 24" aria-hidden="true">
								<path d="M21 3L3 10l7 3 3 7 8-17z" />
								<path d="M10 13l4-4" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Pre-Travel Guidance</h4>
							<p class="guidance-desc">Get ready for a smooth journey to Australia.</p>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!----------------------------------------------->
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">Our Australia Visa Process</h2>
				<p class="section-subtitle">AA simple, transparent and step-by-step process to get your visa.</p>
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
			<div class="destination-section where-to-go germany-map">

				<section class="map-banner">
					<div class="map-container">

						<!-- SVG Stylized UK Map Vector -->
						<img src="{{ asset('website-static/images') }}/page/australia/austrelia-map.png" />
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
							<path d="M 20 80 Q 70 10, 180 30" fill="none" stroke="#e50914" stroke-width="2" stroke-dasharray="4,5" />
							<circle cx="50" cy="62" r="8" fill="none" stroke="#e50914" stroke-width="1.5" stroke-dasharray="2,3" />
							<circle cx="95" cy="38" r="10" fill="none" stroke="#e50914" stroke-width="1.5" stroke-dasharray="2,3" />
						</svg>

						<!-- Airplane Icon -->
						<i class="fa-solid fa-plane plane-icon"></i>

					</div>
				</section>

				<section class="cards-grid">

					<!-- Card 1: New South Wales -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/australia/new-south-wales.jpg" alt="New South Wales">
						</div>
						<div class="card-label label-england">New South Wales</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Sydney</li>
								<li>Blue Mountains</li>
								<li>Bondi Beach</li>
							</ul>
						</div>
					</article>

					<!-- Card 2: Victoria -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/australia/victoria.jpg" alt="Victoria">
						</div>
						<div class="card-label label-scotland">Victoria</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Melbourne</li>
								<li>Great Ocean Road</li>
								<li>Yarra Valley</li>
							</ul>
						</div>
					</article>

					<!-- Card 3: Queensland -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/australia/Queensland.jpg" alt="Queensland">
						</div>
						<div class="card-label label-wales">Queensland</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Brisbane</li>
								<li>Gold Coast</li>
								<li>Cairns</li>
							</ul>
						</div>
					</article>

					<!-- Card 4: Western Australia -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/australia/western-australia.jpg" alt="Western Australia">
						</div>
						<div class="card-label label-ni">Western Australia</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Perth</li>
								<li>Rottnest Island</li>
								<li>Margaret River</li>
							</ul>
						</div>
					</article>

				</section>

			</div>
		</div>


		<!----------------------------------------------->

		<div class="container-fluid australia-journey">
			<section class="res-journey-img">
				<img src="{{ asset('website-static/images') }}/page/australia/footer-austrelia.png" />
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