<?php
include "parts/functions.php";
head("Architecture & Engineering");
createHeader("Computer Science and Programming", "", "compSciHeader");
createNavbar();

titleTextWithImage("Mrs. Elaine Hitch", "Mrs. Elaine Hitch was born in 1962, and has been teaching for 25 years. She has been teaching programming at Flower Mound HIgh School for 7 years. She graduated from the University of North Texas in 1984 with a B.A in Computer Science. After that, in 1990, she got her Masters in Computer Education and Cognitive Systems. She teaches Advanced Computer Programming, Computer Science I & II, and AP Computer Science.", "img/mrsHitch.jpg", false);

titleTextWithImage("Mr. Jon Rhodes", "Mr. Jon Rhodes was born in 1980, and has been teaching for 14 years. Both of his parents were teachers, but he felt like he wanted to do something different, so he attended and graduated from Baylor University in 2003 with a major in telecommunications. He decided to get a teaching certificate, and, after coaching debate for the first ten years of his teaching career, he began teaching programming. Currently, he teaches Computer Programming and Computer Science I.", "img/rhodes.jpg", false);

addDivider();

titleText("Computer Programming", "In Computer Programming, students are introduced to the world of computer programming through Java. Students who want to challenge themselves have the option of taking Advanced Computer Programming, which studies the same concepts as Computer Programming but at an accelerated pace. In both courses, students learn the fundamentals of programming, from printing out statements onto the screen and creating a text-based user interface, to manipulating arrays and other data to do complex calculations with ease. Both Mrs. Hitch and Mr. Rhodes emphasize problem-solving and analytical skills, so students are taught to think logically and work through complicated processes. The Advanced Computer Programming course that is taught by Mrs. Hitch is required for AP Computer Science, but both classes are engaging and informative.");

addDivider();

titleText("Computer Science I & II", "Many people have said that learning how to program is like learning an entirely new language. As a result of this idea, Flower Mound High School introduced Computer Science 1 and Computer Science 2 in 2015. These courses are taught by Mrs. Hitch and Mr. Rhodes and, when taken together, fulfill a foreign language requirement. Computer Science 1 takes a similar approach to Computer Programming and Advanced Computer Programming, teaching the basics of Java and broad technological systems and concepts. Computer Science 2 covers much of the curriculum of AP Computer Science, but less extensively. These courses are ideal for students who are interested in programming and need a foreign language credit, but are not necessarily interested in pursuing computer science in the future.");

addDivider();

titleText("AP Computer Science", "AP Computer Science builds upon the skills learned in Computer Programming and advances students knowledge in computer science. The prerequisites for this course are the completion of Advanced Computer Programming and strong programming skills. Although this is a rigorous AP course, students who take it gain valuable insight into computer science and an enriched Java programming skill set. Students continue from where they left off in Advanced Computer Programming and learn key programming concepts, such as sorting/searching, algorithms, and advanced object-oriented programming. In this class, students are encouraged to work together and explore concepts beyond what is required. AP Comp Sci ends with an AP Test that can count towards college credit. This can be both a money-saver and an appealing part of your college resume. This class provides helpful knowledge and furthers your skills, which are useful in many different career paths, from Aerospace Engineering to Computer Science.");

imageRow(array(
  "img/rohitprog.jpg",
  "img/alprog.jpg",
  "img/keven.jpg"
));


returnToCte();

addFooter();
addScripts(null);

