function MouseOver() {
  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  const namecards = document.querySelectorAll(".hero__card");
}

export function updateEventListeners() {
  const namecards = document.querySelectorAll(".hero__card");
  if (window.innerWidth >= 1024) {
    namecards.forEach((e) => {
      e.addEventListener("mouseover", MouseOver);
    });
  }
}

window.addEventListener("resize", () => {
  updateEventListeners();
  let hasReloaded = false;

  if (!hasReloaded) {
    const reloadBreakpoints = [1024, 1440, 768, 440];
    if (reloadBreakpoints.includes(window.innerWidth)) {
      location.reload();
      hasReloaded = true;

      setTimeout(() => {
        hasReloaded = false;
      }, 1000);
    }
  }
});

export function detailLightBoxControl() {
  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  const lightboxController = document.querySelector(
    "#project-details__lightbox-controller"
  );

  if (lightboxController) {
    lightboxController.addEventListener("click", () => {
      projectDetails.style.transform = "translateY(-150vh)";
      projectDetails.style.opacity = "0";
    });
  }
}

export function projectLightbox() {
  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  const namecards = document.querySelectorAll(".card-deck__position img");

  if (window.innerWidth <= 1079) {
    namecards.forEach((card) => {
      card.addEventListener("click", (event) => {
        event.preventDefault();
        projectDetails.style.transform = "translateY(-100px)";
        projectDetails.style.opacity = "1";
      });
    });
  }
}
