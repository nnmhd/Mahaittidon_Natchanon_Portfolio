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

window.addEventListener("resize", updateEventListeners);

export function detailLightBoxControl() {
  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  const lightboxController = document.querySelector(
    "#project-details__lightbox-controller"
  );

  if (lightboxController) {
    lightboxController.addEventListener("click", () => {
      console.log("clicked");
      projectDetails.style.transform = "translateY(-150vh)";
      projectDetails.style.opacity = "0";
    });
  }
}

export function projectLightbox() {
  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  const namecards = document.querySelectorAll(".hero__card");

  if (window.innerWidth <= 1079) {
    namecards.forEach((e) => {
      e.addEventListener("click", () => {
        event.preventDefault();
        projectDetails.style.transform = "translateY(0)";
        projectDetails.style.opacity = "1";
      });
    });
  }
}
