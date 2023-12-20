<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Marketing</title>

  <!-- Favicon -->
  <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">
  
  <!-- Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- owl carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- Swiper Carousel -->

  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/> -->


  <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">
  <link href="{{asset('web/assets/css/style2.css'); }}" rel="stylesheet" type="text/css">
  <link href="{{asset('web/assets/css/style3.css'); }}" rel="stylesheet" type="text/css">

</head>

<body>

  <div id="main" class="digital__main">
    @include('Layout.inc.header')


    <div class="bann__er">
      <div class="container">
        <img src="{{asset('web/assets/img/digital-marketing/arrow.webp'); }}" alt="" class="arrow">
        <img src="{{asset('web/assets/img/digital-marketing/star.webp'); }}" alt="" class="star">
        <h1 class="heading">Digital Marketing Agency</h1>
        <p class="description">Improve your business in digital</p>
        <button class="button">Get Started</button>
        <div class="row mt-5">
          <div class="col-md-4 mb-md-0 mb-3">
            <img src="{{asset('web/assets/img/digital-marketing/first-img.webp'); }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-4 mt-md-5 pt-md-5 mb-md-0 mb-3">
            <img src="{{asset('web/assets/img/digital-marketing/second-img.webp'); }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-4 mb-md-0 mb-3">
            <img src="{{asset('web/assets/img/digital-marketing/third-img.webp'); }}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="txt_section txt_sections">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="position:relative;">
          <h3 class="heading">Our services solve any business problem</h3>
          <img src="{{asset('web/assets/img/digital-marketing/star.webp'); }}" alt="" class="star">
        </div>
        <div class="col-md-6">
          <p class="description">
            Ou team has a successful track record of helping brands scale profitably based on high-performing strategies.
          </p>
        </div>
      </div>
      <div class="box_section">
        <div class="row">
          <div class="col-md-4 mb-md-0 mb-3">
            <div class="box">
              <img src="{{asset('web/assets/img/digital-marketing/media.webp'); }}" alt="" class="img-fluid">
              <h5>Paid Media</h5>
              <p class="desc">Increasing conversions, repeat traffic, and online authority across your website is our top priority.</p>
            </div>
          </div>
          <div class="col-md-4 mt-md-5 mb-md-0 mb-3">
            <div class="box">
              <img src="{{asset('web/assets/img/digital-marketing/website.webp'); }}" alt="" class="img-fluid">
              <h5>website Optimization</h5>
              <p class="desc">In order for your funnel to be successful, you need to make it as smooth as possible.</p>
            </div>
          </div>
          <div class="col-md-4 mt-md-5 pt-md-5 mb-md-0 mb-3">
            <div class="box">
              <img src="{{asset('web/assets/img/digital-marketing/email.webp'); }}" alt="" class="img-fluid">
              <h5>Email & SMS Marketing</h5>
              <p class="desc">Leads are nurtured through our email, SMS, and automation services, resulting in customer acquisition and retention.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="content__section content__sections">
    <div class="container">
      <div class="row">
        <div class="col-md-6 img_column">
          <img src="{{asset('web/assets/img/digital-marketing/about.webp'); }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h3>Why you need digital marketing</h3>
          <p>In order to scale new customer acquisition and retention for e-commerce brands, we work across the entire customer journey. Our team has a successful track record of helping brands scale profitably based on high-performing strategies</p>
          <a href="">Learn more</a>
        </div>
      </div>
    </div>
  </div>




  <div class="details__section">
    <div class="container">
      <h3 class="heading">Make your marketing more effective</h3>
      <p class="head__para">E-commerce brands can acquire and retain new customers using solutions that span the entire customer journey.</p>
      <div class="row">
        <div class="col-md-4 mb-5 mb-md-0 mb-3">
          <div class="box">
            <h4>Marketing Automation</h4>
            <p>Our team has a successful track record of helping brands</p>
            <a href="">Learn More</a>
            <img src="{{asset('web/assets/img/digital-marketing/second-banner.webp'); }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-8 mb-5 mb-md-0 mb-3">
          <div class="box">
            <h4>Content Marketing</h4>
            <p>Our team has a successful track record of helping brands scale profitably based on high-performing strategies. E-commerce brands can acquire and retain new customers using solutions that span the entire customer journey</p>
            <a href="">Learn more</a>
            <img style="margin-top: 71px;" src="{{asset('web/assets/img/digital-marketing/first-banner.webp'); }}" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-md-12 mb-5 mb-md-0 mb-3 mt-md-4 mt-0">
          <div class="last_box box row no-gutter">
            <div class="d-flex justify-content-center flex-column col-md-5">
              <h4>Social Media Marketing</h4>
              <p>Leads are nurtured through our email, SMS, and automation services, resulting in customer acquisition and retention.</p>
              <a href="" style="width: fit-content;">Learn more</a>
            </div>
            <div class="col-md-7 d-flex justify-content-center align-items-end mt-md-0 mt-5">
              <img src="{{asset('web/assets/img/digital-marketing/thrid-banner.webp'); }}" class="img-fluid mt-0" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!-- 
    <div class="counter_sm_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="https://selo.b-cdn.net/wp-content/uploads/2022/09/krnv.webp'); }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h3>Growth drives everythin we do</h3>
            <p>In order to scale new customer acquisition and retention for e-commerce brands, we work across the entire customer journey.</p>
            <div class="d-flex counter_box">
              <div class="box">
                <h4><span class="counter">5</span>K+</h4>
                <p>Advertising Partners</p>
              </div>
              <div class="box">
                <h4><span class="counter">90</span>%</h4>
                <p>Increase in ROAS</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 -->













  <!-- Footer Section --->

  @include('Layout.inc.footer')

  <!-- End Footer Section --->




  <script src="https://code.jquery.com/jquery-3.6.2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/275b00d5ce.js" crossorigin="anonymous"></script>

  <!-- Counter -->
  <script src="{{asset('web/assets/js/jquery.waypoints.min.js"></script>
  <script src="{{asset('web/assets/js/jquery.countup.js"></script>

  <!-- owl carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

  <!-- Scroll trigger -->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js?r=5426"></script>
  <script src="https://assets.codepen.io/16327/ScrollTrigger.min.js"></script>
  <script src="https://codepen.io/GreenSock/pen/7ba936b34824fefdccfe2c6d9f0b740b.js"></script>

  <!-- Testimonials Swiper -->

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


  <!-- gsap cdn -->
  <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
  <!-- Main Script -->
  <script src="{{asset('web/assets/js/product.js"></script>

</body>

</html>