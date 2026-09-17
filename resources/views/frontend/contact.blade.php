@extends('layouts.front')
@section('content')

<!-- page-title -->
@include('includes.heroimg')
<div class="container">
   <div class="wptb-item--inner">
      <h2 class="wptb-item--title ">Contact Us</h2>
      <div class="wptb-breadcrumb-wrap">
         <ul class="wptb-breadcrumb">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><span>Contact Us</span></li>
         </ul>
      </div>
   </div>
</div>
</div>
<!-- page-title end -->

<!-- Contact Us -->
<section class="wptb-contact-page-wrapper">
   <div class="container">

      @if (\Session::has('alert'))
      <div class="alert alert-success" id="displayhide">
         {!! \Session::get('alert') !!}
         <!-- <button id="hidAlert">X</button> -->
      </div>
      @endif

      <div class="wptb-contact-infos">
      <h2 style="text-align:center;margin-bottom:20px;">Contact Us</h2>
      <p style="text-align:center;margin-bottom:20px;"<b>SEVEN COUNTRIES IMMIGRATION AND EDUCATION</b> is a true leader when it comes to realizing the students’ dream of studying abroad. We owe our organization’s phenomenal growth to the dedication and sincerity of our employees.</p>
         <p style="text-align:center;margin-bottom:20px;">We endeavour to provide an enriching work environment and we understand that only a satisfied employee will put his best foot forward. Thus, <b>SEVEN COUNTRIES IMMIGRATION AND EDUCATION</b> has taken definite steps to ensure that it is ‘Great Place to Work’ in Organization.</p>
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="wptb-image-box1 wow fadeInLeft">
                  <div class="wptb-item--inner">
                     <div class="wptb-item--image">
                        <img src="{{asset('assets/img/more/4.jpg')}}" alt="img">
                     </div>
                     <div class="wptb-item--holder">
                        <div class="wptb-item--icon">
                           <img src="{{asset('assets/img/more/mail.png')}}" alt="icon">
                        </div>
                        <h4 class="wptb-item--title">Send Us Mail</h4>
                        <p class="wptb-item--description">
                           <a href="sevencountriesvisa@gmail.com">sevencountriesvisa@gmail.com</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-6">
               <div class="wptb-image-box1 wow fadeInLeft">
                  <div class="wptb-item--inner">
                     <div class="wptb-item--image">
                        <img src="{{asset('assets/img/more/5.jpg')}}" alt="img">
                     </div>
                     <div class="wptb-item--holder">
                        <div class="wptb-item--icon">
                           <img src="{{asset('assets/img/more/phone.png')}}" alt="icon">
                        </div>
                        <h4 class="wptb-item--title">Call Us Anytime</h4>
                        <p class="wptb-item--description">
                           <a href="tel:+91 9879476666">+91 9879476666 / +91 9979865666</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-6">
               <div class="wptb-image-box1 wow fadeInLeft">
                  <div class="wptb-item--inner">
                     <div class="wptb-item--image">
                        <img src="{{asset('assets/img/more/6.jpg')}}" alt="img">
                     </div>
                     <div class="wptb-item--holder">
                        <div class="wptb-item--icon">
                           <img src="{{asset('assets/img/more/map-pin.png')}}" alt="icon">
                        </div>
                        <h4 class="wptb-item--title">Visit Our Office</h4>
                        <p class="wptb-item--description"> 222-224, Prime Shoppers,<br>
                           Opp.Safal Square, Vesu Surat.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.117832781197!2d72.76343387503498!3d21.147708480531662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0536223182ce3%3A0xc3f728e224c80356!2sSeven%20Countries%20Immigration%20and%20Education%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1738679493985!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <div class="wptb-contact-form-one">
         <div class="wptb-form--wrapper">
            <div class="row">
               <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
                  <form method="post" action="/contactstore" id="contact_form" name="contact_form" class="wptb-form">
                     @csrf
                     <div class="wptb-form--inner">
                        <div class="wptb-heading">
                           <div class="wptb-item--inner text-center">
                              <h2 class="wptb-item--title"> <span>Get in touch with us</span></h2>
                              <p class="wptb-item--description"> Don’t hesitate to contact with us for inquires!</p>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-lg-6 col-md-6 mb-4">
                              <div class="form-group">
                                 <input type="text" name="username" class="form-control" placeholder="Name*" required>
                              </div>
                           </div>

                           <div class="col-lg-6 col-md-6 mb-4">
                              <div class="form-group">
                                 <input type="number" name="phone" class="form-control" placeholder="Phone No" required>
                              </div>
                           </div>

                           <div class="col-lg-6 col-md-6 mb-4">
                              <div class="form-group">
                                 <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                              </div>
                           </div>

                           <div class="col-lg-6 col-md-6 mb-4">
                              <div class="form-group">
                                 <input type="text" name="fname" class="form-control" placeholder="city" required>
                              </div>
                           </div>

                           <div class="col-md-12 col-lg-12 mb-4">
                              <div class="form-group">
                                 <textarea name="fdetail" class="form-control" placeholder="Your Message" required></textarea>
                              </div>
                           </div>

                           <div class="col-md-12 col-lg-12">
                              <div class="wptb-item--button text-center">
                                 <button class="btn" type="submit" id="submitButton">Contact Us</button>
                                 <div class="text-center w-100" id="loadingIcon" style="display: none;">
                                    <i class="fas fa-spinner fa-spin"></i> Sending...
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Newsletter -->
@include('includes.newsletter')

@endsection


@section('script')
<script>
   $(function() {

      $("form[name='contact_form']").validate({
         rules: {
            username: {
               required: true,
            },
            phone: {
               required: true,
            },
            email: {
               required: true,
            },
            fname: {
               required: true,
            },
            fdetail: {
               required: true,
            },
         },
         submitHandler: function(form) {
            form.submit();
         }
      });
   });
   document.getElementById('contact_form').addEventListener('submit', function() {
      document.getElementById('submitButton').style.display = 'none';
      document.getElementById('loadingIcon').style.display = 'block';
   });
</script>
@endsection