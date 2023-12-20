<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>

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

    <div class="main-banner-section inner-clients-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 d-flex flex-column justify-content-center">
                    <div class="">
                        <p class="main-head">Clients</p>
                        <div class="">
                            <h3 class="sub-head head-color">Our Precious Clients<br>Over The World</h3>
                            <p class="pg-para">Our client satisfaction is our priority. We're all about making our clients happy. We create customized IT solutions that build trust and long-term partnerships
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-flex align-items-end justify-content-center">
                    <div class="gif">
                        <!-- <lottie-player src="https://lottie.host/df26d428-6d07-4b4f-9eb4-62194277f880/zNofgAaM3V.json" background="transparent" speed="1" loop autoplay></lottie-player> -->
                        <img src="{{asset('web/assets/img/loader/ment-loader.gif')}}" alt="" class="light-client-gif">
                        <img src="{{asset('web/assets/img/loader/ment-loader-dark.gif')}}" alt="" class="dark-client-gif d-none">
                    </div>
                </div>
            </div>
            <!-- <div class="blog-banner-image">
                <img src="{{asset('web/assets/img/blog/blog1.webp'); }}" alt="">
            </div> -->
        </div>
    </div>

    <!--  End main banner section -->

    <!-- Clients List -->

    <div id="clients-list">
        <div class="container">
            <div class="clients">



                <div class="client-items-page">
                    <div class="client-img-div">
                        <img src="{{asset('web/assets/img/clients/absoman.webp')}}" alt="" class="light-logo">
                        <img src="{{asset('web/assets/img/clients/absoman-dark.webp')}}" alt="" class="dark-logo d-none">
                    </div>
                    <div class="details">
                        <p class="client-head">Arabian Business Solution</p>
                        <!-- <div class="desc">
                            <p class="desc-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, mollitia!</p>
                        </div> -->
                        <div class="location">
                            <i class="fa-solid fa-location-dot client-loc"></i>
                            <p>Muscut, Oman</p>
                        </div>
                        <div class="arrow-btn">
                            <div class="more-btn" id="more-det">
                                <div class="btn-rotate">
                                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                                </div>
                            </div>
                            <!-- <div class="less-btn" id="more-det">
                                <i class="fa-solid fa-chevron-up arrow-icon"></i>
                            </div> -->
                        </div>
                        <div class="list-service-main">
                            <div class="list-service">
                                <p class="bottom-border">Provided Services</p>
                                <ul>
                                    <li>Branding</li>
                                    <li>Website</li>
                                    <li>Social Media</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-items-page">
                    <div class="client-img-div">
                        <img src="{{asset('web/assets/img/clients/absoman.webp')}}" alt="" class="light-logo">
                        <img src="{{asset('web/assets/img/clients/absoman-dark.webp')}}" alt="" class="dark-logo d-none">
                    </div>
                    <div class="details">
                        <p class="client-head">Arabian Business Solution</p>
                        <!-- <div class="desc">
                            <p class="desc-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, mollitia!</p>
                        </div> -->
                        <div class="location">
                            <i class="fa-solid fa-location-dot client-loc"></i>
                            <p>Muscut, Oman</p>
                        </div>
                        <div class="arrow-btn">
                            <div class="more-btn" id="more-det">
                                <div class="btn-rotate">
                                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                                </div>
                            </div>
                            <!-- <div class="less-btn" id="more-det">
                                <i class="fa-solid fa-chevron-up arrow-icon"></i>
                            </div> -->
                        </div>
                        <div class="list-service-main">
                            <div class="list-service">
                                <p class="bottom-border">Provided Services</p>
                                <ul>
                                    <li>Branding</li>
                                    <li>Website</li>
                                    <li>Social Media</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-items-page">
                    <div class="client-img-div">
                        <img src="{{asset('web/assets/img/clients/absoman.webp')}}" alt="" class="light-logo">
                        <img src="{{asset('web/assets/img/clients/absoman-dark.webp')}}" alt="" class="dark-logo d-none">
                    </div>
                    <div class="details">
                        <p class="client-head">Arabian Business Solution</p>
                        <!-- <div class="desc">
                            <p class="desc-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, mollitia!</p>
                        </div> -->
                        <div class="location">
                            <i class="fa-solid fa-location-dot client-loc"></i>
                            <p>Muscut, Oman</p>
                        </div>
                        <div class="arrow-btn">
                            <div class="more-btn" id="more-det">
                                <div class="btn-rotate">
                                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                                </div>
                            </div>
                            <!-- <div class="less-btn" id="more-det">
                                <i class="fa-solid fa-chevron-up arrow-icon"></i>
                            </div> -->
                        </div>
                        <div class="list-service-main">
                            <div class="list-service">
                                <p class="bottom-border">Provided Services</p>
                                <ul>
                                    <li>Branding</li>
                                    <li>Website</li>
                                    <li>Social Media</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-items-page">
                    <div class="client-img-div">
                        <img src="{{asset('web/assets/img/clients/absoman.webp')}}" alt="" class="light-logo">
                        <img src="{{asset('web/assets/img/clients/absoman-dark.webp')}}" alt="" class="dark-logo d-none">
                    </div>
                    <div class="details">
                        <p class="client-head">Arabian Business Solution</p>
                        <!-- <div class="desc">
                            <p class="desc-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, mollitia!</p>
                        </div> -->
                        <div class="location">
                            <i class="fa-solid fa-location-dot client-loc"></i>
                            <p>Muscut, Oman</p>
                        </div>
                        <div class="arrow-btn">
                            <div class="more-btn" id="more-det">
                                <div class="btn-rotate">
                                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                                </div>
                            </div>
                            <!-- <div class="less-btn" id="more-det">
                                <i class="fa-solid fa-chevron-up arrow-icon"></i>
                            </div> -->
                        </div>
                        <div class="list-service-main">
                            <div class="list-service">
                                <p class="bottom-border">Provided Services</p>
                                <ul>
                                    <li>Branding</li>
                                    <li>Website</li>
                                    <li>Social Media</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-items-page">
                    <div class="client-img-div">
                        <img src="{{asset('web/assets/img/clients/absoman.webp')}}" alt="" class="light-logo">
                        <img src="{{asset('web/assets/img/clients/absoman-dark.webp')}}" alt="" class="dark-logo d-none">
                    </div>
                    <div class="details">
                        <p class="client-head">Arabian Business Solution</p>
                        <!-- <div class="desc">
                            <p class="desc-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, mollitia!</p>
                        </div> -->
                        <div class="location">
                            <i class="fa-solid fa-location-dot client-loc"></i>
                            <p>Muscut, Oman</p>
                        </div>
                        <div class="arrow-btn">
                            <div class="more-btn" id="more-det">
                                <div class="btn-rotate">
                                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                                </div>
                            </div>
                            <!-- <div class="less-btn" id="more-det">
                                <i class="fa-solid fa-chevron-up arrow-icon"></i>
                            </div> -->
                        </div>
                        <div class="list-service-main">
                            <div class="list-service">
                                <p class="bottom-border">Provided Services</p>
                                <ul>
                                    <li>Branding</li>
                                    <li>Website</li>
                                    <li>Social Media</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-items-page">
                    <div class="client-img-div">
                        <img src="{{asset('web/assets/img/clients/absoman.webp')}}" alt="" class="light-logo">
                        <img src="{{asset('web/assets/img/clients/absoman-dark.webp')}}" alt="" class="dark-logo d-none">
                    </div>
                    <div class="details">
                        <p class="client-head">Arabian Business Solution</p>
                        <!-- <div class="desc">
                            <p class="desc-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, mollitia!</p>
                        </div> -->
                        <div class="location">
                            <i class="fa-solid fa-location-dot client-loc"></i>
                            <p>Muscut, Oman</p>
                        </div>
                        <div class="arrow-btn">
                            <div class="more-btn" id="more-det">
                                <div class="btn-rotate">
                                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                                </div>
                            </div>
                            <!-- <div class="less-btn" id="more-det">
                                <i class="fa-solid fa-chevron-up arrow-icon"></i>
                            </div> -->
                        </div>
                        <div class="list-service-main">
                            <div class="list-service">
                                <p class="bottom-border">Provided Services</p>
                                <ul>
                                    <li>Branding</li>
                                    <li>Website</li>
                                    <li>Social Media</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-items-page">
                    <div class="client-img-div">
                        <img src="{{asset('web/assets/img/clients/absoman.webp')}}" alt="" class="light-logo">
                        <img src="{{asset('web/assets/img/clients/absoman-dark.webp')}}" alt="" class="dark-logo d-none">
                    </div>
                    <div class="details">
                        <p class="client-head">Arabian Business Solution</p>
                        <!-- <div class="desc">
                            <p class="desc-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, mollitia!</p>
                        </div> -->
                        <div class="location">
                            <i class="fa-solid fa-location-dot client-loc"></i>
                            <p>Muscut, Oman</p>
                        </div>
                        <div class="arrow-btn">
                            <div class="more-btn" id="more-det">
                                <div class="btn-rotate">
                                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                                </div>
                            </div>
                            <!-- <div class="less-btn" id="more-det">
                                <i class="fa-solid fa-chevron-up arrow-icon"></i>
                            </div> -->
                        </div>
                        <div class="list-service-main">
                            <div class="list-service">
                                <p class="bottom-border">Provided Services</p>
                                <ul>
                                    <li>Branding</li>
                                    <li>Website</li>
                                    <li>Social Media</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- Clients List End -->








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
        // const readMoreButtons = document.querySelectorAll('.more-btn');
        // const showLessButtons = document.querySelectorAll('.less-btn');
        // const hiddenTexts = document.querySelectorAll('.list-service');

        // readMoreButtons.forEach((readMoreButton, index) => {
        //     const showLessButton = showLessButtons[index];
        //     const hiddenText = hiddenTexts[index];

        //     readMoreButton.addEventListener('click', () => {
        //         // hiddenText.style.display = 'inline'; // or 'block' depending on your desired styling
        //         hiddenText.classList.add('show-service');
        //         readMoreButton.style.display = 'none';
        //         showLessButton.style.display = 'inline';
        //     });

        //     showLessButton.addEventListener('click', () => {
        //         // hiddenText.style.display = 'none';
        //         hiddenText.classList.remove('show-service');
        //         readMoreButton.style.display = 'inline';
        //         showLessButton.style.display = 'none';
        //     });
        // });





        // const toggleButtons = document.querySelectorAll('.more-btn');
        // const hiddenTexts = document.querySelectorAll('.list-service');
        // const rotateIcons = document.querySelectorAll('.btn-rotate');

        // toggleButtons.forEach((toggleButton, index) => {
        //     const hiddenText = hiddenTexts[index];
        //     const rotateIcon = rotateIcons[index];

        //     toggleButton.addEventListener('click', () => {
        //         if (hiddenText.classList.contains('show-service')) {
        //             hiddenText.classList.remove('show-service');
        //             rotateIcon.classList.remove('arrowrotate');
        //             // toggleButton.innerText = 'Read More';
        //         } else {
        //             hiddenText.classList.add('show-service');
        //             rotateIcon.classList.add('arrowrotate');
        //             // toggleButton.innerText = 'Show Less';
        //         }
        //     });
        // });






        const toggleButtons = document.querySelectorAll('.more-btn');
        const hiddenTexts = document.querySelectorAll('.list-service');
        const rotateIcons = document.querySelectorAll('.btn-rotate');

        let currentlyExpandedIndex = null;

        toggleButtons.forEach((toggleButton, index) => {
            const hiddenText = hiddenTexts[index];
            const rotateIcon = rotateIcons[index];

            toggleButton.addEventListener('click', () => {
                if (currentlyExpandedIndex !== null && currentlyExpandedIndex !== index) {
                    // Collapse the currently expanded item
                    hiddenTexts[currentlyExpandedIndex].classList.remove('show-service');
                    rotateIcons[currentlyExpandedIndex].classList.remove('arrowrotate');
                }

                if (hiddenText.classList.contains('show-service')) {
                    // Collapse the clicked item
                    hiddenText.classList.remove('show-service');
                    rotateIcon.classList.remove('arrowrotate');
                    currentlyExpandedIndex = null;
                } else {
                    // Expand the clicked item
                    hiddenText.classList.add('show-service');
                    rotateIcon.classList.add('arrowrotate');
                    currentlyExpandedIndex = index;
                }
            });
        });
    </script>

</body>

</html>