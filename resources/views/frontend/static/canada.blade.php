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
		'image' => 'page/canada/canada-header-img.png',
		'alt' => 'Canada immigration and education'
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
									<h2 class="why-usa-title">Why Choose Canada?</h2>

									<!-- Subheading -->
									<h3 class="why-usa-subtitle">Endless Opportunities. A Brighter Future.</h3>

									<!-- Body Paragraph (Exact Copy from Image) -->
									<p class="why-usa-desc">
										Canada is renowned for its quality education, diverse culture, thriving economy and welcoming communities. Whether you are a student, a professional, visiting loved ones or planning to settle permanently, we help you choose the right visa category and simplify the application process with confidence.
									</p>
								</div>

								<!-- RIGHT COLUMN: Visual Elements (Polaroids + Flag + Flight Route) -->
								<div class="why-usa-visual-col">



									<!-- Polaroid Photo Cards -->
									<div class="polaroid-gallery-wrapper">

										<!-- 1. SAN FRANCISCO POLAROID -->
										<div class="polaroid-card card-san-francisco">

											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/canada/choose-canada-1.jpg" alt="Toronto" loading="lazy">
											</div>
											<div class="polaroid-caption">Toronto</div>
										</div>

										<!-- 2. NEW YORK POLAROID -->
										<div class="polaroid-card card-new-york">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/canada/choose-canada-2.jpg" alt="Vancouver" loading="lazy">
											</div>
											<div class="polaroid-caption">Vancouver</div>
										</div>

										<!-- 3. LAS VEGAS POLAROID -->
										<div class="polaroid-card card-las-vegas">
											<div class="polaroid-photo">
												<img src="{{ asset('website-static/images') }}/page/canada/choose-canada-3.jpg" alt="Banff" loading="lazy">
											</div>
											<div class="polaroid-caption">Banff</div>
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
				<h2 class="section-title">Choose Your Canada Visa</h2>
				<p class="section-subtitle">We provide end-to-end assistance for all major Canada visa categories.</p>

				<div class="cards-grid">
					<!-- Card 1 -->
					<div class="card card-blue">
						<div class="icon-box">
							<i class="fa-solid fa-graduation-cap"></i>
						</div>
						<h3 class="card-title">Canada Student Visa</h3>
						<p class="card-description">Study at top Canadian institutions and build a bright future.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 2 -->
					<div class="card card-red">
						<div class="icon-box">
							<i class="fa-solid fa-plane"></i>
						</div>
						<h3 class="card-title">Canada Visitor Visa</h3>
						<p class="card-description">Visit family, explore Canada’s beauty or enjoy a short-term stay.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 3 -->
					<div class="card card-green">
						<div class="icon-box">
							<i class="fa-solid fa-user-group"></i>
						</div>
						<h3 class="card-title">Canada Work Visa</h3>
						<p class="card-description">Work in Canada and gain valuable international experience.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 4 -->
					<div class="card card-purple">
						<div class="icon-box">
							<i class="fa-solid fa-heart"></i>
						</div>
						<h3 class="card-title">Canada Spouse Visa</h3>
						<p class="card-description">Reunite with your spouse or partner in Canada.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>

					<!-- Card 5 -->
					<div class="card card-orange">
						<div class="icon-box">
							<i class="fa-solid fa-briefcase"></i>
						</div>
						<h3 class="card-title">Canada PR Visa</h3>
						<p class="card-description">Make Canada your new home through Permanent Residency.</p>
						<a href="#" class="learn-more">Learn More &rarr;</a>
					</div>
				</div>
			</div>
		</div>


		<div class="explore-city">
			<!-- Header Section -->
			<div class="container all-cities-title">
				<h2 class="section-title">Explore Iconic Canadian Cities</h2>
				<p class="section-subtitle">From vibrant metropolises to breathtaking natural wonders — experience the best of Canada.</p>
			</div>
			`
			<div class="container-fluid">
				<div class="cities-grid">

					<!-- Card 1: London -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/canada/city-canada-1.jpg" alt="Toronto" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Toronto</h2>
							<p class="city-description">Canada's largest city and a global hub for business, culture and innovation.</p>
						</div>
					</article>

					<!-- Card 2: Edinburgh -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/canada/city-canada-2.jpg" alt="Vancouver" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Vancouver</h2>
							<p class="city-description">Stunning coastal city surrounded by mountains and outdoor adventures.</p>
						</div>
					</article>

					<!-- Card 3: Manchester -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/canada/city-canada-3.jpg" alt="Montreal" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Montreal</h2>
							<p class="city-description">A blend of European charm and North American opportunities.</p>
						</div>
					</article>

					<!-- Card 4: Liverpool -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/canada/city-canada-4.jpg" alt="Calgary" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Calgary</h2>
							<p class="city-description">A booming city with a strong economy and beautiful landscapes.</p>
						</div>
					</article>

					<!-- Card 5: Birmingham -->
					<article class="city-card">
						<div class="card-image-wrapper">
							<img class="card-image" src="{{ asset('website-static/images') }}/page/canada/city-canada-5.jpg" alt="Ottawa" loading="lazy">
						</div>
						<div class="card-content">
							<h2 class="city-name">Ottawa</h2>
							<p class="city-description">Canada’s capital city, known for its history, culture and elegance.</p>
						</div>
					</article>

				</div>
			</div>
		</div>

		<!----------------------------------------------->
		<div class="container-fluid">
			<div class="uk-visa-journey-card" id="visaJourneyComponent">

				<div class="uk-journey-visual-panel">
					<img src="{{ asset('website-static/images') }}/page/canada/why-canada.png" />
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
							<svg viewBox="0 0 64 64" aria-hidden="true">
								<path d="M8 22L32 10L56 22L32 34L8 22Z" />
								<path d="M16 27V39C16 39 22 47 32 47C42 47 48 39 48 39V27" />
								<path d="M56 22V37" />
								<path d="M53 42C53 39.8 54.3 38 56 38C57.7 38 59 39.8 59 42" />
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
							<svg viewBox="0 0 64 64" aria-hidden="true">
								<rect x="8" y="20" width="48" height="34" rx="3" />
								<path d="M23 20V14C23 12 24.5 10 27 10H37C39.5 10 41 12 41 14V20" />
								<path d="M8 31H56" />
								<path d="M27 31V36H37V31" />
								<path d="M32 36V47" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Career Opportunities</h4>
							<p class="guidance-desc">Work in a skilled environment with growth and stability.</p>
						</div>
					</div>

					<!-- Item 3: Application Assistance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Application Assistance">
							<!-- Clipboard with Checklist Icon -->
							<svg viewBox="0 0 64 64" aria-hidden="true">
								<path d="M32 53S10 40 10 24C10 16 15 11 22 11C27 11 30 14 32 18C34 14 37 11 42 11C49 11 54 16 54 24C54 40 32 53 32 53Z" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">High Quality of Life</h4>
							<p class="guidance-desc">Enjoy safe communities, healthcare and a balanced lifestyle.</p>
						</div>
					</div>

					<!-- Item 4: Appointment & Biometrics Guidance -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Appointment & Biometrics Guidance">
							<!-- Biometric Fingerprint Ridges Icon -->
							<svg viewBox="0 0 64 64" aria-hidden="true">
								<circle cx="32" cy="17" r="7" />
								<circle cx="14" cy="27" r="6" />
								<circle cx="50" cy="27" r="6" />

								<path d="M20 48C20 39 25 34 32 34C39 34 44 39 44 48" />
								<path d="M4 47C4 40 8 36 14 36C18 36 21 38 23 41" />
								<path d="M60 47C60 40 56 36 50 36C46 36 43 38 41 41" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Welcoming Communities</h4>
							<p class="guidance-desc">Experience Canada’s diversity and friendly environment.</p>
						</div>
					</div>

					<!-- Item 5: Application Tracking & Updates -->
					<div class="guidance-step-item">
						<div class="guidance-icon-badge" title="Application Tracking & Updates">
							<!-- Notification Bell Alert Icon -->
							<svg viewBox="0 0 64 64" aria-hidden="true">
								<path d="M32 56V36" />
								<path d="M32 36L25 28L27 28L22 19L30 22L32 11L34 22L42 19L37 28L39 28L32 36Z" />
								<path d="M32 36L20 33L23 38L14 40L26 45" />
								<path d="M32 36L44 33L41 38L50 40L38 45" />
								<path d="M27 56H37" />
							</svg>
						</div>
						<div class="guidance-step-text">
							<h4 class="guidance-title">Pathway to Permanent Residency</h4>
							<p class="guidance-desc">Many visa options lead to PR and a secure future.</p>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!----------------------------------------------->
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">Our Canada Visa Process</h2>
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

		<div class="container-fluid canada-journey usa-journey">
			<section class="res-journey-img">
				<img src="{{ asset('website-static/images') }}/page/canada/footer-canada.png" />
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