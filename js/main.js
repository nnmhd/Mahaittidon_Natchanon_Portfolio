(() => {
  gsap.registerPlugin(ScrollTrigger);
  gsap.registerPlugin(ScrollToPlugin);

  document.querySelector("#header__logo").addEventListener("click", () => {
    window.location.href = "index.php";
  });

  const cards = document.querySelectorAll(".hero__card");
  const cardBox = document.querySelector("#hero__card-deck");

  function updateWidth() {
    const width = window.innerWidth;
    console.log(width);
    document.querySelector("#widthbox").textContent = width;
  }

  updateWidth();

  window.addEventListener("resize", updateWidth);

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

  // To Chat
  const chat = document.querySelector("#chat-box");
  const chatboxBtn = document.querySelector("#chatboxBtn");
  const chatboxBtnOpen = document.querySelector("#header__social-link");

  chatboxBtnOpen.addEventListener("click", () => {
    console.log("HEY!");
    chat.classList.toggle("hidden");
  });

  chatboxBtn.addEventListener("click", () => {
    chat.classList.toggle("hidden");
  });

  // Mobile Menu controller
  document
    .querySelector("#header__menu-button")
    .addEventListener("click", () => {
      const menu = document.querySelector("#header__nav");
      if (menu.classList.contains("hide-menu")) {
        menu.classList.remove("hide-menu");
        menu.classList.add("show-menu");
      } else {
        menu.classList.add("hide-menu");
        menu.classList.remove("show-menu");
      }
    });

  // Hero Section; show project detail when click cards

  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  namecards = document.querySelectorAll(".hero__card");
  namecards.forEach((e) => {
    e.addEventListener("click", () => {
      console.log("Hi!");
      projectDetails.classList.remove("hidden");
    });
  });

  const lightboxController = document.querySelector(
    "#project-details__lightbox-controller"
  );

  if (lightboxController) {
    lightboxController.addEventListener("click", () => {
      projectDetails.classList.add("hidden");
    });
  }

  // Edge
})();
