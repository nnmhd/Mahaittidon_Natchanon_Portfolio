<?php
require_once('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer
      src="https://kit.fontawesome.com/97e2f7a12f.js"
      crossorigin="anonymous"></script>
      <!-- <script defer type="module" src="js/main.js"></script> -->
      <script type="module" src="js/contactp.js"></script>
    <link rel="stylesheet" href="css/main.css" />
    <title>Hi! I'm Nate, This Is Me In Nutshell! 👋</title>
  </head>
  <body>
    <h1 class="hidden">
      Hello everyone! Welcome to Nate's Space, Portfolio of Design and Code.,
      And This Is 'About' Page That You Can Find a Little Some Big Things About
      Me!
    </h1>
    <div id="header-wrapper">
      <h2 class="hidden">Welcome to Nate's Portfolio - Web Development and Design Projects</h2>
      <header id="header">
        <div id="header__container" class="grid-con">
            <div
            id="header__logo"
            class="col-span-1 s-col-span-1 t-col-span-1 l-col-span-2 xl-col-span-2">
            <a href="index.php">
              <img
              src="images/nate-logo_rv.png"
              alt="Nate Logo"
              id="header__nate-logo">
            </a>
            </div>
          <div id="header__bio-text" class="col-span-3 s-col-span-2 t-col-span-2 l-col-span-4 xl-col-span-4"></div>
          <nav id="header__nav" class="col-span-full s-col-span-2 t-col-span-2 l-col-span-3 xl-col-span-4">
            <ul>
              <li><a id="portfolio-link" href="works.php">Works</a></li>
              <li><a id="contact-link" href="about.php">Contact</a></li>
            </ul>
          </nav>
          <button id="header__menu-button" class="col-span-1">Menu</button>
          <div id="header__social-link" class="col-span-1 s-col-span-1 t-col-span-1 xl-col-span-1">
            <button id="social-link__btn">
              <object data="images/add-sign.svg" type=""></object>
            </button>
          </div>
          <div id="chat-box" class="col-span-full hidden ">
            <div id="avatar"><img src="images/nate-notion.gif" alt="Nate Avatar"><span></span></div>
            <div id="greeting__sociallinks"><h2>Let's Connect!</h2>
            <p>I'm waiting you somewhere in the world 🌎</p>
            <ul class="social-links">
            <li><a href="https://www.linkedin.com/in/natchanone/"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-square-whatsapp"></i></a></li>
            </ul></div>
            
            
            <section
          id="contact-box__form"
          class="col-span-full ">
          <h2 class="hidden">Connect Nate Easily Here! Let's Make Some Chat</h2>
          <form id="contact-form" method="post" action="includes/sendmail.php">
          <input
            id="contact-message"
            name="message"
            type="text"
            placeholder="Or write your message here."
            required />
          <input
            id="contact-email"
            name="email"
            type="email"
            placeholder="your@email"
            required />
          <button id="contact-submit" type="submit">Send</button>
          <div id="feedBackBox"></div>
          </form>
        </section>
            <i id="chatboxBtn" class="fa-thin fa-x"></i>
          </div>
        </div>
      </header>
    </div>

    <div id="about-nate-wrapper">
      <h2 class="hidden">Nate's card</h2>
      <div id="about-nate__container" class="grid-con">
        <section id="about-nate__details" class="col-span-full">
          <div id="about-nate__card">
            <div id="about-nate__avatar">
              <img src="images/nateprofile.png" alt="Nate" />
            </div>
            <div id="about-nate__tag">
              <h2>Nate Mahaittidon</h2>
              <h3>UI Designer &amp; Frontend</h3>
            </div>
            <ul>
                <li><a id="downloadCV" href="NateCV.pdf" download="file/NateCV.pdf">💼 CV</a></li>
                <li><a href="resume.pdf" target="_blank">🔖 Resume</a></li>
            </ul>
          </div>
        </section>

        <div id="nate-image">
          <img src="images/nate-image.gif" alt="Nate Images in GIF">
        </div>
        <div
          id="about-nate__text"
          class="col-span-full">
          <p class="reveal-text">
          Hey, I'm Nate! 👋 A Thai-born 🇹🇭, Ontario-based Frontend Developer who spent 17 years as a Creative Director and Editor in Thailand. I'm all about communication design, love building cool and useful things, and enjoy problem-solving with a great team. ¶ After two years of reskilling from scratch, I'm now stepping into the world of web development! super excited to blend my years of creative experience with this new adventure in code! With a strong foundation in UI/UX design, I bridge the gap between design and development, crafting seamless, user-friendly experiences from concept to code. I work with HTML <i class="fa-brands fa-html5"></i>, CSS <i class="fa-brands fa-css3-alt"></i> (Sass, Tailwind), JavaScript <i class="fa-brands fa-js"></i>, and animation tools like GSAP to bring designs to life. My workflow is powered by Figma <i class="fa-brands fa-figma"></i>, Adobe Creative Suite, and Blender for prototyping and visuals, while Git, GitHub <i class="fa-brands fa-github"></i>, and Webflow help me keep everything smooth and collaborative. ¶ When I'm not designing or coding, I'm a full-time dad to my 8-year-old son, Chim—my Fortnite teammate and my little sidekick in life. I also happen to be the starting player when it comes to cleaning the house.
          Let's chat about design, web development, cool projects, Fortnite, or even the best vacuum cleaner on the market! 🚀
          </p>
          </section>
        </div>

    <div id="contact-box-wrapper" class="col-span-full">
      <div id="contact-box__container" class="">
        <section
          id="contact-box__form"
          class="col-span-full ">
          <h2 class="hidden">Connect Nate Easily Here! Let's Make Some Chat</h2>
          <form id="contact-form" method="post" action="includes/sendmail.php">
          <input
            id="contact-message"
            name="message"
            type="text"
            placeholder="tell me a little about the project."
            required />
          <input
            id="contact-email"
            name="email"
            type="email"
            placeholder="your@email"
            required />
          <button id="contact-submit" type="submit">Send</button>
          <div id="feedBackBox"></div>
          </form>
        </section>
      </div>
    </div>
    </div>
    </div>

    <div id="footer-wrapper" class="">
      <h2 class="hidden">The Nate's Portfolio Footer</h2>
      <footer id="footer__container" class="">
        <div
          id="footer"></div>
          <div id="footer__contact__info">
          </div>
      </footer>
    </div>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollToPlugin.min.js"></script>
<script src="https://unpkg.com/split-type@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
  </body>
</html>
