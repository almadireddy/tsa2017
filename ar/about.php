<?php
include "functions.php";
createHead("About");
createNavbar();
?>

<div class="container-fluid hero-wrapper">
  <?php
  titleRow("About", 'about');
  ?>

  <div class="row about-content-row">
    <div class="col-sm-6 col-sm-push-3">
      <h2 class="section-title">LEAP Resume</h2>
      <p class="section-text">Click <a href="img/leapResume.pdf" download="leap-resume">here</a> to download our LEAP Resume.</p>

      <h2 class="section-title">Copyright Checklist</h2>

      <p class="section-text">Click <a href="img/copy-checklist.pdf" download="copy-checklist">here</a> to download our signed copyright checklist.</p>

      <h2 class="section-title">Works Cited</h2>
      <p class="section-text">Click <a href="img/worksCited.pdf" download="works-cited">here</a> to download our Works Cited page.</p>

      <h2 class="section-title">Images</h2>
      <p class="section-text">All images were sourced from their owner's websites and cited, or are copyright-free.</p>

      <h2 class="section-title">Code and Libraries</h2>

      <p class="section-text">We used the <a href="http://getbootstrap.com">Bootstrap 3</a> framework to make the website responsive and create layouts faster.</p>

      <p class="section-text">We also used the following javascript libraries: <a href="">stellar.js,</a> for handling the parallax effect, and <a href="http://jquery.com">JQuery,</a> for general purpose. The stars effect was created using vanilla Javascript and Canvas.</p>

      <p class="section-text">On the back end, we used PHP to allow us to reuse code and layouts throughout the websites. Most layouts were folded into functions that had parameters for titles, text, and image URL's that allowed us to add information to the site efficiently.</p>


    </div>
  </div>


  <?php
  createFooter(true);
  addScripts();
