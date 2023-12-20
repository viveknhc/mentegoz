<header id="header">



  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <div class="logo-div">
        <a class="logo" href="{{url('index')}}">
          <img src="{{asset('web/assets/img/logo-2.webp'); }}" alt="" width="100%">
        </a>
      </div>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="mobile-nav-icon">
          <!-- <i id="menu____bar" class="fa-solid fa-bars"></i> -->
          <img id="menu____bar" src="{{asset('web/assets/img/canvas-icon.webp'); }}" width="30px">
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link hm-nav" aria-current="page" href="{{url('index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ab-nav" href="{{url('about')}}">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle sr-nav" href="{{url('services')}}" id="navbarDropdown" role="button" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item mobile-service-nav" href="{{url('web-design')}}">Web Designing</a></li>
              <li><a class="dropdown-item mobile-service-nav" href="{{url('services')}}">Digital Marketing</a></li>
              <li><a class="dropdown-item mobile-service-nav" href="{{url('services')}}">Branding</a></li>
              <li><a class="dropdown-item mobile-service-nav" href="{{url('services')}}">Software Development</a></li>
              <li><a class="dropdown-item mobile-service-nav" href="{{url('services')}}">App Development</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-nav" href="{{url('product')}}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link po-nav" href="{{url('portfolio')}}">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ca-nav" href="{{url('career')}}">Career</a>
          </li>
          <li class="nav-item">
            <a class="nav-link con-nav" href="{{url('contact')}}">Contact</a>
          </li>

          <!-- Switcher -->

          <div class="switcher-tab d-none d-md-block" id="switcher-tab">
            <!-- <p>Switcher</p> -->
            <!-- <span class="switcher-line"></span> -->
            <div class="switcher" id="switcher">
              <div class="circle-switcher" id="circle-switcher"></div>
              <div class="darkswitch">
                <div class="dark">
                  <i class="fa-solid fa-sun"></i>
                </div>
                <div class="light">
                  <i class="fa-solid fa-moon"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Switcher -->

        </ul>
      </div>

      <div class="icon">
        <a class="open-canvas" onclick="opencanvas()">
          <img src="{{asset('web/assets/img/canvas-icon.webp'); }}" width="30px">
        </a>
      </div>
    </div>

  </nav>



</header>



<!-- Canvas Section -->

<section class="contactcanvas" id="contactcanvas">
  <span class="before-canvas"></span>
  <div class="contactcanvas-main">
    <div class="about">
      <h2 class="canvas-head">Mentegoz Technologies</h2>
      <p>Mentegoz technologies A well-established website development and digital marketing-based IT company providing best-in-class technology solutions worldwide. </p>
      <button class="enquire-cnvs-btn cont-modal-btn">Connect Us</button>
    </div>
    <div class="contact d-flex">
      <div class="details india">
        <div class="logo">
          <img src="{{asset('web/assets/img/mentegoz-logo-blue.webp'); }}" class="light-logo" alt="">
          <img src="{{asset('web/assets/img/logo-2.webp'); }}" class="dark-logo d-none" alt="">
          <img class="contry" src="{{asset('web/assets/img/icons/country/india.webp'); }}" alt="">
        </div>
        <div class="address d-flex">
          <div class="icon">
            <i class="fa-solid fa-location-dot cnvs-icn"></i>
          </div>
          <p>3rd Floor, Meenakshi Tower, Nadakkavu Road,<br> Eranhipalam, Kozhikode, Kerala - 673006</p>
        </div>
        <div class="mobile d-flex">
          <div class="icon">
            <i class="fa-solid fa-phone cnvs-icn"></i>
          </div>
          <p>Mobile: +91 7012 727 621<br>Mobile: +91 7012 224 271</p>
        </div>
        <div class="mail d-flex">
          <div class="icon">
            <i class="fa-solid fa-paper-plane cnvs-icn"></i>
          </div>
          <p>info@mentegoz.com</p>
        </div>
      </div>
      <div class="details qatar">
        <div class="logo">
          <img src="{{asset('web/assets/img/mentegoz-logo-blue.webp'); }}" class="light-logo" alt="">
          <img src="{{asset('web/assets/img/logo-2.webp'); }}" class="dark-logo d-none" alt="">
          <img class="contry" src="{{asset('web/assets/img/icons/country/qatar.webp'); }}" alt="">
        </div>
        <div class="address d-flex">
          <div class="icon">
            <i class="fa-solid fa-location-dot cnvs-icn"></i>
          </div>
          <p>5th Floor, Sky Tower, Masaq Doha, Qatar</p>
        </div>
        <div class="mobile d-flex">
          <div class="icon">
            <i class="fa-solid fa-phone cnvs-icn"></i>
          </div>
          <p>Mobile: +974 30652376<br>Mobile: +974 50902121</p>
        </div>
        <div class="mail d-flex">
          <div class="icon">
            <i class="fa-solid fa-paper-plane cnvs-icn"></i>
          </div>
          <p>feedonfeeds@gmail.com</p>
        </div>
      </div>
    </div>
    <div class="social-media-canvs">
      <a href="https://www.linkedin.com/company/mentegoztechnologies/">
        <i class="fa-brands social-icon fa-linkedin cnvs-icn"></i>
      </a>
      <a href="https://www.instagram.com/mentegoz/">
        <i class="fa-brands social-icon fa-instagram cnvs-icn"></i>
      </a>
      <a href="https://www.facebook.com/mentegoztechnologies">
        <i class="fa-brands social-icon fa-facebook cnvs-icn"></i>
      </a>
      <a href="https://twitter.com/Mentegoz">
        <i class="fa-brands social-icon fa-twitter cnvs-icn"></i>
      </a>
    </div>
    <div class="close-icon">
      <a onclick="closecanvas()">
        <img src="{{asset('web/assets/img/canvas-icon-blue.webp'); }}" class="cnvs-eye-light" width="35px">
        <img src="{{asset('web/assets/img/canvas-icon.webp'); }}" class="cnvs-eye-dark d-none" width="35px">
      </a>
    </div>
    <div class="element">
      <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="">
      <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="">
    </div>
    <div class="elementscnd">
      <img src="{{asset('web/assets/img/3d-element.webp'); }}" class="threed_light" alt="">
      <img src="{{asset('web/assets/img/3d-element-dark.webp'); }}" class="threed_dark d-none" alt="">
    </div>
  </div>
</section>


<section id="floatingbtn">
  <a href="#" class="">
    <div class="circle-btn-flot ">
      <div class="icon">
        <i class="fa-solid fa-comments"></i>
      </div>
    </div>
  </a>
</section>









<script>
  // Navbar Border Radius

  function collapse() {
    if (document.querySelector('.navbar-toggler').classList.contains('collapsed')) {
      document.querySelector('.navbar').classList.remove('navbar-radius');
    } else {
      document.querySelector('.navbar').classList.add('navbar-radius');
    }
  }
  document.getElementById('menu____bar').addEventListener('click', collapse)
</script>


<!-- PRELOADER -->
<script>
    setTimeout(function() {
        $('.mentpreloader').fadeOut(100);
    }, 2800);
</script>


<!-- SCROLLBAR VISIBLE -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
      // Hide the scrollbar
      document.documentElement.style.overflow = 'hidden';

      // After 3 seconds, restore the scrollbar
      setTimeout(function() {
        document.documentElement.style.overflow = 'auto';
      }, 2700);
    });
  </script>