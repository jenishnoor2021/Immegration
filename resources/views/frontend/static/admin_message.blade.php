@extends('layouts.front')
@section('content')

@include('includes.title-bar', ['title' => 'From The Admin Desk'])

<!-- Contact Us Content -->
<div class="page-content contact-us-page admin-msg">

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
											<img src="{{ asset('website-static/images') }}/team/admin.jpeg" class="img-fluid" alt="Ms. Sonali S. Das" />
										</div>
									</div>
								</div>
								<div class="pbmit-team-detail">
									<div class="pbmit-team-detail-inner">
										<div class="pbmit-team-summary">
											<div class="pbmit-team-designation">Senior Executive Administrator</div>
											<h2 class="pbmit-team-title">Ms. Sonali S. Das,</h2>
										</div>
										<ul class="pbmit-single-team-info mb-3">
											<li><label>Phone Number :</label> (+91)92130-05642</li>
											<!-- <li><label>Email Address :</label> <a href="#"><span>[email&#160;protected]</span></a></li> -->
										</ul>
										<div class="pbmit-short-description">
											[Seven Countries Immigration & Education Pvt. Ltd]
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-8">
						<div class="pbmit-entry-content">
							<div class="pbmit-custom-heading">
								<h3 class="pbmit-title mb-3">Meet Our Senior Executive Administrator</h3>
							</div>
							<h6 class="pb-1 mb-3 border-bottom border-dotted ">
								Where Every Application Begins with Trust
							</h6>
							<p class="pbmit-firstletter">
								In visa immigration, every application is more than paperwork—it is a step toward a new opportunity, a new experience, and a new future.
							</p>
							<p class="">
								My role is to ensure that this journey is supported by <strong><u>clarity</u>, <u>coordination</u>, and <u>professional excellence</u>.</strong>
							</p>
							<div class="leadership-section mb-4">
								<h2>My Leadership Philosophy</h2>
								<div class="philosophy">
									<div class="philosophy-item">
										<h3>Think strategically.</h3>
									</div>
									<div class="philosophy-item">
										<h3>Execute precisely.</h3>
									</div>
									<div class="philosophy-item">
										<h3>Lead responsibly.</h3>
									</div>
								</div>
							</div>

							<p>
								I believe that effective administration is the foundation of a successful immigration service. It is about bringing people, processes, and priorities together to create a smooth and organized experience for every client.
							</p>
							<p>
								Through strategic coordination, professional communication, structured documentation, and careful follow-up, I work to ensure that every application receives the attention, accuracy, and support it deserves.
							</p>

							<div class="pbmit-custom-heading animation-style2">
								<h5 class="pbmit-title mb-3">Driving Excellence in Visa Immigration</h5>
							</div>

							<p>
								At <strong><u>Seven Countries Immigration & Education Pvt. Ltd.</u></strong>, I contribute to the coordination and administration of visa applications,
								document preparation, client communication, and operational processes.
							</p>
							<p>
								My focus is to help our team deliver <strong><u>clear guidance, organized services, and timely support</u></strong> throughout the immigration journey.
							</p>
							<p>
								From <strong><u>student visas and visitor visas to family visas and other immigration services</u></strong>,
								I believe that every client deserves a professional experience built on trust, transparency, and attention to detail.
							</p>

							<div class="pbmit-custom-heading animation-style2 text-design-1">
								<h4 class="pbmit-title mb-3 pb-2"> My Commitment:</h4>
							</div>
							<p>I am committed to bringing <strong><u>continuous improvement, innovation,</u> and <u>responsible leadership</u></strong> to every responsibility entrusted to me.</p>
							<p>My goal is not simply to manage processes, but to <strong><u>strengthen systems, improve coordination,</u> and <u>help our team create a better experience for every client.</u></strong></p>

							<div class="pbmit-custom-heading animation-style2">
								<h5 class="pbmit-title mb-3">Because when professional guidance meets disciplined execution, every journey becomes more confident</h5>
							</div>

							<p class="text-subtext">Work with Purpose. Lead with Responsibility. Innovate with Vision</p>

							<div class="terminal-loader mb-3">
								<div class="typewriter terminal-text" style="--n: 70" aria-label="Together, we build stronger systems, greater trust, and better opportunities for every client.">
									Together, we build stronger systems, greater trust, and better opportunities for every client
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