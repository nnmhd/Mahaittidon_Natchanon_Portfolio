<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');
$query = "SELECT p.project_id, c.company_name, p.desc_brief, p.desc_headline, p.desc_tag, p.img_card, p.img_thumbnail FROM project AS p INNER JOIN clients AS c ON p.client_id = c.client_id WHERE p.project_id = 2";
$results = mysqli_query($connect,$query);
?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/97e2f7a12f.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css" />
    <title>Hi! I'm Nate 👋</title>
  </head>
  <body>
    <h1 class="hidden">
      Hello everyone! Welcome to Nate's Space, Portfolio of Design and Code.
    </h1>
    <div id="header-wrapper">
      <h2 class="hidden">Nate's Portfolio Header Section</h2>
      <header id="header">
        <div id="header__container" class="grid-con">
          <div
            id="header__logo"
            class="col-span-1 t-col-span-4 l-col-span-2 xl-col-span-2">
            <img
  src="images/Nate-logo.svg"
  alt="Nate Logo"
  id="header__nate-logo">
          </div>
          <div
            id="header__bio-text"
            class="col-span-3 t-col-span-3 l-col-span-3 xl-col-span-4"></div>
          <nav
            id="header__nav"
            class="col-span-full t-col-span-3 l-col-span-4 xl-col-span-4">
            <ul>
              <li><a id="portfolio-link" href="project.php?id=1">Works</a></li>
              <li><a id="contact-link" href="about.html">Contact</a></li>
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
                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-square-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-square-behance"></i></a></li>
            </ul>
            <i id="chatboxBtn" class="fa-thin fa-x"></i>
          </div>
        </div>

      </header>
    </div>

    <div id="hero-wrapper">
      <h2 class="hidden">Nate's Portfolio Hero Section</h2>
      <div id="hero__container" class="full-width">
        <div id="hero_project-detail__wrapper" class="col-span-full hidden">
          <section id="hero__project-details">
            <button id="project-details__lightbox-controller">
              <i class="fa-thin fa-x"></i>
            </button>
            <div id="project-details__image">
              <img src="#" alt="Project Image" />
            </div>
           
            <div id="project-details">
              <h2 id="project-details__headline" class="col-span-1">

                <span id="project-details__sub-headline"></span>
              </h2>
              <p id="project-details__client" class="col-span-1"></p>
              <p id="project-details__desc" class="col-span-1">
              </p>
              <a id="project-link" href="#">Go to project</a>
</div>
          </section>
        </div>

        <section id="hero__card-deck" class="col-span-full">
        <?php
$herocards = "SELECT project_id, p.img_card FROM `project` AS p LIMIT 6";
$result = mysqli_query($connect, $herocards);

while($row = mysqli_fetch_assoc($result)) {
echo '
<a href="project.php?id='.$row['project_id'].'" class="hero__card">
  <div id="card-deck__position1">
    <img src="images/'.$row['img_card'].'" alt="Project Image '.$row['project_id'].'">
  </div>
</a>
'
;}
?>
        </div>
        </div>
      </section>

    <div id="stacks-wrapper">
      <h2 class="hidden">Nate's Stacks Section</h2>
      <div id="stacks__container" class="grid-con">
        <section id="stacks" class="col-span-full">
          <p>
            Stacks <br />
            <span>Code</span> React / Git / JavaScript / mySQL / MongoDB / HTML
            / CSS
            <br />
            <span>Design </span> Cinema 4D / After Effect / Premier Pro / Figma
            / Illustrator / PS
          </p>
        </section>
      </div>
    </div>

    <div id="showreel-wrapper">
      <div id="showreel__container" class="full-width">
        <p id="showreel__chatbox"></p>
        <div id="showreel__video-container" class="col-span-full">
          <video controls src="video/showreel.mp4" poster="images/video-poster.png"></video>
        </div>
      </div>
    </div>

    <div id="testimonial-wrapper">
      <div id="testimonial__container" class="grid-con">

      <?php
$testimonial = "SELECT * FROM `testimonial` ORDER BY RAND() LIMIT 2";
$result = mysqli_query($connect, $testimonial);

while($row = mysqli_fetch_assoc($result)) {
echo '

        <div class="testimonial__card col-span-full l-col-span-6 xl-col-span-6">
          <div class="card__client_company">
            <div class="card__client"><img src="images/'.$row["img_cite"].'" alt=""></div>
            <div class="card__company"><img src="images/'.$row["img_cite_company"].'" alt=""></div>
          </div>
          <div class="card__text">
            <div class="card__testimonial-text">'.$row["cite_text"].'</div>
            <div class="card__testimonial-cite">'.$row["cite_name"].'</div>
          </div>
        </div>
'
;}
?>

      </div>
    </div>

    <div id="contact-box-wrapper">
      <div id="contact-box__container" class="grid-con">
        <p class="col-span-full">
          For your cool project, I can help! <wbr /> leave your message and
          email here.
        </p>
        <section
          id="contact-box__form"
          class="col-span-full t-col-span-6 l-col-span-6 xl-col-span-6">
          <h2 class="hidden">Connect Nate Easily Here! Let's Make Some Chat</h2>
          <input
            id="contact-message"
            type="text"
            placeholder="tell me a little about the project."
            required />
          <input
            id="contact-email"
            type="text"
            placeholder="your@email"
            required />
          <button id="contact-submit" type="submit">Send</button>
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

    <!-- JavaScript Area -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/gsap.js"></script>
    <script src="js/text.js"></script>
  </body>
</html>
