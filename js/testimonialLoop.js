export function testimonialLoop() {
  let currentIndex = 0;
  const testimonialImg = document.getElementById("testimonial-img");
  const companyImg = document.getElementById("testimonial-company-img");
  const testimonialText = document.getElementById("testimonial-text");
  const testimonialName = document.getElementById("testimonial-name");
  const testimonialCard = document.querySelector(".testimonial__card");

  function updateTestimonial() {
    testimonialCard.classList.add("fade-out");

    setTimeout(() => {
      const testimonial = testimonials[currentIndex];

      testimonialImg.src = testimonial.img;
      companyImg.src = testimonial.companyImg;
      testimonialText.textContent = testimonial.text;
      testimonialName.textContent = testimonial.name;

      currentIndex = (currentIndex + 1) % testimonials.length;
      testimonialCard.classList.remove("fade-out");
      testimonialCard.classList.add("fade-in");

      setTimeout(() => {
        testimonialCard.classList.remove("fade-in");
      }, 500);
    }, 500);
  }

  updateTestimonial();
  setInterval(updateTestimonial, 3000);
}
