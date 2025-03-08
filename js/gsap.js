export function runGSAP() {
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
  const cards = document.querySelectorAll(".hero__card");
  const cardBox = document.querySelector("#hero__card-deck");
  const projectDetails = document.querySelector("#hero__project-details");
  const videoContainer = document.querySelector("#showreel__container");
  const video = document.querySelector("#showreel__video-container");
  const stacks = document.querySelector("#stacks");

  gsap.fromTo(
    projectDetails,
    { y: "-100vh" },
    {
      y: "0%",
      duration: 0.5,
      ease: "power2.inOut",
      scrollTrigger: {
        start: "top 30px",
        end: "top 40px",
        toggleActions: "play none none reverse",
        markers: true,
      },
    }
  );

  gsap.fromTo(
    cardBox,
    { height: "0%" },
    {
      height: "90%",
      duration: 0.5,
      ease: "power2.inOut",
      scrollTrigger: {
        start: "top 30px",
        end: "top 40px",
        toggleActions: "play none none reverse",
        markers: true,
      },
    }
  );

  gsap.fromTo(
    videoContainer,
    { width: "100%", height: "250px" },
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
        markers: true,
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
        markers: true,
      },
    }
  );

  const screenSize = gsap.matchMedia();
  screenSize.add("(min-width: 768px)", () => {
    gsap.fromTo(
      cardBox,
      {
        y: ``,
      },
      {
        y: "0%",
        scrollTrigger: {
          start: "10px",
          end: "30px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );
  });
  screenSize.add("(max-width: 540px)", () => {
    gsap.fromTo(
      cardBox,
      {
        y: `"${random}"%`,
      },
      {
        y: "0%",
        scrollTrigger: {
          start: "10px",
          end: "30px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );
  });

  screenSize.add("(min-width: 1024px)", () => {
    // !add animations for each project detail box
    gsap.to(projectDetails, {
      autoAlpha: 1,
      duration: 1.5,
      scrollTrigger: {
        trigger: projectDetails,
        start: "top 80%",
        toggleActions: "play none none reverse",
      },
    });
    gsap.fromTo(
      cards[0],
      { x: "108%", rotation: 3 },
      {
        x: "0%",
        rotation: 0,
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[1],
      { rotation: 5 },
      {
        rotation: 0,
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[2],
      { x: "-109%" },
      {
        x: "0%",
        duration: 0.35,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[3],
      { x: "105%", y: "-115%" },
      {
        x: "0%",
        y: "0%",
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[4],
      { y: "-115%" },
      {
        y: "0%",
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[5],
      { x: "-105%", y: "-115%" },
      {
        x: "0%",
        y: "0%",
        duration: 0.35,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );
  });

  screenSize.add("(min-width: 768px) and (max-width: 1280px)", () => {
    gsap.fromTo(
      cards[0],
      { x: "50%", rotation: 3 },
      {
        x: "0%",
        rotation: 0,
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[1],
      { x: "-60%" },
      {
        x: "0%",
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[2],
      { x: "50%", y: "-120%", rotation: 3 },
      {
        x: "0%",
        y: "0%",
        rotation: 0,
        duration: 0.35,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[3],
      { x: "-60%", y: "-120%" },
      {
        x: "0%",
        y: "0%",
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[4],
      { x: "50%", y: "-230%" },
      {
        x: "0%",
        y: "0%",
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[5],
      { x: "-60%", y: "-230%" },
      {
        x: "0%",
        y: "0%",
        duration: 0.35,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );
  });

  screenSize.add("(max-width: 540px)", () => {
    gsap.fromTo(
      cards[1],
      { y: "-112.5%", rotation: 3 },
      {
        y: "0%",
        rotation: 0,
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[2],
      { y: "-225%" },
      {
        y: "0%",
        duration: 0.35,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[3],
      { y: "-335%" },
      {
        y: "0%",
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[4],
      { y: "-445%" },
      {
        y: "0%",
        duration: 0.3,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );

    gsap.fromTo(
      cards[5],
      { y: "-560%" },
      {
        y: "0%",
        duration: 0.35,
        scrollTrigger: {
          start: "10px",
          end: "50px",
          scrub: false,
          toggleActions: "play none none reverse",
        },
      }
    );
  });
}
