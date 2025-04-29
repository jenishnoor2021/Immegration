<?php

use App\Models\Testomonial;

$testomonials = Testomonial::where('is_approved', 1)->get();

?>
<section class="wptb-testimonial-one bg-image" style="background-image: url('{{ asset('assets/img/background/bg-4.jpg') }}');">
  <div class="container">
    <div class="wptb-heading">
      <div class="row">
        <div class="col-md-6">
          <div class="wptb-item--inner">
            <h6 class="wptb-item--subtitle">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#2282FF" />
                </svg>
              </span>
              Testimonial
            </h6>
            <h1 class="wptb-item--title"> <span>Our Client Have Trusted <br>
                Us for our work</span></h1>
          </div>
        </div>

        <div class="col-md-6">
          <p class="wptb-item--description">Seven Countries Visa Consultancy was created to provide uniquely des
            igned premium services in the world of education and migration.
            As people are dreaming more.</p>
        </div>
      </div>
    </div>

    <div class="swiper-container swiper-testimonial">
      <!-- swiper slides -->
      <div class="swiper-wrapper">
        @foreach ($testomonials as $testomonial)
        <div class="swiper-slide">
          <div class="wptb-testimonial1">
            <div class="wptb-item--inner">
              <div class="wptb-item--image">
                <img src="{{$testomonial->file}}" alt="img">
                <div class="wptb-item--icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                    <path d="M26.2324 22.8729C28.6698 20.2276 28.4244 16.8305 28.4167 16.7917V6.45841C28.4167 6.11584 28.2806 5.7873 28.0383 5.54507C27.7961 5.30283 27.4676 5.16675 27.125 5.16675H19.375C17.9503 5.16675 16.7917 6.32537 16.7917 7.75008V16.7917C16.7917 17.1343 16.9277 17.4629 17.17 17.7051C17.4122 17.9473 17.7408 18.0834 18.0833 18.0834H22.0591C22.0318 18.722 21.841 19.3429 21.5049 19.8866C20.8488 20.9212 19.6127 21.6277 17.8289 21.9842L16.7917 22.1909V25.8334H18.0833C21.678 25.8334 24.4202 24.8375 26.2324 22.8729ZM12.0151 22.8729C14.4537 20.2276 14.207 16.8305 14.1993 16.7917V6.45841C14.1993 6.11584 14.0632 5.7873 13.821 5.54507C13.5787 5.30283 13.2502 5.16675 12.9076 5.16675H5.15761C3.7329 5.16675 2.57428 6.32537 2.57428 7.75008V16.7917C2.57428 17.1343 2.71037 17.4629 2.9526 17.7051C3.19483 17.9473 3.52338 18.0834 3.86595 18.0834H7.8417C7.81441 18.722 7.62361 19.3429 7.28757 19.8866C6.63141 20.9212 5.39528 21.6277 3.61149 21.9842L2.57428 22.1909V25.8334H3.86595C7.46066 25.8334 10.2029 24.8375 12.0151 22.8729Z" fill="#00255C" />
                  </svg>
                </div>
              </div>

              <div class="wptb-item--holder">
                <p class="wptb-item--description"> {{$testomonial->message}}</p>
                <div class="wptb-item--meta">
                  <div class="wptb-item--meta-left">
                    <h4 class="wptb-item--title">{{$testomonial->name}}</h4>
                    <h6 class="wptb-item--designation">{{$testomonial->occupation}}</h6>
                  </div>
                  <div class="wptb-item--meta-right bg-gradient-one">
                    <i class="bi bi-star-fill"></i> {{$testomonial->stars}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- pagination dots -->
      <div class="wptb-swiper-dots">
        <div class="swiper-pagination"></div>
      </div>
      <!-- !pagination dots -->
    </div>
  </div>
</section>