<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Inner Page</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">

    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- style1 -->
    <link href="{{asset('web/assets/css/style1.css'); }}" rel="stylesheet" type="text/css">

    <!-- style2 -->
    <link href="{{asset('web/assets/css/style2.css'); }}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Modal Section -->

    @include('Layout.inc.modal')

    <!-- Modal Section End -->

    <div style="margin-top:40px;">
        <!-- header -->
        @include('Layout.inc.header')
        <!-- header -->
    </div>

    <!-- Preloader -->
    <div class="mentpreloader">
        <img src="{{asset('web/assets/img/loader/ment-loader.gif'); }}" alt="">
    </div>
    <!-- Preloader -->

    <!--  main banner section -->

    <div class="main-banner-section inner-blog-banner">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-7 col-12 d-flex flex-column justify-content-center">
                    <div class="">
                        <p class="main-head">Our Blog</p>
                        <div class="">
                            <h3 class="sub-head head-color">Our Latest Blogs</h3>
                            <p class="pg-para">Mentegoz technologies A well-established website development and digital
                                marketing-based IT company providing best-in-class technology solutions worldwide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12 d-flex align-items-end justify-content-center">
                    <div>
                        <lottie-player src="https://lottie.host/6279848f-d88b-4deb-b2a4-5518a3c549de/nTpsDFzb7W.json" background="transparent" speed=".5" loop autoplay></lottie-player>
                    </div>
                </div>
            </div> -->
            <div class="blog-banner-image">
                <img src="{{asset('web/assets/img/blog/blog1.webp'); }}" alt="">
            </div>
        </div>
    </div>




    <div id="blog-innersction">
        <div class="container">
            <div class="blog-inner-details">
                <div class="inner-blog-date">
                    <p class="m-0 inner-date">07-12-2022</p>
                </div>
                <h2 class="blog-head">DEMO BLOG</h2>
                <p class="blog-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore expedita inventore odit modi sit quia sed veritatis velit. Incidunt est velit aperiam exercitationem maxime iusto ab delectus veniam. Perspiciatis nam at velit accusamus voluptatum consectetur aut modi sed quae architecto. Rem aliquam temporibus doloribus eveniet earum quam. Ut est dolorum, dicta sapiente doloremque molestias saepe id fuga laudantium reprehenderit unde sed qui nisi natus similique velit omnis assumenda enim repellendus excepturi possimus, at tempora! Architecto, nostrum cumque laboriosam debitis error iure eligendi obcaecati itaque inventore! Nesciunt porro, numquam obcaecati qui explicabo distinctio. Accusamus alias id ea quo expedita? Est, saepe.</p>
            </div>
        </div>
    </div>


    <!-- scnd cta -->

    @include('Layout.inc.blog')

    <!-- scnd cta -->


    <!-- Portfolio Items End -->

    <!-- scnd cta -->

    @include('Layout.inc.scnd-cta')

    <!-- scnd cta -->

    <!-- Footer Section -->

    @include('Layout.inc.footer')

    <!-- End Footer Section -->








    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Lottie Files -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- scroll smooth -->
    <script src="{{asset('web/assets/js/SmoothScrollMouseWheel.js'); }}"></script>

    <!-- main js 1 -->
    <!-- <script src="{{asset('web/assets/js/main1.js'); }}"></script> -->

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <!-- main js 2 -->
    <script src="{{asset('web/assets/js/main2.js'); }}"></script>

    <!-- Darkmode Script -->
    <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

    <!-- Offcanvas Script -->
    <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>

    <!-- Modal -->
    <script src="{{asset('web/assets/js/modal.js'); }}"></script>

    <!-- <script>
        document.querySelectorAll('.po-nav').forEach((item) => item.classList.add('active'));
    </script> -->


    <script>
        // Related Blog Section JS

        $(document).ready(function() {
            $('.blogs-item-slider').owlCarousel({
                // loop:true,
                margin: 20,
                infinite: true,
                loop: true,
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

</body>

</html>