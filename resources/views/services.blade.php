@include('components.header')
<style>
    .navbar.validnavs.navbar-default .navbar-nav li a{
        color: white
    }
    .navbar.sticked.validnavs.navbar-default .navbar-nav li a{
        color: black
    }
 
</style>
@php
    use Illuminate\Support\Str;
@endphp
  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center bg-dark text-light" style="padding: 0;height: 8rem;">
         
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services 
    ============================================= -->
    <div class="default-padding bottom-less text-center bg-gray software-style-one-area">
        
        <div class="container-fluid px-5">
            <div class="row">
                @if ($services->isNotEmpty())
                    @foreach ($services as $key)
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="services-style-one">
                                <div class="icon mb-3">
                                    <img src="uploads/service/{{$key->logo}}" class="img-fluid" style="width: 70px;">
                                </div>
                                <div class="info">
                                    <h4><a href="{{route('home.service_detail', $key->category)}}">{{$key->name}}</a></h4>
                                    <span class="lh-base mt-3 fw-normal">{{ Str::limit($key->description, 80, '...') }}</span>
                                </div>
                                <a href="{{route('home.service_detail', $key->category)}}" class="icon-btn mt-3"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                @endif
                
                {{-- <div class="col-lg-3 col-md-6 mb-30">
                    <div class="services-style-one active">
                        <div class="icon">
                            <i class="flaticon-layers"></i>
                        </div>
                        <div class="info">
                            <span>Dynamic Options</span>
                            <h4><a href="services-details.html">Extensions & Addons</a></h4>
                        </div>
                        <a href="services-details.html" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div> --}}
                
            </div>
        </div>
    </div>
    <!-- End Services -->
 
    <div class="faq-area bg-cover pt-250 pt-xs-50 pt-md-120" style="background-image: url(assets/img/banner/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-5">
                    <div class="faq-style-one">

                        <div class="shape-arro">
                            <img src="img/shape/21.png" alt="Image not found">
                        </div>

                        <div class="heading">
                            <h2 class="title"> Want to ask <br> something from me?</h2>
                        </div>

                        <div class="faq-style-one-content">
                            <div class="tab-content faq-tab-content" id="nav-tabContent">

                                <!-- Tab Single Item -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                                    <div class="accordion" id="faqAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Why should I choose your web development services?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <p>
                                                        I bring extensive experience in creating tailored web solutions that align with your business goals. From custom WordPress websites to dynamic MERN stack applications, I ensure your digital presence stands out with quality craftsmanship and strategic insights.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    How can you improve my online presence?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <p>
                                                        Through strategic web development, I optimize your website for performance, usability, and search engine visibility. Whether it's enhancing user experience, implementing SEO best practices, or integrating analytics, I empower your business to attract and retain more visitors online.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Can you help me generate leads and increase sales through my website?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <p>
                                                        Yes, I specialize in building websites that not only attract visitors but also convert them into loyal customers. By optimizing user flows, implementing effective calls-to-action, and integrating robust e-commerce solutions like Shopify, I help drive revenue growth for your business.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab Single Item -->
        
                                <!-- Tab Single Item -->
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                                    <div class="accordion" id="faqAccordionTwo">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                    What ongoing support and maintenance do you provide after website launch?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#faqAccordionTwo">
                                                <div class="accordion-body">
                                                    <p>
                                                        I offer comprehensive support and maintenance services to ensure your website remains secure, up-to-date, and optimized for performance. From regular updates and backups to troubleshooting and scaling as your business grows, I'm committed to your long-term success online.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    How do you handle website updates and changes?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordionTwo">
                                                <div class="accordion-body">
                                                    <p>
                                                        I provide flexible support plans to accommodate your needs for website updates and changes. Whether you require minor tweaks or significant updates, I am here to help. You can opt for hourly support or monthly retainer packages to ensure your website evolves alongside your business.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSix">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    What if I encounter a problem or issue with my website?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordionTwo">
                                                <div class="accordion-body">
                                                    <p>
                                                        If you encounter any problems or issues with your website, you can easily reach out to me. I strive to respond promptly and resolve any issues as quickly as possible to minimize downtime and ensure your website remains fully functional.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab Single Item -->
                            </div>
                        
                            <div class="nav nav-tabs faq-tab-navs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                    <i class="flaticon-portfolio"></i>
                                    Functional FAQ
                                </button>
                                <button class="nav-link" id="nav-id-2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                    <i class="flaticon-megaphone"></i>
                                    Support FAQ
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@include('components.footer')