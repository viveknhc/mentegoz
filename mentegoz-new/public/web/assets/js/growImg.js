const growTl = gsap.timeline({
    scrollTrigger: {
        trigger: "#grow",
        scrub: 1.6,
        start: "top 100%",
        end: "+=500",
        ease: "power1.out"
    }
});
growTl.to("#grow", {
    duration: 1.2,
    scale: 1
});
growTl.to("#grow-tagline", {
    duration: 0.4,
    delay: -0.7,
    opacity: 1,
    y: 0
});
