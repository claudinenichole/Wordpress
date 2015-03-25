<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="link-format">
<a href="<?php echo get_post_meta( get_the_ID(), 'link_url', true ); ?>">
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<p class="subtext"><?php echo get_post_meta( get_the_ID(), 'link_text', true ); ?>  </p> 
	</div><!-- .entry-content -->
</a>
</div>
</article><!-- #post-## -->
