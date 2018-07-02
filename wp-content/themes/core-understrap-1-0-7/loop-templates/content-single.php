<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'large') );
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="container-fluid" id="content" tabindex="-1">

		<?php if ( has_post_thumbnail() ) : ?>

			<div class="row">	

				<div class="col-md-12 wrapper-no-padding">

					<div class="entry-image-hero" style="background-image:url(<?php echo $feat_image_url ?>);">

					</div>

				</div>

			</div>

		<?php endif; ?>

	</div>

	<div class="container">

		<div class="row wrapper-variable-lg justify-content-center">

			<header class="col-md-4 offset-md-1">

			<div class="entry-header">

				<?php the_title( sprintf( '<h1 class="entry-title display-4">', esc_url( get_permalink() ) ),'</h1>' ); ?>

					<div class="entry-meta">
						
					<!-- Showing the value from custom field "meta-description" -->	
					<?php $meta_value = get_post_meta( $post->ID, 'meta-description', true ); 
			            if  (!empty( $meta_value )) {
			            	echo '<div class="meta-description">' . $meta_value . '</div>';}
			            else {} ?>

			           
						
						<?php if ( 'post' == get_post_type() ) : ?>
						
							<?php understrap_posted_on(); ?><!-- Add premade meta conent from understrap_posted_on function -->
							
							<?php understrap_entry_footer(); ?>
							
						<?php endif; ?>

					</div><!-- .entry-meta -->

					<div class="entry-post-nav">
					<?php
						$next_post = get_next_post();
						if (!empty( $next_post )): ?>
							<?php next_post_link('<div class=" entry-post-nav-next float-xs-left"><i class="fa fa-angle-double-left" aria-hidden="true"></i> %link</div>'); ?> 
					<?php endif ?>

					<?php
					$prev_post = get_previous_post();
					if (!empty( $prev_post )): ?>				
							<?php previous_post_link('<div class="entry-post-nav-prev float-xs-right">%link <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>'); ?> 
					<?php endif ?>
					</div>

				<?php get_sidebar( 'left' ); ?>

			</header><!-- .entry-header -->

			<div class="col-md-6 entry-content">

				<?php
					the_content();
				?>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'core-understrap' ),
					'after'  => '</div>',
				) );
				?>

			</div><!-- .entry-content -->

		</div>

	</div>

	</article><!-- #post-## -->

	<div class="container">

		<?php if ( comments_open() ): ?>

								<div class="row justify-content-center">

									<div class="col-md-10">

										<?php understrap_post_nav(); ?>

									</div>

								</div>

								<div class="row wrapper-variable-lg  justify-content-center">

									<?php if (is_single() ): ?>

									<div class="col-md-4">

										<?php get_template_part( 'global-templates/author-loop'); ?>

									</div>

									<?php endif; ?>

									<div class="<?php if (is_single() ): ?>col-md-6<?php else : ?>col-md-10 offset-md-1<?php endif; ?>">
										<?php
										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;
										?>
									</div>

								</div>

		<?php endif; ?>