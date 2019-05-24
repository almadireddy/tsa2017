<?php
include "parts/functions.php";

head("TSA Chapter 619");

createHeader("Flower Mound TSA (Chapter 619)",
  "Designing a Better Future");


createNavbar();

?>

  <div class="row content-row">
    <div class="twelve columns">
      <h2 class="section-title text-center">Learning to lead in a technical world.</h2>
      <div class="text-extender-container">
        <p class="text-center text-extender"><i>The TSA Creed:</i> <br> <br> I believe that Technology Education holds an important place in my life in the technical world. I believe there is a need for the development of good attitudes concerning work, tools, materials, experimentation, and processes of industry. Guided by my teachers, artisans from industry, and my own initiative, I will strive to do my best in making my school, community, state, and nation better places in which to live. I will accept the responsibilities that are mine. I will accept the theories that are supported by proper evidence. I will explore on my own for safer, more effective methods of working and living. I will strive to develop a cooperative attitude and will exercise tact and respect for other individuals. Through the work of my hands and mind, I will express my ideas to the best of my ability. I will make it my goal to do better each day the task before me, and to be steadfast in my belief in my God, and my fellow Americans.</p>
      </div>
      <div class="text-extender-icon"> <i class="fa fa-angle-down"></i></div>
    </div>
  </div>

<?php
titleText("FMTSA", "Chapter 619 was founded at Flower Mound High School in 1999 when the school was opened. Since then, our advisor, Mr. Ralph Szydlik, has worked tirelessly to expand the chapter's activity and attract intuitive members. We currently have 87 members and are growing quickly. Our goal is to provide a fun and engaging environment in which students can explore their technology related interests. One of the aspects of our chapter that we pride ourselves in is diversity, both in our members and the opportunities available to them. We encourage our members to participate in a variety of events, ranging from robotics to photography. Students are exposed to several disciplines, allowing them to discover their interests, hone their skills, and learn to lead in a technical world.");

youtubeEmbed("https://www.youtube.com/embed/8cyt6TZXs_U");

titleTextWithImage("Advisor", "Mr. Ralph Szydlik has been the advisor of FMTSA for the past 13 years. He stays after school daily to provide us with a room and equipment to be successful. He also leads our meetings, communicates between students and parents, and guides us to success. Without him, FMTSA would not be what it is today and we are extremely thankful that he is here for us.", "img/shad.jpg", false);


titleText("Flower Mound TSA Officers", null);

$officerRowOne = array(
    array("President", "img/officer-al.jpg", "Al Madireddy"),
    array("Vice President", "img/officer-kevin.jpg", "Kevin Choi"),
    array("Secretary", "img/officer-teja.jpg", "Teja Gorantla")
);
$officerRowTwo = array(
  array("Treasurer", "img/officer-amy.jpg", "Amy Song"),
  array("PR Manager", "img/officer-seth.jpg", "Seth Amaradasa"),
  array("Business Manager", "img/officer-varun.jpg", "Varun Shankaran")
);
$officerRowThree = array(
  array("TSA Manager", "img/officer-srini.jpg", "Sriniketh Potlapalli"),
  array("FIRST Captain", "img/officer-keven.jpg", "Keven Li"),
  array("Vex Manager", "img/officer-philip.jpg", "Philip Boltan")
);

createOfficers($officerRowOne, $officerRowTwo, $officerRowThree);

addDivider();

titleText("FMTSA Projects", "Since its inception, FMTSA has expanded the opportunities available to students. As a result, students create and submit a wide variety of projects. A staple of our chapter is Engineering and Architecture, with several students joining after taking Mr. Szydlik's classes. Every year, we have 1-2 teams who compete in TSA VEX Robotics and several projects are generated from robotics programming. In recent years, more and more aspiring filmmakers and photographers are submitting their work in order to learn from constructive criticism and improve. Students pride themselves on the quality of their work and as a result, FMTSA has won first or second place High Point in our state multiple times. At the 2017 Texas TSA State Conference, FMTSA won second place chapter High Point, and two of our members won second and third place individual High Point. Many of our students choose to challenge themselves and turn in as many high quality individual events as they can. Chapter 619 also encourages every student to participate in at least one National Qualifying Event. The NQEs that Chapter 619 participates in include Music Production, Video Game Design, Webmaster, Debate, and Technology Bowl. At the Texas TSA State Conference, students on these teams consistently place in the top 3, and in 2016, our Music Production team competed at the National Conference.This year, FMTSA is taking several teams to the National Conference, including Webmaster and TSA VEX.");

titleTextWithImage("Engineering and Architecture",
  "Students that have been through Mr. Szydlik's Engineering and Architecture classes often take advantage of the opportunity to compete with their skills in FMTSA. Students often turn in everything from meticulously dimensioned CAD drawings to photorealistic presentation drawings to intricate models.", "img/planetary3.jpg", false);

imageRow(array("img/engine.jpg", "img/camaro.jpg", "img/gear.jpg"));

titleTextWithImage("Robotics & Programming", "With robotics being such a big part of the Club's activities, it is no wonder that there are many robotics entries every year. At least one or two VEX teams compete in TSA VEX, and several entries are generated from the people writing programs for the robots. Many students also submit their VEX and FIRST CAD drawings.", "img/compsci.jpg", false);

imageRow(array("img/vex-game-2.jpg", "img/vision.jpg", "img/joystick.jpg"));


titleTextWithImage("Film and Photography", "FMTSA also has a very high number of film and photo entries. Many members are aspiring filmmakers and photographers and look forward to improve their work based on the feedback that they receive from the judges.", "img/cotton-candy.jpg", false);

imageRow(array("img/football-team.jpg", "img/basketball-2.jpg", "img/basketball.jpg"));

addDivider();

titleText("FMTSA and our Community", "Our club utilizes a wide variety of social media, including Instagram, Twitter, Facebook, YouTube, and Snapchat. These accounts are regularly updated by our social media team to document and advertise the organization. In an effort to attract the widest possible audience, we also produce regular vlogs that reach hundreds of viewers per video. In addition, we annually host two summer camps for K-8 students that introduce them to the competitive engineering, robotics, and technology events scene. We also stage demonstrations throughout the year for student bodies and local sponsors. These outreach efforts are essential in sustaining and growing the team through feeder programs and securing sponsorships. It only made sense to pass that favor on as soon as we had the skill and know-how to help others.");

titleTextWithImage("Robotics in the Community", "In recent years, our team has helped start four FLL teams to promote robotics at a younger age, and, on the same note, raised five thousand dollars for the FLL program in Haiti. They suffered an enormous setback as a result of the devastation brought by Hurricane Matthew in late 2016. Our team has continued to mentor team 44 as well, teaching them about growth strategies and the design process in weekly meetings over the course of the season. The mentors assist with game strategy through tips on robot optimization and sensor usage that the younger kids may have overlooked. In the past year, we've also assisted our sister high school and secondary feeder school by starting tech clubs for them.", "img/summer-camp-7.jpg", false);

addDivider();

titleText("Flower Mound Robotics Summer Camp", "The summer camp is one of our biggest outreach programs. This is a student-designed, student-led, and student-taught robotics program that takes place over two weeks. The goal is to provide a fun and challenging crash course in engineering, robotics, and programming to elementary and middle school kids. Through this camp, we hope to provide an exciting introduction to STEM and encourage younger kids to explore their interests. <br> <br> The beginner level camp includes lessons in designing, building, and programming a basic VEX robot for a competition that will take place at the end of the week. The participants will use programs like Autodesk Inventor to model a concept of their robot on the computer before building. After building, there will be a lesson in programming the completed robot. At the end of the week, participants will compete in a friendly competition using the robots that they have built during the camp. <br> <br> The advanced level camp will strengthen the skills taught in the beginner level classes, while teaching new skills in robot building, with a wider range of parts available to use. The participants will also be taught how to use more advanced features of Autodesk Inventor and also how to code for more advanced operation like autonomous periods. There will be a competition at the end of the week, however, this competition will have a more advanced challenge that the robot must be able to complete.");

imageRow(array("img/summer-camp-1.jpg", "img/summer-camp-2.jpg", "img/summer-camp-3.jpg"));

imageRow(array("img/summer-camp-4.jpg", "img/summer-camp-5.jpg", "img/summer-camp-6.jpg"));

addFooter();
addScripts(array("img/hand-build.jpg", "img/robot-hand.jpg", "img/hand.jpg"));