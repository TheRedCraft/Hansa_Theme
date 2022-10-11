<?php wp_footer(); ?>
<div class="footer">
  <?php wp_nav_menu( array(
    'theme_location' => 'footer-menu'
  ) ) ?>
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

Test Hallo! Test change!

echo "<script>alertCalender()</script>";*/
?>
</body>
<script src="/wordpress/wp-content/themes/Hansa_Theme/main.js"></script>
</html>
