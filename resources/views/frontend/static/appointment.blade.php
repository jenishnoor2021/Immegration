@extends('layouts.front')
@section('content')

@include('includes.title-bar', ['title' => 'Make Appointmet'])

<!-- Contact Us Content -->
<div class="page-content contact-us-page">

	<section class="section-lg">
		<div class="container">
			<div class="pbmit-heading-subheading text-center animation-style2">
				<h4 class="pbmit-subtitle">Make Appointment</h4>
				<h2 class="pbmit-title">Want to meet us for your need?</h2>
				<div class="pbmit-heading-desc">We carefully review all visa applications, <br> so you can rest assured that your submission meets the highest standards for approval.</div>
			</div>
		</div>
	</section>

	<!-- Contact Us Start -->
	<section class="contact-three-bg">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-md-5 full-width-1200"></div>
				<div class="col-md-7 full-width-1200">
					<div class="contact-three-form-area pbmit-bg-blackish">
						<div class="pbmit-heading-subheading text-center">
							<h2 class="pbmit-title">Make an Appointment</h2>

						</div>
						<form class="contact-form" method="POST" id="appointment-form" action="{{ route('storeappointment') }}">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<select class="form-select" name="country" required>
										<option value="">Choose a Country</option>
										<option value="uk">United Kingdom(UK)</option>
										<option value="usa">United States of America(USA)</option>
										<option value="canada">Canada</option>
										<option value="australia">Australia</option>
										<option value="new-zealand">New Zealand</option>
										<option value="europe">Europe</option>
										<option value="germany">Germany</option>
										<option value="other">Other Countries</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-select" name="service" required>
										<option value="">Type of Visa</option>
										<option value="Student Visa">Student Visa</option>
										<option value="Visitor Visa">Visitor Visa</option>
										<option value="Business Visa">Business Visa</option>
										<option value="Tourism Visa">Tourism Visa</option>
										<option value="Spouse Visa">Spouse Visa</option>
									</select>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Your Phone" name="phone" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name" name="name" required>
								</div>
								<div class="col-md-6">
									<input name="email" type="email" class="form-control" placeholder="Email Address" required>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control" name="s_date" required>
								</div>
								<div class="col-md-6">
									<input type="time" class="form-control" name="time" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Preferred Address" name="address">
								</div>
								<div class="col-md-12">
									<textarea name="message" class="form-control" rows="4" placeholder="Tell us about your requirement"></textarea>
								</div>
								<div class="col-md-12">
									<div class="input-text-group">
										<p>Please fill in this form in order to request an appointment. Mandatory fields are marked with an asterisk (*).</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="pbmit-button-wrapper">
									<button type="submit" class="pbmit-btn pbmit-btn-hover-white submit">
										<span class="pbmit-button-content-wrapper">
											<span class="pbmit-button-text">Request Appointment</span>
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
									</button>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 message-status"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Us End -->



</div>
<!-- Contact Us Content End -->

@include('includes.migration-cta')

@endsection

@section('script')
<script>
	$(document).ready(function() {
		$('#appointment-form input[type="date"], #appointment-form input[type="time"]').on('focus click', function() {
			if (typeof this.showPicker === 'function') {
				try {
					this.showPicker();
				} catch (error) {
					// The browser may block programmatic picker opening on focus.
				}
			}
		});

		$('#appointment-form').off('submit').on('submit', function(e) {
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
					$status.html('<div class="alert alert-success mb-0">' + (response.message || 'Your appointment request has been submitted successfully.') + '</div>');
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