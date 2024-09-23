@include('components.header')
<style>
    .navbar.validnavs.navbar-default .navbar-nav li a{
        color: white
    }
    .navbar.sticked.validnavs.navbar-default .navbar-nav li a{
        color: black
    }
    h3{
        margin: 1rem 0 0 0;
    }
</style>
   <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center bg-dark text-light" style="background-image: url(../uploads/service/{{$service->banner_image}});padding: 0;height: 40vh;">
        <div class="shadow d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.8);height: 100%;width: 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>{{$service->title}}</h1>
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
            <div class="project-details-items">
                <div class="top-info">
                    <div class="row">
                        <div class="col-lg-7">
                            <?php 
                                if ($service->category=='wordpress') {
                                    ?>
                                        <h3>WordPress Design and Development</h3>
                                        <span>Exceptional website design and development are crucial for any business's success and elevating market standards. My WordPress solutions are meticulously crafted to meet your business demands and enhance engagement with your target audience.</span> 
                                        
                                        <h3>Impactful and Visually Stunning Websites</h3>
                                        <span>Having an eye-catching and visually stunning website significantly impact your brand's engagement. My WordPress development services focus on creating user-friendly, vibrant, and educational websites that enhance your online presence and increase your revenue.</span>

                                        <h3>Affordable Pricing for WordPress Development</h3>
                                        <span>There is a growing demand for affordable WordPress design and development services, and I aim to meet this need. With many options available, choosing the right service can be challenging. My experience ensures your needs are met within your budget, adhering to the specified framework.</span>
                                        <br> 
                                        <span>Designing a dynamic and appealing website requires detailed content and visual appeal to capture and retain user attention. I revolutionize website creation by offering affordable solutions that meet your specific requirements.</span>   

                                        <h3>Why Choose Me?</h3>
                                        <span>As an expert in WordPress design and development, I am fully equipped to provide top-notch services. I enhance your brand's perception, ensuring the best functional performance across all platforms.</span>
                                        <br> 
                                        <span>What more could you ask for with such excellent website-building services from a single developer? I understand that the first step in impressing customers is having an eye-catching website. The more innovative your website, the more eager your audience will be to engage with it.</span>

                                        <h3>Cutting-Edge Solutions for Digital Success</h3>
                                        <span>I offer some of the most advanced solutions for your digital success using premium and cutting-edge technology. This allows you to communicate closely with your clients and build stronger relationships.</span>
                                        <br> 
                                        <span>My affordable WordPress development services provide excellent social media advertising benefits, making it easy to recommend me to others. Join my client list now to enhance your website with trustworthy features, outstanding design, and top-notch development.</span>

                                        <h3>Latest Technologies in WordPress Development</h3>
                                        <span>Here is an overview of the various aspects I handle:</span>
                                        <ul>
                                            <li><b>Dedicated Developer Model:</b>  My technology portfolio includes a wide range of skills to deliver first-rate solutions on time.</li>
                                            <li><b>Database Platforms:</b> I offe r application development on platforms such as MySQL.</li>
                                            <li><b>Web Technologies:</b> Expertis e in HTML, CSS, JavaScript, PHP, and more ensures your WordPress site is built with the latest technologies.</li>
                                            <li><b>Web/Application Servers:</b> I  utilize servers like Apache to ensure reliable and efficient hosting.</li>
                                        </ul>

                                        <h3>Contact Me</h3>
                                        <span>Contact me now to learn how my WordPress development services can make your website stand out! Consistently delivering exceptional solutions while adhering to time and financial restrictions is my commitment to you.</span>
                                    <?php
                                }else if ($service->category=='shopify') {
                                    ?>
                                        <h3>Shopify Design and Development</h3>
                                        <span>Exceptional Shopify design and development are crucial for any e-commerce business's success and elevating market standards. My Shopify solutions are meticulously crafted to meet your business demands and enhance engagement with your target audience.</span> 
                                        
                                        <h3>Impactful and Visually Stunning E-Commerce Stores</h3>
                                        <span>Having an eye-catching and visually stunning e-commerce store significantly impacts your brand's engagement. My Shopify development services focus on creating user-friendly, vibrant, and educational stores that enhance your online presence and increase your revenue.</span>

                                        <h3>Affordable Pricing for Shopify Development</h3>
                                        <span>There is a growing demand for affordable Shopify design and development services, and I aim to meet this need. With many options available, choosing the right service can be challenging. My experience ensures your needs are met within your budget, adhering to the specified framework.</span>
                                        <br> 
                                        <span>Designing a dynamic and appealing e-commerce store requires detailed content and visual appeal to capture and retain user attention. I revolutionize e-commerce creation by offering affordable solutions that meet your specific requirements.</span>   

                                        <h3>Why Choose Me?</h3>
                                        <span>As an expert in Shopify design and development, I am fully equipped to provide top-notch services. I enhance your brand's perception, ensuring the best functional performance across all platforms.</span>
                                        <br> 
                                        <span>What more could you ask for with such excellent store-building services from a single developer? I understand that the first step in impressing customers is having an eye-catching store. The more innovative your store, the more eager your audience will be to engage with it.</span>

                                        <h3>Cutting-Edge Solutions for Digital Success</h3>
                                        <span>I offer some of the most advanced solutions for your digital success using premium and cutting-edge technology. This allows you to communicate closely with your clients and build stronger relationships.</span>
                                        <br> 
                                        <span>My affordable Shopify development services provide excellent social media advertising benefits, making it easy to recommend me to others. Join my client list now to enhance your e-commerce store with trustworthy features, outstanding design, and top-notch development.</span>

                                        <h3>Latest Technologies in Shopify Development</h3>
                                        <span>Here is an overview of the various aspects I handle:</span>
                                        <ul>
                                            <li><b>Dedicated Developer Model:</b>  My technology portfolio includes a wide range of skills to deliver first-rate solutions on time.</li>
                                            <li><b>Database Platforms:</b> I offer application development on platforms such as MySQL and other database solutions compatible with Shopify.</li>
                                            <li><b>Web Technologies:</b> Expertise in HTML, CSS, JavaScript, Liquid, and more ensures your Shopify store is built with the latest technologies.</li>
                                            <li><b>Web/Application Servers:</b> I  utilize servers like Apache to ensure reliable and efficient hosting.</li>
                                        </ul>

                                        <h3>Contact Me</h3>
                                        <span>Contact me now to learn how my Shopify development services can make your e-commerce store stand out! Consistently delivering exceptional solutions while adhering to time and financial restrictions is my commitment to you.</span>
                                    <?php
                                }else if($service->category=='php'){
                                    ?>
                                        <h3>Full Stack PHP Development with CodeIgniter & Laravel</h3>
                                        <span>Harnessing the power of PHP frameworks, I deliver exceptional web applications tailored to your specific business needs. My full stack PHP development services encompass both CodeIgniter and Laravel, providing robust and scalable solutions.</span> 
                                        
                                        <h3>Custom Web Applications</h3>
                                        <span>I specialize in creating custom web applications using CodeIgniter and Laravel. Whether it's a simple website, a complex business application, or a feature-rich e-commerce platform, I ensure a seamless and engaging user experience.</span>

                                        <h3>High-Performance and Scalable Solutions</h3>
                                        <span>My focus is on delivering high-performance and scalable PHP solutions that can grow with your business. Leveraging the flexibility of CodeIgniter and the powerful features of Laravel, I build applications that are both efficient and easy to maintain.</span>

                                        <h3>Affordable PHP Development Services</h3>
                                        <span>Understanding the importance of budget, I offer affordable PHP development services without compromising on quality. My experience ensures that your project is completed within your budget and time frame, adhering to best practices and industry standards.</span>
                                        <br> 
                                        <span>Designing and developing a dynamic web application requires careful planning, detailed content, and visual appeal. My goal is to provide cost-effective solutions that meet your business requirements and exceed your expectations.</span>

                                        <h3>Why Choose Me?</h3>
                                        <span>As a seasoned PHP developer, I bring expertise in both CodeIgniter and Laravel frameworks. I am committed to enhancing your brand's digital presence by delivering top-notch web applications that perform seamlessly across all platforms.</span>
                                        <br> 
                                        <span>What sets me apart is my dedication to providing excellent web development services tailored to your unique needs. I understand the significance of an engaging and user-friendly website in capturing your audience's attention and driving business growth.</span>

                                        <h3>Cutting-Edge PHP Development</h3>
                                        <span>I utilize the latest technologies and best practices in PHP development to ensure your web application is secure, fast, and reliable. From front-end design to back-end development, I cover all aspects of your project with meticulous attention to detail.</span>
                                        <br> 
                                        <span>My PHP development services include database integration, API development, and custom functionalities to enhance your application's capabilities. Whether you need a new application built from scratch or an existing one optimized, I have the skills and experience to deliver outstanding results.</span>

                                        <h3>Latest Technologies in PHP Development</h3>
                                        <span>Here is an overview of the various aspects I handle:</span>
                                        <ul>
                                            <li><b>Frameworks:</b> Expertise in CodeIgniter and Laravel for building robust web applications.</li>
                                            <li><b>Database Platforms:</b> Proficiency in MySQL, MS-SQL Server, and other database solutions.</li>
                                            <li><b>Web Technologies:</b> Comprehensive knowledge of HTML, CSS, JavaScript, and PHP.</li>
                                            <li><b>API Development:</b> Creating and integrating APIs to extend your application's functionality.</li>
                                            <li><b>Security:</b> Implementing best practices to ensure your web application is secure against threats.</li>
                                            <li><b>Performance Optimization:</b> Techniques to enhance the speed and performance of your application.</li>
                                        </ul>

                                        <h3>Contact Me</h3>
                                        <span>Contact me now to learn how my full stack PHP development services can elevate your web application to new heights! Delivering exceptional solutions within your budget and timeline is my promise to you.</span>
                                    <?php
                                }else if($service->category=='mern'){
                                    ?>
                                        <h3>Comprehensive MERN Stack Development</h3>
                                        <span>I offer top-notch MERN stack development services, leveraging the power of MongoDB, Express.js, React.js, and Node.js to create dynamic and scalable web applications tailored to your specific needs.</span> 
                                        
                                        <h3>Custom Web Applications with MERN Stack</h3>
                                        <span>Specializing in the MERN stack, I develop custom web applications that range from single-page applications to complex enterprise solutions. My focus is on creating seamless and engaging user experiences that cater to your business objectives.</span>

                                        <h3>Dynamic and Interactive User Interfaces</h3>
                                        <span>With React.js at the core, I build dynamic and interactive user interfaces that captivate your audience. My MERN stack development services ensure that your web application is not only visually appealing but also highly responsive and user-friendly.</span>

                                        <h3>Robust Backend Solutions</h3>
                                        <span>Utilizing Node.js and Express.js, I create robust and scalable backend solutions. This ensures that your web application performs efficiently, handling high traffic and complex operations with ease.</span>

                                        <h3>Affordable MERN Stack Development Services</h3>
                                        <span>Understanding the need for cost-effective solutions, I offer affordable MERN stack development services without compromising on quality. My expertise guarantees that your project is completed on time and within budget, adhering to the best industry practices.</span>

                                        <h3>Why Choose Me?</h3>
                                        <span>As an experienced MERN stack developer, I am dedicated to delivering high-quality web applications that enhance your digital presence. I bring a comprehensive approach to development, ensuring every aspect of your project is meticulously crafted to meet your business needs.</span>
                                        <br> 
                                        <span>My commitment to excellence and attention to detail set me apart. I understand the importance of an engaging and efficient web application in driving business growth and user satisfaction.</span>

                                        <h3>Cutting-Edge MERN Stack Development</h3>
                                        <span>I utilize the latest technologies and best practices in MERN stack development to build secure, fast, and reliable web applications. From front-end design to back-end development, I cover all aspects of your project to deliver exceptional results.</span>
                                        <br> 
                                        <span>My services include database integration, API development, and custom functionalities to enhance your application's capabilities. Whether you need a new application built from scratch or an existing one optimized, I have the skills and experience to deliver outstanding results.</span>

                                        <h3>Latest Technologies in MERN Stack Development</h3>
                                        <span>Here is an overview of the various aspects I handle:</span>
                                        <ul>
                                            <li><b>MongoDB:</b> Efficient database solutions for scalable and flexible data management.</li>
                                            <li><b>Express.js:</b> Building robust server-side applications and APIs.</li>
                                            <li><b>React.js:</b> Creating dynamic, responsive, and interactive user interfaces.</li>
                                            <li><b>Node.js:</b> Developing high-performance, scalable backend solutions.</li>
                                            <li><b>API Development:</b> Extending your application's functionality with custom APIs.</li>
                                            <li><b>Security:</b> Implementing best practices to ensure your web application is secure against threats.</li>
                                            <li><b>Performance Optimization:</b> Techniques to enhance the speed and performance of your application.</li>
                                        </ul>

                                        <h3>Contact Me</h3>
                                        <span>Contact me now to learn how my MERN stack development services can elevate your web application to new heights! Delivering exceptional solutions within your budget and timeline is my promise to you.</span>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="col-lg-5">
                            <img src="../uploads/service/{{$service->banner_image}}" class="border border-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project Details Area -->
@include('components.contact')
@include('components.footer')
