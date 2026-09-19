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
		'image' => 'page/germany/header-germany.png',
		'alt' => 'Germany immigration and education'
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
									<h2 class="why-usa-title">Why Choose Germany?</h2>

									<!-- Subheading -->
									<h3 class="why-usa-subtitle">Endless Opportunities. A Brighter Future.</h3>

									<!-- Body Paragraph (Exact Copy from Image) -->
									<p class="why-usa-desc">
										World-class education, vibrant cities, strong business opportunities, rich culture, fascinating history and unforgettable travel experiences. We help you select the right visa category based on your goals and circumstances, ensuring a smooth application process.
									</p>
								</div>

								<!-- RIGHT COLUMN: Visual Elements (Polaroids + Flag + Flight Route) -->
								<div class="why-usa-visual-col">



									<!-- Polaroid Photo Cards -->
									<div class="polaroid-gallery-wrapper">

										<!-- 1. SAN FRANCISCO POLAROID -->
										<div class="polaroid-card card-san-francisco">

											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/germany/choose-germany-1.jpg" alt="Dream" loading="lazy">
											</div>
											<div class="polaroid-caption">Dream</div>
										</div>

										<!-- 2. NEW YORK POLAROID -->
										<div class="polaroid-card card-new-york">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/germany/choose-germany-2.jpg" alt="Explore" loading="lazy">
											</div>
											<div class="polaroid-caption">Explore</div>
										</div>

										<!-- 3. LAS VEGAS POLAROID -->
										<div class="polaroid-card card-las-vegas">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/germany/choose-germany-3.jpg" alt="Archive" loading="lazy">
											</div>
											<div class="polaroid-caption">Archive</div>
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
				<h2 class="section-title">Choose Your Germany Visa</h2>
				<p class="section-subtitle">We offer guidance for different visa categories based on your purpose of travel.</p>

				<div class="cards-grid">
					<!-- Card 1 -->
					<div class="card card-blue">
						<div class="icon-box">
							<i class="fa-solid fa-graduation-cap"></i>
						</div>
						<h3 class="card-title">Germany Student Visa</h3>
						<p class="card-description">Study at German universities and educational institutions.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 2 -->
					<div class="card card-red">
						<div class="icon-box">
							<i class="fa-solid fa-plane"></i>
						</div>
						<h3 class="card-title">Germany Tourist Visa</h3>
						<p class="card-description">Explore Germany and Schengen destinations.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 3 -->
					<div class="card card-green">
						<div class="icon-box">
							<i class="fa-solid fa-user-group"></i>
						</div>
						<h3 class="card-title">Germany Visitor Visa</h3>
						<p class="card-description">Visit family, friends and relatives in Germany.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 4 -->
					<div class="card card-purple">
						<div class="icon-box">
							<i class="fa-solid fa-heart"></i>
						</div>
						<h3 class="card-title">Germany Spouse Visa</h3>
						<p class="card-description">Join eligible family members in Germany.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 5 -->
					<div class="card card-orange">
						<div class="icon-box">
							<i class="fa-solid fa-briefcase"></i>
						</div>
						<h3 class="card-title">Germany Business Visa</h3>
						<p class="card-description">Travel for eligible business activities.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>
				</div>
			</div>
		</div>


		<div class="explore-city">
			<!-- Header Section -->
			<div class="container all-cities-title">
				<h2 class="section-title">Explore Famous German Cities</h2>
				<p class="section-subtitle">Discover iconic cities, historic landmarks and unique experiences across Germany.</p>
			</div>
			`
			<div class="container-fluid">
				<div class="cities-grid">

					<!-- Card 1: London -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/germany/germany-city-1.jpg" alt="Berlin" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Berlin</h2>
							<p class="city-description">Iconic landmarks, rich history and a dynamic cultural scene.</p>
						</div>
					</article>

					<!-- Card 2: Edinburgh -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/germany/germany-city-2.jpg" alt="Munich" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Munich</h2>
							<p class="city-description">Marienplatz, Bavarian culture, world-class museums.</p>
						</div>
					</article>

					<!-- Card 3: Manchester -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/germany/germany-city-3.jpg" alt="Hamburg" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Hamburg</h2>
							<p class="city-description">Speicherstadt, harbor and the Elbphilharmonie skyline.</p>
						</div>
					</article>

					<!-- Card 4: Liverpool -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/germany/germany-city-4.jpg" alt="Frankfurt" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Frankfurt</h2>
							<p class="city-description">Modern skyline, business hub and historic center.</p>
						</div>
					</article>

					<!-- Card 5: Birmingham -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/germany/germany-city-5.jpg" alt="Cologne" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Cologne</h2>
							<p class="city-description">Magnificent cathedral, Rhine views and historic attractions.</p>
						</div>
					</article>

				</div>
			</div>
		</div>

		<!----------------------------------------------->
		<div class="container-fluid">
			<div class="uk-visa-journey-card" id="visaJourneyComponent">

				<div class="uk-journey-visual-panel">
					<img src="{{ asset('website-static/images') }}/page/germany/why-germany.png" />
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
							<p class="guidance-desc">We evaluate your profile and guide you on the best option.</p>
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
							<p class="guidance-desc">Get a clear checklist and step-by-step support.</p>
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
							<p class="guidance-desc">We help you complete and submit your application accurately.</p>
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
							<p class="guidance-desc">We assist with scheduling and biometric requirements.</p>
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
							<p class="guidance-desc">Stay informed at every stage of the process.</p>
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
							<p class="guidance-desc">Get useful tips for a smooth journey to Germany.</p>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!----------------------------------------------->
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">Our Germany Visa Process</h2>
				<p class="section-subtitle">A simple, structured process for a hassle-free experience.</p>
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
						<img src="{{ asset('website-static/images') }}/page/germany/germany-map.png" />
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

					<!-- Card 1: Berlin -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/germany/Berlin.jpg" alt="Berlin">
						</div>
						<div class="card-label label-england">Berlin</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Brandenburg Gate</li>
								<li>Museum Island</li>
								<li>Berlin Wall</li>
							</ul>
						</div>
					</article>

					<!-- Card 2: Bavaria -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/germany/Bavaria.jpg" alt="Bavaria">
						</div>
						<div class="card-label label-scotland">Bavaria</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Munich</li>
								<li>Neuschwanstein Castle</li>
								<li>Alps</li>
							</ul>
						</div>
					</article>

					<!-- Card 3: North Rhine-Westphalia -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/germany/North-Rhine-Westphalia.jpg" alt="North Rhine-Westphalia">
						</div>
						<div class="card-label label-wales">North Rhine-Westphalia</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Cologne</li>
								<li>Düsseldorf</li>
								<li>Ruhr Region</li>
							</ul>
						</div>
					</article>

					<!-- Card 4: Baden-Württemberg -->
					<article class="card">
						<div class="card-image-box">
							<img src="{{ asset('website-static/images') }}/page/germany/Baden-Württemberg.jpg" alt="Baden-Württemberg">
						</div>
						<div class="card-label label-ni">Baden-Württemberg</div>
						<div class="card-body">
							<ul class="city-list">
								<li>Stuttgart</li>
								<li>Heidelberg</li>
								<li>Black Forest</li>
							</ul>
						</div>
					</article>

				</section>

			</div>
		</div>


		<!----------------------------------------------->

		<div class="container-fluid germany-journey">
			<section class="res-journey-img">
				<img src="{{ asset('website-static/images') }}/page/germany/footer-germany.png" />
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