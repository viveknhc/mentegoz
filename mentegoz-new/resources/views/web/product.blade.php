<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>

  <!-- Favicon -->
  <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">

  <!-- Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- owl carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- Style 1 -->
  <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">

  <!-- style 3 -->
  <link href="{{asset('web/assets/css/style3.css');}}" rel="stylesheet" type="text/css">

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


  <!-- Main Section Product -->

  <div id="main-product">



    <div class="product__section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-7 left">
            <span class="main-head">Our Products</span>
            <h3 class="sub-head head-color">We Produce Quality Products</h3>
            <p class="head-para">Our dynamic range of products reflects our commitment to adaptability in a rapidly changing market. Each innovation is a testament to our relentless pursuit of progress. Here's a glimpse into the latest additions to our portfolio</p>
          </div>
          <div class="col-lg-6 col-md-5 right">
            <lottie-player src="https://lottie.host/4a23e6fe-0fd1-4de0-9a17-97fbfd91ee7d/Vz3jXdreqo.json" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Main Section Product -->

  <!-- Quality section -->

  <div class="qualitysection">
    <div class="container">
      <div class="row box__section">
        <div class="col-lg-3 col-md-6 col-12">
          <div class="box">
            <img src="{{asset('web/assets/img/3d-icons/quality.webp'); }}" alt="">
            <h5 class="name">Quality & Craftsmanship</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="box">
            <img src="{{asset('web/assets/img/3d-icons/design.webp'); }}" alt="">
            <h5 class="name">Well Designed & Responsible</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="box">
            <img src="{{asset('web/assets/img/3d-icons/guarantee.webp'); }}" alt="">
            <h5 class="name">Lifetime<br>Guarantee</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="box">
            <img src="{{asset('web/assets/img/3d-icons/support.webp'); }}" alt="">
            <h5 class="name">24/7 Customer Support</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Quality section -->



  <!-- Product section -->

  <div class="product__box">
    <div class="container">
      <h3 class="sub-head head-color text-center m-4">Our Products</h3>

      <div class="row">
        <div class="col-lg-6 col-12 d-flex">
          <div class="product-page-item">
            <div class="product-logo-client">
              <img src="{{asset('web/assets/img/product/proffin-logo.webp'); }}" alt="" class="product-logo">
              <img src="{{asset('web/assets/img/product/proffin-logo-dark.webp'); }}" alt="" class="product-logo-dark d-none">
            </div>
            <div class="product-cont">
              <p class="m-0">PROFFIN is simple and easy online accounting software for all type of business. PROFFIN software is very useful for trading & service companies. PROFFIN can operate by a person with basic computer knowledge. Unlike other accounting software in market PROFFIN covering a vast array of functions and services.</p>
            </div>
            <a href="#" class="main-btn cont-modal-btn">Request a Demo</a>
            <div class="ment-product-logo">
              <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" width="100%" class="mentproductlogo">
              <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" width="100%" class="mentproductlogo-dark d-none">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12 d-flex">
          <div class="product-page-item">
            <div class="product-logo-client">
              <img src="{{asset('web/assets/img/product/mosbill_logo.webp'); }}" alt="">
            </div>
            <div class="product-cont">
              <p class="m-0">Mosbill billing application with inventory, GST, invoice printing etc.. Mosbill is the one of the best billing app in kerala.This apps is managed by a bunch of young enthusiastic enterpruners.</p>
            </div>
            <a href="#" class="main-btn cont-modal-btn">Request a Demo</a>
            <div class="ment-product-logo">
              <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" width="100%" class="mentproductlogo">
              <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" width="100%" class="mentproductlogo-dark d-none">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-12 d-flex">
          <div class="product-page-item">
            <div class="product-logo-client">
              <img src="{{asset('web/assets/img/product/easyrent_logo.webp'); }}" alt="" class="product-logo">
              <img src="{{asset('web/assets/img/product/easyrent_logo-dark.webp'); }}" alt="" class="product-logo-dark d-none">
            </div>
            <div class="product-cont">
              <p class="m-0">Ezy Rent is the all-in-one rental software for any business and every rental industry. It's a single system that enables rental companies to manage orders and inventory, create documents, and accept payments.</p>
            </div>
            <a href="#" class="main-btn cont-modal-btn">Request a Demo</a>
            <div class="ment-product-logo">
              <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" width="100%" class="mentproductlogo">
              <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" width="100%" class="mentproductlogo-dark d-none">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12 d-flex">
          <div class="product-page-item">
            <div class="product-logo-client">
              <img src="{{asset('web/assets/img/product/ems_logo.webp'); }}" alt="" width="100%">
            </div>
            <div class="product-cont">
              <p class="m-0">Our all-in-one Educational Management System software, automate institute daily academic & administrative operations hassle-free. It offers features like...</p>
            </div>
            <a href="#" class="main-btn cont-modal-btn">Request a Demo</a>
            <div class="ment-product-logo">
              <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" width="100%" class="mentproductlogo">
              <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" width="100%" class="mentproductlogo-dark d-none">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-12 d-flex">
          <div class="product-page-item">
            <div class="product-logo-client">
              <img src="{{asset('web/assets/img/product/hrmls_logo.webp'); }}" alt="">
            </div>
            <div class="product-cont">
              <p class="m-0">HRMS & Payroll Software Used by many companies across world. Biometric Attendance. Leave & Expense Claims. Employee Self-Service App. Compliance Management. Services: Online Payroll Software, Payroll Outsourcing.</p>
            </div>
            <a href="#" class="main-btn cont-modal-btn">Request a Demo</a>
            <div class="ment-product-logo">
              <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" width="100%" class="mentproductlogo">
              <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" width="100%" class="mentproductlogo-dark d-none">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12 d-flex">
          <div class="product-page-item">
            <div class="product-logo-client">
              <img src="{{asset('web/assets/img/product/medi-clinik-logo.webp'); }}" alt="">
            </div>
            <div class="product-cont">
              <p class="m-0">Medi clinic Software is designed to make and control your Appointments easily and securely anywhere, anytime. Every feature you want and need, including an APP for patients and providers, SMS, Email... Mediclinic is a true cloud solution dedicated to the health industry.</p>
            </div>
            <a href="#" class="main-btn cont-modal-btn">Request a Demo</a>
            <div class="ment-product-logo">
              <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" width="100%" class="mentproductlogo">
              <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" width="100%" class="mentproductlogo-dark d-none">
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="element">
      <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="" width="100%">
      <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="" width="100%">
    </div>
    <div class="element2">
      <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="" width="100%">
      <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="" width="100%">
    </div>
  </div>
  <!-- End Product section -->

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

  <!-- Darkmode Script -->
  <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

  <!-- Offcanvas Script -->
  <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>

  <!-- Modal -->
  <script src="{{asset('web/assets/js/modal.js'); }}"></script>

  <script>
    document.querySelectorAll('.pr-nav').forEach((item) => item.classList.add('active'));
  </script>

</body>

</html>