<?php
/**
 * Template Name: Frontpage One
 *
 * This template can be used to the default frontpage /blogview
 *
 * @package understrap
 */
get_header();
?>
<?php $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'large') ); ?>


	<!-- ******************* The Hero Widget Area ******************* -->

	<div class="wrapper wrapper-default wrapper-variable-lg wrapper-no-padding-top wrapper-50vh  d-flex align-content-end flex-wrap">

		<div class="container">

			<div class="row">

				<div class="col-md-10 offset-md-1">

					
				<?php
				the_content();
				?>

				</div>
			</div>
		</div>

	</div><!-- #wrapper-static-hero -->

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="wrapper wrapper-default wrapper-66vh img-cover " style="background-image:url(<?php echo $feat_image_url ?>);">


	</div>
	<?php endif; ?>

<div class="wrapper wrapper-lightest wrapper-lg" id="wrapper-home">

	<div class="container" id="content" tabindex="-1">

			<div class="row mt-4">

				<div class="col-md-10 offset-md-1 text-right">
					<p class="mr-3"><?php echo '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">More from our Blog <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>'; ?></p>
				</div>

				<main class="site-main col-md-10 offset-md-1" id="main">

					<div class="card-columns">

					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'paged' => $paged );
					$wp_query = new WP_Query($args);
					while ( have_posts() ) : the_post(); ?>
   
							<?php

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'loop-templates/content', 'card-simple', get_post_format() );
							?>
					<?php endwhile; ?>

					</div>



				</main><!-- #main -->



			</div>
	</div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
