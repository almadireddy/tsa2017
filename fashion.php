<?php
include "parts/functions.php";
head("Fashion Design");
createHeader("Fashion Design", "", "fashionHeader");
createNavbar();

titleTextWithImage("Mrs. Jennifer Stagemeyer", "Mrs. Stagemeyer, a graduate of Texas Tech has been teaching at FMHS for 13 years. She has a degree in Family Studies, and a Masters in Family & Consumer Sciences. In addition to Fashion Design, she also teaches Lifetime Nutrition and Wellness, Interpersonal Studies, and Principles of Human Services. Her classes are known for being interactive, fun, and educational, because she wants to teach her students life skills that will help them in the future.", "img/stagemeyer.jpg", false);

addDivider();

titleText("Fashion Design", "Fashion Design is a very hands-on and interactive class where students learn the principles of fashion and clothes design by doing rather than just taking notes. In this class, students learn a vast amount of important skills, ranging from sowing (machine and hand) and sketching to industry trends and careers. These skills help the student gain a basic understanding of the Fashion industry, and the type of work that the professionals in that field do. Students get the chance to take a fun class with an open and engaging curriculum that allows them to decide whether fashion is something they want to pursue as a career. Another emphasis in this class is developing each student's personal style, boosting their self confidence and helping them dress for success.");

imageRow(array(
  "img/fashion-1.jpg",
  "img/fashion-3.jpg",
  "img/fashion-4.jpg"
));

returnToCte();

addFooter();
addScripts(null);

