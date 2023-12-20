<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mentegoz Technologies</title>

  <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">

  <!-- Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- owl carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- Animate -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">

  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <!-- Flat icon -->
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/> -->

  <!-- main style -->
  <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">

</head>

<body id="body">


  @include('Layout.inc.modal')


  <!-- Preloader -->
  <div class="mentpreloader">
    <img src="{{asset('web/assets/img/loader/ment-loader.gif'); }}" alt="" class="mentpreloader-light">
    <!-- <img src="{{asset('web/assets/img/loader/ment-loader-dark.gif'); }}" alt="" class="mentpreloader-dark d-none"> -->
  </div>
  <!-- Preloader -->


  <div id="main">

    @include('Layout.inc.header')

    <!--- Banner Section-->

    <section id="banner">
      <div class="container-fluid banner-dark">
        <div class="row">
          <div class="col-lg-6 col-12 left">
            <h3 class="banner_head"><span class="h1_tag header-color-1">BEYOND</span>

              <div class="changing-text">
                <span class="words-wrapper">
                  <b class="is-visible">Imagination</b>
                  <b class=" ">Creative</b>
                  <b class=" ">Expectation</b>
                </span>
              </div>

            </h3>

            <!-- <p class="header-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Velit consectetur aliquam
              nihil ducimus</p> -->


            <div class="counter-section">
              <div class="count">
                <div class="counter-div"><span class="counter">500</span>+</div>
                <div class="counter-label">Happy Clients</div>
              </div>
              <div class="count">
                <div class="counter-div"><span class="counter">800</span>+</div>
                <div class="counter-label">Projects</div>
              </div>
              <div class="count">
                <div class="counter-div"><span class="counter">800</span>+</div>
                <div class="counter-label">Completed Projects</div>
              </div>
            </div>
            <a href="#" class="main-btn cont-modal-btn">Get In Touch</a>
            <!-- <button id="cont-modal-btn">demo</button> -->

            <div class="social-media">
              <div class="icons">
                <a href="https://www.linkedin.com/company/mentegoztechnologies/">
                  <i class="fa-brands social-icon fa-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/mentegoz/">
                  <i class="fa-brands social-icon fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/mentegoztechnologies">
                  <i class="fa-brands social-icon fa-facebook"></i>
                </a>
                <a href="https://twitter.com/Mentegoz">
                  <i class="fa-brands social-icon fa-twitter"></i>
                </a>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-12 right">

            <!-- <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div> -->

            <div class="countries">
              <p class="m-0 contry-para">10+ Countries</p>
              <div class="flags">
                <img src="{{asset('web/assets/img/icons/country/can-baner.webp'); }}" alt="">
                <img src="{{asset('web/assets/img/icons/country/uae-banner.webp'); }}" alt="">
                <img src="{{asset('web/assets/img/icons/country/usa-banner.webp'); }}" alt="">
              </div>
            </div>

            <div class="happyclients">
              <div class="client-img">
                <div class="cl-img">
                  <img src="{{asset('web/assets/img/banner-client-img-4.webp'); }}" alt="">s
                </div>
                <div class="cl-img">
                  <img src="{{asset('web/assets/img/banner-client-img-5.webp'); }}" alt="">
                </div>
                <div class="cl-img">
                  <img src="{{asset('web/assets/img/banner-client-img-6.webp'); }}" alt="">
                </div>
              </div>
              <div class="clientcont">
                <p>5 Star Rated</p>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>

            <div class="content3">
              <div class="cl-img">
                <img src="{{asset('web/assets/img/star-up-mission.webp'); }}" alt="">
              </div>
            </div>

            <div class="image-div">
              <img class="banner-img-back" src="{{asset('web/assets/img/banner-image-back.webp'); }}" alt="">
              <img class="img-fluid hero-img light-img" src="{{asset('web/assets/img/banner-vr-img.webp'); }}" width="100%" alt="">
              <img class="img-fluid hero-img dark-img d-none" src="{{asset('web/assets/img/woman2.webp'); }}" width="100%" alt="">
            </div>

          </div>
        </div>
      </div>



    </section>



    <!--- Banner Section End-->

    <div class="circle bg-blur"></div>
    <div class="circle1 bg-blur"></div>


  </div>

  <!-- MAIN CLOSE -->




  <!-- Clients Section -->

  <section id="clientsection">
    <div style="position: relative;" class="container">
      <div class="client_bg">
        <div class="client-slider owl-carousel">
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/abana.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/abana.webp'); }}" class="client-dark-img d-none" alt="">
          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/arif.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/arif.webp'); }}" class="client-dark-img d-none" alt="">

          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/artic.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/artic.webp'); }}" class="client-dark-img d-none" alt="">

          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/asadi.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/asadi.webp'); }}" class="client-dark-img d-none" alt="">

          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/baba.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/baba.webp'); }}" class="client-dark-img d-none" alt="">

          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/we-corp.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/we-corp.webp'); }}" class="client-dark-img d-none" alt="">

          </div>
        </div>
        <div class="client-slider1 owl-carousel">
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/cotton-blossom.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/cotton-blossom.webp'); }}" class="client-dark-img d-none" alt="">

          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/diya.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/diya.webp'); }}" class="client-dark-img d-none" alt="">
          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/zoha.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/zoha.webp'); }}" class="client-dark-img d-none" alt="">
          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/jdt.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/jdt.webp'); }}" class="client-dark-img d-none" alt="">
          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/vaayo.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/vaayo.webp'); }}" class="client-dark-img d-none" alt="">
          </div>
          <div class="client-div">
            <img src="{{asset('web/assets/img/Clients/naturals.webp'); }}" class="client-light-img" alt="">
            <img src="{{asset('web/assets/img/Clients/naturals.webp'); }}" class="client-dark-img d-none" alt="">
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

  <!-- About Section -->

  <section id="aboutsection">
    <div class="container">
      <div class="about row">
        <div class="about-left col-lg-6 col-12 order-md-2 order-2">
          <div class="about-main">
            <div class="about-image1 img">
              <img src="{{asset('web/assets/img/about-img-3-demo.webp'); }}" width="100%" loading="lazy">
            </div>
            <div class="about-image2 img">
              <img src="{{asset('web/assets/img/about-img-1-demo.webp'); }}" width="100%" loading="lazy">
            </div>
            <div class="about-image3 img">
              <img src="{{asset('web/assets/img/about-img-2-demo.webp'); }}" width="100%" loading="lazy">
            </div>
          </div>
        </div>
        <!-- <div class="about-left col-lg-6 col-12">
        <div class="about-image1 zindex1 third-img img">
          <img src="{{asset('web/assets/img/about-img-3.webp'); }}" width="100%">
        </div>
        <div class="about-image2 zindex1 img">
          <img src="{{asset('web/assets/img/about-img-1.webp'); }}" width="100%">
        </div>
        <div class="about-image3 zindex1 img">
          <img src="{{asset('web/assets/img/about-img-2.webp'); }}" width="100%">
        </div>
      </div> -->
        <div class="about-right col-lg-6 col-12 order-md-2 order-1">
          <h3 class="head-color main-head">About Us</h3>
          <h1 class="about-main-head head-color">Leading Web Designing & Digital Marketing Company</h1>
          <div class="content-para">
            <p class="">Mentegoz Technologies provides best-in-class technology solutions globally, specialising in website development, digital marketing and branding. Combined with expert coders and business development officers, our team can meet any challenge posed by our clients.</p>
            <p> Our team comprises highly talented and creative individuals who are capable of growing your brand in accordance with your business requirements. As we are certified under <strong>STARTUP INDIA</strong> and <strong>KERALA STARTUP MISSION</strong> we enable an open door for networking and a trusted service to our customers.</p>

            <p>The Rapid advancement of information technology and the latest trends in the technological ecosystem requires state-of-the-art people to tackle and solve new challenges and problems.</p>
          </div>

          <a href="{{url('about')}}" class="main-btn">READ MORE</a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <!-- Project Section -->

  <section id="projectsection">
    <!-- <div class="">  -->
    <h3 class="main-head head-color">Latest Projects</h3>
    <div class="projects">
      <div class="tabs">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link project-btn active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link project-btn" id="pills-website-tab" data-bs-toggle="pill" data-bs-target="#pills-website" type="button" role="tab" aria-controls="pills-website" aria-selected="false">Website</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link project-btn" id="pills-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo" aria-selected="false">Logo</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link project-btn" id="pills-socialmedia-tab" data-bs-toggle="pill" data-bs-target="#pills-socialmedia" type="button" role="tab" aria-controls="pills-socialmedia" aria-selected="false">Social Media</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link project-btn" id="pills-uiux-tab" data-bs-toggle="pill" data-bs-target="#pills-uiux" type="button" role="tab" aria-controls="pills-uiux" aria-selected="false">UI/UX</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">

            <div class="project-slider-section">
              <div class="project-slider-item owl-carousel">
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/abs/abs.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Arabian Business Solution</h2>
                        <p>Website Development</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/brainzone.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Brainzone Academy</h2>
                        <p>Website Development</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/ecoking/ecoking1.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Ecoking Cleaning And Hospitality</h2>
                        <p>Website Development</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/abs/abs2.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Interior Design</h2>
                        <p>Client Name</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>

          <div class="tab-pane fade" id="pills-website" role="tabpanel" aria-labelledby="pills-website-tab">

            <div class="project-slider-section">
              <div class="project-slider-item owl-carousel">
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/abs/abs.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Arabian Business Solution</h2>
                        <p>Website Development</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/ecoking/ecoking1.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Ecoking Cleaning And Hospitality</h2>
                        <p>Website Development</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/brainzone.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Brainzone Academy</h2>
                        <p>Website Development</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>

          <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">

            <div class="project-slider-section">
              <div class="project-slider-item owl-carousel">
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/nazia/nazia.webp'); }}" alt="" class="projects-img">
                  <a href="branding-inner.php">
                    <div class="project-content">
                      <div>
                        <h2>Nazia Hospital</h2>
                        <p>Re-Branding</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/nazia/nazia6.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Interior Design</h2>
                        <p>Client Name</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="pills-socialmedia" role="tabpanel" aria-labelledby="pills-socialmedia-tab">

            <div class="project-slider-section">
              <div class="project-slider-item owl-carousel">
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/ecoking/ecoking1.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Interior Design</h2>
                        <p>Client Name</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="project-item">
                  <img src="{{asset('web/assets/img/projects/project-1.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Interior Design</h2>
                        <p>Client Name</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="pills-uiux" role="tabpanel" aria-labelledby="pills-uiux-tab">

            <div class="project-slider-section">
              <div class="project-slider-item owl-carousel">
                <div class="project-item">
                  <img src="{{asset('web/assets/img/portfolio/brainzone.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Interior Design</h2>
                        <p>Client Name</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="project-item">
                  <img src="{{asset('web/assets/img/projects/project-1.webp'); }}" alt="" class="projects-img">
                  <a href="portfolio-details.php">
                    <div class="project-content">
                      <div>
                        <h2>Interior Design</h2>
                        <p>Client Name</p>
                      </div>
                      <div class="logo">
                        <img src="{{asset('web/assets/img/Clients/client-logo.webp'); }}" alt="">
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>

          <div class="latest-btn">
            <a href="{{url('portfolio');}}" class="view-project-btn">VIEW MORE PROJECTS <i class="fa-solid fa-arrow-right"></i></a>
          </div>

        </div>
      </div>
    </div>



    <!-- </div> -->
    <div class="element" data-aos="slide-left" data-aos-duration="1200">
      <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="">
      <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="">
    </div>
    <div class="element-2" data-aos="slide-right" data-aos-delay="400" data-aos-duration="1200">
      <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="">
      <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="">
    </div>
  </section>

  <!-- Project Section -->

  <!-- Service Section -->

  <section id="servicesection">
    <div class="services">

      <div class="service-item website">
        <div class="row">
          <div class="col-lg-6 col-12 item">
            <!-- <h3 class="main-head head-color">Service We Offer</h3> -->
            <div class="item-details">
              <h2 class="service-head head-color">WEB DESIGN &<br> <span class="subhead-service">DEVELOPEMENT</span></h2>
              <h6 class="head-color">Starts From ₹9999</h6>
              <p>A website is the most important aspect for most businesses or organizations. We at Mentegoz design Websites/ E-commerce platforms after a complete analysis of your business pattern and codes accordingly.</p>
              <div class="row">
                <div class="col-lg-6 col-12">
                  <p class="service-type">Modern & Innovative Design</p>
                  <p class="service-type">Responsive & Customisable</p>
                  <p class="service-type">Easy, Fast and Reliable</p>
                </div>
                <div class="col-lg-6 col-12">
                  <p class="service-type">Life time Support</p>
                  <p class="service-type">Healthy Maintenance</p>
                  <p class="service-type">E-Commerce, CMS</p>
                </div>
              </div>
              <a href="{{url('web-design')}}" class="main-btn">View Service</a>
            </div>
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/html.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/css-3.webp');}}" alt="">
              <img src="{{asset('web/assets/img/Softs/javascript.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/php.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/bootstrap.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/python.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/react.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/mysql.webp');}}" al t="">
              <img src="{{asset('web/assets/img/icons/laravel.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/wordpress.webp');}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-12 other-item">
            <div class="latest-projects">
              <div class="project-items">
                <img class="img1" src="{{asset('web/assets/img/portfolio/brainzone.webp');}}" alt="">
                <img class="img2" src="{{asset('web/assets/img/portfolio/ecoking/ecoking1.webp');}}" alt="">
                <img class="img3" src="{{asset('web/assets/img/portfolio/abs/abs.webp');}}" alt="">
                <div class="project-view-button">
                  <a class="project-view-btn" href="{{url('portfolio')}}">View Latest Projects</a>
                </div>
              </div>
            </div>
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/web-serv.webp');}}" alt="">
            </div>
          </div>
          <a href="#" class="nextservice cont-modal-btn">
            <div class="next-content">
              <!-- <p>Next</p> -->
              <h6>Start Your Project <i class="fi fi-sr-arrow-alt-right"></i></h6>
            </div>
          </a>
        </div>
        <div class="circle"></div>
        <div class="circle1"></div>
      </div>

      <!-- <div class="service-item software">
        <div class="row">
          <div class="col-lg-6 col-12 item">
            <div class="item-details">
              <h2 class="service-head head-color">SOFTWARE<br> <span class="subhead-service">DEVELOPEMENT</span></h2>
              <h6 class="head-color">Starts From 500$</h6>
              <p>By analyzing business requirements, We develop software programs with high performance and quality for your business accordingly. We have the best development expertise in most of the developing languages expecially for building custom Softwares based on the business requirements.</p>
              <div class="row">
                <div class="col-lg-6 col-12">
                  <p class="service-type">Exclusive and Unique</p>
                  <p class="service-type">Bussness Development</p>
                  <p class="service-type">Customisable Software</p>
                </div>
                <div class="col-lg-6 col-12">
                  <p class="service-type">End-to-End Delivery</p>
                  <p class="service-type">High Performance</p>
                  <p class="service-type">Healthy Service & Maintenance</p>
                </div>
              </div>
            </div>
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/python.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/c-sharp.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/c-.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/js.webp');}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-12 other-item">
            <div class="latest-projects">
              <div class="project-items">
                <img class="img1" src="{{asset('web/assets/img/latest-projects3.webp');}}" alt="">
                <img class="img2" src="{{asset('web/assets/img/latest-projects2.webp');}}" alt="">
                <img class="img3" src="{{asset('web/assets/img/latest-projects1.webp');}}" alt="">
                <div class="project-view-button">
                  <a class="project-view-btn" href="{{url('portfolio')}}">View Latest Projects</a>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="nextservice cont-modal-btn">
            <div class="next-content">
              <h6>Start Your Project <i class="fi fi-sr-arrow-alt-right"></i></h6>
            </div>
          </a>
        </div>
        <div class="circle"></div>
        <div class="circle1"></div>
      </div> -->

      <div class="service-item application">
        <div class="row">
          <div class="col-lg-6 col-12 item">
            <!-- <h3 class="main-head head-color">Service We Offer</h3> -->
            <div class="item-details">
              <h2 class="service-head head-color">MOBILE APP<br> <span class="subhead-service">DEVELOPEMENT</span></h2>
              <!-- <h6 class="head-color">Starts From 500$</h6> -->
              <p>We have one of the best crew in town to build both hybrid and native apps exactly according to our client's requirements. We have organized our teams for the best analysis of the requirements.</p>
              <div class="row">
                <div class="col-lg-6 col-12">
                  <p class="service-type">Life Time Supports</p>
                  <p class="service-type">Exclusive Design</p>
                  <p class="service-type">High Perfomance and Security</p>
                </div>
                <div class="col-lg-6 col-12">
                  <p class="service-type">Native and Hybrid Support</p>
                  <p class="service-type">Healthy Service & Maintenance</p>
                  <!-- <p class="service-type">E-Commerce</p> -->
                </div>
              </div>
              <a href="{{url('web-design')}}" class="main-btn">View Service</a>
            </div>
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/python.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/js.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/flutter.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/apple.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/android.webp');}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-12 other-item">
            <div class="latest-projects">
              <div class="project-items">
                <img class="img1" src="{{asset('web/assets/img/latest-projects3.webp');}}" alt="">
                <img class="img2" src="{{asset('web/assets/img/latest-projects2.webp');}}" alt="">
                <img class="img3" src="{{asset('web/assets/img/latest-projects1.webp');}}" alt="">
                <div class="project-view-button">
                  <a class="project-view-btn" href="{{url('portfolio')}}">View Latest Projects</a>
                </div>
              </div>
            </div>
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/app-serv.webp');}}" alt="">
            </div>
          </div>
          <a href="#" class="nextservice cont-modal-btn">
            <div class="next-content">
              <!-- <p>Next</p> -->
              <h6>Start Your Project <i class="fi fi-sr-arrow-alt-right"></i></h6>
            </div>
          </a>
        </div>
        <div class="circle"></div>
        <div class="circle1"></div>
      </div>

      <div class="service-item marketing">
        <div class="row">
          <div class="col-lg-6 col-12 item">
            <!-- <h3 class="main-head head-color">Service We Offer</h3> -->
            <div class="item-details">
              <h2 class="service-head head-color">DIGITAL<br> <span class="subhead-service">MARKETING</span></h2>
              <!-- <h6 class="head-color">Starts From 500$</h6> -->
              <p>At Mentegoz, we have a specialized digital marketing crew to make sure that your business is on top. We also do ensure that it remains at the top. From SEO, SMO to content marketing, We do the job with diligence for best results for our clients.</p>
              <div class="row">
                <div class="col-lg-6 col-12">
                  <p class="service-type">Adaptive Digital Strategy</p>
                  <p class="service-type">Adaptive Promotions</p>
                  <p class="service-type">Exclusive Poster Design</p>
                </div>
                <div class="col-lg-6 col-12">
                  <p class="service-type">Healthy Customer Service</p>
                  <p class="service-type">Healthy Maintenance</p>
                </div>
              </div>
              <a href="{{url('web-design')}}" class="main-btn">View Service</a>
            </div>
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/meta.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/googleads.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/google.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/instagram.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/facebook.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/linkedin.webp');}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-12 other-item">
            <div class="latest-projects">
              <div class="project-items">
                <img class="img1" src="{{asset('web/assets/img/latest-projects3.webp');}}" alt="">
                <img class="img2" src="{{asset('web/assets/img/latest-projects2.webp');}}" alt="">
                <img class="img3" src="{{asset('web/assets/img/latest-projects1.webp');}}" alt="">
                <div class="project-view-button">
                  <a class="project-view-btn" href="{{url('portfolio')}}">View Latest Projects</a>
                </div>
              </div>
            </div>
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/digital-marketing-serv.webp');}}" alt="">
            </div>
          </div>
          <a href="#" class="nextservice cont-modal-btn">
            <div class="next-content">
              <!-- <p>Next</p> -->
              <h6>Start Your Project <i class="fi fi-sr-arrow-alt-right"></i></h6>
            </div>
          </a>
        </div>
        <div class="circle"></div>
        <div class="circle1"></div>
      </div>

      <div class="service-item branding">
        <div class="row">
          <div class="col-lg-6 col-12 item">
            <!-- <h3 class="main-head head-color">Service We Offer</h3> -->
            <div class="item-details">
              <h2 class="service-head head-color">BRANDING &<br> <span class="subhead-service">DESIGNING</span></h2>
              <!-- <h6 class="head-color">Starts From 500$</h6> -->
              <p>Branding, by definition, is a marketing practice in which a company creates a name, symbol or design that is easily identifiable as belonging to the company. This helps to identify a product and distinguish it from other products and services.</p>
              <div class="row">
                <div class="col-lg-6 col-12">
                  <p class="service-type">Develop with New Trends</p>
                  <p class="service-type">More Communicative</p>
                  <p class="service-type">More Creative</p>
                </div>
                <!-- <div class="col-lg-6 col-6">
                  <p class="service-type">E-Commerce</p>
                  <p class="service-type">E-Commerce</p>
                  <p class="service-type">E-Commerce</p>
                </div> -->
              </div>
              <a href="{{url('web-design')}}" class="main-btn">View Service</a>
            </div>
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/photoshop.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/ai.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/indesign.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/after.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/premiere-pro.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/corel.webp');}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-12 other-item">
            <div class="latest-projects">
              <div class="project-items">
                <img class="img1" src="{{asset('web/assets/img/latest-projects3.webp');}}" alt="">
                <img class="img2" src="{{asset('web/assets/img/latest-projects2.webp');}}" alt="">
                <img class="img3" src="{{asset('web/assets/img/latest-projects1.webp');}}" alt="">
                <div class="project-view-button">
                  <a class="project-view-btn" href="{{url('portfolio')}}">View Latest Projects</a>
                </div>
              </div>
            </div>
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/branding-serv.webp');}}" alt="">
            </div>
          </div>
          <a href="#" class="nextservice cont-modal-btn">
            <div class="next-content">
              <!-- <p>Next</p> -->
              <h6>Start Your Project <i class="fi fi-sr-arrow-alt-right"></i></h6>
            </div>
          </a>
        </div>
        <div class="circle"></div>
        <div class="circle1"></div>
      </div>

      <div class="service-item ui-ux">
        <div class="row">
          <div class="col-lg-6 col-12 item">
            <!-- <h3 class="main-head head-color">Service We Offer</h3> -->
            <div class="item-details">
              <h2 class="service-head head-color">UI/UX<br> <span class="subhead-service">DESIGNING</span></h2>
              <!-- <h6 class="head-color">Starts From 500$</h6> -->
              <p>We helps to create engaging digital experiences. Our team of designers and developers is dedicated to crafting intuitive interfaces that make it easy for users to navigate. Whether you need a website, app, or software, we have the expertise to create a design that meets your needs.</p>
              <div class="row">
                <div class="col-lg-6 col-12">
                  <p class="service-type">Unique Design</p>
                  <p class="service-type">Enhanced User Satisfaction</p>
                  <p class="service-type">Attractive User Interface</p>
                </div>
                <div class="col-lg-6 col-12">
                  <p class="service-type">User Friendly Layouts</p>
                  <p class="service-type">End-to-End Delivery</p>
                  <!-- <p class="service-type"></p> -->
                </div>
              </div>
              <a href="{{url('web-design')}}" class="main-btn">View Service</a>
            </div>
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/figma.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/xd.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/sketch.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/photoshop.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/ai.webp');}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-12 other-item">

            <div class="latest-projects">
              <div class="project-items">
                <img class="img1" src="{{asset('web/assets/img/latest-projects3.webp');}}" alt="">
                <img class="img2" src="{{asset('web/assets/img/latest-projects2.webp');}}" alt="">
                <img class="img3" src="{{asset('web/assets/img/latest-projects1.webp');}}" alt="">
                <div class="project-view-button">
                  <a class="project-view-btn" href="{{url('portfolio')}}">View Latest Projects</a>
                </div>
              </div>
            </div>
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/ui-serv.webp');}}" alt="">
            </div>
          </div>
          <a href="#" class="nextservice cont-modal-btn">
            <div class="next-content">
              <!-- <p>Next</p> -->
              <h6>Start Your Project <i class="fi fi-sr-arrow-alt-right"></i></h6>
            </div>
          </a>
        </div>
        <div class="circle"></div>
        <div class="circle1"></div>
      </div>



    </div>
  </section>

  <!-- Service Section -->


  <!-- Project Section --->



  <!-- Projects End -->

  <!-- Cta Section -->

  <section id="ctabtn">
    <div class="cta-mask">
      <div class="cta-rocket">
        <img src="{{asset('web/assets/img/rocket.webp'); }}" alt="">
      </div>
      <div class="ctabg">
        <div class="cta-left">

        </div>
        <div class="cta-right">
          <h3 class="ctahead">Start Your Project</h3>
          <p class="cta-para">We always try to provide you our best business consulting service.</p>
          <button type="button" href="contact.php" class="cta-btn cont-modal-btn">Enquire Now</button>
          <div class="shade-logo">
            <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cta Section End -->

  <!-- Why Choose Us Section --->

  @include('Layout.inc.whychoose')

  <!-- Why Choose Us Section end --->


  <!--- Draw SVG Section --->

  @include('Layout.inc.process-svg')

  <!--- Draw SVG Section end --->

  <!-- World Wide Section --->

  @include('Layout.inc.worldwide')

  <!-- World Wide Section --->

  <!-- Product Section --->

  <section id="productsection">
    <div class="container">
      <div class="products-cont">
        <div class="main-head head-color">Our Products</div>
        <h2 class="sub-head head-color">Our Valuable Products</h2>
        <p>Mentegoz technologies attempt to create digital products that satisfy both the needs of the user and your
          company goals. Clients can choose from a variety of Platforms.
        </p>
        <a href="{{url('product')}}" class="main-btn">View More</a>
      </div>

      <div class="products">
        <div class="product-item-slider owl-carousel">
          <div class="product-bg">
            <div class="product-items">
              <div class="row">
                <div class="col-lg-12 col-12 left">
                  <div class="logo">
                    <img class="product-ment-logo" src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="">
                    <img class="product-ment-logo-dark d-none" src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="">
                  </div>
                </div>
                <div class="col-lg-12 col-12 right">
                  <div class="item">
                    <img src="{{asset('web/assets/img/product/proffin-logo.webp'); }}" alt="" class="product-logo">
                    <img src="{{asset('web/assets/img/product/proffin-logo-dark.webp'); }}" alt="" class="product-logo-dark d-none">
                  </div>
                  <div class="item-cont">
                    <p class="products-para">PROFFIN is simple and easy online accounting software for all type of business.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-bg">
            <div class="product-items">
              <div class="row">
                <div class="col-lg-12 col-12 left">
                  <div class="logo">
                    <img class="product-ment-logo" src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="">
                    <img class="product-ment-logo-dark d-none" src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="">
                  </div>
                </div>
                <div class="col-lg-12 col-12 right">
                  <div class="item">
                    <img src="{{asset('web/assets/img/product/mosbill_logo.webp'); }}" alt="">
                  </div>
                  <div class="item-cont">
                    <p class="products-para">Mosbill billing application with inventory, GST, invoice printing etc..</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-bg">
            <div class="product-items">
              <div class="row">
                <div class="col-lg-12 col-12 left">
                  <div class="logo">
                    <img class="product-ment-logo" src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="">
                    <img class="product-ment-logo-dark d-none" src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="">
                  </div>
                </div>
                <div class="col-lg-12 col-12 right">
                  <div class="item">
                    <img src="{{asset('web/assets/img/product/easyrent_logo.webp'); }}" alt="" class="product-logo">
                    <img src="{{asset('web/assets/img/product/easyrent_logo-dark.webp'); }}" alt="" class="product-logo-dark d-none">
                  </div>
                  <div class="item-cont">
                    <p class="products-para">LEzy Rent is the all-in-one rental software for any business and every rental industry.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="product-bg">
            <div class="product-items">
              <div class="row">
                <div class="col-lg-12 col-12 left">
                  <div class="logo">
                    <img class="product-ment-logo" src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="">
                    <img class="product-ment-logo-dark d-none" src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="">
                  </div>
                </div>
                <div class="col-lg-12 col-12 right">
                  <div class="item">
                    <img src="{{asset('web/assets/img/product/ems_logo.webp'); }}" alt="" width="100%">
                  </div>
                  <div class="item-cont">
                    <p class="products-para">Our all-in-one Educational Management System software, automate institute daily academic & administrative operations hassle-free.</p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="product-bg">
            <div class="product-items">
              <div class="row">
                <div class="col-lg-12 col-12 left">
                  <div class="logo">
                    <img class="product-ment-logo" src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="">
                    <img class="product-ment-logo-dark d-none" src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="">
                  </div>
                </div>
                <div class="col-lg-12 col-12 right">
                  <div class="item">
                    <img src="{{asset('web/assets/img/product/hrmls_logo.webp'); }}" alt="">
                  </div>
                  <div class="item-cont">
                    <p class="products-para">HRMS & Payroll Software Used by many companies across world. Biometric Attendance.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-bg">
            <div class="product-items">
              <div class="row">
                <div class="col-lg-12 col-12 left">
                  <div class="logo">
                    <img class="product-ment-logo" src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="">
                    <img class="product-ment-logo-dark d-none" src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="">
                  </div>
                </div>
                <div class="col-lg-12 col-12 right">
                  <div class="item">
                    <img src="{{asset('web/assets/img/product/medi-clinik-logo.webp'); }}" alt="">
                  </div>
                  <div class="item-cont">
                    <p class="products-para">Medi clinic Software is designed to make and control your Appointments easily and securely...</p>
                  </div>
                  <!-- <div class="product-btn">
                    <a href="product.php" class="main-btn">View Product</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="owl-nav">
          <button type="button" role="presentation" class="owl-prev">
            <span arial-label="Previous"><</span>
          </button>
        </div> -->

        </div>
      </div>
    </div>

  </section>

  <!-- Product Section --->

  <!-- scnd cta -->

  @include('Layout.inc.scnd-cta')

  <!-- scnd cta -->

  <!-- Testimonial Section --->

  <section id="testimonialsection">
    <div class="container-fluid">
      <div class="testimonial">
        <div class="row">
          <div class="col-lg-12 col-12 right">
            <div class="container">
              <div class="main-head head-color">Testimonials</div>
              <div class="row">
                <div class="col-12 head-left">
                  <h2 class="sub-head head-color">Our Customers Love<br>What We Do</h2>
                </div>
                <!-- <div class="col-6 head-right">

                </div> -->
              </div>
            </div>
            <div class="testimonial-item-section">

              <div class="testimonial-items testi-hori">
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    We are so happy with mentegoz technologies for website development and digital marketing of our company. They keep uniqueness in their work and exceed my expectations on the SEO side. And we were well impressed with their digital marketing and branding of our company. Moreover, they show their best in SEO and ranking on the first pages of search results before our target time.</p>
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
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    We consulted mentegoz for branding and digital marketing. highly satisfied and highly recommended team too for social media marketing. very good response and service</p>
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
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    We appreciate your Business. It was a pleasure doing business with you and I hope we can be of service to you again in the future.Very energetic and positive team. They are very responsible and does the work in time frame.</p>
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
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    I am very glad about your services to our organization moreover I am very proud that our alumni is doing a great job. It certainly offers the best service in Calicut today and shows great professionalism. Wish you All the best.</p>
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
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    Thank you Team Mentegoz for my website. Throughout the life cycle of the project, these young and energetic professionals were supportive and accommodative to the changes and new requirements. The team was very responsive in developing features and fixing bugs with minimal turnaround time.</p>
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
                <div class="testimonial-cont item">
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



              <div class="testimonial-items testi-rev-hori" dir="rtl">
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    We are so happy with mentegoz technologies for website development and digital marketing of our company. They keep uniqueness in their work and exceed my expectations on the SEO side. And we were well impressed with their digital marketing and branding of our company. Moreover, they show their best in SEO and ranking on the first pages of search results before our target time.</p>
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
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    We consulted mentegoz for branding and digital marketing. highly satisfied and highly recommended team too for social media marketing. very good response and service</p>
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
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    We appreciate your Business. It was a pleasure doing business with you and I hope we can be of service to you again in the future.Very energetic and positive team. They are very responsible and does the work in time frame.</p>
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
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    I am very glad about your services to our organization moreover I am very proud that our alumni is doing a great job. It certainly offers the best service in Calicut today and shows great professionalism. Wish you All the best.</p>
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
                <div class="testimonial-cont item">
                  <i class="fa-sharp fa-solid fa-quote-left"></i>
                  <p class="testimonial-comment">
                    Thank you Team Mentegoz for my website. Throughout the life cycle of the project, these young and energetic professionals were supportive and accommodative to the changes and new requirements. The team was very responsive in developing features and fixing bugs with minimal turnaround time.</p>
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
                <div class="testimonial-cont item">
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


              <div class="swiper-pagination"></div>
            </div>
            <div class="testi-button">
              <a href="{{url('testimonial')}}" class="main-btn">View More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="element-3d threed_light" alt="">
    <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="element-3d threed_dark d-none" alt="">
  </section>


  <!-- Testimonial Section --->



  <!-- Contact Section --->

  <section id="contactsection">
    <div class="container">
      <div class="top-section">
        <div class="logo" data-aos="flip-left" data-aos-delay="1200" data-aos-duration="800">
          <img class="product-ment-logo" src="{{asset('web/assets/img/contact-top-logo.webp'); }}" alt="">
          <img class="product-ment-logo-dark d-none" src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="">

        </div>
        <h2 class="sub-head head-color">Let's Work Together</h2>
        <p>Let's work together and bring your ideas to life with Mentegoz Technologies. Our dedicated team is ready to collaborate closely with you, combining our expertise and your vision to create innovative digital solutions. Taking your business to new heights is possible when we work together. Let's start this exciting journey together by getting in touch with us today.
        </p>
      </div>
      <div class="bottom-section">
        <div class="row">
          <div class="col-lg-5 col-12 left-contact">
            <h5 class="head-color">Get In Touch</h5>
            <form>
              <div class="col-12">
                <label for="name">Name</label>
                <input type="name" id="">
              </div>
              <div class="col-12">
                <label for="name">E-Mail</label>
                <input type="email" id="">
              </div>
              <div class="col-12">
                <label for="name">Phone</label>
                <input type="phone" id="">
              </div>
              <div class="col-12">
                <label for="service">What Services You Need</label>
                <div class="dropdown">
                  <input type="text" class="dropdown-input-contact" readonly value="- select service -">
                  <ul class="dropdown-div">
                    <li name="" id="" class="dropdown-items" value="Website Development">Website Development</li>
                    <li name="" id="" class="dropdown-items" value="Digital Marketing">Digital Marketing</li>
                    <li name="" id="" class="dropdown-items" value="Branding & Designing">Branding & Designing</li>
                    <li name="" id="" class="dropdown-items" value="UI/UX Design">UI/UX Design</li>
                    <li name="" id="" class="dropdown-items" value="Application Development">Application Development</li>
                    <li name="" id="" class="dropdown-items" value="Software Development">Software Development</li>
                    <li name="" id="" class="dropdown-items" value="Other Services">Other Services</li>
                  </ul>
                </div>
              </div>
              <div class="col-12">
                <label for="name">Comment Here</label>
                <textarea rows="4" id=""></textarea>
              </div>
              <button type="button" class="cont-btn" id="">SUBMIT</button>
            </form>
          </div>
          <div class="col-lg-7 col-12 right">
            <div class="contact-item">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <img src="{{asset('web/assets/img/contact/inform.webp'); }}" alt="">
                  <h5 class="head-color">Call Enquiry Assistance</h5>
                  <p>For any inquiries or questions, our team is just a phone call away. We are here to provide you with the assistance you need.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <img src="{{asset('web/assets/img/contact/internet.webp'); }}" alt="">
                  <h5 class="head-color">Project Consultation</h5>
                  <p>Get expert project consultations from our team to ensure the success of your venture.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <img src="{{asset('web/assets/img/contact/pictures.webp'); }}" alt="">
                  <h5 class="head-color">Project Estimation</h5>
                  <p>Simplify your project planning and costing process by entrusting it to us. We'll handle all the necessary steps.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                  <img src="{{asset('web/assets/img/contact/suitcase.webp'); }}" alt="">
                  <h5 class="head-color">Schedule Your Appointment</h5>
                  <p>Schedule appointments with us at your convenience. We're here to assist you in setting up meetings that work for you.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section --->

  <!-- Blog Section --->

  @include('Layout.inc.blog')

  <!-- Blog Section --->

  <!-- Footer Section --->

  @include('Layout.inc.footer')

  <!-- End Footer Section --->






  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.2.js"></script>
  
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Scroll trigger -->
  <script src="{{asset('web/assets/js/gsap-latest-beta.min.js'); }}"></script>
  <script src="{{asset('web/assets/js/ScrollTrigger.min.js'); }}"></script>

  <!-- Srvice Scroll -->
  <script src="{{asset('web/assets/js/service-scroll.js'); }}"></script>
  
  <!-- Font Aswesome -->
  <script src="https://kit.fontawesome.com/275b00d5ce.js" crossorigin="anonymous"></script>

  <!-- Counter -->
  <script src="{{asset('web/assets/js/jquery.waypoints.min.js'); }}"></script>
  <script src="{{asset('web/assets/js/jquery.countup.js'); }}"></script>

  <!-- owl carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

  <!-- slick -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


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

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



 



  <script>
    // Custom Contact Dropdown

    let dropdown_input = document.querySelector('.dropdown-input-contact')
    dropdown_input.addEventListener('click', function() {
      // console.log('clicked')
      document.querySelector('.dropdown-input-contact').parentElement.querySelector('.dropdown-div').classList.add('active')
    })

    document.querySelector('.dropdown-input-contact').parentElement.querySelector('.dropdown-div').querySelectorAll('.dropdown-items').forEach((item) => {
      // console.log(item)
      item.addEventListener('click', function() {
        let services = item.getAttribute('value')
        dropdown_input.value = services
        document.querySelector('.dropdown-input-contact').parentElement.querySelector('.dropdown-div').classList.remove('active')

      })
    })


    //Click Outside Display None

    document.body.addEventListener('click', event => {
      // check if the clicked element is the 'my-element' element or one of its children
      const clickedElement = event.target;
      const myElement = document.querySelector('.dropdown-input-contact');
      if (myElement.contains(clickedElement)) {
        // do nothing if the clicked element is the 'my-element' element or one of its children
        return;
      }

      // remove the 'active' class from the 'my-element' element
      document.querySelector('.dropdown-input-contact').parentElement.querySelector('.dropdown-div').classList.remove('active')
    });
  </script>


  <script>
    AOS.init();
  </script>


  <!-- counter -->
  <script>
    $('.counter').countUp({
      delay: 5,
      time: 1000,
    });
  </script>


  <script>
    document.querySelectorAll('.hm-nav').forEach((item) => item.classList.add('active'));
  </script>



</body>

</html>