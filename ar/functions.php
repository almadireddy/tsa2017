<?php
$scrollRatio = 0.65;

function createHead($title) {
  echo "<html>";
  echo "<head>\n";
  echo "  <link rel=\"stylesheet\" href=\"css/main.css\">\n";
  echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
  echo "  <title>{$title}</title>";
  echo "</head>";
}

function createNavbar() {
  echo "<body>";
  echo "<nav class=\"navbar navbar-default navbar-fixed-top\" id=\"navbar\">\n";
  echo "  <div class=\"container\">\n";
  echo "    <div class=\"navbar-header\">\n";
  echo "      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-collapse\" aria-expanded=\"false\" id=\"navicon\">\n";
  echo "        <span class=\"icon-bar\"></span>\n";
  echo "        <span class=\"icon-bar\"></span>\n";
  echo "        <span class=\"icon-bar\"></span>\n";
  echo "      </button>\n";
  echo "      <a class=\"navbar-brand\" href=\"../\">FMTSA</a>\n";
  echo "      <a class=\"navbar-brand active\" href=\"index.php\">Augmented Reality</a>\n";
  echo "    </div>\n";
  echo "\n";
  echo "    <div class=\"collapse navbar-collapse navbar-right\" id=\"nav-collapse\">\n";
  echo "      <ul class=\"nav navbar-nav\" id=\"nav\">\n";
  echo "        <li class='dropdown'>";
  echo "          <a href=\"technology.php\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Technology <span class=\"caret\"></span></a>";
  echo "          <ul class='dropdown-menu dropdown-menu-left'>";
  echo "            <li><a href=\"technology.php#past\">Past</a>";
  echo "            <li><a href=\"technology.php#modern\">Modern</a>";
  echo "            <li><a href=\"technology.php#future\">Future</a>";
  echo "            <li><a href=\"technology.php#skyviewCaseStudy\">Case Study</a>";
  echo "          </ul>";
  echo "        </li>";

  echo "        <li class='dropdown'>";
  echo "          <a href=\"benefits.php\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Benefits <span class=\"caret\"></span></a>";
  echo "          <ul class='dropdown-menu dropdown-menu-left'>";
  echo "            <li><a href=\"benefits.php#commercial\">Commercial</a>";
  echo "            <li><a href=\"benefits.php#recreational\">Recreational</a>";
  echo "            <li><a href=\"benefits.php#educational\">Educational</a>";
  echo "            <li><a href=\"benefits.php#research\">Research</a>";
  echo "          </ul>";
  echo "        </li>";

  echo "        <li class='dropdown'>";
  echo "          <a href=\"concerns.php\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Concerns <span class=\"caret\"></span></a>";
  echo "          <ul class='dropdown-menu dropdown-menu-left'>";
  echo "            <li><a href=\"concerns.php#cognitive\">Cognitive</a>";
  echo "            <li><a href=\"concerns.php#health\">Health</a>";
  echo "            <li><a href=\"concerns.php#privacy\">Privacy</a>";
  echo "            <li><a href=\"concerns.php#pokemonCaseStudy\">Case Study</a>";
  echo "          </ul>";
  echo "        </li>";

  echo "        <li><a class=\"navbar-link\" href=\"about.php\">About</a></li>\n";
  echo "      </ul>\n";
  echo "    </div>\n";
  echo "  </div>\n";
  echo "</nav>";
}

function createHero($title, $subtitle = null, $id = null) {
  echo "<div id='{$id}' class=\"hero row\" data-stellar-background-ratio=\"{$GLOBALS['scrollRatio']}\">\n";
  echo "    <div class=\"page-title col-sm-12 text-center\">\n";
  echo "      <h1 class='display'>{$title}</h1>\n";
  if (!$subtitle == null) {
    echo "      <h3>{$subtitle}</h3>\n";
  }
  echo "      <img class=\"down-arrow\" src=\"img/arrow_down.png\" alt=\"\">\n";
  echo "    </div>\n";
  echo "    <canvas></canvas>\n";
  echo "  </div>";
  echo "<div class=\"container\">";
}

function titleText($title, $text = null, $link = null, $buttonText = null) {
  if (!$text == null) {
    echo "<div class=\"row content\">\n";
    echo "      <div class=\"col-sm-8 col-sm-push-2 text-center\">\n";
    echo "        <h1 class=\"section-title\">{$title}</h1>\n";
    echo "        <p class=\"section-text\">{$text}</p>";
  }
  else {
    echo "<div class=\"row title-row\">\n";
    echo "      <div class=\"col-sm-8 col-sm-push-2 text-center\">\n";
    echo "        <h1 class=\"section-title\">{$title}</h1>\n";
  }
  if (!$link == null && !$buttonText == null) {
    echo "        <a href=\"{$link}\" class=\"button\">{$buttonText}<i class=\"fa fa-chevron-right\"></i></a>\n";
  }
  echo "      </div>\n";
  echo "    </div>";
}

function titleRow($title, $id) {
  echo "<div id=\"{$id}\" class=\"row title-row\">\n";
  echo "  <div class=\"col-sm-8 col-sm-push-2 text-center\">\n";
  echo "    <h1 class=\"section-title\">{$title}</h1>\n";
  echo "  </div>\n";
  echo "</div>";
}

function imageText($url, $title, $text) {
  echo "  <div class=\"row content\">\n";
  echo "    <div class=\"col-sm-4\">\n";
  echo "      <img src=\"{$url}\" alt=\"\" class=\"image img-responsive\">\n";
  echo "    </div>\n";
  echo "    <div class=\"col-sm-8\">\n";
  echo "      <h2 class=\"section-title\">{$title}</h2>\n";
  echo "      <p class=\"section-text\">{$text}\n";
  echo "      </p>\n";
  echo "    </div>\n";
  echo "  </div>";

}

function createParallaxSpacer($id, $url = null) {
  echo "<div class=\"row parallax-spacer\" data-stellar-background-ratio=\"{$GLOBALS['scrollRatio']}\" id=\"{$id}\">";
  if ($url) {
    echo "<img src='{$url}'>";
  }
  echo "</div>";
}

function addDivider() {
  echo "<hr class='divider'>";
}

function createFooter($topMargin) {
  if ($topMargin) {
    echo "<div style='margin-top: 100px;' class=\"row footer\">\n";
  }
  else {
    echo "<div class=\"row footer\">\n";
  }
  echo "   <div class=\"col-sm-12 text-center\">\n";
  echo "     <p>Created by the 2017 Flower Mound High School Webmaster Team</p>\n";
  echo "   </div>\n";
  echo " </div>";

}

function addScripts() {
  echo "  </div>";
  echo "</div>";
  echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>\n";
  echo "<script src=\"js/scripts.js\"></script>";
  echo "<script src=\"https://use.fontawesome.com/2b49d5e2f1.js\"></script>";
  echo "</body>";
}