<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body onload="searchgrid()">
    <?php 
      echo "<div class='first_menu'>";
      echo "<img src='/wordpress/wp-content/themes/Hansa_Theme/img/logo.png'>";
      echo "<div class='first_search'>";
      get_search_form(); 
      echo "</div>";
    ?>

<nav>
    <?php
        echo '<div class="first_nav">';
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
        ));
        echo "</div>";
      echo "</div>"
    ?>
</nav>


<div class="slider">
      <div class="slides">

        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5">
        <input type="radio" name="radio-btn" id="radio6">
        <input type="radio" name="radio-btn" id="radio7">
        <input type="radio" name="radio-btn" id="radio8">

        <div class="slide first">
          <img src="/wordpress/wp-content/themes/Hansa_Theme/img/header_Hauptgebaeude.jpg" alt="">
        </div>
        <div class="slide">
          <img src="/wordpress/wp-content/themes/Hansa_Theme/img/Gaeste_aus_Ghana.jpeg" alt="">
        </div>
        <div class="slide">
          <img src="/wordpress/wp-content/themes/Hansa_Theme/img/Chemiebaum.jpeg" alt="">
        </div>
        <div class="slide">
          <img src="/wordpress/wp-content/themes/Hansa_Theme/img/header_Klassenrat.jpg" alt="">
        </div>
        <div class="slide">
          <img src="/wordpress/wp-content/themes/Hansa_Theme/img/header_Natur.jpg" alt="">
        </div>
        <div class="slide">
          <img src="/wordpress/wp-content/themes/Hansa_Theme/img/header_sportfest.jpg" alt="">
        </div>
        <div class="slide">
          <img src="/wordpress/wp-content/themes/Hansa_Theme/img/header_wattwanderung.jpg" alt="">
        </div>
        <div class="slide">
          <img src="/wordpress/wp-content/themes/Hansa_Theme/img/Peace1.jpeg" alt="">
        </div>
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
          <div class="auto-btn5"></div>
          <div class="auto-btn6"></div>
          <div class="auto-btn7"></div>
          <div class="auto-btn8"></div>
        </div>

      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <label for="radio5" class="manual-btn"></label>
        <label for="radio6" class="manual-btn"></label>
        <label for="radio7" class="manual-btn"></label>
        <label for="radio8" class="manual-btn"></label>
      </div>

    </div>
