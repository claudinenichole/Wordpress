<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="gallery-format">
		<?php 
		$gallery = get_post_gallery( $post, false );
		$ids = explode( ",", $gallery['ids'] ); ?>
		<div class="flexslider">
		<ul class="slides">
		<?php 	foreach( $ids as $id ) {
				$link   = wp_get_attachment_url( $id );
				$img_url  = wp_get_attachment_url( $id, "large");
				$image = aq_resize( $img_url, 750, 500, true ); ?>
				
				<li>
					<a class="fancypop" href='<?php echo $link?>'> <img src="<?php echo $image; ?>" /> </a>
				</li>
		<?php } ?>
		</ul>
		</div>
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
</div>
</article><!-- #post-## -->
