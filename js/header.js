export function headerScene() {
  const navMenu = document.querySelector("#header__nav");
  if (window.innerWidth < 1080) {
    navMenu.style.display = "none";
  }
}
