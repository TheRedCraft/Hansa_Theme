<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hansa Gymnasium Bergedorf</title> <!--Seiten titel-->
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!--standard head von wordpress einbinden/laden-->
    <script src="/wp-content/themes/Hansa_Theme-master/calender.js"></script> <!--wichtigste zuerst gebrauchte scripte laden/einbinde-->
    <script src="/wp-content/themes/Hansa_Theme-master/main.js"></script>
    <script src="./wordpress/wp-content/themes/Hansa_Theme-master/main.js"></script> <!--wichtigste zuerst gebrauchte scripte laden/einbinde-->
    <script src="/wordpress/wp-content/themes/Hansa_Theme-master/main.js"></script>
</head>
<body onload="searchgrid()"> <!--Wenn seite geladen ist grid für die Twitch-Boxen erstellen-->
    <?php
      echo "<div class='first_menu'>"; //Header Menü und Menü-Bar + Search und co. einbinden
      echo "<div class='hansa-icon-div'>";
      echo "<a href='/'><img style='object-fit: cover;' src='/wp-content/uploads/2022/09/cropped-Hansa-Logo-Transparent-Weiss-4-768x447.png'></a>";
      echo "</div>";
    ?>

            <nav>
                <?php //alle menü-items fürs header menü einfügen

                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu-class' => 'drop-down-menu',
                    ));


                ?>
            </nav>

            <div class="hamburger"> <!--Hamburger Menü einbinden-->
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </div>
            <?php 
            
            echo "<div class='first_search'>"; //Search-Bar div hinzufügne
            get_search_form(); //Standard Search von Wordpress einbinden
            echo "</div>";
            
            ?>
          </div>

<?php if (is_front_page()) { ?> <!--Wenn es die Startseite ist Image Slider einbinden-->
<div class="slider">
      <div class="slides">

        <?php

        $category_id_sliderImg = get_cat_ID('sliderImg'); //Alle bilder mit der categorie SliderImg einbinden
        $category = get_category($category_id_sliderImg);
        $count = $category->category_count;

        wp_reset_postdata();

        $argsSlider = array( //Argumente für die Bilder Posts für den ImageSlider
          'category_name' => 'sliderImg',
          'posts_per_page' => 8,
          'status' => 'publish'
        );

        if($count > 0) //Alle SLider buttons richtig erstellen (für jedes Bild eins)
        {
          $slideInputRadio = 1;
          while($slideInputRadio <= $count)
          {
            echo '<input type="radio" name="radio-btn" id="radio'.$slideInputRadio.'" class="navigation_menu_slider" onclick="make_active('.$slideInputRadio.')">';
            $slideInputRadio += 1;
          }
        }

        wp_reset_postdata();


        $sliderLoop = new WP_Query($argsSlider); //Slider Bilder richtig einfügen

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

        if($count > 0) //Buttons damit in denen die aktuelle Slide Position angezeigt wird
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

        if($count > 0) //Slider Buttons einbinde
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

    <div class="hansa-motto-overlay"> <!--Overlay über den Slider einbinden-->
      <h2>Hansa-Gymnasium Bergedorf</h2>
      <!--<p>familiär - teamorientiert - ganzheitlich - kompetent</p>-->
    </div>
    
    </div>

  <?php }?>
