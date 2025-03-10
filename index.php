<?php 
// call the connect.php file 
// and create a connection 
// and query the database and fetch the data
require_once('includes/connect.php');
$sql = "SELECT p.project_id, c.company_name FROM project AS p 
        INNER JOIN clients AS c ON p.client_id = c.client_id";
$stmt = $connect->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer
      src="https://kit.fontawesome.com/97e2f7a12f.js"
      crossorigin="anonymous"></script>
      <script type="module" src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css" />
    <title>Hi! I'm Nate 👋</title>
  </head>
  <body>
    <h1 class="hidden">
      Hello everyone! Welcome to Nate's Space, Portfolio of Design and Code. Discover my projects, skills, and experience in web development and design.
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
            <h2>Let's Connect!</h2>
            <p>I'm waiting you somewhere in the world 🌎</p>
            <ul>
                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-square-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-square-behance"></i></a></li>
            </ul>
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
            <i id="chatboxBtn" class="fa-thin fa-x"></i>
          </div>
        </div>
      </header>
    </div>

    <?php
$projects = 'SELECT p.project_id, p.project_name, p.desc_headline, p.img_thumbnail, 
                    p.desc_brief, p.desc_subhead, c.company_name, p.img_card 
             FROM project AS p
             INNER JOIN clients AS c ON p.client_id = c.client_id 
             ORDER BY RAND() LIMIT 3';
$stmt = $connect->prepare($projects);
$stmt->execute();
$cards = $stmt->fetchAll(PDO::FETCH_ASSOC);


$firstCard = $cards[1];
?>

<div id="hero-wrapper" class="">
    <h2 class="hidden">Nate's Portfolio Hero Section - Showcasing Top Projects and Designs</h2>
    <div id="hero__container" class=" full-width">
        <div id="hero_project-detail__wrapper" class="col-span-full">
            <section id="hero__project-details">
                <button id="project-details__lightbox-controller">
                    <i class="fa-thin fa-x"></i>
                </button>

                <div id="project-details" class="">
                    <div id="project-details__image" class="">
                        <img src="images/<?php echo $firstCard['img_thumbnail']; ?>" alt="<?php echo $firstCard['project_name']; ?>" />
                    </div>
                    <h2 id="project-details__headline" class="col-span-1">
                        <?php echo $firstCard['desc_headline']; ?>
                        <span id="project-details__sub-headline"><?php echo $firstCard['desc_subhead']; ?></span>
                    </h2>
                    <p id="project-details__client" class="col-span-1 "><?php echo $firstCard['company_name']; ?></p>
                    <p id="project-details__desc" class="col-span-1 ">
                        <?php echo $firstCard['desc_brief']; ?>
                    </p>
                    <br>
                    <br>
                    <a id="project-link" href="project.php?id=<?php echo $firstCard['project_id']; ?>">Explore Project <i class="fa-light fa-telescope"></i></a>
                </div>
            </section>
        </div>

        <section id="hero__card-deck" class="col-span-full">
            <?php
            foreach ($cards as $row) {
                echo '
                <a href="project.php?id='.$row['project_id'].'" class="hero__card'.($row['project_id'] == $firstCard['project_id'] ? ' first' : '').'" data-id="'.$row['project_id'].'">
                    <div class="card-deck__position">
                        <img src="images/'.$row['img_card'].'" alt="'.$row['project_name'].'">
                    </div>
                </a>
                ';
            }
            ?>
        </section>
    </div>
</div>

    <div id="stacks-wrapper">
      <h2 class="hidden">Nate's Stacks Section</h2>
      <div id="stacks__container" class="full-width">
        <section id="stacks" class="col-span-full">
          <p>
            Stacks <br />
            <span>Code</span> React / Git / JavaScript / PHP / mySQL / MongoDB / HTML
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
        <div id="showreel__video-container" class="col-span-full">
          <video controls src="video/showreel.mp4" poster="images/video-poster.png"></video>
        </div>
      </div>
    </div>

    <div id="testimonial-wrapper">
      <div id="testimonial__container" class="grid-con">

      <?php
$testimonial = 'SELECT * FROM `testimonial`';
$stmt = $connect->prepare($testimonial);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo '
        <div class="testimonial__card col-span-full ">
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
          </form>
          <div id="feedback"><p></p></div>
        </section>

      </div>
    </div>

    <div id="footer-wrapper" class="grid-con">
      <h2 class="hidden">The Nate's Portfolio Footer</h2>
      <footer id="footer__container" class="col-span-full">
        <div
          id="footer"
          class="col-span-full"></div>
      </footer>
    </div>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollToPlugin.min.js"></script>
  </body>
</html>
