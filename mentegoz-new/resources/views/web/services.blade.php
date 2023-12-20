<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>

  <!-- Fav Icon -->
  <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">

  <!-- Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- owl carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- Flat icon -->
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/> -->

  <!-- Style -->
  <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">

  <!-- style 2 -->
  <link href="{{asset('web/assets/css/style3.css'); }}" rel="stylesheet" type="text/css">

</head>

<body>

  <!-- Modal Section -->

  @include('Layout.inc.modal')

  <!-- Modal Section End -->

  @include('Layout.inc.header')


  <!-- Preloader -->
  <div class="mentpreloader">
    <img src="{{asset('web/assets/img/loader/ment-loader.gif'); }}" alt="">
  </div>
  <!-- Preloader -->

  <div id="main-service">

    <!-- service header -->

    <div class="service__head">
      <div class="container">
        <div class="head__section">
          <div class="row">
            <div class="left_section col-md-12">
              <h1 class="service-banner-head">The Digital World in Your Hands</h1>
            </div>
            <div class="right_section col-md-12">
              <p>The developing of acomputerized scene for the present business stage calls for the requirement for a productive site. Numerous organizations consider the site as an incredible medium for advertising their business for producting more leads, referrals and new customers.</p>
            </div>
            <div class="banner-button">
              <button type="button" class="cta-btn-service cont-modal-btn">Enquire Now</button>
            </div>
            <div class="ser-ment-logo">
              <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" width="100%" class="mentservicelogo">
              <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" width="100%" class="mentservicelogo-dark d-none">
            </div>
            <div class="element">
              <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="" width="100%">
              <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end service header -->

  </div>


  <!-- service section items -->

  <div class="service_____section">

    <div class="service-pg-slide gslide-1">
      <div class="container">
        <div class="row service_box">
          <div class="col-lg-6 service-left abs">
            <h2 class="service-head head-color">Web Design & <br><span class="subhead-service">Development</span></h2>
            <p class="service-price">Starts from ₹9999</p>
            <p class="para">A website is the most important aspect for most businesses or organizations. We at Mentegoz design Websites/ E-commerce platforms after a complete analysis of your business pattern and codes accordingly.</p>
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
            <a href="{{url('web-design')}}" class="main-btn">View Service</a>
          </div>
          <div class="col-lg-6 service-right abs">
            <!-- <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_vnikrcia.json" background="transparent" speed="1" loop autoplay></lottie-player> -->
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/web-serv.webp');}}" alt="">
            </div>
          </div>


          <div class="service-view-project-btn">
            <div class="view-project">
              <a href="{{url('portfolio')}}">View Projects <i class="fi fi-sr-arrow-alt-right"></i></a>
            </div>
          </div>

          <!-- <div class="element">
      <img src="{{asset('web/assets/img/3d-element.webp');}}" class="threed_light" alt="">
      <img src="{{asset('web/assets/img/3d-element-dark.webp');}}" class="threed_dark d-none" alt="">
    </div> -->
        </div>
      </div>
    </div>

    <div class="service-pg-slide gslide-2">
      <div class="container">
        <div class="row service_box">
          <div class="col-lg-6 order-lg-2 order-md-1 service-left">
            <h2 class="service-head head-color">Application<br><span class="subhead-service">Development</span></h2>
            <p class="service-price">Starts from ₹9999</p>
            <p class="para">We have one of the best crew in town to build both hybrid and native apps exactly according to our client's requirements. We have organized our teams for the best analysis of the requirements.</p>
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
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/python.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/js.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/flutter.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/apple.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/android.webp');}}" alt="">
            </div>
            <a href="#" class="main-btn">View Service</a>
          </div>
          <div class="col-lg-6 order-lg-1 order-md-2 service-right">
            <!-- <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_p1qiuawe.json" background="transparent" speed="1" loop autoplay></lottie-player> -->
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/app-serv.webp');}}" alt="">
            </div>
          </div>

          <div class="service-view-project-btn">
            <div class="view-project">
              <a href="{{url('portfolio')}}">View Projects <i class="fi fi-sr-arrow-alt-right"></i></a>
            </div>
          </div>


          <!-- <div class="element">
        <img src="{{asset('web/assets/img/3d-element.webp');}}" class="threed_light" alt="">
        <img src="{{asset('web/assets/img/3d-element-dark.webp');}}" class="threed_dark d-none" alt="">
      </div> -->
        </div>
      </div>
    </div>


    <div class="service-pg-slide gslide-3">
      <div class="container">
        <div class="row service_box">
          <div class="col-lg-6 service-left">
            <h2 class="service-head head-color">Digital <br><span class="subhead-service">Marketing</span></h2>
            <p class="service-price">Starts from ₹9999</p>
            <p class="para">At Mentegoz, we have a specialized digital marketing crew to make sure that your business is on top. We also do ensure that it remains at the top. From SEO, SMO to content marketing, We do the job with diligence for best results for our clients.</p>
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
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/meta.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/googleads.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/google.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/instagram.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/facebook.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/linkedin.webp');}}" alt="">
            </div>
            <a href="#" class="main-btn">View Service</a>
          </div>
          <div class="col-lg-6 service-right">
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/digital-marketing-serv.webp');}}" alt="">
            </div>
            <!-- <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_imrozgtu.json" background="transparent" speed="1" loop autoplay></lottie-player> -->
          </div>

          <div class="service-view-project-btn">
            <div class="view-project">
              <a href="{{url('portfolio')}}">View Projects <i class="fi fi-sr-arrow-alt-right"></i></a>
            </div>
          </div>
          <!-- <div class="element">
        <img src="{{asset('web/assets/img/3d-element.webp');}}" class="threed_light" alt="">
        <img src="{{asset('web/assets/img/3d-element-dark.webp');}}" class="threed_dark d-none" alt="">
      </div> -->

        </div>
      </div>
    </div>


    <div class="service-pg-slide gslide-4">
      <div class="container">
        <div class="row service_box">
          <div class="col-lg-6 order-lg-2 order-md-1 service-left">
            <h2 class="service-head head-color">Branding &<br><span class="subhead-service">Designing</span></h2>
            <p class="service-price">Starts from ₹9999</p>
            <p class="para">Branding, by definition, is a marketing practice in which a company creates a name, symbol or design that is easily identifiable as belonging to the company. This helps to identify a product and distinguish it from other products and services.</p>
            <div class="row">
              <div class="col-lg-6 col-12">
                <p class="service-type">Develop with New Trends</p>
                <p class="service-type">More Communicative</p>
                <p class="service-type">More Creative</p>
              </div>
              <!-- <div class="col-lg-6 col-12">
              <p class="service-type">E-Commerce</p>
              <p class="service-type">E-Commerce</p>
              <p class="service-type">E-Commerce</p>
            </div> -->
            </div>
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/photoshop.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/ai.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/indesign.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/after.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/premiere-pro.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/corel.webp');}}" alt="">
            </div>
            <a href="#" class="main-btn">View Service</a>
          </div>
          <div class="col-lg-6 order-lg-1 order-md-2 service-right">
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/branding-serv.webp');}}" alt="">
            </div>
            <!-- <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_w5hernhv.json" background="transparent" speed="1" loop autoplay></lottie-player> -->
          </div>

          <div class="service-view-project-btn">
            <div class="view-project">
              <a href="{{url('portfolio')}}">View Projects <i class="fi fi-sr-arrow-alt-right"></i></a>
            </div>
          </div>
          <!-- <div class="element">
        <img src="{{asset('web/assets/img/3d-element.webp');}}" class="threed_light" alt="">
        <img src="{{asset('web/assets/img/3d-element-dark.webp');}}" class="threed_dark d-none" alt="">
      </div> -->
        </div>
      </div>
    </div>


    <div class="service-pg-slide gslide-5">
      <div class="container">
        <div class="row service_box">
          <div class="col-lg-6 service-left">
            <h2 class="service-head head-color">UI/UX<br><span class="subhead-service">Designing</span></h2>
            <p class="service-price">Starts from ₹9999</p>
            <p class="para">Starts From 500$</h6>
            <p class="para">We helps to create engaging digital experiences. Our team of designers and developers is dedicated to crafting intuitive interfaces that make it easy for users to navigate. Whether you need a website, app, or software, we have the expertise to create a design that meets your needs.</p>
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
            <div class="softs">
              <img src="{{asset('web/assets/img/icons/figma.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/xd.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/sketch.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/photoshop.webp');}}" alt="">
              <img src="{{asset('web/assets/img/icons/ai.webp');}}" alt="">
            </div>
            <a href="#" class="main-btn">View Service</a>
          </div>

          <div class="col-lg-6 service-right">
            <div class="img-div">
              <img src="{{asset('web/assets/img/service-section/ui-serv.webp');}}" alt="">
            </div>
            <!-- <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_uzvwjpkq.json" background="transparent" speed="1" loop autoplay></lottie-player> -->
          </div>

          <div class="service-view-project-btn">
            <div class="view-project">
              <a href="{{url('portfolio')}}">View Projects <i class="fi fi-sr-arrow-alt-right"></i></a>
            </div>
          </div>
          <!-- <div class="element">
        <img src="{{asset('web/assets/img/3d-element.webp');}}" class="threed_light" alt="">
        <img src="{{asset('web/assets/img/3d-element-dark.webp');}}" class="threed_dark d-none" alt="">
      </div> -->
        </div>
      </div>
    </div>

  </div>

  <!-- end service section items -->

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

  <!-- Font Aswesome -->
  <script src="https://kit.fontawesome.com/275b00d5ce.js" crossorigin="anonymous"></script>

  <!-- Lottie Files -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <!-- scroll smooth -->
  <script src="{{asset('web/assets/js/SmoothScrollMouseWheel.js'); }}"></script>

  <!-- Script 1 -->
  <script src="{{asset('web/assets/js/main1.js'); }}"></script>

  <!-- Script darkmode -->
  <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

  <!-- Offcanvas Script -->
  <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>

  <!-- Modal -->
  <script src="{{asset('web/assets/js/modal.js'); }}"></script>
  <!-- GSAP Scroll trigger -->
  <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
  <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
  <script src="{{asset('web/assets/js/service-page-scroll.js');}}"></script>


  <script>
    const sliderContainer = document.querySelector('.slider-container');
    const slideLeft = document.querySelector('.left-slide');
    const slideRight = document.querySelector('.right-slide');
    const downButton = document.querySelector('.down-button');
    const upButton = document.querySelector('.up-button');
    const slideLength = slideRight.querySelectorAll('div').length;


    let activeSlideIndex = 0;
    slideLeft.style.top = `-${(slideLength - 1)*550}px`

    upButton.addEventListener('click', () => changeSlide('up'))
    downButton.addEventListener('click', () => changeSlide('down'))

    function changeSlide(direction) {
      const sliderHeight = sliderContainer.clientHeight;
      if (direction === 'up') {
        activeSlideIndex++;
        if (activeSlideIndex > slideLength - 1) {
          activeSlideIndex = 0;
        }
      } else if (direction === 'down') {
        activeSlideIndex--;
        if (activeSlideIndex < 0) {
          activeSlideIndex = slideLength - 1;
        }
      }

      slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`
      slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`
    }
  </script>


  <script>
    document.querySelectorAll('.sr-nav').forEach((item) => item.classList.add('active'));
  </script>



</body>

</html>