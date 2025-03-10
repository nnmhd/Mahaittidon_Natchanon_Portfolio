export function header() {
  document.querySelector("#header__logo").addEventListener("click", () => {
    window.location.href = "index.php";
  });
}
