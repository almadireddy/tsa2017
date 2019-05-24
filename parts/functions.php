<?php
function head($title) {
  echo "<html>";
  echo "<head>\n";
  echo "  <link rel=\"stylesheet\" href=\"css/vegas.css\">\n";
  echo "  <link rel=\"stylesheet\" href=\"css/main.css\">\n";
  echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
  echo "  <title>{$title}</title>";
  echo "</head>";
  echo "<body>";
}

function createNavbar() {
  echo "<div class=\"container\" id='highlight-spacing'>";
  echo "<div class=\"navbar-spacer\"></div>\n";
  echo "<nav class=\"navbar\">\n";
  echo "<div class='navicon openButton'>";
  echo "  <span id='top-navicon'></span>";
  echo "  <span id='middle-navicon'></span>";
  echo "  <span id='bottom-navicon'></span>";
  echo "</div>";
  echo "  <div class=\"container\">\n";
  echo "    <ul class=\"navbar-list\" id='#nav'>\n";
  echo "        <span class='left-nav'>";
  echo "        <li class=\"navbar-item\">\n";
  echo "          <a href=\"index.php\" class=\"navbar-link active\">FMTSA</a>\n";
  echo "        </li>\n";
  echo "        </li><li class=\"navbar-item\">\n";
  echo "          <a href=\"ar/\" class=\"navbar-link\">Augmented Reality</a>\n";
  echo "        </li>\n";
  echo "        </span>";
  echo "        <span class='u-pull-right right-nav'>";
  echo "        <li class=\"navbar-item\">\n";
  echo "          <a href=\"tsa.php\" class=\"navbar-link\">TSA Chapter 619</a>\n";
  echo "        </li>\n";
  echo "        <li class=\"navbar-item\">\n";
  echo "          <a href=\"robotics.php\" class=\"navbar-link\">Robotics</a>\n";
  echo "        </li>\n";
  echo "        </li><li class=\"navbar-item \">\n";
  echo "          <a href=\"cte.php\" class=\"navbar-link last-nav\">Flower Mound CTE</a>\n";
  echo "        </li>\n";
  echo "        </span>";
  echo "        <li id='magic-line'></li>\n";
  echo "      </ul>\n";
  echo "  </div>\n";
  echo "</nav>";
}

function createHeader($title, $subtitle, $id = null) {
  if (!($id == null)) {
    echo "<section class=\"header\" id='{$id}'>\n";
  } else {
    echo "<section class=\"header\">\n";
  }
  echo "  <h1 class=\"title\">{$title}</h1>\n";
  echo "  <p class=\"subtitle\">{$subtitle}</p>\n";
  echo "</section>";
}

function titleTextWithImage($title, $text, $imageURL, $reverse, $linkURL = null, $linkText = null) {
  if ($reverse == true) {
    echo "<div class=\"row content-row\">\n";
    echo "        <div class=\"five columns\">\n";
    echo "        <a class='magnific-link' href='{$imageURL}' title=''>";
    echo "          <img src=\"{$imageURL}\" alt=\"\" class=\"img-responsive\">\n";
    echo "        </a>";
    echo "        </div>\n";
    echo "        <div class=\"seven columns\">\n";
    echo "          <h2 class=\"section-title\">{$title}</h2>\n";
    echo "          <p>{$text}</p>\n";
    if (!is_null($linkURL)) {
      echo "<a class=\"button button-primary\" href=\"{$linkURL}\">{$linkText} <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>";
    }
    echo "        </div>\n";
    echo "      </div>";
    echo "    <hr class=\"divider\">";
  }
  else {
    echo "<div class=\"row content-row\">\n";
    echo "        <div class=\"seven columns\">\n";
    echo "          <h2 class=\"section-title\">{$title}</h2>\n";
    echo "          <p>{$text}</p>\n";
    if (!is_null($linkURL)) {
      echo "<a class=\"button button-primary\" href=\"{$linkURL}\">{$linkText} <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>";
    }
    echo "        </div>\n";
    echo "        <div class=\"five columns\">\n";
    echo "        <a class='magnific-link' href='{$imageURL}' title=''>";
    echo "          <img src=\"{$imageURL}\" alt=\"\" class=\"img-responsive\">\n";
    echo "        </a>";
    echo "        </div>\n";
    echo "      </div>";
    echo "    <hr class=\"divider\">";
  }
}

function titleText($title, $text) {
  echo "<div class=\"row content-row\">\n";
  echo "  <div class=\"twelve columns\">\n";
  echo "    <h2 class=\"section-title text-center\">{$title}</h2>\n";
  if (!$text == null) {
    echo "    <p class=\"text-center\">{$text}</p>\n";
  }
  echo "  </div>\n";
  echo "</div>";

}

function createOfficers($rowOne, $rowTwo, $rowThree) {
  echo "<div class='magnific-gallery'>";
  echo "<div class=\"row content-row officer-row\">\n";
  foreach ($rowOne as &$officer) {
    echo "    <div class=\"four columns\">\n";
    echo "      <h3 class='officer-title'>{$officer[0]}</h3>";
    echo "      <a class='magnific-gallery-item' href='{$officer[1]}' title=''>";
    echo "        <img src=\"{$officer[1]}\" alt=\"\" class=\"img-responsive\">\n";
    echo "      </a>";
    echo "      <p class='officer-name'>{$officer[2]}</p>";
    echo "    </div>\n";
  }
  echo "    </div>\n";

  echo "<div class=\"row content-row officer-row\">\n";
  foreach ($rowTwo as &$officer) {
    echo "    <div class=\"four columns\">\n";
    echo "      <h3 class='officer-title'>{$officer[0]}</h3>";
    echo "      <a class='magnific-gallery-item' href='{$officer[1]}' title=''>";
    echo "        <img src=\"{$officer[1]}\" alt=\"\" class=\"img-responsive\">\n";
    echo "      </a>";
    echo "      <p class='officer-name'>{$officer[2]}</p>";
    echo "    </div>\n";
  }
  echo "    </div>\n";

  echo "<div class=\"row content-row officer-row\">\n";
  foreach ($rowThree as &$officer) {
    echo "    <div class=\"four columns\">\n";
    echo "      <h3 class='officer-title'>{$officer[0]}</h3>";
    echo "      <a class='magnific-gallery-item' href='{$officer[1]}' title=''>";
    echo "        <img src=\"{$officer[1]}\" alt=\"\" class=\"img-responsive\">\n";
    echo "      </a>";
    echo "      <p class='officer-name'>{$officer[2]}</p>";
    echo "    </div>\n";
  }
  echo "    </div>\n";
  echo "</div>";
}

function imageRow($URLs) {
  echo "<div class=\"row magnific-gallery content-row image-row\">\n";
  echo "    <div class=\"four columns\">\n";
  echo "    <a class='magnific-gallery-item' href='{$URLs[0]}' title=''>";
  echo "      <img src=\"{$URLs[0]}\" alt=\"\" class=\"img-responsive\">\n";
  echo "    </a>";
  echo "    </div>\n";
  echo "    <div class=\"four columns\">\n";
  echo "    <a class='magnific-gallery-item' href='{$URLs[1]}' title=''>";
  echo "      <img src=\"{$URLs[1]}\" alt=\"\" class=\"img-responsive\">\n";
  echo "    </a>";
  echo "    </div>\n";
  echo "    <div class=\"four columns\">\n";
  echo "    <a class='magnific-gallery-item' href='{$URLs[2]}' title=''>";
  echo "      <img src=\"{$URLs[2]}\" alt=\"\" class=\"img-responsive\">\n";
  echo "    </a>";
  echo "    </div>\n";
  echo "  </div>";
}

function addDivider() {
  echo "<hr class=\"desktop-divider\">";
}

function youtubeEmbed($embedCode) {
  echo "<div class='embed-container'><iframe src='{$embedCode}' frameborder='0' allowfullscreen></iframe></div>";
}

function returnToCte() {
  echo "<div class='row content-row'>";
  echo "  <a class='button button-primary return-to-cte' href='cte.php'><i class='fa fa-chevron-left'></i>CTE Classes</a>";
  echo "</div>";
}


function addFooter() {
  echo "<div class=\"row footer\">\n";
  echo "   <div class=\"twelve columns\">\n";
  echo "     <p>Created by the 2017 Flower Mound High School Webmaster Team</p>\n";
  echo "   </div>\n";
  echo " </div>";

}

function addScripts($pictures = null) {
  echo "</div> <!-- container -->";
  echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>\n";
  echo "<script src=\"js/scripts.js\"></script>";
  echo "<script src=\"https://use.fontawesome.com/2b49d5e2f1.js\"></script>";

  if (! ($pictures == null)) {
    echo "<script type='text/javascript'>";
    echo "$(\".header\").vegas({\n";
    echo "    shuffle: true,";
    echo "    slides: [\n";
    foreach ($pictures as &$picture) {
      echo "    { src: \"{$picture}\" },\n";
    }
    unset($picture);
    echo "    ],";
    echo "});";
    echo "</script>";
  }

  echo "</body> </html>";
}