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

  document.addEventListener("click", (event) => {
    const isClickInsideChat = chat.contains(event.target);
    const isClickOnToggleBtn = chatBtnOpen.contains(event.target);
    if (
      !chat.classList.contains("hidden") &&
      !isClickInsideChat &&
      !isClickOnToggleBtn
    ) {
      chat.classList.add("hidden");
    }
  });

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100 && !chat.classList.contains("hidden")) {
      chat.classList.add("hidden");
    }
  });
}
