export function formValidation() {
  const forms = document.querySelectorAll("#contact-form");
  const feedBack = document.querySelector("#feedBackBox");

  forms.forEach((form) => {
    function regForm(event) {
      event.preventDefault();

      const formData = new FormData(form);

      fetch("includes/sendmail.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.text())
        .then((responseText) => {
          const responseData = JSON.parse(responseText);

          feedBack.innerHTML = "";
          feedBack.style.display = "block";

          if (responseData.errors) {
            Object.keys(responseData.errors).forEach((key) => {
              const errorElement = document.createElement("p");
              errorElement.innerText = responseData.errors[key];
              feedBack.appendChild(errorElement);
            });
          } else {
            form.reset();
            const successMessage = document.createElement("p");
            successMessage.innerText = responseData.message;
            feedBack.appendChild(successMessage);
          }
        })
        .catch((error) => {
          console.error("Fetch Error:", error);
          feedBack.innerHTML = "<p>Something went wrong. Please try again.</p>";
        });
    }
    form.addEventListener("submit", regForm);
  });
}
