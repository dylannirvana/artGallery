<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<a name="top-position"></a>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper wrapper-fluid wrapper-navbar wrapper-variable-lg " id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content',
		'core-understrap' ); ?></a>

			<div class="container">

				<div class="row justify-content-center">

					<div class="col-md-10">

						<nav class="navbar sticky-top navbar-light site-navigation navbar-main px-0">

							<!-- Your site title as branding in the menu -->
							<?php if ( ! has_custom_logo() ) { ?>
							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
							   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								<?php bloginfo( 'name' ); ?>
							</a>
							<?php } else {
								the_custom_logo();
								} 
							?><!-- end custom logo -->

							<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
							<button class="navbar-toggler navbar-toggle" type="button" data-toggle="modal" data-target="#ModalNav" data-backdrop="true" aria-expanded="false"
							        aria-label="Toggle navigation">
							</button>
						</div>

					</div>

				</div>

				
			</div> <!-- .container -->


		</nav><!-- .site-navigation -->


		<!-- The WordPress Off Canvas / Drop Down Menu comes here -->

		<?php get_template_part( 'global-templates/modal-nav'); ?>

	</div><!-- .wrapper-navbar end -->
