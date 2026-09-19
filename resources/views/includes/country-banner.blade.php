<div>
  <section class="hero-banner bottom-banner fade"
    data-aos="{{ $animation ?? 'zoom-in-up' }}"
    data-aos-delay="100">

    <img src="{{ asset('website-static/images/' . $image) }}"
      class="uk-head-img"
      alt="{{ $alt ?? 'Country banner' }}">

    <div class="container-fluid">
      <div class="row align-items-start text-left">
        <div class="col-lg-12">
          <div class="uk-head-buttom">
            <div class="d-flex flex-wrap gap-3">

              <a href="https://api.whatsapp.com/send?phone=919879476666&text={{ urlencode('Welcome to seven countries immigration and education pvt. ltd.') }}"
                class="btn-custom-red"
                target="_blank"
                rel="noopener noreferrer">

                <i class="fa fa-mouse-pointer"></i>
                Get Free Consultation
              </a>

              <a href="{{ url('/appointments') }}"
                class="btn-custom-outline">

                Get an Appointment
                <i class="fa fa-arrow-right ms-1"></i>
              </a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>