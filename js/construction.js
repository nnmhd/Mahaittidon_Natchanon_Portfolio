export function construction() {
  console.log("Construction mode activated.");
  const div = document.createElement("div");
  div.id = "construction";
  div.style.position = "absolute";
  div.style.top = "0";
  div.style.left = "0";
  div.style.width = "100vw";
  div.style.height = "100vh";
  div.style.zIndex = "9999";

  const textDiv = document.createElement("div");
  textDiv.id = "underconstruction";
  textDiv.innerText = "This site is under construction.";
  textDiv.style.position = "absolute";
  textDiv.style.color = "black";
  textDiv.style.fontFamily = "Arial, sans-serif";

  div.appendChild(textDiv);
  document.body.appendChild(div);

  document.body.style.overflow = "hidden";
  document.body.style.pointerEvents = "none";
  document.body.style.userSelect = "none";
}
