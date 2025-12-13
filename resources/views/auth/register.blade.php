

<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/boxing.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/quill.snow.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/quill.bubble.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/remixicon.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/dstyle.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->

<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

         

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" action="registersystem" method="POST"  novalidate>
                    @csrf 
                    <div class="col-12">
                      <label for="yourName" class="form-label">Username</label>
                      <input type="name" name="username" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
                    
                
                  

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Confirm your password!</div>
                    </div>

                  <input type="hidden" name="balance" value="0">
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>

                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
                    </div>
                  @error('password')
                      <small class="text-danger">{{ $message }}</small>
                  @enderror

                  </form>

                </div>
              </div>



            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
</body>
<script>
        function formatCardNumber() {
            let input = document.getElementById('cardNumberInput');
            let value = input.value.replace(/\D/g, '').substring(0, 16);
            value = value.replace(/(\d{4})(?=\d)/g, '$1 ');
            input.value = value;
        }
    </script>
