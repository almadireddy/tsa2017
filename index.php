<?php
include "parts/functions.php";

head("Flower Mound Robotics");

createHeader("Flower Mound Robotics and TSA", "Every Student, Every Challenge, Every Day.");

createNavbar();

titleTextWithImage("Technology Student Association",
  "Chapter 619, founded 1999, strives to help students further their skills in STEAM (STEM + Arts) areas, and inspires them to learn more, do more, and achieve more. Our club currently has over 80 dedicated and talented members who compete in almost all TSA and Texas TSA Categories. ", "img/group.jpg", false, "tsa.php", "Chapter 619");

titleTextWithImage("Robotics",
  "Our robotics program consists of VEX Team 2019 and FIRST Team 4192. Our 7 VEX teams meet throughout the year to design, build, and program their robots, inspiring them to engage in teamwork, research, and learning outside of school. Our FIRST team brings together about 40 people who all work together, six days a week, during and after an intensive six week build season. The experiences that we gained have taught us problem-solving, teamwork, and effective communication.", "img/win.jpg", true, "robotics.php", "Robotics");

titleTextWithImage("FMHS CTE",
  "Flower Mound High School, a world class school educating tomorrow's leaders, offers a variety of well-taught classes that prepare students for future careers. With classes ranging from engineering and architecture, to computer science and fashion design, our school provides us with the opportunity to pursue our passions and explore the occupations that interest us.", "img/cte.jpg", false, "cte.php", "FMHS CTE");

addFooter();
addScripts(array("img/football.jpg", "img/flag.jpg", "img/robotics-2.jpg"));

