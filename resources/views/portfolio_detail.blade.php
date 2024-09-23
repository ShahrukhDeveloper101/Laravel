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
    <div class="breadcrumb-area text-center bg-dark text-light" style="background-image: url(../uploads/portfolio/{{$portfolio->banner_image}});padding: 0;height: 40vh;">
        <div class="shadow d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.8);height: 100%;width: 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>{{$portfolio->name}}</h1>
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
                        <img src="../uploads/portfolio/{{$portfolio->banner_image}}" alt="{{$portfolio->banner_image}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="project-details-items">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">

                        <div class="top-info">
                            <div class="row">

                                <div class="col-lg-5 order-lg-last">
                                    <ul class="gallery-project-basic-info">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="info">
                                                Industry: <span>{{$portfolio->industry}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-layer-group"></i>
                                            </div>
                                            <div class="info">
                                                Project Type: <span>{{$portfolio->project_type}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                            <div class="info">
                                                Date: <span>
                                                    <?php 
                                                        $date = $portfolio->date;

                                                        // Create a DateTime object from the input date
                                                        $dateObject = new DateTime($date);

                                                        // Format the date to the desired format
                                                        $formattedDate = $dateObject->format('F j, Y'); // Example format: May 20, 2022

                                                    ?>
                                                    {{$formattedDate}}
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marked-alt"></i>
                                            </div>
                                            <div class="info">
                                                Location: <span>{{$portfolio->country}}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-7 pr-50 pr-md-15 pr-xs-15">
                                    <h2>{{$portfolio->name;}}</h2>
                                    {!!$portfolio->short_description!!}
                                </div>
                                
                            </div>
                        </div>

                        <div class="project-details mt-40">
                            {!!$portfolio->main_description!!}
                            <div class="row mt-50 g-4">
                                @if(is_array($portfolio->all_images))
                                    @foreach ($portfolio->all_images as $image)
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
