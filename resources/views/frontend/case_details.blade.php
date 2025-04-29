@extends('layouts.front')
@section('content')
<!-- page-title -->
<!-- Page Header -->
@include('includes.heroimg')
<div class="container">
   <div class="wptb-item--inner">
      <h2 class="wptb-item--title ">Case Details</h2>
      <div class="wptb-breadcrumb-wrap">
         <ul class="wptb-breadcrumb">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li><span>Case Details</span></li>
         </ul>
      </div>
   </div>
</div>
</div>
<!-- page-title end -->

<!-- Details Content -->
<section class="blog-details">
   <div class="container">
      <div class="row">

         <!-- Service Navigation List -->
         <div class="col-lg-4 col-md-5 pe-md-5">
            <div class="sidebar">

               <div class="wptb-project-info1">
                  <h5 class="wptb-item--title">Project Information</h5>
                  <div class="wptb--holder">
                     <div class="wptb--item">
                        <div class="wptb--icon mr-right-20"><i class="bi bi-person-fill"></i></div>
                        <div class="wptb--meta"><label class="pd-right-10">Client Name:</label> <span>Wesley Jonson</span></div>
                     </div>
                     <div class="wptb--item">
                        <div class="wptb--icon mr-right-20"><i class="bi bi-geo-alt-fill"></i></div>
                        <div class="wptb--meta"><label class="pd-right-10">Target Country:</label> <span>Canada</span></div>
                     </div>
                     <div class="wptb--item">
                        <div class="wptb--icon mr-right-20"><i class="bi bi-passport-fill"></i></div>
                        <div class="wptb--meta"><label class="pd-right-10">Visa Type:</label> <span>Student Visa</span></div>
                     </div>
                     <div class="wptb--item">
                        <div class="wptb--icon mr-right-20"><i class="bi bi-calendar-date"></i></div>
                        <div class="wptb--meta"><label class="pd-right-10">Timeline:</label> <span>22 Oct 2023 - 12 Nov 2023</span></div>
                     </div>
                  </div>
               </div>

               <div class="wptb-banner2 mr-top-30">
                  <div class="wptb-banner-inner">
                     <a class="wptb-item--link" href="tel:23456781199"></a>
                     <div class="wptb-item--image">
                        <div class="wptb-item-img-primary " data-wow-delay="ms">
                           <img src="{{asset('assets/img/more/banner.jpg')}}" alt="">
                        </div>
                     </div>

                     <div class="wptb-wrap-content">
                        <div class="wptb-wrap-shape">
                           <svg class="wptb-svg-1" width="422" height="328" viewBox="0 0 422 328" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.287109 240.142C20.2871 205.285 96.63 135.228 242.001 133.856C385.076 132.507 421.433 46.9123 422.001 2.26061V0.14209C422.01 0.837364 422.011 1.54371 422.001 2.26061V327.571H0.287109V240.142Z"></path>
                           </svg>
                           <svg class="wptb-svg-2" width="422" height="329" viewBox="0 0 422 329" xmlns="http://www.w3.org/2000/svg">
                              <path d="M199.142 146.428C96.2852 139.571 23.7137 193.857 0.285156 221.857V328.142H421.999V0.713623C387.714 112.142 327.714 154.999 199.142 146.428Z"></path>
                           </svg>
                        </div>
                        <div class="wptb-content">
                           <div class="wptb-item--title">Visa &amp; Immigration</div>
                           <div class="wptb-item-contact-info">
                              <div class="wptb-item--icon">
                                 <i class="bi bi-telephone-fill"></i>
                              </div>
                              <span class="wptb-item--desc">Need Help? Book Lab Visit</span>
                              <h5 class="wptb-item--number">+234 567 811 99</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>

         <div class="col-lg-8 col-md-7 mt-5 mt-md-0">
            <div class="blog-details-inner">
               <div class="post-content">
                  <div class="post-header mt-0">
                     <h1 class="post-title">Student Visa to Canada</h1>
                  </div>
                  <div class="fulltext">
                     <p> We guide our clients through difficult issues, bringing insight and judgment to each situation. Our innovat ive approaches create original solutions to our clients' most complex domestic & multi juristictional deal s and disputes. By thinking on behalf of our clients every day, we anticipate what they want, provide what they need and build lasting relationships. </p>
                     <h5 class="highlight">Over the last 35 Years we made an impact that is strong & we have long way to go.</h5>
                     <p>These are the concepts that shape our distinctive culture & differentiate us from others. They true the unique spirit of our Firm guide the behaviors that enable us to deliver the promises we make to our clients and our people.</p>

                     <h4 class="widget-title">Service Process</h4>
                     <p>At Immigway our culture comes to life through three core values:</p>
                     <ul class="point-order">
                        <li>We seize opportunities to innovate and grow</li>
                        <li>We are one firm with a shared sense of purpose</li>
                        <li>We care about each other and the world around us</li>
                     </ul>

                     <div class="row">
                        <div class="col-lg-6 col-sm-6">
                           <div class="image-post">
                              <img src="{{asset('assets/img/services/13.jpg')}}" alt="img">
                           </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                           <div class="image-post">
                              <img src="{{asset('assets/img/services/14.jpg')}}" alt="img">
                           </div>
                        </div>
                     </div>

                     <div class="wptb-accordion wptb-accordion2 wow fadeInUp">
                        <div class="wptb--item active">
                           <h6 class="wptb-item-title"><span>Q1. Which is the prerequisites for immigration?</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>Q2. What are the contact address of Immigway?</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>Q3. What IELTS Score required for Canada?</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                           </div>
                        </div>

                        <div class="wptb--item">
                           <h6 class="wptb-item-title"><span>Q4. How much time needed for visa renewal?</span> <i class="plus bi bi-plus"></i> <i class="minus bi bi-dash"></i></h6>
                           <div class="wptb-item--content">
                              Our business consulting programs helps to break the performance of your business down into customers and product groups so you know exactly which customers or product groups are working.
                           </div>
                        </div>
                     </div>

                     <h4 class="widget-title">Service Options</h4>
                     <div class="image-post">
                        <img src="{{asset('assets/img/services/15.jpg')}}" alt="img">
                     </div>
                     <div class="row">
                        <div class="col-lg-6 col-sm-12">
                           <div class="process-step d-flex">
                              <div class="serial">1</div>
                              <div class="process-step-content">
                                 <h5>Documentation List</h5>
                                 <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                              </div>
                           </div>
                           <div class="process-step d-flex">
                              <div class="serial">2</div>
                              <div class="process-step-content">
                                 <h5>IELTS Score</h5>
                                 <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                              </div>
                           </div>
                           <div class="process-step d-flex">
                              <div class="serial">3</div>
                              <div class="process-step-content">
                                 <h5>NOC Collection</h5>
                                 <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                           <div class="process-step d-flex">
                              <div class="serial">4</div>
                              <div class="process-step-content">
                                 <h5>Offer Letters</h5>
                                 <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                              </div>
                           </div>
                           <div class="process-step d-flex">
                              <div class="serial">5</div>
                              <div class="process-step-content">
                                 <h5>CA report Submission</h5>
                                 <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                              </div>
                           </div>
                           <div class="process-step d-flex">
                              <div class="serial">6</div>
                              <div class="process-step-content">
                                 <h5>Study Permit</h5>
                                 <p>These are the concepts that shape our distinctive culture & differentiate us from others.</p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Testimonial -->
                     <h4 class="widget-title">Clients Testimonial</h4>
                     <div class="wptb-testimonial-two">
                        <div class="swiper-container swiper-testimonial2">
                           <!-- swiper slides -->
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="wptb-testimonial2">
                                    <div class="wptb-item--inner">
                                       <img src="{{asset('assets/img/background/bg-12.jpg')}}" alt="img">

                                       <div class="wptb-item--image d-none d-md-block">
                                          <img src="{{asset('assets/img/avatar/client-1.png')}}" alt="img">
                                       </div>

                                       <div class="wptb-item--button wptb-video-btn--two">
                                          <a class="btn--readmore" data-fancybox href="https://www.youtube.com/watch?v=SF4aHwxHtZ0">
                                             <span class="btn-readmore--icon"> <i class="bi bi-play-fill"></i> </span>
                                          </a>
                                       </div>

                                       <div class="wptb-item--holder d-none d-md-block">
                                          <p class="wptb-item--description"> “I am extremely grateful to Immigway Visa Consultancy for making my dream true. The helped me process my visa for Canada. It has accepted in record time. Immigway are amazing so I Highly recommend them.”</p>
                                          <div class="wptb-item--meta">
                                             <div class="wptb-item--meta-left">
                                                <h4 class="wptb-item--title">Noah Garrison</h4>
                                                <h6 class="wptb-item--designation">Student, Thompson River University</h6>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="swiper-slide">
                                 <div class="wptb-testimonial2">
                                    <div class="wptb-item--inner">
                                       <img src="{{asset('assets/img/background/bg-13.jpg')}}" alt="img">

                                       <div class="wptb-item--image d-none d-md-block">
                                          <img src="{{asset('assets/img/avatar/client-1.png')}}" alt="img">
                                       </div>

                                       <div class="wptb-item--button wptb-video-btn--two">
                                          <a class="btn--readmore" data-fancybox href="https://www.youtube.com/watch?v=SF4aHwxHtZ0">
                                             <span class="btn-readmore--icon"> <i class="bi bi-play-fill"></i> </span>
                                          </a>
                                       </div>

                                       <div class="wptb-item--holder d-none d-md-block">
                                          <p class="wptb-item--description"> “I am extremely grateful to Immigway Visa Consultancy for making my dream true. The helped me process my visa for Canada. It has accepted in record time. Immigway are amazing so I Highly recommend them.”</p>
                                          <div class="wptb-item--meta">
                                             <div class="wptb-item--meta-left">
                                                <h4 class="wptb-item--title">Bob Garrison</h4>
                                                <h6 class="wptb-item--designation">Student, San-Fransisco University</h6>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="swiper-slide">
                                 <div class="wptb-testimonial2">
                                    <div class="wptb-item--inner">
                                       <img src="{{asset('assets/img/background/bg-12.jpg')}}" alt="img">

                                       <div class="wptb-item--image d-none d-md-block">
                                          <img src="{{asset('assets/img/avatar/client-1.png')}}" alt="img">
                                       </div>

                                       <div class="wptb-item--button wptb-video-btn--two">
                                          <a class="btn--readmore" data-fancybox href="https://www.youtube.com/watch?v=SF4aHwxHtZ0">
                                             <span class="btn-readmore--icon"> <i class="bi bi-play-fill"></i> </span>
                                          </a>
                                       </div>

                                       <div class="wptb-item--holder d-none d-md-block">
                                          <p class="wptb-item--description"> “I am extremely grateful to Immigway Visa Consultancy for making my dream true. The helped me process my visa for Canada. It has accepted in record time. Immigway are amazing so I Highly recommend them.”</p>
                                          <div class="wptb-item--meta">
                                             <div class="wptb-item--meta-left">
                                                <h4 class="wptb-item--title">Bob Garrison</h4>
                                                <h6 class="wptb-item--designation">Student, San-Fransisco University</h6>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <!-- pagination dots -->
                           <div class="wptb-swiper-dots">
                              <div class="swiper-pagination"></div>
                           </div>
                           <!-- !pagination dots -->
                        </div>
                     </div>

                  </div>
               </div>
            </div>

         </div>

      </div>
   </div>
</section>
<!-- End Details Content -->

@endsection