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
          'posts_per_page' => 8
        );

        if($count > 0)
        {
          $slideInputRadio = 1;
          while($slideInputRadio <= $count)
          {
            echo '<input type="radio" name="radio-btn" id="radio' . $slideInputRadio . '" class="navigation_menu_slider" onclick="make_active(' . $slideInputRadio . ')">';
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
            the_post_thumbnail();
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
          {
            echo "<label for='radio".$slideLabelCounter."' class='manual-btn'>";
            echo "</label>";
            $slideLabelCounter += 1;
          }
          echo "</div>";
        }

        wp_reset_postdata();

        ?>

    </div>
