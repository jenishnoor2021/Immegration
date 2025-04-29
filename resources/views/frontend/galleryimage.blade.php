@extends('layouts.front')
@section('content')
<!-- page-title -->
<section class="page-title p_relative centred">
   @include('includes.heroimg')
   <div class="auto-container">
      <div class="content-box">
         <h1>Gallery</h1>
         <ul class="bread-crumb clearfix">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li>Gallery</li>
         </ul>
      </div>
   </div>
</section>
<!-- page-title end -->


<!-- project-style-two -->
<section class="project-style-two pt_150 pb_120">
   <div class="auto-container">
      <div class="sortable-masonry">
         <!-- <div class="filters centred mb_60">
            <ul class="filter-tabs filter-btns clearfix">
               <li class="active filter" data-role="button" data-filter=".all">All Works</li>
               <li class="filter" data-role="button" data-filter=".grocery">Grocery Store</li>
               <li class="filter" data-role="button" data-filter=".hospital">Hospital</li>
               <li class="filter" data-role="button" data-filter=".construction">Construction</li>
            </ul>
         </div> -->
         <div class="items-container row clearfix">
            @foreach($photos as $gallery)
            <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all technology grocery hospital">
               <div class="project-block-two">
                  <div class="inner-box">
                     <figure class="image-box"><img src="{{$gallery->file}}" alt=""></figure>
                     <div class="content-box">
                        <div class="link-box"><a href="/productlist1"><i class="icon-26"></i></a></div>
                        <p>Waste Pickup</p>
                        <h3><a href="/productlist1">{{$gallery->text}}</a></h3>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all technology grocery hospital">
               <div class="project-block-two">
                  <div class="inner-box">
                     <figure class="image-box"><img src="{{asset('assets/images/project/project-4.jpg')}}" alt=""></figure>
                     <div class="content-box">
                        <div class="link-box"><a href="/productlist1"><i class="icon-26"></i></a></div>
                        <p>Waste Pickup</p>
                        <h3><a href="/productlist1">Grocery waste removal</a></h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all grocery technology material">
               <div class="project-block-two">
                  <div class="inner-box">
                     <figure class="image-box"><img src="{{asset('assets/images/project/project-5.jpg')}}" alt=""></figure>
                     <div class="content-box">
                        <div class="link-box"><a href="/productlist1"><i class="icon-26"></i></a></div>
                        <p>Waste Pickup</p>
                        <h3><a href="/productlist1">Waste collection</a></h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
               <div class="project-block-two">
                  <div class="inner-box">
                     <figure class="image-box"><img src="{{asset('assets/images/project/project-6.jpg')}}" alt=""></figure>
                     <div class="content-box">
                        <div class="link-box"><a href="/productlist1"><i class="icon-26"></i></a></div>
                        <p>Waste Pickup</p>
                        <h3><a href="/productlist1">Garbage pickup</a></h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all grocery hospital construction">
               <div class="project-block-two">
                  <div class="inner-box">
                     <figure class="image-box"><img src="{{asset('assets/images/project/project-7.jpg')}}" alt=""></figure>
                     <div class="content-box">
                        <div class="link-box"><a href="/productlist1"><i class="icon-26"></i></a></div>
                        <p>Waste Pickup</p>
                        <h3><a href="/productlist1">Dumpster rental</a></h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
               <div class="project-block-two">
                  <div class="inner-box">
                     <figure class="image-box"><img src="{{asset('assets/images/project/project-8.jpg')}}" alt=""></figure>
                     <div class="content-box">
                        <div class="link-box"><a href="/productlist1"><i class="icon-26"></i></a></div>
                        <p>Waste Pickup</p>
                        <h3><a href="/productlist1">Recycling service</a></h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all grocery construction">
               <div class="project-block-two">
                  <div class="inner-box">
                     <figure class="image-box"><img src="{{asset('assets/images/project/project-9.jpg')}}" alt=""></figure>
                     <div class="content-box">
                        <div class="link-box"><a href="/productlist1"><i class="icon-26"></i></a></div>
                        <p>Waste Pickup</p>
                        <h3><a href="/productlist1">Residential service</a></h3>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </div>
   </div>
</section>
<!-- project-style-two end -->
@endsection