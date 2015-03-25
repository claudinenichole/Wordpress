<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="video-format">
	<div class="media-container">
		<?php $video_code =  get_post_meta( get_the_ID(), 'video_url', true );  ?>	
		<?php $embed_code = wp_oembed_get($video_code);
		 echo $embed_code;  ?>
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
