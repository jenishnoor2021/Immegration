<header class="header style2">
  <!-- Top Bar -->
  <div class="header-top">
    <div class="container">
      <div class="d-none d-xl-flex justify-content-between align-items-center flex-wrap">
        <!-- Left Box -->
        <div class="left-box d-flex align-items-center">
          <div class="logo">
            <a href="{{URL::to('/')}}" class="light_logo"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
          </div>
        </div>

        <!-- Right Box -->
        <div class="right-box d-flex align-items-center">
          <div class="wptb-icon-box1 wow fadeInLeft">
            <div class="wptb-item--inner flex-start">
              <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
              <div class="wptb-item--holder">
                <h5 class="wptb-item--title">sevencountries@gmail.com</h5>
                <p class="wptb-item--description">Send Us mail</p>
              </div>
            </div>
          </div>

          <div class="wptb-icon-box1 wow fadeInLeft">
            <div class="wptb-item--inner flex-start">
              <div class="wptb-item--icon"><i class="bi bi-clock"></i></div>
              <div class="wptb-item--holder">
                <h5 class="wptb-item--title">Mon - Fri 8am - 8pm</h5>
                <p class="wptb-item--description">Opening Hour</p>
              </div>
            </div>
          </div>

          <div class="wptb-icon-box1 wow fadeInLeft">
            <div class="wptb-item--inner flex-start">
              <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
              <div class="wptb-item--holder">
                <h5 class="wptb-item--title">336 Utah City Centre</h5>
                <p class="wptb-item--description">Utah City, USA-77</p>
              </div>
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
              <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="{{URL::to('/aboutus')}}">About Us</a></li>
                  <li class="menu-item menu-item-has-children"><a href="#">Country</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="{{URL::to('/country-list')}}">Country List</a></li>
                      <li class="menu-item"><a href="{{URL::to('/country-details')}}">Country Details</a></li>
                    </ul>
                  </li>
                  <li class="menu-item menu-item-has-children"><a href="#">Case Studies</a>
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
              <li class="menu-item menu-item-has-children"><a href="#">Visa</a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="{{URL::to('/visa-list')}}">Visa List</a></li>
                  <li class="menu-item"><a href="{{URL::to('/tourist-visa')}}">Visa Details</a></li>
                </ul>
              </li>
              <li class="menu-item"><a href="{{URL::to('/services')}}">Services</a>
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
              <li><a href="https://www.facebook.com/" class="bi bi-facebook"></a></li>
              <li><a href="https://www.instagram.com/" class="bi bi-instagram"></a></li>
              <li><a href="https://www.twitter.com/" class="bi bi-twitter-x"></a></li>
              <li><a href="https://www.linkedin.com/" class="bi bi-linkedin"></a></li>
              <li><a href="https://www.behance.com/" class="bi bi-behance"></a></li>
            </ul>
          </div>

          <!-- Button Box -->
          <div class="wptb-icon-box1 live-chat bg-gradient-one d-none d-md-block">
            <div class="wptb-item--inner flex-start">
              <div class="wptb-item--icon"><img src="{{asset('assets/img/icon_call.png')}}" alt="img"></div>
              <div class="wptb-item--holder">
                <h5 class="wptb-item--title">Call For Consultation</h5>
                <p class="wptb-item--description">+01 567 114 3312</p>
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

    <p>Seven Countries is a full-service consultation firm with record of winning many successful campaigns. For a growing business firm we provide market research & competitor analysis before a product launch in market.</p>

    <div class="aside_info_inner_box">
      <h5>Contact Info</h5>
      <p><a href="mailto:support@sevencountries.com">support@sevencountries.com</a></p>
      <p><a href="tel:(+987) 654 321 228 14">(+987) 654 321 228 14</a></p>
      <p>28 Street, New York City, USA</p>
    </div>
    <div class="social_sites">
      <ul class="d-flex align-items-center justify-content-center">
        <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
        <li><a href="https://www.twitter.com/"><i class="bi bi-twitter-x"></i></a></li>
        <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
        <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>