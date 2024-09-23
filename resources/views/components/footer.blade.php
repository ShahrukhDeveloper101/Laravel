<!-- Start Footer 
============================================= -->
<footer class="bg-dark secondary text-light">
    <div class="container px-md-0 px-3">
      <div class="f-items default-padding">
        <div class="row">
          <!-- Singel Item -->
          <div class="col-lg-5 col-md-6 footer-item pr-50 pr-xs-15 pr-md-15">
            <div class="f-item about">
              <img class="logo d-md-block d-none" src="../img/Logo/shahrukh_developer_logo_transparent_bg.png" alt="Logo">
    
              <div class="f-item newsletter">
                <p>
                  Join our subscribers list to get the instant <br> latest news and special offers.
                </p>
                <form action="{{route('home.store_newsletter')}}" method="POST">
                  @csrf
                  <div class="row" style="width: 100%;margin: 0 auto;">
                    <div class="col-9 pe-2 ps-0">
                      <input type="email" placeholder="Your Email" class="form-control" name="email">
                    </div>
                    <div class="col-3 px-0">
                      <button type="submit">Subscribe</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="copyright-text mt-40">
                <p>Crafted with ❤️ by <a style="color: rgb(16, 57, 59)" href="{{route('home.index')}}">Shahrukh Developer</a></p>
              </div>
              {{-- <div class="footer-social mt-20">
                <ul>
                  <li><a href="https://youtube.com/@learncodewithshahrukh" target="_blank"><i class="fab fa-youtube"></i></a></li>
                  <li><a href="https://www.facebook.com/profile.php?id=100010314288250" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/shahrukhamirbutt/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="https://www.instagram.com/learncodewithshahrukh/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://github.com/ShahrukhDeveloper101" target="_blank"><i class="fab fa-github"></i></a></li>
                  <li><a href="https://www.tiktok.com/@learncodewithshahrukh" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                </ul>
              </div> --}}
            </div>
          </div>
          <!-- End Singel Item -->
    
          <!-- Singel Item -->
          <div class="col-lg-2 col-6 footer-item">
            <div class="f-item link">
              <h4 class="widget-title">Company</h4>
              <ul>
                <li>
                  <a href="{{route('home.index')}}">Home</a>
                </li>
                <li>
                  <a href="{{route('home.about')}}">About</a>
                </li>
                <li>
                  <a href="{{route('home.services')}}">Services</a>
                </li>
                <li>
                  <a href="{{route('home.portfolio','all')}}">Portfolio</a>
                </li>
                <li>
                  <a href="{{route('home.blog')}}">Blog</a>
                </li>
                <li>
                  <a href="{{route('home.contact')}}">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Singel Item -->
    
          <!-- Singel Item -->
          <div class="col-lg-2 col-6 footer-item">
            <div class="f-item link">
              <h4 class="widget-title">Community</h4>
              <ul>
                <li>
                  <a href="https://youtube.com/@learncodewithshahrukh" target="_blank"> Youtube</a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/shahrukhamirbutt/" target="_blank"></i> Linkedin</a>
                </li>
                <li>
                  <a href="https://github.com/ShahrukhDeveloper101" target="_blank">Github</a>
                </li>
                <li>
                  <a href="https://www.instagram.com/learncodewithshahrukh/" target="_blank">Insatgram</a>
                </li>
                <li>
                  <a href="https://www.facebook.com/profile.php?id=100010314288250" target="_blank">Facebook</a>
                </li>
                <li>
                  <a href="https://www.tiktok.com/@learncodewithshahrukh" target="_blank">Tiktok</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Singel Item -->
    
          <!-- Singel Item -->
          <div class="col-lg-3 col-md-6 item">
            <div class="footer-item contact">
              <h4 class="widget-title">Contact Info</h4>
              <ul>
                <li>
                  <div class="icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="content">
                    <strong>Email:</strong>
                    <a href="mailto:contact@shahrukhdeveloper.com">contact@shahrukhdeveloper.com</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Singel Item -->
    
        </div>
      </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom bg-dark text-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>
              Crafted with ❤️ by <a style="color: #ffdf2c" href="{{route('home.index')}}">Shahrukh Developer</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery.appear.js') }}"></script>
      <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('js/modernizr.custom.13711.js') }}"></script>
      <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('js/wow.min.js') }}"></script>
      <script src="{{ asset('js/progress-bar.min.js') }}"></script>
      <script src="{{ asset('js/circle-progress.js') }}"></script>
      <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
      <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
      <script src="{{ asset('js/count-to.js') }}"></script>
      <script src="{{ asset('js/jquery.scrolla.min.js') }}"></script>
      <script src="{{ asset('js/YTPlayer.min.js') }}"></script>
      <script src="{{ asset('js/TweenMax.min.js') }}"></script>
      <script src="{{ asset('js/typed.js') }}"></script>
      <script src="{{ asset('js/validnavs.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>

    </body>
    
    <!-- Mirrored from validthemes.net/site-template/anaton/personal-portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 16:06:36 GMT -->
    
    </html>