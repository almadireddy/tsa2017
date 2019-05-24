<?php
include "parts/functions.php";

head("FMHS Robotics");

createHeader("Flower Mound Robotics",
  "VEX Team 2019 and FIRST Team 4192");

createNavbar();

titleText("Vex Robotics Competition", "The yearly VEX Robotics challenge serves as an easily accessible introduction to competitive robotics for all of our students, freshman or senior. Club participants also learn essential life skills through the organization and day to day operations of each team, as well as interactions with teams from across the world. Team members are encouraged to to mentor teams in the region and volunteer at their competitions for setup, teardown, and reffing. This is part of an effort on our part to act as role models for the younger students and continue to foster their interest in robotics. Due to our success, outreach, and mentorship, we serve as the role model for other programs that have started in the past few years, from the middle school teams to our own high school's entrance level program. Our club has helped start eight robotics teams in our main feeder school, every single one of which is mentored by a team member. Within the next two years, our community could be listed as the hometown for two dozen robotics teams, in programs from FRC to VEX to FLL. The objective of the competition this year, VEX Starstruck, is to pick up and throw foam stars and pillow cubes over a fence. While doing this, you also have to return the ones that your opponents have placed on your side of the field. At the end of the match, you can climb a pole to score extra points. This year, our club has experienced massive success in VEX. We have expanded our program to include 7 teams and hosted two regional competitions. With multiple regional and state level wins and other awards, 3 of our teams advanced beyond the VEX state level. 2019B and 2019F competed at VEX Nationals, where 2019F qualified for VEX Worlds with a second place finish.  2019X competed at TSA VEX at the State Conference and qualified for the National Conference with a second place finish.");

youtubeEmbed("https://www.youtube.com/embed/4zCHyo2bIw8");

imageRow(array(
  "img/vex-winners.jpg",
  "img/vex-drive.jpg",
  "img/vex-winners-2.jpg"
));

imageRow(array(
  "img/vex-game.jpg",
  "img/vex-build.jpg",
  "img/vex-strategy.jpg"
));

addDivider();

titleText("FIRST Robotics Team 4192: The Jaggernauts", "When Flower Mound High School Robotics first began competing in FIRST Robotics in 2012, the team was comprised of only a few juniors and seniors. Since then, thanks in large part to an increased focus on FIRST outreach and awareness by students and parents, the club has expanded the FIRST team to include any interested members. Regardless of how much experience newcomers have, we have organized systems that ensure that everyone benefits from the experience and is actively involved in the team. Students and parents have worked tirelessly to secure sponsorships and grants, gaining partnerships with innovative entities such as NASA and Lockheed Martin. These strategic partnerships, along with the help of several fantastic and experienced mentors, have allowed us to expand our horizons and explore new technology. <br><br>For instance, this year we have focused on mastering vision processing in order to effectively maneuver around the field. As we expand our outreach, we are starting to see more and more success in our competitions. Last year, during FIRST Stronghold, we were invited to compete at the FIRST World Championships, but were unable to attend. We were also invited to the Texas UIL Robotics State Championships, where we advanced to the semi-finals. This year, we are competing at two Regionals for the first time. At the Dallas Regional, we were awarded the Gracious Professionalism Award for upholding the FIRST code and showing excellent sportsmanship, on and off the field. At the Brazos Valley Regional, we finished 13th out of 41 teams and for the first time in our team’s history, we were the 8th Seed Alliance Captain. The outlook for our team, the Jaggernauts, is promising as we continue to expand, learn, and improve. <br><br>This year, the FIRST Challenge was Steamworks, a steampunk-themed game that involved shooting wiffle balls into a tall goal, and picking up and delivering gears onto flexible springs, and climb a rope at the end of the match. We were able to build a robot that did all three things, and then optimized the robot for gears and climbing only, taking the tradeoff as a part of our strategy, which paid off in the end.");

imageRow(array(
  "img/frc-drive.jpg",
  "img/frc-hang.jpg",
  "img/frc-build.jpg"
));

imageRow(array(
  "img/frc-hang-2.jpg",
  "img/frc-build-2.jpg",
  "img/frc-build-3.jpg"
));

addFooter();

addScripts(array("img/frc-game.jpg", "img/vex-bots.jpg", "img/sam-build.jpg", "img/frc-hang-3.jpg"));