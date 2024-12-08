(() => {
  gsap.registerPlugin(ScrollTrigger);
  gsap.registerPlugin(ScrollToPlugin);

  const cards = document.querySelectorAll(".hero__card");
  const cardBox = document.querySelector("#hero__card-deck");

  // !GSAP of Box and Cards
  const screenSize = gsap.matchMedia();
  screenSize.add("(min-width: 768px)", () => {
    gsap.fromTo(
      cardBox,
      {
        y: "20%",
      },
      {
        y: "0%",
        scrollTrigger: {
          start: "10px",
          end: "30px",
          scrub: false,
          markers: true,
        },
      }
    );
  });
  screenSize.add("(max-width: 540px)", () => {
    gsap.fromTo(
      cardBox,
      {
        y: "10%",
      },
      {
        y: "0%",
        scrollTrigger: {
          start: "10px",
          end: "30px",
          scrub: false,
          markers: true,
        },
      }
    );
  });

  // !GSAP Cards
  screenSize.add("(min-width: 1440px)", () => {
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
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
          markers: true,
        },
      }
    );
  });
})();
