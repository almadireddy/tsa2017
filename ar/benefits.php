<?php
/// Include head at start, and include scripts at end. html in between.
include 'functions.php';
createHead("Benefits");
createNavbar();
?>

<div class="container-fluid hero-wrapper">
  <?php
  createHero("Uses and Benefits of AR", "Augmented Reality development promises limitless possibilities and benefits.", "benefitsHero");

  titleText("The Uses and Benefits of AR",
    "Augmented reality is currently in an early stage of development, but it is already reimagining the way that we see the world and its benefits are incredible. Streamlining is the name of the game, and augmented reality can be used in a variety of sectors to distribute comprehensive information faster and more efficiently, resulting in enhanced productivity and heightened awareness. The true beauty of augmented reality lies in its ability to not only enhance our information, but to create an internet of experiences. Seamlessly integrating reality and illusion, augmented reality is capable of immersing users in limitless awe-inspiring visuals, providing impressive possibilities to businesses, individuals, and society.");

  createParallaxSpacer("benefitsSpacer1");

  titleRow("Commercial", "commercial");
  imageText("img/ikea-augmented.jpg", "Transforming E-Commerce", "Electronic commerce (e-commerce) was born from a demand for convenience. Augmented reality is already being used to bring a new degree of ease to e-commerce. In many instances, consumers would rather research and purchase products online than go to a retail store. Augmented reality enhances the convenience of e-commerce by allowing consumers to test out a variety of products, such as clothing, glasses, and makeup, on themselves without ever leaving the comfort of their home. <a href='http://newatlas.com/ikea-augmented-reality-catalog-app/28703/'>Image Source</a>");

  addDivider();

  ?>

  <div class="row content">
    <div class="col-sm-6">
      <img src="img/modiface.jpg" alt="" class="image img-responsive">
      <h3 class="info-bar-title">The Modiface Mirror</h3>
      <p class="info-bar-text">The Modiface Mirror app allows you to test expensive products before making a purchase by overlaying realistic makeup and facial changes, such as eye color, onto your face. This elegant and convenient solution opens up new possibilities in the fashion industry introduces enhanced customization in the e-commerce sector.  <a href="http://www.augmentedrealitytrends.com/augmented-reality/modiface-mirror-hd.html/">Image Source</a></p>
    </div>
    <div class="col-sm-6">
      <img src="img/jeromes.jpg" alt="" class="image img-responsive">
      <h3 class="info-bar-title">Jerome's Furniture</h3>
      <p class="info-bar-text">Jerome's Furniture currently has an app that allows you to display furniture in your house, and many retailers, such as Ikea, are also adopting this approach. The responsive 3D models that augmented reality technology creates give consumers the ability to conveniently move customizable furniture models around their homes. <a href="http://www.jeromes.com/inspire/would-you-use-virtual-reality-to-decorate-your-home">Image Source</a></p>
    </div>
  </div>

  <?php
  addDivider();
  imageText("img/business.jpg", "Revolutionizing Business", "Augmented reality provides an interactive experience, which can be utilized by businesses to train employees more efficiently. The sense of physical presence and involvement created by augmented reality can make remote collaboration seem like a face-to-face meeting. It also has the capability to provide instant information, connecting workers to their workplaces, products, and to each other. <a href='https://skift.com/2015/12/22/microsoft-pitches-its-new-hololens-as-evolution-of-augmented-reality/'>Image Source</a>");

  addDivider();

  ?>

  <div class="row content">
    <div class="col-sm-6">
      <img src="img/Virtual_Reality.jpg" alt="" class="image img-responsive">
      <a class="image-source" href="http://www.govtech.com/blogs/lohrmann-on-cybersecurity/3-d-government-how-will-augmented-reality-ar-disrupt-the-future-of-technology.html/">Image Source</a>
    </div>
    <div class="col-sm-6">
      <img src="img/virtual-reality-business.jpg" alt="" class="image img-responsive">
      <a class="image-source" href="http://www.realitytechnologies.com/business">Image Source</a>
    </div>
  </div>

  <?php
  imageText("img/visionpicking.jpg", "Making Efficiency a Reality", "The proof is already there: a company called DHL recently did a pilot test of augmented reality, providing their workers with glasses that guided them through a warehouse. The result was a 25% increase in efficiency. Augmented reality can also display item specifications and work schedules, bring blueprints to life, and construct dynamic 3D models of products and environments. Overall, the enhanced reality and readily available information that augmented reality presents improves efficiency and magnifies productivity. As more and more companies invest in augmented reality infrastructure, businesses will be able to more effectively create and market better products. <a href=\"https://thebossmagazine.com/dhl-augmented-reality/\">Image Source</a>");

  createParallaxSpacer("benefitsSpacer2");

  titleRow("Recreational", "recreational");

  imageText("img/snapar.jpg", "Augmented Reality in a Snap", "Although many people don't realize it yet, Snapchat has popularized a simpler form of augmented reality. Snapchat, which currently has over 100 million daily active users, is one of the trendiest apps among millennials. People are drawn in by the temporary aspect of sending a picture to their friends that disappears, but many stay for the incredibly fun Lenses and Filters. Snapchat utilizes your smartphone camera and their own augmented reality software to track your facial expressions and overlay quirky and fun special effects on your face. You can also overlay a variety of filters, ranging from real-time weather to location-based Geofilters. The immense popularity of Snapchat is proof that augmented reality can thrive on a simple, mobile platform. <a href='http://computergraphics.stackexchange.com/questions/1939/how-enlarge-parts-of-a-video-like-snapchat-lens-filter
'>Image Source</a>");

  addDivider();

  imageText("img/pokemongo.jpg", "A Global Phenomenon", "Pokemon Go, an augmented reality game that has you chasing virtual Pokemon in the real-world, exploded onto the scene in the summer of 2016. The game uses your smartphone's GPS to track your movement and overlay virtual creatures onto your screen, as if they are a part of the real-world location that you are at. Pokemon Go quickly became a global phenomenon; it was downloaded over 650 million times as of February, 2017, and pushed augmented reality to the forefront of mainstream society. It also encouraged people to go out and exercise, as well as promoted business growth through increased foot traffic. The success of Pokemon Go illustrates how a nostalgic and interactive augmented reality game can bring the world together and improve hundreds of thousands of lives. <a href='http://www.redbull.com/en/games/stories/1331808575906/pokemon-go-8-huge-stats'>Image Source</a>");

  addDivider();

  ?>

  <div class="row content">
    <div class="col-sm-6">
      <h3 class="info-bar-title">Navigating the Future</h3>
      <p class="info-bar-text">For many people, navigation is an extremely difficult and confusing task. Fortunately, augmented reality is already making navigation seamless. Wikitude Navigation, the world's first augmented reality navigation system, was a smartphone-based proof of concept that overlaid precise directions and navigation graphics onto a real-world image. Although it was only for smartphones, it showed the potential for augmented reality navigation systems on wearable display technology.</p>
    </div>
    <div class="col-sm-6">
      <h3 class="info-bar-title">Seeing Clearly</h3>
      <p class="info-bar-text">With this augmented reality software in a headset, you would be able to receive clear directions without having to divert your focus from where you are going. Inevitably, this will lead to less distracted drivers on the road and potentially save hundreds of thousands of lives. As augmented reality becomes more prevalent and more wearable technology emerges, augmented reality navigation will make travel safer and more convenient for society. <a href="https://www.wikitude.com/showcase/wikitude-navigation/">wikitude.com</a></p>
    </div>
  </div>

  <?php

  createParallaxSpacer("benefitsSpacer3");

  titleRow("Educational", "educational");

  imageText("img/augmented-reality-classroom-apps.jpg", "Enhanced Education", "Even though the technology is in its early stages, augmented reality is already adding new dimensions to education. The immersive nature of augmented reality captivates students and provides a truly hands-on experience that promotes curiosity and further exploration. The possibilities are endless, as you can explore all corners of the Earth and beyond while simultaneously learning in-depth information and analysis. Augmented reality can also help students who have a hard time focusing or learning, such as those with ADHD, by engrossing them and holding their attention. <a href='https://infinityleap.com/22-augmented-reality-education-vr-classroom-apps/'>Image Source</a>");

imageText("img/aurasma.jpg", "Interactive Learning", "Apps such as Aurasma allow educators to craft their own unique augmented reality experiences ('auras'), which are then triggered by students using their devices. Aurasma essentially brings the curriculum to life and creates an interactive classroom. Auras range from helping deaf students with vocabulary by displaying a visual overlay of how to sign a word to bringing historical figures to life with rich information. Augmented reality is already reshaping how students learn and as the technology continues to improve, augmented reality will usher in a new era of enhanced education. <a href='http://www.drvtechhelp.com/digging-deeper-into-aurasma.html'>Image Source</a>");

  addDivider();

  ?>

  <div class="row content">
    <div class="col-sm-6">
      <img src="img/ar-play.jpg" alt="" class="image img-responsive">
      <a class="image-source" href="http://www.teachthought.com/the-future-of-learning/technology/32-augmented-reality-apps-for-the-classroom-from-edshelf/">Image Source</a>
    </div>
    <div class="col-sm-6">
      <img src="img/skullar.jpg" alt="" class="image img-responsive">
      <a class="image-source" href="http://infinitespider.com/augmented-reality-education/">Image Source</a>
    </div>
  </div>

  <?php addDivider(); ?>

  <div class="row content">
    <div class="col-sm-6">
      <img src="img/HoloLens.jpg" alt="" class="image img-responsive">
      <h3 class="info-bar-title">Saving the Future</h3>
      <p class="info-bar-text">Higher level education looks to be on track to embrace the benefits of augmented reality, especially the medical field. Experienced surgeons can perform realistic augmented reality surgeries, helping students get through the learning curve as quickly as possible. Students can also study anatomy with life-like skeletal models and hone their skills by operating on 3D models in real-world scenarios. <a href="http://www.medgadget.com/2016/06/holoanatomy-app-previews-use-of-augmented-reality-in-medical-schools.html/">Image Source</a></p>
    </div>
    <div class="col-sm-6">
      <img src="img/blood-draw.jpg" alt="" class="image img-responsive">
      <h3 class="info-bar-title">Lifesaver</h3>
      <p class="info-bar-text">Once medical students leave school and enter the real-world, they will be met with several instances geared towards augmented reality. Even now, many healthcare professionals have used AccuVein, an AR scanner that projects over skin and shows where the veins are, on over 10 million patients. This technology makes it 3.5 times more likely that they will find a vein on the first stick, and in the future, this type of scanning technology will serve dozens more functions. Soon, doctors will be able to see important information about their patients on augmented reality displays. In life or death situations, ease of access will be especially important and augmented reality provides an elegant solution to many problems in the medical field. <a href="http://learn.accuvein.com/articles\">Image Source</a></p>
    </div>
  </div>

  <?php
  createParallaxSpacer("benefitsSpacer4");

  titleRow("Research", "research");

  imageText("img/anatomy.jpg", "The 3D Cycle", "In order for augmented reality technology to be viable, intensive research needs to be done into the improvement of 3D capabilities.  In turn, the resulting improved augmented reality technology can create realistic 3D models that have the ability to significantly benefit researchers. Models are an integral part of research in a variety of fields, ranging from archeology to biology. <a href='http://www.ibtimes.co.uk/microsoft-hololens-company-reveals-what-it-feels-like-use-augmented-reality-helmet-1510256'>Image Source</a>");

  addDivider();

  ?>

  <div class="row content">
    <div class="col-sm-6">
      <img src="img/history-app.jpg" alt="" class="image img-responsive">
      <h3 class="info-bar-title">Lost Worlds</h3>
      <p class="info-bar-text">In the future, archaeologists will be able to use augmented reality to precisely reconstruct ancient environments and artifacts. The analysis of these models can provide significant insight into worlds that were previously lost to us. <a href="http://blogs.discovermagazine.com/crux/2015/03/13/archaeologists-augmented-reality/#.WOLnu2_yvIU/">Image Source</a></p>
    </div>
    <div class="col-sm-6">
      <img src="img/microsoft-hololens.jpg" alt="" class="image img-responsive">
      <h3 class="info-bar-title">New Life</h3>
      <p class="info-bar-text">Biologists currently use computers to construct 3D models of cells. Augmented reality has the potential to enhance the work that biologists already do by creating interactive models of cells and other structures, allowing researchers to test important hypotheses and visualize the effects of numerous stimuli. <a href="http://www.techtimes.com/articles/49742/20150501/microsoft-hololens-spells-a-m-a-z-i-n-g-for-future-of-gaming-and-augmented-reality.htm\">Image Source</a></p>
    </div>
  </div>

  <?php

  createFooter(false);

  addScripts();
