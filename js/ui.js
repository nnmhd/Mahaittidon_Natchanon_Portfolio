export function header() {
  document.querySelector("#header__logo").addEventListener("click", () => {
    window.location.href = "index.php";
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
}
