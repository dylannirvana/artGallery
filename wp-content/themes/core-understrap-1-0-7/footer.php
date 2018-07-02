<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
$the_theme = wp_get_theme();
?>
	<div class="wrapper wrapper-lg" id="wrapper-top-footer">

		<div class="container">

			<div class="row  justify-content-center">

				<div class="col-md-4 offset-md-1">

					<?php dynamic_sidebar( 'footerleft' ); ?>

				</div>

				<div class="col-md-6">

					<?php dynamic_sidebar( 'footerright' ); ?>
					
				</div>

			</div>


		</div><!-- container end -->

	</div><!-- wrapper end -->

	<div class="wrapper wrapper-md wrapper-darker" id="wrapper-footer">

		<div class="container">

				<div class="row  justify-content-center">

				<div class="col-md-10">

					<footer class="site-footer" id="colophon">

						<div class="footer-menu wrapper-variable-md">

							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer',
									'menu_class'  => 'menu-footer-container',

								)
							); ?>

						</div>

						<div class="site-info  wrapper-variable-md">

							Copyright © 2016 - <?php echo date('Y'); ?><?php printf( __( ' by ', 'core-understrap' )); ?> <?php bloginfo( 'name' ); ?></br>
							<a href="<?php echo esc_url( __( 'http://wordpress.org/',
							'core-understrap' ) ); ?>"><?php printf( __( 'Proudly powered by %s </br>', 'core-understrap' ),
							'WordPress' ); ?></a>
							<?php printf( __( '%1$s by %2$s', 'core-understrap' ), $the_theme->get( 'Name' ),
							'<a href="http://understrap.com/">understrap.com</a> ' ); ?>
							(<?php printf( __( 'Version: %1$s', 'core-understrap' ), $the_theme->get( 'Version' ) ); ?>)

						</div><!-- .site-info -->

					</footer><!-- #colophon -->

				</div><!-- col end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- wrapper end -->
	
<a href="#top-position" class="up-link" data-0="opacity:0;" data-200="opacity:1"><i class="fa fa-angle-up fa-3x" aria-hidden="true"></i></a>

</div><!-- #page end -->

<?php wp_footer(); ?>

<script>
jQuery(document).ready(function(){

		// scroll body to 0px on click
		jQuery('a.up-link').click(function () {
			jQuery('html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
	});


</script>

</body>

</html>
