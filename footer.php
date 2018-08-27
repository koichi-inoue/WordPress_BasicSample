<footer>
  <?php
    if ( has_nav_menu( 'footer-navi' )){ wp_nav_menu( array('theme_location' => 'footer-navi' )); }
  ?>
  <p id="copyright">&copy; <?php bloginfo('name'); ?></p>
</footer>

<?php wp_footer(); ?>

</body>

</html>
