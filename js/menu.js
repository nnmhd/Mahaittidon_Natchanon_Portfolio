export function openMenu() {
  const menuBtn = document.querySelector("#header__menu-button");
  const menu = document.querySelector("#header__nav");

  window.addEventListener("resize", () => {
    const menu = document.querySelector("#header__nav");
    if (window.innerWidth <= 768) {
      menu.classList.add("hidden");
    } else if (window.innerWidth >= 768) {
      menu.classList.remove("hidden");
    }
  });

  if (menu) {
    if (window.innerWidth >= 768) {
      menu.classList.remove("hidden");
    } else {
      menu.classList.add("hidden");
    }

    menuBtn.addEventListener("click", () => {
      console.log("Before toggle:", menu.classList);
      menu.classList.toggle("hidden");
      console.log("After toggle:", menu.classList);
    });
  }
}
