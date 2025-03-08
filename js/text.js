export function textHeader() {
  const bioText = `Nate is a UI designer &amp; frontend developer w/ a background in creative direction, based in London, Ontario.`;
  const footerText = `<p>Nate Mahaittidon</p> <p>&copy;2025</p>`;
  document.querySelector("#header__bio-text").innerHTML = bioText;
  document.querySelector("#footer").innerHTML = footerText;

  const stackTextWider = `<p>Stacks <span>Code</span> React / Git / JavaScript / mySQL / MongoDB / HTML / CSS<br /> <span>Design </span> Cinema 4D / After Effect / Premier Pro / Figma / Illustrator / PS </p>`;
  const stackTextMobile = `<p>Stacks <br /><span>Code</span> React / Git / JavaScript / mySQL / MongoDB / HTML / CSS<br /> <span>Design </span> Cinema 4D / After Effect / Premier Pro / Figma / Illustrator / PS </p>`;

  const stacksElement = document.querySelector("#stacks");

  if (stacksElement) {
    if (window.innerWidth > 480) {
      stacksElement.innerHTML = stackTextWider;
    } else {
      stacksElement.innerHTML = stackTextMobile;
    }
  }
}
