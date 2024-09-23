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
              <div class="card-body">
                <h5 class="card-title">Newsletter </h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Email</th>
                      <th scope="col">Joined at</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($newsletter->isNotEmpty())
                      <?php  
                        $count=0;
                      ?>
                      @foreach ($newsletter as $key)
                        <?php  
                          $count++;
                        ?>
                        <tr>
                          <th scope="row">{{$count}}</th>
                          <td>{{$key->email}}</td>
                          <td>{{$key->created_at}}</td>
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