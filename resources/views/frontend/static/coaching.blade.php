@extends('layouts.front')
@section('content')

@include('includes.title-bar', ['title' => 'Coaching'])

<!-- Contact Us Content -->
<div class="page-content contact-us-page">

	<section class="site-content pbmit-coaching-single coaching_page">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-xl-3 blog-right-col pbmit-sticky-sidebar full-width-1200" id="secondary">
					<div class="theiaStickySidebar">
						<aside class="sidebar">
							<aside class="widget widget-categories">
								<h2 class="widget-title">Categories</h2>
								<ul class="nav nav-pills mb-3 pbmit-all-post-listing" id="pills-tab" role="tablist">
									<li class="w-100" role="presentation">
										<div class="active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#panel-1" type="button" role="tab" aria-controls="panel-1" aria-selected="true">
											<a href="#">IELTS</a>
											<span class="pbmit-brackets"><i class="fa fa-long-arrow-right"></i></span>
										</div>
									</li>
									<li class="w-100" role="presentation">
										<div class="" id="tab-2" data-bs-toggle="pill" data-bs-target="#panel-2" type="button" role="tab" aria-controls="panel-2" aria-selected="false">
											<a href="#">TOEFL</a>
											<span class="pbmit-brackets"><i class="fa fa-long-arrow-right"></i></span>
										</div>
									</li>
									<li class="w-100" role="presentation">
										<div class="" id="tab-3" data-bs-toggle="pill" data-bs-target="#panel-3" type="button" role="tab" aria-controls="panel-3" aria-selected="false">
											<a href="#">PTE</a>
											<span class="pbmit-brackets"><i class="fa fa-long-arrow-right"></i></span>
										</div>
									</li>
									<li class="w-100" role="presentation">
										<div class="" id="tab-4" data-bs-toggle="pill" data-bs-target="#panel-4" type="button" role="tab" aria-controls="panel-4" aria-selected="false">
											<a href="#">Duo Lingo</a>
											<span class="pbmit-brackets"><i class="fa fa-long-arrow-right"></i></span>
										</div>
									</li>
									<li class="w-100" role="presentation">
										<div class="" id="tab-5" data-bs-toggle="pill" data-bs-target="#panel-5" type="button" role="tab" aria-controls="panel-5" aria-selected="false">
											<a href="#">French</a>
											<span class="pbmit-brackets"><i class="fa fa-long-arrow-right"></i></span>
										</div>
									</li>
									<li class="w-100" role="presentation">
										<div class="" id="tab-6" data-bs-toggle="pill" data-bs-target="#panel-6" type="button" role="tab" aria-controls="panel-6" aria-selected="false">
											<a href="#">German</a>
											<span class="pbmit-brackets"><i class="fa fa-long-arrow-right"></i></span>
										</div>
									</li>
								</ul>
							</aside>
							<aside class="widget pbmit-infobox-widget">
								<div class="pbmit-infobox-widget-content">
									<div class="pbmit-service-ads">
										<div class="pbmit-heading-box">
											<div class="pbmit-infobox-subheading">Your Ambition</div>
											<div class="pbmit-infobox-heading">Our Coaching<br> Mastery!</div>
										</div>
										<div class="pbmit-ads-image-2">
											<img src="{{ asset('website-static/images') }}/bg/infobox-pattern.webp" alt="Coaching Mastery!" />
										</div>
									</div>
								</div>
							</aside>
							<aside class="widget widget-tag-cloud">
								<h3 class="widget-title">Countries</h3>
								<div class="tagcloud">
									<ul>
										<li>
											<a href="/uk" class="tag-cloud-link">UK</a>
										</li>
										<li>
											<a href="/usa" class="tag-cloud-link">USA</a>
										</li>
										<li>
											<a href="/new-zealand" class="tag-cloud-link">New Zealand</a>
										</li>
										<li>
											<a href="/europe" class="tag-cloud-link">Europe</a>
										</li>
										<li>
											<a href="/australia" class="tag-cloud-link">Australia</a>
										</li>
										<li>
											<a href="/canada" class="tag-cloud-link">Canada</a>
										</li>
									</ul>
								</div>
							</aside>
						</aside>
					</div>
				</div>
				<div class="tab-content col-md-9 full-width-1200" id="primary">

					<!--IELTS Part-->
					<div class="tab-pane show active" id="panel-1" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0" data-aos="fade-left" data-aos-delay="100">
						<div class="pbmit-coaching-feature-image">
							<img src="{{ asset('website-static/images') }}/coaching/coaching.png" class="img-fluid w-100" alt="Coaching Mastery!" />
						</div>
						<div class="pbmit-single-coaching-details-list">
							<div class="pbmit-coaching-lines-wrapper">
								<ul class="pbmit-coaching-lines-ul">
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">25</span>
										<span class="pbmit-coaching-line-value">Number of Classes</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">100%</span>
										<span class="pbmit-coaching-line-value">Study Material</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">All</span>
										<span class="pbmit-coaching-line-value">Class Recordings</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">5</span>
										<span class="pbmit-coaching-line-value">Mock Test</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="pbmit-entry-content">
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">IELTS Coaching Overview</h3>
							</div>
							<p class="pbmit-firstletter">
								IELTS in its full form stands for the <u>International English Language Testing System</u> – an English Language proficiency test developed and run by the British Council in
								partnership with IDP Education and Cambridge Assessment English.
							</p>
							<p>The IELTS system is highly regarded and widely recognized as the world’s most popular English language proficiency test for higher education and global migration.
								Test takers receive a score for each test component – Listening, Reading, Writing, and Speaking. The individual scores are then averaged and rounded to produce an
								Overall Band Score between 0-9.</p>
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">What is (IELTS) ?</h3>
							</div>
							<p>IELTS (International English Language Testing System) is one of the worlds most preferred and popular tests taken by those aspiring to study,
								work or migrate overseas. The test is an indicator of the English language proficiency of the non-native speakers across four skills:
								reading, listening, writing and speaking. IELTS happens to be the creator of four-skill language testing system three decades ago and still
								continues to set the benchmark for English language even today.</p>
							<div class="row">
								<div class="col-md-6">
									<div class="pbmit-animation-style7 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-02.jpg" class="img-fluid rounded-4" alt="IELTS Coaching" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="pbmit-animation-style7 mt-md-0 mt-3 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-03.jpg" class="img-fluid rounded-4" alt="IELTS Coaching" />
									</div>
								</div>
							</div>
							<ul class="list-group style-2">
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Understand the different sections of the test, including reading, writing, listening, and speaking </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Use practice tests and materials to get familiar with the exam pattern and timings </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Use resources such as practice materials, workshops, and online coaching </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">understanding the test format, practicing with sample questions, and taking mock tests. </span>
								</li>
							</ul>
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">IELTS Training Category & Form</h3>
							</div>
							<p>The second thing I want to warn you about is not making these the only part of your IELTS preparation.
								Lots of students that I know do practice tests all day and most of them improve very little.
								They should only be used as a test of your current ability.
								You should spend most of your time improving your level of English and your IELTS skills.</p>
							<div class="row">
								<div class="col-md-12">
									<h6>IELTS Listening Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Listening module is a comprehensive assessment of your ability to understand spoken English in various contexts.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> You will listen to a series of recordings, including conversations, monologues, and discussions, and answer a variety of question types, such as multiple-choice, matching, and sentence completion.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The recordings feature different accents to reflect real-world situations, making it crucial to focus on specific details as well as the overall understanding.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The recordings feature different accents to reflect real-world situations, making it crucial to focus on specific details as well as the overall understanding.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This module is the same for both General Training and Academic Training, lasting 30 minutes, with additional time given for reviewing your answers.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>IELTS Reading Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Reading module evaluates your reading skills through a series of texts that vary depending on whether you’re taking the General Training or Academic Training test.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> For General Training, the texts are more practical, focusing on general interest topics and everyday issues, such as advertisements, job descriptions, and instruction manuals.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> In contrast, the Academic Training test includes longer and more complex texts that are academically oriented, often taken from books, journals, and newspapers.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> You will be asked to complete tasks like matching headings, identifying true/false statements, and answering multiple-choice questions.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This module requires you to effectively manage your time to read the passages and answer all questions within the 60-minute time limit.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>IELTS Writing Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Writing module is designed to assess your ability to express your thoughts in written English, and the tasks differ based on whether you’re taking the General Training or Academic Training test.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> In the General Training test, you will be required to write a letter and an essay. The letter could be formal, semi-formal, or informal, and the essay will focus on an issue of general interest.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> For the Academic Training test, you will interpret visual information, such as graphs or charts, and write an essay on a more complex topic.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This module tests your ability to organize your ideas, use a range of vocabulary and grammar, and write clearly and coherently within the 60-minute timeframe.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>IELTS Speaking Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Speaking module is a face-to-face interview with a certified IELTS examiner, designed to assess your spoken English skills.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This module is the same for both General Training and Academic Training test-takers.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> It consists of three parts: an introductory interview, a short individual talk on a given topic, and a discussion related to that topic.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The questions are designed to test your ability to communicate effectively, articulate your thoughts, and engage in a conversation.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The examiner will assess your pronunciation, fluency, vocabulary, and grammar during the 11-14 minute session.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This interactive format simulates real-life situations, ensuring that you are prepared for everyday communication in an English-speaking environment.</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--IELTS Part-->

					<!--TOEFL Part-->
					<div class="tab-pane fade" id="panel-2" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
						<div class="pbmit-coaching-feature-image">
							<img src="{{ asset('website-static/images') }}/coaching/coaching-single-01.webp" class="img-fluid w-100" alt="TOEFL Coaching" />
						</div>
						<div class="pbmit-single-coaching-details-list">
							<div class="pbmit-coaching-lines-wrapper">
								<ul class="pbmit-coaching-lines-ul">
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">15</span>
										<span class="pbmit-coaching-line-value">Number of Classes</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">100%</span>
										<span class="pbmit-coaching-line-value">Study Material</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">All</span>
										<span class="pbmit-coaching-line-value">Class Recordings</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">5</span>
										<span class="pbmit-coaching-line-value">Mock Test</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="pbmit-entry-content">
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">TOEFL Coaching Overview</h3>
							</div>
							<p class="pbmit-firstletter">
								The Test of English as a Foreign Language (TOEFL) is a standardized test designed to measure the English language proficiency of non-native speakers.
								It is widely recognized by universities, employers, and immigration authorities around the world.
							</p>
							<p>
								TOEFL assesses reading, listening, speaking, and writing skills, providing a comprehensive evaluation of a candidate's ability to use and understand English in
								an academic setting. Preparing for the TOEFL can open doors to educational and professional opportunities in English-speaking countries.
							</p>
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">Why Choose Our TOEFL Coaching Service?</h3>
							</div>
							<p>Enrolling in our TOEFL Exam Coaching Service equips you with an exceptional strategy for this globally recognized English proficiency test.
								Our team comprises experts who are well-versed in the TOEFL test format, offering you insights into its comprehensive structure.
								We deliver a personalized learning experience with study material and practice exams that are reflective of the actual TOEFL test scenario.
								Our focus extends beyond language proficiency, covering essential test-taking strategies and skills crucial for excelling in TOEFL. </p>
							<div class="row">
								<div class="col-md-6">
									<div class="pbmit-animation-style7 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-02.jpg" class="img-fluid rounded-4" alt="TOEFL Coaching" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="pbmit-animation-style7 mt-md-0 mt-3 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-03.jpg" class="img-fluid rounded-4" alt="TOEFL Coaching" />
									</div>
								</div>
							</div>

							<h4 class="pt-4"><u>Minimum Requirements</u></h4>
							<h6 class="ps-2">Educational Qualification</h6>
							<ul class="list-group style-2">
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Candidates must complete their 10+2 education from a recognized board. </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">The test can also be taken while studying in high school.</span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Must bring a mask and wear it during the test if required by the test centre </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Must bring a digital or print copy of the test confirmation email </span>
								</li>
							</ul>
							<h6 class="ps-2">Age Limit</h6>
							<ul class="list-group style-2">
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">There are no strict age limits for the TOEFL exam.</span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">It is preferred that candidates are at least 18 years old.</span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Must pass security checks: turn out pockets, roll up sleeves, remove glasses if needed </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Personal picture will be taken for the score report </span>
								</li>
							</ul>
							<h6 class="ps-2">Documents Required</h6>
							<ul class="list-group style-2">
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">A valid passport, a recent photo, and signature for ID proof.</span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Candidates should carry their national ID proof and the printout of the confirmation mail from ETS for verification.</span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Documents like temporary ID cards, birth certificates, credit/debit cards, employee IDs, international driver's licenses, student IDs, notary-prepared letters or documents, and school/college library cards are not accepted. </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">No cellphones or other prohibited materials allowed</span>
								</li>
							</ul>

							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">TOEFL Training Category & Form</h3>
							</div>
							<p>The second thing I want to warn you about is not making these the only part of your IELTS preparation.
								Lots of students that I know do practice tests all day and most of them improve very little.
								They should only be used as a test of your current ability.
								You should spend most of your time improving your level of English and your TOEFL skills.</p>
							<div class="row">
								<div class="col-md-12">
									<h6>TOEFL Listening Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Listening module is a comprehensive assessment of your ability to understand spoken English in various contexts.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> You will listen to a series of recordings, including conversations, monologues, and discussions, and answer a variety of question types, such as multiple-choice, matching, and sentence completion.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The recordings feature different accents to reflect real-world situations, making it crucial to focus on specific details as well as the overall understanding.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The recordings feature different accents to reflect real-world situations, making it crucial to focus on specific details as well as the overall understanding.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This module is the same for both General Training and Academic Training, lasting 30 minutes, with additional time given for reviewing your answers.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>IELTS Reading Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Reading module evaluates your reading skills through a series of texts that vary depending on whether you’re taking the General Training or Academic Training test.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> For General Training, the texts are more practical, focusing on general interest topics and everyday issues, such as advertisements, job descriptions, and instruction manuals.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> In contrast, the Academic Training test includes longer and more complex texts that are academically oriented, often taken from books, journals, and newspapers.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> You will be asked to complete tasks like matching headings, identifying true/false statements, and answering multiple-choice questions.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This module requires you to effectively manage your time to read the passages and answer all questions within the 60-minute time limit.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>IELTS Writing Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Writing module is designed to assess your ability to express your thoughts in written English, and the tasks differ based on whether you’re taking the General Training or Academic Training test.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> In the General Training test, you will be required to write a letter and an essay. The letter could be formal, semi-formal, or informal, and the essay will focus on an issue of general interest.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> For the Academic Training test, you will interpret visual information, such as graphs or charts, and write an essay on a more complex topic.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This module tests your ability to organize your ideas, use a range of vocabulary and grammar, and write clearly and coherently within the 60-minute timeframe.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>IELTS Speaking Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Speaking module is a face-to-face interview with a certified IELTS examiner, designed to assess your spoken English skills.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This module is the same for both General Training and Academic Training test-takers.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> It consists of three parts: an introductory interview, a short individual talk on a given topic, and a discussion related to that topic.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The questions are designed to test your ability to communicate effectively, articulate your thoughts, and engage in a conversation.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The examiner will assess your pronunciation, fluency, vocabulary, and grammar during the 11-14 minute session.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> This interactive format simulates real-life situations, ensuring that you are prepared for everyday communication in an English-speaking environment.</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--TOEFL Part-->

					<!--PTE Part-->
					<div class="tab-pane fade" id="panel-3" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
						<div class="pbmit-coaching-feature-image">
							<img src="{{ asset('website-static/images') }}/homepage-1/coaching/coaching-img-02.jpg" class="img-fluid w-100" alt="PTE" />
						</div>
						<div class="pbmit-single-coaching-details-list">
							<div class="pbmit-coaching-lines-wrapper">
								<ul class="pbmit-coaching-lines-ul">
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">20</span>
										<span class="pbmit-coaching-line-value">Number of Classes</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">100%</span>
										<span class="pbmit-coaching-line-value">Study Material</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">All</span>
										<span class="pbmit-coaching-line-value">Class Recordings</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">5</span>
										<span class="pbmit-coaching-line-value">Mock Test</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="pbmit-entry-content">
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">PTE Coaching Overview</h3>
							</div>
							<p class="pbmit-firstletter">
								Choosing the right English proficiency test which assess your language is imperative to decision making while applying for overseas education.
								The Pearson Test of English Academic (PTE Academic), managed by the Pearson PLC group, is a computer-based English language test that is widely accepted by universities and
								colleges abroad. The test promises to offer its candidates “the fastest, fairest and most flexible way of proving their English language proficiency for
								study/work abroad or immigration purposes. We, at Rao consultants, offer the best PTE coaching in Ahmedabad. The sessions of PTE coaching are
								delivered by our highly experienced and knowledgeable faculty members. Our classrooms are we-equipped with all the necessary resources like
								abundant practice material, headphones and computers to enable students to get a hands-on experience of the test.
							</p>
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">What is (PTE) ?</h3>
							</div>
							<p>The PTE (Pearson Test of English) Academic exam is a computer-based English language test which evaluates you in all the four skills such as reading, listening,
								writing and speaking. The PTE test is accepted by educational institutions and trusted by colleges, universities and governments across the globe.
								Individuals who aspire to study overseas or wish to immigrate to English-speaking countries like Canada, Australia, the USA, UK and New Zealand,
								consider taking The PTE test. This test is a parameter to gauge your English Language competency.</p>
							<p>
								The three-hour-long computer-based test centres on day-to-day use of English language and examines the test taker on his/her ability to efficiently understand and speak the
								language on a daily basis. The scoring pattern and provision of the test results in a couple of working days distinguish the PTE test from other English language proficiency tests.
								These peculiar features of the test make it appropriately suitable for those who are in too much of a hurry.
							</p>
							<div class="row">
								<div class="col-md-6">
									<div class="pbmit-animation-style7 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-02.jpg" class="img-fluid rounded-4" alt="Pearson Test of English" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="pbmit-animation-style7 mt-md-0 mt-3 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-03.jpg" class="img-fluid rounded-4" alt="Pearson Test of English" />
									</div>
								</div>
							</div>

							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">PTE Test Format</h3>
							</div>
							<p>Mentioned below is the structure of all the four modules: Speaking & Writing, Reading, and Listening of the test.</p>
							<div class="row">
								<div class="col-md-12">
									<h6>PTE Test Fee, Validity and Test Centres</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The standard exam fee for PTE Academic is INR 14,700. If for any reason, the test taker happens to book his PTE exam within 48 hours of the PTE test date, he will have to incur late test booking charge. The PTE test scores like IELTS, TOEFL and CELPIP are valid for a couple of years. There are over 250 PTE test centres in more than 50 countries worldwide.</span>
										</li>
									</ul>
								</div>

								<div class="col-md-6">
									<h6>PTE Listening Module Format</h6>
									<p class="mb-1">This section lasts for about 45-57 minutes and assess the examinees’ ability to understand spoken English. Test takers are required to attentively listen to the audio and remember whatever they hear. It is made up of 8 diverse tasks which are as follows:</p>
									<p class="mb-1"><strong>Types of questions</strong></p>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Summarize Spoken Text</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Multiple Choice, Multiple Answer</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Fill in the Blanks</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Highlight Correct Summary</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Multiple Choice, Single Answer</span>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<h6>PTE Reading Module Format</h6>
									<p class="mb-1">This section lasts for nearly 32-40 minutes and assess the examinees’ ability to understand instructions. It comprises of 5 various tasks which are as follows:</p>
									<p class="mb-1"><strong>Types of questions</strong></p>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Multiple Choice, Choose Single Answer</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Multiple Choice, Choose Multiple Answers</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Re-Order Paragraphs</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Reading: Fill in the Blanks</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Reading and Writing: Fill in the Blanks</span>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<h6>PTE Speaking & Writing Module Format</h6>
									<p class="mb-1">This section lasts for around 77 to 93 minutes and assess the examinees’ speaking and writing abilities. It comprises of 8 different tasks which are as follow:</p>
									<p class="mb-1"><strong>Types of questions</strong></p>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Personal Introduction</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Read Aloud</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Repeat Sentence</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Describe Image</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Re-Tell Lecture</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Answer Short Question</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Summarize Written Text</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Essay</span>
										</li>
									</ul>
								</div>


							</div>
						</div>
					</div>
					<!--PTE Part-->

					<!--Due Lingo Part-->
					<div class="tab-pane fade" id="panel-4" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
						<div class="pbmit-coaching-feature-image">
							<img src="{{ asset('website-static/images') }}/homepage-1/coaching/coaching-img-05.jpg" class="img-fluid w-100" alt="Due Lingo" />
						</div>
						<div class="pbmit-single-coaching-details-list">
							<div class="pbmit-coaching-lines-wrapper">
								<ul class="pbmit-coaching-lines-ul">
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">1</span>
										<span class="pbmit-coaching-line-value">Number of Classes</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">100%</span>
										<span class="pbmit-coaching-line-value">Study Material</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">All</span>
										<span class="pbmit-coaching-line-value">Class Recordings</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">5</span>
										<span class="pbmit-coaching-line-value">Mock Test</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="pbmit-entry-content">
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">Duo Lingo Coaching Overview</h3>
							</div>
							<p class="pbmit-firstletter">
								Duolingo is a popular language-learning platform that offers fun, interactive lessons to help users learn new languages.
								It uses gamification, bite-sized lessons, and real-world practice to make language learning engaging and effective.
								With a wide range of languages available, Duolingo is suitable for beginners and advanced learners alike,
								providing personalized learning paths and instant feedback to help users improve their language skills efficiently.
							</p>

							<p>
								<strong>Our Approach:</strong> </br>
								At our coaching center, we understand that each student has unique learning needs. Therefore, we tailor our teaching methods to suit individual requirements. Our experienced instructors are dedicated to creating a supportive and engaging learning environment. We combine traditional IELTS training techniques with modern educational tools to deliver effective lessons that enhance your language skills.
							</p>
							<p>
								<strong>Duo Lingo Integration: </strong> </br>
								In addition to our IELTS coaching, we have integrated Duo Lingo, a popular language learning platform, into our curriculum.
								Duo Lingo offers an interactive and gamified approach to language learning, making it enjoyable and effective.
								By incorporating Duo Lingo into our training, we provide you with a comprehensive language learning experience that complements your IELTS preparation.
								You will have access to Duo Lingo's vast library of language exercises, vocabulary building activities, and language proficiency assessments.
							</p>


							<div class="row">
								<div class="col-md-6">
									<div class="pbmit-animation-style7 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-02.jpg" class="img-fluid rounded-4" alt="Due Lingo Coaching" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="pbmit-animation-style7 mt-md-0 mt-3 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-03.jpg" class="img-fluid rounded-4" alt="Due Lingo Coaching" />
									</div>
								</div>
							</div>

							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3 pt-3">Why Choose Us: </h3>
							</div>
							<div class="row">
								<div class="col-md-12">
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Highly qualified and experienced instructors.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Small class sizes for individual attention.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Customized study plans based on your strengths and weaknesses.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Extensive practice materials and resources.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Flexible scheduling options to accommodate your busy lifestyle.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Supportive learning environment fostering growth and confidence.</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">Benefits of Using Duo Lingo: </h3>
							</div>
							<div class="row">
								<div class="col-md-12">
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Engaging and interactive learning experience.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Personalized exercises and quizzes based on your proficiency level.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Fun challenges and rewards that keep you motivated.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Mobile-friendly platform for convenient learning on-the-go.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Continuous assessment to track your progress.</span>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!--Due Lingo Part-->

					<!--France Part-->
					<div class="tab-pane fade" id="panel-5" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
						<div class="pbmit-coaching-feature-image">
							<img src="{{ asset('website-static/images') }}/coaching/coaching-img-04.jpg" class="img-fluid w-100" alt="France" />
						</div>
						<div class="pbmit-single-coaching-details-list">
							<div class="pbmit-coaching-lines-wrapper">
								<ul class="pbmit-coaching-lines-ul">
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">45</span>
										<span class="pbmit-coaching-line-value">Number of Classes</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">100%</span>
										<span class="pbmit-coaching-line-value">Study Material</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">All</span>
										<span class="pbmit-coaching-line-value">Class Recordings</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">5</span>
										<span class="pbmit-coaching-line-value">Mock Test</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="pbmit-entry-content">
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">French Language Coaching Overview</h3>
							</div>
							<p class="pbmit-firstletter">
								<strong>French Language</strong> is one of the world's major international languages and is widely used for
								<strong>education, employment, business, travel, immigration, and international communication.</strong>
							</p>
							<p>
								French language proficiency is commonly measured according to the <strong>Common European Framework of Reference for Languages (CEFR). </strong>
								The main levels are <strong>A1, A2, B1, B2, C1, and C2.</strong>
							</p>
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">What is French Language?</h3>
							</div>
							<p>
								French is an internationally spoken language and an official language in France and several other countries and international organizations.
								Learning French helps students communicate effectively in everyday, academic, professional, and social situations.
							</p>
							<div class="row">
								<div class="col-md-6">
									<div class="pbmit-animation-style7 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-02.jpg" class="img-fluid rounded-4" alt="IELTS Coaching" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="pbmit-animation-style7 mt-md-0 mt-3 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-03.jpg" class="img-fluid rounded-4" alt="IELTS Coaching" />
									</div>
								</div>
							</div>

							<h4 class="pt-4"><u>French language training develops four essential skills:</u></h4>

							<ul class="list-group style-2">
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Listening </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Reading </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Writing </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Speaking. </span>
								</li>
							</ul>
							<p>French language certification may be required for education, employment, immigration, or other official purposes, depending on the individual's requirements.</p>
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">Benefits of French Language Coaching</h3>
							</div>
							<div class="row">
								<div class="col-md-12">
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Understand French grammar, vocabulary, pronunciation, and sentence structure.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Develop listening, reading, writing, and speaking skills.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Improve French pronunciation and conversational ability.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Practice everyday and professional communication</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Prepare for recognized French language examinations</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Build confidence to communicate in French-speaking environments</span>
										</li>
									</ul>
								</div>

								<div class="col-md-12">
									<h6>French Language Training Category & Format</h6>
									<p>French language training is generally divided into different proficiency levels according to the CEFR framework:</p>

									<p><strong><u>FRENCH LANGUAGE LEVELS</u></strong></p>
									<p class="mb-1"><strong>A1 – Beginner</strong></p>
									<p>Learn basic French words and expressions, introductions, numbers, greetings, simple questions, and everyday phrases.</p>
									<p class="mb-1"><strong>A2 – Elementary</strong></p>
									<p>Communicate in familiar everyday situations, understand common expressions, and provide basic information about yourself and your surroundings.</p>
									<p class="mb-1"><strong>B1 – Intermediate</strong></p>
									<p>Communicate independently about familiar topics, describe experiences, express opinions, and understand the main points of everyday conversations.</p>
									<p class="mb-1"><strong>B2 – Upper Intermediate</strong></p>
									<p>Communicate with greater fluency, understand more complex texts and conversations, and discuss academic and professional topics.</p>
									<p class="mb-1"><strong>C1 – Advanced</strong></p>
									<p>Use French effectively and flexibly in academic, professional, and social situations with a high level of fluency.</p>
									<p class="mb-1"><strong>C2 – Proficient</strong></p>
									<p>Understand virtually everything heard or read and communicate precisely and fluently in complex situations.</p>

								</div>
								<div class="col-md-12">
									<h6>French Listening Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The Listening module develops your ability to understand spoken French in everyday, academic, and professional situations.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Students listen to conversations, announcements, interviews, discussions, and other recordings</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Practice focuses on understanding main ideas, specific information, important details, and the speaker's intention.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Students become familiar with different pronunciation patterns, vocabulary, expressions, and natural French speech.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Regular listening exercises and mock tests improve comprehension, concentration, and listening speed.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>French Reading Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Reading module develops your ability to understand written French according to your selected language level.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Students work with emails, advertisements, notices, messages, articles, forms, and other everyday or academic texts.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Exercises may include multiple-choice questions, matching, true/false statements, gap filling, and identifying specific information.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Training develops vocabulary, grammar, sentence structures, and reading comprehension.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Regular practice helps students understand French texts accurately within the required time.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>French Writing Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Writing module develops your ability to express your thoughts clearly and correctly in written French.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Depending on the level, students may write emails, letters, messages, descriptions, opinions, or formal communication.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Training focuses on grammar, vocabulary, spelling, sentence structure, and appropriate French expressions.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Students learn to organize their ideas and communicate clearly and accurately.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Regular writing practice and corrections improve written accuracy and confidence.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>French Speaking Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Speaking module develops your ability to communicate confidently in French.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Training includes introductions, questions and answers, conversations, discussions, descriptions, and role-play situations.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Students practice pronunciation, vocabulary, grammar, fluency, and sentence formation.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Speaking activities simulate real-life situations such as shopping, travelling, appointments, education, work, and daily conversations.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Regular speaking practice helps students communicate naturally and confidently in French.</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--France Part-->

					<!--German Part-->
					<div class="tab-pane fade" id="panel-6" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
						<div class="pbmit-coaching-feature-image">
							<img src="{{ asset('website-static/images') }}/coaching/coaching-single-04.jpg" class="img-fluid w-100" alt="German" />
						</div>
						<div class="pbmit-single-coaching-details-list">
							<div class="pbmit-coaching-lines-wrapper">
								<ul class="pbmit-coaching-lines-ul">
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">45</span>
										<span class="pbmit-coaching-line-value">Number of Classes</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">100%</span>
										<span class="pbmit-coaching-line-value">Study Material</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">All</span>
										<span class="pbmit-coaching-line-value">Class Recordings</span>
									</li>
									<li class="pbmit-coaching-line-li">
										<span class="pbmit-coaching-line-title">5</span>
										<span class="pbmit-coaching-line-value">Mock Test</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="pbmit-entry-content">
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">German Language Coaching Overview</h3>
							</div>
							<p class="pbmit-firstletter">
								<strong>German Language</strong> is one of the most widely spoken languages in Europe and is an important language for
								<strong>study, work, immigration, business, and settlement in Germany, Austria, and Switzerland.</strong>
							</p>
							<p>
								German language proficiency is commonly measured according to the <strong>Common European Framework of Reference for Languages (CEFR). </strong>
								The main levels are <strong>A1, A2, B1, B2, C1, and C2,</strong> with each level representing a different degree of language ability.
							</p>
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">What is German Language?</h3>
							</div>
							<p>
								German is a major European language and the official language of Germany, Austria, and Liechtenstein, and one of the official languages of Switzerland and Luxembourg.
								Learning German helps students communicate effectively in everyday, academic, and professional situations.
							</p>
							<div class="row">
								<div class="col-md-6">
									<div class="pbmit-animation-style7 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-02.jpg" class="img-fluid rounded-4" alt="IELTS Coaching" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="pbmit-animation-style7 mt-md-0 mt-3 coaching-single-img">
										<img src="{{ asset('website-static/images') }}/coaching/coaching-single-03.jpg" class="img-fluid rounded-4" alt="IELTS Coaching" />
									</div>
								</div>
							</div>

							<h4 class="pt-4"><u>German language courses develop four essential skills:</u></h4>

							<ul class="list-group style-2">
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Listening </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Reading </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Writing </span>
								</li>
								<li class="list-group-item">
									<span class="pbmit-icon-list-icon">
										<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
											<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
										</svg>
									</span>
									<span class="pbmit-icon-list-text">Speaking. </span>
								</li>
							</ul>
							<p>German language certification may be required for higher education, employment, family reunification, immigration, or other visa purposes, depending on the individual's circumstances.</p>
							<div class="pbmit-custom-heading animation-style2">
								<h3 class="pbmit-title mb-3">Benefits of German Language Coaching</h3>
							</div>
							<div class="row">
								<div class="col-md-12">
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">Understand the German language structure, vocabulary, and grammar.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Develop listening, reading, writing, and speaking skills.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Practice with sample questions and examination-style exercises.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Improve pronunciation and everyday communication</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Prepare for recognized German language examinations</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Build confidence for academic, professional, and real-life communication.</span>
										</li>
									</ul>
								</div>

								<div class="col-md-12">
									<h6>German Language Training Category & Format</h6>
									<p>German language training is generally divided into different proficiency levels according to the CEFR framework:</p>

									<p><strong><u>German Language Levels</u></strong></p>
									<p class="mb-1"><strong>A1 – Beginner</strong></p>
									<p>Learn basic words, phrases, introductions, numbers, everyday expressions, and simple conversations.</p>
									<p class="mb-1"><strong>A2 – Elementary</strong></p>
									<p>Develop the ability to communicate in familiar everyday situations and understand frequently used expressions.</p>
									<p class="mb-1"><strong>B1 – Intermediate</strong></p>
									<p>Communicate independently in common situations, describe experiences, express opinions, and understand the main points of familiar topics.</p>
									<p class="mb-1"><strong>B2 – Upper Intermediate</strong></p>
									<p>Communicate with greater fluency and understand more complex conversations, texts, and professional topics.</p>
									<p class="mb-1"><strong>C1 – Advanced</strong></p>
									<p>Use German effectively and flexibly for academic, professional, and social communication.</p>
									<p class="mb-1"><strong>C2 – Proficient</strong></p>
									<p>Understand virtually everything heard or read and communicate with a high degree of fluency and precision.</p>

								</div>
								<div class="col-md-12">
									<h6>German Listening Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> The Listening module develops your ability to understand spoken German in everyday, academic, and professional situations.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> You will listen to conversations, announcements, interviews, discussions, and other recordings</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Practice focuses on understanding main ideas, specific information, important details, and the speaker's purpose.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Students become familiar with different accents, pronunciation patterns, vocabulary, and natural German speech.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Regular listening exercises and mock tests help improve speed, concentration, and comprehension.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>German Reading Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Reading module develops your ability to understand written German at your selected language level.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> You may work with emails, advertisements, notices, articles, forms, messages, and other everyday or academic texts.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Exercises can include multiple-choice questions, matching, true/false statements, gap filling, and identifying specific information.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Students learn important vocabulary, sentence structures, and German grammar used in written communication.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Regular practice helps students read and understand German within the required time.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>German Writing Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Writing module develops your ability to express your thoughts clearly and correctly in written German.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Depending on the level, students may write personal messages, emails, letters, descriptions, opinions, or formal communication.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Training focuses on grammar, vocabulary, sentence structure, spelling, and appropriate expressions.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Students learn how to organize their ideas and communicate clearly and accurately.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Regular writing practice and corrections help improve accuracy and confidence.</span>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<h6>German Speaking Module Format</h6>
									<ul class="list-group style-2">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text">The Speaking module develops your ability to communicate confidently in German.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Training includes introductions, questions and answers, conversations, discussions, descriptions, and role-play situations.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Students practice pronunciation, vocabulary, grammar, fluency, and natural sentence formation.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Speaking activities simulate real-life situations such as shopping, travelling, appointments, work, education, and daily conversations.</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
												</svg>
											</span>
											<span class="pbmit-icon-list-text"> Regular speaking practice helps students communicate confidently with German-speaking people.</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--German Part-->

					<div class="pbmit-header-button2">
						<a class="pbmit-btn" href="/visa-enroll-form">
							<div class="pbmit-button-content-wrapper">
								<span class="pbmit-button-text">Enroll Now</span>
								<span class="pbmit-button-icon">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" height="24" viewBox="0 0 24 24" width="24">
										<path d="m17.9547 7.05228v8.48532c0 .1318-.026.2624-.0764.3842-.0505.1218-.1245.2325-.2177.3258-.0932.0932-.2039.1672-.3258.2176-.1218.0505-.2523.0764-.3842.0764s-.2624-.0259-.3843-.0764c-.1218-.0504-.2325-.1244-.3257-.2176-.0932-.0933-.1672-.204-.2177-.3258-.0504-.1218-.0764-.2524-.0764-.3842l.0071-6.07409-8.19539 8.19539c-.18754.1875-.44189.2929-.70711.2929-.26521 0-.51957-.1054-.7071-.2929-.18754-.1876-.29289-.4419-.29289-.7071s.10535-.5196.29289-.7071l8.1954-8.1954-6.07408.00707c-.2663 0-.5217-.10579-.71-.29409-.18831-.18831-.29409-.4437-.29409-.71s.10578-.5217.29409-.71c.1883-.18831.4437-.29409.71-.29409h8.48528c.132-.00055.2628.02506.3849.07532.1221.05027.233.12421.3263.21756.0934.09335.1673.20425.2176.32632.0502.12206.0758.25288.0753.38489z" fill="rgb(0,0,0)"></path>
									</svg>
								</span>
							</div>
						</a>
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
@endsection