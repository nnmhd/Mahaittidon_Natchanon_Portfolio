export function formValidation() {
  const form = document.querySelector("#contact-form");
  const feedBack = document.querySelector("#feedback");
  function regForm(event) {
    event.preventDefault();

    const formData = new FormData(form);

    fetch("includes/sendmail.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((responseData) => {
        feedBack.innerHTML = "";

        if (responseData.errors) {
          Object.keys(responseData.errors).forEach((key) => {
            const errorElement = document.createElement("p");
            errorElement.textContent = responseData.errors[key];
            feedBack.appendChild(errorElement);
          });
        } else {
          form.reset();
          const successMessage = document.createElement("p");
          successMessage.textContent = responseData.message;
          feedBack.appendChild(successMessage);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        feedBack.innerHTML = "<p>Something went wrong. Please try again.</p>";
      });
  }

  form.addEventListener("submit", regForm);
}
