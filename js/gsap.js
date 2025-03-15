export function runGSAP() {
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

  const cards = document.querySelectorAll(".hero__card");
  const cardBox = document.querySelector("#hero__card-deck");
  const heroWrapper = document.querySelector("#hero-wrapper");
  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  const heroCon = document.querySelector("#hero__container");
  const videoContainer = document.querySelector("#showreel__container");
  const video = document.querySelector("#showreel__video-container");
  const Avideo = document.querySelector("#showreel__video-container video");
  const screenSize = gsap.matchMedia();
  const boxRect = cardBox.getBoundingClientRect();
  const cardRect = cardBox.getBoundingClientRect();
  const centerX = boxRect.left + boxRect.width / 2 - cardRect.width / 2;
  const centerY = boxRect.top + boxRect.height / 2.5 - cardRect.height / 2;

  // !440 ~ 1079px
  screenSize.add("(min-width: 400px) and (max-width: 767px)", () => {
    const cardHeight = cards[0].offsetHeight;
    const gap = 24;

    gsap.set(cards, {
      position: "absolute",
      y: centerY,
    });

    gsap.fromTo(
      cards,
      {
        rotation: (i) => gsap.utils.random(-5, 5, 1),
      },
      {
        rotation: 0,
        duration: 0.5,
        ease: "power3.out",
        stagger: 0.05,
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );
    gsap.to(cards, {
      y: (i) => `${i * (cardHeight + gap)}px`,
      duration: 0.5,
      ease: "power3.out",
      stagger: 0.05,
      scrollTrigger: {
        start: "top 30px",
        end: "top 40px",
        toggleActions: "play none none reverse",
        markers: false,
      },
    });

    gsap.fromTo(
      cardBox,
      {
        height: "700px",
      },
      {
        height: "auto",
        duration: 0.1,
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
      heroWrapper,
      {
        height: "800px",
      },
      {
        height: "auto",
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
      heroCon,
      {
        height: "900px",
      },
      {
        height: cardHeight * 6 + gap * 6,
        duration: 1,
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

  // !768 ~ 1079px
  screenSize.add("(min-width: 768px) and (max-width: 1079px)", () => {
    const cardWidth = cards[0].offsetWidth;
    const cardHeight = cards[0].offsetHeight;
    const gap = 10;

    gsap.set(cards, {
      xPercent: -50,
      yPercent: -50,
      left: "50%",
      top: "50%",
      position: "absolute",
      rotation: (i) => gsap.utils.random(-5, 5, 1),
    });

    gsap.to(cards, {
      x: (i) => (i % 2 === 0 ? -cardWidth / 2 - gap : cardWidth / 2 + gap),
      y: (i) => Math.floor(i / 2) * (cardHeight + gap + 10) - 200,
      rotation: 0,
      duration: 0.5,
      ease: "power3.out",
      stagger: 0.05,
      scrollTrigger: {
        start: "top 30px",
        end: "top 40px",
        toggleActions: "play none none reverse",
        markers: false,
      },
    });

    gsap.fromTo(
      cardBox,
      {
        height: "400px",
      },
      {
        height: "700px",
        duration: 0.2,
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
      heroWrapper,
      {
        height: "500px",
      },
      {
        height: "700px",
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
      heroCon,
      {
        height: "400px",
      },
      {
        height: "700px",
        duration: 1,
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
  // !1080 ~ 1439px

  screenSize.add("(min-width: 1080px) and (max-width: 1439px)", () => {
    const cardWidth = cards[0].offsetWidth;
    const cardHeight = cards[0].offsetHeight;
    const gap = 24;

    gsap.set(cards, {
      xPercent: -50,
      yPercent: -50,
      left: "50%",
      top: "50%",
      position: "absolute",
      rotation: (i) => gsap.utils.random(-5, 5, 1),
    });

    gsap.to(cards, {
      x: (i) => (i % 3) * (cardWidth + gap) - (cardWidth + gap) * 1,
      y: (i) =>
        Math.floor(i / 3) * (cardHeight + gap) - (cardHeight + gap) * 0.5,
      rotation: 0,
      duration: 0.5,
      ease: "power3.out",
      stagger: 0.05,
      scrollTrigger: {
        start: "top 30px",
        end: "top 40px",
        toggleActions: "play none none reverse",
        markers: false,
      },
    });

    gsap.fromTo(
      cardBox,
      {
        height: "700px",
        y: "0%",
      },
      {
        height: "500px",
        y: "250px",
        duration: 0.4,
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
      heroWrapper,
      {
        height: "700px",
      },
      {
        height: "700px",
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
      heroCon,
      {
        height: "700px",
      },
      {
        height: "700px",
        duration: 1,
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
      { y: "-120vh", opacity: 0 },
      {
        y: "-10%",
        opacity: 1,
        duration: 0.7,
        ease: "power2.inOut",
        scrollTrigger: {
          start: "top 30px",
          end: "top 40px",
          toggleActions: "play none none reverse",
          markers: false,
        },
      }
    );

    gsap.to(videoContainer, {
      width: "100vw",
      height: "100vh",
      padding: "0",
      duration: 0.5,
      ease: "power2.inOut",
      scrollTrigger: {
        trigger: heroCon,
        start: "300px",
        end: "320px",
        toggleActions: "play none none reverse",
        markers: false,
      },
    });
  });

  gsap.to(video, {
    width: "100vw",
    height: "100%",
    padding: "0",
    borderRadius: "0",
    duration: 0.5,
    ease: "power2.inOut",
    scrollTrigger: {
      trigger: heroCon,
      start: "300px",
      end: "320px",
      toggleActions: "play none none reverse",
      markers: false,
    },
  });

  gsap.to(Avideo, {
    borderRadius: "0",
    duration: 0.5,
    ease: "power2.inOut",
    scrollTrigger: {
      trigger: heroCon,
      start: "300px",
      end: "320px",
      toggleActions: "play none none reverse",
      markers: false,
    },
  });

  // !1440px ~

  screenSize.add("(min-width: 1440px)", () => {
    const cardWidth = cards[0].offsetWidth;
    const cardHeight = cards[0].offsetHeight;
    const gap = 48;

    gsap.set(cards, {
      xPercent: -50,
      yPercent: -50,
      left: "50%",
      top: "50%",
      position: "absolute",
      rotation: (i) => gsap.utils.random(-5, 5, 1),
    });

    gsap.to(cards, {
      x: (i) => (i % 3) * (cardWidth + gap + 60) - (cardWidth + gap + 60) * 1,
      y: (i) =>
        Math.floor(i / 3) * (cardHeight + gap + 20) -
        (cardHeight + gap + 20) * 0.5,
      rotation: 0,
      duration: 0.5,
      ease: "power3.out",
      stagger: 0.05,
      scrollTrigger: {
        start: "top 30px",
        end: "top 40px",
        toggleActions: "play none none reverse",
        markers: false,
      },
    });

    gsap.fromTo(
      cardBox,
      {
        height: "700px",
        y: "0%",
      },
      {
        height: "500px",
        y: "250px",
        duration: 0.4,
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
      heroWrapper,
      {
        height: "700px",
      },
      {
        height: "700px",
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
      heroCon,
      {
        height: "700px",
      },
      {
        height: "700px",
        duration: 1,
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
      { y: "-120vh", opacity: 0 },
      {
        y: "-10%",
        opacity: 1,
        duration: 0.7,
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

  screenSize.add("(min-width: 1024px)", () => {});

  screenSize.add("(min-width: 768px) and (max-width: 1280px)", () => {});
}
