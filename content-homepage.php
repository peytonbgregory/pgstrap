<?php
/**
 * Template Name: Homepage
 * The template used for displaying page content in page.php
 */
get_header(); ?>
<?php $options = get_option( 'theme_settings' ); ?>

<!-- Begining of Section-->
<section class="container-fluid" id="one">
	<?php get_template_part('includes/fluidstart'); ?>
        <div class="col-md-12 col-sm-12 slideshow hidden-xs">
            <?php dynamic_sidebar ('slideshow'); ?>
        </div>            
    <?php get_template_part('includes/fluidend'); ?>
</section><!-- fluid -->
<!-- End of Section-->

<!-- Begining of Section-->
<section class="container-fluid" id="two">
	<?php get_template_part('includes/fluidstart'); ?>
        <div class="col-md-12 col-xs-12">
            <div class="entry-content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
            </div>
        </div>             
    <?php get_template_part('includes/fluidend'); ?>
     
</section><!-- fluid -->
<!-- End of Section-->

<!-- Begining of Section-->
<section class="container-fluid" id="three">
	<?php get_template_part('includes/fluidend'); ?>
        <?php dynamic_sidebar ('section-three'); ?>             
    <?php get_template_part('includes/fluidend'); ?>
    
</section><!-- fluid -->
<!-- End of Section-->
<?php get_footer(); ?>