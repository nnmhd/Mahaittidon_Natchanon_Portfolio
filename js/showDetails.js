function MouseOver() {
  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  projectDetails.classList.remove("hidden");
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
      projectDetails.classList.add("hidden");
    });
  }
}
