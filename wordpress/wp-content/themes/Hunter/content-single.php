<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php //fabthemes_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
	
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'fabthemes' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
			<div class="single-meta">
				<ul>
					<li> <i class="fa fa-user"></i> <?php echo _e( 'Posted by', 'fabthemes' ); ?> <?php the_author(); ?> </li>
					<li> <i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?> </li>
					<li> <i class="fa fa-folder"></i> <?php the_category(', '); ?></li>
					<li><i class="fa fa-heart"></i> <?php if( function_exists('zilla_likes') ) zilla_likes(); ?></li>
				</ul>
			</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->