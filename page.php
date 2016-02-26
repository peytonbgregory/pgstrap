<?php
/**
 * The template for displaying all pages.
 */
get_header(); ?>
<div class="container-fluid page-page">
	<?php get_template_part('includes/fluidstart'); ?>
                <div class="col-md-8">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php get_template_part( 'content', 'page' ); ?>
                            <?php endwhile; // end of the loop. ?>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-md-8 -->
                <div class="col-md-4">
                	<?php get_sidebar(); ?>
                </div>
	<?php get_template_part('includes/fluidend'); ?>
</div>
<?php get_footer(); ?>