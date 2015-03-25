<?php
/**
 * The template for displaying all single posts.
 *
 * @package fabthemes
 */

get_header(); ?>
<div class="container"> <div class="row"> 
	<div class="col-md-12">
		<div class="outercover">
			<div class="row">

			<div class="feature-box col-md-12">
				<?php $format = get_post_format(); ?>

				<?php if ( ! get_post_format() ) : ?>

					<?php 
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 1200, 0, true,true,true ); //resize & crop the image
					?>
					<?php if($image) : ?>
							<img class="post-thumb" src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
					<?php endif; ?>


				<?php elseif ($format == 'audio') : ?>

					<?php 
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 1200, 0, true,true,true ); //resize & crop the image
					?>
					<?php if($image) : ?>
							<img class="post-thumb" src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
					<?php endif; ?>
					<div class="audio-format">
						<div class="audioplayer">
							<?php $audiolink = get_post_meta( get_the_ID(), 'audio_url', true ); ?>
							<?php echo do_shortcode('[audio src="'.$audiolink.'"]'); ?>
						</div>	
					</div>

				<?php elseif ($format == 'video') : ?>

					<div class="video-format">
							<div class="media-container">
								<?php $video_code =  get_post_meta( get_the_ID(), 'video_url', true );  ?>	
								<?php $embed_code = wp_oembed_get($video_code);
								 echo $embed_code;  ?>
							</div>
					</div>

				<?php elseif ($format == 'gallery') : ?>

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
										<a href='<?php echo $link?>'> <img src="<?php echo $image; ?>" /> </a>
									</li>
							<?php } ?>
							</ul>
							</div>
						</div>

				<?php elseif ($format == 'quote') : ?>

					<div class="quote-format">
						<div class="entry-content">
							<p><?php echo get_post_meta( get_the_ID(), 'quote_text', true ); ?></p>
							<p class="subtext"> <?php echo get_post_meta( get_the_ID(), 'quote_author', true ); ?> </p> 
						</div><!-- .entry-content -->
					</div>

	
				<?php endif; ?>


				
			</div>

			<div class="col-md-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'single' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>

			<?php get_sidebar(); ?>

			</div>
		</div>
	</div>
</div></div>
<?php get_footer(); ?>