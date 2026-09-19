<header class="site-header pbmit-header-style-2" id="masthead">
  <div class="pbmit-sticky-header pbmit-header-sticky-yes pbmit-bg-color-white pbmit-sticky-header-mobile-yes"></div>
  <div class="pbmit-pre-header-wrapper pbmit-bg-color-global pbmit-blackish-color">
    <div class="container-fluid">
      <div class="d-flex justify-content-between">
        <div class="pbmit-pre-header-left">
          <ul class="pbmit-contact-info">
            <li>
              <i class="pbmit-base-icon-email"></i>
              <a href="mailto:sevencountryoperation@gmail.com">
                <span class="">sevencountryoperation@gmail.com</span>
              </a>
            </li>
            <li>
              <i class=" pbmit-base-icon-marker"></i>222-224, Prime Shoppers, Opp. Safal Square, Vesu, Surat, Gujarat.
            </li>
          </ul>
        </div>
        <div class="pbmit-pre-header-right">
          <ul class="pbmit-social-links">
            <li class="pbmit-social-li pbmit-social-facebook">
              <a title="Facebook" href="https://www.facebook.com/share/1Hm17pTwW6/" target="_blank">
                <span><i class="pbmit-base-icon-facebook-f"></i></span>
              </a>
            </li>
            <li class="pbmit-social-li pbmit-social-instagram">
              <a title="Instagram" href="https://www.instagram.com/studyabroad_with_sevencountry/" target="_blank">
                <span><i class="pbmit-base-icon-instagram"></i></span>
              </a>
            </li>
            <li class="pbmit-social-li pbmit-social-linkedin">
              <a title="LinkedIn" href="https://www.linkedin.com/company/seven-countries-immigiration-and-education-private-limited/" target="_blank">
                <span><i class="pbmit-base-icon-linkedin-in"></i></span>
              </a>
            </li>
            <li class="pbmit-social-li pbmit-social-whatsapp">
              <a title="Whatsapp" href="https://api.whatsapp.com/send?phone=919879476666&text=Welcome to seven countries immigration and education pvt. ltd." target="_blank">
                <span><i class="pbmit-base-icon-whatsapp"></i></span>
              </a>
            </li>
            <li class="pbmit-social-li pbmit-social-youtube">
              <a title="Whatsapp" href="https://youtube.com/@sevencountriesimmigration?si=c0VIbfTqYZBvmzi3" target="_blank">
                <span><i class="fa fa-youtube"></i></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="pbmit-header-overlay">
    <div class="pbmit-main-header-area pbmit-header-wrapper pbmit-bg-color-white">
      <div class="container-fluid">
        <div class="pbmit-header-content d-flex justify-content-between align-items-center">
          <div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
            <div class="site-branding">
              <h1 class="site-title">
                <a href="{{ URL::to('/') }}">
                  <img class="pbmit-main-logo" src="{{ asset('website-static/images/logo.png') }}" alt="Seven Countries Visa" />
                  <img class="pbmit-sticky-logo" src="{{ asset('website-static/images/logo-sticky.png') }}" alt="Seven Countries Visa" />
                </a>
              </h1>
            </div>
            <div class="pbmit-menuarea">
              <div class="site-navigation">
                <nav class="main-navigation pbmit-navbar main-menu navbar-expand-xl navbar-light" id="site-navigation">
                  <div>
                    <ul class="navigation clearfix" id="pbmit-top-menu">
                      <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ URL::to('/') }}">Home</a>
                      </li>
                      <li class="dropdown {{ request()->is('about-us', 'chairman-message', 'admin-message', 'team') ? 'active' : '' }}">
                        <a href="#">About</a>
                        <ul class="sub-menu">
                          <li class="{{ request()->is('about-us') ? 'active' : '' }}"><a href="{{ URL::to('/about-us') }}">About Us</a></li>
                          <li class="{{ request()->is('chairman-message') ? 'active' : '' }}"><a href="{{ URL::to('/chairman-message') }}">Leadership Perspective</a></li>
                          <li class="{{ request()->is('admin-message') ? 'active' : '' }}"><a href="{{ URL::to('/admin-message') }}">From The Admin Desk</a></li>
                          <li class="{{ request()->is('team') ? 'active' : '' }}"><a href="{{ URL::to('/team') }}">Our Team</a></li>
                        </ul>
                      </li>
                      <li class="dropdown {{ request()->is('uk', 'usa', 'canada', 'germany', 'australia', 'new-zealand', 'europe') ? 'active' : '' }}">
                        <a href="#">Countries</a>
                        <ul class="sub-menu">
                          <li class="{{ request()->is('uk') ? 'active' : '' }}"><a href="{{ URL::to('/uk') }}">UK (United Kingdom)</a></li>
                          <li class="{{ request()->is('usa') ? 'active' : '' }}"><a href="{{ URL::to('/usa') }}">USA (United States of America)</a></li>
                          <li class="{{ request()->is('canada') ? 'active' : '' }}"><a href="{{ URL::to('/canada') }}">Canada</a></li>
                          <li class="{{ request()->is('germany') ? 'active' : '' }}"><a href="{{ URL::to('/germany') }}">Germany</a></li>
                          <li class="{{ request()->is('australia') ? 'active' : '' }}"><a href="{{ URL::to('/australia') }}">Australia</a></li>
                          <li class="{{ request()->is('new-zealand') ? 'active' : '' }}"><a href="{{ URL::to('/new-zealand') }}">New Zealand</a></li>
                          <li class="{{ request()->is('europe') ? 'active' : '' }}"><a href="{{ URL::to('/europe') }}">Europe</a></li>
                        </ul>
                      </li>
                      <li class="{{ request()->is('visa-list') ? 'active' : '' }}">
                        <a href="{{ URL::to('/visa-list') }}">Visa</a>
                      </li>
                      <li class="{{ request()->is('coaching') ? 'active' : '' }}">
                        <a href="{{ URL::to('/coaching') }}">Coaching</a>
                      </li>
                      <li class="{{ request()->is('contact-us') ? 'active' : '' }}">
                        <a href="{{ URL::to('/contact-us') }}">Contact Us</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <div class="pbmit-right-box d-flex align-items-center">
            <div class="pbmit-button-box">
              <div class="pbmit-header-button">
                <a href="tel:+91-9879476666">
                  <span class="pbmit-header-button-text-1 d-none">Call us Now</span>
                  <span class="pbmit-header-button-text-2">+91 98794 76666</span>
                </a>
              </div>
            </div>
            <div class="pbmit-header-button2">
              <a class="pbmit-btn" href="{{ URL::to('/appointment') }}">
                <div class="pbmit-button-content-wrapper">
                  <span class="pbmit-button-text">Get Appointment</span>
                  <span class="pbmit-button-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="24" viewBox="0 0 24 24" width="24">
                      <path d="m17.9547 7.05228v8.48532c0 .1318-.026.2624-.0764.3842-.0505.1218-.1245.2325-.2177.3258-.0932.0932-.2039.1672-.3258.2176-.1218.0505-.2523.0764-.3842.0764s-.2624-.0259-.3843-.0764c-.1218-.0504-.2325-.1244-.3257-.2176-.0932-.0933-.1672-.204-.2177-.3258-.0504-.1218-.0764-.2524-.0764-.3842l.0071-6.07409-8.19539 8.19539c-.18754.1875-.44189.2929-.70711.2929-.26521 0-.51957-.1054-.7071-.2929-.18754-.1876-.29289-.4419-.29289-.7071s.10535-.5196.29289-.7071l8.1954-8.1954-6.07408.00707c-.2663 0-.5217-.10579-.71-.29409-.18831-.18831-.29409-.4437-.29409-.71s.10578-.5217.29409-.71c.1883-.18831.4437-.29409.71-.29409h8.48528c.132-.00055.2628.02506.3849.07532.1221.05027.233.12421.3263.21756.0934.09335.1673.20425.2176.32632.0502.12206.0758.25288.0753.38489z" fill="rgb(0,0,0)"></path>
                    </svg>
                  </span>
                </div>
              </a>
            </div>
            <div class="pbmit-burger-menu-wrapper">
              <div class="pbmit-mobile-menu-bg"></div>
              <button id="menu-toggle" class="nav-menu-toggle">
                <i class="pbmit-base-icon-menu-1"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>