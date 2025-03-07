export function projectDetail() {
  let projectData = {};
  fetch("./includes/getdata.php")
    .then((response) => response.json())
    .then((data) => {
      projectData = data;
      console.log(projectData);
      document.querySelectorAll(".hero__card").forEach((card) => {
        card.addEventListener("mouseover", () => {
          const projectId = card.getAttribute("data-id");
          if (projectData[projectId]) {
            const project = projectData[projectId - 1];
            document.querySelector(
              "#project-details__image img"
            ).src = `images/${project.img_thumbnail}`;
            project.img_thumbnail;
            document.querySelector(
              "#project-details__headline"
            ).innerHTML = `${project.desc_headline} <span id="project-details__sub-headline">${project.desc_subhead}</span>`;

            document.querySelector("#project-details__client").textContent =
              project.company_name;
            document.querySelector("#project-details__desc").textContent =
              project.desc_brief;
            document.querySelector(
              "#project-link"
            ).href = `project.php?id=${project.project_id}`;
          }
        });
      });
    });
}
