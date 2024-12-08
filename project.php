<!DOCTYPE html>
<html lang="en">
  <?php
require_once('includes/connect.php');
$query = "SELECT 
            p.*, 
            c.company_name 
          FROM project AS p 
          INNER JOIN clients AS c 
          ON p.client_id = c.client_id 
          WHERE p.project_id = " . intval($_GET['id']);
$results = mysqli_query($connect, $query);
  ?>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/97e2f7a12f.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css" />
    <title>Hi! I'm Nate, This is what a big little thing I did! 👋</title>
  </head>
  <body>
    <h1 class="hidden">
      Hello everyone! Welcome to Nate's Space, Portfolio of Design and Code.,
      And this is 'Project' page, the work that I proud with!
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

    <div id="project-wrapper">
      <h2 class="hidden">The Project begins here!</h2>
      <div id="project__container">
        <section id="project__hero" class="grid-con">
          <h2 class="hidden">The Project main highlight</h2>

<?php

while($row = mysqli_fetch_assoc($results)) {
echo '
<!-- Project Image -->
<div id="hero__image-containter" class="col-span-full">
  <img src="images/'.$row["img_main"].'" alt="" id="hero__image" />
</div>

<!-- Project Details -->
<div
  id="hero__details"
  class="col-span-full t-col-span-7 l-col-span-4 xl-col-span-3">
  <div id="details__project-name">'.$row["desc_headline"].'</div>
  <div id="details__project-headline">'.$row["desc_subhead"].'</div>
</div>

<!-- Client & Completion Year -->
<div
  id="details__client"
  class="col-span-full grid-container t-col-span-3 l-col-span-4 xl-col-span-3">
  <p class="heading-text">Client</p>
  <p id="details__client-name" class="">'.$row["company_name"].'</p>
  <p id="details__completion-year" class="">'.$row["completion_year"].'</p>
</div>

<!-- Role & Stacks -->
<div
  id="details__nate-role"
  class="col-span-full grid-container t-col-span-4 l-col-span-3 xl-col-span-3">
  <p class="heading-text">Role</p>
  <p id="details__role" class="">'.$row["role"].'</p>
  <p class="heading-text">Stacks</p>
  <p id="details__stacks" class="">'.$row["stack"].'</p>
  <p class="heading-text col-span-1">Link</p>
  <p id="details__project-url" class="">
    <a href="">'.$row["project_url"].'</a>
  </p>
</div>
</section>

<div class="line-break full-width"></div>

<section id="project__desc" class="full-width">
<h2 class="hidden">The Project in depth</h2>

<div id="desc__brief" class="col-span-full grid-container-fullwidth">
  <div class="heading-text-grey">Brief</div>
  <div id="desc_brief-text">'.$row["desc_brief"].'
  </div>
</div>

<div
  id="project__image-brief"
  class="col-span-full project-image-style">
  <img src="images/'.$row["img_brief"].'" alt="" />
</div>

<div
  id="desc__audience"
  class="col-span-full grid-container-fullwidth">
  <div class="heading-text-grey">Audiences &amp; Users</div>
  <div id="desc_audience-text">'.$row["desc_audiences"].'
  </div>
</div>
<div
  id="desc__challenge"
  class="col-span-full grid-container-fullwidth">
  <div class="heading-text-grey">Challenge</div>
  <div id="desc_challenge-text">'.$row["desc_challenge"].'
  </div>
</div>

<div
  id="project__image-direction"
  class="col-span-full project-image-style">
  <img src="images/'.$row["img_direction"].'" alt="" />
</div>

<div
  id="desc__direction"
  class="col-span-full grid-container-fullwidth">
  <div class="heading-text-grey">Directions</div>
  <div id="desc_direction-text">'.$row["desc_direction"].'
  </div>
</div>

<div
  id="project__image-process"
  class="col-span-full project-image-style">
  <img src="images/'.$row["img_process"].'" alt="" />
</div>

<div class="heading-text-grey grid-container-fullwidth">Process</div>
<div
  id="desc_process-early"
  class="col-span-full grid-container-fullwidth">
  <div class="heading-text-grey">Early Stage</div>
  <div id="desc_process-early-text">'.$row["desc_process_1"].'
  </div>
</div>

<div
  id="desc_process-middle"
  class="col-span-full grid-container-fullwidth">
  <div class="heading-text-grey">Middle Stage</div>
  <div id="desc_process-middle-text">'.$row["desc_process_2"].'
  </div>
</div>

<div
  id="desc_final-middle"
  class="col-span-full grid-container-fullwidth">
  <div class="heading-text-grey">Final Stage</div>
  <div id="desc_final-middle-text">'.$row["desc_process_3"].'
  </div>
</div>

<div
  id="project__image-result"
  class="col-span-full project-image-style">
  <img src="images/'.$row["img_result"].'" alt="" />
</div>

<div
  id="desc__highlight-and-thought"
  class="col-span-full grid-container-fullwidth">
  <div class="heading-text-grey">Highlight &amp; Thought</div>
  <div id="desc_highlight-and-thought-text">'.$row["desc_hl_thought"].'
  </div>
</div>
</section>
</div>
</div>
'
;}
?>
          

    <div class="line-break full-width"></div>

    <div
      id="other-project-wrapper"
      class="col-span-full grid-container-fullwidth">
      <h2 class="hidden">The Other Projects that I proud to present too!</h2>
      <div id="other-project__containter" class="col-span-full">


      <?php

$ad = "SELECT 
  p.project_id, 
  p.img_thumbnail, 
  p.desc_subhead, 
  c.company_name 
FROM 
  project AS p 
INNER JOIN 
  clients AS c 
ON 
  p.client_id = c.client_id 
ORDER BY RAND() 
LIMIT 3;";
$results = mysqli_query($connect, $ad);
while($row = mysqli_fetch_assoc($results)) {
echo '
        <div class="other-project__card">
          <div class="other-project__image">
            <a href="project.php?id='.$row['project_id'].'"><img src="#" alt="Project Image" /></a>
          </div>
          <div class="other-project__text">
            <div class="other-project__project-name">'.$row["company_name"].'</div>
            <div class="other-project__project-headline">
              <a href="project.php?id='.$row['project_id'].'">'.$row["desc_subhead"].'</a>
            </div>
          </div>
        </div>
'
;}
?>

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
    <script src="js/main.js"></script>
    <script src="js/text.js"></script>
  </body>
</html>
