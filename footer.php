
	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer class="site-footer" role="contentinfo">
		<div class="small-12 columns clear row" id="footer-wrapper">
			<div id="invisalign"></div>

			<div id="contact-info">
				<?php
				$post_id = 13;
				$queried_post = get_post($post_id);
				echo $queried_post->post_content;
				?>
				<?php
				$post_id = 11;
				$queried_post = get_post($post_id);
				echo $queried_post->post_content;
				?>
			</div>
			
			<div id="facebook"></div>

			<div class="site-info">
				<?php
				$post_id = 15;
				$queried_post = get_post($post_id);
				echo $queried_post->post_content;
				?>
			</div><!-- .site-info -->
		</div>

		</div><!-- #footer-wrapper -->
	</footer><!-- .site-footer -->

</div> <!-- #inner-body-wrap -->
<!-- </div>  --><!-- .off-canvas-nav -->
</div><!-- #page-background -->

<?php wp_footer(); ?>

</body>
</html>