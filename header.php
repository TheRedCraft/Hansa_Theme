<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>

    <?php get_search_form(); ?>

<nav>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
        ));
    ?>
</nav>


<div class="slider">
      <div class="slides">

        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <div class="slide first">
          <img src=".img/1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../img/2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../img/3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../img/4.jpg" alt="">
        </div>

        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>

      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>

    </div>
