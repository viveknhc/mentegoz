<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">

    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- style1 -->
    <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">

    <!-- style2 -->
    <link href="{{asset('web/assets/css/style2.css'); }}" rel="stylesheet" type="text/css">

    <!-- Style3 -->
    <link href="{{asset('web/assets/css/style3.css');}}" rel="stylesheet" type="text/css">

    <!-- Style4 -->
    <link href="{{asset('web/assets/css/style4.css');}}" rel="stylesheet" type="text/css">



</head>

<body>

    <!-- Modal Section -->

    @include('Layout.inc.modal')

    <!-- Modal Section End -->


    <!-- Preloader -->
    <!-- <div class="mentpreloader">
        <img src="{{asset('web/assets/img/loader/ment-loader.gif'); }}" alt="">
    </div> -->
    <!-- Preloader -->


    <div class="web_design__main web_design__mains">
        @include('Layout.inc.header')
        
        <img src="{{asset('web/assets/img/web-design/round.webp'); }}" alt="" class="round">
        <!-- <img src="{{asset('web/assets/img/web-design/triangle.webp'); }}" alt="" class="triangle"> -->
        <!-- <img src="{{asset('web/assets/img/web-design/user.webp'); }}" alt="" class="account"> -->
        <!-- <img src="{{asset('web/assets/img/web-design/blue_round.webp'); }}" alt="" class="blue_round"> -->

        <div class="hero_section container">
            <div class="row">
                <div class="order-md-0 order-1 col-md-6 left_section">
                    <span>EFFECTIVE & RESPONSIVE</span>
                    <h1 class="head-color">Website for your Business</h1>
                    <p>Looking for a top-notch web development company in Calicut? Then never look beyond Mentegoz
                        Technologies. We offer the best In-class web solutions for your business that helps you to
                        succeed</p>
                    <div class="website-inner-bnt">
                        <button class="enquire_btn cont-modal-btn">Enquire Now</button>
                    </div>
                </div>
                <div class="col-md-6 right_section">
                    <img src="{{asset('web/assets/img/web-design/website-banner-inner.webp'); }}"
                        class="img-fluid web-inner-banner-light" alt="">
                    <img src="{{asset('web/assets/img/web-design/website-banner-inner-dark.webp'); }}"
                        class="img-fluid web-inner-banner-dark d-none" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- What is Seo -->
    <section>
        <div class="what-is-seo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img class="img-fluid" src="{{asset('web/assets/img/seo/whatis-seo.png'); }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="right">

                            <div class="head">

                                <div>
                                    <h3 class="bg-pg-head arrow-head gradient1">What is <span>SEO</span></h3>
                                </div>
                                <p class="pg-para pt-2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry.
                                </p>
                                <p class="pg-para pt-2">
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                    an unknown printer took a galley of type and scrambled it Lorem Ipsum is simply
                                    dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                </p> <!-- <div class="mt-md-5 mt-3 text-reveal-div">
                              <p class="bg-lite-pg-head reveal-text">What we</p>
                              <h3 class="bg-pg-head reveal-text">DO DIFFERENTLY</h3>
                            </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What is end -->

    <!-- what we do -->
    <section>
        <div class="what-we-do">

            <div class="container">

                <h3 class="sub-head head-color text-center">What We Do</h3>
                <p class="pg-para pt-2  text-center">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it Lorem Ipsum is simply dummy
                    text of the printing and typesetting industry.
                </p>
                <div class="content-box">
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/do1.jpg'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">On Page SEO</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/do1.jpg'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Off Page SEO</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/do1.jpg'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Link Building</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/do1.jpg'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Keyword Research</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/do1.jpg'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Local SEO</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/do1.jpg'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Technical SEO</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- what we do end-->


    <!-- Clients Section -->

    <section id="clientsection">
        <div style="position: relative;" class="container">

            <div class="client_bg">
                <h3 class="sub-head head-color text-center">Our Clients</h3>

                <div class="client-slider owl-carousel">
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/abana.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/abana.webp'); }}" class="client-dark-img d-none"
                            alt="">
                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/arif.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/arif.webp'); }}" class="client-dark-img d-none"
                            alt="">

                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/artic.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/artic.webp'); }}" class="client-dark-img d-none"
                            alt="">

                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/asadi.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/asadi.webp'); }}" class="client-dark-img d-none"
                            alt="">

                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/baba.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/baba.webp'); }}" class="client-dark-img d-none"
                            alt="">

                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/we-corp.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/we-corp.webp'); }}" class="client-dark-img d-none"
                            alt="">

                    </div>
                </div>
                <div class="client-slider1 owl-carousel">
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/cotton-blossom.webp'); }}" class="client-light-img"
                            alt="">
                        <img src="{{asset('web/assets/img/Clients/cotton-blossom.webp'); }}"
                            class="client-dark-img d-none" alt="">

                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/diya.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/diya.webp'); }}" class="client-dark-img d-none"
                            alt="">
                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/zoha.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/zoha.webp'); }}" class="client-dark-img d-none"
                            alt="">
                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/jdt.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/jdt.webp'); }}" class="client-dark-img d-none" alt="">
                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/vaayo.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/vaayo.webp'); }}" class="client-dark-img d-none"
                            alt="">
                    </div>
                    <div class="client-div">
                        <img src="{{asset('web/assets/img/Clients/naturals.webp'); }}" class="client-light-img" alt="">
                        <img src="{{asset('web/assets/img/Clients/naturals.webp'); }}" class="client-dark-img d-none"
                            alt="">
                    </div>
                </div>
                <div class="ourclientax">
                    <a class="main-btn client-btn" href="#">More Clients</a>
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Section -->


    <!-- Case Study -->

    <section>
        <div class="case-study">
            <div class="container">
                <h3 class="sub-head head-color text-center">Case Study</h3>

                <div class="content-box">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-5">
                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/work1.png'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Client Name</h5>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the</p>

                                    <div class="keyword">
                                        <h6 class="head-color">
                                            Keywords
                                        </h6>
                                        <ul>
                                            <li>
                                                <div class="keyword-content">
                                                    <div>
                                                        <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                    </div>
                                                    <div>
                                                        <p>design united states person creation</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="keyword-content">
                                                    <div>
                                                        <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                    </div>
                                                    <div>
                                                        <p>ux design long island user flows</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="keyword-content">
                                                    <div>
                                                        <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                    </div>
                                                    <div>
                                                        <p>lpodikfi djbhfdbn sd</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/work2.png'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Client Name</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>

                                        <div class="keyword">
                                            <h6 class="head-color">
                                                Keywords
                                            </h6>
                                            <ul>
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>design united states person creation</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>ux design long island user flows</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>lpodikfi djbhfdbn sd</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/work2.png'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Client Name</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>

                                        <div class="keyword">
                                            <h6 class="head-color">
                                                Keywords
                                            </h6>
                                            <ul>
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>design united states person creation</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>ux design long island user flows</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>lpodikfi djbhfdbn sd</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/work2.png'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Client Name</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>

                                        <div class="keyword">
                                            <h6 class="head-color">
                                                Keywords
                                            </h6>
                                            <ul>
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>design united states person creation</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>ux design long island user flows</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>lpodikfi djbhfdbn sd</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/work2.png'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Client Name</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>

                                        <div class="keyword">
                                            <h6 class="head-color">
                                                Keywords
                                            </h6>
                                            <ul>
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>design united states person creation</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>ux design long island user flows</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>lpodikfi djbhfdbn sd</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card box h-100">
                                <img src="{{asset('web/assets/img/seo/work2.png'); }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title head-color">Client Name</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>

                                        <div class="keyword">
                                            <h6 class="head-color">
                                                Keywords
                                            </h6>
                                            <ul>
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>design united states person creation</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>ux design long island user flows</p>
                                                        </div>
                                                    </div>
                                                </li>
    
                                                <li>
                                                    <div class="keyword-content">
                                                        <div>
                                                            <img class="img-fluid img-filter" src="{{asset('web/assets/img/seo/list.png'); }}" alt="">
                                                        </div>
                                                        <div>
                                                            <p>lpodikfi djbhfdbn sd</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study end -->




    <!-- Footer Section -->

    @include('Layout.inc.footer')

    <!-- End Footer Section -->




    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Aswesome -->
    <script src="https://kit.fontawesome.com/275b00d5ce.js" crossorigin="anonymous"></script>

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <!-- Lottie Files -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>

    <!-- scroll trigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js"></script>

    <!-- image reveal -->
    <script src="{{asset('web/assets/js/image-reveal.js');}}"></script>

    <!-- scroll smooth -->
    <script src="{{asset('web/assets/js/SmoothScrollMouseWheel.js'); }}"></script>

    <!-- Script 1 -->
    <script src="{{asset('web/assets/js/main1.js'); }}"></script>

    <!-- Darkmode Script -->
    <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

    <!-- Offcanvas Script -->
    <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>

    <!-- Modal -->
    <script src="{{asset('web/assets/js/modal.js'); }}"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
        document.querySelectorAll('.sr-nav').forEach((item) => item.classList.add('active'));

    </script>

    <!-- <script>
    const items = document.querySelectorAll('.item')


    const expand = (item, i) => {


      items.forEach((it, ind) => {
        if (i === ind) return
        it.clicked = false
      })
      gsap.to(items, {
        width: item.clicked ? '18%' : '12%',
        duration: 2,
        ease: 'elastic(1, .6)'
      })

      item.clicked = !item.clicked
      gsap.to(item, {
        width: item.clicked ? '38%' : '15.5%',
        duration: 2.5,
        ease: 'elastic(1, .3)'
      })
    }

    items.forEach((item, i) => {
      item.clicked = false
      item.addEventListener('click', () => expand(item, i))
    })
  </script> -->

</body>

</html>