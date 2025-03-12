export function runGSAP() {
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
  const cards = document.querySelectorAll(".hero__card");
  const cardBox = document.querySelector("#hero__card-deck");
  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  const videoContainer = document.querySelector("#showreel__container");
  const video = document.querySelector("#showreel__video-container");
  const stacks = document.querySelector("#stacks");
  const screenSize = gsap.matchMedia();
  const testimonial = document.querySelector("#testimonial-wrapper");

  screenSize.add("(max-width: 1079px)", () => {
    const cardTop = cards[0].getBoundingClientRect().top * -0.7 + 0.5;

    gsap.fromTo(
      cards[1],
      {
        y: cardTop,
        rotation: () => Math.random() * 4 + 7,
      },
      {
        y: "0%",
        rotation: 0,
        duration: 0.3,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      cards[2],
      {
        y: cardTop * 2,
        rotation: () => Math.random() * 3 - 7,
      },
      {
        y: "0%",
        rotation: 0,
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      cardBox,
      {
        y: "100px",
      },
      {
        y: "0%",
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );
  });

  screenSize.add("(min-width: 1080px) and (max-width: 1439)", () => {
    const cardTop = cards[1].getBoundingClientRect().top * 0.95;
    gsap.fromTo(
      cards[0],
      {
        x: cardTop,
        rotation: () => Math.random() * 4 + 7,
      },
      {
        x: "0%",
        rotation: 0,
        duration: 0.3,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      cards[2],
      {
        x: cardTop * -1,
        rotation: () => Math.random() * 4 - 7,
      },
      {
        x: "0%",
        rotation: 0,
        duration: 0.3,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      cardBox,
      {
        y: "0%",
      },
      {
        y: "25%",
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      projectDetails,
      { y: "-110vh", opacity: 0 },
      {
        y: "0%",
        opacity: 1,
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      videoContainer,
      { width: "100%", height: "300px" },
      {
        width: "100%",
        height: "90vh",
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          trigger: stacks,
          start: "top 30%",
          end: "top 50%",
          toggleActions: "play none reverse none",
          markers: false,
        },
      }
    );
    gsap.fromTo(
      video,
      { width: "40%", height: "300px" },
      {
        width: "100%",
        height: "80vh",
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          trigger: stacks,
          start: "top 30%",
          end: "top 50%",
          toggleActions: "play none reverse none",
          markers: false,
        },
      }
    );
  });

  screenSize.add("(min-width: 1440px)", () => {
    const cardTop = cards[1].getBoundingClientRect().top * 0.95;
    gsap.fromTo(
      cards[0],
      {
        x: cardTop,
        rotation: () => Math.random() * 4 + 7,
      },
      {
        x: "0%",
        rotation: 0,
        duration: 0.3,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      cards[2],
      {
        x: cardTop * -1,
        rotation: () => Math.random() * 4 - 7,
      },
      {
        x: "0%",
        rotation: 0,
        duration: 0.3,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      cardBox,
      {
        y: "0%",
      },
      {
        y: "25%",
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      projectDetails,
      { y: "-110vh", opacity: 0 },
      {
        y: "0%",
        opacity: 1,
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.fromTo(
      videoContainer,
      { width: "100%", height: "300px" },
      {
        width: "100%",
        height: "80vh",
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          trigger: stacks,
          start: "top 30%",
          end: "top 50%",
          toggleActions: "play none reverse none",
          markers: false,
        },
      }
    );
    gsap.fromTo(
      video,
      { width: "40%", height: "300px" },
      {
        width: "100%",
        height: "80vh",
        duration: 0.5,
        ease: "power2.inOut",
        scrollTrigger: {
          trigger: stacks,
          start: "top 30%",
          end: "top 50%",
          toggleActions: "play none reverse none",
          markers: false,
        },
      }
    );

    // gsap.fromTo(
    //   testimonial,
    //   { y: "600px" },
    //   {
    //     y: "72px",
    //     duration: 0.5,
    //     ease: "power2.inOut",
    //     scrollTrigger: {
    //       start: "top 30%",
    //       end: "top 40%",
    //       toggleActions: "play none none reverse",
    //       markers: false,
    //     },
    //   }
    // );
  });

  screenSize.add("(min-width: 1024px)", () => {});

  screenSize.add("(min-width: 768px) and (max-width: 1280px)", () => {});
}
