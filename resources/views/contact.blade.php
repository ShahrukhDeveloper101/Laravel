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
    <div class="breadcrumb-area text-center bg-dark text-light" style="background-image: url(assets/img/shape/42.png);padding: 0;height: 8rem;">
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us 
    ============================================= -->
    @include('components.contact')
    <!-- End Contact -->
@include('components.footer')