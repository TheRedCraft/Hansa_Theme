<?php wp_footer(); ?> <!--footer code von wordpress einbinden-->
<div class="footer"> <!--Unseren footer laden-->
  <div class="menu-and-infos">
  <div class='footer-menu-footer-div'>
  <?php wp_nav_menu( array( #Footer menü einbinden
    'theme_location' => 'footer-menu'
  ) ) ?>
  </div>
  <div class="footer-infos">  <!--Footer Infos-->
  <p>
    Hansa-Gymnasium Bergedorf
    <br>
    Hermann-Distel-Str. 25
    <br>
    21029 Hamburg
	 <br>
    <br>
    <a href="mailto: hansa-gymnasium-bergedorf@bsb.hamburg.de">	hansa-gymnasium-bergedorf(at)bsb.hamburg.de</a> 
    <br>
	<br>
    Tel.: 040 – 428 93 43 0
  </p>
  </div>
  <div class="auszeichnungen">
    <?php
    $argsAuszeichnungen = array (
      'category_name' => 'auszeichnungen',
      'category__not_in' => array(get_cat_ID('sliderImg')),
    );

    $auszeichnungenQuery = new WP_Query($argsAuszeichnungen);

    if($auszeichnungenQuery->have_posts()) {
      while($auszeichnungenQuery -> have_posts())
        {
          $auszeichnungenQuery->the_post();
          echo("<a href='".get_the_permalink()."'>");
          the_title();
          echo("</a>");
          echo("<br><br>");
        }
    }
    ?>
  </div>
  </div>
  <div class='footer-map-footer-div'> <!--Footer Google Map-->
  <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=10.2168345451355%2C53.492408471809114%2C10.223733186721804%2C53.49513707327038&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=18/53.49377/10.22028">Ganze Karte ansehen</a></small>
  <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1057.3093468898915!2d10.220870853136471!3d53.493848775368775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b1f2601c4f93ab%3A0x72b621d9c9864af8!2sHansa-Gymnasium%20Bergedorf!5e0!3m2!1sde!2sde!4v1665760760299!5m2!1sde!2sde" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  --></div>
</div>
<div class="copyright-bar"><p>© Hansa-Gymnasium Bergedorf 2022. Alle Rechte vorbehalten.</p> </div> <!--Copyright-Bar-->
<?php
?>
</body> <!--Alle unsere Scripte einbinden sowohl auf localem rechner verzeichnis als auch für die Website-->
<script src="./wordpress/wp-content/themes/Hansa_Theme/main.js"></script>
<script src="/wordpress/wp-content/themes/Hansa_Theme/main.js"></script>
<script src="./wordpress/wp-content/themes/Hansa_Theme-master/main.js"></script>
<script src="/wordpress/wp-content/themes/Hansa_Theme-master/main.js"></script>
<script src="/wp-content/themes/Hansa_Theme-master/main.js"></script>
</html>
