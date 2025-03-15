import { projectDetail } from "./projectDetail.js";
import { chatBox } from "./chatBox.js";
import { header } from "./ui.js";
import { formValidation } from "./form.js";
import { runGSAP } from "./gsap.js";
import { textHeader } from "./text.js";
import { openMenu } from "./menu.js";
import {
  projectLightbox,
  updateEventListeners,
  detailLightBoxControl,
} from "./showDetails.js";
import { testimonialLoop } from "./testimonialLoop.js";
import { construction } from "./construction.js";

header();
formValidation();
textHeader();
openMenu();
projectDetail();
projectLightbox();
detailLightBoxControl();
updateEventListeners();
chatBox();
testimonialLoop();
runGSAP();
