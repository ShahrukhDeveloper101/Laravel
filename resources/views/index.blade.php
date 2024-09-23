@include('components.header')
@php
  use Illuminate\Support\Str;
@endphp
<style>
/* Initial state with the blurred image */
.lazyload {
  filter: blur(2px);
  transform: scale(0.95);
  transition: 0.5s;
}

/* Remove blur and scale to original size when the image has loaded */
.lazyloaded {
  filter: blur(0);
  transform: scale(1);
}

/* Ensure images cover their container */
 


</style>
<!-- Start Banner Area ============================================= -->
<div class="banner-style-five-area auto-height overflow-hidden bg-cover" style="background-image: url(img/shape/banner-6.jpg);">
  {{-- <a href="{{route('home.send')}}" class="btn">Send Email</a> --}}
    <!-- Single Item -->
    <div class="banner-style-five">
      <div class="container">
        <div class="content">
          <div class="row align-center">
            <div class="col-12 pl-60 pl-md-15 pl-xs-15 d-md-none">
              <div class="thumb mt-3">
                <img style="transform: rotateY(180deg);" data-src="img/Profile/Untitled design.jpg" src="img/Profile/Untitled design.jpg" alt="Shahrukh Developer Profile Picture" class="img-fluid lazyload blur-up">

                <div class="author-social">
                  <input type="checkbox" id="toggle" class="share-toggle" hidden>
                  <label for="toggle" class="share-button">
                    <i class="fas fa-plus"></i>
                  </label>
                  <a href="https://www.linkedin.com/in/shahrukhamirbutt/" target="_blank" class="share-icon linkedin">
                    <i class="fab fa-linkedin"></i>
                  </a>
                  <a href="https://web.facebook.com/profile.php?id=100010314288250" target="_blank" class="share-icon facebook">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="https://www.instagram.com/learncodewithshahrukh/" target="_blank" class="share-icon instagram">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 pr-50 pr-md-15 pr-xs-15 pb-md-0 pb-4">
              <div class="information">
                <h2>Hey, I'm Shahrukh</h2>
                <h4>
                  Expert in
                  <!-- type headline start-->
                  <span class="cd-headline clip is-full-width d-inline">
                    <!-- ROTATING TEXT -->
                    <span class="cd-words-wrapper d-inline">
                      <b class="is-visible">Website Development</b>
                      <b class="is-hidden">Mobile App Development</b>
                      <b class="is-hidden">Local Seo</b>
                    </span>
                  </span>
                  <!-- type headline end -->
                </h4>
                <p>
                  Passionate and dedicated custom Web & App Developer based in Pakistan, specializing in making solutions for Lawyers, Business Coaches, & finance professional. Let's <a href="{{route('home.contact')}}" class="btn text-dark bg-transparent p-0 text-decoration-underline">Book a meeting</a> to discuss your requirements!
                </p>
                <a href="{{route('home.contact')}}" class="btn-shape mt-35">Book a meeting</a>
              </div>
            </div>
            <div class="col-xl-6 pl-60 pl-md-15 pl-xs-15 d-md-block d-none">
              <div class="thumb">
                <img style="transform: rotateY(180deg);" data-src="img/Profile/Untitled design.jpg" src="img/Profile/Untitled design.jpg" alt="Shahrukh Developer Profile picture" class="lazyload blur-up">
                <div class="author-social">
                  <input type="checkbox" id="toggle" class="share-toggle" hidden>
                  <label for="toggle" class="share-button">
                    <i class="fas fa-plus"></i>
                  </label>
                  <a href="https://www.linkedin.com/in/shahrukhamirbutt/" target="_blank" class="share-icon linkedin">
                    <i class="fab fa-linkedin"></i>
                  </a>
                  <a href="https://web.facebook.com/profile.php?id=100010314288250" target="_blank" class="share-icon facebook">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="https://www.instagram.com/learncodewithshahrukh/" target="_blank" class="share-icon instagram">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Single Item -->
  </div>
  <!-- End Banner -->

  <!-- Start Performance ============================================= -->
  <div class="performance-area default-padding-top">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="site-heading text-center">
            <h4 class="sub-heading">Performance</h4>
            <h2 class="heading">Check my performance</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-12 offset-lg-1">
          <div class="performance-items">
            <!-- Single Item -->
            <div class="performance-item">
              <a href="https://stackoverflow.com/users/19239691/shahrukh-butt" target="_blank">
                <i class="fab fa-stack-overflow"></i> S. Overlfow
              </a>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="performance-item">
              <a href="https://github.com/ShahrukhDeveloper101" target="_blank">
                <i class="fab fa-github"></i> Github
              </a>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="performance-item">
              <a href="https://www.linkedin.com/in/shahrukhamirbutt/" target="_blank">
                <i class="fab fa-linkedin"></i> Linkedin
              </a>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="performance-item">
              <a href="https://youtube.com/@learncodewithshahrukh?si=RLZK48YZwb5xpiMH" target="_blank">
                <i class="fab fa-youtube"></i> Youtube
              </a>
            </div>
            <!-- End Single Item -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Performance -->

  <!-- Start About 
    ============================================= -->
  <div id="about" class="about-style-three-area">
    <div class="container">
      <div class="about-style-three-items">
        <div class="row align-center">
          <div class="col-lg-5">
            <div class="about-style-three text-light">
              <h2 class="heading">about me</h2>
              <p>
                I really love to create amazing product & provide qulaity services.
              </p>
              <ul class="about-list">
                <li><strong>Residence:</strong> Pakistan</li>
                <li><strong>Address:</strong> Gujrat, Pakistan</li>
                <li><strong>Email:</strong> info@shahrukhdeveloper.com</li>
                <li><strong>Work:</strong> Available now</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <ul class="work-now">
              <li>
                <div class="info">
                  <h4>YouTube Educator</h4>
                  <h4>Creator <a href="https://youtube.com/@learncodewithshahrukh" target="_blank" style="color: #ffdf2c;">@learncodewithshahrukh</a></h4>
                </div>
                <div class="work-time">2024 - Current</div>
              </li>
              <li>
                <div class="info">
                  <h4>Sr. PHP & Mern Stack Developer </h4>
                  <h4>Contract-Based Freelancer</h4>
                </div>
                <div class="work-time">2022 - Current</div>
              </li>
              <li>
                <div class="info">
                  <h4>Sr. PHP Developer </h4>
                  <h4>Mirros Innovation</h4>
                </div>
                <div class="work-time">2020 - 2022</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End About -->

 

  <!-- Start Portfolio 
    ============================================= -->
  <div id="portfolio" class="portfolio-style-two-area bg-gray default-padding">
    <div class="container">
      <div class="heading-left">
        <div class="row">
          <div class="col-xl-4">
            <h4 class="sub-heading">Portfolio Projects</h4>
            <h2 class="heading">Recent Projects</h2>
          </div>
          <div class="col-xl-8 px-0">
            <!-- End Mixitup Nav-->
            <div class="mix-item-menu">
              <button class="active" data-filter="*" aria-label="Tab Button All">ALL</button>
              <button data-filter=".wordpress" aria-label="Tab Button WordPress">WordPress</button>
              <button data-filter=".shopify" aria-label="Tab Button Shopify">Shopify</button>
              <button data-filter=".development" aria-label="Tab Button Custom Development">Custom <span class="d-md-inline-block d-none">Development</span> </button>
            </div>
            <!-- End Mixitup Nav-->
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="portfolio-style-two-items">
        <div class="row">
          <div class="col-lg-12">
            <div class="magnific-mix-gallery masonary">
              <div id="portfolio-grid" class="portfolio-items colums-2">
                <!-- Single Item -->
                @if($wp_portfolio->isNotEmpty())
                  @foreach ($wp_portfolio as $key)
                    <div class="pf-item wordpress">
                      <div class="thumb">
                        <img data-src="uploads/portfolio/{{$key->banner_image}}" src="uploads/portfolio/{{$key->banner_image}}" alt="{{$key->slug}}" class="lazyload blur-up">
                        <a href="uploads/portfolio/{{$key->banner_image;}}" class="item popup-link"><i class="fa fa-plus"></i></a>
                      </div>
                      <div class="info">
                        <h4><a href="{{route('home.portfolio_detail', $key->slug)}}">{{$key->name}}</a></h4>
                        <div class="cat">
                          <span>{{$key->project_type}}</span>
                          <span>{{$key->industry}}</span>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @endif
                @if($shopify_portfolio->isNotEmpty())
                  @foreach ($shopify_portfolio as $key)
                    <div class="pf-item shopify" >
                      <div class="thumb">
                        <img data-src="uploads/portfolio/{{$key->banner_image}}" src="uploads/portfolio/{{$key->banner_image}}" alt="{{$key->slug}}" class="lazyload blur-up">
                        <a href="uploads/portfolio/{{$key->banner_image}}" class="item popup-link"><i class="fa fa-plus"></i></a>
                      </div>
                      <div class="info">
                        <h4><a href="{{route('home.portfolio_detail', $key->slug)}}">{{$key->name}}</a></h4>
                        <div class="cat">
                          <span>{{$key->project_type}}</span>
                          <span>{{$key->industry}}</span>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @endif
                @if($custom_portfolio->isNotEmpty())
                  @foreach ($custom_portfolio as $key)
                    <div class="pf-item development">
                      <div class="thumb">
                        <img data-src="uploads/portfolio/{{$key->banner_image}}" src="uploads/portfolio/{{$key->banner_image}}" alt="{{$key->slug}}" class="lazyload blur-up">
                        <a href="uploads/portfolio/{{$key->banner_image;}}" class="item popup-link"><i class="fa fa-plus"></i></a>
                      </div>
                      <div class="info">
                        <h4><a href="{{route('home.portfolio_detail', $key->slug)}}">{{$key->name}}</a></h4>
                        <div class="cat">
                          <span>{{$key->project_type}}</span>
                          <span>{{$key->industry}}</span>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @endif
                <!-- End Single Item -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Portfolio -->

  <!-- Start Pricing 
    ============================================= -->
  <div id="pricing" class="pricing-style-four-area bg-dark text-light default-padding bottom-less">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="site-heading text-light text-center">
            <h5 class="sub-heading">Services</h5>
            <h2 class="heading">What services i offer</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid px-md-5">
      <div class="pricing-style-four-items">
        <div class="row">
          <div class="col-12">
            <div class="tab-content pricing-tab-content" id="nav-tabContent">
              <!-- Tab Single Item -->
              <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                <div class="row">
                  <!-- Single Item -->
                  @if($services->isNotEmpty())
                    @foreach($services as $key)
                      <div class="col-lg-3 mb-30">
                        <div class="pricing-style-four active text-md-start text-center" style="padding: 15px;">
                          
                          <img src="uploads/service/{{$key->logo}}" data-src="uploads/service/{{$key->logo}}" class="img-fluid lazyload blur-up" width="80" alt="{{$key->category}}">
                          <h4>{{$key->name}}</h4>  
                          <p>{{Str::limit($key->description, 70, '...')}}</p>
                          <a class="btn mt-25 btn-sm circle btn-theme secondary " href="{{route('home.service_detail', $key->category)}}">Learn More</a>
                        </div>
                      </div>
                    @endforeach
                  @endif
                  <!-- End Single Item -->
                </div>
              </div>
              <!-- End Tab Single Item -->

           
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Pricing -->


  <!-- Start Testimonials 
    ============================================= -->
    @include('components.testimonial')
  
  <!-- End Testimonials -->

  <!-- Start Contact Us 
    ============================================= -->
  @include('components.contact')
  <!-- End Contact -->

@include('components.footer')
 