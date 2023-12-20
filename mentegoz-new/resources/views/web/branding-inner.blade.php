<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branding</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">
    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Style -->
    <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">
    <!-- style2 -->
    <link href="{{asset('web/assets/css/style2.css'); }}" rel="stylesheet" type="text/css">
</head>

<body>

    <div>
        <!-- header -->
        @include('Layout.inc.header')
        <!-- header -->
    </div>

    <!-- Preloader -->
    <div class="mentpreloader">
        <img src="{{asset('web/assets/img/loader/ment-loader.gif'); }}" alt="">
    </div>
    <!-- Preloader -->

    <!-- banner section -->

    <!-- branding -->




    <!-- branding img start -->
    <div class="container-fluid line gy-0 gx-0">
        <div class="portfolio-banner-image">
            <div class="block block-branding">
                <img src="{{asset('web/assets/img/portfolio/nazia/nazia.webp'); }}" data-speed="0.75" class="img-parallax">
            </div>
        </div>
    </div>
    <!-- branding img end -->


    <!-- branding inner details -->

    <div class="banner-inner-details">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="branding-pg-logo">
                        <img class="img-fluid client-logo-img" src="{{asset('web/assets/img/portfolio/nazia/nazia-logo.webp'); }}" alt="">
                        <img class="img-fluid client-logo-img-dark d-none" src="{{asset('web/assets/img/portfolio/nazia/nazia-logo-dark.webp'); }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row banner-inner-details-btm">
                <div class="col-lg-8 col-md-12 col-12 mt-md-0 mt-4 left">
                    <div class="discription">
                        <h3 class="port-detail-head mt-0">Nazia Hospital</h3>
                        <p class="disc-para">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum cum possimus molestias molestiae tenetur deserunt dicta itaque vel veritatis. Architecto dolorem quam in odit ea nam modi minima ipsam?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum cum possimus molestias molestiae tenetur deserunt dicta itaque vel veritatis. Architecto dolorem quam in odit ea nam modi minima ipsam?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="details">
                            <div class="col-4 cat-items">
                                <div>
                                    <h6 class="port-item-sub">Category</h6>
                                    <p class="port-item-head">Re-Branding</p>
                                </div>
                                <div>
                                    <h6 class="port-item-sub">Location</h6>
                                    <p class="port-item-head">Calicut</p>
                                </div>
                            </div>
                            <div class="col-5 cat-items">
                                <div>
                                    <h6 class="port-item-sub">Industry</h6>
                                    <p class="port-item-head">Hospital, Medical</p>
                                </div>
                                <div>
                                    <h6 class="port-item-sub">Scope Of Work</h6>
                                    <p class="port-item-head">Re-Branding, Logo, Social Media</p>
                                </div>
                            </div>

                        </div>
                        <div class="buttons">
                            <div class="col-6 portfolio-content">
                                <div class="icon-btns">
                                    <a href="">
                                        <div class="like-btn">
                                            <!-- <i class="fa-regular fa-heart like-btn-bor"></i>
                                        <i class="fa-solid fa-heart like-btn-fil d-none"></i> -->
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox">
                                                <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                                                        <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2" />
                                                        <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />

                                                        <g id="grp7" opacity="0" transform="translate(7 6)">
                                                            <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                                                            <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                                                        </g>

                                                        <g id="grp6" opacity="0" transform="translate(0 28)">
                                                            <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                                                            <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2" />
                                                        </g>

                                                        <g id="grp3" opacity="0" transform="translate(52 28)">
                                                            <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                                                            <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                                                        </g>

                                                        <g id="grp2" opacity="0" transform="translate(44 6)">
                                                            <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                                                            <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                                                        </g>

                                                        <g id="grp5" opacity="0" transform="translate(14 50)">
                                                            <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2" />
                                                            <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2" />
                                                        </g>

                                                        <g id="grp4" opacity="0" transform="translate(35 50)">
                                                            <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2" />
                                                            <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2" />
                                                        </g>

                                                        <g id="grp1" opacity="0" transform="translate(24)">
                                                            <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                                                            <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </label>
                                            <p>123 Likes</p>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="share-btn">
                                            <i class="fa-solid fa-share-nodes"></i>
                                            <p>Share Project</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 right">

                    @include('Layout.inc.rightcta')

                    <!-- <div>
                        <h6 class="port-item-sub head-color">CATEGORY :</h6>
                        <p class="port-item-head">Branding,Design</p>
                    </div>
                    <div class="mt-3">
                        <h6 class="port-item-sub head-color">DATE</h6>
                        <p class="port-item-head">March 29, 2023</p>
                    </div>
                    <div class="mt-3">
                        <h6 class="port-item-sub head-color">SHARE :</h6>
                        <div class="sm-icons">
                            <a href="#"><i class="fa-brands fa-instagram head-color"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter head-color"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f head-color"></i></a>
                        </div>
                    </div> -->
                </div>

            </div>

        </div>
    </div>

    <!-- branding inner details end-->



    <!-- branding images -->
    <div class="branding-images">
        <div class="container gy-0 gx-0">
            <div class="branding-boxes">
                <div class="boxOne">
                    <div class="reveal">
                        <img src="{{asset('web/assets/img/portfolio/nazia/nazia11.webp'); }}" alt="">
                    </div>
                </div>
                <div class="boxOne">
                    <div class="reveal">
                        <img src="{{asset('web/assets/img/portfolio/nazia/nazia12.webp'); }}" alt="">
                    </div>
                </div>
            </div>
            <div class="branding-boxes">
                <div class="boxOne">
                    <div class="reveal">
                        <img src="{{asset('web/assets/img/portfolio/nazia/nazia4.webp'); }}" alt="">
                    </div>
                </div>
                <div class="boxOne">
                    <div class="reveal">
                        <img src="{{asset('web/assets/img/portfolio/nazia/nazia5.webp'); }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- branding images end-->


    <div class="container line gy-0 gx-0">
        <span class="line-3"></span>
        <div class="portfolio-banner-image">
            <div class="block">
                <img src="{{asset('web/assets/img/portfolio/nazia/nazia13.jpeg" data-speed="0.75" class="img-parallax">
            </div>
        </div>
    </div>


    <!-- branding images -->
    <div class="branding-images">
        <div class="container gy-0 gx-0">
            <div class="branding-boxes">
                <div class="boxOne">
                    <div class="reveal">
                        <img src="{{asset('web/assets/img/portfolio/nazia/nazia7.webp'); }}" alt="">
            </div>
        </div>
        <div class="boxOne">
            <div class="reveal">
                <img src="{{asset('web/assets/img/portfolio/nazia/nazia8.webp'); }}" alt="">
            </div>
        </div>
    </div>
    <div class="branding-boxes">
        <div class="boxOne">
            <div class="reveal">
                <img src="{{asset('web/assets/img/portfolio/nazia/nazia14.webp'); }}" alt="">
            </div>
        </div>
        <div class="boxOne">
            <div class="reveal">
                <img src="{{asset('web/assets/img/portfolio/nazia/nazia10.webp'); }}" alt="">
            </div>
        </div>
    </div>
    <div class="branding-boxes">
        <div class="boxOne">
            <div class="reveal">
                <img src="{{asset('web/assets/img/portfolio/nazia/nazia15.jpeg" alt="">
                    </div>
                </div>
                <div class="boxOne">
                    <div class="reveal">
                        <img src="{{asset('web/assets/img/portfolio/nazia/nazia16.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="branding-boxes">
                <div class="boxOne">
                    <div class="reveal">
                        <img src="{{asset('web/assets/img/portfolio/nazia/nazia17.webp'); }}" alt="">
            </div>
        </div>
        <div class="boxOne">
            <div class="reveal">
                <img src="{{asset('web/assets/img/portfolio/nazia/nazia18.webp'); }}" alt="">
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- branding images end-->

    <!-- scnd cta -->

    @include('Layout.inc.scnd-cta')

    <!-- scnd cta -->

    <!-- Footer Section --->

    @include('Layout.inc.footer')

    <!-- End Footer Section --->

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/275b00d5ce.js" crossorigin="anonymous"></script>"></script>
    <!-- parallax -->
    <script src="{{asset('web/assets/js/paralx.js"></script>
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <!-- scroll trigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js"></script>
    <!-- image reveal -->
    <script src="{{asset('web/assets/js/image-reveal.js"></script>
    <!-- scroll smooth -->
    <script src="{{asset('web/assets/js/SmoothScrollMouseWheel.js'); }}"></script>
    <!-- Script 1 -->
    <script src="{{asset('web/assets/js/main1.js'); }}"></script>
    <!-- Darkmode Script -->
    <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>
    <!-- Offcanavas Script -->
    <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>
    <!-- Modal -->
    <script src="{{asset('web/assets/js/modal.js'); }}"></script>

</body>

</html>