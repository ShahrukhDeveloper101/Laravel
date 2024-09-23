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
                <h5 class="card-title">Contact Messages</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Category</th>
                      <th scope="col">Budget</th>
                      <th scope="col">Project Detail</th>
                      <th scope="col">Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($contact->isNotEmpty())
                      @foreach ($contact as $key)
                        <tr>
                          <th scope="row"># {{$key->id}} </th>
                          <td>{{$key->name}}</td>
                          <td><a href="#" class="text-primary">{{$key->email}}</a></td>
                          <td>{{$key->phone}}</td>
                          <td>{{$key->category}}</td>
                          <td>{{$key->budget}} $</td>
                          <td>{{$key->project_detail}}</td>
                          <td><span class="text-primary fw-bold">{{$key->created_at}}</span></td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>

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