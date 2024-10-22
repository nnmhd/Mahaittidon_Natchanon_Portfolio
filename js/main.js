(() => {
  document.querySelector("#header__logo").addEventListener("click", () => {
    window.location.href = "index.html";
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
