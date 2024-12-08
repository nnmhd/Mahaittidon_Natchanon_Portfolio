(() => {
  document.querySelector("#header__logo").addEventListener("click", () => {
    window.location.href = "index.php";
  });

  let projectData = {};
  fetch("includes/getdata.php")
    .then((response) => response.json())
    .then((data) => {
      projectData = data;
      const heroDeck = document.querySelectorAll(".hero__card");

      heroDeck.forEach((card, index) => {
        card.addEventListener("mouseover", () => {
          const projectName = document.querySelector(
            "#project-details__headline"
          );
          projectName.textContent = projectData[index + 1].desc_headline;
          const projectClients = document.querySelector(
            "#project-details__client"
          );
          projectClients.textContent = projectData[index + 1].company_name;
          const projectDesc = document.querySelector("#project-details__desc");
          projectDesc.textContent = projectData[index + 1].desc_brief;
          const projectLink = document.querySelector("#project-link");
          projectLink.href = `project.php?id=${[index + 1]}`;
        });
      });
    });

  const chat = document.querySelector("#chat-box");
  const chatboxBtn = document.querySelector("#chatboxBtn");
  const chatboxBtnOpen = document.querySelector("#header__social-link");

  chatboxBtnOpen.addEventListener("click", () => {
    chat.classList.toggle("hidden");
  });

  chatboxBtn.addEventListener("click", () => {
    chat.classList.toggle("hidden");
  });

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

  const projectDetails = document.querySelector(
    "#hero_project-detail__wrapper"
  );
  const namecards = document.querySelectorAll(".hero__card");

  function MouseOver() {
    projectDetails.classList.remove("hidden");
  }

  function MouseLeave() {
    projectDetails.classList.add("hidden");
  }

  function handleClick(e) {
    e.preventDefault();
    projectDetails.classList.remove("hidden");
  }

  function updateEventListeners() {
    if (window.innerWidth >= 1024) {
      namecards.forEach((e) => {
        e.addEventListener("mouseover", MouseOver);
        e.addEventListener("mouseleave", MouseLeave);
        e.removeEventListener("click", handleClick);
      });
    } else {
      namecards.forEach((e) => {
        e.removeEventListener("mouseover", MouseOver);
        e.removeEventListener("mouseleave", MouseLeave);
        e.addEventListener("click", handleClick);
      });
    }
  }

  updateEventListeners();

  window.addEventListener("resize", updateEventListeners);

  const lightboxController = document.querySelector(
    "#project-details__lightbox-controller"
  );

  if (lightboxController) {
    lightboxController.addEventListener("click", () => {
      projectDetails.classList.add("hidden");
    });
  }
})();
