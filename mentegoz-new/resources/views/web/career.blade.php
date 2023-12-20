<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">
    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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


    @include('Layout.inc.career-modal')
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


    <!--  Career main banner section -->

    <section id="careerbannersection">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 order-lg-1 order-md-2 order-2 col-12 left">
                    <p class="main-head">Career</p>
                    <div class="">
                        <h3 class="sub-head head-color">Why Work With Mentegoz</h3>
                        <p class="pg-para">At Mentegoz Technologies, we encourage our employees to constantly learn andgrow. We offer various training programs and opportunities for career advancement, which helps you to improve your skills and progress in your career.</p><br>
                        <p class="pg-para">We have a keen eye for talent and focus on bringing out the best in all those who work with us through guidance and teamwork. Everyone at Mentegoz is provided with all the tools they need to grow and enhance their works.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 order-lg-2 order-md-1 order-1 col-12 right">
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_EOzPAenKJ6.json" background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </section>

    <!-- Career Banner End -->



    <!-- career items -->

    <div id="careeritems">
        <div class="container">
            <div class="careers">
                <div class="item-career">
                    <div class="top">
                        <h3 class="head-color">Marketing Executive</h3>
                    </div>
                    <div class="bottom">
                        <div class="details">
                            <!-- <p>location: Calicut-Kerala</p> -->
                            <p><span>Experience:</span> 1 Year</p>
                            <p><span>No. Of Positions:</span> 1</p>
                            <p><span>Job Type:</span> Full Time</p>
                        </div>
                        <!-- <div class="softskills">
                            <img src="{{asset('web/assets/img/icons/photoshop.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/ai.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/after.webp'); }}" alt="">
                        </div> -->
                        <div class="button">
                            <button class="cv-btn career-modal-btn">Shoot Your CV</button>
                        </div>
                    </div>
                    <div class="ment-logo-career">
                        <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" class="ment-logo">
                        <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" class="ment-logo-dark d-none">
                    </div>
                </div>
                <div class="item-career">
                    <div class="top">
                        <h3 class="head-color">Graphic Desinger</h3>
                    </div>
                    <div class="bottom">
                        <div class="details">
                            <p><span>Experience:</span> 2 Year</p>
                            <p><span>No. Of Positions:</span> 2</p>
                            <p><span>Job Type:</span> Full Time</p>
                        </div>
                        <div class="softskills">
                            <img src="{{asset('web/assets/img/icons/photoshop.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/ai.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/after.webp'); }}" alt="">
                        </div>
                        <div class="button">
                            <button class="cv-btn career-modal-btn">Shoot Your CV</button>
                        </div>
                    </div>
                    <div class="ment-logo-career">
                        <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" class="ment-logo">
                        <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" class="ment-logo-dark d-none">
                    </div>
                </div>
                <div class="item-career">
                    <div class="top">
                        <h3 class="head-color">Web Designer</h3>
                    </div>
                    <div class="bottom">
                        <div class="details">
                            <p><span>Experience:</span> 0-1 Year</p>
                            <p><span>No. Of Positions:</span> 0</p>
                            <p><span>Job Type:</span> Full Time</p>
                        </div>
                        <div class="softskills">
                            <img src="{{asset('web/assets/img/icons/html.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/css-3.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/js.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/php.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/wordpress.webp'); }}" alt="">
                        </div>
                        <div class="button">
                            <button class="cv-btn career-modal-btn">Shoot Your CV</button>
                        </div>
                    </div>
                    <div class="ment-logo-career">
                        <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" class="ment-logo">
                        <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" class="ment-logo-dark d-none">
                    </div>
                </div>
                <div class="item-career">
                    <div class="top">
                        <h3 class="head-color">UI/UX Designer</h3>
                    </div>
                    <div class="bottom">
                        <div class="details">
                            <p><span>Experience:</span> 1 Year</p>
                            <p><span>No. Of Positions:</span> 1</p>
                            <p><span>Job Type:</span> Full Time</p>
                        </div>
                        <div class="softskills">
                            <img src="{{asset('web/assets/img/icons/photoshop.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/xd.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/figma.webp'); }}" alt="">
                            <img src="{{asset('web/assets/img/icons/sketch.webp'); }}" alt="">
                        </div>
                        <div class="button">
                            <button class="cv-btn career-modal-btn">Shoot Your CV</button>
                        </div>
                    </div>
                    <div class="ment-logo-career">
                        <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" class="ment-logo">
                        <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" class="ment-logo-dark d-none">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- career items end -->


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

    <!-- filter -->
    <script src="{{asset('web/assets/js/filter.js'); }}"></script>

    <!-- main js 1 -->
    <!-- <script src="{{asset('web/assets/js/main1.js'); }}"></script> -->

    <!-- main js 2 -->
    <!-- <script src="{{asset('web/assets/js/main2.js'); }}"></script> -->

    <!-- Darkmode Script -->
    <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

    <!-- Offcanvas Script -->
    <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>

    <!-- Modal -->
    <script src="{{asset('web/assets/js/modal.js'); }}"></script>

    <!-- Career Modal -->
    <script src="{{asset('web/assets/js/career-modal.js'); }}"></script>


    <script>
        document.querySelectorAll('.ca-nav').forEach((item) => item.classList.add('active'));
    </script>

</body>

</html>