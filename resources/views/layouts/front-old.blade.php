<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

   <title>BPG</title>

   <!-- Fav Icon -->
   <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/apple-touch-icon.png')}}">
   <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon-32x32.png')}}">
   <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon-16x16.png')}}">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,800;0,9..144,900;1,9..144,300;1,9..144,400;1,9..144,500;1,9..144,600;1,9..144,700;1,9..144,800;1,9..144,900&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

   <!-- Stylesheets -->
   <link href="{{asset('assets/css/font-awesome-all.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/owl.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/elpath.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
   <link href="{{asset('assets/css/switcher-style.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/rtl.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/page-title.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/banner.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/order-service.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/feature.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/about.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/working.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/materials.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/faq.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/team.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/cta.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/news.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/project.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/clients.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/module-css/testimonial.css')}}" rel="stylesheet">

</head>

<body>
   <div class="boxed_wrapper ltr">

      <!-- preloader -->
      <div class="loader-wrap">
         <div class="preloader">
            <div class="preloader-close">close</div>
            <div id="handle-preloader" class="handle-preloader">
               <div class="animation-preloader">
                  <div class="spinner"></div>
                  <div class="txt-loading">
                     <span data-text-preloader="B" class="letters-loading">
                        B
                     </span>
                     <span data-text-preloader="P" class="letters-loading">
                        P
                     </span>
                     <span data-text-preloader="G" class="letters-loading">
                        G
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- preloader end -->

      <!-- page-direction -->
      <div class="page_direction">
         <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
         <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
      </div>
      <!-- page-direction end -->


      <!-- switcher menu -->
      <div class="switcher">
         <div class="switch_btn">
            <button><i class="fas fa-palette"></i></button>
         </div>
         <div class="switch_menu">
            <!-- color changer -->
            <div class="switcher_container">
               <ul id="styleOptions" title="switch styling">
                  <li>
                     <a href="javascript: void(0)" data-theme="theme-color" class="theme-color"></a>
                  </li>
                  <li>
                     <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                  </li>
                  <li>
                     <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                  </li>
                  <li>
                     <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                  </li>
                  <li>
                     <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- end switcher menu -->

      <!--Search Popup-->
      <div id="search-popup" class="search-popup">
         <div class="popup-inner">
            <div class="upper-box clearfix">
               <figure class="logo-box pull-left"><a href="{{URL::to('/')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""></a></figure>
               <div class="close-search pull-right"><span class="far fa-times"></span></div>
            </div>
            <div class="overlay-layer"></div>
            <div class="auto-container">
               <div class="search-form">
                  {!! Form::open(['method'=>'POST', 'action'=> 'AdminController@searchProduct','files'=>true,'class'=>'form-horizontal']) !!}
                  @csrf
                  <div class="form-group">
                     <fieldset>
                        <input type="text" name="quer" class="form-control" placeholder="Search Product" required>
                        <button type="submit">
                           <i class="far fa-search"></i>
                        </button>
                     </fieldset>
                  </div>
                  {!! Form::close() !!}
               </div>
            </div>
         </div>
      </div>

      <!-- main header -->
      <header class="main-header">
         <!-- header-top -->
         <div class="header-top">
            <div class="top-inner">
               <div class="top-left">
                  <ul class="info-list clearfix">
                     <li><i class="icon-2"></i>Email: <a href="mailto:info@example.com">info@example.com</a></li>
                  </ul>
               </div>
               <div class="top-right">
                  <ul class="social-links clearfix">
                     <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- header-lower -->
         <div class="header-lower">
            <div class="outer-box">
               <div class="logo-box">
                  <figure class="logo"><a href="{{URL::to('/')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""></a></figure>
               </div>
               <div class="menu-area">
                  <!--Mobile Navigation Toggler-->
                  <div class="mobile-nav-toggler">
                     <i class="icon-bar"></i>
                     <i class="icon-bar"></i>
                     <i class="icon-bar"></i>
                  </div>
                  <nav class="main-menu navbar-expand-md navbar-light clearfix">
                     <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                           <li class="{{ (request()->segment(1) == '') ? 'current' : '' }}"><a href="/">Home</a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'aboutus') ? 'current' : '' }}"><a href="/aboutus">About Us</a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'productall') ? 'current' : '' }}"><a href="/productall">Our Products</a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'photogallery') ? 'current' : '' }}"><a href="/photogallery">Gallery</a>
                           </li>
                           <li class="{{ (request()->segment(1) == 'contactus') ? 'current' : '' }}"><a href="/contactus">Contact</a></li>
                        </ul>
                     </div>
                  </nav>
                  <ul class="menu-right-content">
                     <li class="support-box">
                        <i class="icon-4"></i>
                        <a href="tel:2395432170108">(239)-543-217-0108</a>
                     </li>
                     <li class="btn-box">
                        <a href="/contactus" class="theme-btn btn-one"><span>Send Enquiry</span></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>

         <!--sticky Header-->
         <div class="sticky-header">
            <div class="outer-container">
               <div class="outer-box">
                  <div class="logo-box">
                     <figure class="logo"><a href="/"><img src="{{asset('assets/images/logo.png')}}" alt=""></a></figure>
                  </div>
                  <div class="menu-area">
                     <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                     </nav>
                     <ul class="menu-right-content">
                        <li class="support-box">
                           <i class="icon-4"></i>
                           <a href="tel:2395432170108">(239)-543-217-0108</a>
                        </li>
                        <li class="btn-box">
                           <a href="/contactus" class="theme-btn btn-one"><span>Send Enquiry</span></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- main-header end -->

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
         <div class="menu-backdrop"></div>
         <div class="close-btn"><i class="fas fa-times"></i></div>

         <nav class="menu-box">
            <div class="nav-logo"><a href="/"><img src="{{asset('assets/images/logo-2.png')}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
               <h4>Contact Info</h4>
               <ul>
                  <li>Chicago 12, Melborne City, USA</li>
                  <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                  <li><a href="mailto:info@example.com">info@example.com</a></li>
               </ul>
            </div>
            <div class="social-links">
               <ul class="clearfix">
                  <li><a href="https://twitter.com/"><span class="fab fa-twitter"></span></a></li>
                  <li><a href="https://www.facebook.com/"><span class="fab fa-facebook-square"></span></a></li>
                  <li><a href="https://www.pinterest.com/"><span class="fab fa-pinterest-p"></span></a></li>
                  <li><a href="https://www.instagram.com/"><span class="fab fa-instagram"></span></a></li>
                  <li><a href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a></li>
               </ul>
            </div>
         </nav>
      </div><!-- End Mobile Menu -->

      <!-- hometop -->
      @yield('content')

      <!-- main-footer -->
      <footer class="main-footer">
         <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-13.png);"></div>
         <div class="footer-top">
            <div class="auto-container">
               <div class="row clearfix">
                  <div class="col-lg-5 col-md-6 col-sm-12 footer-column">
                     <div class="footer-widget logo-widget mr_60">
                        <figure class="footer-logo"><a href="{{URL::to('/')}}"><img src="{{asset('assets/images/logo-2.png')}}" alt=""></a></figure>
                        <div class="text-box">
                           <p>Lorem ipsum dolor sit amet consectetur diam ultricies leo etiam nibh tristique.</p>
                           <p>odio feugiat vitae libero vestibu viverra elementum luctus.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                     <div class="footer-widget links-widget ml_40">
                        <div class="widget-title">
                           <h3>Links</h3>
                        </div>
                        <div class="widget-content">
                           <ul class="links-list clearfix">
                              <li><a href="/aboutus">About Us</a></li>
                              <li><a href="/productall">Our Products</a></li>
                              <li><a href="/photogallery">Gallery</a></li>
                              <li><a href="/contactus">Contact Us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                     <div class="footer-widget contact-widget">
                        <div class="widget-title">
                           <h3>Get In Touch</h3>
                        </div>
                        <div class="widget-content">
                           <ul class="info-list mb_30 clearfix">
                              <li><i class="icon-3"></i>Add: New Hyde Park, NY 11040</li>
                              <li><i class="icon-2"></i>Email: <a href="mailto:example@info.com">example@info.com</a></li>
                              <li><i class="icon-4"></i>Phone: <a href="tel:3336660000">333 666 0000</a></li>
                           </ul>
                           <ul class="social-links clearfix">
                              <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom centred">
            <div class="auto-container">
               <div class="copyright">
                  <p>Copyright 2023 by <a href="{{URL::to('/')}}">BPG</a> template All Right Reserved.</p>
               </div>
            </div>
         </div>
      </footer>
      <!-- main-footer -->

      <!--Scroll to top-->
      <div class="scroll-to-top">
         <div>
            <div class="scroll-top-inner">
               <div class="scroll-bar">
                  <div class="bar-inner"></div>
               </div>
               <div class="scroll-bar-text">Go To Top</div>
            </div>
         </div>
      </div>
      <!-- Scroll to top end -->

   </div>


   <!-- jequery plugins -->
   <script src="{{asset('assets/js/jquery.js')}}"></script>
   <script src="{{asset('assets/js/bootstrap.min.js')}}s"></script>
   <script src="{{asset('assets/js/owl.js')}}"></script>
   <script src="{{asset('assets/js/wow.js')}}"></script>
   <script src="{{asset('assets/js/validation.js')}}"></script>
   <script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
   <script src="{{asset('assets/js/appear.js')}}"></script>
   <script src="{{asset('assets/js/isotope.js')}}"></script>
   <script src="{{asset('assets/js/parallax-scroll.js')}}s"></script>
   <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
   <script src="{{asset('assets/js/jQuery.style.switcher.min.js')}}"></script>
   <script src="{{asset('assets/js/support.js')}}"></script>
   <script src="{{asset('assets/js/ishi.initialize.js')}}"></script>

   <!-- main-js -->
   <script src="{{asset('assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->

</html>