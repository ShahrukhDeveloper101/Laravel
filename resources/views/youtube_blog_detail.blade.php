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
    <div class="breadcrumb-area text-center bg-dark text-light" style="background-image: url(../uploads/youtube/{{$youtube->banner_image}});padding: 0;height: 40vh;">
        <div class="shadow d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.8);height: 100%;width: 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 pt-5">
                        <h1>{{$youtube->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

     <!-- Star Project Details Area
    ============================================= -->
    <div class="project-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-thumb">
                        {!!$youtube->url!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="project-details-items">
                <div class="row">
                    <div class="col-12">
                        <div class="project-details mt-40">
                            {!!$youtube->main_description!!}
                            <div class="row mt-50 g-4">
                                @if(is_array($youtube->all_images))
                                    @foreach ($youtube->all_images as $image)
                                        <div class="col-lg-6 col-md-6 image-item">
                                            <img src="{{ asset('uploads/portfolio/' . $image) }}" alt="Thumb">
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project Details Area -->
@include('components.footer')
