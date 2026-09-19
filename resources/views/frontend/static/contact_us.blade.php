<?php

use App\Models\branch;

$branches = branch::where('is_approved', 1)->orderBy('id', 'desc')->get();

?>

@extends('layouts.front')
@section('content')

@include('includes.title-bar', ['title' => 'Contact Us'])

<!-- Contact Us Content -->
<div class="page-content contact-us-page">

	<!-- Ihbox -->
	<section class="section-mdt contact_section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
					<article class="pbmit-miconheading-style-14">
						<div class="pbmit-ihbox pbmit-ihbox-style-14 light-color-pink">
							<div class="pbmit-ihbox-headingicon">
								<div class="pbmit-ihbox-wrap">
									<div class="pbmit-ihbox-icon">
										<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
											<svg id="Line" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
												<path d="m20.87012 43.28076a115.75907 115.75907 0 0 0 17.48681 14.3374 13.99511 13.99511 0 0 0 17.61719-1.69531l2.01416-2.01465a6.89922 6.89922 0 0 0 -.00008-9.71191l-4.97843-4.97852a6.992 6.992 0 0 0 -10.26657.55434 2.50542 2.50542 0 0 1 -3.12357.35338 50.56156 50.56156 0 0 1 -15.7417-15.74849 2.49153 2.49153 0 0 1 .36523-3.10644 6.98277 6.98277 0 0 0 .55308-10.26614l-4.97837-4.979a6.87546 6.87546 0 0 0 -9.7124 0l-2.01514 2.01558a13.89176 13.89176 0 0 0 -1.80078 17.45558 115.68112 115.68112 0 0 0 14.58057 17.78418zm-11.36573-33.82568c1.47561-1.47631 3.16488-3.59108 5.45761-3.43834a4.85226 4.85226 0 0 1 3.44184 1.42271l4.97851 4.979a4.99906 4.99906 0 0 1 -.5539 7.43791 4.48161 4.48161 0 0 0 -.6419 5.588 52.559 52.559 0 0 0 16.36472 16.37155 4.49 4.49 0 0 0 5.606-.62987 5.32241 5.32241 0 0 1 3.99318-1.97115 4.8405 4.8405 0 0 1 3.44529 1.417l4.97852 4.97851a4.8363 4.8363 0 0 1 1.42574 3.44185c.15846 2.28945-1.9903 4.00731-3.44006 5.45649a11.98867 11.98867 0 0 1 -15.09265 1.44536 113.85857 113.85857 0 0 1 -31.51172-31.56495 11.88534 11.88534 0 0 1 1.54882-14.93407z"></path>
												<path d="m32.34082 6.85547c13.33918-.27854 25.09578 11.47918 24.81767 24.81753a1.00023 1.00023 0 0 0 2.00019-.00024c.29964-14.41217-12.40118-27.11562-26.81416-26.81707a1 1 0 0 0 -.0037 1.99978z"></path>
												<path d="m31.34277 22.28418a1.00005 1.00005 0 0 0 1 1 8.42784 8.42784 0 0 1 8.38714 8.38727 1 1 0 0 0 2.00009-.00006 10.38851 10.38851 0 0 0 -10.38723-10.38721 1.00005 1.00005 0 0 0 -1 1z"></path>
												<path d="m48.94434 31.67236a1.00011 1.00011 0 0 0 2-.00005c.20641-9.99938-8.60281-18.809-18.60267-18.60233a1.00011 1.00011 0 0 0 .0002 1.99984 16.68034 16.68034 0 0 1 16.60247 16.60254z"></path>
											</svg>
										</div>
									</div>
								</div>
								<div class="pbmit-ihbox-contents">
									<h2 class="pbmit-element-title">
										Call US
									</h2>
									<div class="pbmit-heading-desc">Book a free consultation with our experts for personalized, tailored guidance.
										<br><br>
										<strong>Days: Monday-Saturday</strong><br>
										<strong>Time: 10am to 7pm</strong><br>
										<a href="tel:+91-987-947-6666">+91-987-947-6666</a>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
					<article class="pbmit-miconheading-style-14 ">
						<div class="pbmit-ihbox pbmit-ihbox-style-14 light-color-blue">
							<div class="pbmit-ihbox-headingicon">
								<div class="pbmit-ihbox-wrap">
									<div class="pbmit-ihbox-icon">
										<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
											<svg id="Layer_1" enable-background="new 0 0 66 66" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
												<g>
													<path d="m43.47 44.73c5.42-6.25 11.05-14.53 11.05-21.97 0-11.86-9.65-21.51-21.52-21.51s-21.52 9.65-21.52 21.52c0 7.45 5.65 15.74 11.08 21.99-5.09 2.02-8.09 5.36-8.09 9.06 0 6.14 8.16 10.94 18.58 10.94s18.58-4.81 18.58-10.94c-.01-3.72-3.04-7.07-8.16-9.09zm-10.47-41.56c10.8 0 19.59 8.79 19.59 19.59 0 11.82-16.2 26.77-19.59 29.77-3.4-3.01-19.6-17.95-19.6-29.77.01-10.8 8.8-19.59 19.6-19.59zm-5.6 46.76c2.7 2.68 4.73 4.41 4.98 4.62.18.15.4.23.62.23s.44-.08.62-.23c.26-.22 2.3-1.95 5.01-4.65 2.36.94 3.82 2.42 3.82 3.91 0 2.66-4.31 4.91-9.4 4.91s-9.4-2.25-9.4-4.91c-.01-1.49 1.39-2.93 3.75-3.88zm5.64 12.9c-9.03 0-16.65-4.13-16.65-9.01 0-2.97 2.88-5.84 7.54-7.51.69.76 1.37 1.48 2.03 2.16-2.67 1.28-4.24 3.23-4.24 5.35 0 3.83 4.98 6.84 11.33 6.84s11.33-3 11.33-6.84c0-2.15-1.59-4.1-4.3-5.38.65-.68 1.33-1.4 2.02-2.16 4.69 1.68 7.6 4.55 7.6 7.54-.01 4.88-7.63 9.01-16.66 9.01z"></path>
													<path d="m46 22.76c0-7.16-5.83-12.99-12.99-12.99s-13 5.83-13 12.99 5.83 12.99 12.99 12.99 13-5.82 13-12.99zm-24.06 0c0-6.1 4.96-11.07 11.07-11.07 6.1 0 11.07 4.96 11.07 11.07s-4.96 11.07-11.07 11.07-11.07-4.97-11.07-11.07z"></path>
												</g>
											</svg>
										</div>
									</div>
								</div>
								<div class="pbmit-ihbox-contents">
									<h2 class="pbmit-element-title">
										Visit Us
									</h2>
									<div class="pbmit-heading-desc">Visit us for personalized guidance and expert financial support.
										<br><br>
										<strong>Visit Our Office</strong><br>
										<a href="https://maps.app.goo.gl/WrcroaUnn8KjrAcZ8" target="_blank">222-224, Prime Shoppers, Opp.Safal Square, Vesu Surat.</a>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
					<article class="pbmit-miconheading-style-14">
						<div class="pbmit-ihbox pbmit-ihbox-style-14 light-color-purple">
							<div class="pbmit-ihbox-headingicon">
								<div class="pbmit-ihbox-wrap">
									<div class="pbmit-ihbox-icon">
										<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
											<svg id="line" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
												<path d="m58.39349 21.88092c-3.80916-2.62452-23.44149-15.58857-23.79278-15.87071a4.69523 4.69523 0 0 0 -5.20081 0l-23.03039 15.3502a4.58983 4.58983 0 0 0 -2.36951 4.00092v28.82226a4.62556 4.62556 0 0 0 4.58887 4.58887h46.82226a4.49324 4.49324 0 0 0 2.75025-.93859 4.56952 4.56952 0 0 0 1.83862-3.65028v-28.82226a4.54358 4.54358 0 0 0 -1.60651-3.48041zm-20.67443 15.28516c5.564-3.70862 16.89465-11.26068 19.84082-13.22449a2.54707 2.54707 0 0 1 .44012 1.41974v28.82226a2.56929 2.56929 0 0 1 -.47144 1.48133zm-7.2132-29.48932a2.69762 2.69762 0 0 1 2.98926.00049l22.43066 14.95019-20.36133 13.57764-2.06933 1.37256a2.69482 2.69482 0 0 1 -2.98975 0l-22.43164-14.9502zm-24.03442 47.98816a2.56943 2.56943 0 0 1 -.47144-1.48133v-28.82226a2.56671 2.56671 0 0 1 .44189-1.41833c3.17963 2.1203 16.05683 10.70752 19.8346 13.22675-3.60077 3.36254-16.64777 15.54674-19.80505 18.49517zm2.11743 1.10754a2.548 2.548 0 0 1 -.33637-.034c3.89215-3.6347 16.84479-15.73065 19.73334-18.42816 2.94675 2.23134 4.954 2.36011 8.02312-.00454l19.73848 18.4327c-.36395.10746-46.77991-.00599-47.15857.034z"></path>
												<path d="m36.01465 29.291a.99916.99916 0 0 0 -1.31836-.51368 6.76693 6.76693 0 0 1 -9.35247-5.26317c-.88844-8.80842 11.78869-10.53071 13.30566-1.82325.06964 1.05182.35443 2.95306-1.127 3.03509a1.17062 1.17062 0 0 1 -1.4248-1.0932v-3.73234a1.0022 1.0022 0 0 0 -1.75452-.64276 4.31981 4.31981 0 0 0 -2.34308-.7279 4.09782 4.09782 0 0 0 -.00008 8.19531 4.13925 4.13925 0 0 0 2.82452-1.126 3.18351 3.18351 0 0 0 2.69782 1.1269c2.83716.00074 3.50122-3.00616 3.10943-5.302-.87731-6.99829-9.88989-10.04651-14.79272-4.95776-5.478 5.35479-1.49664 14.93347 6.15411 14.87311 1.16553-.06976 4.63843-.25067 4.02149-2.04835zm-4.01459-4.5659a2.09788 2.09788 0 0 1 -.00006-4.19531 2.09788 2.09788 0 0 1 .00006 4.19531z"></path>
											</svg>
										</div>
									</div>
								</div>
								<div class="pbmit-ihbox-contents">
									<h2 class="pbmit-element-title">
										Message Us
									</h2>
									<div class="pbmit-heading-desc">Access expert financial advice quickly and easily
										<br><br>
										<strong>Mail Us :</strong><br>
									</div>


									<div class="pbmit-ihbox-btn">
										<a href="mailto:sevencountryoperation@gmail.com">
											<span class="pbmit-button-text">
												<span>sevencountryoperation@gmail.com</span>
											</span>
											<span class="pbmit-button-icon-wrapper">
												<span class="pbmit-button-icon">
													<i class="pbmit-base-icon-up-right-arrow"></i>
												</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<!-- Ihbox End -->

	<section class="newsletter-three-bg pbmit-bg-color-global">
		<div class="container">
			<div class="newsletter-img-first pbmit-hidden-tablet-extra" data-aos="fade-down" data-aos-duration="1000">
				<img src="{{ asset('website-static/images') }}/homepage-3/newsletter-img-01.png" alt="Study Abroad" />
			</div>
			<div class="newsletter-area">
				<div class="pbmit-custom-heading text-center">
					<h2 class="pbmit-title">Talk to Our Study Abroad Experts.</h2>
				</div>
				<div class="pbmit-desc">
					<p>Book a free 30-minute counselling session. </br>We'll review your profile, discuss your best-fit destinations, </br>and answer every question you have —
						with zero pressure and zero fees.</p>
				</div>
				<div class="pbmit-submit-box">
					<div class="pbmit-button-wrapper mt-4">
						<a href="#" class="pbmit-btn pbmit-btn-hover-white submit">
							<span class="pbmit-button-content-wrapper">
								<span class="pbmit-button-text">Get Counselling from Experts!</span>
								<span class="pbmit-button-icon">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" height="24" viewBox="0 0 24 24" width="24">
										<path d="m17.9547 7.05228v8.48532c0 .1318-.026.2624-.0764.3842-.0505.1218-.1245.2325-.2177.3258-.0932.0932-.2039.1672-.3258.2176-.1218.0505-.2523.0764-.3842.0764s-.2624-.0259-.3843-.0764c-.1218-.0504-.2325-.1244-.3257-.2176-.0932-.0933-.1672-.204-.2177-.3258-.0504-.1218-.0764-.2524-.0764-.3842l.0071-6.07409-8.19539 8.19539c-.18754.1875-.44189.2929-.70711.2929-.26521 0-.51957-.1054-.7071-.2929-.18754-.1876-.29289-.4419-.29289-.7071s.10535-.5196.29289-.7071l8.1954-8.1954-6.07408.00707c-.2663 0-.5217-.10579-.71-.29409-.18831-.18831-.29409-.4437-.29409-.71s.10578-.5217.29409-.71c.1883-.18831.4437-.29409.71-.29409h8.48528c.132-.00055.2628.02506.3849.07532.1221.05027.233.12421.3263.21756.0934.09335.1673.20425.2176.32632.0502.12206.0758.25288.0753.38489z" fill="rgb(0,0,0)"></path>
									</svg>
								</span>
							</span>
							<span class="form-btn-loader d-none">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100">
									<circle fill="#000" stroke="#000" stroke-width="15" r="15" cx="40" cy="50">
										<animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
									</circle>
									<circle fill="#000" stroke="#000" stroke-width="15" r="15" cx="100" cy="50">
										<animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
									</circle>
									<circle fill="#000" stroke="#000" stroke-width="15" r="15" cx="160" cy="50">
										<animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
									</circle>
								</svg>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="newsletter-img-second pbmit-hidden-tablet-extra" data-aos="fade-up" data-aos-duration="1000">
				<img src="{{ asset('website-static/images') }}/homepage-3/newsletter-img-02.png" alt="Counselling from Experts" />
			</div>
		</div>
	</section>


	@if($branches->count())
	<section class="section-mdt contact_section">
		<div class="container">
			<div class="pbmit-custom-heading text-center mb-4">
				<h2 class="pbmit-title">Our Branches</h2>
			</div>
			<div class="row">
				@foreach($branches as $branch)
				<div class="col-md-6 col-lg-4 mb-4">
					<article class="pbmit-miconheading-style-14">
						<div class="pbmit-ihbox pbmit-ihbox-style-14 light-color-blue">
							<div class="pbmit-ihbox-headingicon">
								<div class="pbmit-ihbox-wrap">
									<div class="pbmit-ihbox-icon">
										<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
											<i class="fa fa-map-marker" aria-hidden="true" style="font-size:38px;color:#1d4ed8;"></i>
										</div>
									</div>
								</div>
								<div class="pbmit-ihbox-contents">
									<h2 class="pbmit-element-title">{{ $branch->name }}</h2>
									<div class="pbmit-heading-desc">
										<strong>{{ $branch->country }}</strong><br>
										{{ $branch->address }}<br>
										<a href="tel:{{ preg_replace('/[^0-9+]/', '', $branch->mobile) }}">{{ $branch->mobile }}</a>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif

	<!-- Contact Form -->
	<section class="contact-form-section">
		<div class="container">
			<div class="row g-0 align-items-center">
				<div class="col-md-12 col-xl-5 position-relative">
					<div class="contact-us-left-area">
						<div class="pbmit-custom-heading animation-style1">
							<h2 class="pbmit-title">Happy to answer all your questions</h2>
							<p class="pbmit-heading-desc">
								SEVEN COUNTRIES IMMIGRATION AND EDUCATION is a true leader when it comes to realizing the students’ dream of studying abroad.
								We owe our organization’s phenomenal growth to the dedication and sincerity of our employees.
							</p>
							<div class=" pbmit-footer-style-1">
								<h6>Social Media</h6>
								<div class=" pbmit-footer-social-area">
									<ul class="pbmit-social-links d-flex align-items-center gap-3 flex-wrap">
										<li class="pbmit-social-li pbmit-social-facebook">
											<a title="Facebook" href="https://www.facebook.com/share/1Hm17pTwW6/" target="_blank">
												<span><i class="pbmit-base-icon-facebook-f"></i></span>
											</a>
										</li>
										<li class="pbmit-social-li pbmit-social-instagram">
											<a title="Instagram" href="https://www.instagram.com/studyabroad_with_sevencountry/" target="_blank">
												<span><i class="pbmit-base-icon-instagram"></i></span>
											</a>
										</li>
										<li class="pbmit-social-li pbmit-social-linkedin">
											<a title="LinkedIn" href="https://in.linkedin.com/company/seven-countries-immigration-and-education-private-limited" target="_blank">
												<span><i class="pbmit-base-icon-linkedin-in"></i></span>
											</a>
										</li>
										<li class="pbmit-social-li pbmit-social-whatsapp">
											<a title="Whatsapp" href="https://api.whatsapp.com/send?phone=919879476666&text=Welcome to seven countries immigration and education pvt. ltd." target="_blank">
												<span><i class="pbmit-base-icon-whatsapp"></i></span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
						<div class="pbmit-image-animation-01 text-center">
							<img src="{{ asset('website-static/images') }}/bg/contact-bg.webp" class="img-fluid" alt="SEVEN COUNTRIES IMMIGRATION" />
						</div>
					</div>
				</div>



				<div class="col-md-12 col-xl-7" data-aos="fade-left" data-aos-delay="200">
					<div class="contact-form-rightbox pbmit-bg-color-blackish">
						<div class="pbmit-custom-heading">
							<h3 class="pbmit-title mb-3">Send a message to Us</h3>
						</div>
						<p class="comment-note">Your email address will not be published. Required fields are marked *</p>
						<form class="contact-form" method="POST" id="contact-form" action="{{ route('storeContact') }}">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Your Email" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone" name="phone" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Enter City" name="city" required>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Message" required></textarea>
								</div>
								<!-- <div class="col-md-12">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox">
											Save my name, email, and website in this browser for the next time I comment.
										</label>
									</div>
								</div> -->
							</div>
							<div class="pbmit-button-wrapper">
								<button class="pbmit-btn">
									<span class="pbmit-button-content-wrapper">
										<span class="pbmit-button-text">Apply Now</span>
										<span class="pbmit-button-icon">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" height="24" viewBox="0 0 24 24" width="24">
												<path d="m17.9547 7.05228v8.48532c0 .1318-.026.2624-.0764.3842-.0505.1218-.1245.2325-.2177.3258-.0932.0932-.2039.1672-.3258.2176-.1218.0505-.2523.0764-.3842.0764s-.2624-.0259-.3843-.0764c-.1218-.0504-.2325-.1244-.3257-.2176-.0932-.0933-.1672-.204-.2177-.3258-.0504-.1218-.0764-.2524-.0764-.3842l.0071-6.07409-8.19539 8.19539c-.18754.1875-.44189.2929-.70711.2929-.26521 0-.51957-.1054-.7071-.2929-.18754-.1876-.29289-.4419-.29289-.7071s.10535-.5196.29289-.7071l8.1954-8.1954-6.07408.00707c-.2663 0-.5217-.10579-.71-.29409-.18831-.18831-.29409-.4437-.29409-.71s.10578-.5217.29409-.71c.1883-.18831.4437-.29409.71-.29409h8.48528c.132-.00055.2628.02506.3849.07532.1221.05027.233.12421.3263.21756.0934.09335.1673.20425.2176.32632.0502.12206.0758.25288.0753.38489z" fill="rgb(0,0,0)"></path>
											</svg>
										</span>
									</span>
									<span class="form-btn-loader d-none">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100">
											<circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="40" cy="50">
												<animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
											</circle>
											<circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="100" cy="50">
												<animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
											</circle>
											<circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="160" cy="50">
												<animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
											</circle>
										</svg>
									</span>
								</button>
							</div>
							<div class="col-md-12 col-lg-12 message-status"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Form End -->



	<!-- Iframe -->
	<section class="contact-iframe-section section-mdb">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xl-6 position-relative">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.106896713061!2d72.76316287600066!3d21.14814378366588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0536223182ce3%3A0xc3f728e224c80356!2sSeven%20Countries%20Immigration%20and%20Education%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1788259014387!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" title="Seven Countries Immigration and Education Pvt Ltd" aria-label="Seven Countries Immigration and Education Pvt Ltd"></iframe>
				</div>
				<div class="col-md-12 col-xl-6 position-relative">
					<iframe src="https://www.google.com/maps/embed?pb=!4v1788334835850!6m8!1m7!1s1ILRu3-fK0eqaSF3bAuk6g!2m2!1d21.14794374195556!2d72.76595385373308!3f185.68723!4f0!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
				</div>
			</div>
		</div>

	</section>
	<!-- Iframe End-->



</div>
<!-- Contact Us Content End -->
@include('includes.migration-cta')

@endsection

@section('script')
<script>
	$(document).ready(function() {
		$('#contact-form').off('submit').on('submit', function(e) {
			e.preventDefault();

			var $form = $(this);
			var $button = $form.find('button.pbmit-btn');
			var $loader = $form.find('.form-btn-loader');
			var $text = $form.find('.pbmit-button-text');
			var $status = $form.find('.message-status');

			if (!$form[0].checkValidity()) {
				$form[0].reportValidity();
				return false;
			}

			$status.html('');
			$loader.removeClass('d-none');
			$text.hide();
			$button.attr('disabled', 'disabled');

			$.ajax({
				url: $form.attr('action'),
				type: 'POST',
				data: $form.serialize(),
				success: function(response) {
					$status.html('<div class="alert alert-success mb-0">' + (response.message || 'Your message has been submitted successfully.') + '</div>');
					$form[0].reset();
				},
				error: function(xhr) {
					var message = 'Something went wrong. Please try again.';
					if (xhr.responseJSON && xhr.responseJSON.message) {
						message = xhr.responseJSON.message;
					}
					$status.html('<div class="alert alert-danger mb-0">' + message + '</div>');
				},
				complete: function() {
					$loader.addClass('d-none');
					$text.show();
					$button.removeAttr('disabled');
				}
			});

			return false;
		});
	});
</script>
@endsection