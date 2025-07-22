import "./bootstrap";

import gsap from "gsap";

gsap.from(".cta-content", {
    y: 300,
    duration: 1.25,
    stagger: 0.25,
    opacity: 0,
});
