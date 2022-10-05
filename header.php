<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body onload="searchgrid()">
    <?php
      echo "<div class='first_menu'>";
      echo "<img src='/wordpress/wp-content/uploads/2022/10/logo.png'>";
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

        <?php

        $category_id_sliderImg = get_cat_ID('sliderImg');
        $category = get_category($category_id_sliderImg);
        $count = $category->category_count;

        wp_reset_postdata();

        $argsSlider = array(
          'category_name' => 'sliderImg',
          'posts_per_page' => 8,
          'status' => 'publish'
        );

        if($count > 0)
        {
          $slideInputRadio = 1;
          while($slideInputRadio <= $count)
          {
            ?>
            <input type="radio" name="radio-btn" id="radio<?php$slideInputRadio?>" class="navigation_menu_slider" onclick="make_active(<?php$slideInputRadio?>)">
            <?php
            $slideInputRadio += 1;
          }
        }

        wp_reset_postdata();


        $sliderLoop = new WP_Query($argsSlider);

        if($sliderLoop->have_posts())
        {
          $slideCounter = 0;
          while($sliderLoop->have_posts())
          {
            if($slideCounter == 0)
            {
              echo '<div class="slide first">';
            }
            else
            {
              echo '<div class="slide">';
            }
            $sliderLoop->the_post();
            $thumbnailId = get_post_thumbnail_id();
            ?>
            <img src="<?php echo wp_get_attachment_image_url( $thumbnailId, 'single-post-thumbnail'); ?>" alt="">
            <?php
            echo "</div>";
            $slideCounter += 1;
          }
        }


        if($count > 0)
        {
          $slideBtnCounter = 1;
          echo "<div class'navigation-auto'>";
          while($slideBtnCounter <= $count)
          {
            echo "<div class='auto-btn".$slideBtnCounter."'>";
            echo "</div>";
            $slideBtnCounter += 1;
          }
          echo "</div>";
        }

        echo "</div>";

        if($count > 0)
        {
          $slideLabelCounter = 1;
          echo "<div class'navigation-manual'>";
          while($slideLabelCounter <= $count)
          { ?>
            <label for="radio<?php$slideLabelCounter?>" class="manual-btn"></label>

            <?php
            echo "</label>";
            $slideLabelCounter += 1;
          }
          echo "</div>";
        }

        wp_reset_postdata();

        ?>

    </div>
