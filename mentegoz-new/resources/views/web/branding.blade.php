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

  <!-- owl carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- Swiper Carousel -->

  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/> -->


  <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">
  <link href="{{asset('web/assets/css/style3.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="main" class="branding__main branding__mains">
        @include('Layout.inc.header')  
        

        <div class="branding___hero">
          <div class="container">
            <div class="row">
              <div class="col-md-6 right__section order-md-0 order-1">
                <span class="span">SOLUTION FOR YOUR BUSINESS</span>
                <h1 class="heading__txt">How We Can Help your Brand</h1>
                <p class="heading__para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis optio deserunt odio repellat vel eos, magni cum amet quae, culpa sint rerum odit illum voluptates.</p>
                <button class="button">Learn More <i class="fa-solid fa-arrow-right"></i></button>
                <img src="{{asset('web/assets/img/branding/dot.webp'); }}" alt="" class="img-fluid dots">
              </div>
              <div class="left__section col-md-6 d-flex justify-content-center align-items-center mb-md-0 mb-5">
                <img src="{{asset('web/assets/img/branding.webp'); }}" alt="" class="hero_img img-fluid">
              </div>
            </div>
          </div>
        </div>
        

        <div class="branding___section">
          <div class="container">
            <h1 class="main__head">A One-Stop Solution To Make Your Branding Solutions Easier</h1>
            <p class="main__para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo earum impedit veritatis. Molestias quas laudantium quod praesentium ad </p>
            <a href="" class="button">Get Started</a>
            <img src="{{asset('web/assets/img/branding/main_img_3.webp'); }}" alt="" class="mt-3 img-fluid d-md-block d-none">
            <img src="{{asset('web/assets/img/office.webp'); }}" alt="" class="img-fluid d-md-none d-block mobile_img">
          </div>
        </div>



        


    <div class="technologies__section mt-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-6 mt-lg-0 mt-3">
            <div class="box">
              <img src="{{asset('web/assets/img/icons/figma.webp'); }}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6 mt-lg-0 mt-3">
            <div class="box">
              <img src="{{asset('web/assets/img/icons/xd.webp'); }}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6 mt-lg-0 mt-3">
            <div class="box">
              <img src="{{asset('web/assets/img/icons/ai.webp'); }}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6 mt-lg-0 mt-3">
            <div class="box">
              <img src="{{asset('web/assets/img/icons/photoshop.webp'); }}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6 mt-lg-0 mt-3">
            <div class="box">
              <img src="{{asset('web/assets/img/icons/after.webp'); }}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-6 mt-lg-0 mt-3">
            <div class="box">
              <img src="{{asset('web/assets/img/icons/indesign.webp'); }}" class="img-fluid" alt="">
            </div>
          </div>
          
        </div>
      </div>
    </div>






        <div class="latest__branding__works">
          <div class="container">
            <h3 class="heading">Our Latest Portfolio</h3>
            <p class="head_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nobis tenetur voluptatem aut? Dolores ea voluptatem eius repudiandae, error dolore totam ut enim quaerat maiores.</p>
            <div class="row">
              <div class="col-12 mb-md-3">
                <div class="boxes second__box">
                  <img src="{{asset('web/assets/img/branding/project1.webp'); }}" alt="" class="img">
                  <div class="txt_box">
                    <h5>Heading text</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus veritatis, aut beatae molestias reprehenderit sit accusamus incidunt! Totam accusamus harum nesciunt maiores magnam dolorum? Reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, tempora mollitia porro.</p>
                    <span class="date">11-01-2023</span>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="boxes first__box">
                  <img src="{{asset('web/assets/img/branding/project2.webp'); }}" alt="" class="img">
                  <div class="txt_box">
                    <h5>Heading text</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus veritatis, aut beatae molestias </p>
                    <span class="date">11-01-2023</span>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-6">
                    <div class="boxes box">
                      <img src="{{asset('web/assets/img/branding/project3.webp'); }}" alt="" class="img">
                      <div class="txt_box">
                        <h5>Heading text</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <span class="date">11-01-2023</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">                    
                    <div class="boxes box">
                      <img src="{{asset('web/assets/img/branding/project4.webp'); }}" alt="" class="img">
                      <div class="txt_box">
                        <h5>Heading text</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <span class="date">11-01-2023</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mt-md-3">
                    <div class="boxes box">
                      <img src="{{asset('web/assets/img/branding/project5.webp'); }}" alt="" class="img">
                      <div class="txt_box">
                        <h5>Heading text</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <span class="date">11-01-2023</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mt-md-3">
                    <div class="boxes box">
                      <img src="{{asset('web/assets/img/branding/project6.webp'); }}" alt="" class="img">
                      <div class="txt_box">
                        <h5>Heading text</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <span class="date">11-01-2023</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="blog__card__section" style="margin-top: 100px">
          <div class="container">
            <span class="span">our blog</span>
            <h5 class="heading">Latest Blogs</h5>
            <div class="row">
              <div class="mb-md-0 mb-3 col-md-4">
                <div class="box">
                  <img src="{{asset('web/assets/img/branding/like.webp'); }}" class="img-fluid" alt="">
                  <div class="d-flex flex__box">
                    <p><i class="fa-regular fa-user"></i> Mentegoz</p>
                    <p><i class="fa-regular fa-bookmark"></i> UX design</p>
                  </div>
                  <h6>5 signs your design strategy needs rethinking</h6>
                  <a href="">Read More  <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
              <div class="mb-md-0 mb-3 col-md-4">
                <div class="box">
                  <img src="{{asset('web/assets/img/branding/banana.webp'); }}" class="img-fluid" alt="">
                  <div class="d-flex flex__box">
                    <p><i class="fa-regular fa-user"></i> Mentegoz</p>
                    <p><i class="fa-regular fa-bookmark"></i> UX design</p>
                  </div>
                  <h6>15 Clever color combinations that make your presentation</h6>
                  <a href="">Read More  <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
              <div class="mb-md-0 mb-3 col-md-4">
                <div class="box">
                  <img src="{{asset('web/assets/img/branding/robo.webp'); }}" class="img-fluid" alt="">
                  <div class="d-flex flex__box">
                    <p><i class="fa-regular fa-user"></i> Mentegoz</p>
                    <p><i class="fa-regular fa-bookmark"></i> UX design</p>
                  </div>
                  <h6>What to do when you're facing designer burnout</h6>
                  <a href="">Read More  <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>




    </div>









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
  <script src="{{asset('web/assets/js/website.js"></script>

</body>

</html>