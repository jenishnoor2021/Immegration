<div class="wptb-newsletter bg-image" style="background-image: url('{{ asset('assets/img/background/bg-16.jpg') }}');">
  <div class="container">
    <div class="wptb-item--inner">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <h1 class="wptb-item--title wow fadeInLeft">Subscribe To Seven Countries
            For All the offers</h1>
        </div>
        <div class="col-md-6">
          <form method="POST" action="/inquireystore" id="quotation_form" name="quotation_form" class="newsletter-form">
            @csrf
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <button type="submit" class="btn-readmore style-icon" id="submitButton">
              <span class="btn-readmore--icon"> <i class="bi bi-send"></i> </span>
            </button>
            <div class="btn-readmore style-icon" id="loadingIcon" style="display: none;">
              <span class="btn-readmore--icon"><i class="fas fa-spinner fa-spin"></i></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@section('script')
<script>
  $(function() {

    $("form[name='quotation_form']").validate({
      rules: {
        email: {
          required: true,
        },
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
  document.getElementById('quotation_form').addEventListener('submit', function() {
    document.getElementById('submitButton').style.display = 'none';
    document.getElementById('loadingIcon').style.display = 'block';
  });
</script>
@endsection