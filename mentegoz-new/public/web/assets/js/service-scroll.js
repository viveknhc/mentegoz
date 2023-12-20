
// GSAP Scroll Trigger Services

gsap.registerPlugin(ScrollTrigger);

let mm = gsap.matchMedia();
let sections = gsap.utils.toArray(".service-item");

mm.add("(min-width:1024px)", () => {
  gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: ".services",
      pin: true,
      duration: 0.5,       // new added
      ease: "power1.inOut",       // new added
      scrub: 1,
      snap: 1 / (sections.length - 1),        // new added
      end: () => "+=" + document.querySelector(".services").offsetWidth,
      // markers:true,
    }
  });
})