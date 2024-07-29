jQuery(document).ready(function($) {
    // GSAP Smooth scroll
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
    ScrollTrigger.normalizeScroll(true);
    // create the smooth scroller FIRST!
    let smoother = ScrollSmoother.create({
        smooth: 1,
        effects: true,
        normalizeScroll: true
    });
    // Slideup Section
    if (jQuery("#cbtse-slideup-content-wrapper").length !== 0) {
        const slideupSection = gsap.timeline({
            scrollTrigger: {
                trigger: "#cbtse-slideup-content-wrapper",
                start: "top top",
                end: "+=" + jQuery(window).height() * 4,
                scrub: 1,
                pin: true,
            },
        });
        gsap.set(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:not(:first-child)",
            {
                y: "100vh",
            }
        );
        slideupSection.to(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(2)",
            {
                y: "35px",
                delay: 0.5,
                duration: 1,
            }
        );
        slideupSection.to(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(1)",
            {
                scale: 0.95,
                delay: 0,
                duration: 0.5,
            },
            "-=1"
        );
        slideupSection.to(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(3)",
            {
                y: "70px",
                delay: 0.5,
                duration: 1,
            }
        );
        slideupSection.to(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(1)",
            {
                scale: 0.9,
                delay: 0.5,
            },
            "-=1"
        );
        slideupSection.to(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(2)",
            {
                scale: 0.95,
                delay: 0.5,
            },
            "-=1"
        );
        slideupSection.to(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(4)",
            {
                y: "105px",
                duration: 1,
            },
            "+=1"
        );
        slideupSection.to(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(1)",
            {
                scale: 0.85,
            },
            "-=1"
        );
        slideupSection.to(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(2)",
            {
                scale: 0.9,
            },
            "-=1"
        );
        slideupSection.to(
            "#cbtse-slideup-content-wrapper .cbtse-slideup-content:nth-child(3)",
            {
                scale: 0.95,
            },
            "-=1"
        );
    }

    // Tab buttons
    jQuery(".cbtse-tab-button1").click(function() {
        // or you could animate the scrollTop:
        gsap.to(smoother, {
            scrollTop: 0, // 0px from the top
            duration: 1
        });
    });
    jQuery(".cbtse-tab-button2").click(function() {
        // or you could animate the scrollTop:
        gsap.to(smoother, {
            scrollTop: jQuery(window).height()*1.2,
            duration: 1
        });
    });
    jQuery(".cbtse-tab-button3").click(function() {
        // or you could animate the scrollTop:
        gsap.to(smoother, {
            scrollTop: jQuery(window).height()*2.4,
            duration: 1
        });
    });
    jQuery(".cbtse-tab-button4").click(function() {
        // or you could animate the scrollTop:
        gsap.to(smoother, {
            scrollTop: jQuery(window).height()*4,
            duration: 1
        });
    });
});