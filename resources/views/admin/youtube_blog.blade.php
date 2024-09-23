@include('admin.components.head')
<body>
<style>
    iframe{
        width: 100% !important;
        height: 100% !important;
    }
</style>
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
                <h5 class="card-title">{{$youtube_blog->title}}</h5>
                    {{$youtube_blog->seo_description}}

                    <h5 class="card-title">Details</h5>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label fw-bold">Title:</div>
                        <div class="col-lg-9 col-md-8">{{$youtube_blog->title}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label fw-bold">Tags:</div>
                        <div class="col-lg-9 col-md-8">
                            @php
                                $tags = json_decode($youtube_blog->tags);
                                @endphp
                            @if (!empty($tags) && is_array($tags))
                            @foreach ($tags as $tag)
                            {{ $tag }},  &nbsp;&nbsp;&nbsp;&nbsp; 
                            @endforeach
                            @else
                            <p>No tags available.</p>
                            @endif                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label fw-bold">Uploaded on:</div>
                        <div class="col-lg-9 col-md-8">{{$youtube_blog->created_at}}</div>
                    </div>
                    <div class="row my-3">
                        @if($youtube_blog->banner_image)
                        <div class="col-lg-6 col-md-6 image-item my-3">
                            <img src="{{ asset('uploads/youtube/' .$youtube_blog->banner_image) }}" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-6 image-item my-3">
                            {!!$youtube_blog->url!!}
                        </div>
                        @endif
                    </div>

                    <div class="row">
                    <div class="col-12">
                        {!!$youtube_blog->main_description!!}
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