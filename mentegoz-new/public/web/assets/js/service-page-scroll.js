gsap.registerPlugin(ScrollTrigger);
gsap.defaults({
    duration: 1
})


let mms = gsap.matchMedia();
const tl = gsap.timeline();


mms.add("(min-width:1024px)", () => {
    tl.from('.gslide-2', {
            xPercent: -100
        })
        .from('.gslide-3', {
            xPercent: 100
        })
        .from('.gslide-4', {
            xPercent: -100
        })
        .from('.gslide-5', {
            xPercent: 100
        });

    ScrollTrigger.create({
        animation: tl,
        trigger: ".service_____section",
        start: "top top",
        end: "+=4000",
        scrub: true,
        pin: true,
    });

    console.log(document.querySelector(".service_____section").offsetWidth)
})