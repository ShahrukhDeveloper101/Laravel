@include('components.header')
<style>
    .navbar.validnavs.navbar-default .navbar-nav li a{
        color: white
    }
    .navbar.sticked.validnavs.navbar-default .navbar-nav li a{
        color: black
    }
 
</style>
<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center bg-dark text-light" style="background-image: url(img/shape/42.png);padding: 0;height: 8rem;">
        
    </div>
<!-- End Breadcrumb -->

<!-- Start Blog
    ============================================= -->
    <div class="blog-area blog-grid-colum home-blog default-padding pt-4">
      <div class="container">
      <h1 class="text-center pb-5">Youtube Videos</h1>
    <div class="row">
      @if ($youtube->isNotEmpty())
        @foreach ($youtube as $key)
        <div class="col-lg-4 mb-50">
          <div class="blog-style-one">
            <div class="thumb">
              <a href="{{route('home.youtube_blog_detail', $key->slug)}}"><img src="uploads/youtube/{{$key->banner_image}}" alt="{{$key->slug}}"></a>
            </div>
            <div class="info">
              <div class="meta">
                <ul>
                  <li>
                    <a href="#">Shahrukh Amir</a>
                  </li>
                  <li>
                    {{$key->created_at}}
                  </li>
                </ul>
              </div>
              <h3><a href="{{route('home.youtube_blog_detail', $key->slug)}}">{{$key->title}}</a></h3>
              <p><a href="{{route('home.youtube_blog_detail', $key->slug)}}" class="text-secondary fw-normal">{{$key->seo_description}}</a></p>
              <a href="{{route('home.youtube_blog_detail', $key->slug)}}" class="button-regular">
                Continue Reading <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      @endif
    </div>
  </div>
</div>
@include('components.footer')