@include('admin.components.head')

<body>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="img/logo/shahrukh_developer_logo_transparent_bg.png" alt="">
                  <span class="d-none d-lg-block">Shahrukh Developer</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Admin Dashboard</h5>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      @if (Session::has('success'))
                          <div class="alert alert-success">{{ Session::get('success') }}</div>
                      @endif
                      @if (Session::has('error'))
                          <div class="alert alert-danger">{{ Session::get('error') }}</div>
                      @endif
                    </div>
                  </div>
                  <form action="{{ route('admin.authenticate') }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-12">
                      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                      @error('email')
                          <p class="invalid-feedback">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="col-12">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                
                </div>
              </div>

              <div class="credits">
                Designed by <a href="{{route('home.index')}}">Shahrukh Developer</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  @include('admin.components.footer')
</body>