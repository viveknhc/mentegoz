<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('web/assets/img/ment-favicon.webp'); }}" type="image/x-icon">
    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <div class="main-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12 d-flex flex-column justify-content-center">
                    <div class="">
                        <p class="main-head">Our Works</p>
                        <div class="">
                            <!-- <p class="bg-lite-pg-head reveal-text"></p> -->
                            <h3 class="sub-head head-color">Our Latest Projects</h3>
                            <p class="pg-para">Mentegoz technologies A well-established website development and digital
                                marketing-based IT company providing best-in-class technology solutions worldwide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12 d-flex align-items-end justify-content-center">
                    <div>
                        <lottie-player src="https://lottie.host/2b0fe15e-7bc3-4d53-9797-70818cfccb50/unUBDPVCUy.json" background="transparent" speed="2.5" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio  Items-->

    <div class="portfolio-section">

        <div class="portfolio-search">
            <div class="portfolio-input-bg">
                <input type="text" placeholder="Search works">
                <a href="">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                </a>
            </div>
        </div>

        <div class="portfolio-nav-tab">
            <ul class="portfolio-nav-tab-ul">

                <li>
                    <a data-filter="all" class="active portfolio-btn">All</a>
                </li>
                @foreach ($category as $cat)
                <li class="innner-tab">
                    @if ($cat->parent_id == 0)
                    <a data-filter="{{ ($cat->slug == 'web') ? 'port-web' : 'other' }}" class="portfolio-btn">{{ $cat->category }}</a>
                    <div id="portfolio-innner-tab">
                        <ul>
                            @foreach ($category as $cat1)
                            @if ($cat1->parent_id === $cat->id)
                            <li>
                                <a data-filter="{{$cat->slug}}" class="inner_btn">{{ $cat1->category }}</a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </li>
                @endforeach

            </ul>


        </div>

        <div class="portfolio-boxes">
            @foreach($project as $new)
            <div class="portfolo-box port-web">
                <a href="{{ url('portfolio_details/'.$new->slug) }}">
                    <img class="img-fluid portfolo-img" src="{{asset('/upload/project/'.$new->project_image)}}" alt="">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">{{$new->title}}</p>
                            <p class="portfolio-project-category cont-details">{{$new->scope}}</p>
                        </div>
                        <!-- <div class="client  ">
                            <img src="{{asset('web/assets/img/Clients/arif.webp'); }}" alt="">
                        </div> -->
                    </div>
                </a>
            </div>
            @endforeach
            <!-- <div class="portfolo-box port-web web-wp">
                <img class="img-fluid portfolo-img" src="{{asset('web/assets/img/portfolio/ecoking3.webp'); }}" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Eco King</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="{{asset('web/assets/img/Clients/artic.webp'); }}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-ui-ux">
                <img class="img-fluid portfolo-img" src="{{asset('web/assets/img/portfolio/brainzone.webp'); }}" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Brainzone Academy</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="{{asset('web/assets/img/Clients/baba.webp'); }}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-web web-cms">
                <img class="img-fluid portfolo-img" src="{{asset('web/assets/img/portfolio/nazia/nazia.webp'); }}" alt="">
                <a href="branding-inner.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Nazia Hospital</p>
                            <p class="portfolio-project-category cont-details">Re Branding</p>
                        </div>
                        <div class="client">
                            <img src="{{asset('web/assets/img/Clients/bosq.webp'); }}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-branding">
                <img class="img-fluid portfolo-img" src="{{asset('web/assets/img/portfolio/nazia/nazia6.webp'); }}" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Azzona Developers</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="{{asset('web/assets/img/Clients/baking300.webp'); }}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-web web-ecommerce">
                <img class="img-fluid portfolo-img" src="{{asset('web/assets/img/portfolio/abs1.webp'); }}" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Azzona Developers</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="{{asset('web/assets/img/Clients/skill-hat.webp'); }}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-web web-ecommerce">
                <img class="img-fluid portfolo-img" src="{{asset('web/assets/img/portfolio/ecoking2.webp'); }}" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Azzona Developers</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="{{asset('web/assets/img/Clients/we-corp.webp'); }}" alt="">
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
    </div>

    <!-- Portfolio Items End -->

    <!-- scnd cta -->

    @include('Layout.inc.scnd-cta')

    <!-- scnd cta -->

    <!-- Footer Section -->

    @include('Layout.inc.footer')

    <!-- End Footer Section -->



    <script>
        const btns = document.querySelectorAll(".portfolio-btn");
        const storeData = document.querySelectorAll(".portfolo-box");
        const innerTab = document.getElementById("portfolio-innner-tab");
        const innerBtns = document.querySelectorAll('.inner_btn')
        const webTab = document.querySelectorAll('.port-web')

        btns.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                e.preventDefault();
                btns.forEach((item) => item.classList.remove('active'))
                btn.classList.add("active");
                const filter = e.target.dataset.filter;

                storeData.forEach((item) => {
                    if (filter === 'all') {
                        item.style.display = 'block';
                        innerTab.style.display = 'none';

                    } else if (filter === 'port-web') {
                        item.style.display = 'none';
                        innerTab.style.display = 'block';
                        innerBtns[0].classList.add("active");

                        webTab.forEach((item) => {
                            if (item.classList.contains('web-cms')) {
                                item.style.display = "block"
                            }
                        })
                    } else {
                        if (item.classList.contains(filter)) {
                            item.style.display = 'block';
                            innerTab.style.display = 'none';
                        } else {
                            item.style.display = 'none'
                        }

                    }
                })

            })
        })



        innerBtns.forEach((btn) => btn.addEventListener('click', function(e) {
            e.preventDefault()
            innerBtns.forEach((btn) => btn.classList.remove('active'))
            btn.classList.add('active')

            const filter = e.target.dataset.filter

            storeData.forEach((item) => {


                item.style.display = 'none'

                if (filter === 'web-cms') {
                    if (item.classList.contains(filter)) {
                        item.style.display = 'block';
                    }
                }
                if (filter === 'web-wp') {
                    if (item.classList.contains(filter)) {
                        item.style.display = 'block';
                    }
                }
                if (filter === 'web-ecommerce') {
                    if (item.classList.contains(filter)) {
                        item.style.display = 'block';
                    }
                }
            })

        }))
    </script>






    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lottie Files -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- scroll smooth -->
    <script src="{{asset('web/assets/js/SmoothScrollMouseWheel.js'); }}"></script>

    <!-- filter -->
    <!-- <script src="{{asset('web/assets/js/filter.js'); }}"></script> -->

    <!-- main js 1 -->
    <script src="{{asset('web/assets/js/main1.js'); }}"></script>

    <!-- main js 2 -->
    <script src="{{asset('web/assets/js/main2.js'); }}"></script>

    <!-- Darkmode Script -->
    <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

    <!-- Offcanvas Script -->
    <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>

    <!-- Modal -->
    <script src="{{asset('web/assets/js/modal.js'); }}"></script>

    <script>
        document.querySelectorAll('.po-nav').forEach((item) => item.classList.add('active'));
    </script>

</body>

</html>