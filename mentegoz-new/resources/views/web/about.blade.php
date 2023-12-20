<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <!-- Favicon -->
  <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">

  <!-- Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- owl carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- main style -->
  <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">

  <!-- style2 -->
  <link href="{{asset('web/assets/css/style2.css'); }}" rel="stylesheet" type="text/css">
</head>

<body id="body">

  <div id="main-about">

    <!-- header -->
    @include('Layout.inc.header')
    <!-- header -->
    <video src="{{asset('web/assets/img/about-pg-slider/about-bg-video.mp4'); }}" autoplay muted loop></video>
    <span class="video-ovr-efct"></span>
  </div>


  <!-- Preloader -->
  <div class="mentpreloader">
    <img src="{{asset('web/assets/img/loader/ment-loader.gif'); }}" alt="">
  </div>
  <!-- Preloader -->


  <section>

    @include('Layout.inc.modal')

  </section>

  <!-- about section -->

  <div class="about-pg-section">
    <div class="container">
      <div class="row row-one">
        <div class="col-lg-5 col-12 left">
          <div class="about-image">
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_3rqwsqnj.json" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="col-lg-7 col-12 d-flex right mt-md-5">
          <div class="about">
            <div class="head">
              <p class="sm-pg-head">About Mentegoz Technologies</p>
              <div>
                <h3 class="bg-pg-head arrow-head">Our journey</h3>
              </div>
              <!-- <div class="mt-md-5 mt-3 text-reveal-div">
            <p class="bg-lite-pg-head reveal-text">What we</p>
            <h3 class="bg-pg-head reveal-text">DO DIFFERENTLY</h3>
          </div> -->
            </div>
            <p class="pg-para pt-2">Mentegoz technologies A well-established website development and digital marketing-based IT company providing best-in-class technology solutions worldwide. We with our smartest coders and business development officers in the team have got the potential to take up any challenge provided by the client. We have a well talented and creative team that perfectly grows your brand based on the business requirements.</p>
          </div>
        </div>
      </div>

      <div class="row row-two">
        <div class="col-lg-7 col-12 left">
          <div class="about">
            <div class="head">
              <div>
                <h3 class="bg-pg-head arrow-head">Our Quality</h3>
              </div>
              <!-- <div class="mt-md-5 mt-3 text-reveal-div">
            <p class="bg-lite-pg-head reveal-text">What we</p>
            <h3 class="bg-pg-head reveal-text">DO DIFFERENTLY</h3>
          </div> -->
            </div>
            <p class="pg-para pt-2">The Rapid advancement of Information technology and the latest trends and designs in the technological ecosystem requires state of the art people to tackle and solve new challenges and problems. Mentegoz Technologies involves all the latest technology and technology trends like web designing, software, mobile application development, and the digital marketing spectrum. We are always trying to reach out to every single one with their needs, whether personal, business, or education. We want the best possible solutions for people. </p>
          </div>
        </div>
        <div class="col-lg-5 col-12 right">
          <div class="about-image">
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_vt5qgnum.json" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
        </div>
      </div>

      <div class="row row-three">
        <div class="col-lg-5 col-12 left">
          <div class="about-image">
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_tfemgwhi.json" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
        </div>
        <div class="col-lg-7 col-12 d-flex right">
          <div class="about">
            <div class="head">
              <div>
                <h3 class="bg-pg-head arrow-head">Our Support</h3>
              </div>
              <!-- <div class="mt-md-5 mt-3 text-reveal-div">
            <p class="bg-lite-pg-head reveal-text">What we</p>
            <h3 class="bg-pg-head reveal-text">DO DIFFERENTLY</h3>
          </div> -->
            </div>
            <p class="pg-para pt-2">We can able to help a client with proper web design and development along with SEO for future growth. We are best in customized software and apps depending on the user requirements and mode of business. We will assist you to grow the business with innovative digital marketing strategies and techniques and help in creating a new brand in the market. We have a long-term vision to help spread technological solutions to all aspects of life and an everyday mission to keep up with the standard and timely delivery of our projects.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="marquee-head">
    <marquee scrollmount="4">
      <h1 class="beyond-text">BEYOND EVERYTHING</h1>
    </marquee>
  </div>






  <!-- about team bg -->
  <div class="team-image-section">
    <section class="image-grow">
      <div>
        <img id="grow" src="{{asset('web/assets/img/about-pg-slider/about-team.webp'); }}" />
      </div>
      <h2 id="grow-tagline" class="tagline">Life at Mentegoz</h2>
    </section>
  </div>
  <!-- about team bg -->


  <!-- about quality section -->

  <div class="about-pg-quality-section">
    <div class="container">

      <div class="quality-point">
        <h6 class="sm-head">BEYOND</h6>
        <h3 class="bg-head menu__item-text">Creative ideas & Design</h3>
        <div class="menu__item-image creative"></div>
      </div>

      <div class="quality-point">
        <h6 class="sm-head">BEYOND</h6>
        <h3 class="bg-head menu__item-text">Qualified Employees</h3>
        <div class="menu__item-image qualified-emp"></div>
      </div>
      <div class="quality-point">
        <h6 class="sm-head">BEYOND</h6>
        <h3 class="bg-head menu__item-text">Modern Technology</h3>
        <div class="menu__item-image technology"></div>
      </div>
      <div class="quality-point">
        <h6 class="sm-head">BEYOND</h6>
        <h3 class="bg-head menu__item-text">24/7 Quick Support</h3>
        <div class="menu__item-image support"></div>
      </div>

      <!-- <div class="ment-logo">
        <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" width="100%" class="mentservicelogo">
        <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" width="100%" class="mentservicelogo-dark d-none">
      </div> -->

    </div>
  </div>

  <!-- about dtls quality end -->


  <!-- our values section start -->

  <div class="values-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 values-details">
          <p class="main-head">Our Values</p>
          <p class="md-head">Core Values Of Mentegoz</p>
          <p class="values-content">To us, world-class digital products take more than intelligent code or creative design. It requires true partnership between the ideators and the innovators.
            Our collaborations are built on a bedrock of transparency, communication, expert project management, and attention to detail.</p>
          <div class="element" data-aos="slide-left" data-aos-delay="0" data-aos-duration="1200">
            <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="">
            <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="">
          </div>
        </div>
        <div class="col-lg-12 col-md-12 ">
          <nav>
            <div class="nav values-tab" id="nav-tab" role="tablist">
              <button class="nav-link-about active" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Our Vision</button>
              <button class="nav-link-about" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission" aria-selected="false">Our Mission</button>
              <button class="nav-link-about" id="nav-quality-tab" data-bs-toggle="tab" data-bs-target="#nav-quality" type="button" role="tab" aria-controls="nav-quality" aria-selected="false">Quality Policy</button>
              <button class="nav-link-about" id="nav-customer-tab" data-bs-toggle="tab" data-bs-target="#nav-customer" type="button" role="tab" aria-controls="nav-customer" aria-selected="false">Customer Service</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
              <div class="values-desc-box">
                <div class="tab-content">
                  <h3 class="tab-head">Our Vision</h3>
                  <p>Our Vision is to reach out to everyone and help them with our technology need it to be personal, business or education. We are committed to providing the best work and solution.</p>
                </div>
                <div class="tab-image">
                  <img src="{{asset('web/assets/img/about-tabs/vision.webp'); }}" alt="">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
              <div class="values-desc-box">
                <div class="tab-content">
                  <h3 class="tab-head">Our Missison</h3>
                  <p>Our Mission is to provide the best Technology products for our clients according to their needs and deliver them on time. We take up the no-worry policy.</p>
                </div>
                <div class="tab-image">
                  <img src="{{asset('web/assets/img/about-tabs/misison.webp'); }}" alt="">
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="nav-quality" role="tabpanel" aria-labelledby="nav-quality-tab">
              <div class="values-desc-box">
                <div class="tab-content">
                  <h3 class="tab-head">Quality Policy</h3>
                  <p>Quality Assurance is an essential part of any project. We develop and deliver only superior quality products & services and maintain credibility in the market for the quality of our products & services (Software and web development) all the time. We are committed to total Customer satisfaction and continual improvement in our performance to meet customer expectations at all times.</p>
                </div>
                <div class="tab-image">
                  <img src="{{asset('web/assets/img/about-tabs/quality.webp'); }}" alt="">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-customer" role="tabpanel" aria-labelledby="nav-customer-tab">
              <div class="values-desc-box">
                <div class="tab-content">
                  <h3 class="tab-head">Customer Service</h3>
                  <p>The core task of a business is to ensure that customers come back, which can be done only by delivering excellent service quality. We are maintaining a consistently high level of customer services In order to continuously exceed customer expectations. Delivering Customer Satisfaction is our passion and we assure providing timely, responsive service with integrity, simplicity, and responsibility.</p>
                </div>
                <div class="tab-image">
                  <img src="{{asset('web/assets/img/about-tabs/service.webp'); }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Team Section -->

  <!-- <div class="teamsection">
    <div class="container">
      <div class="team-div">
        <div class="team">
          <div class="team-top">
            <p class="main-head">Our Team</p>
            <p class="sub-head">Meet Our Team</p>
            <p class="team-para">we have several of the most well-known experts in the software and online Industry today. These internationally acclaimed individuals are able to provide you with world-class knowledge and experience in a variety of software &internet marketing practices. "Team Work makes the Dreamwork" and our leaders have Big Dreams.</p>
          </div>
          <div class="team-indivi">
            <div class="row">
              <div class="col-md-4 col-12">
                <div class="member">
                  <div class="team-image">
                    <img src="{{asset('web/assets/img/banner-client-img.webp'); }}" alt="" width="100%">
                  </div>
                  <div class="team-content">
                    <div class="head">
                      <h3>Sharon Armin</h3>
                      <p>Web Developer</p>
                    </div>
                    <div class="social">
                      <a href="#">
                        <i class="fa-brands social-icon fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="member">
                  <div class="team-image">
                    <img src="{{asset('web/assets/img/banner-client-img-2.webp'); }}" alt="" width="100%">
                  </div>
                  <div class="team-content">
                    <div class="head">
                      <h3>Mujeeb Rahman</h3>
                      <p>Graphic Designer</p>
                    </div>
                    <div class="social">
                      <a href="#">
                        <i class="fa-brands social-icon fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="member">
                  <div class="team-image">
                    <img src="{{asset('web/assets/img/banner-client-img-3.webp'); }}" alt="" width="100%">
                  </div>
                  <div class="team-content">
                    <div class="head">
                      <h3>Shehana Jam</h3>
                      <p>SEO Specialist</p>
                    </div>
                    <div class="social">
                      <a href="#">
                        <i class="fa-brands social-icon fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="element">
      <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="">
      <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="">
    </div>
  </div> -->


  <div class="teamsection">
    <div class="container">
      <div class="team-div">
        <div class="team">
          <div class="team-top">
            <p class="main-head">Our Team</p>
            <p class="sub-head">Meet Our Team</p>
            <p class="team-para">we have several of the most well-known experts in the software and online Industry today. These internationally acclaimed individuals are able to provide you with world-class knowledge and experience in a variety of software &internet marketing practices. "Team Work makes the Dreamwork" and our leaders have Big Dreams.</p>
          </div>
          <div class="team-indivi">
            <!-- <h3 class="tab-head">Our Team Members</h3> -->
            <div class="teams-member owl-carousel">
              <div class="member">
                <div class="team-image">
                  <img src="{{asset('web/assets/img/banner-client-img.webp'); }}" alt="" width="100%">
                </div>
                <div class="team-content">
                  <div class="head">
                    <h3>Sharon Armin</h3>
                    <p>Web Developer</p>
                  </div>
                  <div class="social">
                    <a href="#">
                      <i class="fa-brands social-icon fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="member">
                <div class="team-image">
                  <img src="{{asset('web/assets/img/banner-client-img-2.webp'); }}" alt="" width="100%">
                </div>
                <div class="team-content">
                  <div class="head">
                    <h3>Mujeeb Rahman</h3>
                    <p>Graphic Designer</p>
                  </div>
                  <div class="social">
                    <a href="#">
                      <i class="fa-brands social-icon fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="member">
                <div class="team-image">
                  <img src="{{asset('web/assets/img/banner-client-img-2.webp'); }}" alt="" width="100%">
                </div>
                <div class="team-content">
                  <div class="head">
                    <h3>Vivek Aloshy</h3>
                    <p>Front End Developer</p>
                  </div>
                  <div class="social">
                    <a href="#">
                      <i class="fa-brands social-icon fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="member">
                <div class="team-image">
                  <img src="{{asset('web/assets/img/banner-client-img-3.webp'); }}" alt="" width="100%">
                </div>
                <div class="team-content">
                  <div class="head">
                    <h3>Febi Fathima</h3>
                    <p>SEO Specialist</p>
                  </div>
                  <div class="social">
                    <a href="#">
                      <i class="fa-brands social-icon fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="element" data-aos="zoom" data-aos-delay="0" data-aos-duration="1200">
      <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="">
      <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="">
    </div>
  </div>
  <!-- Team Section End -->




  <!-- scnd cta -->

  @include('Layout.inc.scnd-cta')

  <!-- scnd cta -->

  <!-- Why Choose Us Section --->

  <section id="whychoose" class="whychoose-about">

    <div class="container">
      <div class="why-details">
        <div class="row">
          <div class="col-lg-10 col-12 left">
            <!-- <h3 class="main-head head-color">Why Us</h3> -->
            <h2 class="sub-head head-color">Why Choose<br>Mentegoz Technologies</h2>
            <p>Mentegoz technologies attempt to create digital products that satisfy both the needs of the user and your company goals. Clients can choose from a variety of Platforms and Technologies. We understand that each company has unique requirements that must be met in a variety of ways. As a result of our long-term connections with clients, we offer high-quality solutions that are adaptable. We are the best IT Company that provides web designing, software solutions, e-commerce, branding and digital marketing in Kozhikode, Kerala.</p>
            <!-- <a href="#" class="main-btn">READ MORE</a> -->
          </div>
          <div class="col-lg-2 col-12 right">
            <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="" data-aos="slide-left" data-aos-delay="200" data-aos-duration="1200">
            <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="" data-aos="slide-left" data-aos-delay="200" data-aos-duration="1200">
          </div>
        </div>
      </div>


    </div>

  </section>

  <!-- Why Choose Us Section end --->


  <!--- Draw SVG Section --->

  <!-- @include('Layout.inc.process-svg') -->

  <!--- Draw SVG Section end --->




  <!-- Clients Section -->

  <section id="clientsection">
    <div class="container">
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
      </div>
    </div>
  </section>

  <!-- Client Section -->


  <!-- Footer Section -->

  @include('Layout.inc.footer')

  <!-- End Footer Section -->








  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.2.js"></script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Aswesome -->
  <script src="https://kit.fontawesome.com/275b00d5ce.js" crossorigin="anonymous"></script>

  <!-- Lottie Files -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <!-- GSAP Script -->
  <script src="{{asset('web/assets/js/gsap-latest-beta.min.js'); }}"></script>
  <script src="{{asset('web/assets/js/ScrollTrigger.min.js'); }}"></script>

  <!-- grow image -->
  <script src="{{asset('web/assets/js/growImg.js'); }}"></script>

  <!-- scroll smooth -->
  <script src="{{asset('web/assets/js/SmoothScrollMouseWheel.js'); }}"></script>

  <!-- owl carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

  <!-- script 1 -->
  <script src="{{asset('web/assets/js/main1.js'); }}"></script>

  <!-- script 2 -->
  <script src="{{asset('web/assets/js/main2.js'); }}"></script>

  <!-- Darkmode script -->
  <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

  <!-- Offcanavas -->
  <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>

  <!-- Modal -->
  <script src="{{asset('web/assets/js/modal.js'); }}"></script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <!-- Script 2 -->
  <script src="{{asset('web/assets/js/main2.js'); }}"></script>



  <script>
    // AOS
    AOS.init();

    // Team Section Slider
    $(document).ready(function() {
      $('.teams-member').owlCarousel({
        loop: true,
        margin: 10,
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



  <script>
    document.querySelectorAll('.ab-nav').forEach((item) => item.classList.add('active'));
  </script>


</body>

</html>