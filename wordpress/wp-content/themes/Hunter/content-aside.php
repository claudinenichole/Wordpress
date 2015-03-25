<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<span> <i class="fa fa-comment"></i> <?php comments_number( '0', '1', '%' ); ?></span>
		<span> <i class="fa fa-heart"></i> <?php if( function_exists('zilla_likes') ) zilla_likes(); ?> </span>
		<span class="read"> <i class="fa fa-plus"></i>  <a href="<?php the_permalink(); ?>"> <?php _e( 'Read More', 'fabthemes' );?>  </a> </span>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
