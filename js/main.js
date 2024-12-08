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

      const projectClients = document.querySelector("#project-details__client");
      const projectThumbnail = document.querySelector("#project-details__desc");
      heroDeck.forEach((card, index) => {
        card.addEventListener("mouseover", () => {
          // create box with ID
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

  // To Chat
  const chat = document.querySelector("#chat-box");
  const chatAbPg = document.querySelector("#chat__container");
  const chatboxBtn = document.querySelector("#chatboxBtn");
  const chatboxBtnOpen = document.querySelector("#header__social-link");

  chatboxBtnOpen.addEventListener("click", () => {
    chat.classList.toggle("hidden");
  });

  chatAbPg.addEventListener("click", () => {
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
    if (window.innerWidth > 1024) {
      e.addEventListener("mouseover", () => {
        projectDetails.classList.remove("hidden");
      });

      e.addEventListener("mouseleave", () => {
        projectDetails.classList.add("hidden");
      });
    } else {
      e.addEventListener("click", () => {
        event.preventDefault();
        projectDetails.classList.remove("hidden");
      });
    }
  });

  const lightboxController = document.querySelector(
    "#project-details__lightbox-controller"
  );

  if (lightboxController) {
    lightboxController.addEventListener("click", () => {
      projectDetails.classList.add("hidden");
    });
  }
})();
