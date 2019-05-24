<?php
/// Include head at start, and include scripts at end. html in between.
include 'functions.php';
createHead("Augmented Reality");
createNavbar();
?>

<div class="container-fluid hero-wrapper">
  <?php
  createHero("Augmented Reality", "A whole new way to see the world", "homeHero");

  titleText("AR Technology",
    "The concept of augmented reality has been around for a long time now, but only recently, it has begun to be implemented into the mainstream world. The technology is in its early stages of development, but the emerging demand for augmented reality has jumpstarted research and development into more efficient and immersive technology. There is no question that the age of augmented reality is coming, but the real questions are how soon it will arrive and how advanced the technology can become.",
    "technology.php", "Technology");

  createParallaxSpacer("spacer1");

  titleText("Benefits of AR",
    "As augmented reality technology continues to improve, more and more applications for augmented reality are emerging. Businesses and consumers alike are benefiting from the increased efficiency and flexibility provided by augmented reality, and the increased availability of information is priceless for the education and research sectors. Beyond information and data, augmented reality has the potential to advance humanity, both on a societal and personal level.",
    "benefits.php", "Benefits");

  createParallaxSpacer("spacer2");

  titleText("Concerns about AR",
    "As with any emerging technology, the implementation of augmented reality in our society has introduced new concerns and enhanced existing ones. Critics of the adoption of augmented reality technology point to general cognitive problems and health issues associated with augmented reality, as well as increasingly pressing privacy concerns. These valid arguments remind us to consider the realistic implications of any new technology and to take a step back before fully diving into augmented reality.",
    "concerns.php", "Concerns");

  createParallaxSpacer("spacer3");
  ?>

  <div class="row content">
    <div class="col-sm-12">
      <a href="../cte.php" class="center-block button"><i class="fa fa-chevron-left"></i> Flower Mound CTE</a>
    </div>
  </div>

  <?php
  createFooter(false);

  addScripts(); ?>
