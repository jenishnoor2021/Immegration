<header class="header style2">
  <!-- Top Bar -->
  <div class="header-top">
    <div class="container">
      <div class="d-none d-xl-flex justify-content-between align-items-center flex-wrap">
        <!-- Left Box -->
        <div class="left-box d-flex align-items-center">
          <div class="logo">
            <a href="{{URL::to('/aboutus')}}" class="light_logo"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
          </div>
        </div>

        <!-- Right Box -->
        <div class="right-box d-flex align-items-center">
          <div class="wptb-icon-box1 wow fadeInLeft">
            <div class="wptb-item--inner flex-start">
                  <div class="wptb-item--icon"><a href="mailto:sevencountriesvisa@gmail.com"><i class="bi bi-envelope"></i></a></div>
                  <div class="wptb-item--holder">
                      <a href="mailto:sevencountriesvisa@gmail.com">
                        <h5 class="wptb-item--title">sevencountriesvisa@gmail.com</h5>
                        <p class="wptb-item--description">Send Us mail</p>
                    </a>
                  </div>
            </div>
          </div>

          <div class="wptb-icon-box1 wow fadeInLeft">
            <div class="wptb-item--inner flex-start">
              <div class="wptb-item--icon"><i class="bi bi-clock"></i></div>
              <div class="wptb-item--holder">
                <h5 class="wptb-item--title">Mon - Sat 10am - 7pm</h5>
                <p class="wptb-item--description">Opening Hour</p>
              </div>
            </div>
          </div>

          <div class="wptb-icon-box1 wow fadeInLeft">
            <div class="wptb-item--inner flex-start">
                  <div class="wptb-item--icon"><a href="https://maps.google.com/maps/dir//Seven+Countries+Immigration+and+Education+Pvt+Ltd+Prime+Shoppers+222-224,+opp.+Safal+Square,+Vesu+Surat,+Gujarat+395007/@21.1477085,72.7660088,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x3be0536223182ce3:0xc3f728e224c80356"><i class="bi bi-geo-alt"></i></a></div>
                <a href="https://maps.google.com/maps/dir//Seven+Countries+Immigration+and+Education+Pvt+Ltd+Prime+Shoppers+222-224,+opp.+Safal+Square,+Vesu+Surat,+Gujarat+395007/@21.1477085,72.7660088,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x3be0536223182ce3:0xc3f728e224c80356">
                    <div class="wptb-item--holder">
                        <h5 class="wptb-item--title">222-224, Prime Shoppers</h5>
                        <p class="wptb-item--description">Opp.Safal Square, Vesu Surat</p>
                    </div>    
                </a>
            </div>
          </div>

          <div class="button-box">
            <a href="{{URL::to('/appointments')}}" class="btn">
              <span class="btn-wrap">
                <span class="text-first">Book Appointment</span>
                <span class="text-second">Book Appointment</span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Lower Bar -->
  <div class="header-inner">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <!-- Left Part -->
        <div class="header_left_part d-flex align-items-center">
          <div class="logo d-xl-none">
            <a href="{{URL::to('/')}}" class="light_logo"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
          </div>

          <div class="mainnav d-none d-xl-block">
            <ul class="main-menu">
              <li class="menu-item"><a href="{{URL::to('/')}}">Home</a>
              </li>
              <li class="menu-item menu-item-has-children"><a href="#">About</a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="{{URL::to('/aboutus')}}">About Us</a></li>
                  <li class="menu-item"><a href="{{URL::to('/page1')}}">Chairman Message</a></li>
                  <li class="menu-item menu-item-has-children" style="display:none;"><a href="#">Case Studies</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="{{URL::to('/case')}}">Case List</a></li>
                      <li class="menu-item"><a href="{{URL::to('/case-details')}}">Case Details</a></li>
                    </ul>
                  </li>
                  <li class="menu-item"><a href="{{URL::to('/team')}}">Our Team</a>
                  </li>
                  <li class="menu-item"><a href="{{URL::to('/appointments')}}">Make Appointment</a></li>
                  <li class="menu-item"><a href="{{URL::to('/work-process')}}">Work Process</a></li>
                </ul>
              </li>
              <li class="menu-item menu-item-has-children"><a href="#">Countries</a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="{{URL::to('/country-list')}}">Country List</a></li>
                  <li class="menu-item"><a href="{{URL::to('/country-details')}}">Country Details</a></li>
                  <li class="menu-item"><a href="{{URL::to('/visa-list')}}">Visa List</a></li>
                  <li class="menu-item"><a href="{{URL::to('/tourist-visa')}}">Visa Details</a></li>
                </ul>
              </li>
              <li class="menu-item"><a href="{{URL::to('/page2')}}">Coaching</a>
              </li>
              <li class="menu-item"><a href="{{URL::to('/contactus')}}">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Right Part -->
        <div class="header_right_part d-flex align-items-center">
          <!-- Social Box -->
          <div class="social-box">
            <ul>
              <li><a href="https://www.facebook.com/share/ntdTT5Tq7w2E2sWq/?mibextid=qi2Omg-" class="bi bi-facebook"></a></li>
              <li><a href="https://www.instagram.com/seven.countries.education?igsh=dHk4N3hpNmlqdW9m-" class="bi bi-instagram"></a></li>
         <!--   <li><a href="https://www.twitter.com/" class="bi bi-twitter"></a></li> -->
              <li><a href="https://www.linkedin.com/in/seven-countries-immigration-and-education-pvt-ltd-572a21314/" class="bi bi-linkedin"></a></li>
            </ul>
          </div>

          <!-- Button Box -->
          <div class="wptb-icon-box1 live-chat bg-gradient-one d-none d-md-block">
            <div class="wptb-item--inner flex-start">
              <div class="wptb-item--icon"><img src="{{asset('assets/img/icon_call.png')}}" alt="img"></div>
              <div class="wptb-item--holder">
                <h5 class="wptb-item--title">Call For Consultation</h5>
                <p class="wptb-item--description">+91 9879476666 / +91 9979865666
</p>
              </div>
            </div>
          </div>

          <button class="aside_open d-xl-none">
            <img src="{{asset('assets/img/icon_grid.png')}}" alt="img">
          </button>

          <button type="button" class="mr_menu_toggle d-xl-none">
            <i class="bi bi-list"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Main Header -->

<!-- Mobile Responsive Menu -->
<div class="mr_menu">
  <button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
  <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
  <div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->
</div>

<div class="aside_info_wrapper">
  <button class="aside_close"><i class="bi bi-x-lg"></i></button>
  <div class="aside_logo">
    <a href="{{URL::to('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
  </div>
  <div class="aside_info_inner">

    <h5>About Us</h5>

    <p>SEVEN COUNTRY EDUCATION PVT LTD is a consulting firm in India, specializing in different aspects of International Education works with educational institutions, Governmental & Non-Governmental organizations in India & Abroad.</p>
    <p>We deal in all categories of immigration be it Student Visa, Tourist Visa, Dependant Visa and all such immigration matters. We understand that immigrating to any of above said countries can offer people a superior quality of life as well as the freedom to pursue personal and professional goals that might not be otherwise available to them in the countries in which they presently reside.</p>

    <div class="aside_info_inner_box">
      <h5>Contact Info</h5>
      <p><a href="mailto:sevencountriesvisa@gmail.com">sevencountriesvisa@gmail.com</a></p>
      <p><a href="tel:+91 9879476666">+91 9879476666</a></p>
      <p>222-224, Prime Shoppers,Opp.Safal Square, Vesu Surat.</p>
    </div>
    <div class="social_sites">
      <ul class="d-flex align-items-center justify-content-center">
        <li><a href="https://www.facebook.com/profile.php?id=61560416890220&mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a></li>
        <li><a href="https://www.twitter.com/"><i class="bi bi-twitter-x"></i></a></li>
        <li><a href="https://www.instagram.com/7.countries.education?igsh=OHdodHJ2a2hlZWF3"><i class="bi bi-instagram"></i></a></li>
        <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>