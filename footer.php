<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div><!-- #main .wrapper --></div><!-- #page -->
<footer id="colophon" class="widgetarea">
	<div id="footer-area">
		<?php
		if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer')) {
			 
		}
		?>
	</div>
</footer>
<footer id="colophon" class="footerbottom">

	<div class="site-info">

		<div class="con">
			<p>Copyright &copy;
				<script type="text/javascript" language="JavaScript">
					<!--
					var today = new Date();
					document.write(today.getFullYear());
					//
					-->
				</script>
				<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
			</p>
		</div>
	</div><!-- .site-info -->

	<div id="footer-menu">
		<?php
		wp_nav_menu(
			array(
				'theme-location' => 'goldira_footer_menu',
				'menu_class' => 'goldira-footer-menu',
			)
		);

		?>
	</div>

</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>

</html>