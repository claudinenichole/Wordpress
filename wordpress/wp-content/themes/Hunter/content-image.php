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
			<a class="fancypop" href="<?php echo $img_url ?>"> <img class="post-thumb" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
	<?php endif; ?>

</article><!-- #post-## -->
