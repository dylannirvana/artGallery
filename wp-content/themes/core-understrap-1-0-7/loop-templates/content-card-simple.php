<?php
/**
 * Card patrial template responsible to show individual posts in home.php page.
 *
 * @package understrap
 */

?>


<div class="card border-0 shadow">
<?php if ( has_post_thumbnail() ) : ?>
	<div class="wrapper-darkest">
				<?php
				$alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
				?>
				<a class="wrapper-darkest card-bck img-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>);
"></a>
</div>
			<?php endif; ?>
  <div class="card-block px-5">
  				
    <?php the_title( sprintf( '<h2 class="entry-title card-title"><a href="%s" rel="bookmark">',
				esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <p class="card-text">				<?php
				echo understrap_excerpt_with_length( $post->ID, 10 );
				?></p>
  </div>
</div>
