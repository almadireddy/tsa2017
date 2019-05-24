<?php
/// Include head at start, and include scripts at end. html in between.
include 'functions.php';
createHead("Concerns");
createNavbar();
?>

<div class="container-fluid hero-wrapper">
  <?php
  createHero("Concerns About AR", "As with any new technology, there a lot of concerns and arguments against AR.", "concernsHero");

  titleText("Concerns About AR",
    "The development of augmented reality has quickly ramped up, as the projected market for augmented reality in 2020 is about $100 billion. However, it is also important to look before we leap and to seriously consider the arguments against augmented reality. The use of augmented reality can cause general cognitive problems, such as distraction and information overload, health issues, and intense privacy complications. As augmented reality continues to become more and more popular, the arguments against it will also become more visible in the public eye.");

  createParallaxSpacer("concernsSpacer1");

  titleRow("General Cognitive Concerns", "cognitive");

  imageText("img/ar-driving.jpg", "Distractions Galore", "Everyone knows (although many are reluctant to admit it) that technology can often be a distraction. Augmented reality can enhance reality but it can also impair vision. This is especially dangerous when you are driving. When experiencing augmented reality, you can misjudge speed and distance, muddle your depth of field, and pay too much attention to the constant supply of information. Many augmented reality devices try to overcome these problems by tucking away information in the side of the displays, but this still causes distractions and peripheral vision distraction. Inevitably, without clean interfaces, clear instructions, and safety protocols, augmented reality will lead to more car accidents and safety concerns. <a href='https://itunes.apple.com/us/app/augmented-driving/id366841514?mt=8'>Image Source</a>");

  addDivider();

  imageText("img/diminished.jpg", "Diminished Reality", "One of the best aspects of technology is its ability to connect people from around the world. Ironically, technology also allows people to disconnect from the real world. Instead, they choose to live in a fantasy world where they see exactly what they want to see and there are no real issues. With powerful technology that can alter our perception of reality, people may use it to focus on themselves and live in their own bubble. This is achievable through software called diminished reality. This software is capable of  removing unwanted objects from the display. For example, people could \"delete\" poor people from their vision of the streets, leading to increased disparity in society. In a reality where you can shape the world to your liking, how many people would actually keep the ugly aspects of the world? <a href='https://techcrunch.com/2010/10/21/diminished-reality-impressive-video-manipulation-in-real-time-video/'>Image Source</a>");

  createParallaxSpacer("concernsSpacer2");

  titleRow("Health Concerns", "health");

  imageText("img/vr-motion-sickness.jpg", "Mental and Physical Risks", "Being immersed in augmented reality can have adverse side effects to your personal health. Many virtual reality users experience motion sickness after short sessions. If this problem is ignored, augmented reality can amplify this sickness. Augmented reality tricks your mind into believing that what you are experiencing is real, but the mind is a fragile thing. Most augmented reality technology is not advanced enough to create truly genuine physical connections between our eyes and our brains, and this deficiency can potentially lead to permanent neurological damage. In addition to mental problems, the excessive use of augmented reality can lead to actual physical harm. Distracted users are more prone to injuries when they are using their augmented reality devices out and about in the real world. <a href='https://infinityleap.com/virtual-reality-headsets-can-cause-motion-sickness-nausea/'>Image Source</a>");

  addDivider();

  imageText("img/info-overload.jpg", "Information Overload", "Too much of a good thing can be a bad thing. There is a huge demand for staying connected in the world today, and augmented reality devices can meet these concerns by constantly providing a supply of information. However, cluttered interfaces can be filled with information is both distracting and detrimental to the health of the user. The additional information can block your vision and lead to serious physical harm. Too much information on the screen at once can cause serious mental health problems, such as persistent migraines and even seizures. Using a powerful device can also cause severe eye strain and similar vision impairments to diseases such as diabetes. <a href='https://acculturated.com/wp-content/uploads/2015/12/8-redundant-info.jpg'>Image Source</a>");

  createParallaxSpacer("concernsSpacer3");

  titleRow("Privacy Concerns", "privacy");

  imageText("img/eye.jpg", "Opening the Door to our Lives" ,"The door to abuse augmented reality technology is ajar, but as the technology improves, there is legitimate concern that the door into our private lives will be thrown wide open. The constant supply of information that augmented reality requires can be used to enhance the experience, but it can also be stockpiled in massive data banks by powerful companies in the emerging space. This data can be distributed to enterprising companies and abused by domineering governments. Recent developments, such as Vault 7 from WikiLeaks, show that governments have the ability to use technology, such as TV's, to gain insight into the lives of citizens. With the onset of augmented reality, this potential for abuse will only be increased as powerful entities will be able to access devices that constantly track and monitor our lives. <a href='https://en.wikipedia.org/wiki/Big_Brother_16_(UK)'>Image Source</a>");

  addDivider();

  imageText("img/anonymous.png", "Hacking the System", "Companies and governments are not the only ones who stand to benefit from the privacy concerns of augmented reality. Hackers have already infiltrated the data banks of augmented reality companies by scamming users and then accessing all of their stored information. The increased focus on augmented reality will ultimately attract more hackers, who will exploit new ways to harm people. For example, hackers could prey on epileptic people by playing bright flashing lights or cause mayhem on the roads by replacing speed signs with higher speeds and erasing warning signs from the user's view. They can also take control of augmented reality systems within cars and planes and impede the vision of drivers and pilots. <a href='http://hero.wikia.com/wiki/File:Anonymous_hacker_logo.png'>Image Source</a>");

  createParallaxSpacer("concernsSpacer4");
  ?>

  <div id="pokemonCaseStudy" class="row title-row">
    <div class="col-sm-8 col-sm-push-2 text-center">
      <h1 class="section-title">Pokemon Go: Case Study</h1>
      <p class="section-text">Pokemon GO was definitely one of the most promising moments for the field of augmented reality, as it increased consumer focus and served as an amazing proof of concept. However, Pokemon GO is also proof that the concerns about augmented reality are valid and need to be addressed in the future. Back in the summer of 2016, many news stories were run that exhibited the distracting element of Pokemon GO. There are numerous accounts of people trespassing and getting mugged while playing Pokemon GO. One of the largest problems was that many people were playing while driving, causing physical harm to themselves and other people. The privacy issue of Pokemon GO stems from the fact that Niantic had full access to users' Google accounts, including their emails and personal information. Hackers went on to scam and phish players by offering them free in-game currency and other benefits, while simultaneously stealing all of their personal information. All in all, Pokemon GO was a massively popular insight into augmented reality but also opened the public's eye to the inherent problems of augmented reality. <a href='http://distracteddriveraccidents.com/pokemon-go-and-distracted-driving/'>Image Source</a></p>
    </div>
  </div>

  <div class="row content">
    <div class="col-sm-12">
      <img src="img/pokemon-driving.jpg" alt="" class="img-responsive image">
    </div>
  </div>

  <?php createFooter(false); ?>

  <?php addScripts(); ?>
