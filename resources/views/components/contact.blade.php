<style>
  /* Loading Spinner CSS */
.loading-spinner {
    position: fixed; /* Ensure it stays in place while scrolling */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999; /* Make sure it appears above other content */
    display: flex;
    align-items: center;
    justify-content: center;
}

.spinner-border {
    width: 3rem;
    height: 3rem;
    border-width: 0.3em;
    border-color: #000 transparent transparent transparent;
    animation: spinner-border .75s linear infinite;
}

@keyframes spinner-border {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>
<div class="loading-spinner d-none">
  <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
  </div>
</div>
<div id="contact" class="contact-area overflow-hidden secondary default-padding">
  <div class="container">
      <div class="row align-center">
          <div class="col-tact-stye-one col-lg-5 pr-60 pr-md-15 pr-xs-15">
               
              <div class="col-md-10 alert alert-success mx-4" style="display: none;">
                  {{ Session::get('success') }}
              </div>
               
              <div class="contact-style-one-info">
                  <div class="mb-30">
                      <h2>Contact Information</h2>
                      <p>
                          Feel free to reach out to me using the form. I usually respond within 24 hours.
                      </p>
                  </div>
                  <ul class="d-md-block d-none"> 
                      <li class="wow fadeInUp" data-wow-delay="300ms">
                          <div class="icon">
                              <i class="fas fa-map-marker-alt"></i>
                          </div>
                          <div class="info">
                              <h4 class="title">Location</h4>
                              <p>
                                  Gujrat, Pakistan
                              </p>
                          </div>
                      </li>
                      <li class="wow fadeInUp" data-wow-delay="500ms">
                          <div class="icon">
                              <i class="fas fa-envelope-open-text"></i>
                          </div>
                          <div class="info">
                              <h4 class="title">Contact Email</h4>
                              <a href="mailto:info@shahrukhdeveloper.com">info@shahrukhdeveloper.com</a>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-tact-stye-one col-lg-7">
              <div class="contact-form-style-one">
                  <h4 class="sub-heading">Have Questions?</h4>
                  <h2 class="title" id="bookingFormTitle">Book a meeting</h2>
                  <form id="contactForm" action="{{ route('home.store_contact') }}" method="post" class=" ">
                      @csrf
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="form-group">
                                  <input class="@error('name') is-invalid @enderror form-control" id="name" name="name" placeholder="Name" type="text" value="{{ old('name') }}">
                                  @error('name')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <input class="@error('email') is-invalid @enderror form-control" id="email" name="email" placeholder="Email" type="email" value="{{ old('email') }}">
                                  @error('email')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                <input class="@error('phone') is-invalid @enderror form-control" id="phone" name="phone" placeholder="+13012345678" type="text" value="{{ old('phone') }}">
                                @error('phone')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                <select class="@error('category') is-invalid @enderror form-control" id="category" onchange="categoryClicked()">
                                  <option selected disabled>Please select project category</option>
                                  <option value="wordpress" {{ old('category') == 'wordpress' ? 'selected' : '' }}>WordPress</option>
                                  <option value="shopify" {{ old('category') == 'shopify' ? 'selected' : '' }}>Shopify</option>
                                  <option value="php" {{ old('category') == 'php' ? 'selected' : '' }}>PHP</option>
                                  <option value="mern" {{ old('category') == 'mern' ? 'selected' : '' }}>MERN Stack</option>
                              </select>
                              @error('category')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                              <input type="hidden" name="category" id="hiddenCategory">
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <select class="@error('budget') is-invalid @enderror form-control" id="budget" onchange="budgetClicked()">
                                <option selected disabled>Please select budget</option>
                                <option  value="0 - 500" {{ old('budget') == '0 - 500' ? 'selected' : '' }}>0 - 500$</option>
                                <option  value="500 - 1000" {{ old('budget') == '500 - 1000' ? 'selected' : '' }}>501 - 1000$</option>
                                <option  value="1000 - 5000" {{ old('budget') == '1000 - 5000' ? 'selected' : '' }}>1000 - 5000$</option>
                                <option  value="5000+" {{ old('budget') == '5000+' ? 'selected' : '' }}>5000$ +</option>
                              </select>
                              @error('budget')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <input type="hidden" name="budget" id="hiddenBudget">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-lg-12">
                              <div class="form-group comments">
                                  <textarea class="@error('project_detail') is-invalid @enderror form-control" id="project_detail" name="project_detail"
                                      placeholder="Tell Us About Project">{{ old('project_detail') }}</textarea>
                                  @error('project_detail')
                                  <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                      </div>
                      <div class="row mt-md-0 mt-3">
                          <div class="col-lg-12">
                            <button type="submit" id="submit">
                                  <i class="fa fa-paper-plane"></i> Get in Touch
                              </button>
                          </div>
                      </div>
                      <!-- Alert Message -->
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  function budgetClicked() {
    var selectedValue = $("#budget").val();
    $('#hiddenBudget').val(selectedValue);
  }
  function categoryClicked() {
    var selectedValue = $("#category").val();
    $('#hiddenCategory').val(selectedValue);
  }
    

$(document).ready(function() {
    $('#submit').click(function(event) {
        event.preventDefault(); // Prevent the default form submission
        
        // Disable the submit button
        $('#submit').prop('disabled', true);
        
        // Show a loading spinner or animation
        $('.loading-spinner').removeClass('d-none');

        // Create a new FormData object
        var formData = new FormData();
        
        // Manually append each form field's value
        formData.append('name', $('#name').val());
        formData.append('email', $('#email').val());
        formData.append('phone', $('#phone').val());
        formData.append('category', $('#hiddenCategory').val());
        formData.append('budget', $('#hiddenBudget').val());
        formData.append('project_detail', $('#project_detail').val());
        formData.append('_token', $('input[name="_token"]').val()); // CSRF token
        $.ajax({
            url: $('#contactForm').attr('action'), // Form action URL
            type: 'POST', // Form method
            data: formData, // Form data
            processData: false, // Prevent jQuery from automatically transforming the data into a query string
            contentType: false, // Prevent jQuery from setting content type header
            success: function(response) {
                console.log("Success Response:", response); // Debug success response
                if (response.success) {
                    $('.text-danger').remove();
                    $('.alert-success').removeClass('d-none');
                    $('.alert-success').text(response.message).show();
                    // Re-enable the submit button after a short delay
                    setTimeout(() => {
                        $('#submit').prop('disabled', false);
                    }, 1000);
                    setTimeout(() => {
                      $('.alert-success').addClass('d-none');                      
                    }, 4000);
                }
                $('.loading-spinner').addClass('d-none');
                // Reset form
                $('#contactForm')[0].reset();
                $('#contactForm select').each(function() {
                    $(this).prop('selectedIndex', 0);
                });
            },
            error: function(xhr) {
                console.log("Error Response:", xhr.responseJSON); // Debug error response
                var errors = xhr.responseJSON.errors;
                $('.text-danger').remove(); // Remove previous error messages
                $.each(errors, function(key, value) {
                    // Add error message after the respective field
                    $('input[name="' + key + '"], textarea[name="' + key + '"], select[name="' + key + '"]').after('<span class="text-danger">' + value[0] + '</span>');
                });
                // Hide the loading spinner
                $('.loading-spinner').addClass('d-none');
                // Re-enable the submit button
                $('#submit').prop('disabled', false);
            }
        });
    });
});


  </script>
  
