  //Offcanvas Details

  let scrollpositionoffcanvas = window.scrollY;
  function getcurrentscrollvalue()
  {
    
    scrollpositionoffcanvas=window.scrollY
    // console.log(scrollpositionoffcanvas)
  }
  
  function opencanvas() {
    getcurrentscrollvalue()
    // console.log(scrollpositionoffcanvas)
    document.getElementById("contactcanvas").style.right = "0";
    document.querySelector("html").classList.add("overflow-scroll-rem");
    // document.getElementById('switcher-tab').classList.remove('opacity')
  }
  
  function closecanvas() {
    document.getElementById("contactcanvas").style.right = "-100%";
    document.querySelector("html").classList.remove("overflow-scroll-rem");
    // document.getElementById('switcher-tab').classList.add('opacity')
    window.scrollTo(0, scrollpositionoffcanvas);
    // console.log(scrollPosition)
  }