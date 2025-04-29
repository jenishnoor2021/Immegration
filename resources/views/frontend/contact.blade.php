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
                           <a href="mailto:immgway.care@email.com">immgway.care@email.com</a> <br>
                           <a href="mailto:info.sevencountries@email.com">info.sevencountries@email.com</a>
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
                           <a href="tel:+98765432122811">(+987) 654 321 228 11</a> <br>
                           <a href="tel:+98765432122814">(+987) 654 321 228 14</a>
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
                        <p class="wptb-item--description"> 28 Street, New York City <br>
                           Untes States of America</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="wptb-contact-form-one">
         <div class="wptb-form--wrapper">
            <div class="row">
               <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
                  <form method="post" action="/contactstore" id="contact_form" name="contact_form" class="wptb-form">
                     @csrf
                     <div class="wptb-form--inner">
                        <div class="wptb-heading">
                           <div class="wptb-item--inner text-center">
                              <h2 class="wptb-item--title"> <span>Drop Us A line</span></h2>
                              <p class="wptb-item--description"> Seven Countries Visa Agency will help you to solve your problem</p>
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
                                 <input type="text" name="fname" class="form-control" placeholder="Subject" required>
                              </div>
                           </div>

                           <div class="col-md-12 col-lg-12 mb-4">
                              <div class="form-group">
                                 <textarea name="fdetail" class="form-control" placeholder="Text" required></textarea>
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