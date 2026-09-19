<?php

use App\Models\Testomonial;

$testomonials = Testomonial::where('is_approved', 1)->get();

?>

@extends('layouts.front')
@section('content')

<!-- Slider-->
<div class="sis-hero hero-slider home-page">
   <div class="hero-slider-layout position-relative">
      <div class="hero-swiper">
         <div class="hero-slide sis-hero-video">
            <div class="sis-hero-bg-video">
               <!-- Selfhosted Video Start -->
               <video autoplay="" muted="" loop="" id="myVideo">
                  <source src="{{ asset('website-static/images/seven-countries-immigration.mp4') }}" type="video/mp4">
               </video>
               <!-- Selfhosted Video End -->
            </div>
            <!-- Content Start -->
            <div class="container-fluid">
               <div class="row align-items-end">
                  <div class="col-12 mb-5">
                     <div class="sis-video-play-button sisf-m-play-inner sisf-hero position-relative p-0">
                        <a href="{{ asset('website-static/images/seven-countries-immigration.mp4') }}" class="popup-video bg-white">
                           <span class="sisf-e-colored"><i class="fa fa-play"></i></span>
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-12">

                     <div class="sisf-content-center sis-e-page-inner">
                        <div class="sisf-e-tile">
                           <p class="sisf-primary-text text-end text-white mb-3">Global Destinations</p>
                        </div>
                        <div class="sisf-countries-list-top float-end text-end d-flex align-items-center gap-2 flex-wrap">
                           <!-- Item Start -->
                           <div class="sisf-country-item text-center" data-aos="fade-up" data-aos-delay="100">
                              <div class="sisf-country-image mb-2">
                                 <figure>
                                    <img src="{{ asset('website-static/images/country-1.png') }}" alt="Canada" />
                                 </figure>
                              </div>
                              <div class="sisf-country-content">
                                 <span class="sisf-country-name text-white">Canada</span>
                              </div>
                           </div>
                           <!-- Item Start -->
                           <!-- Item Start -->
                           <div class="sisf-country-item text-center" data-aos="fade-up" data-aos-delay="300">
                              <div class="sisf-country-image mb-2">
                                 <figure>
                                    <img src="{{ asset('website-static/images/country-2.png') }}" alt="Australia" />
                                 </figure>
                              </div>
                              <div class="sisf-country-content">
                                 <span class="sisf-country-name text-white">Australia</span>
                              </div>
                           </div>
                           <!-- Item Start -->
                           <!-- Item Start -->
                           <div class="sisf-country-item text-center" data-aos="fade-up" data-aos-delay="500">
                              <div class="sisf-country-image mb-2">
                                 <figure>
                                    <img src="{{ asset('website-static/images/country-3.png') }}" alt="Germany" />
                                 </figure>
                              </div>
                              <div class="sisf-country-content">
                                 <span class="sisf-country-name text-white">Germany</span>
                              </div>
                           </div>
                           <!-- Item Start -->
                           <!-- Item Start -->
                           <div class="sisf-country-item text-center" data-aos="fade-up" data-aos-delay="700">
                              <div class="sisf-country-image mb-2">
                                 <figure>
                                    <img src="{{ asset('website-static/images/country-4.png') }}" alt="UK" />
                                 </figure>
                              </div>
                              <div class="sisf-country-content">
                                 <span class="sisf-country-name text-white">UK</span>
                              </div>
                           </div>
                           <!-- Item Start -->
                           <!-- Item Start -->
                           <div class="sisf-country-item text-center" data-aos="fade-up" data-aos-delay="900">
                              <div class="sisf-country-image mb-2">
                                 <figure>
                                    <img src="{{ asset('website-static/images/country-5.png') }}" alt="USA" />
                                 </figure>
                              </div>
                              <div class="sisf-country-content">
                                 <span class="sisf-country-name text-white">USA</span>
                              </div>
                           </div>
                           <!-- Item Start -->
                           <!-- Item Start -->
                           <div class="sisf-country-item text-center cnt-newzealand" data-aos="fade-up" data-aos-delay="1000">
                              <div class="sisf-country-image mb-2">
                                 <figure>
                                    <img src="{{ asset('website-static/images/country-6.png') }}" alt="New Zealand" />
                                 </figure>
                              </div>
                              <div class="sisf-country-content">
                                 <span class="sisf-country-name text-white">New Zealand</span>
                              </div>
                           </div>
                           <!-- Item Start -->
                           <!-- Item Start -->
                           <div class="sisf-country-item text-center" data-aos="fade-up" data-aos-delay="1100">
                              <div class="sisf-country-image mb-2">
                                 <figure>
                                    <img src="{{ asset('website-static/images/country-7.png') }}" alt="Europe" />
                                 </figure>
                              </div>
                              <div class="sisf-country-content">
                                 <span class="sisf-country-name text-white">Europe</span>
                              </div>
                           </div>
                           <!-- Item Start -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Content End -->
         </div>
      </div>
   </div>
</div>

<!-- page content -->
<div class="page-content demo-three">

   <!-- Position Relative Start -->
   <div class="position-relative">

      <!-- Marquee Start -->
      <section class="marquee-section">
         <div class="container-fluid pbmit-bg-color-global p-0">
            <div class="swiper-slider marquee">
               <div class="swiper-wrapper">
                  <!-- Slide1 -->
                  <article class="pbmit-marquee-effect-style-1 swiper-slide">
                     <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="Tourist Visa">
                           Tourist Visa
                        </h2>
                     </div>
                  </article>
                  <!-- Slide2 -->
                  <article class="pbmit-marquee-effect-style-1 swiper-slide">
                     <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="Spouse Visa ">
                           Spouse Visa
                        </h2>
                     </div>
                  </article>
                  <!-- Slide3 -->
                  <article class="pbmit-marquee-effect-style-1 swiper-slide">
                     <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="Business visa">
                           Business visa
                        </h2>
                     </div>
                  </article>
                  <!-- Slide4 -->
                  <article class="pbmit-marquee-effect-style-1 swiper-slide">
                     <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="Student Visa">
                           Student Visa
                        </h2>
                     </div>
                  </article>
                  <!-- Slide4 -->
                  <article class="pbmit-marquee-effect-style-1 swiper-slide">
                     <div class="pbmit-tag-wrapper">
                        <h2 class="pbmit-element-title" data-text="Visitor Visa">
                           Visitor Visa
                        </h2>
                     </div>
                  </article>

               </div>
            </div>
         </div>
      </section>
      <!-- Marquee End -->

      <!-- Visa Service Start -->
      <section class="service-section-one portfolio-section-one">
         <div class="container-fluid">
            <div class="pbmit-heading-subheading text-center animation-style2">
               <h4 class="pbmit-subtitle">choose visa</h4>
               <h2 class="pbmit-title">Fast, Reliable Global Visa Help</h2>
            </div>
            <div class="swiper-slider pbmit-element-service-style-2" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-allow-touch="true" data-columns="5" data-margin="20" data-effect="slide">
               <div class="swiper-wrapper">
                  <!-- Slide1 -->
                  <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                     <div class="pbminfotech-post-item">
                        <div class="pbmit-box-content-wrap">
                           <div class="pbmit-featured-img-wrapper">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ asset('website-static/images') }}/homepage-1/service/student-visa.jpg" class="img-fluid" alt="Student Visa" />
                              </div>
                           </div>
                           <div class="pbminfotech-box-content">
                              <div class="pbmit-service-cat">
                                 <a href="/visa-list" rel="tag">Student Visa </a>
                              </div>
                              <h3 class="pbmit-service-title">
                                 <a href="/visa-list">Student Visa</a>
                              </h3>
                              <div class="pbmit-service-description">
                                 <p>Student visa processing at Seven Countries involves profile evaluation, document preparation, and embassy submission.</p>
                              </div>
                              <div class="pbmit-service-icon">
                                 <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                       <g>
                                          <path d="m244.813 281.075-18.613-11.728-26.604 42.222-25.605-16.134c-13.135-8.276-28.706-10.94-43.843-7.498-15.138 3.441-28.028 12.573-36.294 25.714l-66.508 105.723c-11.957 19.009-6.228 44.212 12.773 56.184 0 0 49.938 31.478 50.623 31.873 5.357 3.093 11.214 4.563 16.997 4.563 11.797 0 23.287-6.117 29.598-17.048 7.248-12.553 5.575-27.842-3.025-38.501zm-166.557 179.76c-1.898 3.288-3.174 6.764-3.885 10.296l-22.526-14.187c-8.743-5.509-11.379-17.107-5.877-25.854l66.508-105.724c5.136-8.164 13.144-13.838 22.548-15.976 9.405-2.141 19.079-.483 27.238 4.658l25.605 16.134-72.157 114.516c-5.451-1.308-11.174-1.249-16.742.245-8.801 2.357-16.156 8.001-20.712 15.892zm40.029 23.11c-3.339 5.782-10.76 7.77-16.543 4.433-5.782-3.339-7.771-10.761-4.432-16.543 1.617-2.802 4.229-4.806 7.354-5.643 3.125-.836 6.389-.407 9.189 1.21 5.782 3.339 7.77 10.76 4.432 16.543z" fill="#3cc" />
                                          <path d="m454.688 160.116h-46.898s-26.067-43.067-26.291-43.422c-2.036-3.234-4.324-6.253-6.811-9.066 20.862-8.044 35.709-28.293 35.709-51.956.001-30.697-24.973-55.672-55.671-55.672-30.697 0-55.671 24.975-55.671 55.672 0 11.135 3.299 21.509 8.952 30.219-9.47 2.07-18.516 6.119-26.526 12.063l-35.588 26.415c-13.421 9.962-22.579 24.482-25.787 40.886l-15.306 78.261c-1.857 9.495.095 19.145 5.498 27.17 5.402 8.026 13.606 13.468 23.101 15.321 2.334.456 4.658.676 6.952.675 2.027 0 4.024-.189 5.984-.521l-44.276 179.187c-2.794 11.307-.279 23.051 6.902 32.222 7.18 9.171 17.979 14.431 29.626 14.431 16.56 0 30.996-10.622 35.922-26.431l41.487-133.114 29.515 18.023 17.105 108.736c2.987 18.997 19.113 32.785 38.344 32.785 11.123 0 21.726-4.781 29.09-13.117s10.801-19.447 9.43-30.485l-14.635-117.806c-1.665-13.401-7.137-25.951-15.824-36.292l-39.302-46.783 8.311-39.495c7.197 2.949 14.949 4.517 22.785 4.517h53.874c19.967 0 36.211-16.244 36.211-36.211s-16.245-36.212-36.212-36.212zm-99.962-138.116c18.567 0 33.672 15.105 33.672 33.672s-15.105 33.672-33.672 33.672c-18.566 0-33.671-15.105-33.671-33.672s15.105-33.672 33.671-33.672zm-101.222 457.023c-2.046 6.565-8.042 10.977-14.918 10.977-4.837 0-9.322-2.185-12.304-5.993-2.982-3.809-4.026-8.686-2.866-13.382l39.326-159.151c5.731 8.948 13.505 16.708 23.042 22.532l10.853 6.627zm138.672-150.573c5.949 7.082 9.696 15.677 10.836 24.854l14.635 117.806c.603 4.853-.848 9.543-4.085 13.207s-7.713 5.683-12.603 5.683c-8.331 0-15.317-5.974-16.612-14.203l-17.896-113.764c-.501-3.189-2.378-5.997-5.133-7.679l-64.07-39.124c-17.052-10.414-26.018-29.736-23.279-49.198l.336-1.361 77.591 15.832zm-23.028-165.056-19.809 94.134-70.663-14.417 11.25-57.493 31.066-17.604c5.285-2.995 7.142-9.708 4.147-14.993-2.996-5.286-9.708-7.145-14.994-4.147l-35.467 20.098c-2.793 1.583-4.755 4.308-5.372 7.458l-15.021 76.767c-1.503 7.688-8.977 12.723-16.67 11.22-3.727-.728-6.946-2.863-9.066-6.014-2.12-3.149-2.886-6.937-2.158-10.663l15.306-78.261c2.153-11.01 8.301-20.757 17.309-27.443l35.587-26.414c8.258-6.13 18.121-9.338 28.172-9.338 3.759 0 7.547.449 11.284 1.362 12.791 3.125 23.639 12.086 29.918 22.477 5.122 9.502 7.591 21.818 5.181 33.271zm85.54 47.144h-53.874c-6.338 0-12.594-1.612-18.136-4.61l6.997-33.252 2.501 4.134c1.992 3.294 5.562 5.307 9.412 5.307h53.1c7.836 0 14.211 6.375 14.211 14.211s-6.375 14.21-14.211 14.21z" />
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <div class="pbmit-service-btn-wrapper">
                              <a class="pbmit-service-btn" href="/student-visa" title="Student Visa">
                                 <span class="pbmit-button-icon-wrapper">
                                    <span class="pbmit-button-icon">
                                       <i class="pbmit-base-icon-up-right-arrow"></i>
                                    </span>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </article>
                  <!-- Slide2 -->
                  <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                     <div class="pbminfotech-post-item">
                        <div class="pbmit-box-content-wrap">
                           <div class="pbmit-featured-img-wrapper">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ asset('website-static/images') }}/homepage-1/service/visitor-visa.jpg" class="img-fluid" alt="Visitor Visa" />
                              </div>
                           </div>
                           <div class="pbminfotech-box-content">
                              <div class="pbmit-service-cat">
                                 <a href="/visa-list" rel="tag">Visitor Visa</a>
                              </div>
                              <h3 class="pbmit-service-title">
                                 <a href="/visa-list">Visitor Visa</a>
                              </h3>
                              <div class="pbmit-service-description">
                                 <p>Seven Countries Immigration & Education provides expert visitor and tourist visa processing services to help clients travel globally for family visits, vacations, or short business trip.</p>
                              </div>
                              <div class="pbmit-service-icon">
                                 <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                       <g>
                                          <path d="m501 106.196h-133.409v-54.926c0-6.075-4.925-11-11-11h-201.198c-6.075 0-11 4.925-11 11v54.926h-133.393c-6.075 0-11 4.925-11 11v111.938c0 5.558 4.146 10.243 9.663 10.918l12.338 1.511v219.167c0 6.075 4.925 11 11 11h445.998c6.075 0 11-4.925 11-11v-219.167l12.338-1.511c5.517-.676 9.663-5.36 9.663-10.918v-111.938c0-6.075-4.925-11-11-11zm-334.607-43.926h179.198v43.926h-179.198zm-122.392 387.46v-22.002h423.998v22.002zm445.999-230.332-67.857 8.31c-6.03.738 2.22 21.893 2.674 21.837l43.183-5.288v161.471h-423.999v-161.47l43.182 5.288c6.026.735 8.704-21.099 2.674-21.837l-67.857-8.311v-91.203h468z"></path>
                                          <path d="m150.826 235.174c-6.03-.744-8.704 21.099-2.674 21.837l106.511 13.043c.444.054.891.082 1.337.082s.893-.027 1.337-.082l106.511-13.043c6.03-.738 3.365-22.582-2.674-21.837l-105.174 12.88z"></path>
                                       </g>
                                       <g fill="#3cc">
                                          <path d="m149.489 193.87h-60.968c-6.075 0-11 4.925-11 11v71.984c0 6.075 4.925 11 11 11h60.969c6.075 0 11-4.925 11-11v-71.984c-.001-6.075-4.926-11-11.001-11zm-11 71.984h-38.968v-49.984h38.969v49.984z"></path>
                                          <path d="m423.479 193.87h-60.969c-6.075 0-11 4.925-11 11v71.984c0 6.075 4.925 11 11 11h60.969c6.075 0 11-4.925 11-11v-71.984c0-6.075-4.924-11-11-11zm-11 71.984h-38.969v-49.984h38.969z"></path>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <div class="pbmit-service-btn-wrapper">
                              <a class="pbmit-service-btn" href="/visitor-visa" title="Visitor Visa">
                                 <span class="pbmit-button-icon-wrapper">
                                    <span class="pbmit-button-icon">
                                       <i class="pbmit-base-icon-up-right-arrow"></i>
                                    </span>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </article>
                  <!-- Slide3 -->
                  <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                     <div class="pbminfotech-post-item">
                        <div class="pbmit-box-content-wrap">
                           <div class="pbmit-featured-img-wrapper">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ asset('website-static/images') }}/homepage-1/service/business-visa.jpg" class="img-fluid" alt="Business Visa" />
                              </div>
                           </div>
                           <div class="pbminfotech-box-content">
                              <div class="pbmit-service-cat">
                                 <a href="/visa-list" rel="tag">Business Visa</a>
                              </div>
                              <h3 class="pbmit-service-title">
                                 <a href="/visa-list">Business Visa</a>
                              </h3>
                              <div class="pbmit-service-description">
                                 <p>Take your enterprise global with Seven Countries. We handle end-to-end business visa processing—from precise documentation and invitation checks to embassy appointment scheduling.</p>
                              </div>
                              <div class="pbmit-service-icon">
                                 <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                       <g>
                                          <path d="m222.138 238.458c-3.57 4.915-2.481 11.794 2.434 15.365 9.131 6.634 19.831 9.95 30.53 9.95 10.7 0 21.4-3.317 30.53-9.951 4.915-3.571 6.004-10.45 2.434-15.365-3.572-4.915-10.451-6.003-15.365-2.433-10.524 7.647-24.671 7.648-35.197 0-4.917-3.571-11.795-2.482-15.366 2.434z"></path>
                                          <path d="m451.822 498.925-17.98-93.619c-3.648-18.99-16.369-34.808-33.576-42.668 10.854-31.64 8.786-66.488-5.964-96.721l-13.632-27.939c9.882-8.387 16.171-20.885 16.171-34.832 0-20.546-13.635-37.963-32.329-43.689.973-9.642-.39-19.485-4.046-28.508l-2.207-5.448c-2.281-5.631-8.694-8.347-14.325-6.065-5.631 2.281-8.347 8.695-6.065 14.325l2.207 5.449c2.34 5.775 3.198 12.083 2.536 18.251h-5.847c-24.222-2.399-45.918-15.333-59.542-35.504-3.399-5.035-10.238-6.359-15.271-2.959-5.035 3.4-6.359 10.238-2.96 15.272 15.519 22.977 39.284 38.56 66.222 43.724v50.302c0 38.628-31.427 70.055-70.056 70.055-18.736 0-36.345-7.303-49.581-20.563s-20.508-30.882-20.474-49.621l.079-50.162c26.96-5.146 50.738-20.722 66.283-43.737 3.4-5.034 2.076-11.872-2.958-15.272-5.036-3.401-11.873-2.076-15.272 2.959-13.649 20.207-35.358 33.128-59.614 35.506h-4.52c-.681-6.177.17-12.4 2.541-18.251l2.823-6.969c2.281-5.63-.435-12.044-6.065-14.325s-12.044.435-14.325 6.065l-2.823 6.969c-3.65 9.011-5.03 18.579-4.109 28.096-19.434 5.253-33.778 23.03-33.778 44.101 0 14.53 6.826 27.486 17.43 35.86l-13.13 26.911c-14.754 30.237-16.82 65.091-5.961 96.735-17.191 7.865-29.9 23.676-33.545 42.655l-17.98 93.618c-.619 3.222.233 6.552 2.322 9.081 2.09 2.529 5.199 3.994 8.48 3.994h370.039c3.281 0 6.391-1.464 8.48-3.994s2.941-5.86 2.322-9.082zm-76.981-295.779c0 13.06-10.625 23.685-23.686 23.685h-3.943v-47.371h3.943c13.061 0 23.686 10.626 23.686 23.686zm-29.941 45.685h6.255c3.367 0 6.647-.377 9.809-1.072l13.566 27.804c12.333 25.28 13.938 54.465 4.607 80.858l-13.752-3.319c.267-1.705.137-3.472-.422-5.159-1.137-3.431-3.887-6.085-7.356-7.099l-45.899-13.411-3.972-23.622c18.456-12.887 31.99-32.357 37.164-54.98zm-88.9 163.264-17.832-17.434 17.832-13.738 17.832 13.739zm-47.869-64.031 29.066 19.572-33.945 26.152-27.396-36.295zm66.672 19.573 29.066-19.572 32.274 9.43-27.396 36.295zm12.435-53.057 2.743 16.314-33.981 22.881-34.033-22.916 2.514-15.728c9.723 3.427 20.06 5.22 30.676 5.22 11.278 0 22.086-2.043 32.081-5.771zm-128.189-135.12h4.129l-.074 47.371h-4.055c-13.061 0-23.686-10.625-23.686-23.685s10.625-23.686 23.686-23.686zm-21.613 96.104 13.41-27.485c2.664.485 5.402.752 8.204.752h6.365c3.791 16.714 12.184 32.068 24.592 44.499 4.289 4.297 8.93 8.112 13.854 11.43l-3.626 22.692-45.839 13.393c-3.47 1.014-6.22 3.667-7.356 7.099-.559 1.686-.688 3.454-.422 5.158l-13.785 3.327c-9.338-26.394-7.733-55.583 4.603-80.865zm-37.672 133.893c2.742-14.278 13.646-25.708 27.779-29.119l32.137-7.757 32.705 43.329c3.493 4.819 10.839 5.815 15.493 2.087l12.688-9.776 24.434 23.887v57.892h-97.083v-32.329c0-6.075-4.925-11-11-11s-11 4.925-11 11v32.329h-41.623zm286.809 80.543v-32.329c0-6.075-4.925-11-11-11s-11 4.925-11 11v32.329h-97.573v-57.892l24.433-23.887 12.688 9.776c4.655 3.728 12 2.732 15.493-2.087l32.705-43.329 32.137 7.757c14.133 3.412 25.037 14.841 27.779 29.119l15.471 80.543z"></path>
                                       </g>
                                       <path d="m413.024 54.221c-.569-6.73-5.141-12.25-11.646-14.063l-142.577-39.754c-1.932-.539-3.977-.539-5.908 0l-142.534 39.741c-6.514 1.815-11.085 7.343-11.647 14.081-.562 6.739 3.03 12.948 9.153 15.818l31.861 14.938v41.766c0 6.075 4.925 11 11 11h210.53c6.075 0 11-4.925 11-11v-41.783l18.825-8.877v26.281c0 6.075 4.925 11 11 11s11-4.925 11-11c-.065-2.477.123-45.474-.057-48.148zm-62.767 61.527h-188.53v-26.758h188.53zm8.537-48.758h-205.616l-21.327-9.999 123.996-34.572 124.093 34.599z" fill="#3cc"></path>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <div class="pbmit-service-btn-wrapper">
                              <a class="pbmit-service-btn" href="/business-visa" title="Business Visa">
                                 <span class="pbmit-button-icon-wrapper">
                                    <span class="pbmit-button-icon">
                                       <i class="pbmit-base-icon-up-right-arrow"></i>
                                    </span>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </article>
                  <!-- Slide4 -->
                  <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                     <div class="pbminfotech-post-item">
                        <div class="pbmit-box-content-wrap">
                           <div class="pbmit-featured-img-wrapper">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ asset('website-static/images') }}/homepage-1/service/tourist.jpg" class="img-fluid" alt="Tourist Visa" />
                              </div>
                           </div>
                           <div class="pbminfotech-box-content">
                              <div class="pbmit-service-cat">
                                 <a href="/visa-list" rel="tag">Tourist Visa</a>
                              </div>
                              <h3 class="pbmit-service-title">
                                 <a href="/visa-list">Tourist Visa</a>
                              </h3>
                              <div class="pbmit-service-description">
                                 <p>Get a fast, smooth tourist visa for your next trip. We help you with forms, papers, and expert tips.</p>
                              </div>
                              <div class="pbmit-service-icon">
                                 <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                       <path d="m402.403 332.392s-29.824-51.658-38.617-66.888c1.509-5.458 2.332-11.197 2.332-17.128-3.523-85.374-125.207-85.398-128.743-.001 0 5.931.823 11.671 2.332 17.129l-38.617 66.886c-1.923 3.331-1.967 7.425-.115 10.796s5.33 5.53 9.172 5.694l28.848 1.23 16.107 23.093c2.062 2.957 5.435 4.707 9.021 4.707 3.918.006 7.573-2.104 9.527-5.5l28.096-48.663c10.626 18.404 28.096 48.663 28.096 48.663 1.955 3.396 5.609 5.505 9.527 5.5 3.586 0 6.959-1.75 9.022-4.707l16.105-23.093 28.848-1.229c3.844-.164 7.321-2.323 9.174-5.694 1.852-3.371 1.808-7.464-.115-10.795zm-100.656-126.388c23.363 0 42.371 19.008 42.371 42.371-2.319 56.196-82.415 56.211-84.743 0 0-23.363 19.009-42.371 42.372-42.371zm-38.498 140.423c-14.771-20.754-8.502-17.479-34.032-18.753l22.461-38.904c8.238 10.191 19.516 17.817 32.444 21.504zm76.995 0s-12.301-21.307-20.872-36.153c12.928-3.687 24.206-11.312 32.444-21.504l22.461 38.904c-25.48 1.284-19.244-2.05-34.033 18.753z" fill="#3cc"></path>
                                       <path d="m424.755 0h-337.51c-31.29 0-56.747 25.456-56.747 56.747v15.249c0 6.075 4.925 11 11 11h80.494v346.008h-80.494c-6.075 0-11 4.925-11 11v15.249c0 31.29 25.457 56.747 56.747 56.747h337.51c31.29 0 56.747-25.457 56.747-56.747v-398.506c0-31.291-25.457-56.747-56.747-56.747zm-337.51 22h292.673c-8.426 10.567-12.626 24.759-11.91 38.996h-315.51c-1.764-20.767 13.601-38.957 34.747-38.996zm0 468c-21.155-.042-36.504-18.224-34.747-38.996h315.51c-.716 14.234 3.485 28.431 11.91 38.996zm302.763-34.747v-15.249c0-6.075-4.925-11-11-11h-235.016c0-54.124 0-291.883 0-346.008h235.016c6.075 0 11-4.925 11-11v-15.249c1.943-46.161 67.611-46.021 69.494 0v398.506c-1.977 46.224-67.64 45.964-69.494 0z"></path>
                                       <g>
                                          <path d="m394.257 145.008h-185.021c-6.075 0-11-4.925-11-11s4.925-11 11-11h185.021c14.539.554 14.636 21.403 0 22z"></path>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <div class="pbmit-service-btn-wrapper">
                              <a class="pbmit-service-btn" href="/tourist-visa" title="Tourist Visa">
                                 <span class="pbmit-button-icon-wrapper">
                                    <span class="pbmit-button-icon">
                                       <i class="pbmit-base-icon-up-right-arrow"></i>
                                    </span>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </article>
                  <!-- Slide5 -->
                  <article class="pbmit-ele-service pbmit-service-style-2 swiper-slide">
                     <div class="pbminfotech-post-item">
                        <div class="pbmit-box-content-wrap">
                           <div class="pbmit-featured-img-wrapper">
                              <div class="pbmit-featured-wrapper">
                                 <img src="{{ asset('website-static/images') }}/homepage-1/service/spouse-visa.jpg" class="img-fluid" alt="Spouse Visa" />
                              </div>
                           </div>
                           <div class="pbminfotech-box-content">
                              <div class="pbmit-service-cat">
                                 <a href="/visa-list" rel="tag">Spouse Visa</a>
                              </div>
                              <h3 class="pbmit-service-title">
                                 <a href="/visa-list">Spouse Visa</a>
                              </h3>
                              <div class="pbmit-service-description">
                                 <p>A spouse visa lets a legally married partner join their husband or wife living, working, or studying abroad.</p>
                              </div>
                              <div class="pbmit-service-icon">
                                 <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                       <g>
                                          <g>
                                             <path d="m54.447 370.428h68.637v22h-68.637z" fill="#3cc"></path>
                                          </g>
                                          <g>
                                             <path d="m354.592 427.222h22.001v61.707h-22.001z" fill="#3cc" transform="matrix(.824 -.566 .566 .824 -195.09 287.412)"></path>
                                          </g>
                                       </g>
                                       <g>
                                          <g>
                                             <path d="m353.831 373.687c-.223 0-.446-.007-.671-.021-10.385-.624-18.325-9.581-17.701-19.966.364-6.064 5.557-10.694 11.641-10.32 5.106.307 9.188 4.05 10.134 8.846 4.647 1.513 7.874 6.014 7.567 11.12-.352 5.84-5.197 10.341-10.97 10.341z" fill="#3cc"></path>
                                          </g>
                                          <g>
                                             <path d="m185.131 194.81c-7.233 0-14.034-2.817-19.149-7.932-4.296-4.295-4.296-11.26 0-15.556 4.295-4.296 11.26-4.296 15.557 0 1.295 1.295 2.807 1.488 3.593 1.488s2.297-.193 3.592-1.488c4.295-4.296 11.26-4.296 15.557 0 4.296 4.295 4.296 11.26 0 15.556-5.116 5.115-11.917 7.932-19.15 7.932z" fill="#3cc"></path>
                                          </g>
                                          <g>
                                             <path d="m340.606 207.908c-5.456 0-10.912-2.077-15.065-6.23-4.296-4.296-4.296-11.261 0-15.557 4.137-4.136 10.746-4.289 15.065-.462 4.32-3.827 10.93-3.673 15.065.462 4.296 4.296 4.296 11.261 0 15.557-4.152 4.153-9.608 6.23-15.065 6.23z" fill="#3cc"></path>
                                          </g>
                                       </g>
                                       <path d="m438.628 281.967c-16.848-18.1-38.936-29.967-63.021-34.044v-3.571c18.451-10.417 31.828-28.791 35.442-50.438 13.518-16.397 20.936-36.963 20.936-58.308 0-31.723-16.17-59.727-40.679-76.175.428-2.668.651-5.366.651-8.081-.001-28.314-23.036-51.35-51.351-51.35s-51.351 23.036-51.351 51.351c0 2.714.223 5.412.651 8.08-8.778 5.891-16.485 13.263-22.764 21.759-1.872-32.947-29.26-59.18-62.667-59.18h-38.692c-34.615 0-62.776 28.162-62.776 62.777v73.028c0 31.977 18.382 59.723 45.123 73.281v4.363c-26.784 2.634-51.618 14.37-70.84 33.688-21.824 21.934-33.844 51.054-33.844 81.997v3.304 42.481 104.071c0 6.075 4.925 11 11 11h403.105c6.075 0 11-4.925 11-11v-142.942c.002-28.337-10.625-55.361-29.923-76.091zm-48.587-99.853c0 27.259-22.176 49.435-49.435 49.435s-49.435-22.176-49.435-49.435v-28.45h98.869v28.45zm-6.352 206.318c-18.032 15.987-45.705 14.321-61.692-3.708-15.985-18.031-14.321-45.705 3.71-61.69 8.062-7.148 18.247-11.003 28.932-11.003.89 0 1.785.027 2.681.081 11.652.701 22.334 5.896 30.078 14.631 15.985 18.029 14.321 45.703-3.709 61.689zm-75.97 73.852c-.497 2.882-.683 5.767-.581 8.619l-6.029 5.345c-18.059 16.012-43.806 18.166-63.952 6.211 6.416-20.136-3.025-42.152-22.498-51.206l-4.051-1.883c1.479-13.398 7.838-25.843 18.022-34.873l53.46-47.396c2.689-2.384 5.575-4.476 8.621-6.264-.823 3.568-1.371 7.224-1.595 10.953-1.053 17.518 4.779 34.396 16.421 47.528 10.553 11.903 24.739 19.415 40.347 21.505l-20.893 14.429c-9.232 6.375-15.366 15.976-17.272 27.032zm-72.312-103.197v-1.029c0-21.539 7.745-42.361 21.808-58.633 12.784-14.792 30.008-24.972 48.927-29.056 2.044 11.656 9.87 21.342 20.407 25.983-5.531 2.631-10.729 6.044-15.438 10.219-2.101 1.863-4.049 3.85-5.872 5.926-14.035 2.412-27.007 8.622-37.745 18.142zm92.199-94.777v-11.967c4.219.779 8.559 1.207 13 1.207s8.781-.428 13-1.207v11.967c0 7.168-5.832 13-13 13s-13-5.832-13-13zm13-242.31c15.326 0 27.938 11.81 29.232 26.807-9.181-3.116-19.013-4.807-29.232-4.807s-20.051 1.691-29.233 4.807c1.294-14.997 13.907-26.807 29.233-26.807zm0 44c38.255 0 69.378 31.225 69.378 69.606 0 .217-.013.433-.015.65-1.997-2.777-5.247-4.592-8.928-4.592h-120.869c-2.917 0-5.715 1.159-7.778 3.222-.427.427-.804.891-1.151 1.375-.002-.219-.015-.436-.015-.655 0-38.381 31.123-69.606 69.378-69.606zm-77.623 117.899c2.157 3.48 4.552 6.826 7.181 10.015 3.615 21.647 16.991 40.021 35.442 50.438v3.716c-9.5 1.678-18.688 4.578-27.356 8.593-16.5-11.815-35.925-19.134-56.119-21.168v-4.396c19.117-9.692 33.945-26.636 40.852-47.198zm-137.975-99.111c0-22.485 18.292-40.777 40.776-40.777h38.692c22.484 0 40.777 18.292 40.777 40.777v25.812c-8.381-2.376-15.805-7.467-21.22-14.744-3.038-4.083-8.481-5.547-13.157-3.543-27.307 11.704-56.142 18.269-85.869 19.566v-27.091zm0 73.028v-23.932c30.018-1.202 59.218-7.321 87.041-18.271 9.053 9.229 20.579 15.286 33.205 17.524v24.678c0 33.152-26.971 60.124-60.123 60.124s-60.123-26.97-60.123-60.123zm75.123 80.726v15.595c0 8.271-6.729 15-15 15s-15-6.729-15-15v-15.595c4.867.902 9.875 1.397 15 1.397s10.133-.494 15-1.397zm-134.684 251.458v-40.7c5.71 5.643 12.369 10.397 19.807 13.952l55.954 26.748zm138.72-1.387c-5.285 2.051-11.015 1.833-16.13-.612l-93.295-44.598c-17.796-8.507-29.295-26.749-29.295-46.473v-42.48-3.304c0-48.008 36.273-87.893 82.85-93.56 1.745 18.79 17.594 33.551 36.834 33.551s35.089-14.762 36.834-33.552c12.549 1.492 24.491 5.442 35.372 11.702-6.071 4.639-11.706 9.897-16.767 15.753-17.517 20.267-27.163 46.199-27.163 73.019v20.565c-12.09 10.964-20.257 25.379-23.53 41.109l-55.731-25.908-.241-48.88c-.03-6.057-4.948-10.946-10.999-10.946-.018 0-.037 0-.056 0-6.074.03-10.976 4.979-10.945 11.054l.275 55.859c.021 4.26 2.5 8.125 6.363 9.92l86.842 40.371c9.835 4.572 14.351 16.029 10.28 26.081-2.129 5.256-6.212 9.279-11.498 11.329zm242.386 1.387h-53.151l41.71-26.227c4.159-2.615 7.98-5.61 11.441-8.914zm0-86.758c0 17.125-8.655 32.791-23.152 41.907l-64.557 40.593c-8.643 5.435-20.09 3.205-26.062-5.073-3.075-4.264-4.277-9.466-3.384-14.647s3.768-9.68 8.094-12.667l63.117-43.59c1.64-1.132 2.941-2.689 3.765-4.503l9.84-21.671-.022-.01c10.736-23.023 7.564-51.246-10.333-71.433-10.53-11.878-24.68-19.384-40.249-21.492 5.933-5.187 10.102-12.336 11.486-20.428 18.096 3.74 34.64 12.991 47.429 26.73 15.494 16.646 24.027 38.345 24.027 61.102v45.182z"></path>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <div class="pbmit-service-btn-wrapper">
                              <a class="pbmit-service-btn" href="/spouse-visa" title="Spouse Visa">
                                 <span class="pbmit-button-icon-wrapper">
                                    <span class="pbmit-button-icon">
                                       <i class="pbmit-base-icon-up-right-arrow"></i>
                                    </span>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </article>

               </div>
            </div>
         </div>
      </section>
      <!-- Visa Service End -->

      <div class="pbmit-move-earth img">
         <img src="{{ asset('website-static/images') }}/homepage-2/earth.webp" alt="Seven Countries Immigration and Education Pvt. Ltd." />
      </div>

      <!-- Visa Application Start -->
      <section class="about-section-one pbmit-bg-color-light">
         <div class="container">
            <div class="row g-0">
               <div class="col-md-12 col-xl-6">
                  <div>
                     <img src="{{ asset('website-static/images') }}/homepage-1/img-01.png" class="img-fluid about-img" alt="Trusted Visa Agency" />
                  </div>
               </div>
               <div class="col-md-12 col-xl-6">
                  <div class="about-one-right-box">
                     <div class="pbmit-heading-subheading animation-style2">
                        <h4 class="pbmit-subtitle">Visa application</h4>
                        <h2 class="pbmit-title">Trusted Visa Agency Worldwide Support</h2>
                        <div class="pbmit-heading-desc">
                           Navigating international travel, study, and immigration can be complex. Our experienced team provides <strong>fast, reliable, and hassle-free visa and immigration solutions,</strong> guiding you through every step with clarity and confidence. From documentation to application support, we handle every detail with care to make your journey <strong>smooth, secure, and stress-free</strong>.
                        </div>
                     </div>
                     <div class="ihbox-style-wrap border-bottom">
                        <div class="pbmit-ihbox-style-6">
                           <div class="pbmit-ihbox-box">
                              <div class="pbmit-ihbox-icon">
                                 <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                    <img src="{{ asset('website-static/images') }}/study-abroad.png" />
                                 </div>
                              </div>
                              <div class="pbmit-ihbox-contents">
                                 <h2 class="pbmit-element-title">Turn Your Study Abroad Dreams into Reality.</h2>
                                 <div class="pbmit-heading-desc">
                                    Get step-by-step guidance throughout your student visa journey. From choosing the right pathway to application submission, we help make the process simple, transparent & stress-free.
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="ihbox-style-wrap">
                        <div class="pbmit-ihbox-style-6">
                           <div class="pbmit-ihbox-box">
                              <div class="pbmit-ihbox-icon">
                                 <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                    <img src="{{ asset('website-static/images') }}/build-career.png" />
                                 </div>
                              </div>
                              <div class="pbmit-ihbox-contents">
                                 <h2 class="pbmit-element-title">Study Today. Build Your Career Tomorrow.</h2>
                                 <div class="pbmit-heading-desc"> From securing your student visa to exploring post-study work opportunities, We help you move confidently toward your global career goals.</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Visa Application End -->

      <!-- Experienced Consultant Start -->
      <section class="pbmit-bg-color-blackish about-us-two-bg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-12 col-xl-4">
                  <div class="pbmit-left-col">
                     <div class="pbmit-custom-heading animation-style2">
                        <h2 class="pbmit-title">Services from Experienced Consultant.</h2>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-xl-4">
                  <ul class="list-group style-2">
                     <li class="list-group-item">
                        <span class="pbmit-icon-list-icon">
                           <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                              <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
                           </svg>
                        </span>
                        <span class="pbmit-icon-list-text">Experienced Visa Consultants</span>
                     </li>
                     <li class="list-group-item">
                        <span class="pbmit-icon-list-icon">
                           <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                              <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
                           </svg>
                        </span>
                        <span class="pbmit-icon-list-text"> Transparent Process</span>
                     </li>
                     <li class="list-group-item">
                        <span class="pbmit-icon-list-icon">
                           <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                              <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
                           </svg>
                        </span>
                        <span class="pbmit-icon-list-text"> High Success Rate</span>
                     </li>
                     <li class="list-group-item">
                        <span class="pbmit-icon-list-icon">
                           <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                              <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
                           </svg>
                        </span>
                        <span class="pbmit-icon-list-text"> Personalized Guidance</span>
                     </li>
                     <li class="list-group-item">
                        <span class="pbmit-icon-list-icon">
                           <svg aria-hidden="true" class="e-font-icon-svg e-far-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                              <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
                           </svg>
                        </span>
                        <span class="pbmit-icon-list-text"> Trusted by Hundreds of Clients</span>
                     </li>
                  </ul>
               </div>
               <div class="col-md-12 col-xl-4">
                  <div class="about-img">
                     <img src="{{ asset('website-static/images') }}/homepage-2/about-03.png" class="img-fluid" alt="Experienced Consultant" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Experienced Consultant End -->

      <!-- About Us Start -->
      <section class="section-lg">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xl-6">
                  <div class="about-three-left-box">
                     <div>
                        <!-- <img src="{{ asset('website-static/images') }}/homepage-3/about-01.webp" class="img-fluid about-img-01" alt="About Seven Countries" /> -->
                        <img src="{{ asset('website-static/images') }}/RECEPTION.png" class="img-fluid about-img-01" alt="About Seven Countries" />
                     </div>
                     <div class="about-second-img">
                        <div class="img-wrap">
                           <!-- <img src="{{ asset('website-static/images') }}/homepage-3/about-02.jpg" alt="Visa and Consultancy" /> -->
                           <img src="{{ asset('website-static/images') }}/SMALL-FRONT-DESK.png" alt="Visa and Consultancy" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-xl-6">
                  <div class="about-three-right-box">
                     <div class="pbmit-heading-subheading animation-style2">
                        <h4 class="pbmit-subtitle">About Us</h4>
                        <h2 class="pbmit-title">Welcome to Seven Countries Immigration & Education Pvt. Ltd.</h2>
                        <div class="pbmit-heading-desc">
                           Seven Countries Immigration & Education Pvt. Ltd. is a trusted immigration and education consultancy dedicated to helping
                           individuals and families achieve their international travel, education, and career goals. With professional guidance and
                           personalized support, We assist clients with <strong>Student Visas</strong>, <strong>Tourist & Visitor Visas</strong>, <strong>Business Visas</strong>, <strong>Dependent Visas</strong>, and <strong>other immigration services</strong>.
                        </div>
                        <div class="pbmit-heading-desc">
                           Our experienced team focuses on understanding every <strong>client’s profile</strong>, <strong>carefully assessing visa eligibility</strong>, <strong>preparing documentation</strong>,
                           and providing <strong>step-by-step guidance</strong> throughout the application process.
                           We believe in transparent advice, professional service, and a client-first approach to make your international journey simple, smooth, and stress-free.
                        </div>
                     </div>
                     <div class="inner-box">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="pbminfotech-ele-fid-style-1">
                                 <div class="pbmit-fld-contents d-flex align-items-center">
                                    <div class="pbmit-circle-outer" data-digit="85" data-fill="#fea341" data-emptyfill="" data-before="" data-before-type="span" data-after="&lt;sup&gt;%&lt;/sup&gt;" data-after-type="sup" data-thickness="2" data-size="112">
                                       <div class="pbmit-circle">
                                          <div class="pbmit-fid-inner">
                                             <span class="pbmit-fid-before"></span>
                                             <img src="{{ asset('website-static/images') }}/customer-support.gif" alt="Document Verification" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class="pbmit-fid-sub">
                                       <h3 class="pbmit-fid-title">Document Verification</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 mt-md-0 mt-4">
                              <div class="pbminfotech-ele-fid-style-1">
                                 <div class="pbmit-fld-contents d-flex align-items-center">
                                    <div class="pbmit-circle-outer" data-digit="90" data-fill="#fea341" data-emptyfill="" data-before="" data-before-type="span" data-after="&lt;sup&gt;%&lt;/sup&gt;" data-after-type="sup" data-thickness="2" data-size="112">
                                       <div class="pbmit-circle">
                                          <div class="pbmit-fid-inner">
                                             <span class="pbmit-fid-before"></span>
                                             <img src="{{ asset('website-static/images') }}/safe.gif" alt="100% Guidance" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class="pbmit-fid-sub">
                                       <h3 class="pbmit-fid-title">100% Guidance</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="d-md-flex align-items-center">
                           <div class="mb-md-0 mb-4 mt-4">
                              <a class="pbmit-btn blackish" href="/about-us">
                                 <div class="pbmit-button-content-wrapper">
                                    <span class="pbmit-button-text">Let's Get Started</span>
                                    <span class="pbmit-button-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="24" viewBox="0 0 24 24" width="24">
                                          <path d="m17.9547 7.05228v8.48532c0 .1318-.026.2624-.0764.3842-.0505.1218-.1245.2325-.2177.3258-.0932.0932-.2039.1672-.3258.2176-.1218.0505-.2523.0764-.3842.0764s-.2624-.0259-.3843-.0764c-.1218-.0504-.2325-.1244-.3257-.2176-.0932-.0933-.1672-.204-.2177-.3258-.0504-.1218-.0764-.2524-.0764-.3842l.0071-6.07409-8.19539 8.19539c-.18754.1875-.44189.2929-.70711.2929-.26521 0-.51957-.1054-.7071-.2929-.18754-.1876-.29289-.4419-.29289-.7071s.10535-.5196.29289-.7071l8.1954-8.1954-6.07408.00707c-.2663 0-.5217-.10579-.71-.29409-.18831-.18831-.29409-.4437-.29409-.71s.10578-.5217.29409-.71c.1883-.18831.4437-.29409.71-.29409h8.48528c.132-.00055.2628.02506.3849.07532.1221.05027.233.12421.3263.21756.0934.09335.1673.20425.2176.32632.0502.12206.0758.25288.0753.38489z" fill="rgb(0,0,0)"></path>
                                       </svg>
                                    </span>
                                 </div>
                              </a>
                           </div>

                        </div>
                        <div class="pbmit-move-earth">
                           <img src="{{ asset('website-static/images') }}/homepage-3/earth.webp" class="img-fluid" alt="Seven Countries Immigration & Education Pvt. Ltd." />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About Us End -->

   </div>
   <!-- Position Relative End -->

   <!-- choose country Start -->
   <section class="section-mdb pbmit-element-portfolio-style-4">
      <div class="container">
         <div class="pbmit-heading-subheading animation-style2">
            <h4 class="pbmit-subtitle">choose country</h4>
            <h2 class="pbmit-title">Immigration &amp; Visa Services <br> Following Countries</h2>
         </div>
         <div class="row">
            <article class="pbmit-portfolio-style-4 col-md-12">
               <div class="pbminfotech-post-content" style="background-image: url('/website-static/images/homepage-3/portfolio/uk.jpg');">
                  <div class="pbmit-country-flag-icon-wrapper">
                     <div class="pbmit-country-flag-icon">
                        <span class="img-thumbnail flag flag-icon-background flag-icon-gb flag-icon-squared"></span>
                     </div>
                  </div>
                  <div class="pbminfotech-box-content">
                     <div class="pbminfotech-titlebox">
                        <div class="pbmit-port-cat">
                           <a href="/uk" rel="tag">UK Visa</a>
                        </div>
                        <h3 class="pbmit-portfolio-title">
                           <a href="/uk">UK</a>
                        </h3>
                        <p>data here</p>
                     </div>
                  </div>
                  <a class="pbmit-link" href="/uk"></a>
               </div>
            </article>
            <article class="pbmit-portfolio-style-4 col-md-12">
               <div class="pbminfotech-post-content" style="background-image: url('/website-static/images/homepage-3/portfolio/new-zealand.jpg');">
                  <div class="pbmit-country-flag-icon-wrapper">
                     <div class="pbmit-country-flag-icon">
                        <span class="img-thumbnail flag flag-icon-background flag-icon-ae flag-icon-squared"></span>
                     </div>
                  </div>
                  <div class="pbminfotech-box-content">
                     <div class="pbminfotech-titlebox">
                        <div class="pbmit-port-cat">
                           <a href="/new-zealand" rel="tag">New Zealand Visa</a>
                        </div>
                        <h3 class="pbmit-portfolio-title">
                           <a href="/new-zealand">New Zealand</a>
                        </h3>
                     </div>
                  </div>
                  <a class="pbmit-link" href="/new-zealand"></a>
               </div>
            </article>
            <article class="pbmit-portfolio-style-4 col-md-12">
               <div class="pbminfotech-post-content" style="background-image: url('/website-static/images/homepage-3/portfolio/usa.jpg');">
                  <div class="pbmit-country-flag-icon-wrapper">
                     <div class="pbmit-country-flag-icon">
                        <span class="img-thumbnail flag flag-icon-background flag-icon-tr flag-icon-squared"></span>
                     </div>
                  </div>
                  <div class="pbminfotech-box-content">
                     <div class="pbminfotech-titlebox">
                        <div class="pbmit-port-cat">
                           <a href="/usa" rel="tag">USA Visa</a>
                        </div>
                        <h3 class="pbmit-portfolio-title">
                           <a href="/usa">USA</a>
                        </h3>
                     </div>
                  </div>
                  <a class="pbmit-link" href="/usa"></a>
               </div>
            </article>

            <article class="pbmit-portfolio-style-4 col-md-12">
               <div class="pbminfotech-post-content" style="background-image: url('/website-static/images/homepage-3/portfolio/portfolio-img-04.jpg');">
                  <div class="pbmit-country-flag-icon-wrapper">
                     <div class="pbmit-country-flag-icon">
                        <span class="img-thumbnail flag flag-icon-background flag-icon-fr flag-icon-squared"></span>
                     </div>
                  </div>
                  <div class="pbminfotech-box-content">
                     <div class="pbminfotech-titlebox">
                        <div class="pbmit-port-cat">
                           <a href="/europe" rel="tag">Europe Visa</a>
                        </div>
                        <h3 class="pbmit-portfolio-title">
                           <a href="/europe">Europe</a>
                        </h3>
                     </div>
                  </div>
                  <a class="pbmit-link" href="/europe"></a>
               </div>
            </article>
            <article class="pbmit-portfolio-style-4 col-md-12">
               <div class="pbminfotech-post-content" style="background-image: url('/website-static/images/homepage-3/portfolio/portfolio-img-05.jpg');">
                  <div class="pbmit-country-flag-icon-wrapper">
                     <div class="pbmit-country-flag-icon">
                        <span class="img-thumbnail flag flag-icon-background flag-icon-au flag-icon-squared"></span>
                     </div>
                  </div>
                  <div class="pbminfotech-box-content">
                     <div class="pbminfotech-titlebox">
                        <div class="pbmit-port-cat">
                           <a href="/australia" rel="tag">Australia Visa</a>
                        </div>
                        <h3 class="pbmit-portfolio-title">
                           <a href="/australia">Australia</a>
                        </h3>
                     </div>
                  </div>
                  <a class="pbmit-link" href="/australia"></a>
               </div>
            </article>
            <article class="pbmit-portfolio-style-4 col-md-12">
               <div class="pbminfotech-post-content" style="background-image: url('/website-static/images/homepage-3/portfolio/portfolio-img-06.jpg');">
                  <div class="pbmit-country-flag-icon-wrapper">
                     <div class="pbmit-country-flag-icon">
                        <span class="img-thumbnail flag flag-icon-background flag-icon-ca flag-icon-squared"></span>
                     </div>
                  </div>
                  <div class="pbminfotech-box-content">
                     <div class="pbminfotech-titlebox">
                        <div class="pbmit-port-cat">
                           <a href="/canada" rel="tag">Canada Visa</a>
                        </div>
                        <h3 class="pbmit-portfolio-title">
                           <a href="/canada">Canada</a>
                        </h3>
                     </div>
                  </div>
                  <a class="pbmit-link" href="/canada"></a>
               </div>
            </article>
            <article class="pbmit-portfolio-style-4 col-md-12">
               <div class="pbminfotech-post-content" style="background-image: url('/website-static/images/homepage-3/portfolio/germany.jpg');">
                  <div class="pbmit-country-flag-icon-wrapper">
                     <div class="pbmit-country-flag-icon">
                        <span class="img-thumbnail flag flag-icon-background flag-icon-gm flag-icon-squared"></span>
                     </div>
                  </div>
                  <div class="pbminfotech-box-content">
                     <div class="pbminfotech-titlebox">
                        <div class="pbmit-port-cat">
                           <a href="/germany" rel="tag">Germany Visa</a>
                        </div>
                        <h3 class="pbmit-portfolio-title">
                           <a href="/germany">Germany</a>
                        </h3>
                     </div>
                  </div>
                  <a class="pbmit-link" href="/germany"></a>
               </div>
            </article>
         </div>
      </div>
   </section>
   <!-- choose country End -->



   <!-- Process Visa and Immigration] Start -->
   <section class="static-box-section section-mdb">
      <div class="container">
         <div class="pbmit-heading-subheading text-center animation-style2">
            <h4 class="pbmit-subtitle">Our Process</h4>
            <h2 class="pbmit-title">Your Journey, Step by Step <!-- <br> How We Manage --></h2>
         </div>
         <div class="row pbmit-element-column-four">
            <article class="pbmit-ele pbmit-ele-static-box pbmit-static-box-style-1 col-md-6 col-lg-4 col-xl-3">
               <div class="pbmit-staticbox-wrapper">
                  <div class="pbmit-img">
                     <img src="{{ asset('website-static/images') }}/homepage-2/static-box/static-box-01.jpg" class="img-fluid" alt="Select Visa Types" />
                  </div>
                  <div class="pbmit-content-box">
                     <div class="pbmit-content-inner">
                        <h4 class="pbmit-static-box-title">Select Visa Types</h4>
                        <div class="pbmit-static-box-desc">Choose the right visa category to match you needs.</div>
                     </div>
                  </div>
               </div>
            </article>
            <article class="pbmit-ele pbmit-ele-static-box pbmit-static-box-style-1 col-md-6 col-lg-4 col-xl-3">
               <div class="pbmit-staticbox-wrapper">
                  <div class="pbmit-img">
                     <img src="{{ asset('website-static/images') }}/homepage-2/static-box/static-box-02.jpg" class="img-fluid" alt="Complete Online Registrations" />
                  </div>
                  <div class="pbmit-content-box">
                     <div class="pbmit-content-inner">
                        <h4 class="pbmit-static-box-title">Complete Online Registrations</h4>
                        <div class="pbmit-static-box-desc">Easily submit your visa application with our online registration.</div>
                     </div>
                  </div>
               </div>
            </article>
            <article class="pbmit-ele pbmit-ele-static-box pbmit-static-box-style-1 col-md-6 col-lg-4 col-xl-3">
               <div class="pbmit-staticbox-wrapper">
                  <div class="pbmit-img">
                     <img src="{{ asset('website-static/images') }}/homepage-2/static-box/static-box-03.jpg" class="img-fluid" alt="Documents and Payments" />
                  </div>
                  <div class="pbmit-content-box">
                     <div class="pbmit-content-inner">
                        <h4 class="pbmit-static-box-title">Documents and Payments</h4>
                        <div class="pbmit-static-box-desc">Submit documents &amp; make secure payments for a smooth visa.</div>
                     </div>
                  </div>
               </div>
            </article>
            <article class="pbmit-ele pbmit-ele-static-box pbmit-static-box-style-1 col-md-6 col-lg-4 col-xl-3">
               <div class="pbmit-staticbox-wrapper">
                  <div class="pbmit-img">
                     <img src="{{ asset('website-static/images') }}/homepage-2/static-box/static-box-04.jpg" class="img-fluid" alt="Receive your Visa Now" />
                  </div>
                  <div class="pbmit-content-box">
                     <div class="pbmit-content-inner">
                        <h4 class="pbmit-static-box-title">Receive your Visa Now</h4>
                        <div class="pbmit-static-box-desc">Get your visa quickly &amp; hassle-free with our efficient process.</div>
                     </div>
                  </div>
               </div>
            </article>
         </div>
      </div>
   </section>
   <!-- Process Visa and Immigration end -->

   <!-- Why Choose Us Start -->
   <section class="section-lg ">
      <div class="container-fluid">
         <div class="row g-0">
            <div class="col-md-6 full-width-1200">
               <div class="about-us-three-leftbox"></div>
            </div>
            <div class="col-md-6 full-width-1200 pbmit-bg-color-blackish">
               <div class="about-us-three-rightbox">
                  <div class="pbmit-heading-subheading animation-style2">
                     <h4 class="pbmit-subtitle">Why Choose Us</h4>
                     <h2 class="pbmit-title">Trusted Visa Agency for Global Access</h2>
                  </div>
                  <article class="pbmit-miconheading-style-3 mb-4">
                     <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="pbmit-ihbox-box">
                           <div class="pbmit-ihbox-icon">
                              <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                 <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                       <g fill="#3cc">
                                          <path d="m182.09 94.947h155.363v-22h-166.363c-6.075 0-11 4.925-11 11v135.233h22z"></path>
                                          <path d="m381.062 303.617v113.62h-49.882v22h60.882c6.075 0 11-4.925 11-11v-124.62z"></path>
                                          <path d="m199.242 307.917c4.434-5.891 7.067-13.212 7.067-21.136 0-19.42-15.799-35.219-35.219-35.219s-35.219 15.799-35.219 35.219c0 7.925 2.632 15.245 7.066 21.136-15.57 9.518-25.985 26.677-25.985 46.224v8.714c0 6.075 4.925 11 11 11h86.275c6.075 0 11-4.925 11-11v-8.714c.001-19.547-10.414-36.705-25.985-46.224zm-28.152-34.355c7.289 0 13.219 5.93 13.219 13.219s-5.93 13.219-13.219 13.219-13.219-5.93-13.219-13.219 5.93-13.219 13.219-13.219zm-32.057 78.293c1.177-16.658 15.105-29.852 32.057-29.852s30.88 13.194 32.057 29.852z"></path>
                                       </g>
                                       <g>
                                          <path d="m431.529 164.693v-10.002c2.308-1.746 4.526-3.643 6.622-5.711 12.587-12.425 19.52-29.008 19.52-46.694v-37.82c0-35.547-28.919-64.466-64.465-64.466h-2.287c-35.546 0-64.465 28.919-64.465 64.465v37.006c0 21.52 10.288 40.782 26.142 52.952v10.262c-28.191 3.047-53.11 19.004-67.698 43.495h-273.898c-6.075 0-11 4.925-11 11v231.057c0 6.075 4.925 11 11 11h101.087l-21.402 28.763h-56.685c-6.075 0-11 4.925-11 11s4.925 11 11 11h274.18c6.075 0 11-4.925 11-11s-4.925-11-11-11h-56.685l-21.402-28.763h101.087c6.075 0 11-4.925 11-11v-135.62h158.82c6.075 0 11-4.925 11-11v-49.092c0-46.486-35.28-84.882-80.471-89.832zm-40.611-142.693h2.287c23.416 0 42.465 19.05 42.465 42.465v7.352h-2.538c-10.158 0-19.708-3.956-26.89-11.138l-12.423-12.423c-4.296-4.296-11.261-4.296-15.557 0-7.182 7.183-16.732 11.138-26.89 11.138h-2.608c2.518-21.032 20.456-37.394 42.154-37.394zm-42.465 59.394h2.921c12.304 0 24.042-3.677 33.961-10.51l5.351 5.351c11.337 11.338 26.412 17.582 42.446 17.582h2.538v8.468c0 11.755-4.608 22.778-12.975 31.037-8.365 8.257-19.443 12.729-31.216 12.568-23.725-.308-43.026-20.234-43.026-44.419zm42.741 86.494c.294.004.586.006.879.006 5.983 0 11.838-.813 17.457-2.355v5.578l-17.467 20.63-17.467-20.63v-5.638c5.299 1.494 10.861 2.335 16.598 2.409zm-71.014 62.292v165.057h-298.18v-165.057zm-96.107 259.82h-105.966l21.402-28.763h63.161zm-202.073-50.763v-22h298.18v22zm468-146.62h-147.82v-73.437c0-6.075-4.925-11-11-11h-19.014c11.884-12.964 28.399-20.906 46.429-21.913l25.071 29.612c2.09 2.469 5.161 3.892 8.395 3.892s6.305-1.423 8.395-3.892l25.071-29.611c35.894 2.031 64.473 31.865 64.473 68.257z"></path>
                                          <path d="m458.828 233.674h-32.766c-6.075 0-11 4.925-11 11s4.925 11 11 11h32.766c6.075 0 11-4.925 11-11s-4.925-11-11-11z" fill="#3cc"></path>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <div class="pbmit-ihbox-contents">
                              <h2 class="pbmit-element-title">
                                 Global Connection
                              </h2>
                              <div class="pbmit-heading-desc">
                                 We collaborate with trusted universities, employers, and legal experts across countries like Canada, USA, UK, Australia, and more. ..
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <article class="pbmit-miconheading-style-3 mb-4">
                     <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="pbmit-ihbox-box">
                           <div class="pbmit-ihbox-icon">
                              <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                 <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                       <path fill-rule="evenodd" d="M17 10v1.126c.367.095.714.24 1.032.428l.796-.797 1.415 1.415-.797.796c.188.318.333.665.428 1.032H21v2h-1.126c-.095.367-.24.714-.428 1.032l.797.796-1.415 1.415-.796-.797a3.979 3.979 0 0 1-1.032.428V20h-2v-1.126a3.977 3.977 0 0 1-1.032-.428l-.796.797-1.415-1.415.797-.796A3.975 3.975 0 0 1 12.126 16H11v-2h1.126c.095-.367.24-.714.428-1.032l-.797-.796 1.415-1.415.796.797A3.977 3.977 0 0 1 15 11.126V10h2Zm.406 3.578.016.016c.354.358.574.85.578 1.392v.028a2 2 0 0 1-3.409 1.406l-.01-.012a2 2 0 0 1 2.826-2.83ZM5 8a4 4 0 1 1 7.938.703 7.029 7.029 0 0 0-3.235 3.235A4 4 0 0 1 5 8Zm4.29 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h6.101A6.979 6.979 0 0 1 9 15c0-.695.101-1.366.29-2Z" clip-rule="evenodd" />
                                    </svg>

                              </div>
                           </div>
                           <div class="pbmit-ihbox-contents">
                              <h2 class="pbmit-element-title">
                                 Personalized Approach
                              </h2>
                              <div class="pbmit-heading-desc">
                                 Every client is unique. We tailor our strategies based on your profile, goals, and country of interest — no one-size-fits-all.
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <article class="pbmit-miconheading-style-3 mb-4">
                     <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="pbmit-ihbox-box">
                           <div class="pbmit-ihbox-icon">
                              <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                 <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                       <g>
                                          <path d="m376.425 18.392c-49.312 0-89.429 40.111-89.429 89.414s40.117 89.414 89.429 89.414 89.43-40.111 89.43-89.414-40.119-89.414-89.43-89.414zm66.532 78.414h-25.26c-.937-17.617-4.123-34.724-9.48-48.44 18.103 9.717 31.282 27.462 34.74 48.44zm-66.532 78.414c-1.678 0-6.662-3.901-11.362-15.962-4.214-10.812-6.975-25.144-7.878-40.452h38.48c-.902 15.308-3.663 29.64-7.878 40.452-4.7 12.06-9.684 15.962-11.362 15.962zm-19.24-78.414c.902-15.308 3.663-29.64 7.878-40.452 4.7-12.061 9.685-15.962 11.362-15.962s6.662 3.901 11.362 15.962c4.214 10.812 6.975 25.144 7.878 40.452zm-12.552-48.44c-5.357 13.716-8.543 30.823-9.48 48.44h-25.26c3.458-20.978 16.637-38.723 34.74-48.44zm-34.739 70.44h25.26c.937 17.617 4.123 34.724 9.48 48.44-18.104-9.718-31.283-27.463-34.74-48.44zm98.322 48.44c5.357-13.716 8.543-30.823 9.48-48.44h25.26c-3.457 20.977-16.636 38.722-34.74 48.44z"></path>
                                          <path d="m272.146 261.947v-109.522c0-31.684-25.776-57.46-57.46-57.46h-24.295v-17.654c0-19.431-15.801-35.238-35.224-35.238h-38.19c-19.422 0-35.223 15.808-35.223 35.238v17.654h-24.294c-31.684 0-57.46 25.776-57.46 57.46v109.522c0 31.684 25.776 57.46 57.46 57.46h157.227c31.683 0 57.459-25.776 57.459-57.46zm-168.391-184.636c0-7.3 5.932-13.238 13.223-13.238h38.19c7.292 0 13.224 5.938 13.224 13.238v17.654h-64.637zm-81.755 75.114c0-19.553 15.907-35.46 35.46-35.46h157.227c19.553 0 35.46 15.907 35.46 35.46v4.496c0 24.507-19.923 44.445-44.412 44.445h-139.324c-24.488 0-44.411-19.938-44.411-44.445zm0 109.522v-55.665c11.774 10.615 27.352 17.084 44.411 17.084h58.662v16.605c0 6.075 4.925 11 11 11s11-4.925 11-11v-16.605h58.661c17.06 0 32.638-6.469 44.412-17.084v55.665c0 19.553-15.907 35.46-35.46 35.46h-157.226c-19.553 0-35.46-15.907-35.46-35.46z"></path>
                                          <path d="m207.312 395.148c.183-.11.362-.228.539-.349l86.576-59.747c7.091-3.958 15.118-6.048 23.244-6.048h71.868c6.075 0 6.075-22 0-22h-71.868c-12.092 0-24.033 3.167-34.535 9.158-.272.156-.538.323-.797.501l-86.742 59.861c-8.535 5.289-14.422 13.59-16.592 23.409-1.74 7.874-.899 15.868 2.344 23.054h-59.647c-19.473 0-35.315 15.84-35.315 35.31 0 19.471 15.843 35.311 35.315 35.311h158.026c27.199 0 52.189-14.829 65.22-38.699 9.311-17.057 25.98-27.24 44.591-27.24 6.075 0 6.075-22 0-22-26.785 0-50.674 14.467-63.901 38.699-9.172 16.803-26.763 27.24-45.909 27.24h-158.026c-7.342 0-13.315-5.971-13.315-13.311 0-7.339 5.974-13.31 13.315-13.31h93.516c.386 0 .768-.02 1.144-.059 5.205-.142 10.438-1.385 15.345-3.824.22-.109 1.225-.706 1.403-.83l72.824-50.446h24.818c6.075 0 11-4.925 11-11s-4.925-11-11-11h-28.256c-2.238 0-4.424.683-6.264 1.958l-74.93 51.904c-6.623 2.924-14.538.637-18.644-5.494-2.288-3.414-3.06-7.504-2.173-11.517s3.312-7.397 6.826-9.531z"></path>
                                       </g>
                                       <g>
                                          <path d="m438.894 399.733c-6.075 0-11-4.925-11-11v-12.712c0-6.075 4.925-11 11-11s11 4.925 11 11v12.712c0 6.076-4.925 11-11 11z" fill="#3cc"></path>
                                       </g>
                                       <g>
                                          <path d="m501 442.849h-105.484c-6.075 0-11-4.925-11-11v-129.024c0-6.075 4.925-11 11-11h105.484c6.075 0 11 4.925 11 11v129.023c0 6.076-4.925 11.001-11 11.001zm-94.484-22h83.484v-107.024h-83.484z" fill="#3cc"></path>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <div class="pbmit-ihbox-contents">
                              <h2 class="pbmit-element-title">
                                 Affordable & Transparent Pricing
                              </h2>
                              <div class="pbmit-heading-desc">No hidden charges. You pay only for what you need with complete clarity.</div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <article class="pbmit-miconheading-style-3 mb-3">
                     <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="pbmit-ihbox-box">
                           <div class="pbmit-ihbox-icon">
                              <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                 <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                       <g>
                                          <path d="m254.671 338.39h-134.322c-6.075 0-11-4.925-11-11s4.925-11 11-11h134.322c6.075 0 11 4.925 11 11s-4.925 11-11 11z" fill="#3cc"></path>
                                       </g>
                                       <g>
                                          <path d="m482.45 0h-259.502c-6.075 0-11 4.925-11 11v61.665h-154.635c-21.374 0-38.764 17.389-38.764 38.763v361.809c0 21.374 17.39 38.763 38.764 38.763h425.137c6.075 0 11-4.925 11-11v-490c0-6.075-4.925-11-11-11zm-248.502 22h237.502v154.789h-114.98v-65.361c0-21.374-17.39-38.763-38.764-38.763h-83.758zm-176.635 468c-9.243 0-16.764-7.52-16.764-16.763v-361.809c0-9.243 7.521-16.763 16.764-16.763h260.393c9.243 0 16.764 7.52 16.764 16.763v361.809c0 9.243-7.521 16.763-16.764 16.763zm295.341 0c2.445-5.076 3.815-10.762 3.815-16.763v-274.448h114.98v291.211z"></path>
                                          <path d="m390.552 320.32c-6.075 0-11 4.925-11 11v103.747c0 6.075 4.925 11 11 11s11-4.925 11-11v-103.747c0-6.075-4.925-11-11-11z"></path>
                                          <path d="m390.552 228.779c-6.075 0-11 4.925-11 11v34.583c0 6.075 4.925 11 11 11s11-4.925 11-11v-34.583c0-6.075-4.925-11-11-11z"></path>
                                          <path d="m436.977 228.779c-6.075 0-11 4.925-11 11v195.288c0 6.075 4.925 11 11 11s11-4.925 11-11v-195.288c0-6.075-4.925-11-11-11z"></path>
                                          <path d="m187.51 294.845c46.575 0 84.468-37.898 84.468-84.482s-37.893-84.482-84.468-84.482-84.468 37.898-84.468 84.482 37.893 84.482 84.468 84.482zm-61.499-73.482h22.18c.887 15.601 3.659 30.748 8.256 43.196-15.713-9.045-27.143-24.729-30.436-43.196zm61.499-73.483c1.158 0 5.68 3.44 9.995 14.516 3.855 9.896 6.404 22.968 7.289 36.966h-34.567c.885-13.998 3.433-27.07 7.289-36.966 4.314-11.075 8.836-14.516 9.994-14.516zm17.283 73.483c-.885 13.998-3.433 27.07-7.289 36.967-4.315 11.075-8.837 14.516-9.995 14.516s-5.68-3.44-9.995-14.516c-3.855-9.896-6.404-22.968-7.289-36.967zm13.779 43.196c4.596-12.449 7.369-27.596 8.256-43.196h22.18c-3.292 18.467-14.723 34.151-30.436 43.196zm30.436-65.196h-22.18c-.887-15.601-3.659-30.748-8.256-43.196 15.713 9.045 27.144 24.729 30.436 43.196zm-92.56-43.197c-4.596 12.449-7.369 27.596-8.256 43.196h-22.18c3.292-18.466 14.722-34.15 30.436-43.196z"></path>
                                          <path d="m157.132 374.226c-.038-.1-.077-.2-.118-.299-1.924-4.68-6.435-7.703-11.494-7.703h-.012c-5.063.005-9.574 3.037-11.491 7.724-.034.083-.066.166-.099.249l-23.652 62.113c-2.161 5.677.688 12.033 6.365 14.194 5.679 2.162 12.033-.687 14.195-6.365l.429-1.128h28.315l.414 1.097c1.662 4.405 5.848 7.12 10.294 7.12 1.29 0 2.603-.229 3.881-.711 5.685-2.145 8.554-8.491 6.409-14.175zm-17.499 46.785 5.845-15.351 5.792 15.351z"></path>
                                          <path d="m226.68 398.901c-7.156-2.64-13.856-5.502-16.482-6.645-.152-.206-.269-.52-.198-1.01.157-1.096 1.185-2.007 2.817-2.5 7.316-2.202 14.399 3.393 14.471 3.45l.078.041c5.171 2.699 11.55.899 14.548-4.105 3.141-5.243 1.458-12.119-3.851-15.149-9.643-5.505-20.322-8.695-31.592-5.301-9.873 2.975-16.864 10.806-18.247 20.438-1.309 9.113 2.646 17.881 10.317 22.884.485.317.995.594 1.525.831.368.165 9.134 4.068 18.999 7.708 3.963 1.461 6.538 3.557 6.264 5.096-.344 1.923-3.289 4.587-7.926 4.587-5.392 0-10.551-2.14-13.799-5.726-4.176-4.606-11.362-4.856-15.848-.473-4.347 4.248-4.052 11.471.132 15.879 7.442 7.84 18.147 12.319 29.515 12.319 14.79 0 27.231-9.555 29.583-22.72 1.708-9.57-2.585-23.066-20.306-29.604z"></path>
                                          <path d="m292.896 398.901c-7.156-2.64-13.856-5.502-16.482-6.645-.152-.205-.269-.52-.198-1.01.157-1.097 1.185-2.008 2.817-2.5 7.316-2.202 14.399 3.393 14.471 3.45 4.905 2.481 10.888.973 14.03-3.536l.015-.021c3.751-5.383 1.998-12.825-3.75-15.988-9.674-5.322-20.111-8.282-31.112-4.969-9.872 2.975-16.864 10.806-18.247 20.438-1.309 9.113 2.645 17.881 10.315 22.884.486.317.996.595 1.526.832.368.164 9.135 4.067 19 7.707 3.963 1.461 6.538 3.557 6.264 5.096-.344 1.923-3.289 4.587-7.926 4.587-5.34 0-10.45-2.098-13.703-5.62-3.285-3.556-8.432-4.855-12.798-2.763-7.07 3.387-8.414 12.117-3.601 17.43 7.458 8.232 18.43 12.953 30.102 12.953 14.79 0 27.231-9.555 29.583-22.72 1.709-9.571-2.584-23.067-20.306-29.605z"></path>
                                          <path d="m119.109 395.003c0-15.869-13.064-28.779-29.123-28.779h-17.539c-5.998-.067-11.066 5.033-11 11v63c0 6.075 4.925 11 11 11s11-4.925 11-11v-16.423c2.529-.011 4.947-.02 6.539-.02 16.059.001 29.123-12.909 29.123-28.778zm-35.63-6.779h6.508c3.861 0 7.123 3.104 7.123 6.779s-3.262 6.779-7.123 6.779c-1.581 0-3.968.008-6.475.02-.012-2.634-.021-5.156-.021-6.798 0-1.419-.005-4.007-.012-6.78z"></path>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <div class="pbmit-ihbox-contents">
                              <h2 class="pbmit-element-title">
                                 Expert Support Panel
                              </h2>
                              <div class="pbmit-heading-desc">Our certified immigration consultants and legal advisors stay updated with the latest immigration laws, ensuring accurate and reliable advice.</div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <article class="pbmit-miconheading-style-3 mb-3">
                     <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="pbmit-ihbox-box">
                           <div class="pbmit-ihbox-icon">
                              <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                 <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                       <g>
                                          <g>
                                             <path d="m293.192 268.669h-77.833c-6.075 0-11-4.925-11-11s4.925-11 11-11h77.833c6.075 0 11 4.925 11 11s-4.925 11-11 11z" fill="#3cc"></path>
                                          </g>
                                          <g>
                                             <path d="m293.192 317.672h-77.833c-6.075 0-11-4.925-11-11s4.925-11 11-11h77.833c6.075 0 11 4.925 11 11s-4.925 11-11 11z" fill="#3cc"></path>
                                          </g>
                                       </g>
                                       <g>
                                          <path d="m351.104 197.024h-193.658c-6.075 0-11 4.925-11 11v148.292c0 6.075 4.925 11 11 11h193.658c6.075 0 11-4.925 11-11v-148.292c0-6.075-4.925-11-11-11zm-11 148.292h-171.658v-126.292h171.658z"></path>
                                          <path d="m267.945 441.473h-23.89c-6.075 0-11 4.925-11 11s4.925 11 11 11h23.89c6.075 0 11-4.925 11-11s-4.925-11-11-11z"></path>
                                          <path d="m357.166 0h-202.332c-30.104 0-54.597 24.492-54.597 54.597v402.807c0 30.104 24.492 54.597 54.597 54.597h202.332c30.104 0 54.597-24.492 54.597-54.597v-402.807c0-30.105-24.492-54.597-54.597-54.597zm-166.501 22h130.67v21.255c0 3.425-2.79 6.212-6.219 6.212h-118.232c-3.429 0-6.219-2.787-6.219-6.212zm-35.831 0h13.831v21.255c0 15.556 12.659 28.212 28.219 28.212h118.232c15.56 0 28.219-12.656 28.219-28.212v-21.255h13.831c17.974 0 32.597 14.623 32.597 32.597v343.09h-267.526v-343.09c0-17.974 14.623-32.597 32.597-32.597zm202.332 468h-202.332c-17.974 0-32.597-14.623-32.597-32.597v-37.716h267.525v37.716c.001 17.974-14.622 32.597-32.596 32.597z"></path>
                                          <path d="m306.822 175.795c5.384 2.256 11.548-.093 14.104-5.254h29.144c1.896 3.828 5.778 6.112 9.857 6.112 1.407 0 2.837-.272 4.217-.845 5.61-2.332 8.268-8.77 5.936-14.379l-23.129-55.648c-1.902-4.622-6.359-7.605-11.356-7.605h-.012c-5.002.004-9.458 2.999-11.319 7.543l-23.336 55.681c-2.347 5.601.291 12.047 5.894 14.395zm34.078-27.254h-10.728l5.387-12.853z"></path>
                                          <path d="m221.198 176.65c6.075 0 11-4.925 11-11v-56.476c0-6.075-4.925-11-11-11s-11 4.925-11 11v56.476c0 6.075 4.925 11 11 11z"></path>
                                          <path d="m270.242 176.65c13.818 0 25.446-8.961 27.65-21.309 1.608-9.012-2.387-21.702-18.939-27.805-5.976-2.204-11.599-4.582-14.221-5.714.094-.34.539-.872 1.721-1.228 5.968-1.794 11.889 2.846 11.948 2.893l2.077.68c4.236 1.386 8.89.059 11.757-3.354 4.411-5.25 2.928-13.179-3.037-16.563-8.017-4.549-17.801-8.12-29.089-4.721-9.284 2.796-15.861 10.173-17.164 19.252-1.236 8.613 2.503 16.901 9.759 21.63.486.317.997.595 1.526.831.332.148 8.228 3.661 17.11 6.937 3.857 1.422 4.945 3.001 4.893 3.298-.167.934-2.128 3.174-5.993 3.174-6.702 0-10.526-3.643-11.539-4.76-4.169-4.598-11.336-4.854-15.824-.492-4.386 4.264-4.185 11.356.018 15.801 6.892 7.285 16.814 11.45 27.347 11.45z"></path>
                                          <path d="m161.028 168.486c1.739 4.892 6.38 8.164 11.566 8.164h.085c5.22-.036 9.856-3.381 11.561-8.395l18.447-55.507c1.916-5.765-1.204-11.992-6.969-13.908-5.766-1.918-11.992 1.205-13.908 6.969l-9.417 28.337-9.924-28.581c-1.993-5.739-8.261-8.776-14-6.783s-8.776 8.261-6.783 14z"></path>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <div class="pbmit-ihbox-contents">
                              <h2 class="pbmit-element-title">
                                 Visa Success ration
                              </h2>
                              <div class="pbmit-heading-desc">
                                 Our transparent process, attention to detail, and proactive follow-ups have resulted in a strong track record of visa approvals.
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <article class="pbmit-miconheading-style-3 mb-3">
                     <div class="pbmit-ihbox pbmit-ihbox-style-3">
                        <div class="pbmit-ihbox-box">
                           <div class="pbmit-ihbox-icon">
                              <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                 <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6 2c-1.10457 0-2 .89543-2 2v4c0 .55228.44772 1 1 1s1-.44772 1-1V4h12v7h-2c-.5523 0-1 .4477-1 1v2h-1c-.5523 0-1 .4477-1 1s.4477 1 1 1h5c.5523 0 1-.4477 1-1V3.85714C20 2.98529 19.3667 2 18.268 2H6Z" />
                                    <path d="M6 11.5C6 9.567 7.567 8 9.5 8S13 9.567 13 11.5 11.433 15 9.5 15 6 13.433 6 11.5ZM4 20c0-2.2091 1.79086-4 4-4h3c2.2091 0 4 1.7909 4 4 0 1.1046-.8954 2-2 2H6c-1.10457 0-2-.8954-2-2Z" />
                                 </svg>

                              </div>
                           </div>
                           <div class="pbmit-ihbox-contents">
                              <h2 class="pbmit-element-title">
                                 End-to-End Support
                              </h2>
                              <div class="pbmit-heading-desc">
                                 From eligibility checks to visa interviews, document preparation, and post-landing support — we walk with you every step of the way.
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Why Choose Us End -->

   <!-- Our Testimonial Start -->
   <section class="testimonial-section-three section-lgt mb-3">
      <div class="container">
         <div class="pbmit-heading-subheading text-center animation-style2">
            <h4 class="pbmit-subtitle">Our Testimonial</h4>
            <h2 class="pbmit-title">Clients Share Their Stories...</h2>
         </div>
         <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-allow-touch="true" data-columns="2" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
               @foreach ($testomonials as $testimonial)
               <article class="pbmit-testimonial-style-1 swiper-slide">
                  <div class="pbminfotech-post-item">
                     <div class="pbmit-box-content-wrap">
                        <div class="pbminfotech-box-star-ratings">
                           @for ($i = 0; $i < min(5, (int)($testimonial->stars ?? 5)); $i++)
                              <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                              @endfor
                        </div>
                        <div class="pbminfotech-box-desc">
                           <blockquote class="pbminfotech-testimonial-text">
                              <p>“{{ $testimonial->message }}”</p>
                           </blockquote>
                        </div>
                        <div class="pbminfotech-box-author d-flex align-items-center">
                           <div class="pbminfotech-box-img">
                              <div class="pbmit-featured-img-wrapper">
                                 <div class="pbmit-featured-wrapper">
                                    <img src="{{ $testimonial->file }}" class="img-fluid" alt="{{ $testimonial->name }}" />
                                 </div>
                              </div>
                           </div>
                           <div class="pbmit-auther-content">
                              <h3 class="pbminfotech-box-title">{{ $testimonial->name }}</h3>
                              <div class="pbminfotech-testimonial-detail">{{ $testimonial->occupation ?? 'Client Feedback' }}</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
               @endforeach
            </div>
         </div>

      </div>
   </section>
   <!-- Our Testimonial End -->


</div>
<!-- page content End -->

@include('includes.migration-cta')

@endsection

@section('script')
@endsection