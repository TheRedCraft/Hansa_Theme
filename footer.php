<?php wp_footer(); ?>
<div class="footer">
  <div class='footer-menu-footer-div'>
  <?php wp_nav_menu( array(
    'theme_location' => 'footer-menu'
  ) ) ?>
  </div>
  <div class="footer-infos"> 
    <p>
    Hansa-Gymnasium Bergedorf
    <br>
    Hermann-Distel-Str. 25
    <br>
    21029 Hamburg
    <br>
    <br>
    Tel.: 040 – 428 93 43 0
  </p>
  </div>
  <div class='footer-map-footer-div'>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1057.3093468898915!2d10.220870853136471!3d53.493848775368775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b1f2601c4f93ab%3A0x72b621d9c9864af8!2sHansa-Gymnasium%20Bergedorf!5e0!3m2!1sde!2sde!4v1665760760299!5m2!1sde!2sde" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<div class="copyright-bar"><p>Copyright 2022</p> </div>
<?php
/*
$file = fopen("http://localhost/wordpress/wp-content/themes/Hansa_Theme/calenderimgparsed.txt","r");

while(! feof($file))
  {
    $line = trim(fgets($file));
    echo "<script>addToCalender('".$line."')</script>";
  }

fclose($file);

Test Hallo! Test change! noch mehr changes

echo "<script>alertCalender()</script>";*/
?>
</body>
<script src="./wordpress/wp-content/themes/Hansa_Theme/main.js"></script>
<script src="./wordpress/wp-content/themes/Hansa_Theme/hamburger.js"></script>
<script src="./wordpress/wp-content/themes/Hansa_Theme/calender.js"></script>
<script src="/wp-content/themes/Hansa_Theme-master/main.js"></script>
<script src="/wp-content/themes/Hansa_Theme-master/hamburger.js"></script>
<script src="/wp-content/themes/Hansa_Theme-master/calender.js"></script>
</html>
