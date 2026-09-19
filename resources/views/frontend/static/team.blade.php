<?php

use App\Models\Team;

$teams = Team::where('is_show', 1)->orderBy('sort_order', 'asc')->get();

?>

@extends('layouts.front')
@section('content')

@include('includes.title-bar', ['title' => 'Our Team Member'])

<!-- Contact Us Content -->
<div class="page-content contact-us-page">

	<!-- Team Start -->
	<section class="section-lg our-team-section">
		<div class="container">
			<div class="row pbmit-element-posts-wrapper">
				@foreach ($teams as $team)
				<article class="pbmit-team-style-1 col-md-6 col-lg-3">
					<div class="pbminfotech-post-item">
						<div class="pbmit-featured-wrap">
							<div class="pbmit-featured-inner">
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="{{ $team->file }}" class="" alt="{{ $team->name }}" />
									</div>
								</div>
								<a class="pbmit-link" href="#"></a>
							</div>
						</div>
						<div class="pbminfotech-box-content">
							<div class="pbminfotech-box-content-inner">
								<h3 class="pbmit-team-title">
									<a href="#">{{ $team->name }}</a>
								</h3>
								<div class="pbminfotech-box-team-position">{{ $team->occupation ?? 'Team Member' }}</div>
							</div>

						</div>
					</div>
				</article>
				@endforeach

			</div>
		</div>
	</section>
	<!-- Team End -->



</div>
<!-- Contact Us Content End -->

@include('includes.migration-cta')

@endsection

@section('script')
@endsection