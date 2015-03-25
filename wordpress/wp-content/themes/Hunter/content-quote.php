<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="quote-format">
		<div class="entry-content">
			<p><?php echo get_post_meta( get_the_ID(), 'quote_text', true ); ?></p>
			<p class="subtext"><a href="<?php the_permalink(); ?>">  <?php echo get_post_meta( get_the_ID(), 'quote_author', true ); ?> </a> </p> 
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
