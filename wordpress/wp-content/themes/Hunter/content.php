<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
		$image = aq_resize( $img_url, 768, 0, true,true,true ); //resize & crop the image
	?>
	<?php if($image) : ?>
			<a href="<?php the_permalink(); ?>"> <img class="post-thumb" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
	<?php endif; ?>

	<header class="entry-header">
		<div class="entry-meta">
			<?php the_time('F j, Y'); ?> 
		</div><!-- .entry-meta -->
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<span> <i class="fa fa-comment"></i> <?php comments_number( '0', '1', '%' ); ?></span>
		<span> <i class="fa fa-heart"></i> <?php if( function_exists('zilla_likes') ) zilla_likes(); ?> </span>
		<span class="read"> <i class="fa fa-plus"></i>  <a href="<?php the_permalink(); ?>"> <?php _e( 'Read More', 'fabthemes' );?>  </a> </span>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
