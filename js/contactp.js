import { projectDetail } from "./projectDetail.js";
import { chatBox } from "./chatBox.js";
import { header } from "./ui.js";
import { formValidation } from "./form.js";
import { textHeader } from "./text.js";
import { openMenu } from "./menu.js";
import { projectLightbox } from "./showDetails.js";
import { revealText } from "./revealText.js";

header();
revealText();
formValidation();
textHeader();
openMenu();
projectDetail();
projectLightbox();
chatBox();
