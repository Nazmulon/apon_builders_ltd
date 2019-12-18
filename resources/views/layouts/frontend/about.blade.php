@include('layouts.frontend.include.header')


    <!-- nevber end -->
    <div class="back">
        <!-- <img class="img-fluid" src="resources/img/about_us/about_us.jpg" width="100%" height="400px"> -->
        <h1 class="about">About Us</h1>
    </div>
    
    <div class="container">
        <!-- Who we Are -->
        <br>
        <div class="row">
            <div class="col-md-12">
                <section class=" text-center">
                    <p style="color: darkgreen; margin-top: 30px;">About Apon Builders</p>
                    <h1 style="margin-top: -12px;">Who We Are</h1>
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/about_us/who.jpg" alt="">
                </section>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/about_us/side.jpg" width="100%" height="400px">
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus alias reiciendis autem, in beatae totam nesciunt vero necessitatibus harum, quo perferendis iusto, minima excepturi incidunt maxime non quod</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus alias reiciendis autem, in beatae totam nesciunt vero necessitatibus harum, quo perferendis iusto, minima excepturi incidunt maxime non quod </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus alias reiciendis autem, in beatae totam nesciunt vero necessitatibus harum, quo perferendis iusto, minima excepturi incidunt maxime non quod </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus alias reiciendis autem, in beatae totam nesciunt vero necessitatibus harum, quo perferendis iusto, minima excepturi incidunt maxime non quod</p>
            </div>
        </div>
        <!-- end who we are -->

        <!-- Property Services -->
        <br>
        <div class="row">
            <div class="col-md-12">
                <section class=" text-center">
                    <p style="color: darkgreen; margin-top: 30px;">We are offering the Best Real Estate</p>
                    <h1 style="margin-top: -18px;">Property Services</h1>
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/about_us/proper.jpg" alt="">
                </section>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-4" >
                <div style="border: 1px solid #71B200; padding: 15px;">
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/properties/home.jpg">
                    <h4 style="margin-top: 10px;">Homes For Sale</h4>
                    <p style="color: black;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="border: 1px solid black; padding: 16px;">
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/properties/home2.jpg">
                    <h4 style="margin-top: 10px;">Homes For Mortgage</h4>
                    <p style="color: black;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="border: 1px solid black; padding: 12px;">
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/properties/buayer.jpg">
                    <h4 style="margin-top: 10px;">Matching Buyer</h4>
                    <p style="color: black;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-4">
                <div style="border: 1px solid black; padding: 10px;">
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/properties/pices.jpg">
                    <h4 style="margin-top: 10px;">Price Analysis</h4>
                    <p style="color: black;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="border: 1px solid black; padding: 8px;">
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/properties/bilding.jpg">
                    <h4 style="margin-top: 10px;">Homes On Lease</h4>
                    <p style="color: black;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="border: 1px solid black; padding-top: 8px;">
                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/img/properties/home3.jpg">
                    <h4 style="margin-top: 10px;">Homes For Rent</h4>
                    <p style="color: black;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>

        <!-- end property services -->


    </div>
    <!-- end container -->
    <br><br><br>
    <!-- footer -->
    @include('layouts.frontend.include.footer')
