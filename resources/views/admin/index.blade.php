@include('admin.components.head')
<body>
  <!-- ======= Header ======= -->
  @include('admin.components.header')
  <!-- End Header -->
  <!-- ======= Sidebar ======= -->
  @include('admin.components.sidebar')
  <!-- End Sidebar-->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-6">
              <a href="{{route('admin.view_portfolios')}}">
                <div class="card info-card sales-card">
  
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
                    <h5 class="card-title">Portfolio</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$portfolios}}</h6>
                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </a>
            </div>
            <div class="col-xxl-3 col-md-6">
              <a href="{{route('admin.contact')}}">
                <div class="card info-card sales-card">
  
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
                    <h5 class="card-title">Contact</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$contact}}</h6>
                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </a>
            </div>
            <div class="col-xxl-3 col-md-6">
              <a href="{{route('admin.newsletter')}}">
                <div class="card info-card sales-card">
  
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
                    <h5 class="card-title">Newsletter</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$newsletter}}</h6>
                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </a>
            </div>
            <div class="col-xxl-3 col-md-6">
              <a href="{{route('admin.view_blogs')}}">
                <div class="card info-card sales-card">
  
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
                    <h5 class="card-title">Blogs</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$blogs}}</h6>
                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </a>
            </div>
            <div class="col-xxl-3 col-md-6">
              <a href="{{route('admin.view_services')}}">
                <div class="card info-card sales-card">
  
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
                    <h5 class="card-title">Services</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$services}}</h6>
                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </a>
            </div>
            {{-- <div class="col-xxl-3 col-md-6">
              <a href="{{route('admin.emails')}}">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Emails</h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$emails}}</h6>
                      </div>
                    </div>
                  </div>
  
                </div>
              </a>
            </div> --}}
            <!-- End Sales Card -->
          </div>
        </div>
        <!-- End Left side columns -->
      </div>
    </section>
  </main><!-- End #main -->
  <!-- Vendor JS Files -->
@include('admin.components.footer')
</body>
</html>