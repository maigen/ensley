<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page-background" >
<!-- 	<div class="off-canvas-wrap" data-offcanvas> -->
		<div class="inner-body-wrap">
			<header id="logo-centered-header">
				<div class="header-row"><br></div>
				<div class="header-row">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="http://localhost/ensley/wp-content/themes/edin/ensley-ortho-green.png" id="ensley-logo">  
					</a>
				</div>
			<div class="row-full-width header-row"></div> <!-- allows a space with dividing lines -->

			<!-- If on home page, displays slider -->
			<?php if ( is_home() ) {
				get_template_part( 'partials/header', 'index' ); 
			} ?> <!-- end slider -->

				<div class="header-wrapper">
					<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'secondary' ) ) : ?>
						<div id="site-navigation" class="header-navigation">
							<button class="menu-toggle"><?php _e( 'Menu', 'edin' ); ?></button>
							<div class="navigation-wrapper clear">
								<?php if ( has_nav_menu( 'secondary' ) ) : ?>
									<nav class="secondary-navigation" role="navigation">
										<?php
											wp_nav_menu( array(
												'theme_location'  => 'secondary',
												'container_class' => 'menu-secondary',
												'menu_class'      => 'clear',
												'depth'           => 1,
											) );
										?>
									</nav><!-- .secondary-navigation -->
								<?php endif; ?>
								<?php if ( has_nav_menu( 'primary' ) ) : ?>
									<nav class="primary-navigation" role="navigation">
										<?php
											wp_nav_menu( array(
												'theme_location'  => 'primary',
												'container_class' => 'menu-primary',
												'menu_class'      => 'clear',
											) );
										?>
									</nav><!-- .primary-navigation -->
								<?php endif; ?>
							</div><!-- .navigation-wrapper -->
						</div><!-- #site-navigation -->
					<?php endif; ?>

				</div><!-- .header-wrapper -->
			</header><!-- #masthead -->

			<div class="small-12 columns">
