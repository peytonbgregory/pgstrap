<?php
/**
 * Template Name: Page - Full width
 * The template used for displaying page content in page.php
 */
get_header(); ?>
<div class="container-fluid full-width-page">
	<?php get_template_part('includes/fluidstart'); ?>

                <div class="col-md-12">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php get_template_part( 'content', 'page' ); ?>
                            <?php endwhile; // end of the loop. ?>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-md-8 -->

<?php get_template_part('includes/fluidend'); ?>
</div>
<?php get_footer(); ?>