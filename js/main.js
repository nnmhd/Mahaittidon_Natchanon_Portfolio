import { setupFileValidation } from "./fileValidation.js";
import { projectDetail } from "./projectDetail.js";
import { updateEventListeners, detailLightBoxControl } from "./showDetails.js";
import { chatBox } from "./chatBox.js";
import { header } from "./ui.js";
import { formValidation } from "./form.js";
import { runGSAP } from "./gsap.js";
import { textHeader } from "./text.js";

textHeader();
runGSAP();
setupFileValidation();
projectDetail();
updateEventListeners();
detailLightBoxControl();
chatBox();
header();
formValidation();
