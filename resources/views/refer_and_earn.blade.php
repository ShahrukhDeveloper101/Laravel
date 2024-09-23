 
@include('components.header')
<style>
    .navbar.validnavs.navbar-default .navbar-nav li a{
        color: white
    }

    .navbar.sticked.validnavs.navbar-default .navbar-nav li a{
        color: black
    }
 
</style>
    <div class="comming-soon-area bg-cover text-center text-light" style="background-image: url(img/shape/banner-7.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-10 offset-xl-1">
                    <div class="content">
                        <h1>Earn upto 500$</h1>
                        <p>
                            Refer & Earn up to $500 on each deal! For every successful referral, you will receive a 10% commission.
                        </p>
                    </div>
                    <div class="f-item newsletter secondary">
                        <form action="#">
                            <div class="row" style="width: 100% !important;">
                                <div class="col-12 text-start">
                                    <label>Enter your email for joining the program</label>
                                </div>
                                <div class="col-9">
                                    <input type="email" placeholder="Your Email" class="form-control" name="email">
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="glow-on-hover">Join</button>  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-info">
            <h5 class="fw-normal">This referral is only applicable for projects more than 500$. We provide services in Custom Website & App Development, Custom Shopify store & Custom WordPress Websites & Local SEO. The program is that you just have to refer me to any potential customer. When the customer contact me for any of the service mentioned above he/she needs to tell that you have referred him/her to me. If deal closed after completing the work i will contact you to send you your comission. Customer / Client will be totally unaware about your comission. To join please enter your email and click the "JOIN" button. 
                <br>
                Let's grow together 💪🏽
            </h5>
        </div>
    </div>
@include('components.footer')

 