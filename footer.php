
	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer class="site-footer" role="contentinfo">
		<div class="footer-wrapper clear">

			<div class="site-info">
				<?php
				$post_id = 13;
				$queried_post = get_post($post_id);
				echo $queried_post->post_content;
				?>
			</div><!-- .site-info -->
			<!-- <?php if ( has_nav_menu( 'footer' ) ) : ?> -->
				<!-- <nav class="footer-navigation" role="navigation"> -->
<!-- 					<?php
						wp_nav_menu( array(
							'theme_location'  => 'footer',
							'menu_class'      => 'clear',
							'depth'           => 1,
						) );
					?> -->
				</nav><!-- .footer-navigation -->
			<!-- <?php endif; ?> -->

		</div><!-- .footer-wrapper -->
	</footer><!-- .site-footer -->

</div> <!-- #inner-body-wrap -->
<!-- </div>  --><!-- .off-canvas-nav -->
</div><!-- #page-background -->

<?php wp_footer(); ?>

</body>
</html>