@extends('layouts.front')
@section('content')

@include('includes.title-bar', ['title' => 'Leadership Perspective'])

<!-- Contact Us Content -->
<div class="page-content contact-us-page chairman-msg">

	<!-- Team Member Detail -->
	<section class="pbmit-team-single site-content">
		<div class="container">
			<div class="pbmit-team-single-info">
				<div class="row">
					<div class="col-md-12 col-xl-4 pbmit-sticky-sidebar">
						<div class="theiaStickySidebar">
							<div class="pbmit-team-left-inner">
								<div class="pbmit-featured-wrapper">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{ asset('website-static/images') }}/sanjaybhai.jpeg" class="img-fluid" alt="Chairman & Managing Director" />
										</div>
									</div>
								</div>
								<div class="pbmit-team-detail">
									<div class="pbmit-team-detail-inner">
										<div class="pbmit-team-summary">
											<div class="pbmit-team-designation">Chairman & Managing Director</div>
											<h2 class="pbmit-team-title">Mr. Sanjaybhai J. Baldaniya</h2>
										</div>
										<ul class="pbmit-single-team-info mb-3">
											<li><label>Phone Number :</label> (+91)98241-45453</li>
											<!-- <li><label>Email Address :</label> <a href="#"><span>[email&#160;protected]</span></a></li> -->
										</ul>

										<div class="pbmit-short-description">
											(Seven Countries Immigration & Education Pvt. Ltd.)
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-8">
						<div class="pbmit-entry-content">
							<div class="pbmit-custom-heading">
								<h3 class="pbmit-title mb-3">15+ Years of Experience. Thousands of Dreams. One Purpose.</h3>
							</div>
							<h6 class="pb-1 mb-3 border-bottom border-dotted ">Welcome to Seven Countries Immigration & Education Pvt. Ltd.</h6>

							<div class="pbmit-custom-heading animation-style2 text-design-1">
								<h4 class="pbmit-title mb-3 pb-2"> Where Dreams Find Direction:</h4>
							</div>
							<p class="pbmit-firstletter">At Seven Countries, we believe that education is more than a degree—it is the beginning of a brighter future.</p>
							<p>For over 15 years, we have been helping students turn their dreams of studying abroad into meaningful opportunities. With the right guidance, honest advice, and a commitment to excellence, we help every student take a confident step toward their global ambitions.</p>

							<div class="pbmit-custom-heading animation-style2 text-design-1">
								<h4 class="pbmit-title mb-3 pb-2"> Our Legacy, Your Future:</h4>
							</div>
							<p>Every student has a unique dream. Every journey deserves the right direction.</p>
							<p>Our experienced team provides personalized counselling, transparent guidance, and dedicated support throughout the university admission and student visa process. We believe in empowering students with knowledge, confidence, and opportunities that can shape their future.</p>

							<div class="quote-msg">
								<strong><u>Our mission is simple:</u></strong>
								<blockquote>to make global education more accessible, more understandable, and more achievable.</blockquote>
							</div>

							<div class="pbmit-custom-heading animation-style2">
								<h4 class="pbmit-title mb-3 pb-2"> Inspired by Purpose. Driven by Excellence.</h4>
							</div>
							<div class="pbmit-custom-heading animation-style2 text-design-1">
								<h4 class="pbmit-title mb-3 pb-2"> Because your success is not just our goal—it is our greatest achievement.</h4>
							</div>
							<p>We are committed to integrity, excellence, and student success. From choosing the right course and university to preparing for a new life abroad, we stand beside our students at every important step.</p>



							<div class="blog-details">
								<div class="pbmit-entry-content">
									<blockquote>
										<p>"Never stop fighting until you arrive at your destined place—that is, the unique you. Have an aim in life, continuously acquire knowledge, work hard, and have perseverance to realise the great life"
											<cite>A. P. J. Abdul Kalam</cite>
										</p>
									</blockquote>
								</div>
							</div>

							<p>At Seven Countries, we believe that every student has the potential to achieve something extraordinary. With the right guidance and determination, your dream can become your destination.</p>

							<!-- <div class="pbmit-custom-heading animation-style2 text-design-1">
										<h4 class="pbmit-title mb-3 pb-2">Your dream. Your journey. Your global future.</h4>
										<h4 class="pbmit-title mb-3 pb-2">Seven Countries Immigration & Education Pvt. Ltd.</h4>
									</div> -->

							<div class="terminal-loader mb-3">
								<div class="typewriter" style="--n: 34" aria-label="Your dream. Your journey. Your global future.">
									Your dream. Your journey. Your global future.
								</div>
								<div class="typewriter" style="--n: 39" aria-label="Seven Countries Immigration & Education Pvt. Ltd.">
									Seven Countries Immigration & Education Pvt. Ltd.
								</div>
							</div>


							<div class="pbmit-custom-heading animation-style2">
								<h5 class="pbmit-title mb-3">Guiding Dreams. Shaping Futures. Creating Global Opportunities.</h5>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Team Member Detail end -->



</div>
<!-- Contact Us Content End -->

@include('includes.migration-cta')

@endsection

@section('script')
@endsection