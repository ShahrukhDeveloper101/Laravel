<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <!-- ========== Page Title ========== -->
  <title>{{$seo->title}}</title>

  <meta name="description" content="{{$seo->seo_description}}">
  <?php
    // Sample JSON-encoded string (from your database)
    $json_tags = $seo->tags;

    // Decode the JSON string into a PHP array
    $tags_array = json_decode($json_tags, true);

    // Join the array elements into a comma-separated string
    $tags_string = implode(', ', $tags_array);

   
  ?>

  <meta name="keywords" content="{{$tags_string}}">
  <?php
  // Generate the canonical URL
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
  $canonicalUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  ?>
  
  <!-- Canonical Link -->
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="robots" content="index, follow">


  <!-- ========== Favicon Icon ========== -->
  <link rel="shortcut icon" href="{{ asset('img/Logo/shahrukh_developer_logo_dark_bg.png') }}" type="image/x-icon">

  <!-- ========== Start Stylesheet ========== -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/elegant-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/flaticon-set.css') }}" rel="stylesheet">
  <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('css/validnavs.css') }}" rel="stylesheet">
  <link href="{{ asset('css/helper.css') }}" rel="stylesheet">
  <link href="{{ asset('css/unit-test.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- ========== End Stylesheet ========== -->

  <!-- ========== Start JavaScript ========== -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- ========== End JavaScript ========== -->

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BWJJ79LQK5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BWJJ79LQK5');
</script>
</head>
<style>
  @media (max-width:568px){
    nav.navbar.validnavs ul.nav li.dropdown ul.dropdown-menu>li>a, .navbar.validnavs.navbar-default .navbar-nav li a{
      color: black !important;
    }
  }
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
</style>
<body id="home">

  <!-- Header ============================================= -->
  <header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed dark no-background">

      <div class="container d-flex justify-content-between align-items-center">


        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand smooth-menu ml-auto" href="{{route('home.index')}}">
            <img src="../img/Logo/shahrukh_developer_logo_transparent_bg.png" class="logo" alt="Logo" loading="lazy">
          </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">

          <img src="../img/Logo/shahrukh_developer_logo_transparent_bg.png" alt="Logo" loading="lazy">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu" aria-label="Toggle navigation">
            <i class="fa fa-times"></i>
          </button>

          <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
            <li>
              <a class="smooth-menu" href="{{route('home.index')}}">Home</a>
            </li>
            <!-- <li class="dropdown">
                          <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                          <ul class="dropdown-menu">
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Multipage</a>
                                  <ul class="dropdown-menu">
                                      <li><a href="creative-agency.html">Creative Agency <span class="badge">New</span></a></li>
                                      <li><a href="chatbot.html">Chatbot <span class="badge">New</span></a></li>
                                      <li><a href="app-landing.html">App Landing <span class="badge">New</span></a></li>
                                      <li><a href="index.html">SaaS Landing</a></li>
                                      <li><a href="index-2.html">Software Landing</a></li>
                                      <li><a href="personal-portfolio.html">Personal Portfolio</a></li>
                                      <li><a href="index-3.html">SaaS Marketing</a></li>
                                      <li><a href="ai-writer.html">AI Writter</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Onepage</a>
                                  <ul class="dropdown-menu">
                                      <li><a href="index-op.html">SaaS Landing</a></li>
                                      <li><a href="index-op-2.html">Software Landing</a></li>
                                      <li><a href="personal-portfolio.html">Personal Portfolio</a></li>
                                      <li><a href="index-op-3.html">SaaS Marketing</a></li>
                                      <li><a href="ai-writter-op.html">AI Writter</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Home Dark</a>
                                  <ul class="dropdown-menu">
                                      <li><a href="index-dark.html">SaaS Landing</a></li>
                                      <li><a href="index-2-dark.html">Software Landing</a></li>
                                      <li><a href="index-3-dark.html">SaaS Marketing</a></li>
                                  </ul>
                              </li>
                              <li><a target="_blank" href="comming-soon.html">Home Comming Soon</a></li>
                          </ul>
                      </li> -->
            <li>
              <a class="smooth-menu" href="{{route('home.about')}}">About</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('home.services')}}">Services</a>
              <ul class="dropdown-menu">
                @if($categories->isNotEmpty())
                  @foreach($categories as $category)
                    <li class="dropdown">
                      <a target="_blank text-capitalize" href="{{route('home.service_detail', $category)}}">{{$category}}</a>
                    </li>
                  @endforeach
                @endif
                
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('home.portfolio','all')}}">Portfolio</a>
              <ul class="dropdown-menu">
                <li class="dropdown">
                  <a target="_blank text-capitalize" href="{{route('home.portfolio','all')}}">All Websites</a>
                </li>
                <li class="dropdown">
                  <a target="_blank text-capitalize" href="{{route('home.portfolio', 'lawyer')}}">Law Websites</a>
                </li>
                {{-- <li class="dropdown">
                  <a target="_blank text-capitalize" href="{{route('home.portfolio', 'business_coaches')}}">Business Coaching Websites</a>
                </li> --}}
              </ul>
            </li>
            
            <li>
              <a class="smooth-menu" href="{{route('home.blog')}}">Blog</a>
            </li>
            <li>
              <a class="smooth-menu" href="{{route('home.youtube')}}">Youtube</a>
            </li>
            <li>
              <a class="smooth-menu" href="{{route('home.contact')}}">Contact</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->

        <div class="attr-right">
          <!-- Start Atribute Navigation -->
          <div class="attr-nav">
            <ul class="d-flex">
              <li class="button secondary">
                <a class="smooth-menu text-dark" href="{{route('home.contact')}}">Book a meeting</a>
              </li>
              <?php  
              //  <li class=" ">
              //   <a class="  glow-on-hover " href="{{route('home.refer_and_earn')}}">Refer & Earn</a>
              // </li> 
                ?>
            </ul>
          </div>
          <!-- End Atribute Navigation -->

          <!-- Overlay screen for menu -->
          <div class="overlay-screen"></div>
          <!-- End Overlay screen for menu -->

        </div>
        <!-- Main Nav -->

      </div>
    </nav>
    <!-- End Navigation -->
  </header>