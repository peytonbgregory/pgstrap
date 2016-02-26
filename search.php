<?php
/**
 * The template for displaying Search Results pages. 
 */

get_header(); ?>
<div class="container-fluid search-page">
	<?php get_template_part('includes/fluidstart'); ?>
			<div class="col-md-8">
				<section id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
			
					<?php if ( have_posts() ) : ?>
			
						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->
			
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
                        <div class="row">
							<?php get_template_part('content');?>
						<?php endwhile; ?>
			
						
			
					<?php else : ?>
			
						<?php get_template_part( 'no-results', 'search' ); ?>
			
					<?php endif; ?>
			<div class="text-center paginate-container"><?php echo paginate_links( $args ); ?></div>
					</main><!-- #main -->
				</section><!-- #primary -->
			</div><!-- .col-md-8 -->
			
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div><!-- .col-md-4 -->
	<?php get_template_part('includes/fluidend'); ?>
</div>
<?php get_footer(); ?>