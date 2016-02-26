<?php
/**
 * The main template file.
 *
 */
get_header(); ?>
<div class="container-fluid category-page">
	<?php get_template_part('includes/fluidstart'); ?>
			<div class="col-md-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
                    <div  class="row">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-md-3">
                                <a href="<?php the_permalink (); ?>">
                                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive blog-thumbnail')); ?>
                                </a>
                            </div>
                            <div class="col-md-9">
                            	<h3 class="blog-title"><?php if (strlen($post->post_title) > 40) {
echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . '...'; } else {
the_title();
} ?></h3>
                            	<?php the_excerpt(); ?>
                                <p class="blog-meta"><?php the_date(); ?> | Posted in: <?php the_category(); ?> </p>
                            </div>
							
			
						<?php endwhile; ?>
			
					
			
					<?php else : ?>
						<?php get_template_part( 'no-results', 'index' ); ?>
					<?php endif; ?>
					</div><!-- row -->
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-md-8 -->
			
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div><!-- .col-md-4 -->
		<?php get_template_part('includes/fluidend'); ?>
</div>
<?php get_footer(); ?>