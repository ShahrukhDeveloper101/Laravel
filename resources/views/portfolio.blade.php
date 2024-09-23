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

    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="row ">
                <!-- Single Item -->
                @if ($portfolio->isNotEmpty())
                    @foreach ($portfolio as $key)
                        <div class="col-md-4 gallery-content my-3">
                            <div class="gallery-item">
                                <div class="gallery-style-one">
                                    <div class="thumb">
                                        <img src="../uploads/portfolio/{{$key->banner_image}}" alt="thumb">
                                        <a href="{{route('home.portfolio_detail', $key->slug)}}"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{route('home.portfolio_detail', $key->slug)}}">{{$key->name}}</a></h4>
                                        <ul class="gallery-list">
                                            <li>{{$key->project_type}}</li>
                                            <li>{{$key->industry}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- End Gallery -->
@include('components.footer')
