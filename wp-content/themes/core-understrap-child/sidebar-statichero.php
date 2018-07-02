<?php
/**
 * Static hero sidebar setup.
 *
 * @package understrap
 */

?>
<?php if ( is_active_sidebar( 'statichero' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div class="wrapper wrapper-default wrapper-variable-lg wrapper-no-padding-top">

		<div class="container">

			<div class="row justify-content-center">

				<div class="col-md-10">

					<?php dynamic_sidebar( 'statichero' ); ?>

				</div>

			</div>

		</div>

	</div><!-- #wrapper-static-hero -->

<?php endif; ?>
