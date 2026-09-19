@extends('layouts.front')
@section('content')

@include('includes.title-bar', ['title' => 'Enroll Now'])

<!-- Contact Us Content -->
<div class="page-content contact-us-page">

	<section class="section-lg">
		<div class="container">
			<div class="pbmit-heading-subheading text-center animation-style2">
				<h4 class="pbmit-subtitle">Student Coaching Enrollment Form</h4>
				<h2 class="pbmit-title">Want to meet us for your need?</h2>
				<div class="pbmit-heading-desc">Great for program sign-ups and skill development workshops.</div>
			</div>
		</div>
	</section>

	<section class="site-content pt-0 pbmit-coaching-single">
		<div class="container">
			<div class="row">
				<div class="pbmit-entry-content">
					<div class="comment-respond pbmit-bg-color-light">
						<div class="pbmit-custom-heading">
							<h3 class="pbmit-title mb-3">Send a message to Us </h3>
						</div>
						<p>Your email address will not be published. Required fields are marked *</p>
						<div class="comment-form">
							@if(session('enrollment_success'))
							<div class="alert alert-success">{{ session('enrollment_success') }}</div>
							@endif
							@if($errors->any())
							<div class="alert alert-danger">
								<ul class="mb-0">
									@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							<form class="contact-form" method="POST" id="visa-enrollment-form" action="{{ route('website.visa-enroll-form.store') }}">
								@csrf
								<div class="row">
									<div class="col-md-6">
										<input id="name" type="text" placeholder="Your Name" class="form-control" name="name" value="{{ old('name') }}" required>
									</div>
									<div class="col-md-6">
										<input id="email" class="form-control" placeholder="Your Email" name="email" type="email" value="{{ old('email') }}" required>
									</div>
									<div class="col-md-6">
										<input id="phone" class="form-control" placeholder="Your Phone" name="phone" type="text" value="{{ old('phone') }}" required>
									</div>
									<div class="col-md-6">
										<select class="form-select" name="country" required>
											<option value="">Choose a Country</option>
											<option value="uk" {{ old('country') === 'uk' ? 'selected' : '' }}>United Kingdom(UK)</option>
											<option value="usa" {{ old('country') === 'usa' ? 'selected' : '' }}>United States of America(USA)</option>
											<option value="canada" {{ old('country') === 'canada' ? 'selected' : '' }}>Canada</option>
											<option value="australia" {{ old('country') === 'australia' ? 'selected' : '' }}>Australia</option>
											<option value="new-zealand" {{ old('country') === 'new-zealand' ? 'selected' : '' }}>New Zealand</option>
											<option value="europe" {{ old('country') === 'europe' ? 'selected' : '' }}>Europe</option>
											<option value="germany" {{ old('country') === 'germany' ? 'selected' : '' }}>Germany</option>
											<option value="other" {{ old('country') === 'other' ? 'selected' : '' }}>Other Countries</option>
										</select>
									</div>
									<div class="col-md-6">
										<input id="course" type="text" placeholder="Course Name" class="form-control" name="course" value="{{ old('course') }}" required>
									</div>
									<div class="col-md-6">
										<input id="coursedate" class="form-control" placeholder="Course Date" name="course_date" type="date" value="{{ old('course_date') }}" required>
									</div>
									<div class="col-md-6">
										<select class="form-select" name="batch" required>
											<option value="">Batch Preferred</option>
											<option value="morning" {{ old('batch') === 'morning' ? 'selected' : '' }}>Morning Batch</option>
											<option value="afternoon" {{ old('batch') === 'afternoon' ? 'selected' : '' }}>Afternoon Batch</option>
											<option value="evening" {{ old('batch') === 'evening' ? 'selected' : '' }}>Evening Batch</option>
										</select>
									</div>


									<!-- <div class="col-md-12">
													<textarea class="form-control" name="massage" placeholder="Message" rows="3" required></textarea>
												</div> -->
									<!-- <div class="col-md-12">
													<div class="form-check">
														<input class="form-check-input" type="checkbox">
														<label class="form-check-label">
															Save my name, email, and website in this browser for the next time I comment.
														</label>
													</div>
												</div> -->
									<div class="col-md-12">
										<div class="pbmit-button-wrapper">
											<button type="submit" class="pbmit-btn" id="visa-enrollment-submit">
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
									</div>
									<div class="col-md-12 col-lg-12 message-status"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



</div>
<!-- Contact Us Content End -->

@include('includes.migration-cta')

@endsection

@section('script')
<script>
	document.getElementById('visa-enrollment-form').addEventListener('submit', function() {
		var button = document.getElementById('visa-enrollment-submit');
		button.disabled = true;
		button.querySelector('.pbmit-button-content-wrapper').classList.add('d-none');
		button.querySelector('.form-btn-loader').classList.remove('d-none');
	});
</script>

<script>
	$(document).ready(function() {
		$('#visa-enrollment-form input[type="date"]').on('focus click', function() {
			if (typeof this.showPicker === 'function') {
				try {
					this.showPicker();
				} catch (error) {
					// The browser may block programmatic picker opening on focus.
				}
			}
		});
	});
</script>

@endsection