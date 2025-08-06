import "./bootstrap";
import gsap from "gsap";

document.addEventListener("DOMContentLoaded", () => {
    gsap.from(".cta-content", {
        y: 300,
        duration: 1.25,
        stagger: 0.25,
        opacity: 0,
    });

    // !BUG: #hero-image animation not working

    /*
        TODO: Research how GSAP animations work in greater detail using the official documentation
    */

    gsap.from("#hero-image", {
        opacity: 0,
        duration: 2,
    });
});
