<?php
/**
 * The template for displaying search results pages.
 *
 * @package fabthemes
 */

get_header(); ?>
<div class="container"> <div class="row"> 
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="pages-header">
				<div class="col-md-12">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'fabthemes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</div>
			</header><!-- .page-header -->
			<div class="gridbox">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="mgrid col-md-4 col-sm-6 col-xs-12 ">
					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					?>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="col-md-12">
				<?php kriesi_pagination(); ?>
			</div>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
</div></div>
<?php get_footer(); ?>
