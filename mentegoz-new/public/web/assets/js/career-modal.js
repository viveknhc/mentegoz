var carmodal = document.querySelector('.career-modal-center');

var carbtnmodal = document.querySelectorAll('.career-modal-btn');

var carclose_btn = document.querySelector('.car-close');

let careerscrollPositionmodal = window.scrollY;
  function getcurrentscrollvaluemodal()
  {
    
    careerscrollPositionmodal=window.scrollY
    // console.log(scrollPositionmodal)
  }

carbtnmodal.forEach((btn) => {
  btn.onclick = function() {
    getcurrentscrollvaluemodal()
    carmodal.classList.add('career-modal-animation');
    document.querySelector("html").classList.add("overflow-scroll-rem");
}
})

// Close Button

carclose_btn.onclick = function() {
  window.scrollTo(0, careerscrollPositionmodal);
  carmodal.classList.remove('career-modal-animation');
  document.querySelector("html").classList.remove("overflow-scroll-rem");
}

//Background Click Remove

window.onclick = function(event) {
  // console.log(event)
  if (event.target == carmodal) {
    window.scrollTo(0, careerscrollPositionmodal);
    carmodal.classList.remove('career-modal-animation');
    document.querySelector("html").classList.remove("overflow-scroll-rem");
  }
}


