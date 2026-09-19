<?php

use App\Models\Team;

$teams = Team::where('is_show', 1)->orderBy('sort_order', 'asc')->get();

?>

@extends('layouts.front')
@section('content')

@include('includes.title-bar', ['title' => 'About Us'])

<!-- Page Content -->
<div class="page-content about_us_page">

	<!-- About Us Start -->
	<section class="choose-country-section-three abt-section section-xl">
		<div class="container">
			<div class="row align-items-center g-0">
				<div class="col-md-12 col-xl-6">
					<div class="left-box">
						<div class="pbmit-heading-subheading animation-style2">
							<h4 class="pbmit-subtitle">Company Intro</h4>
							<h2 class="pbmit-title">We ensure prompt services for visa & Immigration</h2>
							<div class="pbmit-heading-desc">
								<ul class="list-group style-2">
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
											</svg>
										</span>
										<span class="d-block pbmit-icon-list-text mb-2">we are your trusted partners in global immigration. With deep expertise and a wide network of international connections, we help individuals, students, and professionals achieve their dreams abroad.</span>
									</li>
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
											</svg>
										</span>
										<span class="d-block pbmit-icon-list-text mb-2">We specialize in immigration services for Canada, USA, United Kingdom, Australia, New Zealand, Germany, and Ireland — offering end-to-end support from consultation to visa approval.</span>
									</li>
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
											</svg>
										</span>
										<span class="d-block pbmit-icon-list-text mb-2"><span class="d-block mb-2">Whether you're aiming for higher education, business opportunities, tourism, spouse or dependent visas, or family sponsorship, our dedicated team is committed to making your immigration journey smooth, transparent, and successful.</span>
									</li>
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
											</svg>
										</span>
										<span class="d-block pbmit-icon-list-text mb-2"><span class="d-block mb-2">Join the thousands who have turned their global dreams into reality with us.</span>
									</li>
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
											</svg>
										</span>
										<span class="d-block pbmit-icon-list-text mb-2"><span class="d-block mb-2">Your journey begins here. Let’s take the first step together.</span>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				<div class="col-md-12 col-xl-6">
					<div class="right-box">
						<div class="row">
							<div class="col-md-6">
								<div class="first-img" data-aos="fade-up" data-aos-duration="1000">
									<img src="{{ asset('website-static/images') }}/page/about-company-2.png" class="img-fluid" alt="services for visa & Immigration" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-start" data-aos="fade-down" data-aos-duration="1000">
									<img src="{{ asset('website-static/images') }}/page/about-company-1.webp" class="img-fluid" alt="services for visa & Immigration" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Us End -->

	<div class="pbmit-move-earth img">
		<img src="{{ asset('website-static/images') }}/homepage-2/earth.webp" alt="Seven Countries Immigration and Education Pvt. Ltd." />
	</div>

	<!-- Faq Start -->
	<section>
		<div class="container-fluid">
			<div class="row g-0">
				<div class="col-md-6 full-width-1200">
					<div class="faq-three-left-box">
						<div class="ihbox-style-area">
							<div class="pbmit-ihbox-style-5">
								<div class="pbmit-ihbox-box">
									<div class="pbmit-icon-wrapper">
										<div class="pbmit-ihbox-icon">
											<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
												<svg height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
													<g id="Layer_2" data-name="Layer 2">
														<g id="phone" fill="rgb(0,0,0)">
															<path id="background" d="m256 30a226.06 226.06 0 0 1 88 434.25 226.06 226.06 0 0 1 -176-416.5 224.5 224.5 0 0 1 88-17.75m0-30c-141.38 0-256 114.62-256 256s114.62 256 256 256 256-114.62 256-256-114.62-256-256-256z"></path>
															<path d="m330.69 393.87c-14.87-1-35.83-6.13-56.29-13.45-72.14-25.82-142.53-94.61-157.49-190.83-2.66-17.13.14-32.78 13.12-45.52 4.35-4.26 8.22-9 12.47-13.36 16-16.47 39.38-16.89 55.95-1.07 5.25 5 10.59 9.93 15.71 15.09a38.07 38.07 0 0 1 1.37 52.79c-4 4.44-8.2 8.66-12.42 12.87-4.61 4.6-10.34 7.24-16.49 9.16-7.59 2.38-9 5.56-5.55 12.81q32.7 68.49 102.37 98.63c6.21 2.68 9.08 1.47 11.58-4.69 5.48-13.51 15.53-23.36 27.08-31.32 13.07-9 31.79-7 44.17 3.64a263.23 263.23 0 0 1 19.43 18.5 38.22 38.22 0 0 1 -.05 52.25c-1.93 2.1-3.92 4.15-5.77 6.31-11.14 12.95-25.27 19.01-49.19 18.19z"></path>
														</g>
													</g>
												</svg>
											</div>
										</div>
										<div class="pbmit-ihbox-box-wrapper">
											<div class="pbmit-element-subtitle">
												Need Help? Talk to an experts
											</div>
											<h2 class="pbmit-element-title">
												<a href="tel:+91-987-947-6666">
													<span class="pbmit-button-text">+91-987-947-6666</span>
												</a>
											</h2>
										</div>
									</div>
									<div class="pbmit-content-wrap">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 full-width-1200">
					<div class="faq-three-right-box pbmit-bg-color-blackish">
						<div class="pbmit-heading-subheading animation-style2">
							<h4 class="pbmit-subtitle">Why Choose Us</h4>
							<h2 class="pbmit-title">Reasons To Choose Us</h2>
						</div>
						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<span class="pbmit-accordion-title">
											1). Quality Visa Service
										</span>
										<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
											<span class="pbmit-accordion-icon-closed">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
												</svg>
											</span>
											<span class="pbmit-accordion-icon-opened">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
												</svg>
											</span>
										</span>
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="pbmit-ihbox pbmit-ihbox-style-3">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-contents mb-3">
													<h2 class="pbmit-element-title">
														<i class="fa fa-arrow-circle-right "></i>
														Expert Guidance:
													</h2>
													<div class="pbmit-heading-desc"> Leverage our extensive expertise and years of experience in immigration and education consulting.</div>
												</div>
												<div class="pbmit-ihbox-contents mb-3">
													<h2 class="pbmit-element-title">
														<i class="fa fa-arrow-circle-right "></i>
														Personalized Solutions:
													</h2>
													<div class="pbmit-heading-desc"> Receive tailored services that cater to your specific needs and aspirations.</div>
												</div>
												<div class="pbmit-ihbox-contents mb-3">
													<h2 class="pbmit-element-title">
														<i class="fa fa-arrow-circle-right "></i>
														High Success Rate:
													</h2>
													<div class="pbmit-heading-desc"> Benefit from our proven track record of successful visa approvals and educational placements.</div>
												</div>
												<div class="pbmit-ihbox-contents mb-3">
													<h2 class="pbmit-element-title">
														<i class="fa fa-arrow-circle-right "></i>
														Comprehensive Support:
													</h2>
													<div class="pbmit-heading-desc"> Enjoy end-to-end support, from application to settlement, ensuring a smooth journey.</div>
												</div>
												<div class="pbmit-ihbox-contents mb-3">
													<h2 class="pbmit-element-title">
														<i class="fa fa-arrow-circle-right "></i>
														Transparent Processes:
													</h2>
													<div class="pbmit-heading-desc"> Trust our commitment to transparency and integrity in all our services.</div>
												</div>
												<div class="pbmit-ihbox-contents mb-3">
													<h2 class="pbmit-element-title">
														<i class="fa fa-arrow-circle-right "></i>
														Timely Responses:
													</h2>
													<div class="pbmit-heading-desc"> Experience efficient handling of your applications with our prompt and proactive approach.</div>
												</div>
												<div class="pbmit-ihbox-contents mb-3">
													<h2 class="pbmit-element-title">
														<i class="fa fa-arrow-circle-right "></i>
														Exceptional Customer Service:
													</h2>
													<div class="pbmit-heading-desc"> Rely on our dedicated team for continuous support and guidance at every step.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item active">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<span class="pbmit-accordion-title">
											2). 100% Satisfaction Guaranteed
										</span>
										<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
											<span class="pbmit-accordion-icon-closed">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
												</svg>
											</span>
											<span class="pbmit-accordion-icon-opened">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
												</svg>
											</span>
										</span>
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
									data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="pbmit-ihbox pbmit-ihbox-style-3">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-contents mb-3">
													<h2 class="pbmit-element-title">
														<i class="fa fa-arrow-circle-right "></i>
														Expert Guidance:
													</h2>
													<div class="pbmit-heading-desc"> we are committed to ensuring your complete satisfaction. Our dedicated team provides expert guidance, personalized solutions, and comprehensive support every step of the way. We pride ourselves on our transparency, efficiency, and exceptional customer service, guaranteeing a seamless and successful experience for all our clients. Your satisfaction is our top priority.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<span class="pbmit-accordion-title">
											3). Expert Support Panel
										</span>
										<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
											<span class="pbmit-accordion-icon-closed">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
												</svg>
											</span>
											<span class="pbmit-accordion-icon-opened">
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
												</svg>
											</span>
										</span>
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
									data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="pbmit-ihbox pbmit-ihbox-style-3">
											<div class="pbmit-ihbox-box">
												<div class="pbmit-ihbox-contents mb-3">
													<h2 class="pbmit-element-title">
														<i class="fa fa-arrow-circle-right "></i>
														Support Panel:
													</h2>
													<div class="pbmit-heading-desc"> Our Expert Support Panel at Quality Visa Service comprises seasoned professionals with extensive experience in immigration and education consulting. They provide personalized advice, meticulous guidance, and proactive solutions to ensure your success at every stage of your journey. Trust our experts to make your international dreams a reality.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Faq End -->

	<!-- About Start -->
	<section class="section-lgb">
		<div class="container">
			<div class="row align-items-center mt-5">

				<div class="col-md-6 full-width-1200">
					<div class="about-two-rightbox">
						<div class="about-img" data-aos="fade-down" data-aos-duration="1300">
							<img src="{{ asset('website-static/images') }}/page/world-travel.png" class="img-fluid" alt="Visa Service" />
						</div>
					</div>
				</div>
				<div class="col-md-6 full-width-1200">
					<div class="about-two-leftbox">
						<div class="pbmit-heading-subheading animation-style2">
							<h4 class="pbmit-subtitle">about us</h4>
							<h2 class="pbmit-title">We help making your dream into reality.</h2>
							<div class="pbmit-heading-desc">
								When it comes to international travel, work, or relocation, Vizaa is the team you need. One of the best visa service providers.
							</div>
						</div>
						<div class="ihbox-style-area">
							<div class="row g-0">
								<div class="col-md-6">
									<div class="pbmit-ihbox-style-9 mb-md-0 mb-4">
										<div class="pbmit-ihbox-box">
											<div class="pbmit-ihbox-icon">
												<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
													<svg xmlns="http://www.w3.org/2000/svg" id="Solid" viewBox="0 0 64 64">
														<path d="M32,43.5a1.5,1.5,0,0,0,0-3H18a1.5,1.5,0,0,0,0,3h.5v17H18a1.5,1.5,0,0,0,0,3H32a1.5,1.5,0,0,0,0-3h-.5v-17Z"></path>
														<path d="M49.5,6A1.5,1.5,0,0,0,48,4.5H44.5v41h5Z"></path>
														<path d="M60,48.5H34.5v7H60a3.5,3.5,0,0,0,0-7Z"></path>
														<path d="M13.5,42A4.505,4.505,0,0,1,18,37.5H32a4.493,4.493,0,0,1,2.815,8H41.5V2A1.5,1.5,0,0,0,40,.5H2A1.5,1.5,0,0,0,.5,2V54A1.5,1.5,0,0,0,2,55.5H15.5V45.74A4.5,4.5,0,0,1,13.5,42Zm-6-22.5A13.5,13.5,0,1,1,21,33,13.515,13.515,0,0,1,7.5,19.5Z"></path>
														<path d="M21.036,30c.6-.214,2.186-3.252,2.429-9h-4.93c.244,5.75,1.839,8.788,2.486,9Z"></path>
														<path d="M20.979,9h-.015c-.6.214-2.186,3.252-2.429,9h4.93C23.221,12.25,21.626,9.212,20.979,9Z"></path>
														<path d="M31.38,18a10.517,10.517,0,0,0-6.421-8.219A26.112,26.112,0,0,1,26.466,18Z"></path>
														<path d="M31.38,21H26.466a26.112,26.112,0,0,1-1.507,8.219A10.517,10.517,0,0,0,31.38,21Z"></path>
														<path d="M10.62,21a10.517,10.517,0,0,0,6.421,8.219A26.112,26.112,0,0,1,15.534,21Z"></path>
														<path d="M10.62,18h4.914a26.112,26.112,0,0,1,1.507-8.219A10.517,10.517,0,0,0,10.62,18Z"></path>
													</svg>
												</div>
											</div>
											<div class="pbmit-ihbox-contents">
												<h2 class="pbmit-element-title">Checking all <br>Visa Eligibilities</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="pbmit-ihbox-style-9">
										<div class="pbmit-ihbox-box">
											<div class="pbmit-ihbox-icon">
												<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
													<svg id="Layer_3" enable-background="new 0 0 512.003 512.003" viewBox="0 0 512.003 512.003" xmlns="http://www.w3.org/2000/svg">
														<g>
															<g>
																<g>
																	<path d="m303.512 430.873h-57.633c-6.075 0-11-4.925-11-11s4.925-11 11-11h57.633c6.075 0 11 4.925 11 11s-4.925 11-11 11z" fill="#3cc"></path>
																</g>
																<g>
																	<path d="m317.663 385.691h-71.785c-6.075 0-11-4.925-11-11s4.925-11 11-11h71.785c6.075 0 11 4.925 11 11s-4.925 11-11 11z" fill="#3cc"></path>
																</g>
															</g>
															<g>
																<path d="m318.512 303.204c0-23.047-18.759-41.797-41.817-41.797s-41.816 18.75-41.816 41.797 18.759 41.797 41.816 41.797c23.058 0 41.817-18.75 41.817-41.797zm-41.817 19.797c-10.927 0-19.816-8.881-19.816-19.797s8.89-19.797 19.816-19.797c10.927 0 19.817 8.881 19.817 19.797s-8.89 19.797-19.817 19.797z"></path>
																<path d="m257.745 199.598c5.678 2.163 12.033-.685 14.196-6.361l.236-.619h26.903l.222.588c1.663 4.404 5.848 7.117 10.292 7.117 1.291 0 2.605-.229 3.884-.712 5.683-2.146 8.551-8.493 6.404-14.177l-22.589-59.818c-.038-.101-.078-.202-.119-.302-1.917-4.657-6.408-7.664-11.443-7.664h-.013c-5.041.005-9.531 3.022-11.441 7.687-.034.083-.067.167-.099.25l-22.796 59.815c-2.162 5.677.687 12.033 6.363 14.196zm33.028-28.98h-10.211l5.129-13.458z"></path>
																<path d="m162.806 200.32c6.075 0 11-4.925 11-11v-60.67c0-6.075-4.925-11-11-11s-11 4.925-11 11v60.67c0 6.075 4.925 11 11 11z"></path>
																<path d="m215.507 200.32c14.451 0 26.607-9.345 28.905-22.219 1.672-9.371-2.518-22.578-19.829-28.959-6.786-2.501-13.147-5.21-15.75-6.341-.068-.131-.106-.316-.067-.589.128-.892 1.015-1.649 2.434-2.076 6.84-2.059 13.522 3.198 13.589 3.252l.663.295c4.796 2.133 10.431.611 13.501-3.646 3.934-5.454 2.156-13.146-3.79-16.287-9.628-5.085-19.698-7.873-30.305-4.681-9.668 2.911-16.515 10.581-17.869 20.017-1.282 8.935 2.597 17.532 10.124 22.436.486.316.996.594 1.525.831.355.158 8.816 3.922 18.336 7.431 4.007 1.477 5.968 3.396 5.78 4.452-.254 1.424-2.641 4.084-7.247 4.084-5.088 0-9.951-2.012-13.007-5.383-4.174-4.602-11.353-4.854-15.839-.477-4.336 4.231-4.074 11.457.095 15.853 7.247 7.641 17.676 12.007 28.751 12.007z"></path>
																<path d="m98.923 192.094c1.752 4.929 6.429 8.226 11.655 8.226h.086c5.26-.036 9.933-3.407 11.65-8.458l19.822-59.629c1.917-5.765-1.204-11.992-6.969-13.908-5.764-1.917-11.991 1.204-13.908 6.969l-10.881 32.733-11.455-32.987c-1.994-5.738-8.259-8.774-14-6.782-5.739 1.993-8.775 8.261-6.782 14z"></path>
																<path d="m185.621 353.825c6.504-8.592 10.366-19.289 10.366-30.871v-7.107c0-28.259-22.991-51.25-51.25-51.25s-51.25 22.991-51.25 51.25v7.107c0 11.582 3.862 22.279 10.366 30.871-15.222 4.661-26.322 18.839-26.322 35.56v30.488c0 6.075 4.925 11 11 11h112.412c6.075 0 11-4.925 11-11v-30.488c0-16.721-11.1-30.899-26.322-35.56zm-70.134-37.979c0-16.128 13.122-29.25 29.25-29.25s29.25 13.122 29.25 29.25v7.107c0 16.128-13.122 29.25-29.25 29.25s-29.25-13.121-29.25-29.25zm74.456 93.027h-90.412v-19.488c0-8.371 6.818-15.182 15.198-15.182h60.015c8.38 0 15.198 6.811 15.198 15.182v19.488z"></path>
																<path d="m398.626 326.164 71.212-196.912c2.048-5.664-.839-11.922-6.478-14.039l-90.398-33.94v-15.009c0-6.075-4.925-11-11-11h-58.274l-145.315-54.559c-5.685-2.136-12.025.742-14.163 6.427l-18.094 48.132h-89.954c-6.075 0-11 4.925-11 11v429.206c0 6.075 4.925 11 11 11h325.8c.07 0 .139-.001.209-.003 9.88 3.581 20.534 5.535 31.636 5.535 51.299 0 93.034-41.711 93.034-92.981 0-49.654-39.147-90.342-88.215-92.857zm46.828-194.174-70.901 196.054c-.532.112-1.062.229-1.59.351v-223.623zm-284.52-106.824 80.166 30.098h-91.481zm-113.772 52.098h303.8v259.236c-29.797 15.516-50.189 46.683-50.189 82.521 0 25.499 10.324 48.634 27.013 65.449h-280.624zm346.645 412.739c-39.168 0-71.034-31.842-71.034-70.981s31.866-70.981 71.034-70.981 71.034 31.842 71.034 70.981-31.866 70.981-71.034 70.981z"></path>
																<path d="m420.218 398.569c-4.405-4.184-11.368-4.003-15.551.402l-16.441 17.313-6.03-5.252c-4.58-3.989-11.529-3.512-15.52 1.07-3.99 4.581-3.511 11.529 1.07 15.52l13.975 12.172c2.08 1.812 4.654 2.705 7.222 2.705 2.916 0 5.822-1.153 7.979-3.425l23.697-24.954c4.184-4.405 4.004-11.368-.401-15.551z"></path>
																<path d="m88.531 222.284c-6.075 0-11 4.925-11 11s4.925 11 11 11h221.062c6.075 0 11-4.925 11-11s-4.925-11-11-11z"></path>
															</g>
														</g>
													</svg>
												</div>
											</div>
											<div class="pbmit-ihbox-contents">
												<h2 class="pbmit-element-title">Approved Exam <br>Facilitation</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<p>
							Our mission is simple: <strong>to turn your dreams of studying, working, travelling, and settling abroad into a successful reality.</strong>
							We understand that every individual has unique goals, aspirations, and circumstances, which is why we provide personalized guidance and dedicated support throughout your journey.
							From assessing your visa eligibility and selecting the right country, university, or course to preparing essential documentation, facilitating approved exams,
							and assisting with the visa application process, our experienced team is here to guide you at every stage.
						</p>
						<p>
							We aim to make the entire process clear, transparent,
							and stress-free while helping you make confident decisions about your international future. Whether you are planning to pursue higher education, explore new career
							opportunities, visit another country, reunite with your family, or build a better life overseas, we are committed to providing reliable assistance tailored to your needs.
							<strong>With the right guidance, careful planning, and continuous support, we help transform your aspirations into achievements and make your dream of going abroad a reality.</strong>
						</p>
						<div class="progressbar">
							<span class="progress-label">Satisfied Customer</span>
							<div class="progress progress-lg progress-percent-bg">
								<div class="progress-bar aos-init" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width:92%"></div>
								<span class="progress-percent">92%</span>
							</div>
						</div>
						<ul class="list-group style-2">
							<li class="list-group-item">
								<span class="pbmit-icon-list-icon">
									<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
									</svg>
								</span>
								<span class="d-block pbmit-icon-list-text mb-2">Fastest Visa form processing with expert immigration agents</span>
							</li>
							<li class="list-group-item">
								<span class="pbmit-icon-list-icon">
									<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
										<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
									</svg>
								</span>
								<span class="d-block pbmit-icon-list-text mb-2">Affiliation with Educational Institutions from over the world</span>
							</li>

						</ul>


					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- About End -->



	<!-- Team Start -->
	<section class="pbmit-element-team-style-2 team-section-two mb-4">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-md-12 col-lg-12 pbmit-left-col">
					<div class="swiper-slider" data-arrows-class="team-arrow" data-autoplay="true" data-loop="true" data-dots="true" data-allow-touch="true" data-arrows="true" data-columns="4" data-margin="30" data-effect="slide">
						<div class="swiper-wrapper">
							<!-- Slide1 -->
							@foreach ($teams as $team)
							<article class="pbmit-team-style-2 swiper-slide">
								<div class="pbminfotech-post-item">
									<div class="pbmit-featured-wrap">
										<div class="pbmit-featured-inner">
											<div class="pbmit-featured-img-wrapper">
												<div class="pbmit-featured-wrapper">
													<img src="{{$team->file}}" class="img-fluid" alt="{{$team->name}}" />
												</div>
											</div>
										</div>
									</div>
									<div class="pbminfotech-box-content">
										<div class="pbminfotech-box-content-inner">
											<h3 class="pbmit-team-title">
												<a href="/team">{{$team->name}}</a>
											</h3>
											<div class="pbminfotech-box-team-position">{{$team->occupation}}</div>
										</div>
										<div class="pbmit-team-btn">
											<a class="pbmit-team-text" href="#">
												<i class="pbmit-base-icon-share"></i>
											</a>

										</div>
									</div>
								</div>
							</article>
							@endforeach
						</div>
					</div>

				</div>
				<!-- <div class="col-md-12 col-lg-3 pbmit-right-col pbmit-bg-color-blackish">
							<div class="pbmit-heading-subheading animation-style2">
								<h4 class="pbmit-subtitle">Team Member</h4>
								<h2 class="pbmit-title">Global Visa Experts</h2>
							</div>
							<div class="team-arrow mt-4 d-inline-flex flex-row-reverse"></div>
						</div> -->
			</div>
		</div>
	</section>
	<!-- Team End -->


	<section class="tab-section-one mb-4">
		<div class="container">
			<div class="pbmit_tabs_element">
				<div class="pbmit-heading-subheading animation-style2">
					<h4 class="pbmit-subtitle">Work Process</h4>
					<h2 class="pbmit-title mb-4">Integrity. Service. Commitment.</h2>
					<h5 class="">How we do our visa & Immigration processing</h5>
					<p>Our experienced team guides you through the entire visa and immigration process, ensuring a smooth and efficient experience. We start with a detailed consultation and profile assessment, Document preparation and review, Application submission, Interview preparation, Regular Updates and Follow-ups, Visa decision and Post Visa Support.</p>
				</div>
				<div class="pbmit-tab">
					<ul class="pbmit-tabs-heading col-md-12 col-lg-3">
						<li class="pbmit-tab-counter"></li>
						<li class="pbmit-tab-link pbmit-tab-li-active" data-pbmit-tab="1"><span>1). 🎓 Process For Student Visa </span></li>
						<li class="pbmit-tab-link" data-pbmit-tab="2"><span>2). ✈️ Process For Tourist Visa</span></li>
						<li class="pbmit-tab-link" data-pbmit-tab="3"><span>3). 🌍 Process For Visitor Visa</span></li>
						<li class="pbmit-tab-link" data-pbmit-tab="4"><span>4). 💼 Process For Business Visa</span></li>
						<li class="pbmit-tab-link" data-pbmit-tab="5"><span>5). ❤️ Process For Spouse Visa</span></li>
					</ul>
					<div class="pbmit-tab-image-wrapper col-md-12 col-lg-4">
						<div class="pbmit-tab-content pbmit-tab-content-1 pbmit-tab-active">
							<div class="pbmit-tab-content-inner">
								<div class="pbmit-tab-image-wrap">
									<img src="{{ asset('website-static/images') }}/page/process-student.jpeg" class="img-fluid" alt="image" />
								</div>
							</div>
						</div>
						<div class="pbmit-tab-content pbmit-tab-content-2">
							<div class="pbmit-tab-content-inner">
								<div class="pbmit-tab-image-wrap">
									<img src="{{ asset('website-static/images') }}/page/process-tourist.jpeg" class="img-fluid" alt="image" />
								</div>
							</div>
						</div>
						<div class="pbmit-tab-content pbmit-tab-content-3">
							<div class="pbmit-tab-content-inner">
								<div class="pbmit-tab-image-wrap">
									<img src="{{ asset('website-static/images') }}/page/process-visitor.jpeg" class="img-fluid" alt="image" />
								</div>
							</div>
						</div>
						<div class="pbmit-tab-content pbmit-tab-content-4">
							<div class="pbmit-tab-content-inner">
								<div class="pbmit-tab-image-wrap">
									<img src="{{ asset('website-static/images') }}/page/process-business.jpg" class="img-fluid" alt="image" />
								</div>
							</div>
						</div>
						<div class="pbmit-tab-content pbmit-tab-content-5">
							<div class="pbmit-tab-content-inner">
								<div class="pbmit-tab-image-wrap">
									<img src="{{ asset('website-static/images') }}/page/process-spouse.png" class="img-fluid" alt="image" />
								</div>
							</div>
						</div>
					</div>
					<div class="pbmit-tab-content-wrapper col-md-12 col-lg-5">
						<div class="pbmit-tab-content pbmit-tab-content-1 pbmit-tab-active">
							<div class="pbmit-tab-content-title" data-pbmit-tab="1">
								🎓 STUDENT VISA — OUR PROCESS
							</div>
							<div class="pbmit-tab-content-inner">
								<div class="inner-content">
									<div class="pbmit-tab-list">
										<div class="pbmit-content-tab-image">
											<img src="{{ asset('website-static/images') }}/page/process-student.jpeg" alt="STUDENT VISA — OUR PROCESS" />
										</div>
										<div class="pbmit-tab-content-wapper-inner">
											<div class="pbmit-tab-icon-wrap">
												<h2>🎓 STUDENT VISA — OUR PROCESS</h2>
											</div>
											<span class="pbmit-desc-tabs">
												<ul class="list-group style-2 pb-2">
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Profile Assessment →</strong> Education, academic background & career goals </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Course & University Selection →</strong> Shortlist suitable institutions </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Admission Application → </strong>Prepare & submit university applications.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Offer Letter →</strong> Review admission offer & conditions.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Financial & Document Preparation →</strong> Arrange required funds and documents.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Visa Application →</strong> Complete and submit visa application.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Biometrics / Interview →</strong> Guidance for appointments and interviews.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Visa Decision & Pre-Departure →</strong> Final guidance before travelling.</span>
													</li>
												</ul>
											</span>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pbmit-tab-content pbmit-tab-content-2">
							<div class="pbmit-tab-content-title" data-pbmit-tab="2">
								✈️ TOURIST VISA — OUR PROCESS
							</div>
							<div class="pbmit-tab-content-inner">
								<div class="inner-content">
									<div class="pbmit-tab-list">
										<div class="pbmit-content-tab-image">
											<img src="{{ asset('website-static/images') }}/page/process-tourist.jpeg" alt="TOURIST VISA — OUR PROCESS" />
										</div>
										<div class="pbmit-tab-content-wapper-inner">
											<div class="pbmit-tab-icon-wrap">
												<h2>✈️ TOURIST VISA — OUR PROCESS</h2>
											</div>
											<span class="pbmit-desc-tabs">
												<ul class="list-group style-2 pb-2">
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Consultation →</strong> Understand your travel purpose & plans </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Profile Assessment →</strong> Check eligibility, finances & travel history </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Document Checklist → </strong>Provide a personalized checklist.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Application Preparation →</strong> Forms, cover letter & supporting documents.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Submission & Biometrics →</strong> Complete the application process.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Application Tracking →</strong> Monitor the application status.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Visa Decision →</strong> Update you once a decision is received.</span>
													</li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pbmit-tab-content pbmit-tab-content-3">
							<div class="pbmit-tab-content-title" data-pbmit-tab="3">
								🌍 VISITOR VISA — OUR PROCESS
							</div>
							<div class="pbmit-tab-content-inner">
								<div class="inner-content">
									<div class="pbmit-tab-list">
										<div class="pbmit-content-tab-image">
											<img src="{{ asset('website-static/images') }}/page/process-visitor.jpeg" alt="VISITOR VISA — OUR PROCESS" />
										</div>
										<div class="pbmit-tab-content-wapper-inner">
											<div class="pbmit-tab-icon-wrap">
												<h2>🌍 VISITOR VISA — OUR PROCESS</h2>
											</div>
											<span class="pbmit-desc-tabs">
												<ul class="list-group style-2 pb-2">
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Initial Consultation →</strong> Understand who you are visiting and why </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Eligibility Assessment →</strong> Review your profile & circumstances </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Sponsor / Invitation Review → </strong>Check invitation and sponsor documents, where applicable.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Document Preparation →</strong> Financial, employment, family & supporting documents.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Application Submission →</strong> Submit the completed application.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Biometrics / Interview →</strong> Guidance wherever required.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Decision & Travel Guidance →</strong> Assistance after the visa decision.</span>
													</li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pbmit-tab-content pbmit-tab-content-4">
							<div class="pbmit-tab-content-title" data-pbmit-tab="4">
								💼 BUSINESS VISA — OUR PROCESS
							</div>
							<div class="pbmit-tab-content-inner">
								<div class="inner-content">
									<div class="pbmit-tab-list">
										<div class="pbmit-content-tab-image">
											<img src="{{ asset('website-static/images') }}/page/process-business.jpg" alt="BUSINESS VISA — OUR PROCESS" />
										</div>
										<div class="pbmit-tab-content-wapper-inner">
											<div class="pbmit-tab-icon-wrap">
												<h2>💼 BUSINESS VISA — OUR PROCESS</h2>
											</div>
											<span class="pbmit-desc-tabs">
												<ul class="list-group style-2 pb-2">
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Business Profile Assessment →</strong> Understand your business purpose </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Travel Purpose Review →</strong> Meetings, conferences, exhibitions or negotiations </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Invitation & Business Documents → </strong>Review required company/invitation documents.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Financial & Supporting Documents →</strong> Prepare the complete file.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Application Preparation →</strong> Forms, covering letter & supporting documents.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Submission & Biometrics →</strong> Complete the visa submission process.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Visa Decision →</strong> Update and guide you on the next steps.</span>
													</li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pbmit-tab-content pbmit-tab-content-5">
							<div class="pbmit-tab-content-title" data-pbmit-tab="5">
								❤️ SPOUSE VISA — OUR PROCESS
							</div>
							<div class="pbmit-tab-content-inner">
								<div class="inner-content">
									<div class="pbmit-tab-list">
										<div class="pbmit-content-tab-image">
											<img src="{{ asset('website-static/images') }}/page/process-spouse.png" alt="SPOUSE VISA — OUR PROCESS" />
										</div>
										<div class="pbmit-tab-content-wapper-inner">
											<div class="pbmit-tab-icon-wrap">
												<h2>❤️ SPOUSE VISA — OUR PROCESS</h2>
											</div>
											<span class="pbmit-desc-tabs">
												<ul class="list-group style-2 pb-2">
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Initial Consultation →</strong> Understand your relationship & visa category </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Eligibility Assessment →</strong> Review both applicant and sponsor profiles </span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Relationship Documentation → </strong>Organize marriage and relationship evidence.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Sponsor & Financial Documents →</strong> Prepare sponsor, income & accommodation documents.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Application Preparation →</strong> Complete forms and supporting statements.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Submission & Biometrics →</strong> Submit the application and complete required formalities.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Additional Requirements →</strong> Guidance for medicals, interviews or further documents, if required.</span>
													</li>
													<li class="list-group-item">
														<span class="pbmit-icon-list-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
																<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
															</svg>
														</span>
														<span class="pbmit-icon-list-text"><strong>Visa Decision →</strong> Update you and guide you through the next steps.</span>
													</li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- <div class="fid-style-wrap">
						<div class="pbminfotech-ele-fid-style-6">
							<div class="pbmit-fld-contents">
								<div class="pbmit-fld-wrap d-flex">
									<div class="pbmit-fld-icon-wrap">
										<h2 class="pbmit-fid-title">Lead Generation Rate <br>From IT Marketing</h2>
										<h4 class="pbmit-fid-inner">
											<span class="pbmit-fid-before"></span>
											<span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="92" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">92</span>
											<span class="pbmit-fid"><sup>%</sup></span>
										</h4>
									</div>
								</div>
							</div>
						</div>
					</div> -->
		</div>
	</section>

</div>


@include('includes.migration-cta')

@endsection

@section('script')
@endsection