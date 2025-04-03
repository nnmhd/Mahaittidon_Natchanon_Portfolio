export function textHeader() {
  const bioText = `Nate, UI Designer <br> &amp; Front-End Developer.`;
  const footerText = `<p>Nate</p> <p>&copy;2025</p>`;
  document.querySelector("#header__bio-text").innerHTML = bioText;
  document.querySelector("#footer").innerHTML = footerText;

  const stackTextWider = `<p>Stacks <span>Code</span> Vue.JS / Git / JavaScript / GSAP / PHP / mySQL / HTML / CSS<br /> <span>Design </span> Figma / Cinema 4D / After Effect / Premier Pro / Illustrator / PS </p>`;
  const stackTextMobile = `<p>Stacks <br /><span>Code</span> Vue.JS / Git / JavaScript / GSAP / PHP / mySQL / HTML / CSS<br /> <span>Design </span> Figma / Cinema 4D / After Effect / Premier Pro / Illustrator / PS </p>`;

  const stacksElement = document.querySelector("#stacks");

  if (stacksElement) {
    if (window.innerWidth > 480) {
      stacksElement.innerHTML = stackTextWider;
    } else {
      stacksElement.innerHTML = stackTextMobile;
    }
  }
}
