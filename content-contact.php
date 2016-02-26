<?php
/**
 * Template Name: Page - Contact
 * The template used for displaying page content in page.php
 */
get_header(); ?>

<div class="container-fluid contact-page">
	<?php get_template_part('includes/fluidstart'); ?>
			<div class="col-md-4" id="contact-container">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
					
					<?php if ( have_posts() ) : ?>
					
						<?php while ( have_posts() ) : the_post(); ?>
			
							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part('content', get_post_format());
							?>
			
						<?php endwhile; ?>
			
					
			
					<?php else : ?>
						<?php get_template_part( 'no-results', 'index' ); ?>
					<?php endif; ?>
			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-md-4 -->
            <div class="col-md-4" id="map-container">
            	<?php dynamic_sidebar('google-map'); ?>
            </div>
            <div class="col-md-4" id="form-container">
            	<?php dynamic_sidebar('sidebar-1'); ?>
            </div>

	</div><!-- .container -->
    </div><!-- container-fluid -->
    <?php get_template_part('includes/fluidend'); ?>
</div>

<?php get_footer(); ?>