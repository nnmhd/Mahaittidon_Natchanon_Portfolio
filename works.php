<?php


require_once('includes/connect.php');

$sql = "SELECT * FROM project";
$stmt = $connect->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $projectId = $_POST['project_id'];

        $deleteSql = "DELETE FROM project WHERE project_id = :project_id";
        $deleteStmt = $connect->prepare($deleteSql);
        $deleteStmt->bindParam(':project_id', $projectId);

        if ($deleteStmt->execute()) {
            echo "<script>alert('Project deleted successfully!'); window.location.href = 'update.php';</script>";
            exit();
        } else {
            echo "<script>alert('Failed to delete project.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer
      src="https://kit.fontawesome.com/97e2f7a12f.js"
      crossorigin="anonymous"></script>
      <script defer type="module" src="js/worksp.js"></script>
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

    <section id="project__container" class="grid-con">
    <div id="project-table" class="col-span-full">
        <?php foreach ($rows as $row): ?>
        <div class="project-row">
            <div class="project-image-div">
          <a href="project.php?id=<?php echo $row['project_id']; ?>">
              <img src="images/<?php echo $row['img_main']; ?>" alt="<?php echo htmlspecialchars($row['project_name']); ?>">
          </a>
            </div>
            <div class="project-desc-div">
          <?php echo htmlspecialchars($row['project_name']); ?> <br>
          <span><?php echo htmlspecialchars($row['role']); ?></span> <br><br>
          <a href="project.php?id=<?php echo $row['project_id']; ?>">
              <i class="fa-light fa-arrow-up-right-from-square"></i>
          </a>
            </div>
        </div>
        <?php endforeach; ?>

    </section>

    <div id="footer-wrapper" class="">
      <h2 class="hidden">The Nate's Portfolio Footer</h2>
      <footer id="footer__container" class="">
        <div
          id="footer"></div>
          <div id="footer__contact__info">
          </div>
      </footer>
    </div>
</body>
</html>