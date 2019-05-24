<?php
include "parts/functions.php";

head("FMHS Robotics");

createHeader("Flower Mound Career and Technology Education",
  "Educating Tomorrow's Leaders", "cteHeader");

createNavbar();

titleTextWithImage("Architecture and Engineering", "In these classes, taught by Mr. Szydlik, students learn the principles of Engineering, as well as how to properly sketch and present their ideas. They explore pencil sketching in 2D and 3D before moving onto CAD (Computer-Aided-Design) visualization using Autodesk Inventor Professional. The skills that students learn in these classes can be applied to TSA events and allow students to explore potential careers in STEM.", "img/arch-3.jpg", false, "engineering.php", "Architecture and Engineering");


titleTextWithImage("Computer Science and Programming", "Computer programming, a skill vital to the technology of tomorrow, is introduced in these classes. Mrs. Hitch and Mr. Rhodes teach several computer science courses, ensuring that there is a class available for students of all skill levels. Students learn several concepts, ranging from \"Hello World\" to creating complex graphical user interfaces. In the Programming and Computer Science l/ll classes, students are taught the basics of coding, with AP credit and advanced skills available in the AP Computer Science class.", "img/compsci-1.jpg", true, "compsci.php", "Computer Science");


titleTextWithImage("Fashion Design", "Kids interested in learning how to become a fashion designer can take this class to learn the ins-and-outs of costume design, apparel and the fashion industry. This class is also valuable even if you do not want to be a fashion designer, as it teaches students how be practical and make their own clothes.", "img/fashion-2.jpg", false, "fashion.php", "Fashion Design");

addFooter();

addScripts(null);