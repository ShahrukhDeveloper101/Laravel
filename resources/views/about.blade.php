@include('components.header')
     <!-- Start Breadcrumb 
    ============================================= -->
    {{-- <div class="breadcrumb-area text-center bg-dark text-light" style="background-image: url(img/shape/42.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Breadcrumb -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-one-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 about-style-one">
                    <div class="about-thumb">
                        <img src="img/Profile/Untitled design (3).png" data-src="img/Profile/Untitled design (3).png" alt="Shahrukh Developer profile picture" class="lazyload blur-up">
                        <div class="user-fun-fact">
                        
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="3000" data-speed="2000">3</div>
                                    <div class="operator"> +</div>
                                </div>
                                <span class="medium">Active user from the community</span>
                            </div>
    
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="98" data-speed="2000">98</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Positive Rating</span>
                            </div>
    
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 about-style-one mt-60 mt-md-50 mt-xs-30">
                    <h2 class="title mb-25">Empowering Growth Through Strategic IT Consultancy</h2>
                    <p>
                        Welcome! I'm Shahrukh, an IT consultant specializing in web development services. With a robust experience in WordPress and other advanced technologies, my primary goal is to empower businesses and individuals by providing strategic consultancy that lays the foundation for successful digital initiatives. I collaborate closely with clients to understand their unique needs and objectives, offering tailored solutions that drive growth and innovation.
                        <br><br>
                        As an advocate for digital transformation, I offer expert guidance to entrepreneurs and businesses aiming to enhance their online presence and profitability. My consultancy services extend beyond technical implementation to include comprehensive strategies that align with business goals, ensuring sustainable success in the digital landscape.
                        <br><br>
                        Through my YouTube channel, <a class="text-warning" href="https://youtube.com/@learncodewithshahrukh" target="_blank">@learncodewithshahrukh</a> , I leverage my experience to educate and empower beginners in web development. With clear, practical tutorials, I aim to demystify complex concepts, enabling aspiring developers to build foundational skills and pursue their career goals in tech.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Brand 
    ============================================= -->
    <div class="relative text-center">
        <div class="container">
            <div class="brand-style-one-items default-padding bg-dark text-light" style="background-image: url(img/shape/13.png);">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="brand-style-one">
                            <h2>Trusted by <strong>100+</strong> Brands worldwide</h2>
                            <div class="brand4col swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <img src="img/brand/1.png" alt="earthlink brand">
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <img src="img/brand/2.png" alt="diamond aesthic brand">
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <img src="img/brand/3.png" alt="egamex social platform">
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <img src="img/brand/4.png" alt="french dandy ecommerce site">
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <img src="img/brand/5.png" alt="petgolu online pet shop">
                                    </div>
                                    <!-- End Single Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand -->

    <!-- Start Testimonials 
    ============================================= -->
    @include('components.testimonial')

    <!-- End Testimonials -->

    <!-- Start Faq 
    ============================================= -->
    <div class="faq-style-two-area default-padding" style="background-image: url(img/shape/40.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 faq-style-two">
                    <h2 class="title">Frequently asked questions from our social community</h2>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="faq-style-two mt--20">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header collapsed" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        What web development services do you offer?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            I specialize in custom WordPress development, creating tailored websites that meet your unique business needs. From theme customization to plugin development, I provide comprehensive solutions to enhance your online presence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Why should I choose your web development services?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            I bring extensive experience in creating tailored web solutions that align with your business goals. From custom WordPress websites to dynamic MERN stack applications, I ensure your digital presence stands out with quality craftsmanship and strategic insights.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How can you improve my online presence?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Through strategic web development, I optimize your website for performance, usability, and search engine visibility. Whether it's enhancing user experience, implementing SEO best practices, or integrating analytics, I empower your business to attract and retain more visitors online.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Can you help me generate leads and increase sales through my website?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, I specialize in building websites that not only attract visitors but also convert them into loyal customers. By optimizing user flows, implementing effective calls-to-action, and integrating robust e-commerce solutions like Shopify, I help drive revenue growth for your business.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What ongoing support and maintenance do you provide after website launch?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            I offer comprehensive support and maintenance services to ensure your website remains secure, up-to-date, and optimized for performance. From regular updates and backups to troubleshooting and scaling as your business grows, I'm committed to your long-term success online.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq -->

@include('components.footer')