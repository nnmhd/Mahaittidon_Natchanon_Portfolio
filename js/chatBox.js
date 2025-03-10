export function chatBox() {
  const chat = document.querySelector("#chat-box");
  const chatBtn = document.querySelector("#chatboxBtn");
  const chatBtnOpen = document.querySelector("#header__social-link");

  chatBtnOpen.addEventListener("click", () => {
    chat.classList.toggle("hidden");
  });

  chatBtn.addEventListener("click", () => {
    chat.classList.toggle("hidden");
  });
}
