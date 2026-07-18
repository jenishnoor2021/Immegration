<?php

use App\Models\Team;

$teams = Team::where('is_show', 1)->orderBy('sort_order', 'asc')->get();

?>

@extends('layouts.front')
@section('content')
<!-- page-title -->
<!-- Page Header -->
@include('includes.heroimg')
<div class="container">
   <div class="wptb-item--inner">
      <h2 class="wptb-item--title ">Our Team</h2>
      <div class="wptb-breadcrumb-wrap">
         <ul class="wptb-breadcrumb">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li><span>Our Team</span></li>
         </ul>
      </div>
   </div>
</div>
</div>
<!-- page-title end -->

<!-- Our Team -->
<section class="wptb-team-one">
   <div class="container">
      <div class="wptb-heading">
         <div class="wptb-item--inner text-center">
            <h6 class="wptb-item--subtitle">
               <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                     <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833" />
                  </svg>
               </span>
               Our Team
            </h6>
            <h1 class="wptb-item--title"> <span>We have the best Team to <br>
                  Fulfill Your Dream</span></h1>
         </div>
      </div>

      <div class="wptb-timeline--inner">
         <div class="row clearfix">

            <!-- Team Block -->
            @foreach ($teams as $team)
            <div class="col-lg-3 col-md-4 col-sm-6">
               <div class="wptb-team-grid2">
                  <div class="wptb-item--inner">
                     <div class="wptb-item--image">
                        <img src="{{$team->file}}" alt="img">
                     </div>

                     <div class="wptb-item--holder">
                        <div class="wptb-item--social">
                           <a href="{{$team->facebook}}"><i class="bi bi-facebook"></i></a>
                           <a href="{{$team->instagram}}"><i class="bi bi-twitter"></i></a>
                           <a href="{{$team->twitter}}"><i class="bi bi-instagram"></i></a>
                           <a href="{{$team->linkdin}}"><i class="bi bi-linkedin"></i></a>
                        </div>
                        <div class="wptb-item--meta">
                           <h5 class="wptb-item--title">{{$team->name}}</h5>
                           <p class="wptb-item--position">{{$team->occupation}}</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach

         </div>
      </div>
   </div>
</section>

<!-- Newsletter -->
@include('includes.newsletter')

@endsection