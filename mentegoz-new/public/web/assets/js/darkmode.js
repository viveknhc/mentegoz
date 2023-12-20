
// // Darkmode Switcher Button


var switcher = document.getElementById("switcher");

function darkMode() {
  function dark_mode(id,cls){
    if(document.getElementById(id) != null){
       document.getElementById(id).classList.toggle(cls)
    }
  }
  function dark_mode_class(txt,cls){
    if(document.querySelector(txt) != null){
      document.querySelector(txt).classList.toggle(cls)
    }
  }
  function dark_mode_classes(txt,cls){
      document.querySelectorAll(txt).forEach(item => item.classList.toggle(cls) )
  }




  dark_mode('switcher', 'active')


  dark_mode_class('.navbar', 'darkmode-nav')
  dark_mode_class('.switcher-line', 'switcher-line-dark')
  dark_mode_class('body', 'body-dark')
  dark_mode_class('.banner-dark','container-fluid-dark')
  dark_mode_class('.switcher-tab','switcher-tab-dark')
  // dark_mode_classes('.project-view-btn', 'darkmode-nav')
  dark_mode_classes('.head-color','text-white')
  dark_mode_classes('.dropdown-item','text-white')
  dark_mode_classes('.dropdown-item','dropdown-bg') // Drop down
  dark_mode_classes('p','text-white') // p color
  dark_mode_classes('li','text-white') // list color
  dark_mode_classes('span','text-white') // span color
  dark_mode_classes('label','text-white') // Label color
  dark_mode_classes('input','input-dark') // input background color
  dark_mode_classes('select','input-dark') // option background color
  dark_mode_classes('textarea','input-dark') // textarea background color
  dark_mode_classes('.counter-div','text-white')  // Counter color change
  dark_mode_classes('.counter-label','text-white') // Counter color change
  dark_mode_classes('.main-btn','btndark')    // button bg
  dark_mode_classes('.main-btn','btn-dark-color') // button text
  // dark_mode_classes('.social-icon','social-color-dark')
  dark_mode_classes('.cnvs-icn','social-color-dark')
  dark_mode('footersection','darkfooter-bg')
  dark_mode_classes('.main-head','arrow-dark')  
  dark_mode_class('.website','dark-service')
  dark_mode_class('.marketing','dark-service')
  dark_mode_class('.branding','dark-service')
  dark_mode_class('.ui-ux','dark-service')
  dark_mode_class('.software','dark-service')
  dark_mode_class('.application','dark-service')
  dark_mode_class('.client_bg','dark-service')
  dark_mode_class('.blog-cont','blog-para-dark')
  dark_mode_class('.conn-head','conn-head-dark')
  dark_mode_class('.beyond-text','beyond-text-dark') // About Page Beyond Text
  dark_mode_class('.textareamodal','modal-dark') // About Page Beyond Text
  dark_mode_class('.dropdownmodal','modal-dark') // About Page Beyond Text
  dark_mode_classes('.inputmodal','modal-dark') // About Page Beyond Text
  dark_mode_classes('.bg-pg-head','text-white')   // About page Head Text
  dark_mode_classes('.header-color-1','header-color-dark')   // Beyond text Home Page
  dark_mode_class('.canvas-head','canvas-head-dark') //OFFCanvas Head
  dark_mode_class('.contactcanvas','contactcanvas-bg-dark') // OFFCanvas BG
  dark_mode_class('.contact','contact-dark') //contact Dark
  dark_mode_class('.service-banner-head','banner-head-dark')  // Services Page Banner Header
  dark_mode_class('.cta-btn-service','cta-btn-service-dark')  // Services Page Banner Button
  dark_mode_class('.contact-page-main','contact-page-main-dark')  // Contact Page main
  dark_mode_class('.leftsection-contact','leftsection-contact-dark')  // Contact page left section bg
  dark_mode_class('.dropdown-menu','dropdown-menu-dark')  // Menu Dropdown background
  dark_mode_class('.left-contact','left-contact-dark')  // Contact Left -Dark
  dark_mode_class('.client-abt-main','client-abt-main-dark')  // Client About main
  dark_mode_class('.portfolio-content','portfolio-content-dark')  // Portfolio Details Content
  dark_mode_class('.fa-share-nodes','text-white')  // Portfolio Details Content
  dark_mode_class('.contry-para','contry-para-dark')  // Portfolio Details Content
  dark_mode_class('.circle-btn-flot','circle-btn-flot-dark')  // Portfolio Details Content
  dark_mode_class('.enquire-cnvs-btn','enquire-cnvs-btn-dark')  // Portfolio Details Content
  dark_mode_class('.contact-banner-head','contact-banner-head-dark')  // Portfolio Details Content
  dark_mode_class('.mail-text','text-white')  // Portfolio Details Content
  dark_mode_class('.upload-resume','upload-resume-dark')  // Portfolio Details Content
  dark_mode_class('.inner-blog-date','inner-blog-date-dark')  // Inner Page Blog Date bg
  dark_mode_class('.inner-date','inner-date-dark')  // Inner Page Blog Date text
  dark_mode_class('.portfolio-input-bg','portfolio-input-dark')  // Inner Page Blog Date text
  dark_mode_class('.search-icon','search-icon-dark')  // Inner Page Blog Date text

  // vivek
  dark_mode_class('.gradient1','gradient1-dark') 
  
  // dark_mode_class('.mentpreloader','mentpreloaderdark')  // Preloader Dark Load


  dark_mode_classes('.social-links-footer','icon-dark')
  dark_mode_classes('.testimonial-cont','testimonial-dark')
  dark_mode_classes('.testimonial-cont-inner','testimonial-cont-inner-dark')
  dark_mode_classes('.fa-quote-left','quote-dark')
  dark_mode_classes('.item-details','dark-service')
  dark_mode_classes('.service-type','dark-service')
  dark_mode_classes('.subhead-service','subhead-service-dark')
  dark_mode_classes('.project-btn','project-btn-dark')
  dark_mode_classes('.fa-arrow-right','arrow-dark')
  dark_mode_classes('.product-bg','dark-bg-color')
  dark_mode_classes('.blog-items','dark-bg-color')
  dark_mode_classes('.location-btn','location-dark-btn')
  dark_mode_classes('.product-items','dark-bg-color')
  dark_mode_classes('.blog-items','blog-dark')
  dark_mode_classes('.blog-head','text-white')
  dark_mode_classes('.blog-btn','text-white')
  // dark_mode_classes('.sub-head','text-white')
  dark_mode_classes('.products-para','product-para-dark')
  dark_mode_classes('.quality-point','quality-point-dark') // Quality section Dark Bg
  dark_mode_classes('.sm-head','text-white') // Quality small text
  dark_mode_classes('.bg-head','text-white') // Quality Main head
  dark_mode_classes('.nav-link-about','nav-link-about-dark') // Quality nav bg
  dark_mode_classes('.tab-head','text-white') // Quality nav head text
  dark_mode_classes('.service_box','service_box-dark') // Service Page Items
  dark_mode_classes('.box','box-dark') // Product Quality items box
  dark_mode_classes('.name','text-white') // Product Item Name
  dark_mode_classes('.product-page-item','product-page-item-dark') // Product Quality items box
  dark_mode_classes('.location-box','location-box-dark')  // Contact page details box
  dark_mode_classes('.iframe','iframe-dark')  // Contact Page Iframe
  // dark_mode_classes('.portfolio-desc','portfolio-desc-dark')  // Portfolio page hover
  dark_mode_classes('.portfolio-project-name','text-white')  // Portfolio page hover
  dark_mode_classes('.portfolio-project-category','text-white')  // Portfolio page hover
  dark_mode_classes('.nav-link','nav-link-dark')  // Home Page Portfolio Tab
  dark_mode_classes('.cont-details','text-white')  // Portfolio Hover item
  dark_mode_classes('.portfolio-btn','portfolio-btn-dark')  // Portfolio Main Tab
  dark_mode_classes('.inner_btn','inner_btn-dark')  // Portfolio Inner Tab
  dark_mode_classes('.dropdown-div','dropdown-div-dark')  // Contact Dropdown
  dark_mode_classes('.port-item-sub','text-white')  // Portfolio Item sub
  dark_mode_classes('.port-item-main','text-white')  // Portfolio Item Main
  dark_mode_classes('.port-detail-head','text-white')  // Portfolio Details Head
  dark_mode_classes('.recent-head','text-white')  // Recent Portfolio Head
  dark_mode_classes('.item-career','item-career-dark')  // Career box dark
  dark_mode_classes('.nextservice','nextservice-dark')  // Next Service dark
  dark_mode_classes('.footer-social','footer-social-dark')  // Footer Social
  dark_mode_classes('.service-pg-slide','service-pg-slide-dark')  // Service Page Section BG Dark
  dark_mode_classes('.video-ovr-efct','video-ovr-efct-dark')  // Video Overlay Effect Dark
  dark_mode_classes('.project-view-btn','project-view-btn-dark')  // Service section view latest project
  dark_mode_classes('.view-project-btn','view-project-btn-dark')  // portfolio section view more project button
  dark_mode_classes('.client-btn','client-btn-dark')  // portfolio section view more project button
  dark_mode_classes('.mobile-contact','text-white')  // footer mobile text color change
  dark_mode_classes('.enquire_btn','enquire_btn_dark')  // enquire btn
  dark_mode_classes('.client-items-page','client-items-page-dark')  // clients page items background
  dark_mode_classes('.client-loc','client-loc-dark')  // clients page location icon color
  dark_mode_classes('.more-btn','more-btn-dark')  // More Arrow Btn
  dark_mode_classes('.less-btn','more-btn-dark')  // Less Arrow Btn
  dark_mode_classes('.arrow-icon','arrow-icon-dark')  // Arrow Btn Icon
  dark_mode_classes('.bottom-border','bottom-border-dark')  // provided services border

  dark_mode_classes('.img-filter','img-filter-dark')


  // Banner Image Change

  if(document.querySelector('.light-img') != null){
    document.querySelector('.light-img').classList.toggle('d-none')
    document.querySelector('.dark-img').classList.toggle('d-none')
  }

  // Banner Image Change

  document.querySelector('.cnvs-eye-light').classList.toggle('d-none')
  document.querySelector('.cnvs-eye-dark').classList.toggle('d-none')

  // Off Canvas Logo Change

  document.querySelectorAll('.light-logo').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.dark-logo').forEach(item => item.classList.toggle('d-none'))

  // Client Image Change

  document.querySelectorAll('.client-light-img').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.client-dark-img').forEach(item => item.classList.toggle('d-none'))
  
  // Product Mentagoz Logo Change

  document.querySelectorAll('.product-ment-logo').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.product-ment-logo-dark').forEach(item => item.classList.toggle('d-none'))

  // drawsvg Mentagoz Logo Change

  document.querySelectorAll('.mentlogosvg').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.mentlogosvg-dark').forEach(item => item.classList.toggle('d-none'))

  // world Mentagoz Logo Change

  document.querySelectorAll('.ment-logo').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.ment-logo-dark').forEach(item => item.classList.toggle('d-none'))

  // Service Page Ment Logo change

  document.querySelectorAll('.mentservicelogo').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.mentservicelogo-dark').forEach(item => item.classList.toggle('d-none'))

  // Product Page Ment Logo change

  document.querySelectorAll('.mentproductlogo').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.mentproductlogo-dark').forEach(item => item.classList.toggle('d-none'))

  // Product Logo change Home Page

  document.querySelectorAll('.product-logo').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.product-logo-dark').forEach(item => item.classList.toggle('d-none'))

  // Footer Logo Change

  document.querySelectorAll('.footer-logo-img').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.footer-logo-img-dark').forEach(item => item.classList.toggle('d-none'))
  
  // Divider Change Darkmode

  document.querySelectorAll('.top-divider-img').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.top-divider-img-dark').forEach(item => item.classList.toggle('d-none'))

  document.querySelectorAll('.bottom-divider-img').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.bottom-divider-img-dark').forEach(item => item.classList.toggle('d-none'))
  

  // 3D Element
  
  document.querySelectorAll('.threed_light').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.threed_dark').forEach(item => item.classList.toggle('d-none'))


// Client Logo image
  document.querySelectorAll('.client-logo-img').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.client-logo-img-dark').forEach(item => item.classList.toggle('d-none'))


// SVG Progress Change
  document.querySelectorAll('.svg-light').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.svg-dark').forEach(item => item.classList.toggle('d-none'))


// Web Design Inner Banner
  document.querySelectorAll('.web-inner-banner-light').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.web-inner-banner-dark').forEach(item => item.classList.toggle('d-none'))


  // Client Page Ment GIF Dark
  document.querySelectorAll('.light-client-gif').forEach(item => item.classList.toggle('d-none'))
  document.querySelectorAll('.dark-client-gif').forEach(item => item.classList.toggle('d-none'))
  

// DARKMODE PRELOADER

  // document.querySelectorAll('.mentpreloader-light').forEach(item => item.classList.toggle('d-none'))
  // document.querySelectorAll('.mentpreloader-dark').forEach(item => item.classList.toggle('d-none'))





  // document.querySelector('.project-3d-dark').forEach(item => item.classList.toggle('d-none'))

  // if(document.querySelectorAll('.svgcircle')!=null){
  //   document.querySelectorAll('.svgcircle').forEach((item)=>item.setAttribute('fill','#fff'))
  // }
  // if(document.getElementById('svgline')!=null){
  //   document.getElementById('svgline').setAttribute('stroke','#fff')
  // }
}



// Set dark mode by default
darkMode();


// LOCAL STORAGE
switcher.addEventListener("click", function(){
  
  darkMode()
  if(switcher.classList.contains('active')){
    localStorage.setItem('mode','dark')
  }else{
    localStorage.setItem('mode', 'light')
  }
})

let mode = localStorage.getItem('mode')
if(mode === 'light'){
  darkMode()
}

