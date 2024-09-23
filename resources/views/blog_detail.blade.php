@include('components.header')
<style>
  .navbar.validnavs.navbar-default .navbar-nav li a {
    color: white
  }

  .navbar.sticked.validnavs.navbar-default .navbar-nav li a {
    color: black
  }
 
  .contact-form-style-one{
    padding: 30px;
  }
  h3 {
    margin: 1rem 0 0 0;
  }
</style>
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area text-center bg-dark text-light" style="height: 8rem;width: 100%;  ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 ">
        <h1>{{$blog->title}}</h1>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
    ============================================= -->
<div class="blog-area single full-blog right-sidebar full-blog default-padding">
  <div class="container">
    <div class="blog-items">
      <div class="row">
        <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
          <div class="blog-style-one item mb-0">

            <div class="blog-item-box">

              <div class="thumb">
                <a href="blog-single-with-sidebar.html"><img src="../uploads/blog/{{$blog->banner_image}}" class="img-fluid" alt="Thumb"></a>
              </div>
              <div class="info">
                <div class="meta">
                  <ul>
                    <li>
                      <i class="fas fa-user"></i> <a href="#">Shahrukh Butt</a>
                    </li>
                    <li>
                      <i class="fas fa-calendar-alt"></i> 
                      <?php 
                        $dateTime = $blog->created_at;
                        $date = new DateTime($dateTime);
                        // Format as "Day Month Year" (e.g., "21 July 2024")
                        $formattedDate = $date->format('d F Y');
                        echo $formattedDate;
                      ?>
                    </li>
                  </ul>
                </div>
                {!!$blog->main_description!!}
                <a href="{{route('home.contact')}}" class="btn-shape mt-35">Book a meeting</a>
              </div>
            </div>
          </div>
           

          <!-- Start Post Pagination -->
          {{-- <div class="post-pagi-area mt-0">
            <div class="post-previous">
              <a href="blog-single-with-sidebar.html">
                <div class="icon"><i class="fas fa-angle-double-left"></i></div>
              </a>
            </div>
            <div class="post-next">
              <a href="blog-single-with-sidebar.html">
                <div class="icon"><i class="fas fa-angle-double-right"></i></div>
              </a>
            </div>
          </div> --}}
          <!-- End Post Pagination -->
        </div>
        <!-- Start Sidebar -->
        <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-50 mt-xs-50">
          <aside>
            <div class="sidebar-item recent-post">
              <h4 class="title">Recent Post</h4>
              <ul>
                @if($recent_blogs->isNotEmpty())
                  @foreach($recent_blogs as $blog_item)
                    <li>
                      <div class="thumb">
                        <a href="{{route('home.blog_detail', $blog_item->slug)}}">
                          <img src="../uploads/blog/{{$blog_item->banner_image}}" alt="{{$blog_item->title}}" style="object-fit: cover; height: 80px;">
                        </a>
                      </div>
                      <div class="info">
                        <div class="meta-title">
                          <span class="post-date">
                            <?php 
                              $dateTime = $blog_item->created_at;
                              $date = new DateTime($dateTime);
                              // Format as "Day Month Year" (e.g., "21 July 2024")
                              $formattedDate = $date->format('d F Y');
                              echo $formattedDate;
                            ?>
                          </span>
                        </div>
                        <a href="{{route('home.blog_detail', $blog_item->slug)}}" style="font-size: 18px; line-height: 20px;">{{$blog_item->title}}</a>
                      </div>
                    </li>
                  @endforeach
                @endif
              </ul>
            </div>
            
            <div class="sidebar-item tags">
              <h4 class="title">Tags</h4>
              <div class="sidebar-info">
                @php
                  // Decode JSON to PHP array
                  $tags = json_decode($blog->tags, true);
                @endphp
                @if (!empty($tags) && is_array($tags))
                  <ul>
                    @foreach ($tags as $tag)
                      <li><a>{{ $tag }}</a></li>
                    @endforeach
                  </ul>
                @else
                  <p>No tags available.</p>
                @endif
              </div>
            </div>
            
          </aside>
        </div>
        <!-- End Start Sidebar -->
      </div>
    </div>
  </div>
</div>
<!-- End Blog -->
@include('components.footer')