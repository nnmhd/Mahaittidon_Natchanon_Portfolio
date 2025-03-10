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

textHeader();
setupFileValidation();
openMenu();
projectDetail();
updateEventListeners();
detailLightBoxControl();
projectLightbox();
chatBox();
header();
formValidation();

if (window.location.pathname.endsWith("index.php")) {
  textHeader();
  runGSAP();
  setupFileValidation();
  projectDetail();
  updateEventListeners();
  detailLightBoxControl();
  projectLightbox();
  chatBox();
  header();
  formValidation();
}

if (window.location.pathname.endsWith("work.php")) {
  textHeader();
  openMenu();
  projectDetail();
  updateEventListeners();
  detailLightBoxControl();
  projectLightbox();
  chatBox();
  header();
  formValidation();
}

if (window.location.pathname.endsWith("project.php")) {
  textHeader();
  projectDetail();
  updateEventListeners();
  detailLightBoxControl();
  projectLightbox();
  chatBox();
  header();
}
