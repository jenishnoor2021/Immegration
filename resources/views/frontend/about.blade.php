<?php

use App\Models\Team;

$teams = Team::where('is_show', 1)->orderBy('sort_order', 'asc')->paginate(4);

?>

@extends('layouts.front')
@section('content')

<style>
        .teamImage {
            height:400px !important;
        }
        
        .wptb-item--description-comp {
            /*max-height: 100px;*/
            /*overflow: hidden;*/
        }
  </style>

<!-- Page Header -->
@include('includes.heroimg')
<div class="container">
   <div class="wptb-item--inner">
      <h2 class="wptb-item--title ">About Us</h2>
      <div class="wptb-breadcrumb-wrap">
         <ul class="wptb-breadcrumb">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li><span>About Us</span></li>
         </ul>
      </div>
   </div>
</div>
</div>

<!-- Intro -->
<section class="wptb-intro-one pb-0">
   <div class="container">
      <div class="wptb-heading">
         <div class="row">
            <div class="col-md-6">
               <div class="wptb-item--inner">
                  <h6 class="wptb-item--subtitle">
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                           <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833" />
                        </svg>
                     </span>
                     Company Intro
                  </h6>
                  <h1 class="wptb-item--title"> <span>WELCOME TO SEVEN COUNTRIES<br>
                        IMMIGRATION AND EDUCATION PVT LTD</span></h1>
               </div>
            </div>

            <div class="col-md-6">
               <p class="wptb-item--description-comp">we are your trusted partners in global immigration. With deep expertise and a wide network of international connections, we help individuals, students, and professionals achieve their dreams abroad.</p>
               <p class="wptb-item--description-comp">We specialize in immigration services for Canada, USA, United Kingdom, Australia, New Zealand, Germany, and Ireland — offering end-to-end support from consultation to visa approval.</p>
               <p class="wptb-item--description-comp">Whether you're aiming for higher education, permanent residency, work permits, or family sponsorship, our dedicated team ensures a smooth, transparent, and successful journey.</p>
               <p class="wptb-item--description-comp">Join the thousands who have turned their global dreams into reality with us.</p>
               <p class="wptb-item--description-comp">Your journey begins here. Let’s take the first step together.</p>
            </div>
         </div>
      </div>

      <!-- Slider Image -->
      <div class="wptb-image-single wow fadeInUp">
         <div class="wptb-item--inner">
            <div class="wptb-item--image">
               <img src="{{asset('assets/img/background/bg-15.jpg')}}" alt="img">
            </div>
         </div>
      </div>
   </div>
</section>

<!-- About Company -->
<section class="wptb-about-company-one bg-image pd-more" style="background-image: url('{{ asset('assets/img/background/bg-7.jpg') }}');">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <!-- Single Image -->
            <div class="wptb-image-single wow skewIn">
               <div class="wptb-item--inner">
                  <div class="wptb-item--image">
                     <img src="{{asset('assets/img/1.jpg')}}" alt="img" class="image-main">

                     <div class="wptb-item-layer">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                           <div class="wptb-item--inner flex-start">
                              <div class="wptb-item--icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="29" height="26" viewBox="0 0 29 26" fill="none">
                                    <path d="M0 3.25C0 2.38805 0.34241 1.5614 0.951903 0.951903C1.5614 0.34241 2.38805 0 3.25 0H24.75C25.612 0 26.4386 0.34241 27.0481 0.951903C27.6576 1.5614 28 2.38805 28 3.25V10.123C27.9556 10.101 27.911 10.0797 27.866 10.059L27.351 9.821C26.9268 9.62433 26.4673 9.51548 26 9.501V3.25C26 2.56 25.44 2 24.75 2H3.25C2.56 2 2 2.56 2 3.25V20.75C2 21.44 2.56 22 3.25 22H6V18.5C6 17.837 6.26339 17.2011 6.73223 16.7322C7.20107 16.2634 7.83696 16 8.5 16H19.5C19.8283 16 20.1534 16.0647 20.4567 16.1903C20.76 16.3159 21.0356 16.5001 21.2678 16.7322C21.4999 16.9644 21.6841 17.24 21.8097 17.5433C21.9353 17.8466 22 18.1717 22 18.5V19.248L21.293 19.063C20.7489 18.9202 20.1754 18.9345 19.6391 19.1044C19.1027 19.2744 18.6256 19.5929 18.263 20.023L17.327 21.132C16.9956 21.5241 16.7544 21.9842 16.6205 22.4798C16.4866 22.9754 16.4632 23.4944 16.552 24H3.25C2.8232 24 2.40059 23.9159 2.00628 23.7526C1.61197 23.5893 1.25369 23.3499 0.951903 23.0481C0.650112 22.7463 0.410719 22.388 0.247391 21.9937C0.0840637 21.5994 0 21.1768 0 20.75V3.25ZM14 14C15.3261 14 16.5979 13.4732 17.5355 12.5355C18.4732 11.5979 19 10.3261 19 9C19 7.67392 18.4732 6.40215 17.5355 5.46447C16.5979 4.52678 15.3261 4 14 4C12.6739 4 11.4021 4.52678 10.4645 5.46447C9.52678 6.40215 9 7.67392 9 9C9 10.3261 9.52678 11.5979 10.4645 12.5355C11.4021 13.4732 12.6739 14 14 14ZM23.55 13.713L24.029 12.335C24.1184 12.0737 24.2616 11.8342 24.4494 11.6318C24.6372 11.4294 24.8654 11.2687 25.1193 11.1601C25.3732 11.0515 25.647 10.9974 25.9231 11.0014C26.1992 11.0053 26.4713 11.0672 26.722 11.183L27.237 11.421C28.077 11.808 28.781 12.502 28.917 13.424C29.589 17.939 26.036 24.184 21.847 25.851C20.992 26.191 20.047 25.921 19.297 25.376L18.837 25.042C18.6122 24.8786 18.4233 24.6707 18.2822 24.4312C18.141 24.1918 18.0506 23.9259 18.0165 23.65C17.9823 23.3742 18.0052 23.0942 18.0838 22.8276C18.1623 22.561 18.2948 22.3133 18.473 22.1L19.41 20.99C19.778 20.554 20.36 20.37 20.913 20.514L22.934 21.044C24.462 20.045 25.27 18.625 25.358 16.784L23.895 15.272C23.699 15.0693 23.5629 14.8161 23.502 14.5408C23.4411 14.2654 23.4577 13.9795 23.55 13.713Z" fill="#E13833" />
                                 </svg>
                              </div>
                              <div class="wptb-item--holder">
                                 <h5 class="wptb-item--title">Call For Consultation</h5>
                                 <p class="wptb-item--description">
                                    <a href="tel:+91 9879476666">+91 9879476666 / 9979865666</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="wptb-client-review2 wow fadeInLeft">
                        <div class="wptb-item--inner">
                           <div class="wptb-item--icon"><i class="bi bi-airplane"></i></div>
                           <h5 class="wptb-item--title">Served Client</h5>
                           <div class="wptb-piechart wow fadeInLeft" data-wow-delay="600ms">
                              <div class="wrap-meta">
                                 <div class="wrap-meta--inner">
                                    <span class="wptb--rating-label">Successful</span> <span class="wptb--counter-number"> <span class="wptb--counter-value odometer" data-count="127865"></span> </span>
                                 </div>
                              </div>
                           </div>
                           <div class="wptb-item--images">
                              <div class="wptb-item--img"><img src="{{asset('assets/img/country/germany.jpg')}}" alt=""></div>
                              <div class="wptb-item--img"><img src="{{asset('assets/img/country/australia.jpg')}}" alt=""></div>
                              <div class="wptb-item--img"><img src="{{asset('assets/img/country/uk.jpg')}}" alt=""></div>
                              <div class="wptb-item--img"><img src="{{asset('assets/img/country/canada.jpg')}}" alt=""></div>
                              <a class="wptb-item--img wptb-item--link" href="{{URL::to('/country-list')}}"><i class="bi bi-plus"></i></a> <span class="wptb-item--text">10 Countries</span>
                           </div>
                           <span class="wptb-item--desc">We are serving for 20 Years</span>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         <div class="col-md-6 mt-5 mt-md-0">
            <div class="wptb-about-company-one--inner">
               <div class="wptb-heading">
                  <div class="wptb-item--inner">
                     <h6 class="wptb-item--subtitle">
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                              <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833" />
                           </svg>
                        </span>
                        About Our Company
                     </h6>
                     <h1 class="wptb-item--title has-line"> <span>We help making your <br>
                           dream into reality</span></h1>
                     <p class="wptb-item--description-comp">
                        Our mission is simple: to turn your educational dreams into tangible realities. With personalized support and expert guidance, we navigate the complexities of immigration and education systems, ensuring a seamless transition to your chosen destination. From selecting the perfect academic program to assisting with visa applications and settling into your new environment, we're here every step of the way. Let us be your partner in transforming aspirations into achievements, making your educational journey unforgettable and fulfilling.
                     </p>
                     <p class="wptb-item--description-comp">
                      Embodies our commitment to turning your educational aspirations into tangible achievements. With personalized guidance and comprehensive support, we empower you to navigate the intricacies of immigration and education in your chosen country. From selecting the right academic institution to assisting with visa applications and cultural adaptation, we are dedicated to making your dream of studying abroad a reality. Let us be your trusted partner on this transformative journey, ensuring that every step you take brings you closer to realizing your educational dreams.
                     </p>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-6 col-12">
                     <div class="wptb-icon-box1 wow fadeInLeft">
                        <div class="wptb-item--inner flex-start">
                           <div class="wptb-item--icon"><i class="bi bi-globe"></i></div>
                           <div class="wptb-item--holder">
                              <h5 class="wptb-item--title">Checking all Visa
                                 Eligibilities</h5>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6 col-12">
                     <div class="wptb-icon-box1 wow fadeInLeft">
                        <div class="wptb-item--inner flex-start">
                           <div class="wptb-item--icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                           <div class="wptb-item--holder">
                              <h5 class="wptb-item--title">Approved Exam
                                 Facilitation</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="wptb-list1">
                  <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                     <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                     <div class="wptb-item--text">Fastest Visa form processing with expert immigration agents</div>
                  </div>
                  <div class="wptb--item wow skewIn" data-wow-delay="700ms">
                     <div class="wptb-item--icon"><i class="bi bi-check"></i></div>
                     <div class="wptb-item--text">Affiliation with Educational Institutions from over the world</div>
                  </div>
               </div>

               <div class="wptb-item--button">
                  <a href="{{URL::to('/aboutus')}}" class="btn">
                     <span class="btn-wrap">
                        <span class="text-first">Book an Appointment</span>
                        <span class="text-second">Book an Appointment</span>
                     </span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<!-- Why Choose -->
<section class="wptb-why-choose-two pb-0 bg-image" style="background-image: url('{{ asset('assets/img/background/bg-11.jpg') }}');">
   <div class="container">
      <div class="wptb-heading">
         <div class="wptb-item--inner">
            <h6 class="wptb-item--subtitle">
               <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                     <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833" />
                  </svg>
               </span>
               Why Choose Us
            </h6>
            <h1 class="wptb-item--title"> <span>Reasons To Choose Us</span></h1>
         </div>
      </div>

      <div class="row">
         <div class="col-lg-6">
            <div class="wptb-icon-box3 wow fadeInLeft">
               <div class="wptb-item--inner">
                  <div class="wptb-item--icon"><img src="{{asset('assets/img/services/icon-14.png')}}" alt="icon"></div>
                  <div class="wptb-item--holder">
                     <h4 class="wptb-item--title">1) Quality Visa Service</h4>
                     <ul class="point-order">
                        <li><b>Expert Guidance:</b> Leverage our extensive expertise and years of experience in immigration and education consulting.</li>
                        <li><b>Personalized Solutions:</b> Receive tailored services that cater to your specific needs and aspirations.</li>
                        <li><b>High Success Rate:</b> Benefit from our proven track record of successful visa approvals and educational placements.</li>
                        <li><b>Comprehensive Support:</b> Enjoy end-to-end support, from application to settlement, ensuring a smooth journey.</li>
                        <li><b>Transparent Processes:</b> Trust our commitment to transparency and integrity in all our services.</li>
                        <li><b>Timely Responses:</b> Experience efficient handling of your applications with our prompt and proactive approach.</li>
                        <li><b>Exceptional Customer Service:</b> Rely on our dedicated team for continuous support and guidance at every step.</li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="wptb-icon-box3 wow fadeInLeft">
               <div class="wptb-item--inner">
                  <div class="wptb-item--icon"><img src="{{asset('assets/img/services/icon-15.png')}}" alt="icon"></div>
                  <div class="wptb-item--holder">
                     <h4 class="wptb-item--title">2) 100% Satisfaction Guaranteed</h4>
                     <p class="wptb-item--description">we are committed to ensuring your complete satisfaction. Our dedicated team provides expert guidance, personalized solutions, and comprehensive support every step of the way. We pride ourselves on our transparency, efficiency, and exceptional customer service, guaranteeing a seamless and successful experience for all our clients. Your satisfaction is our top priority.</p>
                  </div>
               </div>
            </div>

            <div class="wptb-icon-box3 wow fadeInLeft">
               <div class="wptb-item--inner">
                  <div class="wptb-item--icon"><img src="{{asset('assets/img/services/icon-16.png')}}" alt="icon"></div>
                  <div class="wptb-item--holder">
                     <h4 class="wptb-item--title">3) Expert Support Panel</h4>
                     <p class="wptb-item--description">Our <b>Expert Support Panel</b> at Quality Visa Service comprises seasoned professionals with extensive experience in immigration and education consulting. They provide personalized advice, meticulous guidance, and proactive solutions to ensure your success at every stage of your journey. Trust our experts to make your international dreams a reality.</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6 d-none d-lg-block ">
            <div class="wptb-image-single wow skewIn">
               <div class="wptb-item--inner">
                  <div class="wptb-item--image">
                     <img src="{{asset('assets/img/slider/image-1.png')}}" alt="img">
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
   <div class="wptb-image-single wptb-image-single--two h-100 position-absolute end-0 top-0 bottom-0 d-none d-md-block wow skewIn">
      <div class="wptb-item--inner h-100">
         <div class="wptb-item--image h-100">
            <img src="{{asset('assets/img/flag.jpg')}}" alt="img" class=" h-100">
         </div>
      </div>
   </div>
</section>

<!-- Team Grid -->
<section class="wptb-service-two bg-image-3" style="background-image: url('{{ asset('assets/img/background/bg-9.jpg') }}');">
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
            <h1 class="wptb-item--title"> <span>Get Your Required Services <br>
                  from Our Team</span></h1>
         </div>
      </div>

      <div class="row clearfix">

         <!-- Team Block -->
         @foreach ($teams as $team)
            <div class="col-lg-3 col-md-4 col-sm-6">
               <div class="wptb-team-grid1">
                  <div class="wptb-item--inner">
                     <div class="wptb-item--image">
                        <img src="{{$team->file}}" alt="img" class="teamImage">
                     </div>

                     <div class="wptb-item--holder">
                        <div class="wptb-item--social">
                           <li><a href="{{$team->facebook}}" class="bi bi-facebook"></a></li>
                           <li><a href="{{$team->instagram}}" class="bi bi-instagram"></a></li>
                           <li><a href="{{$team->twitter}}" class="bi bi-twitter-x"></a></li>
                           <li><a href="{{$team->linkdin}}" class="bi bi-linkedin"></a></li>
                        </div>
                        <div class="wptb-item--meta">
                           <h5 class="wptb-item--title"><a href="{{URL::to('/team')}}">{{$team->name}}</a></h5>
                           <p class="wptb-item--position">{{$team->occupation}}</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         @endforeach

      </div>

      <!-- Funfacts -->
      <div class="wptb-funfacts-two less-gap">
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="wptb-counter1 style1 wow skewIn">
                  <div class="wptb-item--inner">
                     <div class="wptb-item--value"><span class="odometer" data-count="23"></span><span class="suffix">K</span></div>
                     <div class="wptb-item--text">Trusted Clients</div>
                  </div>
               </div>
            </div>

            <div class="col-md-3 col-sm-6">
               <div class="wptb-counter1 style1 wow skewIn">
                  <div class="wptb-item--inner">
                     <div class="wptb-item--value"><span class="odometer" data-count="50"></span><span class="suffix">+</span></div>
                     <div class="wptb-item--text">Country Operation</div>
                  </div>
               </div>
            </div>

            <div class="col-md-3 col-sm-6">
               <div class="wptb-counter1 style1 wow skewIn">
                  <div class="wptb-item--inner">
                     <div class="wptb-item--value"><span class="odometer" data-count="15"></span><span class="suffix">K+</span></div>
                     <div class="wptb-item--text">Visa On Process</div>
                  </div>
               </div>
            </div>

            <div class="col-md-3 col-sm-6">
               <div class="wptb-counter1 style1 no-border wow skewIn">
                  <div class="wptb-item--inner">
                     <div class="wptb-item--value"><span class="odometer" data-count="347"></span><span class="suffix">+</span></div>
                     <div class="wptb-item--text">Global Agents</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<!-- Work Process -->
@include('includes.work-process')

<!-- testimonial-section -->
@include('includes.testomonial')
<!-- testimonial-section end -->

@endsection