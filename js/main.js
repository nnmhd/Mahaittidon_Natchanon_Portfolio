import { setupFileValidation } from "./fileValidation.js";
import { projectDetail } from "./projectDetail.js";
import { updateEventListeners, detailLightBoxControl } from "./showDetails.js";
import { chatBox } from "./chatBox.js";
import { header } from "./ui.js";
import { formValidation } from "./form.js";
import { runGSAP } from "./gsap.js";
import { revealText } from "./revealText.js";
import { textHeader } from "./text.js";
import { openMenu } from "./menu.js";
import { projectLightbox } from "./showDetails.js";
import { testimonialLoop } from "./testimonialLoop.js";
import { construction } from "./construction.js";

header();
formValidation();
textHeader();
openMenu();
projectDetail();
projectLightbox();
chatBox();

if (window.location.pathname.endsWith("index.php")) {
  testimonialLoop();
  runGSAP();
}

if (window.location.pathname.endsWith("work.php")) {
}

if (window.location.pathname.endsWith("project.php")) {
}

if (window.location.pathname.endsWith("about.php")) {
  // construction();
  revealText();
}

if (window.location.pathname.endsWith("edit.php")) {
}

if (
  window.location.pathname.endsWith("update.php") ||
  window.location.pathname.endsWith("new.php") ||
  window.location.pathname.endsWith("edit.php") ||
  window.location.pathname.endsWith("login.php")
) {
  updateEventListeners();
  detailLightBoxControl();
  setupFileValidation();
}
