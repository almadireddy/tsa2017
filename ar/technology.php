<?php
/// Include head at start, and include scripts at end. html in between.
include 'functions.php';
createHead("Technology");
createNavbar();
?>

<div class="container-fluid hero-wrapper">
  <?php
  createHero("Augmented Reality Technology", "New innovations and technologies drive the development of AR forward.", "techHero");

  titleText("AR Technology",
    "Augmented reality is a technological concept that has only been imagined and explored since the dawn of science fiction. A subset of virtual environments in general, augmented reality revolves around virtual items being superimposed on the real world. Unlike its often interchangeably misused cousin, virtual reality, augmented reality does not place the user in an entirely new space. Instead, depending on the level of augmentation, the user is exposed to an overlay of information, pictures, and in more extreme cases, virtual objects. While various versions had been conceived and manufactured during the 20th century, the technology for truly impressive augmented reality has only come to fruition in the 21st century.");

  createParallaxSpacer("techSpacer1");

  titleRow("AR in the Past", "past");

  imageText("img/pexels-vr.jpg", "AR in the Past", "The first concept of augmented reality was described in a 1901 novel by Frank Baum, regarding a pair of electronic glasses. Despite this early conception, the idea itself lacked a name until a Boeing researcher, Tom Caudell, named it Augmented Reality in 1990. Augmented reality, in a sense, had already been in use for some time by then; US experimental planes were outfitted with prototype heads up displays as early as the 1950s. These basic baby steps provided static information such as compass directions and altitude. However, Caudell's name and his work sparked interest and growth in the field. His head-tracking system for wiring the new 777 airliner was limited by slow responses and weak portable computers. The problem posed by inefficient batteries, low resolution portable cameras, and lack of computational power continued to stump augmented reality technology researchers until the 21st century. By 2004, the advent of powerful cell phones made possible by Moore's Law, an observation that theorized that the number of transistors in a dense integrated circuit doubles about every two years, allowed German researchers to bring see-through augmented reality into the realm of possibility for all. In the last decade, rapid advances in the field have lead to the proliferation of wearable smart glasses like the Google Glass and real-time heads up displays in transportation like BMW's holographic dashboard.");

  addDivider(); ?>

  <div class="row content">
    <div class="col-sm-6">
      <img src="img/AR1.jpg" alt="" class="image img-responsive">
      <a class="image-source" href="http://government-2020.dupress.com/driver/augmented-reality//">Image Source</a>
    </div>
    <div class="col-sm-6">
      <img src="img/msHololens.jpg" alt="" class="image img-responsive">
    </div>
  </div>

  <?php
  createParallaxSpacer("techSpacer2");
  titleRow("Modern Day AR", "modern");
  imageText("img/glass.jpg", "Modern Day AR", "Modern day augmented reality technology is rapidly advancing, improving by leaps and bounds. For the first time ever, augmented reality is seeing widespread mainstream usage. Snapchat, released 5 years ago, has morphed into a multibillion dollar company thanks to the popularity of its filters. These filters, like Google Translate's new photo translation, rely on complex machine-vision algorithms to parse information from the real world and alter it on screen for users. Furthermore, despite the widely anticipated and mildly panned release of Google Glass just 3 years ago in 2014, companies like Innovega are already working on the next step - augmented reality contact lenses. Industrial giants like Microsoft and Google as well as startups like Magic Leap have developed headsets capable of scanning reality and subsequently overlaying in depth, detailed holograms straight into the user's eyes. These holograms are convincing enough for medical students to practice dissection with real tools on virtual cadavers. Phone technology is being pushed to its boundaries as a steady stream of apps have taken advantage of high resolution cameras to provide even greater utility. \"Measure\", a Google app that utilizes next generation phone camera sensors, can measure house dimensions and distances; these can subsequently be exported to a floor plan program that can generate your house blueprints. <a href='http://www.androidmodo.com/5056/nueva-version-google-glass-con-audifono-prescripciones/'>Image Source</a>");

  addDivider() ?>

  <div class="row content">
    <div class="col-sm-4">
      <img src="img/msHololens-4.jpg" alt="" class="image img-responsive">
    </div>
    <div class="col-sm-4">
      <img src="img/MShololens-3.jpg" alt="" class="image img-responsive">
    </div>
    <div class="col-sm-4">
      <img src="img/msHololens-5.jpg" alt="" class="image img-responsive">
    </div>
  </div>

  <?php
  createParallaxSpacer("techSpacer3");
  titleRow("The Future of AR", "future");
  imageText("img/goggles.jpg", "Future Innovations", "As augmented reality takes hold in the mainstream, greater demand means greater problems. End user diversity will require a wide array of viewing and controlling options that will not be satisfied by traditional touch or mouse usage. Despite Moore's Law, the computational demands of augmented reality means that truly portable usage on the level of a Hololens headset isn't there yet. Our mastery of lithium batteries provide enough charge for everyday usage, but as the public as quickly found out, rarely satisfies heavy usage of augmented reality apps like Snapchat or Pokemon Go. Headsets too, have run into significant issues barring their widespread adoption: namely cost, application, and fashionability. The extreme cost of entry to the field prevents the mainstream from embracing more immersive and helpful augmented reality technology, which in turn keeps developers from creating useful applications for the instruments. This catch-22 will be the greatest challenge going forward, and can only be solved with the creation of an efficient, long-lasting, immersive, preferably three dimensional, screen-less electronic, with tactile feedback and gestural control. <a href='http://www.tomshardware.com/reviews/ar-vr-technology-discussion,3811.html'>Image Source</a>");

  createParallaxSpacer("techSpacer4");?>

  <div id="skyviewCaseStudy" class="row title-row">
    <div class="col-sm-8 col-sm-push-2 text-center">
      <h1 class="section-title">SkyView: Case Study</h1>
      <p class="section-text">For hundreds of years, the mysteries of the skies have drawn humans to theorize about the world above us. Philosophers and astronomers alike have stared in amazement and attempted to decipher the enigma of the sky. SkyView, an augmented reality application created by Terminal Eleven, harnesses the power of augmented reality and allows anyone to explore the universe on their mobile device. To use it, you simply point your device at the sky and, by superimposing breathtaking 3D graphics onto your camera view, SkyView creates an interactive augmented reality experience. Users have instant access to interesting information about our universe, such as sky paths and connecting constellations. For us, SkyView was a perfect example of an augmented reality application that creates an experience and enhances the world around us. Because of this, we were inspired to simulate the SkyView augmented reality experience in our landing pages, with 'stars' that connect like constellations.</p>
    </div>
  </div>

  <div class="row content">
    <div class="col-sm-12">
      <img src="img/skyview.jpg" alt="" class="img-responsive image">
    </div>
  </div>

  <?php createFooter(false); ?>

  <?php addScripts(); ?>
