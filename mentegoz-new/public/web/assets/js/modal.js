var modal = document.querySelector('.modal-center');

var btnmodal = document.querySelectorAll('.cont-modal-btn');

var close_btn = document.querySelector('.close');

let scrollPositionmodal = window.scrollY;
  function getcurrentscrollvaluemodal()
  {
    
    scrollPositionmodal=window.scrollY
    // console.log(scrollPositionmodal)
  }

btnmodal.forEach((btn) => {
  btn.onclick = function() {
    getcurrentscrollvaluemodal()
    modal.classList.add('modal-animation');
    document.querySelector("html").classList.add("overflow-scroll-rem");
}
})

// Close Button

close_btn.onclick = function() {
  window.scrollTo(0, scrollPositionmodal);
  modal.classList.remove('modal-animation');
  document.querySelector("html").classList.remove("overflow-scroll-rem");
}

//Background Click Remove

window.onclick = function(event) {
  // console.log(event)
  if (event.target == modal) {
    window.scrollTo(0, scrollPositionmodal);
    modal.classList.remove('modal-animation');
    document.querySelector("html").classList.remove("overflow-scroll-rem");
  }
}


