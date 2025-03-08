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
      <script defer type="module" src="js/main.js"></script>
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
      <h2 class="hidden">Nate's Portfolio Header Section</h2>
      <header id="header">
        <div id="header__container" class="grid-con">
          <div
            id="header__logo"
            class="col-span-1 t-col-span-4 l-col-span-2 xl-col-span-2">
            <a href="index.php">
              <img
              src="images/Nate-logo.svg"
              alt="Nate Logo"
              id="header__nate-logo">
            </a>
            </div>
          <div
            id="header__bio-text"
            class="col-span-3 t-col-span-3 l-col-span-3 xl-col-span-4"></div>
          <nav
            id="header__nav"
            class="col-span-full t-col-span-3 l-col-span-4 xl-col-span-4">
            <ul>
              <li><a id="portfolio-link" href="works.php">Works</a></li>
              <li><a id="contact-link" href="about.php">Contact</a></li>
            </ul>
          </nav>
          <button id="header__menu-button" class="col-span-1">Menu</button>
          <div id="header__social-link" class="col-span-1 t-col-span-1">
            <button id="social-link__btn">
              <object data="images/add-sign.svg" type=""></object>
            </button>
          </div>
          <div id="chat-box" class="col-span-full hidden">
            <h2>Let's Connect!</h2>
            <p>I'm waiting you somewhere in the world 🌎</p>
            <ul>
              <li>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-square-behance"></i></a>
              </li>
            </ul>
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
              <img src="images/nate-profilepic.jpeg" alt="" />
            </div>
            <div id="about-nate__tag">
              <h2>Nate Mahaittidon</h2>
              <h3>UI Designer &amp; Frontend</h3>
            </div>
          </div>
        </section>

        <div
          id="about-nate__text"
          class="col-span-full t-col-span-6 l-col-span-6 xl-col-span-4">
          <p>
            Hello, I'm Nate, Thai-born and Ontario-based. I'm a designer and
            developer who was a Creative Director and Editor in Thailand for 20
            years. Coffee-addicted. <br /><br />

            Currently, besides enjoying designing with code, I'm also the
            full-time daddy of my 8-year-old son, Chim, my Fortnite teammate.
            I'm still the professional house cleaner for my family. <br /><br />

            We can chat about design, website development, cool projects,
            Fortnite, or which is the best vacuum machine!
          </p>
        </div>
      </div>
      <p>Or</p>

      <div id="contact-box-wrapper">
      <div id="contact-box__container" class="grid-con">
        <section
          id="contact-box__form"
          class="col-span-full t-col-span-6 l-col-span-6 xl-col-span-6">
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
          </form>
          <div id="feedback"><p></p></div>
        </section>

      </div>
    </div>

    <div id="footer-wrapper">
      <h2 class="hidden">The Nate's Portfolio Footer</h2>
      <footer id="footer__container" class="full-width">
        <div
          id="footer"
          class="col-span-full t-col-span-5 l-col-span-4 xl-col-span-4"></div>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollToPlugin.min.js"></script>
  </body>
</html>
