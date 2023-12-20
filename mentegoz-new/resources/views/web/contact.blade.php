<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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


    <!-- Contact Head -->

    <div class="contact-head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="contact-banner-head">CONNECT WITH US</h1>
                    <p class="contact-para">We are available 24/7 by e-mail and phone. You can also ask a question about our services through our contact form that we regularly provide.</p>
                </div>
            </div>
        </div>
        <div class="ment-logo-contact">
            <img src="{{asset('web/assets/img/mentegoz-eye_blue.webp'); }}" alt="" class="mentservicelogo ">
            <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="" class="mentservicelogo d-none">
        </div>
        <div class="element">
            <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" alt="" width="100%">
        </div>
    </div>

    <!-- Contact Head End -->


    <!-- contact page section -->

    <div class="contact-pg-section">
        <div class="container">
            <div class="row contact-page-main">
                <div class="col-md-5 col-12 left">
                    <div class="leftsection-contact">
                        <h1>Get In Touch</h1>
                        <p>Fill up the form,<br>Our Team will get back to you within hours.</p>
                        <div class="contact-details">
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
                        <div class="ment-logo-contact">
                            <img src="{{asset('web/assets/img/mentegoz-eye.webp'); }}" alt="">
                        </div>
                        <!-- <div class="element">
                            <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" alt="" width="100%">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-7 col-12 right">
                    <div class="rightsection-contact">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="inputdiv">
                                        <label for="name">Name</label>
                                        <input type="text" id="" class="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputdiv mobile-input">
                                        <label for="email">E-Mail</label>
                                        <input type="email" id="" class="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="inputdiv">
                                <label for="phone">Phone Number</label>
                                <input type="phone" id="" class="" required>
                            </div>
                            <div class="inputdiv">
                                <p>What type of Service you need</p>
                                <div class="dropdown">
                                    <input type="text" class="dropdown-input" readonly value="- select service -">
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
                            <div class="inputdiv">
                                <label for="subject">Comment Here</label>
                                <textarea name="" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="contact-button">
                                <button class="cnt-btn" id="" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End contact page section -->

    <!-- contact details section -->

    <div class="contact-location-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 d-flex india">
                    <div class="location-box">
                        <div class="logo">
                            <img src="{{asset('web/assets/img/mentegoz-logo-blue.webp'); }}" alt="" class="dark-logo">
                            <img src="{{asset('web/assets/img/logo-2.webp'); }}" alt="" class="light-logo d-none">
                            <img src="{{asset('web/assets/img/icons/country/india.webp'); }}" alt="" class="flag">
                        </div>
                        <div class="details">
                            <div class="address">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot cnvs-icn"></i>
                                </div>
                                <p>3rd Floor, Meenakshi Tower, Nadakkavu Road,
                                    Eranhipalam, Kozhikode, Kerala - 673006</p>
                            </div>
                            <div class="phone">
                                <div class="icon">
                                    <i class="fa-solid fa-phone cnvs-icn"></i>
                                </div>
                                <p>Mobile: +91 7012 727 621<Br>
                                    Mobile: +91 7012 224 271</p>
                            </div>
                            <div class="email-section">
                                <div class="icon">
                                    <i class="fa-solid fa-paper-plane cnvs-icn"></i>
                                </div>
                                <p>info@mentegoz.com</p>
                            </div>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15650.946105078121!2d75.782926!3d11.280768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65ecc6e71226b%3A0x3eda69b492cec3a6!2sMentegoz%20Technologies!5e0!3m2!1sen!2sin!4v1679312318026!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframe"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 d-flex qatar">
                    <div class="location-box">
                        <div class="logo">
                            <img src="{{asset('web/assets/img/mentegoz-logo-blue.webp'); }}" alt="" class="dark-logo">
                            <img src="{{asset('web/assets/img/logo-2.webp'); }}" alt="" class="light-logo d-none">
                            <img src="{{asset('web/assets/img/icons/country/qatar.webp'); }}" alt="" class="flag">
                        </div>
                        <div class="details">
                            <div class="address">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot cnvs-icn"></i>
                                </div>
                                <p>5th Floor, Sky Tower, Masaq Doha, Qatar</p>
                            </div>
                            <div class="phone">
                                <div class="icon">
                                    <i class="fa-solid fa-phone cnvs-icn"></i>
                                </div>
                                <p>Mobile: +974 30652376<br>
                                    Mobile: +974 50902121</p>
                            </div>
                            <div class="email-section">
                                <div class="icon">
                                    <i class="fa-solid fa-paper-plane cnvs-icn"></i>
                                </div>
                                <p>feedonfeeds@gmail.com</p>
                            </div>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15650.946105078121!2d75.782926!3d11.280768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65ecc6e71226b%3A0x3eda69b492cec3a6!2sMentegoz%20Technologies!5e0!3m2!1sen!2sin!4v1679312318026!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframe"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End contact details section -->

    <!-- Footer Section -->

    @include('Layout.inc.footer')

    <!-- Footer Section -->






    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Aswesome -->
    <script src="https://kit.fontawesome.com/275b00d5ce.js" crossorigin="anonymous"></script>

    <!-- Lottie Files -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Main 1 Script -->
    <script src="{{asset('web/assets/js/main1.js'); }}"></script>

    <!-- scroll smooth -->
    <script src="{{asset('web/assets/js/SmoothScrollMouseWheel.js'); }}"></script>

    <!-- Darkmode Script -->
    <script src="{{asset('web/assets/js/darkmode.js'); }}"></script>

    <!-- Offcanvas Script -->
    <script src="{{asset('web/assets/js/offcanvas.js'); }}"></script>


    <!-- Contact Page Service Custom Dropdown -->
    <script>
        let dropdown_input = document.querySelector('.dropdown-input')
        dropdown_input.addEventListener('click', function() {
            document.querySelector('.dropdown-div').classList.add('active')
        })

        document.querySelectorAll('.dropdown-items').forEach((item) => {
            console.log(item)
            item.addEventListener('click', function() {
                let services = item.getAttribute('value')
                dropdown_input.value = services
                document.querySelector('.dropdown-div').classList.remove('active')

            })
        })

        document.body.addEventListener('click', event => {
            // check if the clicked element is the 'my-element' element or one of its children
            const clickedElement = event.target;
            const myElement = document.querySelector('.dropdown-input');
            if (myElement.contains(clickedElement)) {
                // do nothing if the clicked element is the 'my-element' element or one of its children
                return;
            }

            // remove the 'active' class from the 'my-element' element
            document.querySelector('.dropdown-div').classList.remove('active')
        });
    </script>

    <script>
        document.querySelectorAll('.con-nav').forEach((item) => item.classList.add('active'));
    </script>

</body>

</html>