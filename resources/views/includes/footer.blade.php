<footer class="footer style1" style="background-image: url('assets/img/background/bg-1.jpg');">
  <div class="footer-top">
    <div class="container">
      <div class="footer-upper-contact">
        <div class="row">
          <!-- Left Box -->
          <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
            <div class="logo">
              <a href="{{URL::to('/aboutus')}}" class="light_logo"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
            </div>
          </div>

          <!-- Right Box -->
          <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
            <div class="wptb-icon-box1 wow fadeInLeft">
              <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-buildings"></i></div>
                <div class="wptb-item--holder">
                  <p class="wptb-item--description">222-224, Prime Shoppers,<br>Opp.Safal Square, Vesu Surat.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
            <div class="wptb-icon-box1 wow fadeInLeft">
              <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><a href='tel:%2B919879476666' target='_blank' style="color:#fff;"><i class="bi bi-telephone-fill"></i></a></div>
                <div class="wptb-item--holder">
                  <p class="wptb-item--description"><a href='tel:%2B919879476666' target='_blank' style="color:#fff;">+91 9879476666</a> / <a href='tel:%2B919979865666' target='_blank' style="color:#fff;">+91 9979865666</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
            <div class="social-box">
              <ul>
                <li><a href="https://www.facebook.com/share/ntdTT5Tq7w2E2sWq/?mibextid=qi2Omg-" class="bi bi-facebook"></a></li>
                <li><a href="https://www.instagram.com/seven.countries.education?igsh=dHk4N3hpNmlqdW9m-" class="bi bi-instagram"></a></li>
                <li><a href="https://www.linkedin.com/in/seven-countries-immigration-and-education-pvt-ltd-572a21314/" class="bi bi-linkedin"></a></li>
                <!-- <li><a href="https://www.behance.com/" class="bi bi-twitter"></a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-5 mb-5 mb-xl-0">
          <h3 class="text-two"> We are shaping your dream future</h3>
          <p class="text-two">Indignation and dislike men who are so beguiled and of pleasure of the moment so blinded</p>

          <a href="{{URL::to('/appointments')}}" class="btn mt-4">
            <span class="btn-wrap">
              <span class="text-first">Get Counselling from Experts!</span>
              <span class="text-second">Get Counselling from Experts!</span>
            </span>
          </a>
        </div>

        <div class="col-xl-7">
          <div class="row">
            <div class="col-md-6 col-sm-6 mb-5 mb-md-0">
              <div class="footer-widget footer-links">
                <h5 class="widget-title">Useful Links</h5>
                <div class="footer-nav">
                  <ul>
                    <li class="menu-item"><a href="{{URL::to('/aboutus')}}"><i class="bi bi-circle-fill"></i> About Company</a></li>
                    <li class="menu-item" style="display:none;"><a href="{{URL::to('/case')}}"><i class="bi bi-circle-fill"></i> Case Studies</a></li>
                    <li class="menu-item"><a href="{{URL::to('/appointments')}}"><i class="bi bi-circle-fill"></i> Get Appointment</a></li>
                    <li class="menu-item"><a href="{{URL::to('/work-process')}}"><i class="bi bi-circle-fill"></i> Work Process</a></li>
                    <li class="menu-item"><a href="{{URL::to('/contactus')}}"><i class="bi bi-circle-fill"></i> Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 mb-5 mb-md-0">
              <div class="footer-widget footer-links">
                <h5 class="widget-title">Country List</h5>
                <div class="footer-nav">
                  <ul>
                    <li class="menu-item"><a href="{{URL::to('/country-details')}}"><i class="bi bi-circle-fill"></i> United Kingdom(UK)</a></li>
                    <li class="menu-item"><a href="{{URL::to('/country-details')}}"><i class="bi bi-circle-fill"></i> United States America(USA)</a></li>
                    <li class="menu-item"><a href="{{URL::to('/country-details')}}"><i class="bi bi-circle-fill"></i> Canada</a></li>
                    <li class="menu-item"><a href="{{URL::to('/country-details')}}"><i class="bi bi-circle-fill"></i> Australia</a></li>
                    <li class="menu-item"><a href="{{URL::to('/country-details')}}"><i class="bi bi-circle-fill"></i> New Zealand</a></li>
                    <li class="menu-item"><a href="{{URL::to('/country-details')}}"><i class="bi bi-circle-fill"></i> Germany</a></li>
                    <li class="menu-item"><a href="{{URL::to('/country-details')}}"><i class="bi bi-circle-fill"></i> France</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom Part -->
  <div class="footer-bottom">
    <div class="container">
      <div class="footer-bottom-inner">
        <div class="copyright">
          <p>&copy;Copyright 2024 <a href="{{URL::to('/')}}">Seven Countries</a>. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="totop">
  <a href="#"><i class="bi bi-chevron-up"></i></a>
</div>


<!-- Core JS -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Framework -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- WOW Scroll Effect -->
<script src="{{asset('assets/plugins/wow/wow.min.js')}}"></script>

<!-- Swiper Slider -->
<script src="{{asset('assets/plugins/swiper/swiper-bundle.min.js')}}"></script>

<!-- Odometer Counter -->
<script src="{{asset('assets/plugins/odometer/appear.js')}}"></script>
<script src="{{asset('assets/plugins/odometer/odometer.js')}}"></script>

<!-- Fancybox -->
<script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>

<!-- Flatpickr -->
<script src="{{asset('assets/plugins/flatpickr/flatpickr.min.js')}}"></script>

<!-- Nice Select -->
<script src="{{asset('assets/plugins/nice-select/jquery.nice-select.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

@yield('script')

<!-- Theme Custom JS -->
<script src="{{asset('assets/js/theme.js')}}"></script>