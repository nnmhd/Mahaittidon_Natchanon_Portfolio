export function setupFileValidation(maxSizeMB = 2) {
  const fileInputs = document.querySelectorAll('input[type="file"]');

  fileInputs.forEach((fileInput) => {
    console.log(fileInput);
  });

  fileInputs.forEach((fileInput) => {
    fileInput.addEventListener("change", (event) => {
      const files = event.target.files;
      if (files.length > 0) {
        const file = files[0];
        if (file.size > maxSizeMB * 1024 * 1024) {
          alert(
            `File is too large. Please select a file smaller than ${maxSizeMB}MB.`
          );
          event.target.value = "";
        }
      }
    });
  });
}
