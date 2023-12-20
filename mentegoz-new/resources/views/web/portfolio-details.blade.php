<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">

    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- style1 -->
    <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">

    <!-- style2 -->
    <link href="{{asset('web/assets/css/style2.css'); }}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Modal Section -->

    @include('Layout.inc.modal')

    <!-- Modal Section End -->



    <div style="padding-top:40px;">
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
    @foreach($project as $new)
    <div class="client-about-section">
        <div class="container line gy-0 gx-0">
            <span class="line-3"></span>
            <div class="banner-inner-padding">
                <div class="row client-abt-main">
                    <div class="col-lg-5 col-md-5 col-12 my-md-0 my-3 left">
                        <div class="logo-section">

                            <div class="client-logo">
                                <img src="{{asset('/upload/project/lightlogo/'.$new->light_logo)}}" alt="" class="client-logo-img">
                                <img src="{{asset('/upload/project/darklogo/'.$new->dark_logo)}}" alt="" class="client-logo-img-dark d-none">
                            </div>
                            <!-- <h3 class="bg-pg-head reveal-text">Arabian Business Solution</h3> -->

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 right">
                        <div class="">
                            <div class="row align-items-end h-100">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="portfoloio-work-details">
                                        <h6 class="port-item-sub">Project Category</h6>
                                        <h4 class="port-item-main">{{$new->pcategory}}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="portfoloio-work-details">
                                        <h6 class="port-item-sub">Location</h6>
                                        <h4 class="port-item-main">{{$new->location}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end h-100 mt-4">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="portfoloio-work-details">
                                        <h6 class="port-item-sub">Industry</h6>
                                        <h4 class="port-item-main">{{$new->industry}}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="portfoloio-work-details">
                                        <h6 class="port-item-sub">Scope Of Work</h6>
                                        <h4 class="port-item-main">{{$new->scope}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- portfolio banner image -->
    <div class="container line gy-0 gx-0">
        <span class="line-3"></span>
        <div class="portfolio-banner-image">
            <div class="block">
                <img src="{{asset('/upload/project/'.$new->project_image)}}" data-speed="0.75" class="img-parallax">
                <!-- <h2>Parallax Speed 0.75</h2> -->
            </div>
        </div>
    </div>

    <!-- portfolio content -->
    <div class="portfolio-pg-details">
        <div class="container line gy-0 gx-0" data-aos="fade-up" data-aos-duration="1500">
            <span class="line-3"></span>
            <div class="portfolio-content">
                <div class="row">
                    <div class="col-lg-8 left">
                        <div class="row">
                            <div class="col-12 top-content">
                                <h2 class="port-detail-head">{{$new->title}}</h2>
                                <p>{{$new->description}}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12 col-md-12 col-12 bottom-left">
                                <div class="used-tech">
                                    <div class="row">
                                        <!-- <h2 class="port-detail-head">Technologies Used</h2> -->
                                        @php if ($ctech->technologies !== null) {
                                        @endphp
                                        @foreach($technology as $tec)
                                        @php foreach ($ctech->technologies as $value) {
                                        if($tec->id==$value && $tec->id != null)
                                        {
                                        @endphp
                                        <div class="tools-images">
                                            <img class="img-fluid" src="{{asset('/upload/technology/'.$tec->image)}}" alt="">
                                        </div>
                                        @php
                                        }
                                        }
                                        @endphp

                                        @endforeach
                                        @php
                                        }
                                        @endphp

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12 bottom-right">
                                <div class="buttons">
                                    <a href="{{$new->link}}" target="_blank" class="project-btn"><i class="fa-solid fa-link"></i>View Project</a>
                                    <!-- <a href="#" class="project-btn">Start Your Project</a> -->
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
                    <div class="col-lg-4 right">
                        @include('Layout.inc.rightcta')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- portfolio banner image -->
    <div class="container line gy-0 gx-0">
        <span class="line-3"></span>
        <div class="portfolio-banner-image">
            <div class="block">
                <img src="{{asset('/upload/project/banner/'.$new->banner_image)}}" data-speed="0.75" class="img-parallax">
                <!-- <h2>Parallax Speed 0.75</h2> -->
            </div>
        </div>
    </div>


    <!-- portfolio content -->

    <div class="container line gy-0 gx-0" data-aos="fade-up" data-aos-duration="1000">
        <span class="line-3"></span>

    </div>


    <!-- portfolio inner images -->
    <div class="container line gy-0 gx-0">
        <span class="line-3"></span>
        <div class="portfolio-inner-images">
            <div class="row">
                @foreach($gallery as $gdata)
                <div class="col-md-6 col-12">
                    <div class="porfolio-inner-grid-img">
                        <img class="img-fluid" src="{{asset('/upload/project_image/gallery/'.$gdata->image)}}" alt="" data-speed="0.75">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>


    <!-- Carousel projects -->

    <div class="recent-projects" id="recent-projects">
        <div class="container">
            <h2 class="main-head head-color">Recent Projects</h2>
            <div class="projects-carousel owl-carousel mt-5">
                <div class="project-items">
                    <div class="div-image">
                        <img src="{{asset('web/assets/img/portfolio/ecoking/ecoking2.webp'); }}" alt="">
                        <a href="">
                            <div class="div">
                                <i class="fa-solid fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="recent-div">
                        <h6 class="recent-head">Ecoking</h6>
                        <p class="recent-category">Web Design & Development</p>
                    </div>
                </div>
                <div class="project-items">
                    <div class="div-image">
                        <img src="{{asset('web/assets/img/portfolio/nazia/nazia.webp'); }}" alt="">
                        <a href="">
                            <div class="div">
                                <i class="fa-solid fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="recent-div">
                        <h6 class="recent-head">Nazia</h6>
                        <p class="recent-category">Branding</p>
                    </div>
                </div>
                <div class="project-items">
                    <div class="div-image">
                        <img src="{{asset('web/assets/img/portfolio/brainzone.webp'); }}" alt="">
                        <a href="">
                            <div class="div">
                                <i class="fa-solid fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="recent-div">
                        <h6 class="recent-head">Brainzone</h6>
                        <p class="recent-category">Web Design & Development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel projects End-->


    <!-- scnd cta -->

    @include('Layout.inc.scnd-cta')

    <!-- scnd cta -->



    <!-- portfolio banner image -->
    <!-- <div class="container line gy-0 gx-0">
        <span class="line-3"></span>
        <div class="portfolio-banner-image">
            <div class="block">
                <img src="{{asset('web/assets/img/portfolio/mockup--4.webp'); }}" data-speed="0.75" class="img-parallax">
            </div>
        </div>
    </div> -->



    <!-- Footer Section -->

    @include('Layout.inc.footer')

    <!-- Footer Section End -->



    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <!-- parallax -->
    <script src="{{asset('web/assets/js/paralx.js');}}"></script>

    <!-- scroll smooth -->
    <script src="{{asset('web/assets/js/SmoothScrollMouseWheel.js'); }}"></script>

    <!-- main js 1 -->
    <script src="{{asset('web/assets/js/main1.js'); }}"></script>

    <!-- Darkmode Script -->
    <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

    <!-- Offcanvas Script -->
    <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>

    <!-- Modal -->
    <script src="{{asset('web/assets/js/modal.js'); }}"></script>


    <script>
        AOS.init();
    </script>


</body>

</html>