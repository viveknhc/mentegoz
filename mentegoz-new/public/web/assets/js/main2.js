// Qaulity Section

gsap.registerPlugin(ScrollTrigger)

let menuItem = document.querySelectorAll(".quality-point");
let menuImage = document.querySelectorAll(".menu__item-image");

let aboutmm = gsap.matchMedia();








// adding eventListeners to all the menuItems.

aboutmm.add("(min-width:1024px)",  () => {
  for (let i = 0; i < menuImage.length ; i++)
{
  //   image reveal animation
  const animation = gsap.to(menuImage[i], {
    opacity: 1,
    duration: 0.2,
    scale: 1,
    ease: "ease-in-out"
  });

  menuItem[i].addEventListener("mouseenter", () => animation.play());
  menuItem[i].addEventListener("mouseleave", () => animation.reverse());

  //   initialization
  animation.reverse();
}

//   to move image along with cursor
function moveText(e) {
  gsap.to([...menuImage], {
    css: {
      left: e.pageX + 200,
      top: e.pageY,
    },
    duration: 0.3,
  });
}

menuItem.forEach((el) => {
  el.addEventListener("mousemove", moveText);
});
})

