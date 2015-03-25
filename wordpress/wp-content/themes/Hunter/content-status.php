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
		<span> <i class="fa fa-heart"></i> <?php if( function_exists('zilla_likes') ) zilla_likes(); ?> </span>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
