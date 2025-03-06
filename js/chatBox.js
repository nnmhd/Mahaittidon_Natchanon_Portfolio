export function chatBox() {
  const chat = document.querySelector("#chat-box");
  const chatboxBtn = document.querySelector("#chatboxBtn");
  const chatboxBtnOpen = document.querySelector("#header__social-link");

  chatboxBtnOpen.addEventListener("click", () => {
    chat.classList.toggle("hidden");
  });

  chatboxBtn.addEventListener("click", () => {
    chat.classList.toggle("hidden");
  });
}
