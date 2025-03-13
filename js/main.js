import { setupFileValidation } from "./fileValidation.js";
import { projectDetail } from "./projectDetail.js";
import { updateEventListeners, detailLightBoxControl } from "./showDetails.js";
import { chatBox } from "./chatBox.js";
import { header } from "./ui.js";
import { formValidation } from "./form.js";
import { runGSAP } from "./gsap.js";
import { textHeader } from "./text.js";
import { openMenu } from "./menu.js";
import { projectLightbox } from "./showDetails.js";
import { testimonialLoop } from "./testimonialLoop.js";
import { construction } from "./contruction.js";

// construction();
textHeader();
setupFileValidation();
openMenu();
projectDetail();
updateEventListeners();
detailLightBoxControl();
projectLightbox();
chatBox();
header();

if (window.location.pathname.endsWith("index.php")) {
  runGSAP();
  projectLightbox();
  header();
  formValidation();
  testimonialLoop();
}

if (window.location.pathname.endsWith("work.php")) {
  projectLightbox();
  header();
  formValidation();
}

if (window.location.pathname.endsWith("project.php")) {
  projectLightbox();
  header();
}
