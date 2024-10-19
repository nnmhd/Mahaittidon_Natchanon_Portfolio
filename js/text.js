(() => {
  bioText = `Nate is a UI designer &amp; frontend developer w/ a background in creative direction, based in London, Ontario.`;
  footerText = `<p>Nate Mahaittidon</p> <p>&copy;2024</p>`;
  document.querySelector("#header__bio-text").innerHTML = bioText;
  document.querySelector("#footer").innerHTML = footerText;
})();
