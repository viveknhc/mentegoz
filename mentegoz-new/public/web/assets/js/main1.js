



// On Scroll Navbar Invisible

var mobilemedia = window.matchMedia ('(max-width:990px)');


mobilemedia.addEventListener('change',navbarinvisible)

function navbarinvisible(event)
{
  if(event.matches)
  {

  }
  else
  {
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "20px";
        // document.getElementById('switcher-tab').classList.remove('opacity');
      } else {
        document.getElementById("navbar").style.top = "-80px";
        // document.getElementById('switcher-tab').classList.add('opacity');
      }
      prevScrollpos = currentScrollPos;
    }
  }
  
  document.body.addEventListener('click', event => {
    // check if the clicked element is the 'my-element' element or one of its children
    const clickedElement = event.target;
    const myElement = document.querySelector('#navbar');
    if (myElement.contains(clickedElement)) {
        // do nothing if the clicked element is the 'my-element' element or one of its children
        return;
    }

    // remove the 'active' class from the 'my-element' element
    document.querySelector('#navbarSupportedContent').classList.remove('show');
    document.querySelector('#navbarSupportedContent').classList.add('collapse');
    document.querySelector('.navbar-toggler').classList.remove('collapsed');
    document.querySelector('.navbar').classList.remove('navbar-radius');
    
    
    // if (document.querySelector('.navbar-toggler').classList.contains('collapsed')) {
    //   document.querySelector('.navbar').style.borderRadius = "40px";
    // } else {
    //   document.querySelector('.navbar').style.borderRadius = "20px";
    // }


});


}

navbarinvisible(mobilemedia);






//client owlCarousel

$('.client-slider').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
   autoplayTimeout:3000,
    nav:false,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
})

$('.client-slider1').owlCarousel({
    loop:true,
    margin:10,
   autoplay:true,
   rtl:true,
   autoplayTimeout:3000,
    nav:false,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
})






// Project Slider Owl

$(document).ready(function(){
    $('.project-slider-item').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1300:{
                items:1.5
            },
            1500:{
                items:1.5
            }
        }
      })
});




// Why Choose hover image change

        document.querySelectorAll(".why_us_items").forEach(item => item.addEventListener('mouseenter',function(){
          let img = item.querySelector("img").src;
          document.getElementById("main_img").src =img
        }))

        


// Product Slider Owl


        $(document).ready(function(){
            $('.product-item-slider').owlCarousel({
                loop:true,
                margin:20,
                nav:true,
                autoplay:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1300:{
                        items:3
                    },
                    1500:{
                        items:3
                    }
                }
              })
        });





// Blog Slider

$(document).ready(function(){
    $('.blogs-item-slider').owlCarousel({
        // loop:true,
        margin:20,
        infinite:true,
        loop:true,
        nav:true,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1300:{
                items:3
            },
            1500:{
                items:3
            }
        }
      })
});






//Testimonial carousel Slick

if(document.querySelector('.testi-hori') !== null){
    $('.testi-hori').slick({
    // dots: true,
      infinite: true,
      loop:true,
    // autoplay:true,
    // autoplayTimeout:0,
      autoplay:true,
      autoplaySpeed:0,
      speed:18000,
      margin:20,
      cssEase:'linear',
      slidesToShow: 3,
      slidesToScroll: 1,
      pauseOnHover: false,
      // arrows: true,
      responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              // dots: true
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              // autoplay:false
              // speed:20000
              
            }
          }
        ]
    });
  }

  

if(document.querySelector('.testi-rev-hori') !== null){
    $('.testi-rev-hori').slick({
      // dots: true,
      infinite: true,
      loop:true,
      // autoplay:true,
    //   autoPlayTimeout:1000,
      autoplay:true,
      autoplaySpeed:0,
      speed:18000,
      margin:20,
      cssEase:'linear',
      slidesToShow: 3,
      slidesToScroll:1,
      pauseOnHover: false,
      // arrows: true,
        rtl:true,
      responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              // dots: true,
              // arrows: true,
              speed:20000
            }
          }
        ]
    });
  }






// Banner Beyond Text Change

var isLast = function(word) {
    return $(word).next().length > 0 ? false : true;
  }
  
  var getNext = function(word) {
    return $(word).next();
  }
  
  var getVisible = function () {
    return document.getElementsByClassName('is-visible');
  }
  
  var getFirst =  function() {
    var node = $('.words-wrapper').children().first();
    return node;
  }
  
  var switchWords = function(current, next) {
    $(current).removeClass('is-visible').addClass('is-hidden');
    $(next).removeClass('is-hidden').addClass('is-visible');
  }
  
  var getStarted = function() {
    //We start by getting the visible element and its sibling
    var first = getVisible();
    var next = getNext(first);
    
    //If our element has a sibling, it's not the last of the list. We switch the classes
    if (next.length !== 0) {
       switchWords(first,next);
    } else {
      
      //The element is the last of the list. We remove the visible class of the current element
      $(first).removeClass('is-visible').addClass('is-hidden');
      
      //And we get the first element of the list, and we give it the visible class. And it starts again.
      var newEl = getFirst();
      $(newEl).removeClass('is-hidden').addClass('is-visible');
    }
    
  }
  
  var init = function() {
    setInterval(function() {getStarted()}, 2000);
  }
  
  init();





  
  // World Wide Countries Slick Slider

  if(document.querySelector('.conn-logo-slide') !== null){
    $('.conn-logo-slide').slick({
      // dots: true,
    infinite:true,
    loop:true,
      autoplay:true,
      autoplaySpeed:0,
      speed:4000,
      cssEase:'linear',
      slidesToShow: 6,
      slidesToScroll:1, 
      pauseOnHover:false,
      responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              speed:2000,
              dots: false
            }
          }
        ]
    })
  }



