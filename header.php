<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <script src="/wp-content/themes/Hansa_Theme-master/calender.js"></script>
    <script src="/wp-content/themes/Hansa_Theme-master/main.js"></script>
</head>
<body onload="searchgrid()">
    <?php
      echo "<div class='first_menu'>";
      echo "<div class='hansa-icon-div'>";
      echo "<a href='/'><img style='object-fit: cover;' src='http://www.hansa-gymnasium.de/wp-content/uploads/2022/09/cropped-Hansa-Logo-Transparent-Weiss-4-768x447.png'></a>";
      echo "</div>";
    ?>

            <nav>
                <?php

                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu-class' => 'drop-down-menu',
                    ));


                ?>
            </nav>

            <div class="hamburger">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </div>
            <?php 
            
            echo "<div class='first_search'>";
            get_search_form();
            echo "</div>";
            
            ?>
          </div>

<?php if (is_front_page()) { ?>
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
            echo '<input type="radio" name="radio-btn" id="radio'.$slideInputRadio.'" class="navigation_menu_slider" onclick="make_active('.$slideInputRadio.')">';
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
            <img src="<?php echo wp_get_attachment_image_url( $thumbnailId, 'single-post-thumbnail'); ?>" alt="" id="SliderImage">
            <?php
            echo "</div>";
            $slideCounter += 1;
          }
        }

        if($count > 0)
        {
          $slideBtnCounter = 1;
          echo "<div class='navigation-auto'>";
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
          echo '<div class="navigation-manual">';
          while($slideLabelCounter <= $count)
          {

            echo '<label for="radio'.$slideLabelCounter.'" class="manual-btn"></label>';

            echo "</label>";
            $slideLabelCounter += 1;
          }
          echo "</div>";
        }

        wp_reset_postdata();
        /* Test of source control vscode, more change */
        ?>

    <div class="hansa-motto-overlay">
      <h2>Hansa-Gymnasium Bergedorf</h2>
      <!--<p>familiär - teamorientiert - ganzheitlich - kompetent</p>-->
    </div>
    
    </div>

  <?php }?>
