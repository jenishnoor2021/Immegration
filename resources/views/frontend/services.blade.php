@extends('layouts.front')
@section('content')
<!-- page-title -->
<!-- Page Header -->
@include('includes.heroimg')
<div class="container">
   <div class="wptb-item--inner">
      <h2 class="wptb-item--title ">Our Services</h2>
      <div class="wptb-breadcrumb-wrap">
         <ul class="wptb-breadcrumb">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><span>Our Services</span></li>
         </ul>
      </div>
   </div>
</div>
</div>
<!-- page-title end -->

<!-- Our Services -->
<section>
   <div class="container">
      <div class="wptb-heading">
         <div class="wptb-item--inner text-center">
            <h6 class="wptb-item--subtitle">
               <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                     <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833" />
                  </svg>
               </span>
               Our Services
            </h6>
            <h1 class="wptb-item--title"> <span>Choose Your Required Services <br>
                  from our list</span></h1>
         </div>
      </div>

      <div class="wptb-service--inner">
         <div class="row">
            <div class="col-lg-4 col-sm-6">
               <div class="wptb-image-box1 wow fadeInLeft">
                     <div class="wptb-item--inner">
                        <div class="wptb-item--image">
                           <a href="#" class="wptb-item-link"><img src="{{asset('assets/img/services/1.jpg')}}" alt="img"></a>
                        </div>
                        <div class="wptb-item--holder">
                           <div class="wptb-item--icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path>
                                 </svg>
                                 <img src="{{asset('assets/img/services/icon-1.png')}}" alt="icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path>
                                 </svg>
                           </div>
                           <h4 class="wptb-item--title"><a href="{{URL::to('/tourist-visa')}}">Loan Assistance</a></h4>
                           <div class="wptb-line-paper"></div>
                           <h6>Simplifying the Student Loan Process</h6>
                           <p class="wptb-item--description">Studying abroad can be costly, but there are numerous ways to get the financial assistance you need and deserve. We house leading banks under one roof, making it simple for you to obtain easy student loans.</p>
                           <ul class="point-order">
                                 <li>Quick Approval and Disbursement</li>
                                 <li>No Hidden Fees</li>
                                 <li>Adaptability to Individual Needs</li>
                                 <li>Low Interest Rates</li>
                                 <li>Proactive Communication</li>
                                 <li>Loan Options Diversity</li>
                           </ul>
                        </div>
                     </div>
               </div>
            </div>

            <div class="col-lg-4 col-sm-6">
               <div class="wptb-image-box1 active highlight wow fadeInLeft">
                  <div class="wptb-item--inner">
                        <div class="wptb-item--image">
                           <a href="#" class="wptb-item-link"><img src="{{asset('assets/img/services/2.jpg')}}" alt="img"></a>
                        </div>
                        <div class="wptb-item--holder">
                           <div class="wptb-item--icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path>
                              </svg>
                              <img src="{{asset('assets/img/services/icon-2.png')}}" alt="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path>
                              </svg>
                           </div>
                           <h4 class="wptb-item--title"><a href="{{URL::to('/tourist-visa')}}">SOP/ Resume Writing</a></h4>
                           <div class="wptb-line-paper"></div>
                           <h6>Statement of Purpose Review Services</h6>
                           <p class="wptb-item--description">Your Resume or SOP is critical to your career success. Let our team of experts curate and polish your documents to ensure you stand out from the competition and become irresistible to the university of your dreams!</p>
                           <ul class="point-order">
                              <li>
                                    Individualized Approach
                              </li>
                              <li>
                                    Expert resume writers
                              </li>
                              <li>
                                    Proofreading
                              </li>
                              <li>
                                    Suggestions and Insights
                              </li>
                              <li>
                                    Attention to Detail
                              </li>
                              <li>
                                    Ethical Writing Practices
                              </li>
                              <li>
                                    Timeliness
                              </li>
                           </ul>
                        </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-sm-6">
               <div class="wptb-image-box1 wow fadeInLeft">
                  <div class="wptb-item--inner">
                        <div class="wptb-item--image">
                           <a href="#" class="wptb-item-link"><img src="{{asset('assets/img/services/3.jpg')}}" alt="img"></a>
                        </div>
                        <div class="wptb-item--holder">
                           <div class="wptb-item--icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path>
                              </svg>
                              <img src="{{asset('assets/img/services/icon-3.png')}}" alt="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path>
                              </svg>
                           </div>
                           <h4 class="wptb-item--title"><a href="{{URL::to('/tourist-visa')}}">One to One Counselling</a></h4>
                           <div class="wptb-line-paper"></div>
                           <h6>Specialized Support for Educational Decisions</h6>
                           <p class="wptb-item--description">Every student is different, which is why our Counselling services are tailor-made for every student. We work closely with each student to understand their current standing and find the path that resonates best with their ambitions and
                              future goals. </p>
                           <ul class="point-order">
                              <li>Career Counselling
                              </li>
                              <li>Exam-preparation Counselling
                              </li>
                              <li>Visa Counselling
                              </li>
                              <li>Financial Counselling
                              </li>
                              <li>Work Visa Counselling
                              </li>
                              <li>Admission Counselling
                              </li>
                           </ul>
                        </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-sm-6">
               <div class="wptb-image-box1 wow fadeInLeft">
                  <div class="wptb-item--inner">
                        <div class="wptb-item--image">
                           <a href="#" class="wptb-item-link"><img src="{{asset('assets/img/services/10.jpg')}}" alt="img"></a>
                        </div>
                        <div class="wptb-item--holder">
                           <div class="wptb-item--icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path>
                              </svg>
                              <img src="{{asset('assets/img/services/icon-2.png')}}" alt="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path>
                              </svg>
                           </div>
                           <h4 class="wptb-item--title"><a href="{{URL::to('/tourist-visa')}}">Pre-Departure Assistance</a></h4>
                           <div class="wptb-line-paper"></div>
                           <h6>Comprehensive Planning and Support</h6>
                           <p class="wptb-item--description">Embarking on a new journey can be overwhelming, and there’s a lot to take care of. But don’t worry, we’ll share the load with you! </p>
                           <ul class="point-order">
                              <li>Airline Tickets Assistance
                              </li>
                              <li>What to Pack (Documents, custom rules)
                              </li>
                              <li>Currency Conversion Assistance
                              </li>
                              <li>Accommodation
                              </li>
                              <li>Insurance
                              </li>
                              <li>Itenary
                              </li>
                              <li>Costing Assistance
                              </li>
                           </ul>
                        </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-sm-6">
               <div class="wptb-image-box1 wow fadeInLeft">
                  <div class="wptb-item--inner">
                        <div class="wptb-item--image">
                           <a href="#" class="wptb-item-link"><img src="{{asset('assets/img/services/11.jpg')}}" alt="img"></a>
                        </div>
                        <div class="wptb-item--holder">
                           <div class="wptb-item--icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path>
                              </svg>
                              <img src="{{asset('assets/img/services/icon-1.png')}}" alt="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path>
                              </svg>
                           </div>
                           <h4 class="wptb-item--title"><a href="{{URL::to('/tourist-visa')}}">Post-Landing Services</a></h4>
                           <div class="wptb-line-paper"></div>
                           <h6>Comprehensive Arrival and Settlement Assistance</h6>
                           <p class="wptb-item--description">We’ll make sure you feel welcome in the new environment until it starts to feel like home. Here’s how we do that: </p>
                           <ul class="point-order">
                              <li>Airport Pickup
                              </li>
                              <li>Accommodation Assistance
                              </li>
                              <li>Grocery pack
                              </li>
                              <li>SIM, Public transport card, Bank Account, etc
                              </li>
                              <li>Welcome deals (Restaurants, Gym, Entertainment)
                              </li>
                           </ul>
                        </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-sm-6">
               <div class="wptb-image-box1 wow fadeInLeft">
                  <div class="wptb-item--inner">
                        <div class="wptb-item--image">
                           <a href="#" class="wptb-item-link"><img src="{{asset('assets/img/services/12.jpg')}}" alt="img"></a>
                        </div>
                        <div class="wptb-item--holder">
                           <div class="wptb-item--icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M0 9C6 9 8.5 3 9 0V9H0Z"></path>
                              </svg>
                              <img src="{{asset('assets/img/services/icon-3.png')}}" alt="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                    <path d="M9 9C3 9 0.5 3 0 0V9H9Z"></path>
                              </svg>
                           </div>
                           <h4 class="wptb-item--title"><a href="{{URL::to('/tourist-visa')}}">Scholarships</a></h4>
                           <div class="wptb-line-paper"></div>
                           <h6>Exploring Global Scholarship Programs</h6>
                           <p class="wptb-item--description">There are so many scholarships for international students. Our team stays up to date with scholarship opportunities all over the world so that we can help you get the best value when you opt for a university. </p>
                           <ul class="point-order">
                              <li>500+ universities
                              </li>
                              <li>Merit-Based and Need-Based Opportunities
                              </li>
                              <li>Timely and Transparent
                              </li>
                              <li>Accessible Application Process
                              </li>
                              <li>Financial Counseling Services
                              </li>
                              <li>Global Reach
                              </li>
                           </ul>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Newsletter -->
@include('includes.newsletter')

@endsection