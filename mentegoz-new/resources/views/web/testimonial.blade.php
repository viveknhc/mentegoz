<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">

    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- style1 -->
    <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">

    <!-- style2 -->
    <link href="{{asset('web/assets/css/style2.css'); }}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Modal Section -->

    @include('Layout.inc.modal')

    <!-- Modal Section End -->

    <div style="margin-top:40px;">
        <!-- header -->
        @include('Layout.inc.header')
        <!-- header -->
    </div>


    <!-- Preloader -->
    <div class="mentpreloader">
        <img src="{{asset('web/assets/img/loader/ment-loader.gif'); }}" alt="">
    </div>
    <!-- Preloader -->


    <!--  main banner section -->

    <div class="main-banner-section inner-testi-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 d-flex flex-column justify-content-center">
                    <div class="">
                        <p class="main-head">Testimonials</p>
                        <div class="">
                            <h3 class="sub-head head-color">Our Customers<br>Love What We Do</h3>
                            <p class="pg-para">Our Customers and their testimonials inspire us to continually exceed expectations in the ever-evolving tech and design landscape.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-flex align-items-end justify-content-center">
                    <div>
                        <lottie-player src="https://lottie.host/df26d428-6d07-4b4f-9eb4-62194277f880/zNofgAaM3V.json" background="transparent" speed="1" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
            <!-- <div class="blog-banner-image">
                <img src="{{asset('web/assets/img/blog/blog1.webp'); }}" alt="">
            </div> -->
        </div>
    </div>

    <!--  End main banner section -->

    <div id="testimonial-inner-video">
        <div class="container">
            <p class="main-head">Video Testimonials</p>
            <div class="testimonial-video">
                <div class="testimonail-video-item">
                    <div class="video-div">
                        <video src="{{asset('web/assets/img/video/about-video-1.webm'); }}" autoplay muted loop></video>
                    </div>
                    <div class="video-descption">
                        <div class="test-head-div">
                            <h4 class="head-color">Dr. Strange</h4>
                            <!-- <p class="testimonial-client">Lorem Ipsum, Dolor.</p> -->
                        </div>
                        <p class="pg-para">Lorem ipsum</p>
                        <div class="testi-star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonail-video-item">
                    <div class="video-div">
                        <video src="{{asset('web/assets/img/video/about-video.webm'); }}" autoplay muted loop></video>
                    </div>
                    <div class="video-descption">
                        <div class="test-head-div">
                            <h4 class="head-color">Dr. Strange</h4>
                            <!-- <p class="testimonial-client">Lorem Ipsum, Dolor.</p> -->
                        </div>
                        <p class="pg-para">Lorem ipsum</p>
                        <div class="testi-star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonail-video-item">
                    <div class="video-div">
                        <video src="{{asset('web/assets/img/video/about-video-3.mp4'); }}" autoplay muted loop></video>
                    </div>
                    <div class="video-descption">
                        <div class="test-head-div">
                            <h4 class="head-color">Dr. Strange</h4>
                            <!-- <p class="testimonial-client">Lorem Ipsum, Dolor.</p> -->
                        </div>
                        <p class="pg-para">Lorem ipsum</p>
                        <div class="testi-star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


    <div id="testimonial-inner-page">
        <div class="container">
            <div class="testimonial-inner-items">
                <div class="testimonial-cont-inner item">
                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                    <p class="testimonial-comment">
                        If anyone asks me, why I choose mentegoz technologies for my
                        e-commerce website development is because of their quality of work and affordability in price. In the field of website development, they are more responsive and easy to convey my ideas. Of course,mentegoz is the best e-commerce Website and APP development company in Calicut. because the result is beyond my expectation.</p>
                    <div class="testimonial-authour">
                        <div class="testimonial-image">
                            <img src="{{asset('web/assets/img/banner-client-img.webp'); }}" alt="">
                        </div>
                        <div>
                            <h6 class="head-color">Dr. Strange</h6>
                            <p class="testimonial-client">Lorem Ipsum, Dolor.</p>
                            <div class="testi-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-cont-inner item">
                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                    <p class="testimonial-comment">
                        If anyone asks me, why I choose mentegoz technologies for my
                        e-commerce website development is because of their quality of work and affordability in price. In the field of website development, they are more responsive and easy to convey my ideas. Of course,mentegoz is the best e-commerce Website and APP development company in Calicut. because the result is beyond my expectation.</p>
                    <div class="testimonial-authour">
                        <div class="testimonial-image">
                            <img src="{{asset('web/assets/img/banner-client-img.webp'); }}" alt="">
                        </div>
                        <div>
                            <h6 class="head-color">Dr. Strange</h6>
                            <p class="testimonial-client">Lorem Ipsum, Dolor.</p>
                            <div class="testi-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-cont-inner item">
                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                    <p class="testimonial-comment">
                        If anyone asks me, why I choose mentegoz technologies for my
                        e-commerce website development is because of their quality of work and affordability in price. In the field of website development, they are more responsive and easy to convey my ideas. Of course,mentegoz is the best e-commerce Website and APP development company in Calicut. because the result is beyond my expectation.</p>
                    <div class="testimonial-authour">
                        <div class="testimonial-image">
                            <img src="{{asset('web/assets/img/banner-client-img.webp'); }}" alt="">
                        </div>
                        <div>
                            <h6 class="head-color">Dr. Strange</h6>
                            <p class="testimonial-client">Lorem Ipsum, Dolor.</p>
                            <div class="testi-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-cont-inner item">
                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                    <p class="testimonial-comment">
                        If anyone asks me, why I choose mentegoz technologies for my
                        e-commerce website development is because of their quality of work and affordability in price. In the field of website development, they are more responsive and easy to convey my ideas. Of course,mentegoz is the best e-commerce Website and APP development company in Calicut. because the result is beyond my expectation.</p>
                    <div class="testimonial-authour">
                        <div class="testimonial-image">
                            <img src="{{asset('web/assets/img/banner-client-img.webp'); }}" alt="">
                        </div>
                        <div>
                            <h6 class="head-color">Dr. Strange</h6>
                            <p class="testimonial-client">Lorem Ipsum, Dolor.</p>
                            <div class="testi-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-cont-inner item">
                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                    <p class="testimonial-comment">
                        If anyone asks me, why I choose mentegoz technologies for my
                        e-commerce website development is because of their quality of work and affordability in price. In the field of website development, they are more responsive and easy to convey my ideas. Of course,mentegoz is the best e-commerce Website and APP development company in Calicut. because the result is beyond my expectation.</p>
                    <div class="testimonial-authour">
                        <div class="testimonial-image">
                            <img src="{{asset('web/assets/img/banner-client-img.webp'); }}" alt="">
                        </div>
                        <div>
                            <h6 class="head-color">Dr. Strange</h6>
                            <p class="testimonial-client">Lorem Ipsum, Dolor.</p>
                            <div class="testi-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-cont-inner item">
                    <i class="fa-sharp fa-solid fa-quote-left"></i>
                    <p class="testimonial-comment">
                        If anyone asks me, why I choose mentegoz technologies for my
                        e-commerce website development is because of their quality of work and affordability in price. In the field of website development, they are more responsive and easy to convey my ideas. Of course,mentegoz is the best e-commerce Website and APP development company in Calicut. because the result is beyond my expectation.</p>
                    <div class="testimonial-authour">
                        <div class="testimonial-image">
                            <img src="{{asset('web/assets/img/banner-client-img.webp'); }}" alt="">
                        </div>
                        <div>
                            <h6 class="head-color">Dr. Strange</h6>
                            <p class="testimonial-client">Lorem Ipsum, Dolor.</p>
                            <div class="testi-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- scnd cta -->

    @include('Layout.inc.scnd-cta')

    <!-- scnd cta -->

    <!-- Footer Section -->

    @include('Layout.inc.footer')

    <!-- End Footer Section -->








    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Lottie Files -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- scroll smooth -->
    <script src="{{asset('web/assets/js/SmoothScrollMouseWheel.js'); }}"></script>

    <!-- main js 1 -->
    <!-- <script src="{{asset('web/assets/js/main1.js'); }}"></script> -->

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <!-- main js 2 -->
    <script src="{{asset('web/assets/js/main2.js'); }}"></script>

    <!-- Darkmode Script -->
    <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

    <!-- Offcanvas Script -->
    <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>

    <!-- Modal -->
    <script src="{{asset('web/assets/js/modal.js'); }}"></script>

    <!-- <script>
        document.querySelectorAll('.po-nav').forEach((item) => item.classList.add('active'));
    </script> -->


    <script>
        // Related Blog Section JS

        $(document).ready(function() {
            $('.blogs-item-slider').owlCarousel({
                // loop:true,
                margin: 20,
                infinite: true,
                loop: true,
                nav: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1300: {
                        items: 3
                    },
                    1500: {
                        items: 3
                    }
                }
            })
        });
    </script>

</body>

</html>