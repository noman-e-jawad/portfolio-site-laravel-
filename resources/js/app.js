import "./bootstrap";
import gsap, {
    Power2,
    Power1,
    Power3,
    Power4,
    Expo,
    Back,
    Elastic,
    Bounce,
    Rough,
    Slow,
    SteppedEase,
    Circ,
    Sine,
} from "gsap";
import ScrollTrigger from "gsap/src/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const locoScroll = new LocomotiveScroll({
    el: document.querySelector("#main-body"),
    smooth: true,
    lerp: 0.05,
});

locoScroll.on("scroll", ScrollTrigger.update);
ScrollTrigger.scrollerProxy(".smooth-scroll", {
    scrollTop(value) {
        return arguments.length
            ? locoScroll.scrollTo(value, 0, 0)
            : locoScroll.scroll.instance.scroll.y;
    }, // we don't have to define a scrollLeft because we're only scrolling vertically.
    getBoundingClientRect() {
        return {
            top: 0,
            left: 0,
            width: window.innerWidth,
            height: window.innerHeight,
        };
    },
    // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
    // pinType: document.querySelector(".smooth-scroll").style.transform
    //     ? "transform"
    //     : "fixed",
});

const timeline = gsap.timeline();
timeline.to("#chinese", {
    ease: Power2.easeOut,
    duration: 1,
    clipPath: "inset(0% 0% 0% 0%)",
});

timeline.to(
    [
        "#banner-intro h3",
        "#banner-intro h1",
        "#banner-intro p",
        "#banner-intro button",
    ],
    {
        ease: Expo.easeIn,
        duration: 1,
        y: 0,
        opacity: 1,
        stagger: {
            amount: 0.1,
        },
    }
);

timeline.to(".icon-box", {
    ease: Expo.easeIn,
    duration: 1,
    x: 0,
    opacity: 1,
    scrollTrigger: {
        trigger: "#expertise",
        scroller: ".smooth-scroll",
        scrub: true,
    },
    delay: 0.16,
    stagger: {
        amount: 0.4,
    },
});

let albams = gsap.utils.toArray(".albam-row");

gsap.to(".albams:not(:last-child)", {
    yPercent: -96 + (albams.length - 1),
    ease: "none",
    stagger: 0.5,
    scrollTrigger: {
        trigger: ".albam-archive",
        start: () => "top 220",
        end: () => "+=" + (albams.length + 1) * window.innerHeight,
        scrub: 0.6,
        pin: true,
        invalidateOnRefresh: true,
    },
});
gsap.set("albam-row", { zIndex: (i, target, targets) => targets.length - i });

// each time the window updates, we should refresh ScrollTrigger and then update LocomotiveScroll.
ScrollTrigger.addEventListener("refresh", () => locoScroll.update());

// after everything is set up, refresh() ScrollTrigger and update LocomotiveScroll because padding may have been added for pinning, etc.
ScrollTrigger.refresh();
