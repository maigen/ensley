<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Edin
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-wrapper clear">
			<div class="site-info">
				Copyright @2014 Ensley Orthodontics
			</div><!-- .site-info -->
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" role="navigation">
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'footer',
							'menu_class'      => 'clear',
							'depth'           => 1,
						) );
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .footer-wrapper -->
	</footer><!-- #colophon -->
</div> <!-- #inner-body-wrap -->
<!-- </div>  --><!-- .off-canvas-nav -->
</div><!-- #page-background -->

<?php wp_footer(); ?>

</body>
</html>