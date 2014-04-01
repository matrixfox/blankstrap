<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); echo sprintf( __( ' Built with: %1$s.', 'blankslate' ), '<a href="http://getbootstrap.com/getting-started/">Bootstrap</a>' ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<!-- Google hosted jQuery minified JavaScript -->
<script src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js' type='text/javascript'></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
</body>
</html>