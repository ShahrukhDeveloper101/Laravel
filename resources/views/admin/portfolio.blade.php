@include('admin.components.head')
<body>

  <!-- ======= Header ======= -->
  @include('admin.components.header')

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.components.sidebar')

  <!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              {{-- <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div> --}}

              <div class="card-body">
                <h5 class="card-title">{{$portfolio->title}}</h5>
                    {!!$portfolio->short_description!!}

                    <h5 class="card-title">Details</h5>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label fw-bold">Title:</div>
                    <div class="col-lg-9 col-md-8">{{$portfolio->title}}</div>
                    </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label fw-bold">Category:</div>
                    <div class="col-lg-9 col-md-8">{{$portfolio->category}}</div>
                    </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label fw-bold">Industry:</div>
                    <div class="col-lg-9 col-md-8">{{$portfolio->industry}}</div>
                    </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label fw-bold">Project Type:</div>
                    <div class="col-lg-9 col-md-8">{{$portfolio->project_type}}</div>
                    </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label fw-bold">Location:</div>
                    <div class="col-lg-9 col-md-8">{{$portfolio->country}}</div>
                    </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label fw-bold">Date:</div>
                    <div class="col-lg-9 col-md-8">{{$portfolio->date}}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label fw-bold">Order:</div>
                      <div class="col-lg-9 col-md-8">{{$portfolio->order}}</div>
                      </div>

                    <div class="row my-3">
                        @if(is_array($portfolio->all_images))
                            @foreach ($portfolio->all_images as $image)
                                <div class="col-lg-6 col-md-6 image-item my-3">
                                    <img src="{{ asset('uploads/portfolio/' . $image) }}" class="img-fluid">
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="row">
                    <div class="col-12">
                        {!!$portfolio->main_description!!}
                    </div>
                    </div>
                </div><!-- End Bordered Tabs -->
              </div>
            </div>
          </div><!-- End Recent Sales -->
        <!-- Right side columns -->
      </div>
    </section>

  </main><!-- End #main -->

   

  <!-- Vendor JS Files -->
@include('admin.components.footer')
 
</body>

</html>