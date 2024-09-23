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
<div class="blog-area blog-grid-colum home-blog default-padding">
  <div class="container">
    <div class="row">
      @if ($blog->isNotEmpty())
        @foreach ($blog as $key)
        <div class="col-lg-4 mb-50">
          <div class="blog-style-one">
            <div class="thumb">
              <a href="{{route('home.blog_detail', $key->slug)}}"><img src="uploads/blog/{{$key->banner_image}}" alt="Image Not Found"></a>
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
              <h3><a href="{{route('home.blog_detail', $key->slug)}}">{{$key->title}}</a></h3>
              <a href="{{route('home.blog_detail', $key->slug)}}" class="button-regular">
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