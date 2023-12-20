<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Designing</title>

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

</head>

<body>

    <!-- Modal Section -->

    @include('Layout.inc.modal')

    <!-- Modal Section End -->


    <!-- Preloader -->
    <div class="mentpreloader">
        <img src="{{asset('web/assets/img/loader/ment-loader.gif'); }}" alt="">
    </div>
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









    <div class="services__card">
        <div class="container">
            <span class="main-head">Services</span>
            <h3 class="sub-head head-color">Website Services We Provide</h3>
            <p class="web-para">We specialize in creating stunning and functional websites. Our services cover
                everything from design to optimization, ensuring your online presence leaves a lasting impression.
                Whether it's an e-commerce platform, blog, or portfolio site, we bring your vision to life.</p>
            <div class="services-web">
                <div class="box">
                    <img src="{{asset('web/assets/img/web-design/web-dev.webp'); }}" class="img-fluid" alt=""
                        style="animation-delay:0s;">
                    <h5 class="title head-color">Web Development</h5>
                    <p class="desc">Expertly crafted, user-friendly websites tailored to your unique needs.</p>
                </div>
                <div class="box">
                    <img src="{{asset('web/assets/img/web-design/wordpress.webp'); }}" class="img-fluid" alt=""
                        style="animation-delay:1s;">
                    <h5 class="title head-color">Wordpress Development</h5>
                    <p class="desc">Enhance your online presence with tailored, high-performance WordPress sites.</p>
                </div>
                <div class="box">
                    <img src="{{asset('web/assets/img/web-design/ecommerce.webp'); }}" class="img-fluid" alt=""
                        style="animation-delay:2s;">
                    <h5 class="title head-color">E-Commerce</h5>
                    <p class="desc">Transform your online business with our custom e-commerce website designed for
                        seamless transactions and high conversions.</p>
                </div>
                <div class="box">
                    <img src="{{asset('web/assets/img/web-design/ux.webp'); }}" class="img-fluid" alt=""
                        style="animation-delay:3s;">
                    <h5 class="title head-color">UI/UX Design</h5>
                    <p class="desc">Expert UI/UX design for seamless, engaging digital experiences</p>
                </div>
                <div class="box">
                    <img src="{{asset('web/assets/img/web-design/cms.webp'); }}" class="img-fluid" alt=""
                        style="animation-delay:4s;">
                    <h5 class="title head-color">CMS Website</h5>
                    <p class="desc">Simplify content management with our user-friendly CMS websites</p>
                </div>
                <div class="box">
                    <img src="{{asset('web/assets/img/web-design/static.webp'); }}" class="img-fluid" alt=""
                        style="animation-delay:5s;">
                    <h5 class="title head-color">Static & Dynamic</h5>
                    <p class="desc">We craft Dynamic and Static websites tailored to your needs</p>
                </div>
            </div>
        </div>
    </div>

    <!-- why website section -->
    <section id="whywebsite">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 left pe-4">
                    <img src="{{asset('web/assets/img/web-design/web-img.webp'); }}" alt="" width="90%">
                </div>
                <div class="col-lg-6 col-12 right">
                    <h2 class="sub-head head-color">Why You Need a Website?</h2>
                    <p class="m-0">Having a website is essential for establishing a strong online presence. It serves as
                        your virtual storefront, accessible 24/7 to a global audience. A website provides credibility,
                        showcasing your expertise, products, or services. It's a powerful marketing tool, allowing you
                        to reach and engage with a broader audience. Additionally, a website offers convenience for your
                        customers, enabling them to learn about your offerings, make purchases, or contact you with
                        ease. Ultimately, a website is a cornerstone of your online identity, crucial for success in the
                        modern business landscape.</p>
                    <button class="enquire_btn cont-modal-btn">Enquire Now</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End why website section -->

    <!-- Website Project setion -->

    <div class="webservice-projects">
        <div class="container">
            <!-- <span class="main-head">Portfolio</span> -->
            <h3 class="sub-head head-color text-center">Our Recent Projects</h3>
            <div class="gallery">
                <a href="">
                    <div class="items ">
                        <img class="" src="{{asset('web/assets/img/portfolio/ecoking/ecoking2.webp'); }}" alt="">
                        <div class="web-projectname">
                            <p class="head m-0">Eco King</p>
                            <p class="category m-0">Web Design</p>
                        </div>
                    </div>
                </a>
                <div class="items ">
                    <img class="" src="{{asset('web/assets/img/portfolio/brainzone.webp'); }}" alt="">
                    <div class="web-projectname">
                        <p class="head m-0">Brainzone Academy</p>
                        <p class="category m-0">Web Design</p>
                    </div>
                </div>
                <div class="items ">
                    <img class="" src="{{asset('web/assets/img/portfolio/abs/abs1.webp'); }}" alt="">
                    <div class="web-projectname">
                        <p class="head m-0">Arabian Business Solution</p>
                        <p class="category m-0">Web Design</p>
                    </div>
                </div>
                <div class="items ">
                    <img class="" src="{{asset('web/assets/img/portfolio/abs/abs.webp'); }}" alt="">
                    <div class="web-projectname">
                        <p class="head m-0">Brainzone Academy</p>
                        <p class="category m-0">Web Design</p>
                    </div>
                </div>
            </div>
            <div class="more-btn">
                <a href="{{url('portfolio')}}" class="website-more enquire_btn">View More</a>
            </div>
        </div>
    </div>

    <!-- End Website Project setion -->



    <!-- Why Choose Us Section --->

    @include('Layout.inc.whychoose')

    <!-- Why Choose Us Section end --->

    <!--- Draw SVG Section --->

    @include('Layout.inc.process-svg')

    <!--- Draw SVG Section end --->











    <div class="technologies__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 left">
                    <!-- <span class="main-head">Our Tools</span> -->
                    <h3 class="main-head head-color">We Expert's With</h3>
                    <div class="col-12 website-softs">
                        <img src="{{asset('web/assets/img/icons/html.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/css-3.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/Softs/javascript.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/php.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/bootstrap.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/python.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/react.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/mysql.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/laravel.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/wordpress.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/shopify.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/figma.webp'); }}" alt="">
                        <img src="{{asset('web/assets/img/icons/xd.webp'); }}" alt="">
                    </div>
                    <!-- <p class="tech-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, sit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure illo fugiat, distinctio quaerat doloribus necessitatibus, maxime deleniti nisi nemo molestias sunt magni, repudiandae fuga. Qui facere minus fugit mollitia. A.</p> -->
                </div>
                <div class="col-lg-4 col-md-12 right">
                    @include('Layout.inc.rightcta')
                </div>
            </div>
        </div>
    </div>

    <!-- World Wide Section --->

    @include('Layout.inc.worldwide')

    <!-- World Wide Section --->

    <!-- Testimonial Section --->

    <section id="web-testimonialsection">
        <div id="testimonialsection">
            <div class="container-fluid">
                <div class="testimonial">
                    <div class="row">
                        <div class="col-lg-12 col-12 right">
                            <div class="container">
                                <div class="main-head head-color">Testimonials</div>
                                <h1 class="sub-head head-color">Our Customers Love<br>What We Do</h1>
                            </div>
                            <div class="testimonial-item-section">

                                <div class="testimonial-items testi-hori">
                                    <div class="testimonial-cont item">
                                        <i class="fa-sharp fa-solid fa-quote-left"></i>
                                        <p class="testimonial-comment">
                                            We are so happy with mentegoz technologies for website development and
                                            digital marketing of our company. They keep uniqueness in their work and
                                            exceed my expectations on the SEO side. And we were well impressed with
                                            their digital marketing and branding of our company. Moreover, they show
                                            their best in SEO and ranking on the first pages of search results before
                                            our target time.</p>
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
                                            We consulted mentegoz for branding and digital marketing. highly satisfied
                                            and highly recommended team too for social media marketing. very good
                                            response and service</p>
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
                                            We appreciate your Business. It was a pleasure doing business with you and I
                                            hope we can be of service to you again in the future.Very energetic and
                                            positive team. They are very responsible and does the work in time frame.
                                        </p>
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
                                            I am very glad about your services to our organization moreover I am very
                                            proud that our alumni is doing a great job. It certainly offers the best
                                            service in Calicut today and shows great professionalism. Wish you All the
                                            best.</p>
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
                                            Thank you Team Mentegoz for my website. Throughout the life cycle of the
                                            project, these young and energetic professionals were supportive and
                                            accommodative to the changes and new requirements. The team was very
                                            responsive in developing features and fixing bugs with minimal turnaround
                                            time.</p>
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
                                            e-commerce website development is because of their quality of work and
                                            affordability in price. In the field of website development, they are more
                                            responsive and easy to convey my ideas. Of course,mentegoz is the best
                                            e-commerce Website and APP development company in Calicut. because the
                                            result is beyond my expectation.</p>
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
        </div>
    </section>


    <!-- Testimonial Section --->

    <!-- Blog Section -->

    @include('Layout.inc.blog')

    <!-- Blog Section -->


    @include('Layout.inc.scnd-cta')




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
